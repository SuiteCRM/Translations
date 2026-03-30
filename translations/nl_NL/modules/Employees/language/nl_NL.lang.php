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
    'LBL_MODULE_TITLE' => 'Personeel: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Personeel zoeken',
    'LBL_LIST_FORM_TITLE' => 'Employees',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe medewerker',
    'LBL_LOGIN' => 'Inloggen',
    'LBL_RESET_PREFERENCES' => 'Standaard instellingen terugzetten',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIMEZONE' => 'Huidige tijd:',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_EMPLOYEE_NAME' => 'Personeelsnaam',
    'LBL_LIST_DEPARTMENT' => 'Department',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reports To',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_ERROR' => 'Fout:',
    'LBL_PASSWORD' => 'Password:',
    'LBL_USER_NAME' => 'User Name:',
    'LBL_USER_TYPE' => 'Gebruikerstype',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_THEME' => 'Theme:',
    'LBL_LANGUAGE' => 'Taal:',
    'LBL_ADMIN' => 'Beheerder:',
    'LBL_EMPLOYEE_INFORMATION' => 'Personeelsinformatie',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_REPORTS_TO' => 'Rapporteert aan ID:',
    'LBL_REPORTS_TO_NAME' => 'Rapporteert aan',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_NOTES' => 'Notities:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_TITLE' => 'Functieomschrijving:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ANY_EMAIL' => '(Deel van) e-mail:',
    'LBL_ADDRESS' => 'Adres:',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_NAME' => 'Naam: ',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_LINK_TYPE' => 'E-mail client',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Stuur e-mails met behulp van de e-mail client in de SuiteCRM toepassing. <br> <b>Externe e-mailclient:</b> Stuur een email met behulp van een e-mail client buiten de SuiteCRM toepassing, zoals Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Prive',
    'LBL_WORK_PHONE' => 'Werk:',
    'LBL_EMPLOYEE_STATUS' => 'Personeelsstatus:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_SAVED_SEARCH' => 'Layout Options',
    'LBL_MESSENGER_ID' => 'IM naam:',
    'LBL_MESSENGER_TYPE' => 'IM type:',
    'ERR_LAST_ADMIN_1' => 'De medewerker naam',
    'ERR_LAST_ADMIN_2' => 'is de laatste gebruiker die Administrator rechten heeft. Minstens een gebruiker moet Administrator zijn.',
    'LNK_NEW_EMPLOYEE' => 'Nieuwe medewerker',
    'LNK_EMPLOYEE_LIST' => 'Personeel',
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status',

    'LBL_SUITE_LOGIN' => 'Is gebruiker',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Waarschuw bij toegewezen items',
    'LBL_IS_ADMIN' => 'Is administrator',
    'LBL_GROUP' => 'Groepsgebruiker.',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'Deze medewerker is ook een gebruiker. Met het verwijderen van de werknemer wordt tevens de gebruiker verwijderd, de gebruiker zal niet meer in staat zijn om SuiteCRM te gebruiken. Wilt u verder wilt gaan met het verwijderen van dit record?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Weet u zeker dat u wilt deze werknemer wilt verwijderen?',
    'LBL_ONLY_ACTIVE' => 'Actieve medewerkers',
    'LBL_SELECT' => 'Select' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Authenticatie ID',
    'LBL_EXT_AUTHENTICATE' => 'Externe authenticatie',
    'LBL_GROUP_USER' => 'Group User',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_MODIFIED_BY' => 'Gewijzigd door',
    'LBL_MODIFIED_BY_ID' => 'Gewijzigd door ID',
    'LBL_CREATED_BY_NAME' => 'Aangemaakt door', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portaal API-gebruiker',
    'LBL_PSW_MODIFIED' => 'Wachtwoord laatst gewijzigd',
    'LBL_SHOW_ON_EMPLOYEES' => 'Toon medewerkersrecord',
    'LBL_USER_HASH' => 'Password',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Wachtwoord door systeem aangemaakt',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Adres woonplaats',
    'LBL_ADDRESS_COUNTRY' => 'Adres land',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ADDRESS_POSTALCODE' => 'Adres postcode',
    'LBL_ADDRESS_STATE' => 'Adres provincie',
    'LBL_ADDRESS_STREET' => 'Adres straat',

    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DELETED' => 'Verwijderd',

    'LBL_BUTTON_SELECT' => 'Select',
    'LBL_BUTTON_CLEAR' => 'Clear',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project-gebruikers uit de titel van het Project',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project contacten van contacten titel',
    'LBL_ROLES' => 'Roles',
    'LBL_SECURITYGROUPS' => 'Security Groepen',
    'LBL_PROSPECT_LIST' => 'Prospect List',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Twee-traps authenticatie Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
