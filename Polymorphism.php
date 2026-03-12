<?php
    interface Payment{
        public function pay($amount);
    }

    class bkash implements Payment{
        public function pay($amount) {
            echo "Paid $amount Via Bkash <br> ";
        }
    }
    class nagad implements Payment{
        public function pay ($amount){
            echo "Paid $amount Via Nagad <br>";
        }
    }

    function paymentsystem(Payment $maddom){
        $maddom->pay("600");
    }
    $bkash= new bkash();
    $nagad= new nagad();

    paymentsystem($bkash);
    paymentsystem($nagad);

?>