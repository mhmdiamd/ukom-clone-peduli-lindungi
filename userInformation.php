        <div class="col-12 user-information pt-2 d-flex justify-content-between">
            <div class="judul-halaman">
              <h2><i class="fa-solid fa-clock-rotate-left me-2 color-default"></i>Histori Perjalanan</h2>
            </div>
            <div class="data-user d-flex align-items-center">
              <div class="user-image me-2">
                <img class="img-fluid rounded-circle border" style="width:40px; height:40px;" src="../asset/img/profil.png" alt="user-image ">
              </div>
              <div class="user-data me-2 d-flex align-items-center">
                <span class="user-name fw-bold">Muhamad Ilham</span>
              </div>
              <div class="dropdown me-4 d-flex align-items-center">
                <span type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-gear" style="color:#3fc3d0"></i>
                </span>
                <div class="dropdown-menu p-3" style="width:500px;" aria-labelledby="dropdownMenuButton1">
                  <form action="pendudukUbahData.php" method="POST">
                      <div class="row">
                          <div class="col-6 mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                              <input type="text" name="nm_penduduk" class="form-control" id="exampleInputEmail1" value="Muhamad Ilham Darmawan" aria-describedby="emailHelp">
                          </div>
                          <div class="col-6 mb-3">
                              <label for="disabledTextInput" class="form-label">NIK</label>
                              <input type="text" id="disabledTextInput" class="form-control" value="12313465487" disabled>
                          </div>
                          <div class="col-6 mb-3">
                              <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                              <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="col-6 mb-3">
                              <label for="exampleInputEmail1" class="form-label">No Telephone</label>
                              <input type="number" name="no_tlp" class="form-control" id="exampleInputEmail1" value="02312" aria-describedby="emailHelp">
                          </div>
                          <div class="col-12 mb-3">
                              <label for="exampleInputAlamat" class="form-label">Alamat</label>
                              <textarea name="alamat" value="Your Alamat" class="form-control" id="" cols="30" rows="5">Hlalo Guys</textarea>
                          </div>
                          <div class="col-12">
                              <input type="submit" value="Ubah" class="btn w-100 btn-primary">     
                          </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>