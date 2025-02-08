<form action="<?php echo base_url() . 'User/update/' ?>" enctype="multipart/form-data" method="POST">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">แก้ไขข้อมูลสมาชิก</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <input name="UserId" id="UserId" value="<?php echo $arr_user->UserId; ?>" type="hidden">
                    <div class="row">

                        <div class="col-md-6 mb-md-0 mb-4">
                            <div class="form-group">
                                <label for="FirstName">ชื่อ</label>
                                <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?php echo $arr_user->FirstName; ?>" placeholder="กรุณากรอกชื่อ" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="LastName">นามสกุล</label>
                                <input type="text" class="form-control" id="LastName" name="LastName" value="<?php echo $arr_user->LastName; ?>" placeholder="กรุณากรอกนามสกุล" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Email">อีเมล</label>
                                <input type="email" class="form-control" id="ContactEmail" name="ContactEmail" value="<?php echo $arr_user->ContactEmail; ?>" placeholder="กรุณากรอกอีเมล" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-md-0 mb-4">
                            <div class="form-group">
                                <label for="PhoneNo">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="PhoneNo" name="PhoneNo" value="<?php echo $arr_user->PhoneNo; ?>" placeholder="กรุณากรอกเบอร์โทรศัพท์" required>
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6 mb-md-0 mb-4">
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" class="form-control" id="UserName" name="UserName" value="<?php echo $arr_user->UserName; ?>" placeholder="กรุณากรอก Username" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="hidden" class="form-control" id="Password" name="Password" value="<?php echo $arr_user->Password; ?>">
                                <input type="password" class="form-control" id="Password2" name="Password2" placeholder="กรุณากรอก Password">
                            </div>
                        </div>
                        <div class="col-md-6 mb-md-0 mb-4">
                            <div class="form-group">
                                <label for="Address">ที่อยู่</label>
                                <textarea class="form-control" id="Address" name="Address" value="<?php echo $arr_user->Address; ?>" rows="3" required><?php echo $arr_user->Address; ?></textarea>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0">แก้ไขข้อมูลอนุมัติ</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-4 p-3">
                    <div class="form-group">
                        <label for="Status">สถานะสมาชิก</label>
                        <select class="form-control" id="Status" name="Status">
                            <option value="1" <?php if ($arr_user->Status == 1) echo 'selected'; ?>>รออนุมัติ</option>
                            <option value="2" <?php if ($arr_user->Status == 2) echo 'selected'; ?>> อนุมัติ</option>
                            <option value="3" <?php if ($arr_user->Status == 3) echo 'selected'; ?>> ไม่อนุมัติ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="StartDate" class="form-control-label">วันที่เริ่มต้นใช้งาน</label>
                        <input class="form-control" type="datetime-local" value="<?php echo $arr_user->StartDate; ?>" id="StartDate" name="StartDate" required>
                    </div>
                    <div class="form-group">
                        <label for="EndDate" class="form-control-label">วันที่สิ้นสุดใช้งาน</label>
                        <input class="form-control" type="datetime-local" value="<?php echo $arr_user->EndDate; ?>" id="EndDate" name="EndDate" required>
                    </div>

                </div>

                <div class="text-end p-3">
                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">ยกเลิก</button>
                    <button type="submit" class="btn btn-success">บันทึก</button>
                </div>

            </div>
        </div>
    </div>
</form>