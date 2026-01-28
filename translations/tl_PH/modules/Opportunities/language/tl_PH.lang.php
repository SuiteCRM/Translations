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
    'LBL_MODULE_NAME' => 'Ang mga pagkakataon',
    'LBL_MODULE_TITLE' => 'Ang mga oportunidad: Tirahan',
    'LBL_SEARCH_FORM_TITLE' => 'Ang Paghahanap ng oportunidad',
    'LBL_LIST_FORM_TITLE' => 'Ang listahan ng oportunidad',
    'LBL_OPPORTUNITY_NAME' => 'Pangalan ng oportunidad:',
    'LBL_OPPORTUNITY' => 'Ang oportunidad:',
    'LBL_NAME' => 'Pangalan ng Pagkakataon',
    'LBL_INVITEE' => 'Ang mga koneksyon',
    'LBL_CURRENCIES' => 'Ang mga halaga',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Ang Pangalan',
    'LBL_LIST_ACCOUNT_NAME' => 'Ang Pangalan ng akawnt',
    'LBL_LIST_AMOUNT' => 'Ang dami ng oportunidad',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Halaga',
    'LBL_LIST_DATE_CLOSED' => 'Sarado',
    'LBL_LIST_SALES_STAGE' => 'Imbakan ng Sale',
    'LBL_ACCOUNT_ID' => 'Ang ID ng account',
    'LBL_CURRENCY_NAME' => 'Pangalan ng pera',
    'LBL_CURRENCY_SYMBOL' => 'Simbolo ng pera',

    'UPDATE' => 'Ang oportunidad - I-update ang Pera',
    'LBL_ACCOUNT_NAME' => 'Ang pangalan ng account:',
    'LBL_AMOUNT' => 'Halaga ng oportunidad:',
    'LBL_AMOUNT_USDOLLAR' => 'Halaga:',
    'LBL_CURRENCY' => 'Ang Halaga:',
    'LBL_DATE_CLOSED' => 'Ang inaasahan na sarado na petsa:',
    'LBL_TYPE' => 'Uri:',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_NEXT_STEP' => 'Susunod na Hakabng:',
    'LBL_LEAD_SOURCE' => 'Pinagmulan ng Lead:',
    'LBL_SALES_STAGE' => 'Mga Antas ng Sale:',
    'LBL_PROBABILITY' => 'Probabilidad (%):',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan:',
    'LBL_DUPLICATE' => 'Posibleng kopyahin ang oportunidad',
    'MSG_DUPLICATE' => 'Ang rekord ng oportunidad na iyong lilikhain ay maaaring kapareho sa rekord ng oportunidad na umiiral. Ang mga rekord ng oportunidad na naglalaman ng kaparehong pangalan ay nakalista sa ibaba.<br>I-click ang Save para magapatuloy na gumawa ng bagong oportunidad, o i-click ang Cancel para makabalik sa module na hindi gumagawa ng oportunidad.',
    'LBL_NEW_FORM_TITLE' => ' Oportunidad ang lumikha',
    'LNK_NEW_OPPORTUNITY' => ' Oportunidad ang lumikha',
    'LNK_OPPORTUNITY_LIST' => 'Tingnan ang mga oportunidad',
    'ERR_DELETE_RECORD' => 'Ang talaan ng numero ay kailangang tiyakin para burahin ang oportunidad.',
    'LBL_TOP_OPPORTUNITIES' => 'Ang taas ng aking bukas na oportunidad',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Sigurado ka ba na gusto mo alisin itong oportunidad mula sa proyekto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang mga pagkakataon',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Pamunuan',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ang mga koneksyon',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Ang mga dokumento',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Ang mga proyekto',
    'LBL_ASSIGNED_TO_NAME' => 'Ang Itinalaga kay:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Magtalaga ng gumagamit',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Ang aking oportunidad ay sarado',
    'LBL_TOTAL_OPPORTUNITIES' => 'Ang mga kabuuang oportunidad',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Sarado ang Pagkuha ng Mga oportunidad',
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng gagamit:',
    'LBL_MODIFIED_NAME' => 'Binagi sa pamamagitan ng Gumagamit ng Pangalan',
    'LBL_CREATED_USER' => 'Nilikhang gumagamit',
    'LBL_MODIFIED_USER' => 'Binsgo ng gumagamit',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Ang mga kampanya',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Ang mga proyekto',
    'LNK_IMPORT_OPPORTUNITIES' => 'I-import ang mga oportunidad',
    'LBL_EDITLAYOUT' => 'I-edit ang layout' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
    'LBL_AOS_QUOTES' => 'Mga panipi',
);
