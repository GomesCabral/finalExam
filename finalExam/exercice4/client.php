<?php
require_once 'User.php';

$admin = new AdminUser('first-user', 'admin@hotmail.com', 'qwerty888');
$regular = new RegularUser('second-user', 'regular@hotmail.com', 'azerty222', 'cart');