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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'دستاویزات',
    // Dashlet Categories
    'LBL_CHARTS' => 'چارٹس',
    'LBL_DEFAULT' => 'مناظرے',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'اکاؤنٹ حذف کرنے کے لئے آپ کو ایک ریکارڈ نمبر کی وضاحت کرنا ضروری ہے.',
    'LBL_ACCOUNT_INFORMATION' => 'جائزہ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'اکاؤنٹ کا نام:',
    'LBL_ACCOUNT' => 'اکاؤنٹ:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_ADDRESS_INFORMATION' => 'پتہ کے معلومات',
    'LBL_ANNUAL_REVENUE' => 'سالانہ آمدنی:',
    'LBL_ANY_ADDRESS' => 'کوئی بھی پتہ:',
    'LBL_ANY_EMAIL' => 'کوئی بھی ای میل:',
    'LBL_ANY_PHONE' => 'کوئی بھی فون:',
    'LBL_ASSIGNED_TO_NAME' => 'مقرر کردہ سے:',
    'LBL_ASSIGNED_TO_ID' => 'نامزد کردہ صارف:',
    'LBL_BILLING_ADDRESS_CITY' => 'بلنگ شہر:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'بلنگ ملک:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'بلنگ پوسٹل کوڈ:',
    'LBL_BILLING_ADDRESS_STATE' => 'بلنگ ریاست:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'بلنگ گلی 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'بلنگ گلی 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'بلنگ گلی 4',
    'LBL_BILLING_ADDRESS_STREET' => 'بلنگ گلی:',
    'LBL_BILLING_ADDRESS' => 'بلنگ ایڈریس:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'مسئلے',
    'LBL_CAMPAIGN_ID' => 'مہم کی شناخت',
    'LBL_CASES_SUBPANEL_TITLE' => 'معاملے',
    'LBL_CITY' => 'شہر:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'رابطے',
    'LBL_COUNTRY' => 'ملک:',
    'LBL_DATE_ENTERED' => 'تاریخ کی تشکیل:',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'کهاتے',
    'LBL_DESCRIPTION_INFORMATION' => 'تفصیل کی معلومات',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LBL_DUPLICATE' => 'ممکنی ایک جیسا اکاؤنٹ',
    'LBL_EMAIL' => 'ای میل اڈریس:',
    'LBL_EMAIL_OPT_OUT' => 'ای میل او پی ٹی آؤٹ:',
    'LBL_EMAIL_ADDRESSES' => 'ای میل کا پتہ',
    'LBL_EMPLOYEES' => 'ملازمین:',
    'LBL_FAX' => 'فیکس:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ',
    'LBL_HOMEPAGE_TITLE' => 'میرے اکاؤنٹس',
    'LBL_INDUSTRY' => 'صنعت:',
    'LBL_INVALID_EMAIL' => 'غلط ای میل:',
    'LBL_INVITEE' => 'رابطے',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ممکنہ گاہک',
    'LBL_LIST_ACCOUNT_NAME' => 'نام',
    'LBL_LIST_CITY' => 'شہر',
    'LBL_LIST_CONTACT_NAME' => 'رابطے کا نام',
    'LBL_LIST_EMAIL_ADDRESS' => 'ای میل کا پتہ',
    'LBL_LIST_FORM_TITLE' => 'اکاؤنٹ کی فہرست',
    'LBL_LIST_PHONE' => 'فون',
    'LBL_LIST_STATE' => 'ریاست',
    'LBL_MEMBER_OF' => 'کا رکن:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'رکن تنظیمیں',
    'LBL_MODULE_NAME' => 'کهاتے',
    'LBL_MODULE_TITLE' => 'اکاؤنٹس: ہوم',
    'LBL_MODULE_ID' => 'کهاتے',
    'LBL_NAME' => 'نام:',
    'LBL_NEW_FORM_TITLE' => 'نیا اکاؤنٹ',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'مواقعے',
    'LBL_OTHER_EMAIL_ADDRESS' => 'دوسرے ای میل:',
    'LBL_OTHER_PHONE' => 'دیگر فون:',
    'LBL_OWNERSHIP' => 'ملکیت:',
    'LBL_PARENT_ACCOUNT_ID' => 'پیرنٹ اکاؤنٹ کی شناخت',
    'LBL_PHONE_ALT' => 'متبادل فون:',
    'LBL_PHONE_FAX' => 'فون فیکس:',
    'LBL_PHONE_OFFICE' => 'آفس کا فون:',
    'LBL_PHONE' => 'فون:',
    'LBL_POSTAL_CODE' => 'پوسٹل کوڈ:',
    'LBL_PRODUCTS_TITLE' => 'مصنوعات',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'منصوبے',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'رابطوں کو کاپی کیجئے',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'نقل...',
    'LBL_RATING' => 'درجہ بندی:',
    'LBL_SAVE_ACCOUNT' => 'اکاؤنٹ محفوظ کریں',
    'LBL_SEARCH_FORM_TITLE' => 'اکاؤنٹ تلاش کریں',
    'LBL_SHIPPING_ADDRESS_CITY' => 'شپنگ شہر:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'شپنگ ملک:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'شپنگ پوسٹل کوڈ:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'شپنگ ریاست:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'شپنگ گلی نمبر 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'شپنگ گلی نمبر 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'شپنگ گلی نمبر 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'شپنگ گلی:',
    'LBL_SHIPPING_ADDRESS' => 'شپنگ کا پتہ:',
    'LBL_SIC_CODE' => 'ایس آۂی سی کوڈ:',
    'LBL_STATE' => 'ریاست یا علاقہ:',
    'LBL_TICKER_SYMBOL' => 'ٹکر کی علامت:',
    'LBL_TYPE' => 'قسم:',
    'LBL_WEBSITE' => 'ویب سائٹ:',
    'LBL_CAMPAIGNS' => 'مہمات',
    'LNK_ACCOUNT_LIST' => 'اکاؤنٹس دیکھیں',
    'LNK_NEW_ACCOUNT' => 'اکاؤنٹ بنا لیجیے',
    'LNK_IMPORT_ACCOUNTS' => 'اکاؤنٹس درآمد کیجیے',
    'MSG_DUPLICATE' => 'اکاؤنٹ ریکارڈ آپ نے جو بنایا ہے ہوسکتا ہے شاید ایک ہم شکل اکاؤنٹ کا ریکارڈ ہے جو پہلے ہی موجود ہے. اسی طرح کے نام ظاہر کرنے والے اکاؤنٹ ریکارڈ ذیل میں درج ہیں.<br> نیا اکاؤنٹ بنانے کے لئے اکاؤنٹ بنائیں پر کلک کریں، یا نیچے درج ذیل موجودہ اکاؤنٹ کو منتخب کیجیے.',
    'MSG_SHOW_DUPLICATES' => 'اکاؤنٹ ریکارڈ آپ نے جو بنایا ہے ہوسکتا ہے شاید ایک ہم شکل اکاؤنٹ کا ریکارڈ ہے جو پہلے ہی موجود ہے. اسی طرح کے نام ظاہر کرنے والے اکاؤنٹ ریکارڈ ذیل میں درج ہیں.<br> اس نئے اکاؤنٹ کو جاری رکھنے کے لئے محفوظ کریں پر کلک کیجیے، یا اکاؤنٹ بناۂے بغیر ماڈیول پر واپس جانے کیلئے منسوخ کریں پر کلک کیجیے.',
    'LBL_ASSIGNED_USER_NAME' => 'مقرر کردہ سے:',
    'LBL_PROSPECT_LIST' => 'متوقع فہرست',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'کهاتے',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'منصوبے',
    //For export labels
    'LBL_PARENT_ID' => 'جدی شناخت',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'مصنوعات اور خدمات خریدیں',

    'LBL_AOS_CONTRACTS' => 'معاہدے',
    'LBL_AOS_INVOICES' => 'تِجارتی سامان کی فہرِست',
    'LBL_AOS_QUOTES' => 'حوالہ جات',
    'LBL_LIST_WEBSITE' => 'website',
);
