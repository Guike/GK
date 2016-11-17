<?php
namespace app\index\controller;
use think\Controller;



class Test extends Controller
{
	public function Verify()
    {
        $data = trim($_POST['code']);
        //$this->validate($data,['captcha|验证码'=>'require|captcha']);
        if(!captcha_check($data)){
            echo "Fail";
        }
        else {
            echo "Succeed";
        }
    }

}
