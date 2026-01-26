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
    'LBL_REPLY_ADDR' => '"පිලිතුරු දෙන්න-කිරීමට" ෙමරට ලිපිනය: ',
    'LBL_REPLY_NAME' => '"පිලිතුරු දෙන්න-කිරීමට" නම: ',

    'LBL_MODULE_NAME' => 'වි-තැපැල් අලෙවිකරණය',
    'LBL_MODULE_TITLE' => 'විද්යුත් අලෙවි: මුල් පිටුව',
    'LBL_LIST_FORM_TITLE' => 'විද්යුත් අලෙවිකරණ ව්යාපාර',
    'LBL_NAME' => 'නම: ',
    'LBL_LIST_NAME' => 'නම',
    'LBL_LIST_FROM_ADDR' => 'විද්යුත් සිට',
    'LBL_LIST_DATE_START' => 'ආරම්භක දිනය',
    'LBL_LIST_TEMPLATE_NAME' => 'විද්යුත් සැකිල්ල',
    'LBL_LIST_STATUS' => 'තත්වය',
    'LBL_STATUS' => 'තත්වය',
    'LBL_STATUS_TEXT' => 'තත්වය:',
    'LBL_TEMPLATE_NAME' => 'සැකිල්ල නම',
    'LBL_DATE_ENTERED' => 'දිනය තේරී පත්විය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_MODIFIED' => 'විසින් නවීකරණය කරන ලද: ',
    'LBL_CREATED' => 'සෑදුවේ: ',
    'LBL_MESSAGE_FOR' => 'කිරීම සඳහා මෙම පණිවිඩය යවන්න:',

    'LBL_FROM_NAME' => 'නම සිට: ',
    'LBL_FROM_ADDR' => 'විද්යුත් තැපැල් ලිපිනය සිට: ',
    'LBL_DATE_START' => 'ආරම්භක දිනය',
    'LBL_TIME_START' => 'ආරම්භක වේලාව',
    'LBL_START_DATE_TIME' => 'දිනය සහ වේලාව ආරම්භ කරන්න: ',
    'LBL_TEMPLATE' => 'විද්යුත් සැකිල්ල: ',

    'LBL_MODIFIED_BY' => 'විසින් නවීකරණය කරන ලද: ',
    'LBL_CREATED_BY' => 'සෑදුවේ: ',

    'LNK_NEW_CAMPAIGN' => 'ව්යාපාරය නිර්මාණය කරන්න',
    'LNK_CAMPAIGN_LIST' => 'ප්රචාරණ ව්යාපාර',
    'LNK_NEW_PROSPECT_LIST' => 'ඉලක්ක ලැයිස්තුවක් නිර්මාණය',
    'LNK_PROSPECT_LIST_LIST' => 'ඉලක්ක ලැයිස්තු',
    'LNK_NEW_PROSPECT' => 'ඉලක්ක නිර්මාණය',
    'LNK_PROSPECT_LIST' => 'ඉලක්ක',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'වි-තැපැල් අලෙවිකරණය',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'සාදන්න',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'සංස්කරණය',
    'LBL_FROM_MAILBOX' => 'තැපැල් පෙට්ටිය සිට',
    'LBL_FROM_MAILBOX_NAME' => 'තැපැල් පෙට්ටිය භාවිත කරන්න:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'ඉලක්ක ලැයිස්තු',
    'LBL_ALL_PROSPECT_LISTS' => 'ව්යාපාරය සියලු ඉලක්ක ලැයිස්තුව (ව) තෝරා ගැනීමට තෝරන්න.',
    'LBL_RELATED_PROSPECT_LISTS' => 'සියලුම ඉලක්ක ලැයිස්තුව (ව) මෙම පණිවිඩය අදාළ.',
    'LBL_PROSPECT_LIST_NAME' => 'ඉලක්ක ලැයිස්තුව නම',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Targeted Lists',
    'LBL_MODULE_SEND_TEST' => 'Campaign: Send Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campaign: Send Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Please select the campaign messages that you would like to test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Please select the campaign messages that you would like to schedule for distribution on the specified start date and time:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'යවන්න',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'යවන්න',
    'LBL_ERROR_ON_MARKETING' => 'Missing required field(s)',

    'LBL_CAMPAIGN_ID' => 'ව්යාපාරය හැඳුනුම්',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Outbound Email Account ID',
    'LBL_EMAIL_TEMPLATE' => 'විද්යුත් සැකිල්ල',
    'LBL_PROSPECT_LISTS' => 'Prospect Lists',

);
