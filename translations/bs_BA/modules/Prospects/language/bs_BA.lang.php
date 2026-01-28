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
    'LBL_MODULE_NAME' => 'Ciljevi',
    'LBL_MODULE_ID' => 'Ciljevi',
    'LBL_INVITEE' => 'Direktna izvješća',
    'LBL_MODULE_TITLE' => 'Ciljevi: Početno',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje ciljeva',
    'LBL_LIST_FORM_TITLE' => 'Lista ciljeva',
    'LBL_NEW_FORM_TITLE' => 'Novi cilj',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_LIST_TITLE' => 'Pozicija',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Ime',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno korisniku',
    'LBL_ASSIGNED_TO_ID' => 'Dodijeljeno:',
    'LBL_CAMPAIGN_ID' => 'ID kampanje',
    'LBL_EXISTING_ACCOUNT' => 'Korišten postojeći klijent',
    'LBL_CREATED_ACCOUNT' => 'Novi račun je napravljen',
    'LBL_CREATED_CALL' => 'Kreiran novi poziv',
    'LBL_CREATED_MEETING' => 'Kreiran novi sastanak',
    'LBL_NAME' => 'Naziv:',
    'LBL_PROSPECT_INFORMATION' => 'Pregled', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Više informacija',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_OFFICE_PHONE' => 'Uredski telefon:',
    'LBL_ANY_PHONE' => 'Bilo koji telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_MOBILE_PHONE' => 'Mobitel:',
    'LBL_HOME_PHONE' => 'Početno:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primarna adresa - ulica:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primarna adresa - grad:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primarna adresa - država:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primarna adresa - kanton/entitet:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primarna adresa - poštanski kod:',
    'LBL_ALT_ADDRESS_STREET' => 'Ulica - alternativna adresa:',
    'LBL_ALT_ADDRESS_CITY' => 'Grad - alternativna adresa:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Država - alternativna adresa:',
    'LBL_ALT_ADDRESS_STATE' => 'Kanton/Entitet - alternativna adresa:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Poštanski kod - alternativna adresa:',
    'LBL_TITLE' => 'Pozicija:',
    'LBL_DEPARTMENT' => 'Odjel:',
    'LBL_BIRTHDATE' => 'Datum rođenja:',
    'LBL_EMAIL_ADDRESS' => 'Email adresa:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ostali emailovi:',
    'LBL_ANY_EMAIL' => 'Bilo koji email:',
    'LBL_ASSISTANT' => 'Asistent:',
    'LBL_ASSISTANT_PHONE' => 'Telefon pomoćnika:',
    'LBL_DO_NOT_CALL' => 'Ne zvati:',
    'LBL_EMAIL_OPT_OUT' => 'E-pošta za odjavu:',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
    'LBL_ALTERNATE_ADDRESS' => 'Druga adresa:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_CITY' => 'Grad:',
    'LBL_STATE' => 'Regija/Kanton:',
    'LBL_POSTAL_CODE' => 'Poštanski kod:',
    'LBL_COUNTRY' => 'Država:',
    'LBL_ADDRESS_INFORMATION' => 'Podaci o adresi',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_OPP_NAME' => 'Ime prodajne prilike:',
    'LBL_IMPORT_VCARD' => 'Uvoz vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatski kreirajte novi kontakt pomoću uvoza vCard iz Vaše sistemske datoteke.',
    'LBL_DUPLICATE' => 'Mogući duplikati ciljeva',
    'MSG_SHOW_DUPLICATES' => 'Ovaj {0} zapis koje ćete kreirati može biti duplikat od {0} zapisa koji već postoji.{1} Zapisi koji sadrže slične nazive su navedeni ispod.<br>Kliknite Kreiraj {1} da nastavite kreirati ovaj novi {0}, ili odaberite postojeći {0} naveden ispod.',
    'MSG_DUPLICATE' => 'Ovaj {0} zapis koje ćete kreirati može biti duplikat od {0} zapisa koji već postoji.{1} Zapisi koji sadrže slične nazive su navedeni ispod.<br>Kliknite Kreiraj {1} da nastavite kreirati ovaj novi {0}, ili odaberite postojeći {0} naveden ispod.',
    'LNK_IMPORT_VCARD' => 'Kreiraj od vCard',
    'LNK_NEW_ACCOUNT' => 'Kreirajte klijenta',
    'LNK_NEW_OPPORTUNITY' => 'Kreiraj poslovnu priliku',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LNK_NEW_NOTE' => 'Kreiraj bilješku ili attachment',
    'LNK_NEW_CALL' => 'Zabilježite tel.poziv',
    'LNK_NEW_EMAIL' => 'Arhiviraj email',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_TASK' => 'Kreirajte zadatak',
    'LNK_NEW_APPOINTMENT' => 'Kreirajte sastanak',
    'LNK_IMPORT_PROSPECTS' => 'Uvoz ciljeva',
    'NTC_DELETE_CONFIRMATION' => 'Sigurni ste da želite obrisati ovaj zapis?',
    'NTC_REMOVE_CONFIRMATION' => 'Jeste li sigurni želite li ukloniti ovaj kontakt iz slučaja?',
    'ERR_DELETE_RECORD' => 'Broj zapisa mora biti određen da bi se obrisao kontakt.',
    'LBL_SALUTATION' => 'Titula',
    'LBL_CREATED_OPPORTUNITY' => 'Kreirana nova prodajna prilika',
    'LNK_SELECT_ACCOUNT' => "Odaberite klijenta",
    'LNK_NEW_PROSPECT' => 'Kreirajte cilj',
    'LNK_PROSPECT_LIST' => 'Pregledajte ciljeve',
    'LNK_NEW_CAMPAIGN' => 'Kreiraj kampanju',
    'LNK_CAMPAIGN_LIST' => 'Kampanje',
    'LNK_NEW_PROSPECT_LIST' => 'Kreirajte listu ciljeva',
    'LNK_PROSPECT_LIST_LIST' => 'Lista ciljeva',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Odaberi selektirane ciljeve',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Odaberi selektirane ciljeve',
    'LBL_INVALID_EMAIL' => 'Neispravan email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ciljevi',
    'LBL_PROSPECT_LIST' => 'Lista potencijalnih klijenata',
    'LBL_CONVERT_BUTTON_TITLE' => 'Konvertuj cilj',
    'LBL_CONVERT_BUTTON_LABEL' => 'Konvertuj cilj',
    'LNK_NEW_CONTACT' => 'Novi kontakt',
    'LBL_CREATED_CONTACT' => "Kreiran novi kontakt",
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Log kampanje',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'Id potencijalnog kupca',
    'LBL_CONVERTED_LEAD' => 'Konverzija potencijalnog kupca',
    'LBL_ACCOUNT_NAME' => 'Naziv računa',
    'LBL_EDIT_ACCOUNT_NAME' => 'Naziv klijenta:',
    'LBL_CREATED_USER' => 'Kreirani korisnik',
    'LBL_MODIFIED_USER' => 'Modificirani korisnik',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historija',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Događaji',
);
