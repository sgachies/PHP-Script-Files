
<?php
include("connection.php");
//PDO-php data object
//constructor twice underscore __
class User{

//instance variable
private $db;
//created a constructor
public function __construct(){
//created a connetion object db
$this->db =  new Connection();
//call a method from connection class
$this->db = $this->db->dbConnect();
}
//login function verifies the user
public function Login($name,$pass){
if(!empty($name)&& !empty($pass)){
	$st=$this->db->prepare("SELECT * FROM users WHERE name=? AND password=?");
	$st->bindParam(1,$name);
	$st->bindParam(2,$pass);
	$st->execute();

		
			if($st->rowCount() == 1){
			echo "user verified access granted";
			}else{
			echo "invalid entries!!";
			}

	}else{
	echo "please enter username and password";

	}

}
}
?>