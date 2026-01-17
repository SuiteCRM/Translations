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
    'ERR_DELETE_RECORD' => 'اکاؤنٹ ختم کرنے کے لئے ایک ریکارڈ نمبر مخصوص ہونا ضروری ہے.',
    'LBL_ACCOUNT_NAME' => 'کمپنی کا نام:',
    'LBL_ACCOUNT' => 'کمپنی:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_ADDRESS_INFORMATION' => 'پتہ کے معلومات',
    'LBL_ANNUAL_REVENUE' => 'سالانہ آمدنی:',
    'LBL_ANY_ADDRESS' => 'کوئی بھی پتہ:',
    'LBL_ANY_EMAIL' => 'کوئی بھی ای میل:',
    'LBL_EMAIL_NON_PRIMARY' => 'غیر پرائمری ای میل',
    'LBL_ANY_PHONE' => 'کوئی بھی فون:',
    'LBL_ASSIGNED_TO_NAME' => 'صارف:',
    'LBL_RATING' => 'درجہ بندی',
    'LBL_ASSIGNED_TO' => 'مقرر کردہ سے:',
    'LBL_ASSIGNED_USER' => 'مقرر کردہ سے:',
    'LBL_ASSIGNED_TO_ID' => 'مقرر کردہ سے:',
    'LBL_BILLING_ADDRESS_CITY' => 'بلنگ شہر:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'بلنگ ملک:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'بلنگ پوسٹل کوڈ:',
    'LBL_BILLING_ADDRESS_STATE' => 'بلنگ ریاست:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'بلنگ گلی 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'بلنگ گلی 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'بلنگ گلی 4',
    'LBL_BILLING_ADDRESS_STREET' => 'بلنگ گلی:',
    'LBL_BILLING_ADDRESS' => 'بلنگ ایڈریس:',
    'LBL_ACCOUNT_INFORMATION' => 'کمپنی کی معلومات',
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
    'LBL_EMPLOYEES' => 'ملازمین:',
    'LBL_FAX' => 'فیکس:',
    'LBL_INDUSTRY' => 'صنعت:',
    'LBL_LIST_ACCOUNT_NAME' => 'اکاؤنٹ کا نام',
    'LBL_LIST_CITY' => 'شہر',
    'LBL_LIST_EMAIL_ADDRESS' => 'ای میل کا پتہ',
    'LBL_LIST_PHONE' => 'فون',
    'LBL_LIST_STATE' => 'ریاست',
    'LBL_MEMBER_OF' => 'کا رکن:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'رکن تنظیمیں',
    'LBL_NAME' => 'نام:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'دوسرے ای میل:',
    'LBL_OTHER_PHONE' => 'دیگر فون:',
    'LBL_OWNERSHIP' => 'ملکیت:',
    'LBL_PARENT_ACCOUNT_ID' => 'پیرنٹ اکاؤنٹ کی شناخت',
    'LBL_PHONE_ALT' => 'متبادل فون:',
    'LBL_PHONE_FAX' => 'فون فیکس:',
    'LBL_PHONE_OFFICE' => 'آفس کا فون:',
    'LBL_PHONE' => 'فون:',
    'LBL_EMAIL_ADDRESS' => 'ای میل کا پتہ',
    'LBL_EMAIL_ADDRESSES' => 'ای میل ایڈریس(ز)',
    'LBL_POSTAL_CODE' => 'پوسٹل کوڈ:',
    'LBL_SAVE_ACCOUNT' => 'اکاؤنٹ محفوظ کریں',
    'LBL_SHIPPING_ADDRESS_CITY' => 'شپنگ شہر:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'شپنگ ملک:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'شپنگ پوسٹل کوڈ:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'شپنگ ریاست:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'شپنگ گلی نمبر 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'شپنگ گلی نمبر 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'شپنگ گلی نمبر 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'شپنگ گلی:',
    'LBL_SHIPPING_ADDRESS' => 'شپنگ کا پتہ:',

    'LBL_STATE' => 'State:',
    'LBL_TICKER_SYMBOL' => 'ٹکر کی علامت:',
    'LBL_TYPE' => 'قسم:',
    'LBL_WEBSITE' => 'ویب سائٹ:',

    'LNK_ACCOUNT_LIST' => 'کهاتے',
    'LNK_NEW_ACCOUNT' => 'اکاؤنٹ بنا لیجیے',

    'MSG_DUPLICATE' => 'اکاؤنٹ ریکارڈ آپ نے جو بنایا ہے ہوسکتا ہے شاید ایک ہم شکل اکاؤنٹ کا ریکارڈ ہے جو پہلے ہی موجود ہے. اسی طرح کے نام ظاہر کرنے والے اکاؤنٹ ریکارڈ ذیل میں درج ہیں.<br> نیا اکاؤنٹ بنانے کے لئے اکاؤنٹ بنائیں پر کلک کریں، یا نیچے درج ذیل موجودہ اکاؤنٹ کو منتخب کیجیے.',
    'MSG_SHOW_DUPLICATES' => 'اکاؤنٹ ریکارڈ آپ نے جو بنایا ہے ہوسکتا ہے شاید ایک ہم شکل اکاؤنٹ کا ریکارڈ ہے جو پہلے ہی موجود ہے. اسی طرح کے نام ظاہر کرنے والے اکاؤنٹ ریکارڈ ذیل میں درج ہیں.<br> اس نئے اکاؤنٹ کو جاری رکھنے کے لئے محفوظ کریں پر کلک کیجیے، یا اکاؤنٹ بناۂے بغیر ماڈیول پر واپس جانے کیلئے منسوخ کریں پر کلک کیجیے.',

    'NTC_DELETE_CONFIRMATION' => 'کیا آپ واقعی یہ ریکارڈ ختم کرنا چاہتے ہیں؟',

    'LBL_EDIT_BUTTON' => 'ترمیم کیجئے  ',
    'LBL_REMOVE' => 'نکال دیں',

);
