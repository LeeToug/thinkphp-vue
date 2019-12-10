<?php

namespace app\manage\controller;

use think\Controller;

class Login extends Controller
{
    public function index(){
        $start = time();

        $postData = $_POST;

        if(!$postData['name']||!$postData['password']){
            return jsonData(201,'账号与密码都不能为空');
        }
        if($postData['name']!='admin'||$postData['password']!='admin'){
            return jsonData(201,'账号与密码不匹配');
        }

        $code = 0;
        $msg = '登录成功';

        $end = time();
        return jsonData($code,$msg,$end-$start);
    }
}