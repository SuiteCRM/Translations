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
    'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ID' => 'شناخت',
    'LBL_DATE_ENTERED' => 'تاریخ بنایی گیی',
    'LBL_DATE_MODIFIED' => 'تاریخ ترمیم کی گئی',
    'LBL_MODIFIED' => 'ترمیم کردہ',
    'LBL_MODIFIED_NAME' => 'نام سے ترمیم کردہ',
    'LBL_CREATED' => 'کی طرف سے پیدا کیا ہوا',
    'LBL_DESCRIPTION' => 'تفصیل',
    'LBL_DELETED' => 'ختم کر دیا گیا',
    'LBL_NAME' => 'عنوان، موضع',
    'LBL_CREATED_USER' => 'صارف کی طرف سے پیدا کردہ',
    'LBL_MODIFIED_USER' => 'صارف کی طرف سے ترمیم کردہ',
    'ERR_DELETE_RECORD' => 'اکاؤنٹ ختم کرنے کے لئے ایک ریکارڈ نمبر مخصوص ہونا ضروری ہے.',
    'LBL_ACCOUNT_NAME' => 'عنوان، موضع',
    'LBL_ACCOUNT' => 'کمپنی:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_ADDRESS_INFORMATION' => 'پتہ کے معلومات',
    'LBL_ANNUAL_REVENUE' => 'سالانہ آمدنی:',
    'LBL_ANY_ADDRESS' => 'کوئی بھی پتہ:',
    'LBL_ANY_EMAIL' => 'کوئی بھی ای میل:',
    'LBL_ANY_PHONE' => 'کوئی بھی فون:',
    'LBL_RATING' => 'درجہ بندی',
    'LBL_ASSIGNED_USER' => 'صارف',
    'LBL_BILLING_ADDRESS_CITY' => 'بلنگ شہر:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'بلنگ ملک:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'بلنگ پوسٹل کوڈ:',
    'LBL_BILLING_ADDRESS_STATE' => 'بلنگ ریاست:',
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
    'LBL_EMAIL' => 'Email:',
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
    'LBL_OTHER_EMAIL_ADDRESS' => 'دوسرے ای میل:',
    'LBL_OTHER_PHONE' => 'دیگر فون:',
    'LBL_OWNERSHIP' => 'ملکیت:',
    'LBL_PARENT_ACCOUNT_ID' => 'پیرنٹ اکاؤنٹ کی شناخت',
    'LBL_PHONE_ALT' => 'متبادل فون:',
    'LBL_PHONE_FAX' => 'فون فیکس:',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
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
    'LNK_NEW_ACCOUNT' => 'اکاؤنٹ بنا لیجیے',
    'MSG_DUPLICATE' => 'Creating this account may potentially create a duplicate account. You may either select an account from the list below or you may click on Save to continue creating a new account with the previously entered data.',
    'MSG_SHOW_DUPLICATES' => 'Creating this account may potentially create a duplicate account. You may either click on Save to continue creating this new account with the previously entered data or you may click Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'کیا آپ واقعی یہ ریکارڈ ختم کرنا چاہتے ہیں؟',
    'LBL_LIST_FORM_TITLE' => 'Quotes List',
    'LBL_MODULE_NAME' => 'حوالہ جات',
    'LBL_MODULE_TITLE' => 'Quotes: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Quotes',
    'LNK_NEW_RECORD' => 'Create Quote',
    'LNK_LIST' => 'View Quotes',
    'LBL_SEARCH_FORM_TITLE' => 'Search Quotes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_NEW_FORM_TITLE' => 'New Quote',
    'LBL_TERMS_C' => 'Terms',
    'LBL_APPROVAL_ISSUE' => 'Approval Issues',
    'LBL_APPROVAL_STATUS' => 'Approval Status',
    'LBL_BILLING_ACCOUNT' => 'کھاتہ',
    'LBL_BILLING_CONTACT' => 'رابطہ',
    'LBL_EXPIRATION' => 'Valid Until',
    'LBL_QUOTE_NUMBER' => 'Quote Number',
    'LBL_OPPORTUNITY' => 'موقعہ',
    'LBL_TEMPLATE_DDOWN_C' => 'Quote Template',
    'LBL_STAGE' => 'Quote Stage',
    'LBL_TERM' => 'Payment Terms',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Shipping',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'عنوان، موضع',
    'LBL_EMAIL_ADDRESSES' => 'ای میل کا پتہ',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_INVOICE_STATUS' => 'Invoice Status',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'مصنوعات',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'خط',
    'LBL_PRODUCT_DESCRIPTION' => 'تفصیل',
    'LBL_LIST_PRICE' => 'فہرست',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Tax', // VAT
    'LBL_VAT_AMT' => 'Tax Amount', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'فہرست',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'نکال دیں',
    'LBL_CONVERT_TO_INVOICE' => 'Convert to Invoice',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_QUOTE' => 'Email Quotation',
    'LBL_CREATE_CONTRACT' => 'Create Contract',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Quote',
    'LBL_EMAIL_NAME' => 'Quote for',
    'LBL_QUOTE_DATE' => 'Quotation Date',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created a Quote template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Tax',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_IMPORT_LINE_ITEMS' => 'Import Line Items',
    'LBL_CREATE_OPPORTUNITY' => 'Create Opportunity',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_QUOTE_TO' => 'Quote To',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotal + Tax (Default Currency)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
);
