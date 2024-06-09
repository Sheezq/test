<?php
$users = [
    ['email' => 'pablo@example.com','name' => 'Pablo', 'age' => 24],
    ['email' => 'pablo1@example.com','name' => 'Pablo1', 'age' => 25],
    ['email' => 'pablo2@example.com','name' => 'Pablo2', 'age' => 26],
    ['email' => 'pablo3@example.com','name' => 'Pablo3', 'age' => 27],
];

$lines = [];
foreach ($users as $user) {
    $lines[] = implode(", ", $user);
}

file_put_contents('users.txt', implode("\n", $lines, ));


$content = file_get_contents('C:\OSPanel\home\full-example.local\public\users.txt');
$lines = explode("\n",($content));
$users = [];
foreach ($lines as $line) {
    $users[] = explode(", ", $line);
}

foreach ($users as $user) {
    echo "Email: " . ($user[0]) . "<br>";
    echo "Name: " . ($user[1]) . "<br>";
    echo "Age: " . ($user[2]) . "<br><br>";
}

?>