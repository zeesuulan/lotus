<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('setCSS'))
{
	function setCSS($cssfile)
	{
		if(is_array($cssfile)) {
			foreach ($cssfile as $key => $value) {
				$link[] = '<link rel="stylesheet" href="'.base_url().'asset/css/'. $value .'">';
			}
			$link = join($link,"");
		}else{
			$link = '<link rel="stylesheet" href="'.base_url().'asset/css/'. $value .'">';
		}
		echo $link;
	}
}

if ( ! function_exists('setJS'))
{
	function setJS($jsfile)
	{
		if(is_array($jsfile)) {
			foreach ($jsfile as $key => $value) {
				$link[] = '<script src="'.base_url().'asset/js/'.$value.'"></script>';
			}
			$link = join($link,"");
		}else{
			$link = '<script src="'.base_url().'asset/js/'.$value.'"></script>';
		}
        echo $link;
	}
}


// ------------------------------------------------------------------------
/* End of file language_helper.php */
/* Location: ./application/asset_helper.php */