<?php


namespace app\manage\controller;


use app\manage\model\BlogModel;
use think\Controller;

class Blog extends Controller
{
    public function getBlogList(){
        $start = time();
        $page = $_POST['page']?$_POST['page']:'1';
        $list = BlogModel::getList($page,20);

        $code = 0;
        $msg = '拉取成功';

        $end = time();
        return jsonData($code,$msg,$end-$start,$list);
    }
}