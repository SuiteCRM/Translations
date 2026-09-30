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
    'LBL_ASSIGNED_TO_ID' => 'Tilldelat användar-id',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum Skapad',
    'LBL_DATE_MODIFIED' => 'Ändringsdatum',
    'LBL_MODIFIED' => 'Ändrad av',
    'LBL_MODIFIED_NAME' => 'Ändrad av namn',
    'LBL_CREATED' => 'Skapad av',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_DELETED' => 'Borttagen',
    'LBL_NAME' => 'Namn',
    'LBL_CREATED_USER' => 'Skapad av användare',
    'LBL_MODIFIED_USER' => 'Ändrad av användare',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_EDIT_BUTTON' => 'Redigera',
    'LBL_REMOVE' => 'Ta bort',
    'LBL_LIST_FORM_TITLE' => 'Pivot List',
    'LBL_MODULE_NAME' => 'Pivot',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'My Pivot',
    'LNK_NEW_RECORD' => 'Skapa Pivot',
    'LNK_LIST' => 'View Pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Sök Pivot',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visa historik',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'New Pivot',
    'LBL_CONFIG' => 'Config',
    'LBL_TYPE' => 'Area for Analysis',
    'LNK_SPOT_LIST' => 'Visa Spots',
    'LNK_SPOT_CREATE' => 'Skapa Spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Konfiguration',

    'LBL_AN_UNSUPPORTED_DB' => 'Tyvärr, Suite Spots är för närvarande endast konfigurerade för MySQL och MS SQL',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Namn',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Account Type',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Industry',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Billing Country',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Assigned User',
    'LBL_AN_LEADS_STATUS' => 'Status',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Kundämne källa',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Campaign Name',
    'LBL_AN_LEADS_YEAR' => 'Year',
    'LBL_AN_LEADS_QUARTER' => 'Kvartal',
    'LBL_AN_LEADS_MONTH' => 'Month',
    'LBL_AN_LEADS_WEEK' => 'Week',
    'LBL_AN_LEADS_DAY' => 'Day',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Kontonamn',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Affärsmöjlighetens namn',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Tilldelad användare',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'OpportunityType',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Kundämne källa',
    'LBL_AN_SALES_AMOUNT' => 'Belopp',
    'LBL_AN_SALES_STAGE' => 'Försäljningssteg',
    'LBL_AN_SALES_PROBABILITY' => 'Sannolikhet',
    'LBL_AN_SALES_DATE' => 'Försäljningsdatum',
    'LBL_AN_SALES_QUARTER' => 'Försäljningskvartal',
    'LBL_AN_SALES_MONTH' => 'Försäljningsmånad',
    'LBL_AN_SALES_WEEK' => 'Försäljningsvecka',
    'LBL_AN_SALES_DAY' => 'Försäljningsdag',
    'LBL_AN_SALES_YEAR' => 'Försäljningsår',
    'LBL_AN_SALES_CAMPAIGN' => 'Kampanj',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Kontonamn',
    'LBL_AN_SERVICE_STATE' => 'Landskap',
    'LBL_AN_SERVICE_STATUS' => 'Status',
    'LBL_AN_SERVICE_PRIORITY' => 'Priority',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Skapad dag',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Skapad vecka',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Skapad månad',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Skapad kvartal',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Skapad år',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Contact Name',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Tilldelad användare',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Type',
    'LBL_AN_ACTIVITIES_NAME' => 'Namn',
    'LBL_AN_ACTIVITIES_STATUS' => 'Status',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Tilldelad användare',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Status',
    'LBL_AN_MARKETING_TYPE' => 'Type',
    'LBL_AN_MARKETING_BUDGET' => 'Budget',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Förväntad kostnad',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Expected Revenue',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Opportunity Name',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Opportunity Amount',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Försäljningsfas för möjligheten',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Möjlighet tilldelad till',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Kontonamn',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Campaign Name',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Activity Date',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Activity Type',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Related Type',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Related ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Opportunity Name',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Möjlighetstyp',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Opportunity Lead Source',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Försäljningsfas för möjligheten',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Kontonamn',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Contact Name',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Artikelnamn',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Artikeltyp',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Artikelkategori',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Item Qty',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Item List Price',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Item Sale Price',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Item Cost Price',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Item Discount Price',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Rabattbelopp',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Item Total',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Totalsumma',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Tilldelad användare',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Datum Skapat',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Dag skapad',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Vecka skapad',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Månad skapad',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Kvartal skapat',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'År skapad',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Error ascertaining the label for the pivot sub-area',
);
