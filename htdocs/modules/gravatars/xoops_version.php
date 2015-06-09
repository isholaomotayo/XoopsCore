<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * avatars extension
 *
 * @copyright       XOOPS Project (http://xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         avatar
 * @since           2.6.0
 * @author          Mage Grégory (AKA Mage)
 * @version         $Id$
 */
$modversion                = array();
$modversion['name']        = _MI_GRAVATARS_NAME;
$modversion['description'] = _MI_GRAVATARS_DESC;
$modversion['version']     = 0.1;
$modversion['author']      = 'Richard Griffith';
$modversion['nickname']    = 'geekwright';
$modversion['credits']     = 'The XOOPS Project';
$modversion['license']     = 'GNU GPL 2.0';
$modversion['license_url'] = 'http://www.gnu.org/licenses/gpl-2.0.html';
$modversion['official']    = 1;
$modversion['help']        = 'page=help';
$modversion['image']       = 'images/logo.png';
$modversion['dirname']     = 'gravatars';
//about
$modversion['release_date']        = '2013/09/26';
$modversion['module_website_url']  = 'http://www.xoops.org/';
$modversion['module_website_name'] = 'XOOPS';
$modversion['module_status']       = 'ALPHA';
$modversion['min_php']             = '5.3.7';
$modversion['min_xoops']           = '2.6.0';

// paypal
$modversion['paypal'] = array(
    'business'      => 'xoopsfoundation@gmail.com',
    'item_name'     => 'Donation : ' . _MI_GRAVATARS_NAME,
    'amount'        => 0,
    'currency_code' => 'USD',
);

// Admin menu
// Set to 1 if you want to display menu generated by system module
$modversion['system_menu'] = 1;

// Admin things
$modversion['hasAdmin']   = true;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

/*
 Manage extension
 */
$modversion['extension']          = 1;
$modversion['extension_module'][] = 'system';

// Preferences
$modversion['config'][] = array(
    'name'        => 'pixel_size',
    'title'       => 'Size',
    'description' => 'Square size in pixels (1-2048 pixels)',
    'formtype'    => 'textbox',
    'valuetype'   => 'int',
    'default'     => 80,
);

$modversion['config'][] = array(
    'name'        => 'default_imageset',
    'title'       => 'Default Image',
    'description' => 'Default imageset on gravatars.com',
    'formtype'    => 'select',
    'valuetype'   => 'text',
    'default'     => 'wavatar',
    'options'     => array(
        '404 Error'   => '404',
        'blank'       => 'blank',
        'default'     => 'default',
        'mystery-man' => 'mm',
        'identicon'   => 'identicon',
        'monsterid'   => 'monsterid',
        'wavatar'     => 'wavatar',
        'retro'       => 'retro',
    ),
);

$modversion['config'][] = array(
    'name'        => 'max_rating',
    'title'       => 'Rating',
    'description' => 'Max rating (inclusive) of gravatar to allow',
    'formtype'    => 'select',
    'valuetype'   => 'text',
    'default'     => 'g',
    'options'     => array(
        'general'           => 'g',
        'parental guidance' => 'pg',
        'restricted'        => 'r',
        'adults only'       => 'x',
    ),
);
