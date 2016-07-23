<?php 

if($_POST['fun'] == 'type') {
		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$mobile = strpos($_SERVER['HTTP_USER_AGENT'],"Mobile");
		$symb = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
		$operam = strpos($_SERVER['HTTP_USER_AGENT'],"Opera M");
		$htc = strpos($_SERVER['HTTP_USER_AGENT'],"HTC_");
		$fennec = strpos($_SERVER['HTTP_USER_AGENT'],"Fennec/");
		$winphone = strpos($_SERVER['HTTP_USER_AGENT'],"WindowsPhone");
		$wp7 = strpos($_SERVER['HTTP_USER_AGENT'],"WP7");
		$wp8 = strpos($_SERVER['HTTP_USER_AGENT'],"WP8");
		$win = strpos($_SERVER['HTTP_USER_AGENT'],"Windows");
		if ($ipad || $iphone || $android || $palmpre || $ipod || $berry || $mobile || $symb || $operam || $htc || $fennec || $winphone || $wp7 || $wp8 == true) {
		    echo "Mobile"; 
		} elseif ($win == true) {
			echo "Win";
		}
	}


?>