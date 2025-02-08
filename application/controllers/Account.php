<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once dirname(__FILE__) . '/CB_Controller.php';

class Account extends CB_Controller
{
    /*
    * @author PB
    */
    public function __construct()
    {
        parent::__construct();
        $_SESSION['invalid'] = false;
    }

    /*
	* output
	* show views and mix header footer js
	* @input view, data
	* @output -
	* @author PB
	* @Create Date 2566-12-14
	*/
    function output($view, $data = null)
    {
        $this->load->view('template/admin/header');
        $this->load->view('template/admin/js');
        $this->load->view($view, $data);
        $this->load->view('template/admin/footer');
    }
    /*
    * login
    * login
    * @input -
    * @output -
    * @author PB
    * @Create Date 2566-12-14
    * @Update Date 2566-12-12
    */
    function login()
    {
        $this->load->view('v_login');
    }
    /*
    * register
    * register
    * @input -
    * @output -
    * @author PB
    * @Create Date 2566-12-14
    * @Update Date 2566-12-12
    */
    function register()
    {
        $this->load->view('v_register');
        // $this->output('');
    }

    /*
	* insert
	* เพิ่มสมาชิก
	* @input -
	* @output -
	* @author Tadsawan Waeohong 
	* @Create Date 2566-12-14
    * @Update Date 2566-12-12
	*/
    public function insert()
    {
        $this->load->model('M_user', 'm_user');
        $firstName = $this->input->post('FirstName');
        $lastName = $this->input->post('LastName');
        // ContactName
        $contactEmail = $this->input->post('ContactEmail');
        $phoneNo = $this->input->post('PhoneNo');
        $address = $this->input->post('Address');
        $userName = $this->input->post('UserName');
        $password = $this->input->post('Password');

        $isSytem = 0;
        $createUserId = 1;
        $isActive = 1;

        $password = password_hash($password, PASSWORD_DEFAULT);


        $this->m_user->insert($firstName, $lastName, $contactEmail, $phoneNo, $address, $userName, $password, $createUserId, $isSytem, $isActive);

        redirect('/');
    }
}
