<?php
/* 
* loads the SNV backend customisations in the theme
*
* just include this file in your functions.php
*/

require_once 'Theme/Admin.php';
require_once 'Theme/ContentHeader.php';
require_once 'Theme/Shortcodes.php';
require_once 'Theme/Snv.php';
require_once 'Theme/OnePage.php';

add_action('init', array(new snv\theme\onePage, 'theInit'));
add_action('init', array(new snv\theme\Admin , '__construct'));
add_action('init', array(new snv\theme\ContentHeader , '__construct'));
add_action('init', array(new snv\theme\Shortcodes , '__construct'));
add_action('init', array(new snv\theme\Snv, 'theInit'));