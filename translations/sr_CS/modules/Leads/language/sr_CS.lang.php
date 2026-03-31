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

    'ERR_DELETE_RECORD' => 'Morate da navedete broj zapisa da bi obrisali potencijalnog klijenta.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Opis kompanije',
    'LBL_ACCOUNT_ID' => 'ID naloga',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativni grad',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativna zemlja',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativi poštanski kod',
    'LBL_ALT_ADDRESS_STATE' => 'Alterntivna država',
    'LBL_ALT_ADDRESS_STREET_2' => 'Altrenativna ulica br.2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativana ulica br.3',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativna ulica',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'ID broj kontakta',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Naziv potencijalnog klijenta:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Potencijalni klijent-Planirana prodaja:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Potencijalni klijent:',
    'LBL_CONVERTED_ACCOUNT' => 'Konvertovane kompanije:',
    'LBL_CONVERTED_CONTACT' => 'Konvertovani kontakt:',
    'LBL_CONVERTED_OPP' => 'Konvertovane planirane prodaje:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'K',
    'LBL_CONVERTLEAD_TITLE' => 'Konvertuj potencijalnog klijenta',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Upozorenje: Postoji mogućnost da je ovaj potencijalni klijent već konvertovan ',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'u kontakt',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'Kreirao je novu',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Slični potencijalni klijenti',
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
    'LBL_IMPORT_VCARDTEXT' => 'Automatski kreiraj novog potencijalnog klijenta uvozom vKarte iz Vašeg fajl sistema.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Opis izvora informacija o potencijalnom klijentu:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Naziv potencijalnog klijenta',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Lista potencijalnih klijenata',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Opis izvora informacija o potencijalnom klijentu',
    'LBL_LIST_LEAD_SOURCE' => 'Izvor informacija o potencijalnom klijentu',
    'LBL_LIST_MY_LEADS' => 'Moji potencijalni klijenti',
    'LBL_LIST_NAME' => 'Naziv',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'Prosleđeno od',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Radno mesto',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Leads',
    'LBL_MODULE_TITLE' => 'Potencijalni kljenti: Početna strana',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Novi potencijalni klijent',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Iznos planirane prodaje:',
    'LBL_OPPORTUNITY_ID' => 'ID broj planirane prodaje',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Aplikacija portala',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primarni grad',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primarna država',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primarni poštanski broj',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primarna država',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Ulica br.2 primarne adrese',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ulica br.3 primarne adrese',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primarna ulica',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'Prosleđeno od:',
    'LBL_REPORTS_TO_ID' => 'Izveštava ID broju',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga potencijalnih klijenata',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Odaberi označene potencijalne klijente',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Opis stanja:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Radno mesto:',
    'LNK_IMPORT_VCARD' => 'Kreiraj potencijalnog klijenta iz digitalne vizitkarte',
    'LNK_LEAD_LIST' => 'Prikaži potencijalne klijente',
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
    'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Izaberi Kompaniju',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Izaberi kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovog potencijalnog klijenta iz ovog predmeta?',
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
    'LBL_CONVERT_SELECT' => 'Dozvolite selekciju',
    'LBL_CONVERT_COPY' => 'Kopiraj Podatke',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'Dodaj modul',
    'LBL_CREATE' => 'Create',
    'LBL_SELECT' => ' <b>ILI</b> Izaberite',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Uvezi potencijalne klijente',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modul koji kreira nove zapise u.',
    'LBL_REQUIRED_TIP' => 'Neophodni moduli moraju da se kreiraju ili izaberu pre nego što potencijalni klijent može da se konvertuje.',
    'LBL_COPY_TIP' => 'Ako su obeležena, polja iz potencijalnog kontakta će biti kopirana u polja sa istim imenom u novim zapisima.',
    'LBL_SELECTION_TIP' => 'Moduli sa poljem za vezu u Kontaktima mogu se odabrati radije nego da se kreiraju tokom procesa konvertovanja potencijalnog klijenta.',
    'LBL_EDIT_TIP' => 'Promeni konvertovani raspored za ovaj modul',
    'LBL_DELETE_TIP' => 'Ukloni ovaj modul iz konvertovanog rasporeda.',

    'LBL_ACTIVITIES_MOVE' => 'Premesti aktivnosti na',
    'LBL_ACTIVITIES_COPY' => 'kopiraj aktivnosti na',
    'LBL_ACTIVITIES_MOVE_HELP' => "Izaberite upis u koji ćete prebaciti aktivnosti ovog potencijalnog klijenta. Zadaci, Pozivi, Sastanci, Beleške i poruke e-pošte će biti prebačene u taj upis(ili te upise).",
    'LBL_ACTIVITIES_COPY_HELP' => "Izaberite upis(e) u koji želite da kopirate aktivnosti ovog potencijalnog klijenta. Novi Zadaci, Pozivi, Sastanci, Beleške će biti napravljeni za izabrani upis(ili za sve izabrane upise). Poruke e-pošte će biti povezane sa izabranim kontaktom(ili kontaktima).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
