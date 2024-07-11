<?php
//$cities= ["Amman", "Aqaba", "Salt", "Irbid"]
// array_reverse($cities);
// echo $cities;



//string test
$str = "Orange Coding Academy";
echo "'Orange Coding Academy' has <b>" . strlen($str) . "</b> letters with spaces",     //1. String Length
" & has <b>" . str_word_count($str) . "</b> words";                                     //2. Word Count
echo "<br>";
echo strpos($str, "Academy");                                                           //3. string position
echo "<br>";
echo strtoupper($str);                                                                  //4. upper case
echo "<br>";
echo strtolower($str);                                                                  //5. lower case
echo "<br>";
echo str_replace("Orange", "Welcome to", $str);                                         //6.Replace string
echo "<br>";
echo strrev($str);                                                                       //7.Reverse string
echo "<br>";


?>