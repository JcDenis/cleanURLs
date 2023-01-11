<?php
/**
 * Plugin description
 * 
 * PHP Version 5
 * 
 * @category Plugin
 * @package  CleanURLs
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License
 * @link     http://rudloff.pro
 * */
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'Clean URLs',
    'Removes diacritics and punctuation from URLs',
    'Pierre Rudloff and contributors',
    '1.1.1',
    [
        'requires'    => [['core', '2.24']],
        'permissions' => dcCore::app()->auth->makePermissions([
            dcAuth::PERMISSION_USAGE,
            dcAuth::PERMISSION_CONTENT_ADMIN,
        ]),
        'type'        => 'plugin',
        'support'     => 'https://github.com/JcDenis/' . basename(__DIR__),
        'details'     => 'https://github.com/JcDenis/' . basename(__DIR__),
        'repository'  => 'https://raw.githubusercontent.com/JcDenis/' . basename(__DIR__) . '/master/dcstore.xml',
    ]
);