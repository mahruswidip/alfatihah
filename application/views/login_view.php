<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nipindo Travel | Admin</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/css/login.css'); ?>">
</head>

<body style="background-color: #e4ffe0!important;">
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?php echo site_url('assets/images/hero-bg3.jpg'); ?>" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <div class="row">
                  <div class="col-6">
                    <img class="img-fluid" src="<?php echo base_url('assets'); ?>/images/logo.png" alt="">
                  </div>
                </div>
              </div>
              <p class="login-card-description">Masuk untuk melanjutkan</p>
              <?php
              if ($this->session->flashdata('error') != '') {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('error');
                echo '</div>';
              }
              ?>
              <?php
              if ($this->session->flashdata('success_register') != '') {
                echo '<div class="alert alert-info" role="alert">';
                echo $this->session->flashdata('success_register');
                echo '</div>';
              }
              ?>
              <form action="<?php echo site_url('login/auth'); ?>" method="post">
                <div class="form-group">
                  <label for="username" class="sr-only">Username</label>
                  <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Username">
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name="user_password" id="user_password" class="form-control" placeholder="***********">
                </div>
                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit">
              </form>
              <p class="login-card-footer-text"><a href="<?= site_url() ?>register/index" class="text-reset"> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>