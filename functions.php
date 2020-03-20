<?php
$is_auth = rand(0, 1);

$user_name = 'Kirill'; // укажите здесь ваше имя

$category_list = [
    "boards" => "Доски и Лыжи",
    "bindings" => "Крепления",
    "boots" => "Ботинки",
    "clothes" => "Одежда",
    "other" => "Разное",
];

$name_list =[ [
    "name" => "2014 Rossignol District Snowboard",
    "category" => "boards",
    "price" => 10999,
    "image" => "img/lot-1.jpg"],
    [
        "name" => "DC Ply Mens 2016/2017 Snowboard",
        "category" => "boards",
        "price" => 159999,
        "image" => "img/lot-2.jpg",],
    [
        "name" => "Крепления Union Contact Pro 2015 года размер L/XL",
        "category" => "bindings",
        "price" => 8000,
        "image" => "img/lot-3.jpg",],
    [
        "name" => "Ботинки для сноуборда DC Mutiny Charocal",
        "category" => "boots",
        "price" => 10999,
        "image" => "img/lot-4.jpg",],
    [
        "name" => "Куртка для сноуборда DC Mutiny Charocal",
        "category" => "clothes",
        "price" => 7500,
        "image" => "img/lot-5.jpg",],
    [
        "name" => "Маска Oakley Canopy",
        "category" => "other",
        "price" => 5400,
        "image" => "img/lot-6.jpg",]
];

function sum($number, $Rubl){
    $number = ceil($number);

    if ($number >= 1000){
        $price = number_format($number, 0, '.', ' ');
    }
    else{
        $price = $number;
    }

    if ($Rubl){
        return $price."<b class=\"rub\">р</b>";
    }
    else{
        return $price;
    }
}
function conpile_template($template, $template_data){
    if (file_exists('templates/' . $template)){
        ob_start('ob_gzhandler');
        extract($template_data);
        require_once ('templates/' . $template);

        return ob_get_clean();
    } else{
        return '404';
    }
}

?>

