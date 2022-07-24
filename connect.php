<?php 
try {
    $databaseconnection = new PDO("mysql:host=localhost;dbname=databasem;charset=UTF8", "root", "");
} catch (PDOException $error) {
    echo "Connection error <br/>", $error->getMessage();
}

?>