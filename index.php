<?php

echo "Hello from the docker container";

$mysqli = new mysqli("db", "root", "TheBlueTeam", "users");

$sql = "INSERT INTO users (username, password) VALUES('Mitch', 'password')";
$result = $mysqli->query($sql);

$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}
