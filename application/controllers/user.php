<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }

    public function login()
    {
        $post = $this->input->post();

        $this->load->model('school');

        $this->school->valid($post);

        $school = $this->school->u_select($post['username']);

        if ($school) {
            if ($school[0]->password = md5($post['password'])) {
                $this->session->set_userdata(array('s_id' => $school[0]->id, 's_name' => $school[0]->school_name));
            }
            toJSON(0, array("s_name" => $this->session->userdata('s_id'), "url"=>site_url("index.php/upload")));
        } else {
            toJSON(0, "用户不存在！");
        }
    }

    public function is_login()
    {
        $this->load->library('javascript');
        if ($this->session->userdata("s_id")) {
            $this->javascript->generate_json(array("no" => 0, "data" => array("s_name" => $this->session->userdata('s_id'))));
        } else {
            $this->javascript->generate_json(array("no" => 1, "data" => "用户未登录！"));
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('s_id');
        $this->session->unset_userdata('s_name');
        redirect('index.php/lotus');
    }
}

/* End of file index.php */
