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
    'LNK_NEW_CALL' => 'Log sa Tawag',
    'LNK_NEW_MEETING' => 'Iskedyul sa Meeting',
    'LNK_NEW_TASK' => 'Paghimo og buhaton',
    'LNK_NEW_NOTE' => 'Paghimo og Note o Sumpay',
    'LNK_NEW_EMAIL' => 'Archive nga Email',
    'LNK_CALL_LIST' => 'Tawag',
    'LNK_MEETING_LIST' => 'Mag Kapunungan',
    'LNK_TASK_LIST' => 'Naay isugo',
    'LNK_NOTE_LIST' => 'Tima-ilhan',
    'LBL_ADD_FIELD' => 'Pagdungag og palibut:',
    'LBL_SEARCH_FORM_TITLE' => 'Pagpangita sa Modyul',
    'COLUMN_TITLE_NAME' => 'Pangalan sa palibot',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'I-lantad ang Timaan',
    'COLUMN_TITLE_LABEL_VALUE' => 'Balyo sa Timaan',
    'COLUMN_TITLE_LABEL' => 'Timaan sa Sistema',
    'COLUMN_TITLE_DATA_TYPE' => 'Tipo sa Datos',
    'COLUMN_TITLE_MAX_SIZE' => 'Max nga Gidak-on',
    'COLUMN_TITLE_HELP_TEXT' => 'Tabang nga Teksto',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Komento nga Teksto',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Kinahanglan na Palibut',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Default nga Balyo',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'Gitas-on sa IFrame',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'Default na URL',
    'COLUMN_TITLE_AUDIT' => 'Awdit',
    'COLUMN_TITLE_MIN_VALUE' => 'Min nga Balyo',
    'COLUMN_TITLE_MAX_VALUE' => 'Max nga balyo',
    'COLUMN_TITLE_LABEL_ROWS' => 'Mga Hilera',
    'COLUMN_TITLE_LABEL_COLS' => 'Mga Kolumna',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# nalantad na mga butang',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Awto nga Pagsaka sa Sunod nga Balyo',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'I-disable ang Han-ay',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'I-pahimo ang linya sa pagpangita',
    'LBL_DROP_DOWN_LIST' => 'Tighulog nga Lista',
    'LBL_RADIO_FIELDS' => 'Mga palibot sa Radyo',
    'LBL_MULTI_SELECT_LIST' => 'Multi nga Pili-a ang Lista',
    'COLUMN_TITLE_PRECISION' => 'Matakdo',
    'LBL_MODULE' => 'Module',
    'COLUMN_TITLE_MASS_UPDATE' => 'Mass update',
    'COLUMN_TITLE_IMPORTABLE' => 'Maimportar',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'I-duplikit ang Langkob',
    'LBL_LABEL' => 'Label',
    'LBL_DATA_TYPE' => 'Tipo sa Datos',
    'LBL_DEFAULT_VALUE' => 'Default nga Balyo',
    'ERR_RESERVED_FIELD_NAME' => "Nareserba na Keyword",
    'ERR_SELECT_FIELD_TYPE' => 'Palihug og pagpili sa klase sa palibot',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Pangalan sa Palibot kay anaa na',
    'LBL_BTN_ADD' => 'Dungagi',
    'LBL_BTN_EDIT' => 'Usba',
    'LBL_GENERATE_URL' => 'Paggama og URL',
    'LBL_CALCULATED' => 'Kalkulado nga Balyo',
    'LBL_LINK_TARGET' => 'Ablihi ang Link sa',
    'LBL_IMAGE_WIDTH' => 'Gilapdon',
    'LBL_IMAGE_HEIGHT' => 'Gitas-on',
    'LBL_IMAGE_BORDER' => 'Utlanan',
    'LBL_HELP' => 'Nangita og tabang' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Nakalinya na Edit',
    'COLUMN_TITLE_PARENT_ENUM' => 'Ginikanan na Hulganan',
    'LBL_INSERT_FIELD' => 'Insert Field',
);
