<?php

$password_hashed = password_hash('lifestealer', PASSWORD_DEFAULT);

echo $password_hashed;

// if (md5('lifestealer') == $password_hashed) {
//     echo 'Password match';
// } else {
//     echo 'Password invalid';
// }