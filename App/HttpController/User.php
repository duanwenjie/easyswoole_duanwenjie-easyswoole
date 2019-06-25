<?php
/**
 * Description
 * User: duanwenjie
 * Date: 2019/6/22
 * Time: 11:41 AM
 */

namespace App\HttpController;

use App\Utility\Pool\MysqlPool;
use EasySwoole\Http\AbstractInterface\Controller;

class User extends Base
{
    public function index()
    {
        $db = MysqlPool::defer();
        $sql = "SELECT * FROM user ";
        $result = $db->rawQuery( $sql ) ?? false;
        $this->returnJsonData($result);

    }

    public function getUser()
    {
        $param = $this->getParam();
        $this->returnJsonData($param);
    }

}