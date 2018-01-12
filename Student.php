<?php

class Student{
	
	//constructor for student
	function __construct(){
		$this->surname = '';
		$this->first_name = '';
		$this->emails = array();
		$this->grades = array();
	}
	
	//to add student emails to the system
	function add_email($which, $address){
		$this->emails[$which] = $address;
	}

	//to add student grades to the system
	function add_grade($grade){
		$this->grades[] = $grade;
	}

	
	//to calculate student grade average
	function average(){
		$total = 0;
		foreach($this->grades as $value)
			$total += $value;
		return $total/count($this->grades);
	}
	
	//prints student info 
	function toString() {
    $result = $this->first_name . ' ' . $this->surname;
    $result .= ' ('.$this->average().")\n";
    foreach($this->emails as $which=>$what)
        $result .= $which . ': '. $what. "\n";
    $result .= "\n";
    return '<pre>'.$result.'</pre>';
}
}
?>