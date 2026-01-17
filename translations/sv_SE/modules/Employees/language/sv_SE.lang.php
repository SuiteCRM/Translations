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
    'LBL_MODULE_NAME' => 'Anställda',
    'LBL_MODULE_TITLE' => 'Anställda: Hem',
    'LBL_SEARCH_FORM_TITLE' => 'Sök anställd',
    'LBL_LIST_FORM_TITLE' => 'Anställda',
    'LBL_NEW_FORM_TITLE' => 'Ny anställd',
    'LBL_LOGIN' => 'Logga in',
    'LBL_RESET_PREFERENCES' => 'Återställ till default-inställningar',
    'LBL_TIME_FORMAT' => 'Tidsformat:',
    'LBL_DATE_FORMAT' => 'Datumformat:',
    'LBL_TIMEZONE' => 'Nuvarande tid:',
    'LBL_CURRENCY' => 'Valuta',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_LIST_LAST_NAME' => 'Efternamn',
    'LBL_LIST_EMPLOYEE_NAME' => 'Anställd namn',
    'LBL_LIST_DEPARTMENT' => 'Avdelning',
    'LBL_LIST_REPORTS_TO_NAME' => 'Rapporterar till',
    'LBL_LIST_EMAIL' => 'E-post',
    'LBL_LIST_USER_NAME' => 'Användarnamn',
    'LBL_ERROR' => 'Fel:',
    'LBL_PASSWORD' => 'Lösenord:',
    'LBL_USER_NAME' => 'Användarnamn',
    'LBL_USER_TYPE' => 'Användartyp',
    'LBL_FIRST_NAME' => 'Förnamn:',
    'LBL_LAST_NAME' => 'Efternamn:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Språk:',
    'LBL_ADMIN' => 'Administratör:',
    'LBL_EMPLOYEE_INFORMATION' => 'Anställningsinformation',
    'LBL_OFFICE_PHONE' => 'Telfon Arbete:',
    'LBL_REPORTS_TO' => 'Rapporterar till:',
    'LBL_REPORTS_TO_NAME' => 'Rapportera till',
    'LBL_OTHER_PHONE' => 'Annan Telefon:',
    'LBL_NOTES' => 'Anteckningar:',
    'LBL_DEPARTMENT' => 'Avdelning:',
    'LBL_TITLE' => 'Jobbtitel:',
    'LBL_ANY_ADDRESS' => 'Adress:',
    'LBL_ANY_PHONE' => 'Telefonnummer',
    'LBL_ANY_EMAIL' => 'E-post',
    'LBL_ADDRESS' => 'Adress:',
    'LBL_CITY' => 'Stad:',
    'LBL_STATE' => 'Region:',
    'LBL_POSTAL_CODE' => 'Postnummer:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_NAME' => 'Namn:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'E-postadress:',
    'LBL_EMAIL_LINK_TYPE' => 'E-postklient',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Hemtelefon:',
    'LBL_WORK_PHONE' => 'Arbets Telefon:',
    'LBL_EMPLOYEE_STATUS' => 'Anställningsstatus:',
    'LBL_PRIMARY_ADDRESS' => 'Primär adress:',
    'LBL_SAVED_SEARCH' => 'Layoutalternativ',
    'LBL_MESSENGER_ID' => 'IM-namn:',
    'LBL_MESSENGER_TYPE' => 'IM-typ:',
    'ERR_LAST_ADMIN_1' => 'Namnet "',
    'ERR_LAST_ADMIN_2' => '" tillhör den enda anställde med administratörsrättigheter. Minst en anställd måste ha administratörsrättigheter.',
    'LNK_NEW_EMPLOYEE' => 'Skapa anställd',
    'LNK_EMPLOYEE_LIST' => 'Anställda',
    'ERR_DELETE_RECORD' => 'En post måste specificeras för att ta bort företaget.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status',

    'LBL_SUITE_LOGIN' => 'Är användare',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Meddela vid Uppdrag',
    'LBL_IS_ADMIN' => 'Är Administratör',
    'LBL_GROUP' => 'Grupp Användare',
    'LBL_PHOTO' => 'Foto',
    'LBL_DELETE_USER_CONFIRM' => 'Den anställde är också en användare. Att radera den här posten innebär att användaren inte längre får tillgång applikationen. Vill du fortsätta med att ta bort denna post?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Är du säker på att du vill radera den här posten?',
    'LBL_ONLY_ACTIVE' => 'Aktiva anställda',
    'LBL_SELECT' => 'Markera' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Verifieringsid',
    'LBL_EXT_AUTHENTICATE' => 'Extern verifiering',
    'LBL_GROUP_USER' => 'Grupp Användare',
    'LBL_LIST_ACCEPT_STATUS' => 'Acceptera status',
    'LBL_MODIFIED_BY' => 'Ändrad av',
    'LBL_MODIFIED_BY_ID' => 'Ändrad Av Id',
    'LBL_CREATED_BY_NAME' => 'Skapad av', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API användare',
    'LBL_PSW_MODIFIED' => 'lösenord senast ändrat',
    'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
    'LBL_USER_HASH' => 'Lösenord',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Systemgenererat lösenord',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Adress ort:',
    'LBL_ADDRESS_COUNTRY' => 'Adress land:',
    'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
    'LBL_ADDRESS_POSTALCODE' => 'Adress postnummer:',
    'LBL_ADDRESS_STATE' => 'Adress stat:',
    'LBL_ADDRESS_STREET' => 'Adress gata:',

    'LBL_DATE_MODIFIED' => 'Datum Ändrad',
    'LBL_DATE_ENTERED' => 'Inmatningsdatum',
    'LBL_DELETED' => 'Raderad',

    'LBL_BUTTON_SELECT' => 'Markera',
    'LBL_BUTTON_CLEAR' => 'Rensa',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Roller',
    'LBL_SECURITYGROUPS' => 'Säkerhetsgrupper',
    'LBL_PROSPECT_LIST' => 'Prospek lista',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Redigerare',
);
