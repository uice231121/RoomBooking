<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once dirname(__FILE__) . '/CB_Controller.php';

/*
* Login
* 
* @author   Tadsawan Waeohong
* @Create Date  2566-02-21
*/

class Login extends CB_Controller
{

    /*
    * @author Tadsawan Waeohong 
    */
    public function __construct()
    {
        parent::__construct();
        $_SESSION['invalid'] = false;
    }

    /*
	* login
	* ตรวจสอบการ login
	* @input -
	* @output -
	* @author Tadsawan Waeohong 
	* @Create Date 2566-02-21
	*/
    public function login()
    {
        $username = $this->input->post('UserName');
        $password = $this->input->post('Password');
        $this->load->model('M_user', 'm_user');
        $user = $this->m_user->get_by_username($username)->row();

        // check password
        if ($user == null) {
            $_SESSION['invalid'] = true;
            $this->load->view('v_login');
            // } else if ($password == $user->Password) {
        } else if (password_verify($password, $user->Password)) {

            $_SESSION['invalid'] = false;
            if ($user->IsSytem) {
                $_SESSION['admin'] =  $user;
                redirect('User/List');
            } else {
                $_SESSION['user'] =  $user;

                $this->home();
                // redirect('/');
            }
        } else {
            $_SESSION['invalid'] = true;
            $this->load->view('v_login');
        }
    }
}
