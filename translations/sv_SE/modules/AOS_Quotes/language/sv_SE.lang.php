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
    'LBL_DATE_MODIFIED' => 'Ändringsdatum',
    'LBL_MODIFIED' => 'Ändrad av',
    'LBL_MODIFIED_NAME' => 'Namn på den som ändrade',
    'LBL_CREATED' => 'Skapad av',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_DELETED' => 'Borttagen',
    'LBL_NAME' => 'Rubrik',
    'LBL_CREATED_USER' => 'Skapad av användare',
    'LBL_MODIFIED_USER' => 'Ändrad av användare',
    'ERR_DELETE_RECORD' => 'Ett post-ID måste anges för att ta bort kontot.',
    'LBL_ACCOUNT_NAME' => 'Rubrik',
    'LBL_ACCOUNT' => 'Företag:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
    'LBL_ANNUAL_REVENUE' => 'Årlig omsättning:',
    'LBL_ANY_ADDRESS' => 'Valfri adress:',
    'LBL_ANY_EMAIL' => 'Valfri e-post:',
    'LBL_ANY_PHONE' => 'Valfritt telefonnummer:',
    'LBL_RATING' => 'Betyg',
    'LBL_ASSIGNED_USER' => 'Användare',
    'LBL_BILLING_ADDRESS_CITY' => 'Fakturaadress, ort:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fakturaadress, land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fakturaadress, postnummer:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fakturaadress, delstat/region:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Fakturaadress, gata 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Fakturaadress, gata 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Fakturaadress, gata 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Fakturaadress, gata:',
    'LBL_BILLING_ADDRESS' => 'Faktureringsadress:',
    'LBL_ACCOUNT_INFORMATION' => 'Översikt',
    'LBL_CITY' => 'Ort:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Konton',
    'LBL_DUPLICATE' => 'Möjligt dubblettkonto',
    'LBL_EMAIL' => 'E-post:',
    'LBL_EMPLOYEES' => 'Anställda:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Bransch:',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontonamn',
    'LBL_LIST_CITY' => 'Stad',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-postadress',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Landskap',
    'LBL_MEMBER_OF' => 'Medlem i:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Medlemsorganisationer',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alternativ E-post:',
    'LBL_OTHER_PHONE' => 'Annan telefon:',
    'LBL_OWNERSHIP' => 'Ägarform:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID för överordnat konto',
    'LBL_PHONE_ALT' => 'Alternativ telefon:',
    'LBL_PHONE_FAX' => 'Telefon, fax:',
    'LBL_PHONE_OFFICE' => 'Telefon, arbete:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Postnummer:',
    'LBL_SAVE_ACCOUNT' => 'Spara konto',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Leveransadress, ort:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Leveransadress, land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Leveransadress, postnummer:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Leveransadress, delstat/region:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Leveransadress, gata 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Leveransadress, gata 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Leveransadress, gata 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Leveransadress, gata:',
    'LBL_SHIPPING_ADDRESS' => 'Leveransadress:',
    'LBL_STATE' => 'Delstat/region:',
    'LBL_TICKER_SYMBOL' => 'Aktiesymbol:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'Webbplats:',
    'LNK_ACCOUNT_LIST' => 'Konton',
    'LNK_NEW_ACCOUNT' => 'Skapa konto',
    'MSG_DUPLICATE' => 'När du skapar det här kontot kan ett dubblettkonto skapas. Du kan antingen välja ett konto i listan nedan eller klicka på Spara för att fortsätta skapa ett nytt konto med tidigare angivna data.',
    'MSG_SHOW_DUPLICATES' => 'När du skapar det här kontot kan ett dubblettkonto skapas. Klicka på Spara för att fortsätta skapa det nya kontot med tidigare angivna data eller klicka på Avbryt.',
    'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill ta bort den här posten?',
    'NTC_SNOOZE_CONFIRMATION' => 'Är du säker på att du vill skjuta upp?',
    'LBL_LIST_FORM_TITLE' => 'Offertlista',
    'LBL_MODULE_NAME' => 'Offerter',
    'LBL_MODULE_TITLE' => 'Offerter: Start',
    'LBL_HOMEPAGE_TITLE' => 'Mina offerter',
    'LNK_NEW_RECORD' => 'Skapa offert',
    'LNK_LIST' => 'Visa offerter',
    'LBL_SEARCH_FORM_TITLE' => 'Sök offerter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visa historik',
    'LBL_NEW_FORM_TITLE' => 'Ny offert',
    'LBL_TERMS_C' => 'Villkor',
    'LBL_APPROVAL_ISSUE' => 'Problem med godkännande',
    'LBL_APPROVAL_STATUS' => 'Godkännandestatus',
    'LBL_BILLING_ACCOUNT' => 'Konto',
    'LBL_BILLING_CONTACT' => 'Kontakt',
    'LBL_EXPIRATION' => 'Giltig till',
    'LBL_QUOTE_NUMBER' => 'Offertnummer',
    'LBL_OPPORTUNITY' => 'Affärsmöjlighet',
    'LBL_TEMPLATE_DDOWN_C' => 'Offertmall',
    'LBL_STAGE' => 'Offertstatus',
    'LBL_TERM' => 'Betalningsvillkor',
    'LBL_SUBTOTAL_AMOUNT' => 'Delsumma',
    'LBL_DISCOUNT_AMOUNT' => 'Rabatt',
    'LBL_TAX_AMOUNT' => 'Skatt',
    'LBL_SHIPPING_AMOUNT' => 'Leverans',
    'LBL_TOTAL_AMT' => 'Summa',
    'VALUE' => 'Rubrik',
    'LBL_EMAIL_ADDRESSES' => 'E-postadresser',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Totalsumma',
    'LBL_INVOICE_STATUS' => 'Fakturastatus',
    'LBL_PRODUCT_QUANITY' => 'Kvantitet',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Delnummer',
    'LBL_PRODUCT_NOTE' => 'Anteckning',
    'LBL_PRODUCT_DESCRIPTION' => 'Beskrivning',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Rabatt',
    'LBL_UNIT_PRICE' => 'Försäljningspris',
    'LBL_TOTAL_PRICE' => 'Summa',
    'LBL_VAT' => 'Skatt', // VAT
    'LBL_VAT_AMT' => 'Skattebelopp', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Lägg till produktrad',
    'LBL_SERVICE_NAME' => 'Tjänst',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Försäljningspris',
    'LBL_SERVICE_DISCOUNT' => 'Rabatt',
    'LBL_ADD_SERVICE_LINE' => 'Lägg till tjänsterad ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Ta bort',
    'LBL_CONVERT_TO_INVOICE' => 'Konvertera till faktura',
    'LBL_PRINT_AS_PDF' => 'Skriv ut som PDF',
    'LBL_EMAIL_QUOTE' => 'Skicka offert via e-post',
    'LBL_CREATE_CONTRACT' => 'Skapa avtal',
    'LBL_LIST_NUM' => 'Nr',
    'LBL_PDF_NAME' => 'Offert',
    'LBL_EMAIL_NAME' => 'Offert för',
    'LBL_QUOTE_DATE' => 'Offertdatum',
    'LBL_NO_TEMPLATE' => 'FEL
