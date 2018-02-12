<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=db-test', 'root', 'root');
} catch(PDOException $exception) {
    die($exception->getMessage());
}
