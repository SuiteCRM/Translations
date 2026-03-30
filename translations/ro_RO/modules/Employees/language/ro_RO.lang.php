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
    'LBL_MODULE_NAME' => 'Employees',
    'LBL_MODULE_TITLE' => 'Angajați: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Căutare angajat',
    'LBL_LIST_FORM_TITLE' => 'Employees',
    'LBL_NEW_FORM_TITLE' => 'Angajat nou',
    'LBL_LOGIN' => 'Autentificare',
    'LBL_RESET_PREFERENCES' => 'Resetează la preferințele inițiale',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIMEZONE' => 'Ora curentă:',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_EMPLOYEE_NAME' => 'Nume angajat',
    'LBL_LIST_DEPARTMENT' => 'Department',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reports To',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_ERROR' => 'Eroare:',
    'LBL_PASSWORD' => 'Password:',
    'LBL_USER_NAME' => 'User Name:',
    'LBL_USER_TYPE' => 'Tip utilizator',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_THEME' => 'Theme:',
    'LBL_LANGUAGE' => 'Language:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Informații angajat',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_REPORTS_TO' => 'Raportează către Id:',
    'LBL_REPORTS_TO_NAME' => 'Raportează către',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_NOTES' => 'Note:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ADDRESS' => 'Adresă:',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_NAME' => 'Name:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_LINK_TYPE' => 'Email Client',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Clientul de email al SuiteCRM:</b> Trimite e-mailuri folosind clientul de e-mail din aplicația Sugar.<br><b>Clientul extern de email:</b> Trimite e-mail folosind un client de e-mail în afara aplicației SuiteCRM, cum ar fi Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Telefon acasă:',
    'LBL_WORK_PHONE' => 'Telefon serviciu:',
    'LBL_EMPLOYEE_STATUS' => 'Status angajat:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_SAVED_SEARCH' => 'Layout Options',
    'LBL_MESSENGER_ID' => 'Nume IM:',
    'LBL_MESSENGER_TYPE' => 'Tip IM:',
    'ERR_LAST_ADMIN_1' => 'Numele angajatului "',
    'ERR_LAST_ADMIN_2' => '" este ultimul angajat cu acces la administrator. Cel puțin un angajat trebuie să fie administrator.',
    'LNK_NEW_EMPLOYEE' => 'Creare angajat',
    'LNK_EMPLOYEE_LIST' => 'Vezi angajații',
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Statut angajat',

    'LBL_SUITE_LOGIN' => 'Id utilizator',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notifică la atribuire',
    'LBL_IS_ADMIN' => 'Este administrator',
    'LBL_GROUP' => 'Grup utilizatori',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'Acest angajat este, de asemenea, un utilizator. Ștergerea înregistrării angajaților va șterge și înregistrarea utilizatorului, iar utilizatorul nu va mai putea accesa aplicația. Doriți să continuați cu ștergerea acestei înregistrări?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Ești sigur ca dorești sa ștergi acest angajat?',
    'LBL_ONLY_ACTIVE' => 'Angajați activi',
    'LBL_SELECT' => 'Select' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Id-ul de autentificare',
    'LBL_EXT_AUTHENTICATE' => 'Autentificare externă',
    'LBL_GROUP_USER' => 'Group User',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_MODIFIED_BY' => 'Modified By',
    'LBL_MODIFIED_BY_ID' => 'Modified By Id',
    'LBL_CREATED_BY_NAME' => 'Created By', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal utilizator API',
    'LBL_PSW_MODIFIED' => 'Parola a fost schimbată',
    'LBL_SHOW_ON_EMPLOYEES' => 'Afișează înregistrarea angajaților',
    'LBL_USER_HASH' => 'Password',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Parola generată de sistem',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Adresă Oraș',
    'LBL_ADDRESS_COUNTRY' => 'Adresă Țară',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ADDRESS_POSTALCODE' => 'Adresă cod poștal',
    'LBL_ADDRESS_STATE' => 'Adresa - Stat',
    'LBL_ADDRESS_STREET' => 'Adresa - Stradă',

    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DELETED' => 'Deleted',

    'LBL_BUTTON_SELECT' => 'Select',
    'LBL_BUTTON_CLEAR' => 'Clear',

    'LBL_CONTACTS_SYNC' => 'Sincronizare contact',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Utilizatori proiect din Titlul Proiectului',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contacte proiect din Titlu Contacte',
    'LBL_ROLES' => 'Roles',
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_PROSPECT_LIST' => 'Prospect List',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Interfață autentificare cu doi factori:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
