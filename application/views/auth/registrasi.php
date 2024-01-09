  <body class="light ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
      <?= $this->session->flashdata('message');?>
        <form class="user col-lg-6 col-md-8 col-10 mx-auto" method="POST" action="<?= base_url('auth/registrasi'); ?>">
          <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
              <img src="<?=base_url('assets/')?>/images/logononame.png" style="width: 100px;" class="img-tumbnail" alt="">
            </a>
            <h2 class="my-3">Buat Akun GuruDocs</h2>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>">
            <?= form_error('nama', '<small class = "text-danger pl-3">','</small>'); ?>
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
            <?= form_error('email', '<small class = "text-danger pl-3">','</small>'); ?>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="password1">Password</label>
              <input type="password" id="password1" class="form-control" value="<?= set_value('password1') ?>" name="password1">
              <?= form_error('password1', '<small class = "text-danger pl-3">','</small>'); ?>
            </div>
            <div class="form-group col-md-6">
              <label for="password2">Konfirmasi Password</label>
              <input type="password" id="password2" class="form-control" value="<?= set_value('password2') ?>" name="password2">
              <?= form_error('password2', '<small class = "text-danger pl-3">','</small>'); ?>
            </div>
          </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md-6">
              <p class="mb-2">Saran Untuk Password</p>
              <p class="small text-muted mb-2"> Untuk membuat password, anda mungkin membutuhkan beberapa peraturan berikut agar lebih aman: </p>
              <ul class="small text-muted pl-4 mb-0">
                <li>Buat Password berupa 8 karakter atau lebih </li>
                <li>Gunakan karakter spesial seperti @,_, dan sebagainya</li>
                <li>Gunakan angka</li>
              </ul>
            </div>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Buat Akun</button>
          <br>
            <div class="text-center">
                <a class="small" href="<?=base_url('auth');?>" >Sudah Punya Akun? Login Sekarang!</a>
            </div>
          <p class="mt-5 mb-3 text-muted text-center">© Gurudocs 2024</p>
        </form>
      </div>
    </div>