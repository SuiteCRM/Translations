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
    'LBL_MODULE_NAME' => 'Zaposlenici',
    'LBL_MODULE_TITLE' => 'Zaposlenici: Početno',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje zaposlenika',
    'LBL_LIST_FORM_TITLE' => 'Zaposlenici',
    'LBL_NEW_FORM_TITLE' => 'Novi zaposlenik',
    'LBL_LOGIN' => 'Prijava',
    'LBL_RESET_PREFERENCES' => 'Resetiraj na zadane postavke',
    'LBL_TIME_FORMAT' => 'Format vremena:',
    'LBL_DATE_FORMAT' => 'Format datuma:',
    'LBL_TIMEZONE' => 'Trenutno vrijeme:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_LIST_EMPLOYEE_NAME' => 'Ime zaposlenika',
    'LBL_LIST_DEPARTMENT' => 'Odjel',
    'LBL_LIST_REPORTS_TO_NAME' => 'Izvještava prema',
    'LBL_LIST_EMAIL' => 'e-pošta',
    'LBL_LIST_USER_NAME' => 'Korisničko ime',
    'LBL_ERROR' => 'Greška:',
    'LBL_PASSWORD' => 'Lozinka:',
    'LBL_USER_NAME' => 'Korisničko ime:',
    'LBL_USER_TYPE' => 'Tip korisnika',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Jezik:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Informacija o zaposleniku',
    'LBL_OFFICE_PHONE' => 'Uredski telefon',
    'LBL_REPORTS_TO' => 'Izvještava za Id:',
    'LBL_REPORTS_TO_NAME' => 'Izvještava za',
    'LBL_OTHER_PHONE' => 'Ostali telefonski broj:',
    'LBL_NOTES' => 'Bilješke:',
    'LBL_DEPARTMENT' => 'Odjel:',
    'LBL_TITLE' => 'Zanimanje:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_PHONE' => 'Bilo koji telefonski broj:',
    'LBL_ANY_EMAIL' => 'Bilo koja e-pošta:',
    'LBL_ADDRESS' => 'Adresa:',
    'LBL_CITY' => 'Grad',
    'LBL_STATE' => 'Država ili regija:',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_COUNTRY' => 'Država',
    'LBL_NAME' => 'Naziv:',
    'LBL_MOBILE_PHONE' => 'Mobitel:',
    'LBL_FAX' => 'Faks:',
    'LBL_EMAIL' => 'Adresa e-pošte:',
    'LBL_EMAIL_LINK_TYPE' => 'Klijent e-pošte',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Kućni telefon:',
    'LBL_WORK_PHONE' => 'Poslovni telefon:',
    'LBL_EMPLOYEE_STATUS' => 'Status zaposlenika:',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
    'LBL_SAVED_SEARCH' => 'Opcije izgleda',
    'LBL_MESSENGER_ID' => 'IM ime:',
    'LBL_MESSENGER_TYPE' => 'IM tip:',
    'ERR_LAST_ADMIN_1' => 'Ime zaposlenika "',
    'ERR_LAST_ADMIN_2' => '" je zadnji zaposlenik sa administratorskim pristupom. Barem jedan zaposlenik mora biti administrator.',
    'LNK_NEW_EMPLOYEE' => 'Kreiraj zaposlenika',
    'LNK_EMPLOYEE_LIST' => 'Pregledaj zaposlenike',
    'ERR_DELETE_RECORD' => 'Morate navesti broj zapisa za brisanje računa.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status zaposlenika',

    'LBL_SUITE_LOGIN' => 'Is User',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Obavijesti za dodjelu',
    'LBL_IS_ADMIN' => 'Je administrator',
    'LBL_GROUP' => 'Korisnik grupe',
    'LBL_PHOTO' => 'Fotografija',
    'LBL_DELETE_USER_CONFIRM' => 'Ovaj zaposlenik je također i korisnik. Brisanjem zapisa zaposlenika također će se izbrisati zapis korisnika i korisnik više neće moći pristupiti aplikaciji. Želite li nastaviti sa brisanjem ovog zapisa?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Jeste li sigurni želite li izbrisati ovog zaposlenika?',
    'LBL_ONLY_ACTIVE' => 'Aktivni zaposlenici',
    'LBL_SELECT' => 'Odaberi' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Id autentikacije',
    'LBL_EXT_AUTHENTICATE' => 'Vanjska autentikacija',
    'LBL_GROUP_USER' => 'Korisnik grupe',
    'LBL_LIST_ACCEPT_STATUS' => 'Status prihvaćanja',
    'LBL_MODIFIED_BY' => 'Izmijenio:',
    'LBL_MODIFIED_BY_ID' => 'Izmjenjeno od',
    'LBL_CREATED_BY_NAME' => 'Kreirano od', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API korisnik',
    'LBL_PSW_MODIFIED' => 'Lozinka zadnji put izmijenjena',
    'LBL_SHOW_ON_EMPLOYEES' => 'Prikaži zapis zaposlenika',
    'LBL_USER_HASH' => 'Lozinka',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Lozinka generirana od sustava',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_FAX_PHONE' => 'Faks',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Grad adrese',
    'LBL_ADDRESS_COUNTRY' => 'Zemlja adrese',
    'LBL_ADDRESS_INFORMATION' => 'Podaci o adresi',
    'LBL_ADDRESS_POSTALCODE' => 'Poštanski broj adrese',
    'LBL_ADDRESS_STATE' => 'Address State',
    'LBL_ADDRESS_STREET' => 'Ulica adrese',

    'LBL_DATE_MODIFIED' => 'Izmijenjeno:',
    'LBL_DATE_ENTERED' => 'Uneseni datum',
    'LBL_DELETED' => 'Izbrisano',

    'LBL_BUTTON_SELECT' => 'Odaberi',
    'LBL_BUTTON_CLEAR' => 'Očisti',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth tokeni',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Uloge',
    'LBL_SECURITYGROUPS' => 'Sigurnosne Grupe',
    'LBL_PROSPECT_LIST' => 'Lista mogućih klijenata',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
