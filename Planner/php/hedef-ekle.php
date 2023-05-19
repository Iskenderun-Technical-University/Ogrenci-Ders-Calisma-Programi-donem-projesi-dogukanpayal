<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ana-proje";

// mysqli objesi oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
die("Bağlantı hatası: " . $conn->connect_error);
}



$userid = $_POST["userid"];
$time = $_POST["time"];
$goal = $_POST["goal"];



    $sql = "INSERT INTO goals (userid , time , goal) VALUES ('$userid' , '$time' , '$goal')";
    if(mysqli_query($conn , $sql))
    {
        header("Location: ../ana-ekran/ana-ekran.php");
        exit;
        mysqli_close($conn);
    }
    else
    {
        echo "Hedef Ekleme Başarısız";
        mysqli_close($conn);
    }


?>