<?php   
    $server = "localhost";
    $db = "veritabani";
    $username = "root";
    $password = "";
    $baglan = mysqli_connect("$server", "$username", "$password","$db") or die(mysql_error());


    $vericek = $baglan->query("SELECT kullaniciAdi, sifre FROM deneme");
    $veriler = $vericek->fetch_array();

    $form_id = $_POST["id"];
    $form_pw = $_POST["pw"];

    if ($form_id == $veriler["kullaniciAdi"] and $form_pw == $veriler["sifre"]
    ) {
    header("location:admin.php");
    }
    else {
        echo "Giriş başarısız.";
    }
    $vericek->close();
    $baglan->close();


?>
