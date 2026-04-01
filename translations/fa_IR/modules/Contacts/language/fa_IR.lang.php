<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_ADDRESS_INFORMATION' => 'اطلاعات آدرس',
    'LBL_ALT_ADDRESS_CITY' => 'شهر آدرس جایگزین:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'کشور آدرس جایگزین:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'کد پستی آدرس جایگزین:',
    'LBL_ALT_ADDRESS_STATE' => 'استان آدرس جایگزین:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternate Address Street 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternate Address Street 3:',
    'LBL_ALT_ADDRESS_STREET' => 'آدرس جایگزین:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'هر آدرسی:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'LBL_ASSISTANT_PHONE' => 'تلفن دستیار:',
    'LBL_ASSISTANT' => 'دستیار:',
    'LBL_BIRTHDATE' => 'تاریخ تولد:',
    'LBL_CITY' => 'City:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Contact Name:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'تماس-فرصت:',
    'LBL_CONTACT_ROLE' => 'نقش: ',
    'LBL_CONTACT' => 'Contact:',
    'LBL_COUNTRY' => 'کشور:',
    'LBL_CREATED_ACCOUNT' => 'یک مرکز جدید ایجاد کرد',
    'LBL_CREATED_CALL' => 'یک تماس جدید ایجاد کرد',
    'LBL_CREATED_CONTACT' => 'یک مخاطب ایجاد کرد',
    'LBL_CREATED_MEETING' => 'یک جلسه جدید ایجاد کرد',
    'LBL_CREATED_OPPORTUNITY' => 'یک فرصت جدید ایجاد کرد',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'مخاطب‌ها',
    'LBL_DEPARTMENT' => 'دپارتمان:',
    'LBL_DESCRIPTION' => 'توضیحات: ',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direct Reports',
    'LBL_DO_NOT_CALL' => 'تماس نگیرید:',
    'LBL_DUPLICATE' => 'مخاطب‌های تکراری احتمالی',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'از یک مرکز موجود استفاده شد',
    'LBL_EXISTING_CONTACT' => 'از یک مخاطب موجود استفاده شد',
    'LBL_EXISTING_OPPORTUNITY' => 'از یک فرصت موجود استفاده شد',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'نام:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'خانه:',
    'LBL_ID' => 'شناسه:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'ایجاد خودکار مخاطب توسط درون‌ریزی vCard از فایل سیستمی شما.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'نام خانوادگی:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'وضعیت پذیرش',
    'LBL_LIST_ACCOUNT_NAME' => 'نام حساب',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_EMAIL_ADDRESS' => 'ایمیل',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Contact List',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'موبایل:',
    'LBL_MODIFIED' => 'ویرایش کننده:',
    'LBL_MODULE_NAME' => 'مخاطب‌ها',
    'LBL_MODULE_TITLE' => 'مخاطب‌ها: صفحه اصلی',
    'LBL_NAME' => 'نام: ',
    'LBL_NEW_FORM_TITLE' => 'مخاطب جدید',
    'LBL_NOTE_SUBJECT' => 'موضوع یادداشت',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'نام فرصت:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'شناسه نقش فرصت:',
    'LBL_OPPORTUNITY_ROLE' => 'نقش فرصت',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'اپلیکیشن پورتال:',
    'LBL_PORTAL_INFORMATION' => 'اطلاعات پورتال',
    'LBL_PORTAL_NAME' => 'نام پورتال:',
    'LBL_STREET' => 'خیابان',
    'LBL_POSTAL_CODE' => 'کد پستی:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'شهر آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'کد پستی آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'استان آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ادامه آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primary Address Street 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'آدرس اصلی:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_REPORTS_TO_ID' => 'شناسه مافوق:',
    'LBL_REPORTS_TO' => 'مافوق:',
    'LBL_RESOURCE_NAME' => 'نام منبع',
    'LBL_SALUTATION' => 'عنوان اجتماعی:',
    'LBL_SAVE_CONTACT' => 'ذخیره مخاطب',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی مخاطب',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'مخاطب‌های علامت‌گذاری شده را انتخاب کنید',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'همگام‌سازی با Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'مشاهده مخاطب‌ها',
    'LNK_IMPORT_VCARD' => 'ایجاد مخاطب از vCard',
    'LNK_NEW_ACCOUNT' => 'ایجاد حساب',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CALL' => 'ثبت تماس',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_OPPORTUNITY' => 'ایجاد فرصت',
    'LNK_NEW_TASK' => 'ایجاد وظیفه',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'برای ایجاد فرصت نیاز به یک مرکز است.\n لطفاً یک مرکز جدید ایجاد یا یک مرکز موجود را انتخاب کنید.',
    'NTC_REMOVE_CONFIRMATION' => 'آیا از حذف این مخاطب از این خدمات مطمئن هستید؟',

    'LBL_LEADS_SUBPANEL_TITLE' => 'سرنخ‌ها',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'فرصت‌ها',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'اسناد',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'کپی به آدرس اولیه',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'کپی به آدرس دیگر',

    'LBL_CASES_SUBPANEL_TITLE' => 'خدمات',
    'LBL_BUGS_SUBPANEL_TITLE' => 'اشکالات',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'پروژه‌ها',
    'LBL_PROJECTS_RESOURCES' => 'منابع پروژه',
    'LBL_CAMPAIGNS' => 'کمپین‌ها',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'کمپین‌ها',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_STATE' => 'State',
    'LBL_HOMEPAGE_TITLE' => 'مخاطب‌های من',
    'LBL_OPPORTUNITIES' => 'فرصت‌ها',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'مخاطب‌ها',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'پروژه‌ها',
    'LNK_IMPORT_CONTACTS' => 'درون‌ریزی مخاطب',

    // SNIP
    'LBL_USER_SYNC' => 'همگام سازی کاربر',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',

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
    'LBL_AOS_INVOICES' => 'صورت‌حساب‌ها',
    'LBL_AOS_QUOTES' => 'نقل قول ها',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',

    'LBL_LIST_INVITE_STATUS' => 'Invite Status',
);
