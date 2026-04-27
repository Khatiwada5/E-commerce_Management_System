<!-- file to connect databse of this webpage. -->

<?php
// necessary variable for database connection.
   $dbname = 'furniture'; // database name for webpage
   $server = 'localhost'; //database server where databse is stored.
   $username = 'root'; // username of the server access.
   $password = ''; // password of the server access.

// connecting databse with website.
   $pdo = new PDO('mysql:dbname=' . $dbname . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

?>