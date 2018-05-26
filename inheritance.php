<?php
class Person {

	//(access modifier) properties
	public $firstname 	= "";
	public $lastname 	= "";

	//Methods (Functions)
	//建构子
	public function __construct(){
		echo "Constructor Called... <br/>";
	}

	public function setName($fName="", $lName="") {
		$this->firstname = $fName;
		$this->lastname  = $lName;
	}

	public function greet(){
		echo "Hello! My name is ".$this->firstname." ".$this->lastname."<br/>"; 
	}

	//解构子
	public function __destruct(){
		echo "Destructor Called... <br/>";
	}

}

class Engineer extends Person {

	public function jump(){
		echo $this->firstname;
	}

}

$man = new Engineer();
$man->setName("Mark","Zukerberg");
$man->greet();
$man->jump();
echo $man->firstname;

?>