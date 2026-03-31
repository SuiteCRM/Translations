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
    'ERR_DELETE_RECORD' => 'מספר רשומה חייבת להיות מפורטת עמ"נ למחוק את איש הקשר',
    'LBL_ACCOUNT_ID' => 'זיהוי חשבון:',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'כתובת חלופית עיר :',
    'LBL_ALT_ADDRESS_COUNTRY' => 'כתובת חלופית  מדינה:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'מיקוד כתובת חלופי:',
    'LBL_ALT_ADDRESS_STATE' => 'כתובת חלופית ארץ:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternate Address Street 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternate Address Street 3:',
    'LBL_ALT_ADDRESS_STREET' => 'כתובת רחוב חלופי :',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'הקצה ל:',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'LBL_ASSISTANT_PHONE' => 'טלפון של העוזר:',
    'LBL_ASSISTANT' => 'עוזר:',
    'LBL_BIRTHDATE' => 'תאריך לידה:',
    'LBL_CITY' => 'City:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Contact Name:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'איש קשר- הזדמנות:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'איש קשר:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_ACCOUNT' => 'צור חשבון חדש',
    'LBL_CREATED_CALL' => 'צור שיחה חדשה',
    'LBL_CREATED_CONTACT' => 'צור איש קשר חדש',
    'LBL_CREATED_MEETING' => 'צור פגישה חדשה',
    'LBL_CREATED_OPPORTUNITY' => 'צור הזדמנות חדשה',
    'LBL_DATE_MODIFIED' => 'תאריך עדכון:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'אנשי קשר',
    'LBL_DEPARTMENT' => 'מחלקה:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direct Reports',
    'LBL_DO_NOT_CALL' => 'לא לצלצל:',
    'LBL_DUPLICATE' => 'איש קשר נוסף:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'השתמש בחשבון קיים',
    'LBL_EXISTING_CONTACT' => 'השתמש באיש קשר קיים',
    'LBL_EXISTING_OPPORTUNITY' => 'השתמש בהזדמנות קיימת',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'שם פרטי:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'בית:',
    'LBL_ID' => 'מזהה:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'צור חשבון חדש אוטומטית ע"י יבוא ה- vCard ממערכת הקבצים שלך',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'שם משפחה:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_EMAIL_ADDRESS' => 'דוא"ל',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Contact List',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_NAME' => 'שם',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'נייד:',
    'LBL_MODIFIED' => 'שונה ע"י זיהוי משתמש:',
    'LBL_MODULE_NAME' => 'אנשי קשר',
    'LBL_MODULE_TITLE' => 'אנשי קשר: בית',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'איש קשר חדש:',
    'LBL_NOTE_SUBJECT' => 'נושא תזכורת',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'שם הזדמנות:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'זיהוי תפקיד הזדמנות:',
    'LBL_OPPORTUNITY_ROLE' => 'תפקיד הזדמנות:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'אפליקציית פורטל:',
    'LBL_PORTAL_INFORMATION' => 'פרטי פורטל',
    'LBL_PORTAL_NAME' => 'שם פורטל:',
    'LBL_STREET' => 'Street',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primary Address Street 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primary Address Street 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_REPORTS_TO_ID' => 'דווח לID:',
    'LBL_REPORTS_TO' => 'דווח ל:',
    'LBL_RESOURCE_NAME' => 'שם המשאב',
    'LBL_SALUTATION' => 'איחול:',
    'LBL_SAVE_CONTACT' => 'שמור איש קשר:',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש איש קשר',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'בחר אנשי קשר נבחרים',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'הסתנכרן עם האאוטלוק',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'אנשי קשר',
    'LNK_IMPORT_VCARD' => 'צור  מ- vCard',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CALL' => 'יומן שיחה',
    'LNK_NEW_CASE' => 'תיק קריאה',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'לקבוע פגישה',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_TASK' => 'צור משימה',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'יצירת הזדמנות מצריכה חשבון. אנא צור בבקשה חשבון חדש או בחר בחשבון קיים.',
    'NTC_REMOVE_CONFIRMATION' => 'האם אתה בטוח כי ברצונך להסיר את איש קשר זה מהתיק הנוכחי?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copy to Primary Address',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copy to Other Address',

    'LBL_CASES_SUBPANEL_TITLE' => 'קריאות',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECTS_RESOURCES' => 'Projects Resources',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_STATE' => 'State',
    'LBL_HOMEPAGE_TITLE' => 'אנשי הקשר שלי',
    'LBL_OPPORTUNITIES' => 'Opportunities',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'אנשי קשר',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LNK_IMPORT_CONTACTS' => 'ייבוא אנשי קשר',

    // SNIP
    'LBL_USER_SYNC' => 'User Sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',

    'LBL_AOP_CASE_UPDATES' => 'עדכוני קריאות',
    'LBL_CREATE_PORTAL_USER' => 'ליצור משתמש פורטל',
    'LBL_ENABLE_PORTAL_USER' => 'לאפשר למשתמש בפורטל',
    'LBL_DISABLE_PORTAL_USER' => 'בטל את המשתמש לפורטל',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'יצירת משתמש פורטל נכשלה',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'נכשלה הפעלת המשתמש לפורטל',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'כשל בביטול המשתמש לפורטל',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'נוצר המשתמש לפורטל',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'משתמש הפורטל אופשר',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'משתמש הפורטל לא  הורשה',
    'LBL_NO_JOOMLA_URL' => 'אין כתובת לפורטל שצוין',
    'LBL_PORTAL_USER_TYPE' => 'סוג משתמש פורטל',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account Disabled',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',

    'LBL_AOS_CONTRACTS' => 'Contracts',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'ציטוטים',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',

    'LBL_LIST_INVITE_STATUS' => 'Invite Status',
);
