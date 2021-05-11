<?php namespace Sandbox\Address\Controllers;

use BackendMenu;
use Backend\Behaviors\FormController;
use Backend\Behaviors\ListController;
use Backend\Classes\Controller;

/**
 * Addresses Back-end Controller
 */
class Addresses extends Controller
{
    public $implement = [
        FormController::class,
        ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Sandbox.Address', 'address', 'addresses');
    }
}
