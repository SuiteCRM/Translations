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
    'LBL_ALL_MODULES' => 'සියලු',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'පවරා පරිශීලක අංකය',
    'LBL_ASSIGNED_TO_NAME' => 'පවරා',
    'LBL_ID' => 'හැඳු.',
    'LBL_DATE_ENTERED' => 'සෑදූ දිනය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_MODIFIED' => ' වන විට නවීකරණය කරන ලද',
    'LBL_MODIFIED_NAME' => ' නම වන විට නවීකරණය කරන ලද',
    'LBL_CREATED' => 'සෑදුවේ',
    'LBL_DESCRIPTION' => 'විස්තරය',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_NONINHERITABLE' => 'ආවේණික නොවේ',
    'LBL_LIST_NONINHERITABLE' => 'ආවේණික නොවේ',
    'LBL_NAME' => 'නම',
    'LBL_CREATED_USER' => ' පරිශීලක විසින් නිර්මාණය',
    'LBL_MODIFIED_USER' => ' පරිශීලක විසින් නවීකරණය කරන ලද',
    'LBL_LIST_FORM_TITLE' => 'ආරක්ෂක සමූහ',
    'LBL_MODULE_NAME' => 'Security Suite Management',
    'LBL_MODULE_TITLE' => 'Security Suite Management',
    'LNK_NEW_RECORD' => 'ආරක්ෂක සමූහ නිර්මාණය',
    'LNK_LIST' => 'ලැයිස්තුව බලන්න',
    'LBL_SEARCH_FORM_TITLE' => 'Search Security Groups Management',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ඉතිහාසය',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups Management',
    'LBL_USERS' => 'පරිශිලකයින්',
    'LBL_USERS_SUBPANEL_TITLE' => 'පරිශිලකයින්',
    'LBL_ROLES_SUBPANEL_TITLE' => 'භූමිකා',
    'LBL_ROLES' => 'භූමිකා',

    'LBL_CONFIGURE_SETTINGS' => 'මානන්න',
    'LBL_ADDITIVE' => 'ආකලන හිමිකම්',
    'LBL_ADDITIVE_DESC' => "පරිශීලක පරිශීලක හෝ පරිශීලක කණ්ඩායම (ව) පවරා සියලුම භූමිකා දැවැන්ත හිමිකම් ලැබෙන",
    'LBL_STRICT_RIGHTS' => 'දැඩි හිමිකම්',
    'LBL_STRICT_RIGHTS_DESC' => "පරිශීලක කණ්ඩායම් කිහිපයක් සාමාජිකයෙකු නම් වත්මන් වාර්තාගත වෙත පවරා ඇති පිරිසක් පමණක් අදාල හිමිකම් භාවිතා වේ.",
    'LBL_USER_ROLE_PRECEDENCE' => 'පරිශීලක කාර්යභාරය ඔබතුමාගේ',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'ඕනෑම කාර්යභාරයක් ඉටු ඕනෑම පිරිසක් චරිත වඩා ප්රමුඛත්වය ගත යුතු බව පරිශීලකයාට කෙලින්ම පවරනු ලැබේ නම්.',
    'LBL_INHERIT_TITLE' => 'සමූහ උරුමය රීති',
    'LBL_INHERIT_CREATOR' => 'පරිශීලක විසින් නිර්මාණය කරන උරුම',
    'LBL_INHERIT_CREATOR_DESC' => 'මෙම වාර්තා එය නිර්මාණය කළ පරිශීලක පවරා සියලුම කණ්ඩායම් උරුම වනු ඇත.',
    'LBL_INHERIT_PARENT' => 'මාපිය වාර්තා උරුම',
    'LBL_INHERIT_PARENT_DESC' => 'උදා නඩුවක් ස්පර්ශ සඳහා නිර්මාණය වන්නේ නම් මෙම නඩුව ස්පර්ශ සමග සංෙයෝජිත කණ්ඩායම් උරුම වනු ඇත.',
    'LBL_USER_POPUP' => 'නව පරිශීලක සමූහය පැන්නුම්',
    'LBL_USER_POPUP_DESC' => 'නව පරිශීලක නිර්මාණය කිරීමේදී පිරිසක් (ව) සඳහා පරිශීලක අනුයුක්ත කිරීමට ආරක්ෂක කණ්ඩායම් උත්පතන පෙන්වන්න.',
    'LBL_INHERIT_ASSIGNED' => 'පරිශීලක පවරා උරුම',
    'LBL_INHERIT_ASSIGNED_DESC' => 'මෙම වාර්තා වාර්තා පවරා පරිශීලක සියලු කණ්ඩායම් උරුම වනු ඇත. වාර්තා පවරා වෙනත් කණ්ඩායම් ඉවත් කළ නොහැකි වනු ඇත.',
    'LBL_POPUP_SELECT' => 'මැවුම්කරු සමූහ තේරීම් භාවිතා කරන්න',
    'LBL_POPUP_SELECT_DESC' => 'වාර්තාගත එකකට වඩා වැඩි පිරිස පරිශීලකයා විසින් නිර්මාණය කරන විට නිර්මාණය තිරය මත පිරිසක් තේරීම් කමිටුවේ පෙන්වන්න. එසේ නොමැති බව එක් කණ්ඩායමක් උරුම.',
    'LBL_FILTER_USER_LIST' => 'පෙරහන් පරිශීලක ලැයිස්තුව',
    'LBL_FILTER_USER_LIST_DESC' => "නොවන පරිපාලක භාවිතා කරන්නන් පමණක් එම පිරිස (ව) පරිශීලකයන් වෙත ලබා දිය හැකි",

    'LBL_DEFAULT_GROUP_TITLE' => 'නව වාර්තා සඳහා පෙරනිමි කණ්ඩායම්',
    'LBL_ADD_BUTTON_LABEL' => 'එකතු කරන්න',
    'LBL_REMOVE_BUTTON_LABEL' => 'ඉවත් කරන්න',
    'LBL_GROUP' => 'සමූහ:',
    'LBL_MODULE' => 'මොඩියුලය:',

    'LBL_MASS_ASSIGN' => 'ආරක්ෂක කණ්ඩායම්: ජනමාධ්ය යෙදවීමට',
    'LBL_ASSIGN' => 'සදනන',
    'LBL_REMOVE' => 'ඉවත් කරන්න',
    'LBL_ASSIGN_CONFIRM' => 'ඔබ වෙත මෙම පිරිස එකතු කිරීමට අවශ්ය බව ඔබට විශ්වාසද',
    'LBL_REMOVE_CONFIRM' => 'ඔබ මේ කණ්ඩායම ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද',
    'LBL_CONFIRM_END' => 'තෝරාගත් වාර්තාව (ව)?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'ආරක්ෂක කණ්ඩායම් / පරිශීලක',
    'LBL_USER_NAME' => ' පරිශීලක නාමය',
    'LBL_SECURITYGROUP_NAME' => 'ආරක්ෂක සමූහ නම',
    'LBL_HOMEPAGE_TITLE' => 'සමූහ පණිවිඩ',
    'LBL_TITLE' => 'සිරැසිය',
    'LBL_ROWS' => 'පේළි',
    'LBL_POST' => 'තැපැල්',
    'LBL_SELECT_GROUP_ERROR' => 'පිරිසක් තෝරා නැවත උත්සාහ කරන්න.',

    'LBL_GROUP_SELECT' => 'මෙම වාර්තාව ප්රවේශ යුතු කණ්ඩායම් තෝරන්න',
    'LBL_ERROR_DUPLICATE' => 'SuiteCRM විසින් අනාවරණය විය හැකි අනුපිටපත් නිසා ඔබ අතින් කරන ලද නව වාර්තා කිරීමට ආරක්ෂක කණ්ඩායම් එකතු කිරීමට සිදු වනු ඇත.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'රට තුළට පැමිණෙන සංචාරකයින්ට ඊ-තැපැල් ගිණුම',
    'LBL_INBOUND_EMAIL_DESC' => 'පරිශීලක තැපැල් ගිණුමට පවරා ඇති බව පිරිසක් අයත් නම් ඊ-තැපැල් ගිණුම වෙත ප්රවේශ පමණක් ඉඩ ලබා දේ.',
    'LBL_PRIMARY_GROUP' => 'ප්රාථමික සමූහ',
    'LBL_CHECKMARK' => 'හරි ලකුණ',

);
