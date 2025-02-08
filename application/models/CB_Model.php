<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CB_Model extends CI_Model
{

    public $db;
    public $db_name;
    /*
    * @author Tadsawan Waeohong
    */
    public function __construct()
    {
        // parent::__construct();
        $this->db = $this->load->database('cb', true);
        $this->db_name = $this->db->database;
    }
}
