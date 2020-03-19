<?php
session_start();
ini_set('display_errors', 'On');
require_once("../src/vendor/autoload.php");

use App\Core\Core;

$core = new Core;
$core->run();
