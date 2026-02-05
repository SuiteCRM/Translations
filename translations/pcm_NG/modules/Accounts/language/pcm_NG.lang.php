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
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents dem',
    // Dashlet Categories
    'LBL_CHARTS' => 'Charts',
    'LBL_DEFAULT' => 'Views',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'You must specify a record number in order to delete the account.',
    'LBL_ACCOUNT_INFORMATION' => 'Overview', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACCOUNT' => 'Account:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address information',
    'LBL_ANNUAL_REVENUE' => 'Annual revenue:',
    'LBL_ANY_ADDRESS' => 'Any address:',
    'LBL_ANY_EMAIL' => 'Any email:',
    'LBL_ANY_PHONE' => 'Any phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Dem give am:',
    'LBL_ASSIGNED_TO_ID' => 'User wey dem give am to:',
    'LBL_BILLING_ADDRESS_CITY' => 'Billing City:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Billing Country:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Billing Postal Code:',
    'LBL_BILLING_ADDRESS_STATE' => 'Billing State:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Billing Address:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs dem',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DATE_ENTERED' => 'De day wey dem create am:',
    'LBL_DATE_MODIFIED' => 'De day wey dem modify am:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Accounts',
    'LBL_DESCRIPTION_INFORMATION' => 'Description Information',
    'LBL_DESCRIPTION' => 'Now here you go sabi as the thing be:',
    'LBL_DUPLICATE' => 'Possible Duplicate Account',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOMEPAGE_TITLE' => 'My Accounts',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Contacts',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads dem',
    'LBL_LIST_ACCOUNT_NAME' => 'Wetin be your name',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email Address',
    'LBL_LIST_FORM_TITLE' => 'Account List',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'State',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_MODULE_NAME' => 'Accounts',
    'LBL_MODULE_TITLE' => 'Accounts: Home',
    'LBL_MODULE_ID' => 'Accounts',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'New Account',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => 'Parent Account ID',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Office phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_POSTAL_CODE' => 'Postal code:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects dem',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copy to Contacts',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copy...',
    'LBL_RATING' => 'Rating:',
    'LBL_SAVE_ACCOUNT' => 'Save account',
    'LBL_SEARCH_FORM_TITLE' => 'Account Search',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Shipping city:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shipping Country:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Shipping postal code:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Shipping state:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Street 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Street 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping street 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Street:',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Addres:',
    'LBL_SIC_CODE' => 'SIC Code:',
    'LBL_STATE' => 'State or Region:',
    'LBL_TICKER_SYMBOL' => 'Ticker Sign:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LBL_CAMPAIGNS' => 'Campaigns dem',
    'LNK_ACCOUNT_LIST' => 'View Accounts',
    'LNK_NEW_ACCOUNT' => 'Create account',
    'LNK_IMPORT_ACCOUNTS' => 'Import Accounts',
    'MSG_DUPLICATE' => 'The account wey you won open fit be double of account wey dem don open before. Account wey get the same name dey for list here.<br>Click Create Accunt to continu to open this new accunt, or you fit select accunt wey dem don open before wey dey list here.',
    'MSG_SHOW_DUPLICATES' => 'The account record wey you wan create fih be copy copy of another account record wey don already dey before. Account records wey contain similar names dey below. <br> click save if you still wan continue ti create this new account, or click cancel if you wan return to the module when you never create the account.',
    'LBL_ASSIGNED_USER_NAME' => 'Dem give am:',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Accounts',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects dem',
    //For export labels
    'LBL_PARENT_ID' => 'Parent ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Products and Services Purchased',

    'LBL_AOS_CONTRACTS' => 'Contracts dem',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Quotes',
    'LBL_LIST_WEBSITE' => 'website',
);
