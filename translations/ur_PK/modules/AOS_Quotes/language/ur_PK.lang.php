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
    'LBL_ASSIGNED_TO_NAME' => 'کے لئے تفویض',
    'LBL_ID' => 'شناخت',
    'LBL_DATE_ENTERED' => 'تاریخ بنائی گئی ہے',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_MODIFIED' => 'کی طرف سے ترمیم',
    'LBL_MODIFIED_NAME' => 'نام کی طرف سے ترمیم',
    'LBL_CREATED' => 'کی طرف سے بنایا گیا',
    'LBL_DESCRIPTION' => 'تفصیل',
    'LBL_DELETED' => 'ختم کر دیا گیا',
    'LBL_NAME' => 'عنوان',
    'LBL_CREATED_USER' => 'صارف کی طرف سے پیدا شدہ',
    'LBL_MODIFIED_USER' => 'صارف کی طرف سے ترمیم',
    'ERR_DELETE_RECORD' => 'اکاؤنٹ ختم کرنے کے لئے ایک ریکارڈ نمبر مخصوص ہونا ضروری ہے.',
    'LBL_ACCOUNT_NAME' => 'عنوان',
    'LBL_ACCOUNT' => 'کمپنی:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_ADDRESS_INFORMATION' => 'ایڈریس کی معلومات',
    'LBL_ANNUAL_REVENUE' => 'سالانہ آمدنی:',
    'LBL_ANY_ADDRESS' => 'کوئی بھی پتہ:',
    'LBL_ANY_EMAIL' => 'کوئی بھی ای میل:',
    'LBL_ANY_PHONE' => 'کوئی بھی فون:',
    'LBL_RATING' => 'درجہ بندی',
    'LBL_ASSIGNED_USER' => 'صارف',
    'LBL_BILLING_ADDRESS_CITY' => 'بلنگ شہر:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'بلنگ ملک:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'بلنگ پوسٹل کوڈ:',
    'LBL_BILLING_ADDRESS_STATE' => 'بلنگ اسٹیٹ:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'بلنگ گلی 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'بلنگ گلی 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'بلنگ گلی 4',
    'LBL_BILLING_ADDRESS_STREET' => 'بلنگ گلی:',
    'LBL_BILLING_ADDRESS' => 'بلنگ ایڈریس:',
    'LBL_ACCOUNT_INFORMATION' => 'جائزہ',
    'LBL_CITY' => 'شہر:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'رابطے',
    'LBL_COUNTRY' => 'ملک:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'کهاتے',
    'LBL_DUPLICATE' => 'ممکنی ایک جیسا اکاؤنٹ',
    'LBL_EMAIL' => 'ای میل:',
    'LBL_EMPLOYEES' => 'ملازمین:',
    'LBL_FAX' => 'فیکس:',
    'LBL_INDUSTRY' => 'صنعت:',
    'LBL_LIST_ACCOUNT_NAME' => 'اکاؤنٹ کا نام',
    'LBL_LIST_CITY' => 'شہر',
    'LBL_LIST_EMAIL_ADDRESS' => 'ای میل پتہ',
    'LBL_LIST_PHONE' => 'فون',
    'LBL_LIST_STATE' => 'ریاست',
    'LBL_MEMBER_OF' => 'کا رکن:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'رکن تنظیمیں',
    'LBL_OTHER_EMAIL_ADDRESS' => 'دوسرے ای میل:',
    'LBL_OTHER_PHONE' => 'دیگر فون:',
    'LBL_OWNERSHIP' => 'ملکیت:',
    'LBL_PARENT_ACCOUNT_ID' => 'پیرنٹ اکاؤنٹ کی شناخت',
    'LBL_PHONE_ALT' => 'متبادل فون:',
    'LBL_PHONE_FAX' => 'فون فیکس:',
    'LBL_PHONE_OFFICE' => 'آفس کا فون:',
    'LBL_PHONE' => 'فون:',
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
    'LBL_STATE' => 'ریاست یا علاقہ:',
    'LBL_TICKER_SYMBOL' => 'ٹکر کی علامت:',
    'LBL_TYPE' => 'قسم:',
    'LBL_WEBSITE' => 'ویب سائٹ:',
    'LNK_ACCOUNT_LIST' => 'کهاتے',
    'LNK_NEW_ACCOUNT' => 'اکاؤنٹ بنائیں',
    'MSG_DUPLICATE' => 'اس اکاؤنٹ کی تخلیق ممکنہ طور پر ایک ڈپلیکیٹ اکاؤنٹ بن سکتا ہے. آپ ذیل میں درج ذیل فہرست سے کسی اکاؤنٹ کا انتخاب کرسکتے ہیں یا آپ پہلے درج شدہ ڈیٹا کے ساتھ ایک نیا اکاؤنٹ بنانے کے لئے محفوظ پر کلک کر سکتے ہیں.',
    'MSG_SHOW_DUPLICATES' => 'اس اکاؤنٹ کی تخلیق ممکنہ طور پر ایک ڈپلیکیٹ اکاؤنٹ بن سکتا ہے. آپ یا تو پہلے ہی درج کردہ ڈیٹا کے ساتھ اس نئے اکاؤنٹ کو جاری رکھنے کیلئے محفوظ کریں پر کلک کریں یا منسوخ کر سکتے ہیں.',
    'NTC_DELETE_CONFIRMATION' => 'کیا آپ واقعی یہ ریکارڈ ختم کرنا چاہتے ہیں؟',
    'LBL_LIST_FORM_TITLE' => 'حوالہ جات کی فہرست',
    'LBL_MODULE_NAME' => 'حوالہ جات',
    'LBL_MODULE_TITLE' => 'حوالہ جات: گھر',
    'LBL_HOMEPAGE_TITLE' => 'میراحوالاجات',
    'LNK_NEW_RECORD' => 'اقتباس بنائیں',
    'LNK_LIST' => 'اقتباس دیکھیں',
    'LBL_SEARCH_FORM_TITLE' => 'اقتباس ڈھونڈیں',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ دیکھیں',
    'LBL_NEW_FORM_TITLE' => 'نیا اقتباس',
    'LBL_TERMS_C' => 'وقفه',
    'LBL_APPROVAL_ISSUE' => 'منظوری کے مسائل',
    'LBL_APPROVAL_STATUS' => 'منظوری کی حیثیت',
    'LBL_BILLING_ACCOUNT' => 'کهاتے',
    'LBL_BILLING_CONTACT' => 'رابطہ',
    'LBL_EXPIRATION' => 'ابھی تک جائز',
    'LBL_QUOTE_NUMBER' => 'نمبر کو طرخ',
    'LBL_OPPORTUNITY' => 'موقع',
    'LBL_TEMPLATE_DDOWN_C' => 'اقتباس سانچہ',
    'LBL_STAGE' => 'اقتباس کا مرحلہ',
    'LBL_TERM' => 'ادائیگی کی شرائط',
    'LBL_SUBTOTAL_AMOUNT' => 'ذیلی کل',
    'LBL_DISCOUNT_AMOUNT' => 'ڈسکاؤنٹ',
    'LBL_TAX_AMOUNT' => 'ٹیکس',
    'LBL_SHIPPING_AMOUNT' => 'شپنگ',
    'LBL_TOTAL_AMT' => 'حاصل جمع',
    'VALUE' => 'عنوان',
    'LBL_EMAIL_ADDRESSES' => 'ای میل ایڈریس',
    'LBL_LINE_ITEMS' => 'لائن اشیاء',
    'LBL_GRAND_TOTAL' => 'مجموعی عدد',
    'LBL_INVOICE_STATUS' => 'انوائس کی حیثیت',
    'LBL_PRODUCT_QUANITY' => 'مقدار',
    'LBL_PRODUCT_NAME' => 'مصنوعات',
    'LBL_PART_NUMBER' => 'حصے کا نمبر',
    'LBL_PRODUCT_NOTE' => 'خط',
    'LBL_PRODUCT_DESCRIPTION' => 'تفصیل',
    'LBL_LIST_PRICE' => 'فہرست',
    'LBL_DISCOUNT_AMT' => 'ڈسکاؤنٹ',
    'LBL_UNIT_PRICE' => 'فروخت کی قیمت',
    'LBL_TOTAL_PRICE' => 'حاصل جمع',
    'LBL_VAT' => 'ٹیکس', // VAT
    'LBL_VAT_AMT' => 'ٹیکس کی رقم', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'پروڈکٹ لائن شامل کریں',
    'LBL_SERVICE_NAME' => 'خدمت',
    'LBL_SERVICE_LIST_PRICE' => 'فہرست',
    'LBL_SERVICE_PRICE' => 'فروخت کی قیمت',
    'LBL_SERVICE_DISCOUNT' => 'ڈسکاؤنٹ',
    'LBL_ADD_SERVICE_LINE' => 'سروس لائن شامل ',
    'LBL_REMOVE_PRODUCT_LINE' => 'ہٹا دیں',
    'LBL_CONVERT_TO_INVOICE' => 'انوائس میں تبدیل',
    'LBL_PRINT_AS_PDF' => 'پرنٹ اس پی ڈی ایف',
    'LBL_EMAIL_QUOTE' => 'ای میل کوٹیشن',
    'LBL_CREATE_CONTRACT' => 'ٹھیک بنانا',
    'LBL_LIST_NUM' => 'نیوم',
    'LBL_PDF_NAME' => 'حوصلہ قطار',
    'LBL_EMAIL_NAME' => 'کے لئے اقتباس',
    'LBL_QUOTE_DATE' => 'کوٹیشن کی تاریخ',
    'LBL_NO_TEMPLATE' => 'غلطی \nکا سانچہ تلاش ہوتا ہے اگر آپ نے نرخنامہ سانجھا نہیں بنایا تو پھر پی ڈی ایف سانچے میں جائیں اور اکاؤنٹ بنیں',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'ذیلی کل + ٹیکس',//pre shipping
    'LBL_EMAIL_PDF' => 'ای میل پی ڈی ایف',
    'LBL_ADD_GROUP' => 'گروپ میں جمع کرنا',
    'LBL_DELETE_GROUP' => 'گروپ مٹانا',
    'LBL_GROUP_NAME' => 'گروپ کا نام',
    'LBL_GROUP_TOTAL' => 'مکمل گروپ',
    'LBL_SHIPPING_TAX' => 'شپنگ ٹیکس',
    'LBL_SHIPPING_TAX_AMT' => 'شپنگ ٹیکس',
    'LBL_IMPORT_LINE_ITEMS' => 'لائن اشیاء درآمد کریں',
    'LBL_CREATE_OPPORTUNITY' => 'موزوں وقت پیدا کرنا',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'کرنسی کی غفلت کا گوشوارہ',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'کرنسی کی غفلت کی کٹوتی',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'کرنسی کی غفلت کا لگان مقرر کرنا',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'کرنسی کی غفلت کا جہاز مقرر کرنا',
    'LBL_TOTAL_AMT_USDOLLAR' => 'مکمل کرنسی کی غفلت',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'کرنسی کی غفلت کا جہاز لگن منتخب کرنا',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'مکمل کرنسی کی غفلت',
    'LBL_QUOTE_TO' => 'اقتباس',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'ذیلی کل + ٹیکس (ڈیفالٹ کرنسی)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'ٹھیکہ کی قطار',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'حوالہ جات: انوائس',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'لائن ایٹم گروپس',
    'LBL_AOS_PRODUCT_QUOTES' => 'مصنوعات کی قطار',
    'LBL_AOS_QUOTES_PROJECT' => 'حوالہ جات: پروجیکٹ',
);
