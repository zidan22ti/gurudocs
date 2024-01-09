<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h1 class="h3 col-mb-8 text-gray-800"><?php echo $judul; ?></h1>
                <div class="card">
                    <div class="card-header justify-content-center">
                        Detail Dokumen
                    </div>
                    <div class="card-body">
                        <h2 class="card-title "><?= $dokumen['judul']; ?></h2>
                        <div class="row">
                            <div class="col-md-4">Deskripsi</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $dokumen['deskripsi']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">File</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $dokumen['file']; ?></div>
                        </div>
                    </div>
                    <div class="card-footer justify-content-center">
                        <a href="<?= base_url('dokumen') ?>" class="btn btn-danger">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>