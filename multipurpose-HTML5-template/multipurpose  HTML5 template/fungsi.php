<?php

    $db = mysqli_connect('localhost','root','','fishlist');
    
    if(isset($_POST["submit_register"])){


        $nama = $_POST["nama"];

        $email = $_POST["email"];
        $pasword = $_POST["pasword"];
        $isi = mysqli_query($db,"INSERT INTO register VALUES ('$nama','$email','$pasword')");
        header("Location:Login.html");
        exit;
    }
?>