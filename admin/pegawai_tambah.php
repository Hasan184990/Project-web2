<?php include_once 'top.php'; ?>
<?php require_once 'koneksi.php'; ?>

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
          <div class="col-sm-6"><h3 class="mb-0">Tambah Pegawai</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="pegawai_list.php">Data Pegawai</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Pegawai</li>
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
          <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" class="form-control" name="nip" required maxlength="10">
          </div>

          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" required>
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" required>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
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
