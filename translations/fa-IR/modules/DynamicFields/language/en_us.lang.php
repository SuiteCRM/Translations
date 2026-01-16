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
    'LNK_NEW_CALL' => 'ثبت تماس',
    'LNK_NEW_MEETING' => 'ثبت قرار ملاقات یا جلسه',
    'LNK_NEW_TASK' => 'ساخت وظیفه',
    'LNK_NEW_NOTE' => 'ایجاد یادداشت یا پیوست',
    'LNK_NEW_EMAIL' => 'آرشیو ایمیل',
    'LNK_CALL_LIST' => 'تماس‌ها',
    'LNK_MEETING_LIST' => 'جلسات',
    'LNK_TASK_LIST' => 'وظایف',
    'LNK_NOTE_LIST' => 'یادداشت‌ها',
    'LBL_ADD_FIELD' => 'افزودن فیلد:',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی ماژول',
    'COLUMN_TITLE_NAME' => 'نام فیلد',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'نمایش برچسب',
    'COLUMN_TITLE_LABEL_VALUE' => 'Label Value',
    'COLUMN_TITLE_LABEL' => 'برچسب سیستم',
    'COLUMN_TITLE_DATA_TYPE' => 'نوع داده',
    'COLUMN_TITLE_MAX_SIZE' => 'حداکثر حجم',
    'COLUMN_TITLE_HELP_TEXT' => 'متن راهنما',
    'COLUMN_TITLE_COMMENT_TEXT' => 'متن نظر',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'فیلدهای مورد نیاز',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'مقدار پیش فرض',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'ارتفاع IFrame',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'URL پیش فرض',
    'COLUMN_TITLE_AUDIT' => 'ممیزی',
    'COLUMN_TITLE_MIN_VALUE' => 'Min Value',
    'COLUMN_TITLE_MAX_VALUE' => 'حداکثر مقدار',
    'COLUMN_TITLE_LABEL_ROWS' => 'ردیف ها',
    'COLUMN_TITLE_LABEL_COLS' => 'ستون‌ها',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# Items displayed',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Auto Increment Next Value',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'غیر فعال کردن فرمت',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'فعال کردن دامنه جستجو',
    'LBL_DROP_DOWN_LIST' => 'لیست کشویی',
    'LBL_RADIO_FIELDS' => 'فیلد رادیویی',
    'LBL_MULTI_SELECT_LIST' => 'Multi Select List',
    'COLUMN_TITLE_PRECISION' => 'Precision',
    'LBL_MODULE' => 'ماژول',
    'COLUMN_TITLE_MASS_UPDATE' => 'به‌روز‌رسانی جمعی',
    'COLUMN_TITLE_IMPORTABLE' => 'قابل درون ریزی',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'ادغام تکراری',
    'LBL_LABEL' => 'عنوان',
    'LBL_DATA_TYPE' => 'نوع داده',
    'LBL_DEFAULT_VALUE' => 'مقدار پیش فرض',
    'ERR_RESERVED_FIELD_NAME' => "Reserved Keyword",
    'ERR_SELECT_FIELD_TYPE' => 'Please Select a Field Type',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Field Name already exists',
    'LBL_BTN_ADD' => 'ﺍﻓﺰﻭﺩﻥ',
    'LBL_BTN_EDIT' => 'ویرایش',
    'LBL_GENERATE_URL' => 'ایجاد URL',
    'LBL_CALCULATED' => 'Calculated Value',
    'LBL_LINK_TARGET' => 'Open Link In',
    'LBL_IMAGE_WIDTH' => 'عرض',
    'LBL_IMAGE_HEIGHT' => 'ارتفاع',
    'LBL_IMAGE_BORDER' => 'Border',
    'LBL_HELP' => 'کمک' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Inline Edit',
    'COLUMN_TITLE_PARENT_ENUM' => 'Parent DropDown',
    'LBL_INSERT_FIELD' => 'Insert Field',
);
