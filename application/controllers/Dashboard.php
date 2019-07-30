<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{

		// cara memanggil model
		$this->load->model('m_kategori');

		// cara memanggi nama function
$data['kata'] = $this->m_kategori->tampil();

		$this->load->view('header');
		$this->load->view('home/home', $data);
		$this->load->view('footer');
        // $this->load->helper('url');
	}
}
