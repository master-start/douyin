<?php


namespace KangDev\DouyinDispatch;


use Hanson\Foundation\Foundation;

/**
 * Class Dispatch
 * @package KangDev\DouyinDispatch
 *
 * @method array token($params)
 * @method array jscode2session($params)
 * @method array set_user_storage($params)
 * @method array remove_user_storage($params)
 * @method array generate($params)
 * @method array query_info($params)
 * @method array query_quota($params)
 * @method array customer_service_url($params)
 * @method array qrcode($params)
 * @method array antidirt($params)
 * @method array image($params)
 * @method array image2($params)
 */
class Dispatch extends Foundation
{

    private $order;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->order = new v2($config['appid'], $config['secret']);
    }

    public function __call($name, $arguments)
    {
        return $this->order->{$name}(...$arguments);
    }
}