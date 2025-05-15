<?php
include_once 'top.php';
require_once 'koneksi.php';
?>

<div class="app-wrapper">
  <?php include_once 'navbar.php'; ?>
  <?php include_once 'sidebar.php'; ?>

  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6"><h3 class="mb-0">Data Pegawai</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="app-content">
      <div class="col-md-12">
        <div class="card card-warning card-outline mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
        <a href="pegawai_tambah.php" class="btn btn-primary">Tambah Pegawai</a>
        </div>

          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT * FROM pegawai";
                $result = mysqli_query($koneksi, $query);
                $no = 1;

                while ($row = mysqli_fetch_assoc($result)) {
                  $jk = $row['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan';
                  echo "<tr>
                          <td>{$no}</td>
                          <td>{$row['nip']}</td>
                          <td>{$row['nama']}</td>
                          <td>{$jk}</td>
                          <td>{$row['jabatan']}</td>
                          <td>
                            <a href='pegawai_edit.php?id={$row['id']}' class='btn btn-sm btn-warning'>Edit</a>
                            <a href='proses_pegawai.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick='return confirmHapus()'>Hapus</a>
                          </td>
                        </tr>";
                  $no++;
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include_once 'footer.php'; ?>
</div>

<script>
function confirmHapus() {
  return confirm('Apakah Anda yakin ingin menghapus data pegawai ini?');
}
</script>
