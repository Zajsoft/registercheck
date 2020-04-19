<?php
/**
*
* @package Registration Check Extension
* @copyright (c) 2016 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'EMAIL_AVAILABLE' 		=> 'E-mailová adresa, kterou jste zadali, zatím nebyla použita k regitraci',
	'EMAIL_NOT_AVAILABLE'	=> '[%1$s] e-mailová adresa, kterou jste zadali, již byla použita k registraci jiného účtu',

	'NAME_AVAILABLE' 		=> 'Zadané uživatelské jméno je volné',
	'NAME_NOT_AVAILABLE'	=> '[%1$s] zadané uživatelské jméno je již použito',

	'PASSWORDS_MATCH'		=> 'Hesla souhlasí',
	'PASSWORDS_NOT_MATCH'	=> 'Hesla nesouhlasí',
));
