<?php
// db.php

$host     = getenv("DB_HOST");
$port     = getenv("DB_PORT");
$db_name  = getenv("DB_NAME");
$username = getenv("DB_USER");
$password = getenv("DB_PASS");

if (!$host || !$port || !$db_name || !$username) {
    die("Environment variables for database are not set properly.");
}

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$db_name;charset=utf8mb4",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
