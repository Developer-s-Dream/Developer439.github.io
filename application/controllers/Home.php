<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->myview('public/profile','home.php');
	}
    public function profile()
    {
        $this->load->myview('public/profile','form.php');
    }
    public function validate()

    {
         $this->load->myview('public/profile','form_validation.php');
    }

}

