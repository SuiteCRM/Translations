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
    'LNK_NEW_CALL' => 'Tawag ay log',
    'LNK_NEW_MEETING' => 'Iskedyul ng meeting',
    'LNK_NEW_TASK' => 'Gumawa ng gawain',
    'LNK_NEW_NOTE' => 'Lumikha ng talaan o paglalakip',
    'LNK_NEW_EMAIL' => 'I-archive ang email',
    'LNK_CALL_LIST' => 'Ang mga tawag',
    'LNK_MEETING_LIST' => 'Mga pagpupulong',
    'LNK_TASK_LIST' => 'Ang mga gawain',
    'LNK_NOTE_LIST' => 'Mga tandaan',
    'LBL_ADD_FIELD' => 'Magdagdag ng patlang:',
    'LBL_SEARCH_FORM_TITLE' => 'Hanapin ang modyul',
    'COLUMN_TITLE_NAME' => 'Pangalan ng larangan',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Magpakita ng label',
    'COLUMN_TITLE_LABEL_VALUE' => 'Ang halaga ng label',
    'COLUMN_TITLE_LABEL' => 'Sistema ng label',
    'COLUMN_TITLE_DATA_TYPE' => 'Uri ng data',
    'COLUMN_TITLE_MAX_SIZE' => 'Max na laki',
    'COLUMN_TITLE_HELP_TEXT' => 'Tekstong tulong',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Komentong teksto',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Kinakailangang patlang',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'I-default ang halaga',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'Taas ng iFrame',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'I-default ang URL',
    'COLUMN_TITLE_AUDIT' => 'Awdit',
    'COLUMN_TITLE_MIN_VALUE' => 'Pangunahing halaga',
    'COLUMN_TITLE_MAX_VALUE' => 'Max na halaga',
    'COLUMN_TITLE_LABEL_ROWS' => 'Mga hilera',
    'COLUMN_TITLE_LABEL_COLS' => 'Mga hanay',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# mga aytem na naka-displey',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Awto Increment ang Susunod na halaga',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Hindi pagahin ang format',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Paganahin ang saklaw ng paghahanap',
    'LBL_DROP_DOWN_LIST' => 'Listahan ng Drop down',
    'LBL_RADIO_FIELDS' => 'Ang radio ng mga patlang',
    'LBL_MULTI_SELECT_LIST' => 'Listahan ng maramihang pagpili',
    'COLUMN_TITLE_PRECISION' => 'Katumpakan',
    'LBL_MODULE' => 'Modyul',
    'COLUMN_TITLE_MASS_UPDATE' => 'Ang Mass ay i-Update',
    'COLUMN_TITLE_IMPORTABLE' => 'Importable',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Pagsamahin ang duplicate',
    'LBL_LABEL' => 'Ang label',
    'LBL_DATA_TYPE' => 'Uri ng data',
    'LBL_DEFAULT_VALUE' => 'I-default ang halaga',
    'ERR_RESERVED_FIELD_NAME' => "Magreserba ng keyword",
    'ERR_SELECT_FIELD_TYPE' => 'Mangyaring pumili ng uri ng patlang',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Ang pangalan ng oatlang ay umiiral na',
    'LBL_BTN_ADD' => 'Idagdag',
    'LBL_BTN_EDIT' => 'I-edit',
    'LBL_GENERATE_URL' => 'Bumuo ng URL',
    'LBL_CALCULATED' => 'Kinalkula ang halaga',
    'LBL_LINK_TARGET' => 'Buksan ang link sa',
    'LBL_IMAGE_WIDTH' => 'Lapad',
    'LBL_IMAGE_HEIGHT' => 'Tass',
    'LBL_IMAGE_BORDER' => 'Border',
    'LBL_HELP' => 'Tulong' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'I-edit ang nasa linya',
    'COLUMN_TITLE_PARENT_ENUM' => 'Magulang ng Dropdown',
    'LBL_INSERT_FIELD' => 'Insert Field',
);
