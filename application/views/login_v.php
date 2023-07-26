<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>Login SIA TPG 2 | </title>

  <!-- Bootstrap -->
  <link href="<?= base_url(); ?>/../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url(); ?>/../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url(); ?>/../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?= base_url(); ?>/../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url(); ?>/../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form method="post" action="">
            <h1>Login SIA TPG 2</h1>
            <?php
            if (isset($error)) { ?>
              <p style="color: red;">Username atau Password Salah</p>
            <?php
            }
            ?>
            <div>
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" />
            </div>
            <div>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">
                  Remeber me
                </label>
              </div>
            </div>
            <br>
            <div>
              <button class="btn btn-success submit" name="login">Log in</button>
              <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <div class="clearfix"></div>
              <br />
            </div>
          </form>
        </section>
      </div>

    </div>
  </div>
</body>

</html>