# 抖音小程序OpenApi接口封装

## Install

```
composer require kangdev/douyin -vvv
```

# Usage

```php
<?php
$config = [
    'appid' => 'your-app-id',
    'secret' => 'your-secret',
    'debug' => true,
    'log' => [
        'name' => 'douyin',
        'file' => __DIR__ . '/douyin.log',
        'level' => 'debug',
        'permission' => 0777,
    ],
];

$dispatch = new \KangDev\MeituanDispatch\Dispatch($config);

// getAccessToken
$dispatch->token([
    'grant_type' => 'client_credential',
]);

//code2Session
$code = '';
$dispatch->jscode2session([
    'code'  => $code
]);

```