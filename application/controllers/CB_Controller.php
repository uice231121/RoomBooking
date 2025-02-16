<?php
 
class CB_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		session_start();	
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$_SESSION['invalid'] = false;
		$this->load->view('v_login');
	}

	public function output($view, $data = null)
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/js');
		$this->load->view($view, $data);
		$this->load->view('template/admin/footer');
	}
	public function layout_home2($view, $data = null)
	{
		$this->load->view('layout_home/header2');
		$this->load->view('layout_home/js');
		$this->load->view($view, $data);
		$this->load->view('layout_home/footer');
	}

	public function layout_home($view, $data = null)
	{
		$this->load->view('layout_home/header');
		$this->load->view('layout_home/js');
		$this->load->view($view, $data);
		$this->load->view('layout_home/footer');
	}

	public function test()
	{
		
	}

	/*
	* session_check_user
	* เช็ค session login
	* @input -
	* @output -
	* @author Tadsawan Waeohong 
	* @Create Date 2566-03-01
	*/
	public function session_check_user()
	{
		if (!isset($_SESSION['user'])) {
			redirect('/');
		}
	}

	/*
	* session_check_admin
	* เช็ค session login
	* @input -
	* @output -
	* @author Tadsawan Waeohong 
	* @Create Date 2566-03-01
	*/
	public function session_check_admin()
	{
		if (!isset($_SESSION['admin'])) {
			redirect('/');
		}
	}

	/*
	* logout
	* logout
	* @input -
	* @output -
	* @author Tadsawan Waeohong 
	* @Create Date 2566-02-21
	*/
	public function logout()
	{
		$_SESSION['user'] =  null;
		unset($_SESSION['admin']);
		redirect('/');
	}
}
