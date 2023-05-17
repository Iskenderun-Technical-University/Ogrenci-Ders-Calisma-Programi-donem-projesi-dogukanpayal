<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merhaba</title>
    <link rel="stylesheet" href="css/ana-sayfa-basligi.css">
    <link rel="stylesheet" href="css/hedeflerim.css">
    <link rel="stylesheet" href="css/ders-programi.css">
    <link rel="stylesheet" href="css/work-button.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;400;500;600;900&family=Montserrat:ital,wght@0,100;0,400;0,500;0,900;1,900&display=swap" rel="stylesheet">
</head>
<body>
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

    $users = array();

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn , $query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $user = array(
                'id' => $row['id'],
                'username' => $row['username'],
                'password' => $row['password']
            );
            array_push($users, $user);
        }
    }

    $dersler = array();

    $derslerQuery = "SELECT * FROM syllabus";
    $derslerResult = mysqli_query($conn , $derslerQuery);

    if ($derslerResult->num_rows > 0) {
        while ($row = $derslerResult->fetch_assoc()) {
            $ders = array(
                'id' => $row['id'],
                'userid' => $row['userid'],
                'date' => $row['date'],
                'content' => $row['content']
            );
            array_push($dersler, $ders);
        }
    }

?>


<div class="body-background">
  <!-- Karşılama Ekranı -->
    <div class="ana-sayfa-heading-box">
      <div class="heading-box">
        <h1> Hosgeldin </h1>
      </div>
      <div class="username-box">
        <h3> <?php
        session_start(); 
        $myVar = $_SESSION['loggedUser'];
        echo $users[$myVar - 1]["username"];
        ?></h3>
      </div>
    </div>

  <!-- Takvim -->

  <!-- Ders Programı -->
