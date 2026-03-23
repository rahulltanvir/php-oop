<?php

class try_catch{
    private $conn;
    public function __construct(){
        try{
            $dbHost = 'localhost';
            $dbUser = 'root'; // ইচ্ছা করে ভুল দিলাম
            $dbPass = '';
            $dbName = 'blogproject';

            $this->conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);


        }catch(mysqli_sql_exception $connmsg){
            die("Connection Failed!! ".$connmsg->getMessage());
        }
    }
}

?>