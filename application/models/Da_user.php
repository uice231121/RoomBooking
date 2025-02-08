<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once("CB_Model.php");

class Da_user extends CB_Model
{
    /*
    * @author Tadsawan Waeohong
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
    * @author Tadsawan Waeohong
    * @Create Date 2566-01-30
    * @Update Date 2566-01-30
    */
    public function insert($firstName, $lastName, $contactEmail, $phoneNo, $address, $userName, $password, $createUserId, $isSytem, $isActive)
    {
        $sql = "INSERT INTO user(FirstName, LastName, ContactEmail, PhoneNo, Address, UserName, Password, CreateUserId, IsSytem, IsActive, Status) 
                VALUES ('$firstName', '$lastName', '$contactEmail', '$phoneNo', '$address', '$userName', '$password', '$createUserId', '$isSytem', '$isActive', 1)";
        $this->db->query($sql);
    }

    /*
    * delete
    * ลบ
    * @input -
    * @output -
    * @author Tadsawan Waeohong
    * @Create Date 2566-01-31
    * @Update Date 2566-01-31
    */
    public function delete($id, $status)
    {
        $sql = "UPDATE user
            SET IsActive = '$status'
            WHERE UserId = '$id' ";
        $this->db->query($sql);
    }

    /*
    * update
    * แก้ไขข้อมูล
    * @input -
    * @output -
    * @author Tadsawan Waeohong
    * @Create Date 2566-01-31
    * @Update Date 2566-01-31
    */
    public function update($userId, $firstName, $lastName, $contactEmail, $phoneNo, $address, $userName, $password, $modifyUserId, $startDate, $endDate, $status)
    {
        $sql = "UPDATE user
            SET FirstName = '$firstName', LastName = '$lastName', ContactEmail = '$contactEmail', PhoneNo = '$phoneNo', Address = '$address', UserName = '$userName', Password = '$password', ModifyUserId = '$modifyUserId', StartDate = '$startDate', EndDate = '$endDate', Status = '$status', ModifyDate = NOW()
            WHERE UserId = '$userId' ";
        $this->db->query($sql);
    }

    /*
    * insert
    * เพิ่มข้อมูล
    * @input -
    * @output -
    * @author Tadsawan Waeohong
    * @Create Date 2566-01-30
    * @Update Date 2566-01-30
    */
    public function insertAdmin($contactEmail, $userName, $password, $createUserId, $isSytem, $isActive, $firstName, $lastName)
    {
        $sql = "INSERT INTO user(ContactEmail, UserName, Password, CreateUserId, IsSytem, IsActive, FirstName, LastName) 
                VALUES ('$contactEmail', '$userName', '$password', '$createUserId', '$isSytem', '$isActive', '$firstName', '$lastName')";
        $this->db->query($sql);
    }

    public function updateAdmin($userId, $contactEmail, $userName, $password, $modifyUserId, $firstName, $lastName)
    {
        $sql = "UPDATE user
            SET ContactEmail = '$contactEmail', UserName = '$userName', Password = '$password', ModifyUserId = '$modifyUserId', FirstName = '$firstName', LastName = '$lastName', ModifyDate = NOW()
            WHERE UserId = '$userId' ";
        $this->db->query($sql);
    }
}
