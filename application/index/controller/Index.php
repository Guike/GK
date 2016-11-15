<?php
namespace app\index\controller;

use app\index\model\person;
use app\index\model\unit;
use think\Controller;
use think\Db;
use think\ImageUpload;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function personTable()
    {
        return $this->fetch();
    }
    public function unitTable()
    {
        return $this->fetch();
    }
    public function test()
    {
        return $this->fetch();
    }
    public function InsertTablePerson()
    {
        //$conn = Db::connect('db_config1');
        // $openID = trim($_POST['openID']);
        $name = mb_convert_encoding(trim($_POST['name']), 'gbk', 'utf-8');
        // $birthday = trim($_POST['birthday']);
        // $gender = trim($_POST['gender']);
        // $residence = mb_convert_encoding(trim($_POST['residence']), 'gbk', 'utf-8');
        // $phoneNumber = trim($_POST['phoneNumber']);
        // $person = new person();
        // if ($person->where('openID', $openID)->find()) {
        //     echo 'Fail';
        //     exit();
        // }
        // $data = ['openID' => $openID, 'name' => $name, 'gender' => $gender, 'birthday' => $birthday, 'residence' => $residence, 'phoneNumber' => $phoneNumber];
        // $person->data($data);
        // $person->save();
        echo $name;
        //echo 'Succeed';
    }
    public function InsertTableUnit()
    {
        //$conn = Db::connect('db_config1');
        $code = trim($_POST['code']);
        $unitName = mb_convert_encoding(trim($_POST['unitName']), 'gbk', 'utf-8');
        $contactName = mb_convert_encoding(trim($_POST['contactName']), 'gbk', 'utf-8');
        $address = mb_convert_encoding(trim($_POST['address']), 'gbk', 'utf-8');
        $phoneNumber = trim($_POST['phoneNumber']);
        // $unit = new unit();
        // if ($unit->where('code', $code)->find()) {
        //     echo 'Fail';
        //     exit();
        // }
        // $imageupload = new ImageUpload('license', $code);
        // if (!$imageupload->savaImage('e:/phpfile/image/')) {
        //     echo "Fail";
        //     exit();
        // }
        // $data = ['unitName' => $unitName, 'code' => $code, 'address' => $address, 'contactName' => $contactName, 'phoneNumber' => $phoneNumber, 'license' => $imageupload->getPath()];
        // $unit->data($data);
        // $unit->save();
        echo 'Succeed';
    }
}
