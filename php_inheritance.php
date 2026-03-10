<?php 
    Class stdName{
        public $name;

        public function fullName($n){
            $this->name=$n;
        }
    } 

    Class stdRoll extends stdName{
        public function stdRoll() {
            echo "Roll No:30 ".$this->name;
        }

    }

    $stdInfo = new stdRoll();
    $stdInfo->fullName("Rahul");
    $stdInfo->stdRoll();
?>