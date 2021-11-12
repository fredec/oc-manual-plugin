<?php namespace Diveramkt\Manual\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

use Diveramkt\Manual\Models\Videos;

class Manual extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [ 'diveramkt.manual.manage_manual' ];

    public $videos=array();

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Diveramkt.Manual', 'main-menu-manual', 'side-menu-manual-preview');

        $this->videos=Videos::orderBy('sort_order','asc')->get();
    // $this->videos=new videos();
    // $lista_videos = Videos::orderBy('sort_order')->get();

    }


}
