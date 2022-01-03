<?php
require_once __DIR__ ."/vendor/autoload.php";
use TestApp\http\Controller\UserController;
use TestApp\User;

$user = new UserController("abduljeleel","abduljeleelng@gmail.com", "password");
$testUser = new User();

$userdetaild = $user->getUser();
echo "<br />";
echo $userdetaild . "\n";;
echo "<br />";
$name = $user->user();
echo "<br />";
echo $user->parent_Service();


echo "<br />";
echo $name;

date_default_timezone_set('Africa/Lagos');
$time = date('F j, Y, g:i a e O');
$message = " Error message on -  $time    \n";
error_log($message, 3, 'logs/errors.log');




