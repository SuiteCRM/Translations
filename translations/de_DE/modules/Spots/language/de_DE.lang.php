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
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesene Benutzer-ID',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_SECURITYGROUPS' => 'Sicherheitsgruppen',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Sicherheitsgruppen',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Erstellt am',
    'LBL_DATE_MODIFIED' => 'Geändert am',
    'LBL_MODIFIED' => 'Geändert von',
    'LBL_MODIFIED_NAME' => 'Geändert von Name',
    'LBL_CREATED' => 'Erstellt von',
    'LBL_DESCRIPTION' => 'Beschreibung',
    'LBL_DELETED' => 'Gelöscht',
    'LBL_NAME' => 'Name',
    'LBL_CREATED_USER' => 'Erstellt von Benutzer',
    'LBL_MODIFIED_USER' => 'Geändert von',
    'LBL_LIST_NAME' => 'Name',
    'LBL_EDIT_BUTTON' => 'Bearbeiten',
    'LBL_REMOVE' => 'Entfernen',
    'LBL_LIST_FORM_TITLE' => 'Pivot List',
    'LBL_MODULE_NAME' => 'Pivot',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'My Pivot',
    'LNK_NEW_RECORD' => 'Create Pivot',
    'LNK_LIST' => 'View Pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Search Pivot',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie anzeigen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_NEW_FORM_TITLE' => 'New Pivot',
    'LBL_CONFIG' => 'Config',
    'LBL_TYPE' => 'Area for Analysis',
    'LNK_SPOT_LIST' => 'View Spots',
    'LNK_SPOT_CREATE' => 'Create Spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Configuration',

    'LBL_AN_UNSUPPORTED_DB' => 'Sorry, Suite Spots are currently configured for MySQL and MS SQL only',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Name',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Firmen-Typ',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Industry',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Billing Country',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Zugewiesener Benutzer',
    'LBL_AN_LEADS_STATUS' => 'Status',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Quelle des Interessenten',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Kampagnenname',
    'LBL_AN_LEADS_YEAR' => 'Jahr',
    'LBL_AN_LEADS_QUARTER' => 'Quartal',
    'LBL_AN_LEADS_MONTH' => 'Monat',
    'LBL_AN_LEADS_WEEK' => 'Woche',
    'LBL_AN_LEADS_DAY' => 'Tag',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Firmenname',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Name der Verkaufschance ',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Zugewiesener Benutzer',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'OpportunityType',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Quelle des Interessenten',
    'LBL_AN_SALES_AMOUNT' => 'Betrag',
    'LBL_AN_SALES_STAGE' => 'Verkaufsphase',
    'LBL_AN_SALES_PROBABILITY' => 'Probability',
    'LBL_AN_SALES_DATE' => 'Sales Date',
    'LBL_AN_SALES_QUARTER' => 'Sales Quarter',
    'LBL_AN_SALES_MONTH' => 'Sales Month',
    'LBL_AN_SALES_WEEK' => 'Sales Week',
    'LBL_AN_SALES_DAY' => 'Sales Day',
    'LBL_AN_SALES_YEAR' => 'Sales Year',
    'LBL_AN_SALES_CAMPAIGN' => 'Kampagne',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Firmenname',
    'LBL_AN_SERVICE_STATE' => 'Bundesland',
    'LBL_AN_SERVICE_STATUS' => 'Status',
    'LBL_AN_SERVICE_PRIORITY' => 'Priorität',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Created Day',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Created Week',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Created Month',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Created Quarter',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Created Year',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Kontaktname',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Zugewiesener Benutzer',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Typ',
    'LBL_AN_ACTIVITIES_NAME' => 'Name',
    'LBL_AN_ACTIVITIES_STATUS' => 'Status',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Zugewiesener Benutzer',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Status',
    'LBL_AN_MARKETING_TYPE' => 'Typ',
    'LBL_AN_MARKETING_BUDGET' => 'Budget',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Expected Cost',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Erwarteter Umsatz',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Name der Verkaufschance ',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Betrag der Verkaufschance',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Opportunity Sales Stage',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Verkaufschance zugew. Benutzer',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Firmenname',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Kampagnenname',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Aktivitätsdatum',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Aktivitätstyp',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Verknüpfter Typ',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Related ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Name der Verkaufschance ',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Opportunity Type',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Opportunity Lead Source',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Opportunity Sales Stage',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Firmenname',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Kontaktname',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Elementname',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Item Type',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Item Category',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Item Qty',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Item List Price',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Item Sale Price',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Item Cost Price',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Item Discount Price',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Zu verwendender Rabattbetrag',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Item Total',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Gesamtbetrag',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Zugewiesener Benutzer',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Erstellt am',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Day Created',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Week Created',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Month Created',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Quarter Created',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Year Created',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Error ascertaining the label for the pivot sub-area',
);
