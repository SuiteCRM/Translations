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
    'LBL_MODULE_NAME' => 'ملازمین',
    'LBL_MODULE_TITLE' => 'Employees: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Employee Search',
    'LBL_LIST_FORM_TITLE' => 'ملازمین',
    'LBL_NEW_FORM_TITLE' => 'New Employee',
    'LBL_LOGIN' => 'Login',
    'LBL_RESET_PREFERENCES' => 'Reset To Default Preferences',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIMEZONE' => 'Current Time:',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_LAST_NAME' => 'آخری نام',
    'LBL_LIST_EMPLOYEE_NAME' => 'Employee Name',
    'LBL_LIST_DEPARTMENT' => 'محکمہ',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reports To',
    'LBL_LIST_EMAIL' => 'ای میل',
    'LBL_LIST_USER_NAME' => 'صارف کا نام',
    'LBL_ERROR' => 'Error:',
    'LBL_PASSWORD' => 'پاس ورڈ:',
    'LBL_USER_NAME' => 'صارف کا نام:',
    'LBL_USER_TYPE' => 'User Type',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_THEME' => 'Theme:',
    'LBL_LANGUAGE' => 'Language:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Employee Information',
    'LBL_OFFICE_PHONE' => 'آفس کا فون:',
    'LBL_REPORTS_TO' => 'Reports to Id:',
    'LBL_REPORTS_TO_NAME' => 'Reports to',
    'LBL_OTHER_PHONE' => 'دیگر فون:',
    'LBL_NOTES' => 'Notes:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'کوئی بھی پتہ:',
    'LBL_ANY_PHONE' => 'کوئی بھی فون:',
    'LBL_ANY_EMAIL' => 'کوئی بھی ای میل:',
    'LBL_ADDRESS' => 'Address:',
    'LBL_CITY' => 'شہر:',
    'LBL_STATE' => 'ریاست یا علاقہ:',
    'LBL_POSTAL_CODE' => 'پوسٹل کوڈ:',
    'LBL_COUNTRY' => 'ملک:',
    'LBL_NAME' => 'نام:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_FAX' => 'فیکس:',
    'LBL_EMAIL' => 'ای میل اڈریس:',
    'LBL_EMAIL_LINK_TYPE' => 'Email Client',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_WORK_PHONE' => 'Work Phone:',
    'LBL_EMPLOYEE_STATUS' => 'Employee Status:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_SAVED_SEARCH' => 'Layout Options',
    'LBL_MESSENGER_ID' => 'IM Name:',
    'LBL_MESSENGER_TYPE' => 'IM Type:',
    'ERR_LAST_ADMIN_1' => 'The employee name "',
    'ERR_LAST_ADMIN_2' => '" is the last employee with administrator access. At least one employee must be an administrator.',
    'LNK_NEW_EMPLOYEE' => 'Create Employee',
    'LNK_EMPLOYEE_LIST' => 'View Employees',
    'ERR_DELETE_RECORD' => 'اکاؤنٹ کو ختم کرنے کیلئے آپ کو ایک ریکارڈ نمبر کی وضاحت کرنا ضروری ہے.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Employee Status',

    'LBL_SUITE_LOGIN' => 'Is User',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notify on Assignment',
    'LBL_IS_ADMIN' => 'Is Administrator',
    'LBL_GROUP' => 'Group User',
    'LBL_PHOTO' => 'تصویر',
    'LBL_DELETE_USER_CONFIRM' => 'This Employee is also a User. Deleting the Employee record will also delete the User record, and the User will no longer be able to access the application. Do you want to proceed with deleting this record?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Are you sure you want to delete this employee?',
    'LBL_ONLY_ACTIVE' => 'Active Employees',
    'LBL_SELECT' => 'منتخب کریں' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Authentication Id',
    'LBL_EXT_AUTHENTICATE' => 'External Authentication',
    'LBL_GROUP_USER' => 'Group User',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_MODIFIED_BY' => 'ترمیم کردہ',
    'LBL_MODIFIED_BY_ID' => 'Modified By Id',
    'LBL_CREATED_BY_NAME' => 'کی طرف سے پیدا کیا ہوا', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API User',
    'LBL_PSW_MODIFIED' => 'Password Last Changed',
    'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
    'LBL_USER_HASH' => 'پاس ورڈ',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'System Generated Password',
    'LBL_DESCRIPTION' => 'تفصیل',
    'LBL_FAX_PHONE' => 'فیکس',
    'LBL_STATUS' => 'حیثیت',
    'LBL_ADDRESS_CITY' => 'Address City',
    'LBL_ADDRESS_COUNTRY' => 'Address Country',
    'LBL_ADDRESS_INFORMATION' => 'پتہ کے معلومات',
    'LBL_ADDRESS_POSTALCODE' => 'Address Postal Code',
    'LBL_ADDRESS_STATE' => 'Address State',
    'LBL_ADDRESS_STREET' => 'Address Street',

    'LBL_DATE_MODIFIED' => 'تاریخ ترمیم کی گئی',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DELETED' => 'ختم کر دیا گیا',

    'LBL_BUTTON_SELECT' => 'منتخب کریں',
    'LBL_BUTTON_CLEAR' => 'Clear',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth کے ٹوکن',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'کردار',
    'LBL_SECURITYGROUPS' => 'سیکورٹی گروہ',
    'LBL_PROSPECT_LIST' => 'متوقع فہرست',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
