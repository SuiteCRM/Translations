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
    'ERR_DELETE_RECORD' => 'Nurodykite įrašą norėdami ištrinti kontaktą.',
    'LBL_ACCOUNT_ID' => 'Kliento ID:',
    'LBL_ACCOUNT_NAME' => 'Kliento pavadinimas:',
    'LBL_CAMPAIGN' => 'Kampanija:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_ADDRESS_INFORMATION' => 'Adresas:',
    'LBL_ALT_ADDRESS_CITY' => 'Kito adreso miestas:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Kito adreso šalis:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Kito adreso pašto kodas:',
    'LBL_ALT_ADDRESS_STATE' => 'Kito adreso rajonas:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Kita adreso gatvė:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Kita adreso gatvė 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Kito adreso gatvė:',
    'LBL_ALTERNATE_ADDRESS' => 'Kitas adresas:',
    'LBL_ALT_ADDRESS' => 'Kitas adresas:',
    'LBL_ANY_ADDRESS' => 'Kitas adresas:',
    'LBL_ANY_EMAIL' => 'El.paštas:',
    'LBL_ANY_PHONE' => 'Bet koks telefonas:',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas:',
    'LBL_ASSIGNED_TO_ID' => 'Atsakingas vartotojas',
    'LBL_ASSISTANT_PHONE' => 'Asistento telefonas:',
    'LBL_ASSISTANT' => 'Asistentas:',
    'LBL_BIRTHDATE' => 'Gimtadienis:',
    'LBL_CITY' => 'Miestas:',
    'LBL_CAMPAIGN_ID' => 'Kampanijos ID',
    'LBL_CONTACT_INFORMATION' => 'Adresato informacija', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Kontakto vardas:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontaktas-Pardavimas:',
    'LBL_CONTACT_ROLE' => 'Rolė',
    'LBL_CONTACT' => 'Kontaktas:',
    'LBL_COUNTRY' => 'Šalis:',
    'LBL_CREATED_ACCOUNT' => 'Sukūrė naują įmonę',
    'LBL_CREATED_CALL' => 'Sukūrė naują skambutį',
    'LBL_CREATED_CONTACT' => 'Sukūrė naują kontaktą',
    'LBL_CREATED_MEETING' => 'Sukūrė naują susitikimą',
    'LBL_CREATED_OPPORTUNITY' => 'Sukūrė naują pardavimą',
    'LBL_DATE_MODIFIED' => 'Redagavimo data:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontaktas',
    'LBL_DEPARTMENT' => 'Skyrius:',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Pavaldiniai',
    'LBL_DO_NOT_CALL' => 'Neskambinti:',
    'LBL_DUPLICATE' => 'Galimas kontaktų dubliavimasis',
    'LBL_EMAIL_ADDRESS' => 'El.paštas:',
    'LBL_EMAIL_OPT_OUT' => 'Nesiųsti el. pašto:',
    'LBL_EXISTING_ACCOUNT' => 'Panaudotas esamas klientas',
    'LBL_EXISTING_CONTACT' => 'Panaudotas esamas kontaktas',
    'LBL_EXISTING_OPPORTUNITY' => 'Naudojo esamą pardavimą',
    'LBL_FAX_PHONE' => 'Faksas:',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    'LBL_HOME_PHONE' => 'Namų:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importuoti vizitinę kortelę',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatiškai sukurti naują kontaktą importuojant vizitinę kortelę.',
    'LBL_INVALID_EMAIL' => 'Neteisingas el. paštas:',
    'LBL_INVITEE' => 'Pavaldiniai',
    'LBL_LAST_NAME' => 'Pavardė:',
    'LBL_LEAD_SOURCE' => 'Potencialaus Kliento Šaltinis:',
    'LBL_LIST_ACCEPT_STATUS' => 'Patvirtinti',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliento pavadinimas',
    'LBL_LIST_CONTACT_NAME' => 'Kontakto vardas',
    'LBL_LIST_CONTACT_ROLE' => 'Rolė',
    'LBL_LIST_EMAIL_ADDRESS' => 'el.paštas',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Kontaktų sąrašas',
    'LBL_LIST_LAST_NAME' => 'Pavardė',
    'LBL_LIST_NAME' => 'Vardas',
    'LBL_LIST_PHONE' => 'Telefonas',
    'LBL_LIST_TITLE' => 'Pareigybės',
    'LBL_MOBILE_PHONE' => 'Mobilus telefonas:',
    'LBL_MODIFIED' => 'Redaguotojo ID:',
    'LBL_MODULE_NAME' => 'Kontaktas',
    'LBL_MODULE_TITLE' => 'Kliento kontaktai: Pradžia',
    'LBL_NAME' => 'Vardas:',
    'LBL_NEW_FORM_TITLE' => 'Naujas kontaktas',
    'LBL_NOTE_SUBJECT' => 'Užrašo tema',
    'LBL_OFFICE_PHONE' => 'Telefonas:',
    'LBL_OPP_NAME' => 'Pardavimo pavadinimas:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Pardavimų rolės ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Rolė',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Kitas laiškas:',
    'LBL_OTHER_PHONE' => 'Kitas telefonas:',
    'LBL_PHONE' => 'Telefonas:',
    'LBL_PORTAL_APP' => 'Portalo programa:',
    'LBL_PORTAL_INFORMATION' => 'Portalo informacija',
    'LBL_PORTAL_NAME' => 'Portalo pavadinimas:',
    'LBL_STREET' => 'Gatvė',
    'LBL_POSTAL_CODE' => 'Pašto kodas:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pagrindinio adreso miestas:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pirminis adresas šalis:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pagrindinio adreso pašto kodas:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pagrindinio adreso gyvenvietė:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Pirminis adresas gatvė 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Pirminis adresas gatvė 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pagrindinio adreso gatvė:',
    'LBL_PRIMARY_ADDRESS' => 'Pagrindinio adresas:',
    'LBL_PRODUCTS_TITLE' => 'Produktai',
    'LBL_REPORTS_TO_ID' => 'Pavaldus kam ID:',
    'LBL_REPORTS_TO' => 'Pavaldus kam:',
    'LBL_RESOURCE_NAME' => 'Resursų vardas',
    'LBL_SALUTATION' => 'Pasveikinimas:',
    'LBL_SAVE_CONTACT' => 'Išsaugoti kontaktą',
    'LBL_SEARCH_FORM_TITLE' => 'Kontaktų paieška',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pasirinkti pažymėtus kontaktus',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Pasirinkti pažymėtus kontaktus',
    'LBL_STATE' => 'Apskritis ar Regionas:',
    'LBL_SYNC_CONTACT' => 'Sinchronizuoti su Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Kandidatų sąrašas',
    'LBL_TITLE' => 'Pareigos:',
    'LNK_CONTACT_LIST' => 'Kliento kontaktai',
    'LNK_IMPORT_VCARD' => 'Sukurti iš vCard',
    'LNK_NEW_ACCOUNT' => 'Sukurti paskyrą',
    'LNK_NEW_APPOINTMENT' => 'Sukurti susitikimą',
    'LNK_NEW_CALL' => 'Registruoti skambutį',
    'LNK_NEW_CASE' => 'Sukurti aptarnavimą',
    'LNK_NEW_CONTACT' => 'Sukurti kontaktą',
    'LNK_NEW_EMAIL' => 'Archyvuoti el. paštą',
    'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
    'LNK_NEW_NOTE' => 'Sukurti užrašą',
    'LNK_NEW_OPPORTUNITY' => 'Sukurti pardavimą',
    'LNK_NEW_TASK' => 'Sukurti užduotį',
    'LNK_SELECT_ACCOUNT' => "Pasirinkite klientą",
    'NTC_DELETE_CONFIRMATION' => 'Ar tikrai norite ištrinti šį įrašą ?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Kuriant pardavimą reikia kliento.\n  Prašome sukurti naują klientą arba pasirinkite jau esamą.',
    'NTC_REMOVE_CONFIRMATION' => 'Ar tikrai norite išimti kontaktą iš šio aptarnavimo?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencialus kontaktas',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Galimybės',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentai',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopijuoti į pagrindinį adresą',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopijuoti į kitą adresą',

    'LBL_CASES_SUBPANEL_TITLE' => 'Atvejai',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Klaidos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektai',
    'LBL_PROJECTS_RESOURCES' => 'Projekto ištekliai',
    'LBL_CAMPAIGNS' => 'Kampanijos',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanijos',
    'LBL_LIST_CITY' => 'Miestas:',
    'LBL_LIST_STATE' => 'Rajonas',
    'LBL_HOMEPAGE_TITLE' => 'Mano kontaktai',
    'LBL_OPPORTUNITIES' => 'Galimybės',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktas',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektai',
    'LNK_IMPORT_CONTACTS' => 'Importuoti kontaktus',

    // SNIP
    'LBL_USER_SYNC' => 'Vartotojo Sinchronizavimas',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Įvykiai',

    'LBL_AOP_CASE_UPDATES' => 'Atvejo atnaujinimai',
    'LBL_CREATE_PORTAL_USER' => 'Sukurti Portalo Vartotoją',
    'LBL_ENABLE_PORTAL_USER' => 'Įgalinti Portalo Vartotoją',
    'LBL_DISABLE_PORTAL_USER' => 'Išjungti Portalo Vartotoją',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Nepavyko Sukurti portalo vartotojo',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Programai nepavyko įgalinti portalo vartotojo',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Nepavyko išjungti portalo vartotojo',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Sukurtas portalo vartotojas',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Įjungtas portalo vartotojas',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Išjungtas portalo vartotojas',
    'LBL_NO_JOOMLA_URL' => 'Ne portalo URL detalizuotas',
    'LBL_PORTAL_USER_TYPE' => 'Portalo Vartotojo Tipas',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Vartotojas Išjungtas',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',

    'LBL_AOS_CONTRACTS' => 'Sutartys',
    'LBL_AOS_INVOICES' => 'Sąskaitos',
    'LBL_AOS_QUOTES' => 'Pasiūlymai',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',

    'LBL_LIST_INVITE_STATUS' => 'Pakvietimo būsena',
);
