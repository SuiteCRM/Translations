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
    'LBL_ASSIGNED_TO_ID' => 'شناسه کاربر تخصیص یافته',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_ID' => 'شناسه',
    'LBL_DATE_ENTERED' => 'تاریخ ایجاد',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش',
    'LBL_MODIFIED' => 'تغییر یافته توسط',
    'LBL_MODIFIED_NAME' => 'نام ویرایش کننده',
    'LBL_CREATED' => 'ایجاد کننده',
    'LBL_DESCRIPTION' => 'توضیحات',
    'LBL_DELETED' => 'حذف شده',
    'LBL_NAME' => 'عنوان',
    'LBL_CREATED_USER' => 'کاربر ایجاد کننده',
    'LBL_MODIFIED_USER' => 'کاربر ویرایش کننده',
    'ERR_DELETE_RECORD' => 'برای حذف این حساب باید یک شماره سابقه مشخص شود.',
    'LBL_ACCOUNT_NAME' => 'عنوان',
    'LBL_ACCOUNT' => 'شرکت:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_ADDRESS_INFORMATION' => 'اطلاعات آدرس',
    'LBL_ANNUAL_REVENUE' => 'درآمد سالانه:',
    'LBL_ANY_ADDRESS' => 'هر آدرسی:',
    'LBL_ANY_EMAIL' => 'هر ایمیلی:',
    'LBL_ANY_PHONE' => 'هر تلفنی:',
    'LBL_RATING' => 'امتیاز دهی',
    'LBL_ASSIGNED_USER' => 'کاربر',
    'LBL_BILLING_ADDRESS_CITY' => 'شهر صورت‌حساب:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'کشور صورت‌حساب:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'کد پستی صورت‌حساب:',
    'LBL_BILLING_ADDRESS_STATE' => 'استان صورت‌حساب:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'ادامه آدرس صورت‌حساب ۲',
    'LBL_BILLING_ADDRESS_STREET_3' => 'ادامه آدرس صورت‌حساب ۳',
    'LBL_BILLING_ADDRESS_STREET_4' => 'ادامه آدرس صورت‌حساب ۴',
    'LBL_BILLING_ADDRESS_STREET' => 'خیابان صورت‌حساب:',
    'LBL_BILLING_ADDRESS' => 'آدرس صورت‌حساب:',
    'LBL_ACCOUNT_INFORMATION' => 'بررسی اجمالی',
    'LBL_CITY' => 'شهر:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'مخاطب‌ها',
    'LBL_COUNTRY' => 'کشور:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'حساب ها',
    'LBL_DUPLICATE' => 'مخاطب‌های تکراری احتمالی',
    'LBL_EMAIL' => 'ایمیل:',
    'LBL_EMPLOYEES' => 'کارمندان:',
    'LBL_FAX' => 'فکس:',
    'LBL_INDUSTRY' => 'صنعت:',
    'LBL_LIST_ACCOUNT_NAME' => 'نام حساب',
    'LBL_LIST_CITY' => 'شهر',
    'LBL_LIST_EMAIL_ADDRESS' => 'آدرس ایمیل',
    'LBL_LIST_PHONE' => 'تلفن',
    'LBL_LIST_STATE' => 'استان',
    'LBL_MEMBER_OF' => 'عضو از:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'سازمان‌های عضو',
    'LBL_OTHER_EMAIL_ADDRESS' => 'ایمیل دیگر:',
    'LBL_OTHER_PHONE' => 'تلفن دیگر:',
    'LBL_OWNERSHIP' => 'مالکیت:',
    'LBL_PARENT_ACCOUNT_ID' => 'شناسه مرکز والد',
    'LBL_PHONE_ALT' => 'تلفن جایگزین:',
    'LBL_PHONE_FAX' => 'فکس:',
    'LBL_PHONE_OFFICE' => 'تلفن دفتر:',
    'LBL_PHONE' => 'تلفن:',
    'LBL_POSTAL_CODE' => 'کد پستی:',
    'LBL_SAVE_ACCOUNT' => 'ذخیره مرکز',
    'LBL_SHIPPING_ADDRESS_CITY' => 'شهر ارسال کالا:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'کشور ارسال کالا:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'کد پستی محل ارسال کالا:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'استان ارسال کالا:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'ادامه آدرس ارسال کالا ۲',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'ادامه آدرس ارسال کالا ۳',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'ادامه آدرس ارسال کالا ۴',
    'LBL_SHIPPING_ADDRESS_STREET' => 'خیابان ارسال کالا:',
    'LBL_SHIPPING_ADDRESS' => 'آدرس ارسال کالا:',
    'LBL_STATE' => 'استان یا منطقه:',
    'LBL_TICKER_SYMBOL' => 'نماد رویداد های اخیر:',
    'LBL_TYPE' => 'نوع:',
    'LBL_WEBSITE' => 'وب‎سایت:',
    'LNK_ACCOUNT_LIST' => 'حساب ها',
    'LNK_NEW_ACCOUNT' => 'ایجاد مرکز',
    'MSG_DUPLICATE' => 'ایجاد این مرکز ممکن است یک مرکز تکراری ایجاد کند. یا از لیست زیر یک مرکز را انتخاب کنید یا برای ادامه ایجاد مرکز جدید با مشخصات وارد شده، روی ذخیره کلیک کنید.',
    'MSG_SHOW_DUPLICATES' => 'ایجاد این مرکز ممکن است یک مرکز تکراری ایجاد کند. یا برای ادامه ایجاد مرکز جدید با مشخصات وارد شده، روی ذخیره کلیک کنید یا روی لغو کلیک کنید.',
    'NTC_DELETE_CONFIRMATION' => 'آیا از حذف این سابقه مطمئن هستید؟',
    'LBL_LIST_FORM_TITLE' => 'Quotes List',
    'LBL_MODULE_NAME' => 'پیش‌فاکتورها',
    'LBL_MODULE_TITLE' => 'Quotes: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Quotes',
    'LNK_NEW_RECORD' => 'ایجاد پیش فاکتور',
    'LNK_LIST' => 'View Quotes',
    'LBL_SEARCH_FORM_TITLE' => 'Search Quotes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'مشاهده تاریخچه',
    'LBL_NEW_FORM_TITLE' => 'New Quote',
    'LBL_TERMS_C' => 'شرایط',
    'LBL_APPROVAL_ISSUE' => 'مسائل مربوط به تاییدیه',
    'LBL_APPROVAL_STATUS' => 'وضعیت تاییدیه',
    'LBL_BILLING_ACCOUNT' => 'مرکز',
    'LBL_BILLING_CONTACT' => 'مخاطب',
    'LBL_EXPIRATION' => 'معتبر تا',
    'LBL_QUOTE_NUMBER' => 'شماره پیش‌فاکتور',
    'LBL_OPPORTUNITY' => 'فرصت',
    'LBL_TEMPLATE_DDOWN_C' => 'Quote Template',
    'LBL_STAGE' => 'مرحله پیش‌فاکتور',
    'LBL_TERM' => 'شرایط پرداخت',
    'LBL_SUBTOTAL_AMOUNT' => 'جمع جز',
    'LBL_DISCOUNT_AMOUNT' => 'تخفیف',
    'LBL_TAX_AMOUNT' => 'مالیات',
    'LBL_SHIPPING_AMOUNT' => 'حمل و نقل',
    'LBL_TOTAL_AMT' => 'مجموع',
    'VALUE' => 'عنوان',
    'LBL_EMAIL_ADDRESSES' => 'آدرس ایمیل‌ها',
    'LBL_LINE_ITEMS' => 'ردیف',
    'LBL_GRAND_TOTAL' => 'مجموع کل',
    'LBL_INVOICE_STATUS' => 'وضعیت فاکتور',
    'LBL_PRODUCT_QUANITY' => 'تعداد',
    'LBL_PRODUCT_NAME' => 'مجصول',
    'LBL_PART_NUMBER' => 'شماره قطعه',
    'LBL_PRODUCT_NOTE' => 'یادداشت',
    'LBL_PRODUCT_DESCRIPTION' => 'توضیحات',
    'LBL_LIST_PRICE' => 'لیست',
    'LBL_DISCOUNT_AMT' => 'تخفیف',
    'LBL_UNIT_PRICE' => 'قیمت فروش',
    'LBL_TOTAL_PRICE' => 'مجموع',
    'LBL_VAT' => 'مالیات', // VAT
    'LBL_VAT_AMT' => 'مقدار مالیات', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'افزودن محصول',
    'LBL_SERVICE_NAME' => 'خدمات',
    'LBL_SERVICE_LIST_PRICE' => 'لیست',
    'LBL_SERVICE_PRICE' => 'قیمت فروش',
    'LBL_SERVICE_DISCOUNT' => 'تخفیف',
    'LBL_ADD_SERVICE_LINE' => 'افزودن سرویس ',
    'LBL_REMOVE_PRODUCT_LINE' => 'حذف',
    'LBL_CONVERT_TO_INVOICE' => 'تبدیل به فاکتور',
    'LBL_PRINT_AS_PDF' => 'چاپ به صورت PDF',
    'LBL_EMAIL_QUOTE' => 'Email Quotation',
    'LBL_CREATE_CONTRACT' => 'ایجاد قرارداد',
    'LBL_LIST_NUM' => 'شماره',
    'LBL_PDF_NAME' => 'پیش‌فاکتور',
    'LBL_EMAIL_NAME' => 'Quote for',
    'LBL_QUOTE_DATE' => 'Quotation Date',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created a Quote template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'قیمت کل + مالیات',//pre shipping
    'LBL_EMAIL_PDF' => 'ارسال ایمیل PDF',
    'LBL_ADD_GROUP' => 'افزودن گروه',
    'LBL_DELETE_GROUP' => 'حذف گروه',
    'LBL_GROUP_NAME' => 'نام گروه',
    'LBL_GROUP_TOTAL' => 'مجموع گروه',
    'LBL_SHIPPING_TAX' => 'مالیات حمل و نقل',
    'LBL_SHIPPING_TAX_AMT' => 'مالیات حمل و نقل',
    'LBL_IMPORT_LINE_ITEMS' => 'درون‌ریزی موارد ردیف',
    'LBL_CREATE_OPPORTUNITY' => 'ایجاد فرصت',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'جمع جز (واحد پول پیش‌فرض)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'تخفیف (واحد پول پیش‌فرض)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'مالیات (واحد پول پیش‌فرض)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'حمل و نقل (واحد پول پیش‌فرض)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'مجموع (واحد پول پیش‌فرض)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'مالیات حمل و نقل (واحد پول پیش‌فرض)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'مجموع کل (واحد پول پیش‌فرض)',
    'LBL_QUOTE_TO' => 'Quote To',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'قیمت کل + مالیات (پیش فرض ارز)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'پیش‌فاکتورها: قراردادها',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'پیش‌فاکتورها: صورت‌حساب‌ها',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'گروه‌های موارد',
    'LBL_AOS_PRODUCT_QUOTES' => 'پیش‌فاکتورهای محصول',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
);
