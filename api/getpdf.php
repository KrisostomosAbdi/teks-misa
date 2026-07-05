<?php

$folder = "../pdf/";

$files = glob($folder . "*.pdf");

$result = [];

foreach ($files as $file) {
    $result[] = [
        "name" => basename($file),
        "path" => "pdf/" . basename($file)
    ];
}

header('Content-Type: application/json');
echo json_encode($result);

?>