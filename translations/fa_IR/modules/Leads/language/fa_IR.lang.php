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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'برای حذف این سرنخ باید یک شماره سابقه معین کنید.',
    'LBL_ACCOUNT_DESCRIPTION' => 'شرح مرکز',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'نام حساب:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_ADDRESS_INFORMATION' => 'اطلاعات آدرس',
    'LBL_ALT_ADDRESS_CITY' => 'شهر آدرس جایگزین',
    'LBL_ALT_ADDRESS_COUNTRY' => 'کشور آدرس جایگزین',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'کد پستی آدرس جایگزین',
    'LBL_ALT_ADDRESS_STATE' => 'استان آدرس جایگزین',
    'LBL_ALT_ADDRESS_STREET_2' => 'ادامه آدرس جایگزین',
    'LBL_ALT_ADDRESS_STREET_3' => 'ادامه آدرس جایگزین',
    'LBL_ALT_ADDRESS_STREET' => 'آدرس جایگزین',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'هر آدرسی:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'شناسه مخاطب',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'نام سرنخ:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'فرصت-سرنخ:',
    'LBL_CONTACT_ROLE' => 'نقش: ',
    'LBL_CONTACT' => 'سرنخ:',
    'LBL_CONVERTED_ACCOUNT' => 'مرکز تبدیل شده',
    'LBL_CONVERTED_CONTACT' => 'مخاطب تبدیل‌شده:',
    'LBL_CONVERTED_OPP' => 'فرصت تبدیل شده:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'تبدیل سرنخ',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'هشدار: وضعیت سرنخی که قصد تبدیل آن را دارید «تبدیل شده» است. از این سرنخ ممکن است مخاطب و/یا حساب قبلا ایجاد شده باشند. اگر قصد ادامه تبدیل سرنخ را دارید، روی ذخیره کلیک کنید. برای بازگشت به سرنخ بدون تبدیل روی لغو کلیک کنید.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' مخاطب احتمالی: ',
    'LBL_COUNTRY' => 'کشور:',
    'LBL_CREATED_NEW' => 'یک رکورد جدید ایجاد کرد',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'سرنخ‌ها',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'توضیحات: ',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'سرنخ‌های مشابه',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'ایجاد خودکار سرنخ جدید توسط درون‌ریزی vCard از فایل سیستمی شما.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'توضیحات منبع سرنخ:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'وضعیت پذیرش',
    'LBL_LIST_ACCOUNT_NAME' => 'نام حساب',
    'LBL_LIST_CONTACT_NAME' => 'نام سرنخ',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL_ADDRESS' => 'ایمیل',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'لیست سرنخ',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'توضیحات منبع سرنخ',
    'LBL_LIST_LEAD_SOURCE' => 'منبع سرنخ',
    'LBL_LIST_MY_LEADS' => 'سرنخ‌های من',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'معرف',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'سرنخ‌ها',
    'LBL_MODULE_TITLE' => 'سرنخ‌ها: صفحه اصلی',
    'LBL_NAME' => 'نام: ',
    'LBL_NEW_FORM_TITLE' => 'سرنخ جدید',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'مقدار فرصت:',
    'LBL_OPPORTUNITY_ID' => 'شناسه فرصت',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'اپلیکیشن پورتال',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'کد پستی:',
    'LBL_STREET' => 'خیابان',
    'LBL_PRIMARY_ADDRESS_CITY' => 'شهر آدرس اولیه',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'کشور آدرس اولیه',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'کد پستی آدرس اولیه',
    'LBL_PRIMARY_ADDRESS_STATE' => 'استان آدرس اولیه',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ادامه آدرس اولیه',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'ادامه آدرس اولیه',
    'LBL_PRIMARY_ADDRESS_STREET' => 'آدرس اولیه',
    'LBL_PRIMARY_ADDRESS' => 'آدرس اصلی:',
    'LBL_REFERED_BY' => 'معرف:',
    'LBL_REPORTS_TO_ID' => 'شناسه مافوق',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی سرنخ',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'انتخاب سرنخ‌های علامت‌گذاری شده',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'شرح وضعیت:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'ایجاد سرنخ از vCard',
    'LNK_LEAD_LIST' => 'مشاهده سرنخ‌ها',
    'LNK_NEW_ACCOUNT' => 'ایجاد حساب',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_LEAD' => 'ایجاد سرنخ',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_TASK' => 'ایجاد وظیفه',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_CALL' => 'ثبت تماس',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_OPPORTUNITY' => 'ایجاد فرصت',
    'LNK_SELECT_ACCOUNTS' => ' <b>یا</b> مرکز را انتخاب کنید',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_REMOVE_CONFIRMATION' => 'آیا از حذف این سرنخ از این خدمات مطمئن هستید؟',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'کمپین‌ها',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CAMPAIGN_LEAD' => 'کمپین‌ها',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGNS' => 'کمپین‌ها',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Required',
    'LBL_CONVERT_SELECT' => 'اجازه انتخاب بده',
    'LBL_CONVERT_COPY' => 'کپی داده‌ها',
    'LBL_CONVERT_EDIT' => 'ویرایش',
    'LBL_CONVERT_DELETE' => 'حذف',
    'LBL_CONVERT_ADD_MODULE' => 'افزودن ماژول',
    'LBL_CREATE' => 'ایجاد',
    'LBL_SELECT' => ' <b>یا</b>انتخاب کنید',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'درون‌‍ریزی سرنخ',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'ماژول برای ایجاد یک رکورد جدید در آن.',
    'LBL_REQUIRED_TIP' => 'قبل از اینکه سرنخ بتواند تبدیل شود، ماژول های مورد نیاز باید ایجاد یا انتخاب شوند.',
    'LBL_COPY_TIP' => 'اگر علامت‌گذاری شود، فیلدهای سرنخ در فیلدهایی با همان نام در سابقه جدید ایجاد شده کپی خواهند شد.',
    'LBL_SELECTION_TIP' => 'در حین فرایند تبدیل سرنخ، ماژول‌هایی با فیلدهای مربوط در مخاطب‌ها را می‌توان به جای ایجاد، انتخاب کرد.',
    'LBL_EDIT_TIP' => 'چیدمان صحفه‌ تبدیل برای این ماژول را ویرایش نمایید.',
    'LBL_DELETE_TIP' => 'این ماژول را از چیدمان صفحه تبدیل حذف نمایید.',

    'LBL_ACTIVITIES_MOVE' => 'فعالیت‌ها را انتقال بده به',
    'LBL_ACTIVITIES_COPY' => 'فعالیت‌ها را کپی کن در',
    'LBL_ACTIVITIES_MOVE_HELP' => "سابقه مورد نظر برای انتقال فعالیت‌های سرنخ را انتخاب نمایید. وظایفت، تماس‌ها، جلسات، یادداشت‌ها و ایمیل‌ها به سابقه‌(ها)ی انتخاب شده منتقل خواهند شد.",
    'LBL_ACTIVITIES_COPY_HELP' => "سابقه(ها)ی مورد نظر برای کپی فعالیت‌های سرنخ به آن(ها) را انتخاب نمایید. وظایفت، تماس‌ها، جلسات و یادداشت‌های جدید برای سابقه‌(ها)ی انتخاب شده ایجاد خواهند شد. ایمیل‌ها به سابقه(ها)ی انتخاب شده مرتبط خواهند شد.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'ویرایش' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
