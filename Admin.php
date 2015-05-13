<?php
/*	admin extends user
*	admin has additional methods to editUser	
*/


class Admin extends User {
	function __construct($username = '', $userId = '', $email = '' $password = '', $accessLevel ='') {
	$this->username=$username;
	$this->userId=$userId;
	$this->email=$email;
	$this->password=$password;
	$this->accessLevel=$accessLevel;
}

	//setter and getter for accessLevel\
	function getLevel() {
		return $this->accessLevel;
	}
	function setLevel() {
		$this->accessLevel=$accessLevel;
	}

	function editUser($username)  {
		return $this->username;
		echo "<p>Editing $this->username</p>";
		
	}
}


?>