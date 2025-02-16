<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once dirname(__FILE__) . '/CB_Controller.php';

class Room extends CB_Controller
{
    /*
    * @author TW
    */
    public function __construct()
    {
        parent::__construct();
    }

    public function List()
    {
        $this->session_check_admin();
        $_SESSION['menu'] = 'room';

        $this->load->model('M_room', 'm_room');
        $data['arr_room'] = $this->m_room->get_all2()->result();

        $this->load->model('M_roomType', 'm_romt');
        $data['arr_romt'] = $this->m_romt->get_all()->result();
        
        $this->load->model('M_roomStatus', 'm_roms');
        $data['arr_roms'] = $this->m_roms->get_all()->result();

        $this->output('/room/v_list', $data);
    }


    public function AddRoom()
    {
        $this->session_check_admin();
        $_SESSION['menu'] = 'room';

        $this->load->model('M_roomType', 'm_romt');
        $data['arr_romt'] = $this->m_romt->get_all()->result();
        
        $this->load->model('M_roomStatus', 'm_roms');
        $data['arr_roms'] = $this->m_roms->get_all()->result();

        $this->output('/room/v_add', $data);
    }

    public function insert()
    {
        $this->load->model('M_room', 'm_rom');
        $name = $this->input->post('Name');
        $roomTypeId = $this->input->post('RoomTypeId');
        $roomStatusId = $this->input->post('RoomStatusId');
        $opening = $this->input->post('Opening');
        $closed = $this->input->post('Closed');
        $createUserId = $_SESSION['admin']->UserId;
        $isActive = 1;

        $this->m_rom->insert($name ,$roomTypeId, $roomStatusId, $opening, $closed, $createUserId, $isActive);

        redirect('Room/list');
    }

    public function Edit($id)
    {
        $this->session_check_admin();
        $_SESSION['menu'] = 'room';

        $this->load->model('M_room', 'm_rom');
        $data['arr_room'] = $this->m_rom->get_by_id($id)->row();

        $this->load->model('M_roomType', 'm_romt');
        $data['arr_romt'] = $this->m_romt->get_all()->result();
        
        $this->load->model('M_roomStatus', 'm_roms');
        $data['arr_roms'] = $this->m_roms->get_all()->result();

       
        $this->output('/room/v_edit', $data);

    }

    public function update()
    {
        $this->load->model('M_room', 'm_rom');
        $roomId = $this->input->post('RoomId');
        $name = $this->input->post('Name');
        $roomTypeId = $this->input->post('RoomTypeId');
        $roomStatusId = $this->input->post('RoomStatusId');
        $opening = $this->input->post('Opening');
        $closed = $this->input->post('Closed');

        $modifyUserId = $_SESSION['admin']->UserId;


        $this->m_rom->update($roomId, $name, $roomTypeId, $roomStatusId, $opening, $closed, $modifyUserId);

        redirect('Room/list');
    }

    public function delete()
    {
        $this->load->model('M_room', 'm_rom');

        $roomId = $this->input->post('RoomId');
        // echo($roomId);
        $this->m_rom->delete($roomId);

        redirect('Room/list');
    }
}
