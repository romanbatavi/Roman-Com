<?php

class Halaman extends CI_Controller {

	public function tampil(){
		$this->load->view('tampilanSaya');
	}

	public function aku_kamu(){
		echo "Berhasil";
	}
}
