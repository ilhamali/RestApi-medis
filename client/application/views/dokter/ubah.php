<div class="container">
<br>
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Dokter
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $dokter['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $dokter['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="spesialis">Spesialis</label>
                            <input type="text" name="spesialis" class="form-control" id="spesialis" value="<?= $dokter['spesialis']; ?>">
                            <small class="form-text text-danger"><?= form_error('spesialis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" class="form-control" id="umur" value="<?= $dokter['umur']; ?>">
                            <small class="form-text text-danger"><?= form_error('umur'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>