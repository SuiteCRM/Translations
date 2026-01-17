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
    'LBL_ASSIGNED_TO_NAME' => 'Kontrakt Manager',
    'LBL_CONTRACT_ACCOUNT' => 'Kunde',
    'LBL_OPPORTUNITY' => 'Salgsmuligheter',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Dato opprettet',
    'LBL_DATE_MODIFIED' => 'Dato endret',
    'LBL_MODIFIED' => 'Endret av',
    'LBL_MODIFIED_NAME' => 'Endret av navn',
    'LBL_CREATED' => 'Opprettet av',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_DELETED' => 'Slettet',
    'LBL_NAME' => 'Kontrakt-tittel',
    'LBL_CREATED_USER' => 'Opprettet av bruker',
    'LBL_MODIFIED_USER' => 'Modifisert av bruker',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_FORM_TITLE' => 'Kontraktliste',
    'LBL_MODULE_NAME' => 'Kontrakter',
    'LBL_MODULE_TITLE' => 'Kontrakter: Hjem',
    'LBL_HOMEPAGE_TITLE' => 'Mine Kontrakter',
    'LNK_NEW_RECORD' => 'Opprett Kontrakt',
    'LNK_LIST' => 'Vis Kontrakter',
    'LBL_SEARCH_FORM_TITLE' => 'Søk i Kontrakter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Se på historikk',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_NEW_FORM_TITLE' => 'Ny Kontrakt',
    'LBL_CONTRACT_NAME' => 'Kontraktnav',
    'LBL_REFERENCE_CODE ' => 'Referansekode',
    'LBL_START_DATE' => 'Start dato',
    'LBL_END_DATE' => 'Avslutningsdato',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Kontraktverd',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Signeringsdato for kunde',
    'LBL_COMPANY_SIGNED_DATE' => 'Signeringsdato for bedrift',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Dato for fornyelsespåminnelse',
    'LBL_CONTRACT_TYPE' => 'Kontrakttype',
    'LBL_CONTACT' => 'Kontakter',
    'LBL_ADD_GROUP' => 'Legg til gruppe',
    'LBL_DELETE_GROUP' => 'Fjern gruppe',
    'LBL_GROUP_NAME' => 'Gruppenavn',
    'LBL_GROUP_TOTAL' => 'Totalt',
    'LBL_PRODUCT_QUANITY' => 'Antal',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Delnummer',
    'LBL_PRODUCT_NOTE' => 'Notater og vedlegg',
    'LBL_PRODUCT_DESCRIPTION' => 'Beskrivelse',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'Avslag',
    'LBL_UNIT_PRICE' => 'Salgspris',
    'LBL_TOTAL_PRICE' => 'Totalt',
    'LBL_VAT' => 'Skatt',
    'LBL_VAT_AMT' => 'Skatt',
    'LBL_SERVICE_NAME' => 'Tjeneste',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Salgspris',
    'LBL_SERVICE_DISCOUNT' => 'Avslag',
    'LBL_LINE_ITEMS' => 'Linjeenheter',
    'LBL_SUBTOTAL_AMOUNT' => 'Delsum',
    'LBL_DISCOUNT_AMOUNT' => 'Avslag',
    'LBL_TAX_AMOUNT' => 'Skatt',
    'LBL_SHIPPING_AMOUNT' => 'Frakt',
    'LBL_TOTAL_AMT' => 'Totalt',
    'LBL_GRAND_TOTAL' => 'Totalsum',
    'LBL_SHIPPING_TAX' => 'Fraktavgift',
    'LBL_SHIPPING_TAX_AMT' => 'Fraktavgift',
    'LBL_ADD_PRODUCT_LINE' => 'Legg til produktlinje',
    'LBL_ADD_SERVICE_LINE' => 'Legg til tjenestelinje',
    'LBL_PRINT_AS_PDF' => 'Skriv ut som PDF',
    'LBL_EMAIL_PDF' => 'Send PDF på e-post',
    'LBL_PDF_NAME' => 'Kontrakt',
    'LBL_EMAIL_NAME' => 'Kontrakt for',
    'LBL_NO_TEMPLATE' => 'Feil: Ingen maler funnet. Dersom du ikke har opprettet en kontraktmal, gå til PDF-mal-modulen og opprett en.',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Kontraktsverdien (standardvaluta)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Delsum (standardvaluta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Avslag (standardvaluta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Skatt (standardvaluta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Frakt (standardvaluta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (standardvaluta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Fraktavgift (standardvaluta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Totalsum (standardvaluta)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Linjeenhetsgrupper',
    'LBL_AOS_PRODUCT_QUOTES' => 'Produkt tilbud',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Tilbud: kontrakter',
);
