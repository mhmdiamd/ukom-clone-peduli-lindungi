<?php

    include "../koneksi.php";

    $username = mysqli_real_escape_string($konek, $_POST['username']);
    $katasandi = mysqli_real_escape_string($konek, md5($_POST['katasandi']));
    
    $sqlAdmin = "SELECT * FROM tb_admin WHERE username = '$username' AND kata_sandi = '$katasandi'";
    $eksAdmin = mysqli_query($konek, $sqlAdmin);
    echo $rowAdmin = mysqli_num_rows($eksAdmin);
    if($rowAdmin > 0){
        session_start();
        $dataAdmin = mysqli_fetch_assoc($eksAdmin);
        $_SESSION['id_admin'] = $dataAdmin['id_admin'];
        $_SESSION['status'] = 'admin';
        header("location: adminBeranda.php");
    }else{
        header("location: formLoginAdmin.php?eror=1");
    }

?>