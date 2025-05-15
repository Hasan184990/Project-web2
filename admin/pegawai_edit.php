<?php include_once 'top.php'; ?>
<?php require_once 'koneksi.php'; ?>

<?php
$id = $_GET['id'];
$query = "SELECT * FROM pegawai WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
?>

<!--begin::App Wrapper-->
<div class="app-wrapper">
  <!--begin::Header-->
  <?php include_once 'navbar.php'; ?>
  <!--end::Header-->

  <!--begin::Sidebar-->
  <?php include_once 'sidebar.php'; ?>
  <!--end::Sidebar-->

  <!--begin::App Main-->
  <main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6"><h3 class="mb-0">Edit Pegawai</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="pegawai_list.php">Data Pegawai</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Pegawai</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--end::App Content Header-->

    <!--begin::App Content-->
    <div class="app-content">
      <div class="container mt-4">
        <form action="proses_pegawai.php" method="POST">
          <input type="hidden" name="id" value="<?= $row['id']; ?>">

          <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" class="form-control" name="nip" value="<?= $row['nip']; ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" required>
              <option value="L" <?= $row['jenis_kelamin'] == 'L' ? 'selected' : ''; ?>>Laki-laki</option>
              <option value="P" <?= $row['jenis_kelamin'] == 'P' ? 'selected' : ''; ?>>Perempuan</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="<?= $row['jabatan']; ?>" required>
          </div>

          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          <a href="pegawai_list.php" class="btn btn-secondary">Batal</a>
        </form>
      </div>
    </div>
    <!--end::App Content-->
  </main>
  <!--end::App Main-->

  <!--begin::Footer-->
  <?php include_once 'footer.php'; ?>
  <!--end::Footer-->
</div>
