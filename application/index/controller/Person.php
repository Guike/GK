<?php
namespace app\index\controller;
use think\Controller;
class Person extends Controller {
    public function AddData()
    {
        //$conn = Db::connect('db_config1');
        $openID = trim($_POST['openID']);
        $name = mb_convert_encoding(trim($_POST['name']), 'gbk', 'utf-8');
        $birthday = trim($_POST['birthday']);
        $gender = trim($_POST['gender']);
        $residence = mb_convert_encoding(trim($_POST['residence']), 'gbk', 'utf-8');
        $phoneNumber = trim($_POST['phoneNumber']);
        $person = new \app\index\model\Person;
        if($person->where('openID', $openID)->find()) {
            echo 'Fail';
            exit();
        }
        $data = ['openID' => $openID, 'name' => $name, 'gender' => $gender, 'birthday' => $birthday, 'residence' => $residence, 'phoneNumber' => $phoneNumber];
        $person->data($data);
        $person->save();
        echo 'Succeed';     
    }
    
}
    