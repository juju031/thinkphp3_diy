<?php
namespace Common\Model;
use Think\Model;

class UserModel extends Model{
    
    protected $autoCheckFields = false;

    public function zs()
    {
        $Dao = $this->M('tz_user');
        return $Dao->count();
    }

    public function slist()
    {
    	$user = $this->M('tz_user');
    	return $user->select();
    }

}  
