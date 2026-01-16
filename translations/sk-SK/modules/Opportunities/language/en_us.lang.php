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
    'LBL_MODULE_NAME' => 'Príležitosti',
    'LBL_MODULE_TITLE' => 'Obchodné príležitosti: Domov',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadať príležitosť',
    'LBL_LIST_FORM_TITLE' => 'Zoznam obchodných príležitostí',
    'LBL_OPPORTUNITY_NAME' => 'Názov obchodnej príležitosti:',
    'LBL_OPPORTUNITY' => 'Obchodná príležitosť:',
    'LBL_NAME' => 'Názov obchodnej príležitosti:',
    'LBL_INVITEE' => 'Kontakty',
    'LBL_CURRENCIES' => 'Meny',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Meno',
    'LBL_LIST_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_LIST_AMOUNT' => 'Čiastka obchodnej príležitosti',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Suma',
    'LBL_LIST_DATE_CLOSED' => 'Uzavrieť',
    'LBL_LIST_SALES_STAGE' => 'Štádium predaja',
    'LBL_ACCOUNT_ID' => 'Firma ID',
    'LBL_CURRENCY_NAME' => 'Názov meny',
    'LBL_CURRENCY_SYMBOL' => 'Symbol meny',
    'LBL_DAYS_OPEN_FOR' => 'This Opportunity Was Open For',

    'UPDATE' => 'Obchodná príležitosť - aktualizácia meny',
    'LBL_ACCOUNT_NAME' => 'Názov Firma:',
    'LBL_AMOUNT' => 'Príležitosť Čiastka:',
    'LBL_AMOUNT_USDOLLAR' => 'Suma:',
    'LBL_CURRENCY' => 'Mena:',
    'LBL_DATE_CLOSED' => 'Očakávaný dátum uzavretia:',
    'LBL_TYPE' => 'Typ:',
    'LBL_CAMPAIGN' => 'Kampaň:',
    'LBL_NEXT_STEP' => 'Ďalší krok:',
    'LBL_LEAD_SOURCE' => 'Zdroj informácií:',
    'LBL_SALES_STAGE' => 'Štádium predaja:',
    'LBL_PROBABILITY' => 'Pravdepodobnosť (%):',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DUPLICATE' => 'Možná duplicita obchodnej príležitosti',
    'MSG_DUPLICATE' => 'Vytvárate duplicitné ponuku. Môžete si buď vybrať citát z nižšie uvedeného zoznamu, alebo môžete kliknúť na Uložiť duplikovanú ponuku.',
    'LBL_NEW_FORM_TITLE' => 'Vytvoriť príležitosť',
    'LNK_NEW_OPPORTUNITY' => 'Vytvoriť príležitosť',
    'LNK_OPPORTUNITY_LIST' => 'Zobraziť príležitosti',
    'ERR_DELETE_RECORD' => 'K odstráneniu obchodnej príležitosti musíte zadať číslo záznamu.',
    'LBL_TOP_OPPORTUNITIES' => 'Moje Top Otvorené príležitosti',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Ste si istí, že chcete odstrániť túto príležitosť z projektu?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Príležitosti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'História',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Iniciatívy',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Priradený používateľ',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Moje Uzatvorené príležitosti',
    'LBL_TOTAL_OPPORTUNITIES' => 'Príležitosti spolu',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Uzatvorené víťazné príležitosti',
    'LBL_ASSIGNED_TO_ID' => 'Priradený užívateľ:',
    'LBL_MODIFIED_NAME' => 'Upravil',
    'LBL_CREATED_USER' => 'Vytvorený užívateľ',
    'LBL_MODIFIED_USER' => 'Upravený užívateľ',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampane',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LNK_IMPORT_OPPORTUNITIES' => 'importovať príležitosti',
    'LBL_EDITLAYOUT' => 'Upraviť rozloženie'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Zmluvy',
    'LBL_AOS_QUOTES' => 'Ponuky',

    'LBL_SIZE_ANALYSIS' => 'Size Analysis',
    'LBL_POSITION' => 'Position',
    'LBL_OUT_OF' => 'Out of',
);
