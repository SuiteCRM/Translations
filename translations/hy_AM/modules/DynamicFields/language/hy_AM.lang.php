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
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_CALL_LIST' => 'Calls',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_NOTE_LIST' => 'Notes',
    'LBL_ADD_FIELD' => 'Ավելացնել դաշտ.',
    'LBL_SEARCH_FORM_TITLE' => 'Մոդուլի որոնում',
    'COLUMN_TITLE_NAME' => 'Դաշտի անվանումը',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Ցուցադրել պիտակ',
    'COLUMN_TITLE_LABEL_VALUE' => 'Պիտակի արժեքը',
    'COLUMN_TITLE_LABEL' => 'Համակարգի պիտակը',
    'COLUMN_TITLE_DATA_TYPE' => 'Տվյալների տեսակը',
    'COLUMN_TITLE_MAX_SIZE' => 'Մաքսիմալ չափը',
    'COLUMN_TITLE_HELP_TEXT' => 'Օգնություն',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Մեկնաբանություն',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Պարտադիր դաշտ',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Լռելյայն արժեք',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'IFrame բարձրությունը',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'Լռելյայն URL',
    'COLUMN_TITLE_AUDIT' => 'Audit',
    'COLUMN_TITLE_MIN_VALUE' => 'Մինիմալ արժեք',
    'COLUMN_TITLE_MAX_VALUE' => 'Մաքսիմալ արժեք',
    'COLUMN_TITLE_LABEL_ROWS' => 'Տողեր',
    'COLUMN_TITLE_LABEL_COLS' => 'Սյունակներ',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# նյութեր է ցուցադրված',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Ավտոմատ կերպով բարձրացնել հետևյալ արժեքը',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Անջատել ֆորմատը',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Միացնել որոնման շրջանակը',
    'LBL_DROP_DOWN_LIST' => 'Ներքև բացվող ցանկ',
    'LBL_RADIO_FIELDS' => 'Ռադիո դաշտը',
    'LBL_MULTI_SELECT_LIST' => 'Բազմակի ընտրության ցանկ',
    'COLUMN_TITLE_PRECISION' => 'Ճշգրտություն',
    'LBL_MODULE' => 'Module',
    'COLUMN_TITLE_MASS_UPDATE' => 'Mass Update',
    'COLUMN_TITLE_IMPORTABLE' => 'Ներմուծվող',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Միավորել կրկնօրինակները',
    'LBL_LABEL' => 'Label',
    'LBL_DATA_TYPE' => 'Data Type',
    'LBL_DEFAULT_VALUE' => 'Default Value',
    'ERR_RESERVED_FIELD_NAME' => "Պահուստային ստեղնաշար",
    'ERR_SELECT_FIELD_TYPE' => 'Խնդրում ենք նշել դաշտի տեսակը',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Նման անվանումով դաշտ արդեն գոյություն ունի',
    'LBL_BTN_ADD' => 'Add',
    'LBL_BTN_EDIT' => 'Edit',
    'LBL_GENERATE_URL' => 'Ստեղծել URL',
    'LBL_CALCULATED' => 'Հաշվարկված արժեքը',
    'LBL_LINK_TARGET' => 'Բացել հղումը',
    'LBL_IMAGE_WIDTH' => 'Լայնք',
    'LBL_IMAGE_HEIGHT' => 'Բարձրություն',
    'LBL_IMAGE_BORDER' => 'Border',
    'LBL_HELP' => 'Help' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Արագ խմբագրում',
    'COLUMN_TITLE_PARENT_ENUM' => 'Ծնողների ներքև բացվող մենյու',
    'LBL_INSERT_FIELD' => 'Insert Field',
);
