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
    'LBL_EDIT_LAYOUT' => 'සංස්කරණය කරන්න පිරිසැලසුම',
    'LBL_EDIT_FIELDS' => 'සංස්කරණය කරන්න රේගු ෆීල්ඩ්ස්',
    'LBL_SELECT_FILE' => ' ගොනුව තෝරන්න',
    'LBL_MODULE_TITLE' => 'ශබ්දාගාර',
    'LBL_TOOLBOX' => 'මෙවලම් ගොන්න',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM ෆීල්ඩ්ස් (අනුක්රමික ප්රදේශයට එකතු කිරීමට භාණ්ඩ ක්ලික් කරන්න)',
    'LBL_VIEW_SUITE_FIELDS' => 'දැක්ම SuiteCRM ෆීල්ඩ්ස්',
    'LBL_FAILED_TO_SAVE' => 'සුරැකීමට නොහැකි විය',
    'LBL_CONFIRM_UNSAVE' => 'යම් වෙනස් නොලබපු යනවා. ඔබ දිගටම කරගෙන කැමති බව ඔබට විශ්වාස ද?',
    'LBL_PUBLISHING' => 'ප්රකාශන ...',
    'LBL_PUBLISHED' => 'Published',
    'LBL_FAILED_PUBLISHED' => 'ප්රකාශනය කිරීම නොහැකි විය',
    'LBL_DROP_HERE' => '[මෙහි දමන්න]',

//CUSTOM FIELDS
    'LBL_NAME' => 'නම',
    'LBL_LABEL' => 'ලේබලය',
    'LBL_MASS_UPDATE' => 'ජනමාධ්ය යාවත්කාලීන',
    'LBL_DEFAULT_VALUE' => 'පෙරනිමි අගය',
    'LBL_REQUIRED' => 'අවශ්‍යයි',
    'LBL_DATA_TYPE' => 'වර්ගය',


    'LBL_HISTORY' => 'ඉතිහාසය',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<br> <b> පහත විකල්ප තෝරා ගන්න. </ b>? ඔබ අද කරන්න කැමති මොන <br>! </ h2> ශබ්දාගාර කිරීමට <h2> ඔබ සාදරයෙන් පිළිගනිමු',
    'LBL_SW_EDIT_MODULE' => 'මොඩියුලය සංස්කරණය කරන්න',
    'LBL_SW_EDIT_DROPDOWNS' => 'සංස්කරණය කරන්න Drop කාර්මික ෙදෝෂ',
    'LBL_SW_EDIT_TABS' => 'ටැබ් මානන්න',
    'LBL_SW_RENAME_TABS' => 'ටැබ් නම-වෙනස් කිරීම',
    'LBL_SW_EDIT_GROUPTABS' => 'සමූහ ටැබ් මානන්න',
    'LBL_SW_EDIT_PORTAL' => 'සංස්කරණය කරන්න ද්වාරය',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'රේගු ෆීල්ඩ්ස් අලුත්වැඩියා',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => ' සංක්රමණය රේගු ෆීල්ඩ්ස්',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'භාෂා ගොනු ජාවාස්ක්රිප්ට් අනුවාදයන් Rebuilds',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'අවශ්ය විට භාෂාව ගොනු ජාවාස්ක්රිප්ට් අනුවාදයන් ඉවත් නැවත වනු ඇත.',


//Manager Backups History
    'LBL_MB_DELETE' => 'මකා',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'බිඳුවක් පහළට සාදන්න',
    'LBL_DROPDOWN_NAME' => 'මෙනුව තෝරන්න නම:',
    'LBL_DROPDOWN_LANGUAGE' => 'මෙනුව තෝරන්න භාෂාව:',
    'LBL_TABGROUP_LANGUAGE' => 'භාෂා:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'විදහා අගය',
    'LBL_DD_DATABASEVALUE' => 'දත්ත සමුදාය අගය',
    'LBL_DD_ALL' => 'සියලු',

//BUTTONS
    'LBL_BTN_SAVE' => 'සුරකින්න',
    'LBL_BTN_CANCEL' => 'අවලංගු කරන්න',
    'LBL_BTN_SAVEPUBLISH' => 'සුරකින්න සහ යෙදවීමට',
    'LBL_BTN_HISTORY' => 'ඉතිහාසය',
    'LBL_BTN_ADDROWS' => 'පේළි එක් කරන්න',
    'LBL_BTN_UNDO' => 'ආපසු කරන්න',
    'LBL_BTN_REDO' => 'නැවත කරන්න',
    'LBL_BTN_ADDCUSTOMFIELD' => 'රේගු ක්ෂේත්ර එකතු කරන්න',
    'LBL_BTN_TABINDEX' => 'සංස්කරණය කරන්න Tabbing සාමය',

//TABS
    'LBL_MODULES' => 'මොඩියුල',
    'LBL_MODULE_NAME' => 'පරිපාලනය',
    'LBL_CONFIGURE_GROUP_TABS' => 'මානකරණ මොඩියුලය මෙනුව පෙරහන්',
    'LBL_GROUP_TAB_WELCOME' => 'පරිශීලකයන් මෙනු තුළ මොඩියුල කණ්ඩායම් බැලීම සඳහා භාවිතා කිරීමට පහත දක්වා ෆිල්ටර් මොඩියුලය මෙනුව තුළ තවත් ලැයිස්තුව ප්රදර්ශනය කරනු ඇත. ඇද ෆිල්ටර් යාමට සහ එහි සිට මොඩියුල බස්සනවා. සටහන: හිස් පෙරහන් මෙනු ප්රදර්ශනය කළ නොහැකි වනු ඇත.',
    'LBL_RENAME_TAB_WELCOME' => 'ටැබය නැවත නම් කිරීම සඳහා පහත වගුවේ කිසියම් ටැබ් \ ගේ විදහා අගය මත ක්ලික් කරන්න. ',
    'LBL_DELETE_MODULE' => 'Remove&nbsp;module<br />from&nbsp;filter',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'ප්රයෝජනයට ගත හැකි භාෂා තෝරන්න, සමූහයේ ලේබල් සංස්කරණය තේරූ භාෂාවෙන් ලේබල් අයදුම් කිරීමට සුරකින්න හා යෙදවීමට ක්ලික් කරන්න.',
    'LBL_ADD_GROUP' => 'පෙරහන් කරන්න',
    'LBL_NEW_GROUP' => 'නව සමූහ',
    'LBL_RENAME_TABS' => 'මොඩියුල නැවත නම් කරන්න',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "දෝෂය: වලංගු නොවන කී අගය: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'සුරකින්න' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'ආපසු කරන්න' /*for 508 compliance fix*/,
    'LBL_REDO' => 'නැවත කරන්න' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'පේළිගත' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'මකා' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'ක්ෂේත්ර එකතු කරන්න' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'උපරිම' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'අවම කිරීම' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'ප්රකාශයට පත් කරනු ලබයි' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'පේළි එක් කරන්න' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'ක්ෂේත්ර එකතු කරන්න' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'සංස්කරණය' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'සංස්කරණය කිරීමට භාෂාව තෝරන්න.',
    'LBL_SINGULAR' => 'ඒක වචන නම් පත',
    'LBL_PLURAL' => ', බහු වචන පත',
    'LBL_RENAME_MOD_SAVE_HELP' => 'වෙනස්කම් අයදුම් කිරීමට, <b> සුරකින්න </ b> ක්ලික් කරන්න.'

);
