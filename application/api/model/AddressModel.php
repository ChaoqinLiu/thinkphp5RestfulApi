<?php


namespace app\api\model;


use think\Db;

class AddressModel
{
    public static function getAddress($id){
        $rt = Db::query("select id, nation, province,city from tbl_address where id=" .$id);
        return $rt;
    }

}