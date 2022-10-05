<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/css/login_style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
  </head>
  <body>
  
    <div id="content" class="content d-grid align-items-center">
        <div class="container-awal d-grid justify-content-center">
            <h2 class="text-center text-light mb-4">Si Paling Peduli Login</h2>
            <div class="card container-login bg-light p-4 rounded-3" style="width:19rem;">
                <h5 class="text-center my-3">Login sebagai Admin</h5>
                <form action="adminLoginCek.php" method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control input-login input-nik" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Username">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Katasandi</label>
                      <input type="password" name="katasandi" class="form-control input-login" id="exampleInputPassword1" placeholder="Masukan Katasandi">
                    </div>
                    <div class="bottom-login d-flex justify-content-end">
                        <a href="../login_form.php" type="submit" class="btn btn-outline-danger">Kembali</a>
                        <button type="submit" class="btn ms-2 btn-masuk bg-danger">Masuk</button>
                    </div>
                </form>
            </div>
            <p class="text-center text-light mt-4 text-copyright">Copyright © 2022, Muhamad Ilham All Right Reserved.</p>
        </div>
    </div>
     

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>