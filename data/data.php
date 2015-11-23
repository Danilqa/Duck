<?php
    $template_dir = "template";
    $sitename = "ololo";
    $duckface = "http://images4.fanpop.com/image/photos/16000000/Cute-Kitten-kittens-16096566-1280-800.jpg";

    $pages = ["main"=>"Главная",
              "contacts"=>"Контакты", 
              "cat"=>"Каталог", 
              "cart"=>"Корзина"];
    
    $categories = [1=>"Категория 1",
                   3=>"Категория 2",
                   7=>"Категория 3",
                   16=>"Категория 4"];

    $products = [
              0 => [
                    "name"=>"Утка 1",
                    "price"=>900,
                    "description"=>"This is duck. Really beautiful duck!",
                    "category"=>1
                    ],
              1 => [
                    "name"=>"Утка 2",
                    "price"=>1200,
                    "description"=>"Bla bla bla bla bla bla",
                    "category"=>3
                    ],
    ]
?>