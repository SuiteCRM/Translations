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
    'LBL_ASSIGNED_TO_ID' => 'Tildelt brugerID',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Oprettelsesdato',
    'LBL_DATE_MODIFIED' => 'Ændret dato',
    'LBL_MODIFIED' => 'Ændret af',
    'LBL_MODIFIED_NAME' => 'Ændret af navn',
    'LBL_CREATED' => 'Oprettet af',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_DELETED' => 'Slettet',
    'LBL_NAME' => 'Titel',
    'LBL_CREATED_USER' => 'Oprettet af bruger',
    'LBL_MODIFIED_USER' => 'Ændret af bruger',
    'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette en kunde.',
    'LBL_ACCOUNT_NAME' => 'Titel',
    'LBL_ACCOUNT' => 'Virksomhed:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADDRESS_INFORMATION' => 'Adresseoplysninger',
    'LBL_ANNUAL_REVENUE' => 'Årlig omsætning:',
    'LBL_ANY_ADDRESS' => 'Nogen adresse:',
    'LBL_ANY_EMAIL' => 'Nogen email:',
    'LBL_ANY_PHONE' => 'Nogen telefon:',
    'LBL_RATING' => 'Bedømmelse',
    'LBL_ASSIGNED_USER' => 'Tildelt til',
    'LBL_BILLING_ADDRESS_CITY' => 'Faktura By:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Faktura Land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Faktura Postnr:',
    'LBL_BILLING_ADDRESS_STATE' => 'Faktura Stat:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Faktura Gadenavn 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Faktura Gadenavn 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Faktura Gadenavn 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Faktura Gadenavn:',
    'LBL_BILLING_ADDRESS' => 'Faktura adresse:',
    'LBL_ACCOUNT_INFORMATION' => 'Målgruppe Information',
    'LBL_CITY' => 'By:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kunder',
    'LBL_DUPLICATE' => 'Mulig kunde duplet',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_EMPLOYEES' => 'Medarbejdere:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industri:',
    'LBL_LIST_ACCOUNT_NAME' => 'Kundenavn',
    'LBL_LIST_CITY' => 'By',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email adresse',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Stat',
    'LBL_MEMBER_OF' => 'Medlem af:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Medlemsorganisationer',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Andre Email:',
    'LBL_OTHER_PHONE' => 'Andre Telefon:',
    'LBL_OWNERSHIP' => 'Ejerskab:',
    'LBL_PARENT_ACCOUNT_ID' => 'Moder kunde ID',
    'LBL_PHONE_ALT' => 'Alternativ Telefon:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Arbejstelefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_SAVE_ACCOUNT' => 'Gem kunde',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Leveringsadresse By:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Leveringsadresse Land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Leveringsadresse Postnr:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Leveringsadresse Stat:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Leveringsadresse Gadenavn 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Leveringsadresse Gadenavn 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Leveringsadresse Gadenavn 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Leveringsadresse Gadenavn:',
    'LBL_SHIPPING_ADDRESS' => 'Leveringsadresse:',
    'LBL_STATE' => 'Stat eller Region:',
    'LBL_TICKER_SYMBOL' => 'Ikon:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Hjemmeside:',
    'LNK_ACCOUNT_LIST' => 'Kunder',
    'LNK_NEW_ACCOUNT' => 'Ny kunde',
    'MSG_DUPLICATE' => 'Oprettelse af denne kunde kan, muligvis, oprette en dublet kunde. Du kan enten vælge en kunde fra listen her under, eller du kan klikke gem for at forsætte med at oprette en ny kunde med den tidligere indtastede data.',
    'MSG_SHOW_DUPLICATES' => 'Oprettelse af denne kunde kan, muligvis, oprette en dublet kunde. Du kan enten klikke gem for at forsætte med at oprette en ny kunde med den tidligere indtastede data, eller du kan klikke annuller.',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på, at du vil slette denne post?',
    'LBL_LIST_FORM_TITLE' => 'Faktura liste',
    'LBL_MODULE_NAME' => 'Fakturaer',
    'LBL_MODULE_TITLE' => 'Faktura: Hjem',
    'LBL_HOMEPAGE_TITLE' => 'Mine Fakturaer',
    'LNK_NEW_RECORD' => 'Opret faktura',
    'LNK_LIST' => 'Vis fakturaer',
    'LBL_SEARCH_FORM_TITLE' => 'Søg i fakturaer',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vis historik',
    'LBL_NEW_FORM_TITLE' => 'Ny faktura',
    'LBL_TERMS_C' => 'Vilkår',
    'LBL_APPROVAL_ISSUE' => 'Problemer for godkendelse',
    'LBL_APPROVAL_STATUS' => 'Status for godkendelse',
    'LBL_BILLING_ACCOUNT' => 'Kunder',
    'LBL_BILLING_CONTACT' => 'Kontakt',
    'LBL_EXPIRATION' => 'Gyldig til',
    'LBL_INVOICE_NUMBER' => 'Fakturanummer',
    'LBL_OPPORTUNITY' => 'Navn for mulighed',
    'LBL_TEMPLATE_DDOWN_C' => 'Faktura skabelon',
    'LBL_STAGE' => 'Tilbudsfase',
    'LBL_TERM' => 'Betalingsbetingelser',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Rabat',
    'LBL_TAX_AMOUNT' => 'Moms',
    'LBL_SHIPPING_AMOUNT' => 'Fragt',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Titel',
    'LBL_EMAIL_ADDRESSES' => 'Email adresser',
    'LBL_LINE_ITEMS' => 'Fakturalinjer',
    'LBL_GRAND_TOTAL' => 'Samlet total',
    'LBL_QUOTE_NUMBER' => 'Tilbudsnummer',
    'LBL_QUOTE_DATE' => 'Tilbudsdato',
    'LBL_INVOICE_DATE' => 'Fakturadato',
    'LBL_DUE_DATE' => 'Forfaldsdato',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'Faktura status',
    'LBL_PRODUCT_QUANITY' => 'Antal',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Varenummer',
    'LBL_PRODUCT_NOTE' => 'Noter',
    'LBL_PRODUCT_DESCRIPTION' => 'Beskrivelse',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'Rabat',
    'LBL_UNIT_PRICE' => 'Salgspris',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Moms', //VAT
    'LBL_VAT_AMT' => 'Moms beløb', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Tilføj produktlinje',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Salgspris',
    'LBL_SERVICE_DISCOUNT' => 'Rabat',
    'LBL_ADD_SERVICE_LINE' => 'Tilføj servicelinje ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Slet',
    'LBL_PRINT_AS_PDF' => 'Print som PDF',
    'LBL_EMAIL_INVOICE' => 'E-mail faktura',
    'LBL_LIST_NUM' => 'Fakturanr.',
    'LBL_PDF_NAME' => 'Faktura',
    'LBL_EMAIL_NAME' => 'Faktura for',
    'LBL_NO_TEMPLATE' => 'FEJL\nIngen skabeloner blev fundet. \nGå venligst til modulet PDF-skabeloner og opret en',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Moms',//pre shipping
    'LBL_EMAIL_PDF' => 'E-mail PDF',
    'LBL_ADD_GROUP' => 'Tilføj gruppe',
    'LBL_DELETE_GROUP' => 'Slet gruppe',
    'LBL_GROUP_NAME' => 'Gruppenavn',
    'LBL_GROUP_TOTAL' => 'Gruppetotal',
    'LBL_SHIPPING_TAX' => 'Fragt skat',
    'LBL_SHIPPING_TAX_AMT' => 'Fragt skat',
    'LBL_IMPORT_LINE_ITEMS' => 'Importer fakturalinjer',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (standardvaluta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabat (standardvaluta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Moms (standardvaluta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Fragt (standardvaluta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (standardvaluta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Fragt skat (standardvaluta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Samlet total (standardvaluta)',
    'LBL_INVOICE_TO' => 'Faktura til',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Fakturalinje grupper',
    'LBL_AOS_PRODUCT_QUOTES' => 'Produkttilbud',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Tilbud: fakturaer',
);
