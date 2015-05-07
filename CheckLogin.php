<?php

//require the class   
require('User.php');

//instantiate a user
$user1 = new User("Admin", "blah", 1234, "admin@mail.com");
$user2 = new User("Mike", "Password01", 1235, "mike@mail.com");

//print if user is logged in
if(!($user1->isLoggedIn())) {
	echo "<p>Login Error!</p>";
} else {
	echo "<p>" . $user1->getUserName() . " is logged in!</p>";
	$loggedIn = true;
}


//print if user is logged in
/*if(!($user2->isLoggedIn())) {
	echo "<p>Login Error!</p>";
} else {
	echo "<p>" . $user2->getUser() . " is logged in!</p>";
	$loggedIn = true;
}*/

/*if($user1->isLoggedIn()) {
	echo "<p>" . $user2->getUserName() . " is logged in!</p>";
	$loggedIn = true;
} else {
	echo "<p>Login Error!</p>";
}*/









?>