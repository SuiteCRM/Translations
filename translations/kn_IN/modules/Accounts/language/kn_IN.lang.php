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
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ದಾಸ್ತವೇಜುಗಳು',
    // Dashlet Categories
    'LBL_CHARTS' => 'ಚಾರ್ಟ್‌ಗಳು',
    'LBL_DEFAULT' => 'Views',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'You must specify a record number in order to delete the account.',
    'LBL_ACCOUNT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'ಖಾತೆಯ ಹೆಸರು:',
    'LBL_ACCOUNT' => 'Account:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ಚಟುವಟಿಕೆ',
    'LBL_ADDRESS_INFORMATION' => 'ವಿಳಾಸ ಮಾಹಿತಿ',
    'LBL_ANNUAL_REVENUE' => 'ವಾರ್ಷಿಕ ಆದಾಯ:',
    'LBL_ANY_ADDRESS' => 'ಯಾವುದಾದರೂ ವಿಳಾಸ:',
    'LBL_ANY_EMAIL' => 'ಯಾವುದಾದರೂ ಮಿಂಚೆ:',
    'LBL_ANY_PHONE' => 'ಯಾವುದಾದರೂ ದೂರವಾಣಿ:',
    'LBL_ASSIGNED_TO_NAME' => 'ಇವರಿಗೆ ನಿಯೋಜಿಸಲಾಗಿದೆ:',
    'LBL_ASSIGNED_TO_ID' => 'ನಿಯೋಜಿತ ಬಳಕೆದಾರ:',
    'LBL_BILLING_ADDRESS_CITY' => 'ಬಿಲ್ಲಿಂಗ್ ನಗರ:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'ಬಿಲ್ಲಿಂಗ್ ದೇಶ:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'ಬಿಲ್ಲಿಂಗ್ ಪಿನ್ ಕೋಡ್:',
    'LBL_BILLING_ADDRESS_STATE' => 'ಬಿಲ್ಲಿಂಗ್ ರಾಜ್ಯ:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'ಬಿಲ್ಲಿಂಗ್ ರಸ್ತೆ 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'ಬಿಲ್ಲಿಂಗ್ ರಸ್ತೆ 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'ಬಿಲ್ಲಿಂಗ್ ರಸ್ತೆ 4',
    'LBL_BILLING_ADDRESS_STREET' => 'ಬಿಲ್ಲಿಂಗ್ ರಸ್ತೆ:',
    'LBL_BILLING_ADDRESS' => 'ಬಿಲ್ಲಿಂಗ್ ವಿಳಾಸ:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'ದೋಷಗಳು',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CASES_SUBPANEL_TITLE' => 'ಪ್ರಕರಣಗಳು',
    'LBL_CITY' => 'ನಗರ:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ಸಂಪರ್ಕಗಳು',
    'LBL_COUNTRY' => 'ದೇಶ:',
    'LBL_DATE_ENTERED' => 'ರಚಿಸಲಾದ ದಿನಾಂಕ:',
    'LBL_DATE_MODIFIED' => 'ತಿದ್ದಲಾದ ದಿನಾಂಕ:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ಖಾತೆಗಳು',
    'LBL_DESCRIPTION_INFORMATION' => 'ವಿವರಣೆ ಮಾಹಿತಿ',
    'LBL_DESCRIPTION' => 'ವಿವರಣೆ:',
    'LBL_DUPLICATE' => 'ನಕಲಿ ಖಾತೆಯ ಸಾಧ್ಯತೆ',
    'LBL_EMAIL' => 'ಇಮೇಲ್ ವಿಳಾಸ:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_EMPLOYEES' => 'ಉದ್ಯೋಗಿಗಳು:',
    'LBL_FAX' => 'ಫ್ಯಾಕ್ಸ್:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ಇತಿಹಾಸ',
    'LBL_HOMEPAGE_TITLE' => 'My Accounts',
    'LBL_INDUSTRY' => 'ಉದ್ದಿಮೆ:',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'ಸಂಪರ್ಕಗಳು',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ಲೀಡ್ಸ್',
    'LBL_LIST_ACCOUNT_NAME' => 'ಹೆಸರು',
    'LBL_LIST_CITY' => 'ನಗರ',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_EMAIL_ADDRESS' => 'ಮಿಂಚೆ ವಿಳಾಸ',
    'LBL_LIST_FORM_TITLE' => 'Account List',
    'LBL_LIST_PHONE' => 'ದೂರವಾಣಿ',
    'LBL_LIST_STATE' => 'ಸ್ಥಿತಿ',
    'LBL_MEMBER_OF' => 'ಇದರ ಸದಸ್ಯ:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'ಸದಸ್ಯ ಸಂಸ್ಥೆಗಳು',
    'LBL_MODULE_NAME' => 'ಖಾತೆಗಳು',
    'LBL_MODULE_TITLE' => 'Accounts: Home',
    'LBL_MODULE_ID' => 'ಖಾತೆಗಳು',
    'LBL_NAME' => 'ಹೆಸರು:',
    'LBL_NEW_FORM_TITLE' => 'New Account',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'ಅವಕಾಶಗಳು',
    'LBL_OTHER_EMAIL_ADDRESS' => 'ಇತರೇ ಮಿಂಚೆ:',
    'LBL_OTHER_PHONE' => 'ಇತರೆ ದೂರವಾಣಿ:',
    'LBL_OWNERSHIP' => 'ಮಾಲೀಕತ್ವ:',
    'LBL_PARENT_ACCOUNT_ID' => 'ಪೋಷಕ ಖಾತೆಯ ಐಡಿ',
    'LBL_PHONE_ALT' => 'ಪರ್ಯಾಯ ಫೋನ್ ಸಂಖ್ಯೆ:',
    'LBL_PHONE_FAX' => 'ಫೋನ್ ಫ್ಯಾಕ್ಸ್:',
    'LBL_PHONE_OFFICE' => 'ಕಚೇರಿಯ ಫೋನ್:',
    'LBL_PHONE' => 'ಫೋನ್:',
    'LBL_POSTAL_CODE' => 'ಪೋಸ್ಟಲ್ ಕೋಡ್:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'ಯೋಜನೆಗಳು',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copy to Contacts',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copy...',
    'LBL_RATING' => 'Rating:',
    'LBL_SAVE_ACCOUNT' => 'ಖಾತೆಯನ್ನು ಉಳಿಸಿ',
    'LBL_SEARCH_FORM_TITLE' => 'Account Search',
    'LBL_SHIPPING_ADDRESS_CITY' => 'ಸಾಗಣಿಕೆಯ ನಗರ:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'ಸಾಗಣಿಕೆಯ ದೇಶ:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'ಸಾಗಣಿಕೆಯ ಪೋಸ್ಟಲ್ ಕೋಡ್:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'ಸಾಗಣಿಕೆಯ ರಾಜ್ಯ:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'ಸಾಗಣಿಕೆಯ ರಸ್ತೆ 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'ಸಾಗಣಿಕೆಯ ರಸ್ತೆ 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'ಸಾಗಣಿಕೆಯ ರಸ್ತೆ 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'ಸಾಗಣಿಕೆಯ ರಸ್ತೆ:',
    'LBL_SHIPPING_ADDRESS' => 'ಸಾಗಣಿಕೆಯ ವಿಳಾಸ:',
    'LBL_SIC_CODE' => 'SIC Code:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'ಟಿಕ್ಕರ್ ಚಿಹ್ನೆ:',
    'LBL_TYPE' => 'ಮಾದರಿ:',
    'LBL_WEBSITE' => 'ಜಾಲತಾಣ (ವೆಬ್ಸೈಟ್):',
    'LBL_CAMPAIGNS' => 'ಪ್ರಚಾರಗಳು',
    'LNK_ACCOUNT_LIST' => 'View Accounts',
    'LNK_NEW_ACCOUNT' => 'ಖಾತೆ ತೆರೆಯಿರಿ',
    'LNK_IMPORT_ACCOUNTS' => 'Import Accounts',
    'MSG_DUPLICATE' => 'ನೀವು ರಚಿಸಲಿರುವ ಖಾತೆ ದಾಖಲೆಯು ಈಗಾಗಲೇ ಅಸ್ತಿತ್ವದಲ್ಲಿರುವ ಖಾತೆಯ ದಾಖಲೆಯ ನಕಲು ಆಗಿರಬಹುದು. ಒಂದೇ ರೀತಿಯ ಹೆಸರುಗಳನ್ನು ಹೊಂದಿರುವ ಖಾತೆ ದಾಖಲೆಗಳನ್ನು ಕೆಳಗೆ ಪಟ್ಟಿ ಮಾಡಲಾಗಿದೆ.<br>ಈ ಹೊಸ ಖಾತೆಯನ್ನು ರಚಿಸುವುದನ್ನು ಮುಂದುವರಿಸಲು ಖಾತೆಯನ್ನು ರಚಿಸಿ ಕ್ಲಿಕ್ ಮಾಡಿ ಅಥವಾ ಕೆಳಗೆ ಪಟ್ಟಿ ಮಾಡಲಾದ ಅಸ್ತಿತ್ವದಲ್ಲಿರುವ ಖಾತೆಯನ್ನು ಆಯ್ಕೆಮಾಡಿ.',
    'MSG_SHOW_DUPLICATES' => 'ನೀವು ರಚಿಸಲಿರುವ ಖಾತೆ ದಾಖಲೆಯು ಈಗಾಗಲೇ ಅಸ್ತಿತ್ವದಲ್ಲಿರುವ ಖಾತೆಯ ದಾಖಲೆಯ ನಕಲು ಆಗಿರಬಹುದು. ಒಂದೇ ರೀತಿಯ ಹೆಸರುಗಳನ್ನು ಹೊಂದಿರುವ ಖಾತೆ ದಾಖಲೆಗಳನ್ನು ಕೆಳಗೆ ಪಟ್ಟಿ ಮಾಡಲಾಗಿದೆ.<br>ಈ ಹೊಸ ಖಾತೆಯನ್ನು ರಚಿಸುವುದನ್ನು ಮುಂದುವರಿಸಲು ಉಳಿಸು ಕ್ಲಿಕ್ ಮಾಡಿ ಅಥವಾ ಖಾತೆಯನ್ನು ರಚಿಸದೆ ಮಾಡ್ಯೂಲ್‌ಗೆ ಹಿಂತಿರುಗಲು ರದ್ದು ಕ್ಲಿಕ್ ಮಾಡಿ.',
    'LBL_ASSIGNED_USER_NAME' => 'ಇವರಿಗೆ ನಿಯೋಜಿಸಲಾಗಿದೆ:',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'ಖಾತೆಗಳು',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'ಯೋಜನೆಗಳು',
    //For export labels
    'LBL_PARENT_ID' => 'Parent ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Products and Services Purchased',

    'LBL_AOS_CONTRACTS' => 'ಒಪ್ಪಂದಗಳು',
    'LBL_AOS_INVOICES' => 'ಇನ್ವಾಯ್ಸ್ಗಳು',
    'LBL_AOS_QUOTES' => 'ಬೆಲೆ ಸೂಚಕ',
    'LBL_LIST_WEBSITE' => 'website',
);
