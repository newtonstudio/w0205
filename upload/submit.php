<?php
	
	if(isset($_FILES['img'])) {

		if($_FILES['img']['error'] == 0) {

			$jpeg_file = date("YmdHis").".jpg";

			$upload_path = "http://localhost/w0205/upload/images/".$jpeg_file;

			$result = move_uploaded_file($_FILES['img']['tmp_name'], "./images/".$jpeg_file);

			if($result) {
				echo $upload_path;
			}

		}


	}



?>