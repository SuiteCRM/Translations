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
    'LBL_INVITEE' => 'Pavaldiniai',
    'LBL_MODULE_TITLE' => 'Adresatai: pradžia',
    'LBL_SEARCH_FORM_TITLE' => 'Adresato paieška',
    'LBL_LIST_FORM_TITLE' => 'Adresatų sąrašas',
    'LBL_NEW_FORM_TITLE' => 'Naujas adresatas',
    'LBL_LIST_NAME' => 'Vardas',
    'LBL_LIST_LAST_NAME' => 'Pavardė',
    'LBL_LIST_TITLE' => 'Pareigybės',
    'LBL_LIST_EMAIL_ADDRESS' => 'el.paštas',
    'LBL_LIST_PHONE' => 'Telefonas',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_ASSIGNED_TO_ID' => 'Priskirtas:',
    'LBL_CAMPAIGN_ID' => 'Kampanijos ID',
    'LBL_EXISTING_ACCOUNT' => 'Panaudotas esamas klientas',
    'LBL_CREATED_ACCOUNT' => 'Sukūrė naują įmonę',
    'LBL_CREATED_CALL' => 'Sukūrė naują skambutį',
    'LBL_CREATED_MEETING' => 'Sukūrė naują susitikimą',
    'LBL_NAME' => 'Vardas:',
    'LBL_PROSPECT_INFORMATION' => 'Adresato informacija', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Daugiau informacijos',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_OFFICE_PHONE' => 'Telefonas:',
    'LBL_ANY_PHONE' => 'Bet koks telefonas:',
    'LBL_PHONE' => 'Telefonas:',
    'LBL_LAST_NAME' => 'Pavardė:',
    'LBL_MOBILE_PHONE' => 'Mobilus telefonas:',
    'LBL_HOME_PHONE' => 'Namų:',
    'LBL_OTHER_PHONE' => 'Kitas telefonas:',
    'LBL_FAX_PHONE' => 'Faksas:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pagrindinio adreso gatvė:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pagrindinio adreso miestas:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pirminis adresas šalis:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pagrindinio adreso gyvenvietė:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pagrindinio adreso pašto kodas:',
    'LBL_ALT_ADDRESS_STREET' => 'Kito adreso gatvė:',
    'LBL_ALT_ADDRESS_CITY' => 'Kito adreso miestas:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Kito adreso šalis:',
    'LBL_ALT_ADDRESS_STATE' => 'Kito adreso rajonas:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Kito adreso pašto kodas:',
    'LBL_TITLE' => 'Pareigos:',
    'LBL_DEPARTMENT' => 'Skyrius:',
    'LBL_BIRTHDATE' => 'Gimtadienis:',
    'LBL_EMAIL_ADDRESS' => 'El.paštas:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Kitas laiškas:',
    'LBL_ANY_EMAIL' => 'El.paštas:',
    'LBL_ASSISTANT' => 'Asistentas:',
    'LBL_ASSISTANT_PHONE' => 'Asistento telefonas:',
    'LBL_DO_NOT_CALL' => 'Neskambinti:',
    'LBL_EMAIL_OPT_OUT' => 'Nesiųsti el. pašto:',
    'LBL_PRIMARY_ADDRESS' => 'Pagrindinio adresas:',
    'LBL_ALTERNATE_ADDRESS' => 'Kitas adresas:',
    'LBL_ANY_ADDRESS' => 'Kitas adresas:',
    'LBL_CITY' => 'Miestas:',
    'LBL_STATE' => 'Apskritis ar Regionas:',
    'LBL_POSTAL_CODE' => 'Pašto kodas:',
    'LBL_COUNTRY' => 'Šalis:',
    'LBL_ADDRESS_INFORMATION' => 'Adresas:',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LBL_OPP_NAME' => 'Pardavimo pavadinimas:',
    'LBL_IMPORT_VCARD' => 'Importuoti vizitinę kortelę',
    'LBL_IMPORT_VCARDTEXT' => 'Automatiškai sukurti naują kontaktą importuojant vizitinę kortelę.',
    'LBL_DUPLICATE' => 'Galimas adresatų dubliavimas',
    'MSG_SHOW_DUPLICATES' => 'Sukuriant šį kontaktą gali būti sukurtas dublikatas. Galite paspausti Saugoti ir tęsti kuriant naują kontaktą arba galite paspausti  Atšaukti.',
    'MSG_DUPLICATE' => 'Sukuriant šį kontaktą gali būti sukurtas dublikatas. Jūs galite pasirinkti kontaktą iš sąrašo arba galite paspausti Saugoti  ir tęsti naujo kontakto kūrimą su anksčiau įvestais duomenimis.',
    'LNK_IMPORT_VCARD' => 'Sukurti iš vizitinės kortelės',
    'LNK_NEW_ACCOUNT' => 'Sukurti paskyrą',
    'LNK_NEW_OPPORTUNITY' => 'Sukurti pardavimą',
    'LNK_NEW_CASE' => 'Sukurti aptarnavimą',
    'LNK_NEW_NOTE' => 'Sukurti užrašą',
    'LNK_NEW_CALL' => 'Registruoti skambutį',
    'LNK_NEW_EMAIL' => 'Archyvuoti el. paštą',
    'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
    'LNK_NEW_TASK' => 'Sukurti užduotį',
    'LNK_NEW_APPOINTMENT' => 'Sukurti susitikimą',
    'LNK_IMPORT_PROSPECTS' => 'Importuoti adresatus',
    'NTC_DELETE_CONFIRMATION' => 'Ar tikrai norite ištrinti šį įrašą ?',
    'NTC_REMOVE_CONFIRMATION' => 'Ar tikrai norite išimti kontaktą iš šio aptarnavimo?',
    'ERR_DELETE_RECORD' => 'Įrašo numeris turi būti nurodytas norint ištrinti kontaktą.',
    'LBL_SALUTATION' => 'Sveikinimas',
    'LBL_CREATED_OPPORTUNITY' => 'Sukūrė naują pardavimą',
    'LNK_SELECT_ACCOUNT' => "Pasirinkite klientą",
    'LNK_NEW_PROSPECT' => 'Sukurti adresatą',
    'LNK_PROSPECT_LIST' => 'Adresatai',
    'LNK_NEW_CAMPAIGN' => 'Sukurti kampaniją',
    'LNK_CAMPAIGN_LIST' => 'Kampanijos',
    'LNK_NEW_PROSPECT_LIST' => 'Sukurti adresatų sąrašą',
    'LNK_PROSPECT_LIST_LIST' => 'Adresatų sąrašas',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pasirinkti pažymėtus adresatus',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Pasirinkti pažymėtus adresatus',
    'LBL_INVALID_EMAIL' => 'Neteisingas el. paštas:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Adresatai',
    'LBL_PROSPECT_LIST' => 'Kandidatų sąrašas',
    'LBL_CONVERT_BUTTON_TITLE' => 'Pakeisti adresatą',
    'LBL_CONVERT_BUTTON_LABEL' => 'Pakeisti adresatą',
    'LNK_NEW_CONTACT' => 'Naujas kontaktas',
    'LBL_CREATED_CONTACT' => "Sukūrė naują kontaktą",
    'LBL_CAMPAIGNS' => 'Kampanijos',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanijos istorija',
    'LBL_TRACKER_KEY' => 'Sekamos nuorodos raktas',
    'LBL_LEAD_ID' => 'Potencialaus kontakto Id',
    'LBL_CONVERTED_LEAD' => 'Konvertuotas potencialus kontaktas',
    'LBL_ACCOUNT_NAME' => 'Kliento pavadinimas',
    'LBL_EDIT_ACCOUNT_NAME' => 'Kliento pavadinimas:',
    'LBL_CREATED_USER' => 'Sukūrė',
    'LBL_MODIFIED_USER' => 'Redagavo Vartotojas',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Įvykiai',
);
