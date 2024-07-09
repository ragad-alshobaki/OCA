<?php
//======= Task #1 =======
echo '<strong>Task.1 output:</strong><br>';
$fruits = ["orange", "apple", "bananna", "strawbery", "mango"];
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}
echo "======================================================== <br>";
$fruits[] = "kiwi";
// var_dump($fruits);
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}
echo "======================================================== <br>";
array_pop($fruits);
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}
echo "======================================================== <br>";
$check = in_array("mango", $fruits);
echo $check;
echo '<hr>';

//======= Task #2 =======
echo '<strong>Task.2 output:</strong><br>';
$emps_age = ["jack" => 20, "Jone" => 30, "Alice" => 20, "x_emp" => 40, "y_emp" => 35];
foreach ($emps_age as $key => $value) {
    echo "<u>$key</u> age is $value <br>";
}
echo "======================================================== <br>";
$emps_age["new_emp"] = 33;
foreach ($emps_age as $key => $value) {
    echo "<u>$key</u> age is $value <br>";
}
echo "======================================================== <br>";
unset($emps_age["jack"]);
foreach ($emps_age as $key => $value) {
    echo "<u>$key</u> age is $value <br>";
}
echo "======================================================== <br>";
if(array_key_exists("new_emp", $emps_age)) {
    echo 'The key "new_emp" is exists in the array';
}else {
    echo 'The key "new_emp" is not exists in the array';   
}
echo '<hr>';

//======= Task #3 =======
echo '<strong>Task.3 output:</strong><br>';
$stds = [
    ["name" => "std_1", "age" => 16, "grade" => 90],
    ["name" => "std_2", "age" => 18, "grade" => 85],
    ["name" => "std_3", "age" => 16, "grade" => 80]
];
foreach ($stds as $std) {
  echo "student Name: $std[name], age: $std[age], & the std grade is => $std[grade] <br>";
};
// print_r($stds);
echo "======================================================== <br>";
$stds[] = ["name" => "std_4", "age" => 15, "grade" => 95];
foreach ($stds as $std) {
    echo "Student Name: $std[name], age: $std[age], & the std grade is => $std[grade] <br>";
}
echo "======================================================== <br>";
//      *** Need to check ***
// foreach ($stds as $std) {
//     if ($std["name"] = "std_3") {
//         $std["garde"] = 83;
//     }
// }
// print_r($stds);
// echo "<br>";
// echo "======================================================== <br>";
array_pop($stds);
foreach ($stds as $std) {
    echo "Students Name: $std[name], age: $std[age], & the std grade is => $std[grade] <br>";
}
echo "======================================================== <br>";

echo '<hr>';
//======= Task #4 =======
echo '<strong>Task.4 output:</strong><br>';
array_push($fruits, "blueberry");
print_r($fruits);
echo "<br>";
echo "======================================================== <br>";
array_pop($fruits);
print_r($fruits);
echo "<br>";
echo "======================================================== <br>";
array_values($emps_age);
print_r($emps_age);
echo "<br>";
echo "======================================================== <br>";
echo "The count of indexed array is:" . count($fruits) . "<br>";
echo "The count of associative array is:" . count($emps_age) . "<br>";
echo "The count of multidimensional array is:" . count($stds) . "<br>";
echo "======================================================== <br>";
echo "Below you'll find the merge between indexed & associative arrays: <br>";
print_r(array_merge($fruits, $emps_age));
echo "<br>";
echo "======================================================== <br>";
//      *** Need to check > ass. arr.***
echo array_search("std_2", $stds);
echo array_search("mango", $fruits);
echo "<br>";
echo "======================================================== <br>";
echo "Here the sort of indexed array: <br>";
sort($fruits);
foreach ($fruits as $item) {
    echo "$item <br>";
}
echo "======================================================== <br>";
echo "Here the sort of associative array by key: <br>";
ksort($emps_age);
// foreach ($emps_age as $emp) {
//     echo "$emp <br>";
// }
foreach ($emps_age as $key => $value) {
    echo "$key => $value <br>";
}
echo "======================================================== <br>";
echo "Here the sort of associative array by value: <br>";
asort($emps_age);
foreach ($emps_age as $key => $value) {
    echo "$key => $value <br>";
}