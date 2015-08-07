<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debug {
	public function __construct() {
	}
	public static function dump($variable, $option = array('showDataType' => false, 'muties' => false, 'displayBeside' => false)) {
		foreach ($option as $k => $o) {
			$$k = $o;
		}
		$displayBeside = isset($displayBeside) ? $displayBeside : false;
		$muties = isset($muties) ? $muties : false;
		$showDataType = isset($showDataType) ? $showDataType : false;
		$preOpen = '<pre style="
					    background-color: #000;
					    color: #fff;
						font-size: 15px;
						font-style: italic;
					">';
		if ($displayBeside) {
			$preOpen = '<pre style="
					    background-color: #000;
					    color: #fff;
						font-size: 15px;
						font-style: italic;
						float: left;
					">';
		}
		$preClose = '</pre>';
		if ($muties) {
			foreach ($variable as $k => $v) {
				echo $preOpen;
				if ($showDataType) {
					var_dump($v);
				} else {
					print_r($v);
				}
				echo $preClose;
			}
		} else {
			echo $preOpen;
			if ($showDataType) {
				var_dump($variable);
			} else {
				print_r($variable);
			}
			echo $preClose;
		}
	}
}