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
    'LBL_ASSIGNED_TO_ID' => 'Id atribuit utilizatorului',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
    'LBL_SECURITYGROUPS' => 'Grupuri Securitate',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupuri Securitate',
    'LBL_ID' => 'ID-ul',
    'LBL_DATE_ENTERED' => 'Data creării',
    'LBL_DATE_MODIFIED' => 'Data modificării',
    'LBL_MODIFIED' => 'Modificat de',
    'LBL_MODIFIED_NAME' => 'Nume modificant',
    'LBL_CREATED' => 'Creat De',
    'LBL_DESCRIPTION' => 'Descriere',
    'LBL_DELETED' => 'Şters',
    'LBL_NAME' => 'Nume',
    'LBL_CREATED_USER' => 'Creat de Utilizator',
    'LBL_MODIFIED_USER' => 'Modificat de utilizator',
    'LBL_LIST_NAME' => 'Nume',
    'LBL_EDIT_BUTTON' => 'Editați',
    'LBL_REMOVE' => 'Înlăturați',
    'LBL_LIST_FORM_TITLE' => 'Pivot List',
    'LBL_MODULE_NAME' => 'Pivot',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'My Pivot',
    'LNK_NEW_RECORD' => 'Create Pivot',
    'LNK_LIST' => 'View Pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Search Pivot',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vizualizare Istoric',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_NEW_FORM_TITLE' => 'New Pivot',
    'LBL_CONFIG' => 'Config',
    'LBL_TYPE' => 'Area for Analysis',
    'LNK_SPOT_LIST' => 'View Spots',
    'LNK_SPOT_CREATE' => 'Create Spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Configuration',

    'LBL_AN_UNSUPPORTED_DB' => 'Sorry, Suite Spots are currently configured for MySQL and MS SQL only',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Nume',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Account Type',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Industry',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Facturare - Ţară',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Atribuit utilizatorului',
    'LBL_AN_LEADS_STATUS' => 'Status',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Sursă conversie',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Nume Campanie',
    'LBL_AN_LEADS_YEAR' => 'An',
    'LBL_AN_LEADS_QUARTER' => 'Trimestru',
    'LBL_AN_LEADS_MONTH' => 'Lună',
    'LBL_AN_LEADS_WEEK' => 'Săptămână',
    'LBL_AN_LEADS_DAY' => 'Zi',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Nume Cont',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Nume oportunitate',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Atribuit utilizatorului',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'OpportunityType',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Sursă conversie',
    'LBL_AN_SALES_AMOUNT' => 'Suma, valoare',
    'LBL_AN_SALES_STAGE' => 'Stadiul',
    'LBL_AN_SALES_PROBABILITY' => 'Probability',
    'LBL_AN_SALES_DATE' => 'Sales Date',
    'LBL_AN_SALES_QUARTER' => 'Sales Quarter',
    'LBL_AN_SALES_MONTH' => 'Sales Month',
    'LBL_AN_SALES_WEEK' => 'Sales Week',
    'LBL_AN_SALES_DAY' => 'Sales Day',
    'LBL_AN_SALES_YEAR' => 'Sales Year',
    'LBL_AN_SALES_CAMPAIGN' => 'Campanie',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Nume Cont',
    'LBL_AN_SERVICE_STATE' => 'Stat',
    'LBL_AN_SERVICE_STATUS' => 'Status',
    'LBL_AN_SERVICE_PRIORITY' => 'Prioritate',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Created Day',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Created Week',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Created Month',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Created Quarter',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Created Year',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Denumire contact',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Atribuit utilizatorului',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Tip',
    'LBL_AN_ACTIVITIES_NAME' => 'Nume',
    'LBL_AN_ACTIVITIES_STATUS' => 'Status',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Atribuit utilizatorului',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Status',
    'LBL_AN_MARKETING_TYPE' => 'Tip',
    'LBL_AN_MARKETING_BUDGET' => 'Buget',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Expected Cost',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Venituri Estimate',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Nume oportunitate',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Cantitate Oportunitate',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Opportunity Sales Stage',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Opportunity Assigned To',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Nume Cont',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Nume Campanie',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Data activității',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Tip de activității',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Legat de tipul',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Related ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Nume oportunitate',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Opportunity Type',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Opportunity Lead Source',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Opportunity Sales Stage',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Nume Cont',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Denumire contact',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Numele elementului',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Item Type',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Item Category',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Item Qty',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Item List Price',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Item Sale Price',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Item Cost Price',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Item Discount Price',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Sumă de discont',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Item Total',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Total General',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Atribuit utilizatorului',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Data creării',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Day Created',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Week Created',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Month Created',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Quarter Created',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Year Created',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Error ascertaining the label for the pivot sub-area',
);
