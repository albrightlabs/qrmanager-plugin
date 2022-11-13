<?php namespace Albrightlabs\QRManager;

use Backend;
use System\Classes\PluginBase;

/**
 * QRManager Plugin Information File
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
            'name'        => 'QR Manager',
            'description' => 'Allows for creation and management of QR codes.',
            'author'      => 'Albright Labs LLC',
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
     * @return void
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
            'Albrightlabs\QRManager\Components\MyComponent' => 'myComponent',
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
            'albrightlabs.qrmanager.some_permission' => [
                'tab' => 'QRManager',
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
            'qrmanager' => [
                'label'       => 'QRManager',
                'url'         => Backend::url('albrightlabs/qrmanager/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['albrightlabs.qrmanager.*'],
                'order'       => 500,
            ],
        ];
    }
}
