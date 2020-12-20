
<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>dokter/tambah" class="btn btn-primary">Tambah
                Data Dokter</a>
        </div>
    </div> <br>
        <div class="card">
        <div class="card-header">
        <h3>Data Dokter</h3>
                </div>
        <div class="card-body">
            <?php if (empty($dokter)) : ?>
                <div class="alert alert-danger" role="alert">
                data dokter tidak ditemukan.
                </div>
            <?php endif; ?>
  <div class="table-responsive-sm">
  <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NAMA</th>
      <th>SPESIALIS</th>
      <th>UMUR</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($dokter as $a) : ?>
    <tr>
      <td><?= $a['id']; ?></td>
      <td><?= $a['nama']; ?></td>
      <td><?= $a['spesialis']; ?></td>
      <td><?= $a['umur']; ?></td>
      <td><a href="<?= base_url(); ?>dokter/ubah/<?= $a['id']; ?>"
                        class="badge badge-success">Edit</a>
      <a href="<?= base_url(); ?>dokter/hapus/<?= $a['id']; ?>"
                        class="badge badge-danger tombol-hapus">Delete</a>
                        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>    
  </table>
  </div>
  </div>
  </div>

    