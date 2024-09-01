<?php
require_once 'db.php';
require_once 'ORM.php';

$db = new DB('mysql:host=MySQL-8.2)', 'library','root','');
$pdo = $db->getPdo();

$orm = new ORM($pdo, 'authors');

$authors = $orm->select();
print_r($authors);

$orm->insert([
    'name' => 'Yasha',
        'birthdate' => '1990-01-01',
    ]);

$orm->update(['name' => 'Roma'], ['birthdate' => '1990-01-01']);

$orm->delete(['name' => 'Roma']);
?>



