<?php

/**
 * Description
 * User: duanwenjie
 * Date: 2019/6/21
 * Time: 4:04 PM
 */
namespace App\HttpController;
use App\ExceptionHandler;
use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\Http\Message\Status;
use Swoole\Exception;

class Index extends Base
{

    function index()
    {
        // TODO: Implement index() method.
//        $this->response()->write('hello world </br>');
//
//
////        $this->writeJson(Status::CODE_OK,'','操作成功');
//
//
//        $this->writeJson(Status::CODE_BAD_REQUEST,'','操作失败');
////        ExceptionHandler::handle();
//        return '/test';

        $request = $this->request()->getRequestParam();

        self::test($request);
    }

    function test($param)
    {
//        $this->response()->write($param);
        $this->writeJson(Status::CODE_OK,$param,'操作成功');
        return '/test1';
    }

    function test1()
    {
        $this->response()->write("我是 test2");
        return true;
    }
}