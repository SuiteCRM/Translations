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
    'LBL_LIST_FORM_TITLE' => 'Listahan ng mga ulat',
    'LBL_MODULE_NAME' => 'Mga ulat',
    'LBL_MODULE_TITLE' => 'Mga ulat',
    'LBL_HOMEPAGE_TITLE' => 'Aking mga ulat',
    'LNK_NEW_RECORD' => 'Lumikha ng ulat',
    'LNK_LIST' => 'Tingnan ang mga report',
    'LBL_SEARCH_FORM_TITLE' => 'Maghanap ng mga ulat',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tingnan ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_NEW_FORM_TITLE' => 'Bagong mga ulat',
    'LBL_REPORT_MODULE' => 'Ulat ng mudyol',
    'LBL_GRAPHS_PER_ROW' => 'Mga tsart kada row',
    'LBL_FIELD_LINES' => 'Mga displey field',
    'LBL_ADD_FIELD' => 'Magdagdag ng patlang',
    'LBL_CONDITION_LINES' => 'Mga kondisyon',
    'LBL_ADD_CONDITION' => 'Magdagdag ng kondisyon',
    'LBL_EXPORT' => 'I-eksport',
    'LBL_DOWNLOAD_PDF' => 'Mag-download ng PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Ang listahan ng mga target ay nagdagdag',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Puno ng modyul',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Mga patlang',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Mga kondisyon',
    'LBL_TOTAL' => 'Kabuuan',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Tsart',
    'LBL_ADD_CHART' => 'Magdagdag ng tsart',
    'LBL_ADD_PARENTHESIS' => 'Mag-drop ng parenthesis',
    'LBL_CHART_TITLE' => 'Paksa',
    'LBL_CHART_TYPE' => 'Uri',
    'LBL_CHART_X_FIELD' => 'X aksis',
    'LBL_CHART_Y_FIELD' => 'X aksis',
    'LBL_AOR_REPORTS_DASHLET' => 'Mga ulat',
    'LBL_DASHLET_TITLE' => 'Paksa',
    'LBL_DASHLET_REPORT' => 'Y aksis',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Paki-pili ng isang report',
    'LBL_DASHLET_SAVE' => 'I-seyb',
    'LBL_DASHLET_CHARTS' => 'Tsart',
    'LBL_DASHLET_ONLY_CHARTS' => 'Magpakita lamang ng mga tsart',
    'LBL_UPDATE_PARAMETERS' => 'I-update',
    'LBL_PARAMETERS' => 'Mga parameter',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'Mag-drag at mag-drop ng mga elemento sa field o lugar ng kondisyon',
    'LBL_MAIN_GROUPS' => 'Pangunahing grupo:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Hindi pinangalanan na tsart',
    'LBL_REPORT' => 'Y aksis',
);
