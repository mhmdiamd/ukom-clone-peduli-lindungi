<?php
    session_start();
    include "../koneksi.php";

    $_SESSION['id_admin'];

    $tglSekarang = date("D");
    $hariSekarang = explode(" ", $tglSekarang);
    $hariSekarangUpdate = $hariSekarang[0];

    function hariIndo($nmHari){
        switch($nmHari){
            case "Mon": 
                $hariSekarangUpdate = "Senin";
                break;
            case "Tue":
                $hariSekarangUpdate = "Selasa";
                break;
            case "Wed":
                $hariSekarangUpdate = "Rabu";
                break;
            case "Thu":
                $hariSekarangUpdate = "Kamis";
                break;
            case "Fri":
                $hariSekarangUpdate = "Jumat";
                break;
            case "Sat":
                $hariSekarangUpdate = "Sabtu";
                break;
            case "Sun":
                $hariSekarangUpdate = "Minggu";
                break;
        }
        return $hariSekarangUpdate;
    }
   
    hariIndo($hariSekarangUpdate);


    // function tanggalIndonesia($tanggal){
    //     $bulan = array (
    //        1=>  "Januari",
    //             "February",
    //             "Maret",
    //             "Januari",
    //             "Januari",
    //             "Januari",
    //             "Januari"
    //     );

    //     $var = explode("-", $tanggal);
    // }

    print_r(explode("-",date("Y-m-d")));

?>