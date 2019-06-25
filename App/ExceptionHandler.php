<?php

/**
 * Description
 * User: duanwenjie
 * Date: 2019/6/22
 * Time: 9:37 AM
 */
namespace App;

use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use Throwable;
class ExceptionHandler
{
    public static function handle(Throwable $exception, Request $request, Response $response)
    {
//        var_dump("exception:".$exception->getMessage()."/n request: ".$request."/n respond: ".$response);
        var_dump(" \r\n error:".$exception->getMessage()."\r\n file: ".$exception->getFile()."\r\n line: ".$exception->getLine());
    }

}