<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once("Da_user.php");

class M_user extends Da_user
{
    /*
    * @author Tadsawan Waeohong
    */
    public function __construct()
    {
        parent::__construct();
    }

    /*
    * get_all
    * get ข้อมูลสมาชิก
    * @input -
    * @output -
    * @author Tadsawan Waeohong
    * @Create Date 2566-01-30
    * @Update Date 2566-01-30
    */
    public function get_all()
    {
        $sql = "SELECT * 
                FROM user
                WHERE IsActive = 1
                ORDER BY UserId DESC";
        return $this->db->query($sql);
    }

    /*
    * get_by_id
    * แสดงข้อมูลตาม id
    * @input -
    * @output -
    * @author Tadsawan Waeohong
    * @Create Date 2566-01-31
    * @Update Date 2566-01-31
    */
    public function get_by_id($id)
    {
        $sql = "SELECT * 
                FROM user 
                WHERE UserId = $id";
        return $this->db->query($sql);
    }

    /*
    * get_by_username
    * แสดงข้อมูลตาม username
    * @input -
    * @output -
    * @author Tadsawan Waeohong
    * @Create Date 2566-02-24
    * @Update Date 2566-02-24
    */
    public function get_by_username($username)
    {
        $sql = "SELECT * 
                FROM user
                WHERE UserName = '$username' ";
        return $this->db->query($sql);
    }
}
