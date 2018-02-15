<?php
require "vendor/autoload.php";

use App\Components\{Filesystem,Http,Mail};
use App\Modules\Http as MHttp;

var_dump(new Filesystem());
var_dump(new Http());
var_dump(new Mail());

var_dump(new MHttp());