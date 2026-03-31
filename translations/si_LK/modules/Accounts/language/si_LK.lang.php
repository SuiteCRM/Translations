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
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ලේඛන',
    // Dashlet Categories
    'LBL_CHARTS' => 'ප්‍රස්ථාර',
    'LBL_DEFAULT' => 'අදහස්',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'ඔබ ගිණුම මකාදැමීමට කිරීම සඳහා වාර්තාගත අංකය සඳහන් කළ යුතුය.',
    'LBL_ACCOUNT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACCOUNT' => 'ගිණුම:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'කටයුතු',
    'LBL_ADDRESS_INFORMATION' => 'ලිපිනයේ තොරතුරු',
    'LBL_ANNUAL_REVENUE' => 'වාර්ෂික ආදායම:',
    'LBL_ANY_ADDRESS' => 'ඕනෑම ලිපිනයක්:',
    'LBL_ANY_EMAIL' => 'ඕනෑම වි-තැපෑලක්:',
    'LBL_ANY_PHONE' => 'ඕනෑම දුරකථනයක්:',
    'LBL_ASSIGNED_TO_NAME' => ' පවරා:',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
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
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DATE_ENTERED' => 'දිනය නිර්මාණය කරන ලද්දේ:',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Accounts',
    'LBL_DESCRIPTION_INFORMATION' => 'Description Information',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DUPLICATE' => 'Possible Duplicate Account',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'විද්යුත් ඉවත්:',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOMEPAGE_TITLE' => 'මගේ ගිණුම්',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_INVALID_EMAIL' => 'වලංගු නොවන විද්යුත් තැපෑල:',
    'LBL_INVITEE' => 'සබඳතා',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ඇද්ද',
    'LBL_LIST_ACCOUNT_NAME' => ' නම',
    'LBL_LIST_CITY' => ' නගරය',
    'LBL_LIST_CONTACT_NAME' => ' ඇමතුම් නම',
    'LBL_LIST_EMAIL_ADDRESS' => 'වි-තැපැල් ලිපිනය',
    'LBL_LIST_FORM_TITLE' => 'ගිණුම ලැයිස්තුව',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'රජයේ',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_MODULE_NAME' => 'Accounts',
    'LBL_MODULE_TITLE' => 'ගිණුම්: මුල් පිටුව',
    'LBL_MODULE_ID' => 'Accounts',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'නව ගිණුම',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'අවස්ථා',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => 'Parent Account ID',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Office Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'අප අමතන්න පිටපත්',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'පිටපත්...',
    'LBL_RATING' => 'ණය ශ්රේණිය:',
    'LBL_SAVE_ACCOUNT' => 'Save Account',
    'LBL_SEARCH_FORM_TITLE' => 'ගිණුම සොයන්න',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Shipping City:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shipping Country:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Shipping Postal Code:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Shipping State:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Street 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Street 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping Street 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Street:',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Address:',
    'LBL_SIC_CODE' => 'SIC සංකේතය:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LBL_CAMPAIGNS' => 'ප්රචාරණ ව්යාපාර',
    'LNK_ACCOUNT_LIST' => 'දැක්ම ගිණුම්',
    'LNK_NEW_ACCOUNT' => 'ගිණුම සාදන්න',
    'LNK_IMPORT_ACCOUNTS' => 'ආනයන ගිණුම්',
    'MSG_DUPLICATE' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Create Account to continue creating this new account, or select an existing account listed below.',
    'MSG_SHOW_DUPLICATES' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Save to continue creating this new account, or click Cancel to return to the module without creating the account.',
    'LBL_ASSIGNED_USER_NAME' => ' පවරා:',
    'LBL_PROSPECT_LIST' => 'අනාගත ලැයිස්තුව',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Accounts',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    //For export labels
    'LBL_PARENT_ID' => 'මව් හැඳුනුම්',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'මිලදී ගත් භාණ්ඩ හා සේවා',

    'LBL_AOS_CONTRACTS' => 'කොන්ත්රාත්',
    'LBL_AOS_INVOICES' => 'වාර්ණා',
    'LBL_AOS_QUOTES' => 'Quotes',
    'LBL_LIST_WEBSITE' => 'website',
);
