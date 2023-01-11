<?php
/**
 * @brief cleanURLs, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugin
 *
 * @author Pierre Rudloff and contributors
 *
 * @copyright Jean-Christian Denis
 * @copyright GPL-3.0 https://www.gnu.org/licenses/gpl-3.0.html
 */
if (!defined('DC_RC_PATH')) {
    return;
}

Clearbricks::lib()->autoload(['CleanURLs' => __DIR__ . '/inc/class.cleanurls.php']);

dcCore::app()->addBehavior('coreBeforePostCreate', ['CleanURLs', 'clean']);
