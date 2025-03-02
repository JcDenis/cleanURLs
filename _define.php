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
    '1.6.2',
    [
        'requires'    => [['core', '2.28']],
        'permissions' => 'My',
        'type'        => 'plugin',
        'support'     => 'https://github.com/JcDenis/' . $this->id . '/issues',
        'details'     => 'https://github.com/JcDenis/' . $this->id . '/',
        'repository'  => 'https://raw.githubusercontent.com/JcDenis/' . $this->id . '/master/dcstore.xml',
        'date'        => '2025-03-02T09:25:32+00:00',
    ]
);
