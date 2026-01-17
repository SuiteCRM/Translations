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
    'LBL_ASSIGNED_TO_ID' => 'Piešķirts lietotājam ar ID',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Izveidošanas datums',
    'LBL_DATE_MODIFIED' => 'Modificēts',
    'LBL_MODIFIED' => 'Rediģēja',
    'LBL_MODIFIED_NAME' => 'Modificēja vārds',
    'LBL_CREATED' => 'Autors',
    'LBL_DESCRIPTION' => 'Apraksts',
    'LBL_DELETED' => 'Izdzēsts',
    'LBL_NAME' => 'Titulli',
    'LBL_CREATED_USER' => 'Izveidoja lietotājs',
    'LBL_MODIFIED_USER' => 'Modificēja',
    'ERR_DELETE_RECORD' => 'Jānorāda ieraksta numurs, lai dzēstu kontu.',
    'LBL_ACCOUNT_NAME' => 'Titulli',
    'LBL_ACCOUNT' => 'Uzņēmums:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_ADDRESS_INFORMATION' => 'Adreses informācija',
    'LBL_ANNUAL_REVENUE' => 'Gada ienākumi:',
    'LBL_ANY_ADDRESS' => 'Jebkāda adrese:',
    'LBL_ANY_EMAIL' => 'Jebkurš E-pasts:',
    'LBL_ANY_PHONE' => 'Jebkurš tālrunis:',
    'LBL_RATING' => 'Vērtējums',
    'LBL_ASSIGNED_USER' => 'Lietotājs',
    'LBL_BILLING_ADDRESS_CITY' => 'Adrese - Pilsēta:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Adrese - Valsts:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Adrese - Pasta indekss:',
    'LBL_BILLING_ADDRESS_STATE' => 'Adrese - Novads:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Adrese - Iela 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Adrese - Iela 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Adrese - Iela 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Adrese - Iela',
    'LBL_BILLING_ADDRESS' => 'Norēķinu adrese:',
    'LBL_ACCOUNT_INFORMATION' => 'Apskats',
    'LBL_CITY' => 'Pilsēta:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ielūgtie',
    'LBL_COUNTRY' => 'Valsts:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Klienti',
    'LBL_DUPLICATE' => 'Iespējams uzņēmuma dublikāts',
    'LBL_EMAIL' => 'E-pasts:',
    'LBL_EMPLOYEES' => 'Darbinieki:',
    'LBL_FAX' => 'Fakss:',
    'LBL_INDUSTRY' => 'Nozare:',
    'LBL_LIST_ACCOUNT_NAME' => 'Konta nosaukums',
    'LBL_LIST_CITY' => 'Pilsēta',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-pasts',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'Stāvoklis',
    'LBL_MEMBER_OF' => 'Pieder:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Dalīborganizācijas',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Cits E-pasts:',
    'LBL_OTHER_PHONE' => 'Cits tālrunis:',
    'LBL_OWNERSHIP' => 'Īpašumtiesības:',
    'LBL_PARENT_ACCOUNT_ID' => 'Mātesuzņēmuma ID',
    'LBL_PHONE_ALT' => 'Cits tālrunis:',
    'LBL_PHONE_FAX' => 'Fakss:',
    'LBL_PHONE_OFFICE' => 'Biroja tālrunis:',
    'LBL_PHONE' => 'Tālrunis:',
    'LBL_POSTAL_CODE' => 'Pasta indekss:',
    'LBL_SAVE_ACCOUNT' => 'Saglabāt uzņēmumu',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Piegādes adrese - Pilsēta:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Piegādes adrese - Valsts:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Piegādes adrese - Pasta indekss:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Piegādes adrese - Novads:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Piegādes adrese - iela 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Piegādes adrese - iela 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Piegādes adrese - iela 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Piegādes adrese - iela:',
    'LBL_SHIPPING_ADDRESS' => 'Piegādes adrese:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Biržas kods:',
    'LBL_TYPE' => 'Veids:',
    'LBL_WEBSITE' => 'Mājas lapa:',
    'LNK_ACCOUNT_LIST' => 'Klienti',
    'LNK_NEW_ACCOUNT' => 'Izveidot uzņēmumu',
    'MSG_DUPLICATE' => 'Creating this account may potentially create a duplicate account. You may either select an account from the list below or you may click on Save to continue creating a new account with the previously entered data.',
    'MSG_SHOW_DUPLICATES' => 'Creating this account may potentially create a duplicate account. You may either click on Save to continue creating this new account with the previously entered data or you may click Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'Vai jūs tiešām vēlaties dzēst šo ierakstu?',
    'LBL_LIST_FORM_TITLE' => 'Piedāvājumu saraksts',
    'LBL_MODULE_NAME' => 'Piedāvājumi',
    'LBL_MODULE_TITLE' => 'Piedāvājumi: Sākums',
    'LBL_HOMEPAGE_TITLE' => 'Mani piedāvājumi',
    'LNK_NEW_RECORD' => 'Izveidot piedāvājumu',
    'LNK_LIST' => 'Skatīt piedāvājumus',
    'LBL_SEARCH_FORM_TITLE' => 'Meklēt piedāvājumu',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Aplūkot vēsturi',
    'LBL_NEW_FORM_TITLE' => 'Jauns Piedāvājums',
    'LBL_TERMS_C' => 'Noteikumi',
    'LBL_APPROVAL_ISSUE' => 'Approval Issues',
    'LBL_APPROVAL_STATUS' => 'Apstiprinājuma statuss',
    'LBL_BILLING_ACCOUNT' => 'Klients',
    'LBL_BILLING_CONTACT' => 'Kontaktpersonas',
    'LBL_EXPIRATION' => 'Derīgs līdz',
    'LBL_QUOTE_NUMBER' => 'Piedāvājuma numurs',
    'LBL_OPPORTUNITY' => 'Iespēja',
    'LBL_TEMPLATE_DDOWN_C' => 'Piedāvājuma veidnes',
    'LBL_STAGE' => 'Piedāvājuma Posms',
    'LBL_TERM' => 'Apmaksas nosacījumi',
    'LBL_SUBTOTAL_AMOUNT' => 'Starpsumma',
    'LBL_DISCOUNT_AMOUNT' => 'Atlaide',
    'LBL_TAX_AMOUNT' => 'Nodoklis',
    'LBL_SHIPPING_AMOUNT' => 'Piegādes pakalpojumi',
    'LBL_TOTAL_AMT' => 'Kopā',
    'VALUE' => 'Titulli',
    'LBL_EMAIL_ADDRESSES' => 'E-pasta adreses',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Kopsumma',
    'LBL_INVOICE_STATUS' => 'Rēķina statuss',
    'LBL_PRODUCT_QUANITY' => 'Daudzums',
    'LBL_PRODUCT_NAME' => 'Produkts',
    'LBL_PART_NUMBER' => 'Daļas numurs',
    'LBL_PRODUCT_NOTE' => 'Piezīme',
    'LBL_PRODUCT_DESCRIPTION' => 'Apraksts',
    'LBL_LIST_PRICE' => 'Saraksts',
    'LBL_DISCOUNT_AMT' => 'Atlaide',
    'LBL_UNIT_PRICE' => 'Pārdošanas cena',
    'LBL_TOTAL_PRICE' => 'Kopā',
    'LBL_VAT' => 'Nodoklis', // VAT
    'LBL_VAT_AMT' => 'Nodokļa summa', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Pievienot produkta rindu',
    'LBL_SERVICE_NAME' => 'Pakalpojums',
    'LBL_SERVICE_LIST_PRICE' => 'Saraksts',
    'LBL_SERVICE_PRICE' => 'Pārdošanas cena',
    'LBL_SERVICE_DISCOUNT' => 'Atlaide',
    'LBL_ADD_SERVICE_LINE' => 'Pievienot Pakalpojuma rindu ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Izņemt',
    'LBL_CONVERT_TO_INVOICE' => 'Konvertēt uz Rēķinu',
    'LBL_PRINT_AS_PDF' => 'Izdrukāt PDF formātā',
    'LBL_EMAIL_QUOTE' => 'Nosūtīt Piedāvājumu pa E-pastu',
    'LBL_CREATE_CONTRACT' => 'Izveidot līgumu',
    'LBL_LIST_NUM' => 'Nr',
    'LBL_PDF_NAME' => 'Piedāvājums',
    'LBL_EMAIL_NAME' => 'Quote for',
    'LBL_QUOTE_DATE' => 'Piedāvājuma datums',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created a Quote template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Starpsumma + Nodoklis',//pre shipping
    'LBL_EMAIL_PDF' => 'PDF pa E-pastu',
    'LBL_ADD_GROUP' => 'Pievienot Grupu',
    'LBL_DELETE_GROUP' => 'Dzēst Grupu',
    'LBL_GROUP_NAME' => 'Grupas nosaukums',
    'LBL_GROUP_TOTAL' => 'Grupas kopsumma',
    'LBL_SHIPPING_TAX' => 'Nodoklis piegādei',
    'LBL_SHIPPING_TAX_AMT' => 'Nodoklis piegādei',
    'LBL_IMPORT_LINE_ITEMS' => 'Import Line Items',
    'LBL_CREATE_OPPORTUNITY' => 'Jauna iespēja',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Starpsumma (noklusētajā valūtā)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Atlaide (noklusētajā valūtā)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Nodoklis (noklusētajā valūtā)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Piegāde (noklusētajā valūtā)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Pavisam (noklusētajā valūtā)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Nodoklis piegādei (noklusētajā valūtā)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grupas kopsumma (noklusētajā valūtā)',
    'LBL_QUOTE_TO' => 'Quote To',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Starpsumma + Nodoklis (noklusētajā valūtā)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
);
