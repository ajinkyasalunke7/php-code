<?php
 class Student{
    public $roll;
    function __construct($enroll){
        $this->roll=$enroll;
        echo $this->roll;
    }
    function __destruct(){
        echo "<br>object trashed";
    }
}
$stud = new Student(10);
?>