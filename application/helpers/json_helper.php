<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('toJSON'))
{
	function toJSON($no, $data = "")
	{
		$CI =& get_instance();
        $CI->load->library('javascript');
        echo $CI->javascript->generate_json(array("no" => $no, "data" => $data));
        die;
	}
}

if ( ! function_exists('gender'))
{
	function gender($gender)
	{
		echo $gender == 1 ? '男' : '女';
	}
}

if ( ! function_exists('race'))
{
	function race($race)
	{	
		echo $race == 1 ? '汉族' : '';
	}
}

if ( ! function_exists('birthday'))
{
	function birthday($birthday)
	{	
		$date = explode("-", $birthday);
		echo date("Y年m月d日",strtotime($date[2]."-".$date[0].'-'.$date[1]));
	}
}


// ------------------------------------------------------------------------
/* End of file language_helper.php */
/* Location: ./application/json_helper.php */