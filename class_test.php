<?php
class Member{
    public $username = "";
    public $islogined=false;

    public function login()
    {
        $this->islogined=true;
    }

    public function logout()
    {
        $this->islogined=false;
    }

    public function userState()
    {
        $state=$this->islogined ? "logined" : "logout";
        return $this->username." is ". ($this->islogined ? "logined" : "logout");
    }
}
class Administrator extends Member{
    public function createArticle($title)
    {
        return "<br>the new article with title {$title} created by {$this->username}";
    }

    public function banUser(Member $user)
    {
        return "<br>the user with username {$user->username} baned with administrator";
    }
}
/*$user=new Member();
$user->username = "mehdi";
$user->login();
var_dump($user);
echo $user->userState();*/
$user2=new Member();
$user2->username = "ali";

$admin=new Administrator();
$admin->username = "admin";
$admin->login();
echo $admin->userState();
echo $admin->createArticle("valentine");
echo $admin->banUser($user2);

