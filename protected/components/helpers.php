<?php

	 function cutString($string, $maxlength) {
		if (strlen($string) > $maxlength) {
			$string = substr($string, 0, $maxlength);
			$pos = strrpos($string, " ");
			if ($pos === FALSE) {
				return substr($string, 0, $maxlength) . "...";
			} else {
				return substr(	$string, 0, $pos). "...";
			}

		}
		
		return $string;
	}


?>