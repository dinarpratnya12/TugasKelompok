<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Signin Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/cover.css'); ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-3">

      </div>
      <?php echo form_open_multipart("Pelanggan/tambah"); ?>
      <?php echo validation_errors();?>
      <div class="col-md-6" style="top:10rem">
        <form class="form-signin">
          <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
          <br>
          <label for="inputnama_pelanggan" class="sr-only">Nama</label>
          <input type="nama_pelanggan" id="inputnama_pelanggan" class="form-control" placeholder="Nama Lengkap" required autofocus>
          <br>
          <label for="inputalamat" class="sr-only">Alamat</label>
          <input type="alamat" id="inputalamat" class="form-control" placeholder="Alamat" required autofocus>
          <br>
          <label for="inputnomor_tlp" class="sr-only">Nomor Telepon</label>
          <input type="nomor_tlp" id="nomor_tlp" class="form-control" placeholder="Nomor Telepon" required autofocus>
          <br>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <br>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <div class="checkbox mb-3">
            <label>
              Sudah punya akun, <a href="<?= base_url(); ?>index.php/Welcome/Login">Log In</a>
            </label>
            <br>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Daftar</button>
          <br>
          <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>  
      </div>
      <div class="col-md-3">

      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>
</html>
