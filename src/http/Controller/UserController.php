<?php
namespace TestApp\http\Controller;

class UserController extends Controller {
    protected $username, $emaill, $password;

    public function __construct($username, $emaill, $password){
        $this->username = $username;
        $this->emaill = $emaill;
        $this->password = $password;
    }

    public function __destruct()
    {
////        parent::__destruct(); // TODO: Change the autogenerated stub
//        echo "<br />";
//        echo "destruct child controller ";
    }

    public function getUser(){
        return "the user details \n Username is $this->username,\n email is $this->emaill, and password is $this->password ";
//        return $data;
    }

    public function user(){
        return "Abduljeleel";
    }
}


