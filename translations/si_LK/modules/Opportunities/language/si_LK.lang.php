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
    'LBL_MODULE_NAME' => 'අවස්ථා',
    'LBL_MODULE_TITLE' => 'අවස්ථා: මුල් පිටුව',
    'LBL_SEARCH_FORM_TITLE' => 'අවස්ථාව සොයන්න',
    'LBL_LIST_FORM_TITLE' => 'අවස්ථාව ලැයිස්තුව',
    'LBL_OPPORTUNITY_NAME' => 'අවස්ථාව නම:',
    'LBL_OPPORTUNITY' => 'අවස්ථාව:',
    'LBL_NAME' => 'අවස්ථාව නම',
    'LBL_INVITEE' => 'සබඳතා',
    'LBL_CURRENCIES' => 'මුදල්',
    'LBL_LIST_OPPORTUNITY_NAME' => 'නම',
    'LBL_LIST_ACCOUNT_NAME' => 'ගිණුමේ නම',
    'LBL_LIST_AMOUNT' => 'අවස්ථාව මුදල',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'ප්රමාණය',
    'LBL_LIST_DATE_CLOSED' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_LIST_SALES_STAGE' => 'විකුණුම් අදියර',
    'LBL_ACCOUNT_ID' => 'ගිණුම් අංකය',
    'LBL_CURRENCY_NAME' => 'ව්යවහාර මුදල් නම',
    'LBL_CURRENCY_SYMBOL' => 'ව්යවහාර මුදල් සංකේතය',

    'UPDATE' => 'අවස්ථාව - ව්යවහාර මුදල් යාවත්කාලීන',
    'LBL_ACCOUNT_NAME' => 'ගිණුමේ නම:',
    'LBL_AMOUNT' => 'අවස්ථාව ප්රමාණය:',
    'LBL_AMOUNT_USDOLLAR' => 'ප්රමාණය:',
    'LBL_CURRENCY' => 'මුදල්:',
    'LBL_DATE_CLOSED' => 'අපේක්ෂිත වසන්න දිනය:',
    'LBL_TYPE' => 'වර්ගය:',
    'LBL_CAMPAIGN' => 'ව්යාපාරය:',
    'LBL_NEXT_STEP' => 'ඊළග පියවර:',
    'LBL_LEAD_SOURCE' => 'ඊයම් මූලාශ්රය:',
    'LBL_SALES_STAGE' => 'විකුණුම් අදියර:',
    'LBL_PROBABILITY' => 'සම්භාවිතා (%):',
    'LBL_DESCRIPTION' => 'විස්තරය:',
    'LBL_DUPLICATE' => 'හැකි දෙවන පිටපත අවස්ථාවක්',
    'MSG_DUPLICATE' => 'ඔබ නිර්මාණය කිරීමට නියමිත මෙම අවස්ථාව වාර්තා දැනටමත් පවතී බව අවස්ථාව වාර්තා අනුපිටපතක් විය හැකිය. සමාන නම් සහිත අවස්ථාවක් වාර්තා පහත ලැයිස්තු ගත කර ඇත. මෙම නව අවස්ථාවක් නිර්මාණය දිගටම Save ක්ලික් කරන්න, හෝ අවස්ථාව නිර්මාණය නොකර මොඩියුලය නැවත අවලංගු කරන්න ක්ලික් කරන්න <br>.',
    'LBL_NEW_FORM_TITLE' => 'ආවස්ථික නිර්මාණය',
    'LNK_NEW_OPPORTUNITY' => 'ආවස්ථික නිර්මාණය',
    'LNK_OPPORTUNITY_LIST' => 'දැක්ම අවස්ථා',
    'ERR_DELETE_RECORD' => 'වාර්තාගත අවස්ථාව ඉවත් කිරීමට නියම කළ යුතු ය.',
    'LBL_TOP_OPPORTUNITIES' => 'මගේ හොඳම විවෘත අවස්ථා',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'ඔබ මෙම ව්යාපෘතිය මේ අවස්ථාව ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'අවස්ථා',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ඉතිහාසය',

    'LBL_LEADS_SUBPANEL_TITLE' => 'ඇද්ද',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ලිපි ලේඛන',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'ව්යාපෘති',
    'LBL_ASSIGNED_TO_NAME' => ' පවරා:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'පවරා පරිශීලක',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'මගේ සංවෘත අවස්ථා',
    'LBL_TOTAL_OPPORTUNITIES' => 'මුළු අවස්ථා',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'සංවෘත වොන් අවස්ථා',
    'LBL_ASSIGNED_TO_ID' => 'පවරා පරිශීලක:',
    'LBL_MODIFIED_NAME' => 'පරිශීලක නාමය නවීකරණය කරන ලද',
    'LBL_CREATED_USER' => 'නිර්මාණය කරන ලද්දේ පරිශීලක',
    'LBL_MODIFIED_USER' => 'නවීකරණය කරන ලද පරිශීලක',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'ප්රචාරණ ව්යාපාර',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'ව්යාපෘති',
    'LNK_IMPORT_OPPORTUNITIES' => 'ආනයන අවස්ථා',
    'LBL_EDITLAYOUT' => 'සංස්කරණය කරන්න පිරිසැලසුම' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'කොන්ත්රාත්',
    'LBL_AOS_QUOTES' => 'මිල කැඳවීම්',
);
