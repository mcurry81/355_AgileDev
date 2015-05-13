<?php

//require the class   
require('User.php');

//instantiate a user
$user1 = new User("Admin", "blah", 1234, "admin@mail.com");
$user2 = new User("Mike", "Password01", 1235, "mike@mail.com");

//print if user is logged in
$user1->Login("Admin", "blah");
$user2->Login("Mike", "Password01");

//logout user
$user1->LogOut();
$user2->LogOut();












?>