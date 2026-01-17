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


    'LBL_RE' => 'ر ی:',

    'ERR_BAD_LOGIN_PASSWORD' => 'لاگ ان یا پاسورڈ غلط',
    'ERR_INI_ZLIB' => 'عارضی طور پر Zlib کمپریشن بند نہیں کر سکا. "ٹیسٹ کی ترتیبات" ناکام ہوسکتی ہے.',
    'ERR_NO_IMAP' => 'کوئی IMAP لائبریری نہیں پایا. انباؤنڈ ای میل جاری رکھنے سے پہلے اس کو حل کریں',
    'ERR_NO_OPTS_SAVED' => 'آپ کے انباؤنڈ ای میل اکاؤنٹ کے ساتھ کوئی اصلاحات محفوظ نہیں ہوئیں. براہ مہربانی ترتیبات کا جائزہ لیں',
    'ERR_TEST_MAILBOX' => 'براہ مہربانی اپنی ترتیبات کی جانچ پڑتال کریں اور دوبارہ کوشش کریں.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'صارف کو تفویض کریں',
    'LBL_AUTOREPLY' => 'آٹو جواب دیں سانچہ',
    'LBL_AUTOREPLY_HELP' => 'ای میل بھیجنے والوں کو مطلع کرنے کے لئے خودکار ردعمل منتخب کریں کہ ان کا جواب موصول ہوا ہے.',
    'LBL_BASIC' => 'میل اکاؤنٹ کی معلومات',
    'LBL_CASE_MACRO' => 'کیس میکرو',
    'LBL_CASE_MACRO_DESC' => 'ماکرو مقرر کریں جسے پیسہ کیا جائے گا اور ایک ای میل میں درآمد کردہ ای میل سے منسلک کرنے کے لئے استعمال کیا جاتا ہے.',
    'LBL_CASE_MACRO_DESC2' => 'اسے کسی بھی قیمت پر مقرر کریں، لیکن محفوظ کریں <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'بند کھڑکی',
    'LBL_CREATE_TEMPLATE' => 'بنانا',
    'LBL_DELETE_SEEN' => 'درآمد کے بعد ای میل پڑھیں حذف کریں',
    'LBL_EDIT_TEMPLATE' => 'ردوبدل',
    'LBL_EMAIL_OPTIONS' => 'درآمد کے بعد ای میل پڑھیں حذف کریں',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'ای میل ہینڈلنگ کے اختیارات',
    'LBL_FILTER_DOMAIN_DESC' => 'ایک ڈومین کی وضاحت کریں جس پر کوئی خود کار جواب نہیں بھیجے جائیں گے.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'تمام آنے والی ای میلز کیلئے سویٹ آر آر ایم میں ای میل ریکارڈز خود کار طریقے سے تخلیق کریں.',
    'LBL_FILTER_DOMAIN' => 'اس ڈومین پر خود کار طریقے سے جواب دیں',
    'LBL_FIND_SSL_WARN' => '<br>ایس ایس ایس ٹیسٹنگ ایک طویل وقت لگ سکتا ہے. براہ کرم صبر کرو.<br>',
    'LBL_FROM_ADDR' => '"سے" پتہ',
    'LBL_FROM_ADDR_DESC' => 'یہاں فراہم کردہ ای میل ایڈریس میں ظاہر نہیں ہوسکتا ہے " سے" ای میل کا ایڈریس سیکشن میل سروس فراہم کنندہ کی طرف سے نافذ ہونے والے پابندیوں کی وجہ سے بھیجا جاتا ہے. آؤٹ لک میل سرور میں بیان کردہ ای میل پتہ استعمال کیا جائے گا.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'نام "سے"',
    'LBL_GROUP_QUEUE' => 'گروپ کو تفویض کریں',
    'LBL_HOME' => 'شروع',
    'LBL_LIST_MAILBOX_TYPE' => 'میل اکاؤنٹ کا استعمال',
    'LBL_LIST_NAME' => 'نام:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'قسم',
    'LBL_LIST_SERVER_URL' => 'میل سرور',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'حیثیت',
    'LBL_LOGIN' => 'صارف کا نام',
    'LBL_USERNAME' => 'صارف کا نام',
    'LBL_MAILBOX_DEFAULT' => 'ان باکس',
    'LBL_MAILBOX_SSL' => 'ایس ایس ایل استعمال کریں',
    'LBL_MAILBOX_TYPE' => 'ممکن اقدامات',
    'LBL_DISTRIBUTION_METHOD' => 'تقسیم کا طریقہ',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'نیا کیس خود کار طریقے سے جواب دیں سانچہ',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'ایک ای میل بھیجنے والوں کو مطلع کرنے کے لئے ایک خودکار ردعمل منتخب کریں جو ایک کیس پیدا ہوا ہے. ای میل پر کیس نمبر میں موضوع لائن میں شامل ہے جو کیس میکرو کی ترتیب پر عمل کرتا ہے. یہ جواب صرف اس وقت بھیجا جاتا ہے جب وصول کنندہ سے پہلا ای میل موصول ہوا ہے.',
    'LBL_MAILBOX' => 'مانیٹر شدہ فولڈر',
    'LBL_TRASH_FOLDER' => 'ردی کی ٹوکری فولڈر',
    'LBL_SENT_FOLDER' => 'بھیج دیا فولڈر',
    'LBL_SELECT' => 'منتخب کرنا',
    'LBL_MARK_READ_NO' => 'ای میل درآمد کے بعد خارج کر دیا گیا ہے',
    'LBL_MARK_READ_YES' => 'ای میل درآمد کے بعد سرور پر بائیں',
    'LBL_MARK_READ' => 'سرور پر پیغام چھوڑ دو',
    'LBL_MAX_AUTO_REPLIES' => 'آٹو ردعمل کی تعداد',
    'LBL_MAX_AUTO_REPLIES_DESC' => '24 گھنٹے کی مدت کے دوران ایک منفرد ای میل ایڈریس پر بھیجنے کیلئے خود کار طریقے سے زیادہ سے زیادہ تعداد مقرر کریں.',
    'LBL_PERSONAL_MODULE_NAME' => 'ذاتی میل اکاؤنٹ',
    'LBL_CREATE_CASE' => 'ای میل سے کیس بنائیں',
    'LBL_CREATE_CASE_HELP' => 'آنے والے ای میلز سے سویٹ آر آر ایم میں کیس ریکارڈز کو خود بخود بنانے کیلئے منتخب کریں.',
    'LBL_MODULE_NAME' => 'گروپ میل اکاؤنٹ',
    'LBL_BOUNCE_MODULE_NAME' => 'ہینڈلنگ میل باکس باؤنس',
    'LBL_MODULE_TITLE' => 'ان باؤنڈ ای میل',
    'LBL_NAME' => 'نام',
    'LBL_NONE' => 'کوئی نہیں',
    'LBL_ONLY_SINCE_NO' => 'نہیں. میل میل سرور پر تمام ای میلز کے خلاف چیک کریں.',
    'LBL_ONLY_SINCE_YES' => 'جی ہاں.',
    'LBL_PASSWORD' => 'پاس ورڈ',
    'LBL_EMAIL_PASSWORD' => 'پاس ورڈ',
    'LBL_POP3_SUCCESS' => 'آپ کے POP3 ٹیسٹ کنکشن کامیاب رہا.',
    'LBL_POPUP_TITLE' => 'ماحول کی جانچ پڑتال',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'سبسکرائب شدہ فولڈر منتخب کریں',
    'LBL_SELECT_TRASH_FOLDERS' => 'ٹریش فولڈر کا انتخاب کریں',
    'LBL_SELECT_SENT_FOLDERS' => 'بھیجے گئے فولڈر کو منتخب کریں',
    'LBL_DELETED_FOLDERS_LIST' => 'ماجودہ فولڈر%s موجود نہیں ہیں وہ سرور سے مٹائے جا چکے ہیں',
    'LBL_PORT' => 'میل سرور پورٹ',
    'LBL_REPLY_TO_NAME' => 'نام کا جواب دینا',
    'LBL_REPLY_TO_ADDR' => 'پتا کا جواب دینا',
    'LBL_SAME_AS_ABOVE' => 'نام پتہ کو استعمال کرنا',
    'LBL_SERVER_OPTIONS' => 'جدید setup',
    'LBL_SERVER_TYPE' => 'میل سرور پروٹوکول',
    'LBL_SERVER_PORT' => 'میل سرور پورٹ',
    'LBL_SERVER_URL' => 'میل سرور ایڈریس',
    'LBL_SSL_DESC' => 'اگر آپ کا میل سرور محفوظ ساکٹ کنکشن کی حمایت کرتا ہے تو، اس کو چالو کرنے میں ای میل درآمد کرتے وقت ایس ایس ایل کنکشن کو مجبور کرے گا.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'ماجودہ منتخب کردہ اکاؤنٹ سے رسائی حاصل ہو چکی ہے.',
    'LBL_SSL' => 'ایس ایس ایل استعمال کریں',
    'LBL_STATUS' => 'حیثیت',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'سسٹم کا طے شدہ',
    'LBL_TEST_BUTTON_TITLE' => 'آزمانا',
    'LBL_TEST_SETTINGS' => 'ماحول کی جانچ پڑتال',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'رابطہ بقید کیسی کامیاب ہو گیا ہے.',
    'LBL_TEST_WAIT_MESSAGE' => 'ایک لمحے کے لئے براہ مہربانی...',
    'LBL_WARN_IMAP_TITLE' => 'ان باؤنڈ عمل ناقابل',
    'LBL_WARN_IMAP' => 'انتباہ:',
    'LBL_WARN_NO_IMAP' => 'ان باؤنڈ ایمل<b>نہیں ہیں</b>imap کے بغیر کوئی فنکشن صارف کی لبریری کو قابل بنا دیا ہے پی ایچ پی ماڈل کے ساتھ برائے مہربانی اپنے ایڈمنسٹریٹر سے رابطہ کریں اس مسلے کے حل کے لیے.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'اوٹ بانڈ ای میل کا اکاؤنٹ',
    'LNK_LIST_SCHEDULER' => 'زمان بند',
    'LNK_SEED_QUEUES' => 'ٹیموں سے بیج کی قطاریں',
    'LBL_GROUPFOLDER_ID' => 'گروپ فولڈر کی شناخت',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'صارف کو اجازت ہے کہ وہ اپنا نام یا پتہ استعمال کرکے ای میل بھیج سکتے ہیں اور پتہ کو جواب دے سگتے ہیں',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'جب یہ آپشن منتخب ہوتا ہے فلم کا نام اور ای میل کا پتہ گروپ میل اکاونٹ کے اندر نظر آتا ہےیہ فیلڈ میں اس وقت عمل لکھا جاتا ہے جو زہر رسائی حاصل کرتا ہے گروپ میل اکاؤنٹ سے.',
    'LBL_STATUS_ACTIVE' => 'فعال ہے',
    'LBL_STATUS_INACTIVE' => 'غیر فعال ہے',
    'LBL_IS_PERSONAL' => 'انفرادي',
    'LBL_IS_GROUP' => 'گروپ',
    'LBL_ENABLE_AUTO_IMPORT' => 'خود بخود ان ای میل درآمد کرنا',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'خطرہ ہے آپ خود بخود تبدیل کر رہے ہیں درامد ترتیب کو جس کا نتائج دیتا پر برا اثر ڈال سکتے ہیں.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'قطرہ ہے خودبخود درامد کابل ہو گئی ہے جب خودبخود کے کیس گے.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'دستکاری',
    'LBL_LIST_TITLE_MY_INBOX' => 'ان باکس',
    'LBL_LIST_TITLE_MY_SENT' => 'بھيجا ہوا ای میل',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'محفوظ شدہ ای میلز',
    'LNK_MY_DRAFTS' => 'دستکاری',
    'LNK_MY_INBOX' => 'ای میل',
    'LNK_VIEW_MY_INBOX' => 'ای میل دیکھیں',
    'LNK_QUICK_REPLY' => 'جواب دینا ردعمل پیش کرنا',
    'LNK_SENT_EMAIL_LIST' => 'بھیجیں ای میل',
    'LBL_EDIT_LAYOUT' => 'لے آؤٹ میں ترمیم کریں' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'کی طرف سے ترمیم',
    'LBL_SERVICE' => 'خدمت',
    'LBL_STORED_OPTIONS' => 'محفوظ کردہ اختیارات',
    'LBL_GROUP_ID' => 'گروپ کی شناخت',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'سیکورٹی گروپ',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Outbound Email Account',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Outbound Email Account id',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Auto Reply Email Template',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Auto Reply Email Template id',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Auto Reply Email Template',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Case Email Template',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Case Email Template id',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Case Email Template',

    'LBL_PROTOCOL' => 'Protocol',
    'LBL_CONNECTION_STRING' => 'Connection String',
    'LBL_DISTRIB_METHOD' => 'تقسیم کا طریقہ',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'قسم',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'طے شدہ',
    'LBL_SIGNATURE' => 'علامت',

    'LBL_OWNER_NAME' => 'مالک',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
