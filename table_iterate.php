<?php

$a = array(
	array("id"=>1,"title"=>"iPhone","price"=>3600),
	array("id"=>2,"title"=>"Samsung","price"=>2500),
	array("id"=>3,"title"=>"HTC","price"=>1566),
);


if(!empty($a)) {

	echo '<table>';
	foreach($a as $v) {
		echo '<tr>';
		foreach($v as $v2) {
			echo '<td>'.$v2.'</td>';
		}
		echo '</tr>';
	}
	echo '</table>';

}


?>