<?php
    $koneksi = mysqli_connect("localhost","root","","courselearnx");       
        if (isset($_POST['tmail'])){
            $mail = $_POST['tmail'];
        }
        if (isset($_POST['tusername'])){
            $user = $_POST['tusername'];
        }
        if (isset($_POST['tpassword'])){
            $pas = $_POST['tpassword'];
        }
    if(isset($_POST['kelas'])){
        $takenClass = $_POST['kelas'];
        for ($i = 0; $i < count($takenClass );$i++){
        }
        echo "Username      : $user"."<br>";
        echo "dengan Email  : $mail"."<br>";
        echo "Passwordnya   : $pas"."<br>";
        echo "Mengambil kelas sebanyak $i".'<br>';
        echo "kelas yang diambil adalah : "."<br>";
        for ($i = 0; $i < count($takenClass );$i++){
            echo $takenClass[$i].'<br>';
        }
        $data = implode(",", $_POST['kelas']);
    }
    $query = "INSERT INTO registrasi VALUES ('$mail','$user','$i','$data')";
    mysqli_query($koneksi, $query);
?>