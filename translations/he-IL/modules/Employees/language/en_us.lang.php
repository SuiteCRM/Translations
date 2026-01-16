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
    'LBL_MODULE_NAME' => 'עובדים',
    'LBL_MODULE_TITLE' => 'עובדים:בית',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש עובדים',
    'LBL_LIST_FORM_TITLE' => 'עובדים',
    'LBL_NEW_FORM_TITLE' => 'עובד חדש',
    'LBL_LOGIN' => 'כניסת משתמש',
    'LBL_RESET_PREFERENCES' => 'חזרה לברירת המחדל של העדפות',
    'LBL_TIME_FORMAT' => 'פורמט זמן:',
    'LBL_DATE_FORMAT' => 'פורמט תאריך:',
    'LBL_TIMEZONE' => 'זמן מוכחי:',
    'LBL_CURRENCY' => 'מטבע:',
    'LBL_LIST_NAME' => 'שם',
    'LBL_LIST_LAST_NAME' => 'שם משפחה',
    'LBL_LIST_EMPLOYEE_NAME' => 'שם עובד',
    'LBL_LIST_DEPARTMENT' => 'מחלקה',
    'LBL_LIST_REPORTS_TO_NAME' => 'דווח ל',
    'LBL_LIST_EMAIL' => 'מיילים',
    'LBL_LIST_USER_NAME' => 'שם משתמש',
    'LBL_ERROR' => 'הערה:',
    'LBL_PASSWORD' => 'סיסמא:',
    'LBL_USER_NAME' => 'שם משתמש:',
    'LBL_USER_TYPE' => 'סוג משתמש',
    'LBL_FIRST_NAME' => 'שם פרטי:',
    'LBL_LAST_NAME' => 'שם משפחה:',
    'LBL_THEME' => 'נושא:',
    'LBL_LANGUAGE' => 'שפה:',
    'LBL_ADMIN' => 'אדמיניסטרטור:',
    'LBL_EMPLOYEE_INFORMATION' => 'פרטי עובד',
    'LBL_OFFICE_PHONE' => 'טלפון בעבודה:',
    'LBL_REPORTS_TO' => 'דווח ל:',
    'LBL_REPORTS_TO_NAME' => 'דוחות ל',
    'LBL_OTHER_PHONE' => 'טלפון נוסף:',
    'LBL_NOTES' => 'תזכורות:',
    'LBL_DEPARTMENT' => 'מחלקה:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'כתובת אחרת:',
    'LBL_ANY_PHONE' => 'טלפון אחר:',
    'LBL_ANY_EMAIL' => 'אי- מייל אחר:',
    'LBL_ADDRESS' => 'כתובת:',
    'LBL_CITY' => 'עיר:',
    'LBL_STATE' => 'מדינה או אזור:',
    'LBL_POSTAL_CODE' => 'מיקוד:',
    'LBL_COUNTRY' => 'ארץ:',
    'LBL_NAME' => 'שם:',
    'LBL_MOBILE_PHONE' => 'נייד:',
    'LBL_FAX' => 'פקס:',
    'LBL_EMAIL' => 'דואל:',
    'LBL_EMAIL_LINK_TYPE' => 'לקוח דואר אלקטרוני',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'טלפון בבית:',
    'LBL_WORK_PHONE' => 'טלפון בעבודה:',
    'LBL_EMPLOYEE_STATUS' => 'סטטוס עובד:',
    'LBL_PRIMARY_ADDRESS' => 'כתובת ראשית:',
    'LBL_SAVED_SEARCH' => 'פרמטרים',
    'LBL_MESSENGER_ID' => 'שם IM:',
    'LBL_MESSENGER_TYPE' => 'סוג IM:',
    'ERR_LAST_ADMIN_1' => 'שם העובד "',
    'ERR_LAST_ADMIN_2' => '"  הוא העובד האחרון עם הרשאת אדמיניסטרטור. לפחות משתמש אחד חייב להיות ברמת אדמיניסטרטור.',
    'LNK_NEW_EMPLOYEE' => 'צור עובד',
    'LNK_EMPLOYEE_LIST' => 'עובדים',
    'ERR_DELETE_RECORD' => 'מספר רשומה חייבת להיות מפורטת עמ"נ למחוק את החשבון',
    'LBL_LIST_EMPLOYEE_STATUS' => 'סטטוס',

    'LBL_SUITE_LOGIN' => 'Is User',
    'LBL_RECEIVE_NOTIFICATIONS' => 'התראת משימה',
    'LBL_IS_ADMIN' => 'זה אדמיניסטרטור',
    'LBL_GROUP' => 'קבוצת משתמש',
    'LBL_PHOTO' => 'תמונה',
    'LBL_DELETE_USER_CONFIRM' => 'This Employee is also a User. Deleting the Employee record will also delete the User record, and the User will no longer be able to access the application. Do you want to proceed with deleting this record?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Are you sure you want to delete this employee?',
    'LBL_ONLY_ACTIVE' => 'Active Employees',
    'LBL_SELECT' => 'בחר' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Authentication Id',
    'LBL_EXT_AUTHENTICATE' => 'External Authentication',
    'LBL_GROUP_USER' => 'קבוצת משתמש',
    'LBL_LIST_ACCEPT_STATUS' => 'אשר סטטוס',
    'LBL_MODIFIED_BY' => 'שונה ע"י',
    'LBL_MODIFIED_BY_ID' => 'שונה על ידי Id',
    'LBL_CREATED_BY_NAME' => 'נוצר ע"י', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API User',
    'LBL_PSW_MODIFIED' => 'Password Last Changed',
    'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
    'LBL_USER_HASH' => 'סיסמא',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'System Generated Password',
    'LBL_DESCRIPTION' => 'תיאור',
    'LBL_FAX_PHONE' => 'פקס',
    'LBL_STATUS' => 'סטטוס',
    'LBL_ADDRESS_CITY' => 'כתובת עיר',
    'LBL_ADDRESS_COUNTRY' => 'כתובת ארץ',
    'LBL_ADDRESS_INFORMATION' => 'פירוט כתובת ',
    'LBL_ADDRESS_POSTALCODE' => 'כתובת מיקוד',
    'LBL_ADDRESS_STATE' => 'פירוט כתובת ',
    'LBL_ADDRESS_STREET' => 'כתובת רחוב',

    'LBL_DATE_MODIFIED' => 'שונה בתאריך',
    'LBL_DATE_ENTERED' => 'תאריך כניסה',
    'LBL_DELETED' => 'נמחק',

    'LBL_BUTTON_SELECT' => 'בחר',
    'LBL_BUTTON_CLEAR' => 'נקה',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'אסימון OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'תפקידים',
    'LBL_SECURITYGROUPS' => 'קבוצות אבטחה',
    'LBL_PROSPECT_LIST' => 'רשימת תחזיות',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
