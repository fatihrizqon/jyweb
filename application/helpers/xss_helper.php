<?php
function xprint($str)
{
	echo htmlentities($str, ENT_QUOTES, 'UTF-8');
}
?>