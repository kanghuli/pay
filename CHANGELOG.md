## v3.1.2

### fixed

- fix: alipay 中 event dispatch provider 是 wechat 的问题 #595

## v3.1.1

### fixed

- fix: 设置 container，强制更新 config 后 container 不是设置的 container 的问题 #591

## v3.1.0

兼容 v3.0 版本，推荐升级(#579)

### dependency

- delete: 移除 `php-di/php-di` 依赖。如果您使用的框架非 `hyperf`, `laravel` 或 没有指定 `ContainerInterface`，仍需手动安装 `composer require php-di/php-di`
- delete: 移除 `guzzlehttp/guzzle` 依赖。如果没有指定 `\Yansongda\Pay\Contract\HttpClientInterface` 仍需手动安装 `composer require guzzlehttp/guzzle`
- upgrade: 升级 `yansongda/supports` 到 `~v3.2.0`
- upgrade: 升级 `php` 最低版本到 `7.4.0`

### fixed

- fix: 解决 php8.1 下 deprecated 的提示

### kernel

- refactor: 自动识别 `hyperf`, `laravel` 框架，使用相应的 `container` 减少内存占用
- refactor: 完全支持 `psr11`，可手动传入 `ContainerInterface` 使用
- changed: `Pay::config(array $config = [], $container = null)` 方法第二个参数增加为 $container，可手动传入 `ContainerInterface`/`Closure`。注意 `Closure` 需最终返回一个 `ContainerInterface` 的实例。

## v3.0.27

### fixed

- fix: 添加分账接受人姓名加密字段错误 (#566)

## v3.0.26

### added

- feat: 支持 psr/log 2.x and 3.x (#562)

## v3.0.25

### fixed

- fix: 支持分账传递姓名 (#559)

## v3.0.24

### added

- feat: 支持使用小程序等其他类型转账 (#552)

## v3.0.23

### fixed

- fix: 未设置微信公钥证书时，加密不生效的问题 (#549)

## v3.0.22

### fixed

- fix: 微信分账传递姓名时未加密的问题 (#547)

## v3.0.21

### added

- feat: 微信转账快捷方式与加密方式支持 (#542)

## v3.0.20

### updated

- chore: 完善支付宝响应错误时的异常信息 (#530)

## v3.0.19

### fixed

- fix: 支付宝 system.oauth.token 请求参数错误 (#528)

## v3.0.18

### added

- feat: 电商收付通的退款使用 _type 增加多类型 appid (#518)

## v3.0.17

### added

- feat: 增加电商收付通的退款相关插件 (#513)

## v3.0.16

### fixed

- fixed: app 支付调起签名问题 (#1389476)

## v3.0.15

### fixed

- fixed: 下载对账单时响应解析 (#df27f95)

## v3.0.14

### fixed

- fixed: app 支付调起签名中参数大小写问题 (#7916fdd)

## v3.0.13

### fixed

- fixed: app 支付调起签名中时间戳参数大小写问题 (#510)

## v3.0.12

### fixed

- fixed: 微信小程序支付供应商模式 sub_appid 非必填 (#509)

## v3.0.11

### added

- feat: 微信 h5 支付支持关联 mini_app_id (#506)

## v3.0.10

### added

- feat: 服务商批量转账到零钱 (#503)

## v3.0.9

### added

- feat: 支持直连商户批量转账到零钱 (#501)

## v3.0.8

### fixed

- fix: 设置 bcscale 时支付宝根证书计算错误的问题 (#492, #494)

## v3.0.7

### fixed

- fix: 支付宝 wap/web 支付 get 方法时url拼接问题 (#488)

## v3.0.6

### optimized

- chore: 优化服务商模式小程序下单场景 (#487)

## v3.0.5

### fixed

- fix: 服务商模式交易查询 (#483)

## v3.0.4

### added

- feat: 支持服务商模式 (#479)
- feat: 支持微信服务商分账功能 (#480)

## v3.0.3

### added

- feat: 公钥证书增加 cer 后缀支持 (#d22e29a)

## v3.0.2

### fixed

- 修复微信支付关闭订单时报错问题 (#475)

## v3.0.1

### fixed

- 修复微信支付关闭订单时报错问题 (#475)
