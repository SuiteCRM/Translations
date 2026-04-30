<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_DATE_ENTERED' => 'Aangemaakt op',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_MODIFIED' => 'Gewijzigd door',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door naam',
    'LBL_CREATED' => 'Aangemaakt door',
    'LBL_DESCRIPTION' => 'Omschrijving',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_NAME' => 'Titel',
    'LBL_CREATED_USER' => 'Aangemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'ERR_DELETE_RECORD' => 'Er moet een record nummer zijn gespecificeerd om deze Organisatie te verwijderen.',
    'LBL_ACCOUNT_NAME' => 'Titel',
    'LBL_ACCOUNT' => 'Bedrijf:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_ADDRESS_INFORMATION' => 'Adresgegevens',
    'LBL_ANNUAL_REVENUE' => 'Jaarlijkse omzet:',
    'LBL_ANY_ADDRESS' => 'Alle adressen:',
    'LBL_ANY_EMAIL' => 'Alle e-mailadressen:',
    'LBL_ANY_PHONE' => 'Alle telefoonnummers:',
    'LBL_RATING' => 'Waardering',
    'LBL_ASSIGNED_USER' => 'Gebruiker',
    'LBL_BILLING_ADDRESS_CITY' => 'Factuuradres plaats:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Factuuradres land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Factuuradres postcode:',
    'LBL_BILLING_ADDRESS_STATE' => 'Factuuradres provincie:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Factuuradres straat 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Factuuradres straat 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Factuuradres straat 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Factuuradres straat:',
    'LBL_BILLING_ADDRESS' => 'Factuuradres:',
    'LBL_ACCOUNT_INFORMATION' => 'Overzicht',
    'LBL_CITY' => 'Plaats:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Organisaties',
    'LBL_DUPLICATE' => 'Mogelijke dubbele organisatie',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_EMPLOYEES' => 'Werknemers:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Branche:',
    'LBL_LIST_ACCOUNT_NAME' => 'Organisatienaam',
    'LBL_LIST_CITY' => 'Plaats',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mailadres',
    'LBL_LIST_PHONE' => 'Telefoon',
    'LBL_LIST_STATE' => 'Status',
    'LBL_MEMBER_OF' => 'Lid van:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Dochterorganisaties',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ander e-mailadres:',
    'LBL_OTHER_PHONE' => 'Ander telefoonnummer:',
    'LBL_OWNERSHIP' => 'Eigenaar:',
    'LBL_PARENT_ACCOUNT_ID' => 'Bovenliggende organisatie ID',
    'LBL_PHONE_ALT' => 'Alternatief telefoonnummer:',
    'LBL_PHONE_FAX' => 'Telefoon fax:',
    'LBL_PHONE_OFFICE' => 'Telefoon kantoor:',
    'LBL_PHONE' => 'Telefoon:',
    'LBL_POSTAL_CODE' => 'Postcode:',
    'LBL_SAVE_ACCOUNT' => 'Organisatie opslaan',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Afleveradres plaats:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Afleveradres land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Afleveradres postcode:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Afleveradres provincie:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Afleveradres straat 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Afleveradres straat 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Afleveradres straat 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Afleveradres straat + huisnummer:',
    'LBL_SHIPPING_ADDRESS' => 'Afleveradres:',
    'LBL_STATE' => 'Provincie/regio:',
    'LBL_TICKER_SYMBOL' => 'Beurssymbool:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Organisaties',
    'LNK_NEW_ACCOUNT' => 'Nieuwe organisatie',
    'MSG_DUPLICATE' => 'Het aanmaken van dit account kan mogelijk een dubbel account creëren. U kunt een account selecteren uit de onderstaande lijst of u kunt op Opslaan klikken om door te gaan met het aanmaken van een nieuw account met de eerder ingevoerde gegevens.',
    'MSG_SHOW_DUPLICATES' => 'Het aanmaken van deze organisatie kan mogelijk een dubbele organisatie creëren. U kunt op Opslaan klikken om deze nieuwe organisatie aan te maken met de eerder ingevoerde gegevens, of u kunt op Annuleren klikken.',
    'NTC_DELETE_CONFIRMATION' => 'Weet je zeker dat je dit item wilt verwijderen?',
    'LBL_LIST_FORM_TITLE' => 'Offertelijst',
    'LBL_MODULE_NAME' => 'Offertes',
    'LBL_MODULE_TITLE' => 'Offertes: Start',
    'LBL_HOMEPAGE_TITLE' => 'Mijn Offertes',
    'LNK_NEW_RECORD' => 'Nieuwe offerte',
    'LNK_LIST' => 'Bekijk offertes',
    'LBL_SEARCH_FORM_TITLE' => 'Zoek offerte',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Bekijk geschiedenis',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe Offerte',
    'LBL_TERMS_C' => 'Voorwaarden',
    'LBL_APPROVAL_ISSUE' => 'Goedkeuringsproblemen',
    'LBL_APPROVAL_STATUS' => 'Goedkeuringsstatus',
    'LBL_BILLING_ACCOUNT' => 'Organisatie',
    'LBL_BILLING_CONTACT' => 'Contactpersoon',
    'LBL_EXPIRATION' => 'Geldig tot',
    'LBL_QUOTE_NUMBER' => 'Offertenummer',
    'LBL_OPPORTUNITY' => 'Kans',
    'LBL_TEMPLATE_DDOWN_C' => 'Offerte sjabloon',
    'LBL_STAGE' => 'Offertestadium',
    'LBL_TERM' => 'Betaalvoorwaarden',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotaal',
    'LBL_DISCOUNT_AMOUNT' => 'Korting',
    'LBL_TAX_AMOUNT' => 'BTW',
    'LBL_SHIPPING_AMOUNT' => 'Verzendkosten',
    'LBL_TOTAL_AMT' => 'Totaal',
    'VALUE' => 'Titel',
    'LBL_EMAIL_ADDRESSES' => 'E-mailadressen',
    'LBL_LINE_ITEMS' => 'Lijnposten',
    'LBL_GRAND_TOTAL' => 'Eindtotaal',
    'LBL_INVOICE_STATUS' => 'Factuurstatus',
    'LBL_PRODUCT_QUANITY' => 'Aantal',
    'LBL_PRODUCT_NAME' => 'Product',
    'LBL_PART_NUMBER' => 'Onderdeelnummer',
    'LBL_PRODUCT_NOTE' => 'Notitie',
    'LBL_PRODUCT_DESCRIPTION' => 'Omschrijving',
    'LBL_LIST_PRICE' => 'Lijst',
    'LBL_DISCOUNT_AMT' => 'Korting',
    'LBL_UNIT_PRICE' => 'Verkoopprijs',
    'LBL_TOTAL_PRICE' => 'Totaal',
    'LBL_VAT' => 'BTW', // VAT
    'LBL_VAT_AMT' => 'BTW bedrag', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Voeg productregel toe',
    'LBL_SERVICE_NAME' => 'Dienst',
    'LBL_SERVICE_LIST_PRICE' => 'Lijst',
    'LBL_SERVICE_PRICE' => 'Verkoopprijs',
    'LBL_SERVICE_DISCOUNT' => 'Korting',
    'LBL_ADD_SERVICE_LINE' => 'Voeg dienstregel toe ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Verwijder',
    'LBL_CONVERT_TO_INVOICE' => 'Converteer naar factuur',
    'LBL_PRINT_AS_PDF' => 'Afdrukken als PDF',
    'LBL_EMAIL_QUOTE' => 'E-mail offerte',
    'LBL_CREATE_CONTRACT' => 'Maak contract',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Offerte',
    'LBL_EMAIL_NAME' => 'Offerte voor',
    'LBL_QUOTE_DATE' => 'Offertedatum',
    'LBL_NO_TEMPLATE' => 'Foutmelding\nGeen sjablonen gevonden. Als u nog geen offerte sjabloon hebt gemaakt, ga dan naar de PDF sjabloon module en maak er een aan',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotaal + BTW',//pre shipping
    'LBL_EMAIL_PDF' => 'E-mail PDF',
    'LBL_ADD_GROUP' => 'Groep toevoegen',
    'LBL_DELETE_GROUP' => 'Groep verwijderen',
    'LBL_GROUP_NAME' => 'Groepsnaam',
    'LBL_GROUP_TOTAL' => 'Groep totaal',
    'LBL_SHIPPING_TAX' => 'BTW verzendkosten',
    'LBL_SHIPPING_TAX_AMT' => 'BTW verzendkosten',
    'LBL_IMPORT_LINE_ITEMS' => 'Importeer lijnposten',
    'LBL_CREATE_OPPORTUNITY' => 'Kans aanmaken',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotaal (Standaard valuta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Korting (Standaard valuta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'BTW (standaard valuta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Verzendkosten (Standaard valuta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Totaal (Standaard valuta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'BTW verzendkosten (standaard valuta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Eindtotaal (Standaard valuta)',
    'LBL_QUOTE_TO' => 'Offerte naar',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotaal + BTW (Standaard valuta)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Offertes: Contracten',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Offertes: Facturen',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Lijnpostgroepen',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product offertes',
    'LBL_AOS_QUOTES_PROJECT' => 'Offertes: Project',
);
