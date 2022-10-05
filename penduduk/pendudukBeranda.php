<?php 
    include "../koneksi.php";
    // 3674521459875524
    $eksekusi = mysqli_query($konek, "SELECT *, count(id_perjalanan) as jumlahData FROM tb_perjalanan INNER JOIN tb_penduduk ON tb_perjalanan.nik = tb_penduduk.nik WHERE tb_perjalanan.nik='3674521459875524'");
    $dataArray = mysqli_fetch_assoc($eksekusi);
    $jumlahData = 100 / $dataArray['jumlahData'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Data Table -->
    <link rel="stylesheet" href="../asset2/css/dataTables.bootstrap5.css">

    <!-- CSS Eksternal -->
    <link href="../asset/css/style.css" rel="stylesheet"> 

    <!-- FontAwesome -->
    <link href="../fontawesome/css/all.css" rel="stylesheet">

    <script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Persentase Lokasi yang dikunjungi User"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
            <?php 
             $eksekusiLokasi = mysqli_query($konek, "SELECT *, COUNT(*) as jumlahData FROM tb_perjalanan INNER JOIN tb_penduduk ON tb_perjalanan.nik = tb_penduduk.nik INNER JOIN tb_lokasi ON tb_perjalanan.id_lokasi = tb_lokasi.id_lokasi WHERE tb_perjalanan.nik='3674521459875524' GROUP BY tb_perjalanan.id_lokasi");
            //  $arrayLokasi = mysqli_fetch_assoc($eksekusiLokasi);
            //  echo $jumlahData * $arrayLokasi['jumlahData'];
             foreach($eksekusiLokasi as $dataLokasi){?>
                // {y: 79.45, label: "Google"},
                // {y: 7.31, label: "Bing"},
                // {y: 7.06, label: "Baidu"},
                // {y: 4.91, label: "Yahoo"},
                {y: <?php echo $jumlahData * $dataLokasi['jumlahData'] ?> , label: "<?php echo $dataLokasi['nm_lokasi'] ?>"},
           <?php } ?>
		]
	}]
});
chart.render();

}
</script>
    <title>Si Paling Peduli</title>
  </head>
  <body>
  


  <div class="container-fluid p-0">
    <div class="row row-utama">
      <!-- Sidebar -->
      <?php include "../sidebar.php"; ?>
      <!-- Akhir Sidebar -->

      <div class="col pe-3">
        <div class="row">
          <div class="container">

            <?php include "../userInformation.php"; ?>

            <div class="col-12 col-content mt-3">
              <div class="row">

                <div class="col-12 col-md-6 mb-2 col-lg-4">
                  <div class="card p-2 border-0 shadow">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <div class="card-items">
                        <h5 class="card-title">Lokasi Terakhir</h5>
                        <span class="fw-bold" style="font-size:1.2em;">SMK AL Amanah</span>
                      </div>
                      <span onClick="clickCard()" class="btn-info text-light rounded-pill py-1 px-2">Selengkapnya
                        <i class="fa-solid fa-circle-arrow-right"></i>
                      </span>
                    </div>
                    <div id="card-info" class="card-info p-2 text-center">
                      <h5>Tanggal : </h5>
                      <span>2002 March 13</span>
                      <h5>Waktu : </h5>
                      <span>20:10 PM</span>
                      <div onClick="clickCard()" class="close-btn d-flex align-items-center justify-content-center bg-danger rounded-circle">
                        <i class="fa-solid fa-xmark"></i>
                      </div>
                    </div>
                    <i class="fa-solid fa-map-location card-icon"></i>
                  </div>
                </div>

                <div class="col-12 col-md-6 mb-2 col-lg-4">
                  <div class="card p-2 border-0 shadow">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <div class="card-items">
                        <h5 class="card-title">Lokasi Sering dikunjungi</h5>
                        <span class="fw-bold" style="font-size:1.2em;">SMK AL Amanah</span>
                      </div>
                      <a href="#" class="text-primary">Lihat Selengkapnya</a>
                    </div>
                    <i class="fa-solid fa-fire-flame-curved card-icon"></i>
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                  <div class="card p-2 border-0 shadow">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <div class="card-items">
                        <h5 class="card-title">Suhu Terakhir</h5>
                        <span class="fw-bold" style="font-size:2em;">38</span>
                      </div>
                      <a href="#" class="text-primary">Lihat Selengkapnya</a>
                    </div>
                    <i class="fa-solid fa-temperature-high card-icon"></i>
                  </div>
                </div>

                <div class="col-12 col-sm-8 mt-4">
                  <div class="container p-4 shadow">
                    <!-- Charts -->
                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                    <!-- Akhir Charts -->
                  </div>
                </div>

                <div class="col-12 col-md-4 mt-4">
                  <div class="card shadow border-0 card-lokasi">
                    <div class="card-body">
                      <h5 class="card-title text-light text-center">Perjalanan Selama 3 Hari Terakhir</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  




<script src="../fontawesome/js/all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../asset2/js/jquery-3.5.1.js"></script>
<script src="../asset2/js/datatables.js"></script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script>

  function clickCard (){
    const cardInfo = document.getElementById("card-info");

    if(cardInfo.style.left == "-100%"){
      cardInfo.style.left = 0;
    }else{
      cardInfo.style.left = "-100%";
    }
  }

    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
  </body>
</html>