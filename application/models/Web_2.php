<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_2  extends CI_Model {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function Getdata()
	{
     $query = $this->db->get('Web_2');
     return $query->result();
	}

    function save($data)
	{
		$coba = $this->db->insert('Web_2', $data);
		return $coba;
	}
    
}
