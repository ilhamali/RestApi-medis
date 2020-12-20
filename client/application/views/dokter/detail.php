<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Dokter
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $dokter['id']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $dokter['nama']; ?></h6>
                    <p class="card-text"><?= $dokter['spesialis']; ?></p>
                    <p class="card-text"><?= $dokter['umur']; ?></p>
                    <a href="<?= base_url(); ?>dokter" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>