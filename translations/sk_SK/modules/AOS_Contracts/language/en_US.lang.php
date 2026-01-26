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
    'LBL_ASSIGNED_TO_NAME' => 'Pridelený k:',
    'LBL_CONTRACT_ACCOUNT' => 'Firma',
    'LBL_OPPORTUNITY' => 'Príležitosť',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Dátum vytvorenia',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy',
    'LBL_MODIFIED' => 'Upravil',
    'LBL_MODIFIED_NAME' => 'Upravil',
    'LBL_CREATED' => 'Vytvoril',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazané',
    'LBL_NAME' => 'Nadpis zmluvy',
    'LBL_CREATED_USER' => 'Vytvoril',
    'LBL_MODIFIED_USER' => 'Upravil',
    'LBL_LIST_NAME' => 'Meno',
    'LBL_LIST_FORM_TITLE' => 'Zoznam Kontraktov',
    'LBL_MODULE_NAME' => 'Zmluvy',
    'LBL_MODULE_TITLE' => 'Kontrakty: Hlavná stránka',
    'LBL_HOMEPAGE_TITLE' => 'Moje zmluvy',
    'LNK_NEW_RECORD' => 'Vytvoriť zmluvu',
    'LNK_LIST' => 'Zobraziť zmluvy',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadať kontrakty',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zobraziť Históriu',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_NEW_FORM_TITLE' => 'Nový Kontrakt',
    'LBL_CONTRACT_NAME' => 'Meno Kontraktu:',
    'LBL_REFERENCE_CODE ' => 'Referenčný kód ',
    'LBL_START_DATE' => 'Dátum začiatku:',
    'LBL_END_DATE' => 'Dátum ukončenia',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Hodnota Konraktu',
    'LBL_STATUS' => 'Stav',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Dátum Podpisu Zákazníka:',
    'LBL_COMPANY_SIGNED_DATE' => 'Dátum Podpisu Spoločnosti:',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Dátum pripomenutia obnovenia',
    'LBL_CONTRACT_TYPE' => 'Typ kontraktu',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_ADD_GROUP' => 'Pridať skupinu',
    'LBL_DELETE_GROUP' => 'Odstrániť skupinu',
    'LBL_GROUP_NAME' => 'Meno skupiny',
    'LBL_GROUP_TOTAL' => 'Za skupinu spolu',
    'LBL_PRODUCT_QUANITY' => 'Množstvo',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Číslo položky',
    'LBL_PRODUCT_NOTE' => 'Poznámky',
    'LBL_PRODUCT_DESCRIPTION' => 'Popis',
    'LBL_LIST_PRICE' => 'Zoznam',
    'LBL_DISCOUNT_AMT' => 'Zľava',
    'LBL_UNIT_PRICE' => 'Predajná cena',
    'LBL_TOTAL_PRICE' => 'Spolu',
    'LBL_VAT' => 'Daň',
    'LBL_VAT_AMT' => 'Čiastka dane',
    'LBL_SERVICE_NAME' => 'Služba',
    'LBL_SERVICE_LIST_PRICE' => 'Zoznam',
    'LBL_SERVICE_PRICE' => 'Predajná cena',
    'LBL_SERVICE_DISCOUNT' => 'Zľava',
    'LBL_LINE_ITEMS' => 'Riadkové položky',
    'LBL_SUBTOTAL_AMOUNT' => 'Medzisúčet',
    'LBL_DISCOUNT_AMOUNT' => 'Zľava',
    'LBL_TAX_AMOUNT' => 'Daň',
    'LBL_SHIPPING_AMOUNT' => 'Lodná doprava',
    'LBL_TOTAL_AMT' => 'Spolu',
    'LBL_GRAND_TOTAL' => 'Celkový súčet',
    'LBL_SHIPPING_TAX' => 'Prepravná daň',
    'LBL_SHIPPING_TAX_AMT' => 'Prepravná daň',
    'LBL_ADD_PRODUCT_LINE' => 'Pridať produktový rad',
    'LBL_ADD_SERVICE_LINE' => 'Pridať riadok servisu ',
    'LBL_PRINT_AS_PDF' => 'Vytlačiť vo formáte PDF',
    'LBL_EMAIL_PDF' => 'Zaslať PDF emailom',
    'LBL_PDF_NAME' => 'Zmluva',
    'LBL_EMAIL_NAME' => 'Zmluva pre',
    'LBL_NO_TEMPLATE' => 'CHYBA\nNebola nájdená žiadna šablóna. Ak nemáte vytvorenú žiadnu šablónu zmluvy, choďte do modulu PDF šablóny a jednu vytvorte',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Hodnota Kontraktu (USD):',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Medzisúčet (predvolená mena)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Zľava (predvolená mena)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Daň (predvolená mena)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Poštovné (predvolená mena)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Spolu (predvolená mena)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Prepravná daň (predvolená mena)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Celkový súčet (predvolená mena)',

    'LBL_CALL_ID' => 'ID hovoru',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Skupiny riadkových položiek',
    'LBL_AOS_PRODUCT_QUOTES' => 'Ponuky produktov',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Ponuky: Zmluvy',
);
