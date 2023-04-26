<?php


namespace KangDev\DouyinDispatch;


use Hanson\Foundation\AbstractAPI;

class Api extends AbstractAPI
{

    /**
     * @var string
     */
    private $appid;

    /**
     * @var string
     */
    private $secret;

    const URL = 'https://developer.toutiao.com/api/';

    public function __construct(string $appid, string $secret)
    {
        $this->appid = $appid;
        $this->secret = $secret;
    }

    /**
     * @param string $method
     * @param array $params
     * @return mixed
     * @throws DouyinDispatchException
     */
    public function request(string $method, array $params,string $type = "post")
    {
        $params = array_merge($params, [
            'appid' => $this->appid,
            'secret' => $this->secret,
        ]);

        $http = $this->getHttp();

        switch ($type){
            case "json":
                $response = $http->json(self::URL . $method, $params);
                break;
            case "post":
                $response = $http->post(self::URL . $method, $params);
                break;
            case "get":
                $response = $http->get(self::URL . $method, $params);
                break;
            default:
                $response = $http->post(self::URL . $method, $params);
        }

        $result = json_decode(strval($response->getBody()), true);

        return $result;
    }

}