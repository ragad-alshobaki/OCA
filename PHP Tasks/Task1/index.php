<?php
//======= Task #1 =======
echo '<strong>Task.1 output:</strong><br>';
$fruits = ["orange", "apple", "bananna", "strawbery", "mango"];
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}
echo '<hr>';
$fruits[] = "kiwi";
// var_dump($fruits);
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}
echo '<hr>';
array_pop($fruits);
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}
echo '<hr>';
$check = in_array("mango", $fruits);
echo $check;
echo '<hr>';
echo '<hr>';

//======= Task #2 =======
echo '<strong>Task.2 output:</strong><br>';
$emps_age = ["jack" => 20, "Jone" => 30, "Alice" => 20, "x_emp" => 40, "y_emp" => 35];
foreach ($emps_age as $key => $value) {
    echo "<u>$key</u> age is $value <br>";
}
echo '<hr>';
$emps_age["new_amp"] = 33;
foreach ($emps_age as $key => $value) {
    echo "<u>$key</u> age is $value <br>";
}
echo '<hr>';
unset($emps_age["jack"]);
foreach ($emps_age as $key => $value) {
    echo "<u>$key</u> age is $value <br>";
}
echo '<hr>';
