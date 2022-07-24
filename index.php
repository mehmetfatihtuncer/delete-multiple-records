<?php
require_once("connect.php");

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
    <form action="result.php" method="post">
        <table width="500" align="center" border="1" cellpadding="0" cellspacing="0">
            <?php
            $query = $databaseconnection->prepare("SELECT * FROM persons");
            $query->execute();
            $recordcound = $query->rowCount();
            $records     = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($records as $recordlines) {
            ?>
                <tr>
                    <td><input type="checkbox" name="choice[]" value="<?php echo $recordlines["id"]; ?>"></td>
                    <td><?php echo $recordlines["name"] . " " . $recordlines["surname"]; ?></td>
                </tr>

            <?php
            }

            ?>
            <tr>
                <td><input type="submit" value="Delete checked"></td>
            </tr>
        </table>
    </form>
</body>

</html>