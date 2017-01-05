<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
        $user = $this->load('User','Model');
        $user->slist();
        echo N('db_query');
    }

    
}