<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('mysql_datetime'))
{
    function current_url()
    {
    	$CI =& get_instance();
	    $url = $CI->config->site_url($CI->uri->uri_string());
	    return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
    }   
}


/* End of file myurl_helper.php */
/* Location: ./application/helpers/myurl_helper.php */