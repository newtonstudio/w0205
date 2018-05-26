<?php
class Game {

	public $q = array();

	//Type Casting
	public function partipant_join(Animal $a){
		$this->q[] = $a;
	}

	public function everyone_greet(){
		if(!empty($this->q)) {
			foreach($this->q as $v) {
				echo $v->greet()."<br/>";
			}
		}
	}

	public function everyone_prepare(){
		if(!empty($this->q)) {
			foreach($this->q as $v) {
				$v->prepare();
			}
		}
	}

	public function everyone_result(){
		if(!empty($this->q)) {
			foreach($this->q as $v) {
				echo $v->name.": ".$v->speed."<br/>";
			}
		}

		//good solution for many participants
		$tmp_array = array();
		foreach($this->q as $v) {
			$tmp_array[$v->name] = $v->speed;	
		}

		arsort($tmp_array);

		$i=0;
		foreach($tmp_array as $k=>$v) {

			if($i==0) {
				echo $k." is winner!";
				break;
			}
			$i++;
		}


		/*
		//Easy Solution for two participants
		if($this->q[0]->speed > $this->q[1]->speed) {
			echo $this->q[0]->name." WIN! <br/>";
		} else if ($this->q[0]->speed < $this->q[1]->speed) {
			echo $this->q[1]->name." WIN! <br/>";
		} else {
			echo " DRAW <br/>";
		}
		*/

	}

}
?>