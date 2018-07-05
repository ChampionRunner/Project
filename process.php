<?php

	echo $wdays = $_POST['wdays'];
	
	echo $i = $_POST['holidays'];
	
		$file = $_FILES['file231'];
		echo print_r($file);
	
	$days = array("Sun", "Mon", "Tue","Wed","Thurs","Fri","Sat");
	
	$a=$wdays;
	$a=7-$a;

	$i=6;
	
	while($a--)
	{
		if($i>6){$i=0;}
		echo $days[$i];	
		$i++;	
	}
?>