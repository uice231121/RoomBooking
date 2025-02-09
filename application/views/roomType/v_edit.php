<form action="<?php echo base_url() . 'RoomType/update/' ?>" enctype="multipart/form-data" method="POST">
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
                    <input name="RoomTypeId" id="RoomTypeId" value="<?php echo $arr_roomType->RoomTypeId; ?>" type="hidden">
                    <div class="row">

                        <div class="col-md-6 mb-md-0 mb-4">
                            <div class="form-group">
                                <label for="Name">ชื่อ</label>
                                <input type="text" class="form-control" id="Name" name="Name" value="<?php echo $arr_roomType->Name; ?>" placeholder="กรุณากรอกชื่อประเภทห้อง" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Status">สถานะสมาชิก</label>
                                    <select class="form-control" id="Status" name="Status">
                                        <option value="1" <?php if ($arr_roomType->Status == 1) echo 'selected'; ?>>ใช้งาน</option>
                                        <option value="2" <?php if ($arr_roomType->Status == 2) echo 'selected'; ?>> ไม่ใช้งาน</option>
                                        <option value="3" <?php if ($arr_roomType->Status == 3) echo 'selected'; ?>> ชำรุด</option>
                                    </select>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="text-end p-3">
                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">ยกเลิก</button>
                    <button type="submit" class="btn btn-success">บันทึก</button>
        </div>
        
</div>
</form>