<!-- file to connect databse of this webpage. -->

<?php
$dbname = getenv('MYSQLDATABASE') ?: getenv('DB_NAME') ?: 'furniture';
$server = getenv('MYSQLHOST') ?: getenv('DB_HOST') ?: 'localhost';
$port = getenv('MYSQLPORT') ?: getenv('DB_PORT') ?: '3306';
$username = getenv('MYSQLUSER') ?: getenv('DB_USER') ?: 'root';
$password = getenv('MYSQLPASSWORD') ?: getenv('DB_PASSWORD') ?: '';

if (getenv('MYSQL_URL')) {
   $url = parse_url(getenv('MYSQL_URL'));
   $server = $url['host'] ?? $server;
   $port = $url['port'] ?? $port;
   $username = $url['user'] ?? $username;
   $password = $url['pass'] ?? $password;
   $dbname = isset($url['path']) ? ltrim($url['path'], '/') : $dbname;
}

$dsn = 'mysql:dbname=' . $dbname . ';host=' . $server . ';port=' . $port . ';charset=utf8mb4';
$pdo = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>
