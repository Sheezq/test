<pre>
<?php

$connect = 'mysql:host=MySQL-8.2;dbname=library';

$username = 'root';
$password = '';

try {
    $pdo = new PDO($connect, $username, $password);

    foreach ($pdo->query('SELECT * FROM authors') as $row) {
        print_r($row);
    }

} catch (Exception $exception) {
    var_dump($exception->getMessage());
}