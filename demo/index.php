<?php
include 'menu.php';
?>

<!-- partial -->
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet">
          <div class="mdc-card info-card info-card--success">
            <div class="card-inner">
              <h5 class="card-title">Barang Masuk </h5>
              <?php
              include "../config/koneksi.php";
              $bulan = date("m");
              $tgl = date("Y-m-d");
              $sql = mysqli_query($koneksi, "SELECT COUNT(id_barang_masuk) AS hasil FROM barang_masuk WHERE month(tanggal) = '$bulan'");
              $hasil =  mysqli_fetch_assoc($sql);
              $cek    = mysqli_num_rows($sql);
              if ($cek > 0) { ?>
                <h5 class="font-weight-light pb-2 mb-1 border-bottom">
                  <?php echo $hasil['hasil']; ?> Layanan
                </h5>
              <?php } else { ?>
                <h5 class="font-weight-light pb-2 mb-1 border-bottom">
                  0 Layanan
                </h5>
              <?php } ?>
              <p class="tx-12 text-muted">Bulan <?php setlocale(LC_TIME, 'id_ID');
                                                echo strftime('%B'); ?></p>
              <div class="card-icon-wrapper">
                <i class="material-icons">dvr</i>
              </div>
            </div>
          </div>
        </div>
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet">
          <div class="mdc-card info-card info-card--danger">
            <div class="card-inner">
              <h5 class="card-title">Barang Keluar</h5>
              <?php
              include "../config/koneksi.php";
              $bulan = date("m");
              $tgl = date("Y-m-d");
              $sql = mysqli_query($koneksi, "SELECT COUNT(id_barang_keluar) AS hasil FROM barang_keluar WHERE month(tanggal) = '$bulan'");
              $hasil =  mysqli_fetch_assoc($sql);
              $cek    = mysqli_num_rows($sql);
              if ($cek > 0) { ?>
                <h5 class="font-weight-light pb-2 mb-1 border-bottom">
                  <?php echo $hasil['hasil']; ?> Layanan
                </h5>
              <?php } else { ?>
                <h5 class="font-weight-light pb-2 mb-1 border-bottom">
                  0 Layanan
                </h5>
              <?php } ?>
              <p class="tx-12 text-muted">Bulan <?php setlocale(LC_TIME, 'id_ID');
                                                echo strftime('%B'); ?></p>
              <div class="card-icon-wrapper">
                <i class="material-icons">attach_money</i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabel Stok Barang -->
    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
      <div class="mdc-card p-0">
        <h6 class="card-title card-padding pb-0">
          <b>Data Barang Minim Stok</b>
        </h6>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-left">No</th>
                <th class="text-left">Nama Barang</th>
                <th class="text-left">Stok Barang</th>
                <th class="text-left">Tempat</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../config/koneksi.php';
              $t = date("Y-m-d");
              $no = 1;
              $sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE stok <= 20 ");
              while ($r = mysqli_fetch_assoc($sql)) {
              ?>
                <tr>
                  <td class="text-left"><?php echo $no++; ?></td>
                  <td class="text-left"><?php echo $r['nama_barang']; ?></td>
                  <td class="text-left"><?php echo $r['stok']; ?></td>
                  <td class="text-left"><?php echo $r['tempat']; ?></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
  <!-- partial:partials/_footer.html -->
  <footer>
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
          <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright @Kelompok Berapa Lupa</span>
        </div>
      </div>
    </div>
  </footer>
  <!-- partial -->
</div>
</div>
</div>
<!-- plugins:js -->
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="../assets/vendors/chartjs/Chart.min.js"></script>
<script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../assets/js/material.js"></script>
<script src="../assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../assets/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>