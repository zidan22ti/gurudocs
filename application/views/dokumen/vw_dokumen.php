<main role="main" class="main-content">
  <div class="contain-fluid">
    <h1 class="h3 mb-4 text-gray-8"><?php echo $judul; ?></h1>
    <div class="row">
      <div class="col-md-6"><a href="<?= base_url('dokumen/tambah') ?>" class="btn btn-info mb-2">Tambah Dokumen</a></div>
      <div class="col-md-12">
        <?= $this->session->flashdata('message'); ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">File</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($dokumen as $us) : ?>
            <tr>
              <td><?= $i; ?>.</td>
              <td><?=$us['judul'];?></td>
              <td><?=$us['deskripsi'];?></td>
              <td><?=$us['file'];?></td>
              <td>
                <a href="<?= base_url('dokumen/hapus/') . $us['id']; ?>" class="btn btn-danger">hapus</a>
                <a href="<?= base_url('dokumen/edit/') . $us['id']; ?>" class="btn btn-warning">edit</a>
                <a href="<?= base_url('dokumen/detail/') . $us['id']; ?>" class="btn btn-info">detail</a>
              </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>