<div class="syllabus-main-box">
  <div class="syllabus-outside-box">
    <div class="heading-columns-box">
        <div class="heading-box">
            <h2> Ders Programı </h2>
        </div>
        <div class="columns-box">
            <!-- Pazartesi -->
            
            <div class="day">
                <div class="day-heading-box">
                    <h3>Pzt</h3>
                </div>
                <div class="day-items-box">
                    <ul id="pazartesi-item-container">
                        <?php
                            for($i=0;$i<count($dersler);$i++)
                            {
                                if($dersler[$i]["userid"] == $myVar )
                                {
                                    if($dersler[$i]["date"] == "Pazartesi")
                                    {
                                        echo '<form action="../php/ders-sil.php" method="post">';
                                            echo '<input type="text" style=" pointer-events:none; display:none; " name="id" value="'.$dersler[$i]["id"].'"></input>';
                                            echo '<li>'.$dersler[$i]["content"].'</li>';
                                            echo '<button>X</button>';
                                        echo '</form>';
                                    }
                                }
                            }
                        ?>

                        <!--
                        <li>Ders 1</li>
                        <li>Ders 2</li>
                        <li>Ders 3</li>
                        -->
                    </ul>
                </div>
            </div>
            <!-- Salı -->
            <div class="day">
                <div class="day-heading-box">
                    <h3>Sal</h3>
                </div>
                <div class="day-items-box">
                    
                    <ul id="sali-item-container">
                    <?php
                            for($i=0;$i<count($dersler);$i++)
                            {
                                if($dersler[$i]["userid"] == $myVar )
                                {
                                    if($dersler[$i]["date"] == "Salı")
                                    {
                                        echo '<form action="../php/ders-sil.php" method="post">';
                                            echo '<input type="text" style=" pointer-events:none; display:none; " name="id" value="'.$dersler[$i]["id"].'"></input>';
                                            echo '<li>'.$dersler[$i]["content"].'</li>';
                                            echo '<button>X</button>';
                                        echo '</form>';
                                    }
                                }
                            }
                        ?>
                        <!--
                        <li>Ders 1</li>
                        <li>Ders 2</li>
                        <li>Ders 3</li>
                        -->
                    </ul>
                </div>
            </div>
            <!-- Çarşamba -->
            <div class="day">
                <div class="day-heading-box">
                    <h3>Çar</h3>
                </div>
                <div class="day-items-box">
                    <ul id="carsamba-item-container">
                    <?php
                            for($i=0;$i<count($dersler);$i++)
                            {
                                if($dersler[$i]["userid"] == $myVar )
                                {
                                    if($dersler[$i]["date"] == "Çarşamba")
                                    {
                                        echo '<form action="../php/ders-sil.php" method="post">';
                                        echo '<input type="text" style=" pointer-events:none; display:none; " name="id" value="'.$dersler[$i]["id"].'"></input>';
                                        echo '<li>'.$dersler[$i]["content"].'</li>';
                                        echo '<button>X</button>';
                                        echo '</form>';                                    
                                    }
                                }
                            }
                        ?>
                        <!--
                        <li>Ders 1</li>
                        <li>Ders 2</li>
                        <li>Ders 3</li>
                        -->
                    </ul>
                </div>
            </div>
            <!-- Perşembe -->
            <div class="day">
                <div class="day-heading-box">
                    <h3>Per</h3>
                </div>
                <div class="day-items-box">
                    <ul id="persembe-item-container">
                    <?php
                            for($i=0;$i<count($dersler);$i++)
                            {
                                if($dersler[$i]["userid"] == $myVar )
                                {
                                    if($dersler[$i]["date"] == "Perşembe")
                                    {
                                        echo '<form action="../php/ders-sil.php" method="post">';
                                        echo '<input type="text" style=" pointer-events:none; display:none; " name="id" value="'.$dersler[$i]["id"].'"></input>';
                                        echo '<li>'.$dersler[$i]["content"].'</li>';
                                        echo '<button>X</button>';
                                        echo '</form>';                                    
                                    }
                                }
                            }
                        ?>
                        <!--
                        <li>Ders 1</li>
                        <li>Ders 2</li>
                        <li>Ders 3</li>
                        -->
                    </ul>
                </div>
            </div>
            <!-- Cuma -->
            <div class="day">
                <div class="day-heading-box">
                    <h3>Cum</h3>
                </div>
                <div class="day-items-box">
                    <ul id="cuma-item-container">
                    <?php
                            for($i=0;$i<count($dersler);$i++)
                            {
                                if($dersler[$i]["userid"] == $myVar )
                                {
                                    if($dersler[$i]["date"] == "Cuma")
                                    {
                                        echo '<form action="../php/ders-sil.php" method="post">';
                                        echo '<input type="text" style=" pointer-events:none; display:none; " name="id" value="'.$dersler[$i]["id"].'"></input>';
                                        echo '<li>'.$dersler[$i]["content"].'</li>';
                                        echo '<button>X</button>';
                                        echo '</form>';                                    
                                    }
                                }
                            }
                        ?>
                        <!--
                        <li>Ders 1</li>
                        <li>Ders 2</li>
                        <li>Ders 3</li>
                        -->
                    </ul>
                </div>
            </div>
            <!-- Cumartesi -->
            <div class="day">
                <div class="day-heading-box">
                    <h3>Cmt</h3>
                </div>
                <div class="day-items-box">
                    <ul id="cumartesi-item-container">
                    <?php
                            for($i=0;$i<count($dersler);$i++)
                            {
                                if($dersler[$i]["userid"] == $myVar )
                                {
                                    if($dersler[$i]["date"] == "Cumartesi")
                                    {
                                        echo '<form action="../php/ders-sil.php" method="post">';
                                        echo '<input type="text" style=" pointer-events:none; display:none; " name="id" value="'.$dersler[$i]["id"].'"></input>';
                                        echo '<li>'.$dersler[$i]["content"].'</li>';
                                        echo '<button>X</button>';
                                        echo '</form>';                                    
                                    }
                                }
                            }
                        ?>
                        <!--
                        <li>Ders 1</li>
                        <li>Ders 2</li>
                        <li>Ders 3</li>
                        -->
                    </ul>
                </div>
            </div>
            <!-- Pazar -->
            <div class="day">
                <div class="day-heading-box">
                    <h3>Pzr</h3>
                </div>
                <div class="day-items-box">
                    <ul id="pazar-item-container">
                    <?php
                            for($i=0;$i<count($dersler);$i++)
                            {
                                if($dersler[$i]["userid"] == $myVar )
                                {
                                    if($dersler[$i]["date"] == "Pazar")
                                    {
                                        echo '<form action="../php/ders-sil.php" method="post">';
                                        echo '<input type="text" style=" pointer-events:none; display:none; " name="id" value="'.$dersler[$i]["id"].'"></input>';
                                        echo '<li>'.$dersler[$i]["content"].'</li>';
                                        echo '<button>X</button>';
                                        echo '</form>';                                    
                                    }
                                }
                            }
                        ?>
                        <!--
                        <li>Ders 1</li>
                        <li>Ders 2</li>
                        <li>Ders 3</li>
                        -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="day-button-box">
            <button onclick="inputBackgroundFormPopUp()"> Ekle </button>
        </div>
    </div>

