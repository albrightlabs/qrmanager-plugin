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
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'albrightlabs.qrmanager.mange_qr_codes' => [
                'tab' => 'QR Manager',
                'label' => 'Manage QR codes.'
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
        return [
            'qrcodes' => [
                'label'       => 'QR Codes',
                'url'         => Backend::url('albrightlabs/qrmanager/qrcodes'),
                'icon'        => 'icon-barcode',
                'permissions' => ['albrightlabs.qrmanager.*'],
                'order'       => 500,
            ],
        ];
    }
}
