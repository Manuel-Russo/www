<?php
    session_start();
    try {
        $conn = new mysqli("localhost","root","gardone","universita");
        $voto=rand(1,30);
        if ($voto<18)   {
            $voto="NULL";
        }
        $sql = "INSERT INTO esame(esame_di,sostenuto_da,valutazione,data_esame) VALUES ({$_POST['id_corso']},{$_SESSION['id_user']},$voto,'".date('Y-m-d')."')";
        if ($conn->query($sql)===TRUE) {
            if ($voto != "NULL") {
                echo $voto;
            }
            else {
                echo "BOCCIATO!!";
            }
        }
        
    } catch (Throwable $error) {
        echo "c'è un errore: ".$error; 
    }
?>