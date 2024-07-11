<?php
// ================================================= req. #1 ===============================================
$nums = [1, 2, 3, 4, 5, 6, 7];
    function isPrime($num) {
        // foreach ($nums as $num) {
            if ($num % 2 == 1) {
                echo "$num is prime number";
            }else{
                echo "$num is not prime number";
            }
        }
    // }
isPrime(3);

// ================================================= req. #2 ===============================================
$str = "remove";
function toReverse() {
    // explode("", $str);
    // echo strrev(explode("", $str));
}