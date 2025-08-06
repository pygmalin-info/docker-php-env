<?php
try {
    $db = new PDO('mysql:host=mysql;dbname=php-app', 'user', 'pass');
    echo '接続成功';
} catch (PDOException $e) {
    echo '接続失敗: ' . $e->getMessage();
}
