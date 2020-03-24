<?php

require_once ('functions.php');

$page_content = conpile_template('index.php',
    [
        'category_list'=> $category_list,
        'name_list'=> $name_list,
        'lot_time_remaining' => $lot_time_remaining
    ]);

$layout_content = conpile_template('layout.php', [
    'page_title'=> 'Главная страница',
    'is_auth'=> $is_auth ,
    'user_avatar'=> $user_avatar,
    'user_name'=> $user_name,
    'page_content'=> $page_content,
    'category_list'=> $category_list]);

print($layout_content);
?>

