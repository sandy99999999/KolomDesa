    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KOLOM DESA | Register </title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets3') ?>//vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets3') ?>//vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets3') ?>//vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url('assets3') ?>//vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets3') ?>//build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?= base_url(); ?>/register/process">
                 <?= csrf_field(); ?>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" />
              </div>

              <div class="mb-3">
                <input type="hash" class="form-control" id="password" name="password" placeholder="Password" required="" />
              </div>

              <div> 
              <div>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required="" />
              </div>
              <button type="submit" class="btn btn-outline-secondary bg-whith">Register</button>
                <!-- <a class="btn btn-outline-success" type="submit" class="btn btn-default submit" >Submit</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member 
                  <a href="<?= base_url()?>/login" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> KOLOM DESA!</h1>
                  <p>©2022 All Rights Reserved. KOLOM DESA! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
