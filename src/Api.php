<?php


namespace KangDev\MeituanDispatch;


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
     * @throws MeituanDispatchException
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

        $this->checkErrorAndThrow($result);

        return $result;
    }

    /**
     * @param $result
     * @throws MeituanDispatchException
     */
    private function checkErrorAndThrow($result)
    {
        if (!$result || $result['err_no'] != 0) {
            throw new MeituanDispatchException($result['err_tips'], $result['err_no']);
        }
    }
}