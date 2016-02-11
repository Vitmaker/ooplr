<?php

require_once 'core/init.php';

$user = DB::getInstance()->update('users', 5, array(
        'username' => 'Craig',
        'password' => 'newpass'
));
