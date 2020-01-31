<?php
//Your practice code
class User {
    private $firstname;

    public function setFirstName($str){
        $this -> firstname = $str;
    }
    public function getFirstName()
    {
        return $this -> firstName;
    }
}

$user1 = new User();
$user1 -> setFirstName("Joe");
echo $user1 -> getFirstName();
