<?php
    class Man{
      public static $name="Rahul"; //static property 

      public static function userName(){
        // return "static method";
        return "property acces mathod :".self::$name;
      }
      public function admin(){
       echo self::$name;
      }
    }

    echo Man::userName();
    echo "<br>";
    $m= new Man();
    $m->admin();





?>