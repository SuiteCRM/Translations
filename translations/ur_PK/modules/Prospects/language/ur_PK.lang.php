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
    'LBL_MODULE_NAME' => 'اہداف',
    'LBL_MODULE_ID' => 'اہداف',
    'LBL_INVITEE' => 'براہ راست شکایت',
    'LBL_MODULE_TITLE' => 'Targets: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Target Search',
    'LBL_LIST_FORM_TITLE' => 'ھدف کی فہرست',
    'LBL_NEW_FORM_TITLE' => 'New Target',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_LAST_NAME' => 'آخری نام',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'ای میل',
    'LBL_LIST_PHONE' => 'فون',
    'LBL_LIST_FIRST_NAME' => 'پہلا نام',
    'LBL_ASSIGNED_TO_NAME' => 'کے لئے تفویض',
    'LBL_ASSIGNED_TO_ID' => 'اس کو تفویض:',
    'LBL_CAMPAIGN_ID' => 'مہم کی شناخت',
    'LBL_EXISTING_ACCOUNT' => 'ایک موجودہ اکاؤنٹ استعمال کرے',
    'LBL_CREATED_ACCOUNT' => 'ایک نیا اکاؤنٹ بنائیں',
    'LBL_CREATED_CALL' => 'ایک نئی کال بنائیں',
    'LBL_CREATED_MEETING' => 'ایک نئی مجلس بنائیں',
    'LBL_NAME' => 'نام:',
    'LBL_PROSPECT_INFORMATION' => 'جائزہ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'اور زیادہ معلومات',
    'LBL_FIRST_NAME' => 'پہلا نام:',
    'LBL_OFFICE_PHONE' => 'آفس کا فون:',
    'LBL_ANY_PHONE' => 'کوئی بھی فون:',
    'LBL_PHONE' => 'فون:',
    'LBL_LAST_NAME' => 'آخری نام:',
    'LBL_MOBILE_PHONE' => 'موبائل:',
    'LBL_HOME_PHONE' => 'گھر:',
    'LBL_OTHER_PHONE' => 'دیگر فون:',
    'LBL_FAX_PHONE' => 'فیکس:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'مقرر کردہ ابتدائی پتا:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'ابتدائی شہر کا پتہ:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ابتدائی ملک کا پتہ:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'مقرر کردہ ابتدائی پتا:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'ابتدائی پتے کا پوسٹل کوڈ:',
    'LBL_ALT_ADDRESS_STREET' => 'متبادل ایڈریس گلی:',
    'LBL_ALT_ADDRESS_CITY' => 'متبادل پتا شہر:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'متبادل ایڈریس ملک:',
    'LBL_ALT_ADDRESS_STATE' => 'متبادل ایڈریس اسٹیٹ:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'متبادل ایڈریس پوسٹل کوڈ:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'شعبہ:',
    'LBL_BIRTHDATE' => 'تاریخ پیدائش:',
    'LBL_EMAIL_ADDRESS' => 'ای میل اڈریس:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'دوسرے ای میل:',
    'LBL_ANY_EMAIL' => 'کوئی بھی ای میل:',
    'LBL_ASSISTANT' => 'مددگار:',
    'LBL_ASSISTANT_PHONE' => 'مددگار کافون:',
    'LBL_DO_NOT_CALL' => 'کال مت کیجیے:',
    'LBL_EMAIL_OPT_OUT' => 'ای میل او پی ٹی آؤٹ:',
    'LBL_PRIMARY_ADDRESS' => 'ابتدائی پتا:',
    'LBL_ALTERNATE_ADDRESS' => 'کوئی پتہ یہ دوسرا پتہ:',
    'LBL_ANY_ADDRESS' => 'کوئی بھی پتہ:',
    'LBL_CITY' => 'شہر:',
    'LBL_STATE' => 'ریاست یا علاقہ:',
    'LBL_POSTAL_CODE' => 'پوسٹل کوڈ:',
    'LBL_COUNTRY' => 'ملک:',
    'LBL_ADDRESS_INFORMATION' => 'ایڈریس کی معلومات',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LBL_OPP_NAME' => 'موقع کا نام:',
    'LBL_IMPORT_VCARD' => 'Vcard درآمد کرے',
    'LBL_IMPORT_VCARDTEXT' => 'خودبخود اپنے فائل سسٹم سے ایک وی کارڈ درآمد کرکے طریقے سے ایک نیا رابطہ بنائیں.',
    'LBL_DUPLICATE' => 'Possible Duplicate Targets',
    'MSG_SHOW_DUPLICATES' => 'ہدف کا ریکارڈ آپ تخلیق کرنے کے بارے میں ہو سکتا ہے کہ وہ ایک ہدف ریکارڈ کا نقل ہو جو پہلے ہی موجود ہے. اسی طرح کے نام اور / یا ای میل پتے پر نشانہ ریکارڈ درج ذیل میں درج ہیں.<br>اس نئے ہدف کو بنانے کے جاری رکھنے کیلئے ھدف بنائیں پر کلک کریں، یا ذیل میں درج کردہ موجودہ ہدف کو منتخب کریں.',
    'MSG_DUPLICATE' => 'ہدف کا ریکارڈ آپ تخلیق کرنے کے بارے میں ہو سکتا ہے کہ وہ ایک ہدف ریکارڈ کا نقل ہو جو پہلے ہی موجود ہے. اسی طرح کے نام اور / یا ای میل پتے پر نشانہ ریکارڈ درج ذیل میں درج ہیں.<br>اس نئے ہدف کو جاری رکھنے کے لئے محفوظ کریں پر کلک کریں، یا ہدف بنانے کے بغیر ماڈیول پر واپس کرنے کیلئے منسوخ کریں پر کلک کریں.',
    'LNK_IMPORT_VCARD' => 'وی کارڈ سے تخلیق کریں',
    'LNK_NEW_ACCOUNT' => 'اکاؤنٹ بنائیں',
    'LNK_NEW_OPPORTUNITY' => 'موزوں وقت پیدا کرنا',
    'LNK_NEW_CASE' => 'کیس بنائیں',
    'LNK_NEW_NOTE' => 'نوٹ یا منسلک بنائیں',
    'LNK_NEW_CALL' => 'لاگ کال',
    'LNK_NEW_EMAIL' => 'محفوظ شدہ ای میل',
    'LNK_NEW_MEETING' => 'تَرتيب کار اجلاس',
    'LNK_NEW_TASK' => 'ٹاسک بنائیں',
    'LNK_NEW_APPOINTMENT' => 'جگہ منصب کرنا',
    'LNK_IMPORT_PROSPECTS' => 'Import Targets',
    'NTC_DELETE_CONFIRMATION' => 'کیا آپ واقعی یہ ریکارڈ ختم کرنا چاہتے ہیں؟',
    'NTC_REMOVE_CONFIRMATION' => 'اس ماجرے میں کیا اب واقعی اس رابطے کو مٹانا چاہتے ہیں?',
    'ERR_DELETE_RECORD' => 'رابطے کو ختم کرنے کے لئے ایک ریکارڈ نمبر مخصوص ہونا ضروری ہے.',
    'LBL_SALUTATION' => 'سلامتی',
    'LBL_CREATED_OPPORTUNITY' => 'ایک نیا موقع',
    'LNK_SELECT_ACCOUNT' => "اکاؤنٹ منتخب کریں",
    'LNK_NEW_PROSPECT' => 'ہدف بنائیں',
    'LNK_PROSPECT_LIST' => 'مقاصد دیکھیں',
    'LNK_NEW_CAMPAIGN' => 'مہم بنائیں',
    'LNK_CAMPAIGN_LIST' => 'مہمات',
    'LNK_NEW_PROSPECT_LIST' => 'ھدف کی فہرست بنائیں',
    'LNK_PROSPECT_LIST_LIST' => 'ہدف کی فہرستیں',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Targets',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Targets',
    'LBL_INVALID_EMAIL' => 'غلط ای میل:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'اہداف',
    'LBL_PROSPECT_LIST' => 'متوقع فہرست',
    'LBL_CONVERT_BUTTON_TITLE' => 'Convert Target',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convert Target',
    'LNK_NEW_CONTACT' => 'نیا رابطہ',
    'LBL_CREATED_CONTACT' => "ایک نیا رابطہ بنایا",
    'LBL_CAMPAIGNS' => 'مہمات',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'مہمات کی فہرست',
    'LBL_TRACKER_KEY' => 'ڈھونڈنے والی چابی',
    'LBL_LEAD_ID' => 'Lead Id',
    'LBL_CONVERTED_LEAD' => 'Converted Lead',
    'LBL_ACCOUNT_NAME' => 'اکاؤنٹ کا نام',
    'LBL_EDIT_ACCOUNT_NAME' => 'اکاؤنٹ کا نام:',
    'LBL_CREATED_USER' => 'صارف بنائیں',
    'LBL_MODIFIED_USER' => 'صارف میں کچھ تبدیلیاں کرنا',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'تقریبات',
);
