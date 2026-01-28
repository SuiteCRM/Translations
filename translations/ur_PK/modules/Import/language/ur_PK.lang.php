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
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'نقص کی وجہ سے صفیں درآمد نہیں کی گئی',
    'LBL_UPDATE_SUCCESSFULLY' => 'ریکارڈ کامیابی سے اپڈیٹ ہو گیا',
    'LBL_SUCCESSFULLY_IMPORTED' => 'ریکارڈ تیارکیے گئے',
    'LBL_STEP_4_TITLE' => 'مرحلہ {0}: فائل درآمد کرنا',
    'LBL_STEP_5_TITLE' => 'مرحلہ {0}: درآمد شدہ نتائج دیکھیں',
    'LBL_CUSTOM_ENCLOSURE' => 'کی طرف سے اہل فیلڈز:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'شائع نہیں کر سکتا۔ اسی نام کے ساتھ ایک اور شائع شدہ نقشہ درآمد ہے۔',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'غیراشاعت کرنے کے قابل نہیں ایک نقشہ دوسرے شخص کی ملکیت ہے۔ آپ اسی نام سے ایک درآمدشدہ نقشہ کے مالک ہیں۔',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'اس ماڈیول کے لیے درآمدات قائم نہیں کیے گئے',
    'LBL_IMPORT_TYPE' => 'آپ درآمد شدہ ڈیٹا کے ساتھ کیا کرنا چاہیں گے؟',
    'LBL_IMPORT_BUTTON' => 'صرف نئے ریکارڈز تخلیق کریں',
    'LBL_UPDATE_BUTTON' => 'نئے ریکارڈز تخلیق کریں اور موجودہ ریکارڈ اپڈیٹ کریں',
    'LBL_CREATE_BUTTON_HELP' => 'نئے ریکارڈ بنانے کے لیے یہ اختیار استعمال کریں۔ نوٹ: درآمد شدہ فائل میں موجود صفیں جو کہ پہلے سے موجود آئی ڈیز سے مشابہت رکھتی ہیں ان کو درآمد نہیں کیا جائے گا اگر قدریں آئی ڈی فیلڈ کے ساتھ منقش ہوں۔۔',
    'LBL_UPDATE_BUTTON_HELP' => 'پہلے سے موجود ریکارڈز کو اپڈیٹ کرنے کے لیے اس اختیار کو استعمال کریں۔ درآمد شدہ فائل میں ڈیٹا پہلے سے موجود ریکارڈز کے ساتھ درآمد شدہ فائل میں ریکارڈ آئی ڈی کی بنیاد پر ملایا جائے گا.',
    'LBL_ERROR_INVALID_BOOL' => 'غلط بولین قدر',
    'LBL_IMPORT_ERROR' => 'نقائص درآمد کریں:',
    'LBL_ERROR' => 'غلطی',
    'LBL_FIELD_NAME' => 'فیلڈ کا نام',
    'LBL_VALUE' => 'قیمت',
    'LBL_NONE' => 'کوئی نہیں',
    'LBL_REQUIRED_VALUE' => 'مطلوبہ قدر غائب ہے',
    'LBL_ERROR_SYNC_USERS' => 'Outlook کے ساتھ ہم آہنگ کرنے کے لیے غلط قدر:',
    'LBL_ID_EXISTS_ALREADY' => 'اس جدول میں آئی ڈی پہلے سے موجود ہے',
    'LBL_ASSIGNED_USER' => 'اگر صارف موجود نہیں تو موجودہ صارف استعمال کریں',
    'LBL_ERROR_DELETING_RECORD' => 'ریکارڈ حذف کرنے میں خرابی:',
    'LBL_ERROR_INVALID_ID' => 'دیئے گئے شناخت میدان میں فٹ ہونے کے لئے بہت لمبا ہے (زیادہ سے زیادہ لمبائی 36 حروف ہے)',
    'LBL_ERROR_INVALID_PHONE' => 'غلط فون نمبر',
    'LBL_ERROR_INVALID_NAME' => 'میدان میں فٹ ہونے کے لئے سٹرنگ بہت طویل ہے',
    'LBL_ERROR_INVALID_VARCHAR' => 'میدان میں فٹ ہونے کے لئے سٹرنگ بہت طویل ہے',
    'LBL_ERROR_INVALID_DATE' => 'غلط تاریخ',
    'LBL_ERROR_INVALID_DATETIME' => 'غلط تاریخ',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'غلط تاریخ',
    'LBL_ERROR_INVALID_TIME' => 'غلط وقت',
    'LBL_ERROR_INVALID_INT' => 'غلط اندرونی قدر',
    'LBL_ERROR_INVALID_NUM' => 'غلط عددی قدر',
    'LBL_ERROR_INVALID_EMAIL' => 'غلط ای میل ایڈریس',
    'LBL_ERROR_INVALID_USER' => 'غلط صارف کا نام یا ID',
    'LBL_ERROR_INVALID_TEAM' => 'غلط ٹیم کا نام یا ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'غلط اکاؤنٹ کا نام یا ID',
    'LBL_ERROR_INVALID_RELATE' => 'غلط متعلقہ علاقہ',
    'LBL_ERROR_INVALID_CURRENCY' => 'غلط کرنسی کی قیمت',
    'LBL_ERROR_INVALID_FLOAT' => 'غلط فلوٹنگ پوائنٹ نمبر',
    'LBL_ERROR_NOT_IN_ENUM' => 'قیمت ڈراپ ڈاؤن لسٹ میں نہیں ہے. اجازت شدہ اقدار یہ ہیں:',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'فائل کامیابی سے اپ لوڈ نہیں کی گئی. شاید یہ آپ کے php.ini فائل میں \'اپ لوڈ کریں_زیادہ سے زیادہ_فائل کا ناپ\' کی ترتیب کو ایک چھوٹی سی تعداد پر مقرر کیا جا سکتا ہے',
    'LBL_MODULE_NAME' => 'درآمد کریں',
    'LBL_TRY_AGAIN' => 'دوبارہ کوشش کریں',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'درآمد فائل پر مشتمل ہے {0} قطاریں. قطاروں کی زیادہ سے زیادہ تعداد ہے {1}. مزید قطاریں درآمد کے عمل کو سست کر سکتی ہیں. درآمد جاری رکھنے کے لئے ٹھیک پر کلک کریں. درآمد فائل میں نظر ثانی اور دوبارہ اپ لوڈ کرنے کیلئے منسوخ کریں پر کلک کریں.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'آپ سسٹم کے منتظم صارف کو درآمد نہیں کرسکتے ہیں',
    'ERR_MULTIPLE' => 'ایک سے زیادہ کالم اسی فیلڈ کا نام کے ساتھ بیان کی گئی ہیں.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'مطلوبہ فیلڈ غاۂب ہے:',
    'ERR_SELECT_FILE' => 'اپ لوڈ کرنے کیلئے ایک فائل منتخب کریں.',
    'LBL_SELECT_FILE' => 'فائل منتخب کریں:',
    'LBL_EXTERNAL_SOURCE' => 'بیرونی درخواست یا خدمت',
    'LBL_CUSTOM_DELIMITER' => 'شعبوں سے طے شدہ:',
    'LBL_DONT_MAP' => '-- اس فیلڈ کا نقشہ مت کرو--',
    'LBL_STEP_MODULE' => 'کیا ماڈیول آپ ڈیٹا میں درآمد کرنا چاہتے ہیں؟',
    'LBL_STEP_1_TITLE' => 'مرحلہ 1: ڈیٹا ماخذ منتخب کریں',
    'LBL_CONFIRM_TITLE' => 'مرحلہ {0}: فائل کی خصوصیات درآمد کریں',
    'LBL_MICROSOFT_OUTLOOK' => 'مائیکروسافٹ آؤٹ لک',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'مائیکروسافٹ آؤٹ لک کے لئے اپنی مرضی کے نقشے کو درآمد شدہ فائل پر کما کم سے کم (. سی سی وی) پر منحصر ہے. اگر آپ کی درآمد فائل ٹیب سے طے شدہ ہے تو، نقشے کی توقع نہیں کی جائے گی.',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_PUBLISH' => 'شائع کریں',
    'LBL_DELETE' => 'ختم کریں',
    'LBL_PUBLISHED_SOURCES' => 'پری سیٹ درآمد کی ترتیبات استعمال کرنے کے لئے، ذیل میں سے منتخب کریں:',
    'LBL_UNPUBLISH' => 'غیر شائع شدہ',
    'LBL_NEXT' => 'اگے',
    'LBL_BACK' => 'پیچھے جانا',
    'LBL_STEP_2_TITLE' => 'مرحلہ {0}: درآمد فائل اپ لوڈ کریں',
    'LBL_HAS_HEADER' => 'ہیڈر صف:',
    'LBL_NUM_1' => 'ایک.',
    'LBL_NUM_2' => 'دو.',
    'LBL_NUM_3' => 'تین.',
    'LBL_NUM_4' => 'چار.',
    'LBL_NUM_5' => 'پانچ.',
    'LBL_NUM_6' => 'چھ.',
    'LBL_NUM_7' => 'سات.',
    'LBL_NUM_8' => 'آٹھ.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => 'دس.',
    'LBL_NUM_11' => 'گیارا.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'نوٹ:',
    'LBL_STEP_3_TITLE' => 'مرحلہ {0}: فیلڈ موپنگ کی توثیق کریں',
    'LBL_STEP_DUP_TITLE' => 'مرحلہ {0}: ممکنہ نقلے کی جانچ پڑتال کریں',
    'LBL_DATABASE_FIELD' => 'ماڈل کا شعبہ',
    'LBL_HEADER_ROW' => 'ہیڈر صف',
    'LBL_HEADER_ROW_OPTION_HELP' => 'منتخب کریں اگر درآمد کی فائل کی سب سے بڑی قطار ایک ہیڈر فائل ہے جس میں فیلڈ لیبل شامل ہیں.',
    'LBL_ROW' => 'قطار',
    'LBL_CONTACTS_NOTE_1' => 'آخری نام یا مکمل نام کا تعین ہونا ضروری ہے.',
    'LBL_CONTACTS_NOTE_2' => 'اگر مکمل نام نقطہ نظر ہے تو، پہلا نام اور آخری نام نظر انداز کر دیا جاتا ہے.',
    'LBL_CONTACTS_NOTE_3' => 'اگر مکمل نام نقدی ہے تو، مکمل نام میں ڈیٹا ڈیٹا بیس میں داخل ہونے پر پہلا نام اور آخری نام میں تقسیم کیا جائے گا.',
    'LBL_CONTACTS_NOTE_4' => '2 نمبر گالی کا پتا اور 3 نمبر گلی کا پتا میں ختم ہونے والے شعبوں ڈیٹا بیس میں داخل ہونے پر مرکزی ایڈریس اسٹریٹ فیلڈ کے ساتھ مل کر یکجا کیا جاتا ہے.',
    'LBL_ACCOUNTS_NOTE_1' => '2 نمبر گالی کا پتا اور 3 نمبر گلی کا پتا میں ختم ہونے والے شعبوں ڈیٹا بیس میں داخل ہونے پر مرکزی ایڈریس اسٹریٹ فیلڈ کے ساتھ مل کر یکجا کیا جاتا ہے.',
    'LBL_IMPORT_NOW' => 'اب درآمد کریں',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'پڑھنے کیلئے درآمد کردہ فائل کو کھول نہیں سکتا ہے',
    'LBL_NO_LINES' => 'آپ کی درآمد کی فائل میں کوئی لائنیں موجود نہیں تھیں. براہ مہربانی اس بات کو یقینی بنائیں کہ آپ کی فائل میں خالی لائنیں موجود نہیں ہیں اور دوبارہ کوشش کریں.',
    'LBL_SUCCESS' => 'کامیابی:',
    'LBL_LAST_IMPORT_UNDONE' => 'درآمد واپس نہیں آیا تھا.',
    'LBL_NO_IMPORT_TO_UNDO' => 'واپس کرنے کے لئے کوئی درآمد نہیں تھا.',
    'LBL_CREATED_TAB' => 'تخلیق کردہ ریکارڈز',
    'LBL_DUPLICATE_TAB' => 'نقل کرنا',
    'LBL_ERROR_TAB' => 'خرابی',
    'LBL_IMPORT_MORE' => 'دوبارہ درآمد کریں',
    'LBL_FINISHED' => 'ختم',
    'LBL_UNDO_LAST_IMPORT' => 'درآمد کو واپس کردیں',
    'LBL_DUPLICATES' => 'ڈپلیکیٹ ملا',
    'LNK_DUPLICATE_LIST' => 'ڈپلیکیٹز کی فہرست ڈاؤن لوڈ کریں',
    'LNK_ERROR_LIST' => 'غلطیوں کی فہرست ڈاؤن لوڈ کریں',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'قطاروں کی فہرست ڈاؤن لوڈ کریں جو درآمد نہیں کیا گیا تھا',
    'LBL_INDEX_USED' => 'چیک کرنے کے لئے فیلڈز:',
    'LBL_INDEX_NOT_USED' => 'شعبوں دستیاب ہے:',
    'LBL_IMPORT_FIELDDEF_ID' => 'منفرد شناخت نمبر',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'نام یا شناخت',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'فون نمبر',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'ٹیم کا نام یا شناخت',
    'LBL_IMPORT_FIELDDEF_NAME' => 'کوئی متن',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'کوئی متن',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'کوئی متن',
    'LBL_IMPORT_FIELDDEF_TIME' => 'وقت',
    'LBL_IMPORT_FIELDDEF_DATE' => 'تاریخ',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'صارف کا نام یا شناخت',
    'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' یا \'1\'',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'فہرست',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'ای میل پتہ',
    'LBL_IMPORT_FIELDDEF_INT' => 'تعداد (کوئی کم سے کم)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'تعداد (کوئی کم سے کم)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'تعداد (کوئی کم سے کم)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'تعداد (وقف شدہ اجازت)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'تعداد (وقف شدہ اجازت)',
    'LBL_DATE_FORMAT' => 'تاریخ کی ترتیب:',
    'LBL_TIME_FORMAT' => 'وقت کی ترتیب:',
    'LBL_TIMEZONE' => 'ٹائم زون:',
    'LBL_ADD_ROW' => 'فیلڈ شامل کریں',
    'LBL_REMOVE_ROW' => 'فیلڈ ہٹائیں',
    'LBL_DEFAULT_VALUE' => 'کوتاہي قیمت',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'درآمد فائل کی خصوصیات دیکھیں',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'درآمد فائل کی خصوصیات چھپائیں',
    'LBL_SHOW_NOTES' => 'نوٹس دیکھیں',
    'LBL_HIDE_NOTES' => 'نوٹس چھپائیں',
    'LBL_SAVE_MAPPING_AS' => 'درآمد کی ترتیبات کو بچانے کے لئے، محفوظ کردہ ترتیبات کیلئے ایک نام فراہم کریں:',
    'LBL_IMPORT_COMPLETE' => 'باہر',
    'LBL_IMPORT_COMPLETED' => 'درآمد مکمل',
    'LBL_IMPORT_RECORDS' => 'ریکارڈ ریکارڈز',
    'LBL_IMPORT_RECORDS_OF' => 'کی',
    'LBL_IMPORT_RECORDS_TO' => 'کرنے کے لئے',
    'LBL_CURRENCY' => 'کرنسی:',
    'LBL_CURRENCY_SIG_DIGITS' => 'کرنسی اہم ڈاٹس',
    'LBL_NUMBER_GROUPING_SEP' => '1000s الگ الگ:',
    'LBL_DECIMAL_SEP' => 'اعشاری نشان:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'نام ڈسپلے کی شکل',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'مثال',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s"سلامتی، "f" پہلا نام، "l" آخری نام</i>',
    'LBL_CHARSET' => 'فائل انکوڈنگ:',
    'LBL_MY_SAVED_HELP' => 'آپ کے پری سیٹ درآمد کی ترتیبات کو درآمد کرنے کے لئے اس اختیار کا استعمال کریں، بشمول درآمد کی خصوصیات، نقشہ جات، اور کسی بھی ڈپلیکیٹ چیک کی ترتیبات، اس درآمد میں. 
