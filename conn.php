<?php
ini_set("error_reporting", true);

function connectionDataBase($id) {
    $configs = [
        1 => ["host" => "HOST1", "username" => "YOUR_DB1", "password" => "YOUR_PASSWORD", "db" => "YOUR_DB1"],
        2 => ["host" => "HOST2", "username" => "YOUR_DB2", "password" => "YOUR_PASSWORD2", "db" => "YOUR_DB2"]
    ];

    $config = $configs[$id] ?? $configs[1];  // Default to ID 1 configuration if ID is not found

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $dsn = "sqlsrv:Server={$config['host']},1433;Database={$config['db']};TrustServerCertificate=1;LoginTimeout=30;";

    try {
        return new PDO($dsn, $config['username'], $config['password'], $options);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}