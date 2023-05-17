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
    echo "Bağlantı başarılı!";


    $userid = $_POST["userid"];
    $heading = $_POST["heading"];
    $note = $_POST["note"];



        $sql = "INSERT INTO notes (userid , heading , note) VALUES ('$userid' , '$heading' , '$note')";
        if(mysqli_query($conn , $sql))
        {
            echo "Başarılı";
            mysqli_close($conn);
        }
        else
        {
            echo "Başarısız";
            mysqli_close($conn);
        }

?>