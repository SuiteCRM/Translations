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
    'ERR_DELETE_RECORD' => 'Ange postens nummer för att ta bort kontakten.',
    'LBL_ACCOUNT_ID' => 'Företags-ID:',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativ adress Ort:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adress Land:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ adress Postnummer:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativ adress Landskap:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternativ adress Gata/Väg 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativ adress Gatuvägen 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ adress Gata/Väg:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'LBL_ASSISTANT_PHONE' => 'Assistent telefon:',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_BIRTHDATE' => 'Födelsedatum:',
    'LBL_CITY' => 'City:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Contact Name:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-Affär:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Contact:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_ACCOUNT' => 'Skapade ett nytt företag',
    'LBL_CREATED_CALL' => 'Skapade ett nytt samtal',
    'LBL_CREATED_CONTACT' => 'Skapade en ny kontakt',
    'LBL_CREATED_MEETING' => 'Skapade ett nytt möte',
    'LBL_CREATED_OPPORTUNITY' => 'Skapade en ny affär',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DEPARTMENT' => 'Avdelning:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direct Reports',
    'LBL_DO_NOT_CALL' => 'Ring inte:',
    'LBL_DUPLICATE' => 'Möjliga dublettkontakter',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Använde ett existerande företag',
    'LBL_EXISTING_CONTACT' => 'Använde en existerande kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Använde en existerande affär',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Förnamn:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'Hem:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Skapa automatiskt en ny kontakt genom att importera ett vCard från ditt filsystem.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Efternamn:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontonamn',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Förnamn',
    'LBL_LIST_FORM_TITLE' => 'Contact List',
    'LBL_LIST_LAST_NAME' => 'Efternamn',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_LIST_PHONE' => 'Jobb Telefon',
    'LBL_LIST_TITLE' => 'Jobbtitel',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODIFIED' => 'Modifierad av användar-ID:',
    'LBL_MODULE_NAME' => 'Contacts',
    'LBL_MODULE_TITLE' => 'Kontakter: Hem',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Ny kontakt',
    'LBL_NOTE_SUBJECT' => 'Anteckningsämne',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Affärs namn:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Affärsrolls-ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Affärsroll:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alternativ E-post:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Portalapplikation:',
    'LBL_PORTAL_INFORMATION' => 'Portalinformation',
    'LBL_PORTAL_NAME' => 'Portalnamn:',
    'LBL_STREET' => 'Street',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primär Landsadress:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primär adress Gatuvägen 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primär adress Gatuvägen 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_REPORTS_TO_ID' => 'Rapporterar till ID:',
    'LBL_REPORTS_TO' => 'Rapporterar till:',
    'LBL_RESOURCE_NAME' => 'Resursnamn',
    'LBL_SALUTATION' => 'Hälsning:',
    'LBL_SAVE_CONTACT' => 'Spara kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Sök kontakt',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Välj markerade kontakter',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'Synkronisera mot Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_TITLE' => 'Jobbtitel:',
    'LNK_CONTACT_LIST' => 'Visa kontakter',
    'LNK_IMPORT_VCARD' => 'Skapa från vCard',
    'LNK_NEW_ACCOUNT' => 'Skapa konto',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Att skapa en affär kräver ett företag.\n Skapa antingen ett nytt eller välj ett existerande.',
    'NTC_REMOVE_CONFIRMATION' => 'Är du säker på att du vill ta bort denna kontakt från detta ärende?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokument',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopiera till primär adress',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopiera till annan adress',

    'LBL_CASES_SUBPANEL_TITLE' => 'Ärenden',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECTS_RESOURCES' => 'Projektresurser',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_LIST_CITY' => 'Stad',
    'LBL_LIST_STATE' => 'Landskap',
    'LBL_HOMEPAGE_TITLE' => 'Mina kontakter',
    'LBL_OPPORTUNITIES' => 'Opportunities',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LNK_IMPORT_CONTACTS' => 'Importera kontakter',

    // SNIP
    'LBL_USER_SYNC' => 'User Sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',

    'LBL_AOP_CASE_UPDATES' => 'Händelse uppdatering',
    'LBL_CREATE_PORTAL_USER' => 'Skapa portalanvändare',
    'LBL_ENABLE_PORTAL_USER' => 'Aktivera portal-användare',
    'LBL_DISABLE_PORTAL_USER' => 'Inaktivera portal-användare',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Failed to enable portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Aktiverat portal-användare',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Inaktiverade portalanvändare',
    'LBL_NO_JOOMLA_URL' => 'No portal URL specified',
    'LBL_PORTAL_USER_TYPE' => 'Portalanvändartyp',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Konto inaktiverat',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla konto-ID',

    'LBL_AOS_CONTRACTS' => 'Contracts',
    'LBL_AOS_INVOICES' => 'Fakturor',
    'LBL_AOS_QUOTES' => 'Quotes',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',

    'LBL_LIST_INVITE_STATUS' => 'Bjuda in Status',
);
