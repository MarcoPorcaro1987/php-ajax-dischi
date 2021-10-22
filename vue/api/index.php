<?php
require __DIR__ . "/../../database.php";

header("Content-Type: application/JSON");
header("Access-Control-Allow-Origin: *");

echo json_encode($database);
?>