  <body class="light ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form class="user col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="<?= base_url('auth'); ?>">
          
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <img src="<?=base_url('assets/')?>/images/logononame.png" style="width: 100px;" class="img-tumbnail" alt="">
          </a>
          <h1 class="h6 mb-3">Login ke Gurudocs</h1>
          <?= $this->session->flashdata('message');?>
          <div class="form-group">
            <label for="email" class="sr-only">Alamat Email</label>
            <input type="email" id="email" class="form-control form-control-lg" placeholder="Alamat Email" value="<?= set_value('email') ?>" name="email" required="" autofocus="">
          </div>
          <div class="form-group">
            <label for="password" class="sr-only">Kata Sandi</label>
            <input type="password" id="password" class="form-control form-control-lg" placeholder="Kata Sandi" value="<?= set_value('password') ?>" name="password" required="">
        
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Biarkan Saya tetap login</label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          <br>
            <div class="text-center">
                <a href="<?=base_url('auth/registrasi');?>" class="btn btn-lg btn-primary btn-block">Buat Akun</a>
            </div>
            <br>
            <div class="text-center">
                <a href="#" class="small">Lupa Password?</a>
            </div>
          <p class="mt-5 mb-3 text-muted">© Gurudocs 2024</p>
          
        </form>

      </div>
    </div>
