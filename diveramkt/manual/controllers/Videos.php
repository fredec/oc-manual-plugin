<?php namespace Diveramkt\Manual\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Videos extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [ 'diveramkt.manual.manage_videos_manual' ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Diveramkt.Manual', 'main-menu-manual', 'side-menu-videos-manual');
    }
}
