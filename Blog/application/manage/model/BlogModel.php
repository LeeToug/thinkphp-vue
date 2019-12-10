<?php


namespace app\manage\model;


use think\Db;
use think\Model;

class BlogModel extends Model
{
    public static function getList($page='1',$limit='20'){
        $list = Db::name('blog')->where('is_del','0')->page($page,$limit)->column('id,title,create_time,update_time');
        return $list;
    }
}