<?php

namespace CumbersomeCanoe;

if (!defined('ABSPATH')) exit;

class CumbersomeCanoe
{
	public function __construct()
	{
		add_action('admin_notices', array($this, 'admin_banner'));
	}

	public function admin_banner()
	{
		echo '<div class="notice notice-success"><p>Thanks for using Cumbersome Canoe!</p></div>';
	}
}
