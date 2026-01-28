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
    'LBL_MODULE_NAME' => 'Zaposleni',
    'LBL_MODULE_TITLE' => 'Zaposleni: Domov',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje zaposlenih',
    'LBL_LIST_FORM_TITLE' => 'Zaposleni',
    'LBL_NEW_FORM_TITLE' => 'Nov zaposleni',
    'LBL_LOGIN' => 'Prijava',
    'LBL_RESET_PREFERENCES' => 'Resetiranje na prednastavljene preference',
    'LBL_TIME_FORMAT' => 'Oblika časovnega zapisa:',
    'LBL_DATE_FORMAT' => 'Datumski zapis:',
    'LBL_TIMEZONE' => 'Trenutni čas:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_LAST_NAME' => 'Priimek',
    'LBL_LIST_EMPLOYEE_NAME' => 'Ime zaposlenega',
    'LBL_LIST_DEPARTMENT' => 'Oddelek',
    'LBL_LIST_REPORTS_TO_NAME' => 'Odgovarja',
    'LBL_LIST_EMAIL' => 'E-pošta',
    'LBL_LIST_USER_NAME' => 'Uporabniško ime',
    'LBL_ERROR' => 'Napaka:',
    'LBL_PASSWORD' => 'Geslo:',
    'LBL_USER_NAME' => 'Ime uporabnika:',
    'LBL_USER_TYPE' => 'TIp uporabnika',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_LAST_NAME' => 'Priimek:',
    'LBL_THEME' => 'Tema/izgled:',
    'LBL_LANGUAGE' => 'Jezik:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Informacija o zaposlenem',
    'LBL_OFFICE_PHONE' => 'Telefon v pisarni:',
    'LBL_REPORTS_TO' => 'Poroča:',
    'LBL_REPORTS_TO_NAME' => 'Poroča osebi',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_NOTES' => 'Opombe:',
    'LBL_DEPARTMENT' => 'Oddelek:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Katerikoli naslov:',
    'LBL_ANY_PHONE' => 'Katerikoli telefon:',
    'LBL_ANY_EMAIL' => 'Katerikoli E-pošta:',
    'LBL_ADDRESS' => 'Naslov:',
    'LBL_CITY' => 'Mesto:',
    'LBL_STATE' => 'Država ali regija:',
    'LBL_POSTAL_CODE' => 'Poštna številka:',
    'LBL_COUNTRY' => 'Regija:',
    'LBL_NAME' => 'Ime:',
    'LBL_MOBILE_PHONE' => 'Mobilni telefon:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'E-pošta:',
    'LBL_EMAIL_LINK_TYPE' => 'Email klient',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Domači telefon:',
    'LBL_WORK_PHONE' => 'Službeni telefon:',
    'LBL_EMPLOYEE_STATUS' => 'Status zaposlenega:',
    'LBL_PRIMARY_ADDRESS' => 'Glavni naslov:',
    'LBL_SAVED_SEARCH' => 'Shranjena iskanja & postavitev',
    'LBL_MESSENGER_ID' => 'IM Ime:',
    'LBL_MESSENGER_TYPE' => 'IM Tip:',
    'ERR_LAST_ADMIN_1' => 'Ime zaposlenega&quot;',
    'ERR_LAST_ADMIN_2' => '&quot; je zadnji zaposleni z administratorskim dostopom. Vsaj en zaposleni mora biti administrator.',
    'LNK_NEW_EMPLOYEE' => 'Ustvari zaposlenega',
    'LNK_EMPLOYEE_LIST' => 'Zaposleni',
    'ERR_DELETE_RECORD' => 'Za izbris Partnerja morate določit številko zapisa.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status',

    'LBL_SUITE_LOGIN' => 'Is User',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Obvesti ob dodeljeni Nalogi',
    'LBL_IS_ADMIN' => 'Je administrator',
    'LBL_GROUP' => 'Skupni uporabnik',
    'LBL_PHOTO' => 'Slika',
    'LBL_DELETE_USER_CONFIRM' => 'This Employee is also a User. Deleting the Employee record will also delete the User record, and the User will no longer be able to access the application. Do you want to proceed with deleting this record?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Are you sure you want to delete this employee?',
    'LBL_ONLY_ACTIVE' => 'Active Employees',
    'LBL_SELECT' => 'Izberite' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Avtentikacijski ID',
    'LBL_EXT_AUTHENTICATE' => 'Zunanja avtentikacija',
    'LBL_GROUP_USER' => 'Skupni uporabnik',
    'LBL_LIST_ACCEPT_STATUS' => 'Sprejmi status',
    'LBL_MODIFIED_BY' => 'Spremenil',
    'LBL_MODIFIED_BY_ID' => 'Spremenil Id',
    'LBL_CREATED_BY_NAME' => 'Ustvaril', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API uporabnik',
    'LBL_PSW_MODIFIED' => 'zadnja sprememba gesla',
    'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
    'LBL_USER_HASH' => 'Geslo',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Sistemsko ustvarjeno geslo',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Stanje',
    'LBL_ADDRESS_CITY' => 'Naslov, Mesto',
    'LBL_ADDRESS_COUNTRY' => 'Naslov, Regija',
    'LBL_ADDRESS_INFORMATION' => 'Informacije o naslovu',
    'LBL_ADDRESS_POSTALCODE' => 'Naslov, Poštna koda',
    'LBL_ADDRESS_STATE' => 'Naslov, Država',
    'LBL_ADDRESS_STREET' => 'Naslov, ulica',

    'LBL_DATE_MODIFIED' => 'Datum spremembe',
    'LBL_DATE_ENTERED' => 'Datum vstopa',
    'LBL_DELETED' => 'Izbrisano',

    'LBL_BUTTON_SELECT' => 'Izberite',
    'LBL_BUTTON_CLEAR' => 'Počisti',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth žetoni',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Pravila',
    'LBL_SECURITYGROUPS' => 'Varnostne skupine',
    'LBL_PROSPECT_LIST' => 'Seznam tarč',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
