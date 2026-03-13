<?php
    trait studentName{
        public function username(){
            echo "Username show";
        }
    }
     trait studentRoll{
        public function userroll(){
            echo "Userroll show";
        }
    }


    class program{
        use studentName;
        use studentRoll;
    }

    $info = new program ();
    $info->username();
    echo "<br>";
    $info->userroll();


?>