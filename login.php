<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Hit the Desk : Log in</title>
  <!-- Favicon -->
  <link rel="icon" href="vendor/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="vendor/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="vendor/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="node_modules/preload.js/dist/css/preload.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="vendor/assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="vendor/assets/custom/1.0.1/css/style.css?v=1.2.0" type="text/css">
</head>

<body class="bg-gradient-primary" style="min-height: none !important;">
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <!-- <div class="header bg-gradient-primary py-5 py-lg-5 pt-lg-7">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div> -->
    <!-- Page content -->
    <div class="container pb-5 mt-5">
      <div class="row justify-content-center">
        <div class="col-12 text-center pb-4">
          <a class="navbar-brand" href="Javascript:relocation('index')">
            <img src="vendor/assets/img/brand/white.png" style="max-width: 200px;">
          </a>
        </div>
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h1>Sign in</h1>
                <small>with credentials</small>
              </div>
              <form role="form" class="loginform" onsubmit="return false;">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" id="txtEmail" autofocus>
                  </div>
                  <div class="reqDiv text-danger dn" id="reqEmail">
                    ** Please enter e-mail address
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" id="txtPassword">
                  </div>
                  <div class="reqDiv text-danger dn" id="reqPassword">
                    ** Please enter password
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="resetpassword" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="register" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="vendor/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="vendor/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="vendor/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script type="text/javascript" src="node_modules/preload.js/dist/js/preload.js"></script>
  <!-- Argon JS -->
  <script src="vendor/assets/js/argon.js?v=1.2.0"></script>
  <script src="vendor/assets/custom/1.0.1/js/config.js?v=1.0.1"></script>
  <script src="vendor/assets/custom/1.0.1/js/script.js?v=1.0.1"></script>
  <script src="vendor/assets/custom/1.0.1/js/authen.js?v=1.0.1"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      preload.hide()
    })
  </script>
</body>

</html>
