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
    'LBL_ASSIGNED_TO_ID' => 'Ang nagagamit sa Id ay nagtalaga',
    'LBL_ASSIGNED_TO_NAME' => 'Magtalaga sa',
    'LBL_SECURITYGROUPS' => 'Mga grupong seguridad',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Mga grupong seguridad',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ay lumikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ay binago',
    'LBL_MODIFIED' => 'Binago sa pamamagitan ng',
    'LBL_MODIFIED_NAME' => 'Sa pamamagitan ng pangalan ay binago',
    'LBL_CREATED' => 'Nilikha ni',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_DELETED' => 'Ang Nabura',
    'LBL_NAME' => 'Ang Pangalan',
    'LBL_CREATED_USER' => 'Nililikha sa pamamagitan ng Gumagamit',
    'LBL_MODIFIED_USER' => 'Ang Binago sa pamamagitan ng gumagamit',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_EDIT_BUTTON' => 'I-edit',
    'LBL_REMOVE' => 'Alisin',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng Pivot',
    'LBL_MODULE_NAME' => 'Ang pivot',
    'LBL_MODULE_TITLE' => 'Ang pivot',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking pivot',
    'LNK_NEW_RECORD' => 'Lumikha ng Pivot',
    'LNK_LIST' => 'Tingnan ang pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Maghanap ng pivot',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tanawin ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_NEW_FORM_TITLE' => 'Bagong pivot',
    'LBL_CONFIG' => 'Isaayos',
    'LBL_TYPE' => 'Lugar para sa pagsusuri',
    'LNK_SPOT_LIST' => 'Tingnan ang mga lugar',
    'LNK_SPOT_CREATE' => 'Lumikha ng lugar',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Pagsasaayos',

    'LBL_AN_UNSUPPORTED_DB' => 'Paumanhin, Ang mga lugar ng suite ay kasalukuyang sinaayos para sa MySQL at MS SQL lamang',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Ang Pangalan',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Uri ng account',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Ang industriya',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Pagsingil sa Bansa',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Magtalaga ng gumagamit',
    'LBL_AN_LEADS_STATUS' => 'Kalagayan',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Pinagmulan ng lead',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Pangalan ng kampanya',
    'LBL_AN_LEADS_YEAR' => 'Taon',
    'LBL_AN_LEADS_QUARTER' => 'Quarter',
    'LBL_AN_LEADS_MONTH' => 'Buwan',
    'LBL_AN_LEADS_WEEK' => 'Linggo',
    'LBL_AN_LEADS_DAY' => 'Ang araw',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Ang Pangalan ng akawnt',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Pangalan ng Pagkakataon',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Magtalaga ng gumagamit',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Uri ng oportunidad',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Pinagmulan ng lead',
    'LBL_AN_SALES_AMOUNT' => 'Halaga',
    'LBL_AN_SALES_STAGE' => 'Imbakan ng Sale',
    'LBL_AN_SALES_PROBABILITY' => 'Posibilidad',
    'LBL_AN_SALES_DATE' => 'Petsa ng benta',
    'LBL_AN_SALES_QUARTER' => 'Sangkapat ng benta',
    'LBL_AN_SALES_MONTH' => 'Buwan ng benta',
    'LBL_AN_SALES_WEEK' => 'Linggo ng benta',
    'LBL_AN_SALES_DAY' => 'Araw ng benta',
    'LBL_AN_SALES_YEAR' => 'Taon ng benta',
    'LBL_AN_SALES_CAMPAIGN' => 'Kampanya',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Ang Pangalan ng akawnt',
    'LBL_AN_SERVICE_STATE' => 'Ang Estado',
    'LBL_AN_SERVICE_STATUS' => 'Kalagayan',
    'LBL_AN_SERVICE_PRIORITY' => 'Prayoridad',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Nalikhang araw',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Nalikhang linggo',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Nalikhang buwan',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Linikhang sangkapat',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Nalikhang taon',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Kontak na Pangalan',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Magtalaga ng gumagamit',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Klase',
    'LBL_AN_ACTIVITIES_NAME' => 'Ang Pangalan',
    'LBL_AN_ACTIVITIES_STATUS' => 'Kalagayan',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Magtalaga ng gumagamit',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Kalagayan',
    'LBL_AN_MARKETING_TYPE' => 'Klase',
    'LBL_AN_MARKETING_BUDGET' => 'Badyet',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Inaasahang gastos',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Inaasahang Kita',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Pangalan ng Pagkakataon',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Ang dami ng oportunidad',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Yugto ng oportunidad ng benta',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Ang oportunidad ay itinalaga sa',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Ang Pangalan ng akawnt',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Pangalan ng kampanya',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Petsa ng Gawain',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Uri ng mga Gawain',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Uri ng mga may Kaugnayan',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Nakaugnay na ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Pangalan ng Pagkakataon',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Uri ng oportunidad',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Oportunidad ng pangunahing pinagmulan',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Yugto ng oportunidad ng benta',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Ang Pangalan ng akawnt',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Kontak na Pangalan',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Pangalan ng Aytem',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Uri ng aytem',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Kategorya ng aytem',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Qty ng aytem',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Listahan ng presyo ng aytem',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Presyo ng benta ng aytem',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Presyo ng gastos ng aytem',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Diskwentong presyo ng aytem',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Halaga ng diskwento',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Kabuuang aytem',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Kabuuang Total',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Magtalaga ng gumagamit',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Ang petsa ay lumikha',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Nalikhang araw',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Nalikhang linggo',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Nalikhang buwan',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Nalikhang sangkapat',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Nalikhang taon',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Maling paglinaw ng label para sa ikutan ng pangalawang lugar',
);
