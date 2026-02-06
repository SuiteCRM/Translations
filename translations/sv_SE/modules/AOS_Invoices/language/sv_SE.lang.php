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
    'LBL_ASSIGNED_TO_ID' => 'Tilldelat användar-id',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum Skapad',
    'LBL_DATE_MODIFIED' => 'Modifierad datum',
    'LBL_MODIFIED' => 'Ändrad Av',
    'LBL_MODIFIED_NAME' => 'Ändrad av Namn',
    'LBL_CREATED' => 'Skapad Av',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_DELETED' => 'Raderad',
    'LBL_NAME' => 'Titel',
    'LBL_CREATED_USER' => 'Skapad av Användare',
    'LBL_MODIFIED_USER' => 'Ändrad av Användare',
    'ERR_DELETE_RECORD' => 'Ett postnummer måste anges för att ta bort konto.',
    'LBL_ACCOUNT_NAME' => 'Titel',
    'LBL_ACCOUNT' => 'Företag:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
    'LBL_ANNUAL_REVENUE' => 'Årsomsättning:',
    'LBL_ANY_ADDRESS' => 'Någon adress:',
    'LBL_ANY_EMAIL' => 'Någon E-post:',
    'LBL_ANY_PHONE' => 'Någon telefon:',
    'LBL_RATING' => 'Värdering',
    'LBL_ASSIGNED_USER' => 'Användare',
    'LBL_BILLING_ADDRESS_CITY' => 'Fakturaadress ort:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fakturaadress land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fakturaadress postnummer:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fakturaadress landskap:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Fakturaadress gata 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Fakturaadress gata 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Fakturaadress gata 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Fakturaadress gata/väg:',
    'LBL_BILLING_ADDRESS' => 'Faktureringsadress:',
    'LBL_ACCOUNT_INFORMATION' => 'Översikt',
    'LBL_CITY' => 'Ort:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Företag',
    'LBL_DUPLICATE' => 'Möjlig dubblerad företagspost',
    'LBL_EMAIL' => 'E-post:',
    'LBL_EMPLOYEES' => 'Anställda:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industri:',
    'LBL_LIST_ACCOUNT_NAME' => 'Företagsnamn',
    'LBL_LIST_CITY' => 'Ort:',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-postadress',
    'LBL_LIST_PHONE' => 'Telefon:',
    'LBL_LIST_STATE' => 'Stat:',
    'LBL_MEMBER_OF' => 'Medlem av:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Medlemsorganisationer',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alternativ E-post:',
    'LBL_OTHER_PHONE' => 'Annan telefon:',
    'LBL_OWNERSHIP' => 'Ägarskap:',
    'LBL_PARENT_ACCOUNT_ID' => 'Moderbolags ID',
    'LBL_PHONE_ALT' => 'Alternativ telefon:',
    'LBL_PHONE_FAX' => 'Telefon fax:',
    'LBL_PHONE_OFFICE' => 'Kontorstelefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Postnummer:',
    'LBL_SAVE_ACCOUNT' => 'Spara företag',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Leveransadress ort:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Leveransadress land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Leveransadress postnummer:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Leveransadress landskap:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Leveransadress gata 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Leveransadress gata 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Leveransadress gata 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Leveransadress gata/väg:',
    'LBL_SHIPPING_ADDRESS' => 'Leveransadress:',
    'LBL_STATE' => 'Region:',
    'LBL_TICKER_SYMBOL' => 'Börskod:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'Hemsida:',
    'LNK_ACCOUNT_LIST' => 'Företag',
    'LNK_NEW_ACCOUNT' => 'Skapa företag',
    'MSG_DUPLICATE' => 'Creating this account may potentially create a duplicate account. You may either select an account from the list below or you may click on Save to continue creating a new account with the previously entered data.',
    'MSG_SHOW_DUPLICATES' => 'Creating this account may potentially create a duplicate account. You may either click on Save to continue creating this new account with the previously entered data or you may click Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill ta bort posten?',
    'LBL_LIST_FORM_TITLE' => 'Fakturalista',
    'LBL_MODULE_NAME' => 'Fakturor',
    'LBL_MODULE_TITLE' => 'Fakturor: hem',
    'LBL_HOMEPAGE_TITLE' => 'Mina fakturor',
    'LNK_NEW_RECORD' => 'Skapa faktura',
    'LNK_LIST' => 'Visa fakturor',
    'LBL_SEARCH_FORM_TITLE' => 'Sök fakturor',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visa historik',
    'LBL_NEW_FORM_TITLE' => 'Ny faktura',
    'LBL_TERMS_C' => 'Villkor',
    'LBL_APPROVAL_ISSUE' => 'Approval Issues',
    'LBL_APPROVAL_STATUS' => 'Godkännandestatus',
    'LBL_BILLING_ACCOUNT' => 'Konto',
    'LBL_BILLING_CONTACT' => 'Kontakt',
    'LBL_EXPIRATION' => 'Giltig till',
    'LBL_INVOICE_NUMBER' => 'Fakturanummer',
    'LBL_OPPORTUNITY' => 'Affärsnamn',
    'LBL_TEMPLATE_DDOWN_C' => 'Fakturamallar',
    'LBL_STAGE' => 'Quote Stage',
    'LBL_TERM' => 'Betalningsvillkor',
    'LBL_SUBTOTAL_AMOUNT' => 'Delsumma',
    'LBL_DISCOUNT_AMOUNT' => 'Rabatt',
    'LBL_TAX_AMOUNT' => 'Skatt',
    'LBL_SHIPPING_AMOUNT' => 'Frakt',
    'LBL_TOTAL_AMT' => 'Summa',
    'VALUE' => 'Titel',
    'LBL_EMAIL_ADDRESSES' => 'E-post Adresser',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Totalsumma',
    'LBL_QUOTE_NUMBER' => 'Quote Number',
    'LBL_QUOTE_DATE' => 'Quote Date',
    'LBL_INVOICE_DATE' => 'Fakturadatum',
    'LBL_DUE_DATE' => 'Förfallodag',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'Fakturastatus',
    'LBL_PRODUCT_QUANITY' => 'Kvantitet',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Delnummer',
    'LBL_PRODUCT_NOTE' => 'Anteckning',
    'LBL_PRODUCT_DESCRIPTION' => 'Beskrivning',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Rabatt',
    'LBL_UNIT_PRICE' => 'Försäljningspriset',
    'LBL_TOTAL_PRICE' => 'Summa',
    'LBL_VAT' => 'Skatt', //VAT
    'LBL_VAT_AMT' => 'Skattebelopp', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Lägg till produktlinje',
    'LBL_SERVICE_NAME' => 'Tjänst',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Försäljningspriset',
    'LBL_SERVICE_DISCOUNT' => 'Rabatt',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Ta bort',
    'LBL_PRINT_AS_PDF' => 'Skriv ut som PDF',
    'LBL_EMAIL_INVOICE' => 'E-posta faktura',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Faktura',
    'LBL_EMAIL_NAME' => 'Faktura för',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Invoice template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Delsumma + skatt',//pre shipping
    'LBL_EMAIL_PDF' => 'E-posta PDF',
    'LBL_ADD_GROUP' => 'Lägg till grupp',
    'LBL_DELETE_GROUP' => 'Radera grupp',
    'LBL_GROUP_NAME' => 'Gruppnamn',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Frakt-skatt',
    'LBL_SHIPPING_TAX_AMT' => 'Frakt-skatt',
    'LBL_IMPORT_LINE_ITEMS' => 'Import Line Items',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Delsumma (standardvaluta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabatt (standardvaluta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Skatt (standardvaluta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Summa (standardvaluta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Frakt-skatt (standardvaluta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_INVOICE_TO' => 'Faktura till',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Artikelgrupper',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
);
