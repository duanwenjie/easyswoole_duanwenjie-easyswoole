<?php
/**
 * Description
 * User: duanwenjie
 * Date: 2019/6/25
 * Time: 10:48 AM
 */

namespace App\Utility\Pool;

use EasySwoole\Component\Pool\PoolObjectInterface;
use EasySwoole\Mysqli\Mysqli;
class MysqlConnection extends Mysqli implements PoolObjectInterface
{
    //unset 的时候执行
    function gc(){
        $this->resetDbStatus();
        $this->getMysqlClient()->close();
    }
    //使用后,free的时候会执行
    function objectRestore(){
        $this->resetDbStatus();
    }
    //使用前调用,当返回true，表示该对象可用。返回false，该对象失效，需要回收
    function beforeUse():bool {
        return $this->getMysqlClient()->connected;
    }

}