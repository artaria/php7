<?php
abstract class Membership{
    protected $email;
    protected $password;
    public function __construct($email,$password)
    {
        $this->email=$email;
        $this->password=$password;

    }

    public function info()
    {
        echo $this->data();
    }
    abstract protected function data();

}

class User extends Membership{


    protected function data()
    {
        return "user: ".$this->email;
    }
}
$user=new User("mahdi.niknami@gmail.com","123456");
$user->info();


