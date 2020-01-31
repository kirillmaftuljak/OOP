<?php

//Your practice code
class User
{

    // The class properties.
    public $firstName;
    public $lastName;

    // A method that says hello to the user.
    public function hello()
    {
        return "hello, " . $this->firstName;
    }
}

$name = new User();

$name->firstName = 'Johnie';
$name->lastName = 'Roe';
