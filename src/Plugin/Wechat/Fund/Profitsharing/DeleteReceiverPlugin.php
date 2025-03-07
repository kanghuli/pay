<?php

declare(strict_types=1);

namespace Yansongda\Pay\Plugin\Wechat\Fund\Profitsharing;

use Yansongda\Pay\Pay;
use Yansongda\Pay\Plugin\Wechat\GeneralPlugin;
use Yansongda\Pay\Rocket;

class DeleteReceiverPlugin extends GeneralPlugin
{
    /**
     * @throws \Yansongda\Pay\Exception\ContainerException
     * @throws \Yansongda\Pay\Exception\ServiceNotFoundException
     */
    protected function doSomething(Rocket $rocket): void
    {
        $config = get_wechat_config($rocket->getParams());

        $wechatId = [
            'appid' => $config->get('mp_app_id'),
        ];

        if (Pay::MODE_SERVICE == $config->get('mode')) {
            $wechatId['sub_mchid'] = $rocket->getPayload()
                ->get('sub_mchid', $config->get('sub_mch_id', ''));
        }

        $rocket->mergePayload($wechatId);
    }

    protected function getUri(Rocket $rocket): string
    {
        return 'v3/profitsharing/receivers/delete';
    }
}
