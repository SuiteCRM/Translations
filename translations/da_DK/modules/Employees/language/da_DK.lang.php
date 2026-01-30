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
    'LBL_MODULE_NAME' => 'Medarbejdere',
    'LBL_MODULE_TITLE' => 'Medarbejdere: Hjem',
    'LBL_SEARCH_FORM_TITLE' => 'Medarbejder søgning',
    'LBL_LIST_FORM_TITLE' => 'Medarbejdere',
    'LBL_NEW_FORM_TITLE' => 'Opret medarbejder',
    'LBL_LOGIN' => 'Log på',
    'LBL_RESET_PREFERENCES' => 'Genetabler standard præferencer',
    'LBL_TIME_FORMAT' => 'Tidsformat:',
    'LBL_DATE_FORMAT' => 'Datoformat:',
    'LBL_TIMEZONE' => 'Nuværende tid:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_LAST_NAME' => 'Efternavn',
    'LBL_LIST_EMPLOYEE_NAME' => 'Medarbejdernavn',
    'LBL_LIST_DEPARTMENT' => 'Afdeling',
    'LBL_LIST_REPORTS_TO_NAME' => 'Overordnet',
    'LBL_LIST_EMAIL' => 'Emails',
    'LBL_LIST_USER_NAME' => 'Brugernavn',
    'LBL_ERROR' => 'Fejl:',
    'LBL_PASSWORD' => 'Adgangskode:',
    'LBL_USER_NAME' => 'Brugernavn:',
    'LBL_USER_TYPE' => 'Brugertype',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_LAST_NAME' => 'Efternavn:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Sprog:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Medarbejder Information',
    'LBL_OFFICE_PHONE' => 'Arbejdstelefon:',
    'LBL_REPORTS_TO' => 'Overordnet:',
    'LBL_REPORTS_TO_NAME' => 'Overordnet',
    'LBL_OTHER_PHONE' => 'Andre Telefon:',
    'LBL_NOTES' => 'Noter:',
    'LBL_DEPARTMENT' => 'Afdeling:',
    'LBL_TITLE' => 'Jobtitel:',
    'LBL_ANY_ADDRESS' => 'Nogen adresse:',
    'LBL_ANY_PHONE' => 'Nogen telefon:',
    'LBL_ANY_EMAIL' => 'Nogen email:',
    'LBL_ADDRESS' => 'Adresse:',
    'LBL_CITY' => 'By:',
    'LBL_STATE' => 'Stat eller Region:',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_NAME' => 'Navn:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMAIL_LINK_TYPE' => 'E-mail-klient',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Privat telefon:',
    'LBL_WORK_PHONE' => 'Telefon "arbejde":',
    'LBL_EMPLOYEE_STATUS' => 'Medarbejder status:',
    'LBL_PRIMARY_ADDRESS' => 'Primær adresse:',
    'LBL_SAVED_SEARCH' => 'Gemte søgninger',
    'LBL_MESSENGER_ID' => 'IM navn:',
    'LBL_MESSENGER_TYPE' => 'IM type:',
    'ERR_LAST_ADMIN_1' => 'Medarbejdernavn "',
    'ERR_LAST_ADMIN_2' => '" er den sidste medarbejder med administrator rettigheder. Der skal være en administrator.',
    'LNK_NEW_EMPLOYEE' => 'Opret medarbejder',
    'LNK_EMPLOYEE_LIST' => 'Medarbejdere',
    'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette en kunde.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status',

    'LBL_SUITE_LOGIN' => 'Is User',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notificer ved tildeling',
    'LBL_IS_ADMIN' => 'er administrator',
    'LBL_GROUP' => 'Gruppe bruger',
    'LBL_PHOTO' => 'Billede',
    'LBL_DELETE_USER_CONFIRM' => 'Denne medarbejder er også en bruger. Sletning af medarbejderposten vil også slette brugerposten, og brugeren vil ikke længere kunne tilgå applikationen. Ønsker du at forsætte med at slette denne post?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Er du sikker på at du vil slette denne medarbejder?',
    'LBL_ONLY_ACTIVE' => 'Active Employees',
    'LBL_SELECT' => 'Vælg' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Godkendelses-id',
    'LBL_EXT_AUTHENTICATE' => 'Ekstern godkendelse',
    'LBL_GROUP_USER' => 'Gruppe bruger',
    'LBL_LIST_ACCEPT_STATUS' => 'Accepter status',
    'LBL_MODIFIED_BY' => 'Ændret af',
    'LBL_MODIFIED_BY_ID' => 'Ændret af Id',
    'LBL_CREATED_BY_NAME' => 'Oprettet af', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal-API-bruger',
    'LBL_PSW_MODIFIED' => 'adgangskoden er sidst ændret',
    'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
    'LBL_USER_HASH' => 'Adgangskode',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Systemgenereret adgangskode',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Adresse By',
    'LBL_ADDRESS_COUNTRY' => 'Adresse Land',
    'LBL_ADDRESS_INFORMATION' => 'Adresseoplysninger',
    'LBL_ADDRESS_POSTALCODE' => 'Adresse Postnr',
    'LBL_ADDRESS_STATE' => 'Adresse Stat',
    'LBL_ADDRESS_STREET' => 'Adresse Gadenavn',

    'LBL_DATE_MODIFIED' => 'Ændret dato',
    'LBL_DATE_ENTERED' => 'Påbegyndt dato',
    'LBL_DELETED' => 'Slettet',

    'LBL_BUTTON_SELECT' => 'Vælg',
    'LBL_BUTTON_CLEAR' => 'Ryd',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth token',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Roller',
    'LBL_SECURITYGROUPS' => 'Sikkerhedsgrupper',
    'LBL_PROSPECT_LIST' => 'Liste over potentielle kunder',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
