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
    'LBL_ASSIGNED_TO_ID' => 'Պատասխանատու- ID',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ստեղծման ամսաթիվ',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_MODIFIED' => 'Փոփոխված է',
    'LBL_MODIFIED_NAME' => 'Փոփոխված է ըստ անվանման',
    'LBL_CREATED' => 'Ստեղծված է',
    'LBL_DESCRIPTION' => 'Նկարագրություն',
    'LBL_DELETED' => 'Ջնջված է',
    'LBL_NAME' => 'Անվանում',
    'LBL_CREATED_USER' => 'Փոփոխված է օգտագործողի կողմից ',
    'LBL_MODIFIED_USER' => 'Փոփոխված է օգտագործողի կողմից',
    'LBL_LIST_NAME' => 'Անվանում',
    'LBL_EDIT_BUTTON' => 'Խմբագրել',
    'LBL_REMOVE' => 'Հեռացնել',
    'LBL_LIST_FORM_TITLE' => 'Հաշվետվությունների ցանկ',
    'LBL_MODULE_NAME' => 'Հաշվետվություններ',
    'LBL_MODULE_TITLE' => 'Հաշվետվություններ',
    'LBL_HOMEPAGE_TITLE' => 'Իմ հաշվետվությունները',
    'LNK_NEW_RECORD' => 'Ստեղծել հաշվետվություն',
    'LNK_LIST' => 'Հաշվետվություններ',
    'LBL_SEARCH_FORM_TITLE' => 'Որոնել հաշվետվությունները',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Դիտել պատմությունը',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_NEW_FORM_TITLE' => 'Նոր հաշվետվություններ',
    'LBL_REPORT_MODULE' => 'Հաշվետվության մոդուլ',
    'LBL_GRAPHS_PER_ROW' => 'Դիագրամներ մեկ տողով',
    'LBL_FIELD_LINES' => 'Ցույց տալ դաշտերը',
    'LBL_ADD_FIELD' => 'Ավելացնել դաշտ',
    'LBL_CONDITION_LINES' => 'Պայմաններ',
    'LBL_ADD_CONDITION' => 'Ավելացնել պայման',
    'LBL_EXPORT' => 'Արտահանել',
    'LBL_DOWNLOAD_PDF' => 'Ներբեռնել PDF ֆայլ',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Ավելացնել թիրախների ցուցակին',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Մոդուլի կառուցվածքը',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Դաշտեր',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Պայմաններ',
    'LBL_TOTAL' => 'Ընդամենը',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Գրաֆիկներ',
    'LBL_ADD_CHART' => 'Ավելացնել գրաֆիկ',
    'LBL_ADD_PARENTHESIS' => 'Drop parenthesis',
    'LBL_CHART_TITLE' => 'Վերնագիր',
    'LBL_CHART_TYPE' => 'Տեսակ',
    'LBL_CHART_X_FIELD' => 'Առանցք X',
    'LBL_CHART_Y_FIELD' => 'Առանցք Y',
    'LBL_AOR_REPORTS_DASHLET' => 'Հաշվետվություններ',
    'LBL_DASHLET_TITLE' => 'Վերնագիր',
    'LBL_DASHLET_REPORT' => 'Հաշվետվություն',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Խնդրում ենք ընտրել մեկ հաշվետվություն',
    'LBL_DASHLET_SAVE' => 'Պահպանել',
    'LBL_DASHLET_CHARTS' => 'Գրաֆիկներ',
    'LBL_DASHLET_ONLY_CHARTS' => 'Ցուցադրել միայն գրաֆիկներ',
    'LBL_UPDATE_PARAMETERS' => 'Թարմացնել',
    'LBL_PARAMETERS' => 'Պարամետր',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'Քաշել և թողնել էլեմենտները դաշտում կամ պայմանի տարածքում',
    'LBL_MAIN_GROUPS' => 'Հիմնական խումբը․',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Չանվանված գծապատկեր',
    'LBL_REPORT' => 'Հաշվետվություն',
);
