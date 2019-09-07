<?php

	$pass = " ";
	$uppercase = preg_match('@[A-Z]@', $pass);
	$lowercase = preg_match('@[a-z]@', $pass);
	$number = preg_match('@[1-9]@', $pass);
	$special   = preg_match('/[^a-zA-Z\d]/', $pass);

	if(!$uppercase || !$lowercase || !$number || !$special || strlen($pass)<=8){
		echo "false";
	}else{
		echo "true";
	}