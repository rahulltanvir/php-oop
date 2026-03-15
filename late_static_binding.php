<?php
class ParentClass {
    public static function who() {
        echo "Parent";
    }

    public static function test() {
        static::who(); // 🔥 LSB
    }
}

class ChildClass extends ParentClass {
    public static function who() {
        echo "Child";
    }
}

ChildClass::test();


?>