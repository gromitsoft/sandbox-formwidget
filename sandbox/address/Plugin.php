<?php namespace Sandbox\Address;

use Backend;
use Sandbox\Address\FormWidgets\MapPicker;
use System\Classes\PluginBase;

/**
 * address Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'address',
            'description' => 'No description provided yet...',
            'author'      => 'sandbox',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Sandbox\Address\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'sandbox.address.some_permission' => [
                'tab' => 'address',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'address' => [
                'label'       => 'address',
                'url'         => Backend::url('sandbox/address/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['sandbox.address.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerFormWidgets()
    {
        return [
            MapPicker::class => 'mapPicker',
        ];
    }
}
