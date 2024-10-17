<?php

$dsn = "mysql:host=mysql-8.2.local;port=3306;dbname=demo;charset=utf8mb4";

$pdo = new PDO($dsn, 'root', '');

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($posts);

// require 'functions.php';

// require 'router.php';

