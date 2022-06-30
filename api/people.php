<?php

// Здесь должен быть код для извлечения данных из БД

$people = [
    array("first_name" => "Yuri", "last_name" => "Andrienko", "salary" => 123456 ),
    array("first_name" => "Vasya", "last_name" => "Pupkin", "salary" => 77777 ),
    array("first_name" => "Yulia", "last_name" => "Yulkina", "salary" => 30000 ),
    array("first_name" => "Andrew", "last_name" => "Andreev", "salary" => 354565400 ),
];
$results = [];
$letters = strtolower($_REQUEST["letters"]);
foreach ($people as $person) {
    if (str_starts_with(strtolower($person["last_name"]), $letters)) {
        array_push($results, $person);
    }
}
echo (json_encode($results));