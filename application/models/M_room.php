<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once("Da_room.php");

class M_room extends Da_room
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
    * get ข้อมูลห้อง
    * @input -
    * @output -
    * @author Veerasarut Ketbut
    * @Create Date 2568-02-15
    * @Update Date 2568-02-15
    */
    public function get_all()
    {
        $sql = "SELECT * 
                FROM room
                WHERE IsActive = 1
                ORDER BY RoomId DESC";
        return $this->db->query($sql);
    }

     /*
    * get_all2
    * แสดงข้อมูล
    * @input -
    * @output -
    * @author Veerasarut Ketbut
    * @Create Date 2568-02-15
    * @Update Date 2568-02-15
    */
    public function get_all2()
    {
        $sql = "select r.RoomId, r.Name, rt.Name AS RoomTypeName, rs.Name AS RoomStatusName, r.Opening, r.Closed 
                FROM room r left join roomtype rt on rt.RoomTypeId = r.RoomTypeId
                left join roomstatus rs on rs.RoomStatusId = r.RoomStatusId 
                where r.IsActive = 1 
                order by r.RoomId DESC ";
        return $this->db->query($sql);
    }
    /*
    * get_by_id
    * แสดงข้อมูลตาม id
    * @input -
    * @output -
    * @author Veerasarut Ketbut
    * @Create Date 2568-02-15
    * @Update Date 2568-02-15
    */
    public function get_by_id($id)
    {
        $sql = "SELECT * 
                FROM room 
                WHERE RoomId = $id";
        return $this->db->query($sql);
    }

    
    
}
