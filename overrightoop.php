<?php
class StudentManage{
    public $name;

    public function name_set($nam){
        $this->name=$nam;
    }

    public function get_name() {
       return $this->name;
    }
}


class studentInfo extends StudentManage{
    public function name_set($nam) {
        if($nam=="rahul"){
           $this->name="Rahul";
        }else{
            $this->name="other";
        }
    }



}

$newStudent= new studentInfo();
$newStudent->name_set("rahuu");
echo $newStudent->get_name();


?>