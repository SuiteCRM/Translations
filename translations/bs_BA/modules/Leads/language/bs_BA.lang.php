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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Broj zapisa mora biti određen da bi se obrisao potencijalni kupac.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Opis kompanije',
    'LBL_ACCOUNT_ID' => 'ID klijenta',
    'LBL_ACCOUNT_NAME' => 'Naziv klijenta:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Podaci o adresi',
    'LBL_ALT_ADDRESS_CITY' => 'Grad - alternativna adresa',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Država - alternativna adresa',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Poštanski kod - alternativna adresa',
    'LBL_ALT_ADDRESS_STATE' => 'Entitet/Kanton - alternativna adresa',
    'LBL_ALT_ADDRESS_STREET_2' => 'Ulica 2 - alternativna adresa',
    'LBL_ALT_ADDRESS_STREET_3' => 'Ulica 3 - alternativna adresa',
    'LBL_ALT_ADDRESS_STREET' => 'Ulica - alternativna adresa',
    'LBL_ALTERNATE_ADDRESS' => 'Druga adresa:',
    'LBL_ALT_ADDRESS' => 'Druga adresa:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_EMAIL' => 'Bilo koji email:',
    'LBL_ANY_PHONE' => 'Bilo koji telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno korisniku',
    'LBL_ASSIGNED_TO_ID' => 'Dodijeljeni korisnik:',
    'LBL_CITY' => 'Grad:',
    'LBL_CONTACT_ID' => 'ID kontakta',
    'LBL_CONTACT_INFORMATION' => 'Pregled', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Ime potencijalnog kupca:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Potencijalni kupac-Poslovna prilika:',
    'LBL_CONTACT_ROLE' => 'Uloga:',
    'LBL_CONTACT' => 'Potencijalni kupac:',
    'LBL_CONVERTED_ACCOUNT' => 'Konvertovani klijent:',
    'LBL_CONVERTED_CONTACT' => 'Konvertovani kontakt:',
    'LBL_CONVERTED_OPP' => 'Konvertovana poslovna prilika:',
    'LBL_CONVERTED' => 'Pretvoreno',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Konverzija potencijalnog kupca',
    'LBL_CONVERTLEAD' => 'Konverzija potencijalnog kupca',
    'LBL_CONVERTLEAD_WARNING' => 'Warning: The status of the Lead you are about to convert is "Converted". Contact and/or Account records may already have been created from the Lead. If you wish to continue with converting the Lead, click Save. To go back to the Lead without converting it, click Cancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Mogući kontakt:',
    'LBL_COUNTRY' => 'Država:',
    'LBL_CREATED_NEW' => 'Kreiran novi',
    'LBL_CREATED_ACCOUNT' => 'Novi račun je napravljen',
    'LBL_CREATED_CALL' => 'Kreiran novi poziv',
    'LBL_CREATED_CONTACT' => 'Kreiran novi kontakt',
    'LBL_CREATED_MEETING' => 'Kreiran novi sastanak',
    'LBL_CREATED_OPPORTUNITY' => 'Kreirana nova prodajna prilika',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Potencijalni kupac',
    'LBL_DEPARTMENT' => 'Odjel:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DO_NOT_CALL' => 'Ne zvati:',
    'LBL_DUPLICATE' => 'Slični potencijalni kupci',
    'LBL_EMAIL_ADDRESS' => 'Email adresa:',
    'LBL_EMAIL_OPT_OUT' => 'E-pošta za odjavu:',
    'LBL_EXISTING_ACCOUNT' => 'Korišten postojeći klijent',
    'LBL_EXISTING_CONTACT' => 'Korišten postojeći kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Korištena postojeća prodajna prilika',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historija',
    'LBL_HOME_PHONE' => 'Kućni telefon:',
    'LBL_IMPORT_VCARD' => 'Uvoz vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatski kreirajte novog potencijalnog kupca pomoću uvoza vCard iz datoteke.',
    'LBL_INVALID_EMAIL' => 'Neispravan email:',
    'LBL_INVITEE' => 'Direktna izvješća',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Opis izvora potencijalnog kupca:',
    'LBL_LEAD_SOURCE' => 'Porijeklo potencijalnog kupca:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status prihvaćanja',
    'LBL_LIST_ACCOUNT_NAME' => 'Naziv računa',
    'LBL_LIST_CONTACT_NAME' => 'Ime potencijalnog kupca',
    'LBL_LIST_CONTACT_ROLE' => 'Uloga',
    'LBL_LIST_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Ime',
    'LBL_LIST_FORM_TITLE' => 'Lista potencijalnih kupaca',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Opis izvora potencijalnog kupca',
    'LBL_LIST_LEAD_SOURCE' => 'Porijeklo potencijalnog kupca',
    'LBL_LIST_MY_LEADS' => 'Moji potencijalni kupci',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_PHONE' => 'Uredski telefon',
    'LBL_LIST_REFERED_BY' => 'Referenca od',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Pozicija',
    'LBL_MOBILE_PHONE' => 'Mobitel:',
    'LBL_MODULE_NAME' => 'Potencijalni kupac',
    'LBL_MODULE_TITLE' => 'Potencijalni kupci: Početno',
    'LBL_NAME' => 'Naziv:',
    'LBL_NEW_FORM_TITLE' => 'Novi potencijalni kupac',
    'LBL_OFFICE_PHONE' => 'Uredski telefon:',
    'LBL_OPP_NAME' => 'Ime prodajne prilike:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Iznos prodajne prilike:',
    'LBL_OPPORTUNITY_ID' => 'ID prodajne prilike',
    'LBL_OPPORTUNITY_NAME' => 'Ime prodajne prilike:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ostali emailovi:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Aplikacija portala',
    'LBL_PORTAL_INFORMATION' => 'Informacija portala',
    'LBL_PORTAL_NAME' => 'Ime portala:',
    'LBL_POSTAL_CODE' => 'Poštanski kod:',
    'LBL_STREET' => 'Ulica',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primarna adresa - grad',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primarna adresa - država',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primarna adresa - poštanski kod',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primarna adresa - kanton/entitet',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primarna adresa ulica 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primarna adresa ulica 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primarna adresa - ulica',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
    'LBL_REFERED_BY' => 'Referenca od:',
    'LBL_REPORTS_TO_ID' => 'Izvještava prema ID',
    'LBL_REPORTS_TO' => 'Nadređeni:',
    'LBL_SALUTATION' => 'Titula',
    'LBL_MODIFIED' => 'Modifikovao-la',
    'LBL_CREATED' => 'Kreirao',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje potencijalnih kupaca',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Leads',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'Regija/Kanton:',
    'LBL_STATUS_DESCRIPTION' => 'Opis statusa:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Pozicija:',
    'LNK_IMPORT_VCARD' => 'Kreirajte potencijalnog kupca iz vCard',
    'LNK_LEAD_LIST' => 'Pogledajte potencijalne kupce',
    'LNK_NEW_ACCOUNT' => 'Kreirajte klijenta',
    'LNK_NEW_APPOINTMENT' => 'Kreirajte sastanak',
    'LNK_NEW_CONTACT' => 'Kreiraj kontakt',
    'LNK_NEW_LEAD' => 'Kreiraj potencijalnog klijenta',
    'LNK_NEW_NOTE' => 'Kreiraj bilješku',
    'LNK_NEW_TASK' => 'Kreirajte zadatak',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LNK_NEW_CALL' => 'Zabilježite tel.poziv',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_OPPORTUNITY' => 'Kreiraj poslovnu priliku',
    'LNK_SELECT_ACCOUNTS' => ' <b>ILI</b> Odaberite klijenta',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Odaberite kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Sigurni ste da želite obrisati ovaj zapis?',
    'NTC_REMOVE_CONFIRMATION' => 'Jeste li sigurni želite li ukloniti ovog potencijalnog kupca iz slučaja?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanje',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodijeljeni korisnik',
    'LBL_PROSPECT_LIST' => 'Lista potencijalnih klijenata',
    'LBL_CAMPAIGN_LEAD' => 'Kampanje',
    'LBL_BIRTHDATE' => 'Datum rođenja:',
    'LBL_ASSISTANT_PHONE' => 'Telefon pomoćnika',
    'LBL_ASSISTANT' => 'Asistent',
    'LBL_CREATED_USER' => 'Kreirani korisnik',
    'LBL_MODIFIED_USER' => 'Modificirani korisnik',
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Obavezno',
    'LBL_CONVERT_SELECT' => 'Dozvoli odabir',
    'LBL_CONVERT_COPY' => 'Kopiraj podatke',
    'LBL_CONVERT_EDIT' => 'Uredi',
    'LBL_CONVERT_DELETE' => 'Obriši',
    'LBL_CONVERT_ADD_MODULE' => 'Dodaj modul',
    'LBL_CREATE' => 'Kreiraj',
    'LBL_SELECT' => ' <b>ILI</b> Odaberi',
    'LBL_WEBSITE' => 'Web stranica',
    'LNK_IMPORT_LEADS' => 'Importujte potencijalne kupce',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modul za kreiranje novih zapisa.',
    'LBL_REQUIRED_TIP' => 'Traženi moduli moraju biti kreirani ili odabrani prije nego potencijalni kupac može biti konvertovan.',
    'LBL_COPY_TIP' => 'Ako je ovo označeno, polja iz potencijalnog kupca će biti kopirana u polja sa istim nazivom u novokreiranim zapisima.',
    'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
    'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
    'LBL_DELETE_TIP' => 'Ukloni ovaj modul iz Convert layouta.',

    'LBL_ACTIVITIES_MOVE' => 'Premjesti aktivnosti u',
    'LBL_ACTIVITIES_COPY' => 'Kopiraj aktivnosti u',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID kampanje',
    'LBL_EDITLAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Unesi datum' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Učitavanje' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Uredi' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Događaji',
);
