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
    'LNK_NEW_CALL' => 'لاگ کال',
    'LNK_NEW_MEETING' => 'تَرتيب کار اجلاس',
    'LNK_NEW_TASK' => 'ٹاسک بنائیں',
    'LNK_NEW_NOTE' => 'نوٹ یا منسلک بنائیں',
    'LNK_NEW_EMAIL' => 'محفوظ شدہ ای میل',
    'LNK_CALL_LIST' => 'کال',
    'LNK_MEETING_LIST' => 'ملاقات',
    'LNK_TASK_LIST' => 'کام',
    'LNK_NOTE_LIST' => 'خطوط',
    'LBL_ADD_FIELD' => 'فیلڈ کو شامل کرو:',
    'LBL_SEARCH_FORM_TITLE' => 'نقشہ تلاش',
    'COLUMN_TITLE_NAME' => 'فیلڈ کا نام',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'نقشہ دیکھیں',
    'COLUMN_TITLE_LABEL_VALUE' => 'نقشہ کی قیمت',
    'COLUMN_TITLE_LABEL' => 'نظام کا نقشہ',
    'COLUMN_TITLE_DATA_TYPE' => 'ڈیٹا کی قسم',
    'COLUMN_TITLE_MAX_SIZE' => 'زيادہ سے زيادہ مقدار',
    'COLUMN_TITLE_HELP_TEXT' => 'مدد اصل عبارت',
    'COLUMN_TITLE_COMMENT_TEXT' => 'متن تبصرہ کرنا',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'ضروری میدان',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'کوتاہي قیمت',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'IFrame Height',
    'COLUMN_TITLE_HTML_CONTENT' => 'ایچ ٹی ایم ایل',
    'COLUMN_TITLE_URL' => 'کوتاہی یو آر ایل',
    'COLUMN_TITLE_AUDIT' => 'حساب کي جانچ پڑتال',
    'COLUMN_TITLE_MIN_VALUE' => 'کم سے کم قیمت',
    'COLUMN_TITLE_MAX_VALUE' => 'زيادہ سے زيادہ قیمت',
    'COLUMN_TITLE_LABEL_ROWS' => 'صف',
    'COLUMN_TITLE_LABEL_COLS' => 'ستون',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => 'شے ظاہر کرنا',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'خودبخود اضافہ اگلی قیمت کا',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'غیر فعال ترتيب',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'پہنچ کو تلاش کرنے کا اختیار دینا',
    'LBL_DROP_DOWN_LIST' => 'فہرست کو نیچے ٹپکانا',
    'LBL_RADIO_FIELDS' => 'ریڈیو شعبوں',
    'LBL_MULTI_SELECT_LIST' => 'زیادہ متعدد فہرست چنا',
    'COLUMN_TITLE_PRECISION' => 'درستي',
    'LBL_MODULE' => 'ماڈیول',
    'COLUMN_TITLE_MASS_UPDATE' => 'بڑے پیمانے پر تازہ کاری',
    'COLUMN_TITLE_IMPORTABLE' => 'قابل درآمد',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'نقلیں ملانا',
    'LBL_LABEL' => 'عنوان',
    'LBL_DATA_TYPE' => 'ڈیٹا کی قسم',
    'LBL_DEFAULT_VALUE' => 'کوتاہي قیمت',
    'ERR_RESERVED_FIELD_NAME' => "محتاط مطلوبہ الفاظ",
    'ERR_SELECT_FIELD_TYPE' => 'مہربانی کرکے قطع کی قسم کا انتخاب کریں',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'میدان کا نام پہلے سے موجود ہے',
    'LBL_BTN_ADD' => 'شامل کریں',
    'LBL_BTN_EDIT' => 'ردوبدل',
    'LBL_GENERATE_URL' => 'یوآرل بنانا',
    'LBL_CALCULATED' => 'واجب قیمت',
    'LBL_LINK_TARGET' => 'ربط در کھولیں',
    'LBL_IMAGE_WIDTH' => 'عرض',
    'LBL_IMAGE_HEIGHT' => 'ارتفاع',
    'LBL_IMAGE_BORDER' => 'سرحد',
    'LBL_HELP' => 'مدد' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'آن لائن میں اشاعت کریں',
    'COLUMN_TITLE_PARENT_ENUM' => 'والدین ڈراپ نیچے',
    'LBL_INSERT_FIELD' => 'Insert Field',
);
