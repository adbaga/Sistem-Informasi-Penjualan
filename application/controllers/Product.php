<?php

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_products');
        $this->load->model('m_kategori');
        // $this->load->helper('form')
    }

    public function create()
    {
        $data['kategori'] =$this->m_kategori->tampil();
        $this->load->view('header');
        $this->load->view('produk/create', $data);
        $this->load->view('footer');

    }
}