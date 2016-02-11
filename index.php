<?php

require_once 'core/init.php';

$user = DB::getInstance()->insert('users', array(
        'username' => 'John',
        'password' => 'pass',
        'salt'     => 'salt'
));
