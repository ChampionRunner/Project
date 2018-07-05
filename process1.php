<?php

$file = $_FILES['file231'];
	//echo print_r($file);
	
	$file_name=$file['name'];
	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];
	
	$file_ext = explode('.',$file_name);
	$file_ext = strtolower(end($file_ext));
	$allowed_extentions = array('xlsx','txt');
	
	if(in_array($file_ext,$allowed_extentions))
	{
		if($file_error === 0)
		{
		///	$file_name_new = uniqid('',true).'.'.$file_ext;
			$file_destination = 'uploads/'.$file_name;
			
			if(move_uploaded_file($file_tmp,$file_destination))
			{
				echo $file_destination;
			}
		}
		
	}
		?>