<?php
$users = [
    ['id' => '001','email' => 'pablo@example.com','name' => 'Pablo', 'age' => 24],
    ['id' => '002','email' => 'egor@example.com','name' => 'Egor', 'age' => 25],
    ['id' => '003','email' => 'katya@example.com','name' => 'Katya', 'age' => 26],
    ['id' => '004','email' => 'petya@example.com','name' => 'Petya', 'age' => 27],
];

foreach ($users as $user) {
    $filename = 'user_' . ($user['id']) . '.txt';
    $line = "Id: {$user['id']}\nEmail: {$user['email']}\nName: {$user['name']}\nAge: {$user['age']}\n\n";
    file_put_contents($filename, $line);
}

$directory = '.';

$files = scandir($directory);

$filesContent = [];

foreach ($files as $file) {

    if (strpos($file, '.txt')) {
        $content = file_get_contents($file);
        $filesContent[$file] = $content;
    }
}

foreach ($filesContent as $content) {
    $lines = explode("\n", trim($content));
    $userData = [];

    foreach ($lines as $line) {
        list($key, $value) = explode(":", $line);
        $userData[$key] = $value;
    }

    echo "Email: " . ($userData['Email']) . "<br>";
    echo "Name: " . ($userData['Name']) . "<br>";
    echo "Age: " . ($userData['Age']) . "<br><br>";
}



?>