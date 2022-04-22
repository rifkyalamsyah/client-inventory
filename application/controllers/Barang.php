<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$konten = $this->load->view('barang/list_barang', NULL, TRUE);

        $data_json = array(
            'konten' => $konten,
            'title' => 'List Data Barang',
        );

        echo json_encode($data_json);
	}
}