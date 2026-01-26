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
    'LBL_ASSIGNED_TO_ID' => 'Atsakingo Vartotojo Id',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_ID' => 'Id',
    'LBL_DATE_ENTERED' => 'Sukurta',
    'LBL_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_MODIFIED' => 'Redagavo',
    'LBL_MODIFIED_NAME' => 'Redaguotojo vardas',
    'LBL_CREATED' => 'Sukūrė',
    'LBL_DESCRIPTION' => 'Aprašymas',
    'LBL_DELETED' => 'Ištrintas',
    'LBL_NAME' => 'Vardas',
    'LBL_CREATED_USER' => 'Sukūrė vartotojas',
    'LBL_MODIFIED_USER' => 'Redagavo vartotojas',
    'LBL_LIST_NAME' => 'Vardas',
    'LBL_EDIT_BUTTON' => 'Redaguoti',
    'LBL_REMOVE' => 'Išmesti',
    'LBL_LIST_FORM_TITLE' => 'Ataskaitų Sąrašas',
    'LBL_MODULE_NAME' => 'Ataskaitos',
    'LBL_MODULE_TITLE' => 'Ataskaitos',
    'LBL_HOMEPAGE_TITLE' => 'Mano Ataskaitos',
    'LNK_NEW_RECORD' => 'Sukurti Ataskaitą',
    'LNK_LIST' => 'Peržiūrėti Ataskaitas',
    'LBL_SEARCH_FORM_TITLE' => 'Ataskaitų Paieška',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Peržiūros istorija',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_NEW_FORM_TITLE' => 'Naujos Ataskaitos',
    'LBL_REPORT_MODULE' => 'Ataskaitų Modulis',
    'LBL_GRAPHS_PER_ROW' => 'Charts per row',
    'LBL_FIELD_LINES' => 'Rodyti Laukus',
    'LBL_ADD_FIELD' => 'Pridėti lauką',
    'LBL_CONDITION_LINES' => 'Sąlygos',
    'LBL_ADD_CONDITION' => 'Įtraukti Sąlygą',
    'LBL_EXPORT' => 'Eksportas',
    'LBL_DOWNLOAD_PDF' => 'Parsisiųsti PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Įtraukti į adresatų sąrašą',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Module tree',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Laukai',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Sąlygos',
    'LBL_TOTAL' => 'Iš viso',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Diagramos',
    'LBL_ADD_CHART' => 'Pridėti Diagramą',
    'LBL_ADD_PARENTHESIS' => 'Drop parenthesis',
    'LBL_CHART_TITLE' => 'Pareigybės',
    'LBL_CHART_TYPE' => 'Tipas:',
    'LBL_CHART_X_FIELD' => 'X ašis',
    'LBL_CHART_Y_FIELD' => 'Y ašis',
    'LBL_AOR_REPORTS_DASHLET' => 'Ataskaitos',
    'LBL_DASHLET_TITLE' => 'Pareigybės',
    'LBL_DASHLET_REPORT' => 'Ataskaita',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Pasirinkite ataskaitą',
    'LBL_DASHLET_SAVE' => 'Saugoti',
    'LBL_DASHLET_CHARTS' => 'Diagramos',
    'LBL_DASHLET_ONLY_CHARTS' => 'Rodyti tik grafikus',
    'LBL_UPDATE_PARAMETERS' => 'Atnaujinti',
    'LBL_PARAMETERS' => 'Parametrai',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'Drag and drop elements into field or condition area',
    'LBL_MAIN_GROUPS' => 'Pagrindinė grupė:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Unnamed Chart',
    'LBL_REPORT' => 'Ataskaita',
);
