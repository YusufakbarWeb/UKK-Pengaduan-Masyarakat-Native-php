<?php

session_start();
if(!isset($_SESSION['login'])){


  header('location:../../index.php');
  exit;
}
if($_SESSION['level'] != ''){
  header('location:login.php');
  exit;
}
$username = $_SESSION['username'];
require('../layouts/header.php');
?>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-6 mt-5">
      <div class="card">
          <div class="card-header">
            Dashboard Home
          </div>
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col">
                <a href="tanggapan.php" class="btn btn-primary">Daftar Pengaduan yang ditanggapi</a>
                <a href="report.php" class="btn btn-primary">Buat Laporan</a>
                <a href="../logout.php" class="btn btn-primary">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require('../layouts/footer.php'); ?>