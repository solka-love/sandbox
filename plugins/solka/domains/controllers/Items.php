<?php namespace Solka\Domains\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Solka\Domains\Models\Item;

class Items extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Solka.Domains', 'main-menu-item', 'side-menu-item2');
    }

    public function create(){
        parent::create();
        BackendMenu::setContext('Solka.Domains', 'main-menu-item', 'side-menu-item3');

    }



}
