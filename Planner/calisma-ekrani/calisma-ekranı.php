<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calisma-ekrani.css">
    <link rel="stylesheet" href="css/pomodoro-timer.css">
    <link rel="stylesheet" href="css/to-do.css">
    <link rel="stylesheet" href="css/calculator.css">
    <link rel="stylesheet" href="css/notes.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Çalışma Ekranı</title>
</head>
<body>
<?php
    session_start(); 
    $myVar = $_SESSION['loggedUser'];

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

    $notes = array();

    $query = "SELECT * FROM notes";
    $result = mysqli_query($conn , $query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $note = array(
                'id' => $row['id'],
                'userid' => $row['userid'],
                'heading' => $row['heading'],
                'note' => $row['note']
            );
            array_push($notes, $note);
        }
    }

?>


<div class="body-background">


    <!-- Heading Kısmı -->
    <div class="calisma-ekrani-heading-outside-box">
        <div class="calisma-ekrani-heading-box">
            <h2> Calışma Ekranı</h2>
        </div>
    </div>

    <!-- Pomodoro Kısmı -->
    <div class="pomodoro-todo-outside-box">
        <div class="pomodoro-outside-box">
            <div class="pomodoro-inside-box">
                <div class="pomodoro-timer-heading-button-box">
                <div class="pomodoro-heading-box">
                    <h1>Pomodoro Timer</h1>
                </div>
                <div class="pomodoro-timer-box">
                    <div class="pomodoro-clock-box">
                        <div class="timer-display">25:00</div>
                    </div>    
                </div>
                <div class="pomodoro-buttons-box">
                    <div class="pomodoro-settings-box">
                        <div class="pomodoro-button">
                            <button id="settings-form" onclick="pomodoroInputBackgroundFormPopUp()"> Ayarla </button>
                        </div>
                    </div>
                    <div class="pomodoro-set-buttons-box">
                        <div class="pomodoro-button">
                            <button id="pomodoro-button">Pomodoro</button>
                        </div>
                        <div class="pomodoro-button">
                            <button id="short-break-button">Kısa Mola</button>
                        </div>
                        <div class="pomodoro-button">
                            <button id="long-break-button">Uzun Mola</button>
                        </div>
                    </div>
                    <div class="pomodoro-actions-box">
                        <div class="pomodoro-button">
                            <button id="start-button">Başlat</button>
                        </div>
                        <div class="pomodoro-button">
                            <button id="pause-button">Durdur</button>
                        </div>
                        <div class="pomodoro-button">
                            <button id="reset-button">Sıfırla</button>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
            <div class="pomodoro-settings-input-form animate__animated animate__fadeIn" id="pomodoro-input-background-formu">
                <form class="timer-form">
                    <div class="timer-form-heading">
                        <h1>Ayarlar</h1>
                    </div>
                    <div class="pomodoro-label-input-box">
                        <div class="pomodoro-label-box">
                            <label for="pomodoro-time">Pomodoro Süresi:</label>
                        </div>
                        <div class="pomodoro-input-box">
                            <input type="number" id="pomodoro-time" value="25" min="1" max="60" required>
                        </div>
                    </div>
                    <div class="pomodoro-label-input-box">
                        <div class="pomodoro-label-box">
                            <label for="short-break-time">Kısa Mola Süresi:</label>
                        </div>
                        <div class="pomodoro-input-box">
                            <input type="number" id="short-break-time" value="5" min="1" max="60" required>
                        </div>
                    </div>
                    <div class="pomodoro-label-input-box">
                        <div class="pomodoro-label-box">
                            <label for="long-break-time">Uzun Mola Süresi:</label>
                        </div>
                        <div class="pomodoro-input-box">
                            <input type="number" id="long-break-time" value="15" min="1" max="60" required>
                        </div>
                    </div>
                    <div class="settings-pomodoro-button">
                        <input type="submit" value="Uygula">
                    </div>
                </form>

            </div>
        </div>

        <!-- Hesap Makinesi - to-do - Notlar Kısmı-->
        

        <div class="to-do-main-box">
            <div class="to-do-outside-box">
                <!-- Hesap Makinesi Kısmı -->
                <div class="calculator-outside-box">
                    <div class="calculator-down-button-box" id="calculator-down-button-form">
                        <button onclick="calculatorFormPopUpKapat()"> - </button>
                    </div>
                    <div class="calculator-up-button-box" id="calculator-up-button-form">
                        <button onclick="calculatorFormPopUp()"> ^ </button>
                    </div>
                    <div class="calculator-heading-box">
                        <p> Hesap Makinesi </p>
                    </div>

                    <div class="calculator-inside-box animate__animated animate__backInUp " id="calculator-form">
                        <input type="text" class="result" id="result" readonly>
                    <div class="calculator-row-box">
                        <div class="row">
                            <button class="button" onclick="clearResult()">C</button>
                            <button class="button" onclick="backspace()"><</button>
                            <button class="button" onclick="insert('%')">%</button>
                            <button class="button" onclick="insert('/')">/</button>
                        </div>
                        <div class="row">
                            <button class="button" onclick="insert('7')">7</button>
                            <button class="button" onclick="insert('8')">8</button>
                            <button class="button" onclick="insert('9')">9</button>
                            <button class="button" onclick="insert('*')">*</button>
                        </div>
                        <div class="row">
                            <button class="button" onclick="insert('4')">4</button>
                            <button class="button" onclick="insert('5')">5</button>
                            <button class="button" onclick="insert('6')">6</button>
                            <button class="button" onclick="insert('-')">-</button>
                        </div>
                        <div class="row">
                            <button class="button" onclick="insert('1')">1</button>
                            <button class="button" onclick="insert('2')">2</button>
                            <button class="button" onclick="insert('3')">3</button>
                            <button class="button" onclick="insert('+')">+</button>
                        </div>
                        <div class="row">
                            <button class="button" onclick="insert('0')">0</button>
                            <button class="button" onclick="insert('.')">.</button>
                            <button class="button" onclick="calculate()">=</button>
                        </div>
                    </div>
                </div>
                </div>
                        <!-- To-do Listesi -->
            <div class="to-do-heading-column-box">
                <div class="to-do-heading-box">
                    <h2> Yapılacaklar </h2>
                </div>
                <div class="to-do-column-box">
                    <div class="to-do-inside-column">
                        <div class="to-do-items-box">
                            <ul id="todo-item-container">
                                <!--
                                <li>İtem 1</li>
                                <li>İtem 2</li>
                                <li>İtem 3</li>
                                -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="to-do-button-box">
                    <button onclick="todoInputBackgroundFormPopUp()"> Ekle </button>
                </div>
            </div>

            <!-- Not Kısmı -->

            <div class="notes-outside-box">
                <div class="notes-down-button-box" id="notes-down-button-form">
                    <button onclick="notEkleButtonPopUpKapat()"> - </button>
                </div>
                <div class="notes-up-button-box" id="notes-up-button-form">
                    <button onclick="notEkleButtonPopUp()"> ^ </button>
                </div>
                <div class="notes-heading-box">
                    <p> Notlar </p>
                </div>
                <div class="notes-main-box animate__animated animate__fadeIn" id="notes-form">
                    <div class="container">
                      <div class="notes-heading-outside-box">
                        <div class="notes-heading-inside-box">
                          <h1>Not Defteri</h1>
                        </div>
                      </div>
                      <form id="form" action="../php/not-ekle.php" method="post">
                        <input type="text" id="title" placeholder="Başlık ekle..." name="heading">
                        <textarea id="input" placeholder="Not ekle..." name="note"></textarea>
                        <?php
                            
                            echo '<input value="'.$myVar.'" name ="userid" style="display:none;" id="kekw">'
                            
                        ?>
                        <div class="notes-input-button-box">
                            <button type="submit">Ekle</button>
                            <button onclick="notesInputFormPopUpKapat()" type="button"> Kapat </button>
                        </div>
                      </form>
                        
                    </div>
                </div>
                  <div class="notes-container-box" id="notes-container-form">
                    <div class="add-note-button-box animate__animated animate__fadeIn">
                        <button onclick="notesInputFormPopUp()"> Not Ekle </button>
                    </div>
                    <ul id="list">
                    <?php
                            for($i=0;$i<count($notes);$i++)
                            {
                                if($notes[$i]["userid"] == $myVar )
                                {
                                    
                                    
                                        echo '<form action="../php/not-sil.php" method="post">';
                                            echo '<input type="text" style=" pointer-events:none; display:none; " name="id" value="'.$notes[$i]["id"].'"></input>';
                                            echo '<li>';
                                            echo '<h3>'.$notes[$i]["heading"].'</h3>';
                                            echo '<span>'.$notes[$i]["note"].'</span>';
                                            echo '<button>X</button>';
                                            echo '</li>';
                                        echo '</form>';
                                    
                                }
                            }
                        ?>
                        <!-- <li> 
                            <h3> ördek </h3>
                            <span>asd</span>
                            <button>asd</button>
                        </li> -->
                    </ul>
                    </div>






                
            </div>
            </div>
            <div class="to-do-input-background-form animate__animated animate__fadeIn" id="todo-input-background-formu">
            <div class="to-do-input-form animate__animated animate__fadeIn">
                <div class="to-do-heading-box">
                    <h2> Görevinizi Ekleyin </h2>
                </div>
                <div class="to-do-input-box">
                    <input type="text" id="todo-input-box">
                </div>
                <div class="to-do-input-button-box">
                    <button onclick="todoAddTask()">Ekle</button>
                </div>
            </div>
            </div>
        </div>
    </div>







</div>
<script src="js/calculator.js"></script>
<script src="js/pomodoro-timer.js"></script>
<script src="js/to-do.js"></script>
<script src="js/notes.js"></script>
</body>
</html>