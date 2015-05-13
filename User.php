<?php
/* User class
*
*/

class User {
	//declare private variables
	private $username;
	private $password;
	private $userId;
	private $email;
	private $loggedIn = false;
	

	//define a class constructor to accept username, userId, email, and password as parameters
	function __construct($username = '',$password = '',$usesrId = '',$email = '') {
		//initialize our variables
		$this->username=$username;
		$this->userId=$userId;
		$this->email=$email;
		$this->password=$password;
		
	}
	//method to determine if user credentials match correctly then is logged in
	function isLoggedIn($username, $password) {
			$this->username="Admin";
			$this->password="blah";


		}
		//return ($this->username == $username && $this->password == $password);
		//method to log user out and reset all variables
	function isLoggedOut($username,$password,$userId,$email) {
		unset($username);
		$loggedIn = false;

	}
		

	function getUsername() {
		return $this->username;
	}

	function getUserId() {
		return $this->userId;
	}    

	function getEmail() {
		return $this->email;
	}
	function getPassword() {
		return $this->password;
	}

	function setEmail(){
		$this->email=$email;
	}

	function setPassword(){
		$this->password=$password;
	}
	function setUserName() {
		$this->username=$username;
	}

	/*public function getLogin() {
		$login = $this->username = $username && $this->password= $password;
		echo "<p>$this->username is logged in!</p>"
		if (  )

	}*/

	

}
?>