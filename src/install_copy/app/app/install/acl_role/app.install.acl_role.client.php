<?php
namespace app\install\acl_role;

/**
 * @package app\install\acl_role
 * @author Ryno Van Zyl
 * @copyright Copyright Liquid Edge Solutions. All rights reserved.
 */
class client extends \app\install\acl_role\master\main{
	//--------------------------------------------------------------------------------
	public function get_acl_code() {
		return "CLIENT";
	}
	//--------------------------------------------------------------------------------
	public function get_acl_is_locked() {
		return 1;
	}
	//--------------------------------------------------------------------------------
	public function get_acl_level() {
		return 11.00000;
	}
	//--------------------------------------------------------------------------------
	public function get_acl_name() {
		return "Client";
	}
	//--------------------------------------------------------------------------------
}
