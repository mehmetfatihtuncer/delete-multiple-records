<?php
try{
    $databaseconnection = new PDO("mysql:host=localhost;dbname=databasem;charset=UTF8","root","");

}catch(PDOException $error){
    echo "Connection error <br/>", $error->getMessage();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Multiple Records </title>
</head>
<body>
    
</body>
</html>