</div>
<!-- Input Form -->
<form class="input-background-form" id="input-background-formu" action="../php/ders-ekle.php" method="post">
    <div class="input-form">
        <div class="heading-box">
            <h2>Dersinizi Ekleyin</h2>
        </div>
        <div class="input-box">
            <input type="text" id="input-box" name="content">
        </div>
        <div class="input-button-box">
            <button>Ekle</button>
        </div>
        <input type="text" style="pointer-events: none;" id="selected-date" value="Pazartesi" name="date">  </input>
    </div>
    <div class="day-selector-box" id="day-selector-background-formu">
        <div class="day-selector-heading-box">
            <h3>Gün Seçiniz</h3>
        </div>
        <div class="day-selector-button-box-form">
          <div class="button-box">
            <button type="button" onclick="addTaskPazartesi()">Pzt</button>
          </div>
          <div class="button-box">
            <button type="button" onclick="addTaskSali()">Sal</button>
          </div>
          <div class="button-box">            
            <button type="button" onclick="addTaskCarsamba()">Çar</button>
          </div>
          <div class="button-box">
            <button type="button" onclick="addTaskPersembe()">Per</button>
          </div>
          <div class="button-box">
            <button type="button" onclick="addTaskCuma()">Cum</button>
          </div>
          <div class="button-box">
            <button type="button" onclick="addTaskCumartesi()">Cmt</button>
          </div>
          <div class="button-box">
            <button type="button" onclick="addTaskPazar()">Pzr</button>
          </div>

        </div>
    </div>
    <?php
        echo '<input type="text" style="display:none pointer-events: none;" value="'.$myVar.'" name="userid">'
    ?>
</form>
</div>




  <!-- Hedefler -->
<div class="goals-main-box">
  <div class="goals-outside-box">
    <div class="heading-columns-box">
        <div class="heading-box">
            <h2>Hedeflerim</h2>
        </div>
        <div class="columns-box">
            <!-- Haftalik -->
            <div class="goal">
                <div class="goal-heading-box">
                    <h3>Haftalık</h3>
                </div>
                <div class="goal-item-box">
                    <ul id="haftalik-item-container">
                        <!--
                        <li>Hedef 1</li>
                        <li>Hedef 2</li>
                        <li>Hedef 3</li>
                        -->
                    </ul>
                </div>
            </div>
            <!-- Aylık -->
            <div class="goal">
                <div class="goal-heading-box">
                    <h3>Aylık</h3>
                </div>
                <div class="goal-item-box">
                    <ul id="aylik-item-container">
                        <!--
                        <li>Hedef 1</li>
                        <li>Hedef 2</li>
                        <li>Hedef 3</li>
                        -->
                    </ul>
                </div>
            </div>
            <!-- Yıllık -->
            <div class="goal">
                <div class="goal-heading-box">
                    <h3>Yıllık</h3>
                </div>
                <div class="goal-item-box">
                    <ul id="yillik-item-container">
                        <!--
                        <li>Hedef 1</li>
                        <li>Hedef 2</li>
                        <li>Hedef 3</li>
                        -->
                    </ul>
                </div>
            </div>    
            </div>
            <div class="goal-button-box">
                <button onclick="goalInputBackgroundFormPopUp()">Ekle</button>
            </div>
        </div>
    </div>

    <!-- Input Form -->
    <div class="goal-input-background-form" id="goals-input-background-formu">
        <div class="input-form">
            <div class="heading-box">
                <h2>Dersinizi Ekleyin</h2>
            </div>
            <div class="input-box">
                <input type="text" id="goal-input-box">
            </div>
            <div class="input-button-box">
                <button onclick="goalSelectorFormPopUp()">Ekle</button>
            </div>
        </div>
        <div class="goal-selector-box" id="goal-selector-background-formu">
            <div class="goal-selector-heading-box">
                <h3>Gün Seçiniz</h3>
            </div>
            <div class="goal-selector-button-box-form">
                <div class="button-box">
                    <button onclick="addTaskHaftalik()">Haftalık</button>
                </div>
                <div class="button-box">
                    <button onclick="addTaskAylik()">Aylık</button>
                </div>
                <div class="button-box">
                    <button onclick="addTaskYillik()">Yıllık</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--  -->



  <!-- Diğer Sayfa İçin Button -->

    <div class="work-button-outside-box">
        <div class="work-button-box">
            <form action="../php/calisma-ekrani-gec.php">
                <button> Çalışma Ekranı </button>
            </form>
        </div>

    </div>

  <!-- -->
</div>
    <script src="javascript/ders-programi.js"></script>
    <script src="javascript/hedeflerim.js"></script>
</body>
</html>