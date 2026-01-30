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

    'ERR_DELETE_RECORD' => 'Morate da navedete broj zapisa da bi obrisali potencijalnog klijenta.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Opis kompanije',
    'LBL_ACCOUNT_ID' => 'ID naloga',
    'LBL_ACCOUNT_NAME' => 'Naziv kompanije:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Informacija o adresi',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativni grad',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativna zemlja',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativi poštanski kod',
    'LBL_ALT_ADDRESS_STATE' => 'Alterntivna država',
    'LBL_ALT_ADDRESS_STREET_2' => 'Altrenativna ulica br.2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativana ulica br.3',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativna ulica',
    'LBL_ALTERNATE_ADDRESS' => 'Druga adresa:',
    'LBL_ALT_ADDRESS' => 'Druga adresa:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_EMAIL' => 'Bilo koja adresa elektronske pošte:',
    'LBL_ANY_PHONE' => 'Bilo koji telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljeni korisnik:',
    'LBL_CITY' => 'Grad:',
    'LBL_CONTACT_ID' => 'ID broj kontakta',
    'LBL_CONTACT_INFORMATION' => 'Pregled kompanije', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Naziv potencijalnog klijenta:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Potencijalni klijent-Planirana prodaja:',
    'LBL_CONTACT_ROLE' => 'Uloga:',
    'LBL_CONTACT' => 'Potencijalni klijent:',
    'LBL_CONVERTED_ACCOUNT' => 'Konvertovane kompanije:',
    'LBL_CONVERTED_CONTACT' => 'Konvertovani kontakt:',
    'LBL_CONVERTED_OPP' => 'Konvertovane planirane prodaje:',
    'LBL_CONVERTED' => 'Konvertovan',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'K',
    'LBL_CONVERTLEAD_TITLE' => 'Konvertuj potencijalnog klijenta',
    'LBL_CONVERTLEAD' => 'Konvertuj potencijalnog klijenta',
    'LBL_CONVERTLEAD_WARNING' => 'Upozorenje: Postoji mogućnost da je ovaj potencijalni klijent već konvertovan ',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'u kontakt',
    'LBL_COUNTRY' => 'Država:',
    'LBL_CREATED_NEW' => 'Kreirao je novu',
    'LBL_CREATED_ACCOUNT' => 'Nova kompanija kreirana',
    'LBL_CREATED_CALL' => 'Novi poziv kreiran',
    'LBL_CREATED_CONTACT' => 'Novi kontakt kreiran',
    'LBL_CREATED_MEETING' => 'Novi sastanak je kreiran',
    'LBL_CREATED_OPPORTUNITY' => 'Kreiraj novu planiranu prodaju',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Potencijalni klijenti',
    'LBL_DEPARTMENT' => 'Odeljenje:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DO_NOT_CALL' => 'Ne zovi:',
    'LBL_DUPLICATE' => 'Slični potencijalni klijenti',
    'LBL_EMAIL_ADDRESS' => 'Adresa elektronske pošte:',
    'LBL_EMAIL_OPT_OUT' => 'Isključena opcija elektronske pošte:',
    'LBL_EXISTING_ACCOUNT' => 'Korišćena je postojeća kompanija',
    'LBL_EXISTING_CONTACT' => 'Korišćen postojeći kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Korišćena postojeća planirana prodaja',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    'LBL_HOME_PHONE' => 'Kućni telefon:',
    'LBL_IMPORT_VCARD' => 'Uvezi digitalnu vizitkartu',
    'LBL_VCARD' => 'Digitalna vizitkarta',
    'LBL_IMPORT_VCARDTEXT' => 'Automatski kreiraj novog potencijalnog klijenta uvozom vKarte iz Vašeg fajl sistema.',
    'LBL_INVALID_EMAIL' => 'Neispravna e-poruka:',
    'LBL_INVITEE' => 'Direktni izveštaj',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Opis izvora informacija o potencijalnom klijentu:',
    'LBL_LEAD_SOURCE' => 'Izvor potencijalnog klijenta:',
    'LBL_LIST_ACCEPT_STATUS' => 'Prihvati status',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Naloga',
    'LBL_LIST_CONTACT_NAME' => 'Naziv potencijalnog klijenta',
    'LBL_LIST_CONTACT_ROLE' => 'Uloga',
    'LBL_LIST_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Ime',
    'LBL_LIST_FORM_TITLE' => 'Lista potencijalnih klijenata',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Opis izvora informacija o potencijalnom klijentu',
    'LBL_LIST_LEAD_SOURCE' => 'Izvor informacija o potencijalnom klijentu',
    'LBL_LIST_MY_LEADS' => 'Moji potencijalni klijenti',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_PHONE' => 'Poslovni telefon',
    'LBL_LIST_REFERED_BY' => 'Prosleđeno od',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Radno mesto',
    'LBL_MOBILE_PHONE' => 'Mob. telefon:',
    'LBL_MODULE_NAME' => 'Potencijalni klijenti',
    'LBL_MODULE_TITLE' => 'Potencijalni kljenti: Početna strana',
    'LBL_NAME' => 'Ime:',
    'LBL_NEW_FORM_TITLE' => 'Novi potencijalni klijent',
    'LBL_OFFICE_PHONE' => 'Poslovni telefon:',
    'LBL_OPP_NAME' => 'Ime prodajne prilike:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Iznos planirane prodaje:',
    'LBL_OPPORTUNITY_ID' => 'ID broj planirane prodaje',
    'LBL_OPPORTUNITY_NAME' => 'Ime prodajne prilike:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Druga elektronska pošta:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Aplikacija portala',
    'LBL_PORTAL_INFORMATION' => 'Informacija o portalu',
    'LBL_PORTAL_NAME' => 'Korisničko ime na portalu:',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_STREET' => 'Ulica',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primarni grad',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primarna država',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primarni poštanski broj',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primarna država',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Ulica br.2 primarne adrese',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ulica br.3 primarne adrese',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primarna ulica',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
    'LBL_REFERED_BY' => 'Prosleđeno od:',
    'LBL_REPORTS_TO_ID' => 'Izveštava ID broju',
    'LBL_REPORTS_TO' => 'Nadređeni:',
    'LBL_SALUTATION' => 'Pozdrav',
    'LBL_MODIFIED' => 'Izmenio',
    'LBL_CREATED' => 'Autor',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga potencijalnih klijenata',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Odaberi označene potencijalne klijente',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Odaberi označene potencijalne klijente',
    'LBL_STATE' => 'Država ili region:',
    'LBL_STATUS_DESCRIPTION' => 'Opis stanja:',
    'LBL_STATUS' => 'Status',
    'LBL_TITLE' => 'Radno mesto:',
    'LNK_IMPORT_VCARD' => 'Kreiraj potencijalnog klijenta iz digitalne vizitkarte',
    'LNK_LEAD_LIST' => 'Prikaži potencijalne klijente',
    'LNK_NEW_ACCOUNT' => 'Kreiraj kompaniju',
    'LNK_NEW_APPOINTMENT' => 'Zakaži sastanak',
    'LNK_NEW_CONTACT' => 'Kreiraj kontakt',
    'LNK_NEW_LEAD' => 'Kreiraj potencijalnog klijenta',
    'LNK_NEW_NOTE' => 'Kreiraj belešku',
    'LNK_NEW_TASK' => 'Kreiraj zadatak',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LNK_NEW_CALL' => 'Evidentiraj poziv',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_OPPORTUNITY' => 'Kreiraj prodajnu priliku',
    'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Izaberi Kompaniju',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Izaberi kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovaj zapis?',
    'NTC_REMOVE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovog potencijalnog klijenta iz ovog predmeta?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanje',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljeni korisnik:',
    'LBL_PROSPECT_LIST' => 'Lista Verovatnih Kupaca',
    'LBL_CAMPAIGN_LEAD' => 'Kampanje',
    'LBL_BIRTHDATE' => 'Datum rođenja:',
    'LBL_ASSISTANT_PHONE' => 'Telefon asistenta',
    'LBL_ASSISTANT' => 'Asistent',
    'LBL_CREATED_USER' => 'Kreirao korisnik',
    'LBL_MODIFIED_USER' => 'Izmenio korisnik',
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Zahtevano',
    'LBL_CONVERT_SELECT' => 'Dozvolite selekciju',
    'LBL_CONVERT_COPY' => 'Kopiraj Podatke',
    'LBL_CONVERT_EDIT' => 'Izmeni',
    'LBL_CONVERT_DELETE' => 'Obriši',
    'LBL_CONVERT_ADD_MODULE' => 'Dodaj modul',
    'LBL_CREATE' => 'Kreiraj',
    'LBL_SELECT' => ' <b>ILI</b> Izaberite',
    'LBL_WEBSITE' => 'Web stranica',
    'LNK_IMPORT_LEADS' => 'Uvezi potencijalne klijente',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modul koji kreira nove zapise u.',
    'LBL_REQUIRED_TIP' => 'Neophodni moduli moraju da se kreiraju ili izaberu pre nego što potencijalni klijent može da se konvertuje.',
    'LBL_COPY_TIP' => 'Ako su obeležena, polja iz potencijalnog kontakta će biti kopirana u polja sa istim imenom u novim zapisima.',
    'LBL_SELECTION_TIP' => 'Moduli sa poljem za vezu u Kontaktima mogu se odabrati radije nego da se kreiraju tokom procesa konvertovanja potencijalnog klijenta.',
    'LBL_EDIT_TIP' => 'Promeni konvertovani raspored za ovaj modul',
    'LBL_DELETE_TIP' => 'Ukloni ovaj modul iz konvertovanog rasporeda.',

    'LBL_ACTIVITIES_MOVE' => 'Premesti aktivnosti na',
    'LBL_ACTIVITIES_COPY' => 'kopiraj aktivnosti na',
    'LBL_ACTIVITIES_MOVE_HELP' => "Izaberite upis u koji ćete prebaciti aktivnosti ovog potencijalnog klijenta. Zadaci, Pozivi, Sastanci, Beleške i poruke e-pošte će biti prebačene u taj upis(ili te upise).",
    'LBL_ACTIVITIES_COPY_HELP' => "Izaberite upis(e) u koji želite da kopirate aktivnosti ovog potencijalnog klijenta. Novi Zadaci, Pozivi, Sastanci, Beleške će biti napravljeni za izabrani upis(ili za sve izabrane upise). Poruke e-pošte će biti povezane sa izabranim kontaktom(ili kontaktima).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID broj kampanje',
    'LBL_EDITLAYOUT' => 'Izmeni izgled' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Unesi datum' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Učitava se...' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Izmeni' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Događaji',
);
