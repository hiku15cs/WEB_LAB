<?php
	$file = "6.txt";
	$count = file_get_contents($file);
	
	file_put_contents($file, $count+1);
	
	echo "Visitor Count = ";
	echo "$count";	
?>