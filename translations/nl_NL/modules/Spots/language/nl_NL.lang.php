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
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker-Id',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_SECURITYGROUPS' => 'Security Groepen',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groepen',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Aangemaakt op',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_MODIFIED' => 'Gewijzigd door',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door naam',
    'LBL_CREATED' => 'Aangemaakt door',
    'LBL_DESCRIPTION' => 'Omschrijving',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_NAME' => 'Naam',
    'LBL_CREATED_USER' => 'Aangemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_EDIT_BUTTON' => 'Bewerk',
    'LBL_REMOVE' => 'Verwijder',
    'LBL_LIST_FORM_TITLE' => 'Draaitabel',
    'LBL_MODULE_NAME' => 'Draaitabel',
    'LBL_MODULE_TITLE' => 'Draaitabel',
    'LBL_HOMEPAGE_TITLE' => 'Mijn draaitabel',
    'LNK_NEW_RECORD' => 'Nieuwe draaitabel',
    'LNK_LIST' => 'Bekijk draaitabel',
    'LBL_SEARCH_FORM_TITLE' => 'Zoek draaitabel',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Bekijk geschiedenis',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe draaitabel',
    'LBL_CONFIG' => 'Configureer',
    'LBL_TYPE' => 'Gebied voor analyse',
    'LNK_SPOT_LIST' => 'Bekijk Spots',
    'LNK_SPOT_CREATE' => 'Nieuwe spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Configuratie',

    'LBL_AN_UNSUPPORTED_DB' => 'Sorry, Suite Spots zijn momenteel alleen geconfigureerd voor MySQL en MS SQL',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Naam',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Organisatietype',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Branche',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Factuuradres land',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Toegewezen gebruiker',
    'LBL_AN_LEADS_STATUS' => 'Status',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Lead bron',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Campagnenaam',
    'LBL_AN_LEADS_YEAR' => 'Jaar',
    'LBL_AN_LEADS_QUARTER' => 'Kwartaal',
    'LBL_AN_LEADS_MONTH' => 'Maand',
    'LBL_AN_LEADS_WEEK' => 'Week',
    'LBL_AN_LEADS_DAY' => 'Dag',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Organisatienaam',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Naam kans',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Toegewezen gebruiker',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Kanstype',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Lead bron',
    'LBL_AN_SALES_AMOUNT' => 'Bedrag',
    'LBL_AN_SALES_STAGE' => 'Verkoopstadium',
    'LBL_AN_SALES_PROBABILITY' => 'Waarschijnlijkheid',
    'LBL_AN_SALES_DATE' => 'Verkoopdatum',
    'LBL_AN_SALES_QUARTER' => 'Verkoopkwartaal',
    'LBL_AN_SALES_MONTH' => 'Verkoopmaand',
    'LBL_AN_SALES_WEEK' => 'Verkoopweek',
    'LBL_AN_SALES_DAY' => 'Verkoopdag',
    'LBL_AN_SALES_YEAR' => 'Verkoopjaar',
    'LBL_AN_SALES_CAMPAIGN' => 'Campagne',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Organisatienaam',
    'LBL_AN_SERVICE_STATE' => 'Status',
    'LBL_AN_SERVICE_STATUS' => 'Status',
    'LBL_AN_SERVICE_PRIORITY' => 'Prioriteit',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Dag aangemaakt',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Week aangemaakt',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Maand aangemaakt',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Kwartaal aangemaakt',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Jaar aangemaakt',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Naam contactpersoon',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Toegewezen gebruiker',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Type',
    'LBL_AN_ACTIVITIES_NAME' => 'Naam',
    'LBL_AN_ACTIVITIES_STATUS' => 'Status',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Toegewezen gebruiker',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Status',
    'LBL_AN_MARKETING_TYPE' => 'Type',
    'LBL_AN_MARKETING_BUDGET' => 'Budget',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Verwachte kosten',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Verwachte omzet',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Naam kans',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Bedrag kans',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Verkoopfase kans',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Kans toegewezen gebruiker',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Organisatienaam',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Campagnenaam',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Activiteitdatum',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Activiteitstype',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Gerelateerd type',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Gerelateerd ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Naam kans',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Type kans',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Kans lead bron',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Verkoopfase kans',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Organisatienaam',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Naam contactpersoon',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Naam artikel',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Artikeltype',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Artikelcategorie',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Artikel aantal',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Artikel lijstprijs',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Artikel verkoopprijs',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Artikel kostprijs',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Artikel kortingsprijs',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Korting hoeveelheid',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Artikel totaal',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Eindtotaal',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Toegewezen gebruiker',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Datum aangemaakt',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Dag Aangemaakt',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Week aangemaakt',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Maand aangemaakt',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Kwartaal aangemaakt',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Jaar aangemaakt',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Fout bij het vaststellen van het label voor het draaitabel subgebied',
);
