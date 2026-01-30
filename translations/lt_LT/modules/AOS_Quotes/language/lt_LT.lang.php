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
    'LBL_ASSIGNED_TO_ID' => 'Atsakingo Vartotojo Id',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_ID' => 'Id',
    'LBL_DATE_ENTERED' => 'Sukurta',
    'LBL_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_MODIFIED' => 'Redagavo',
    'LBL_MODIFIED_NAME' => 'Redaguotojo vardas',
    'LBL_CREATED' => 'Sukūrė',
    'LBL_DESCRIPTION' => 'Aprašymas',
    'LBL_DELETED' => 'Ištrintas',
    'LBL_NAME' => 'Pareigybės',
    'LBL_CREATED_USER' => 'Sukūrė vartotojas',
    'LBL_MODIFIED_USER' => 'Redagavo vartotojas',
    'ERR_DELETE_RECORD' => 'Įrašas turi būti nurodytas norint ištrinti klientą.',
    'LBL_ACCOUNT_NAME' => 'Pareigybės',
    'LBL_ACCOUNT' => 'Įmonė:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_ADDRESS_INFORMATION' => 'Adresas:',
    'LBL_ANNUAL_REVENUE' => 'Metinė apyvarta:',
    'LBL_ANY_ADDRESS' => 'Kitas adresas:',
    'LBL_ANY_EMAIL' => 'El.paštas:',
    'LBL_ANY_PHONE' => 'Bet koks telefonas:',
    'LBL_RATING' => 'Bankas:',
    'LBL_ASSIGNED_USER' => 'Vartotojas',
    'LBL_BILLING_ADDRESS_CITY' => 'Sąskaitos adresas:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Sąskaitos adreso šalis:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Sąskaitos adreso pašto kodas:',
    'LBL_BILLING_ADDRESS_STATE' => 'Registracijos adreso rajonas:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Sąskaitos adreso gatvė 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Sąskaitos adreso gatvė 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Sąskaitos adreso gatvė 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Sąskaitos adreso gatvė:',
    'LBL_BILLING_ADDRESS' => 'Sąskaitos adresas:',
    'LBL_ACCOUNT_INFORMATION' => 'Apžvalga',
    'LBL_CITY' => 'Miestas:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktas',
    'LBL_COUNTRY' => 'Šalis:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Naudotojai',
    'LBL_DUPLICATE' => 'Galimai pasikartojanti paskyra',
    'LBL_EMAIL' => 'El. paštas:',
    'LBL_EMPLOYEES' => 'Darbuotojai:',
    'LBL_FAX' => 'Faksas:',
    'LBL_INDUSTRY' => 'Pramonės šaka:',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliento pavadinimas',
    'LBL_LIST_CITY' => 'Miestas:',
    'LBL_LIST_EMAIL_ADDRESS' => 'El. pašto adresas',
    'LBL_LIST_PHONE' => 'Telefonas',
    'LBL_LIST_STATE' => 'Rajonas',
    'LBL_MEMBER_OF' => 'Narys:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Padaliniai',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Kitas laiškas:',
    'LBL_OTHER_PHONE' => 'Kitas telefonas:',
    'LBL_OWNERSHIP' => 'Nuosavybė:',
    'LBL_PARENT_ACCOUNT_ID' => 'Pagrindinio kliento ID',
    'LBL_PHONE_ALT' => 'Alternatyvus telefonas:',
    'LBL_PHONE_FAX' => 'Telefonas faksas:',
    'LBL_PHONE_OFFICE' => 'Darbovietės telefonas:',
    'LBL_PHONE' => 'Telefonas:',
    'LBL_POSTAL_CODE' => 'Pašto kodas:',
    'LBL_SAVE_ACCOUNT' => 'Saugoti paskyrą',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Pristatymo adreso miestas:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Pristatymo adreso šalis:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Pristatymo adreso pašto kodas:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Pristatymo adreso regionas:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Pristatymo adreso gatvė 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Pristatymo adreso gatvė 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Pristatymo adreso gatvė 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Pristatymo adreso gatvė:',
    'LBL_SHIPPING_ADDRESS' => 'Pristatymo adresas:',
    'LBL_STATE' => 'Apskritis ar Regionas:',
    'LBL_TICKER_SYMBOL' => 'Simbolis akcijų biržose:',
    'LBL_TYPE' => 'Tipas:',
    'LBL_WEBSITE' => 'Tinklalapis:',
    'LNK_ACCOUNT_LIST' => 'Naudotojai',
    'LNK_NEW_ACCOUNT' => 'Sukurti paskyrą',
    'MSG_DUPLICATE' => 'Sukuriant šį vartotoją gali sukurti dubliuotį vartotoją. Kuriant tinkama būtų pasirinkti vartotoją iš sąrašo ar spaudziant Saugoti taip bandant sukurti naują vartotoją su prieš tai ivestais duomenimis.',
    'MSG_SHOW_DUPLICATES' => 'Sukuriant šį vartotoją galima sukurti dubliuotį vartotoją. Kuriant tinkama būtų pasirinkti vartotoją iš sąrašo ar spaudziant Saugoti taip bandant sukurti naują vartotoją su prieš tai ivestais duomenimis arba pasirinkti Atšaukti.',
    'NTC_DELETE_CONFIRMATION' => 'Ar tikrai norite ištrinti šį įrašą ?',
    'LBL_LIST_FORM_TITLE' => 'Pasiūlymų Sąrašas',
    'LBL_MODULE_NAME' => 'Pasiūlymai',
    'LBL_MODULE_TITLE' => 'Pasiūlymai: Pradžia',
    'LBL_HOMEPAGE_TITLE' => 'Mano Pasiūlymai',
    'LNK_NEW_RECORD' => 'Sukurti pasiūlymą',
    'LNK_LIST' => 'Rodyti Pasiūlymus',
    'LBL_SEARCH_FORM_TITLE' => 'Paieška Pasiūlymai',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Peržiūros istorija',
    'LBL_NEW_FORM_TITLE' => 'Naujas Pasiūlymas',
    'LBL_TERMS_C' => 'Terminai',
    'LBL_APPROVAL_ISSUE' => 'Patvirtinimo Klausimai',
    'LBL_APPROVAL_STATUS' => 'Patvirtinimo Statusas',
    'LBL_BILLING_ACCOUNT' => 'Klientas',
    'LBL_BILLING_CONTACT' => 'Adresatas',
    'LBL_EXPIRATION' => 'Galioja IkI',
    'LBL_QUOTE_NUMBER' => 'Pasiūlymo Numeris',
    'LBL_OPPORTUNITY' => 'Pardavimas',
    'LBL_TEMPLATE_DDOWN_C' => 'Pasiūlymo šablonas',
    'LBL_STAGE' => 'Pasiūlymo būsenos faze',
    'LBL_TERM' => 'Mokėjimo Sąlygos',
    'LBL_SUBTOTAL_AMOUNT' => 'Tarpinė Suma',
    'LBL_DISCOUNT_AMOUNT' => 'Nuolaida',
    'LBL_TAX_AMOUNT' => 'Mokesčiai',
    'LBL_SHIPPING_AMOUNT' => 'Pristatymas',
    'LBL_TOTAL_AMT' => 'Iš viso',
    'VALUE' => 'Pareigybės',
    'LBL_EMAIL_ADDRESSES' => 'El. pašto adresai',
    'LBL_LINE_ITEMS' => 'Pasiūlymai',
    'LBL_GRAND_TOTAL' => 'Pagrindinė Suma',
    'LBL_INVOICE_STATUS' => 'Sąskaitos Statusas',
    'LBL_PRODUCT_QUANITY' => 'Kiekis',
    'LBL_PRODUCT_NAME' => 'Prekė',
    'LBL_PART_NUMBER' => 'Vaidmens Numeris',
    'LBL_PRODUCT_NOTE' => 'Aprašymas',
    'LBL_PRODUCT_DESCRIPTION' => 'Aprašymas',
    'LBL_LIST_PRICE' => 'Sąrašas',
    'LBL_DISCOUNT_AMT' => 'Nuolaida',
    'LBL_UNIT_PRICE' => 'Pardavimo Kaina',
    'LBL_TOTAL_PRICE' => 'Iš viso',
    'LBL_VAT' => 'Mokesčiai', // VAT
    'LBL_VAT_AMT' => 'Mokesčio Suma', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Pridėti Produkto Liniją',
    'LBL_SERVICE_NAME' => 'Paslauga',
    'LBL_SERVICE_LIST_PRICE' => 'Sąrašas',
    'LBL_SERVICE_PRICE' => 'Pardavimo Kaina',
    'LBL_SERVICE_DISCOUNT' => 'Nuolaida',
    'LBL_ADD_SERVICE_LINE' => 'Pridėti Serviso Liniją',
    'LBL_REMOVE_PRODUCT_LINE' => 'Išmesti',
    'LBL_CONVERT_TO_INVOICE' => 'Konvertuoti į Sąskaitą',
    'LBL_PRINT_AS_PDF' => 'Spausdinti kaip PDF',
    'LBL_EMAIL_QUOTE' => 'El. paštu Pasiūlymas',
    'LBL_CREATE_CONTRACT' => 'Sukurti Sutartį',
    'LBL_LIST_NUM' => 'Nr.',
    'LBL_PDF_NAME' => 'Kvota',
    'LBL_EMAIL_NAME' => 'Pasiūlymas dėl',
    'LBL_QUOTE_DATE' => 'Pasiūlymo Data',
    'LBL_NO_TEMPLATE' => 'Klaida šablonas nerastas. Jei nesate sukūrę pasiūlymo šablono, eikite į PDF šablonų modulį ir sukurtkite',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Tarpinė suma + Mokesčiai',//pre shipping
    'LBL_EMAIL_PDF' => 'El. laiškų PDF rinkmenos',
    'LBL_ADD_GROUP' => 'Grupės Pridėjimas',
    'LBL_DELETE_GROUP' => 'Naikinti Grupę',
    'LBL_GROUP_NAME' => 'Grupės Pavadinimas',
    'LBL_GROUP_TOTAL' => 'Grupių Viso',
    'LBL_SHIPPING_TAX' => 'Siuntimo Mokestis',
    'LBL_SHIPPING_TAX_AMT' => 'Siuntimo Mokestis',
    'LBL_IMPORT_LINE_ITEMS' => 'Importuoti Eilutės elementus',
    'LBL_CREATE_OPPORTUNITY' => 'Sukurti pardavimą',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Tarpinė suma (Numatytąja Valiuta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Nuolaida (Numatytąja valiuta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Mokesčiai (Numatytąja Valiuta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Pristatymas (Numatytąja Valiuta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Viso (Numatytąja Valiuta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Siuntimo Mokestis (Numatytąja Valiuta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Pagrindinė Suma (Numatytąja Valiuta)',
    'LBL_QUOTE_TO' => 'Pasiūlymas dėl',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Tarpinė suma + Mokesčiai (Numatytąja Valiuta)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Prekių grupes',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
);
