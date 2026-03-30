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

    'ERR_DELETE_RECORD' => 'Er moet een record nummer zijn gespecificeerd om deze lead te verwijderen.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Relatie beschrijving',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatief adres plaats',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatief adres land',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatief adres postcode',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatief adres provincie',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatief adres straat 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatief adres straat 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatief adres straat',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'Contactpersoon ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Leadnaam:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Lead-Kans:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Lead:',
    'LBL_CONVERTED_ACCOUNT' => 'Relatie geconverteerd:',
    'LBL_CONVERTED_CONTACT' => 'Contactpersoon geconverteerd:',
    'LBL_CONVERTED_OPP' => 'Kans Geconverteerd:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Lead converteren',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Waarschuwing: De status van de Lead die wilt u converteren is \"Geconverteerd\". Contact en / of Account records zijn mogelijk al gemaakt op basis van de Lead. Als u wilt doorgaan met het converteren van de Lead, klikt u op Opslaan. Om terug te gaan naar de Lead zonder deze te converteren, klikt u op Annuleren.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Mogelijk contact:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'Maak een nieuwe aan',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Vergelijkbare leads',
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
    'LBL_IMPORT_VCARDTEXT' => 'Automatisch een nieuwe lead toevoegen door een vCard te importeren van uw PC.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Omschrijving bron voor lead:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Leadnaam',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Leads',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Leadbron omschrijving',
    'LBL_LIST_LEAD_SOURCE' => 'Lead bron',
    'LBL_LIST_MY_LEADS' => 'Mijn leads',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'Aanbevolen door',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Leads',
    'LBL_MODULE_TITLE' => 'Leads: Start',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe lead',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Kansomvang:',
    'LBL_OPPORTUNITY_ID' => 'Kans ID',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Portal Applicatie',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Plaats',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Land',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postcode',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primair provincie',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primair adres 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primair adres 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Straat + huisnummer',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'Aanbevolen door:',
    'LBL_REPORTS_TO_ID' => 'Rapporteert aan ID',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'Lead zoeken',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Kies geselecteerde leads',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Statusomschrijving:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Aanmaken vanaf vCard',
    'LNK_LEAD_LIST' => 'Leads',
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
    'LNK_SELECT_ACCOUNTS' => '<b>OF</b> Selecteer Bedrijf',
    'LNK_SELECT_CONTACTS' => ' <b>OF</b> Selecteer Contactpersoon',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_REMOVE_CONFIRMATION' => 'Weet u zeker dat u deze lead bij dit verzoek wilt verwijderen?',
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
    'LBL_CONVERT_SELECT' => 'Laat selectie toe',
    'LBL_CONVERT_COPY' => 'Kopiëren gegevens',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'Voeg module toe',
    'LBL_CREATE' => 'Create',
    'LBL_SELECT' => '<b>OF</b> Selecteer',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Importeer leads',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'De module om een nieuw record in te creëren',
    'LBL_REQUIRED_TIP' => 'Vereiste modules moeten worden gemaakt of geselecteerd voordat het lead kan worden omgezet.',
    'LBL_COPY_TIP' => 'Indien aangevinkt, zal velden uit de lead worden gekopieerd naar velden met dezelfde naam in de nieuw aangemaakte records.',
    'LBL_SELECTION_TIP' => 'Modules met een gerelateerd veld in Contacten kunnen worden geselecteerd in plaats van gemaakt tijdens het  proces van converteren leads.',
    'LBL_EDIT_TIP' => 'Wijzig de convert lay-out  voor deze module.',
    'LBL_DELETE_TIP' => 'Verwijder deze module uit de converteren lay-out.',

    'LBL_ACTIVITIES_MOVE' => 'Verplaats activiteiten naar',
    'LBL_ACTIVITIES_COPY' => 'Kopieer activiteiten naar',
    'LBL_ACTIVITIES_MOVE_HELP' => "Selecteer het record waarnaar de lead-activiteiten worden verplaatst. Taken, telefoongesprekken, afspraken, notities en emails zullen worden verplaatst naar de geselecteerde records(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Selecteer het record waarvoor kopieen van de activiteiten van de lead worden aangemaakt. Nieuwe taken, telefoongesprekken, afspraken en notities worden aangemaakt voor elk van geselecteerde records. Emails zullen worden gerelateerd aan geselecteerde records.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
