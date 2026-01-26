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
    'LBL_ASSIGNED_TO_NAME' => 'Sutarties vadybininkas',
    'LBL_CONTRACT_ACCOUNT' => 'Klientas',
    'LBL_OPPORTUNITY' => 'Pardavimas',
    'LBL_ID' => 'Id',
    'LBL_DATE_ENTERED' => 'Sukurta',
    'LBL_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_MODIFIED' => 'Redagavo',
    'LBL_MODIFIED_NAME' => 'Redaguotojo vardas',
    'LBL_CREATED' => 'Sukūrė',
    'LBL_DESCRIPTION' => 'Aprašymas',
    'LBL_DELETED' => 'Ištrintas',
    'LBL_NAME' => 'Sutarties Pavadinimas',
    'LBL_CREATED_USER' => 'Sukūrė vartotojas',
    'LBL_MODIFIED_USER' => 'Redagavo vartotojas',
    'LBL_LIST_NAME' => 'Vardas',
    'LBL_LIST_FORM_TITLE' => 'Sutarčių sąrašas',
    'LBL_MODULE_NAME' => 'Sutartys',
    'LBL_MODULE_TITLE' => 'Sutartys: Pradžia',
    'LBL_HOMEPAGE_TITLE' => 'Mano Sutartys',
    'LNK_NEW_RECORD' => 'Sukurti Sutartį',
    'LNK_LIST' => 'Rodyti Sutartis',
    'LBL_SEARCH_FORM_TITLE' => 'Sutarties paieška',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Peržiūros istorija',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_NEW_FORM_TITLE' => 'Nauja sutartis',
    'LBL_CONTRACT_NAME' => 'Sutarties pavadinimas:',
    'LBL_REFERENCE_CODE ' => 'Kodo Nurodymas',
    'LBL_START_DATE' => 'Pražios data',
    'LBL_END_DATE' => 'Pabaigos laikas',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Sutarties vertė:',
    'LBL_STATUS' => 'Būsena',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Klientas pasirašė:',
    'LBL_COMPANY_SIGNED_DATE' => 'Įmonė pasirašė:',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Atnaujinti Priminimo Datą',
    'LBL_CONTRACT_TYPE' => 'Tipas:',
    'LBL_CONTACT' => 'Adresatas',
    'LBL_ADD_GROUP' => 'Grupės Pridėjimas',
    'LBL_DELETE_GROUP' => 'Naikinti Grupę',
    'LBL_GROUP_NAME' => 'Grupės Pavadinimas',
    'LBL_GROUP_TOTAL' => 'Grupių Viso',
    'LBL_PRODUCT_QUANITY' => 'Kiekis',
    'LBL_PRODUCT_NAME' => 'Prekė',
    'LBL_PART_NUMBER' => 'Vaidmens Numeris',
    'LBL_PRODUCT_NOTE' => 'Aprašymas',
    'LBL_PRODUCT_DESCRIPTION' => 'Aprašymas',
    'LBL_LIST_PRICE' => 'Sąrašas',
    'LBL_DISCOUNT_AMT' => 'Nuolaida',
    'LBL_UNIT_PRICE' => 'Pardavimo Kaina',
    'LBL_TOTAL_PRICE' => 'Iš viso',
    'LBL_VAT' => 'Mokesčiai',
    'LBL_VAT_AMT' => 'Mokesčio Suma',
    'LBL_SERVICE_NAME' => 'Paslauga',
    'LBL_SERVICE_LIST_PRICE' => 'Sąrašas',
    'LBL_SERVICE_PRICE' => 'Pardavimo Kaina',
    'LBL_SERVICE_DISCOUNT' => 'Nuolaida',
    'LBL_LINE_ITEMS' => 'Pasiūlymai',
    'LBL_SUBTOTAL_AMOUNT' => 'Tarpinė Suma',
    'LBL_DISCOUNT_AMOUNT' => 'Nuolaida',
    'LBL_TAX_AMOUNT' => 'Mokesčiai',
    'LBL_SHIPPING_AMOUNT' => 'Pristatymas',
    'LBL_TOTAL_AMT' => 'Iš viso',
    'LBL_GRAND_TOTAL' => 'Pagrindinė Suma',
    'LBL_SHIPPING_TAX' => 'Siuntimo Mokestis',
    'LBL_SHIPPING_TAX_AMT' => 'Siuntimo Mokestis',
    'LBL_ADD_PRODUCT_LINE' => 'Pridėti Produkto Liniją',
    'LBL_ADD_SERVICE_LINE' => 'Pridėti Serviso Liniją',
    'LBL_PRINT_AS_PDF' => 'Spausdinti kaip PDF',
    'LBL_EMAIL_PDF' => 'El. laiškų PDF rinkmenos',
    'LBL_PDF_NAME' => 'Sutartis',
    'LBL_EMAIL_NAME' => 'Sutartis dėl',
    'LBL_NO_TEMPLATE' => 'KLAIDA, nerastas šablonas. Jei nesate sukūrę Sutarties šablono, eikite į PDF šablonų modulį ir susikurkite',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Sutarties vertė (numatytąja valiuta)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Tarpinė suma (Numatytąja Valiuta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Nuolaida (Numatytąja valiuta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Mokesčiai (Numatytąja Valiuta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Pristatymas (Numatytąja Valiuta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Viso (Numatytąja Valiuta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Siuntimo Mokestis (Numatytąja Valiuta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Pagrindinė Suma (Numatytąja Valiuta)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Prekių grupes',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
);
