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
    'LBL_LIST_FORM_TITLE' => 'Listahan ng mga report',
    'LBL_MODULE_NAME' => 'Ang mga ulat',
    'LBL_MODULE_TITLE' => 'Ang mga ulat',
    'LBL_HOMEPAGE_TITLE' => 'Aking mga Report',
    'LNK_NEW_RECORD' => 'Lumikha ng Report',
    'LNK_LIST' => 'Tingnan ang mga Report',
    'LBL_SEARCH_FORM_TITLE' => 'Maghanap ng mga Report',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tanawin ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_NEW_FORM_TITLE' => 'Mga bagong Report',
    'LBL_REPORT_MODULE' => 'Modyul ng Report',
    'LBL_GRAPHS_PER_ROW' => 'Mga Chart kada row',
    'LBL_FIELD_LINES' => 'Ipakita ang mga Field',
    'LBL_ADD_FIELD' => 'Magdagdag ng patlang',
    'LBL_CONDITION_LINES' => 'Mga Kundisyon',
    'LBL_ADD_CONDITION' => 'Magdagdag ng Kundisyon',
    'LBL_EXPORT' => 'I-export',
    'LBL_DOWNLOAD_PDF' => 'I-download ang PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Isama sa target na listahan',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Puno ng modyul',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Mga Field',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Mga Kundisyon',
    'LBL_TOTAL' => 'Kabuuan',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Mga tsart',
    'LBL_ADD_CHART' => 'Magdagdag ng chart',
    'LBL_ADD_PARENTHESIS' => 'Tanggalin ang panaklong',
    'LBL_CHART_TITLE' => 'Ang Pamagat',
    'LBL_CHART_TYPE' => 'Klase',
    'LBL_CHART_X_FIELD' => 'X Aksis',
    'LBL_CHART_Y_FIELD' => 'Y Aksis',
    'LBL_AOR_REPORTS_DASHLET' => 'Ang mga ulat',
    'LBL_DASHLET_TITLE' => 'Ang Pamagat',
    'LBL_DASHLET_REPORT' => 'Report',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Pakiusap pumili ng report',
    'LBL_DASHLET_SAVE' => 'I-seyb',
    'LBL_DASHLET_CHARTS' => 'Mga tsart',
    'LBL_DASHLET_ONLY_CHARTS' => 'Ipakita lamang ang mga chart',
    'LBL_UPDATE_PARAMETERS' => 'I-upadate',
    'LBL_PARAMETERS' => 'Mga Parametro',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'I-drag at ihulog ang mga elemento sa field o di kaya sa lugar ng kondisyon',
    'LBL_MAIN_GROUPS' => 'Pangunahing Grupo:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Walang pangalan na Chart',
    'LBL_REPORT' => 'Report',
);
