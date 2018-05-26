<?php
class Person {

	//(access modifier) properties
	public $firstname 	= "";
	public $lastname 	= "";

	//Methods (Functions)
	//建构子
	public function __construct(){
		
	}

	public function setName($fName="", $lName="") {
		$this->firstname = $fName;
		$this->lastname  = $lName;
	}

	public function greet(){
		echo "Hello! My name is ".$this->firstname." ".$this->lastname."<br/>"; 
	}

}

$ali = new Person(); //instantiate 实例化
$ali->setName("Ali","Mohammed");

$ahkau = new Person();
$ahkau->setName("Ahkau","Tan");

$mutu = new Person();
$mutu->setName("Muthu","Tan");

echo $ali->firstname;
//$ahkau->greet();
//$mutu->greet();

?>