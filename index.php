<?php
include_once 'vendor/autoload.php';
use App\Origin;
//include './src/Origin.php';//@todo pourquoi les deux ?

Origin::receive($_SERVER);