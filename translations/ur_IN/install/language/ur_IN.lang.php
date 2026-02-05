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
    'LBL_BASIC_SEARCH' => 'فوری فلٹر',
    'LBL_ADVANCED_SEARCH' => 'اعلی درجے کی فلٹر',
    'LBL_BASIC_TYPE' => 'بنیادی قسم',
    'LBL_ADVANCED_TYPE' => 'اعلی درجے کی قسم',
    'LBL_SYSOPTS_2' => 'کس قسم کا ڈیٹا بیس استعمال کیا جائے گا سویٹ سی آر ایم مثال کے انسٹال کرنے کے بارے میں؟',
    'LBL_SYSOPTS_DB' => 'ڈیٹا بیس قسم کی وضاحت کیجیے',
    'LBL_SYSOPTS_DB_TITLE' => 'ڈیٹا بیس کی قسم',
    'LBL_SYSOPTS_ERRS_TITLE' => 'مہربانی کر کےآگے بڑھنے سے پہلے مندرجہ ذیل غلطیوں کو حل کیجیے:',
    'ERR_DB_VERSION_FAILURE' => 'ڈیٹا بیس ورژن چیک کرنے میں ناکامی کا سامنا ہے.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'صارف کا نام فراہم کریں سویٹ سی آرایم ایڈمن صارف کے لئے. ',
    'ERR_ADMIN_PASS_BLANK' => 'پاس ورڈ فراہم کریں سویٹ سی آرایم ایڈمن صارف کے لئے. ',

    'ERR_CHECKSYS' => 'مطابقت کی جانچ کے دوران غلطیاں درپیش ہوۂی ہیں. مناسب طریقے سے کام کرنے کے لۓ آپ سویٹ سی آر ایم کی تنصیب کے لئے, براہ کرم مناسب اقدامات کریں اور درج ذیل مسائل کو حل کرنے کے لئے دوبارہ پڑتال کے بٹن کو دبائیں یا پھر انسٹال کرنے کی کوشش کیجیے.',
    'ERR_CHECKSYS_CALL_TIME' => 'اجازت دیں کہ کال ٹائم پاس ریفرنس چالو ہے(اس کو php.ini کی مدد کے لئے مقرر کیا جانا چاہئے)',
    'ERR_CHECKSYS_CURL' => 'نہیں مل سکا: سویٹ سی آر ایم شیڈولر محدود فعالیت کے ساتھ چل جائے گا.',
    'ERR_CHECKSYS_IMAP' => 'نہیں ملا: اندرونی ای میل اور مہم (ای میل) IMAPلائبریریوں کی ضرورت ہے. نہ ہی فعال ہو گا.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (اس کوسیٹ کیجیے ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M یا آپ کے php.ini فایل میں بڑا)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'انتباہ: لکھنا قابل نہیں',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'سویٹ سی آرایم کے ذریعے آپکے پی ایچ پی کا ورژن سپورٹڈ نہیں ہے. آپ کو اس ورژن کو انسٹال کرنے کی ضرورت ہوگی جو سویٹ سی آرایم کی درخواست کے ساتھ مطابقت رکھتا ہو. مہربانی کر کے سپورٹ پی ایچ پی ورژن کے لئے ریلیز نوٹس میں مطابقت میٹرکس سے مشورہ کیجیے. آپ کا ترجمہ ہے ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'سویٹ سی آرایم کے ذریعے آپکے IIS ایس کا ورژن سپورٹڈ نہیں ہے. آپ کو اس ورژن کو انسٹال کرنے کی ضرورت ہوگی جو سویٹ سی آرایم کی درخواست کے ساتھ مطابقت رکھتا ہو. براہ کرم سپورٹ IIS ورژن کے لئے ریلیز نوٹس میں مطابقت میٹرکس سے مشورہ کریں. آپ کا ترجمہ ہے ',
    'ERR_CHECKSYS_FASTCGI' => 'ہم جانتے ہیں کہ آپ پی ایچ پی کے لئے فاسٹ سی جی آئی ہینڈلر میپنگ استعمال نہیں کر رہے ہیں. آپ کو ایک ایسا ورژن انسٹال / ترتیب دینے کی ضرورت ہوگی جو سویٹ سی آر ایم کی درخواست کے ساتھ ملتا جلتا ہو. براہ کرم سپورٹ ورژن کے لئے ریلیز نوٹس میں مطابقت میٹرکس سے مشورہ کریں. براہ مہربانی ملاحظہ کیجیے <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a>تفصیلات کے لئے ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'IIS / FastCGI SAPI کا استعمال کرتے ہوئے زیادہ سے زیادہ تجربے کے لئے، اپنے php.ini فائل میں fastcgi.logging کو 0 پر مقرر کیجیے.',
    'LBL_DB_UNAVAILABLE' => 'ڈیٹا بیس دستیاب نہیں',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'ڈیٹا بیس سپورٹ نہیں مل سکا. مہربانی کر کے یقینی بنائیں کہ آپ کو مندرجہ ذیل معاون ڈیٹا بیس کی اقسام میں سے ایک ڈرائیور ضروری ہیں: MySQL MS یا SQLServer. آپ کے پی ایچ پی کی فائل کے مطابق، php.ini فائل میں توسیع کو غیرمعمولی کرنے کی ضرورت ہوسکتی ہے، یا صحیح بائنری فائل کے ساتھ دوبارہ نمٹنے کی ضرورت ہے. مزید معلومات کیلئے براہ کرم اپنے پی ایچ پی کے دستی کا حوالہ دیں کہ ڈیٹا بیس سپورٹ کو کس طرح فعال کریں.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'XML پارسل لائبریریز کا کام مل جاتا ہےجس کو سویٹ سی آر ایم کی درخواست کی ضرورت نہیں ہوتی. ممکن ہے کہ php.ini کے پھیلانے میں ناکام ہو جاؤ یا دوبارہ سی جوڑیدار فائل php کے انداز پرمنحصر ہوتی ہے.برائےکرم مزید معلومات کی صلاح لینے کے لیے php مینول دیکھیں.',
    'ERR_CHECKSYS_MBSTRING' => 'Functions associated with the Multibyte Strings PHP extension (mbstring) that are needed by the SuiteCRM application were not found. <br/><br/>Generally, the mbstring module is not enabled by default in PHP and must be activated with --enable-mbstring when the PHP binary is built. Please refer to your PHP Manual for more information on how to enable mbstring support.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'ترتیب فائل موجود ہے لیکن لکھنے کے قابل نہیں ہے. مہربانی کرکے فایل لکھنے کے قابل کرنے کےلیے ضروری اقدامات کریں. یہ آپ کے آپریٹنگ سسٹم پر منحصر ہے، کہ آپ کو چیمڈ 766 چلانے کے لیے اجازتوں کو تبدیل کرنے کی ضرورت ہوسکتی ہے، یا خصوصیات تک رسائی حاصل کرنے کے لئے فاۂل نام پر دائیں کلک کرے اور صرف پڑھنے کے اختیار کو چالو کیجیے.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'ترتیب فائل موجود ہے لیکن لکھنے کے قابل نہیں ہے. مہربانی کرکے فایل لکھنے کے قابل کرنے کےلیے ضروری اقدامات کریں. یہ آپ کے آپریٹنگ سسٹم پر منحصر ہے، کہ آپ کو چیمڈ 766 چلانے کے لیے اجازتوں کو تبدیل کرنے کی ضرورت ہوسکتی ہے، یا خصوصیات تک رسائی حاصل کرنے کے لئے فاۂل نام پر دائیں کلک کرے اور صرف پڑھنے کے اختیار کو چالو کیجیے.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'خاص قسم کی ڈائرکٹری موجود ہے لیکن لکھنےکے قابل نہیں ہے. آپکےآپریٹنگ سسٹم پر منحصر ہے کہ آپ کو اس پر اجازت بدلنا ہو گا (chmod 766) یا اس پر راۂٹ کلک کرنا پڑے گا اورصرف پڑھنے کے اختیار کو چالو کرنا پڑے گا. براہ کرم فائل کو لکھنے کے قابل بنانے کے لیے ضروری اقدامات کیجیے.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "نیچے دیے گۂے فایلز یا ڈائریکٹریز لکھنےکے قابل نہیں ہیں یا لاپتہ ہیں اور نہیں بنسکتی ہیں. یہ آپکےآپریٹنگ سسٹم پر منحصر ہے، اس کو درست کرنے کے لئےآپکو فاۂلز یا پیرنٹ ڈاۂریکٹری کی اجازت کو تبدیل کرنا ہو گی(chmod 755), یا پیرنٹ ڈائرکٹری پر دائیں کلک کریں اور صرف پڑھنے 
