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
		$race_txt = array('汉族',
			'蒙古族',
			'回族',
			'藏族',
			'维吾尔族',
			'苗族',
			'彝族',
			'壮族',
			'布依族',
			'朝鲜族',
			'满族',
			'侗族',
			'瑶族',
			'白族',
			'土家族',
			'哈尼族',
			'哈萨克族',
			'傣族',
			'黎族',
			'傈僳族',
			'佤族',
			'畲族',
			'高山族',
			'拉祜族',
			'水族',
			'东乡族',
			'纳西族',
			'景颇族',
			'柯尔克孜族',
			'土族',
			'达斡尔族',
			'仫佬族',
			'羌族',
			'布朗族',
			'撒拉族',
			'毛南族',
			'仡佬族',
			'锡伯族',
			'阿昌族',
			'普米族',
			'塔吉克族',
			'怒族',
			'乌孜别克族',
			'俄罗斯族',
			'鄂温克族',
			'德昂族',
			'保安族',
			'裕固族',
			'京族',
			'塔塔尔族',
			'独龙族',
			'鄂伦春族',
			'赫哲族',
			'门巴族',
			'珞巴族',
			'基诺族',
			'其他',
			'外国血统');
		echo $race_txt[$race-1];
		// echo $race == 1 ? '汉族' : '';
	}
}

if ( ! function_exists('birthday'))
{
	function birthday($birthday)
	{	
		if(strrpos($birthday, "/") > 0) {
			$date = explode("/", $birthday);
			echo date("Y年m月d日",strtotime($date[0]."-".$date[1].'-'.$date[2]));
		}else if(strrpos($birthday, "-") > 0) {
			$date = explode("-", $birthday);
			echo date("Y年m月d日",strtotime($date[2]."-".$date[0].'-'.$date[1]));
		}
	}
}

if ( ! function_exists('bmi'))
{
	function bmi($height, $heavy)
	{	
		$height = $height / 100;
		echo round($heavy / ($height * $height), 1);
	}
}



// ------------------------------------------------------------------------
/* End of file language_helper.php */
/* Location: ./application/json_helper.php */