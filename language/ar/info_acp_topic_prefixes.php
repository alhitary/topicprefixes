<?php
/**
 *
 * Topic Prefixes extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Translated By : Bassel Taha Alhitary <http://alhitary.net>
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

$lang = array_merge($lang, array(
	'ACP_TOPIC_PREFIXES'	=> 'اعدادات بادئة الموضوع',
	'ACP_MANAGE_PREFIXES'	=> 'إدارة  البادئة',

	// ACP Log messages
	'ACP_LOG_PREFIX_ADDED'		=> '<strong>تم إنشاء “بادئة موضوع” جديدة</strong><br />» %1$s في المنتدى: %2$s',
	'ACP_LOG_PREFIX_DELETED'	=> '<strong>تم حذف “بادئة الموضوع”</strong><br />» %1$s في المنتدى: %2$s',
));
