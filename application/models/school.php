<?php 

class School extends CI_Model { // 类名首字母大写，继承CI_Model类

    function __construct() {
        parent::__construct(); // 继承父类的构造函数
        $this->load->database(); // 连接数据库
    }

    function u_select($name) { // 这里是通过用户名来查找，可以自定义其他字段
	    $this->db->where('school_name', $name);
	    $this->db->select('*'); //选取全部信息
	    $query = $this->db->get('user');
	    return $query->result(); //返回值
	}

	function valid($post){
		$this->load->helper("json");
		if($post['username'] == '' ||
			$post['password'] == '') {
			toJSON(-1, "用户名和密码不能为空");
		}
	}
}