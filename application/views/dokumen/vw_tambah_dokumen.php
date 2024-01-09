<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="h3 mb-4 text-gray-800"><br><?php echo $judul; ?></h1>
        <div class="card mb-5" style="max-width: 50rem;">
          <div class="card-header">Tambah Dokumen</div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="form-group">
                  <label for="judul">judul</label>
                  <input type="text" name="judul" value="<?= set_value('judul')?>" class="form-control" id="judul" placeholder="Judul">
                  <?= form_error('judul', '<small class="text-danger p1-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <input type="text" name="deskripsi" value="<?= set_value('deskripsi')?>" class="form-control" id="deskripsi" placeholder="Deskripsi">
                  <?= form_error('deskripsi', '<small class="text-danger p1-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="file">File</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file" name="file" value="<?= set_value('file')?>">
                    <label class="custom-file-label" for="file">Choose file</label>
                  </div>
                  <?= form_error('file', '<small class="text-danger p1-3">', '</small>'); ?>
                </div>
                <a href="<?= base_url('dokumen') ?>" class="btn btn-danger">Tutup</a>
                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Dokumen</button>
              </form>
            </div>
          </div> 
      </div>
    </div>
  </div>
</main>