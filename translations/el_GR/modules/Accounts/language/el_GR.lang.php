<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    // Dashlet Categories
    'LBL_CHARTS' => 'Charts',
    'LBL_DEFAULT' => 'Προβολές',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Απαιτείται αριθμός εγγραφής για τη διαγραφή του λογαριασμού.',
    'LBL_ACCOUNT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Όνομα Λογαριασμού:',
    'LBL_ACCOUNT' => 'Λογαριασμός:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Πληροφορίες Διεύθυνσης',
    'LBL_ANNUAL_REVENUE' => 'Annual Revenue:',
    'LBL_ANY_ADDRESS' => 'Οποιαδήποτε Διεύθυνση:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε:',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_BILLING_ADDRESS_CITY' => 'Billing City:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Billing Country:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Billing Postal Code:',
    'LBL_BILLING_ADDRESS_STATE' => 'Billing State:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Billing Address:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Σφάλμα Σημείου Εντοπισμού',
    'LBL_CAMPAIGN_ID' => 'A/A καμπάνιας',
    'LBL_CASES_SUBPANEL_TITLE' => 'Υποθέσεις',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Χώρα',
    'LBL_DATE_ENTERED' => 'Ημερομηνία Δημιουργίας:',
    'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Λογαριασμοί',
    'LBL_DESCRIPTION_INFORMATION' => 'Description Information',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DUPLICATE' => 'Possible Duplicate Account',
    'LBL_EMAIL' => 'Διεύθυνση Email:',
    'LBL_EMAIL_OPT_OUT' => 'Διαγραφή από τη λίστα E-mail:',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Φαξ:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOMEPAGE_TITLE' => 'Οι Λογαριασμοι Μου',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_INVALID_EMAIL' => 'Άκυρο Email:',
    'LBL_INVITEE' => 'Contacts',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
    'LBL_LIST_ACCOUNT_NAME' => 'Όνομα',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_CONTACT_NAME' => 'Όνομα Επαφής',
    'LBL_LIST_EMAIL_ADDRESS' => 'Διευθύνσεις Email',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Λογαριασμων',
    'LBL_LIST_PHONE' => 'Τηλέφωνο:',
    'LBL_LIST_STATE' => 'State',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_MODULE_NAME' => 'Λογαριασμοί',
    'LBL_MODULE_TITLE' => 'Λογαριασμοι: Αρχική',
    'LBL_MODULE_ID' => 'Λογαριασμοί',
    'LBL_NAME' => 'Όνομα Εκστρατείας:',
    'LBL_NEW_FORM_TITLE' => 'Νεος Λογαριασμός',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ευκαιρίες',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => 'Parent Account ID',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Office Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_POSTAL_CODE' => 'Τ.Κ:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Αντιγραφή Στις Επαφές',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Αντιγραφή...',
    'LBL_RATING' => 'Αξιολόγηση:',
    'LBL_SAVE_ACCOUNT' => 'Save Account',
    'LBL_SEARCH_FORM_TITLE' => 'Ευρεση Λογαριασμου',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Shipping City:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shipping Country:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Shipping Postal Code:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Shipping State:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Street 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Street 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping Street 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Street:',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Address:',
    'LBL_SIC_CODE' => 'ΑΦΜ:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Σύμβολο τηλετύπων:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LBL_CAMPAIGNS' => 'Εκστρατείες',
    'LNK_ACCOUNT_LIST' => 'Προβολή Λογαριασμών',
    'LNK_NEW_ACCOUNT' => 'Δημιουργία Λογαριασμού',
    'LNK_IMPORT_ACCOUNTS' => 'Εισαγωγή Λογαριασμών ',
    'MSG_DUPLICATE' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Create Account to continue creating this new account, or select an existing account listed below.',
    'MSG_SHOW_DUPLICATES' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Save to continue creating this new account, or click Cancel to return to the module without creating the account.',
    'LBL_ASSIGNED_USER_NAME' => 'Ανατέθηκε σε:',
    'LBL_PROSPECT_LIST' => 'Λίστα Δυνητικών Πελάτης',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Λογιαριασμοί',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    //For export labels
    'LBL_PARENT_ID' => 'Parent ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Προϊόντα και υπηρεσίες που αποκτήθηκαν',

    'LBL_AOS_CONTRACTS' => 'Συμβάσεις',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Προσφορές',
    'LBL_LIST_WEBSITE' => 'ιστότοπος',
);
