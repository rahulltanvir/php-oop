<?php

function voterAge($age){
    if($age <=18){
        throw new Exception("You are not voter".'<br>');
    }
    return true;
}
try{
voterAge(15);
echo "You are voter".'<br>';
}catch( Exception $erMsg){
   echo $erMsg->getMessage();
}finally{
    echo "go next";
}
?>