<br><br>کلک کریں <b>حذف کریں</b>تمام صارفین کے لئے نقشہ جات کو حذف کرنے کے لئے.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'آپ کے پری سیٹ درآمد کی ترتیبات کو درآمد کرنے کے لئے اس اختیار کا استعمال کریں، بشمول درآمد کی خصوصیات، نقشہ جات، اور کسی بھی ڈپلیکیٹ چیک کی ترتیبات، اس درآمد میں.
<br><br>کلک کریں<b>شائع کریں</b> دوسرے صارفین کو دستیاب نقشہ جات بنانے کے لئے.<br>کلک کریں<b>غیر شائع شدہ</b>نقشہ جات بنانے کے لئے دوسرے صارفین کو دستیاب نہیں.<br>کلک کریں<b>حذف کریں</b> تمام صارفین کے لئے نقشہ جات کو حذف کرنے کے لئے.',
    'LBL_ENCLOSURE_HELP' => '<p>اس قدر<b>کوالیفائزر کردار</b> استعمال کردہ فیلڈ کے مواد کو بند کرنے کے لئے استعمال کیا جاتا ہے، بشمول کسی بھی حروف میں شامل ہیں جو ڈیمیمٹرز کے طور پر استعمال ہوتے ہیں.<br><br>مثال: اگر طول و عرض ایک کما ہے (،) اور قابلیت ایک کوٹیشن کا نشان ہے (")،<br><b>"کپٹیینو, کیلیفورنیا "</b> درخواست میں ایک فیلڈ میں درآمد کیا جاتا ہے اور ظاہر ہوتا ہے <b>"کپٹیینو, کیلیفورنیا "</b>.<br>اگر کوئی قابلیت والے حروف نہیں ہیں، یا اگر ایک مختلف کردار کوالیفائزر ہے،<br><b>"کپٹیینو, کیلیفورنیا "</b> دو ملحقہ شعبوں میں درآمد کیا جاتا ہے <b>"کپٹیینو</b> اور <b>"کیلیفورنیا "</b>.<br><br>نوٹ: ممکنہ فائل میں کوئی قابلیت والے حروف نہیں ہوسکتی ہے.<br>ایکسل میں تخلیق کردہ کما اور طبط شدہ فائلوں کے لئے پہلے سے طے شدہ کوالیفائزر کردار ایک کوٹیشن کا نشان ہے.</p>',
    'LBL_DATABASE_FIELD_HELP' => 'یہ کالم ماڈیول میں تمام شعبوں کو دکھاتا ہے. درآمد فائل قطاروں میں ڈیٹا کو نقشہ کرنے کیلئے ایک فیلڈ منتخب کریں.',
    'LBL_HEADER_ROW_HELP' => 'یہ کالم درآمد فائل کے ہیڈر قطار میں لیبل دکھاتا ہے.',
    'LBL_DEFAULT_VALUE_HELP' => 'پیدا یا تازہ کاری ریکارڈ میں میدان کے لئے استعمال کرنے کے لئے ایک قدر کو اشارہ کریں اگر درآمد فائل میں فیلڈ کوئی ڈیٹا نہیں ہے.',
    'LBL_ROW_HELP' => 'یہ کالم درآمد فائل کے پہلے غیر ہیڈر صف میں ڈیٹا دکھاتا ہے. اگر اس کالم میں ہیڈر صف لیبل دکھائے جاتے ہیں تو، فائل پراپرٹیز درآمد میں ہیڈر قطار کی وضاحت کرنے کیلئے واپس پر کلک کریں.',
    'LBL_SAVE_MAPPING_HELP' => 'درآمد کی ترتیبات کو بچانے کے لئے ایک نام درج کریں، بشمول فیلڈ میپنگ اور ڈپلیکیٹ چیک کے لئے استعمال شدہ انڈیکس شامل ہیں. بچت درآمد کی ترتیبات مستقبل کے درآمد کے لئے استعمال کیا جا سکتا ہے.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'آپ کی درآمد کی فائل کے اپ لوڈ کے دوران، کچھ فائل کی خصوصیات خود کار طریقے سے پتہ چلا جا سکتا ہے. ان خصوصیات کو دیکھیں اور ان کا نظم کریں، جیسا کہ <br> ضروری ہے. نوٹ: یہاں دستیاب ترتیبات اس درآمد سے متعلق ہیں<br> اور آپ کی مجموعی صارف کی ترتیبات کو زیادہ سے زیادہ نہیں کریں گے.',
    'LBL_IMPORT_STARTED' => 'درآمد شروع:',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'اجازت کی وجہ سے ریکارڈ کو اپ ڈیٹ نہیں کیا جا سکتا',
    'LBL_DELETE_MAP_CONFIRMATION' => 'کیا آپ واقعی درآمد کی ترتیبات کے اس محفوظ سیٹ کو حذف کرنا چاہتے ہیں؟',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'اگر درآمد فائل کا ڈیٹا درج ذیل ذرائع سے برآمد کیا گیا تو، کون منتخب کریں.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'میپنگ عمل (اگلے مرحلے) کو آسان کرنے کے لۓ خود بخود اپنی مرضی کے نقشے کو لاگو کرنے کیلئے ذریعہ منتخب کریں.',
    'LBL_EXAMPLE_FILE' => 'درآمد فائل سانچہ ڈاؤن لوڈ کریں',
    'LBL_CONFIRM_IMPORT' => 'آپ نے درآمد کے عمل کے دوران ریکارڈ کو اپ ڈیٹ کرنے کا انتخاب کیا ہے. موجودہ ریکارڈز کے مطابق بنائے جانے والی اپ ڈیٹس کو واپس نہیں کیا جا سکتا. تاہم، درآمد کے عمل کے دوران پیدا کردہ ریکارڈوں کو خارج کر دیا جاسکتا ہے (خارج کر دیا گیا)، اگر مطلوبہ ہو. صرف نئے ریکارڈز بنانے کے لئے منتخب کرنے کے لئے منسوخ کریں پر کلک کریں، یا جاری رکھنے کے لئے ٹھیک پر کلک کریں.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'انتباہ: آپ نے پہلے ہی اس درآمد کے لئے اپنی مرضی کے نقشہ سازی کا انتخاب کیا ہے، کیا آپ جاری رکھنا چاہتے ہیں؟',
    'LBL_SAMPLE_URL_HELP' => 'نمونہ درآمد فائل کو ماڈیول کے شعبوں کے ہیڈر قطار پر ڈاؤن لوڈ کریں. فائل درآمد ڈیٹا جس میں آپ درآمد کرنا چاہتے ہیں پر مشتمل فائل تشکیل دینے کے لئے ٹیمپلیٹ کے طور پر استعمال کیا جا سکتا ہے.',
    'LBL_AUTO_DETECT_ERROR' => 'برآمد فائل میں فیلڈ طول و عرض اور قابلیت کا پتہ چلا نہیں جاسکتا. درآمد فائل پراپرٹیز میں ترتیبات کی تصدیق کریں.',
    'LBL_MIME_TYPE_ERROR_1' => 'منتخب کردہ فائل میں ایک محدود فہرست شامل نہیں ہوتی ہے. فائل کی قسم کی جانچ پڑتال کریں. ہم تجزیہ شدہ فائلوں (.csv) کی سفارش کرتے ہیں.',
    'LBL_MIME_TYPE_ERROR_2' => 'منتخب شدہ فائل درآمد کرنے کے لۓ، ٹھیک ہے پر کلک کریں. نئی فائل اپ لوڈ کرنے کے لئے، دوبارہ کوشش کریں پر کلک کریں.',
    'LBL_FIELD_DELIMETED_HELP' => 'فیلڈ طول و عرض کو اس فیلڈ کالم کو علیحدہ کرنے کے لئے مخصوص کردار کی وضاحت کرتا ہے.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'ایک ایسی فائل کو منتخب کریں جس میں ڈیٹا شامل ہے جس سے ڈیمرٹر سے علیحدہ ہوتا ہے، جیسے کما یا ٹیب - متوقع فائل. قسم کے فائلوں .csv کی سفارش کی جاتی ہے.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'کیش ڈائرکٹری درآمد لکھنے قابل نہیں ہے.',
    'LBL_ADD_FIELD_HELP' => 'پیدا کردہ اور / یا اپ ڈیٹ کردہ تمام ریکارڈوں میں فیلڈ پر ایک قدر شامل کرنے کے لئے اس اختیار کا استعمال کریں. فیلڈ کا انتخاب کریں اور پھر اس فیلڈ کے لئے ایک ڈیفالٹ ویلیو کالم میں درج کریں یا منتخب کریں.',
    'LBL_MISSING_HEADER_ROW' => 'کوئی ہیڈر صف ملا نہیں',
    'LBL_CANCEL' => 'منسوخ کریں',
    'LBL_SELECT_DS_INSTRUCTION' => 'درآمد شروع کرنے کے لئے تیار ہیں؟ اس ڈیٹا کا ذریعہ منتخب کریں جو آپ درآمد کرنا چاہتے ہیں.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'آپ کے کمپیوٹر پر ایک فائل منتخب کریں جس میں وہ ڈیٹا شامل ہے جسے آپ درآمد کرنا چاہتے ہیں، یا درآمد فائل بنانے پر سر شروع کرنے کیلئے سانچے کو ڈاؤن لوڈ کریں.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'یہاں یہ ہے کہ درآمد شدہ فائل کی پہلی کئی قطاروں کو پتہ چلا فائل خصوصیات کے ساتھ ظاہر ہوتا ہے. اگر ہیڈر قطار کا پتہ چلا گیا تو، میز کے سب سے اوپر قطار میں ظاہر ہوتا ہے. برآمد کردہ خصوصیات میں تبدیلیوں کو بنانے اور اضافی خصوصیات کو مقرر کرنے کیلئے درآمد فائل خصوصیات دیکھیں. ترتیبات کو اپ ڈیٹ کرنے کے میز میں موجود ڈیٹا کو اپ ڈیٹ کریں گے.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'مندرجہ ذیل کی میز پر ماڈیول کے تمام شعبوں پر مشتمل ہے جو درآمد فائل میں اعداد و شمار کے لئے نقشہ لگایا جا سکتا ہے. اگر فائل ایک ہیڈر قطار پر مشتمل ہے تو، فائل کے کالمز کو ملاپ کے شعبوں میں نقد کیا گیا ہے. اس بات کا یقین کرنے کے لئے نقشے کی جانچ پڑتال کریں کہ وہ جو آپ کی توقع رکھتے ہیں، اور ضروریات کے مطابق تبدیلیاں کریں. نقشے کو چیک کرنے میں آپ کی مدد کرنے کے لئے، صف 1 فائل میں ڈیٹا دکھاتا ہے. ضروری مطلوبہ شعبوں کو نقشہ کرنے کے لئے اس بات کا یقین کریں (ایک ستارے کی طرف اشارہ).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'ڈپلیکیٹ ریکارڈ بنانے سے بچنے کے لۓ، منتخب شدہ نقشہ جات کو منتخب کریں جس میں آپ کو ڈپلیکیٹ چیک کرنے کے لئے استعمال کرنا ہوگا جبکہ ڈیٹا درآمد کیا جارہا ہے. منتخب شدہ شعبوں میں موجودہ ریکارڈوں کے اندر قیمتوں کو درآمد فائل میں ڈیٹا کے خلاف چیک کیا جائے گا. اگر مماثلت کا ڈیٹا مل گیا ہے، تو اعداد و شمار پر مشتمل فائل میں قطاروں کو درآمد کے نتائج (اگلے صفحے) کے ساتھ ساتھ دکھایا جائے گا. پھر آپ درآمد کرنے کے لئے ان میں سے کتنے قطاروں کو منتخب کریں گے.',
    'LBL_DUP_HELP' => 'یہاں درآمد فائل میں قطاریں موجود ہیں جو درآمد نہیں کیے گئے ہیں کیونکہ ان میں ڈیٹا موجود ہے جو نقل شدہ چیک کے مطابق موجود موجودہ ریکارڈ میں اقدار سے ملتا ہے. جو اعداد و شمار سے نمٹنے پر مماثلت ہے. ان قطاروں کو دوبارہ درآمد کرنے کے لئے، فہرست ڈاؤن لوڈ کریں، تبدیلیاں کریں اور کلک کریں <b>دوبارہ درآمد کریں</b>.',
    'LBL_SUMMARY' => 'خلاصہ',
    'LBL_OK' => 'ٹھیک ہے',
    'LBL_ERROR_HELP' => 'یہاں درآمد فائل میں قطاروں ہیں جو غلطیوں کی وجہ سے درآمد نہیں کیا گیا تھا. ان قطاروں کو دوبارہ درآمد کرنے کے لئے، فہرست ڈاؤن لوڈ کریں، تبدیلیاں کریں اور کلک کریں <b>دوبارہ درآمد کریں</b>',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'آپ کے علاوہ کسی دوسرے صارف کو نیا ریکارڈ تفویض کرنے کیلئے، مختلف صارف کو منتخب کرنے کیلئے ڈیفالٹ ویلیو کالم کا استعمال کریں.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'اپنی ڈیفالٹ ٹیم (ے) کے مقابلے میں ٹیموں میں نئے ریکارڈز کو تفویض کرنے کیلئے، مختلف ٹیموں کو منتخب کرنے کیلئے ڈیفالٹ ویلیو کالم کا استعمال کریں.',
);

global $timedate;
