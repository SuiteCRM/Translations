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

    'LBL_ADMINISTRATION_MAIN' => 'සබැදුම සැකසුම්',
    'LBL_AVAILABLE' => 'ඇත',
    'LBL_BACK' => ' <නැවතත්',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'සමහර අවශ්ය ක්ෂේත්ර හිස්ව ඇත. වෙනස්වීම් සුරකින්න කරන්නද?',
    'LBL_CONNECTOR_FIELDS' => 'සබැදුම ෆීල්ඩ්ස්',
    'LBL_DATA' => 'දත්ත',
    'LBL_DEFAULT' => 'පෙරනිමි',
    'LBL_DISABLED' => 'අබල කර ඇත',
    'LBL_ENABLED' => 'සබල කර ඇත',
    'LBL_EXTERNAL' => 'මෙම සම්බන්ධකය බාහිර ගිණුම වාර්තා නිර්මාණය කිරීමට භාවිතා කරන්නන් සක්රීය කරන්න.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' ගුණ ද Set සබැදුම දේපළ සැකසුම් පිටුව සකස් කළ යුතු මේ සම්බන්ධකය භාවිතා කිරීමට නම්.',
    'LBL_MERGE' => 'ඒකාබද්ධ කරන්න',
    'LBL_MODIFY_DISPLAY_TITLE' => 'කනෙක්ටර්ස් සක්රිය කරන්න',
    'LBL_MODIFY_DISPLAY_DESC' => 'එක් එක් සම්බන්ධකය සක්රිය කර ඇති මොඩියුල තෝරන්න.',
    'LBL_MODULE_FIELDS' => 'මොඩියුලය ෆීල්ඩ්ස්',
    'LBL_MODIFY_MAPPING_TITLE' => 'සිතියම සබැදුම ෆීල්ඩ්ස්',
    'LBL_MODIFY_MAPPING_DESC' => 'සම්බන්ධකය දත්ත දැකිය සහ මොඩියුලය වාර්තා ඒකාබද්ධ කල හැකි දේ තීරණය කිරීම සඳහා ක්ෂේත්ර ෙම ලය කිරීමට සිතියම සම්බන්ධකය ක්ෂේත්ර.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'සබැදුම දේපළ සකසන්න',
    'LBL_MODIFY_PROPERTIES_DESC' => 'URL ලිපින සහ API යතුරු ඇතුළු සෑම සම්බන්ධකය සඳහා ගුණ මානන්න.',
    'LBL_MODIFY_SEARCH_TITLE' => 'සබැදුම සොයන්න කළමනාකරණය',
    'LBL_MODIFY_SEARCH' => 'ගවේෂණය',
    'LBL_MODIFY_SEARCH_DESC' => 'එක් එක් මොඩියුලය සඳහා දත්ත සෙවීම සඳහා භාවිතා කිරීමට සම්බන්ධකය ක්ෂේත්ර තෝරන්න.',
    'LBL_MODULE_NAME' => 'සම්බන්ධක',
    'LBL_NO_PROPERTIES' => 'මෙම සම්බන්ධකය සඳහා කිසිදු මානකල ගුණ ඇත.',
    'LBL_SAVE' => 'සුරකින්න',
    'LBL_SUMMARY' => 'සාරාංශය',
    'LBL_STEP1' => 'සෝදිසි කිරීම සහ දැක්ම දත්ත',
    'LBL_STEP2' => 'වාර්තා ඒකාබද්ධ කරන්න සමග',
    'LBL_TEST_SOURCE' => 'ටෙස්ට් සබැදුම',
    'LBL_TEST_SOURCE_FAILED' => 'ටෙස්ට් අසාර්ථක විය',
    'LBL_TEST_SOURCE_SUCCESS' => 'ටෙස්ට් සාර්ථක',
    'LBL_TITLE' => 'දත්ත ඒකාබද්ධ',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'දෝෂය: මෙයට අතිරේක තොරතුරු වාර්තා කිරීම සඳහා සොයා ගන්නා ලදී.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'මෙයට මොඩියුල මේ සම්බන්ධකය සඳහා සක්රීය කර ඇත. මෙම කනෙක්ටර්ස් සක්රීය කරන්න පිටුවෙහි මෙම සම්බන්ධකය සඳහා මොඩියුලය තෝරන්න.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'දෝෂය: සෙවුම් ක්ෂේත්ර ඇති බව සක්රීය කිසිදු සම්බන්ධක ඇත.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'දෝෂය: මොඩියුලය හා සම්බන්ධකය අර්ථ දක්වා නැත, සොයන්න ක්ෂේත්ර ඇත. මෙම පද්ධති පරිපාලක අමතන්න.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'දෝෂය: ප්රතිඵල ප්රදර්ශනය සඳහා වන වරය කර ඇති බව කිසිදු මොඩියුලය ක්ෂේත්ර ඇත. මෙම පද්ධති පරිපාලක අමතන්න.',
    'LBL_INFO_INLINE' => 'තොරතුරු' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /' /*for 508 compliance fix*/,

);
