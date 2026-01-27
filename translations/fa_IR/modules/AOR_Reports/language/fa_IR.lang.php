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
    'LBL_ASSIGNED_TO_ID' => 'شناسه کاربر تخصیص یافته',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_ID' => 'شناسه',
    'LBL_DATE_ENTERED' => 'تاریخ ایجاد',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش',
    'LBL_MODIFIED' => 'تغییر یافته توسط',
    'LBL_MODIFIED_NAME' => 'نام ویرایش کننده',
    'LBL_CREATED' => 'ایجاد کننده',
    'LBL_DESCRIPTION' => 'توضیحات',
    'LBL_DELETED' => 'حذف شده',
    'LBL_NAME' => 'نام',
    'LBL_CREATED_USER' => 'کاربر ایجاد کننده',
    'LBL_MODIFIED_USER' => 'کاربر ویرایش کننده',
    'LBL_LIST_NAME' => 'نام',
    'LBL_EDIT_BUTTON' => 'ویرایش',
    'LBL_REMOVE' => 'حذف',
    'LBL_LIST_FORM_TITLE' => 'فهرست گزارش‌ها',
    'LBL_MODULE_NAME' => 'گزارش‌ها',
    'LBL_MODULE_TITLE' => 'گزارش‌ها',
    'LBL_HOMEPAGE_TITLE' => 'گزارش‌های من',
    'LNK_NEW_RECORD' => 'ایجاد گزارش',
    'LNK_LIST' => 'مشاهده گزارش‌ها',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی گزارش‌ها',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'مشاهده تاریخچه',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_NEW_FORM_TITLE' => 'گزارش‌های جدید',
    'LBL_REPORT_MODULE' => 'ماژول گزارش',
    'LBL_GRAPHS_PER_ROW' => 'Charts per row',
    'LBL_FIELD_LINES' => 'فیلدهای نمایش',
    'LBL_ADD_FIELD' => 'افزودن فیلد',
    'LBL_CONDITION_LINES' => 'شرایط',
    'LBL_ADD_CONDITION' => 'افزودن شرط',
    'LBL_EXPORT' => 'خروجي گرفتن',
    'LBL_DOWNLOAD_PDF' => 'دانلود PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'افزودن به ليست هدف',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'نموادر درختی ماژول',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'فیلدها',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'شرایط',
    'LBL_TOTAL' => 'مجموع',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'نمودارها',
    'LBL_ADD_CHART' => 'افزودن نمودار',
    'LBL_ADD_PARENTHESIS' => 'پرانتز باز کنید',
    'LBL_CHART_TITLE' => 'عنوان',
    'LBL_CHART_TYPE' => 'نوع',
    'LBL_CHART_X_FIELD' => 'محور x',
    'LBL_CHART_Y_FIELD' => 'محور Y',
    'LBL_AOR_REPORTS_DASHLET' => 'گزارش‌ها',
    'LBL_DASHLET_TITLE' => 'عنوان',
    'LBL_DASHLET_REPORT' => 'گزارش',
    'LBL_DASHLET_CHOOSE_REPORT' => 'لطفا یک گزارش را انتخاب نمایید',
    'LBL_DASHLET_SAVE' => 'ذخيره',
    'LBL_DASHLET_CHARTS' => 'نمودارها',
    'LBL_DASHLET_ONLY_CHARTS' => 'تنها نمایش نمودارها',
    'LBL_UPDATE_PARAMETERS' => 'بروز رسانی',
    'LBL_PARAMETERS' => 'پارامترها',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'عناصر بکشید و در ناحیه فیلد یا شرط رها کنید',
    'LBL_MAIN_GROUPS' => 'گروه اصلی:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'نمودار بدون نام',
    'LBL_REPORT' => 'گزارش',
);
