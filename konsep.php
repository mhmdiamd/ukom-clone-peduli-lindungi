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

              <!-- Content Start -->

              
              <!-- Content End -->


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