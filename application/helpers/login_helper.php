<?php
function is_login(){
	$CI =& get_instance();
	$is_logged_in = $CI->session->userdata('status');
	if(!isset($is_logged_in))
	{
		echo '<script>alert("Please Login First.");</script>';
		redirect(('admin/login'),'refresh'); 
	}
}
?>