<?php

require ('Admin.php');
require ('User.php');

//Create user
$username = new User($username='Melissa');

//Create Admin
$Admin = new Admin ($username='Shristhy');

//invoke Admin
$Admin->editUser();






?>