<?php
require_once("../../class2.php");
if ( ! getperms("P")) {
	e107::redirect('admin');
	exit;
}

e107::lan('livetime', 'admin', true);

class livetime_admin extends e_admin_dispatcher
{
	protected $modes = [
		'main' => [
			'controller' => 'livetime_admin_ui',
			'path'       => null,
			'ui'         => 'livetime_admin_form_ui',
			'uipath'     => null,
		],
	];

	protected $adminMenu = [
		'main/prefs'  => ['caption' => 'Settings', 'perm' => '0'],
	];


	protected $menuTitle = 'LiveTime';
}


class livetime_admin_ui extends e_admin_ui
{
	protected $pluginTitle = "LiveTime";

	protected $pluginName = 'livetime';


	protected $prefs = [
		'livetime_active'   => [
			'title'    => 'Activate',
			'type'  => 'boolean',
			'data'  => 'int'
		],
		'global_libs' => [
			'title' => 'Use global paths for libs.',
			'type'  => 'boolean',
			'data'  => 'int'
		]
	];


	public function init()
	{
	}


	public function renderHelp()
	{
		$caption = LAN_LIVETIME_INFO_MENU_TITLE;
		$text = LAN_LIVETIME_INFO_MENU_LOGO;
		$text .= LAN_LIVETIME_INFO_MENU_SUBTITLE;
		$text .= LAN_LIVETIME_INFO_MENU_REPO_URL;
		$text .= LAN_LIVETIME_INFO_MENU_REPO_BUTTON_WATCH;
		$text .= LAN_LIVETIME_INFO_MENU_REPO_BUTTON_STAR;
		$text .= LAN_LIVETIME_INFO_MENU_REPO_BUTTON_ISSUE;
		$text .= LAN_LIVETIME_INFO_MENU_SUBTITLE_DEV;
		$text .= LAN_LIVETIME_INFO_MENU_DEV;
		$text .= LAN_LIVETIME_INFO_MENU_REPO_BUTTON_FOLLOW;
		$text .= LAN_LIVETIME_INFO_MENU_GITHUB_BUTTONS_SCRIPT;

		return ['caption' => $caption, 'text' => $text];

	}
}


class livetime_admin_form_ui extends e_admin_form_ui
{
}


new livetime_admin();

require_once(e_ADMIN . "auth.php");

e107::getAdminUI()->runPage();

require_once(e_ADMIN . "footer.php");
