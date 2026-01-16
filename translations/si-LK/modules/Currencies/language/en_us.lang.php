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
    'LBL_MODULE_NAME' => 'මුදල්',
    'LBL_LIST_FORM_TITLE' => 'මුදල්',
    'LBL_CURRENCY' => 'මුදල්',
    'LBL_ADD' => 'එකතු කරන්න',
    'LBL_MERGE' => 'ඒකාබද්ධ කරන්න',
    'LBL_MERGE_TXT' => 'ඔබ තෝරාගත් මුදල් සිතියම්ගත කිරීමට කැමති මුදල් තෝරන්න. මෙය කතිර ලකුණක් සමග සියලු මුදල් මකා සහ තෝරාගත් මුදල් ඔවුන් සමඟ සම්බන්ධ කිසිදු අගය නියම කරනු ඇත.',
    'LBL_US_DOLLAR' => 'එක්සත් ජනපද ඩොලර්',
    'LBL_DELETE' => 'මකා',
    'LBL_LIST_SYMBOL' => 'ව්යවහාර මුදල් සංකේතය',
    'LBL_LIST_NAME' => 'ව්යවහාර මුදල් නම',
    'LBL_LIST_ISO4217' => 'ISO 4217 සංග්රහයේ',
    'LBL_LIST_ISO4217_HELP' => 'ව්යවහාර මුදල් නම හා මුදල් සංකේතය නිර්වචනය තුන් අක්ෂර ISO 4217 කේතය ඇතුලත් කරන්න.',
    'LBL_UPDATE' => ' යාවත්කාලීන',
    'LBL_LIST_RATE' => 'බවට පරිවර්තනය කිරීමේ අනුපාතිකය',
    'LBL_LIST_RATE_HELP' => 'යුරෝ 0.5 ක බවට පරිවර්තනය කිරීමේ අනුපාතිකය 10 ඇමරිකානු ඩොලර් මිලියන = 5 යුරෝ බවයි.',
    'LBL_LIST_STATUS' => 'තත්වය',
    'LNK_NEW_CONTACT' => 'නව අමතන්න',
    'LNK_NEW_ACCOUNT' => 'නව ගිණුම',
    'LNK_NEW_OPPORTUNITY' => 'නව ඉඩ ප්රස්ථා',
    'LNK_NEW_CASE' => 'නව නඩු',
    'LNK_NEW_NOTE' => 'සටහන හෝ ඇමුණුම් සාදන්න',
    'LNK_NEW_CALL' => 'නව ඇමතුම්',
    'LNK_NEW_EMAIL' => 'නව විද්යුත්',
    'LNK_NEW_MEETING' => 'නව රැස්වීම',
    'LNK_NEW_TASK' => ' කාර්ය සාධක නිර්මාණය',
    'NTC_DELETE_CONFIRMATION' => 'ඔබ මෙම වාර්තාව මැකීමට අවශ්ය බව ඔබට විශ්වාසද? ඔවුන් පිවිස සිටින විට මෙම මුදල් භාවිතා ඕනෑම වාර්තාවක් පද්ධතිය ප්රකෘති මුදල් බවට පරිවර්තනය වනු ඇත. එය අක්රීය කිරීමට තත්ත්වය ඇති කිරීමට වඩා හොඳ විය හැකිය.',
    'LBL_BELOW_MIN' => 'බවට පරිවර්තනය කිරීමේ අනුපාතිකය 0 ඉහත විය යුතුය',
    'currency_status_dom' =>
        array(
            'Active' => 'ක්රියාකාරී',
            'Inactive' => 'අක්රීය',
        ),
    'LBL_CREATED_BY' => 'සෑදුවේ',
    'LBL_EDIT_LAYOUT' => 'සංස්කරණය කරන්න පිරිසැලසුම' /*for 508 compliance fix*/,
);
