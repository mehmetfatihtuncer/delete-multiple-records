<?php
require_once("connect.php");

function Filter($Value){
    $ProcessOne = trim($Value);
    $ProcessTwo = strip_tags($ProcessOne);
    $ProcessThree = htmlspecialchars($ProcessTwo, ENT_QUOTES);
        return $ProcessThree;
}


$getchoicevalues = $_POST["choice"];
$idiesconnect    = implode(", ", $getchoicevalues);
$idies           = Filter($idiesconnect);


    $delete = $databaseconnection->prepare("DELETE FROM persons WHERE id IN($idies)");
    $delete->execute();

    header("Location:index.php");
    exit();
?>