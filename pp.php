<?php

class User
{
    public $name;
    public $age;

    public function setAge($age)
    {
        $this->age = $age;
    }
}

$user1 = new User;
$user1->