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
    'LBL_ASSIGNED_TO_ID' => 'Tilordnet brukerID',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Dato opprettet',
    'LBL_DATE_MODIFIED' => 'Dato endret',
    'LBL_MODIFIED' => 'Endret av',
    'LBL_MODIFIED_NAME' => 'Endret av navn',
    'LBL_CREATED' => 'Opprettet av',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_DELETED' => 'Slettet',
    'LBL_NAME' => 'Tittel:',
    'LBL_CREATED_USER' => 'Opprettet av bruker',
    'LBL_MODIFIED_USER' => 'Modifisert av bruker',
    'ERR_DELETE_RECORD' => 'Oppgi referansenr for å slette denne kunden.',
    'LBL_ACCOUNT_NAME' => 'Tittel:',
    'LBL_ACCOUNT' => 'Firma:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADDRESS_INFORMATION' => 'Addresseinfo',
    'LBL_ANNUAL_REVENUE' => 'Årlig Omsetning:',
    'LBL_ANY_ADDRESS' => 'Vilkårlig adresse:',
    'LBL_ANY_EMAIL' => 'Vilkårlig e-post:',
    'LBL_ANY_PHONE' => 'Vilkårlig tlf:',
    'LBL_RATING' => 'Rangering',
    'LBL_ASSIGNED_USER' => 'Bruker',
    'LBL_BILLING_ADDRESS_CITY' => 'Faktureringsadresse, sted:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Faktureringsadresse, land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Faktureringsadresse, postnummer:',
    'LBL_BILLING_ADDRESS_STATE' => 'Faktureringsadresse, fylke:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Faktureringsadresse, gatenavn 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Faktureringsadresse, gatenavn 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Faktureringsadresse, gatenavn 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Faktureringsadresse, gatenavn:',
    'LBL_BILLING_ADDRESS' => 'Faktureringsadresse:',
    'LBL_ACCOUNT_INFORMATION' => 'Informasjon',
    'LBL_CITY' => 'By:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kunder',
    'LBL_DUPLICATE' => 'Mulig duplikat av en Kunde',
    'LBL_EMAIL' => 'E-post:',
    'LBL_EMPLOYEES' => 'Ansatte:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Bransje:',
    'LBL_LIST_ACCOUNT_NAME' => 'Navn på kunden',
    'LBL_LIST_CITY' => 'By:',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-postadresse:',
    'LBL_LIST_PHONE' => 'Telefonnr:',
    'LBL_LIST_STATE' => 'Fylke:',
    'LBL_MEMBER_OF' => 'Medlem av:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Medlemsorganisasjoner',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Annen e-post:',
    'LBL_OTHER_PHONE' => 'Annet telefonnr:',
    'LBL_OWNERSHIP' => 'Eierskap:',
    'LBL_PARENT_ACCOUNT_ID' => 'Forelder kontoID',
    'LBL_PHONE_ALT' => 'Alternativ tlfnr:',
    'LBL_PHONE_FAX' => 'Faksnr:',
    'LBL_PHONE_OFFICE' => 'Tlfnr, arbeid:',
    'LBL_PHONE' => 'Telefonnr:',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_SAVE_ACCOUNT' => 'Lagre Kunde',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Leveringsadresse, sted:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Leveringsadresse, land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Leveringsadresse, postnummer:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Leveringsadresse, fylke:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Postadresse, gatenavn 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Postadresse, gatenavn 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Postadresse, gatenavn 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Leveringsadresse, gatenavn:',
    'LBL_SHIPPING_ADDRESS' => 'Postadresse:',
    'LBL_STATE' => 'Delstat eller område:',
    'LBL_TICKER_SYMBOL' => 'Børssymbol:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Nettside:',
    'LNK_ACCOUNT_LIST' => 'Kunder',
    'LNK_NEW_ACCOUNT' => 'Ny forbindelse',
    'MSG_DUPLICATE' => 'Opprettelsen av denne kontoen kan, potensielt, opprette en duplikatkonto. Du kan enten velge en konto fra listen under, eller så kan du klikke på Lagre for å fortsette med å opprette en ny konto med den informasjonen du har skrevet inn.',
    'MSG_SHOW_DUPLICATES' => 'Opprettelsen av denne kontoen kan, potensielt, opprette en duplikatkonto. Du kan enten velge en konto fra listen under, eller så kan du klikke på Lagre for å fortsette med å opprette en ny konto med den informasjonen du har skrevet inn, eller så kan du trykke på Avbryt for å avbryte prosessen.',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på at du vil slette denne oppføringen?',
    'LBL_LIST_FORM_TITLE' => 'Liste over fakturaer',
    'LBL_MODULE_NAME' => 'Fakturaer',
    'LBL_MODULE_TITLE' => 'Fakturaer: Hjem',
    'LBL_HOMEPAGE_TITLE' => 'Mine Fakturaer',
    'LNK_NEW_RECORD' => 'Opprett Faktura',
    'LNK_LIST' => 'Vis Fakturaer',
    'LBL_SEARCH_FORM_TITLE' => 'Slk i Fakturaer',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Se på historikk',
    'LBL_NEW_FORM_TITLE' => 'Ny Faktura',
    'LBL_TERMS_C' => 'Vilkår',
    'LBL_APPROVAL_ISSUE' => 'Problemer med godkjenning',
    'LBL_APPROVAL_STATUS' => 'Godkjenningsstatus',
    'LBL_BILLING_ACCOUNT' => 'Kunde',
    'LBL_BILLING_CONTACT' => 'Kontakter',
    'LBL_EXPIRATION' => 'Gyldig til',
    'LBL_INVOICE_NUMBER' => 'Fakturanummer',
    'LBL_OPPORTUNITY' => 'Salgsmulighetens betegnelse',
    'LBL_TEMPLATE_DDOWN_C' => 'Fakturamal',
    'LBL_STAGE' => 'Tilbudsstadie',
    'LBL_TERM' => 'Betalingsvilkår',
    'LBL_SUBTOTAL_AMOUNT' => 'Delsum',
    'LBL_DISCOUNT_AMOUNT' => 'Avslag',
    'LBL_TAX_AMOUNT' => 'Skatt',
    'LBL_SHIPPING_AMOUNT' => 'Frakt',
    'LBL_TOTAL_AMT' => 'Totalt',
    'VALUE' => 'Tittel:',
    'LBL_EMAIL_ADDRESSES' => 'E-post adresse',
    'LBL_LINE_ITEMS' => 'Linjeenheter',
    'LBL_GRAND_TOTAL' => 'Totalsum',
    'LBL_QUOTE_NUMBER' => 'Tilbudsnummer',
    'LBL_QUOTE_DATE' => 'Tibudsdato',
    'LBL_INVOICE_DATE' => 'Fakturadat',
    'LBL_DUE_DATE' => 'Frist',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'Fakturastatus',
    'LBL_PRODUCT_QUANITY' => 'Antal',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Delnummer',
    'LBL_PRODUCT_NOTE' => 'Notater og vedlegg',
    'LBL_PRODUCT_DESCRIPTION' => 'Beskrivelse',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'Avslag',
    'LBL_UNIT_PRICE' => 'Salgspris',
    'LBL_TOTAL_PRICE' => 'Totalt',
    'LBL_VAT' => 'Skatt', //VAT
    'LBL_VAT_AMT' => 'Skatt', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Legg til produktlinje',
    'LBL_SERVICE_NAME' => 'Tjeneste',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Salgspris',
    'LBL_SERVICE_DISCOUNT' => 'Avslag',
    'LBL_ADD_SERVICE_LINE' => 'Legg til tjenestelinje',
    'LBL_REMOVE_PRODUCT_LINE' => 'Fjern',
    'LBL_PRINT_AS_PDF' => 'Skriv ut som PDF',
    'LBL_EMAIL_INVOICE' => 'E-postfaktura',
    'LBL_LIST_NUM' => 'Nr.',
    'LBL_PDF_NAME' => 'Faktura',
    'LBL_EMAIL_NAME' => 'Faktura for',
    'LBL_NO_TEMPLATE' => 'Feil: Ingen mal funnet. Dersom du ikke har opprettet en fakturamal, gå til PDF-mal-modulen og opprett en.',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Delsum + Skatt',//pre shipping
    'LBL_EMAIL_PDF' => 'Send PDF på e-post',
    'LBL_ADD_GROUP' => 'Legg til gruppe',
    'LBL_DELETE_GROUP' => 'Fjern gruppe',
    'LBL_GROUP_NAME' => 'Gruppenavn',
    'LBL_GROUP_TOTAL' => 'Totalt',
    'LBL_SHIPPING_TAX' => 'Fraktavgift',
    'LBL_SHIPPING_TAX_AMT' => 'Fraktavgift',
    'LBL_IMPORT_LINE_ITEMS' => 'Importer linjeenheter',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Delsum (standardvaluta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Avslag (standardvaluta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Skatt (standardvaluta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Frakt (standardvaluta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (standardvaluta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Fraktavgift (standardvaluta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Totalsum (standardvaluta)',
    'LBL_INVOICE_TO' => 'Faktura til',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Linjeenhetsgrupper',
    'LBL_AOS_PRODUCT_QUOTES' => 'Produkt tilbud',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Tilbud: fakturaer',
);
