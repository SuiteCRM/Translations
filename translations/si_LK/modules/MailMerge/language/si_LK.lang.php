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
    'LBL_STEP_1' => 'පියවර 1: තේරීම් මොඩියුලය හා සැකිල්ල',
    'LBL_MAILMERGE_MODULE' => 'මොඩියුලය තෝරන්න:',
    'LBL_MAILMERGE_SELECTED_MODULE' => 'තෝරාගත් මොඩියුලය:',
    'LBL_MAILMERGE_TEMPLATES' => 'සැකිල්ල තෝරන්න:',
    'LBL_STEP_4' => 'සමාලෝචන හා සම්පූර්ණ',
    'LBL_SELECTED_MODULE' => 'තෝරාගත් මොඩියුලය:',
    'LBL_SELECTED_TEMPLATE' => 'තෝරාගත් සැකිල්ල:',
    'LBL_SELECTED_ITEMS' => 'තෝරාගත් අයිතම:',
    'LBL_STEP_5' => 'තැපැල් සම්පූර්ණ ඒකාබද්ධ කරන්න',
    'LBL_MERGED_FILE' => 'ගොනුව ඒකාබද්ධ කරන්න:',
    'LNK_NEW_MAILMERGE' => 'තැපැල් ඒකාබද්ධ ආරම්භ කරන්න',
    'LNK_UPLOAD_TEMPLATE' => 'උඩුගත සැකිල්ල',
    'LBL_DOC_NAME' => 'ලේඛන නම:',
    'LBL_FILENAME' => 'ගොනුවේ නම:',
    'LBL_DOC_VERSION' => 'සංශෝධනය:',
    'LBL_DOC_DESCRIPTION' => 'විස්තරය:',
    'LBL_LIST_NAME' => 'නම',
    'LBL_FINISH' => 'ඒකාබද්ධ ආරම්භ කරන්න',
    'LBL_NEXT' => 'Next',
    'LBL_BACK' => ' <නැවතත්',
    'LBL_START' => 'දිගටම කිරීමට මෙතැන ක්ලික් කරන්න',
    'LBL_CONTAINS_CONTACT_INFO' => 'තෝරාගත් සැකිල්ල ආශ්රිත අඩංගු',
    'LBL_ADDIN_NOTICE' => 'මෙම SuiteCRM තැපැල් ස්ථාපනය ඇඩ් මයික්රොසොෆ්ට් වචනය ඒකාබද්ධ කරන්න අවශ්ය වේ.',
    'LBL_REMOVE' => 'අයිතම (ය) ඉවත් කරන්න' /*for 508 compliance fix*/,
    'LBL_ADD' => 'අයිතමය (ව) එක් කරන්න' /*for 508 compliance fix*/,
    'LBL_BROWSER_REQUIREMENT' => 'මෙම Windows සඳහා ඉන්ඩියන් එක්ස්ප්රස් 6.0 ෙහෝ ඊට වඩා වැඩි අවශ්ය වේ.',
    'LBL_FORM_SELECT_TEMPLATE' => 'සැකිලි තෝරන්න.',
    'LBL_SELECT_ONE' => 'අවම වශයෙන් එක් අයිතමය තෝරන්න.',
    'LBL_AVAILABLE' => 'ඇත',
    'LBL_SELECTED' => 'තෝරාගත්',
    'LBL_RELATED_INFO_SELECTION' => 'ඔබ ඔබේ ඒකාබද්ධ ලියවිල්ල තුළ ප්රදර්ශනය කිරීමට කැමති සම්බන්ධ තොරතුරු හඳුනා ගැනීම සඳහා පහත තෝරා භාවිතා කරන්න. ඔබගේ සැකිල්ල ලියවිල්ල සම්බන්ධ තොරතුරු අඩංගු වේ නම් මෙම පියවර ඔබ ලොගින් වී නොමැත.',

);
