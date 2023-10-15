<?php
/**
 * @file
 * @brief       The plugin cleanURLs definition
 * @ingroup     cleanURLs
 *
 * @defgroup    cleanURLs Plugin cleanURLs.
 *
 * Removes diacritics and punctuation from URLs.
 *
 * @author      Pierre Rudloff (author)
 * @author      Jean-Christian Denis (latest)
 * @copyright   GPL-3.0 https://www.gnu.org/licenses/gpl-3.0.html
 */
declare(strict_types=1);

$this->registerModule(
    'Clean URLs',
    'Removes diacritics and punctuation from URLs',
    'Pierre Rudloff and contributors',
    '1.6.1',
    [
        'requires'    => [['core', '2.28']],
        'permissions' => 'My',
        'type'        => 'plugin',
        'support'     => 'https://git.dotclear.watch/JcDenis/' . basename(__DIR__) . '/issues',
        'details'     => 'https://git.dotclear.watch/JcDenis/' . basename(__DIR__) . '/src/branch/master/README.md',
        'repository'  => 'https://git.dotclear.watch/JcDenis/' . basename(__DIR__) . '/raw/branch/master/dcstore.xml',
    ]
);
