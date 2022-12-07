<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>KOLOM DESA | Login</title>

  <!-- Bootstrap -->
  <link href="<?= base_url('assets3') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('assets3') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('assets3') ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?= base_url('assets3') ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url('assets3') ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">

          <!-- <php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <php echo session()->getFlashdata('error'); ?>
            </div>
          <php endif; ?> -->

          <?php if ($error_message) : ?>
            <div class="alert alert-danger" role="alert"></div>
          <?php endif; ?>

          <form method="post" action="<?= base_url(); ?>/login/process">
            <?= csrf_field(); ?>
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <input type="text" name="username" placeholder="Username" class="form-control">
            <input type="password" name="password" placeholder="Password" class="form-control">
            <button type="submit" class="w-100 btn btn-lg btn-secondary">Login</button>
          </form>

          <div class="clearfix"></div>

          <div class="separator">
            <p class="change_link">Belum Punya Akun?
              <a href="<?= base_url() ?>/register" class="to_register"> Daftar ! </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
              <h1><i class="fa fa-paw"></i> KOLOM DESA!</h1>
              <p>©2022 All Rights Reserved. KOLOM DESA! is a Bootstrap 4 template. Privacy and Terms</p>
            </div>
          </div>

        </section>
      </div>
    </div>
  </div>
</body>

</html>