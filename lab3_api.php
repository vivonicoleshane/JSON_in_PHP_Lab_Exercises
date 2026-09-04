<?php
header('Content-Type: application/json');

$user = [
    "id" => 8,
    "name" => "Nicole Vivo",
    "email" => "nicole.vivo@example.com",
    "status" => "Active"
];

echo json_encode($user);
?>
