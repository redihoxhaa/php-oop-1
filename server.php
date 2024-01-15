<?php
include_once __DIR__ . "/db.php";
header('Content-Type: application/json');

if ($_GET["key"] === "movies") {
    echo json_encode($movies);
}
