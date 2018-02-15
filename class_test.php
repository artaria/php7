<?php

class Member
{
    private $username = "";
    public $islogined = false;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function login()
    {
        $this->islogined = true;
    }

    public function logout()
    {
        $this->islogined = false;
    }

    public function userState()
    {
        return $this->username . " is " . ($this->islogined ? "logined" : "logout");
    }
}

class Administrator extends Member
{

    public function setUsername($username)
    {
        echo "<br>this is admin<br>";
        parent::setUsername($username);
    }



    public function createArticle($title)
    {
        return "<br>the new article with title {$title} created by {$this->getUsername()}";
    }

    public function banUser(Member $user)
    {
        return "<br>the user with username {$user->getUsername()} baned with administrator";
    }
}

/*$user=new Member();
$user->username = "mehdi";
$user->login();
var_dump($user);
echo $user->userState();*/

$user2 = new Member();
$user2->setUsername("ali");
echo $user2->userState();

$admin = new Administrator();
$admin->setUsername("admin");
echo $admin->userState();


