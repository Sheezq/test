<?php
$users = [
    ['name' => 'John Doe', 'age' => 30, 'email' => 'john@example.com'],
    ['name' => 'Jane Doe', 'age' => 25, 'email' => 'jane@example.com'],
    ['name' => 'Jim Beam', 'age' => 35, 'email' => 'jim@example.com'],
];

$lines = [];
foreach ($users as $user) {
    $lines[] = implode(", ", $user);
}

file_put_contents('users.txt', implode("\n", $lines));


$content = file_get_contents('C:\OSPanel\home\full-example.local\public\users.txt');
echo $content;


?>