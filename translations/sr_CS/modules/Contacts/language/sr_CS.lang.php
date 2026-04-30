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
    'ERR_DELETE_RECORD' => 'Morate da navedete broj zapisa da bi obrisali kontakt.',
    'LBL_ACCOUNT_ID' => 'ID naloga:',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'Grad alternativne adrese:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Država alternativne adrese:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Poštanski broj alternativne adrese:',
    'LBL_ALT_ADDRESS_STATE' => 'Pokrajina alternativne adrese:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternate Address Street 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternate Address Street 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Ulica alternativne adrese:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'LBL_ASSISTANT_PHONE' => 'Telefon asistenta:',
    'LBL_ASSISTANT' => 'Asistent:',
    'LBL_BIRTHDATE' => 'Datum rođenja:',
    'LBL_CITY' => 'City:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Contact Name:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-Planirana prodaja:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Contact:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_ACCOUNT' => 'Nova kompanija kreirana',
    'LBL_CREATED_CALL' => 'Novi poziv kreiran',
    'LBL_CREATED_CONTACT' => 'Novi kontakt kreiran',
    'LBL_CREATED_MEETING' => 'Novi sastanak je kreiran',
    'LBL_CREATED_OPPORTUNITY' => 'Kreiraj novu planiranu prodaju',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DEPARTMENT' => 'Odeljenje:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direct Reports',
    'LBL_DO_NOT_CALL' => 'Ne zovi:',
    'LBL_DUPLICATE' => 'Mogući dupli kontakti',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Korišćena je postojeća kompanija',
    'LBL_EXISTING_CONTACT' => 'Korišćen postojeći kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Korišćena postojeća planirana prodaja',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'Početna strana:',
    'LBL_ID' => 'ID broj:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatski kreiraj novi kontakt iz importovane vKarte sa Vašeg sistema.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Contact List',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_NAME' => 'Naziv',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_TITLE' => 'Radno mesto',
    'LBL_MOBILE_PHONE' => 'Mob. telefon:',
    'LBL_MODIFIED' => 'Izmenio:',
    'LBL_MODULE_NAME' => 'Contacts',
    'LBL_MODULE_TITLE' => 'Kontakti: Početna strana',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Novi kontakt',
    'LBL_NOTE_SUBJECT' => 'Naslov beleške',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Ime prodajne prilike:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID broj uloge prodajne prilike:',
    'LBL_OPPORTUNITY_ROLE' => 'Uloga prodajne prilike',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Aplikacija portala:',
    'LBL_PORTAL_INFORMATION' => 'Informacija o portalu',
    'LBL_PORTAL_NAME' => 'Korisničko ime na portalu:',
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
    'LBL_REPORTS_TO_ID' => ' ID nadređenog:',
    'LBL_REPORTS_TO' => 'Nadređeni:',
    'LBL_RESOURCE_NAME' => 'Ime resursa',
    'LBL_SALUTATION' => 'Pozdrav:',
    'LBL_SAVE_CONTACT' => 'Sačuvaj kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga kontakata',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Izaberi označene kontakte',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'Sinhronizuj sa Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_TITLE' => 'Radno mesto:',
    'LNK_CONTACT_LIST' => 'Pregled kontakata',
    'LNK_IMPORT_VCARD' => 'Napravi kontakt iz digitalne vizitkarte',
    'LNK_NEW_ACCOUNT' => 'Create Account',
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
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Za kreiranje prodajne prilike potrebna je kompanija .\n Molim.kreirajte novi nalog ili odaberite postojeći.',
    'NTC_REMOVE_CONFIRMATION' => 'Da li ste sigurni da želite da uklonite ovaj kontakt iz slučaja?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopiraj  u primarnu adresu',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopiraj u drugu adresu',

    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECTS_RESOURCES' => 'Projektni Resursi',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_STATE' => 'State',
    'LBL_HOMEPAGE_TITLE' => 'Moji Kontakti',
    'LBL_OPPORTUNITIES' => 'Opportunities',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LNK_IMPORT_CONTACTS' => 'Uvezi kontakte',

    // SNIP
    'LBL_USER_SYNC' => 'Sinhronizacija korisnika',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',

    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_CREATE_PORTAL_USER' => 'Kreiraj Korisnka Portala',
    'LBL_ENABLE_PORTAL_USER' => 'Omogući Korisnika Portala',
    'LBL_DISABLE_PORTAL_USER' => 'Onemogući Korisnka Portala',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Neuspelo kreiranje korisnika portala',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Neuspelo omogućavanje korisnika portala',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Neuspelo onemogućivanje korisnika portala',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Kreiran Korisnk Portala',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Omogućen Korisnik Portala',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Onemogućen Korisnik Portala',
    'LBL_NO_JOOMLA_URL' => 'URL portala nije određen',
    'LBL_PORTAL_USER_TYPE' => 'Vrsta korisnika portala',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Nalog je onemogućen',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla ID naloga',

    'LBL_AOS_CONTRACTS' => 'Contracts',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Quotes',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',

    'LBL_LIST_INVITE_STATUS' => 'Invite Status',
);
