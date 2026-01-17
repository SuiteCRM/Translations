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
    'LBL_MODULE_NAME' => 'کارمندها',
    'LBL_MODULE_TITLE' => 'کارمندها: صفحه اصلی',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی کارمند',
    'LBL_LIST_FORM_TITLE' => 'کارمندها',
    'LBL_NEW_FORM_TITLE' => 'کارمند جدید',
    'LBL_LOGIN' => 'ورود',
    'LBL_RESET_PREFERENCES' => 'تنظیم مجدد تنظیمات پیش فرض',
    'LBL_TIME_FORMAT' => 'فرمت زمان:',
    'LBL_DATE_FORMAT' => 'فرمت تاریخ:',
    'LBL_TIMEZONE' => 'زمان کنونی:',
    'LBL_CURRENCY' => 'واحد پول:',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_LAST_NAME' => 'نام خانوادگی',
    'LBL_LIST_EMPLOYEE_NAME' => 'نام کارمند',
    'LBL_LIST_DEPARTMENT' => 'دپارتمان',
    'LBL_LIST_REPORTS_TO_NAME' => 'گزارش به',
    'LBL_LIST_EMAIL' => 'ایمیل',
    'LBL_LIST_USER_NAME' => 'نام کاربر',
    'LBL_ERROR' => 'خطا:',
    'LBL_PASSWORD' => 'کلمه عبور:',
    'LBL_USER_NAME' => 'نام كاربر:',
    'LBL_USER_TYPE' => 'نوع کاربر',
    'LBL_FIRST_NAME' => 'نام:',
    'LBL_LAST_NAME' => 'نام خانوادگی:',
    'LBL_THEME' => 'قالب:',
    'LBL_LANGUAGE' => 'زبان:',
    'LBL_ADMIN' => 'مدیر:',
    'LBL_EMPLOYEE_INFORMATION' => 'اطلاعات کارمند',
    'LBL_OFFICE_PHONE' => 'تلفن دفتر:',
    'LBL_REPORTS_TO' => 'گزارش برای شناسه:',
    'LBL_REPORTS_TO_NAME' => 'گزارش به',
    'LBL_OTHER_PHONE' => 'تلفن دیگر:',
    'LBL_NOTES' => 'یادداشت‌ها:',
    'LBL_DEPARTMENT' => 'دپارتمان:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'هر آدرسی:',
    'LBL_ANY_PHONE' => 'هر تلفنی:',
    'LBL_ANY_EMAIL' => 'هر ایمیلی:',
    'LBL_ADDRESS' => 'آدرس:',
    'LBL_CITY' => 'شهر:',
    'LBL_STATE' => 'استان یا منطقه:',
    'LBL_POSTAL_CODE' => 'کد پستی:',
    'LBL_COUNTRY' => 'کشور:',
    'LBL_NAME' => 'نام:',
    'LBL_MOBILE_PHONE' => 'موبایل:',
    'LBL_FAX' => 'فکس:',
    'LBL_EMAIL' => 'آدرس ایمیل:',
    'LBL_EMAIL_LINK_TYPE' => 'نرم افزار ایمیل',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'تلفن منزل:',
    'LBL_WORK_PHONE' => 'تلفن محل کار:',
    'LBL_EMPLOYEE_STATUS' => 'وضعیت کارکنان:',
    'LBL_PRIMARY_ADDRESS' => 'آدرس اصلی:',
    'LBL_SAVED_SEARCH' => 'تنظیمات چیدمان',
    'LBL_MESSENGER_ID' => 'IM Name:',
    'LBL_MESSENGER_TYPE' => 'IM Type:',
    'ERR_LAST_ADMIN_1' => 'نام کارمند"',
    'ERR_LAST_ADMIN_2' => '" is the last employee with administrator access. At least one employee must be an administrator.',
    'LNK_NEW_EMPLOYEE' => 'ایجاد کارمند',
    'LNK_EMPLOYEE_LIST' => 'مشاهده کارکنان',
    'ERR_DELETE_RECORD' => 'برای حذف این مرکز باید یک شماره سابقه مشخص کنید.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'وضعیت',

    'LBL_SUITE_LOGIN' => 'Is User',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notify on Assignment',
    'LBL_IS_ADMIN' => 'Is Administrator',
    'LBL_GROUP' => 'Group User',
    'LBL_PHOTO' => 'عکس',
    'LBL_DELETE_USER_CONFIRM' => 'This Employee is also a User. Deleting the Employee record will also delete the User record, and the User will no longer be able to access the application. Do you want to proceed with deleting this record?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Are you sure you want to delete this employee?',
    'LBL_ONLY_ACTIVE' => 'کارمندان فعال',
    'LBL_SELECT' => 'انتخاب' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'شناسه تایید اعتبار',
    'LBL_EXT_AUTHENTICATE' => 'تأیید اعتبار خارجی',
    'LBL_GROUP_USER' => 'Group User',
    'LBL_LIST_ACCEPT_STATUS' => 'وضعیت',
    'LBL_MODIFIED_BY' => 'تغییر یافته توسط',
    'LBL_MODIFIED_BY_ID' => 'شناسه ویرایش کننده',
    'LBL_CREATED_BY_NAME' => 'ایجاد کننده', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API User',
    'LBL_PSW_MODIFIED' => 'آخرین تغییر رمز عبور',
    'LBL_SHOW_ON_EMPLOYEES' => 'نمایش رکورد کارمند',
    'LBL_USER_HASH' => 'کلمه عبور',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'رمز عبور تولید شده توسط سیستم',
    'LBL_DESCRIPTION' => 'توضیحات',
    'LBL_FAX_PHONE' => 'فکس',
    'LBL_STATUS' => 'وضعیت',
    'LBL_ADDRESS_CITY' => 'آدرس شهر',
    'LBL_ADDRESS_COUNTRY' => 'آدرس کشوری',
    'LBL_ADDRESS_INFORMATION' => 'اطلاعات آدرس',
    'LBL_ADDRESS_POSTALCODE' => 'کد پستی آدرس',
    'LBL_ADDRESS_STATE' => 'Address State',
    'LBL_ADDRESS_STREET' => 'Address Street',

    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش',
    'LBL_DATE_ENTERED' => 'تاریخ وارد شده',
    'LBL_DELETED' => 'حذف شده',

    'LBL_BUTTON_SELECT' => 'انتخاب',
    'LBL_BUTTON_CLEAR' => 'پاکسازی',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'توکن OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'نقش‌ها',
    'LBL_SECURITYGROUPS' => 'گروه های امنیتی',
    'LBL_PROSPECT_LIST' => 'فهرست مشتری‌های بالقوه',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
