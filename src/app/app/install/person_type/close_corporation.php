<?php
namespace LiquidedgeApp\Octoapp\app\app\install\person_type;

/**
 * @package app\install\person_type
 * @author Ryno Van Zyl
 * @copyright Copyright Liquid Edge Solutions. All rights reserved.
 */
class close_corporation extends \LiquidedgeApp\Octoapp\app\app\install\person_type\master\main{
	//--------------------------------------------------------------------------------
	public function get_pty_code() {
		return "CLOSE_CORPORATION";
	}
	//--------------------------------------------------------------------------------
	public function get_pty_is_individual() {
		return 0;
	}
	//--------------------------------------------------------------------------------
	public function get_pty_class() {
		return "close_corporation";
	}
	//--------------------------------------------------------------------------------
	public function get_pty_name() {
		return "Close corporation";
	}
	//--------------------------------------------------------------------------------
}
