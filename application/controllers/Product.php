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

    public function add()
    {

        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('sku', 'SKU', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if($this->form_validation->run() == FALSE){
            
        // $data['kategori'] =$this->m_kategori->tampil();
        // $this->load->view('header');
        // $this->load->view('produk/create', $data);
        // $this->load->view('footer');

        $error = $this ->form_validation->error_array();
        echo $this ->session->set_flashdata('error', $error);
        echo $this ->session->set_flashdata('input', $this->input->post());
        redirect('index.php/product/create');
        } 
        
        else {


            $config['upload_path'] ='./uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1024';
        $config['max_heigh']='1000';
        $config['max_size']='1000';

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $category = $this ->input->post('category');
        $sku = $this ->input->post('sku');
        $name = $this ->input->post('name');
        $status = $this ->input->post('status');
        $price  = $this ->input->post('price');
        $image = $_FILES['image']['name'];
        $description = $this ->input->post('description');

        if(!$this->upload->do_upload('image')){
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }

        else{
            $data = array(
                'category_id' => $category,
                'sku' => $sku,
                'name' => $name,
                'status' => $status,
                'price' => $price,
                'image' => $image,
                'description' => $description
            );

            $insert = $this->m_products->insert("products", $data);

            if($insert){
                // echo("<script>alert('Berhasil menambah data produk'); window.location.href='".base_url('index.php/product')."';</script>");
                // echo $this->session->Set_flashdata('success_add', 'Berhasil menambah data.');

                echo $this->session->set_flashdata(array('msg'=>"success_add"));
                redirect('index.php/product/create');
            }


        }


        
        


            
        }
    }
}