کے اختیارات کو نشان زد کریں اور اس کے تمام ذیلی فولڈرز پر لاگو کیجیے.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'اوورائڈ کو ترتیب دیجیے',
    'ERR_CHECKSYS_SAFE_MODE' => 'محفوظ موڈ آن ہے (اگرآپ php.ini میں غیر فعال کرنا چاہتے ہیں تو کرسکتے ہیں)',
    'ERR_CHECKSYS_ZLIB' => 'ZLib support not found: SuiteCRM reaps enormous performance benefits with zlib compression.',
    'ERR_CHECKSYS_ZIP' => 'ZIP support not found: SuiteCRM needs ZIP support in order to process compressed files.',
    'ERR_CHECKSYS_PCRE' => 'PCRE لائبریری نہیں مل سکی: سیوٹ سی آر ایم میں PCRE لائبریری کی ضرورت ہوتی ہے تاکہ باقاعدگی سے اظہار پیٹرن کے ملاپ کے پرل انداز پر عملدرآمد کیا جائے.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE لائبریری ورژن: سویٹ سی آر ایم کے مطابق PCRE لائبریری 7.0 یا اس سے اوپر کی ضرورت ہوتی ہے کہ وہ باقاعدگی سے اظہار پیٹرن ملاپ کے پرل اسٹاۂل پر عمل کیجیے.',
    'ERR_DB_ADMIN' => 'فراہم کردہ ڈیٹا بیس کے منتظم کے صارف کا نام اور / یا پاس ورڈ غلط ہے، اور ڈیٹا بیس سے تعلق قائم نہیں کیا جاسکتا. ایک صحیح صارف کا نام اور پاس ورڈ درج کیجیے. (خرابی: ',
    'ERR_DB_ADMIN_MSSQL' => 'فراہم کردہ ڈیٹا بیس کے منتظم کے صارف کا نام اور / یا پاس ورڈ غلط ہے، اور ڈیٹا بیس سے تعلق قائم نہیں کیا جاسکتا. ایک صحیح صارف کا نام اور پاس ورڈ درج کیجیے.',
    'ERR_DB_EXISTS_NOT' => 'مخصوص ڈیٹا بیس موجود نہیں ہے.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'ڈیٹا بیس پہلے سے موجود ہے تشکیل ڈیٹا کے ساتھ. منتخب کردہ ڈیٹا بیس کے ساتھ انسٹال چلانے کے لئے، براہ مہربانی دوبارہ انسٹال شروع کیجئے اور منتخب کیجئیے. "ڈراپ کریں اور دوبارہ بنائیں موجودہ سویٹ سی آر ایم ٹیبل؟". اپ گریڈ کرنے کے لئے، ایڈمن کنسول میں سے اپ گریڈ مددگار استعمال کریں. براہ مہربانی وجودہ اپ گریڈ دستاویزات پڑھیں <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new"> یہاں</a>.',
    'ERR_DB_EXISTS' => 'فراہم کردہ ڈیٹا بیس کا نام پہلے سے ہی موجود ہے - اسی نام کے ساتھ کسی دوسرے کو نہیں بنا سکتے.',
    'ERR_DB_EXISTS_PROCEED' => 'فراہم کردہ ڈیٹا بیس کا نام پہلے سے ہی موجود ہے۔ آپ<br>1. بیک بٹن کو ہٹ کر کے نیا ڈیٹا بیس کا نام منتخب کر سکتے ہیں<br>2. نیکسٹ پر کلک کریں اور جاری رکھیں لیکن اس ڈیٹا بیس پر موجود تمام ٹیبلز گر جائیں گی. <strong> اس کا مطلب یہ ہے کہ آپ کی ٹیبلز اور ڈیٹا پھینک دیا جاۂے گا.</strong>',
    'ERR_DB_HOSTNAME' => 'میزبان کا نام خالی نہیں ہوسکتا ہے.',
    'ERR_DB_INVALID' => 'غلط ڈیٹا بیس کی قسم منتخب کی گۂی ہے.',
    'ERR_DB_LOGIN_FAILURE' => 'فراہم کردہ ڈیٹا بیس کے میزبان، صارف نام، اور / یا پاس ورڈ غلط ہے، اور ڈیٹا بیس سے تعلق قائم نہیں کیا جاسکتا ہے. براہ کرم ایک درست میزبان، صارف کا نام اور پاسورڈ درج کیجیے',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'فراہم کردہ ڈیٹا بیس کے میزبان، صارف نام، اور / یا پاس ورڈ غلط ہے، اور ڈیٹا بیس سے تعلق قائم نہیں کیا جاسکتا ہے. براہ کرم ایک درست میزبان، صارف کا نام اور پاسورڈ درج کیجیے',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'فراہم کردہ ڈیٹا بیس کے میزبان، صارف نام، اور / یا پاس ورڈ غلط ہے، اور ڈیٹا بیس سے تعلق قائم نہیں کیا جاسکتا ہے. براہ کرم ایک درست میزبان، صارف کا نام اور پاسورڈ درج کیجیے',
    'ERR_DB_MYSQL_VERSION' => 'Your MySQL version (%s) is not supported by SuiteCRM. You will need to install a version that is compatible with the SuiteCRM application. Please consult the Compatibility Matrix in the Release Notes for supported MySQL versions.',
    'ERR_DB_NAME' => 'میزبان کا نام خالی نہیں ہوسکتا ہے.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Database name cannot contain a '\\', '/', or '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Database name cannot begin with a number, '#', or '@' and cannot contain a space, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', or '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "ڈیٹا بیس کا نام صرف حروف تہجی اور علامات پر مشتمل ہوسکتا ہے '#', '_' or '$'",
    'ERR_DB_PASSWORD' => 'سیوٹ سی آر ایم ڈیٹا بیس کے منتظم کے لئے فراہم کی جانے والا پاس ورڈز میچ نہیں ہو رہا ہے. پاس ورڈ فیلڈز میں اسی پاس ورڈ کو دوبارہ درج کیجیے.',
    'ERR_DB_PRIV_USER' => 'ڈیٹا بیس کے منتظم صارف کا نام فراہم کریں. صارف کو ڈیٹا بیس سے ابتدائی کنکشن کے لئے ضروری ہے.',
    'ERR_DB_USER_EXISTS' => 'صارف کا نام سیوٹ سی آر ایم ڈیٹا بیس کے صارف کے لئے پہلے ہی موجود ہے -- اسی نام کے ساتھ کسی دوسرے کو نہیں بنا سکتے. براہ کرم نیا صارف نام درج کیجیے.',
    'ERR_DB_USER' => 'سیوٹ سی آر ایم ڈیٹا بیس کے منتظم کے لئے صارف کا نام درج کیجیے.',
    'ERR_DBCONF_VALIDATION' => 'مہربانی کر کےآگے بڑھنے سے پہلے مندرجہ ذیل غلطیوں کو حل کیجیے:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'سویٹ سی آر ایم کے ڈیٹا بیس کے صارف کے لئے فراہم کیا جانے والا پاسورڈ میچ نہیں ہو رہا. براہ کرم پاس ورڈ فیلڈز میں اسی پاس ورڈ کو دوبارہ درج کیجیے.',
    'ERR_ERROR_GENERAL' => 'مندرجہ ذیل غلطیوں کا سامنا کرنا پڑا:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'فایل کو ختم نہیں کر سکتا: ',
    'ERR_LANG_MISSING_FILE' => 'فایل کو ڈھونڈا نہی جاسکتا: ',
    'ERR_LANG_NO_LANG_FILE' => 'No language pack file found at include/language inside: ',
    'ERR_LANG_UPLOAD_1' => 'آپ کی اپ لوڈ کے ساتھ ایک مسئلہ تھا. مہربانی کر کے دوبارہ کوشش کیجیے.',
    'ERR_LANG_UPLOAD_2' => 'زبان پیکس زپ آرکائیوز ہونا لازمی ہے.',
    'ERR_LANG_UPLOAD_3' => 'پی ایچ پی temp فائل کو منتقل نہیں کر سکا اپ ڈیٹ ڈائرکٹری میں.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'فراہم شدہ لاگ ڈائریکٹری ایک درست ڈائریکٹری نہیں ہے.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'فراہم شدہ لاگ ڈائریکٹری ایک قابل تحریر ڈائرکٹری نہیں ہے.',
    'ERR_NO_DIRECT_SCRIPT' => 'سکرپٹ براہ راست عمل کرنے میں ناکام ہے.',
    'ERR_NO_SINGLE_QUOTE' => 'واحد واوین کے نشان کو استعمال نہیں کر سکتے کہ ',
    'ERR_PASSWORD_MISMATCH' => 'The passwords provided for the SuiteCRM admin user do not match. Please re-enter the same passwords in the password fields.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Cannot write to the <span class=stop>config.php</span> file.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'آپ دستی طور پر config.php فائل بنانے اور نیچے config.php فائل میں ترتیب کی معلومات چسپاں کرکے اس تنصیب کو جاری رکھ سکتے ہیں. تاہم، آپ ل<strong>ازمی طور پر</strong>گلے مرحلے تک جاری رکھنے سے پہلے config.php فایل بنانا ہوگی.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Did you remember to create the config.php file?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Warning: Could not write to config.php file. Please ensure it exists.',
    'ERR_PERFORM_HTACCESS_1' => 'کو نہیں لکھ سکتا ',
    'ERR_PERFORM_HTACCESS_2' => ' فایل.',
    'ERR_PERFORM_HTACCESS_3' => 'اگر آپ براؤزر کے ذریعہ قابل رسائی ہونے سے اپنی لاگ فائل کو محفوظ کرنا چاہتے ہیں تو، لائن کے ساتھ اپنی لاگ ڈائریکٹری میں ایک htaccess۔ فایل بنائیں:',
    'ERR_PERFORM_NO_TCPIP' => '<b>We could not detect an Internet connection.</b> When you do have a connection, please visit <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> to register with SuiteCRM. By letting us know a little bit about how your company plans to use SuiteCRM, we can ensure we are always delivering the right application for your business needs.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Session directory provided is not a valid directory.',
    'ERR_SESSION_DIRECTORY' => 'Session directory provided is not a writable directory.',
    'ERR_SESSION_PATH' => 'اگر آپ اپنے آپ کی وضاحت کرنا چاہتے ہیں تو سیشن کا راستہ لازمی ہے.',
    'ERR_SI_NO_CONFIG' => 'You did not include config_si.php in the document root, or you did not define $sugar_config_si in config.php',
    'ERR_SITE_GUID' => 'Application ID is required if you wish to specify your own.',
    'ERROR_SPRITE_SUPPORT' => "فی الحال ہم جی ڈی لائبریری کا پتہ لگانے کے قابل نہیں ہیں، جسکے نتیجے میں آپ سی ایس ایس سپرائٹ کی فعالیت کا استعمال نہیں کرسکیں گے.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'انتباہ: آپ کے پی ایچ پی کی ترتیب کو کم از کم 6MB فایلوں کی اپ لوڈ کی اجازت دینے کے لئے تبدیل کیا جانا چاہئے.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'فایل کا سائز اپ لوڈ کیجیے',
    'ERR_URL_BLANK' => 'بیس یو آر ایل فراہم کیجئے سیوٹ سی آر ایم مثال کےلیے.',
    'ERR_UW_NO_UPDATE_RECORD' => 'تنصیب کے ریکارڈ کو تلاش نہیں کر سکا',
    'ERROR_MANIFEST_TYPE' => 'منفی فایل کو پیکیج کی قسم کی وضاحت کرنا ضروری ہے.',
    'ERROR_PACKAGE_TYPE' => 'منفی فایل ایک غیر معروف پیکج کی قسم کی وضاحت کرتا ہے',
    'ERROR_VERSION_INCOMPATIBLE' => 'اپ لوڈ شدہ فایل سویٹ سی آر ایم کے اس ورژن کے ساتھ مطابقت نہیں رکھتا ہے: ',

    'LBL_BACK' => 'پیچھے',
    'LBL_CANCEL' => 'منسوخ کیجئے',
    'LBL_ACCEPT' => 'I Accept',
    'LBL_CHECKSYS_CACHE' => 'لکھنے کے قابل کیشے ذیلی ڈائریکٹریز',
    'LBL_DROP_DB_CONFIRM' => 'The provided Database Name already exists.<br>You can either:<br>1. Click on the Cancel button and choose a new database name, or <br>2. Click the Accept button and continue. All existing tables in the database will be dropped. <strong>This means that all of the tables and pre-existing data will be blown away.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Component',
    'LBL_CHECKSYS_CONFIG' => 'لکھنے کے قایل سیوٹ سی آر ایم ترتیب فایل (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL Module',
    'LBL_CHECKSYS_CUSTOM' => 'Writeable Custom Directory',
    'LBL_CHECKSYS_DATA' => 'Writable Data Sub-Directories',
    'LBL_CHECKSYS_IMAP' => 'IMAP Module',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings Module',
    'LBL_CHECKSYS_MEM_OK' => 'OK (No Limit)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Unlimited)',
    'LBL_CHECKSYS_MEM' => 'PHP Memory Limit',
    'LBL_CHECKSYS_MODULE' => 'Writable Modules Sub-Directories and Files',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Not Available',
    'LBL_CHECKSYS_OK' => 'ٹھیک ہے',
    'LBL_CHECKSYS_PHP_INI' => 'آپ کے پی ایچ پی کی ترتیب فایل کی جگہ (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'PHP Version',
    'LBL_CHECKSYS_IISVER' => 'IIS Version',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'پھر سے چیک کیجئے',
    'LBL_CHECKSYS_STATUS' => 'حیثیت',
    'LBL_CHECKSYS_TITLE' => 'System Check Acceptance',
    'LBL_CHECKSYS_XML' => 'XML Parsing',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB Compression Module',
    'LBL_CHECKSYS_ZIP' => 'ZIP Handling Module',
    'LBL_CHECKSYS_PCRE' => 'PCRE Library',
    'LBL_CHECKSYS_FIX_FILES' => 'Please fix the following files or directories before proceeding:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Please fix the following module directories and the files under them before proceeding:',
    'LBL_CHECKSYS_UPLOAD' => 'Writable Upload Directory',
    'LBL_CLOSE' => 'بند کیجیے',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'be created',
    'LBL_CONFIRM_DB_TYPE' => 'ڈیٹا بیس کی قسم',
    'LBL_CONFIRM_NOT' => 'not',
    'LBL_CONFIRM_TITLE' => 'ترتیبات کی توثیق کیجئے',
    'LBL_CONFIRM_WILL' => 'will',
    'LBL_DBCONF_DB_DROP' => 'Drop Tables',
    'LBL_DBCONF_DB_NAME' => 'ڈیٹابیس کا نام',
    'LBL_DBCONF_DB_PASSWORD' => 'ویٹ سی آر ایم ڈیٹا بیس کے صارف کا پاس ورڈ',
    'LBL_DBCONF_DB_PASSWORD2' => 'سیوٹ سی آر ایم ڈیٹا بیس کے صارف کا پاس ورڈ دوبارہ درج کیجئے',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM Database User',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM Database User',
    'LBL_DBCONF_DB_ADMIN_USER' => 'ڈیٹا بیس ایڈمنسٹریٹر صارف کا نام',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'ڈیٹا بیس کے ایڈمن کا پاس ورڈ',
    'LBL_DBCONF_COLLATION' => 'میلان',
    'LBL_DBCONF_CHARSET' => 'الفاظ کا چناو',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Advanced Database Configuration',
    'LBL_DBCONF_DEMO_DATA' => 'پاپولیٹ ڈیٹابیس ڈیمو ڈیٹا کے ساتھ؟',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Choose Demo Data',
    'LBL_DBCONF_HOST_NAME' => 'Host Name',
    'LBL_DBCONF_HOST_INSTANCE' => 'Host Instance',
    'LBL_DBCONFIG_SECURITY' => 'سیکورٹی کے مقاصد کے لئے، آپ کو ایک مخصوص ڈیٹا بیس کے صارف کو سیوٹ سی آر ایم کے ڈیٹا بیس سے منسلک کرنے کی وضاحت کرسکتے ہیں. اس صارف کو سیوٹ سی آر ایم ڈیٹا بیس پر لکھنے، اپ ڈیٹ اور دوبارہ حاصل کرنے کے قابل ہونا چاہیے جو اس مثال کے لئے تیار کیا جائے گا. یہ صارف اوپر کئے گئے ڈیٹا بیس کے منتظم ہوسکتا ہے، یا آپ نیا یا موجودہ ڈیٹا بیس صارف کی معلومات فراہم کرسکتے ہیں.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'موجودہ صارف فراہم کیجئے',
    'LBL_DBCONFIG_CREATE_DD' => 'Define user to create',
    'LBL_DBCONFIG_SAME_DD' => 'Same as Admin User',
    'LBL_DBCONF_TITLE' => 'Database Configuration',
    'LBL_DBCONF_TITLE_NAME' => 'Provide Database Name',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Provide Database User Information',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'پاس ورڈ',
    'LBL_DISABLED_DESCRIPTION_2' => 'اس تبدیلی کے بعد، آپ کو انسٹالیشن شروع کرنے کے لئے ذیل میں "شروع"بٹن پر کلک کر سکتے ہیں. انسٹالیشن مکمل ہونے کے بعد آپ<i>کے لیے قدر تبدیل کرنا چاہنگے.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'The installer has already been run once. As a safety measure, it has been disabled from running a second time. If you are absolutely sure you want to run it again, please go to your config.php file and locate (or add) a variable called \'installer_locked\' and set it to \'false\'. The line should look like this:',
    'LBL_DISABLED_HELP_1' => 'تنصیب کی مدد کے لئے، براہ مہربانی سیوٹ سی آر ایم پر جائیں',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'سیوٹ سی آر ایم تنصیب کو غیر فعال کردیا گیا ہے',
    'LBL_HELP' => 'مدد',
    'LBL_INSTALL' => 'انسٹال کیجئے',
    'LBL_INSTALL_TYPE_TITLE' => 'Installation Options',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Choose Install Type',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Typical Install</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Custom Install</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'تنصیب کے لئے کم سے کم معلومات کی ضرورت ہوتی ہے. نئے صارفین کے لئے مشورہ ہے.',
    'LBL_INSTALL_TYPE_MSG3' => 'تنصیب کے دوران سیٹ کرنے کے لئے اضافی اختیارات فراہم کرتا ہے. ایڈمن اسکرینز میں تنصیب کے بعد ان میں سے زیادہ تر اختیارات بھی دستیاب ہیں. جدید ترین صارفین کے لئے سفارش کی گئی ہے.',
    'LBL_LANG_1' => 'To use a language in SuiteCRM other than the default language (US-English), you can upload and install the language pack at this time. You will be able to upload and install language packs from within the SuiteCRM application as well. If you would like to skip this step, click Next.',
    'LBL_LANG_BUTTON_COMMIT' => 'انسٹال کیجئے',
    'LBL_LANG_BUTTON_REMOVE' => 'نکال دیں',
    'LBL_LANG_BUTTON_UNINSTALL' => 'ان انسٹال کیجیے',
    'LBL_LANG_BUTTON_UPLOAD' => 'اپ لوڈ',
    'LBL_LANG_NO_PACKS' => 'کوئی نہیں',
    'LBL_LANG_PACK_INSTALLED' => 'مندرجہ ذیل زبانوں کے پیک انسٹال کر لیے گئے ہیں: ',
    'LBL_LANG_PACK_READY' => 'مندرجہ ذیل زبانوں کے پیک انسٹال کر لیے گئے ہیں: ',
    'LBL_LANG_SUCCESS' => 'The language pack was successfully uploaded.',
    'LBL_LANG_TITLE' => 'Language Pack',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Installing SuiteCRM now. This may take up to a few minutes.',
    'LBL_LANG_UPLOAD' => 'Upload a Language Pack',
    'LBL_LICENSE_ACCEPTANCE' => 'License Acceptance',
    'LBL_LICENSE_CHECKING' => 'Checking system for compatibility.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Checking Environment',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verifying DB Credentials.',
    'LBL_LICENSE_CHECK_PASSED' => 'System passed check for compatibility.',
    'LBL_CREATE_CACHE' => 'Preparing to Install...',
    'LBL_LICENSE_REDIRECT' => 'Redirecting in ',
    'LBL_LICENSE_I_ACCEPT' => 'I Accept',
    'LBL_LICENSE_PRINTABLE' => ' Printable View ',
    'LBL_PRINT_SUMM' => 'Print Summary',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM License',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'عمل',
    'LBL_ML_DESCRIPTION' => 'تفصیل',
    'LBL_ML_INSTALLED' => 'تاریخ نصب ہے',
    'LBL_ML_NAME' => 'نام',
    'LBL_ML_PUBLISHED' => 'تاریخ شائع',
    'LBL_ML_TYPE' => 'قسم',
    'LBL_ML_UNINSTALLABLE' => 'غیر نسبی',
    'LBL_ML_VERSION' => 'ورژن',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver for PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli extension)',
    'LBL_NEXT' => 'اگلا',
    'LBL_NO' => 'نہيں',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Setting site admin password',
    'LBL_PERFORM_CONFIG_PHP' => 'Creating SuiteCRM configuration file',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Creating the database</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>پہ</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Creating the Database username and password...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Creating default SuiteCRM data',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Creating default scheduler jobs',
    'LBL_PERFORM_DEFAULT_USERS' => 'Creating default users',
    'LBL_PERFORM_DEMO_DATA' => 'Populating the database tables with demo data (this may take a little while)',
    'LBL_PERFORM_DONE' => 'done<br>',
    'LBL_PERFORM_FINISH' => 'Finish',
    'LBL_PERFORM_OUTRO_1' => 'The setup of SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' is now complete!',
    'LBL_PERFORM_OUTRO_3' => 'Total time: ',
    'LBL_PERFORM_OUTRO_4' => ' سیکنڈز.',
    'LBL_PERFORM_OUTRO_5' => 'Approximate memory used: ',
    'LBL_PERFORM_OUTRO_6' => ' bytes.',
    'LBL_PERFORM_SUCCESS' => 'Success!',
    'LBL_PERFORM_TABLES' => 'Creating SuiteCRM application tables, audit tables and relationship metadata',
    'LBL_PERFORM_TITLE' => 'Perform Setup',
    'LBL_PRINT' => 'پرنٹ کیجیے',
    'LBL_REG_CONF_1' => 'Please complete the short form below to receive product announcements, training news, special offers and special event invitations from SuiteCRM. We do not sell, rent, share or otherwise distribute the information collected here to third parties.',
    'LBL_REG_CONF_3' => 'Thank you for registering. Click on the Finish button to login to SuiteCRM. You will need to log in for the first time using the username "admin" and the password you entered in step 2.',
    'LBL_REG_TITLE' => 'رجسٹریشن',

    'LBL_REQUIRED' => '* Required field',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM Application Admin Name',
    'LBL_SITECFG_ADMIN_PASS_2' => 'سیوٹ سی آر ایم کے صارف کا پاس ورڈ دوبارہ درج کیجئے',
    'LBL_SITECFG_ADMIN_PASS' => 'ویٹ سی آر ایم ایڈمن صارف کا پاس ورڈ',
    'LBL_SITECFG_APP_ID' => 'درخواست کی شناخت',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'اگر منتخب کیا گیا ہے تو، آپ کو ایک ایپلی کیشن کی ID مہیا کرنا ہو گی جو خود پیدا ہونے والی ID کو مسترد کرے. ID اس بات کو یقینی بناتا ہے کہ ایک سویٹ سی آر ایم مثال کے سیشنز دوسرے مثالوں کے لیے استعمال نہیں کیے جاتے ہیں. اگر آپ کے پاس سویٹ سی آر ایم کی تنصیب کا کلسٹر ہے، تو وہ سبھی ہی ایک ہی ایپلی کیشن کی ID کا اشتراک کیجیے.',
    'LBL_SITECFG_CUSTOM_ID' => 'اپنی درخواست کی شناخت فراہم کیجیے',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'If selected, you must specify a log directory to override the default directory for the SuiteCRM log. Regardless of where the log file is located, access to it through a web browser will be restricted via an .htaccess redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'اپنی مرضی کے لاگ ان ڈائریکٹری کا استعمال کیجئے',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'If selected, you must provide a secure folder for storing SuiteCRM session information. This can be done to prevent session data from being vulnerable on shared servers.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Use a Custom Session Directory for SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>مہربانی کر کےآگے بڑھنے سے پہلے مندرجہ ذیل غلطیوں کو حل کیجیے:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Log Directory',
    'LBL_SITECFG_SESSION_PATH' => 'Path to Session Directory<br>(must be writable)',
    'LBL_SITECFG_SITE_SECURITY' => 'Select Security Options',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'If selected, the system will periodically check for updated versions of the application.',
    'LBL_SITECFG_SUITE_UP' => 'Automatically Check For Updates?',
    'LBL_SITECFG_TITLE' => 'Site Configuration',
    'LBL_SITECFG_TITLE2' => 'Identify Administration User',
    'LBL_SITECFG_SECURITY_TITLE' => 'Site Security',
    'LBL_SITECFG_URL' => 'URL of SuiteCRM Instance',
    'LBL_SITECFG_ANONSTATS' => 'Send Anonymous Usage Statistics?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'If selected, SuiteCRM will send <b>anonymous</b> statistics about your installation to SuiteCRM Inc. every time your system checks for new versions. This information will help us better understand how the application is used and guide improvements to the product.',
    'LBL_SITECFG_URL_MSG' => 'Enter the URL that will be used to access the SuiteCRM instance after installation. The URL will also be used as a base for the URLs in the SuiteCRM application pages. The URL should include the web server or machine name or IP address.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Enter a name for your system. This name will be displayed in the browser title bar when users visit the SuiteCRM application.',
    'LBL_SITECFG_PASSWORD_MSG' => 'After installation, you will need to use the SuiteCRM admin user (default username = admin) to log in to the SuiteCRM instance. Enter a password for this administrator user. This password can be changed after the initial login. You may also enter another admin username to use besides the default value provided.',
    'LBL_SITECFG_COLLATION_MSG' => 'Select collation (sorting) settings for your system. This settings will create the tables with the specific language you use. In case your language doesn\'t require special settings please use default value.',
    'LBL_SPRITE_SUPPORT' => 'Sprite Support',
    'LBL_SYSTEM_CREDS' => 'System Credentials',
    'LBL_SYSTEM_ENV' => 'System Environment',
    'LBL_SHOW_PASS' => 'Show Passwords',
    'LBL_HIDE_PASS' => 'Hide Passwords',
    'LBL_HIDDEN' => '<i>(hidden)</i>',
    'LBL_STEP1' => 'Step 1 of 2 - Pre-Installation requirements',
    'LBL_STEP2' => 'Step 2 of 2 - Configuration',
    'LBL_STEP' => 'Step',
    'LBL_TITLE_WELCOME' => 'Welcome to the SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Are you ready to install?',
    'REQUIRED_SYS_COMP' => 'Required System Components',
    'REQUIRED_SYS_COMP_MSG' =>
        'Before you begin, please be sure that you have the supported versions of the following system components:<br>
                      <ul>
                      <li> Database/Database Management System (Examples: MariaDB, MySQL or SQL Server)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Consult the Compatibility Matrix in the Release Notes for
                      compatible system components for the SuiteCRM version that you are installing.<br>',
    'REQUIRED_SYS_CHK' => 'Initial System Check',
    'REQUIRED_SYS_CHK_MSG' =>
        'When you begin the installation process, a system check will be performed on the web server on which the SuiteCRM files are located in order to
                      make sure the system is configured properly and has all of the necessary components
                      to successfully complete the installation. <br><br>
                      The system checks all of the following:<br>
                      <ul>
                      <li><b>PHP version</b> &#8211; must be compatible with the application</li>
                      <li><b>Session Variables</b> &#8211; must be working properly</li>
                      <li><b>MB Strings</b> &#8211; must be installed and enabled in php.ini</li>
                      <li><b>Database Support</b> &#8211; must exist for MariaDB, MySQL or SQL Server</li>
                      <li><b>Config.php</b> &#8211; must exist and must have the appropriate permissions to make it writeable</li>
                      <li>The following SuiteCRM files must be writeable:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  If the check fails, you will not be able to proceed with the installation.
                                  An error message will be displayed, explaining why your system did not pass the check.
                                  After making any necessary changes, you can undergo the system check again to continue the installation.<br>',


    'REQUIRED_INSTALLTYPE' => 'Typical or Custom install',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'After the system check is performed, you can choose either
                      the Typical or the Custom installation.<br><br>
                      For both <b>Typical</b> and <b>Custom</b> installations, you will need to know the following:<br>
                      <ul>
                      <li> <b>Type of database</b> that will house the SuiteCRM data <ul><li>Compatible database
                      types: MariaDB, MySQL or SQL Server.<br><br></li></ul></li>
                      <li> <b>Name of the web server</b> or machine (host) on which the database is located
                      <ul><li>This may be <i>localhost</i> if the database is on your local computer or is on the same web server or machine as your SuiteCRM files.<br><br></li></ul></li>
                      <li><b>Name of the database</b> that you would like to use to house the SuiteCRM data</li>
                        <ul>
                          <li> You might already have an existing database that you would like to use. If
                          you provide the name of an existing database, the tables in the database will
                          be dropped during installation when the schema for the SuiteCRM database is defined.</li>
                          <li> If you do not already have a database, the name you provide will be used for
                          the new database that is created for the instance during installation.<br><br></li>
                        </ul>
                      <li><b>Database administrator user name and password</b> <ul><li>The database administrator should be able to create tables and users and write to the database.</li><li>You might need to
                      contact your database administrator for this information if the database is
                      not located on your local computer and/or if you are not the database administrator.<br><br></ul></li></li>
                      <li> <b>SuiteCRM database user name and password</b>
                      </li>
                        <ul>
                          <li> The user may be the database administrator, or you may provide the name of
                          another existing database user. </li>
                          <li> If you would like to create a new database user for this purpose, you will
                          be able to provide a new username and password during the installation process,
                          and the user will be created during installation. </li>
                        </ul></ul><p>

                      For the <b>Custom</b> setup, you might also need to know the following:<br>
                      <ul>
                      <li> <b>URL that will be used to access the SuiteCRM instance</b> after it is installed.
                      This URL should include the web server or machine name or IP address.<br><br></li>
                                  <li> [Optional] <b>Path to the session directory</b> if you wish to use a custom
                                  session directory for SuiteCRM information in order to prevent session data from
                                  being vulnerable on shared servers.<br><br></li>
                                  <li> [Optional] <b>Path to a custom log directory</b> if you wish to override the default directory for the SuiteCRM log.<br><br></li>
                                  <li> [Optional] <b>Application ID</b> if you wish to override the auto-generated
                                  ID that ensures that sessions of one SuiteCRM instance are not used by other instances.<br><br></li>
                                  <li><b>Character Set</b> most commonly used in your locale.<br><br></li></ul>
                                  For more detailed information, please consult the Installation Guide.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Please read the following important information before proceeding with the installation. The information will help you determine whether or not you are ready to install the application at this time.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Choose your language</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Setup Wizard',
    'LBL_WIZARD_TITLE' => 'SuiteCRM Setup Wizard: ',
    'LBL_YES' => 'جی ہاں',

    'LBL_PATCHES_TITLE' => 'Install Latest Patches',
    'LBL_MODULE_TITLE' => 'Install Language Packs',
    'LBL_PATCH_1' => 'If you would like to skip this step, click Next.',
    'LBL_PATCH_TITLE' => 'System Patch',
    'LBL_PATCH_READY' => 'The following patch(es) are ready to be installed:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM relies upon PHP sessions to store important information while connected to this web server. Your PHP installation does not have the Session information correctly configured.
											<br><br>A common misconfiguration is that the <b>'session.save_path'</b> directive is not pointing to a valid directory. <br>
											<br> Please correct your <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuration</a> in the php.ini file located here below.",
    'LBL_SESSION_ERR_TITLE' => 'PHP Sessions Configuration Error',
    'LBL_SYSTEM_NAME' => 'System Name',
    'LBL_COLLATION' => 'Collation Settings',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Provide a System Name for the SuiteCRM instance.',
    'LBL_PATCH_UPLOAD' => 'Select a patch file from your local computer',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php version 5 or above is required.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimum Php version required is 5.1.0. Recommended Php version is 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Your current php version is ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Recommended php version is 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',
    'LBL_STREAM' => 'PHP allows to use stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'New account information',
        'type' => 'system',
        'description' => 'This template is used when the System Administrator sends a new password to a user.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Here is your account username and temporary password:
