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
    'LNK_NEW_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LNK_NEW_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LNK_NEW_TASK' => ' කාර්ය සාධක නිර්මාණය',
    'LNK_NEW_NOTE' => 'සටහන හෝ ඇමුණුම් සාදන්න',
    'LNK_NEW_EMAIL' => ' සංරක්ෂිත ලේඛණ සේප්පුව විද්යුත්',
    'LNK_CALL_LIST' => 'ඇමතුම්',
    'LNK_MEETING_LIST' => 'රැස්වීම්',
    'LNK_TASK_LIST' => ' කාර්යයන්',
    'LNK_NOTE_LIST' => 'සටහන්',
    'LBL_ADD_FIELD' => 'ක්ෂේත්ර එකතු කරන්න:',
    'LBL_SEARCH_FORM_TITLE' => 'මොඩියුලය සොයන්න',
    'COLUMN_TITLE_NAME' => 'ක්ෂේත්ර නාමය',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'විදහා පත',
    'COLUMN_TITLE_LABEL_VALUE' => 'ලේබලය අගය',
    'COLUMN_TITLE_LABEL' => 'පද්ධතිය පත',
    'COLUMN_TITLE_DATA_TYPE' => 'දත්ත වර්ගය',
    'COLUMN_TITLE_MAX_SIZE' => 'මැක්ස් තරම',
    'COLUMN_TITLE_HELP_TEXT' => 'උදවු පෙළ',
    'COLUMN_TITLE_COMMENT_TEXT' => 'පෙළ Comment',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'අවශ්ය ක්ෂේත්ර',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'පෙරනිමි අගය',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'IFrame උස',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'පෙරනිමි URL',
    'COLUMN_TITLE_AUDIT' => 'විගණන',
    'COLUMN_TITLE_MIN_VALUE' => 'අවම අගය',
    'COLUMN_TITLE_MAX_VALUE' => 'මැක්ස් අගය',
    'COLUMN_TITLE_LABEL_ROWS' => 'පේළි',
    'COLUMN_TITLE_LABEL_COLS' => 'තීර',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# ප්රදර්ශනය අයිතම',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'වාහන වර්ධකය ඉදිරි අගය',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'ආකෘතිය අක්රීය',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'රංගේ සොයන්න සක්රිය කරන්න',
    'LBL_DROP_DOWN_LIST' => 'පතන ලැයිස්තුවෙන්',
    'LBL_RADIO_FIELDS' => 'ගුවන් විදුලි ෆීල්ඩ්ස්',
    'LBL_MULTI_SELECT_LIST' => 'බහු තේරීම් ලැයිස්තුව',
    'COLUMN_TITLE_PRECISION' => 'නිරවද්යතාවයකින්',
    'LBL_MODULE' => 'Module',
    'COLUMN_TITLE_MASS_UPDATE' => 'ජනමාධ්ය යාවත්කාලීන',
    'COLUMN_TITLE_IMPORTABLE' => 'Importable',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'ඒකාබද්ධ අනුපිටපත්',
    'LBL_LABEL' => 'ලේබලය',
    'LBL_DATA_TYPE' => 'දත්ත වර්ගය',
    'LBL_DEFAULT_VALUE' => 'පෙරනිමි අගය',
    'ERR_RESERVED_FIELD_NAME' => "ඉඟි පද ඇවිරිනි",
    'ERR_SELECT_FIELD_TYPE' => 'ක්ෂේත්ර වර්ගය තෝරන්න කරුණාකර',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'ක්ෂේත්ර නම දැනටමත් පවතී',
    'LBL_BTN_ADD' => 'එකතු කරන්න',
    'LBL_BTN_EDIT' => 'සංස්කරණය',
    'LBL_GENERATE_URL' => 'URL උත්පාදනය',
    'LBL_CALCULATED' => 'ගණනය කළ අගය',
    'LBL_LINK_TARGET' => 'Open Link In',
    'LBL_IMAGE_WIDTH' => 'පළල',
    'LBL_IMAGE_HEIGHT' => 'උස',
    'LBL_IMAGE_BORDER' => 'දේශසීමා',
    'LBL_HELP' => 'උදව්' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'පේළිගත සංස්කරණය කරන්න',
    'COLUMN_TITLE_PARENT_ENUM' => 'මව් මෙනුව තෝරන්න',
    'LBL_INSERT_FIELD' => 'Insert Field',
);
