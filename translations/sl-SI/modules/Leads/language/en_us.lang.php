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

    'ERR_DELETE_RECORD' => 'Število zapisa mora biti definirano za izbris osebe.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Opis Partnerja',
    'LBL_ACCOUNT_ID' => 'ID partnerja',
    'LBL_ACCOUNT_NAME' => 'Ime Partnerja:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Informacije o naslovu',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativni naslov, Mesto',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativni naslov, Regija',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativni naslov, Poštna koda',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativni naslov, Država',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternativni naslov, Ulica 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativni naslov, Ulica 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativni naslov, Ulica',
    'LBL_ALTERNATE_ADDRESS' => 'Ostali naslovi:',
    'LBL_ALT_ADDRESS' => 'Ostali naslovi:',
    'LBL_ANY_ADDRESS' => 'Katerikoli naslov:',
    'LBL_ANY_EMAIL' => 'Katerikoli E-pošta:',
    'LBL_ANY_PHONE' => 'Katerikoli telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen ',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljen uporabnik:',
    'LBL_CITY' => 'Mesto:',
    'LBL_CONTACT_ID' => 'ID Kontakta',
    'LBL_CONTACT_INFORMATION' => 'Informacije o Partnerju', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Ime Potenciala:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Potencial-priložnosti:',
    'LBL_CONTACT_ROLE' => 'Vloga:',
    'LBL_CONTACT' => 'Potencial:',
    'LBL_CONVERTED_ACCOUNT' => 'Pretvorjen Partner:',
    'LBL_CONVERTED_CONTACT' => 'Pretvorjen Kontakt:',
    'LBL_CONVERTED_OPP' => 'Pretvorjena Priložnost:',
    'LBL_CONVERTED' => 'Spremenjen',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Pretvori Potencial',
    'LBL_CONVERTLEAD' => 'Pretvori Potencial',
    'LBL_CONVERTLEAD_WARNING' => 'Warning: The status of the Lead you are about to convert is "Converted". Contact and/or Account records may already have been created from the Lead. If you wish to continue with converting the Lead, click Save. To go back to the Lead without converting it, click Cancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Možen kontakt:',
    'LBL_COUNTRY' => 'Regija:',
    'LBL_CREATED_NEW' => 'Ustvarjen nov',
    'LBL_CREATED_ACCOUNT' => 'Ustvarjen nov partner',
    'LBL_CREATED_CALL' => 'Ustvarjen nov klic',
    'LBL_CREATED_CONTACT' => 'Ustvarjen nov kontakt',
    'LBL_CREATED_MEETING' => 'Ustvarjen nov sestanek',
    'LBL_CREATED_OPPORTUNITY' => 'Ustvarjena nova priložnost',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Potenciali',
    'LBL_DEPARTMENT' => 'Oddelek:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DO_NOT_CALL' => 'Ne kliči:',
    'LBL_DUPLICATE' => 'Podobni potenciali',
    'LBL_EMAIL_ADDRESS' => 'E-pošta:',
    'LBL_EMAIL_OPT_OUT' => 'Odjavljena E-pošta:',
    'LBL_EXISTING_ACCOUNT' => 'Uporabljen obstoječi Partner',
    'LBL_EXISTING_CONTACT' => 'Uporabljen obstoječi Kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Uporabljena obstoječa Priložnost',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zgodovina',
    'LBL_HOME_PHONE' => 'Domači telefon:',
    'LBL_IMPORT_VCARD' => 'Uvozi vKartico',
    'LBL_VCARD' => 'vKartica',
    'LBL_IMPORT_VCARDTEXT' => 'Automatsko kreiranje novega Potenciala z uvozom vkartice z vašega datotečnega sistema.',
    'LBL_INVALID_EMAIL' => 'Napačen Email:',
    'LBL_INVITEE' => 'Direktna poročila',
    'LBL_LAST_NAME' => 'Priimek:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Opis vira novih potencialov:',
    'LBL_LEAD_SOURCE' => 'Vir potencialov:',
    'LBL_LIST_ACCEPT_STATUS' => 'Sprejmi status',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Partnerja',
    'LBL_LIST_CONTACT_NAME' => 'Ime potenciala',
    'LBL_LIST_CONTACT_ROLE' => 'Vloga',
    'LBL_LIST_DATE_ENTERED' => 'Datum nastanka',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-pošta',
    'LBL_LIST_FIRST_NAME' => 'Ime',
    'LBL_LIST_FORM_TITLE' => 'Seznam potencialov',
    'LBL_LIST_LAST_NAME' => 'Priimek',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Opis vira novih potencialov',
    'LBL_LIST_LEAD_SOURCE' => 'Vir potencialov',
    'LBL_LIST_MY_LEADS' => 'Moji potenciali',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_PHONE' => 'Službeni telefon',
    'LBL_LIST_REFERED_BY' => 'Priporočeno od',
    'LBL_LIST_STATUS' => 'Stanje',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobilni telefon:',
    'LBL_MODULE_NAME' => 'Potenciali',
    'LBL_MODULE_TITLE' => 'Potenciali: Domov',
    'LBL_NAME' => 'Ime:',
    'LBL_NEW_FORM_TITLE' => 'Nov potencial',
    'LBL_OFFICE_PHONE' => 'Telefon v pisarni:',
    'LBL_OPP_NAME' => 'Ime Priložnosti:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Obseg priložnosti:',
    'LBL_OPPORTUNITY_ID' => 'ID Priložnosti',
    'LBL_OPPORTUNITY_NAME' => 'Ime Priložnosti:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Druga E-pošta:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Aplikacija',
    'LBL_PORTAL_INFORMATION' => 'Informacije o portalu',
    'LBL_PORTAL_NAME' => 'Ime portala:',
    'LBL_POSTAL_CODE' => 'Poštna številka:',
    'LBL_STREET' => 'Naslov',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primarni naslov, mesto',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primarni naslov, regija',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primarni naslov, poštna številka',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primarni naslov, država',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primarni naslov, Ulica 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primarni naslov, Ulica 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primarni naslov, Ulica',
    'LBL_PRIMARY_ADDRESS' => 'Glavni naslov:',
    'LBL_REFERED_BY' => 'Napotil:',
    'LBL_REPORTS_TO_ID' => 'Poročila na ID',
    'LBL_REPORTS_TO' => 'Odgovarja:',
    'LBL_SALUTATION' => 'Pozdrav',
    'LBL_MODIFIED' => 'Spremenil',
    'LBL_CREATED' => 'Ustvaril',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje potencialov',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Izberite odkljukane potenciale',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Izberite odkljukane potenciale',
    'LBL_STATE' => 'Država ali regija:',
    'LBL_STATUS_DESCRIPTION' => 'Opis statusa:',
    'LBL_STATUS' => 'Stanje:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Ustvari iz vKartice',
    'LNK_LEAD_LIST' => 'Potenciali',
    'LNK_NEW_ACCOUNT' => 'Ustvari Partnerja',
    'LNK_NEW_APPOINTMENT' => 'Načrtuj Klic',
    'LNK_NEW_CONTACT' => 'Ustvari kontakt',
    'LNK_NEW_LEAD' => 'Ustvari Potencial',
    'LNK_NEW_NOTE' => 'Ustvari opombo',
    'LNK_NEW_TASK' => 'Ustvari nalogo',
    'LNK_NEW_CASE' => 'Ustvari primer',
    'LNK_NEW_CALL' => 'Načrtuj klic',
    'LNK_NEW_MEETING' => 'Načrtuj sestanek',
    'LNK_NEW_OPPORTUNITY' => 'Ustvari priložnost',
    'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Select Account',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Ste prepričani, da želite izbrisati izbran vnos?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Ste prepričani, da želite odstraniti ta Potencial iz te Reklamacije?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanje',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljen uporabnik',
    'LBL_PROSPECT_LIST' => 'Seznam tarč',
    'LBL_CAMPAIGN_LEAD' => 'Kampanje',
    'LBL_BIRTHDATE' => 'Datum rojstva:',
    'LBL_ASSISTANT_PHONE' => 'Asistentov telefon',
    'LBL_ASSISTANT' => 'Asistent',
    'LBL_CREATED_USER' => 'Ustvarjen kontakt',
    'LBL_MODIFIED_USER' => 'Spremenjen uporabnik',
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Zahtevano',
    'LBL_CONVERT_SELECT' => 'Dovoli izbiro',
    'LBL_CONVERT_COPY' => 'Kopiraj podatke',
    'LBL_CONVERT_EDIT' => 'Uredi',
    'LBL_CONVERT_DELETE' => 'Izbriši',
    'LBL_CONVERT_ADD_MODULE' => 'Dodaj modul',
    'LBL_CREATE' => 'Ustvari',
    'LBL_SELECT' => ' &lt;b&gt;ali&lt;/b&gt; izberi',
    'LBL_WEBSITE' => 'Spletna stran',
    'LNK_IMPORT_LEADS' => 'Uvozi potenciale',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modul v kateren ustvarimo no zapis.',
    'LBL_REQUIRED_TIP' => 'Required modules must be created or selected before the lead can be converted.',
    'LBL_COPY_TIP' => 'If checked, fields from the lead will be copied to fields with the same name in the newly created records.',
    'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
    'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
    'LBL_DELETE_TIP' => 'Remove this module from the convert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Move Activities to',
    'LBL_ACTIVITIES_COPY' => 'Copy Activities to',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID Kampanje',
    'LBL_EDITLAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Vnesi datum' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Nalaganje' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Uredi' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Dogodki',
);
