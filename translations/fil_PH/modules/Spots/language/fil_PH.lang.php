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
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng Id para sa gumagamit',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_SECURITYGROUPS' => 'Grupo ng mga seguridad',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupo ng mga seguridad',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_MODIFIED' => 'Binago ni',
    'LBL_MODIFIED_NAME' => 'Ito ay ibinago sa pamamagitan ng pangalan',
    'LBL_CREATED' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_DELETED' => 'Ang pagkabura',
    'LBL_NAME' => 'Ang pangalan',
    'LBL_CREATED_USER' => 'Inilikha ng tagagamit',
    'LBL_MODIFIED_USER' => 'Binago sa pamamagitan ng tagagamit',
    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_EDIT_BUTTON' => 'I-edit',
    'LBL_REMOVE' => 'Tanggalin',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng pivot',
    'LBL_MODULE_NAME' => 'Ang pivot',
    'LBL_MODULE_TITLE' => 'Ang pivot',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking pivot',
    'LNK_NEW_RECORD' => 'Lumikha ng pivot',
    'LNK_LIST' => 'Tingnan ang pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Hanapin ang pivot',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tingnan ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_NEW_FORM_TITLE' => 'Bagong pivot',
    'LBL_CONFIG' => 'Config',
    'LBL_TYPE' => 'Mga luagar sa pagsusuri',
    'LNK_SPOT_LIST' => 'Tingnan ang mga spot',
    'LNK_SPOT_CREATE' => 'Lumikha ng spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Kumpigurasyon',

    'LBL_AN_UNSUPPORTED_DB' => 'Paumanhin, ang Suite Spot ay kasalukuyang na -configure para sa MuSQL at MS SQL lamang',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Ang pangalan',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Uri ng akwant',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Industriya',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Bansa ng pagsingil',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Itinalaga sa gumagamit',
    'LBL_AN_LEADS_STATUS' => 'Katayuan',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Pinagmulan ng lead',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Pangalan ng Kampanya',
    'LBL_AN_LEADS_YEAR' => 'Taon',
    'LBL_AN_LEADS_QUARTER' => 'Quarter',
    'LBL_AN_LEADS_MONTH' => 'Buwan',
    'LBL_AN_LEADS_WEEK' => 'Linggo',
    'LBL_AN_LEADS_DAY' => 'Araw',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Pangalan ng Akwant',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Pangalan ng Oportunidad',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Itinalaga sa gumagamit',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Uri ng oportunidad',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Pinagmulan ng lead',
    'LBL_AN_SALES_AMOUNT' => 'Ang halaga',
    'LBL_AN_SALES_STAGE' => 'Ang Yugto ng Pagbebeta',
    'LBL_AN_SALES_PROBABILITY' => 'Probabilidad',
    'LBL_AN_SALES_DATE' => 'Petsa ng pagbebenta',
    'LBL_AN_SALES_QUARTER' => 'Quarter ng pagbebenta',
    'LBL_AN_SALES_MONTH' => 'Buwan ng pagbebenta',
    'LBL_AN_SALES_WEEK' => 'Linggong pagbebenta',
    'LBL_AN_SALES_DAY' => 'Araw ng pagbebenta',
    'LBL_AN_SALES_YEAR' => 'Taon ng pagbebenta',
    'LBL_AN_SALES_CAMPAIGN' => 'Ang kampanya',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Pangalan ng Akwant',
    'LBL_AN_SERVICE_STATE' => 'Estado',
    'LBL_AN_SERVICE_STATUS' => 'Katayuan',
    'LBL_AN_SERVICE_PRIORITY' => 'Prayoridad',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Araw na nilikha',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Linggong pagkalikha',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Buwan ng pagkalikha',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Quarter ng pagkalikha',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Taon ng pagkalikha',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Ang kontak na pangalan',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Itinalaga sa gumagamit',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Uri',
    'LBL_AN_ACTIVITIES_NAME' => 'Ang pangalan',
    'LBL_AN_ACTIVITIES_STATUS' => 'Katayuan',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Itinalaga sa gumagamit',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Katayuan',
    'LBL_AN_MARKETING_TYPE' => 'Uri',
    'LBL_AN_MARKETING_BUDGET' => 'Badyet',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Inaasahang gastos',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Ang kita na inaasahan',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Pangalan ng Oportunidad',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Halaga ng oportunidad',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Yugtong oportunidad ng pagbebenta',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Nakatalagang oportunidad sa',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Pangalan ng Akwant',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Pangalan ng Kampanya',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Ppetsa ng aktibidad',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Uri ng aktibidad',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Uri ng nauugnay',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Naguugnay na ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Pangalan ng Oportunidad',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Uri ng oportunidad',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Pinagmulan ng oportunidad lead',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Yugtong oportunidad ng pagbebenta',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Pangalan ng Akwant',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Ang kontak na pangalan',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Pangalan ng aytem',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Uri ng aytem',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Kategoryang aytem',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Qty aytem',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Presyo ng listahan na aytem',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Presyong pagbebenta ng aytem',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Presyo ng aytem na gastusin',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Presyo ng diskwentong aytem',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Halaga ng diskwento',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Kabuuang aytem',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Kabuuang total',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Itinalaga sa gumagamit',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Ang petsa ng pagkakalikha',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Araw ng pagkalikha',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Linggong pagka likha',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Buwan ng pagka likha',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Nilikhang quarter',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Taon nsmg pagka likha',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'My mali haban pataas sng label pra sa pivot ng sub-area',
);
