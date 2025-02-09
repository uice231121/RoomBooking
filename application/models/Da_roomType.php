<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once("CB_Model.php");

class Da_roomType extends CB_Model
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
    * @Create Date 2568-02-09
    * @Update Date 2568-02-09
    */
    public function insert($name, $createUserId)
    {
        $sql = "INSERT INTO roomType (Name, CreateUserId, Status, Isactive) 
                VALUES ('$name', '$createUserId', 1, 1)";
        $this->db->query($sql);
    }

    /*
    * delete
    * ลบ
    * @input -
    * @output -
    * @author Veerasarut Ketbut
    * @Create Date 2568-02-09
    * @Update Date 2568-02-09
    */
    public function delete($id)
    {
        $sql = "DELETE FROM roomtype           
            WHERE RoomTypeId = '$id' ";
        $this->db->query($sql);
    }

    /*
    * update
    * แก้ไขข้อมูล
    * @input -
    * @output -
    * @author Veerasarut Ketbut
    * @Create Date 2568-02-09
    * @Update Date 2568-02-09
    */
    public function update($roomTypeId, $name)
    {
        $sql = "UPDATE roomtype
            SET Name = '$name'
            WHERE RoomTypeId = '$roomTypeId' ";
        $this->db->query($sql);
    }


}
