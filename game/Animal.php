<?php
class Animal {
	//Properties
	public $name = "";
	public $speed = 0;
	//Methods
	public function __construct($name) {
		$this->name = $name;
	}

	public function prepare(){
		$this->speed = rand(0,10);
	}
	public function greet(){
		return "Hello! My name is ".$this->name;
	}
}
?>