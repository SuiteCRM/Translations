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

    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Opis tvrtke',
    'LBL_ACCOUNT_ID' => 'ID tvrtke',
    'LBL_ACCOUNT_NAME' => 'Ime tvrtke:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Podaci o adresi',
    'LBL_ALT_ADDRESS_CITY' => 'Grad alternativne adrese',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Zemlja alternativne adrese',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Poštanski broj alternativne adrese',
    'LBL_ALT_ADDRESS_STATE' => 'Županija alternativne adrese',
    'LBL_ALT_ADDRESS_STREET_2' => 'Ulica 2 alternativne adrese',
    'LBL_ALT_ADDRESS_STREET_3' => 'Ulica 3 alternativne adrese',
    'LBL_ALT_ADDRESS_STREET' => 'Ulica alternativne adrese',
    'LBL_ALTERNATE_ADDRESS' => 'Ostala adresa:',
    'LBL_ALT_ADDRESS' => 'Ostala adresa:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_EMAIL' => 'Bilo koja e-pošta:',
    'LBL_ANY_PHONE' => 'Bilo koji telefonski broj:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno',
    'LBL_ASSIGNED_TO_ID' => 'Dodijeljeni korisnik:',
    'LBL_CITY' => 'Grad',
    'LBL_CONTACT_ID' => 'ID kontakta',
    'LBL_CONTACT_INFORMATION' => 'Pregled', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Ime potencijalnog klijenta:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Lead-Opportunity:',
    'LBL_CONTACT_ROLE' => 'Uloga:',
    'LBL_CONTACT' => 'Potencijalni klijent:',
    'LBL_CONVERTED_ACCOUNT' => 'Pretvorena tvrtka:',
    'LBL_CONVERTED_CONTACT' => 'Pretvoreni kontakt:',
    'LBL_CONVERTED_OPP' => 'Pretvorena prodajna prilika:',
    'LBL_CONVERTED' => 'Pretvoreni',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Pretvori potencijalnog klijenta',
    'LBL_CONVERTLEAD' => 'Pretvori potencijalnog klijenta',
    'LBL_CONVERTLEAD_WARNING' => 'Warning: The status of the Lead you are about to convert is "Converted". Contact and/or Account records may already have been created from the Lead. If you wish to continue with converting the Lead, click Save. To go back to the Lead without converting it, click Cancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Mogući kontakt:',
    'LBL_COUNTRY' => 'Država',
    'LBL_CREATED_NEW' => 'Kreiran novi',
    'LBL_CREATED_ACCOUNT' => 'Kreirana nova tvrtka',
    'LBL_CREATED_CALL' => 'Kreiran novi poziv',
    'LBL_CREATED_CONTACT' => 'Kreiran novi kontakt',
    'LBL_CREATED_MEETING' => 'Kreiran novi sastanak',
    'LBL_CREATED_OPPORTUNITY' => 'Kreirana nova prodajna prilika',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Potencijalni klijenti',
    'LBL_DEPARTMENT' => 'Odjel:',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DO_NOT_CALL' => 'Ne zovi:',
    'LBL_DUPLICATE' => 'Similar Leads',
    'LBL_EMAIL_ADDRESS' => 'Adresa e-pošte:',
    'LBL_EMAIL_OPT_OUT' => 'E-pošta za odjavu:',
    'LBL_EXISTING_ACCOUNT' => 'Koristi postojeću tvrtku',
    'LBL_EXISTING_CONTACT' => 'Korišten postojeći kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Korištena postojeća prodajna prilika',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Povijest',
    'LBL_HOME_PHONE' => 'Kućni telefon:',
    'LBL_IMPORT_VCARD' => 'Uvoz vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new lead by importing a vCard from your file system.',
    'LBL_INVALID_EMAIL' => 'Pogrešna e-pošta:',
    'LBL_INVITEE' => 'Direktni izvještaji',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Opis izvora potencijalnog klijenta:',
    'LBL_LEAD_SOURCE' => 'Glavni izvor:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status prihvaćanja',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime tvrtke',
    'LBL_LIST_CONTACT_NAME' => 'Ime potencijalnog klijenta',
    'LBL_LIST_CONTACT_ROLE' => 'Uloga',
    'LBL_LIST_DATE_ENTERED' => 'Kreirano:',
    'LBL_LIST_EMAIL_ADDRESS' => 'e-pošta',
    'LBL_LIST_FIRST_NAME' => 'Ime',
    'LBL_LIST_FORM_TITLE' => 'Lista potencijalnih klijenata',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Opis izvora potencijalnog klijenta',
    'LBL_LIST_LEAD_SOURCE' => 'Izvor potencijalnog klijenta',
    'LBL_LIST_MY_LEADS' => 'Moji potencijalni klijenti',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_PHONE' => 'Uredski telefon',
    'LBL_LIST_REFERED_BY' => 'Referred By',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Zanimanje',
    'LBL_MOBILE_PHONE' => 'Mobitel:',
    'LBL_MODULE_NAME' => 'Potencijalni klijenti',
    'LBL_MODULE_TITLE' => 'Potencijalni klijenti: Početno',
    'LBL_NAME' => 'Naziv:',
    'LBL_NEW_FORM_TITLE' => 'Novi potencijalni klijent',
    'LBL_OFFICE_PHONE' => 'Uredski telefon',
    'LBL_OPP_NAME' => 'Ime prodajne prilike:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Iznos prodajne prilike:',
    'LBL_OPPORTUNITY_ID' => 'ID prodajne prilike',
    'LBL_OPPORTUNITY_NAME' => 'Ime prodajne prilike:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ostala e-pošta:',
    'LBL_OTHER_PHONE' => 'Ostali telefonski broj:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portal aplikacija',
    'LBL_PORTAL_INFORMATION' => 'Informacija portala:',
    'LBL_PORTAL_NAME' => 'Ime portala:',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_STREET' => 'Ulica',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primarna adresa grada',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Zemlja primarne adrese',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Poštanski broj primarne adrese',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Županija primarne adrese',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Ulica 2 primarne adrese',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ulica 3 primarne adrese',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ulica primarne adrese',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
    'LBL_REFERED_BY' => 'Referred By:',
    'LBL_REPORTS_TO_ID' => 'Reports To ID',
    'LBL_REPORTS_TO' => 'Izvještaji prema:',
    'LBL_SALUTATION' => 'Pozdrav',
    'LBL_MODIFIED' => 'Izmijenio:',
    'LBL_CREATED' => 'Kreirano od',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje potencijalnog klijenta',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Leads',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'Država ili regija:',
    'LBL_STATUS_DESCRIPTION' => 'Status Description:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Zanimanje:',
    'LNK_IMPORT_VCARD' => 'Create Lead From vCard',
    'LNK_LEAD_LIST' => 'Pregledaj potencijalne klijente',
    'LNK_NEW_ACCOUNT' => 'Kreiraj tvrtku',
    'LNK_NEW_APPOINTMENT' => 'Kreiraj sastanak',
    'LNK_NEW_CONTACT' => 'Kreiraj kontakt',
    'LNK_NEW_LEAD' => 'Kreiraj potencijalnog klijenta',
    'LNK_NEW_NOTE' => 'Kreiraj bilješku',
    'LNK_NEW_TASK' => 'Kreiraj zadatak',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LNK_NEW_CALL' => 'Zabilježi poziv',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_OPPORTUNITY' => 'Kreiraj priliku',
    'LNK_SELECT_ACCOUNTS' => ' <b>ILI</b> Odaberi tvrtku',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Jeste li sigurni želite li izbrisati ovaj zapis?',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this lead from this case?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanje',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodijeljeni korisnik',
    'LBL_PROSPECT_LIST' => 'Lista mogućih klijenata',
    'LBL_CAMPAIGN_LEAD' => 'Kampanje',
    'LBL_BIRTHDATE' => 'Datum rođenja:',
    'LBL_ASSISTANT_PHONE' => 'Telefon pomoćnika',
    'LBL_ASSISTANT' => 'Pomoćnik',
    'LBL_CREATED_USER' => 'Kreirani korisnik',
    'LBL_MODIFIED_USER' => 'Modificirani korisnik',
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Potrebno',
    'LBL_CONVERT_SELECT' => 'Dozvoli odabir',
    'LBL_CONVERT_COPY' => 'Kopiraj podatke',
    'LBL_CONVERT_EDIT' => 'Uredi',
    'LBL_CONVERT_DELETE' => 'Izbriši',
    'LBL_CONVERT_ADD_MODULE' => 'Dodaj modul',
    'LBL_CREATE' => 'Kreiraj',
    'LBL_SELECT' => ' <b>ILI</b> Odaberi',
    'LBL_WEBSITE' => 'Web stranica',
    'LNK_IMPORT_LEADS' => 'Import Leads',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'The module to create a new record in.',
    'LBL_REQUIRED_TIP' => 'Required modules must be created or selected before the lead can be converted.',
    'LBL_COPY_TIP' => 'If checked, fields from the lead will be copied to fields with the same name in the newly created records.',
    'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
    'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
    'LBL_DELETE_TIP' => 'Remove this module from the convert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Premjesti aktivnosti u',
    'LBL_ACTIVITIES_COPY' => 'Kopiraj aktivnosti',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID kampanje',
    'LBL_EDITLAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Unesite datum' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Učitavanje' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Uredi' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Događaji',
);
