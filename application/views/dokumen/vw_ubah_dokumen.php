<main role="main" class="main-content">
    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <h1 class="h3 mb-4 text-gray-800"><br><?php echo $judul; ?></h1>
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form edit Dokumen
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $dokumen['id'] ?>">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" value="<?= $dokumen['judul'] ?>" class="form-control" id="judul" placeholder="judul">
                                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" name="deskripsi" value="<?= $dokumen['deskripsi'] ?>" class="form-control" id="deskripsi" placeholder="Deskripsi">
                                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="file">File</label>
                                    <input type="file" name="file" value="<?= $dokumen['file'] ?>" class="form-control" id="file" placeholder="File">
                                        <?= form_error('file', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <a href="<?= base_url('dokumen') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Dokumen</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</main>