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
    'LBL_MODULE_NAME' => 'Ciljevi',
    'LBL_MODULE_ID' => 'Ciljevi',
    'LBL_INVITEE' => 'Direktni izvještaji',
    'LBL_MODULE_TITLE' => 'Ciljevi: Početno',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje ciljeva',
    'LBL_LIST_FORM_TITLE' => 'Lista ciljeva',
    'LBL_NEW_FORM_TITLE' => 'Novi cilj',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_LIST_TITLE' => 'Zanimanje',
    'LBL_LIST_EMAIL_ADDRESS' => 'e-pošta',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Ime',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno',
    'LBL_ASSIGNED_TO_ID' => 'Dodijeljeno:',
    'LBL_CAMPAIGN_ID' => 'ID kampanje',
    'LBL_EXISTING_ACCOUNT' => 'Koristi postojeću tvrtku',
    'LBL_CREATED_ACCOUNT' => 'Kreirana nova tvrtka',
    'LBL_CREATED_CALL' => 'Kreiran novi poziv',
    'LBL_CREATED_MEETING' => 'Kreiran novi sastanak',
    'LBL_NAME' => 'Naziv:',
    'LBL_PROSPECT_INFORMATION' => 'Pregled', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Više informacija',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_OFFICE_PHONE' => 'Uredski telefon',
    'LBL_ANY_PHONE' => 'Bilo koji telefonski broj:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_MOBILE_PHONE' => 'Mobitel:',
    'LBL_HOME_PHONE' => 'Početno:',
    'LBL_OTHER_PHONE' => 'Ostali telefonski broj:',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ulica primarne adrese:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Grad primarne adrese:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Zemlj primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primarna adresa županije',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Poštanski broj primarne adrese:',
    'LBL_ALT_ADDRESS_STREET' => 'Ulica alternativne adrese:',
    'LBL_ALT_ADDRESS_CITY' => 'Grad alternativne adrese:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Zemlja alternativne adrese:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativna adresa županije:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Poštanski kod alternativne adrese:',
    'LBL_TITLE' => 'Zanimanje:',
    'LBL_DEPARTMENT' => 'Odjel:',
    'LBL_BIRTHDATE' => 'Datum rođenja:',
    'LBL_EMAIL_ADDRESS' => 'Adresa e-pošte:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ostala e-pošta:',
    'LBL_ANY_EMAIL' => 'Bilo koja e-pošta:',
    'LBL_ASSISTANT' => 'Pomoćnik:',
    'LBL_ASSISTANT_PHONE' => 'Pomoćnikov telefon:',
    'LBL_DO_NOT_CALL' => 'Ne zovi:',
    'LBL_EMAIL_OPT_OUT' => 'E-pošta za odjavu:',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
    'LBL_ALTERNATE_ADDRESS' => 'Ostala adresa:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_CITY' => 'Grad',
    'LBL_STATE' => 'Država ili regija:',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_COUNTRY' => 'Država',
    'LBL_ADDRESS_INFORMATION' => 'Podaci o adresi',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_OPP_NAME' => 'Ime prodajne prilike:',
    'LBL_IMPORT_VCARD' => 'Uvoz vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatski kreirajte novi kontakt pomoću uvoza vCard iz Vaše sistemske datoteke.',
    'LBL_DUPLICATE' => 'Mogući duplikati ciljeva',
    'MSG_SHOW_DUPLICATES' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Create Target to continue creating this new target, or select an existing target listed below.',
    'MSG_DUPLICATE' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Save to continue creating this new target, or click Cancel to return to the module without creating the target.',
    'LNK_IMPORT_VCARD' => 'Kreiraj od vCard',
    'LNK_NEW_ACCOUNT' => 'Kreiraj tvrtku',
    'LNK_NEW_OPPORTUNITY' => 'Kreiraj priliku',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LNK_NEW_NOTE' => 'Kreiraj bilješku ili privitak',
    'LNK_NEW_CALL' => 'Zabilježi poziv',
    'LNK_NEW_EMAIL' => 'Arhiviraj e-poštu',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_TASK' => 'Kreiraj zadatak',
    'LNK_NEW_APPOINTMENT' => 'Kreiraj sastanak',
    'LNK_IMPORT_PROSPECTS' => 'Uvoz ciljeva',
    'NTC_DELETE_CONFIRMATION' => 'Jeste li sigurni želite li izbrisati ovaj zapis?',
    'NTC_REMOVE_CONFIRMATION' => 'Jeste li sigurni želite li ukloniti ovaj kontakt iz slučaja?',
    'ERR_DELETE_RECORD' => 'Broj zapisa mora biti označen kako bi se izbrisao kontakt.',
    'LBL_SALUTATION' => 'Pozdrav',
    'LBL_CREATED_OPPORTUNITY' => 'Kreirana nova prodajna prilika',
    'LNK_SELECT_ACCOUNT' => "Odaberi tvrtku",
    'LNK_NEW_PROSPECT' => 'Kreiraj cilj',
    'LNK_PROSPECT_LIST' => 'Pregledaj ciljeve',
    'LNK_NEW_CAMPAIGN' => 'Kreiraj kampanju',
    'LNK_CAMPAIGN_LIST' => 'Kampanje',
    'LNK_NEW_PROSPECT_LIST' => 'Kreiraj listu ciljeva',
    'LNK_PROSPECT_LIST_LIST' => 'Liste ciljeva',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Odaberi provjerene ciljeve',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Odaberi provjerene ciljeve',
    'LBL_INVALID_EMAIL' => 'Pogrešna e-pošta:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ciljevi',
    'LBL_PROSPECT_LIST' => 'Lista mogućih klijenata',
    'LBL_CONVERT_BUTTON_TITLE' => 'Pretvori cilj',
    'LBL_CONVERT_BUTTON_LABEL' => 'Pretvori cilj',
    'LNK_NEW_CONTACT' => 'Novi kontakt',
    'LBL_CREATED_CONTACT' => "Kreiran novi kontakt",
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Dnevnik kampanje',
    'LBL_TRACKER_KEY' => 'Ključ trackera',
    'LBL_LEAD_ID' => 'Id potencijalnog klijenta',
    'LBL_CONVERTED_LEAD' => 'Converted Lead',
    'LBL_ACCOUNT_NAME' => 'Ime tvrtke',
    'LBL_EDIT_ACCOUNT_NAME' => 'Ime tvrtke:',
    'LBL_CREATED_USER' => 'Kreirani korisnik',
    'LBL_MODIFIED_USER' => 'Modificirani korisnik',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Povijest',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Događaji',
);
