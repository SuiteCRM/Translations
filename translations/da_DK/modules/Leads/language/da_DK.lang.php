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
    'LBL_ACCOUNT_DESCRIPTION' => 'Kunde beskrivelse',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativ Adresse By',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ Adresse Land',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ Adresse Postnr',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativ Adresse Stat',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternativ Adresse Gadenavn 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativ Adresse Gadenavn 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ Adresse Gadenavn',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'Kontakt ID',
    'LBL_CONTACT_INFORMATION' => 'Oversigt', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Emnenavn:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Emne-Mulighed:',
    'LBL_CONTACT_ROLE' => 'Rolle:',
    'LBL_CONTACT' => 'Emne:',
    'LBL_CONVERTED_ACCOUNT' => 'Konverteret kunde:',
    'LBL_CONVERTED_CONTACT' => 'Konverteret kontakt:',
    'LBL_CONVERTED_OPP' => 'Konverteret mulighed:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Konverter emne',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Advarsel: Status på kundeemnet som du er ved at konvertere er "konverteret". Kontakt og/eller virksomheden er muligvis allerede oprettet fra kundeemnet. Hvis du ønsker at fortsætte med konverteringen, tryk Gem. For at gå tilbage til kundeemnet uden at konvertere, tryk Annullere.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Mulig kontakt:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'Opret ny',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Tilsvarende emne',
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
    'LBL_IMPORT_VCARDTEXT' => 'Automatisk oprettelse af et nyt emne ved importering af vCard.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Emne kilde beskrivelse:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Emnenavn',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Emne liste',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Emne Kilde beskrivelse',
    'LBL_LIST_LEAD_SOURCE' => 'Emne kilde',
    'LBL_LIST_MY_LEADS' => 'Mine emner',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'Henvist af',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Jobtitel',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Leads',
    'LBL_MODULE_TITLE' => 'Emne: Hjem',
    'LBL_NAME' => 'Navn:',
    'LBL_NEW_FORM_TITLE' => 'Nyt emne',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Mulighed Beløb:',
    'LBL_OPPORTUNITY_ID' => 'Mulighed ID',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Portal Applikation',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primær Adresse By',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primær Adresse Land',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primær Adresse Postnr',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primær Adresse Stat',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primær Adresse Gadenavn 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primær Adresse Gadenavn 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primær Adresse Gadenavn',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'Henvist af:',
    'LBL_REPORTS_TO_ID' => 'Overordnet ID',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Tiltaleform',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'Emne søgning',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vælg checket emner',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Status beskrivelse:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Jobtitel:',
    'LNK_IMPORT_VCARD' => 'Opret fra vCard',
    'LNK_LEAD_LIST' => 'Vis emner',
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
    'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Select Account',
    'LNK_SELECT_CONTACTS' => ' <b>ELLER</b> Vælg kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på, at du vil slette denne post?',
    'NTC_REMOVE_CONFIRMATION' => 'Er du sikker på at du ønsker at slette dette emne fra sagen?',
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
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Required',
    'LBL_CONVERT_SELECT' => 'Tillad valg',
    'LBL_CONVERT_COPY' => 'Kopier data',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'Tilføj modul',
    'LBL_CREATE' => 'Create',
    'LBL_SELECT' => ' <b>OR</b> Select',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Importér kundeemner',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modulet til at oprette en ny post i.',
    'LBL_REQUIRED_TIP' => 'Nødvendige moduler skal oprettes eller vælges før kundeemnet kan konverteres.',
    'LBL_COPY_TIP' => 'Hvis markeret, vil felter fra kundeemnet blive kopieret til felter med samme navn i de nyoprettede poster.',
    'LBL_SELECTION_TIP' => 'Moduler med et relateret felt i kontakter kan vælges i stedet for skabt i løbet af konverter kundeemne processen.',
    'LBL_EDIT_TIP' => 'Ændre konverter layout for dette modul.',
    'LBL_DELETE_TIP' => 'Fjern dette modul fra konverter layout.',

    'LBL_ACTIVITIES_MOVE' => 'Flyt aktiviteter til',
    'LBL_ACTIVITIES_COPY' => 'Kopier aktiviteter til',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loader' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Begivenheder',
);
