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
    'LBL_MODULE_TITLE' => 'Zaposleni: Početna strana',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga zaposlenih',
    'LBL_LIST_FORM_TITLE' => 'Zaposleni',
    'LBL_NEW_FORM_TITLE' => 'Novi zaposleni',
    'LBL_LOGIN' => 'Prijava',
    'LBL_RESET_PREFERENCES' => 'Postavi ponovo podrazumevane parametre',
    'LBL_TIME_FORMAT' => 'Format vremena:',
    'LBL_DATE_FORMAT' => 'Format datuma:',
    'LBL_TIMEZONE' => 'Trenutno vreme:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_LIST_EMPLOYEE_NAME' => 'Ime zaposlenog',
    'LBL_LIST_DEPARTMENT' => 'Odeljenje',
    'LBL_LIST_REPORTS_TO_NAME' => 'Nadređeni',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'Korisničko ime',
    'LBL_ERROR' => 'Greška:',
    'LBL_PASSWORD' => 'Lozinka:',
    'LBL_USER_NAME' => 'Korisničko Ime:',
    'LBL_USER_TYPE' => 'Tip Korisnika',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Jezik:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Informacija zaposlenog',
    'LBL_OFFICE_PHONE' => 'Poslovni telefon:',
    'LBL_REPORTS_TO' => 'Odgovara ID broju:',
    'LBL_REPORTS_TO_NAME' => 'Nadređeni',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_NOTES' => 'Napomene',
    'LBL_DEPARTMENT' => 'Odeljenje:',
    'LBL_TITLE' => 'Radno mesto:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_PHONE' => 'Bilo koji telefon:',
    'LBL_ANY_EMAIL' => 'Bilo koja adresa elektronske pošte:',
    'LBL_ADDRESS' => 'Adresa:',
    'LBL_CITY' => 'Grad:',
    'LBL_STATE' => 'Država ili region:',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_COUNTRY' => 'Država:',
    'LBL_NAME' => 'Ime:',
    'LBL_MOBILE_PHONE' => 'Mob. telefon:',
    'LBL_FAX' => 'Faks:',
    'LBL_EMAIL' => 'Adresa elektronske pošte:',
    'LBL_EMAIL_LINK_TYPE' => 'Email klijent',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Email klijent:</b>Šaljite Email-ove koristeći email kljenta u SuiteCRM aplikaciji.<br><b>Eksterni Email klijent:</b>Šaljite Email-ove koristeći kljenta van SuiteCRM aplikacije, kao na primer Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Kućni telefon:',
    'LBL_WORK_PHONE' => 'Poslovni telefon:',
    'LBL_EMPLOYEE_STATUS' => 'Status zaposlenog:',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
    'LBL_SAVED_SEARCH' => 'Opcije za Izgled',
    'LBL_MESSENGER_ID' => 'IM ime:',
    'LBL_MESSENGER_TYPE' => 'IM tip:',
    'ERR_LAST_ADMIN_1' => 'Ime zaposlenog \"',
    'ERR_LAST_ADMIN_2' => '" je poslednji zaposleni sa administratorskim pristupom. Bar jedan zaposleni mora biti administrator.',
    'LNK_NEW_EMPLOYEE' => 'Kreiraj zaposlenog',
    'LNK_EMPLOYEE_LIST' => 'Prikaži zaposlene',
    'ERR_DELETE_RECORD' => 'Morate navesti broj zapisa da bi obrisali kompaniju.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status',

    'LBL_SUITE_LOGIN' => 'Je korisnik',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Obaveštavanje pri dodeli',
    'LBL_IS_ADMIN' => 'je administrator',
    'LBL_GROUP' => 'Grupni korisnik',
    'LBL_PHOTO' => 'Fotografija',
    'LBL_DELETE_USER_CONFIRM' => 'Ovaj Zaposleni je takođe i Korisnik. Brisanjem ovog zapisa iz modula Zaposleni takođe ćete obrisati i Korisnika, koji potom više neće moći da pristupi aplikaciji. Da li sigurno želite da obrišete ovaj zapis?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Da li ste sigurni da želite da izbrišete ovog zaposlenog?',
    'LBL_ONLY_ACTIVE' => 'Aktivni zaposleni',
    'LBL_SELECT' => 'Izaberi' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'ID Autentikacije',
    'LBL_EXT_AUTHENTICATE' => 'Eksterna Autentikacija',
    'LBL_GROUP_USER' => 'Grupni korisnik',
    'LBL_LIST_ACCEPT_STATUS' => 'Prihvati status',
    'LBL_MODIFIED_BY' => 'Izmenio',
    'LBL_MODIFIED_BY_ID' => 'Promenio korisnik sa ID brojem',
    'LBL_CREATED_BY_NAME' => 'Autor', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Korisnik API-a za portal',
    'LBL_PSW_MODIFIED' => 'Lozinka je prethodno promenjena',
    'LBL_SHOW_ON_EMPLOYEES' => 'Prikaži podatke o zaposlenom',
    'LBL_USER_HASH' => 'Lozinka',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Sistemski Generisana Lozinka',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_FAX_PHONE' => 'Faks',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Grad',
    'LBL_ADDRESS_COUNTRY' => 'Zemlja',
    'LBL_ADDRESS_INFORMATION' => 'Informacija o adresi',
    'LBL_ADDRESS_POSTALCODE' => 'Poštanski broj',
    'LBL_ADDRESS_STATE' => 'Država',
    'LBL_ADDRESS_STREET' => 'Ulica',

    'LBL_DATE_MODIFIED' => 'Datum izmene',
    'LBL_DATE_ENTERED' => 'Datum unosa',
    'LBL_DELETED' => 'Obrisan',

    'LBL_BUTTON_SELECT' => 'Izaberi',
    'LBL_BUTTON_CLEAR' => 'Obriši',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth tokeni',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Uloge',
    'LBL_SECURITYGROUPS' => 'Sigurnosne grupe',
    'LBL_PROSPECT_LIST' => 'Lista Verovatnih Kupaca',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
