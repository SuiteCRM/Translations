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
    'LBL_ASSIGNED_TO_NAME' => 'احد کرنے والا منیجر',
    'LBL_CONTRACT_ACCOUNT' => 'کهاتے',
    'LBL_OPPORTUNITY' => 'موقع',
    'LBL_ID' => 'شناخت',
    'LBL_DATE_ENTERED' => 'تاریخ بنائی گئی ہے',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_MODIFIED' => 'کی طرف سے ترمیم',
    'LBL_MODIFIED_NAME' => 'نام کی طرف سے ترمیم',
    'LBL_CREATED' => 'کی طرف سے بنایا گیا',
    'LBL_DESCRIPTION' => 'تفصیل',
    'LBL_DELETED' => 'ختم کر دیا گیا',
    'LBL_NAME' => 'احد کا عنوان',
    'LBL_CREATED_USER' => 'صارف کی طرف سے پیدا شدہ',
    'LBL_MODIFIED_USER' => 'صارف کی طرف سے ترمیم',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_FORM_TITLE' => 'فہرست کا ٹھیکہ لینا',
    'LBL_MODULE_NAME' => 'معاہدے',
    'LBL_MODULE_TITLE' => 'گھر کا ٹھیکہ لینا',
    'LBL_HOMEPAGE_TITLE' => 'میرا ٹھیک',
    'LNK_NEW_RECORD' => 'ٹھیک بنانا',
    'LNK_LIST' => 'ٹھیکہ کو دیکھنا',
    'LBL_SEARCH_FORM_TITLE' => 'ٹھیکہ اک تلاش',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ دیکھیں',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_NEW_FORM_TITLE' => 'نیا ٹھیکہ',
    'LBL_CONTRACT_NAME' => 'ٹھیکہ کا نام',
    'LBL_REFERENCE_CODE ' => 'حوالے کا کوڈ ',
    'LBL_START_DATE' => 'شروع ہونے کی تاریخ',
    'LBL_END_DATE' => 'آخری تاریخ',
    'LBL_TOTAL_CONTRACT_VALUE' => 'ٹھیکے کی قیمت',
    'LBL_STATUS' => 'حیثیت',
    'LBL_CUSTOMER_SIGNED_DATE' => 'صارف تاریخ پر دستخط کریں',
    'LBL_COMPANY_SIGNED_DATE' => 'کمپنی تاریخ پر دستخط کریں',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'تجدید تریخ یا کروانے والا',
    'LBL_CONTRACT_TYPE' => 'ٹھیکہ کی قسم',
    'LBL_CONTACT' => 'رابطہ',
    'LBL_ADD_GROUP' => 'گروپ میں جمع کرنا',
    'LBL_DELETE_GROUP' => 'گروپ مٹانا',
    'LBL_GROUP_NAME' => 'گروپ کا نام',
    'LBL_GROUP_TOTAL' => 'مکمل گروپ',
    'LBL_PRODUCT_QUANITY' => 'مقدار',
    'LBL_PRODUCT_NAME' => 'مصنوعات',
    'LBL_PART_NUMBER' => 'حصے کا نمبر',
    'LBL_PRODUCT_NOTE' => 'خط',
    'LBL_PRODUCT_DESCRIPTION' => 'تفصیل',
    'LBL_LIST_PRICE' => 'فہرست',
    'LBL_DISCOUNT_AMT' => 'ڈسکاؤنٹ',
    'LBL_UNIT_PRICE' => 'فروخت کی قیمت',
    'LBL_TOTAL_PRICE' => 'حاصل جمع',
    'LBL_VAT' => 'ٹیکس',
    'LBL_VAT_AMT' => 'ٹیکس کی رقم',
    'LBL_SERVICE_NAME' => 'خدمت',
    'LBL_SERVICE_LIST_PRICE' => 'فہرست',
    'LBL_SERVICE_PRICE' => 'فروخت کی قیمت',
    'LBL_SERVICE_DISCOUNT' => 'ڈسکاؤنٹ',
    'LBL_LINE_ITEMS' => 'لائن اشیاء',
    'LBL_SUBTOTAL_AMOUNT' => 'ذیلی کل',
    'LBL_DISCOUNT_AMOUNT' => 'ڈسکاؤنٹ',
    'LBL_TAX_AMOUNT' => 'ٹیکس',
    'LBL_SHIPPING_AMOUNT' => 'شپنگ',
    'LBL_TOTAL_AMT' => 'حاصل جمع',
    'LBL_GRAND_TOTAL' => 'مجموعی عدد',
    'LBL_SHIPPING_TAX' => 'شپنگ ٹیکس',
    'LBL_SHIPPING_TAX_AMT' => 'شپنگ ٹیکس',
    'LBL_ADD_PRODUCT_LINE' => 'پروڈکٹ لائن شامل کریں',
    'LBL_ADD_SERVICE_LINE' => 'سروس لائن شامل ',
    'LBL_PRINT_AS_PDF' => 'پرنٹ اس پی ڈی ایف',
    'LBL_EMAIL_PDF' => 'ای میل پی ڈی ایف',
    'LBL_PDF_NAME' => 'معاہدہ',
    'LBL_EMAIL_NAME' => 'کے لئے معاہدہ',
    'LBL_NO_TEMPLATE' => 'غلطی کا \nنمبر سانچہ مل گیا ہے اگر آپ نے سانچہ کے ٹھیکہ میں نہیں بنایاتو پھرpdf کے سانچوں میں جایں ان میں سے ایک ماڈل کو بنائیں',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'عام قیمت کرنسی کا ٹھیکہ لینا',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'کرنسی کی غفلت کا گوشوارہ',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'کرنسی کی غفلت کی کٹوتی',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'کرنسی کی غفلت کا لگان مقرر کرنا',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'کرنسی کی غفلت کا جہاز مقرر کرنا',
    'LBL_TOTAL_AMT_USDOLLAR' => 'مکمل کرنسی کی غفلت',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'کرنسی کی غفلت کا جہاز لگن منتخب کرنا',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'مکمل کرنسی کی غفلت',

    'LBL_CALL_ID' => 'کال کرنے والے کی ملامت',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'لائن ایٹم گروپس',
    'LBL_AOS_PRODUCT_QUOTES' => 'مصنوعات کی قطار',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'ٹھیکہ کی قطار',
);
