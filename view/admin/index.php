
<?php
  session_start();
 require('../layouts/header.php')  
 ?>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-6 mt-5">
      <div class="card">
          <div class="card-header">
            Dashboard
          </div>
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col">
              <p>Info user login : <b><?= $_SESSION['username'];?></b></p>
              
              <?php if($_SESSION['level'] === 'admin') {?>
                <a href="registrasi.php" class="btn btn-primary">Registrasi User</a>
                <a href="pengaduan.php" class="btn btn-primary">Data Pengaduan</a>
                <a href="laporan.php" class="btn btn-primary">Cetak laporan </a>
              <?php }else{ ?>
                <a href="petugas.php" class="btn btn-primary">Data Pengguna</a>
                <a href="pengaduan.php" class="btn btn-primary">Data Pengaduan</a>
              <?php } ?>
                <a href="../logout.php" class="btn btn-danger my-2">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require('../layouts/footer.php') ?>