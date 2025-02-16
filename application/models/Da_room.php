<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once("CB_Model.php");

class Da_room extends CB_Model
{
    /*
    * @author Veerasarut Ketbut
    */
    public function __construct()
    {
        parent::__construct();
    }

    /*
    * insert
    * เพิ่มข้อมูล
    * @input -
    * @output -
    * @author Veerasarut Ketbut
    * @Create Date 2568-02-15
    * @Update Date 2568-02-15
    */
    public function insert($name ,$roomTypeId, $roomStatusId, $opening, $closed, $createUserId, $isActive)
    {
        $sql = "INSERT INTO room (Name, RoomTypeId, RoomStatusId, Opening, Closed, CreateUserId, IsActive) 
                VALUES ('$name', '$roomTypeId', '$roomStatusId', '$opening', '$closed', '$createUserId', '$isActive')";
        $this->db->query($sql);
    }

    /*
    * delete
    * ลบห้อง
    * @input -
    * @output -
    * @author Veerasarut Ketbut
    * @Create Date 2568-02-15
    * @Update Date 2568-02-15
    */
    public function delete($id)
    {
        $sql = "DELETE FROM room         
            WHERE RoomId = '$id' ";
        $this->db->query($sql);
    }

    /*
    * update
    * แก้ไขข้อมูลห้อง
    * @input -
    * @output -
    * @author Veerasarut Ketbut
    * @Create Date 2568-02-15
    * @Update Date 2568-02-15
    */
    public function update($roomId, $name, $roomTypeId, $roomStatusId, $opening, $closed, $modifyUserId)
    {
        $sql = "UPDATE room
            SET Name = '$name', RoomTypeId = '$roomTypeId', RoomStatusId = '$roomStatusId', Opening = '$opening', Closed = '$closed', ModifyUserId = '$modifyUserId', ModifyDate = NOW()
            WHERE RoomId = '$roomId' ";
        $this->db->query($sql);
    }
}
