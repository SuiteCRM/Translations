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
    'LBL_MODULE_TITLE' => 'Darbinieki',
    'LBL_SEARCH_FORM_TITLE' => 'Darbinieku meklēšana',
    'LBL_LIST_FORM_TITLE' => 'Employees',
    'LBL_NEW_FORM_TITLE' => 'Jauns darbinieks [Alt+N]',
    'LBL_LOGIN' => 'Pieteikties',
    'LBL_RESET_PREFERENCES' => 'Atlikt atpakaļ noklusētos iestatījumus',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIMEZONE' => 'Laika zona:',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_LIST_NAME' => 'Vārds:',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_EMPLOYEE_NAME' => 'Darbinieka vārds',
    'LBL_LIST_DEPARTMENT' => 'Department',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reports To',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_ERROR' => 'Kļūda.',
    'LBL_PASSWORD' => 'Password:',
    'LBL_USER_NAME' => 'User Name:',
    'LBL_USER_TYPE' => 'Lietotāja tips',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_THEME' => 'Theme:',
    'LBL_LANGUAGE' => 'Language:',
    'LBL_ADMIN' => 'Administrators:',
    'LBL_EMPLOYEE_INFORMATION' => 'Darbinieka informācija',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_REPORTS_TO' => 'Vadītāja ID:',
    'LBL_REPORTS_TO_NAME' => 'Vadītājs',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_NOTES' => 'Piezīmes:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ADDRESS' => 'Adrese:',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_NAME' => 'Vārds:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_LINK_TYPE' => 'Email Client',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM e-pasta klients:</b> Sūtīt e-pastus ar e-pasta klientu no SuiteCRM programmas.<br><b>Ārējais e-pasta klients:</b> Sūtīt e-pastu ar ārējo e-pasta klientu kas nav SuiteCRM programmā, piemēram ar  Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Mājas tālrunis:',
    'LBL_WORK_PHONE' => 'Darba tālrunis:',
    'LBL_EMPLOYEE_STATUS' => 'Darbinieka Statuss:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_SAVED_SEARCH' => 'Layout Options',
    'LBL_MESSENGER_ID' => 'Tērzēšanas vārds:',
    'LBL_MESSENGER_TYPE' => 'Tērzēšanas vide:',
    'ERR_LAST_ADMIN_1' => 'Darbinieks "',
    'ERR_LAST_ADMIN_2' => '" ir vienīgais no darbiniekiem ar administratora tiesībām. Sistēmā vismaz vienam darbiniekam ir jābūt ar administratora tiesībām.',
    'LNK_NEW_EMPLOYEE' => 'Izveidot darbinieku',
    'LNK_EMPLOYEE_LIST' => 'Darbinieki',
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Darbinieka statuss',

    'LBL_SUITE_LOGIN' => 'SuiteCRM lietotājs',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Paziņot pēc piešķiršanas',
    'LBL_IS_ADMIN' => 'Administrators',
    'LBL_GROUP' => 'Grupas lietotājs',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'Šis darbinieks ir arī lietotājs. Izdzēšot darbinieka kartiņu, tiks izdzēsts arī lietotāja ieraksts un lietotājam vairs nebūs pieeja programmai. Vai vēlaties turpināt un dzēst ierakstu?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Vai tiešām vēlaties dzēst darbinieku?',
    'LBL_ONLY_ACTIVE' => 'Aktīvie darbinieki',
    'LBL_SELECT' => 'Select' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Autentifikācijas ID',
    'LBL_EXT_AUTHENTICATE' => 'Ārējā autentifikācija',
    'LBL_GROUP_USER' => 'Group User',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_MODIFIED_BY' => 'Rediģēja',
    'LBL_MODIFIED_BY_ID' => 'Modified By Id',
    'LBL_CREATED_BY_NAME' => 'Created By', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portāla API lietotājs',
    'LBL_PSW_MODIFIED' => 'Parole pēdējoreiz mainīta',
    'LBL_SHOW_ON_EMPLOYEES' => 'Rādīt darbinieka ierakstu',
    'LBL_USER_HASH' => 'Password',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Sistēmas ģenerēta parole',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Pilsēta',
    'LBL_ADDRESS_COUNTRY' => 'Valsts',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ADDRESS_POSTALCODE' => 'Pasta indekss',
    'LBL_ADDRESS_STATE' => 'Novads',
    'LBL_ADDRESS_STREET' => 'Adrese',

    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DELETED' => 'Izdzēsts',

    'LBL_BUTTON_SELECT' => 'Select',
    'LBL_BUTTON_CLEAR' => 'Clear',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Roles',
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_PROSPECT_LIST' => 'Prospect List',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
