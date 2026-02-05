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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'لیڈ کو حذف کرنے کے لئے ایک ریکارڈ نمبر مخصوص ہونا ضروری ہے.',
    'LBL_ACCOUNT_DESCRIPTION' => 'اکاؤنٹ کی تفصیل',
    'LBL_ACCOUNT_ID' => 'اکاؤنٹ کی شناخت',
    'LBL_ACCOUNT_NAME' => 'اکاؤنٹ کا نام:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_ADDRESS_INFORMATION' => 'ایڈریس کی معلومات',
    'LBL_ALT_ADDRESS_CITY' => 'الٹ شہر کا پتہ',
    'LBL_ALT_ADDRESS_COUNTRY' => 'الٹ ملک کا پتہ',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'الٹ ایڈریس پوسٹل کوڈ',
    'LBL_ALT_ADDRESS_STATE' => 'الٹ ایڈریس ریاست',
    'LBL_ALT_ADDRESS_STREET_2' => 'الٹ پتہ گلی نمبر 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'الٹ پتہ گلی نمبر 3',
    'LBL_ALT_ADDRESS_STREET' => 'الٹ پتہ گلی نمبر',
    'LBL_ALTERNATE_ADDRESS' => 'کوئی پتہ یہ دوسرا پتہ:',
    'LBL_ALT_ADDRESS' => 'کوئی پتہ یہ دوسرا پتہ:',
    'LBL_ANY_ADDRESS' => 'کوئی بھی پتہ:',
    'LBL_ANY_EMAIL' => 'کوئی بھی ای میل:',
    'LBL_ANY_PHONE' => 'کوئی بھی فون:',
    'LBL_ASSIGNED_TO_NAME' => 'کے لئے تفویض',
    'LBL_ASSIGNED_TO_ID' => 'نامزد کردہ صارف:',
    'LBL_CITY' => 'شہر:',
    'LBL_CONTACT_ID' => 'رابطے کی شناخت',
    'LBL_CONTACT_INFORMATION' => 'جائزہ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'لیڈ کا نام:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'قیادت کے موقع:',
    'LBL_CONTACT_ROLE' => 'کردار:',
    'LBL_CONTACT' => 'قیادت:',
    'LBL_CONVERTED_ACCOUNT' => 'تبدیل شدہ اکاؤنٹ:',
    'LBL_CONVERTED_CONTACT' => 'تبدیل شدہ رابطہ:',
    'LBL_CONVERTED_OPP' => 'تبدیل شدہ مواقع:',
    'LBL_CONVERTED' => 'تبدیل',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'لیڈ تبدیل کریں',
    'LBL_CONVERTLEAD' => 'لیڈ تبدیل کریں',
    'LBL_CONVERTLEAD_WARNING' => 'انتباہ: لیڈ کی حیثیت آپ تبدیل کرنے کے بارے میں ہیں "تبدیل". رابطہ اور / یا اکاؤنٹس ریکارڈ پہلے ہی لیڈ سے پیدا ہوسکتے ہیں. اگر آپ لیڈ کو تبدیل کرنے کے لئے جاری رکھنا چاہتے ہیں تو محفوظ کریں پر کلک کریں. اسے بغیر بغاوت کے لے جانے کے لے جانے کے لئے، منسوخ کریں پر کلک کریں.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' ممکنہ رابطہ: ',
    'LBL_COUNTRY' => 'ملک:',
    'LBL_CREATED_NEW' => 'ایک نیا بنایا',
    'LBL_CREATED_ACCOUNT' => 'ایک نیا اکاؤنٹ بنائیں',
    'LBL_CREATED_CALL' => 'ایک نئی کال بنائیں',
    'LBL_CREATED_CONTACT' => 'ایک نیا رابطہ بنایا',
    'LBL_CREATED_MEETING' => 'ایک نئی مجلس بنائیں',
    'LBL_CREATED_OPPORTUNITY' => 'ایک نیا موقع',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ممکنہ گاہک',
    'LBL_DEPARTMENT' => 'شعبہ:',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LBL_DO_NOT_CALL' => 'کال مت کیجیے:',
    'LBL_DUPLICATE' => 'ایک جیسی قیادت',
    'LBL_EMAIL_ADDRESS' => 'ای میل اڈریس:',
    'LBL_EMAIL_OPT_OUT' => 'ای میل او پی ٹی آؤٹ:',
    'LBL_EXISTING_ACCOUNT' => 'ایک موجودہ اکاؤنٹ استعمال کرے',
    'LBL_EXISTING_CONTACT' => 'ایک موجودہ رابطہ استعمال کرے',
    'LBL_EXISTING_OPPORTUNITY' => 'ایک موجودہ موقع استعمال کیا',
    'LBL_FAX_PHONE' => 'فیکس:',
    'LBL_FIRST_NAME' => 'پہلا نام:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ',
    'LBL_HOME_PHONE' => 'گھر کا فون:',
    'LBL_IMPORT_VCARD' => 'Vcard درآمد کرے',
    'LBL_VCARD' => 'وکرد',
    'LBL_IMPORT_VCARDTEXT' => 'آپ کے فائل کے نظام سے ایک وی کارڈ درآمد کرکے خود کار طریقے سے ایک نیا لیڈر بنائیں.',
    'LBL_INVALID_EMAIL' => 'غلط ای میل:',
    'LBL_INVITEE' => 'براہ راست شکایت',
    'LBL_LAST_NAME' => 'آخری نام:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'قیادت ماخذ کی تفصیل:',
    'LBL_LEAD_SOURCE' => 'لیڈ ماخذ:',
    'LBL_LIST_ACCEPT_STATUS' => 'حیثیت قبول کریں',
    'LBL_LIST_ACCOUNT_NAME' => 'اکاؤنٹ کا نام',
    'LBL_LIST_CONTACT_NAME' => 'قیادت کا نام',
    'LBL_LIST_CONTACT_ROLE' => 'کردار',
    'LBL_LIST_DATE_ENTERED' => 'تاریخ بنائی گئی ہے',
    'LBL_LIST_EMAIL_ADDRESS' => 'ای میل',
    'LBL_LIST_FIRST_NAME' => 'پہلا نام',
    'LBL_LIST_FORM_TITLE' => 'قیادت کی فہرست',
    'LBL_LIST_LAST_NAME' => 'آخری نام',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'قیادت ماخذ کی تفصیل',
    'LBL_LIST_LEAD_SOURCE' => 'قیادت ماخذ',
    'LBL_LIST_MY_LEADS' => 'میری قیادت',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_PHONE' => 'آفس کا فون',
    'LBL_LIST_REFERED_BY' => 'حوالہ دیا',
    'LBL_LIST_STATUS' => 'حیثیت',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'موبائل:',
    'LBL_MODULE_NAME' => 'ممکنہ گاہک',
    'LBL_MODULE_TITLE' => 'قیادت: ہوم',
    'LBL_NAME' => 'نام:',
    'LBL_NEW_FORM_TITLE' => 'نئی قیادت',
    'LBL_OFFICE_PHONE' => 'آفس کا فون:',
    'LBL_OPP_NAME' => 'موقع کا نام:',
    'LBL_OPPORTUNITY_AMOUNT' => 'رقم کا موقع:',
    'LBL_OPPORTUNITY_ID' => 'موقع کی شناخت',
    'LBL_OPPORTUNITY_NAME' => 'موقع کا نام:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'دوسرے ای میل:',
    'LBL_OTHER_PHONE' => 'دیگر فون:',
    'LBL_PHONE' => 'فون:',
    'LBL_PORTAL_APP' => 'پورٹل درخواست',
    'LBL_PORTAL_INFORMATION' => 'پورٹل کی معلومات',
    'LBL_PORTAL_NAME' => 'پورٹل کا نام:',
    'LBL_POSTAL_CODE' => 'پوسٹل کوڈ:',
    'LBL_STREET' => 'سڑک راستہ گلی',
    'LBL_PRIMARY_ADDRESS_CITY' => 'ابتدائی شہر کا پتہ',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ابتدائی ملک کا پتہ',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'پرائمری ایڈریس پوسٹل کوڈ',
    'LBL_PRIMARY_ADDRESS_STATE' => 'پرائمری ایڈریس ریاست',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'پرائمری ایڈریس گلی نمبر 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'پرائمری ایڈریس گلی نمبر 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'پرائمری ایڈریس گلی',
    'LBL_PRIMARY_ADDRESS' => 'ابتدائی پتا:',
    'LBL_REFERED_BY' => 'حوالہ کردہ:',
    'LBL_REPORTS_TO_ID' => 'شناخت کو رپورٹ دیں',
    'LBL_REPORTS_TO' => 'رپورٹوں کو:',
    'LBL_SALUTATION' => 'سلامتی',
    'LBL_MODIFIED' => 'کی طرف سے ترمیم',
    'LBL_CREATED' => 'کی طرف سے بنایا گیا',
    'LBL_SEARCH_FORM_TITLE' => 'قیادت کی تلاش',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'چیک قیادت منتخب کریں',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'چیک قیادت منتخب کریں',
    'LBL_STATE' => 'ریاست یا علاقہ:',
    'LBL_STATUS_DESCRIPTION' => 'حیثیت کی تفصیل:',
    'LBL_STATUS' => 'حیثیت:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'وی کارڈ سے قیادت بنائیں',
    'LNK_LEAD_LIST' => 'قیادت دیکھیں',
    'LNK_NEW_ACCOUNT' => 'اکاؤنٹ بنائیں',
    'LNK_NEW_APPOINTMENT' => 'جگہ منصب کرنا',
    'LNK_NEW_CONTACT' => 'رابطہ بنانا',
    'LNK_NEW_LEAD' => 'قیادت بنیں',
    'LNK_NEW_NOTE' => 'رابطہ رکھنا',
    'LNK_NEW_TASK' => 'ٹاسک بنائیں',
    'LNK_NEW_CASE' => 'کیس بنائیں',
    'LNK_NEW_CALL' => 'لاگ کال',
    'LNK_NEW_MEETING' => 'تَرتيب کار اجلاس',
    'LNK_NEW_OPPORTUNITY' => 'موزوں وقت پیدا کرنا',
    'LNK_SELECT_ACCOUNTS' => ' <b> یا </ b> اکاؤنٹ کا انتخاب کریں',
    'LNK_SELECT_CONTACTS' => ' <b> یا </ b> رابطہ منتخب کریں',
    'NTC_DELETE_CONFIRMATION' => 'کیا آپ واقعی یہ ریکارڈ ختم کرنا چاہتے ہیں؟',
    'NTC_REMOVE_CONFIRMATION' => 'کیا آپ واقعی اس معاملے سے اس لیڈر کو دور کرنا چاہتے ہیں؟',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'مہمات',
    'LBL_CAMPAIGN' => 'مہم:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'مقرر کردہ صارف',
    'LBL_PROSPECT_LIST' => 'متوقع فہرست',
    'LBL_CAMPAIGN_LEAD' => 'مہمات',
    'LBL_BIRTHDATE' => 'تاریخ پیدائش:',
    'LBL_ASSISTANT_PHONE' => 'مددگار کا فون',
    'LBL_ASSISTANT' => 'مددگار',
    'LBL_CREATED_USER' => 'صارف بنائیں',
    'LBL_MODIFIED_USER' => 'صارف میں کچھ تبدیلیاں کرنا',
    'LBL_CAMPAIGNS' => 'مہمات',
    'LBL_CONVERT_MODULE_NAME' => 'ماڈیول',
    'LBL_CONVERT_REQUIRED' => 'ضرورت یا طالب',
    'LBL_CONVERT_SELECT' => 'انتخاب کی اجازت دیں',
    'LBL_CONVERT_COPY' => 'کاپی ڈیٹا',
    'LBL_CONVERT_EDIT' => 'ردوبدل',
    'LBL_CONVERT_DELETE' => 'ختم کریں',
    'LBL_CONVERT_ADD_MODULE' => 'ماڈیول شامل کریں',
    'LBL_CREATE' => 'بنانا',
    'LBL_SELECT' => ' <b> یا </ b> منتخب کریں',
    'LBL_WEBSITE' => 'ویب سائٹ',
    'LNK_IMPORT_LEADS' => 'قیادت درآمد کریں',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'ایک نیا ریکارڈ بنانے کے لئے ماڈیول.',
    'LBL_REQUIRED_TIP' => 'لیڈر کو تبدیل کیا جاسکتا ہے اس سے پہلے ضروری ماڈیولز تخلیق یا منتخب کیے جائیں.',
    'LBL_COPY_TIP' => 'اگر جانچ پڑتال کی گئی ہے تو، نو تشکیل شدہ ریکارڈوں میں لیڈ کے شعبوں کو اسی نام کے ساتھ فیلڈ میں کاپی کیا جائے گا.',
    'LBL_SELECTION_TIP' => 'رابطوں میں ایک متعلقہ فیلڈ کے ساتھ ماڈیولز تبدیل لیڈ عمل کے دوران پیدا ہونے کے بجائے منتخب کیا جا سکتا ہے.',
    'LBL_EDIT_TIP' => 'اس ماڈیول کے لئے تبدیلی کی ترتیب میں ترمیم کریں.',
    'LBL_DELETE_TIP' => 'اس ماڈیول کو تبدیل کرنے کی ترتیب سے ہٹا دیں.',

    'LBL_ACTIVITIES_MOVE' => 'سرگرمیاں منتقل کریں',
    'LBL_ACTIVITIES_COPY' => 'سرگرمیاں کاپی کریں',
    'LBL_ACTIVITIES_MOVE_HELP' => "لیڈ کی سرگرمیوں کو منتقل کرنے کے لئے ریکارڈ منتخب کریں. منتخب کردہ ریکارڈز میں کام، کال، ملاقاتیں، نوٹس اور ای میل منتقل کیے جائیں گے.",
    'LBL_ACTIVITIES_COPY_HELP' => "ریکارڈ (ے) کا انتخاب کریں جس کے لئے لی کی سرگرمیوں کی کاپیاں بنانا ہے. نئے ٹاسکس، کالز، ملاقاتیں اور نوٹس ہر منتخب کردہ ریکارڈز کے لئے تیار کیے جائیں گے. ای میلز منتخب کردہ ریکارڈ (s) سے متعلق ہوں گے.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'مہم کی شناخت',
    'LBL_EDITLAYOUT' => 'لے آؤٹ میں ترمیم کریں' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'تاریخ درج کرنا' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'لدائي قسط ادائي ميں اضافہ بارکاري' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'ردوبدل' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'تقریبات',
);
