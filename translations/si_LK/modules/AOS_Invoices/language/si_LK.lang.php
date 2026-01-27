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
    'LBL_NAME' => 'සිරැසිය',
    'LBL_CREATED_USER' => ' පරිශීලක විසින් නිර්මාණය',
    'LBL_MODIFIED_USER' => ' පරිශීලක විසින් නවීකරණය කරන ලද',
    'ERR_DELETE_RECORD' => 'වාර්තාගත ගිණුම මකා දැමීම නියම කළ යුතු ය.',
    'LBL_ACCOUNT_NAME' => 'සිරැසිය',
    'LBL_ACCOUNT' => 'සමාගම:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_ADDRESS_INFORMATION' => 'ලිපිනයේ තොරතුරු',
    'LBL_ANNUAL_REVENUE' => 'වාර්ෂික ආදායම:',
    'LBL_ANY_ADDRESS' => 'ඕනෑම ලිපිනයක්:',
    'LBL_ANY_EMAIL' => 'ඕනෑම වි-තැපෑලක්:',
    'LBL_ANY_PHONE' => 'ඕනෑම දුරකථනයක්:',
    'LBL_RATING' => 'ණය ශ්රේණිය',
    'LBL_ASSIGNED_USER' => 'පරිශීලක',
    'LBL_BILLING_ADDRESS_CITY' => 'අයපත් නගරය:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'අයපත් රට:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'අයපත් තැපැල් කේතය:',
    'LBL_BILLING_ADDRESS_STATE' => 'අයපත් ප්‍රාන්තය:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'අයපත් වීදිය 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'අයපත් වීදිය 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'අයපත් වීදිය 4',
    'LBL_BILLING_ADDRESS_STREET' => 'අයපත් වීදිය:',
    'LBL_BILLING_ADDRESS' => 'අයපත් ලිපිනය:',
    'LBL_ACCOUNT_INFORMATION' => 'දළ විශ්ලේෂණය',
    'LBL_CITY' => 'නගරය:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_COUNTRY' => 'රට:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ගිණුම්',
    'LBL_DUPLICATE' => 'හැකි දෙවන පිටපත ගිණුම',
    'LBL_EMAIL' => 'විද්යුත් තැපෑල:',
    'LBL_EMPLOYEES' => 'සේවක:',
    'LBL_FAX' => 'ෆැක්ස්:',
    'LBL_INDUSTRY' => 'කර්මාන්ත:',
    'LBL_LIST_ACCOUNT_NAME' => 'ගිණුමේ නම',
    'LBL_LIST_CITY' => 'නගරය',
    'LBL_LIST_EMAIL_ADDRESS' => 'විද්යුත් තැපැල් ලිපිනය',
    'LBL_LIST_PHONE' => 'දුරකතන',
    'LBL_LIST_STATE' => 'රජයේ',
    'LBL_MEMBER_OF' => 'මන්ත්රී:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'සාමාජික ආයතන',
    'LBL_OTHER_EMAIL_ADDRESS' => 'වෙනත් විද්යුත් තැපෑල:',
    'LBL_OTHER_PHONE' => 'වෙනත් දුරකථන:',
    'LBL_OWNERSHIP' => 'අයිතිය:',
    'LBL_PARENT_ACCOUNT_ID' => 'මව් ගිණුම් ID',
    'LBL_PHONE_ALT' => 'විකල්ප දුරකථන:',
    'LBL_PHONE_FAX' => 'දුරකථන ෆැක්ස්:',
    'LBL_PHONE_OFFICE' => 'දුරකථන කාර්යාලය:',
    'LBL_PHONE' => 'දුරකතන:',
    'LBL_POSTAL_CODE' => 'තැපැල් කේතය:',
    'LBL_SAVE_ACCOUNT' => 'ගිණුම සුරකින්න',
    'LBL_SHIPPING_ADDRESS_CITY' => 'නැව් නගරය:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'නැව් රට:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'නැව් තැපැල් සංකේතය:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'නැව් රාජ්ය:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'නැව් වීදිය 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'නැව් වීදිය 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'නැව් වීදිය 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'නැව් වීදිය:',
    'LBL_SHIPPING_ADDRESS' => 'බෙදාහැරීමේ ලිපිනය:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Ticker සංකේතය:',
    'LBL_TYPE' => 'වර්ගය:',
    'LBL_WEBSITE' => 'වෙබ් අඩවිය:',
    'LNK_ACCOUNT_LIST' => 'ගිණුම්',
    'LNK_NEW_ACCOUNT' => 'ගිණුම තනන්න',
    'MSG_DUPLICATE' => 'මෙම ගිණුම නිර්මාණය කිරීම විය හැකි අනුපිටපතක් ගිණුමක් සාදා ඇත. ඔබ පහත ලැයිස්තුවෙන් ගිණුමක් තෝරාගත හැක එක්කෝ හෝ ඔබ මීට පෙර පිවිසි දත්ත සමග නව ගිණුම නිර්මාණය කිරීම දිගටම සුරකින්න මත ක්ලික් කරන්න හැක.',
    'MSG_SHOW_DUPLICATES' => 'මෙම ගිණුම නිර්මාණය කිරීම විය හැකි අනුපිටපතක් ගිණුමක් සාදා ඇත. ඔබ කලින් පිවිසි දත්ත සමඟ මෙම නව ගිණුම නිර්මාණය කිරීම දිගටම හෝ ඔබ අවලංගු කරන්න ක්ලික් කරන්න හැක සුරකින්න මත ක්ලික් කරන්න හැක එක්කෝ.',
    'NTC_DELETE_CONFIRMATION' => 'ඔබ මෙම වාර්තාව මැකීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'LBL_LIST_FORM_TITLE' => 'ඉන්වොයිසි ලැයිස්තුව',
    'LBL_MODULE_NAME' => 'ඉන්වොයිසි',
    'LBL_MODULE_TITLE' => 'ඉන්වොයිසි: මුල් පිටුව',
    'LBL_HOMEPAGE_TITLE' => 'මගේ ඉන්වොයිසි',
    'LNK_NEW_RECORD' => 'ඉන්වොයිසිය සාදන්න',
    'LNK_LIST' => 'දැක්ම ඉන්වොයිසි',
    'LBL_SEARCH_FORM_TITLE' => 'සොයන්න ඉන්වොයිසි',
    'LBL_HISTORY_SUBPANEL_TITLE' => ' දැක්ම ඉතිහාසය',
    'LBL_NEW_FORM_TITLE' => 'නව ඉන්වොයිසිය',
    'LBL_TERMS_C' => 'කොන්දේසි',
    'LBL_APPROVAL_ISSUE' => 'අනුමැතිය ගැටලු',
    'LBL_APPROVAL_STATUS' => 'අනුමැතිය තත්ත්වය',
    'LBL_BILLING_ACCOUNT' => 'ගිණුම',
    'LBL_BILLING_CONTACT' => 'සබඳතාව',
    'LBL_EXPIRATION' => 'තුරු වලංගු',
    'LBL_INVOICE_NUMBER' => 'ඉන්වොයිසිය අංකය',
    'LBL_OPPORTUNITY' => 'අවස්ථාව නම',
    'LBL_TEMPLATE_DDOWN_C' => 'ඉන්වොයිසිය ආකෘති',
    'LBL_STAGE' => 'උපුටා අදියර',
    'LBL_TERM' => 'ගෙවීම් කොන්දේසි',
    'LBL_SUBTOTAL_AMOUNT' => 'උප ශීර්ෂයට',
    'LBL_DISCOUNT_AMOUNT' => 'වට්ටම්',
    'LBL_TAX_AMOUNT' => 'බද්ද',
    'LBL_SHIPPING_AMOUNT' => 'නැව්ගත කිරීම',
    'LBL_TOTAL_AMT' => 'මුළු',
    'VALUE' => 'සිරැසිය',
    'LBL_EMAIL_ADDRESSES' => 'ඊ-මේල් ලිපින',
    'LBL_LINE_ITEMS' => 'රේඛා අයිතම',
    'LBL_GRAND_TOTAL' => 'මුලු එකතුව',
    'LBL_QUOTE_NUMBER' => 'උපුටා අංකය',
    'LBL_QUOTE_DATE' => 'උපුටා දිනය',
    'LBL_INVOICE_DATE' => 'ඉන්වොයිසිය දිනය',
    'LBL_DUE_DATE' => 'ගෙවිය යුතු දිනය',
    'LBL_STATUS' => 'තත්වය',
    'LBL_INVOICE_STATUS' => 'වාර්ණාවෙහි තත්වය',
    'LBL_PRODUCT_QUANITY' => 'ප්රමාණ',
    'LBL_PRODUCT_NAME' => 'නිෂ්පාදනය',
    'LBL_PART_NUMBER' => 'කොටස් අංකය',
    'LBL_PRODUCT_NOTE' => 'සටහන',
    'LBL_PRODUCT_DESCRIPTION' => 'විස්තරය',
    'LBL_LIST_PRICE' => 'ලැයිස්තුව',
    'LBL_DISCOUNT_AMT' => 'වට්ටම්',
    'LBL_UNIT_PRICE' => 'විකුණුම් මිල',
    'LBL_TOTAL_PRICE' => 'මුළු',
    'LBL_VAT' => 'බද්ද', //VAT
    'LBL_VAT_AMT' => 'බදු මුදල', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'නිෂ්පාදන ලයින් එකතු කරන්න',
    'LBL_SERVICE_NAME' => 'සේවය',
    'LBL_SERVICE_LIST_PRICE' => 'ලැයිස්තුව',
    'LBL_SERVICE_PRICE' => 'විකුණුම් මිල',
    'LBL_SERVICE_DISCOUNT' => 'වට්ටම්',
    'LBL_ADD_SERVICE_LINE' => 'සේවා ලයින් එකතු කරන්න ',
    'LBL_REMOVE_PRODUCT_LINE' => 'ඉවත් කරන්න',
    'LBL_PRINT_AS_PDF' => ' පී.ඩී.එෆ් ලෙස මුද්රණය',
    'LBL_EMAIL_INVOICE' => 'විද්යුත් ඉන්වොයිසිය',
    'LBL_LIST_NUM' => 'ගණන්',
    'LBL_PDF_NAME' => 'ඉන්වොයිසිය',
    'LBL_EMAIL_NAME' => 'සඳහා ඉන්වොයිසිය',
    'LBL_NO_TEMPLATE' => 'කිසිදු සැකිල්ල \ දෝෂය සොයාගෙන ඇත. ඔබ ඉන්වොයිසිය සැකිල්ල නිර්මාණය කර නොමැති නම්, බලන්න PDF සැකිලි මොඩියුලය යන්න හා එක් නිර්මාණය',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'උප ශීර්ෂයට + බදු',//pre shipping
    'LBL_EMAIL_PDF' => 'විද්යුත් PDF',
    'LBL_ADD_GROUP' => 'සමූහ එකතු කරන්න',
    'LBL_DELETE_GROUP' => 'සමූහ Delete',
    'LBL_GROUP_NAME' => 'සමූහ නම',
    'LBL_GROUP_TOTAL' => 'සමූහයේ මුළු',
    'LBL_SHIPPING_TAX' => 'නැව් බදු',
    'LBL_SHIPPING_TAX_AMT' => 'නැව් බදු',
    'LBL_IMPORT_LINE_ITEMS' => 'ආනයන රේඛා අයිතම',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'උප ශීර්ෂයට (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'වට්ටම් (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'බදු (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'නැව් (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'මුළු (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'නැව් බදු (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'මුළු එකතුව (පෙරනිමි ව්යවහාර මුදල්)',
    'LBL_INVOICE_TO' => 'ඉන්වොයිසිය සඳහා',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'ලයින් අයිතමය කණ්ඩායම්',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
);
