<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/img/favicon.png">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">เข้าสู่ระบบ</h4>
                  <p class="mb-0">กรอกชื่อผู้ใช้งานและรหัสผ่านเพื่อเข้าสู่ระบบ</p>
                </div>
                <div class="card-body">
                  <form role="form" action="<?php echo base_url() . 'Login/login' ?>" method="POST">
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="ชื่อผู้ใช้งาน" aria-label="UserName" name="UserName" required>
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" placeholder="รหัสผ่าน" aria-label="Password" name="Password" required>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <?php if ($_SESSION['invalid'] == true) { ?>
                      <p style="color: red; text-align: center;"><?php echo 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง' ?> </p>
                    <?php } ?>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">เข้าสู่ระบบ</button>
                    </div>
                  </form>
                </div>
                <!-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    ยังไม่ได้สมัครสมาชิก?
                    <a href="<?php echo base_url() . 'Account/register' ?>" class="text-primary text-gradient font-weight-bold">สมัครสมาชิก</a>
                  </p>
                </div> -->
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('<?php echo base_url() . 'assets/image/banner-login.png' ?>');
          background-size: cover;">
                <!-- <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>