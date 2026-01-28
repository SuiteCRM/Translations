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
    'LBL_MODULE_NAME' => 'Mga oportunidad',
    'LBL_MODULE_TITLE' => 'Mga Oportunidad: Balay',
    'LBL_SEARCH_FORM_TITLE' => 'Pangita og mga Oportunidad',
    'LBL_LIST_FORM_TITLE' => 'Listahan sa Oportunidad',
    'LBL_OPPORTUNITY_NAME' => 'Oportunidad nga pangalan:',
    'LBL_OPPORTUNITY' => 'Oportunidad:',
    'LBL_NAME' => 'Oportunidad nga pangalan',
    'LBL_INVITEE' => 'Kontak',
    'LBL_CURRENCIES' => 'Kwarta',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Pangalan',
    'LBL_LIST_ACCOUNT_NAME' => 'Ngalan sa Account',
    'LBL_LIST_AMOUNT' => 'Kantidad sa Oportunidad',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Kantidad',
    'LBL_LIST_DATE_CLOSED' => 'Sirado',
    'LBL_LIST_SALES_STAGE' => 'Baligya na Stage',
    'LBL_ACCOUNT_ID' => 'ID sa Account',
    'LBL_CURRENCY_NAME' => 'Pangan sa kwarta',
    'LBL_CURRENCY_SYMBOL' => 'Simbolo sa kwarta',

    'UPDATE' => 'Oportunidad: Update sa Kurensiya',
    'LBL_ACCOUNT_NAME' => 'Pangalan sa account:',
    'LBL_AMOUNT' => 'Opportonidad Pila:',
    'LBL_AMOUNT_USDOLLAR' => 'Kantidad:',
    'LBL_CURRENCY' => 'Salapi:',
    'LBL_DATE_CLOSED' => 'Gidahom nga Petsang Masirado:',
    'LBL_TYPE' => 'Matang:',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_NEXT_STEP' => 'Sunod nga lakang:',
    'LBL_LEAD_SOURCE' => 'Unang Source:',
    'LBL_SALES_STAGE' => 'Bantawan sa mga baligya:',
    'LBL_PROBABILITY' => 'Kalagmitan (%):',
    'LBL_DESCRIPTION' => 'Deskripsyon:',
    'LBL_DUPLICATE' => 'Posible nga Kopya sa Oportunidad',
    'MSG_DUPLICATE' => 'Ang rekord sa oportunidad nga imong himoun kay basin kapareho sa usa ka rekord sa oportunidad nga naa na. Ang mga rekord sa oportunidad nga adunay pareha nga mga pangan kay gilista sa ubos.<br>Pislita ang Save para magpadayon sa paghimo aning bag-ong oportunidad, o pislita ang Cancel para mabalik sa modyul nga wala ghimo ang oportunidad.',
    'LBL_NEW_FORM_TITLE' => 'Paghimo og Oportunidad',
    'LNK_NEW_OPPORTUNITY' => 'Paghimo og Oportunidad',
    'LNK_OPPORTUNITY_LIST' => 'Tan-awa ang mga Oportunidad',
    'ERR_DELETE_RECORD' => 'Kinahanglang nga i-specify ang numero sa rekord para matangtang ang oportunidad.',
    'LBL_TOP_OPPORTUNITIES' => 'Ang akong ibabaw nga abli nga mga Oportunidad',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Sigurado ka ba nga imo ning tangtangong ang oportunidad niining proyektoha?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga oportunidad',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Nag-una',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Mga dokumento',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Mga Proyekto',
    'LBL_ASSIGNED_TO_NAME' => 'Gi-assign sa:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Na assign nga manggagamit',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Ang akong siradong mga Oportunidad',
    'LBL_TOTAL_OPPORTUNITIES' => 'Kinatibuk-ang Oportunidad',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Siradong nidaog nga mga Oportunidad',
    'LBL_ASSIGNED_TO_ID' => 'Na assign nga manggagamit:',
    'LBL_MODIFIED_NAME' => 'Giusab pinaagi sa Pangan sa User',
    'LBL_CREATED_USER' => 'Nahimo nga User',
    'LBL_MODIFIED_USER' => 'Na-usab nga User',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Mangompanya',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Mga Proyekto',
    'LNK_IMPORT_OPPORTUNITIES' => 'Import og mga Oportunidad',
    'LBL_EDITLAYOUT' => 'I-edit ang Plano' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
    'LBL_AOS_QUOTES' => 'Mga Quote',
);
