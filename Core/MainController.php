<?php

class MainController {

	private $value;
	private $cleanInt;

	// Function to validate if int(s) are clean.
	public function cleanInt(int $value){
	    $cleanValue = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
	    return $cleanValue;
	}

	// Function to validate if string(s) are clean.
	public function cleanString(string $value){
	    $cleanValue = filter_var($value, FILTER_SANITIZE_STRING);
	    return $cleanValue;
	}

	// Function to validate if numberfloat(s) are clean.
	public function cleanFloat(float $value){
	    $cleanValue = filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT);
	    return $cleanValue;
	}
}

?>