<?php


namespace Taokens\Teignore\Api;

use Taokens\Teignore\Tools\Golive;
use Taokens\Teignore\TenantGateWay;

class UserInfo extends TenantGateWay
{

    /**
     * SaaS获取用户信息
     * @param array $params
     * @return bool|string
     */
    public function getUserInfo(array $params = [])
    {
        return $this->setUrl(Golive::USER_GET_DETAIL)->send($params);
    }
}