<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lotus extends CI_Controller
{


    public function index()
    {
        $this->load->library('session');

        if ($this->session->userdata("s_id")) {
            redirect('index.php/upload');
        } else {
            $this->load->view('lotus');
        }
    }
}

/* End of file index.php */