Inga mallar hittades. Om du inte har skapat en offertmall går du till modulen PDF-mallar och skapar en.',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Delsumma + skatt',//pre shipping
    'LBL_EMAIL_PDF' => 'E-posta PDF',
    'LBL_ADD_GROUP' => 'Lägg till grupp',
    'LBL_DELETE_GROUP' => 'Ta bort grupp',
    'LBL_GROUP_NAME' => 'Gruppnamn',
    'LBL_GROUP_TOTAL' => 'Gruppsumma',
    'LBL_SHIPPING_TAX' => 'Frakt-skatt',
    'LBL_SHIPPING_TAX_AMT' => 'Frakt-skatt',
    'LBL_IMPORT_LINE_ITEMS' => 'Importera radposter',
    'LBL_CREATE_OPPORTUNITY' => 'Skapa affärsmöjlighet',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Delsumma (standardvaluta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabatt (standardvaluta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Skatt (standardvaluta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Leverans (standardvaluta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Summa (standardvaluta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Frakt-skatt (standardvaluta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Totalsumma (standardvaluta)',
    'LBL_QUOTE_TO' => 'Offert till',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Delsumma + skatt (standardvaluta)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Offerter: Avtal',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Offerter: Fakturor',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Artikelgrupper',
    'LBL_AOS_PRODUCT_QUOTES' => 'Produktofferter',
    'LBL_AOS_QUOTES_PROJECT' => 'Offerter: Projekt',
);
