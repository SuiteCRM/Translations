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
    'LBL_ASSIGNED_TO_NAME' => 'කොන්ත්රාත් කළමනාකරු',
    'LBL_CONTRACT_ACCOUNT' => 'ගිණුම',
    'LBL_OPPORTUNITY' => 'අවස්ථාව',
    'LBL_ID' => 'හැඳු.',
    'LBL_DATE_ENTERED' => 'සෑදූ දිනය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_MODIFIED' => ' වන විට නවීකරණය කරන ලද',
    'LBL_MODIFIED_NAME' => ' නම වන විට නවීකරණය කරන ලද',
    'LBL_CREATED' => 'සෑදුවේ',
    'LBL_DESCRIPTION' => 'විස්තරය',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_NAME' => 'කොන්ත්රාත් සිරැසිය',
    'LBL_CREATED_USER' => ' පරිශීලක විසින් නිර්මාණය',
    'LBL_MODIFIED_USER' => ' පරිශීලක විසින් නවීකරණය කරන ලද',
    'LBL_LIST_NAME' => 'නම',
    'LBL_LIST_FORM_TITLE' => 'කොන්ත්රාත් ලැයිස්තුව',
    'LBL_MODULE_NAME' => 'කොන්ත්රාත්',
    'LBL_MODULE_TITLE' => 'කොන්ත්රාත්: මුල් පිටුව',
    'LBL_HOMEPAGE_TITLE' => 'මගේ සම්බන්ධතා',
    'LNK_NEW_RECORD' => 'කොන්ත්රාත් සාදන්න',
    'LNK_LIST' => 'දැක්ම කොන්ත්රාත්',
    'LBL_SEARCH_FORM_TITLE' => 'සොයන්න කොන්ත්රාත්',
    'LBL_HISTORY_SUBPANEL_TITLE' => ' දැක්ම ඉතිහාසය',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_NEW_FORM_TITLE' => 'නව ගිවිසුම්',
    'LBL_CONTRACT_NAME' => 'කොන්ත්රාත් නම',
    'LBL_REFERENCE_CODE ' => 'විමර්ශන සංග්රහය ',
    'LBL_START_DATE' => 'ආරම්භක දිනය',
    'LBL_END_DATE' => 'අවසාන දිනය',
    'LBL_TOTAL_CONTRACT_VALUE' => 'කොන්ත්රාත් අගය',
    'LBL_STATUS' => 'තත්වය',
    'LBL_CUSTOMER_SIGNED_DATE' => 'පාරිභෝගික අත්සන් දිනය',
    'LBL_COMPANY_SIGNED_DATE' => 'සමාගම අත්සන් දිනය',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'බලපත්රය අළුත් කිරීම මතක් දිනය',
    'LBL_CONTRACT_TYPE' => 'ගිවිසුම් වර්ගය',
    'LBL_CONTACT' => 'සබඳතාව',
    'LBL_ADD_GROUP' => 'සමූහ එකතු කරන්න',
    'LBL_DELETE_GROUP' => 'සමූහ Delete',
    'LBL_GROUP_NAME' => 'සමූහ නම',
    'LBL_GROUP_TOTAL' => 'සමූහයේ මුළු',
    'LBL_PRODUCT_QUANITY' => 'ප්රමාණ',
    'LBL_PRODUCT_NAME' => 'නිෂ්පාදනය',
    'LBL_PART_NUMBER' => 'කොටස් අංකය',
    'LBL_PRODUCT_NOTE' => 'සටහන',
    'LBL_PRODUCT_DESCRIPTION' => 'විස්තරය',
    'LBL_LIST_PRICE' => 'ලැයිස්තුව',
    'LBL_DISCOUNT_AMT' => 'වට්ටම්',
    'LBL_UNIT_PRICE' => 'විකුණුම් මිල',
    'LBL_TOTAL_PRICE' => 'මුළු',
    'LBL_VAT' => 'බද්ද',
    'LBL_VAT_AMT' => 'බදු මුදල',
    'LBL_SERVICE_NAME' => 'සේවය',
    'LBL_SERVICE_LIST_PRICE' => 'ලැයිස්තුව',
    'LBL_SERVICE_PRICE' => 'විකුණුම් මිල',
    'LBL_SERVICE_DISCOUNT' => 'වට්ටම්',
    'LBL_LINE_ITEMS' => 'රේඛා අයිතම',
    'LBL_SUBTOTAL_AMOUNT' => 'උප ශීර්ෂයට',
    'LBL_DISCOUNT_AMOUNT' => 'වට්ටම්',
    'LBL_TAX_AMOUNT' => 'බද්ද',
    'LBL_SHIPPING_AMOUNT' => 'නැව්ගත කිරීම',
    'LBL_TOTAL_AMT' => 'මුළු',
    'LBL_GRAND_TOTAL' => 'මුලු එකතුව',
    'LBL_SHIPPING_TAX' => 'නැව් බදු',
    'LBL_SHIPPING_TAX_AMT' => 'නැව් බදු',
    'LBL_ADD_PRODUCT_LINE' => 'නිෂ්පාදන ලයින් එකතු කරන්න',
    'LBL_ADD_SERVICE_LINE' => 'සේවා ලයින් එකතු කරන්න ',
    'LBL_PRINT_AS_PDF' => ' පී.ඩී.එෆ් ලෙස මුද්රණය',
    'LBL_EMAIL_PDF' => 'විද්යුත් PDF',
    'LBL_PDF_NAME' => 'කොන්ත්රාත්',
    'LBL_EMAIL_NAME' => 'සඳහා වන කොන්ත්රාත්තුව',
    'LBL_NO_TEMPLATE' => 'කිසිදු සැකිල්ල \ දෝෂය සොයාගෙන ඇත. ඔබ කොන්ත්රාත් සැකිල්ල නිර්මාණය කර නොමැති නම්, බලන්න PDF සැකිලි මොඩියුලය යන්න හා එක් නිර්මාණය',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Contract Value (Default Currency)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'උප ශීර්ෂයට (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'වට්ටම් (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'බදු (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'නැව් (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'මුළු (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'නැව් බදු (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'මුළු එකතුව (පෙරනිමි ව්යවහාර මුදල්)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'ලයින් අයිතමය කණ්ඩායම්',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
);
