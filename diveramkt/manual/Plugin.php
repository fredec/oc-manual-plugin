<?php
namespace Diveramkt\Manual;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function registerComponents()
	{
		// return [
		// 	'Diveramkt\Manual\Components\Manual' => 'Manual'
		// ];
	}

	public function registerSettings()
	{
		// return [
		// 	'settings' => [
		// 		'label'       => 'Manual',
		// 		'description' => 'Adicionar manual do site no backend.',
		// 		'category'    => 'DiveraMkt',
		// 		'icon'        => 'icon-book',
		// 		'class'       => 'DiveraMkt\Manual\Models\Settings',
		// 		'order'       => 500,
		// 		'keywords'    => 'manual videos diveramkt',
		// 		'permissions' => ['Manual.manage_manual']
		// 	]
		// ];
	}
}
