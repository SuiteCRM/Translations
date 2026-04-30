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
    'LBL_MODULE_NAME' => 'Doelen',
    'LBL_MODULE_ID' => 'Doelen',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_MODULE_TITLE' => 'Doelen: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Doelen zoeken',
    'LBL_LIST_FORM_TITLE' => 'Verzendlijst',
    'LBL_NEW_FORM_TITLE' => 'Nieuw doel',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_TITLE' => 'Functieomschrijving',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_ASSIGNED_TO_ID' => 'Assigned To:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_CREATED_ACCOUNT' => 'Nieuwe relatie aangemaakt',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_NAME' => 'Naam: ',
    'LBL_PROSPECT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Meer informatie',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primair Land:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primair provincie:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatief adres straat:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatief adres plaats:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatief land adres:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatief adres provincie:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatieve postcode adres:',
    'LBL_TITLE' => 'Functieomschrijving:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_BIRTHDATE' => 'Verjaardag:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_ANY_EMAIL' => '(Deel van) e-mail:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_ALTERNATE_ADDRESS' => 'Alternatief adres:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_DESCRIPTION' => 'Omschrijving: ',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_DUPLICATE' => 'Mogelijk dubbele items',
    'MSG_SHOW_DUPLICATES' => 'Door het aanmaken van deze contactpersoon maak je mogelijk een duplicaat record. Je kunt op Maak Item klikken om door te gaan of afbreken door op Cancel te klikken.',
    'MSG_DUPLICATE' => 'Door het aanmaken van deze contactpersoon maak je mogelijk een duplicaat record. Je kunt op Maak Item klikken om door te gaan of afbreken door op Cancel te klikken.',
    'LNK_IMPORT_VCARD' => 'Create From vCard',
    'LNK_NEW_ACCOUNT' => 'Nieuwe relatie',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Nieuwe afspraak',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_IMPORT_PROSPECTS' => 'Importeer doelen',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Weet u zeker dat u wilt uitstellen?',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this contact from the case?',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the contact.',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'LNK_NEW_PROSPECT' => 'Nieuw doel',
    'LNK_PROSPECT_LIST' => 'Bekijk doelen',
    'LNK_NEW_CAMPAIGN' => 'Create Campaign',
    'LNK_CAMPAIGN_LIST' => 'Campaigns',
    'LNK_NEW_PROSPECT_LIST' => 'Nieuwe doelenlijst',
    'LNK_PROSPECT_LIST_LIST' => 'Verzendlijsten',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecteer gekozen items',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Targets',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Doelen',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CONVERT_BUTTON_TITLE' => 'Doel converteren',
    'LBL_CONVERT_BUTTON_LABEL' => 'Doel converteren',
    'LNK_NEW_CONTACT' => 'New Contact',
    'LBL_CREATED_CONTACT' => "Created a new contact",
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaign Log',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'Lead ID',
    'LBL_CONVERTED_LEAD' => 'Geconverteerde lead',
    'LBL_ACCOUNT_NAME' => 'Account Name',
    'LBL_EDIT_ACCOUNT_NAME' => 'Account Name:',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
