<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
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
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('<?php echo base_url() . 'assets/image/banner.png' ?>'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <!-- <h1 class="text-white mb-2 mt-5">Welcome!</h1> -->
          </div>
        </div>
      </div>
    </div>
    <div class="mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
      <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
        <div class="card z-index-0">
          <div class="card-header text-center pt-4">
            <h5>สมัครสมาชิก Room Booking Digital</h5>
          </div>
          <div class="card-body">
            <form id="theForm" action="<?php echo base_url() . 'Account/insert' ?>" enctype="multipart/form-data" method="POST">
              <div class="form-group">
                <label for="FirstName">ชื่อ</label>
                <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="กรุณากรอก ชื่อ" required>
              </div>
              <div class="form-group">
                <label for="LastName">นามสกุล</label>
                <input type="text" class="form-control" id="LastName" name="LastName" placeholder="กรุณากรอก นามสกุล" required>
              </div>
              <div class="form-group">
                <label for="CompanyEmail">Email</label>
                <input type="email" class="form-control" id="CompanyEmail" name="CompanyEmail" placeholder="กรุณากรอก อีเมล" required>
              </div>
              <div class="form-group">
                <label for="PhoneNo">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" id="PhoneNo" name="PhoneNo" placeholder="กรุณากรอก เบอร์โทรศัพท์" required>
              </div>
              <div class="form-group">
                <label for="Address">ที่อยู่</label>
                <textarea class="form-control" id="Address" name="Address" rows="3" required></textarea>
              </div>
              <div class="form-group">
                <label for="ContactEmail">อีเมล</label>
                <input type="email" class="form-control" id="ContactEmail" name="ContactEmail" placeholder="กรุณากรอก อีเมล" required>
              </div>
              <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" class="form-control" id="UserName" name="UserName" placeholder="กรุณากรอก Username" required>
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="Password" name="Password" placeholder="กรุณากรอก Password" required>
              </div>
              <div class="form-check form-check-info text-start">
                <input class="form-check-input" type="checkbox" value="JavaScript" id="langs_javascript" name="stipulation" required>
                <label class="form-check-label" for="stipulation">
                  I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                </label>
              </div>
              <div style="visibility:hidden; color:red; " id="chk_option_error">
                กรุณากดยอมรับข้อตกลง
              </div>
              <div style="text-align: center;">
                <button type="submit" class="btn btn-success" onclick="ckeckInput()">สมัครสมาชิก</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    <!-- Modal Confirm Register -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h3 class="text-center">สมัครสมาชิกสำเร็จ</h3>
            <h4 class="text-center">กดตกลงเพื่อกลับหน้าเข้าสู่ระบบ</h4>
          </div>
          <div class="modal-footer" style="align-self: center;">
            <a href="<?php echo base_url() . 'Account/login' ?>" class="btn btn-success">ตกลง</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script>
    // เช็คกดยอมรับข้อตกลง
    function ckeckInput() {
      var form_data = new FormData(document.querySelector("form"));
      if (!form_data.has("stipulation")) {
        document.getElementById("chk_option_error").style.visibility = "visible";
      } else {
        document.getElementById("chk_option_error").style.visibility = "hidden";
      }

    }

    function validateData() {
      var fname = document.getElementById("fname").value;
      var username = document.getElementById("username").value;
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      //if name is empty
      if (fname == "" || username == "" || email == "" || password == "") {
        //SOme Error Code here
        alert("Please Fill All the Form Data.");
      } else {

      }

    }
  </script>


</body>

</html>