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
    'LBL_MODULE_NAME' => 'ملازمین',
    'LBL_MODULE_TITLE' => 'ملازمین: گھر',
    'LBL_SEARCH_FORM_TITLE' => 'ملازمت کی تلاش',
    'LBL_LIST_FORM_TITLE' => 'ملازمین',
    'LBL_NEW_FORM_TITLE' => 'نیا ملازم',
    'LBL_LOGIN' => 'لاگ ان کریں',
    'LBL_RESET_PREFERENCES' => 'پہلے سے طے شدہ ترجیحات پر ری سیٹ کریں',
    'LBL_TIME_FORMAT' => 'وقت کی ترتیب:',
    'LBL_DATE_FORMAT' => 'تاریخ کی ترتیب:',
    'LBL_TIMEZONE' => 'موجودہ وقت:',
    'LBL_CURRENCY' => 'کرنسی:',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_LAST_NAME' => 'آخری نام',
    'LBL_LIST_EMPLOYEE_NAME' => 'ملازم کا نام',
    'LBL_LIST_DEPARTMENT' => 'محکمہ',
    'LBL_LIST_REPORTS_TO_NAME' => 'شکایت کرنا یا کسی بات کے بارے میں بتانا',
    'LBL_LIST_EMAIL' => 'ای میل',
    'LBL_LIST_USER_NAME' => 'صارف کا نام',
    'LBL_ERROR' => 'غلطی یا نقص:',
    'LBL_PASSWORD' => 'پاس ورڈ:',
    'LBL_USER_NAME' => 'صارف کا نام:',
    'LBL_USER_TYPE' => 'صارف کی قسم',
    'LBL_FIRST_NAME' => 'پہلا نام:',
    'LBL_LAST_NAME' => 'آخری نام:',
    'LBL_THEME' => 'موضوع:',
    'LBL_LANGUAGE' => 'زبان:',
    'LBL_ADMIN' => 'منتظم:',
    'LBL_EMPLOYEE_INFORMATION' => 'ملازم کی معلومات',
    'LBL_OFFICE_PHONE' => 'آفس کا فون:',
    'LBL_REPORTS_TO' => 'آئی ڈی کو رپورٹ کریں:',
    'LBL_REPORTS_TO_NAME' => 'رپورٹ کرنا',
    'LBL_OTHER_PHONE' => 'دیگر فون:',
    'LBL_NOTES' => 'نوٹ:',
    'LBL_DEPARTMENT' => 'شعبہ:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'کوئی بھی پتہ:',
    'LBL_ANY_PHONE' => 'کوئی بھی فون:',
    'LBL_ANY_EMAIL' => 'کوئی بھی ای میل:',
    'LBL_ADDRESS' => 'پتہ:',
    'LBL_CITY' => 'شہر:',
    'LBL_STATE' => 'ریاست یا علاقہ:',
    'LBL_POSTAL_CODE' => 'پوسٹل کوڈ:',
    'LBL_COUNTRY' => 'ملک:',
    'LBL_NAME' => 'نام:',
    'LBL_MOBILE_PHONE' => 'موبائل:',
    'LBL_FAX' => 'فیکس:',
    'LBL_EMAIL' => 'ای میل اڈریس:',
    'LBL_EMAIL_LINK_TYPE' => 'گاہک کا ای میل',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>سوٹ سی آر ایم میں صارف کی میل:</b>سویٹ آر آر ایم کی درخواست میں ای میل کلائنٹ کا استعمال کرتے ہوئے ای میلز بھیجیں.<br><b>بیرونی صارف کے لئے:</b> سویٹ سی آر ایم کی درخواست کے باہر ای میل کلائنٹ کا استعمال کرتے ہوئے ای میل بھیجیں، جیسے کہ مائیکروسافٹ آؤٹ لک.',
    'LBL_HOME_PHONE' => 'گھر کا فون:',
    'LBL_WORK_PHONE' => 'کام کرنے والا فون:',
    'LBL_EMPLOYEE_STATUS' => 'ملازم کا درجہ:',
    'LBL_PRIMARY_ADDRESS' => 'ابتدائی پتا:',
    'LBL_SAVED_SEARCH' => 'لیوٹ کا انتخاب کرنا',
    'LBL_MESSENGER_ID' => 'ای ایم کا نام:',
    'LBL_MESSENGER_TYPE' => 'آئی ایم کی قسم:',
    'ERR_LAST_ADMIN_1' => 'ملازم کا نام "',
    'ERR_LAST_ADMIN_2' => '"منتظم تک رسائی کے ساتھ آخری ملازم ہے. کم سے کم ایک ملازم ایک منتظم بننا چاہئے.',
    'LNK_NEW_EMPLOYEE' => 'ملازم بنائیں',
    'LNK_EMPLOYEE_LIST' => 'ملازمت دیکھیں',
    'ERR_DELETE_RECORD' => 'اکاؤنٹ کو ختم کرنے کیلئے آپ کو ایک ریکارڈ نمبر کی وضاحت کرنا ضروری ہے.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'ملازم کا درجہ',

    'LBL_SUITE_LOGIN' => 'صارف ہے',
    'LBL_RECEIVE_NOTIFICATIONS' => 'توجہ پر اطلاع کرنا',
    'LBL_IS_ADMIN' => 'میں منظم کرنا',
    'LBL_GROUP' => 'صارف کا گروپ',
    'LBL_PHOTO' => 'تصویر',
    'LBL_DELETE_USER_CONFIRM' => 'ملازم بھی ایک صارف ہے. ملازم کے ریکارڈ کو خارج کر کے صارف کا ریکارڈ بھی خارج کردیں گے، اور صارف اب درخواست کی تکمیل تک رسائی حاصل نہیں کرسکے گا. کیا آپ کو اس ریکارڈ کو ختم کرنے کے لئے آگے بڑھنا چاہتے ہیں?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'کیا آپ واقعی یہ ملازم نکلنا کرنا چاہتے ہیں?',
    'LBL_ONLY_ACTIVE' => 'فعال ملازمین',
    'LBL_SELECT' => 'منتخب کرنا' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'توثیق کی شناخت',
    'LBL_EXT_AUTHENTICATE' => 'خارجی تصدیق',
    'LBL_GROUP_USER' => 'صارف کا گروپ',
    'LBL_LIST_ACCEPT_STATUS' => 'حیثیت قبول کریں',
    'LBL_MODIFIED_BY' => 'کی طرف سے ترمیم',
    'LBL_MODIFIED_BY_ID' => 'آئی ڈی کی طرف سے ترمیم',
    'LBL_CREATED_BY_NAME' => 'کی طرف سے بنایا گیا', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'پورٹل اپ صارف',
    'LBL_PSW_MODIFIED' => 'پہلے والا پاس ورڈ تبدیل ہوگیا ہے',
    'LBL_SHOW_ON_EMPLOYEES' => 'ملازم کا ریکارڈ ظاہرہو',
    'LBL_USER_HASH' => 'پاس ورڈ',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'نظام کا پیداکردہ پاس وارڈ',
    'LBL_DESCRIPTION' => 'تفصیل',
    'LBL_FAX_PHONE' => 'فیکس',
    'LBL_STATUS' => 'حیثیت',
    'LBL_ADDRESS_CITY' => 'شہر کا پتہ',
    'LBL_ADDRESS_COUNTRY' => 'ملک کا پتہ',
    'LBL_ADDRESS_INFORMATION' => 'ایڈریس کی معلومات',
    'LBL_ADDRESS_POSTALCODE' => 'پوسٹل کوڈ کا پتا',
    'LBL_ADDRESS_STATE' => 'پتا کو مقرر کرنا',
    'LBL_ADDRESS_STREET' => 'پتہ والی گلی',

    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_DATE_ENTERED' => 'تاریخ ڈالی',
    'LBL_DELETED' => 'ختم کر دیا گیا',

    'LBL_BUTTON_SELECT' => 'منتخب کرنا',
    'LBL_BUTTON_CLEAR' => 'صاف کرنا',

    'LBL_CONTACTS_SYNC' => 'ہم آہنگی سے رابطہ کریں',
    'LBL_OAUTH_TOKENS' => 'OAuth کا ٹوکن',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'پروجیکٹ کے صارفین پروجیکٹ ٹائٹل سے',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'رابطہ عنوان سے پروجیکٹ رابطے',
    'LBL_ROLES' => 'کردار',
    'LBL_SECURITYGROUPS' => 'سیکورٹی گروپ',
    'LBL_PROSPECT_LIST' => 'متوقع فہرست',

    'LBL_FACTOR_AUTH_INTERFACE' => 'دو فیکٹر اتھینٹی کیشن انٹرفیس:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
