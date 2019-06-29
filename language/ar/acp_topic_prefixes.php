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
	'TOPIC_PREFIXES'			=> 'بادئة الموضوع',
	'TOPIC_PREFIXES_EXPLAIN'	=> 'من هنا تستطيع إدارة بادئات المواضيع للمنتديات.',

	'TOPIC_PREFIX_TAG'			=> 'إسم البادئة',
	'TOPIC_PREFIX_ENABLED'		=> 'تفعيل / تعطيل البادئة',
	'TOPIC_PREFIXES_EMPTY'		=> 'لا توجد أي بادئة لهذا المنتدى.',
	'TOPIC_PREFIX_PLACEHOLDER'	=> '[إسم البادئة]',

	'CREATE_TOPIC_PREFIX'			=> 'إنشاء بادئة جديدة',
	'DELETE_TOPIC_PREFIX_CONFIRM'	=> 'متأكد أنك تريد حذف بادئة الموضوع؟',
	'TOPIC_PREFIX_DELETED'			=> 'تم حذف بادئة الموضوع بنجاح.',

	'TOPIC_PREFIX_TOGGLE_STATE'	=> array(
		0	=> 'انقر للتفعيل',
		1	=> 'انقر للتعطيل',
	),

	// Nested set exception messages
	'TOPIC_PREFIXES_LOCK_FAILED_ACQUIRE'	=> 'الإضافة “بادئة الموضوع” فشلت في الحصول على إغلاق للجدول.',
	'TOPIC_PREFIXES_INVALID_ITEM'			=> 'بادئة الموضوع المطلوبة غير موجودة.',
	'TOPIC_PREFIXES_INVALID_PARENT'			=> 'بادئة الموضوع المطلوبة ليس لها أصل.',
));
