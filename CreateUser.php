<?php

require 'Admin.php';
//require 'User.php';

//Create user
$user1 = new User("Melissa", "something", 2345, "melissa@mail.com");

//Create Admin
$Admin1 = new Admin ("Shristhy", "supersecret", 9999, "shristhy@mail.com", "admin");


//invoke Admin
$Admin->editUser();






?>