<?php
namespace app\index\controller;
use think\Controller;
use think\ImageUpload;
class Unit extends Controller {
    public function AddData()
    {   
        //$conn = Db::connect('db_config1');
        $code = trim($_POST['code']);
        $unitName = mb_convert_encoding(trim($_POST['unitName']), 'gbk', 'utf-8');
        $contactName = mb_convert_encoding(trim($_POST['contactName']), 'gbk', 'utf-8');
        $address = mb_convert_encoding(trim($_POST['address']), 'gbk', 'utf-8');
        $phoneNumber = trim($_POST['phoneNumber']);
        $unit = new \app\index\model\Unit;
        //if($unit->where('code', $code)->find()){
            //echo 'Fail';
            //exit();
        //}
        $id = $unit->max('id') + 1;
        $imageupload = new ImageUpload('license', strval($id).'_'.$code);
        if(!$imageupload->savaImage('e:/phpfile/image/')) {
            echo "Fail";
            exit();
        }
        $data = ['unitName' => $unitName, 'code' => $code, 'address' => $address, 'contactName' => $contactName, 'phoneNumber' => $phoneNumber, 'license' => $imageupload->getPath()];
        $unit->data($data);
        $unit->save();
        echo 'Succeed';
    }
    
}
    