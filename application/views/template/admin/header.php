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
            font-family: 'Noto Sans';
        }

        .card .card-body {
            font-family: "Noto Sans", sans-serif;
        }
    </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="<?php echo base_url() . 'User/list' ?>" target="_blank">
                <img src="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Room Booking Digital</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SESSION['menu'] == 'user') echo 'active' ?>" href="<?php echo base_url() . 'User/list' ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-user text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">จัดการสมาชิก</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SESSION['menu'] == 'roomtype') echo 'active' ?>" href="<?php echo base_url() . 'LawsuitType/list' ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-pencil-square-o text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">จัดการประเภทห้อง</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SESSION['menu'] == 'room') echo 'active' ?>" href="<?php echo base_url() . 'Lawsuit/list' ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-book text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">จัดการห้อง</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if ($_SESSION['menu'] == 'admin') echo 'active' ?> " href="<?php echo base_url() . 'User/listadmin' ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-pencil-square-o text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">จัดการผู้ดูแลระบบ</span>
                    </a>
                </li>


            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">

                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <!-- <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div> -->
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="<?php echo base_url() . 'CB_Controller/logout' ?>" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">