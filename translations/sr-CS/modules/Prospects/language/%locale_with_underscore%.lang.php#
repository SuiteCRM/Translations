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
    'LBL_INVITEE' => 'Direktni izveštaj',
    'LBL_MODULE_TITLE' => 'Ciljevi: Početna strana',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje ciljeva',
    'LBL_LIST_FORM_TITLE' => 'Lista ciljeva',
    'LBL_NEW_FORM_TITLE' => 'Novi cilj',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_LIST_TITLE' => 'Radno mesto',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Ime',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljeno:',
    'LBL_CAMPAIGN_ID' => 'ID broj kampanje',
    'LBL_EXISTING_ACCOUNT' => 'Korišćena je postojeća kompanija',
    'LBL_CREATED_ACCOUNT' => 'Nova kompanija kreirana',
    'LBL_CREATED_CALL' => 'Novi poziv kreiran',
    'LBL_CREATED_MEETING' => 'Novi sastanak je kreiran',
    'LBL_NAME' => 'Ime:',
    'LBL_PROSPECT_INFORMATION' => 'Pregled kompanije', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Više informacija',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_OFFICE_PHONE' => 'Poslovni telefon:',
    'LBL_ANY_PHONE' => 'Bilo koji telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_MOBILE_PHONE' => 'Mob. telefon:',
    'LBL_HOME_PHONE' => 'Početna strana:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ulica primarne adrese:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Grad primarne adrese:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Država primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pokrajina primarne adrese:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Poštanski broj primarne adrese:',
    'LBL_ALT_ADDRESS_STREET' => 'Ulica alternativne adrese:',
    'LBL_ALT_ADDRESS_CITY' => 'Grad alternativne adrese:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Država alternativne adrese:',
    'LBL_ALT_ADDRESS_STATE' => 'Pokrajina alternativne adrese:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Poštanski broj alternativne adrese:',
    'LBL_TITLE' => 'Radno mesto:',
    'LBL_DEPARTMENT' => 'Odeljenje:',
    'LBL_BIRTHDATE' => 'Datum rođenja:',
    'LBL_EMAIL_ADDRESS' => 'Adresa elektronske pošte:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Druga elektronska pošta:',
    'LBL_ANY_EMAIL' => 'Bilo koja adresa elektronske pošte:',
    'LBL_ASSISTANT' => 'Asistent:',
    'LBL_ASSISTANT_PHONE' => 'Telefon asistenta:',
    'LBL_DO_NOT_CALL' => 'Ne zovi:',
    'LBL_EMAIL_OPT_OUT' => 'Isključena opcija elektronske pošte:',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
    'LBL_ALTERNATE_ADDRESS' => 'Druga adresa:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_CITY' => 'Grad:',
    'LBL_STATE' => 'Država ili region:',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_COUNTRY' => 'Država:',
    'LBL_ADDRESS_INFORMATION' => 'Informacija o adresi',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_OPP_NAME' => 'Ime prodajne prilike:',
    'LBL_IMPORT_VCARD' => 'Uvezi digitalnu vizitkartu',
    'LBL_IMPORT_VCARDTEXT' => 'Automatski kreiraj novi kontakt iz importovane vKarte sa Vašeg sistema.',
    'LBL_DUPLICATE' => 'Mogući dupli ciljevi',
    'MSG_SHOW_DUPLICATES' => 'Ciljni zapis koji želite da kreirate možda je duplikat ciljnog zapisa koji već postoji. Ciljni zapisi koji sadrže slična imena i/ili e-adrese izlistani su ispod.<br>Kliknite Sačuvaj da bi nastavili sa kreiranjem ovog novog cilja, ili kliknite Otkaži da bi se vratili u modul bez kreiranja cilja.',
    'MSG_DUPLICATE' => 'Ciljni zapis koji želite da kreirate možda je duplikat ciljnog zapisa koji već postoji. Ciljni zapisi koji sadrže slična imena i/ili e-adrese izlistani su ispod.<br>Kliknite Sačuvaj da bi nastavili sa kreiranjem ovog novog cilja, ili kliknite Otkaži da bi se vratili u modul bez kreiranja cilja.',
    'LNK_IMPORT_VCARD' => 'Kreiraj iz digitalne vizit karte',
    'LNK_NEW_ACCOUNT' => 'Kreiraj kompaniju',
    'LNK_NEW_OPPORTUNITY' => 'Kreiraj prodajnu priliku',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LNK_NEW_NOTE' => 'Kreiraj belešku ili prilog',
    'LNK_NEW_CALL' => 'Evidentiraj poziv',
    'LNK_NEW_EMAIL' => 'Arhiviraj Email',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_TASK' => 'Kreiraj zadatak',
    'LNK_NEW_APPOINTMENT' => 'Zakaži sastanak',
    'LNK_IMPORT_PROSPECTS' => 'Uvezi listu verovatnih kupaca',
    'NTC_DELETE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovaj zapis?',
    'NTC_REMOVE_CONFIRMATION' => 'Da li ste sigurni da želite da uklonite ovaj kontakt iz slučaja?',
    'ERR_DELETE_RECORD' => 'Morate navesti odgovarajući broj zapisa da bi obrisali kontakt.',
    'LBL_SALUTATION' => 'Pozdrav',
    'LBL_CREATED_OPPORTUNITY' => 'Kreiraj novu planiranu prodaju',
    'LNK_SELECT_ACCOUNT' => "Izaberi kompaniju",
    'LNK_NEW_PROSPECT' => 'Kreiranje cilja',
    'LNK_PROSPECT_LIST' => 'Pregledaj ciljne grupe',
    'LNK_NEW_CAMPAIGN' => 'Kreiraj kampanju',
    'LNK_CAMPAIGN_LIST' => 'Kampanje',
    'LNK_NEW_PROSPECT_LIST' => 'Kreiranje liste ciljeva',
    'LNK_PROSPECT_LIST_LIST' => 'Liste ciljeva',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Izaberi označene ciljeve',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Izaberi označene ciljeve',
    'LBL_INVALID_EMAIL' => 'Neispravna e-poruka:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ciljevi',
    'LBL_PROSPECT_LIST' => 'Lista Verovatnih Kupaca',
    'LBL_CONVERT_BUTTON_TITLE' => 'Konvertuj cilj',
    'LBL_CONVERT_BUTTON_LABEL' => 'Konvertuj cilj',
    'LNK_NEW_CONTACT' => 'Novi kontakt',
    'LBL_CREATED_CONTACT' => "Novi kontakt kreiran",
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Log kampanje',
    'LBL_TRACKER_KEY' => 'Ključ sistema za praćenje',
    'LBL_LEAD_ID' => 'ID broj potencijalnog klijenta',
    'LBL_CONVERTED_LEAD' => 'Konveruj potencijalnog klijenta',
    'LBL_ACCOUNT_NAME' => 'Ime Naloga',
    'LBL_EDIT_ACCOUNT_NAME' => 'Naziv kompanije:',
    'LBL_CREATED_USER' => 'Kreirao korisnik',
    'LBL_MODIFIED_USER' => 'Izmenio korisnik',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Događaji',
);
