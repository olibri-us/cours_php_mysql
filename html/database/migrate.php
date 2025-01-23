<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/database/connector.php");

$folder = "./migrations/";
$files = scandir($folder);

$bdd = connect_server();

foreach ($files as $file) {
    $filePath = $folder . $file;
    $fileInfo = pathinfo($filePath);
    if (!is_dir($filePath) && $fileInfo['extension'] == "sql") {
        $content = file_get_contents($filePath);
        $req = $bdd->prepare($content);
        $req->execute();
        echo "script : " . $filePath . " was run with success <br>";
        echo "  --> <pre>" . $content . "</pre> <br><br>";
    }
}
