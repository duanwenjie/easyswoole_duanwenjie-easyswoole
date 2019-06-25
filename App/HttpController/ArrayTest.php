<?php

/**
 * Description
 * User: duanwenjie
 * Date: 2019/6/22
 * Time: 3:14 PM
 */
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;

use EasySwoole\Spl\SplArray;
use EasySwoole\Spl\SplString;

class ArrayTest extends Controller
{
    public function index()
    {
        $data = [
            'fruit' => [
                "apple" => 1,
                "orange" => 2,
                "grap" => 4
            ],
            [
                "color" => [
                    "red" => 22,
                    "blue" => 9,
                    "green" => 6
                ]
            ]
        ];

        $splArr = new SplArray($data);
        var_dump($splArr->get('fruit.apple'));
        var_dump($splArr->getArrayCopy());
    }

    public function test()
    {
        $data = [
            'fruit' => [
                "apple" => 1,
                "orange" => 2,
                "grap" => 4
            ],
            [
                "color" => [
                    "red" => 22,
                    "blue" => 9,
                    "green" => 6
                ]
            ]
        ];
        $splArr = new SplArray($data);

        $arr = $splArr->column('apple');
        var_dump($splArr->__toString(),$arr);

        $this->returnJson('1','操作成功',$splArr);

    }

    public function test2()
    {
        $string = new SplString("你好,easyswoole");

        $string_arr = $string->explode(',');

        $this->returnJson('1','操作成功',$string_arr);
    }

    public function test3()
    {
        $string = new SplString("你好,easyswoole");

        $string_arr = $string->pad('20','***',2)->__toString();

        $this->returnJson('1','操作成功',[$string_arr]);
    }

    public function test4()
    {
        $string = new SplString("easyswoole,hello world");

        $string_ = $string->snake(',')->__toString();

        $this->returnJson('1','操作成功',[$string_]);
    }
}

