<?php
namespace Home\Controller;
use Think\Controller;
//use Think\Controller\restController;
class CountmanageController extends Controller {
    /*
    *
    *
    */
     public function __construct()
    {
      # code...

      parent::__construct();
      if(!session('user')){
        //$this->ajaxReturn(array('code'=>-1,'message'=>'fail','data'=>'not login'));
        $this ->redirect('login/login',Null,0);
      }

    }
    public function countTable(){
      $this->display('countManage/countTable');
    }
}
