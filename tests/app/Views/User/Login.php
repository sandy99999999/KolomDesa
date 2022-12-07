
    <!-- <link href="https:/getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
</head>
 
<body class="text-center">
 
    <main class="form-signin">
        <php if (!empty(session()->getFlashdata('error'))) : >
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <php echo session()->getFlashdata('error'); >
            </div>
        <php endif; >
        <form method="post" action="<= base_url(); >/login/process">
            <= csrf_field(); >
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
            
 
 
 
</body>
 -->



    <!-- <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Register Form</h1>
            Silahkan Daftarkan Identitas Anda
            <hr />
            <hp if (!empty(session()->getFlashdata('error'))) : >
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <php echo session()->getFlashdata('error'); >
                </div>
            <php endif; >
            <form method="post" action="<= base_url(); >/register/process">
                <= csrf_field(); >
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_conf" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_conf" name="password_conf">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
            <hr />
 
        </div>
    </main>
 
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer> -->
 
 
 
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
            <form>
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Log in</a>
                <a class="reset_pass" href="#">Lost your password</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site
                  <a href="<?= base_url()?>/register" class="to_register"> Create Account </a>
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
