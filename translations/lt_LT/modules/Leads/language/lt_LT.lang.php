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

    'ERR_DELETE_RECORD' => 'Įrašo numeris turi būti nurodytas, jeigu norite ištrinti potencialų kontaktą.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Kliento aprašymas',
    'LBL_ACCOUNT_ID' => 'Kliento ID',
    'LBL_ACCOUNT_NAME' => 'Kliento pavadinimas:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_ADDRESS_INFORMATION' => 'Adresas:',
    'LBL_ALT_ADDRESS_CITY' => 'Kito adreso miestas',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Kito adreso šalis',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Kito  adreso pašto kodas',
    'LBL_ALT_ADDRESS_STATE' => 'Kito adreso rajonas',
    'LBL_ALT_ADDRESS_STREET_2' => 'Kito adreso gatvė 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Kito adreso gatvė 3',
    'LBL_ALT_ADDRESS_STREET' => 'Kito adreso gatvė',
    'LBL_ALTERNATE_ADDRESS' => 'Kitas adresas:',
    'LBL_ALT_ADDRESS' => 'Kitas adresas:',
    'LBL_ANY_ADDRESS' => 'Kitas adresas:',
    'LBL_ANY_EMAIL' => 'El.paštas:',
    'LBL_ANY_PHONE' => 'Bet koks telefonas:',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_ASSIGNED_TO_ID' => 'Atsakingas vartotojas:',
    'LBL_CITY' => 'Miestas:',
    'LBL_CONTACT_ID' => 'Kontakto ID',
    'LBL_CONTACT_INFORMATION' => 'Adresato informacija', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Potencialaus kontakto vardas:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Potencialus kontaktas-Pardavimai:',
    'LBL_CONTACT_ROLE' => 'Rolė',
    'LBL_CONTACT' => 'Potencialus kontaktas:',
    'LBL_CONVERTED_ACCOUNT' => 'Konvertuotas klientas:',
    'LBL_CONVERTED_CONTACT' => 'Konvertuotas kontaktas:',
    'LBL_CONVERTED_OPP' => 'Konvertuota galimybė:',
    'LBL_CONVERTED' => 'Konvertuotas',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Konvertuoti į klientą',
    'LBL_CONVERTLEAD' => 'Konvertuoti į klientą',
    'LBL_CONVERTLEAD_WARNING' => 'Perspėjimas: potencialaus kliento statusas yra "konvertuotas".  Kontaktas ir/arba klientas jau galėjo būti sukurtas iš šio potencialaus kliento.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Galimas kontaktas:',
    'LBL_COUNTRY' => 'Šalis:',
    'LBL_CREATED_NEW' => 'Sukūrė naują',
    'LBL_CREATED_ACCOUNT' => 'Sukūrė naują įmonę',
    'LBL_CREATED_CALL' => 'Sukūrė naują skambutį',
    'LBL_CREATED_CONTACT' => 'Sukūrė naują kontaktą',
    'LBL_CREATED_MEETING' => 'Sukūrė naują susitikimą',
    'LBL_CREATED_OPPORTUNITY' => 'Sukūrė naują pardavimą',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Potencialus kontaktas',
    'LBL_DEPARTMENT' => 'Skyrius:',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LBL_DO_NOT_CALL' => 'Neskambinti:',
    'LBL_DUPLICATE' => 'Panašūs potencialūs kontaktai',
    'LBL_EMAIL_ADDRESS' => 'El.paštas:',
    'LBL_EMAIL_OPT_OUT' => 'Nesiųsti el. pašto:',
    'LBL_EXISTING_ACCOUNT' => 'Panaudotas esamas klientas',
    'LBL_EXISTING_CONTACT' => 'Panaudotas esamas kontaktas',
    'LBL_EXISTING_OPPORTUNITY' => 'Naudojo esamą pardavimą',
    'LBL_FAX_PHONE' => 'Faksas:',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    'LBL_HOME_PHONE' => 'Namų telefonas:',
    'LBL_IMPORT_VCARD' => 'Importuoti vizitinę kortelę',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatiškai sukūrė naują potencialų kontaktą iš importuotos vizitinės kortelės.',
    'LBL_INVALID_EMAIL' => 'Neteisingas el. paštas:',
    'LBL_INVITEE' => 'Pavaldiniai',
    'LBL_LAST_NAME' => 'Pavardė:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Pritraukimo metodo aprašymas:',
    'LBL_LEAD_SOURCE' => 'Potencialaus Kliento Šaltinis:',
    'LBL_LIST_ACCEPT_STATUS' => 'Patvirtinti',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliento pavadinimas',
    'LBL_LIST_CONTACT_NAME' => 'Potencialaus kontakto vardas',
    'LBL_LIST_CONTACT_ROLE' => 'Rolė',
    'LBL_LIST_DATE_ENTERED' => 'Sukurta',
    'LBL_LIST_EMAIL_ADDRESS' => 'el.paštas',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Potencialių kontaktų sąrašas',
    'LBL_LIST_LAST_NAME' => 'Pavardė',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Pritraukimo metodo aprašymas',
    'LBL_LIST_LEAD_SOURCE' => 'Pritraukimo metodas',
    'LBL_LIST_MY_LEADS' => 'Mano potencialūs kontaktai',
    'LBL_LIST_NAME' => 'Vardas',
    'LBL_LIST_PHONE' => 'Telefonas',
    'LBL_LIST_REFERED_BY' => 'Rekomendavo:',
    'LBL_LIST_STATUS' => 'Būsena',
    'LBL_LIST_TITLE' => 'Pareigybės',
    'LBL_MOBILE_PHONE' => 'Mobilus telefonas:',
    'LBL_MODULE_NAME' => 'Potencialus kontaktas',
    'LBL_MODULE_TITLE' => 'Potencialūs kontaktai: Pradžia',
    'LBL_NAME' => 'Vardas:',
    'LBL_NEW_FORM_TITLE' => 'Naujas potencialus kontaktas',
    'LBL_OFFICE_PHONE' => 'Telefonas:',
    'LBL_OPP_NAME' => 'Pardavimo pavadinimas:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Pardavimo suma:',
    'LBL_OPPORTUNITY_ID' => 'Pardavimo ID',
    'LBL_OPPORTUNITY_NAME' => 'Pardavimo pavadinimas:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Kitas laiškas:',
    'LBL_OTHER_PHONE' => 'Kitas telefonas:',
    'LBL_PHONE' => 'Telefonas:',
    'LBL_PORTAL_APP' => 'Portalo programa',
    'LBL_PORTAL_INFORMATION' => 'Portalo informacija',
    'LBL_PORTAL_NAME' => 'Portalo pavadinimas:',
    'LBL_POSTAL_CODE' => 'Pašto kodas:',
    'LBL_STREET' => 'Gatvė',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Miestas',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pagrindinio adreso šalis',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pagrindinio adreso pašto kodas',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pagrindinio adreso rajonas',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Pagrindinio adreso gatvė 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Pagrindinio adreso gatvė 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pagrindinio adreso gatvė',
    'LBL_PRIMARY_ADDRESS' => 'Pagrindinio adresas:',
    'LBL_REFERED_BY' => 'Rekomendavo:',
    'LBL_REPORTS_TO_ID' => 'Pavaldus kam ID',
    'LBL_REPORTS_TO' => 'Pavaldus kam:',
    'LBL_SALUTATION' => 'Sveikinimas',
    'LBL_MODIFIED' => 'Redagavo',
    'LBL_CREATED' => 'Sukūrė',
    'LBL_SEARCH_FORM_TITLE' => 'Potencialių kontaktų paieška',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pasirinkite pažymėtus potencialius kontaktus',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Pasirinkite pažymėtus potencialius kontaktus',
    'LBL_STATE' => 'Apskritis ar Regionas:',
    'LBL_STATUS_DESCRIPTION' => 'Statuso aprašymas:',
    'LBL_STATUS' => 'Būsena:',
    'LBL_TITLE' => 'Pareigos:',
    'LNK_IMPORT_VCARD' => 'Sukurti iš vizitinės kortelės',
    'LNK_LEAD_LIST' => 'Potencialūs kontaktai',
    'LNK_NEW_ACCOUNT' => 'Sukurti paskyrą',
    'LNK_NEW_APPOINTMENT' => 'Sukurti susitikimą',
    'LNK_NEW_CONTACT' => 'Sukurti kontaktą',
    'LNK_NEW_LEAD' => 'Sukurti potencialų kontaktą',
    'LNK_NEW_NOTE' => 'Sukurti užrašą',
    'LNK_NEW_TASK' => 'Sukurti užduotį',
    'LNK_NEW_CASE' => 'Sukurti aptarnavimą',
    'LNK_NEW_CALL' => 'Registruoti skambutį',
    'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
    'LNK_NEW_OPPORTUNITY' => 'Sukurti pardavimą',
    'LNK_SELECT_ACCOUNTS' => '<b>ARBA</b> Pasirinkite klientą',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Ar tikrai norite ištrinti šį įrašą ?',
    'NTC_REMOVE_CONFIRMATION' => 'Ar tikrai norite išimti šį potencialų kontaktą iš aptarnavimo?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanijos',
    'LBL_CAMPAIGN' => 'Kampanija:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atsakingas vartotojas',
    'LBL_PROSPECT_LIST' => 'Kandidatų sąrašas',
    'LBL_CAMPAIGN_LEAD' => 'Kampanijos',
    'LBL_BIRTHDATE' => 'Gimtadienis:',
    'LBL_ASSISTANT_PHONE' => 'Asistento telefonas',
    'LBL_ASSISTANT' => 'Asistentas',
    'LBL_CREATED_USER' => 'Sukūrė',
    'LBL_MODIFIED_USER' => 'Redagavo Vartotojas',
    'LBL_CAMPAIGNS' => 'Kampanijos',
    'LBL_CONVERT_MODULE_NAME' => 'Modulis',
    'LBL_CONVERT_REQUIRED' => 'Reikiamas',
    'LBL_CONVERT_SELECT' => 'Leisti pasirinkti',
    'LBL_CONVERT_COPY' => 'Kopijuoti duomenis',
    'LBL_CONVERT_EDIT' => 'Redaguoti',
    'LBL_CONVERT_DELETE' => 'Ištrinti',
    'LBL_CONVERT_ADD_MODULE' => 'Pridėti modulį',
    'LBL_CREATE' => 'Sukurti',
    'LBL_SELECT' => '<b>ARBA</b> Pasirinkti',
    'LBL_WEBSITE' => 'Tinklapis',
    'LNK_IMPORT_LEADS' => 'Importuoti potencialių kontaktą',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modulis kuriame galima sukurti naują įrašą.',
    'LBL_REQUIRED_TIP' => 'Reikalingi moduliai turi būti sukurti arba pasirinkti prieš potencialaus kontakto konvertavimą.',
    'LBL_COPY_TIP' => 'Jei pažymėti, laukai iš potencialaus kontakto bus perkopijuoti į naujai sukurtų įrašų atitinkamus laukus.',
    'LBL_SELECTION_TIP' => 'Moduliai su susietu lauku kontaktuose gali būti tik pasirenkami, o ne sukuriami.',
    'LBL_EDIT_TIP' => 'Modifikuoti šio modulio konvertavimo formą.',
    'LBL_DELETE_TIP' => 'Išimti šį modulį iš konvertavimo formos.',

    'LBL_ACTIVITIES_MOVE' => 'Perkelti Veiklą į',
    'LBL_ACTIVITIES_COPY' => 'Kopijuoti Veiklą Į',
    'LBL_ACTIVITIES_MOVE_HELP' => "Pasirinkite įrašą, kurį perkels į Potencialaus kliento veiklą. Užduotis, skambučius, susitikimus, pastabas ir El. laiškus, kurie bus perkelti į pasirinktą įrašą.",
    'LBL_ACTIVITIES_COPY_HELP' => "Pažymėkite įrašą(us), kuriems sukurs kopijas galimo kliento veiklai. Naujas užduotis, skambučius, susitikimus ir pastabos bus sukurtas visiems pasirinktiems įrašams. El. laiškai bus susiję su pasirinktais įrašais.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Kampanijos ID',
    'LBL_EDITLAYOUT' => 'Redaguoti išdėstymą' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Įvedimo data' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Įkeliama' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Redaguoti' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Įvykiai',
);
