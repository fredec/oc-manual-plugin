<?php
namespace Diveramkt\Manual;

use System\Classes\PluginBase;
use backend;

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

	public function registerPermissions()
	{
		return [
			'diveramkt.manual.manage_manual' => [
				'tab'   => 'diveramkt.manual::lang.plugin.name',
				'label' => 'diveramkt.manual::lang.plugin.view_videos'
			],
			'diveramkt.manual.manage_videos_manual' => [
				'tab'   => 'diveramkt.manual::lang.plugin.name',
				'label' => 'diveramkt.manual::lang.plugin.manage_videos'
			],
		];
	}

	public function registerNavigation()
	{
		return [
			'main-menu-manual' => [
				'label'       => 'diveramkt.manual::lang.plugin.name',
				'url'         => Backend::url('diveramkt/manual/homePlugin'),
				'icon'        => 'icon-book',
				// 'iconSvg'     => 'plugins/rainlab/blog/assets/images/blog-icon.svg',
				'permissions' => ['diveramkt.manual.*'],
				// 'order'       => 300,
				'sideMenu' => [
					'side-menu-manual-preview' => [
						'label'       => 'diveramkt.manual::lang.plugin.name',
						'icon'        => 'icon-list',
						'url'         => Backend::url('diveramkt/manual/manual'),
						'permissions' => ['diveramkt.manual.manage_manual']
					],
					'side-menu-videos-manual' => [
						'label'       => 'Gerenciar Vídeos',
						'icon'        => 'icon-youtube-play',
						'url'         => Backend::url('diveramkt/manual/videos'),
						'permissions' => ['diveramkt.manual.manage_videos_manual']
					]
				]
			]
		];
	}

}
