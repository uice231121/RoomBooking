<div class="col-md-12">
    <div class="card">
        <div class="card-body p-3">
            <form action="<?php echo base_url() . 'Room/update/' ?>" enctype="multipart/form-data" method="POST">
                <div class="row">
                    <input name="RoomId" id="RoomId" value="<?php echo $arr_room->RoomId; ?>" type="hidden">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="CompanyName">ชื่อห้อง</label>
                            <input type="text" class="form-control" id="Name" name="Name" value="<?php echo $arr_room->Name; ?>" placeholder="กรุณากรอกชื่อห้อง" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="RoomTypeId">ประเภทห้อง</label>
                            <select class="form-control" id="RoomTypeId" name="RoomTypeId">
                                <?php for ($i = 0; $i < count($arr_romt); $i++) { ?>
                                    <option value="<?php echo $arr_romt[$i]->RoomTypeId ?>" <?php if ($arr_room->RoomTypeId == $arr_romt[$i]->RoomTypeId) echo "selected" ?>>
                                        <?php echo $arr_romt[$i]->Name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="RoomStatusId">สถานะห้อง</label>
                            <select class="form-control" id="RoomStatusId" name="RoomStatusId">
                                <?php for ($i = 0; $i < count($arr_roms); $i++) { ?>
                                    <option value="<?php echo $arr_roms[$i]->RoomStatusId ?>" <?php if ($arr_room->RoomStatusId == $arr_roms[$i]->RoomStatusId) echo "selected" ?>>
                                        <?php echo $arr_roms[$i]->Name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-md-0 mb-4">
                
                </div>
                    <div class="col-md-6 mb-md-0 mb-4">
                        <div class="form-group">
                            <label for="Opening" class="form-control-label">เวลาเปิดให้บริการ</label>
                            <input class="form-control" type="time" id="Opening" name="Opening" value="<?php echo $arr_room->Opening; ?>" placeholder="กรุณากรอกเวลาเปิดให้บริการ" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-md-0 mb-4">
                        <div class="form-group">
                            <label for="Closed" class="form-control-label">เวลาปิด</label>
                            <input class="form-control" type="time" id="Closed" name="Closed" value="<?php echo $arr_room->Closed; ?>" placeholder="กรุณากรอกเวลาปิดบริการ" required>
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