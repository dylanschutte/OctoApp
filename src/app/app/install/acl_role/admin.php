<?php
namespace LiquidedgeApp\Octoapp\app\app\install\acl_role;

/**
 * @package app\install\acl_role
 * @author Ryno Van Zyl
 * @copyright Copyright Liquid Edge Solutions. All rights reserved.
 */
class admin extends \LiquidedgeApp\Octoapp\app\app\install\acl_role\master\main{
	//--------------------------------------------------------------------------------
	public function get_acl_code() {
		return "ADMIN";
	}
	//--------------------------------------------------------------------------------
	public function get_acl_is_locked() {
		return 1;
	}
	//--------------------------------------------------------------------------------
	public function get_acl_level() {
		return 1.00000;
	}
	//--------------------------------------------------------------------------------
	public function get_acl_name() {
		return "Administrator";
	}
	//--------------------------------------------------------------------------------
}
