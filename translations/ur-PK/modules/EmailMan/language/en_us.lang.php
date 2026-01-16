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
    'LBL_SEND_DATE_TIME' => 'ڈیٹا بھیجنا',
    'LBL_IN_QUEUE' => 'عمل میں',
    'LBL_IN_QUEUE_DATE' => 'تاریخ کی قطار بنانا',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'صرف استعمال کریں مکمل قیمت مخصوص نمبر ایمل بھیجنے کے لیے',

    'LBL_ATTACHMENT_AUDIT' => ' بھیجی گئی تھی یہ ایک جیسی نہیں تھی مقامی طور پر محفوظ جس کا استعمال کیا.',
    'LBL_CONFIGURE_SETTINGS' => 'Email کی ترتیب کو ترجیح دی',
    'LBL_CUSTOM_LOCATION' => 'صارف کی تعریف کریں',
    'LBL_DEFAULT_LOCATION' => 'طے شدہ',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'کے مطابق صفات کو مٹائیں اور ہٹائے گئے ای میل کو ساتھ لگائیں',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'آپشن میں ترتیب',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'خودبخود آپشن کو ای میل میں بھیج دیں',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'اوپشن کی تصدیق کریں ہی email کے سانچے میں',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'رخصت ہونے والے میل کی تشکیل',
    'LBL_EMAILS_PER_RUN' => 'میل کی تعداد بیج کے حساب سے بھیجی جاتی ہے:',
    'LBL_ID' => 'شناخت',
    'LBL_LIST_CAMPAIGN' => 'مہم',
    'LBL_LIST_FORM_TITLE' => 'قطار',
    'LBL_LIST_FROM_NAME' => 'نام کی زریں',
    'LBL_LIST_IN_QUEUE' => 'عمل میں',
    'LBL_LIST_MESSAGE_NAME' => 'مارکیٹ میں پیغام رسائی کرنا',
    'LBL_LIST_RECIPIENT_EMAIL' => 'ای میل وصول کرنے والا',
    'LBL_LIST_RECIPIENT_NAME' => 'وصول کرنے والے کا نام',
    'LBL_LIST_SEND_ATTEMPTS' => 'بھیجنے کی کوشش',
    'LBL_LIST_SEND_DATE_TIME' => 'پر بھیجنا',
    'LBL_LIST_USER_NAME' => 'صارف کا نام',
    'LBL_LOCATION_ONLY' => 'مقام',
    'LBL_LOCATION_TRACK' => 'میدان وصول دستاویز کا پتا(like campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'مہم کے پیغام کی نقل کرنا:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'کیا آپ پسند کرتے ہیں دستاویز کو مکمل محفوظ کرنا<bold>ہر </bold>ایمل کا پیغام تمام کمپین کو بھیجا جا رہا ہے<bold>ہم سفارش کرتے ہیں تہ   شدہ  نمبر</bold> نہیں منتخب کررہے سانچہ میں صرف محفوظ ہوں گے اس کو بھیجا جاتا ہے قیمت کی ضرورت کے مطابق اور اس کو دوبارہ بنایا جاتا ہے انفرادی پیغام.',
    'LBL_MAIL_SENDTYPE' => 'میل ایجنٹ کو بھیجی جارہی ہے:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP توصیف کو استعمال کریں:',
    'LBL_MAIL_SMTPPASS' => 'پاس ورڈ:',
    'LBL_MAIL_SMTPPORT' => 'ایس ایم ٹی پی پورٹ:',
    'LBL_MAIL_SMTPSERVER' => 'ایس ٹی ایم پی میل سرور:',
    'LBL_MAIL_SMTPUSER' => 'صارف نام:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'اپنا ای میل فراہم کرنے والا منتخب کریں',
    'LBL_YAHOOMAIL_SMTPPASS' => 'یاہو! ای میل پاس ورڈ',
    'LBL_YAHOOMAIL_SMTPUSER' => 'یاہو! میل کی شناخت',
    'LBL_GMAIL_SMTPPASS' => 'جی میل پاس ورڈ',
    'LBL_GMAIL_SMTPUSER' => 'جی میل ای میل ایڈریس',
    'LBL_EXCHANGE_SMTPPASS' => 'ایکسچینج پاس ورڈ',
    'LBL_EXCHANGE_SMTPUSER' => 'ایکسچینج صارف نام',
    'LBL_EXCHANGE_SMTPPORT' => 'ایکسچینج سرور پورٹ',
    'LBL_EXCHANGE_SMTPSERVER' => 'ایکسچینج سرور',
    'LBL_EMAIL_LINK_TYPE' => 'گاہک کا ای میل',
    'LBL_MARKETING_ID' => 'بازار کاري شناخت',
    'LBL_MODULE_ID' => 'ای میل مین',
    'LBL_MODULE_NAME' => 'ای میل کی ترتیبات',
    'LBL_MODULE_TITLE' => 'باہر نکلنے کے ای میل کی قطار کا نظام',
    'LBL_NOTIFICATION_ON_DESC' => 'جب آپ صارف کو ای میل بھیجنے کا اختیار دیتے ہیں تو وہ حسن محفوظ ہو جاتا ہے.',
    'LBL_NOTIFY_FROMADDRESS' => 'پتہ سے:',
    'LBL_NOTIFY_FROMNAME' => 'نام سے:',
    'LBL_NOTIFY_ON' => 'تفویض نوٹیفکیشن',
    'LBL_NOTIFY_TITLE' => 'ای میل کے اختیارات',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'آؤٹ باؤنڈ ای میل کے اختیارات',
    'LBL_RELATED_ID' => 'اس سے متعلق شناخت',
    'LBL_RELATED_TYPE' => 'اس جیسی قسم',
    'LBL_SEARCH_FORM_TITLE' => 'قطار تلاش',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'کانفیگ پی ایچ پی قیمت کی ترتیب سائٹ یورال',
    'TXT_REMOVE_ME_ALT' => 'اپنے آپ کو عمل کی فہرست سے مٹائے اور جائیں',
    'TXT_REMOVE_ME_CLICK' => 'یہاں کلک کریں',
    'TXT_REMOVE_ME' => 'اپنے آپ کو عمل کی فہرست سے مٹائے ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'ای میل سیکورٹی سیٹنگز',
    'LBL_SECURITY_DESC' => 'درج ذیل کچھ جانچ پڑتال کریں ایمل باہر نکالنے کی اجازت نہیں ہونی چاہیے یا دکھانے کی ای میل ماڈل میں.',
    'LBL_SECURITY_APPLET' => 'ایپل ٹیگ',
    'LBL_SECURITY_BASE' => 'بیس ٹیگ',
    'LBL_SECURITY_EMBED' => 'ٹیگ ایمبیڈ کریں',
    'LBL_SECURITY_FORM' => 'فارم ٹیگ',
    'LBL_SECURITY_FRAME' => 'فریم ٹیگ',
    'LBL_SECURITY_FRAMESET' => 'فریمیٹ ٹیگ',
    'LBL_SECURITY_IFRAME' => 'آئی فریم ٹیگ',
    'LBL_SECURITY_IMPORT' => 'ٹیگ درآمد کریں',
    'LBL_SECURITY_LAYER' => 'پرت ٹیگ',
    'LBL_SECURITY_LINK' => 'لنک ٹیگ',
    'LBL_SECURITY_OBJECT' => 'آبجیکٹ ٹیگ',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'اوٹلوک کا انتخاب کریں کم سے کم حفاظت ترتیب دیں (errs on the side of correct display).',
    'LBL_SECURITY_STYLE' => 'انداز ٹیگ',
    'LBL_SECURITY_TOGGLE_ALL' => 'تمام اختیارات ٹول کریں',
    'LBL_SECURITY_XMP' => 'ایکس ایم پی ٹیگ',
    'LBL_YES' => 'Yes',
    'LBL_NO' => 'نہيں',
    'LBL_PREPEND_TEST' => '[ٹیسٹ]: ',
    'LBL_SEND_ATTEMPTS' => 'بھیجنے کی کوشش',
    'LBL_OUTGOING_SECTION_HELP' => 'طے شدہ آوٹ گوئنگ ایمان بھیجے جا رہے ہیں کے ساتھ ساتھ کام کی ہوشیاری بھی.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'جب آپ اس آپشن کا اختیار کریں گے تمام سارے بھیجنے کے قابل ہو جائیں گے ایک جیسی رقص کو استعمال کرکے<br>میل اکاونٹ بھیجنے کے لیے استعمال ہوتا ہے سسٹم نوٹیفیکیشن اور آرام کے لیے اگر آپ نے آپشن کو اختیار نہیں کیا<br> تو سارے استعمال کرتا رہے گا رخصت والا ای میل اپنی معلومات دینے کے بعد سرور کو.',
    'LBL_FROM_ADDRESS_HELP' => 'جب آپ صارف کو ای میل بھیجنے کا اختیار دیتے ہیں صارف کا نام اور اس کا ایمیل ایڈریس کے ساتھ ساتھ شعبے میں محفوظ ہو جاتا ہے یہ فنکشن ایس ایم ٹی پی سرور کے ساتھ کام نہیں کرتا اور یہ مختلف ای میل بھیجنے کی بھی اجازت نہیں دیتا ای میل اکاؤنٹ یا سرور اکاؤنٹ کو.',
    'LBL_HELP' => 'مدد' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'باہر نکالے گئے ای میل اکاؤنٹ کو دیکھنا',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
);
