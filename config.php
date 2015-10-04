<?php
$dsn = 'mysql:host=localhost;dbname=cms';
$user = 'root';
$password = '123456';
try {
    $_pdo = new PDO($dsn, $user, $password);
    $_pdo->query('set names utf8;');
} catch (PDOException $e) {
    echo '数据库连接失败:'.$e->getMessage();
}
