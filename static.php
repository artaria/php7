<?php

class Newdb
{
    static protected $query;

    static public function select()
    {
        self::$query .= " SELECT";
        return new self;
    }

    public function where()
    {
        self::$query .= " WHERE";
        return new self;
    }

    static public function limit()
    {
        self::$query .= " LIMIT";
        return new self;
    }

    public function get()
    {
        return self::$query;
    }
}

var_dump(Newdb::select()->where()->limit()->get());