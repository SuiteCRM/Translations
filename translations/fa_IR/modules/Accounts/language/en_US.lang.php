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
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'اسناد',
    // Dashlet Categories
    'LBL_CHARTS' => 'نمودارها',
    'LBL_DEFAULT' => 'نمایش‌ها',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'به منظور حذف مرکز باید یک شماره سابقه مشخص کنید.',
    'LBL_ACCOUNT_INFORMATION' => 'خلاصه', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'نام حساب:',
    'LBL_ACCOUNT' => 'مرکز:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_ADDRESS_INFORMATION' => 'اطلاعات آدرس',
    'LBL_ANNUAL_REVENUE' => 'درآمد سالانه:',
    'LBL_ANY_ADDRESS' => 'هر آدرسی:',
    'LBL_ANY_EMAIL' => 'هر ایمیلی:',
    'LBL_ANY_PHONE' => 'هر تلفنی:',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به:',
    'LBL_ASSIGNED_TO_ID' => 'کاربر تعیین شده:',
    'LBL_BILLING_ADDRESS_CITY' => 'شهر صورت‌حساب:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'کشور صورت‌حساب:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'کد پستی صورت‌حساب:',
    'LBL_BILLING_ADDRESS_STATE' => 'استان صورت‌حساب:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'ادامه آدرس صورت‌حساب ۲',
    'LBL_BILLING_ADDRESS_STREET_3' => 'ادامه آدرس صورت‌حساب ۳',
    'LBL_BILLING_ADDRESS_STREET_4' => 'ادامه آدرس صورت‌حساب ۴',
    'LBL_BILLING_ADDRESS_STREET' => 'خیابان صورت‌حساب:',
    'LBL_BILLING_ADDRESS' => 'آدرس صورت‌حساب:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'اشکالات',
    'LBL_CAMPAIGN_ID' => 'شناسه کمپین',
    'LBL_CASES_SUBPANEL_TITLE' => 'خدمات',
    'LBL_CITY' => 'شهر:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'مخاطب‌ها',
    'LBL_COUNTRY' => 'کشور:',
    'LBL_DATE_ENTERED' => 'تاریخ ایجاد:',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'حساب ها',
    'LBL_DESCRIPTION_INFORMATION' => 'اطلاعات توضیحات',
    'LBL_DESCRIPTION' => 'توضیحات:',
    'LBL_DUPLICATE' => 'مخاطب‌های تکراری احتمالی',
    'LBL_EMAIL' => 'آدرس ایمیل:',
    'LBL_EMAIL_OPT_OUT' => 'ایمیل انصرافی:',
    'LBL_EMAIL_ADDRESSES' => 'آدرس ایمیل‌ها',
    'LBL_EMPLOYEES' => 'کارمندان:',
    'LBL_FAX' => 'فکس:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'سوابق',
    'LBL_HOMEPAGE_TITLE' => 'حساب‌های من',
    'LBL_INDUSTRY' => 'صنعت:',
    'LBL_INVALID_EMAIL' => 'ایمیل نامعتبر:',
    'LBL_INVITEE' => 'مخاطب‌ها',
    'LBL_LEADS_SUBPANEL_TITLE' => 'سرنخ‌ها',
    'LBL_LIST_ACCOUNT_NAME' => 'نام',
    'LBL_LIST_CITY' => 'شهر',
    'LBL_LIST_CONTACT_NAME' => 'نام مخاطب',
    'LBL_LIST_EMAIL_ADDRESS' => 'آدرس ایمیل',
    'LBL_LIST_FORM_TITLE' => 'لیست مرکز',
    'LBL_LIST_PHONE' => 'تلفن',
    'LBL_LIST_STATE' => 'استان',
    'LBL_MEMBER_OF' => 'عضو از:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'سازمان‌های عضو',
    'LBL_MODULE_NAME' => 'حساب ها',
    'LBL_MODULE_TITLE' => 'مراکز: صفحه اصلی',
    'LBL_MODULE_ID' => 'حساب ها',
    'LBL_NAME' => 'نام:',
    'LBL_NEW_FORM_TITLE' => 'مرکز جدید',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'فرصت‌ها',
    'LBL_OTHER_EMAIL_ADDRESS' => 'ایمیل دیگر:',
    'LBL_OTHER_PHONE' => 'تلفن دیگر:',
    'LBL_OWNERSHIP' => 'مالکیت:',
    'LBL_PARENT_ACCOUNT_ID' => 'شناسه مرکز والد',
    'LBL_PHONE_ALT' => 'تلفن جایگزین:',
    'LBL_PHONE_FAX' => 'فکس:',
    'LBL_PHONE_OFFICE' => 'تلفن دفتر:',
    'LBL_PHONE' => 'تلفن:',
    'LBL_POSTAL_CODE' => 'کد پستی:',
    'LBL_PRODUCTS_TITLE' => 'محصولات',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'پروژه ها',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'کپی به مخاطب‌ها',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'کپی...',
    'LBL_RATING' => 'امتیاز دهی:',
    'LBL_SAVE_ACCOUNT' => 'ذخیره مرکز',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی مرکز',
    'LBL_SHIPPING_ADDRESS_CITY' => 'شهر ارسال کالا:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'کشور ارسال کالا:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'کد پستی محل ارسال کالا:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'استان ارسال کالا:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'ادامه آدرس ارسال کالا ۲',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'ادامه آدرس ارسال کالا ۳',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'ادامه آدرس ارسال کالا ۴',
    'LBL_SHIPPING_ADDRESS_STREET' => 'خیابان ارسال کالا:',
    'LBL_SHIPPING_ADDRESS' => 'آدرس ارسال کالا:',
    'LBL_SIC_CODE' => 'SIC Code:',
    'LBL_STATE' => 'استان یا منطقه:',
    'LBL_TICKER_SYMBOL' => 'نماد رویداد های اخیر:',
    'LBL_TYPE' => 'نوع:',
    'LBL_WEBSITE' => 'وب‎سایت:',
    'LBL_CAMPAIGNS' => 'کمپین‌ها',
    'LNK_ACCOUNT_LIST' => 'مشاهده مراکز',
    'LNK_NEW_ACCOUNT' => 'ایجاد مرکز',
    'LNK_IMPORT_ACCOUNTS' => 'درون‌ریزی مراکز',
    'MSG_DUPLICATE' => 'مرکزی که در حال ایجاد آن هستید ممکن است تکراری باشد. مراکز ثبت شده قبلی که نام مشابه دارند در ذیل لیست شده‌اند.<br>برای ادامه ایجاد این مرکز روی ایجاد مرکز کلیک کنید، یا یکی از مراکز ذیل را انتخاب کنید.',
    'MSG_SHOW_DUPLICATES' => 'مرکزی که در حال ایجاد آن هستید ممکن است تکراری باشد. مراکز ثبت شده قبلی که نام مشابه دارند در ذیل لیست شده‌اند.<br>برای ادامه ایجاد این مرکز روی ذخیره کلیک کنید، یا روی لغو کلیک کنید تا بدون ایجاد مرکز به صفحه‌ی قبل برگردید.',
    'LBL_ASSIGNED_USER_NAME' => 'اختصاص داده شده به:',
    'LBL_PROSPECT_LIST' => 'فهرست مشتری‌های بالقوه',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'حساب ها',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'پروژه ها',
    //For export labels
    'LBL_PARENT_ID' => 'شناسه والد',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'محصول‌ها و خدمات خریداری شده',

    'LBL_AOS_CONTRACTS' => 'قراردادها',
    'LBL_AOS_INVOICES' => 'فاکتورها',
    'LBL_AOS_QUOTES' => 'پیش‌فاکتورها',
    'LBL_LIST_WEBSITE' => 'وبسایت',
);
