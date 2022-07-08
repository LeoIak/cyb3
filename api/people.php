<?php

//Cимуляция: обычно список данных извлекается программным кодом, например, из БД
$people = [
    array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow", "Salary" => 123456),
    array("FirstName" => "Vasya", "LastName" => "Pupkin", "City" => "Moscow", "Salary" => 77777),
    array("FirstName" => "Masha", "LastName" => "Mashkina", "City" => "London", "Salary" => 300000),
    array("FirstName" => "Ivan", "LastName" => "Andreeev", "City" => "London", "Salary" => 300000),
];

//Отфильтруем данные по первым буквам фамилии
$letters = strtolower($_REQUEST["letters"]);

$results = [];
foreach($people as $person) {
    if (str_starts_with(strtolower($person["LastName"]), $letters)) {
        array_push($results, $person);
    }
}

//Отправим извлеченные данные в формате JSON
echo json_encode($results);