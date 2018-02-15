<?php
require "Model/User.php";
require "Factory/User.php";

use Factory\User as FU;
use Model\User as MU;

$user=new MU();
var_dump($user);