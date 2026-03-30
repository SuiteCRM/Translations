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
    'ERR_DELETE_RECORD' => 'Geef een record ID op om de contactpersoon te verwijderen.',
    'LBL_ACCOUNT_ID' => 'Relatie ID:',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatief adres plaats:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatief land adres:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatieve postcode adres:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatief adres provincie:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatief adres straat 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatief adres 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatief adres straat:',
    'LBL_ALTERNATE_ADDRESS' => 'Alternatief adres:',
    'LBL_ALT_ADDRESS' => 'Ander adres:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => '(Deel van) e-mail:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'LBL_ASSISTANT_PHONE' => 'Telefoonnr assistent',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_BIRTHDATE' => 'Verjaardag:',
    'LBL_CITY' => 'City:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Naam contactpersoon:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contactpersoon-kans:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Naam contactpersoon:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_ACCOUNT' => 'Nieuwe relatie aangemaakt',
    'LBL_CREATED_CALL' => 'Nieuw telefoongesprek aangemaakt',
    'LBL_CREATED_CONTACT' => 'Nieuwe contactpersoon aangemaakt',
    'LBL_CREATED_MEETING' => 'Nieuwe afspraak aangemaakt',
    'LBL_CREATED_OPPORTUNITY' => 'Nieuwe kans aangemaakt',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_DEPARTMENT' => 'Afdeling:',
    'LBL_DESCRIPTION' => 'Omschrijving: ',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direct Reports',
    'LBL_DO_NOT_CALL' => 'Niet bellen:',
    'LBL_DUPLICATE' => 'Mogelijk dubbele contactpersoon',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Bestaande relatie gebruikt',
    'LBL_EXISTING_CONTACT' => 'Bestaande contactpersoon gebruikt',
    'LBL_EXISTING_OPPORTUNITY' => 'Bestaande kans gebruikt',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Voornaam:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'Priv',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Maak automatisch een nieuwe contactpersoon aan door een vCard van uw computer te importeren.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Achternaam:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Naam contactpersoon',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Contactpersonen',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_TITLE' => 'Functieomschrijving',
    'LBL_MOBILE_PHONE' => 'Mobiel:',
    'LBL_MODIFIED' => 'Gewijzigd door:',
    'LBL_MODULE_NAME' => 'Contactpersonen',
    'LBL_MODULE_TITLE' => 'Contactpersonen: Start',
    'LBL_NAME' => 'Naam: ',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe contactpersoon',
    'LBL_NOTE_SUBJECT' => 'Notitie onderwerp',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Kansnaam:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Kans rol ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Kans rol',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Portal Applicatie:',
    'LBL_PORTAL_INFORMATION' => 'Portal gegevens',
    'LBL_PORTAL_NAME' => 'Portal naam:',
    'LBL_STREET' => 'Street',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primair Land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primair provincie:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primary Address Street 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primary Address Street 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_REPORTS_TO_ID' => 'Leidinggevende ID:',
    'LBL_REPORTS_TO' => 'Rapporteert aan:',
    'LBL_RESOURCE_NAME' => 'Resource naam',
    'LBL_SALUTATION' => 'Aanhef:',
    'LBL_SAVE_CONTACT' => 'Contactpersoon opslaan',
    'LBL_SEARCH_FORM_TITLE' => 'Contactpersoon zoeken',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecteer gekozen contacten.',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'Synchroniseer naar MS Outlook:',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_TITLE' => 'Functieomschrijving:',
    'LNK_CONTACT_LIST' => 'Contactpersonen',
    'LNK_IMPORT_VCARD' => 'Aanmaken vanaf vCard',
    'LNK_NEW_ACCOUNT' => 'Nieuwe relatie',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Nieuwe afspraak',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Weet u zeker dat u wilt uitstellen?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Voor het aanmaken van een kans is een relatie nodig. Maak een nieuwe relatie aan of kies een bestaande relatie waaraan u deze kans wilt koppelen.',
    'NTC_REMOVE_CONFIRMATION' => 'Weet u zeker dat u deze contactpersoon wilt verwijderen voor dit verzoek?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopiëren naar primair adres',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopiëren naar ander adres',

    'LBL_CASES_SUBPANEL_TITLE' => 'Verzoeken',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECTS_RESOURCES' => 'Project resources',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_STATE' => 'Status',
    'LBL_HOMEPAGE_TITLE' => 'Mijn contactpersonen',
    'LBL_OPPORTUNITIES' => 'Opportunities',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LNK_IMPORT_CONTACTS' => 'Importeren Contactpersonen ',

    // SNIP
    'LBL_USER_SYNC' => 'Gebruikers sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',

    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_CREATE_PORTAL_USER' => 'Aanmaken Portal gebruiker',
    'LBL_ENABLE_PORTAL_USER' => 'Inschakelen Portal gebruiker',
    'LBL_DISABLE_PORTAL_USER' => 'Uitschakelen Portal gebruiker',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Mislukt om een Portal gebruiker aan te maken',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Mislukt om een Portal gebruiker in te schakelen',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Mislukt om een Portal gebruiker uit te schakelen',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portal gebruiker aangemaakt',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Ingeschakelt Portal gebruiker',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Uitgeschakelt Portal gebruiker',
    'LBL_FAILED_TO_CONNECT_JOOMLA' => 'Aanmaken portal gebruiker mislukt, verbinding niet met Joomla',
    'LBL_ERROR_CONTACT_ID_OR_EMAIL_EMPTY' => 'Contact ID of e-mail is leeg',
    'LBL_NO_JOOMLA_URL' => 'Geen Portal URL gespecificeerd',
    'LBL_PORTAL_USER_TYPE' => 'Portal gebruikers type',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account uitgeschakeld',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account-ID',
    'LBL_AOP_DISABLED' => 'AOP is uitgeschakeld, schakel dit in via instellingen',

    'LBL_AOS_CONTRACTS' => 'Contracts',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Quotes',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project contactpersonen uit de titel van het Project',
    'LBL_LAST_MEETING' => 'Je laatste interactie was een vergadering op:',
    'LBL_LAST_CALL' => 'Uw laatste interactie was een oproep op:',
    'LBL_LAST_EMAIL' => 'Uw laatste interactie was een e-mail op:',
    'LBL_NO_INTERACTION' => 'Je moet nog interactie hebben met dit contact.',

    'LBL_LIST_INVITE_STATUS' => 'Invite Status',
);
