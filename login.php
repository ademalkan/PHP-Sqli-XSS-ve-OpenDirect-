<?php
    $server = "localhost";
    $db = "veritabani";
    $username = "root";
    $password = "";
    $baglan = mysqli_connect("$server", "$username", "$password","$db") or die(mysql_error());


    $id = $_POST['id'];
    $pw = $_POST['pw'];

    if ($id && $pw) {
        $vericek = $baglan->query("SELECT * FROM deneme WHERE kullaniciAdi ='$id' and sifre = '$pw'");
        $count = mysqli_num_rows($vericek);
        if ($count) {
            header("location:admin.php");
        }
        else{
            die("Kullanıcı adı yada şifre hatalı !");
        }
    }
    else {
        die("HATA");
    }


?>
