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
    'ERR_DELETE_RECORD' => 'به منظور حذف مخاطب شماره سابقه را مشخص کنید.',
    'LBL_ACCOUNT_ID' => 'شناسه مرکز:',
    'LBL_ACCOUNT_NAME' => 'نام حساب:',
    'LBL_CAMPAIGN' => 'کمپین:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_ADDRESS_INFORMATION' => 'اطلاعات آدرس',
    'LBL_ALT_ADDRESS_CITY' => 'شهر آدرس جایگزین:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'کشور آدرس جایگزین:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'کد پستی آدرس جایگزین:',
    'LBL_ALT_ADDRESS_STATE' => 'استان آدرس جایگزین:',
    'LBL_ALT_ADDRESS_STREET_2' => 'ادامه آدرس جایگزین 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'ادامه آدرس جایگزین 3:',
    'LBL_ALT_ADDRESS_STREET' => 'آدرس جایگزین:',
    'LBL_ALTERNATE_ADDRESS' => 'آدرس های دیگر:',
    'LBL_ALT_ADDRESS' => 'آدرس های دیگر:',
    'LBL_ANY_ADDRESS' => 'هر آدرسی:',
    'LBL_ANY_EMAIL' => 'هر ایمیلی:',
    'LBL_ANY_PHONE' => 'هر تلفنی:',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به:',
    'LBL_ASSIGNED_TO_ID' => 'کاربر تعیین شده',
    'LBL_ASSISTANT_PHONE' => 'تلفن دستیار:',
    'LBL_ASSISTANT' => 'دستیار:',
    'LBL_BIRTHDATE' => 'تاریخ تولد:',
    'LBL_CITY' => 'شهر:',
    'LBL_CAMPAIGN_ID' => 'شناسه کمپین',
    'LBL_CONTACT_INFORMATION' => 'خلاصه', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'نام مخاطب:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'تماس-فرصت:',
    'LBL_CONTACT_ROLE' => 'نقش:',
    'LBL_CONTACT' => 'مخاطب:',
    'LBL_COUNTRY' => 'کشور:',
    'LBL_CREATED_ACCOUNT' => 'یک مرکز جدید ایجاد کرد',
    'LBL_CREATED_CALL' => 'یک تماس جدید ایجاد کرد',
    'LBL_CREATED_CONTACT' => 'یک مخاطب ایجاد کرد',
    'LBL_CREATED_MEETING' => 'یک جلسه جدید ایجاد کرد',
    'LBL_CREATED_OPPORTUNITY' => 'یک فرصت جدید ایجاد کرد',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'مخاطب‌ها',
    'LBL_DEPARTMENT' => 'دپارتمان:',
    'LBL_DESCRIPTION' => 'توضیحات:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'گزارش‌های مستقیم',
    'LBL_DO_NOT_CALL' => 'تماس نگیرید:',
    'LBL_DUPLICATE' => 'مخاطب‌های تکراری احتمالی',
    'LBL_EMAIL_ADDRESS' => 'آدرس ایمیل:',
    'LBL_EMAIL_OPT_OUT' => 'ایمیل انصرافی:',
    'LBL_EXISTING_ACCOUNT' => 'از یک مرکز موجود استفاده شد',
    'LBL_EXISTING_CONTACT' => 'از یک مخاطب موجود استفاده شد',
    'LBL_EXISTING_OPPORTUNITY' => 'از یک فرصت موجود استفاده شد',
    'LBL_FAX_PHONE' => 'فکس:',
    'LBL_FIRST_NAME' => 'نام:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'سوابق',
    'LBL_HOME_PHONE' => 'خانه:',
    'LBL_ID' => 'شناسه:',
    'LBL_IMPORT_VCARD' => 'وارد‌سازی vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'ایجاد خودکار مخاطب توسط درون‌ریزی vCard از فایل سیستمی شما.',
    'LBL_INVALID_EMAIL' => 'ایمیل نامعتبر:',
    'LBL_INVITEE' => 'گزارش‌های مستقیم',
    'LBL_LAST_NAME' => 'نام خانوادگی:',
    'LBL_LEAD_SOURCE' => 'منبع سرنخ:',
    'LBL_LIST_ACCEPT_STATUS' => 'وضعیت',
    'LBL_LIST_ACCOUNT_NAME' => 'نام حساب',
    'LBL_LIST_CONTACT_NAME' => 'نام مخاطب',
    'LBL_LIST_CONTACT_ROLE' => 'نقش',
    'LBL_LIST_EMAIL_ADDRESS' => 'ایمیل',
    'LBL_LIST_FIRST_NAME' => 'نام',
    'LBL_LIST_FORM_TITLE' => 'لیست مخاطب‌ها',
    'LBL_LIST_LAST_NAME' => 'نام خانوادگی',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_PHONE' => 'تلفن دفتر',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'موبایل:',
    'LBL_MODIFIED' => 'ویرایش کننده:',
    'LBL_MODULE_NAME' => 'مخاطب‌ها',
    'LBL_MODULE_TITLE' => 'مخاطب‌ها: صفحه اصلی',
    'LBL_NAME' => 'نام:',
    'LBL_NEW_FORM_TITLE' => 'مخاطب جدید',
    'LBL_NOTE_SUBJECT' => 'موضوع یادداشت',
    'LBL_OFFICE_PHONE' => 'تلفن دفتر:',
    'LBL_OPP_NAME' => 'نام فرصت:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'شناسه نقش فرصت:',
    'LBL_OPPORTUNITY_ROLE' => 'نقش فرصت',
    'LBL_OTHER_EMAIL_ADDRESS' => 'ایمیل دیگر:',
    'LBL_OTHER_PHONE' => 'تلفن دیگر:',
    'LBL_PHONE' => 'تلفن:',
    'LBL_PORTAL_APP' => 'اپلیکیشن پورتال:',
    'LBL_PORTAL_INFORMATION' => 'اطلاعات پورتال',
    'LBL_PORTAL_NAME' => 'نام پورتال:',
    'LBL_STREET' => 'خیابان',
    'LBL_POSTAL_CODE' => 'کد پستی:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'شهر آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'کشور آدرس اصلی:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'کد پستی آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'استان آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ادامه ی خیابان آدرس اصلی 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'خیابان آدرس اصلی 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'آدرس خیابان اصلی:',
    'LBL_PRIMARY_ADDRESS' => 'آدرس اصلی:',
    'LBL_PRODUCTS_TITLE' => 'محصولات',
    'LBL_REPORTS_TO_ID' => 'شناسه مافوق:',
    'LBL_REPORTS_TO' => 'مافوق:',
    'LBL_RESOURCE_NAME' => 'نام منبع',
    'LBL_SALUTATION' => 'عنوان اجتماعی:',
    'LBL_SAVE_CONTACT' => 'ذخیره مخاطب',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی مخاطب',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'مخاطب‌های علامت‌گذاری شده را انتخاب کنید',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'مخاطب‌های علامت‌گذاری شده را انتخاب کنید',
    'LBL_STATE' => 'استان یا منطقه:',
    'LBL_SYNC_CONTACT' => 'همگام‌سازی با Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'فهرست مشتری‌های بالقوه',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'مشاهده مخاطب‌ها',
    'LNK_IMPORT_VCARD' => 'ایجاد مخاطب از vCard',
    'LNK_NEW_ACCOUNT' => 'ایجاد مرکز',
    'LNK_NEW_APPOINTMENT' => 'ایجاد قرار ملاقات',
    'LNK_NEW_CALL' => 'ثبت تماس',
    'LNK_NEW_CASE' => 'ایجاد خدمات',
    'LNK_NEW_CONTACT' => 'ایجاد مخاطب',
    'LNK_NEW_EMAIL' => 'آرشیو ایمیل',
    'LNK_NEW_MEETING' => 'ثبت قرار ملاقات یا جلسه',
    'LNK_NEW_NOTE' => 'ایجاد یادداشت',
    'LNK_NEW_OPPORTUNITY' => 'ایجاد فرصت',
    'LNK_NEW_TASK' => 'ساخت وظیفه',
    'LNK_SELECT_ACCOUNT' => "انتخاب مرکز",
    'NTC_DELETE_CONFIRMATION' => 'آیا از حذف این سابقه مطمئن هستید؟',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'برای ایجاد فرصت نیاز به یک مرکز است.\n لطفاً یک مرکز جدید ایجاد یا یک مرکز موجود را انتخاب کنید.',
    'NTC_REMOVE_CONFIRMATION' => 'آیا از حذف این مخاطب از این خدمات مطمئن هستید؟',

    'LBL_LEADS_SUBPANEL_TITLE' => 'سرنخ‌ها',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'فرصت‌ها',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'اسناد',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'کپی به آدرس اولیه',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'کپی به آدرس دیگر',

    'LBL_CASES_SUBPANEL_TITLE' => 'خدمات',
    'LBL_BUGS_SUBPANEL_TITLE' => 'اشکالات',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'پروژه ها',
    'LBL_PROJECTS_RESOURCES' => 'منابع پروژه',
    'LBL_CAMPAIGNS' => 'کمپین‌ها',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'کمپین‌ها',
    'LBL_LIST_CITY' => 'شهر',
    'LBL_LIST_STATE' => 'استان',
    'LBL_HOMEPAGE_TITLE' => 'مخاطب‌های من',
    'LBL_OPPORTUNITIES' => 'فرصت‌ها',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'مخاطب‌ها',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'پروژه ها',
    'LNK_IMPORT_CONTACTS' => 'درون‌ریزی مخاطب',

    // SNIP
    'LBL_USER_SYNC' => 'همگام سازی کاربر',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'رویدادها',

    'LBL_AOP_CASE_UPDATES' => 'تغییرات خدمات',
    'LBL_CREATE_PORTAL_USER' => 'ایجاد کاربر پورتال',
    'LBL_ENABLE_PORTAL_USER' => 'فعال کردن کاربر پورتال',
    'LBL_DISABLE_PORTAL_USER' => 'غیرفعال کردن کاربر پورتال',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'عدم موفقیت در ایجاد کاربر پورتال',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'عدم موفقیت در فعال کردن کاربر پورتال',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'عدم موفقیت در غیرفعال کردن کاربر پورتال',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'کاربر پورتال ایجاد شد',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'کاربر پورتال فعال شد',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'کاربر پورتال غیرفعال شد',
    'LBL_NO_JOOMLA_URL' => 'هیچ URL پورتالی مشخص نشده است',
    'LBL_PORTAL_USER_TYPE' => 'نوع کاربر پورتال',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'مرکز غیرفعال شد',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',

    'LBL_AOS_CONTRACTS' => 'قراردادها',
    'LBL_AOS_INVOICES' => 'فاکتورها',
    'LBL_AOS_QUOTES' => 'پیش‌فاکتورها',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'وضعیت دعوت',
);
