<?php

class Db
{
    protected $query;
    public $data;

    public function __construct($query)
    {
        $this->query = $query;

    }

    public function __set($name, $value)
    {
        $this->data[$name]=$value;
    }
    public function __get($name)
    {
        return $this->data[$name];
    }

    public function select()
    {
        $this->query .= "select ";
        return $this;
    }

    public function where()
    {
        $this->query .= "where ";
        return $this;
    }

    public function limit()
    {
        $this->query .= "limit ";
        return $this;
    }

    public function get()
    {
        return $this->query;
    }
}

$db = new Db("select * from student");

echo $db->select()->where()->limit()->get();
$db->created_at="2018.2.12";
$db->lastname = "asghari";
echo $db->lastname;