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
    'LBL_ASSIGNED_TO_ID' => 'ID broj dodeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen',
    'LBL_ID' => 'ID broj',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmene',
    'LBL_MODIFIED' => 'Izmenio',
    'LBL_MODIFIED_NAME' => 'Promenio',
    'LBL_CREATED' => 'Autor',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Obrisan',
    'LBL_NAME' => 'Naslov',
    'LBL_CREATED_USER' => 'Autor je korisnik',
    'LBL_MODIFIED_USER' => 'Promenio korisnik',
    'ERR_DELETE_RECORD' => 'Prilikom brisanja naloga morate da navedete broj zapisa.',
    'LBL_ACCOUNT_NAME' => 'Naslov',
    'LBL_ACCOUNT' => 'Kompanija:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Informacija o adresi',
    'LBL_ANNUAL_REVENUE' => 'Godišnji prihod:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_EMAIL' => 'Bilo koja adresa elektronske pošte:',
    'LBL_ANY_PHONE' => 'Bilo koji telefon:',
    'LBL_RATING' => 'Bodovanje',
    'LBL_ASSIGNED_USER' => 'Korisnik',
    'LBL_BILLING_ADDRESS_CITY' => 'Grad:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Zemlja:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Poštanski kod:',
    'LBL_BILLING_ADDRESS_STATE' => 'Država:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Ulica br.2:',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Ulica br.3:',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Ulica br.4:',
    'LBL_BILLING_ADDRESS_STREET' => 'Ulica:',
    'LBL_BILLING_ADDRESS' => 'Adresa naplate:',
    'LBL_ACCOUNT_INFORMATION' => 'Pregled slučajeva',
    'LBL_CITY' => 'Grad:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_COUNTRY' => 'Država:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kompanije',
    'LBL_DUPLICATE' => 'Moguća duplirana kompanija',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Zaposleni:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Industrija:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Naloga',
    'LBL_LIST_CITY' => 'Grad',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-adresa',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Opština',
    'LBL_MEMBER_OF' => 'Član:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Članice organizacija',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Druga elektronska pošta:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_OWNERSHIP' => 'Vlasništvo:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID broj matične kompanije',
    'LBL_PHONE_ALT' => 'Drugi telefon:',
    'LBL_PHONE_FAX' => 'Telefax:',
    'LBL_PHONE_OFFICE' => 'Kancelarijski telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_SAVE_ACCOUNT' => 'Sačuvaj kompaniju',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Grad isporuke:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Zemlja isporuke:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Poštanski broj isporuke:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Država isporuke:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Ulica isporuke 2:',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Ulica isporuke 3:',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Ulica isporuke 4:',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Ulica isporuke:',
    'LBL_SHIPPING_ADDRESS' => 'Adresa isporuke:',
    'LBL_STATE' => 'Država ili region:',
    'LBL_TICKER_SYMBOL' => 'Simbol na berzi:',
    'LBL_TYPE' => 'Tip:',
    'LBL_WEBSITE' => 'Web stranica:',
    'LNK_ACCOUNT_LIST' => 'Kompanije',
    'LNK_NEW_ACCOUNT' => 'Kreiraj kompaniju',
    'MSG_DUPLICATE' => 'Pravljenje ovog upisa će možda napraviti duplikat. Možete izbarati sa liste postojećih ispod ili kliknuti Sačuvaj kako biste napravili novi upis.',
    'MSG_SHOW_DUPLICATES' => 'Pravljenje ovog upisa će možda napraviti duplikat. Možete izbarati sa liste postojećih ispod ili kliknuti Sačuvaj kako biste napravili novi upis ili možete kliknuti Otkaži.',
    'NTC_DELETE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovaj zapis?',
    'LBL_LIST_FORM_TITLE' => 'Lista računa',
    'LBL_MODULE_NAME' => 'Računi',
    'LBL_MODULE_TITLE' => 'Računi: Početna',
    'LBL_HOMEPAGE_TITLE' => 'Moji računi',
    'LNK_NEW_RECORD' => 'Napravi račun',
    'LNK_LIST' => 'Pregled računa',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraži račune',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregled istorije',
    'LBL_NEW_FORM_TITLE' => 'Novi račun',
    'LBL_TERMS_C' => 'Uslovi',
    'LBL_APPROVAL_ISSUE' => 'Problemi odobrenja',
    'LBL_APPROVAL_STATUS' => 'Status odobrenja',
    'LBL_BILLING_ACCOUNT' => 'Kompanija',
    'LBL_BILLING_CONTACT' => 'Kontakt',
    'LBL_EXPIRATION' => 'Važi do',
    'LBL_INVOICE_NUMBER' => 'Broj računa',
    'LBL_OPPORTUNITY' => 'Ime prodajne prilike:',
    'LBL_TEMPLATE_DDOWN_C' => 'Šabloni za račune',
    'LBL_STAGE' => 'Faza ponude',
    'LBL_TERM' => 'Uslovi plaćanja',
    'LBL_SUBTOTAL_AMOUNT' => 'Međuzbir',
    'LBL_DISCOUNT_AMOUNT' => 'Popust',
    'LBL_TAX_AMOUNT' => 'Porez',
    'LBL_SHIPPING_AMOUNT' => 'Dostava',
    'LBL_TOTAL_AMT' => 'Ukupno',
    'VALUE' => 'Naslov',
    'LBL_EMAIL_ADDRESSES' => 'Adresa el. pošte',
    'LBL_LINE_ITEMS' => 'Stavke',
    'LBL_GRAND_TOTAL' => 'Sveukupno',
    'LBL_QUOTE_NUMBER' => 'Broj ponude',
    'LBL_QUOTE_DATE' => 'Datum ponude',
    'LBL_INVOICE_DATE' => 'Datum računa',
    'LBL_DUE_DATE' => 'Datum dospeća',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'Status računa',
    'LBL_PRODUCT_QUANITY' => 'Količina',
    'LBL_PRODUCT_NAME' => 'Proizvod',
    'LBL_PART_NUMBER' => 'Broj dela',
    'LBL_PRODUCT_NOTE' => 'Beleška',
    'LBL_PRODUCT_DESCRIPTION' => 'Opis',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Popust',
    'LBL_UNIT_PRICE' => 'Prodajna cena',
    'LBL_TOTAL_PRICE' => 'Ukupno',
    'LBL_VAT' => 'Porez', //VAT
    'LBL_VAT_AMT' => 'Iznos poreza', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Dodaj liniju proizvoda',
    'LBL_SERVICE_NAME' => 'Usluga',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Prodajna cena',
    'LBL_SERVICE_DISCOUNT' => 'Popust',
    'LBL_ADD_SERVICE_LINE' => 'Dodaj liniju usluge ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Ukloni',
    'LBL_PRINT_AS_PDF' => 'Štampaj kao PDF',
    'LBL_EMAIL_INVOICE' => 'Pošalji račun putem e-pošte',
    'LBL_LIST_NUM' => 'Broj',
    'LBL_PDF_NAME' => 'Račun',
    'LBL_EMAIL_NAME' => 'Račun za',
    'LBL_NO_TEMPLATE' => 'GREŠKA\nNije pronađen šablon. Ako niste kreirali šablon računa, idite na modul PDF šabloni i kreirajte ga',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Ukupno + Pdv',//pre shipping
    'LBL_EMAIL_PDF' => 'Pošalji emailom PDF',
    'LBL_ADD_GROUP' => 'Dodaj grupu',
    'LBL_DELETE_GROUP' => 'Izbriši grupu',
    'LBL_GROUP_NAME' => 'Ime grupe',
    'LBL_GROUP_TOTAL' => 'Grupa ukupno',
    'LBL_SHIPPING_TAX' => 'Porez na dostavu',
    'LBL_SHIPPING_TAX_AMT' => 'Porez na dostavu',
    'LBL_IMPORT_LINE_ITEMS' => 'Uvoz stavki linija',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Međuzbir (osnovna valuta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Popust (osnovna valuta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Porez (osnovna valuta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Dostava (osnovna valuta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Ukupno (osnovna valuta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Porez na dostavu (osnovna valuta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Sveukupno (osnovna valuta)',
    'LBL_INVOICE_TO' => 'Račun za',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupe stavki po linijama',
    'LBL_AOS_PRODUCT_QUOTES' => 'Ponude za proizvod',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Ponude : Računi',
);
