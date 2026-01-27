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
    'LBL_MODULE_NAME' => 'විකිණීමට',
    'LBL_MODULE_TITLE' => 'Sale විකිණීමට: මුල් පිටුව',
    'LBL_SEARCH_FORM_TITLE' => 'Sale විකිණීමට සොයන්න',
    'LBL_LIST_FORM_TITLE' => 'Sale විකිණීමට ලැයිස්තුව',
    'LBL_NAME' => 'Sale විකිණීමට නම',
    'LBL_LIST_SALE_NAME' => 'නම',
    'LBL_LIST_ACCOUNT_NAME' => 'ගිණුමේ නම',
    'LBL_LIST_AMOUNT' => 'ප්රමාණය',
    'LBL_LIST_DATE_CLOSED' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_LIST_SALE_STAGE' => 'විකුණුම් අදියර',
    'LBL_ACCOUNT_ID' => 'ගිණුම් අංකය',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_NAME',
    //END DON'T CONVERT
    'LBL_ACCOUNT_NAME' => 'ගිණුමේ නම:',
    'LBL_AMOUNT' => 'ප්රමාණය:',
    'LBL_AMOUNT_USDOLLAR' => 'ප්රමාණය ඇමරිකානු ඩොලර් මිලියන:',
    'LBL_CURRENCY' => 'මුදල්:',
    'LBL_DATE_CLOSED' => 'අපේක්ෂිත වසන්න දිනය:',
    'LBL_TYPE' => 'වර්ගය:',
    'LBL_CAMPAIGN' => 'ව්යාපාරය:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ඇද්ද',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'ව්යාපෘති',
    'LBL_NEXT_STEP' => 'ඊළග පියවර:',
    'LBL_LEAD_SOURCE' => 'ඊයම් මූලාශ්රය:',
    'LBL_SALES_STAGE' => 'විකුණුම් අදියර:',
    'LBL_PROBABILITY' => 'සම්භාවිතා (%):',
    'LBL_DESCRIPTION' => 'විස්තරය:',
    'LBL_DUPLICATE' => 'හැකි දෙවන පිටපත Sale විකිණීමට',
    'MSG_DUPLICATE' => 'ඔබ නිර්මාණය කිරීමට නියමිත මෙම Sale විකිණීමට වාර්තාව මේ වන විටත් පවතින බව විකිණීම වාර්තා අනුපිටපතක් විය හැකිය. සමාන නම් සහිත Sale විකිණීමට වාර්තා පහත ලැයිස්තු ගත කර ඇත. <Br',
    'LBL_NEW_FORM_TITLE' => 'Sale විකිණීමට සාදන්න',
    'ERR_DELETE_RECORD' => 'වාර්තාගත විකිණීම මැකීමට නියම කළ යුතු ය.',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'විකිණීමට',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ඉතිහාසය',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_ASSIGNED_TO_NAME' => 'පරිශීලක:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'පවරා පරිශීලක',
    'LBL_ASSIGNED_TO_ID' => 'හැඳුනුම් පවරා',
    'LBL_MODIFIED_NAME' => 'පරිශීලක නාමය නවීකරණය කරන ලද',
    'LBL_SALE_INFORMATION' => 'Sale විකිණීමට තොරතුරු',
    'LBL_CURRENCY_NAME' => 'ව්යවහාර මුදල් නම',
    'LBL_CURRENCY_SYMBOL' => 'ව්යවහාර මුදල් සංකේතය',
    'LBL_EDIT_BUTTON' => 'සංස්කරණය',
    'LBL_REMOVE' => 'ඉවත් කරන්න',

);
