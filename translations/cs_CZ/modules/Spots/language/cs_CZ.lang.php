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
    'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Name',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_LIST_NAME' => 'Name',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_REMOVE' => 'Remove',
    'LBL_LIST_FORM_TITLE' => 'Kontingenční seznam',
    'LBL_MODULE_NAME' => 'Kontingenční tabulka',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'Moje kontingenční tabulka',
    'LNK_NEW_RECORD' => 'Vytvoření kontingenční tabulky',
    'LNK_LIST' => 'Zobrazení kontingenční tabulky',
    'LBL_SEARCH_FORM_TITLE' => 'Hledání kontingenční tabulky',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Nová kontingenční tabulka',
    'LBL_CONFIG' => 'Nastavení',
    'LBL_TYPE' => 'Oblast analýzy',
    'LNK_SPOT_LIST' => 'Zobrazit přehledy',
    'LNK_SPOT_CREATE' => 'Vytvořit přehled',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Nastavení',

    'LBL_AN_UNSUPPORTED_DB' => 'Promiňte, Suite Přehledy jsou nyní konfigurovány pouze pro MySQL a MS SQL',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Name',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Account Type',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Odvětví',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Fakturační Stát',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Assigned User',
    'LBL_AN_LEADS_STATUS' => 'Status',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Lead Source',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Campaign Name',
    'LBL_AN_LEADS_YEAR' => 'Year',
    'LBL_AN_LEADS_QUARTER' => 'Quarter',
    'LBL_AN_LEADS_MONTH' => 'Month',
    'LBL_AN_LEADS_WEEK' => 'Week',
    'LBL_AN_LEADS_DAY' => 'Day',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Account Name',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Opportunity Name',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Assigned User',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Typ příležitosti',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Lead Source',
    'LBL_AN_SALES_AMOUNT' => 'Amount',
    'LBL_AN_SALES_STAGE' => 'Sales Stage',
    'LBL_AN_SALES_PROBABILITY' => 'Pravděpodobnost',
    'LBL_AN_SALES_DATE' => 'Sales Date',
    'LBL_AN_SALES_QUARTER' => 'Sales Quarter',
    'LBL_AN_SALES_MONTH' => 'Sales Month',
    'LBL_AN_SALES_WEEK' => 'Sales Week',
    'LBL_AN_SALES_DAY' => 'Sales Day',
    'LBL_AN_SALES_YEAR' => 'Sales Year',
    'LBL_AN_SALES_CAMPAIGN' => 'Campaign',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Account Name',
    'LBL_AN_SERVICE_STATE' => 'State',
    'LBL_AN_SERVICE_STATUS' => 'Status',
    'LBL_AN_SERVICE_PRIORITY' => 'Priority',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Created Day',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Created Week',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Created Month',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Created Quarter',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Created Year',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Contact Name',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Assigned User',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Type',
    'LBL_AN_ACTIVITIES_NAME' => 'Name',
    'LBL_AN_ACTIVITIES_STATUS' => 'Status',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Assigned User',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Status',
    'LBL_AN_MARKETING_TYPE' => 'Type',
    'LBL_AN_MARKETING_BUDGET' => 'Budget',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Předpokládaný náklad',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Expected Revenue',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Opportunity Name',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Opportunity Amount',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Etapa prodeje Příležitosti',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Příležitost přiřazena k',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Account Name',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Campaign Name',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Activity Date',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Activity Type',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Related Type',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Související ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Opportunity Name',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Typ příležitosti',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Zdroj Iniciativy Příležitosti',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Opportunity Sales Stage',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Account Name',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Contact Name',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Item Name',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Typ položky',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Kategorie položky',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Množství položek',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Ceník',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Prodejní cena položky',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Nákladová cena položky',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Zlevněná cena položky',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Discount Amount',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Položka celkem',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Grand Total',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Assigned User',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Date Created',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Den vytvořen',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Týden vytvořen',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Měsíc vytvořen',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Čtvrtletí vytvořeno',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Rok vytvořen',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Chyba zjišťování popisků pro dílčí oblast kontingenční tabulky',
);
