<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('mysql_datetime'))
{
    function mysql_datetime($timestamp = '')
    {
    	if ($timestamp == '')
	        return date('Y-m-d H:i:s',now());
	    else{
	    	return date('Y-m-d H:i:s',$timestamp);
	    }
    }   
}

if (! function_exists('my_format_date')){
	function my_format_date($mysql_datetime){
		$oDate = new DateTime($mysql_datetime);
		return $oDate->format("Y-m-d");
	}
}



/* End of file mydate_helper.php */
/* Location: ./application/helpers/mydate_helper.php */