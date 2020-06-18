<?php
/**
 * 工具: PhpStorm
 * 作者: zhAngHao
 * 邮箱: 805131398@qq.com
 * 日期: 2020/4/2
 * 时间: 15:12
 */

namespace app\index\controller;


use app\BaseController;

class Index extends BaseController
{
    public function index(){
//        dd(222);
        return view('index',[]);
    }
}
