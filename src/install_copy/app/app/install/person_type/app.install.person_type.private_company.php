<?php
namespace app\install\person_type;
/**
 * @package app\install\person_type
 * @author Ryno Van Zyl
 * @copyright Copyright Liquid Edge Solutions. All rights reserved.
 */
class private_company extends \app\install\person_type\master\main{
	//--------------------------------------------------------------------------------
	public function get_pty_code() {
		return "PRIVATE_COMPANY";
	}
	//--------------------------------------------------------------------------------
	public function get_pty_is_individual() {
		return 0;
	}
	//--------------------------------------------------------------------------------
	public function get_pty_class() {
		return "sole_proprietor_za";
	}
	//--------------------------------------------------------------------------------
	public function get_pty_name() {
		return "Private company";
	}
	//--------------------------------------------------------------------------------
}
