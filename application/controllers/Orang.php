<?php

    class Orang extends CI_Controller{
        public function nyasar(){
            $data['heading'] = "HALAMAN 404";
            $data['message'] = "ANDA TERSASAR";

            $this->load->view('errors/html/error_404', $data);
        }
    }