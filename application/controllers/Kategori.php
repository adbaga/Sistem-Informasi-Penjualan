<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {


    public function index()
    {
        $data = array(
            'title' => 'List Kategori',
            'desc'  => 'Semua data kategori',
            'link'  => 'kategori'
        );
        $this->load->model('m_kategori');
        $data['list_kategori'] = $this->m_kategori->tampil();
        $this->load->view('header');
		$this->load->view('kategori/index', $data);
		$this->load->view('footer');
    }

	public function create()
	{

		$this->load->view('header');
		$this->load->view('kategori/create');
		$this->load->view('footer');
        // $this->load->helper('url');
    }
    
    public function add()
    {
        $this->load->model('m_kategori');
        $name =$this->input->post('name');
        $status =$this->input->post('status');

        // $insert = $this->m_kategori->simpan($name, $status);
        
        if(empty($name)){
            die("Nama harus diisi");
        }

        if(empty($status)){
            die("Status harus diisi");
        }

        if(!empty($name) AND !empty($status)) {
            $insert = $this->m_kategori->simpan($name, $status);
        
        
            if($insert)
        {
            echo ("<script>alert('Data berhasil ditambahkan'); window.location.href='".base_url('index.php/kategori')."';</script>");
        }

        }

    }

    public function show($id)
    {
        $data = array(
            'title' => 'Detail Kategori',
            'desc' => 'Menampilkan data kategori',
            'link' => 'Detail kategori'
        );
        $this->load->model('m_kategori');
        $data['get_kategori'] = $this->m_kategori->show($id);
        $this->load->view('header');
		$this->load->view('kategori/show', $data);
		$this->load->view('footer');
    }

    // public function edit($id)
    // {
    //     $data = array(
    //         'title' => 'Detail Kategori',
    //         'desc' => 'Menampilkan data kategori',
    //         'link' => 'Detail kategori'
    //     );
    //     $this->load->model('m_kategori');
    //     $data['get_kategori'] = $this->m_kategori->edit($id);
    //     $this->load->view('header');
	// 	$this->load->view('kategori/edit', $data);
	// 	$this->load->view('footer');
    // }

    public function edit($id) {

        $data = array(
            'title' => 'Detail Kategori',
            'desc' => 'Menampilkan data kategori',
            'link' => 'Detail kategori'
        );

        $this->load->model('m_kategori');
        $data['get_kategori'] = $this->m_kategori->edit($id);
        $this->load->view('header');
        $this->load->view('kategori/edit', $data);
        $this->load->view('footer');
    }

    public function update($id)
    {

        $this->load->model('m_kategori');
        $name = $this->input->post('name');
        $status = $this->input->post('status');

        if (empty($name))
        {
            die("Nama tidak boleh kosong");
        }
        if (empty($status)){
            die('Status tidak boleh kosong');
        }

        if(!empty($name) AND !empty($status)){

            $data = array(
                'name' => $name,
                'status' => $status
            );

            $update = $this->m_kategori->update("categories", $data, $id);

            if($update){
                echo("<script>alert('Berhasil mengubah data');
                window.location.href='".base_url('index.php/kategori')."';</script>");
            }
        }
    }

    public function destroy($id)
    {
        $this->load->model('m_kategori');
        $delete = $this->m_kategori->destroy("categories",$id);
        if($delete){
            echo("<scrip>alert('Berhasil menghapus data');
            window.location.href='".base_url('index.php/kategori')."';</script>");
        }
    }
}



