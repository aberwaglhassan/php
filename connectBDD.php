<?php
// index.php
$link = new PDO("mysql:host=localhost;dbname=blog_db;charset=utf8",'blog_db', '');
$result = $link->query('SELECT id, title,description FROM articles');


$posts=array();
     while ($row = $result->fetch(PDO::FETCH_ASSOC)){
         $posts[]=$row;
     }

         $link = null;

//import html presentation code

require 'templates/list.php';