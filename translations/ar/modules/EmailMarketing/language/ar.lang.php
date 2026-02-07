<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_REPLY_ADDR' => 'عنوان "الرد إلى": ',
    'LBL_REPLY_NAME' => 'اسم "الرد إلى": ',

    'LBL_MODULE_NAME' => 'التسويق بالبريد الإلكتروني',
    'LBL_MODULE_TITLE' => 'البريد الإلكتروني التسويقي: الرئيسية',
    'LBL_LIST_FORM_TITLE' => 'حملات البريد الإلكتروني التسويقي',
    'LBL_NAME' => 'الاسم',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_LIST_FROM_ADDR' => 'البريد الإلكتروني للمرسل',
    'LBL_LIST_DATE_START' => 'تاريخ البدء',
    'LBL_LIST_TEMPLATE_NAME' => 'قالب البريد الإلكتروني',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_STATUS' => 'الحالة',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'الحالة:',
    'LBL_TEMPLATE_NAME' => 'اسم القالب',
    'LBL_DATE_ENTERED' => 'تاريخ الإدخال',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_MODIFIED' => 'عدل بواسطة: ',
    'LBL_CREATED' => 'أنشئ بواسطة: ',
    'LBL_MESSAGE_FOR' => 'أرسل هذه الرسالة إلى:',

    'LBL_FROM_NAME' => 'اسم المرسِل: ',
    'LBL_FROM_ADDR' => 'عنوان البريد الإلكتروني للمرسل: ',
    'LBL_DATE_START' => 'تاريخ البدء',
    'LBL_SEND_DATE' => 'تاريخ الإرسال',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'وقت البدء',
    'LBL_START_DATE_TIME' => 'تاريخ ووقت البداية: ',
    'LBL_TEMPLATE' => 'قالب البريد الإلكتروني: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'عدل بواسطة: ',
    'LBL_CREATED_BY' => 'أنشئ بواسطة: ',

    'LNK_NEW_CAMPAIGN' => 'إنشاء حملة',
    'LNK_CAMPAIGN_LIST' => 'حملات',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'إنشاء قائمة للمستهدفين',
    'LNK_PROSPECT_LIST_LIST' => 'قوائم المستهدفين',
    'LNK_NEW_PROSPECT' => 'انشاء هدف',
    'LNK_PROSPECT_LIST' => 'المُستهدفون',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'التسويق بالبريد الإلكتروني',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'إنشاء',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'حرر',
    'LBL_FROM_MAILBOX' => 'صندوق بريد المرسل',
    'LBL_FROM_MAILBOX_NAME' => 'استخدام صندوق البريد:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'حساب البريد الإلكتروني الصادر:',
    'LBL_FROM' => 'من',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'قوائم المستهدفين',
    'LBL_ALL_PROSPECT_LISTS' => 'حدد لاختيار جميع القوائم المستهدفة في الحملة.',
    'LBL_RELATED_PROSPECT_LISTS' => 'جميع القوائم المستهدفة ذات الصلة بهذه الرسالة.',
    'LBL_PROSPECT_LIST_NAME' => 'اسم قائمة الهدف',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'قوائم المستهدفين',
    'LBL_MODULE_SEND_TEST' => 'الحملة: إرسال اختبار',
    'LBL_MODULE_SEND_EMAILS' => 'الحملة: إرسال رسائل البريد الإلكتروني',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'يرجى تحديد رسائل الحملة التي ترغب في اختبارها:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'يرجى تحديد رسائل الحملة التي ترغب في جدولتها للتوزيع في تاريخ ووقت البدء المحددين:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'أرسل',
    'LBL_SEND_BUTTON_LABEL' => 'أرسل',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'جدولة',
    'LBL_ERROR_ON_MARKETING' => 'حقول مطلوبة مفقودة',

    'LBL_CAMPAIGN_ID' => 'معرف الحملة',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'معرف حساب البريد الإلكتروني الصادر',
    'LBL_EMAIL_TEMPLATE' => 'قالب البريد الإلكتروني',
    'LBL_PROSPECT_LISTS' => 'قوائم العملاء المتوقعين',
    'LBL_OVERVIEW' => 'أساسي',
    'LBL_EMAIL_CONFIG' => 'إعدادات البريد الإلكتروني',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'البريد الإلكتروني',
    'LBL_BODY' => 'النص',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'الاستطلاع',
    'LBL_SCHEDULE' => 'جدولة',
    'LBL_DELETE_TEST_ENTRIES' => 'حذف مدخلات الاختبار',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'المستخدمون',
    'LBL_SEND_TEST_EMAIL' => 'إرسال بريد للإختبار',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'قائمة انتظار الرسائل',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'تشغيل المعالجة الليلية للبريد الإلكتروني المرتد للحملات',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'مُجدول المهام آلياً',
    'LBL_INBOUND_EMAIL' => 'عنوان إيميل سجل من الإنترنت',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
