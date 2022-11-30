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
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'Gris-Gris',
    'Deviation Cafe-Creme, Structure Aorakit-1B de Kozlika',
    'Franck Paul',
    '2.0',
    [
        'requires' => [['core', '2.24']],
        'type'     => 'theme',

        'details'    => 'https://open-time.net/?q=gris-gris',
        'support'    => 'https://github.com/franck-paul/gris-gris',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/gris-gris/master/dcstore.xml',
    ]
);
