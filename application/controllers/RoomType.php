<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once dirname(__FILE__) . '/CB_Controller.php';

class RoomType extends CB_Controller
{
    /*
    * @author VK
    */
    public function __construct()
    {
        parent::__construct();
    }

    public function List()
    {
        $this->session_check_admin();
        $_SESSION['menu'] = 'roomtype';

        $this->load->model('M_roomtype', 'm_rt');
        $data['arr_roomtype'] = $this->m_rt->get_all()->result();

        $this->output('/roomType/v_list', $data);
    }
    /*
	* edit
	* แสดงหน้าแก้ไขสมาชิก
	* @input -
	* @output -
	* @author Veerasarut Ketbut
	* @Create Date 2566-01-29
	*/
    public function insert()
    {
        $this->load->model('M_roomType', 'm_rt');
        $name = $this->input->post('Name');

        $createUserId = $_SESSION['admin']->UserId;

        $this->m_rt->insert($name, $createUserId);

        redirect('RoomType/list');
    }
    /*
	* edit
	* แสดงหน้าแก้ไขสมาชิก
	* @input -
	* @output -
	* @author Veerasarut Ketbut
	* @Create Date 2566-01-29
	*/
    public function Edit()
    {
        $this->load->model('M_roomType', 'm_rt');
        $RoomTypeId = $this->input->post('RoomTypeId');
        $data = $this->m_rt->get_by_id($RoomTypeId)->row();

        echo json_encode($data);
    }

    public function delete()
    {
        $this->load->model('M_roomType', 'm_rt');

        $roomTypeId = $this->input->post('roomTypeId');
        $this->m_rt->delete($roomTypeId);

        redirect('roomType/list');
    }

    public function update()
    {
        $this->load->model('M_roomType', 'm_rt');
        $roomTypeId = $this->input->post('RoomTypeId');
        $name = $this->input->post('Name');

        $this->m_rt->update($roomTypeId, $name);

        redirect('RoomType/list');
    }
}