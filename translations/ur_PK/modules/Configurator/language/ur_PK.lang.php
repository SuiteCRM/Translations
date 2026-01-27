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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'جدید',
    'DEFAULT_CURRENCY_ISO4217' => 'کرنسی کا کوڈ ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'کرنسی کا نام',
    'DEFAULT_CURRENCY_SYMBOL' => 'کرنسی کی نشانی',
    'DEFAULT_DATE_FORMAT' => 'طے شدہ تاریخ کی فارمیٹ',
    'DEFAULT_DECIMAL_SEP' => 'عشاری نظام کا نشان',
    'DEFAULT_LANGUAGE' => 'طے شدہ زبان',
    'DEFAULT_SYSTEM_SETTINGS' => 'صارف انٹرفیس',
    'DEFAULT_THEME' => 'طے شدہ موضوع',
    'DEFAULT_TIME_FORMAT' => 'طے شدہ وقت اور فارمیٹ',

    'DISPLAY_RESPONSE_TIME' => 'سرور کو پیش کاری وقت میں دکھائے',

    'IMAGES' => 'لوگو',
    'LBL_ALLOW_USER_TABS' => 'ٹیپ چھپانے کی اجازت ہے',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'سسٹم کی ترتیبات',
    'LBL_LOGVIEW' => 'لاگ کو دیکھنا',
    'LBL_MAIL_SMTPAUTH_REQ' => 'ایس ایم ٹی پی کی توصیف کو استعمال کریں?',
    'LBL_MAIL_SMTPPASS' => 'ایس ایم ٹی پی پاس ورڈ:',
    'LBL_MAIL_SMTPPORT' => 'ایس ایم ٹی پی پورٹ:',
    'LBL_MAIL_SMTPSERVER' => 'ایس ایم ٹی پی سرور:',
    'LBL_MAIL_SMTPUSER' => 'ایس ایم ٹی پی صارف کا نام:',
    'LBL_MAIL_SMTP_SETTINGS' => 'ایس ایم ٹی پی سرور کی خصوصیت',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'اپنا ای میل فراہم کرنے والا منتخب کریں:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! میل پاس ورڈ:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! میل id:',
    'LBL_GMAIL_SMTPPASS' => 'جی میل کا پاسوڈ:',
    'LBL_GMAIL_SMTPUSER' => 'جی میل کا پتا:',
    'LBL_EXCHANGE_SMTPPASS' => 'ایکسچینج پاس ورڈ:',
    'LBL_EXCHANGE_SMTPUSER' => 'ایکسچینج صارف کا نام:',
    'LBL_EXCHANGE_SMTPPORT' => 'سرور پورٹ کا تبادلہ:',
    'LBL_EXCHANGE_SMTPSERVER' => 'سرور کا تبادلہ:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'صارفین کو اجازت دیں کہ وہ اس اکاؤنٹ کو باہر جانے والے ای میل کیلئے استعمال کریں:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'جب یہ اختیار منتخب کیا جاتا ہے تو، تمام صارفین نظام کی اطلاعات اور انتباہات کو بھیجنے کے لئے اسی اکاؤنٹ کو استعمال کرتے ہوئے ای میلز بھیج سکتے ہیں. اگر اختیار کا انتخاب نہیں کیا جاتا ہے، تو صارفین اپنی اکاؤنٹ کی معلومات فراہم کرنے کے بعد اب بھی آؤٹ گوۂنگ میل سرور استعمال کرسکتے ہیں.',
    'LBL_MAILMERGE' => 'ڈاک ضم',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'کم سے کم ڈیش لیٹ خودبخود تازہ ہوتا ہے کچھ وقفے میں',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'یہ سب سے کم قیمت ہے ایک کا انتخاب کریں آپ کے پاس دشلیٹس خود با خود ہے خودبخود تازہ سیٹنگ کے قابل نہیں ہے خودبخود تازہ سیٹنگ کے قابل نہیں ہے دشلیٹس میں داخل ہونے کے لیے.',
    'LBL_MODULE_FAVICON' => 'ماڈل کا نشان فیکون کے طور پر دکھایا جاتا ہے',
    'LBL_MODULE_FAVICON_HELP' => 'اگر آپ نشان کے طور پر ماڈل میں موجود ہیں تو نشان خیر یکون کے طور پر ہے فواکون بعض مقصد میں براؤزر ٹائپ میں ہے.',
    'LBL_MODULE_NAME' => 'سسٹم کی ترتیبات',
    'LBL_MODULE_ID' => 'ترجیات دینے والا',
    'LBL_MODULE_TITLE' => 'صارف انٹرفیس',
    'LBL_NOTIFY_FROMADDRESS' => 'پتہ سے:',
    'LBL_NOTIFY_SUBJECT' => 'ای میل کے موضوع:',

    'LBL_PROXY_AUTH' => 'تصدیق؟',
    'LBL_PROXY_HOST' => 'پراکسی میزبان',
    'LBL_PROXY_ON_DESC' => 'Configure proxy server address and authentication settings',
    'LBL_PROXY_ON' => 'پروکسی سرور استعمال کریں?',
    'LBL_PROXY_PASSWORD' => 'پاس ورڈ',
    'LBL_PROXY_PORT' => 'پورٹ',
    'LBL_PROXY_TITLE' => 'پراکسی کی ترتیبات',
    'LBL_PROXY_USERNAME' => 'صارف کا نام',
    'LBL_RESTORE_BUTTON_LABEL' => 'دوبارہ بحال کریں',
    'LBL_SYSTEM_SETTINGS' => 'سسٹم کی ترتیبات',
    'LBL_USE_REAL_NAMES' => 'مکمل نام دکھائیں',
    'LBL_USE_REAL_NAMES_DESC' => 'صارف کا مکمل نام دکھائیں اسائمنٹ فیلڈ نام کے لیے.',
    'LBL_DISALBE_CONVERT_LEAD' => 'لیڈ کو ناقابل بنائیں تبدیل لیڈ پر عمل کرنے کے لیے',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'اگر لیڈ پہنے سے تبدیل ہو چکی ہے تو اس کو قابل بنائیں اور چیٹ عمل کو مٹا دیں.',
    'LBL_ENABLE_ACTION_MENU' => 'یہ عمل مینیو میں دکھایا جاتا ہے',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'معلومات دیکھنے کے لئے سب پینل کے عمل کو منتخب کریں ڈراپ ڈاؤن مینیو کے ساتھ اگر آپ اس کو منتخب نہیں کرتے تو یہ ایک الگ بٹن میں نظر آئے گا.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'فہرست کی آن لائن کاری کو اہم بنے',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'آن لائن کو منتخب کریں شعبے کے لیے تبدیل کریں لسٹ فہرست میں سے اگر آپ آن لائن کو منتخب نہیں کرتے تو تبدیلی ناقابل ہوگی فہرست سسٹم میں.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'آن لائن کی تبدیلی فہرست گئی معلومات کو قابل بنایئے',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'آن لائن کو تبدیل کرنے کے لئے منتخب کریں شعبے میں معلومات کو دیکھنے کے لئے اگر آپ آن لائن کو منتخب نہیں کریں گے تو یہ معلومات دیکھنے کے قابل نہیں رہے گی.',
    'LBL_HIDE_SUBPANELS' => 'شکست سب پینل',
    'LIST_ENTRIES_PER_LISTVIEW' => 'فہرست ایٹم کو پیج پر دیکھی',
    'LIST_ENTRIES_PER_SUBPANEL' => 'سب پینل ایٹم پر پیج',
    'LOG_MEMORY_USAGE' => 'لاگو یاداشت کی استعمال',
    'LOG_SLOW_QUERIES' => 'لاگ کی سوست شقو کو شعبہ',
    'CURRENT_LOGO' => 'موجودہ علامت:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'علامت منتخب کریں:',
    'NEW_LOGO_HELP' => 'تصویر فائل کا فارمیٹ یا تو. Png یا .jpg ہونا چاہیے. زیادہ سے زیادہ اونچائی 170px ہو، اور زیادہ سے زیادہ چوڑائی 450px ہو. کوۂی بھی بڑی تصویر اپ لوڈ کی گئی ہو یا کہ کسی بھی سمت میں ہو تو اسکے طول و عرض کو چھوٹا کر دیا جائے گا جو ساۂز بتایا گیا ہے.',
    'NEW_LOGO_HELP_NO_SPACE' => 'تصویر فائل کا فارمیٹ یا تو. Png یا .jpg ہونا چاہیے. زیادہ سے زیادہ اونچائی 170px ہو، اور زیادہ سے زیادہ چوڑائی 450px ہو. کوۂی بھی بڑی تصویر اپ لوڈ کی گئی ہو یا کہ کسی بھی سمت میں ہو تو اسکے طول و عرض کو چھوٹا کر دیا جائے گا جو ساۂز بتایا گیا ہے.',
    'SLOW_QUERY_TIME_MSEC' => 'سنگی آسان سوال کا وقت کم ہے (msec)',
    'STACK_TRACE_ERRORS' => 'دکھانا سٹی کٹریس کی غلطی',
    'UPLOAD_MAX_SIZE' => 'زیادہ سے زیادہ چڑھانے کا جائیں',
    'VERIFY_CLIENT_IP' => 'صارف کا آئی پی ایڈریس ٹھیک ہونا چاہیے',
    'LOCK_HOMEPAGE' => 'صارف کو کسٹمائز ہوم پیج لے آوٹ سے باز رکھتا ہے',
    'LOCK_SUBPANELS' => 'صارف کو کسٹمائز سبپنیل لے آوٹ سے باز رکھتا ہے',
    'MAX_DASHLETS' => 'زیادہ سے زیادہ صور سوتیکرم کے لیے نمبر دشلیٹس ہوم پیج پر ہیں',
    'SYSTEM_NAME' => 'سسٹم کا نام:',
    'SYSTEM_NAME_WIZARD' => 'نام:',
    'SYSTEM_NAME_HELP' => 'یہ وہی نام ہے جو آپ کے براؤزر کے ٹاۂٹل بار میں دکھاتا ہے.',
    'LBL_LDAP_TITLE' => 'LDAP توصیف کی مدد',
    'LBL_LDAP_ENABLE' => 'LDAP کو قبل بناؤ',
    'LBL_LDAP_SERVER_HOSTNAME' => 'سرور:',
    'LBL_LDAP_SERVER_PORT' => 'پورٹ نمبر:',
    'LBL_LDAP_ADMIN_USER' => 'صارف کا نام:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'LDAP صارف کو تلاش کرنے کے لئے استعمال کریں. یہ مکمل طور پر قابل ہونا ضروری ہے.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'پاس ورڈ:',
    'LBL_LDAP_AUTHENTICATION' => 'توثیق:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'مخصوص صارف کے اسناد کا استعمال کرتے ہوۂے LDAP سرور کے ساتھ باندھے. اگر نہیں فراہم کیا گیا تو اسے نامکمل طور پر باندھا جائے گا.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'آٹو بنائیں صارفین:',
    'LBL_LDAP_USER_DN' => 'صارف ڈی این:',
    'LBL_LDAP_GROUP_DN' => 'گروپ ڈی این:',
    'LBL_LDAP_GROUP_DN_DESC' => 'مثال کے طور پر: <ای ایم> او یو = گروپس، ڈی سی = مثال کے طور پر، ڈی سی = کوم </ ای ایم>',
    'LBL_LDAP_USER_FILTER' => 'صارف فلٹر:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'گروپ کی رکنیت:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'صارفین کو مخصوص گروپ کا ایک رکن ہونا لازمی ہے',
    'LBL_LDAP_GROUP_USER_ATTR' => 'صارف کی خصوصیت:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'اس شخص کے منفرد شناخت کنندہ کو چیک کرنے کے لۓ استعمال کیا جائے گا کہ وہ گروپ کا ایک رکن ہیں مثال: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'گروپ کی خصوصیت جو صارف کی خصوصیت کے خلاف فلٹر کرنے کے لئے استعمال کیا جائے گا مثال کے طور پر: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'گروپ کی خصوصیت:',
    'LBL_LDAP_USER_FILTER_DESC' => 'کسی اضافی فلٹر کو درخواست کریں جب صارف کی توصیف ہو <em>is_suitecrm_user=1یا(is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'لاگ ان کی خصوصیت:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'پابندی کی خصوصیت:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'صارف LDAP میں لازم طور پر مسلان:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'یوزر LDAP میں تلاش کرنے کے لئے مسئلہ:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'مثال کے طور پر: ldap.example.com یا ldaps: //ldap.example.com SSL کے لئے',
    'LBL_LDAP_SERVER_PORT_DESC' => 'مسئلہ <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'گروپ کا نام:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'مسئلہ <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'مسئلہ <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'اگر ایک مستند صارف موجود نہیں ہے تو، سویٹ آر آر ایم میں ایک کو پیدا کیا جائے گا.',
    'LBL_LDAP_ENC_KEY' => 'خفیہ کاری کی کلید:',
    'DEVELOPER_MODE' => 'ڈیولپر موڈ',

    'SHOW_DOWNLOADS_TAB' => 'جدوں دکھاں ٹیب کو ڈاؤن لوڈ کرنا',
    'SHOW_DOWNLOADS_TAB_HELP' => 'جب آپ ڈاؤن لوڈ ٹیب کو سلیکٹ کرتے ہیں وہاں پر صرف کی سیٹنگ ظاہر ہوتی ہے صارف اس کے ساتھ رسائی حاصل کرتا ہےSuiteCRM plug اور دستیاب دستاویز ک ذریے',
    'LBL_LDAP_ENC_KEY_DESC' => 'SOAP کی وسعت کے لئے جبLDAP. کو استعمال کیے جاتے ہیں.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Php_mcrypt توصیف کابل ہونی چاہئے آپ کے پی ایچ پی دستاویز کے لیے.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'سب',
    'LBL_MARK_POINT' => 'مارک پوائنٹ',
    'LBL_NEXT_' => 'آگے',
    'LBL_REFRESH_FROM_MARK' => 'نشان سے تازہ دم کرنا',
    'LBL_SEARCH' => 'تلاش:',
    'LBL_REG_EXP' => 'ریگ شپ:',
    'LBL_IGNORE_SELF' => 'خود کو نظر انداز کرنا:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'جہاں پر لوگ نگھے چل رہا ہے وہاں پر نشان لگا',
    'LBL_DISPLAYING_LOG' => 'لوگ دکھایا جا رہا ہے',
    'LBL_YOUR_PROCESS_ID' => 'آپکی عمل کرد معلومات',
    'LBL_YOUR_IP_ADDRESS' => 'آپ کی معلومات کا پتہ ہے',
    'LBL_IT_WILL_BE_IGNORED' => ' میں اس کو نظر انداز کروں گا ',
    'LBL_LOG_NOT_CHANGED' => 'لوگ بھی تک کہیں نہیں ہوا',
    'LBL_ALERT_JPG_IMAGE' => 'دستاویز کی تصویر کا فارمیٹ جی پی ای جی میں ہونا چاہیے نئے دستاویز کو چھڑوانے کے ساتھ دستاویز کی ووسٹ jpg میں ہیں.',
    'LBL_ALERT_TYPE_IMAGE' => 'تصویر کی دستاویز کا فارمیٹJPEG یا PNG میں ہونا چاہیے نئے دستاویز کو چھڑوانے کے ساتھ دستاویز کی ووسٹ jpg میں ہیں.',
    'LBL_ALERT_SIZE_RATIO' => 'تصویر کے درمیان نسبت١:11:10 1:1ہونی چاہیے تصویر کا سائز تبدیل ہو جائے گا.',
    'ERR_ALERT_FILE_UPLOAD' => 'تصویر کو چڑھاتے وقت کوئی غلطی ہے.',
    'LBL_LOGGER' => 'لوگر کی ترتیب',
    'LBL_LOGGER_FILENAME' => 'لوگ دستاویز کا نام',
    'LBL_LOGGER_FILE_EXTENSION' => 'وسعت',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'زیادہ سے زیادہ لوگ سائز',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'طے شدہ تاریخ کی فارمیٹ',
    'LBL_LOGGER_LOG_LEVEL' => 'لوگ کی سطح',
    'LBL_LEAD_CONV_OPTION' => 'تبدیلیاں پشین میں لے جانا',
    'LEAD_CONV_OPT_HELP' => "<b>نقل</b>بنائیں اور نقل سے رابطہ قائم کریں جو لے جاتی ہے نئی سرگرمیوں کے ریکارڈ کی طرف کے جو منتخب ہیں صارف کی تبدیلیوں کے دوران تمام منتخب کرنے والوں کےلئے دستاویز کی نقل بنائی جاتی ہے <br><br><b>یہ حرکت</b>تمام سرگرمیوں کو لے جانے کی حرکت منتخب کردہ نئے ریکارڈ کی طرف جو صارف نے تبدیل کیے ہیں <br><br><b>کچھ نہ کریں</b> لے جانے والی سرگرمی کے ساتھ کچھ نہ کریں جو تبدیل تبدیل ہو رہی ہے جیو سرگرمی باقی رہتی ہے تعلق لے جانے کے لیے صرف.",
    'LBL_CONFIG_AJAX' => 'AJAX صارف انٹرفیس کو ترتیب دیں',
    'LBL_CONFIG_AJAX_DESC' => 'کابل بنے یا ناقابل بنے AJAX U کے استعمال کو مخصوص ماڈل کے لیے.',
    'LBL_LOGGER_MAX_LOGS' => 'زیادہ سے زیادہ لوگ کے نمبر رولنگ سے پہلے',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'دستاویز کے نام سے پہلے وصول کرنا',
    'LBL_VCAL_PERIOD' => 'وکل اپداٹس وقت ارسا:',
    'LBL_IMPORT_MAX_RECORDS' => 'درآمد کریں زیادہ سے زیادہ نمبروں کی روو:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'کتنی مخصوص رو کی اجازت ہے درامد دستاویز میں <br> اگر نمبر کی رو دستاویز سے درآمد ہوئی ہے تو یہ نمبر تجویز کر جاتا ہے صارف چوسٹ ہو جاتا ہے <br> اگر نمبر درج کردیے جائیں بے حد نمبر اوروں کی اجازت ہو تو.',
    'vCAL_HELP' => 'اس ترتیب کو استعمال کریں نمبر کو تقسیم کرنے کے لئے مہینے اور جدید موجودہ تاریخ میں مفت مصروف معلومات کال کے لیے اور ملاقات نشر ہو جائیں گے <BR>میں مفت مصروف تنظیمیں نشر ہو جائیں گے اور اندراج "0". کم از کم ایک مہینہ میں بارہ مہینے ھیں.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'آپکا منظور نامہ',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'کنفیگر کے مطابق آپ کے پاس کوئی منظور نام نہیں ہے',
    'LBL_WIZARD_SCENARIOS_DESC' => 'اس منظور نام کا انتخاب کریں جو انسٹالیشن پر قابض ہے یہ پوسٹ نصب کرنے کے اوشن تبدیل ہو چکے ہیں.',

    'LBL_WIZARD_TITLE' => 'مالک کا ساحر',
    'LBL_WIZARD_WELCOME_TAB' => 'خوش آمدید کرنا',
    'LBL_WIZARD_WELCOME_TITLE' => 'SuiteCRM! میں آپ کو خوش آمدید کہتے ہیں!',
    'LBL_WIZARD_WELCOME' => 'کلک <b>آگے</b>کسی چیز کو مقامی طور پر چھاپنا اورSuiteCRM میں کنفیگر کرنا اگر آپ کونفیگ کرنا چاہتے ہیں اس SuiteCRM میں کلک کریں کریں<b>چھوڑیں</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'اگے',
    'LBL_WIZARD_BACK_BUTTON' => 'پیچھے جانا',
    'LBL_WIZARD_SKIP_BUTTON' => 'چھوڑ دینا',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'جاری ہے',
    'LBL_WIZARD_FINISH_TITLE' => 'سسٹم کی اہم کانفر میشن مکمل ہو گیا',
    'LBL_WIZARD_SYSTEM_TITLE' => 'کمپنی کی چیز',
    'LBL_WIZARD_SYSTEM_DESC' => 'اپنے سویٹ سی آر ایم کو برانڈ کرنے کے لۓ اپنی تنظیم کا نام اور علامت لوگو فراہم کریں.',
    'LBL_WIZARD_LOCALE_DESC' => 'وضاحت کریں کہ سویٹ سی آر ایم میں اعداد و شمار کیسے دکھائے جائیں گے، اپنی جغرافیایی مقام کی بنیاد پر. آپ کی یہاں فراہم کردہ ترتیبات ڈیفالٹ ترتیبات ہوں گی. صارفین کو اپنی اپنی ترجیحات کو خود سیٹ کیا جائے گا.',
    'LBL_WIZARD_SMTP_DESC' => 'ای میل اکاؤنٹ فراہم کریں جو ای میلز بھیجنے کے لئے استعمال کیا جائے گا، جیسے تفویض اطلاعات اور نئے صارف پاس ورڈ. مخصوص ای میل اکاؤنٹ بھیجنے والے صارفین کو سویٹ سی آر ایم سے ای میلز ملیں گے.',
    'LBL_LOADING' => 'لوڈ کر رہا ہے...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'ختم کریں' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'خوش آمدید کرنا' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'لوگو' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'رابطہ کے مطابق دکھائی ایمل تاریخ میں سب پینل مڈل کے لیے',
);
