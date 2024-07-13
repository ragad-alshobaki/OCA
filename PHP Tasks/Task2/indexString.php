<?php
//Task #1
echo "<strong>======= Task#1 =======</strong> <br>";
$a = "rgd";
echo strtoupper($a) . "<br>";

$b = "Ragad";
echo strtolower($b) . "<br>";
 
$c = "hello";
echo ucfirst($c) . "<br>";

$r = "orange coding academy";
echo ucwords($r) . "<br>";

echo "<br>";

//Task #2
echo "<strong>======= Task#2 =======</strong> <br>";
$numStr = "085119";
echo $toTime = substr($numStr, 0, 2) . ":" . substr($numStr, 2, 2) . ":" . substr($numStr, 4, 2) . "<br>";

// function toTime($numStr){
//     for ($i=0; $i < strlen($numStr); $i+=2) { 
//         echo substr($numStr, $i, 2) . ":";                                   //check - no output
//     }
// }

echo "<br>";

//Task #3
echo "<strong>======= Task#3 =======</strong> <br>";
$t3 = 'I am a full stack developer at orange coding academy';
$word = "Orange";
$pos = strpos($t3 , $word);
if ($pos == true) {
    echo "Word Found! <br>";
}else{
    echo "No search results found! <br>";
}

echo "<br>";

//Task #4
echo "<strong>======= Task#4 =======</strong> <br>";
$URL ='www.orange.com/index.php';
$file = "index.php";
$t4Pos = strpos($URL , $file);
echo $extract = substr($URL, $t4Pos) . "<br>";
// echo basename($URL);

echo "<br>";

//Task #5
echo "<strong>======= Task#5 =======</strong> <br>";
$mail='info@orange.com';
echo strstr($mail, '@', true) . "<br>";

echo "<br>";

//Task #6
echo "<strong>======= Task#6 =======</strong> <br>";
$t5 = strstr($mail, '.');
echo str_replace(".", "", $t5) . "<br>";

echo "<br>";

//Task #7
echo "<strong>======= Task#7 =======</strong> <br>";
$str = "Orange_Coding_Academy";
echo str_shuffle($str) . "<br>";

echo "<br>";

//Task #8
echo "<strong>======= Task#8 =======</strong> <br>";
$t8 = 'That new trainee is so genius.';
$rep = 'Our';
echo str_replace("That", "$rep", $t8) . "<br>";

echo "<br>";

//Task #9
echo "<strong>======= Task#9 =======</strong> <br>";                        //Need to check - output warning
// $String1 = 'dragonball';
// $String2 = 'dragonboll';
// $diff_char = strspn($String1, $String2);
// echo "First difference between two strings at position $diff_char: $String1[$diff_char] vs $String2[$diff_char] ";

echo "<br>";

//Task #10
echo "<strong>======= Task#10 =======</strong> <br>";
$arStr = "Twinkle, twinkle, little star.";
var_dump($arStr);

echo "<br>";







//Task #13
echo "<strong>======= Task#13 =======</strong> <br>";
$t13 = '0000657022.24';
echo trim($t13, '0') . "<br>";

echo "<br>";



?>