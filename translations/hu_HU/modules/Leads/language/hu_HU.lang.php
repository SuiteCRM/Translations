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
    'LBL_ACCOUNT_DESCRIPTION' => 'Ügyfél megjegyzés',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Ügyfélnév:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Cím információ',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatív cím (város):',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatív cím (megye):',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatív cím (irsz):',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatív cím (állam):',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatív cím (közterület2):',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatív cím (közterület3):',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatív cím',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Cím:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó:',
    'LBL_CITY' => 'Város:',
    'LBL_CONTACT_ID' => 'Kapcsolattartó ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Érdeklődő neve:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Érdeklődő-Lehetőség:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Érdeklődő:',
    'LBL_CONVERTED_ACCOUNT' => 'Konvertált Ügyfél:',
    'LBL_CONVERTED_CONTACT' => 'Konvertált Kapcsolattartó:',
    'LBL_CONVERTED_OPP' => 'Konvertált Lehetőség:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Érdeklődő konvertálása',
    'LBL_CONVERTLEAD' => 'Érdeklődő konvertálása',
    'LBL_CONVERTLEAD_WARNING' => 'Figyelem: Az Érdeklődő állapota "Konvertálva". Kapcsolat és / vagy kliensnév már létrehozva. Folytatáshoz kattintson a Mentés gombra, visszalépéshez a Mégsem gombra!',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Lehetséges kapcsolat:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'Létrehozva egy új',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Érdeklődők',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Üzenet szövege:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Hasonló Érdeklődők',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatikusan létrehoz - importálással - egy új Érdeklődőt a vCard fájlrendszerből.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Érdeklődő megjegyzés:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_LIST_CONTACT_NAME' => 'Érdeklődő megnevezése',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Létrehova',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Érdeklődő Lista',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Ajánlás forrásának leírása:',
    'LBL_LIST_LEAD_SOURCE' => 'Érdeklődő forrás',
    'LBL_LIST_MY_LEADS' => 'Érdeklődőim',
    'LBL_LIST_NAME' => 'Elnevezés',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'Hivatkozva',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Vezetők',
    'LBL_MODULE_TITLE' => 'Érdeklődők: Főoldal',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Új Érdeklődő',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Lehetőség összege:',
    'LBL_OPPORTUNITY_ID' => 'Lehetőség ID',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Egyéb eMail:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Portál alkalmazás',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Elsődleges cím (város)',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Elsődleges cím (megye)',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Elsődleges cím (irsz)',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Elsődleges cím (állam)',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Elsődleges cím (közterület2)',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Elsődleges cím (közterület3)',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Elsődleges cím (közterület1)',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'Hivatkozva:',
    'LBL_REPORTS_TO_ID' => 'Jelentést tesz (azonosító)',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Létrehozta',
    'LBL_SEARCH_FORM_TITLE' => 'Érdeklődő keresése',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Válasszon az ellenőrzött Érdeklődők közül',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Válasszon az ellenőrzött Érdeklődők közül',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Állapot leírása:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Beosztás:',
    'LNK_IMPORT_VCARD' => 'Érdeklődő létrehozása vCard állományból',
    'LNK_LEAD_LIST' => 'Érdeklődők megtekintése',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_LEAD' => 'Vezető létrehozása',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_CASE' => 'Eset létrehozása',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_SELECT_ACCOUNTS' => 'VAGY válasszon Ügyfelet',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_REMOVE_CONFIRMATION' => 'Biztosan el akarja választani az ajánlást az esettől?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
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
    'LBL_CONVERT_SELECT' => 'Kiválasztás engedélyezése',
    'LBL_CONVERT_COPY' => 'Adat másolás',
    'LBL_CONVERT_EDIT' => 'Szerkesztés',
    'LBL_CONVERT_DELETE' => 'Törlés',
    'LBL_CONVERT_ADD_MODULE' => 'Modul hozzáadása',
    'LBL_CREATE' => 'Létrehozás',
    'LBL_SELECT' => 'VAGY válassza ki',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Ajánlások importálása',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'A modul létrehoz egy új rekordot:',
    'LBL_REQUIRED_TIP' => 'Kötelező modulokat létre kell hozni vagy a meglévőkből kiválasztani, mielőtt az ajánlást konvertálni lehet.',
    'LBL_COPY_TIP' => 'Ha be van jelölve, a rendszer az ajánlásokban lévő mezőkről készít egy másolatot ugyanazzal a névvel az újonnan létrehozott rekordokban.',
    'LBL_SELECTION_TIP' => 'A Modulokat a Kapcsolatok mezőben lehet kiválasztani a konvertált ajánlási folyamatok létrehozása helyett.',
    'LBL_EDIT_TIP' => 'Módosítsa a konvertálási felületet ebben a modulban.',
    'LBL_DELETE_TIP' => 'Távolítsa el ezt a modult a konvertálási felületből.',

    'LBL_ACTIVITIES_MOVE' => 'Move Activities to',
    'LBL_ACTIVITIES_COPY' => 'Tevékenységek másolása',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Szerkesztés' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
