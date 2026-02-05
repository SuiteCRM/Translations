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
    'LBL_LIST_ID' => 'අනාගත ලැයිස්තුව ID',
    'LBL_ID' => 'හැඳු.',
    'LBL_TARGET_TRACKER_KEY' => 'ඉලක්ක ට්රැකර් කී',
    'LBL_TARGET_ID' => 'ඉලක්කය ID',
    'LBL_TARGET_TYPE' => 'ඉලක්ක වර්ගය',
    'LBL_ACTIVITY_TYPE' => 'ක්රියාකාරකම් වර්ගය',
    'LBL_ACTIVITY_DATE' => 'ක්රියාකාරකම් දිනය',
    'LBL_RELATED_ID' => 'ආශ්රිත Id',
    'LBL_RELATED_TYPE' => 'සබැඳි වර්ගය',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_MODULE_NAME' => 'ව්යාපාරය ලොග්',
    'LBL_LIST_RECIPIENT_EMAIL' => 'පලමු වරට පිරිනැමු විද්යුත්',
    'LBL_LIST_RECIPIENT_NAME' => 'පලමු වරට පිරිනැමු නම',
    'LBL_ARCHIVED' => 'සංරක්ෂිත',
    'LBL_HITS' => 'වැදුම්',

    'LBL_CAMPAIGN_NAME' => 'නම:',
    'LBL_CAMPAIGN' => 'ව්යාපාරය:',
    'LBL_NAME' => 'නම: ',
    'LBL_INVITEE' => 'සබඳතා',
    'LBL_LIST_CAMPAIGN_NAME' => 'ව්යාපාරය',
    'LBL_LIST_STATUS' => 'තත්වය',
    'LBL_LIST_TYPE' => 'වර්ගය',
    'LBL_LIST_END_DATE' => 'අවසාන දිනය',
    'LBL_DATE_ENTERED' => 'දිනය තේරී පත්විය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_MODIFIED' => 'වන විට නවීකරණය කරන ලද: ',
    'LBL_CREATED' => 'සෑදුවේ: ',
    'LBL_TEAM' => 'කණ්ඩායම: ',
    'LBL_ASSIGNED_TO' => 'කිරීම සඳහා පවරා: ',
    'LBL_CAMPAIGN_START_DATE' => 'ආරම්භක දිනය: ',
    'LBL_CAMPAIGN_END_DATE' => 'අවසාන දිනය: ',
    'LBL_CAMPAIGN_STATUS' => 'තත්වය:',
    'LBL_CAMPAIGN_BUDGET' => 'අයවැය: ',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'අපේක්ෂිත පිරිවැය: ',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'සැබෑ පිරිවැය: ',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'අපේක්ෂිත ආදායම්: ',
    'LBL_CAMPAIGN_TYPE' => 'වර්ගය: ',
    'LBL_CAMPAIGN_OBJECTIVE' => 'අරමුණ: ',
    'LBL_CAMPAIGN_CONTENT' => ' විස්තරය:',
    'LBL_CREATED_LEAD' => 'ඊයම් සාදන්න',
    'LBL_CREATED_CONTACT' => 'ඇමතුම් සාදන්න',
    'LBL_CREATED_OPPORTUNITY' => 'ආවස්ථික නිර්මාණය',
    'LBL_TARGETED_USER' => 'ඉලක්කගත පරිශීලක',
    'LBL_SENT_EMAIL' => 'විද්යුත් යවන්න',
    'LBL_LIST_FORM_TITLE' => 'ඉලක්කගත ප්රචාරණ ව්යාපාර',
    'LBL_LIST_ACTIVITY_DATE' => 'ක්රියාකාරකම් දිනය',
    'LBL_RELATED' => 'ආශ්රිත',
    'LBL_MORE_INFO' => 'වැඩිදුර තොරතුරු',

    'LBL_CAMPAIGNS' => 'ප්රචාරණ ව්යාපාර',
    'LBL_LIST_MARKETING_NAME' => 'අලෙවි Id',

    'LBL_MARKETING_ID' => 'අලෙවි Id',
    'LBL_RELATED_NAME' => 'Related Name',
);
