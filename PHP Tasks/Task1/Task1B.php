<?php
echo '<strong>======= Task.1 output: =======</strong><br><br>';
$cities= ["Amman", "Aqaba", "Maan", "Salt", "Jerash", "Irbid", "Ajlon"];

array_reverse($cities);
foreach ($cities as $city) {
    echo "$city ... ";
}

echo "<br>";
echo "<br>";

// print_r(array_keys($cities, "Amman"));
echo "Amman index is:" . array_search("Amman", $cities) . "<br>";
echo "Aqaba index is:" . array_search("Aqaba", $cities) . "<br>";

echo "<br>";
echo "<br>";

$remKey = array_search("Salt", $cities);
foreach ($cities as $city) {
    if ($remKey == $remKey) {
        unset($cities[$remKey]);
    }
}
print_r($cities);

echo "<br>";
echo "<br>";

echo "Sub array: ";
print_r(array_slice($cities,0,3));

echo "<br>";
echo "<br>";
echo "<br>";

echo '<strong>======= Task.2 output: =======</strong><br><br>';
$products = ['V-Neck' => 7,
             'C-Neck' => 6,
             'Short' => 14,
             'Jogger' => 20];

/*sort according key*/
ksort($products);
echo "The array's products are: ";
foreach ($products as $prod_k => $prod_v) {
    echo "$prod_k, ";
}

echo "<br>";
echo "<br>";

/*sort according value*/
asort($products);
echo "The products prices are: ";
foreach ($products as $prod_k => $prod_v) {
    echo "$prod_v, ";
}

echo "<br>";
echo "<br>";

/*Prices avg*/
$prodPrices =[];
foreach ($products as $prod_k => $prod_v) {
    array_push($prodPrices, $prod_v);
}
// print_r($prodPrices);
$sum = array_sum($prodPrices);
$itm = count($prodPrices);
// echo $sum;
// echo $itm;
$avg = $sum/$itm;
echo "The average for prices is: $avg";

echo "<br>";
echo "<br>";

/*expensive product*/
$i = 0;
foreach ($products as $prod_k => $prod_v) {
    if ($prod_v > $i) {
        $i = $prod_v;
    }
}
// print $i . $prod_v;
// $k = array_keys($prod_v, $products);
$k = array_search($prod_v, $products);
echo "The most expensive product is: $k, it's price is: $prod_v";

// echo max($prodPrices);

echo "<br>";
echo "<br>";
echo "<br>";

echo '<strong>======= Task.3 output: =======</strong><br><br>';
$books = [
    ["title" => "Clean code", "author" => "Robert Cecil", "year" => 2012],
    ["title" => "Design Patterns: Elements of Reusable Object-Oriented Software", "author" => "Erich Gamma", "year" => 1994],
    ["title" => "The Art of Computer Programming", "author" => "Donald Knuth", "year" => 1968],
    ["title" => "The Clean Coder", "author" => "Robert Cecil", "year" => 2011]
]





// //string test
// $str = "Orange Coding Academy";
// echo "'Orange Coding Academy' has <b>" . strlen($str) . "</b> letters with spaces",     //1. String Length
// " & has <b>" . str_word_count($str) . "</b> words";                                     //2. Word Count
// echo "<br>";
// echo strpos($str, "Academy");                                                           //3. string position
// echo "<br>";
// echo strtoupper($str);                                                                  //4. upper case
// echo "<br>";
// echo strtolower($str);                                                                  //5. lower case
// echo "<br>";
// echo str_replace("Orange", "Welcome to", $str);                                         //6.Replace string
// echo "<br>";
// echo strrev($str);                                                                       //7.Reverse string
// echo "<br>";
?>