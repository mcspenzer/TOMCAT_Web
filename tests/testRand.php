<?php
// echo md5(rand());
require '../vendor/autoload.php';

$password = 'lifestealer';
$hash = PHPassLib\Hash\BCrypt::hash($password);
echo $hash;