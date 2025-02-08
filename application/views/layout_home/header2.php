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

  <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
  <style>
    body {
      font-family: 'Noto Sans' !important;
    }

    .card .card-body {
      font-family: "Noto Sans", sans-serif;
    }
  </style>
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4" style="background-color: #172b4d;">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="<?php echo base_url() . 'CB_Controller/index' ?>">
              Credit Bureau Plus
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active text-white" aria-current="page" href="<?php echo base_url() . 'CB_Controller/index' ?>">
                    <i class="fa fa-home opacity-6 text-white me-1"></i>
                    หน้าหลัก
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active text-white" aria-current="page" href="<?php echo base_url() . 'CB_Controller/aboutus2' ?>">
                    <i class="fa fa-users opacity-6 text-white me-1"></i>
                    เกี่ยวกับเรา
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active text-white" aria-current="page" href="<?php echo base_url() . 'CB_Controller/ourservices2' ?>">
                    <i class="fa fa-ticket opacity-6 text-white me-1"></i>
                    บริการของเรา
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active text-white" aria-current="page" href="<?php echo base_url() . 'CB_Controller/contactus2' ?>">
                    <i class="fa fa-address-book opacity-6 text-white me-1"></i>
                    ติดต่อเรา
                  </a>
                </li>

              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="<?php echo base_url() . 'Account/login' ?>" class="btn btn-sm mb-0 me-1 btn-primary">เข้าสู่ระบบ</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>