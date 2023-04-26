<?php


namespace KangDev\MeituanDispatch;


class v2 extends Api
{

    /**
     * getAccessToken
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function token(array $params)
    {
        return $this->request('apps/v2/token', $params,'json');
    }

    /**
     * jscode2session
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function jscode2session(array $params)
    {
        return $this->request('apps/v2/jscode2session', $params,'json');
    }

    /**
     * set_user_storage
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function set_user_storage(array $params)
    {
        return $this->request('apps/set_user_storage', $params,'json');
    }

    /**
     * remove_user_storage
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function remove_user_storage(array $params)
    {
        return $this->request('apps/remove_user_storage', $params,'json');
    }

    /**
     * generate
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function generate(array $params)
    {
        return $this->request('apps/url_link/generate', $params,'json');
    }

    /**
     * query_info
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function query_info(array $params)
    {
        return $this->request('apps/url_link/query_info', $params,'json');
    }

    /**
     * query_quota
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function query_quota(array $params)
    {
        return $this->request('apps/url_link/query_quota', $params,'json');
    }

    /**
     * customer_service_url
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function customer_service_url(array $params)
    {
        return $this->request('apps/chat/customer_service_url', $params,'json');
    }

    /**
     * qrcode
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function qrcode(array $params)
    {
        return $this->request('apps/qrcode', $params,'json');
    }

    /**
     * antidirt
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function antidirt(array $params)
    {
        return $this->request('v2/tags/text/antidirt', $params,'json');
    }

    /**
     * image
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function image(array $params)
    {
        return $this->request('v2/tags/image/', $params,'json');
    }

    /**
     * imageV2
     *
     * @param array $params
     * @return mixed
     * @throws MeituanDispatchException
     */
    public function image2(array $params)
    {
        return $this->request('apps/censor/image', $params,'json');
    }


}