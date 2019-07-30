<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
        $data['nama'] = "WILDAN FUADY";

        // $data = array(
        //     'nama' => "Wildan Fuady"
        // );
        // memanggil view == $this->load->view()
        // memanggil test.php di dalam folder views
        $this->load->view('kategori/test', $data);
	}
}
