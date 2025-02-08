<style>
    .table-responsive {
        overflow-x: unset !important;
    }

    .dataTables_length {
        padding-left: 20px;
    }

    .dataTables_filter {
        text-align: end;
        padding-right: 25px;
    }

    .dataTables_info {
        padding-left: 20px;
    }

    .dataTables_paginate {
        float: right;
        padding-right: 25px;
    }
</style>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">จัดการผู้ดูแลระบบ</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">รายการผู้ดูแลระบบ</li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0">รายการผู้ดูแลระบบ</h6>
</nav>
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body px-0 pt-0 pb-2 mt-3">
                <div class="text-end px-4 mb-3">
                    <a class="btn bg-gradient-secondary mb-0" href="<?php echo base_url() . "User/AddAdmin/" ?>"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp; เพิ่มผู้ดูแลระบบ</a>
                </div>

                <div class="table-responsive p-0">
                    <table id="example" class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary font-weight-bolder opacity-7">ชื่อผู้ใช้</th>
                                <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">อีเมล</th>
                                <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">ชื่อ</th>
                                <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">นามสกุล</th>
                                <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">วันที่สร้าง</th>
                                <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($arr_user); $i++) {
                                if ($arr_user[$i]->IsSytem == 1) { ?>
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0 px-3"><?php echo $arr_user[$i]->UserName; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo $arr_user[$i]->ContactEmail; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo $arr_user[$i]->FirstName; ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo $arr_user[$i]->LastName; ?></p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="text-secondary text-xs font-weight-bold"><?php echo $arr_user[$i]->CreateDate != null ? date("d/m/Y", strtotime($arr_user[$i]->CreateDate)) : "-"; ?></div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a class="btn btn-link text-dark px-3 mb-0" href="<?php echo base_url() . "User/edit/" . $arr_user[$i]->UserId . "/true" ?>"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#modal-delete" onclick="get_id(<?php echo $arr_user[$i]->UserId ?>)"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal ลบ -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-delete"></h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'User/delete' ?>" method="post">
                <div class="modal-body">
                    <input name="UserId" id="UserId" type="hidden">
                    <div class="py-3 text-center">
                        <i class="far fa-trash-alt ni-3x"></i>
                        <h4 class="text-gradient text-danger mt-4">ลบผู้ดูแลระบบ</h4>
                        <p>คุณแน่ใจหรือไม่ที่จะลบข้อมูลผู้ดูแลระบบ?</p>
                    </div>
                </div>
                <input name="IsSytem" id="IsSytem" value="true" type="hidden">
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-primary">ใช่, ลบ</button>
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">ปิด</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function get_id(userId) {
        $('#UserId').val(userId);
    }
</script>