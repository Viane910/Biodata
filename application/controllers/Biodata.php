<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {


	public function index()
	{
        $this->load->view('biodata');
	}

	public function formbi()
    {

        $data = array(
            'Nama' => $this->input->post('Nama'),
            'Nim' => $this->input->post('Nim'),
			'Universitas' => $this->input->post('Universitas'),
            'nohp' => $this->input->post('nohp'),
            'tgl_lahir' => $this->input->post('tgl_lahir')
        );
        
        // Tampilkan view untuk menampilkan data biodata yang telah diisi
        $this->load->view('formbiodata', $data);
    }
}
