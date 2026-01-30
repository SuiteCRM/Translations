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
    'LBL_ASSIGNED_TO_ID' => 'مقرر کردہ صارف کی شناخت',
    'LBL_ASSIGNED_TO_NAME' => 'سوتیکرم صارف',
    'LBL_ID' => 'شناخت',
    'LBL_DATE_ENTERED' => 'تاریخ بنائی گئی ہے',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_MODIFIED' => 'کی طرف سے ترمیم',
    'LBL_MODIFIED_NAME' => 'نام کی طرف سے ترمیم',
    'LBL_CREATED' => 'کی طرف سے بنایا گیا',
    'LBL_DESCRIPTION' => 'تفصیل',
    'LBL_DELETED' => 'ختم کر دیا گیا',
    'LBL_NAME' => 'App صارف کا نام',
    'LBL_CREATED_USER' => 'صارف کی طرف سے بنایا',
    'LBL_MODIFIED_USER' => 'سارے کی طرف سے تبدیل ہوئے',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_FORM_TITLE' => 'خارجی اکاؤنٹ کی فہرست',
    'LBL_MODULE_NAME' => 'خارجی اکاؤنٹ',
    'LBL_MODULE_TITLE' => 'خارجی اکاؤنٹ',
    'LBL_HOMEPAGE_TITLE' => 'میرا خارجی اکاؤنٹ',
    'LNK_NEW_RECORD' => 'خارجی اکاؤنٹ بنائیں',
    'LNK_LIST' => 'خارجی اکاؤنٹ دیکھیں',
    'LBL_SEARCH_FORM_TITLE' => 'خارجی ذرائع تلاش کریں',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ دیکھیں',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_NEW_FORM_TITLE' => 'نیا خارجی اکاؤنٹ',
    'LBL_PASSWORD' => 'اپپ پاس ورڈ',
    'LBL_USER_NAME' => 'App صارف کا نام',
    'LBL_URL' => 'یوآرایل',
    'LBL_APPLICATION' => 'درخواست',
    'LBL_API_DATA' => 'API ڈیٹا',
    'LBL_API_CONSKEY' => 'صارفین کی چابی',
    'LBL_API_CONSSECRET' => 'صارفین کا راز',
    'LBL_API_OAUTHTOKEN' => 'اوتھ ٹوکن',
    'LBL_AUTH_UNSUPPORTED' => "اجازت کا طریقہ درخواست کی مدد نہیں کر رہا",
    'LBL_AUTH_ERROR' => 'ایک کوشش ناکام ہوگئی ہے اس اکاؤنٹ کے ساتھ رابطے کے لیے.',
    'LBL_VALIDATED' => 'رابطہ ہوگیا ہے',
    'LBL_ACTIVE' => 'فعال ہے',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'رابطہ',
    'LBL_NOTE' => 'براہ مہربانی درج کریں',
    'LBL_CONNECTED' => 'رابطہ ہوگیا ہے',

    'LBL_ERR_NO_AUTHINFO' => 'کوئی توصیف کی معلومات نہیں ہیں اس اکاؤنٹ کے لئے.',
    'LBL_ERR_NO_TOKEN' => 'اس اکاؤنٹ کے لئے کوئی بھی ٹھیک ٹوکن نہیں ہے.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'ابھی {0} آپ اپنے اکاؤنٹ کے ساتھ رابطے میں ہیں اوکے پر کلک کر کے کتنے اکاؤنٹ کو درج کریں رابطے کو دوبارہ بحال کرے.',

    'LBL_CLICK_TO_EDIT' => 'تبدیل کرنے کے لئے کلک کریں',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'روتھنتیکاتے',
    'LBL_APPLICATION_FOUND_NOTICE' => 'اس اکاؤنٹ کی درخواست پہلے سے موجود ہے پہلی موجودہ درخواست کو درست کریں.',
    'LBL_OMIT_URL' => '(Omit http:// or https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'کلیک<b> رابطہ</b> براہ راست پیج سے جو اپنے اکاونٹ معلومات میں دیا تھا اور اپنے اکاؤنٹ سے رسائی حاصل کریں SuiteCRM کے ذریعے رابطے کے بعد آپ براہ راست SuiteCRM. میں واپس جا سکتے ہیں.',
    'LBL_BASIC_SAVE_NOTICE' => 'کلیک<b> رابطہ</b> اکاؤنٹ سے رابطہ کریں SuiteCRM. میں.',
    'LBL_ERR_POPUPS_DISABLED' => 'برائے مہربانی پوپ اپ ونڈو میں براؤزر کو قابل بنائیں استثناء کو ویب سائٹ کے طور پر ایڈ کریں {0} قبول کرنے کے لئے آرڈر فہرست سے رابطہ کریں.',

    'LBL_API_OAUTHSECRET' => 'اپی اوتھ راز',
);
