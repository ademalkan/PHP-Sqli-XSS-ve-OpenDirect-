<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
    <h3>Hoş geldiniz / Admin.php</h3>
    <form action="" method="GET">
        <label>Arama Kutusu :</label>
        <input type="text" name="arama-kutusu">
        <input type="submit" value="Ara" name="">
        <br>
        <br>
        <hr>
    </form>
    <form action="" method="GET">
        <h4>Gitmek İstediğiniz Sayfa</h4>
        <input type="text" name="git-sayfa">
        <input type="submit" value="Git" name="">
    </form>

</body>
</html>
<?php

header("X-XSS-Protection: 0");
$ara = $_GET['arama-kutusu'];

echo " ".$ara;

$git = $_GET['git-sayfa'];

header("Location:$git");

?>
