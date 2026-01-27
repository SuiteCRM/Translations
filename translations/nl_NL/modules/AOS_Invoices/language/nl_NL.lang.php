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
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker-Id',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Aanmaakdatum',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_MODIFIED' => 'Gewijzigd door',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door naam',
    'LBL_CREATED' => 'Aangemaakt door',
    'LBL_DESCRIPTION' => 'Omschrijving',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_NAME' => 'Titel',
    'LBL_CREATED_USER' => 'Aangemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'ERR_DELETE_RECORD' => 'Geef een record nummer op om een relatie te verwijderen',
    'LBL_ACCOUNT_NAME' => 'Titel',
    'LBL_ACCOUNT' => 'Relatie:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_ADDRESS_INFORMATION' => 'Adresgegevens',
    'LBL_ANNUAL_REVENUE' => 'Jaarlijkse opbrengst:',
    'LBL_ANY_ADDRESS' => '(Deel van) adres:',
    'LBL_ANY_EMAIL' => 'Willekeurige E-mail:',
    'LBL_ANY_PHONE' => '(Deel van) telefoonnummer',
    'LBL_RATING' => 'Waardering',
    'LBL_ASSIGNED_USER' => 'Toegewezen aan naam',
    'LBL_BILLING_ADDRESS_CITY' => 'Facturering plaats:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Facturering land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Facturering postcode:',
    'LBL_BILLING_ADDRESS_STATE' => 'Facturering Provincie:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Factuuradres 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Factuuradres 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Factuuradres 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Straat + Huisnummer:',
    'LBL_BILLING_ADDRESS' => 'Postadres:',
    'LBL_ACCOUNT_INFORMATION' => 'Verzoeken overzicht',
    'LBL_CITY' => 'Plaats:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Relaties',
    'LBL_DUPLICATE' => 'Mogelijk dubbele relatie',
    'LBL_EMAIL' => 'E-mail',
    'LBL_EMPLOYEES' => 'Aantal werknemers:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Branche:',
    'LBL_LIST_ACCOUNT_NAME' => 'Relatie naam',
    'LBL_LIST_CITY' => 'Plaats',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mailadres',
    'LBL_LIST_PHONE' => 'Telefoon',
    'LBL_LIST_STATE' => 'Status',
    'LBL_MEMBER_OF' => 'Onderdeel van:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Onderdeel van',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alternatief e-mailadres:',
    'LBL_OTHER_PHONE' => 'Bgg:',
    'LBL_OWNERSHIP' => 'Eigenaar:',
    'LBL_PARENT_ACCOUNT_ID' => 'Hoofd bedrijf ID',
    'LBL_PHONE_ALT' => 'Bgg:',
    'LBL_PHONE_FAX' => 'Telefoon en fax:',
    'LBL_PHONE_OFFICE' => 'Telefoon werk',
    'LBL_PHONE' => 'Telefoon:',
    'LBL_POSTAL_CODE' => 'Postcode:',
    'LBL_SAVE_ACCOUNT' => 'Bedrijf opslaan',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Verzend plaats:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Verzend land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Verzend postcode:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Verzend provincie:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Afleveradres 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Afleveradres 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Afleveradres 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Verzend straat:',
    'LBL_SHIPPING_ADDRESS' => 'Afleveradres:',
    'LBL_STATE' => 'Provincie of regio:',
    'LBL_TICKER_SYMBOL' => 'Beurssymbool:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Relaties',
    'LNK_NEW_ACCOUNT' => 'Nieuwe relatie',
    'MSG_DUPLICATE' => 'Door dit account aan te maken ontstaat er waarschijnlijk een dubbel account. U kunt of een account uit de lijst hieronder selecteren of selecteer Opslaan om een nieuw account aan te maken',
    'MSG_SHOW_DUPLICATES' => 'Door dit account aan te maken ontstaat er waarschijnlijk een dubbel account. U kunt of voor Opslaan kiezen of doorgaan om een nieuw account aan te maken met zojuist ingevoerde gegegevens.',
    'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen?',
    'LBL_LIST_FORM_TITLE' => 'Facturen lijst',
    'LBL_MODULE_NAME' => 'Facturen',
    'LBL_MODULE_TITLE' => 'Facturen Home',
    'LBL_HOMEPAGE_TITLE' => 'Mijn facturen',
    'LNK_NEW_RECORD' => 'Maak factuur',
    'LNK_LIST' => 'Bekijk facturen',
    'LBL_SEARCH_FORM_TITLE' => 'Zoek facturen',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Bekijk geschiedenis',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe factuur',
    'LBL_TERMS_C' => 'Voorwaarden',
    'LBL_APPROVAL_ISSUE' => 'Goedkeuring probleem',
    'LBL_APPROVAL_STATUS' => 'Goedkeuring status',
    'LBL_BILLING_ACCOUNT' => 'Relatie',
    'LBL_BILLING_CONTACT' => 'Contactpersonen',
    'LBL_EXPIRATION' => 'Geldig tot',
    'LBL_INVOICE_NUMBER' => 'Factuurnummer',
    'LBL_OPPORTUNITY' => 'Kansnaam',
    'LBL_TEMPLATE_DDOWN_C' => 'Factuur template',
    'LBL_STAGE' => 'Aanbieding status',
    'LBL_TERM' => 'Betalingsvoorwaarden',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotaal',
    'LBL_DISCOUNT_AMOUNT' => 'Korting',
    'LBL_TAX_AMOUNT' => 'BTW',
    'LBL_SHIPPING_AMOUNT' => 'Verzending',
    'LBL_TOTAL_AMT' => 'Totaal',
    'VALUE' => 'Titel',
    'LBL_EMAIL_ADDRESSES' => 'Email adressen',
    'LBL_LINE_ITEMS' => 'Lijn items',
    'LBL_GRAND_TOTAL' => 'Totaal',
    'LBL_QUOTE_NUMBER' => 'Offerte nr.',
    'LBL_QUOTE_DATE' => 'Aanbiedingsdatum',
    'LBL_INVOICE_DATE' => 'Factuurdatum',
    'LBL_DUE_DATE' => 'Verloopdatum',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'Factuur status',
    'LBL_PRODUCT_QUANITY' => 'Hoeveelheid',
    'LBL_PRODUCT_NAME' => 'Producten',
    'LBL_PART_NUMBER' => 'Onderdeel Nummer',
    'LBL_PRODUCT_NOTE' => 'Notities',
    'LBL_PRODUCT_DESCRIPTION' => 'Omschrijving',
    'LBL_LIST_PRICE' => 'Lijst',
    'LBL_DISCOUNT_AMT' => 'Korting',
    'LBL_UNIT_PRICE' => 'Unit',
    'LBL_TOTAL_PRICE' => 'Totaal',
    'LBL_VAT' => 'BTW', //VAT
    'LBL_VAT_AMT' => 'BTW bedrag', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Toevoegen product lijn',
    'LBL_SERVICE_NAME' => 'Dienst',
    'LBL_SERVICE_LIST_PRICE' => 'Lijst',
    'LBL_SERVICE_PRICE' => 'Unit',
    'LBL_SERVICE_DISCOUNT' => 'Korting',
    'LBL_ADD_SERVICE_LINE' => 'Toevoegen service lijn ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Verwijderen',
    'LBL_PRINT_AS_PDF' => 'Printen als PDF',
    'LBL_EMAIL_INVOICE' => 'E-mail factuur',
    'LBL_LIST_NUM' => 'Nr',
    'LBL_PDF_NAME' => 'Factuur',
    'LBL_EMAIL_NAME' => 'Factuur voor',
    'LBL_NO_TEMPLATE' => 'ERROR\nGeen sjabloon gevonden. Als er nog geen factuurtemplate is, ga dan naar de PDF template module en maak er een aan',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotaal + BTW',//pre shipping
    'LBL_EMAIL_PDF' => 'E-mail PDF',
    'LBL_ADD_GROUP' => 'Toevoegen groep',
    'LBL_DELETE_GROUP' => 'Verwijderen groep',
    'LBL_GROUP_NAME' => 'Groep naam',
    'LBL_GROUP_TOTAL' => 'Groep total',
    'LBL_SHIPPING_TAX' => 'BTW verzendkosten',
    'LBL_SHIPPING_TAX_AMT' => 'BTW verzendkosten',
    'LBL_IMPORT_LINE_ITEMS' => 'Importeren van regelitems',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotaal (Standaard valuta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Korting (Standaard valuta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Standaard valuta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Verzendkosten (Standaard valuta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Totaal (Standaard valuta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'BTW verzendkosten (Standaard valuta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Totaal (Standaard valuta)',
    'LBL_INVOICE_TO' => 'Factuur aan',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Post groepen',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product offertes',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Offertes: Facturen',
);
