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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Հաշվի նկարագրություն',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'Այլ հասցե - քաղաք',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Այլ հասցե - երկիր',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Այլ հասցե - ինդեքս',
    'LBL_ALT_ADDRESS_STATE' => 'Այլ հասցե - շրջան',
    'LBL_ALT_ADDRESS_STREET_2' => 'Այլ հասցե - փողոց 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Այլ հասցե - փողոց 3',
    'LBL_ALT_ADDRESS_STREET' => 'Այլ հասցե - փողոց',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'Կոնտակտ ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Պոտենցիալ կլիենտի անունը․',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Պոտենցիալ կլիենտ - Գործարք․',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Պոտենցիալ կլիենտ․',
    'LBL_CONVERTED_ACCOUNT' => 'Կոնվերտացված հաշիվ․',
    'LBL_CONVERTED_CONTACT' => 'Կոնվերտացված կոնտակտ․',
    'LBL_CONVERTED_OPP' => 'Վերափոխված է գործարքի․',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Կոնվերտացնել պոտենցիալ կլիենտին',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Զգուշացում․ "Կոնվերտացված է"։ Կոնտակտ և/կամ Հաշիվ գրառումները արդեն ստեղծվել են պոտենցիալ կլիենտի համար։ Եթե ​​ցանկանում եք շարունակել պոտենցիալ կլիենտի կոնվերտացիան, սեղմեք "Պահպանել" կոճակը։ Հակառակ դեպքում սեղմեք՝ "Չեղարկել"։',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Հնարավոր կոնտակտ.',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'Ստեղծվել է նորը',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Պոտենցիալ կլիենտներ (առաջնորդներ)',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Նմանատիպ պոտենցիալ կլիենտներ',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Ավտոմատ կերպով ստեղծել նոր պոտենցիալ կլիենտ vCard ֆայլը ներմուծելու ժամանակ։',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Պոտենցիալ կլիենտի աղբյուրի նկարագրությունը․',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Պոտենցիալ կլիենտի անունը',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Պոտենցիալ կլիենտների ցուցակ',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Պոտենցիալ կլիենտի աղբյուրի նկարագրությունը',
    'LBL_LIST_LEAD_SOURCE' => 'Առաջատար աղբյուր',
    'LBL_LIST_MY_LEADS' => 'Իմ պոտենցիալ կլիենտները',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'Վերահղված է',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Պոտենցիալ կլիենտներ (առաջնորդներ)',
    'LBL_MODULE_TITLE' => 'Պոտենցիալ կլիենտ․ Գլխավոր',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Նոր պոտենցիալ կլիենտ',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Գործարքի գումարը․',
    'LBL_OPPORTUNITY_ID' => 'Գործարքի ID',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Պորտալի կիրառություն',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Հիմնական հասցե՝ քաղաք',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Հիմնական հասցե՝ երկիր',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Հիմնական հասցե - փոստային ինդեքս',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Հիմնական հասցե - մարզ',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Հիմնական հասցե՝ Փողոց 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Հիմնական հասցե՝ Փողոց 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Հիմնական հասցե` փողոց',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'Վերահղված է․',
    'LBL_REPORTS_TO_ID' => 'Հաշվետվություններ ID',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'Պոտենցիալ կլիենտի որոնում',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Ընտրել նշված նախնական կապերը',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Կարգավիճակի նկարագրություն',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Ստեղծել առաջատար կլիենտ vCard-ից',
    'LNK_LEAD_LIST' => 'Պոտենցիալ կլիենտներ',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_LEAD' => 'Create Lead',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_SELECT_ACCOUNTS' => ' <b>կամ</b> Ընտրել հաշիվը',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_REMOVE_CONFIRMATION' => 'Դուք համոզվա՞ծ եք, որ ցանկանում եք հեռացնել տվյալ պոտենցիալ կլիենտին այս գործից:',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CAMPAIGN_LEAD' => 'Campaigns',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Required',
    'LBL_CONVERT_SELECT' => 'Ընտրություն կատարել',
    'LBL_CONVERT_COPY' => 'Պատճենել տվյալները',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'Ավելացնել մոդուլ',
    'LBL_CREATE' => 'Create',
    'LBL_SELECT' => ' <b>կամ</b> Ընտրել',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Ներմուծել պոտենցիալ կլիենտների',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Այն մոդուլը, որի մեջ կստեղծվի նոր գրառում։',
    'LBL_REQUIRED_TIP' => 'Պահանջվող մոդուլները պետք է ստեղծվեն կամ ընտրվեն նախքան պոտենցիալ կլիենտների կոնվերտացումը։',
    'LBL_COPY_TIP' => 'Եթե այս տարբերակը նշված է, ապա պոտենցիալ կլիենտի դաշտի տվյալները կպատճենվեն նույն անունով նորաստեղծ գրառումներում։',
    'LBL_SELECTION_TIP' => 'Ալյ մոդուլների գրառումները, որոնք կապված են "Կոնտակտներ" մոդուլի հետ, կարող են ստեղծվել կամ կոնվերտացման ընթացքում, կամ ընտրվեն առկա գրառումների ցանկից։',
    'LBL_EDIT_TIP' => 'Փոփոխել մակետի կոնվերտացիան այս մոդուլի համար։',
    'LBL_DELETE_TIP' => 'Հեռացնել այս մոդուլը մակետի կոնվերտացիայից:',

    'LBL_ACTIVITIES_MOVE' => 'Տեղափոխել գործունեությունը դեպի',
    'LBL_ACTIVITIES_COPY' => 'Պատճենել գործունեությունը դեպի',
    'LBL_ACTIVITIES_MOVE_HELP' => "Ընտրել գրառումը, որտեղ պետք է տեղափոխվի պոտենցիալ կլիենտի ամբողջ գործունեությունը: Կտեղափոխվեն բոլոր Խնդիրները, Հեռախոսազանգերը, Հանդիպումները, Նշումները և Էլ-նամակները։",
    'LBL_ACTIVITIES_COPY_HELP' => "Ընտրել գրառում(ներ), որոնց մեջ պետք է ստեղծվեն պոտենցիալ կլիենտի գործունեության կրկնօրինակները: Նոր Խնդիրները, Հեռախոսազանգերը, Հանդիպումները և Նշումները կստեղծվեն յուրաքանչյուր ընտրված գրառում(ների) համար: Էլ-նամակները կկապվեն ընտրված գրառում(ների) հետ:",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
