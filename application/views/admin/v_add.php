<div class="col-md-12">
    <div class="card">
        <div class="card-body p-3">
            <form action="<?php echo base_url() . 'User/insertAdmin' ?>" enctype="multipart/form-data" method="POST">
                <div class="row">
                    <div class="col-md-6 mb-md-0 mb-4">
                        <div class="form-group">
                            <label for="FirstName">ชื่อ</label>
                            <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="กรุณากรอกชื่อ" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="LastName">นามสกุล</label>
                            <input type="text" class="form-control" id="LastName" name="LastName" placeholder="กรุณากรอกนามสกุล" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-md-0 mb-4">
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" id="UserName" name="UserName" placeholder="กรุณากรอก Username" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="Password" name="Password" placeholder="กรุณากรอก Password" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-md-0 mb-4">
                        <div class="form-group">
                            <label for="ContactEmail">อีเมล</label>
                            <input type="text" class="form-control" id="ContactEmail" name="ContactEmail" placeholder="กรุณากรอกอีเมล" required>
                        </div>
                    </div>

                </div>
                <div class="text-end mt-4">
                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">ยกเลิก</button>
                    <button type="submit" class="btn btn-success">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>