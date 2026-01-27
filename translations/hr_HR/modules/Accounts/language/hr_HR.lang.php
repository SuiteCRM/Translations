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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    // Dashlet Categories
    'LBL_CHARTS' => 'Grafikoni',
    'LBL_DEFAULT' => 'Pogleda',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Morate označiti broj zapisa kako bi izbrisali tvrtku.',
    'LBL_ACCOUNT_INFORMATION' => 'Pregled', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Ime tvrtke:',
    'LBL_ACCOUNT' => 'Tvrtka:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Podaci o adresi',
    'LBL_ANNUAL_REVENUE' => 'Godišnji prihod:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_EMAIL' => 'Bilo koja e-pošta:',
    'LBL_ANY_PHONE' => 'Bilo koji telefonski broj:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno:',
    'LBL_ASSIGNED_TO_ID' => 'Dodijeljeni korisnik:',
    'LBL_BILLING_ADDRESS_CITY' => 'Grad za naplatu:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Država za naplatu:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Poštanski broj za naplatu:',
    'LBL_BILLING_ADDRESS_STATE' => 'Ulica za naplatu:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Ulica za naplatu 2:',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Ulica za naplatu 3:',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Ulica za naplatu 4:',
    'LBL_BILLING_ADDRESS_STREET' => 'Ulica za naplatu:',
    'LBL_BILLING_ADDRESS' => 'Adresa za naplatu:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugovi',
    'LBL_CAMPAIGN_ID' => 'ID kampanje',
    'LBL_CASES_SUBPANEL_TITLE' => 'Slučajevi',
    'LBL_CITY' => 'Grad',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_COUNTRY' => 'Država',
    'LBL_DATE_ENTERED' => 'Datum stvaranja',
    'LBL_DATE_MODIFIED' => 'Datum izmjene',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tvrtke',
    'LBL_DESCRIPTION_INFORMATION' => 'Podatci o opisu',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DUPLICATE' => 'Moguća duplicirana Tvrtka',
    'LBL_EMAIL' => 'Adresa e-pošte:',
    'LBL_EMAIL_OPT_OUT' => 'E-pošta za odjavu:',
    'LBL_EMAIL_ADDRESSES' => 'Adrese e-pošta',
    'LBL_EMPLOYEES' => 'Zaposlenici:',
    'LBL_FAX' => 'Faks:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Povijest',
    'LBL_HOMEPAGE_TITLE' => 'Moje tvrtke',
    'LBL_INDUSTRY' => 'Industrija',
    'LBL_INVALID_EMAIL' => 'Pogrešna e-pošta:',
    'LBL_INVITEE' => 'Kontakti',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencijalni klijenti',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime',
    'LBL_LIST_CITY' => 'Grad',
    'LBL_LIST_CONTACT_NAME' => 'Ime kontakta',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresa e-pošte',
    'LBL_LIST_FORM_TITLE' => 'Lista tvrtki',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Županija',
    'LBL_MEMBER_OF' => 'Član u:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Članica organizacije',
    'LBL_MODULE_NAME' => 'Tvrtke',
    'LBL_MODULE_TITLE' => 'Tvrtke: Početno',
    'LBL_MODULE_ID' => 'Tvrtke',
    'LBL_NAME' => 'Naziv:',
    'LBL_NEW_FORM_TITLE' => 'Nova tvrtka',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Prilike',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ostala e-pošta:',
    'LBL_OTHER_PHONE' => 'Ostali telefonski broj:',
    'LBL_OWNERSHIP' => 'Vlasništvo:',
    'LBL_PARENT_ACCOUNT_ID' => 'Matični ID tvrtke',
    'LBL_PHONE_ALT' => 'Alternativni telefonski broj:',
    'LBL_PHONE_FAX' => 'Telefon faks',
    'LBL_PHONE_OFFICE' => 'Uredski telefon',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_PRODUCTS_TITLE' => 'Proizvodi',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopiraj u kontakte',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopiraj...',
    'LBL_RATING' => 'Ocjena:',
    'LBL_SAVE_ACCOUNT' => 'Spremi tvrtku',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga tvrtki',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Grad za dostavu:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Država za dostavu:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Poštanski broj za dostavu:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Županija za dostavu:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Ulica za dostavu 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Ulica za dostavu 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Ulica za dostavu 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Ulica za dostavu:',
    'LBL_SHIPPING_ADDRESS' => 'Adresa za dostavu:',
    'LBL_SIC_CODE' => 'SIC kôd:',
    'LBL_STATE' => 'Država ili regija:',
    'LBL_TICKER_SYMBOL' => 'Ticker simbol',
    'LBL_TYPE' => 'Tip:',
    'LBL_WEBSITE' => 'Web stranica:',
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LNK_ACCOUNT_LIST' => 'Pregledaj tvrtke',
    'LNK_NEW_ACCOUNT' => 'Kreiraj tvrtku',
    'LNK_IMPORT_ACCOUNTS' => 'Uvoz tvrtki',
    'MSG_DUPLICATE' => 'Račun koji želite kreirati mogući je duplikat računa koji već postoji. Računi sličnih naziva izlistani su ispod.<br>Kliknite na Kreiraj Račun za nastavak kreiranja računa ili odaberite račun izlistan ispod.',
    'MSG_SHOW_DUPLICATES' => 'Račun koji želite kreirati mogući je duplikat računa koji već postoji. Računi sličnih naziva izlistani su ispod.<br>Kliknite na Spremi za nastavak kreiranja računa ili kliknite na Odustani za povratak na modul bez kreiranja računa.',
    'LBL_ASSIGNED_USER_NAME' => 'Dodijeljeno:',
    'LBL_PROSPECT_LIST' => 'Lista mogućih klijenata',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Tvrtke',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    //For export labels
    'LBL_PARENT_ID' => 'Matični ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Kupljeni proizvodi i usluge',

    'LBL_AOS_CONTRACTS' => 'Ugovori',
    'LBL_AOS_INVOICES' => 'Fakture',
    'LBL_AOS_QUOTES' => 'Ponude',
    'LBL_LIST_WEBSITE' => 'website',
);
