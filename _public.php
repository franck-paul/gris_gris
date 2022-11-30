<?php
/**
 * @brief gris-gris, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (carnet.franck.paul@gmail.com)
 * @copyright GPL-2.0
 */

namespace themes\gris_gris;

if (!defined('DC_RC_PATH')) {
    return;
}

\l10n::set(__DIR__ . '/locales/' . \dcCore::app()->lang . '/main');
