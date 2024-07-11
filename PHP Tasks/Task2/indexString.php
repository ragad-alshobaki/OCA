<?php
//======= Task #1 =======
echo "<strong>=== Task#1 ====</strong> <br>";
$a="rgd";
echo strtoupper($a) . "<br>";

$b="Ragad";
echo strtolower($b) . "<br>";
 
$c="hello";
echo ucfirst($c) . "<br>";

$r="orange coding academy";
echo ucwords($r) . "<br>";
echo "<hr>";

//======= Task #2 =======
echo "<strong>=== Task#2 ====</strong> <br>";
// $time = 085119;
// echo date("Y-m-d H:i:s", $time);
$time="085119";
echo explode("", $time);

//======= Task #3 =======
$p = 'I am a full stack developer at orange coding academy';

$word = "I am";
$pos = strpos($p , $word);

if ($pos !== false) {
    echo " done";
}else{
    echo "not done";
}

//======= Task #4 =======
 $URL ='www.orange.com/index.php';
 echo basename($URL);

//======= Task #5 =======
$x='info@orange.com';
     echo strstr($x, '@', true);

// ============================================================task6=========================================
$word ='info@orange.com';
echo substr( $word,12,3);
echo substr($word,-3);

// ============================================================task7======================================
// !?

// ===============================================================task8===================================
// $a= 'That new trainee is so genius.';
// $new= 'Our';

// $words = explode(' ', $a);///بتقسيم وبتخزن بمصفوفه


// $words[0] = $new;

// $last= implode(' ', $words);// لدمج عناصر مصفوفة إلى سلسلة نصية واحدة، 

                 
// echo "$last";

// // ==================================================================task9==================================

// ! 
// // ===================================================================== task 10================================

// $string = "Twinkle, twinkle, little star.";
// $newarray=explode(" " ,$string);
// var_dump($newarray);

// ================================================================task 11 ================================