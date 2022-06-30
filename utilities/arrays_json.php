<?php

// $nums = [1, 2, 3, 4, 44, 6, 7, 5];
// //echo $nums[3];
// //$z = 0;
// foreach ($nums as $x) {
//     if ($x > 6) {
//         echo "$x <br />";
//     }
//     //$z = $z + $x;
// }
// //echo $z;

// $people = ["Yuri","Vasya","Yulia"];
// foreach ($people as $y) {
//     //if ($y[0] == "Y") {
//         if (str_starts_with($y, "Y")) {
//         echo "$y <br />";
//     }
// }

// $people = [
//     ["Yuri", "Ändrienko", 123456],
//     ["Vasya","Pupkin",147777777],
//     ["Yulia","Yulkina",300000]
// ];

// foreach($people as $person) {
//     $first_name = $person[0];
//     $last_name = $person[1];
//     $salary = $person[2];
//     echo "$first_name $last_name has salary $salary <br />";
// }

$people = [
    array("first_name" => "Yuri", "last_name" => "Andrienko", "salary" => 123456),
    array("first_name" => "Vasya", "last_name" => "Pupkin", "salary" => 77777),
    array("first_name" => "Yulia", "last_name" => "Yulkina", "salary" => 30000),
];
// foreach($people as $person) {
//     $first_name = $person["first_name"];
//     $last_name = $person["last_name"];
//     $salary = $person["salary"];
//     echo "$first_name $last_name has salary $salary <br />";
// }

echo (json_encode($people));