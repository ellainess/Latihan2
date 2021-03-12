<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

	public function index()
	{
		$data['nama_website']="BOOTCAMP 2021";
		$data['nama_beranda']="BERANDA :3";
		$this->load->view('header',$data);
		$this->load->view('beranda');
		$this->load->view('footer');
	} 
}
