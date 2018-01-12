<?php
/**
 * Student Class
 */
class Student {
    /**
     * Student class constructor
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Store student's email type and email address
     * @param type $which
     * @param type $address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /**
     * Store student's grade scores
     * @param type $grade
     */    
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Calculate student's average grade and return the average grade 
     * @return type
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /**
     * ToString method
     * @return String
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
