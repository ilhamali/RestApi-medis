<div class="container">

    <br>
            <div class="card mb3">
                <div class="card-header">
                    Form Tambah Data Dokter
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id">id</label>
                            <input type="text" name="id" class="form-control" id="id">
                            <small class="form-text text-danger"><?= form_error('id'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="spesialis">Spesialis</label>
                            <input type="text" name="spesialis" class="form-control" id="spesialis">
                            <small class="form-text text-danger"><?= form_error('spesialis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" class="form-control" id="umur">
                            <small class="form-text text-danger"><?= form_error('umur'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>