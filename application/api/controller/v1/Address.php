<?php


namespace app\api\controller\v1;


use app\api\model\AddressModel;

class Address
{

    public function read($id){
        $address = AddressModel::getAddress($id);
        if (empty($address)) {
            return json(["error" => "信息不存在"],404);
        } else {
            return json($address);
        }
    }

}