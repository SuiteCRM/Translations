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
    'LBL_MODULE_NAME' => 'Langileak',
    'LBL_MODULE_TITLE' => 'Langileak: hasiera',
    'LBL_SEARCH_FORM_TITLE' => 'Langileen bilaketa',
    'LBL_LIST_FORM_TITLE' => 'Langileak',
    'LBL_NEW_FORM_TITLE' => 'Langile berria',
    'LBL_LOGIN' => 'Login',
    'LBL_RESET_PREFERENCES' => 'Lehentasun lehenetsiak lehengoratu',
    'LBL_TIME_FORMAT' => 'Ordu-formatua',
    'LBL_DATE_FORMAT' => 'Data-formatua',
    'LBL_TIMEZONE' => 'Ordu-zona',
    'LBL_CURRENCY' => 'Moneta',
    'LBL_LIST_NAME' => 'Izena',
    'LBL_LIST_LAST_NAME' => 'Abizena',
    'LBL_LIST_EMPLOYEE_NAME' => 'Langilearen izena',
    'LBL_LIST_DEPARTMENT' => 'Saila',
    'LBL_LIST_REPORTS_TO_NAME' => 'Jakinaren gainean ipini',
    'LBL_LIST_EMAIL' => 'Posta elektronikoak',
    'LBL_LIST_USER_NAME' => 'Erabiltzaile-izena',
    'LBL_ERROR' => 'Akatsa',
    'LBL_PASSWORD' => 'Pasahitza',
    'LBL_USER_NAME' => 'Erabiltzaile-izena',
    'LBL_USER_TYPE' => 'Erabiltzaile-mota',
    'LBL_FIRST_NAME' => 'Izena',
    'LBL_LAST_NAME' => 'Abizena',
    'LBL_THEME' => 'Gaia',
    'LBL_LANGUAGE' => 'Hizkuntza',
    'LBL_ADMIN' => 'Administratzailea',
    'LBL_EMPLOYEE_INFORMATION' => 'Langilearen informazioa',
    'LBL_OFFICE_PHONE' => 'Bulegoko tel.',
    'LBL_REPORTS_TO' => 'Jakinaren gainean ipini',
    'LBL_REPORTS_TO_NAME' => 'Nori jakinarazi',
    'LBL_OTHER_PHONE' => 'Hautazko Tel.',
    'LBL_NOTES' => 'Oharrak',
    'LBL_DEPARTMENT' => 'Saila',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Edozein helbide:',
    'LBL_ANY_PHONE' => 'Edozein telefono',
    'LBL_ANY_EMAIL' => 'Edozein helbide elektroniko',
    'LBL_ADDRESS' => 'Helbidea',
    'LBL_CITY' => 'Hiria',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'PK',
    'LBL_COUNTRY' => 'Herrialdea',
    'LBL_NAME' => 'Izena',
    'LBL_MOBILE_PHONE' => 'Mugikorra',
    'LBL_FAX' => 'Faxa',
    'LBL_EMAIL' => 'Helbide elektronikoa',
    'LBL_EMAIL_LINK_TYPE' => 'Posta-bezeroa',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Etxeko tel.',
    'LBL_WORK_PHONE' => 'Work Phone:',
    'LBL_EMPLOYEE_STATUS' => 'Langilearen egoera:',
    'LBL_PRIMARY_ADDRESS' => 'Helbide nagusia',
    'LBL_SAVED_SEARCH' => 'Layout Options',
    'LBL_MESSENGER_ID' => 'MI izena',
    'LBL_MESSENGER_TYPE' => 'MI mota',
    'ERR_LAST_ADMIN_1' => 'Langilearen izena',
    'ERR_LAST_ADMIN_2' => 'Administratzaile baimena duen azken langilea da. Gutxienez langile batek administratzailea izan behar du',
    'LNK_NEW_EMPLOYEE' => 'Langilea sortu',
    'LNK_EMPLOYEE_LIST' => 'Langileak',
    'ERR_DELETE_RECORD' => 'Akatsa ezabatzean',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Egoera',

    'LBL_SUITE_LOGIN' => 'Is User',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Esleipena jakinaraztea',
    'LBL_IS_ADMIN' => 'Administratzailea da',
    'LBL_GROUP' => 'Taldeko erabiltzailea',
    'LBL_PHOTO' => 'Argazkia',
    'LBL_DELETE_USER_CONFIRM' => 'This Employee is also a User. Deleting the Employee record will also delete the User record, and the User will no longer be able to access the application. Do you want to proceed with deleting this record?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Are you sure you want to delete this employee?',
    'LBL_ONLY_ACTIVE' => 'Active Employees',
    'LBL_SELECT' => 'Hautatu' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Authentication Id',
    'LBL_EXT_AUTHENTICATE' => 'External Authentication',
    'LBL_GROUP_USER' => 'Taldeko erabiltzailea',
    'LBL_LIST_ACCEPT_STATUS' => 'Egoera',
    'LBL_MODIFIED_BY' => 'Nork aldatua',
    'LBL_MODIFIED_BY_ID' => 'Modified By Id',
    'LBL_CREATED_BY_NAME' => 'Sortzailea', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API User',
    'LBL_PSW_MODIFIED' => 'Password Last Changed',
    'LBL_SHOW_ON_EMPLOYEES' => 'Langileen erregistroa erakutsi',
    'LBL_USER_HASH' => 'Pasahitza',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'System Generated Password',
    'LBL_DESCRIPTION' => 'Deskribapena',
    'LBL_FAX_PHONE' => 'Faxa',
    'LBL_STATUS' => 'Egoera',
    'LBL_ADDRESS_CITY' => 'Herria/Hiria',
    'LBL_ADDRESS_COUNTRY' => 'Herrialdea',
    'LBL_ADDRESS_INFORMATION' => 'Helbidearen informazioa',
    'LBL_ADDRESS_POSTALCODE' => 'Posta-kodea',
    'LBL_ADDRESS_STATE' => 'Address State',
    'LBL_ADDRESS_STREET' => 'Helbidea',

    'LBL_DATE_MODIFIED' => 'Aldaketa-data',
    'LBL_DATE_ENTERED' => 'Alta-data',
    'LBL_DELETED' => 'Ezabatua',

    'LBL_BUTTON_SELECT' => 'Hautatu',
    'LBL_BUTTON_CLEAR' => 'Garbitu',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Rolak',
    'LBL_SECURITYGROUPS' => 'Segurtasun-taldeak',
    'LBL_PROSPECT_LIST' => 'Prospect List',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editorea',
);
