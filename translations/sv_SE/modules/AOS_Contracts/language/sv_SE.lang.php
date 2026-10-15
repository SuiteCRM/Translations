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
    'LBL_ASSIGNED_TO_NAME' => 'Avtalsansvarig',
    'LBL_CONTRACT_ACCOUNT' => 'Organisation',
    'LBL_OPPORTUNITY' => 'Affärsmöjlighet',
    'LBL_ID' => 'Id',
    'LBL_DATE_ENTERED' => 'Skapat datum',
    'LBL_DATE_MODIFIED' => 'Ändrat datum',
    'LBL_MODIFIED' => 'Ändrad av',
    'LBL_MODIFIED_NAME' => 'Ändrad av namn',
    'LBL_CREATED' => 'Skapad av',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_DELETED' => 'Borttagen',
    'LBL_NAME' => 'Avtalstitel',
    'LBL_CREATED_USER' => 'Skapad av användare',
    'LBL_MODIFIED_USER' => 'Ändrad av användare',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_LIST_FORM_TITLE' => 'Avtalslista',
    'LBL_MODULE_NAME' => 'Avtal',
    'LBL_MODULE_TITLE' => 'Avtal: startsida',
    'LBL_HOMEPAGE_TITLE' => 'Mina avtal',
    'LNK_NEW_RECORD' => 'Skapa avtal',
    'LNK_LIST' => 'Visa avtal',
    'LBL_SEARCH_FORM_TITLE' => 'Sök avtal',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visa historik',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_NEW_FORM_TITLE' => 'Nytt avtal',
    'LBL_CONTRACT_NAME' => 'Avtalsnamn',
    'LBL_REFERENCE_CODE ' => 'Referenskod ',
    'LBL_START_DATE' => 'Startdatum',
    'LBL_END_DATE' => 'Slutdatum',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Avtalsvärde',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Kundens underteckningsdatum',
    'LBL_COMPANY_SIGNED_DATE' => 'Företagets underteckningsdatum',
    'LBL_RENEWAL_REMINDER' => ' Påminnelse om avtalsförnyelse',
    'LBL_RENEWAL_REMINDER_DATE' => 'Datum för påminnelse om förnyelse',
    'LBL_CONTRACT_TYPE' => 'Avtalstyp',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_ADD_GROUP' => 'Lägg till grupp',
    'LBL_DELETE_GROUP' => 'Ta bort grupp',
    'LBL_GROUP_NAME' => 'Gruppnamn',
    'LBL_GROUP_TOTAL' => 'Gruppsumma',
    'LBL_PRODUCT_QUANITY' => 'Antal',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Artikelnummer',
    'LBL_PRODUCT_NOTE' => 'Anteckning',
    'LBL_PRODUCT_DESCRIPTION' => 'Beskrivning',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Rabatt',
    'LBL_UNIT_PRICE' => 'Försäljningspris',
    'LBL_TOTAL_PRICE' => 'Summa',
    'LBL_VAT' => 'Skatt',
    'LBL_VAT_AMT' => 'Skattebelopp',
    'LBL_SERVICE_NAME' => 'Tjänst',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Försäljningspris',
    'LBL_SERVICE_DISCOUNT' => 'Rabatt',
    'LBL_LINE_ITEMS' => 'Rader',
    'LBL_SUBTOTAL_AMOUNT' => 'Delsumma',
    'LBL_DISCOUNT_AMOUNT' => 'Rabatt',
    'LBL_TAX_AMOUNT' => 'Skatt',
    'LBL_SHIPPING_AMOUNT' => 'Frakt',
    'LBL_TOTAL_AMT' => 'Summa',
    'LBL_GRAND_TOTAL' => 'Totalsumma',
    'LBL_SHIPPING_TAX' => 'Fraktskatt',
    'LBL_SHIPPING_TAX_AMT' => 'Fraktskatt',
    'LBL_ADD_PRODUCT_LINE' => 'Lägg till produktrad',
    'LBL_ADD_SERVICE_LINE' => 'Lägg till tjänsterad ',
    'LBL_PRINT_AS_PDF' => 'Skriv ut som PDF',
    'LBL_EMAIL_PDF' => 'Skicka PDF med e-post',
    'LBL_PDF_NAME' => 'Avtal',
    'LBL_EMAIL_NAME' => 'Avtal för',
    'LBL_NO_TEMPLATE' => 'FEL\nInga mallar hittades. Om du inte har skapat en avtalsmall går du till modulen för PDF-mallar och skapar en',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Avtalsvärde (standardvaluta)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Delsumma (standardvaluta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabatt (standardvaluta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Skatt (standardvaluta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Frakt (standardvaluta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Summa (standardvaluta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Fraktskatt (standardvaluta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Totalsumma (standardvaluta)',

    'LBL_CALL_ID' => 'Samtals-id',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Radgrupper',
    'LBL_AOS_PRODUCT_QUOTES' => 'Produkt offerter',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Offerter: avtal',
);
