<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once("Da_roomType.php");

class M_roomType extends Da_roomType
{
    /*
    * @author Veerasarut Ketbut
    */
    public function __construct()
    {
        parent::__construct();
    }

    /*
    * get_all
    * get ข้อมูลประเภทห้อง
    * @input -
    * @output -
    * @author Veerasarut Ketbut
    * @Create Date 2568-02-09
    * @Update Date 2568-02-09
    */
    public function get_all()
    {
        $sql = "SELECT * 
                FROM roomType
                WHERE IsActive = 1
                ORDER BY RoomTypeId DESC";
        return $this->db->query($sql);
    }

    /*
    * get_by_id
    * แสดงข้อมูลตาม id
    * @input -
    * @output -
    * @author Veerasarut Ketbut
    * @Create Date 2568-02-09
    * @Update Date 2568-02-09
    */
    public function get_by_id($id)
    {
        $sql = "SELECT * 
                FROM roomType 
                WHERE RoomTypeId = $id";
        return $this->db->query($sql);
    }

}
