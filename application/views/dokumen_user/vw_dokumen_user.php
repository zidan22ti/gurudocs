<main role="main" class="main-content">
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-12">
                <?= $this->session->flashdata('message'); ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">File</th>
                            <th scope="col">Aksi</th> <!-- Tambahkan kolom aksi untuk tautan unduh -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($dokumen as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['judul']; ?></td>
                                <td><?= $us['deskripsi']; ?></td>
                                <td><?= $us['file']; ?></td>
                                <td>
                                    <!-- Tautan untuk mengunduh dokumen -->
                                    <a href="<?= base_url('dokumen/unduh/') . $us['id']; ?>" class="btn btn-success">Unduh</a>
                                    <a href="<?= base_url('dokumen/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
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
