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
    'ERR_DELETE_RECORD' => 'Navedite broj zapisa za brisanje kontakta.',
    'LBL_ACCOUNT_ID' => 'ID tvrtke:',
    'LBL_ACCOUNT_NAME' => 'Ime tvrtke:',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Podaci o adresi',
    'LBL_ALT_ADDRESS_CITY' => 'Grad alternativne adrese:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Zemlja alternativne adrese:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Poštanski kod alternativne adrese:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativna adresa županije:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternativna adresa ulica 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativna adresa ulica 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Ulica alternativne adrese:',
    'LBL_ALTERNATE_ADDRESS' => 'Ostala adresa:',
    'LBL_ALT_ADDRESS' => 'Ostala adresa:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_EMAIL' => 'Bilo koja e-pošta:',
    'LBL_ANY_PHONE' => 'Bilo koji telefonski broj:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno:',
    'LBL_ASSIGNED_TO_ID' => 'Dodijeljeni korisnik',
    'LBL_ASSISTANT_PHONE' => 'Pomoćnikov telefon:',
    'LBL_ASSISTANT' => 'Pomoćnik:',
    'LBL_BIRTHDATE' => 'Datum rođenja:',
    'LBL_CITY' => 'Grad',
    'LBL_CAMPAIGN_ID' => 'ID kampanje',
    'LBL_CONTACT_INFORMATION' => 'Pregled', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Ime kontakta:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-prodajna prilika:',
    'LBL_CONTACT_ROLE' => 'Uloga:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Država',
    'LBL_CREATED_ACCOUNT' => 'Kreirana nova tvrtka',
    'LBL_CREATED_CALL' => 'Kreiran novi poziv',
    'LBL_CREATED_CONTACT' => 'Kreiran novi kontakt',
    'LBL_CREATED_MEETING' => 'Kreiran novi sastanak',
    'LBL_CREATED_OPPORTUNITY' => 'Kreirana nova prodajna prilika',
    'LBL_DATE_MODIFIED' => 'Datum izmjene',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_DEPARTMENT' => 'Odjel:',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direktni izvještaji',
    'LBL_DO_NOT_CALL' => 'Ne zovi:',
    'LBL_DUPLICATE' => 'Mogući duplikati kontakata',
    'LBL_EMAIL_ADDRESS' => 'Adresa e-pošte:',
    'LBL_EMAIL_OPT_OUT' => 'E-pošta za odjavu:',
    'LBL_EXISTING_ACCOUNT' => 'Koristi postojeću tvrtku',
    'LBL_EXISTING_CONTACT' => 'Korišten postojeći kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Korištena postojeća prodajna prilika',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Povijest',
    'LBL_HOME_PHONE' => 'Početno:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Uvoz vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatski kreirajte novi kontakt pomoću uvoza vCard iz Vaše sistemske datoteke.',
    'LBL_INVALID_EMAIL' => 'Pogrešna e-pošta:',
    'LBL_INVITEE' => 'Direktni izvještaji',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_LEAD_SOURCE' => 'Glavni izvor:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status prihvaćanja',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime tvrtke',
    'LBL_LIST_CONTACT_NAME' => 'Ime kontakta',
    'LBL_LIST_CONTACT_ROLE' => 'Uloga',
    'LBL_LIST_EMAIL_ADDRESS' => 'e-pošta',
    'LBL_LIST_FIRST_NAME' => 'Ime',
    'LBL_LIST_FORM_TITLE' => 'Lista kontakata',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_PHONE' => 'Uredski telefon',
    'LBL_LIST_TITLE' => 'Zanimanje',
    'LBL_MOBILE_PHONE' => 'Mobitel:',
    'LBL_MODIFIED' => 'Izmijenjeno od:',
    'LBL_MODULE_NAME' => 'Kontakti',
    'LBL_MODULE_TITLE' => 'Kontakti: Početno',
    'LBL_NAME' => 'Naziv:',
    'LBL_NEW_FORM_TITLE' => 'Novi kontakt',
    'LBL_NOTE_SUBJECT' => 'Subjekt bilješke',
    'LBL_OFFICE_PHONE' => 'Uredski telefon',
    'LBL_OPP_NAME' => 'Ime prodajne prilike:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID uloge prodajne prilike:',
    'LBL_OPPORTUNITY_ROLE' => 'Uloga prodajne prilike:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ostala e-pošta:',
    'LBL_OTHER_PHONE' => 'Ostali telefonski broj:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Aplikacija portala:',
    'LBL_PORTAL_INFORMATION' => 'Informacija portala:',
    'LBL_PORTAL_NAME' => 'Ime portala:',
    'LBL_STREET' => 'Ulica',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Grad primarne adrese:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Zemlj primarne adrese:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Poštanski broj primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primarna adresa županije',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primarna adresa ulica 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primarna adresa ulica 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ulica primarne adrese:',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
    'LBL_PRODUCTS_TITLE' => 'Proizvodi',
    'LBL_REPORTS_TO_ID' => 'Izvještava prema ID:',
    'LBL_REPORTS_TO' => 'Izvještaji prema:',
    'LBL_RESOURCE_NAME' => 'Ime resursa',
    'LBL_SALUTATION' => 'Pozdrav:',
    'LBL_SAVE_CONTACT' => 'Spremi kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje kontakta',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Odaberite provjerene kontakte',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Odaberite provjerene kontakte',
    'LBL_STATE' => 'Država ili regija:',
    'LBL_SYNC_CONTACT' => 'Sync na Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Lista mogućih klijenata',
    'LBL_TITLE' => 'Zanimanje:',
    'LNK_CONTACT_LIST' => 'Pregledaj kontatke',
    'LNK_IMPORT_VCARD' => 'Kreiraj kontakt od vCard',
    'LNK_NEW_ACCOUNT' => 'Kreiraj tvrtku',
    'LNK_NEW_APPOINTMENT' => 'Kreiraj sastanak',
    'LNK_NEW_CALL' => 'Zabilježi poziv',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LNK_NEW_CONTACT' => 'Kreiraj kontakt',
    'LNK_NEW_EMAIL' => 'Arhiviraj e-poštu',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_NOTE' => 'Kreiraj bilješku',
    'LNK_NEW_OPPORTUNITY' => 'Kreiraj priliku',
    'LNK_NEW_TASK' => 'Kreiraj zadatak',
    'LNK_SELECT_ACCOUNT' => "Odaberi tvrtku",
    'NTC_DELETE_CONFIRMATION' => 'Jeste li sigurni želite li izbrisati ovaj zapis?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Kreiranje prodajne prilike zahtjeva tvrtku.\n Molim ili kreirajte novu tvrtku ili odaberite postojeću.',
    'NTC_REMOVE_CONFIRMATION' => 'Jeste li sigurni želite li ukloniti ovaj kontakt iz slučaja?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencijalni klijenti',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Prilike',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopiraj u primarnu adresu',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopiraj u ostalu adresu',

    'LBL_CASES_SUBPANEL_TITLE' => 'Slučajevi',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugovi',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_PROJECTS_RESOURCES' => 'Resursi projekta',
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanje',
    'LBL_LIST_CITY' => 'Grad',
    'LBL_LIST_STATE' => 'Županija',
    'LBL_HOMEPAGE_TITLE' => 'Moji kontakti',
    'LBL_OPPORTUNITIES' => 'Prilike',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LNK_IMPORT_CONTACTS' => 'Uvoz kontakata',

    // SNIP
    'LBL_USER_SYNC' => 'Korisnički Sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Događaji',

    'LBL_AOP_CASE_UPDATES' => 'Ažuriranja slučajeva',
    'LBL_CREATE_PORTAL_USER' => 'Kreiraj Portal koisnika',
    'LBL_ENABLE_PORTAL_USER' => 'Omogući Portal korisnika',
    'LBL_DISABLE_PORTAL_USER' => 'Onemogući Portal korisnika',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Neuspjelo kreiranje portal korisnika',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Neuspjelo omogućivanje portal korisnika',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Neuspjelo onemogućivanje portal korisnika',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Kreiran portal korisnik',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Omogućen portal korisnik',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Onemogućen portal korisnik',
    'LBL_NO_JOOMLA_URL' => 'Nije specificiran URL portala',
    'LBL_PORTAL_USER_TYPE' => 'Tip portal korisnika',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Tvrtka onemogućena',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla ID nalog',

    'LBL_AOS_CONTRACTS' => 'Ugovori',
    'LBL_AOS_INVOICES' => 'Fakture',
    'LBL_AOS_QUOTES' => 'Ponude',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Kontakti projekta iz naslova projekta',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'Status pozivnice',
);
