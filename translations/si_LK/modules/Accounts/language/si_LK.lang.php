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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ලිපි ලේඛන',
    // Dashlet Categories
    'LBL_CHARTS' => 'ප්රස්ථාර',
    'LBL_DEFAULT' => 'අදහස්',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'ඔබ ගිණුම මකාදැමීමට කිරීම සඳහා වාර්තාගත අංකය සඳහන් කළ යුතුය.',
    'LBL_ACCOUNT_INFORMATION' => 'දළ විශ්ලේෂණය', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'ගිණුමේ නම:',
    'LBL_ACCOUNT' => 'ගිණුම:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_ADDRESS_INFORMATION' => 'ලිපිනයේ තොරතුරු',
    'LBL_ANNUAL_REVENUE' => 'වාර්ෂික ආදායම:',
    'LBL_ANY_ADDRESS' => 'ඕනෑම ලිපිනයක්:',
    'LBL_ANY_EMAIL' => 'ඕනෑම වි-තැපෑලක්:',
    'LBL_ANY_PHONE' => 'ඕනෑම දුරකථනයක්:',
    'LBL_ASSIGNED_TO_NAME' => ' පවරා:',
    'LBL_ASSIGNED_TO_ID' => 'පවරා පරිශීලක:',
    'LBL_BILLING_ADDRESS_CITY' => 'අයපත් නගරය:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'අයපත් රට:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'අයපත් තැපැල් කේතය:',
    'LBL_BILLING_ADDRESS_STATE' => 'අයපත් ප්‍රාන්තය:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'අයපත් වීදිය 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'අයපත් වීදිය 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'අයපත් වීදිය 4',
    'LBL_BILLING_ADDRESS_STREET' => 'අයපත් වීදිය:',
    'LBL_BILLING_ADDRESS' => 'අයපත් ලිපිනය:',
    'LBL_BUGS_SUBPANEL_TITLE' => ' බග්ස්',
    'LBL_CAMPAIGN_ID' => 'ව්යාපාරය හැඳුනුම්',
    'LBL_CASES_SUBPANEL_TITLE' => ' නඩු',
    'LBL_CITY' => 'නගරය:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_COUNTRY' => 'රට:',
    'LBL_DATE_ENTERED' => 'සෑදූ දිනය:',
    'LBL_DATE_MODIFIED' => 'දිනය නවීකරණය කරන ලද:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ගිණුම්',
    'LBL_DESCRIPTION_INFORMATION' => 'විස්තරය තොරතුරු',
    'LBL_DESCRIPTION' => 'විස්තරය:',
    'LBL_DUPLICATE' => 'හැකි දෙවන පිටපත ගිණුම',
    'LBL_EMAIL' => 'විද්යුත් තැපැල් ලිපිනය:',
    'LBL_EMAIL_OPT_OUT' => 'විද්යුත් ඉවත්:',
    'LBL_EMAIL_ADDRESSES' => 'ඊ-මේල් ලිපින',
    'LBL_EMPLOYEES' => 'සේවක:',
    'LBL_FAX' => 'ෆැක්ස්:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ඉතිහාසය',
    'LBL_HOMEPAGE_TITLE' => 'මගේ ගිණුම්',
    'LBL_INDUSTRY' => 'කර්මාන්ත:',
    'LBL_INVALID_EMAIL' => 'වලංගු නොවන විද්යුත් තැපෑල:',
    'LBL_INVITEE' => 'සබඳතා',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ඇද්ද',
    'LBL_LIST_ACCOUNT_NAME' => 'නම',
    'LBL_LIST_CITY' => 'නගරය',
    'LBL_LIST_CONTACT_NAME' => 'සබඳතාවේ නම',
    'LBL_LIST_EMAIL_ADDRESS' => 'විද්යුත් තැපැල් ලිපිනය',
    'LBL_LIST_FORM_TITLE' => 'ගිණුම ලැයිස්තුව',
    'LBL_LIST_PHONE' => 'දුරකතන',
    'LBL_LIST_STATE' => 'රජයේ',
    'LBL_MEMBER_OF' => 'මන්ත්රී:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'සාමාජික ආයතන',
    'LBL_MODULE_NAME' => 'ගිණුම්',
    'LBL_MODULE_TITLE' => 'ගිණුම්: මුල් පිටුව',
    'LBL_MODULE_ID' => 'ගිණුම්',
    'LBL_NAME' => 'නම:',
    'LBL_NEW_FORM_TITLE' => 'නව ගිණුම',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'අවස්ථා',
    'LBL_OTHER_EMAIL_ADDRESS' => 'වෙනත් විද්යුත් තැපෑල:',
    'LBL_OTHER_PHONE' => 'වෙනත් දුරකථන:',
    'LBL_OWNERSHIP' => 'අයිතිය:',
    'LBL_PARENT_ACCOUNT_ID' => 'මව් ගිණුම් ID',
    'LBL_PHONE_ALT' => 'විකල්ප දුරකථන:',
    'LBL_PHONE_FAX' => 'දුරකථන ෆැක්ස්:',
    'LBL_PHONE_OFFICE' => 'කාර්යාලය දුරකථන:',
    'LBL_PHONE' => 'දුරකතන:',
    'LBL_POSTAL_CODE' => 'තැපැල් කේතය:',
    'LBL_PRODUCTS_TITLE' => 'නිෂ්පාදන',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'ව්යාපෘති',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'අප අමතන්න පිටපත්',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'පිටපත්...',
    'LBL_RATING' => 'ණය ශ්රේණිය:',
    'LBL_SAVE_ACCOUNT' => 'ගිණුම සුරකින්න',
    'LBL_SEARCH_FORM_TITLE' => 'ගිණුම සොයන්න',
    'LBL_SHIPPING_ADDRESS_CITY' => 'නැව් නගරය:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'නැව් රට:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'නැව් තැපැල් සංකේතය:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'නැව් රාජ්ය:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'නැව් වීදිය 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'නැව් වීදිය 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'නැව් වීදිය 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'නැව් වීදිය:',
    'LBL_SHIPPING_ADDRESS' => 'බෙදාහැරීමේ ලිපිනය:',
    'LBL_SIC_CODE' => 'SIC සංකේතය:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Ticker සංකේතය:',
    'LBL_TYPE' => 'වර්ගය:',
    'LBL_WEBSITE' => 'වෙබ් අඩවිය:',
    'LBL_CAMPAIGNS' => 'ප්රචාරණ ව්යාපාර',
    'LNK_ACCOUNT_LIST' => 'දැක්ම ගිණුම්',
    'LNK_NEW_ACCOUNT' => 'ගිණුම තනන්න',
    'LNK_IMPORT_ACCOUNTS' => 'ආනයන ගිණුම්',
    'MSG_DUPLICATE' => 'ඔබ නිර්මාණය කිරීමට නියමිත ගිණුම වාර්තා දැනටමත් පවතින බව ගිණුමක් වාර්තා අනුපිටපතක් විය හැකිය. සමාන නම් සහිත ගිණුම වාර්තා පහත ලැයිස්තු ගත කර ඇත. <Br>මෙම නව ගිණුම නිර්මාණය කිරීම දිගටම ගිණුමක් නිර්මාණය කරන්න ක්ලික් කරන්න, හෝ පහත ලැයිස්තු ගත කර, දැනට පවතින ගිණුමක් තෝරන්න.',
    'MSG_SHOW_DUPLICATES' => 'ඔබ නිර්මාණය කිරීමට නියමිත ගිණුම වාර්තා දැනටමත් පවතින බව ගිණුමක් වාර්තා අනුපිටපතක් විය හැකිය. සමාන නම් සහිත ගිණුම වාර්තා පහත ලැයිස්තු ගත කර ඇත. <Br>මෙම නව ගිණුම නිර්මාණය කිරීම දිගටම හෝ ගිණුමක් නිර්මාණය නොකර මොඩියුලය නැවත අවලංගු කරන්න ක්ලික් කරන්න Save ක්ලික් කරන්න.',
    'LBL_ASSIGNED_USER_NAME' => ' පවරා:',
    'LBL_PROSPECT_LIST' => 'අනාගත ලැයිස්තුව',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'ගිණුම්',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'ව්යාපෘති',
    //For export labels
    'LBL_PARENT_ID' => 'මව් හැඳුනුම්',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'මිලදී ගත් භාණ්ඩ හා සේවා',

    'LBL_AOS_CONTRACTS' => 'කොන්ත්රාත්',
    'LBL_AOS_INVOICES' => 'ඉන්වොයිසි',
    'LBL_AOS_QUOTES' => 'මිල කැඳවීම්',
    'LBL_LIST_WEBSITE' => 'website',
);
