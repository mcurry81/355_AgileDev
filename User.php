<?php
/* User class
*
*/

class User {
	//declare private variables
	protected $username ;
	protected $password ;
	protected $userId ;
	protected $email ;
	protected $loggedIn = false;

	//define a class constructor to accept username, userId, email, and password as parameters
	function __construct($username, $password, $userId, $email) {
		//initialize our variables
		$this->username=$username;
		$this->userId=$userId;
		$this->email=$email;
		$this->password=$password;
		
	}
	//method to determine if user credentials match correctly then is logged in
	function Login($username, $password){
			if ($username == "Admin" && $password == "blah") {
				echo "<p>$username is logged in! </p>";
				$loggedIn=true;
			} else {
				echo "<p> Login Error! </p>";

			}

		
		}
		
	//logout method to reset all variables back to defaults
	function LogOut() {
		unset($user);
		$loggedIn=false;
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

	
	

}
?>