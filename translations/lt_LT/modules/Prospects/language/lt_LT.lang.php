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
    'LBL_MODULE_NAME' => 'Adresatai',
    'LBL_MODULE_ID' => 'Adresatai',
    'LBL_INVITEE' => 'Tiesioginiai pavaldiniai',
    'LBL_MODULE_TITLE' => 'Adresatai: pradžia',
    'LBL_SEARCH_FORM_TITLE' => 'Adresato paieška',
    'LBL_LIST_FORM_TITLE' => 'Target List',
    'LBL_NEW_FORM_TITLE' => 'Naujas adresatas',
    'LBL_LIST_NAME' => 'Vardas',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'el.paštas',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_ASSIGNED_TO_ID' => 'Priskirtas:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EXISTING_ACCOUNT' => 'Naudojo esamą klientą',
    'LBL_CREATED_ACCOUNT' => 'Sukurtas naujas klientas',
    'LBL_CREATED_CALL' => 'Sukurtas naujas skambutis',
    'LBL_CREATED_MEETING' => 'Sukurtas naujas susitikimas',
    'LBL_NAME' => 'Vardas:',
    'LBL_PROSPECT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'More Information',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_OFFICE_PHONE' => 'Telefonas:',
    'LBL_ANY_PHONE' => 'Bet koks tel. Nr.:',
    'LBL_PHONE' => 'Telefonas',
    'LBL_LAST_NAME' => 'Pavardė',
    'LBL_MOBILE_PHONE' => 'Mobilus:',
    'LBL_HOME_PHONE' => 'Namų',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pirminis adresas gatvė:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pirminis adresas miestas:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pirminis adresas šalis:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pagrindinio adreso rajonas',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pirminis adresas pašto kodas:',
    'LBL_ALT_ADDRESS_STREET' => 'Kita adreso gatvė:',
    'LBL_ALT_ADDRESS_CITY' => 'Kitas adreso miestas:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Kita adreso šalis:',
    'LBL_ALT_ADDRESS_STATE' => 'Kitas adreso rajonas',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Kitas adreso pašto kodas:',
    'LBL_TITLE' => 'Pareigos:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_EMAIL_ADDRESS' => 'El. paštas:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Kitas laiškas:',
    'LBL_ANY_EMAIL' => 'Bet koks el. paštas:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_EMAIL_OPT_OUT' => 'Nesiųsti:',
    'LBL_PRIMARY_ADDRESS' => 'Pirminis Adresas:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Bet koks adresas:',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_ADDRESS_INFORMATION' => 'Adreso informacija',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_IMPORT_VCARD' => 'Importuoti vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatiškai sukurkite naują kontaktą importuodami vCard iš savo failų sistemos.',
    'LBL_DUPLICATE' => 'Galimas adresatų dubliavimas',
    'MSG_SHOW_DUPLICATES' => 'Sukuriant šį kontaktą gali būti sukurtas dublikatas. Galite paspausti Saugoti ir tęsti kuriant naują kontaktą arba galite paspausti  Atšaukti.',
    'MSG_DUPLICATE' => 'Sukuriant šį kontaktą gali būti sukurtas dublikatas. Jūs galite pasirinkti kontaktą iš sąrašo arba galite paspausti Saugoti  ir tęsti naujo kontakto kūrimą su anksčiau įvestais duomenimis.',
    'LNK_IMPORT_VCARD' => 'Create From vCard',
    'LNK_NEW_ACCOUNT' => 'Sukurti klientą',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_CASE' => 'Sukurti aptarnavimą',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Suplanuoti skambutį',
    'LNK_NEW_EMAIL' => 'Archyvuoti laišką',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_APPOINTMENT' => 'Sukurti paskyrimą',
    'LNK_IMPORT_PROSPECTS' => 'Importuoti adresatus',
    'NTC_DELETE_CONFIRMATION' => 'Ar tikrai norite ištrinti šį įrašą ?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Ar tikrai norite išimti kontaktą iš šio aptarnavimo?',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the contact.',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_CREATED_OPPORTUNITY' => 'Sukurtas naujas pardavimas',
    'LNK_SELECT_ACCOUNT' => "Pasirinkti klientą",
    'LNK_NEW_PROSPECT' => 'Create Target',
    'LNK_PROSPECT_LIST' => 'View Targets',
    'LNK_NEW_CAMPAIGN' => 'Create Campaign',
    'LNK_CAMPAIGN_LIST' => 'Campaigns',
    'LNK_NEW_PROSPECT_LIST' => 'Create Target List',
    'LNK_PROSPECT_LIST_LIST' => 'Adresatų sąrašas',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pasirinkti pažymėtus adresatus',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Targets',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Adresatai',
    'LBL_PROSPECT_LIST' => 'Adresatų sąrašas',
    'LBL_CONVERT_BUTTON_TITLE' => 'Pakeisti adresatą',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convert Target',
    'LNK_NEW_CONTACT' => 'New Contact',
    'LBL_CREATED_CONTACT' => "Sukurtas naujas kontaktas",
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanijos istorija',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'Potencialaus kontakto Id',
    'LBL_CONVERTED_LEAD' => 'Konvertuotas potencialus kontaktas',
    'LBL_ACCOUNT_NAME' => 'Kliento pavadinimas',
    'LBL_EDIT_ACCOUNT_NAME' => 'Kliento pavadinimas:',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Redagavo',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
