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
    'LBL_ASSIGNED_TO_ID' => 'مقرر کردہ صارف کی شناخت',
    'LBL_ASSIGNED_TO_NAME' => 'کے لئے تفویض',
    'LBL_ID' => 'شناخت',
    'LBL_DATE_ENTERED' => 'تاریخ بنائی گئی ہے',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_MODIFIED' => 'کی طرف سے ترمیم',
    'LBL_MODIFIED_NAME' => 'نام کی طرف سے ترمیم',
    'LBL_CREATED' => 'کی طرف سے بنایا گیا',
    'LBL_DESCRIPTION' => 'تفصیل',
    'LBL_DELETED' => 'ختم کر دیا گیا',
    'LBL_NAME' => 'نام',
    'LBL_CREATED_USER' => 'صارف کی طرف سے پیدا شدہ',
    'LBL_MODIFIED_USER' => 'صارف کی طرف سے ترمیم',
    'LBL_LIST_NAME' => 'نام',
    'LBL_EDIT_BUTTON' => 'ردوبدل',
    'LBL_REMOVE' => 'ہٹا دیں',
    'LBL_LIST_FORM_TITLE' => 'رپورٹ کی فہرست',
    'LBL_MODULE_NAME' => 'شکایت کرنا',
    'LBL_MODULE_TITLE' => 'شکایت کرنا',
    'LBL_HOMEPAGE_TITLE' => 'میری رپورٹیں',
    'LNK_NEW_RECORD' => 'رپورٹ بنائیں',
    'LNK_LIST' => 'رپورٹس دیکھیں',
    'LBL_SEARCH_FORM_TITLE' => 'رپورٹوں کی تلاش',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ دیکھیں',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_NEW_FORM_TITLE' => 'نئی رپورٹ',
    'LBL_REPORT_MODULE' => 'رپورٹ ماڈیول',
    'LBL_GRAPHS_PER_ROW' => 'قطار فی چارٹس',
    'LBL_FIELD_LINES' => 'ڈسپلے فیلڈ',
    'LBL_ADD_FIELD' => 'فیلڈ شامل کریں',
    'LBL_CONDITION_LINES' => 'شرائط',
    'LBL_ADD_CONDITION' => 'شرط شامل کریں',
    'LBL_EXPORT' => 'برآمد کریں',
    'LBL_DOWNLOAD_PDF' => 'پی ڈی ایف ڈاؤن لوڈ کریں',
    'LBL_ADD_TO_PROSPECT_LIST' => 'نشانہ لسٹ کو جمع کرنا',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'ماڈیول درخت',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'فیلڈز',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'شرائط',
    'LBL_TOTAL' => 'حاصل جمع',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'چارٹس',
    'LBL_ADD_CHART' => 'چارٹ شامل کریں',
    'LBL_ADD_PARENTHESIS' => 'Drop parenthesis',
    'LBL_CHART_TITLE' => 'عنوان',
    'LBL_CHART_TYPE' => 'قسم',
    'LBL_CHART_X_FIELD' => 'ایکس ایکسس',
    'LBL_CHART_Y_FIELD' => 'ی ایکسس',
    'LBL_AOR_REPORTS_DASHLET' => 'شکایت کرنا',
    'LBL_DASHLET_TITLE' => 'عنوان',
    'LBL_DASHLET_REPORT' => 'حالت بتانا',
    'LBL_DASHLET_CHOOSE_REPORT' => 'براہ کرم ایک رپورٹ منتخب کریں',
    'LBL_DASHLET_SAVE' => 'محفوظ کریں',
    'LBL_DASHLET_CHARTS' => 'چارٹس',
    'LBL_DASHLET_ONLY_CHARTS' => 'صرف چارٹ دکھائیں',
    'LBL_UPDATE_PARAMETERS' => 'جدید بنانا',
    'LBL_PARAMETERS' => 'پیرامیٹرز',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'فیلڈ یا حالت کے علاقے میں عناصر ھیںچیں اور ڈراپیں',
    'LBL_MAIN_GROUPS' => 'مین گروپ:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'نامی چارٹ',
    'LBL_REPORT' => 'حالت بتانا',
);
