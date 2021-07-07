<?php
    require_once __DIR__ ."/config-test.php";
    $connect = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($connect && $connect->connect_error) {
        echo "Errore di connessione: " . $connect->connect_error;
        die();
    }

?>
