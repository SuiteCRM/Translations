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
    'LBL_MODULE_NAME' => 'Mundësite',
    'LBL_MODULE_TITLE' => 'Mundësite: Ballina',
    'LBL_SEARCH_FORM_TITLE' => 'Kerkim te Mundësive',
    'LBL_LIST_FORM_TITLE' => 'Lista e mundësive',
    'LBL_OPPORTUNITY_NAME' => 'Emri i mundësisë',
    'LBL_OPPORTUNITY' => 'Mundësi:',
    'LBL_NAME' => 'Emri i mundësisë',
    'LBL_INVITEE' => 'Kontaktet',
    'LBL_CURRENCIES' => 'Monedhat',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Emri',
    'LBL_LIST_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_LIST_AMOUNT' => 'Vlera e Mundësisë',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Vlerë',
    'LBL_LIST_DATE_CLOSED' => 'Mbyll:',
    'LBL_LIST_SALES_STAGE' => 'Faza e shitjes',
    'LBL_ACCOUNT_ID' => 'ID e Llogarisë',
    'LBL_CURRENCY_NAME' => 'Emri i Monedhës',
    'LBL_CURRENCY_SYMBOL' => 'Simboli i monedhës',
    'LBL_DAYS_OPEN_FOR' => 'This Opportunity Was Open For',

    'UPDATE' => 'Shtijet- rinovim i monedhës',
    'LBL_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_AMOUNT' => 'Sasia e mundësisë',
    'LBL_AMOUNT_USDOLLAR' => 'Sasia:',
    'LBL_CURRENCY' => 'monedha:',
    'LBL_DATE_CLOSED' => 'Data e përfundimit e pritur',
    'LBL_TYPE' => 'Lloji',
    'LBL_CAMPAIGN' => 'Fushata',
    'LBL_NEXT_STEP' => 'Hapi vijues',
    'LBL_LEAD_SOURCE' => 'Burimi i udhëheqjes',
    'LBL_SALES_STAGE' => 'Faza e shitjes',
    'LBL_PROBABILITY' => 'Probabiliteti (%)',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_DUPLICATE' => 'Mundësi të mundshme të dubluara',
    'MSG_DUPLICATE' => 'Regjistrimi i mundësive që kryeni mund të jetë dublim i mundësive të regjistruar që tashmë ekziston. Mundësitë e regjistruara që përmbajnë emra të ngjashëm janë të rënditura posht. Shtyp Ruaj për të vazhduar me krijimin e mundësisë së re, ose shtyp Anulim pr tu kthyer në modulë duke mos krijuar mundësi.',
    'LBL_NEW_FORM_TITLE' => 'Krijo mundësi',
    'LNK_NEW_OPPORTUNITY' => 'Krijo mundësi',
    'LNK_OPPORTUNITY_LIST' => 'Shih mundësitë',
    'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë mundësinë',
    'LBL_TOP_OPPORTUNITIES' => 'Mundësitë e mia top të hapura',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'A jeni të sigurt që dëshironi të largoni këtë mundësi nga projekti?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mundësite',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitetet',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',

    'LBL_LEADS_SUBPANEL_TITLE' => 'udhëheqjet',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktet',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentacionet',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektet',
    'LBL_ASSIGNED_TO_NAME' => 'drejtuar',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Përdorues i caktuar',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mundësitë e mia të mbyllura',
    'LBL_TOTAL_OPPORTUNITIES' => 'Mundësitë totale',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Mundësitë e fituara të mbyllura',
    'LBL_ASSIGNED_TO_ID' => 'drejtuar:',
    'LBL_MODIFIED_NAME' => 'Modifikuar nga emri',
    'LBL_CREATED_USER' => 'Përdorues i krijuar',
    'LBL_MODIFIED_USER' => 'përdorues i modifikuar',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'fushatat',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektet',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importo mundësitë',
    'LBL_EDITLAYOUT' => 'Ndrysho formatin'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Kontratat',
    'LBL_AOS_QUOTES' => 'Kuotat',

    'LBL_SIZE_ANALYSIS' => 'Size Analysis',
    'LBL_POSITION' => 'Position',
    'LBL_OUT_OF' => 'Out of',
);
