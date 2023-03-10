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
declare(strict_types=1);

namespace Dotclear\Plugin\cleanURLs;

use dcCore;
use dcNsProcess;

class Prepend extends dcNsProcess
{
    public static function init(): bool
    {
        self::$init = true;

        return self::$init;
    }

    public static function process(): bool
    {
        if (!self::$init) {
            return false;
        }

        dcCore::app()->addBehavior('coreBeforePostCreate', [CleanURLs::class, 'clean']);

        return true;
    }
}
