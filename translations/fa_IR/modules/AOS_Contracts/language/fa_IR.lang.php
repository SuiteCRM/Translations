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
    'LBL_ASSIGNED_TO_NAME' => 'مدیر قرارداد',
    'LBL_CONTRACT_ACCOUNT' => 'مرکز',
    'LBL_OPPORTUNITY' => 'فرصت',
    'LBL_ID' => 'شناسه',
    'LBL_DATE_ENTERED' => 'تاریخ ایجاد',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش',
    'LBL_MODIFIED' => 'تغییر یافته توسط',
    'LBL_MODIFIED_NAME' => 'نام ویرایش کننده',
    'LBL_CREATED' => 'ایجاد کننده',
    'LBL_DESCRIPTION' => 'توضیحات',
    'LBL_DELETED' => 'حذف شده',
    'LBL_NAME' => 'عنوان قرارداد',
    'LBL_CREATED_USER' => 'کاربر ایجاد کننده',
    'LBL_MODIFIED_USER' => 'کاربر ویرایش کننده',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_FORM_TITLE' => 'لیست قراردادها',
    'LBL_MODULE_NAME' => 'قراردادها',
    'LBL_MODULE_TITLE' => 'قراردادها: صفحه اصلی',
    'LBL_HOMEPAGE_TITLE' => 'قراردادهای من',
    'LNK_NEW_RECORD' => 'ایجاد قرارداد',
    'LNK_LIST' => 'مشاهده قراردادها',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی قراردادها',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'مشاهده تاریخچه',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_NEW_FORM_TITLE' => 'قرارداد جدید',
    'LBL_CONTRACT_NAME' => 'نام قرارداد',
    'LBL_REFERENCE_CODE ' => 'کد مرجع ',
    'LBL_START_DATE' => 'تاریخ شروع',
    'LBL_END_DATE' => 'تاریخ پایان',
    'LBL_TOTAL_CONTRACT_VALUE' => 'ارزش قرارداد',
    'LBL_STATUS' => 'وضعیت',
    'LBL_CUSTOMER_SIGNED_DATE' => 'تاریخ امضای مشتری',
    'LBL_COMPANY_SIGNED_DATE' => 'تاریخ امضای شرکت',
    'LBL_RENEWAL_REMINDER' => ' یادآور نوسازی مخاطب',
    'LBL_RENEWAL_REMINDER_DATE' => 'تاریخ یادآوری تمدید',
    'LBL_CONTRACT_TYPE' => 'نوع قرارداد',
    'LBL_CONTACT' => 'مخاطب',
    'LBL_ADD_GROUP' => 'افزودن گروه',
    'LBL_DELETE_GROUP' => 'حذف گروه',
    'LBL_GROUP_NAME' => 'نام گروه',
    'LBL_GROUP_TOTAL' => 'مجموع گروه',
    'LBL_PRODUCT_QUANITY' => 'تعداد',
    'LBL_PRODUCT_NAME' => 'مجصول',
    'LBL_PART_NUMBER' => 'شماره قطعه',
    'LBL_PRODUCT_NOTE' => 'یادداشت',
    'LBL_PRODUCT_DESCRIPTION' => 'توضیحات',
    'LBL_LIST_PRICE' => 'لیست',
    'LBL_DISCOUNT_AMT' => 'تخفیف',
    'LBL_UNIT_PRICE' => 'قیمت فروش',
    'LBL_TOTAL_PRICE' => 'مجموع',
    'LBL_VAT' => 'مالیات',
    'LBL_VAT_AMT' => 'مقدار مالیات',
    'LBL_SERVICE_NAME' => 'خدمات',
    'LBL_SERVICE_LIST_PRICE' => 'لیست',
    'LBL_SERVICE_PRICE' => 'قیمت فروش',
    'LBL_SERVICE_DISCOUNT' => 'تخفیف',
    'LBL_LINE_ITEMS' => 'ردیف',
    'LBL_SUBTOTAL_AMOUNT' => 'جمع جز',
    'LBL_DISCOUNT_AMOUNT' => 'تخفیف',
    'LBL_TAX_AMOUNT' => 'مالیات',
    'LBL_SHIPPING_AMOUNT' => 'حمل و نقل',
    'LBL_TOTAL_AMT' => 'مجموع',
    'LBL_GRAND_TOTAL' => 'مجموع کل',
    'LBL_SHIPPING_TAX' => 'مالیات حمل و نقل',
    'LBL_SHIPPING_TAX_AMT' => 'مالیات حمل و نقل',
    'LBL_ADD_PRODUCT_LINE' => 'افزودن محصول',
    'LBL_ADD_SERVICE_LINE' => 'افزودن سرویس ',
    'LBL_PRINT_AS_PDF' => 'چاپ به صورت PDF',
    'LBL_EMAIL_PDF' => 'ارسال ایمیل PDF',
    'LBL_PDF_NAME' => 'قرارداد',
    'LBL_EMAIL_NAME' => 'قرارداد برای',
    'LBL_NO_TEMPLATE' => 'خطا\nهیچ قالبی یافت نشد. اگر یک قالب قرارداد ایجاد نکرده‌اید، به ماژول قالب PDF رفته و یک قالب ایجاد نمایید',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Contract Value (Default Currency)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'جمع جز (واحد پول پیش‌فرض)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'تخفیف (واحد پول پیش‌فرض)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'مالیات (واحد پول پیش‌فرض)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'حمل و نقل (واحد پول پیش‌فرض)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'مجموع (واحد پول پیش‌فرض)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'مالیات حمل و نقل (واحد پول پیش‌فرض)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'مجموع کل (واحد پول پیش‌فرض)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'گروه‌های موارد',
    'LBL_AOS_PRODUCT_QUOTES' => 'پیش‌فاکتورهای محصول',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'پیش‌فاکتورها: قراردادها',
);
