<?php

class Util{

	public static function zeroInitial($num){
		if($num < 10){ 
			return '0'.$num;
		}else{
			return $num;
		}
	}

}