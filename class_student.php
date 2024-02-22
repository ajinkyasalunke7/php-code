<?php
    class Student{
        public $first_name;
        public $last_name;
        public function set_student($f,$l){
            $this->first_name = $f;
            $this->last_name = $l;
        }
    }
    class Result extends Student{
        public $percentage;
        public function set_result($r){
            $this->percentage = $r;
        }
        public function show_data(){
            return "Firstname : ".$this->first_name."<br/> Lastname : ".$this->last_name."<br/> Percentage : ".$this->percentage;
        } 
    }

    $stud = new Result();
    $stud->set_student("Ajinkya","Salunke");
    $stud->set_result("90");
    print($stud->show_data());

?>