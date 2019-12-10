<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/*
 * 返回统一格式
 */
function jsonData($code = '0',$msg = '',$time = '0',$data = '')
{
    return json_encode(['code' => $code,'msg'=>$msg,'time'=>$time,'data'=>$data],JSON_UNESCAPED_UNICODE);
}
