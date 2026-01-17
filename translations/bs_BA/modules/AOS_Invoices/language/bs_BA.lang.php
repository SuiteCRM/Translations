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
    'LBL_ASSIGNED_TO_ID' => 'Id dodijeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno korisniku',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmjene',
    'LBL_MODIFIED' => 'Modifikovao-la',
    'LBL_MODIFIED_NAME' => 'Izmjenjeno od strane korisnika',
    'LBL_CREATED' => 'Kreirao',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Izbrisano',
    'LBL_NAME' => 'Naslov',
    'LBL_CREATED_USER' => 'Kreirao Korisnik',
    'LBL_MODIFIED_USER' => 'Izmijenio Korisnik',
    'ERR_DELETE_RECORD' => 'Broj zapisa mora biti određen da bi se obrisao zapis.',
    'LBL_ACCOUNT_NAME' => 'Naslov',
    'LBL_ACCOUNT' => 'Kompanija:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Podaci o adresi',
    'LBL_ANNUAL_REVENUE' => 'Godišnji prihod:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_EMAIL' => 'Bilo koji email:',
    'LBL_ANY_PHONE' => 'Bilo koji telefon:',
    'LBL_RATING' => 'Rejting',
    'LBL_ASSIGNED_USER' => 'Korisnik',
    'LBL_BILLING_ADDRESS_CITY' => 'Grad za fakturisanje:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Država za fakturisanje:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Poštanski broj za fakturisanje:',
    'LBL_BILLING_ADDRESS_STATE' => 'Kanton/Entitet za fakturisanje:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Ulica za fakturisanje 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Ulica za fakturisanje 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Ulica za fakturisanje 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Ulica za fakturisanje:',
    'LBL_BILLING_ADDRESS' => 'Adresa za fakturisanje:',
    'LBL_ACCOUNT_INFORMATION' => 'Pregled',
    'LBL_CITY' => 'Grad:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_COUNTRY' => 'Država:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Klijenti',
    'LBL_DUPLICATE' => 'Moguć dupli klijent',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Zaposlenici:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Industrija:',
    'LBL_LIST_ACCOUNT_NAME' => 'Naziv računa',
    'LBL_LIST_CITY' => 'Grad',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Entitet/Kanton',
    'LBL_MEMBER_OF' => 'Povezane kompanije:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Članice organizacije',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ostali emailovi:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_OWNERSHIP' => 'Vlasništvo:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID matične kompanije',
    'LBL_PHONE_ALT' => 'Alternativni telefonski broj:',
    'LBL_PHONE_FAX' => 'Faks:',
    'LBL_PHONE_OFFICE' => 'Uredski telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Poštanski kod:',
    'LBL_SAVE_ACCOUNT' => 'Spasi Klijenta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Grad za otpremu:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Država za otpremu:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Poštanski broj za otpremu:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Kanton/Entitet za otpremu:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Ulica za otpremu 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Ulica za otpremu 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Ulica za otpremu 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Ulica za otpremu:',
    'LBL_SHIPPING_ADDRESS' => 'Adresa za otpremu:',
    'LBL_STATE' => 'Regija/Kanton:',
    'LBL_TICKER_SYMBOL' => 'Ticker simbol:',
    'LBL_TYPE' => 'Tip:',
    'LBL_WEBSITE' => 'Web stranica:',
    'LNK_ACCOUNT_LIST' => 'Klijenti',
    'LNK_NEW_ACCOUNT' => 'Kreirajte klijenta',
    'MSG_DUPLICATE' => 'Stvaranje ovog klijenta može potencijalno stvoriti duplicirani unos. Možete odabrati klijenta sa donje liste ili možete kliknuti na Spremi kako bi nastavili sa kreiranjem klijenta sa prethodno unešenim podacima.',
    'MSG_SHOW_DUPLICATES' => 'Stvaranje ovog klijenta može potencijalno stvoriti duplicirani unos. Možete odabrati klijenta sa donje liste ili možete kliknuti na Spremi kako bi nastavili sa kreiranjem klijenta sa prethodno unešenim podacima ili možete odustati.',
    'NTC_DELETE_CONFIRMATION' => 'Sigurni ste da želite obrisati ovaj zapis?',
    'LBL_LIST_FORM_TITLE' => 'Lista Faktura',
    'LBL_MODULE_NAME' => 'Fakture',
    'LBL_MODULE_TITLE' => 'Fakture: Početna',
    'LBL_HOMEPAGE_TITLE' => 'Moje fakture',
    'LNK_NEW_RECORD' => 'Kreiraj Fakturu',
    'LNK_LIST' => 'Pregledaj fakture',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje faktura',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregled istorije',
    'LBL_NEW_FORM_TITLE' => 'Nova faktura',
    'LBL_TERMS_C' => 'Uslovi',
    'LBL_APPROVAL_ISSUE' => 'Problemi sa odobrenjem',
    'LBL_APPROVAL_STATUS' => 'Stanje odobrenja',
    'LBL_BILLING_ACCOUNT' => 'Klijent',
    'LBL_BILLING_CONTACT' => 'Kontakt',
    'LBL_EXPIRATION' => 'Važi do',
    'LBL_INVOICE_NUMBER' => 'Broj fakture',
    'LBL_OPPORTUNITY' => 'Naziv Poslovne prilike',
    'LBL_TEMPLATE_DDOWN_C' => 'Predlošci faktura',
    'LBL_STAGE' => 'Faza ponude',
    'LBL_TERM' => 'Uslovi plaćanja',
    'LBL_SUBTOTAL_AMOUNT' => 'Podzbir',
    'LBL_DISCOUNT_AMOUNT' => 'Popust',
    'LBL_TAX_AMOUNT' => 'PDV',
    'LBL_SHIPPING_AMOUNT' => 'Dostava',
    'LBL_TOTAL_AMT' => 'Ukupno',
    'VALUE' => 'Naslov',
    'LBL_EMAIL_ADDRESSES' => 'Email adresa',
    'LBL_LINE_ITEMS' => 'Stavke',
    'LBL_GRAND_TOTAL' => 'TOTAL',
    'LBL_QUOTE_NUMBER' => 'Broj ponude',
    'LBL_QUOTE_DATE' => 'Datum ponude',
    'LBL_INVOICE_DATE' => 'Datum fakture',
    'LBL_DUE_DATE' => 'Datum dospijeća',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'Status Fakture',
    'LBL_PRODUCT_QUANITY' => 'Količina',
    'LBL_PRODUCT_NAME' => 'Proizvod',
    'LBL_PART_NUMBER' => 'Broj dijela',
    'LBL_PRODUCT_NOTE' => 'Bilješka',
    'LBL_PRODUCT_DESCRIPTION' => 'Opis',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Popust',
    'LBL_UNIT_PRICE' => 'Prodajna cijena',
    'LBL_TOTAL_PRICE' => 'Ukupno',
    'LBL_VAT' => 'PDV', //VAT
    'LBL_VAT_AMT' => 'Iznos PDV', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Dodaj stavke proizvoda',
    'LBL_SERVICE_NAME' => 'Usluga',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Prodajna cijena',
    'LBL_SERVICE_DISCOUNT' => 'Popust',
    'LBL_ADD_SERVICE_LINE' => 'Dodaj stavke usluga ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Ukloni',
    'LBL_PRINT_AS_PDF' => 'Printaj kao PDF',
    'LBL_EMAIL_INVOICE' => 'Pošalji fakturu mailom',
    'LBL_LIST_NUM' => 'Broj',
    'LBL_PDF_NAME' => 'Faktura',
    'LBL_EMAIL_NAME' => 'Faktura za',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Invoice template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Ukupno + PDV',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Dodaj grupu',
    'LBL_DELETE_GROUP' => 'Izbriši grupu',
    'LBL_GROUP_NAME' => 'Naziv grupe',
    'LBL_GROUP_TOTAL' => 'Total za grupu',
    'LBL_SHIPPING_TAX' => 'Porez dostave',
    'LBL_SHIPPING_TAX_AMT' => 'Porez dostave',
    'LBL_IMPORT_LINE_ITEMS' => 'Uvoz stavki',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subotal (zadana valuta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Popust (Zadana valuta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Porez (Zadana valuta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Dostava (Zadana valuta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Ukupno (zadana valuta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Porez na dostavu (zadana valuta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Sveukupno (zadana valuta)',
    'LBL_INVOICE_TO' => 'Faktura za',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupe stavki',
    'LBL_AOS_PRODUCT_QUOTES' => 'Ponude proizvoda',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Ponude: Fakture',
);
