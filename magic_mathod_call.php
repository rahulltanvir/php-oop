<?php
class User {

    public function __call($name, $arguments) {
        echo "Method '$name' does not exist <br>";
        print_r($name);
    }

}

$u = new User();

$u->login("rahu", "1234"); // login method class এ নাই
?>