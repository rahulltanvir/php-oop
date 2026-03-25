<?php

function division($n){
    try{
        if($n <=0){
        throw new Exception("<br>" ."Enter the valid Number".'<br>');
        }
        $value=2 / $n;
        echo $value;
    }catch(Exception $e){
        echo $e->getMessage();
    }
    
}

division(4);
division(0);
division(2);

?>