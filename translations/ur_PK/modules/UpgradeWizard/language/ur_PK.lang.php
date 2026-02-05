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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'گروپ کا تعین نہیں کرتا',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'مالک کا تعین نہیں کرتا',
    'ERR_UW_CONFIG_WRITE' => 'نئے ورژن کی معلومات کے ساتھ config.php کو اپ ڈیٹ کرنے میں خرابی ہے.',
    'ERR_UW_CONFIG' => 'برائے مہربانی کونفیگ پی ایچ دستاویز کو مرتب کریں لکھنے کے اور دوبارہ لوڈ کرنے کے قابل.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'ڈرکٹری لکھنے کے قابل نہیں ہے',
    'ERR_UW_FILE_NOT_COPIED' => 'دستاویز کاپی نہیں ہوئی',
    'ERR_UW_FILE_NOT_DELETED' => 'پیکیج ہٹانے میں مسلہ ہے ',
    'ERR_UW_FILE_NOT_READABLE' => 'دستاویز کو نہیں پڑھا جاسکتا.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'دستاویز حرکت نہیں کرتے یا لکھے ہوئے کے طور پر',
    'ERR_UW_FLAVOR_2' => 'ذائقہ کی قیمت میں اضافہ: ',
    'ERR_UW_FLAVOR' => 'سوتیکرم سسٹم کا ذائقہ: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log نہیں بنائی جاسکتیں یا لکھی جاسکتی برائے مہربانی سوتیکرم سے اجازت لے کر اس کو ٹھیک کریں.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload براہ مہربانی ایک سے اونچی قیمت ٹھیک کریں برائے مہربانی اپنی پی ایچ تبدیل کریں یا دوبارہ جاری رکھے ویب سرور کے ساتھ.',
    'ERR_UW_NO_FILE_UPLOADED' => 'ایک مخصوص دستاویز لیں اور دوبارہ کوشش کریں!',
    'ERR_UW_NO_FILES' => 'ایک نقص واقع ہوا کوئی دستاویز جانچ پڑتال کیلئے تلاش نہیں ہوئی تھی.',
    'ERR_UW_NO_MANIFEST' => 'زپ فائل غائب ہے ایک manifest.php فائل. آگے بڑھا نہیں سکتا.',
    'ERR_UW_NO_VIEW' => 'مخصوص غلط نظارے کی وضاحت.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'صحیح اپ لوڈ نہیں ہے.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'ڈائرکٹری سانچا نہیں بن رہا دستاویز کی اجازت کی جانچ پڑتال کریں.',
    'ERR_UW_ONLY_PATCHES' => 'آپ صرف اس صفحہ پر پیچیس لوڈ کرسکتے ہیں.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'غلطی مل گئی ہے پرواز کی جانچ پڑتال کے درمیاں',
    'ERR_UW_UPLOAD_ERR' => 'دستاویز کو اپلوڈ کرنے میں کوئی غلطی ہے برائے مہربانی دوبارہ کوشش کریں<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'سوتیکرم سسٹم ورژن: ',
    'ERR_UW_PHP_VERSION' => 'پی ایچ پی ورژن: ',
    'ERR_UW_SUITECRM_VERSION' => 'سوتیکرم سسٹم ورژن: ',
    'ERR_UW_WRONG_TYPE' => 'یہ صفا نہیں چل رہا ',
    'LBL_BUTTON_BACK' => 'پیچھے جانا',
    'LBL_BUTTON_CANCEL' => 'منسوخ کریں',
    'LBL_BUTTON_DELETE' => 'پیکیج حتم کریں',
    'LBL_BUTTON_DONE' => 'ہو گیا',
    'LBL_BUTTON_EXIT' => 'باہر',
    'LBL_BUTTON_NEXT' => 'اگے',
    'LBL_BUTTON_RECHECK' => 'دوبارہ جانچ پڑتال کرنا',
    'LBL_BUTTON_RESTART' => 'دوبارہ چلانا',

    'LBL_UPLOAD_UPGRADE' => 'اپ گریڈ بیٹھے چڑھائی ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'دستاویز کا بیک اپ',
    'LBL_UW_BACKUP_FILES_EXIST' => 'بیک اپ دستاویز میں اپ گریڈ میں مل گئے ہیں',
    'LBL_UW_BACKUP' => 'دستاویز کا بیک اپ',
    'LBL_UW_CANCEL_DESC' => 'اپ گریڈ منسوخ ہوگئی ہے کوئی عرضی دستاویز کاپی ہو چکی تھی اور کوئی اپ گریڈ دستاویز جہاں اپلوڈ کی تھی مٹائی جا چکی ہے.',
    'LBL_UW_CHECK_ALL' => 'سب چیک کریں',
    'LBL_UW_CHECKLIST' => 'اپ گریڈ کا قدم',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'دستاویز کو زیادہ لکھنے کا بیک اپ درج ذیل ڈرائکٹری میں ہے: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'درج ٰذیل دستاویز کو ہاتھ سے ملا دیں: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'اپ گریڈ عمل کر رہی ہے ہاتھ سے ملانے والی دستاویز کو',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'برائے مہربانی ان میں سے مختلف طریقہ کار کو استعمال کریں سب سے بہترین طریقہ سب دستاویز کو اکٹھا کرنا ہے جب تک وہ مکمل نہیں ہوتی آپکی سوتیکرم انسٹالیشن غیر یقینی سطح پر ہے نامکمل کو اپ گریڈ کریں.',
    'LBL_UW_COMPLETE' => 'مکمل',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'تمام سسٹم سیٹنگ کو مطمن کی ضرورت ہے',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'پی ایچ کی ترتیب کال وقت سے حوالہ کی طرف ہے',
    'LBL_UW_COMPLIANCE_CURL' => 'کورل مودلے',
    'LBL_UW_COMPLIANCE_IMAP' => 'امپ مودلے',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Mb سٹرینج ماڈل',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'مبسترینگس مبسٹرنگ.فونک_اورلوڈ پیرامیٹر',
    'LBL_UW_COMPLIANCE_MEMORY' => 'پی ایچ کی ترتیب بھی یادداشت کی حد',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP سیٹنگ سٹریم',
    'LBL_UW_COMPLIANCE_DB' => 'کم سے کم ڈیٹابیس ورژن',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'پی ایچ پی کا محل وقوع',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'کم سے کم پی ایچ ورژن',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'پی ایچ کی ترتیب حفاظت موڈ پر ہے',
    'LBL_UW_COMPLIANCE_TITLE2' => 'ترتیب معلوم ہو گئی ہے',
    'LBL_UW_COMPLIANCE_XML' => 'XML پارسنگ',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'زپ کی اہمیت',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'پکڑے ورژن',
    'LBL_UW_COPIED_FILES_TITLE' => 'دستاویز کی نقل کامیابی سے ہو گئی ہے',

    'LBL_UW_DB_CHOICE1' => 'اپ گریڈ کے دانا کو چلانا ایس کیو ایل',
    'LBL_UW_DB_CHOICE2' => 'شک وشبہ میں ہاتھ سے ایس کیو ایل',
    'LBL_UW_DB_ISSUES_PERMS' => 'ڈیٹابیس کا استحاق',
    'LBL_UW_DB_METHOD' => 'ڈیٹابیس کا اپڈیٹ کا طریقہ',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'تمام استحق دستیاب',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'حق کی ضرورت',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'درج ذیل اپگریڈڈ پیکجز منسوب ہو چکے ہیں:',
    'LBL_UW_END_LOGOUT_PRE' => 'اب کریٹ کا عمل کامیاب ہوگیا.',
    'LBL_UW_END_LOGOUT_PRE2' => 'ہوگیا پر کلک کرکے اپگریڈ وزیر سے باہ نکلنے.',
    'LBL_UW_END_LOGOUT' => 'اگر آپ کوئی اور مزید اب گریڈ پیکیج استعمال کر رہے ہیں لاگ ان لوگ وٹ کرنے سے پہلے.',

    'LBL_UW_FILE_DELETED' => ' ہٹایا جاچکا ہے',
    'LBL_UW_FILE_GROUP' => 'گروپ',
    'LBL_UW_FILE_ISSUES_PERMS' => 'دستاویز کی اجازت',
    'LBL_UW_FILE_NO_ERRORS' => '<b>تمام دستاویز لکھنے کے قابل ہیں</b>',
    'LBL_UW_FILE_OWNER' => 'مالک',
    'LBL_UW_FILE_PERMS' => 'اختیار',
    'LBL_UW_FILE_UPLOADED' => ' چڑھ چکا ھے',
    'LBL_UW_FILE' => 'فائل کا نام',
    'LBL_UW_FILES_QUEUED' => 'مندرجہ ذیل اپ گریڈ پیکیج پہلے سے انسٹال ہو چکے ہیں:',
    'LBL_UW_FILES_REMOVED' => 'سسٹم سے مندرجہ ذیل فائل مٹا دی چکی ہیں<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>چڑھاؤ کا پیکیج اپ گریڈ کرنے کے لیے آگے کے بٹن پر کلک کریں</b>',
    'LBL_UW_FROZEN' => 'چلانے سے پہلے چڑھاؤ کا پیکج کریں.',
    'LBL_UW_HIDE_DETAILS' => 'تفصیلات چھپائیں',
    'LBL_UW_IN_PROGRESS' => 'پیش رفت میں',
    'LBL_UW_INCLUDING' => 'بشمول',
    'LBL_UW_INCOMPLETE' => 'نا مکمل',
    'LBL_UW_MANUAL_MERGE' => 'دستاویز کو ملانا',
    'LBL_UW_MODULE_READY' => 'ماڈل انسٹال کے لیے تیار ہیں کومٹ پر کلک کریں عمل ہونا شروع ہوجائے گا انسٹالیشن کے ساتھ.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'کیسی بھی محفوظ کیے گئے اپ گریڈ کا پتا نہیں لگا.',
    'LBL_UW_NONE' => 'کوئی نہیں',
    'LBL_UW_OVERWRITE_DESC' => 'تمام دستاویز زیادہ سے زیادہ لکھے جائیں گے کسی بھی کوڈ کے اندر کسٹمائزیشن اور سانچہ اس کو تبدیل کرچکا ہے کیا آپ یقینا اس پر عمل کرنا چاہتے ہیں?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'ٹاسک ایٹم کے لیے دستی زم بنائیں?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'ای مل دستی زم کے یاداشت کے لیے ہوتا ہے?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'دستاویز کی فہرست نیچے ٹھیک ہو چکی ہے جن کو دستی ضم کرنا مقصود ہے ان ایٹم کو انچکک کریں <i> کوئلیو تبدیلی مل جائے گی خودکار انچکک طور پر نشان پڑتال جو کوئی بھی تحریر کیا جائے.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'کسی بھی دستاویز کو ملانے کی ضرورت نہیں ہے.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'ضرورت نہیں ہے.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'کھود سے دستاویز کو محفوظ کریں:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'تمام متعلقہ جانچ پڑتال کم یاب ہوگئی.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'آگے پر کلک کرکے آپ گریڈ دستاویز سسٹم کو نقل کریں.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>درج کریں</b> ٹھہری ہوئی اپ گریڈ ضروری طور پر اس پر عمل کریںاگر کے بٹن پر کلک کی ضرورت ہوگی اس عمل کو مکمل کرنے کیلئے اگر آپ اس پر عمل کرنا نہیں چاہتے تو پھر کلک منسوخ بٹن پر کریں.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'تمام دستاویز کی ٹوٹل ٹوگگلے',

    'LBL_UW_REBUILD_TITLE' => 'نتائج کو دوبارہ بنانا',
    'LBL_UW_SCHEMA_CHANGE' => 'شجرا کی تبدیلی',

    'LBL_UW_SHOW_COMPLIANCE' => 'ملو مشروط ترتیب کو دکھائیں',
    'LBL_UW_SHOW_DB_PERMS' => 'غائب ڈیٹابیس کی نمائش ہو رہی ہے',
    'LBL_UW_SHOW_DETAILS' => 'تفصیلات دکھائیں',
    'LBL_UW_SHOW_DIFFS' => 'ضروری دستاویز ملانے کے لئے دکھایا جا رہی',
    'LBL_UW_SHOW_NW_FILES' => 'دستاویز کچھ چھوٹی سی اجازت کے ساتھ دیکھا',
    'LBL_UW_SHOW_SCHEMA' => 'سکرپٹ کی تبدیلی کا شجرہ دکھائیں',
    'LBL_UW_SHOW_SQL_ERRORS' => 'بیڈ کی قطار کو دکھائیں',
    'LBL_UW_SHOW' => 'دکھانا',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'دستاویز کو چھوڑنا',
    'LBL_UW_SQL_RUN' => 'جانچ پڑتال کریں جبکہ sql دستی طور پر چل رہا ہوں',
    'LBL_UW_START_DESC' => 'یہ ساحر قبول ہو چکا ہے اپ اپ گریڈنگ میں ہی سٹکر میں.',
    'LBL_UW_START_DESC2' => 'ہم قابل قدر طریقے سے یہ بتاتے ہیں کہ اپنے سوتیکرم دستاویز میں نقل بنا لیے مثال کے طور پر آپ اس کو انشاء میں استعمال کرسکتے اپ گریڈ پیکج کامیاب دیکھ سکتے ہیں نئے ورژن کا افسوس کرنے سے پہلے اگر آپ تبدیل کر چکے ہیں "composer.json" دستاویز چلائیں اپ گریڈ پر کامیابی سے عمل کرنے کے بعد.<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'آگے پر کلک کریں اپنے سسٹم کی پڑتال کرنے کے لیے یقینا آپ کا سسٹم تیار ہو گا اپ گریڈ کے لیے جانچ پڑتال دستاویز کے عمل کے ساتھ ہوگی ڈیٹابیس سرور سیٹنگ کا اختیار رکھتا ہے.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'ساحر کی نیاب گریڈ اب ہو جائے گی اپ گریڈ کا عمل دوبارہ چل جائے گا براہ مہربانی اپنی اپگریڈ کو جاری رکھیں.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'ساحر کو اپ گریڈ کرنے میں آپ کو خوش آمدید کہتے ہیں',

    'LBL_UW_TITLE_CANCEL' => 'منسوخ کریں',
    'LBL_UW_TITLE_COMMIT' => 'حوالہ کو اپ گریڈ کرنا',
    'LBL_UW_TITLE_END' => 'Debrief',
    'LBL_UW_TITLE_PREFLIGHT' => 'Preflight Check',
    'LBL_UW_TITLE_START' => 'خوش آمدید کرنا',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'System Check',
    'LBL_UW_TITLE_UPLOAD' => 'Upload Package',
    'LBL_UW_TITLE' => 'درجہ افزوں مددگار',
    'LBL_UW_UNINSTALL' => 'ان انسٹال کریں',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Accept License',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Convert License',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Start in progress',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'سسٹم اس عمل کی جانچ پڑتال کر رہا ہے',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'لیسنس کے عمل کی جانچ پڑتال کریں',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'پرفلغت کے عمل کی جانچ پڑتال کریں',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'دستاویز کی نقل کا عمل ہو رہا ہے',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'درجہ افزوں کا اپ گریڈ کا عمل ہو رہا ہے',
    'LBL_UW_COMMIT_DESC' => 'آگے پر کلک کرکے جمے اپ گریڈ سکرپٹ کو چلائیں.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'اپ گریڈ سکرپٹ پر عمل ہورہا ہے',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'اپ گریڈ کا خلاصہ پر عمل ہورہا ہے',
    'LBL_UPGRADE_IN_PROGRESS' => 'میں عمل ہو رہا ہے     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'گذرا ہوا وقت',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'اپ گریڈ منسوخ ہوگئی ہے اس کو صاف کرنے کا عمل ہو رہا ہے',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'اپ گریڈ تھوڑا سا وقت لے گی',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'اپ گریڈ کی جانچ پڑتال عمل میں ہے',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'اب گریڈ پیکج کو چڑھایا جارہا ہے ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => '451 پرانے ساحر کو اپ گریڈ میں چھوڑا گیا',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'بستی نقشہ کو چھوڑا پوسٹ اپگریڈ کے لیے',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'پرانے شجرہ کے طریقہ کو چھوڑ دیا جاتا ہے',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'پرانے شجرہ نہیں چھوڑے جاتے',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'قطاروں کو چھوڑنا',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'پی ایچ پی ورژن یا اس سے اوپر کی ضرورت ہے.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'سویٹ سی آرایم کے ذریعے آپکے پی ایچ پی کا ورژن سپورٹڈ نہیں ہے. آپ کو اس ورژن کو انسٹال کرنے کی ضرورت ہوگی جو سویٹ سی آرایم کی درخواست کے ساتھ مطابقت رکھتا ہو. مہربانی کر کے سپورٹ پی ایچ پی ورژن کے لئے ریلیز نوٹس میں مطابقت میٹرکس سے مشورہ کریں. آپ کا ورژن ہے ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'پی ایچ پی بیکڈ مطابقت موڈ بدل گیا ہے. مزید آگے بڑھنے کے لۓ زند.ذے١_صلاحیت _موڈ مقرر کریں',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'عمل',
    'LBL_ML_CANCEL' => 'منسوخ کریں',
    'LBL_ML_COMMIT' => 'ارتکاب',
    'LBL_ML_DESCRIPTION' => 'تفصیل',
    'LBL_ML_INSTALLED' => 'تاریخ نصب ہے',
    'LBL_ML_NAME' => 'نام',
    'LBL_ML_PUBLISHED' => 'تاریخ شائع',
    'LBL_ML_TYPE' => 'قسم',
    'LBL_ML_UNINSTALLABLE' => 'غیر فعال',
    'LBL_ML_VERSION' => 'ورژن',
    'LBL_ML_INSTALL' => 'انسٹال کریں',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'آپ کا مجودہ پی ایچ ورژن ہے: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'ماجودہ پی ایچ ورژن ہے ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' یا اوپر.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'ساحر اب گریٹ',
    'LBL_UPLOAD_SUCCESS' => 'اپ گریڈ پیکج کامیابی کے ساتھ چل چکا ہے آخری جانچ پڑتال کرنے کے لیے آگے پر کلک کریں.',
    'LBL_UW_TITLE_LAYOUTS' => 'لے آوٹ کی تصدیق',
    'LBL_LAYOUT_MODULE_TITLE' => 'لے آوٹ',
    'LBL_LAYOUT_MERGE_DESC' => 'ایک نیا شعبہ دستیاب ہے جو کہ جمع ہو چکا ہے اپ گریڈ کے طور پر موجودہ ماڈل لے آوٹ میں اس کو خود بخود کھول سکتے ہیں نئے شعبے کے بارے میں اور زیادہ سیکھیں براہ مہربانی لکھنے کے طور پر اس کو مشورہ دے اپ گریڈنگ کے لیے جواب اپ گریڈنگ کر رہے ہیں <br><br> اگر یہ ذکر وصول نہیں ہوتا براہ مہربانی ماڈل کو ان چیک کریں اور آپکا ماہ اور لے آوٹ ان چیک کے لیے رہ جائے گا شعب اسٹوڈیو میں موجود رہے گا اپ گریڈنگ کے بعد <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'آگے پر کلک کرکے تبدیل کرنے کی تصدیق کریں اور اپ گریڈ کی تکمیل کو ختم کریں.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'آگے پر کلک کرکے آپ گریڈ کو کامیاب یا مکمل کریں.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'لے آوٹ کی تصدیق',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'لے آوٹ کے نتائج کی تصدیق کریں',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'لے آوٹ کی درج ذیل ترتیب کامیابی کے ساتھ مل گئی ہے:',
    'LBL_SELECT_FILE' => 'منتخب کردہ دستاویز:',
    'ERROR_VERSION_INCOMPATIBLE' => 'اپ لوڈ شدہ فائل سویٹ سی آر ایم کے اس ورژن کے ساتھ مطابقت نہیں رکھتا ہے: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'چڑھائے جانے والی دستاویز موضوع نہیں پی ایچ پی ورژن کے ساتھ: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'اپ لوڈ شدہ فائل سویٹ سی آر ایم کے اس ورژن کے ساتھ مطابقت نہیں رکھتا ہے: ',
    'LBL_LANGPACKS' => 'زبان کا پیکج' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'ماڈیول لوڈر' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'اپ گریڈ کو جوڑنا' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'موضوعات' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'ورک فلو' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'تازہ کاری' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'عمل ہورہا ہے' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'موزوں ورجن واضح طور پر دستاویز میں ٹھیک نہیں ہوا',
    'LBL_UPGRD_CSTM_CHK' => 'اپڈیٹ کا عمل کچھ دستاویز اپڈیٹ ہو جائیں گی لیکن کچھ دستاویز پہلے سے کسٹم فولڈر میں موجود ہیں برائے مہربانی نظر ثانی کرے تبدیل ہونے میں رکھنے سے پہلے:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'چڑھائے جانے والا دستاویز حد سے گزر گیا ہے upload_max_filesi ze پی ایچ میں حک
م نہ دے.',
        2 => 'اپ لوڈ کردہ فائل MAX_FILE_SIZE ہدایت سے زیادہ ہے جس کو HTML فارم میں بیان کیا گیا تھا.',
        3 => 'اپ لوڈ شدہ فائل صرف جزوی طور پر اپ لوڈ کی گئی تھی.',
        4 => 'کوئی بھی فائل اپ لوڈ نہیں کی گئی تھی.',
        5 => 'نامعلوم غلطی.',
        6 => 'ایک عارضی فولڈر غاۂب ہے.',
        7 => 'ڈسک میں فائل لکھنے میں ناکام.',
        8 => 'وسعت کے ذریعے چڑھائے جانے والا دستاویز رک گیا ہے.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
