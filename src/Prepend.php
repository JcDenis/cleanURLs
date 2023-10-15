<?php

declare(strict_types=1);

namespace Dotclear\Plugin\cleanURLs;

use Dotclear\App;
use Dotclear\Core\Process;

/**
 * @brief       cleanURLs prepend class.
 * @ingroup     cleanURLs
 *
 * @author      Pierre Rudloff (author)
 * @author      Jean-Christian Denis (latest)
 * @copyright   GPL-3.0 https://www.gnu.org/licenses/gpl-3.0.html
 */
class Prepend extends Process
{
    public static function init(): bool
    {
        return self::status(My::checkContext(My::PREPEND));
    }

    public static function process(): bool
    {
        if (!self::status()) {
            return false;
        }

        App::behavior()->addBehavior('coreBeforePostCreate', CleanURLs::cleanPost(...));

        return true;
    }
}
