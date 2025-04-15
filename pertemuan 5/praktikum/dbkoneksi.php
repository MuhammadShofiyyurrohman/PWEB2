<?php
$host = 'localhost';
$db = 'dbsiak';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// BUAT DATA SOURCE NAME (DSN)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
// 3) BUAT KONEKSI KE DATABASE
try {
    $pdo = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}