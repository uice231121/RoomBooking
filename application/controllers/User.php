<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once dirname(__FILE__) . '/CB_Controller.php';

class User extends CB_Controller
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
        $_SESSION['menu'] = 'user';

        $this->load->model('M_user', 'm_user');
        $data['arr_user'] = $this->m_user->get_all()->result();
        $this->output('/user/v_list', $data);
    }

    public function ListAdmin()
    {
        $this->session_check_admin();
        $_SESSION['menu'] = 'admin';

        $this->load->model('M_user', 'm_user');
        $data['arr_user'] = $this->m_user->get_all()->result();
        $this->output('/admin/v_list', $data);
    }

    public function AddAdmin()
    {
        $this->output('/admin/v_add');
    }

    /*
	* edit
	* แสดงหน้าแก้ไขสมาชิก
	* @input -
	* @output -
	* @author Tadsawan Waeohong 
	* @Create Date 2566-01-29
	*/
    public function Edit($id, $isSytem)
    {
        $this->session_check_admin();
        $this->load->model('M_user', 'm_user');
        $data['arr_user'] = $this->m_user->get_by_id($id)->row();

        if ($isSytem == 'true') {
            $_SESSION['menu'] = 'admin';
            $this->output('/admin/v_edit', $data);
        } else {
            $_SESSION['menu'] = 'user';
            $this->output('/user/v_edit', $data);
        }
    }

    /*
	* delete
	* delete สมาชิก
	* @input -
	* @output -
	* @author Tadsawan Waeohong 
	* @Create Date 2566-01-30
	*/
    public function delete()
    {
        $this->load->model('M_user', 'm_user');

        $userId = $this->input->post('UserId');
        $this->m_user->delete($userId, 0);

        $isSytem = $this->input->post('IsSytem');
        if ($isSytem) {
            redirect('User/ListAdmin');
        } else {
            redirect('User/list');
        }
    }

    public function update()
    {
        $this->load->model('M_user', 'm_user');
        $userId = $this->input->post('UserId');
        $firstName = $this->input->post('FirstName');
        $lastName = $this->input->post('LastName');
        $contactEmail = $this->input->post('ContactEmail');
        $phoneNo = $this->input->post('PhoneNo');
        $userName = $this->input->post('UserName');
        $password = $this->input->post('Password');
        $password2 = $this->input->post('Password2');
        $address = $this->input->post('Address');
        $status = $this->input->post('Status');
        $startDate = $this->input->post('StartDate');
        $endDate = $this->input->post('EndDate');

        // เช็ครหัสผ่านว่ากรอกมั้ย
        if ($password2 == null) {
            $password = $password;
        } else {
            $password = password_hash($password2, PASSWORD_DEFAULT);
        }

        $modifyUserId = $_SESSION['admin']->UserId;

        $this->m_user->update($userId, $firstName, $lastName, $contactEmail, $phoneNo, $address, $userName, $password, $modifyUserId, $startDate, $endDate, $status);

        redirect('User/list');
    }

    public function insertAdmin()
    {
        $this->load->model('M_user', 'm_user');
        $contactEmail = $this->input->post('ContactEmail');
        $userName = $this->input->post('UserName');
        $password = $this->input->post('Password');
        $firstName = $this->input->post('FirstName');
        $lastName = $this->input->post('LastName');

        $isSytem = 1;
        $createUserId = $_SESSION['admin']->UserId;
        $isActive = 1;

        $password = password_hash($password, PASSWORD_DEFAULT);

        $this->m_user->insertAdmin($contactEmail, $userName, $password, $createUserId, $isSytem, $isActive, $firstName, $lastName);

        redirect('User/ListAdmin');
    }

    public function updateAdmin()
    {
        $this->load->model('M_user', 'm_user');
        $userId = $this->input->post('UserId');
        $contactEmail = $this->input->post('ContactEmail');
        $userName = $this->input->post('UserName');
        $password = $this->input->post('Password');
        $password2 = $this->input->post('Password2');
        $firstName = $this->input->post('FirstName');
        $lastName = $this->input->post('LastName');

        $modifyUserId = $_SESSION['admin']->UserId;

        // เช็ครหัสผ่านว่ากรอกมั้ย
        if ($password2 == null) {
            $password = $password;
        } else {
            $password = password_hash($password2, PASSWORD_DEFAULT);
        }

        $this->m_user->updateAdmin($userId, $contactEmail, $userName, $password, $modifyUserId, $firstName, $lastName);

        redirect('User/ListAdmin');
    }
}
