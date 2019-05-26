<?php


namespace app\api\model;


use think\Db;

class UserModel
{

    public static function getUserInfo($id) {
        $info = Db::query("select id,name,email,password from tbl_user where id=" .$id);
        return $info;
    }

}