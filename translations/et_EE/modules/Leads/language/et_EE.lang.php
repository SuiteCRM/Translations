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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Müügivihje kustutamiseks on vaja täpsustada kirje numbrit.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Ettevõtte kirjeldus',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatiivne aadress linn:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatiivne aadress riik:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatiivne aadress postiindeks:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatiivne aadress maakond:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatiivne aadress tänav 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatiivne aadress tänav 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatiivne aadress tänav:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'Kontakti ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Müügivihje nimi:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Müügivihje-võimalus:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Müügivihje:',
    'LBL_CONVERTED_ACCOUNT' => 'Muudetud ettevõte:',
    'LBL_CONVERTED_CONTACT' => 'Muudetud kontakt:',
    'LBL_CONVERTED_OPP' => 'Muudetud müügivõimalus:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Muuda müügivihjet',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Hoiatus: Müügivihje staatus, mida soovite muuta on juba "Muudetud". Kontakti ja/või ettevõtte kirjed võivad olla juba müügivihje jaoks loodud. Kui soovid müügivihje muutmist jätkata kliki Salvesta. Tagasi müügivihje juurde ilma seda muutmata kliki Tühista.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Võimalik kontakt:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'Loodud uus',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Sarnased müügivihjed',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'E-postist loobumine:',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Eesnimi:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Loo automaatselt uus müügivihje importides vCardi sinu failisüsteemist.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Perekonnanimi:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Müügivihje allika kirjeldus:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Müügivihje nimi',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Eesnimi',
    'LBL_LIST_FORM_TITLE' => 'Müügivihje loend',
    'LBL_LIST_LAST_NAME' => 'Perekonnanimi',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Müügivihje allika kirjeldus',
    'LBL_LIST_LEAD_SOURCE' => 'Müügivihje allikas',
    'LBL_LIST_MY_LEADS' => 'Minu müügivihjed',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'Osutatud',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Ametinimetus',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Leads',
    'LBL_MODULE_TITLE' => 'Müügivihjed: Avaleht',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Uus müügivihje',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Müügivõimaluse summa:',
    'LBL_OPPORTUNITY_ID' => 'Müügivõimaluse ID',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Saidi rakendus',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Esmane aadress linn',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Esmane aadress maakond',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Esmane aadress postiindeks',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Esmane aadress riik',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Esmane aadress Tänav 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Esmane aadress Tänav 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Esmane aadress tänav',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'Osutaja:',
    'LBL_REPORTS_TO_ID' => 'Juhataja ID:',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Tiitel',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'Müügivihje otsing',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vali vaadatud müügivihjed',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Oleku kirjeldus:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Ametinimetus:',
    'LNK_IMPORT_VCARD' => 'Loo müügivihje vCardist',
    'LNK_LEAD_LIST' => 'Vaata müügivihjeid',
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
    'LNK_SELECT_ACCOUNTS' => 'OR Select Account',
    'LNK_SELECT_CONTACTS' => ' <b>VÕI</b> Vali Kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Oled kindel, et soovid selle müügivihje juhtumist eemaldada?',
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
    'LBL_CONVERT_SELECT' => 'Luba valik',
    'LBL_CONVERT_COPY' => 'Kopeeri Andmed',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'Lisa moodul',
    'LBL_CREATE' => 'Create',
    'LBL_SELECT' => 'VÕI vali',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Impordi müügivihjed',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'The module to create a new record in.',
    'LBL_REQUIRED_TIP' => 'Nõutud moodulid peab looma või valima enne müügivihje konverteerimist.',
    'LBL_COPY_TIP' => 'Nagu kontrollitud, siis müügivihje väljad kopeeritakse sama nimega uutesse loodud kirjetesse.',
    'LBL_SELECTION_TIP' => 'Kontaktide seotud väljade mooduleid saab müügivihje konverteerimise protsessis ennem valida kui luua.',
    'LBL_EDIT_TIP' => 'Muuda konverteerimise paigutust selle mooduli jaoks.',
    'LBL_DELETE_TIP' => 'Eemalda see moodul konverteerimise paigutusest.',

    'LBL_ACTIVITIES_MOVE' => 'Move Activities to',
    'LBL_ACTIVITIES_COPY' => 'Copy Activities to',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
