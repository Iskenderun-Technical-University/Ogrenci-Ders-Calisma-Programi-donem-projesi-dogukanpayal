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
    echo "";


    $userid = $_POST["userid"];
    $heading = $_POST["heading"];
    $note = $_POST["note"];



        $sql = "INSERT INTO notes (userid , heading , note) VALUES ('$userid' , '$heading' , '$note')";
        if(mysqli_query($conn , $sql))
        {
            header("Location: ../calisma-ekrani/calisma-ekranı.php");
            exit;
            mysqli_close($conn);
        }
        else
        {
            echo "Başarısız";
            mysqli_close($conn);
        }

?>