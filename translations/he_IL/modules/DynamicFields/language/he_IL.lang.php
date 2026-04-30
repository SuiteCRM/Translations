<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LNK_NEW_CALL' => 'יומן שיחה',
    'LNK_NEW_MEETING' => 'לקבוע פגישה',
    'LNK_NEW_TASK' => 'צור משימה',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_CALL_LIST' => 'Calls',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'משימות',
    'LNK_NOTE_LIST' => 'Notes',
    'LBL_ADD_FIELD' => 'הוסף שדות:',
    'LBL_SEARCH_FORM_TITLE' => 'חפש מודול',
    'COLUMN_TITLE_NAME' => 'שם שדה',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'תווית שתוצג',
    'COLUMN_TITLE_LABEL_VALUE' => 'ערך התווית',
    'COLUMN_TITLE_LABEL' => 'תווית מערכתית',
    'COLUMN_TITLE_DATA_TYPE' => 'סוג מידע',
    'COLUMN_TITLE_MAX_SIZE' => 'גודל מקסימאלי',
    'COLUMN_TITLE_HELP_TEXT' => 'מלל לעזרה',
    'COLUMN_TITLE_COMMENT_TEXT' => 'מלל להערה',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'שדה נדרש',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'ערך ברירת מחדל',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'IFrame גובה',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'ברירת מחדל URL',
    'COLUMN_TITLE_AUDIT' => 'Audit',
    'COLUMN_TITLE_MIN_VALUE' => 'ערך מינימום',
    'COLUMN_TITLE_MAX_VALUE' => 'ערך מקסימום',
    'COLUMN_TITLE_LABEL_ROWS' => 'שורות',
    'COLUMN_TITLE_LABEL_COLS' => 'עמודות',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# פריטים שיוצגו',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'הוסף אוטומטית את הערך הבא',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'בטל פורמט',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'אפשר חיפוש בטווח',
    'LBL_DROP_DOWN_LIST' => 'רשימה נגללת',
    'LBL_RADIO_FIELDS' => 'שדה כפתור רדיו',
    'LBL_MULTI_SELECT_LIST' => 'רשימה לבחירה מרובה',
    'COLUMN_TITLE_PRECISION' => 'דיוק',
    'LBL_MODULE' => 'Module',
    'COLUMN_TITLE_MASS_UPDATE' => 'עדכון המוני',
    'COLUMN_TITLE_IMPORTABLE' => 'ניתן לייבוא',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'אחד רשומות כפולות',
    'LBL_LABEL' => 'Label',
    'LBL_DATA_TYPE' => 'Data Type',
    'LBL_DEFAULT_VALUE' => 'Default Value',
    'ERR_RESERVED_FIELD_NAME' => "מילות מפתח שמורות",
    'ERR_SELECT_FIELD_TYPE' => 'בחר בבקשה סוג שדה',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'שם שדה כבר קיים',
    'LBL_BTN_ADD' => 'הוסף',
    'LBL_BTN_EDIT' => 'ערוך',
    'LBL_GENERATE_URL' => 'צור URL',
    'LBL_CALCULATED' => 'ערך מחושב',
    'LBL_LINK_TARGET' => 'פתח קישור ב',
    'LBL_IMAGE_WIDTH' => 'רוחב',
    'LBL_IMAGE_HEIGHT' => 'גובה',
    'LBL_IMAGE_BORDER' => 'Border',
    'LBL_HELP' => 'Help' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Inline Edit',
    'COLUMN_TITLE_PARENT_ENUM' => 'רשימת אב נפתחת',
    'LBL_INSERT_FIELD' => 'Insert Field',
);
