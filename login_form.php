<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/login_style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
  </head>
  <body>
  
    <div id="content" class="content d-grid align-items-center">
        <div class="container-awal d-grid justify-content-center">
            <h2 class="text-center text-light mb-4">Si Paling Peduli Login</h2>
            <div class="card container-login bg-light p-4 rounded-3" style="width:19rem;">
                <h4 class="text-center mb-3">Login</h4>
                <a class="btn btn-fb w-100 rounded-pill text-light mb-2" href=""><i class="fa-brands fa-facebook-f me-2"></i> Login dengan Facebook</a>
                <a class="btn btn-twt w-100 rounded-pill text-light" href=""><i class="fa-brands fa-twitter me-2"></i>Login dengan Twitter</a>
                <h5 class="text-center my-3">Login dengan Email</h5>
                <form action="pendudukCek.php" method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nomor Induk Kependudukan</label>
                      <input type="number" class="form-control input-login input-nik" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIK">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control input-login" id="exampleInputPassword1" >
                    </div>
                    <div class="bottom-logi d-grid">
                        <button type="submit" class="btn btn-masuk rounded-pill">Masuk</button>
  
                    </div>
                    <p class="daftar-text text-center mt-2">Pengguna Baru?<a class="text-primary" type="button"data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Daftar</a>
                    <br>
                    <span>Login Sebagai </span><a href="admin/formLoginAdmin.php" class="text-primary" type="button">
                    Admin
            
                  </a></p>
                </form>
            </div>
            <p class="text-center text-light mt-4 text-copyright">Copyright © 2022, Muhamad Ilham All Right Reserved.</p>
        </div>
    </div>

     <!-- Modal -->
     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Registrasi Penduduk</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="penduduk/pendudukRegister.php" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                  <input type="number" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputNama" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nm_penduduk" class="form-control" id="exampleInputNama">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputNama">
                </div>
                <div class="mb-3">
                  <label for="exampleInputNotlp" class="form-label">No Telephone</label>
                  <input type="number" name="no_tlp" class="form-control" id="exampleInputNotlp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputTgllahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" id="exampleInputTgllahir">
                </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

     

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>