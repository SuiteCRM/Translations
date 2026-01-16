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
    'ERR_DELETE_RECORD' => 'مخصوص نمبر دے رابطے کو مٹانے کے لیے.',
    'LBL_ACCOUNT_ID' => 'اکاؤنٹ کی شناخت:',
    'LBL_ACCOUNT_NAME' => 'اکاؤنٹ کا نام:',
    'LBL_CAMPAIGN' => 'مہم:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_ADDRESS_INFORMATION' => 'ایڈریس کی معلومات',
    'LBL_ALT_ADDRESS_CITY' => 'متبادل پتا شہر:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'متبادل ایڈریس ملک:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'متبادل ایڈریس پوسٹل کوڈ:',
    'LBL_ALT_ADDRESS_STATE' => 'متبادل ایڈریس اسٹیٹ:',
    'LBL_ALT_ADDRESS_STREET_2' => 'متبادل پتہ گلی نمبر 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'متبادل پتہ گلی نمبر 3:',
    'LBL_ALT_ADDRESS_STREET' => 'متبادل ایڈریس گلی:',
    'LBL_ALTERNATE_ADDRESS' => 'کوئی پتہ یہ دوسرا پتہ:',
    'LBL_ALT_ADDRESS' => 'کوئی پتہ یہ دوسرا پتہ:',
    'LBL_ANY_ADDRESS' => 'کوئی بھی پتہ:',
    'LBL_ANY_EMAIL' => 'کوئی بھی ای میل:',
    'LBL_ANY_PHONE' => 'کوئی بھی فون:',
    'LBL_ASSIGNED_TO_NAME' => 'مقرر کردہ سے:',
    'LBL_ASSIGNED_TO_ID' => 'مقرر کردہ صارف',
    'LBL_ASSISTANT_PHONE' => 'مددگار کافون:',
    'LBL_ASSISTANT' => 'مددگار:',
    'LBL_BIRTHDATE' => 'تاریخ پیدائش:',
    'LBL_CITY' => 'شہر:',
    'LBL_CAMPAIGN_ID' => 'مہم کی شناخت',
    'LBL_CONTACT_INFORMATION' => 'جائزہ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'رابطے کا نام:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'رابطہ کا مواقع:',
    'LBL_CONTACT_ROLE' => 'کردار:',
    'LBL_CONTACT' => 'رابطہ:',
    'LBL_COUNTRY' => 'ملک:',
    'LBL_CREATED_ACCOUNT' => 'ایک نیا اکاؤنٹ بنائیں',
    'LBL_CREATED_CALL' => 'ایک نئی کال بنائیں',
    'LBL_CREATED_CONTACT' => 'ایک نیا رابطہ بنایا',
    'LBL_CREATED_MEETING' => 'ایک نئی مجلس بنائیں',
    'LBL_CREATED_OPPORTUNITY' => 'ایک نیا موقع',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'رابطے',
    'LBL_DEPARTMENT' => 'شعبہ:',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'براہ راست شکایت',
    'LBL_DO_NOT_CALL' => 'کال مت کیجیے:',
    'LBL_DUPLICATE' => 'ممکن ہے رابطے کی نقل ہو سکتی ہے',
    'LBL_EMAIL_ADDRESS' => 'ای میل اڈریس:',
    'LBL_EMAIL_OPT_OUT' => 'ای میل او پی ٹی آؤٹ:',
    'LBL_EXISTING_ACCOUNT' => 'ایک موجودہ اکاؤنٹ استعمال کرے',
    'LBL_EXISTING_CONTACT' => 'ایک موجودہ رابطہ استعمال کرے',
    'LBL_EXISTING_OPPORTUNITY' => 'ایک موجودہ موقع استعمال کیا',
    'LBL_FAX_PHONE' => 'فیکس:',
    'LBL_FIRST_NAME' => 'پہلا نام:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ',
    'LBL_HOME_PHONE' => 'گھر:',
    'LBL_ID' => 'شناخت:',
    'LBL_IMPORT_VCARD' => 'Vcard درآمد کرے',
    'LBL_VCARD' => 'وکرد',
    'LBL_IMPORT_VCARDTEXT' => 'خودبخود اپنے فائل سسٹم سے ایک وی کارڈ درآمد کرکے طریقے سے ایک نیا رابطہ بنائیں.',
    'LBL_INVALID_EMAIL' => 'غلط ای میل:',
    'LBL_INVITEE' => 'براہ راست شکایت',
    'LBL_LAST_NAME' => 'آخری نام:',
    'LBL_LEAD_SOURCE' => 'لیڈ ماخذ:',
    'LBL_LIST_ACCEPT_STATUS' => 'حیثیت قبول کریں',
    'LBL_LIST_ACCOUNT_NAME' => 'اکاؤنٹ کا نام',
    'LBL_LIST_CONTACT_NAME' => 'رابطے کا نام',
    'LBL_LIST_CONTACT_ROLE' => 'کردار',
    'LBL_LIST_EMAIL_ADDRESS' => 'ای میل',
    'LBL_LIST_FIRST_NAME' => 'پہلا نام',
    'LBL_LIST_FORM_TITLE' => 'رابطے کی فہرست',
    'LBL_LIST_LAST_NAME' => 'آخری نام',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_PHONE' => 'آفس کا فون',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'موبائل:',
    'LBL_MODIFIED' => 'کی طرف سے ترمیم:',
    'LBL_MODULE_NAME' => 'رابطے',
    'LBL_MODULE_TITLE' => 'رابطے: گھر',
    'LBL_NAME' => 'نام:',
    'LBL_NEW_FORM_TITLE' => 'نیا رابطہ',
    'LBL_NOTE_SUBJECT' => 'نوٹ موضوع',
    'LBL_OFFICE_PHONE' => 'آفس کا فون:',
    'LBL_OPP_NAME' => 'موقع کا نام:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'موقع رول کی شناخت:',
    'LBL_OPPORTUNITY_ROLE' => 'موقع رول',
    'LBL_OTHER_EMAIL_ADDRESS' => 'دوسرے ای میل:',
    'LBL_OTHER_PHONE' => 'دیگر فون:',
    'LBL_PHONE' => 'فون:',
    'LBL_PORTAL_APP' => 'پورٹل ایپلیکیشن:',
    'LBL_PORTAL_INFORMATION' => 'پورٹل کی معلومات',
    'LBL_PORTAL_NAME' => 'پورٹل کا نام:',
    'LBL_STREET' => 'سڑک راستہ گلی',
    'LBL_POSTAL_CODE' => 'پوسٹل کوڈ:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'ابتدائی شہر کا پتہ:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ابتدائی ملک کا پتہ:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'ابتدائی پتے کا پوسٹل کوڈ:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'مقرر کردہ ابتدائی پتا:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ابتدائی پتہ گلی نمبر 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'ابتدائی پتہ گلی نمبر 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'مقرر کردہ ابتدائی پتا:',
    'LBL_PRIMARY_ADDRESS' => 'ابتدائی پتا:',
    'LBL_PRODUCTS_TITLE' => 'مصنوعات',
    'LBL_REPORTS_TO_ID' => 'ای ڈی پر رپورٹیں:',
    'LBL_REPORTS_TO' => 'رپورٹوں کو:',
    'LBL_RESOURCE_NAME' => 'وسائل کا نام',
    'LBL_SALUTATION' => 'سلامتی:',
    'LBL_SAVE_CONTACT' => 'رابطہ محفوظ کریں',
    'LBL_SEARCH_FORM_TITLE' => 'رابطہ تلاش کریں',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'چیک کردہ رابطے منتخب کریں',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'چیک کردہ رابطے منتخب کریں',
    'LBL_STATE' => 'ریاست یا علاقہ:',
    'LBL_SYNC_CONTACT' => 'آؤٹ لک ریگ میں مطابقت پذیری ؛;:',
    'LBL_PROSPECT_LIST' => 'متوقع فہرست',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'رابطہ دیکھیں',
    'LNK_IMPORT_VCARD' => 'وی کارڈ سے رابطہ بنائیں',
    'LNK_NEW_ACCOUNT' => 'اکاؤنٹ بنائیں',
    'LNK_NEW_APPOINTMENT' => 'جگہ منصب کرنا',
    'LNK_NEW_CALL' => 'لاگ کال',
    'LNK_NEW_CASE' => 'کیس بنائیں',
    'LNK_NEW_CONTACT' => 'رابطہ بنانا',
    'LNK_NEW_EMAIL' => 'محفوظ شدہ ای میل',
    'LNK_NEW_MEETING' => 'تَرتيب کار اجلاس',
    'LNK_NEW_NOTE' => 'رابطہ رکھنا',
    'LNK_NEW_OPPORTUNITY' => 'موزوں وقت پیدا کرنا',
    'LNK_NEW_TASK' => 'ٹاسک بنائیں',
    'LNK_SELECT_ACCOUNT' => "اکاؤنٹ منتخب کریں",
    'NTC_DELETE_CONFIRMATION' => 'کیا آپ واقعی یہ ریکارڈ ختم کرنا چاہتے ہیں؟',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'اکاؤنٹ بنانے کے لیے مواقع کی ضرورت ہے.\n مہربانی کر کے ایک نیا اکاؤنٹ بنائیں یا کوئی پہلے سے بنا ہوا اکاؤنٹ کا انتخاب کریں.',
    'NTC_REMOVE_CONFIRMATION' => 'اس ماجرے میں کیا اب واقعی اس رابطے کو مٹانا چاہتے ہیں?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'ممکنہ گاہک',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'مواقعے',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'دستاویزات',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'پرائمری ایڈریس پر کاپی کریں',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'دوسرے ایڈریس پر کاپی کریں',

    'LBL_CASES_SUBPANEL_TITLE' => 'معاملے',
    'LBL_BUGS_SUBPANEL_TITLE' => 'مسئلے',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'منصوبے',
    'LBL_PROJECTS_RESOURCES' => 'پراجیکٹ وسائل',
    'LBL_CAMPAIGNS' => 'مہمات',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'مہمات',
    'LBL_LIST_CITY' => 'شہر',
    'LBL_LIST_STATE' => 'ریاست',
    'LBL_HOMEPAGE_TITLE' => 'میرے رابطے',
    'LBL_OPPORTUNITIES' => 'مواقعے',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'رابطے',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'منصوبے',
    'LNK_IMPORT_CONTACTS' => 'رابطہ درآمد کریں',

    // SNIP
    'LBL_USER_SYNC' => 'صارف کے مطابق',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'تقریبات',

    'LBL_AOP_CASE_UPDATES' => 'کیس کی تازہ کاری',
    'LBL_CREATE_PORTAL_USER' => 'پورٹل صارف بنائیں',
    'LBL_ENABLE_PORTAL_USER' => 'پورٹل صارف کو فعال کریں',
    'LBL_DISABLE_PORTAL_USER' => 'پورٹل صارف کو غیر فعال کریں',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'پورٹل صارف بنانے میں ناکام',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'پورٹل صارف کو فعال کرنے میں ناکام',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'پورٹل صارف کو غیر فعال کرنے میں ناکام',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'پورٹل صارف تشکیل دیا',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'فعال پورٹل صارف',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'معذور پورٹل صارف',
    'LBL_NO_JOOMLA_URL' => 'کوئی پورٹل یو آر ایل مخصوص نہیں ہے',
    'LBL_PORTAL_USER_TYPE' => 'پورٹل صارف کی قسم',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'منجمد کھاتہ',
    'LBL_JOOMLA_ACCOUNT_ID' => 'جملہ اکاؤنٹ کی شناخت',

    'LBL_AOS_CONTRACTS' => 'معاہدے',
    'LBL_AOS_INVOICES' => 'تِجارتی سامان کی فہرِست',
    'LBL_AOS_QUOTES' => 'حوالہ جات',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'پروجیکٹ عنوان سے پروجیکٹ رابطے',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'حیثیت مدعو کریں',
);