Username : $contact_user_user_name
Password : $contact_user_user_hash

$config_site_url

After you log in using the above password, you may be required to reset the password to one of your own choice.',
        'name' => 'System-generated password email',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Reset your account password',
        'type' => 'system',
        'description' => "This template is used to send a user a link to click to reset the user's account password.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>Click on the link below to reset your password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
You recently requested on $contact_user_pwd_last_changed to be able to reset your account password.

Click on the link below to reset your password:

$contact_user_link_guid',
        'name' => 'Forgot Password email',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Two Factor Authentication Code',
        'type' => 'system',
        'description' => "This template is used to send a user a code for Two Factor Authentication.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Two Factor Authentication code is <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Two Factor Authentication code is $code.',
        'name' => 'Two Factor Authentication email',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"From" Name:',
    'LBL_FROM_ADDR' => '"From" Address:',

    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'دیگر',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Enable SMTP over SSL or TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'صارفین کو اجازت دیں کہ وہ اس اکاؤنٹ کو باہر جانے والے ای میل کیلئے استعمال کیجیے:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'جب یہ اختیار منتخب کیا جاتا ہے تو، تمام صارفین نظام کی اطلاعات اور انتباہات کو بھیجنے کے لئے اسی اکاؤنٹ کو استعمال کرتے ہوئے ای میلز بھیج سکتے ہیں. اگر اختیار کا انتخاب نہیں کیا جاتا ہے، تو صارفین اپنی اکاؤنٹ کی معلومات فراہم کرنے کے بعد اب بھی آؤٹ گوۂنگ میل سرور استعمال کرسکتے ہیں.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',


    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTPPASS' => 'SMTP Password:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'نام:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'NEW_LOGO' => 'علامت منتخب کیجیے:',
    'NEW_LOGO_HELP' => 'تصویر فایل کا فارمیٹ یا تو. Png یا .jpg ہونا چاہیے. زیادہ سے زیادہ اونچائی 170px ہو، اور زیادہ سے زیادہ چوڑائی 450px ہو. کوۂی بھی بڑی تصویر اپ لوڈ کی گئی ہو یا کہ کسی بھی سمت میں ہو تو اسکے طول و عرض کو چھوٹا کر دیا جائے گا جو آبتایا گیا ہے.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'اپ لوڈ',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Scenario Selection',
    'LBL_WIZARD_SCENARIO_DESC' => 'This is to allow tailoring of the displayed modules based on your requirements. Each of the modules can be enabled after install using the administration page.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'There are no scenarios currently set in the configuration file (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'سسٹم لوکل کی ترتیبات',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_TIMEZONE' => 'Time Zone:',
    'LBL_LANGUAGE' => 'Language:',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_CURRENCY_SYMBOL' => 'Currency Symbol:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 Currency Code:',
    'LBL_NUMBER_GROUPING_SEP' => '1000s separator:',
    'LBL_DECIMAL_SEP' => 'Decimal symbol:',
    'LBL_NAME_FORMAT' => 'Name Format:',
    'UPLOAD_LOGO' => 'Please wait, logo uploading...',
    'ERR_UPLOAD_FILETYPE' => 'File type not allowed, please upload a jpeg or png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Unknown file upload error occurred.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'The uploaded file was only partially uploaded.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'No file was uploaded.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Missing a temporary folder.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Failed to write file to disk.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop.',

    'LBL_INSTALL_PROCESS' => 'Install...',

    'LBL_EMAIL_ADDRESS' => 'ای میل اڈریس:',
    'ERR_ADMIN_EMAIL' => 'Administrator Email Address is incorrect.',
    'ERR_SITE_URL' => 'Site URL is required.',

    'STAT_CONFIGURATION' => 'Configuration relationships...',
    'STAT_CREATE_DB' => 'Create database...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Create default settings...',
    'STAT_INSTALL_FINISH' => 'Install finish...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Installation process finished, <a href="%s">please log in...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Please accept license first',

    'LBL_MORE_OPTIONS_TITLE' => 'More options',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Database error',
    'LBL_OLD_PHP' => 'Old PHP Version Detected!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'I\'m aware of the risks and wish to continue.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'صارف',
    'LBL_DBCONFIG_MSG3_LABEL' => 'ڈیٹابیس کا نام',
    'LBL_DBCONFIG_MSG3' => 'Name of the database that will contain the data for the SuiteCRM instance you are about to install.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Host Name',
    'LBL_DBCONFIG_MSG2' => 'Name of web server or machine (host) on which the database is located (such as www.mydomain.com). If installing locally, it\'s better to use \'localhost\' than \'127.0.0.1\', for performance reasons.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'The username and password of a database administrator who can create database tables and users and who can write to the database is necessary in order to set up the SuiteCRM database.'
);
