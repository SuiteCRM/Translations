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
    'LBL_MODULE_NAME' => 'Employees',
    'LBL_MODULE_TITLE' => 'Töötajad: Avaleht',
    'LBL_SEARCH_FORM_TITLE' => 'Töötaja otsing',
    'LBL_LIST_FORM_TITLE' => 'Employees',
    'LBL_NEW_FORM_TITLE' => 'Uus töötaja',
    'LBL_LOGIN' => 'Logi sisse',
    'LBL_RESET_PREFERENCES' => 'Taasta esmased eelistused',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIMEZONE' => 'Praegune aeg:',
    'LBL_CURRENCY' => 'Para Birimi',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_LAST_NAME' => 'Perekonnanimi',
    'LBL_LIST_EMPLOYEE_NAME' => 'Töötaja nimi',
    'LBL_LIST_DEPARTMENT' => 'Department',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reports To',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_ERROR' => 'Viga:',
    'LBL_PASSWORD' => 'Password:',
    'LBL_USER_NAME' => 'User Name:',
    'LBL_USER_TYPE' => 'Kasutaja tüüp',
    'LBL_FIRST_NAME' => 'Eesnimi:',
    'LBL_LAST_NAME' => 'Perekonnanimi:',
    'LBL_THEME' => 'Theme:',
    'LBL_LANGUAGE' => 'Language:',
    'LBL_ADMIN' => 'Administraator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Töötaja info',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_REPORTS_TO' => 'Juhataja Id:',
    'LBL_REPORTS_TO_NAME' => 'Juhataja',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_NOTES' => 'Märkused:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_TITLE' => 'Ametinimetus:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ADDRESS' => 'Aadress:',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_NAME' => 'Name:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_LINK_TYPE' => 'Email Client',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Telefon kodus:',
    'LBL_WORK_PHONE' => 'Telefon tööl:',
    'LBL_EMPLOYEE_STATUS' => 'Töötaja olek:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_SAVED_SEARCH' => 'Layout Options',
    'LBL_MESSENGER_ID' => 'IM nimi:',
    'LBL_MESSENGER_TYPE' => 'IM tüüp:',
    'ERR_LAST_ADMIN_1' => 'Töötaja nimi "',
    'ERR_LAST_ADMIN_2' => '" on viimane töötaja, kes on administraator. Vähemalt üks töötaja peab olema administraator.',
    'LNK_NEW_EMPLOYEE' => 'Loo töötaja',
    'LNK_EMPLOYEE_LIST' => 'Vaata töötajaid',
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Töötaja olek',

    'LBL_SUITE_LOGIN' => 'On kasutaja',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Teavita määramisest',
    'LBL_IS_ADMIN' => 'On administraator',
    'LBL_GROUP' => 'Grupi kasutaja',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'See töötaja on ka Kasutaja. Töötaja kirje kustutamisel kustutatakse ka Kasutaja kirje ning Kasutaja ei oma enam ligipääsu rakendusele. Kas soovid selle kirje kustutamisega jätkata?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Kas oled kindel, et soovid selle töötaja kustutada?',
    'LBL_ONLY_ACTIVE' => 'Aktiivsed töötajad',
    'LBL_SELECT' => 'Select' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Autoriseerimise Id',
    'LBL_EXT_AUTHENTICATE' => 'Väline autentimine',
    'LBL_GROUP_USER' => 'Group User',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_MODIFIED_BY' => 'Modified By',
    'LBL_MODIFIED_BY_ID' => 'Modified By Id',
    'LBL_CREATED_BY_NAME' => 'Created By', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API kasutaja',
    'LBL_PSW_MODIFIED' => 'viimati muudetud parool',
    'LBL_SHOW_ON_EMPLOYEES' => 'Näita töötaja infot',
    'LBL_USER_HASH' => 'Password',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Süsteemi poolt loodud parool',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Aadress liinn',
    'LBL_ADDRESS_COUNTRY' => 'Maakond',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ADDRESS_POSTALCODE' => 'Postiindeks',
    'LBL_ADDRESS_STATE' => 'Riik',
    'LBL_ADDRESS_STREET' => 'T\'änav',

    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DELETED' => 'Deleted',

    'LBL_BUTTON_SELECT' => 'Select',
    'LBL_BUTTON_CLEAR' => 'Clear',

    'LBL_CONTACTS_SYNC' => 'Kontaktide sünkroonimine',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Projekti kasutajad projekti pealkirjast',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Projekti kontaktid kontaktide pealkirjast',
    'LBL_ROLES' => 'Roles',
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_PROSPECT_LIST' => 'Prospect List',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
