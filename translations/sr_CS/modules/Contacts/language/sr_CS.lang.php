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
    'ERR_DELETE_RECORD' => 'Morate da navedete broj zapisa da bi obrisali kontakt.',
    'LBL_ACCOUNT_ID' => 'ID naloga:',
    'LBL_ACCOUNT_NAME' => 'Naziv kompanije:',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Informacija o adresi',
    'LBL_ALT_ADDRESS_CITY' => 'Grad alternativne adrese:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Država alternativne adrese:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Poštanski broj alternativne adrese:',
    'LBL_ALT_ADDRESS_STATE' => 'Pokrajina alternativne adrese:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Ulica br. 2 alternativne adrese:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Ulica br. 3 alternativne adrese:',
    'LBL_ALT_ADDRESS_STREET' => 'Ulica alternativne adrese:',
    'LBL_ALTERNATE_ADDRESS' => 'Druga adresa:',
    'LBL_ALT_ADDRESS' => 'Druga adresa:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_EMAIL' => 'Bilo koja adresa elektronske pošte:',
    'LBL_ANY_PHONE' => 'Bilo koji telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljeni korisnik:',
    'LBL_ASSISTANT_PHONE' => 'Telefon asistenta:',
    'LBL_ASSISTANT' => 'Asistent:',
    'LBL_BIRTHDATE' => 'Datum rođenja:',
    'LBL_CITY' => 'Grad:',
    'LBL_CAMPAIGN_ID' => 'ID broj kampanje',
    'LBL_CONTACT_INFORMATION' => 'Pregled kompanije', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Ime kontakta:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-Planirana prodaja:',
    'LBL_CONTACT_ROLE' => 'Uloga:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Država:',
    'LBL_CREATED_ACCOUNT' => 'Nova kompanija kreirana',
    'LBL_CREATED_CALL' => 'Novi poziv kreiran',
    'LBL_CREATED_CONTACT' => 'Novi kontakt kreiran',
    'LBL_CREATED_MEETING' => 'Novi sastanak je kreiran',
    'LBL_CREATED_OPPORTUNITY' => 'Kreiraj novu planiranu prodaju',
    'LBL_DATE_MODIFIED' => 'Datum izmene:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_DEPARTMENT' => 'Odeljenje:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direktni izveštaj',
    'LBL_DO_NOT_CALL' => 'Ne zovi:',
    'LBL_DUPLICATE' => 'Mogući dupli kontakti',
    'LBL_EMAIL_ADDRESS' => 'Adresa elektronske pošte:',
    'LBL_EMAIL_OPT_OUT' => 'Isključena opcija elektronske pošte:',
    'LBL_EXISTING_ACCOUNT' => 'Korišćena je postojeća kompanija',
    'LBL_EXISTING_CONTACT' => 'Korišćen postojeći kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Korišćena postojeća planirana prodaja',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    'LBL_HOME_PHONE' => 'Početna strana:',
    'LBL_ID' => 'ID broj:',
    'LBL_IMPORT_VCARD' => 'Uvezi digitalnu vizitkartu',
    'LBL_VCARD' => 'Digitalna vizitkarta',
    'LBL_IMPORT_VCARDTEXT' => 'Automatski kreiraj novi kontakt iz importovane vKarte sa Vašeg sistema.',
    'LBL_INVALID_EMAIL' => 'Neispravna e-poruka:',
    'LBL_INVITEE' => 'Direktni izveštaj',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_LEAD_SOURCE' => 'Izvor potencijalnog klijenta:',
    'LBL_LIST_ACCEPT_STATUS' => 'Prihvati status',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Naloga',
    'LBL_LIST_CONTACT_NAME' => 'Ime kontakta',
    'LBL_LIST_CONTACT_ROLE' => 'Uloga',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Ime',
    'LBL_LIST_FORM_TITLE' => 'Lista kontakata',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_PHONE' => 'Poslovni telefon',
    'LBL_LIST_TITLE' => 'Radno mesto',
    'LBL_MOBILE_PHONE' => 'Mob. telefon:',
    'LBL_MODIFIED' => 'Izmenio:',
    'LBL_MODULE_NAME' => 'Kontakti',
    'LBL_MODULE_TITLE' => 'Kontakti: Početna strana',
    'LBL_NAME' => 'Ime:',
    'LBL_NEW_FORM_TITLE' => 'Novi kontakt',
    'LBL_NOTE_SUBJECT' => 'Naslov beleške',
    'LBL_OFFICE_PHONE' => 'Poslovni telefon:',
    'LBL_OPP_NAME' => 'Ime prodajne prilike:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID broj uloge prodajne prilike:',
    'LBL_OPPORTUNITY_ROLE' => 'Uloga prodajne prilike',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Druga elektronska pošta:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Aplikacija portala:',
    'LBL_PORTAL_INFORMATION' => 'Informacija o portalu',
    'LBL_PORTAL_NAME' => 'Korisničko ime na portalu:',
    'LBL_STREET' => 'Ulica',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Grad primarne adrese:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Država primarne adrese:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Poštanski broj primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pokrajina primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Ulica br.2 primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ulica br.3 primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ulica primarne adrese:',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
    'LBL_PRODUCTS_TITLE' => 'Proizvodi',
    'LBL_REPORTS_TO_ID' => ' ID nadređenog:',
    'LBL_REPORTS_TO' => 'Nadređeni:',
    'LBL_RESOURCE_NAME' => 'Ime resursa',
    'LBL_SALUTATION' => 'Pozdrav:',
    'LBL_SAVE_CONTACT' => 'Sačuvaj kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga kontakata',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Izaberi označene kontakte',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Izaberi označene kontakte',
    'LBL_STATE' => 'Država ili region:',
    'LBL_SYNC_CONTACT' => 'Sinhronizuj sa Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Lista Verovatnih Kupaca',
    'LBL_TITLE' => 'Radno mesto:',
    'LNK_CONTACT_LIST' => 'Pregled kontakata',
    'LNK_IMPORT_VCARD' => 'Napravi kontakt iz digitalne vizitkarte',
    'LNK_NEW_ACCOUNT' => 'Kreiraj kompaniju',
    'LNK_NEW_APPOINTMENT' => 'Zakaži sastanak',
    'LNK_NEW_CALL' => 'Evidentiraj poziv',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LNK_NEW_CONTACT' => 'Kreiraj kontakt',
    'LNK_NEW_EMAIL' => 'Arhiviraj Email',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_NOTE' => 'Kreiraj belešku',
    'LNK_NEW_OPPORTUNITY' => 'Kreiraj prodajnu priliku',
    'LNK_NEW_TASK' => 'Kreiraj zadatak',
    'LNK_SELECT_ACCOUNT' => "Izaberi kompaniju",
    'NTC_DELETE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovaj zapis?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Za kreiranje prodajne prilike potrebna je kompanija .\n Molim.kreirajte novi nalog ili odaberite postojeći.',
    'NTC_REMOVE_CONFIRMATION' => 'Da li ste sigurni da želite da uklonite ovaj kontakt iz slučaja?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencijalni klijenti',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Prodajne prilike',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopiraj  u primarnu adresu',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopiraj u drugu adresu',

    'LBL_CASES_SUBPANEL_TITLE' => 'Slučajevi',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Praćenje defekata',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_PROJECTS_RESOURCES' => 'Projektni Resursi',
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanje',
    'LBL_LIST_CITY' => 'Grad',
    'LBL_LIST_STATE' => 'Opština',
    'LBL_HOMEPAGE_TITLE' => 'Moji Kontakti',
    'LBL_OPPORTUNITIES' => 'Prodajne prilike',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LNK_IMPORT_CONTACTS' => 'Uvezi kontakte',

    // SNIP
    'LBL_USER_SYNC' => 'Sinhronizacija korisnika',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Događaji',

    'LBL_AOP_CASE_UPDATES' => 'Ažuriranja slučaja',
    'LBL_CREATE_PORTAL_USER' => 'Kreiraj Korisnka Portala',
    'LBL_ENABLE_PORTAL_USER' => 'Omogući Korisnika Portala',
    'LBL_DISABLE_PORTAL_USER' => 'Onemogući Korisnka Portala',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Neuspelo kreiranje korisnika portala',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Neuspelo omogućavanje korisnika portala',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Neuspelo onemogućivanje korisnika portala',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Kreiran Korisnk Portala',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Omogućen Korisnik Portala',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Onemogućen Korisnik Portala',
    'LBL_NO_JOOMLA_URL' => 'URL portala nije određen',
    'LBL_PORTAL_USER_TYPE' => 'Vrsta korisnika portala',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Nalog je onemogućen',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla ID naloga',

    'LBL_AOS_CONTRACTS' => 'Ugovori',
    'LBL_AOS_INVOICES' => 'Računi',
    'LBL_AOS_QUOTES' => 'Ponude',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',

    'LBL_LIST_INVITE_STATUS' => 'Status poziva',
);
