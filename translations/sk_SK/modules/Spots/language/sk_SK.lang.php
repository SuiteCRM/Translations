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
    'LBL_ASSIGNED_TO_ID' => 'Priradené ID používateľa',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_SECURITYGROUPS' => 'CRM Skupiny',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'CRM Skupiny',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Dátum vytvorenia',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy',
    'LBL_MODIFIED' => 'Upravil',
    'LBL_MODIFIED_NAME' => 'Upravil',
    'LBL_CREATED' => 'Vytvoril',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazané',
    'LBL_NAME' => 'Meno',
    'LBL_CREATED_USER' => 'Vytvoril',
    'LBL_MODIFIED_USER' => 'Upravil',
    'LBL_LIST_NAME' => 'Meno',
    'LBL_EDIT_BUTTON' => 'Upraviť',
    'LBL_REMOVE' => 'Odstrániť',
    'LBL_LIST_FORM_TITLE' => 'Zoznam kontingenčných tabuliek',
    'LBL_MODULE_NAME' => 'Kontingenčná tabuľka',
    'LBL_MODULE_TITLE' => 'Kontingenčná tabuľka',
    'LBL_HOMEPAGE_TITLE' => 'Moja kontingenčná tabuľka',
    'LNK_NEW_RECORD' => 'Vytvoriť kontingenčnú tabuľku',
    'LNK_LIST' => 'Zobraziť kontingenčnú tabuľku',
    'LBL_SEARCH_FORM_TITLE' => 'Hľadať kontingenčnú tabuľku',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zobraziť Históriu',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_NEW_FORM_TITLE' => 'Nová kontingenčná tabuľka',
    'LBL_CONFIG' => 'Nastavenia',
    'LBL_TYPE' => 'Oblasť pre analýzu',
    'LNK_SPOT_LIST' => 'Zobraziť súhrny',
    'LNK_SPOT_CREATE' => 'Vytvoriť súhrn',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Konfigurácia',

    'LBL_AN_UNSUPPORTED_DB' => 'Ľutujeme, zoskupenia súhrnov sú aktuálne nakonfigurované iba pre MySQL a MS SQL',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Meno',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Account Type',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Priemysel',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Krajina fakturácie',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Priradený používateľ',
    'LBL_AN_LEADS_STATUS' => 'Stav',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Viesť zdroj',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Meno kampane',
    'LBL_AN_LEADS_YEAR' => 'Rok',
    'LBL_AN_LEADS_QUARTER' => 'Štvrťrok',
    'LBL_AN_LEADS_MONTH' => 'Mesiac',
    'LBL_AN_LEADS_WEEK' => 'Týždeň',
    'LBL_AN_LEADS_DAY' => 'Deň',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Názov obchodnej príležitosti:',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Priradený používateľ',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Typ príležitosti',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Viesť zdroj',
    'LBL_AN_SALES_AMOUNT' => 'Suma',
    'LBL_AN_SALES_STAGE' => 'Štádium predaja',
    'LBL_AN_SALES_PROBABILITY' => 'Pravdepodobnosť',
    'LBL_AN_SALES_DATE' => 'Dátum predaja',
    'LBL_AN_SALES_QUARTER' => 'Predaje štvrťroku',
    'LBL_AN_SALES_MONTH' => 'Mesačné predaje',
    'LBL_AN_SALES_WEEK' => 'Týždenné predaje',
    'LBL_AN_SALES_DAY' => 'Denné predaje',
    'LBL_AN_SALES_YEAR' => 'Ročné predaje',
    'LBL_AN_SALES_CAMPAIGN' => 'Kampaň',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_AN_SERVICE_STATE' => 'Štát',
    'LBL_AN_SERVICE_STATUS' => 'Stav',
    'LBL_AN_SERVICE_PRIORITY' => 'Priorita',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Vytvorené dňa',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Týždeň vytvorenia',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Mesiac vytvorenia',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Štvrťrok vytvorenia',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Rok vytvorenia',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Meno kontaktu:',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Priradený používateľ',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Typ',
    'LBL_AN_ACTIVITIES_NAME' => 'Meno',
    'LBL_AN_ACTIVITIES_STATUS' => 'Stav',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Priradený používateľ',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Stav',
    'LBL_AN_MARKETING_TYPE' => 'Typ',
    'LBL_AN_MARKETING_BUDGET' => 'Rozpočet',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Očakávané náklady',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Očakávané výnosy',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Názov obchodnej príležitosti:',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Čiastka obchodnej príležitosti',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Fáza možnosti predaja',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Príležitosti priradené k',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Názov Firma',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Meno kampane',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Dátum aktivity',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Typ aktivity',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Súvisiaci typ',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Súvisiace ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Názov obchodnej príležitosti:',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Typ príležitostí',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Zdroj predajných príležitostí',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Fáza možnosti predaja',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Meno kontaktu:',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Názov položky',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Typ položky',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Kategória položky',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Množstvo položky',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Cenník položiek',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Predajná cena položky',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Nákladová cena položky',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Množstevá zľava pre položku',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Množstvová zľava',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Položiek spolu',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Celkový súčet',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Priradený používateľ',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Dátum vytvorenia',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Vytvorené dňa',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Týždeň vytvorenia',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Mesiac vytvorenia',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Štvrťrok vytvorenia',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Rok vytvorenia',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Chyba zisťovania označenia pre podoblasť kontingenčnej tabuľky',
);
