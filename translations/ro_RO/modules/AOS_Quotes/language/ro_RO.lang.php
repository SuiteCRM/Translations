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
    'LBL_ASSIGNED_TO_ID' => 'Id atribuit utilizatorului',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
    'LBL_ID' => 'ID-ul',
    'LBL_DATE_ENTERED' => 'Data creării',
    'LBL_DATE_MODIFIED' => 'Data modificării',
    'LBL_MODIFIED' => 'Modificat de',
    'LBL_MODIFIED_NAME' => 'Nume modificant',
    'LBL_CREATED' => 'Creat De',
    'LBL_DESCRIPTION' => 'Descriere',
    'LBL_DELETED' => 'Şters',
    'LBL_NAME' => 'Titlu',
    'LBL_CREATED_USER' => 'Creat de Utilizator',
    'LBL_MODIFIED_USER' => 'Modificat de utilizator',
    'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie specificat pentru a șterge.',
    'LBL_ACCOUNT_NAME' => 'Titlu',
    'LBL_ACCOUNT' => 'Companie:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_ADDRESS_INFORMATION' => 'Informații Adresă',
    'LBL_ANNUAL_REVENUE' => 'Venit Anual:',
    'LBL_ANY_ADDRESS' => 'Orice Adresă:',
    'LBL_ANY_EMAIL' => 'Orice Email:',
    'LBL_ANY_PHONE' => 'Orice Telefon:',
    'LBL_RATING' => 'Notă',
    'LBL_ASSIGNED_USER' => 'Utilizator',
    'LBL_BILLING_ADDRESS_CITY' => 'Facturare - Oraș:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Facturare - Țară:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Facturare - Cod poștal:',
    'LBL_BILLING_ADDRESS_STATE' => 'Facturare - Județ:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Adresa de facturare 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Adresa de facturare 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Adresa de facturare 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Facturare - Strada:',
    'LBL_BILLING_ADDRESS' => 'Adresa de facturare:',
    'LBL_ACCOUNT_INFORMATION' => 'Prezentare generală',
    'LBL_CITY' => 'Oraș:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
    'LBL_COUNTRY' => 'Țară:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Conturi',
    'LBL_DUPLICATE' => 'Duplicat posibil',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Angajați:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industrie:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nume Cont',
    'LBL_LIST_CITY' => 'Oraș',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresă Email',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Stat',
    'LBL_MEMBER_OF' => 'Membru a:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizații membre',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alt email:',
    'LBL_OTHER_PHONE' => 'Alt telefon:',
    'LBL_OWNERSHIP' => 'Proprietar:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Cont Părinte',
    'LBL_PHONE_ALT' => 'Telefon alternativ:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Telefon birou:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Cod poștal:',
    'LBL_SAVE_ACCOUNT' => 'Salvați cont',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Livrare - Oraș:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Livrare - Țară:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Livrare - Cod poștal:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Livrare - Județ:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Adresa de livrare 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Adresa de livrare 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Adresa de livrare 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Livrare - Strada:',
    'LBL_SHIPPING_ADDRESS' => 'Adresa de livrare:',
    'LBL_STATE' => 'Județ:',
    'LBL_TICKER_SYMBOL' => 'Simbol bursă:',
    'LBL_TYPE' => 'Tip:',
    'LBL_WEBSITE' => 'Site Web:',
    'LNK_ACCOUNT_LIST' => 'Conturi',
    'LNK_NEW_ACCOUNT' => 'Firmă nouă',
    'MSG_DUPLICATE' => 'Crearea acestui cont poate crea un alt cont duplicat. Puteți selecta un cont din lista de mai jos sau puteți face clic pe Salvare pentru a continua să creați un cont nou cu datele introduse anterior.',
    'MSG_SHOW_DUPLICATES' => 'Crearea acestui cont poate crea un alt cont duplicat. Puteți fie să faceți clic pe Salvare pentru a continua să creați acest nou cont cu datele introduse anterior, fie să faceți clic pe Anulare.',
    'NTC_DELETE_CONFIRMATION' => 'Sunteți sigur că doriți să ștergeți această înregistrare?',
    'LBL_LIST_FORM_TITLE' => 'Listă de oferte',
    'LBL_MODULE_NAME' => 'Oferte',
    'LBL_MODULE_TITLE' => 'Oferte: Acasă',
    'LBL_HOMEPAGE_TITLE' => 'Ofertele Mele',
    'LNK_NEW_RECORD' => 'Creează Ofertă',
    'LNK_LIST' => 'Vezi oferte',
    'LBL_SEARCH_FORM_TITLE' => 'Caută oferte',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vizualizare Istoric',
    'LBL_NEW_FORM_TITLE' => 'Oferte noi',
    'LBL_TERMS_C' => 'Termeni',
    'LBL_APPROVAL_ISSUE' => 'Probleme de aprobare',
    'LBL_APPROVAL_STATUS' => 'Status Aprobare',
    'LBL_BILLING_ACCOUNT' => 'Cont',
    'LBL_BILLING_CONTACT' => 'Contact',
    'LBL_EXPIRATION' => 'Valabil Până La',
    'LBL_QUOTE_NUMBER' => 'Număr ofertă',
    'LBL_OPPORTUNITY' => 'Oportunitate',
    'LBL_TEMPLATE_DDOWN_C' => 'Șabloane de ofertă',
    'LBL_STAGE' => 'Etapa Ofertei',
    'LBL_TERM' => 'Termeni de Plată',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Reducere',
    'LBL_TAX_AMOUNT' => 'Taxa',
    'LBL_SHIPPING_AMOUNT' => 'Curierat',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Titlu',
    'LBL_EMAIL_ADDRESSES' => 'Adrese de email',
    'LBL_LINE_ITEMS' => 'Rând de elemente',
    'LBL_GRAND_TOTAL' => 'Total General',
    'LBL_INVOICE_STATUS' => 'Status Factură',
    'LBL_PRODUCT_QUANITY' => 'Cantitate',
    'LBL_PRODUCT_NAME' => 'Produs',
    'LBL_PART_NUMBER' => 'Număr Articol',
    'LBL_PRODUCT_NOTE' => 'Notă',
    'LBL_PRODUCT_DESCRIPTION' => 'Descriere',
    'LBL_LIST_PRICE' => 'Listează',
    'LBL_DISCOUNT_AMT' => 'Reducere',
    'LBL_UNIT_PRICE' => 'Preț de vânzare',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Taxa', // VAT
    'LBL_VAT_AMT' => 'Valoare impozit', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Adaugă linie produs',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Listează',
    'LBL_SERVICE_PRICE' => 'Preț de vânzare',
    'LBL_SERVICE_DISCOUNT' => 'Reducere',
    'LBL_ADD_SERVICE_LINE' => 'Adaugă linie de servicii ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Înlăturați',
    'LBL_CONVERT_TO_INVOICE' => 'Convertește în factură',
    'LBL_PRINT_AS_PDF' => 'Tipărește în PDF',
    'LBL_EMAIL_QUOTE' => 'Cotație e-mail',
    'LBL_CREATE_CONTRACT' => 'Creați Contract',
    'LBL_LIST_NUM' => 'Număr',
    'LBL_PDF_NAME' => 'Ofertă',
    'LBL_EMAIL_NAME' => 'Ofertă pentru',
    'LBL_QUOTE_DATE' => 'Dată ofertă',
    'LBL_NO_TEMPLATE' => 'EROARE\nNici un șablon găsit. Dacă nu ați creat un șablon pentru ofertă accesați modulul de șabloane PDF și creați unul',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + TVA',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Adăugați Grup',
    'LBL_DELETE_GROUP' => 'Șterge Grupul',
    'LBL_GROUP_NAME' => 'Denumire grup',
    'LBL_GROUP_TOTAL' => 'Total Grup',
    'LBL_SHIPPING_TAX' => 'Taxa de livrare',
    'LBL_SHIPPING_TAX_AMT' => 'Taxa de livrare',
    'LBL_IMPORT_LINE_ITEMS' => 'Importă elementele pe rând',
    'LBL_CREATE_OPPORTUNITY' => 'Creează oportunitate',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (în valuta implicită)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Reducere (Valuta implicita)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Taxă (în valuta implicită)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Livrare (în valuta implicită)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (în valuta implicită)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Taxă de livrare (în valuta implicită)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Total general (în valuta implicită)',
    'LBL_QUOTE_TO' => 'Ofertă către',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotal + Tva (în valuta implicită)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Oferte: Contracte',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Oferte: Facturi',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupuri de elemente în linie',
    'LBL_AOS_PRODUCT_QUOTES' => 'Oferte de Produs',
    'LBL_AOS_QUOTES_PROJECT' => 'Cotație: Proiect',
);
