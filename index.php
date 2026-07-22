<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$oonn = new mysqli("localhost", "root", "mysql", "mysql");
if ($oonn -> connect_error) {
    die ("connection falied: ". $oonn->connect_error);
} else {
    echo "connection successful!";
}
$oonn->close();

?>