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

    'ERR_DELETE_RECORD' => 'Müügivihje kustutamiseks on vaja täpsustada kirje numbrit.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Ettevõtte kirjeldus',
    'LBL_ACCOUNT_ID' => 'Ettevõtte Id',
    'LBL_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tegevused',
    'LBL_ADDRESS_INFORMATION' => 'Aadressi info',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatiivne aadress linn:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatiivne aadress riik:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatiivne aadress postiindeks:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatiivne aadress maakond:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatiivne aadress tänav 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatiivne aadress tänav 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatiivne aadress tänav:',
    'LBL_ALTERNATE_ADDRESS' => 'Teine aadress:',
    'LBL_ALT_ADDRESS' => 'Teine aadress:',
    'LBL_ANY_ADDRESS' => 'Muu aadress:',
    'LBL_ANY_EMAIL' => 'Muu E-post:',
    'LBL_ANY_PHONE' => 'Muu telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Vastutaja',
    'LBL_ASSIGNED_TO_ID' => 'Määratud kasutaja:',
    'LBL_CITY' => 'Linn:',
    'LBL_CONTACT_ID' => 'Kontakti ID',
    'LBL_CONTACT_INFORMATION' => 'Ettevõtte ülevaade', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Müügivihje nimi:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Müügivihje-võimalus:',
    'LBL_CONTACT_ROLE' => 'Roll:',
    'LBL_CONTACT' => 'Müügivihje:',
    'LBL_CONVERTED_ACCOUNT' => 'Muudetud ettevõte:',
    'LBL_CONVERTED_CONTACT' => 'Muudetud kontakt:',
    'LBL_CONVERTED_OPP' => 'Muudetud müügivõimalus:',
    'LBL_CONVERTED' => 'Konverteeritud',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Muuda müügivihjet',
    'LBL_CONVERTLEAD' => 'Muuda müügivihjet',
    'LBL_CONVERTLEAD_WARNING' => 'Hoiatus: Müügivihje staatus, mida soovite muuta on juba "Muudetud". Kontakti ja/või ettevõtte kirjed võivad olla juba müügivihje jaoks loodud. Kui soovid müügivihje muutmist jätkata kliki Salvesta. Tagasi müügivihje juurde ilma seda muutmata kliki Tühista.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Võimalik kontakt:',
    'LBL_COUNTRY' => 'Riik;',
    'LBL_CREATED_NEW' => 'Loodud uus',
    'LBL_CREATED_ACCOUNT' => 'Loodud uus kontakt',
    'LBL_CREATED_CALL' => 'Loodud uus kõne',
    'LBL_CREATED_CONTACT' => 'Loodud uus kontakt',
    'LBL_CREATED_MEETING' => 'Loodud uus kohtumine',
    'LBL_CREATED_OPPORTUNITY' => 'Loodud uus müügivõimalus',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Müügivihjed',
    'LBL_DEPARTMENT' => 'Osakond:',
    'LBL_DESCRIPTION' => 'Kirjeldus',
    'LBL_DO_NOT_CALL' => 'Mitte helistada:',
    'LBL_DUPLICATE' => 'Sarnased müügivihjed',
    'LBL_EMAIL_ADDRESS' => 'E-post:',
    'LBL_EMAIL_OPT_OUT' => 'E-postist loobumine:',
    'LBL_EXISTING_ACCOUNT' => 'Kasutatud olemasolevat ettevõtet',
    'LBL_EXISTING_CONTACT' => 'Kasutatud olemasolevat kontakti',
    'LBL_EXISTING_OPPORTUNITY' => 'Kasutatud olemasolevat müügivõimalust',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Eesnimi:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ajalugu',
    'LBL_HOME_PHONE' => 'Telefon kodus:',
    'LBL_IMPORT_VCARD' => 'Impordi vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Loo automaatselt uus müügivihje importides vCardi sinu failisüsteemist.',
    'LBL_INVALID_EMAIL' => 'Kehtetu e-post:',
    'LBL_INVITEE' => 'Otsesed aruanded',
    'LBL_LAST_NAME' => 'Perekonnanimi:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Müügivihje allika kirjeldus:',
    'LBL_LEAD_SOURCE' => 'Müügivihje allikas:',
    'LBL_LIST_ACCEPT_STATUS' => 'Aktsepteeri olek',
    'LBL_LIST_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_LIST_CONTACT_NAME' => 'Müügivihje nimi',
    'LBL_LIST_CONTACT_ROLE' => 'Roll',
    'LBL_LIST_DATE_ENTERED' => 'Loomiskuupäev',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-kirjad',
    'LBL_LIST_FIRST_NAME' => 'Eesnimi',
    'LBL_LIST_FORM_TITLE' => 'Müügivihje loend',
    'LBL_LIST_LAST_NAME' => 'Perekonnanimi',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Müügivihje allika kirjeldus',
    'LBL_LIST_LEAD_SOURCE' => 'Müügivihje allikas',
    'LBL_LIST_MY_LEADS' => 'Minu müügivihjed',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_PHONE' => 'Töötelefon',
    'LBL_LIST_REFERED_BY' => 'Osutatud',
    'LBL_LIST_STATUS' => 'Olek',
    'LBL_LIST_TITLE' => 'Ametinimetus',
    'LBL_MOBILE_PHONE' => 'Mobiil:',
    'LBL_MODULE_NAME' => 'Müügivihjed',
    'LBL_MODULE_TITLE' => 'Müügivihjed: Avaleht',
    'LBL_NAME' => 'Nimi:',
    'LBL_NEW_FORM_TITLE' => 'Uus müügivihje',
    'LBL_OFFICE_PHONE' => 'Töötelefon:',
    'LBL_OPP_NAME' => 'Müügivõimaluse nimi:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Müügivõimaluse summa:',
    'LBL_OPPORTUNITY_ID' => 'Müügivõimaluse ID',
    'LBL_OPPORTUNITY_NAME' => 'Müügivõimaluse nimi:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Teine e-post:',
    'LBL_OTHER_PHONE' => 'Teine telefon:',
    'LBL_PHONE' => 'Tlf number:',
    'LBL_PORTAL_APP' => 'Saidi rakendus',
    'LBL_PORTAL_INFORMATION' => 'Saidi info',
    'LBL_PORTAL_NAME' => 'Saidi nimi:',
    'LBL_POSTAL_CODE' => 'Postiindeks:',
    'LBL_STREET' => 'Tänav',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Esmane aadress linn',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Esmane aadress maakond',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Esmane aadress postiindeks',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Esmane aadress riik',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Esmane aadress Tänav 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Esmane aadress Tänav 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Esmane aadress tänav',
    'LBL_PRIMARY_ADDRESS' => 'Esmane aadress:',
    'LBL_REFERED_BY' => 'Osutaja:',
    'LBL_REPORTS_TO_ID' => 'Juhataja ID:',
    'LBL_REPORTS_TO' => 'Juhataja:',
    'LBL_SALUTATION' => 'Tiitel',
    'LBL_MODIFIED' => 'Muutja',
    'LBL_CREATED' => 'Loodud',
    'LBL_SEARCH_FORM_TITLE' => 'Müügivihje otsing',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vali vaadatud müügivihjed',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Vali vaadatud müügivihjed',
    'LBL_STATE' => 'Riik või piirkond:',
    'LBL_STATUS_DESCRIPTION' => 'Oleku kirjeldus:',
    'LBL_STATUS' => 'Olek:',
    'LBL_TITLE' => 'Ametinimetus:',
    'LNK_IMPORT_VCARD' => 'Loo müügivihje vCardist',
    'LNK_LEAD_LIST' => 'Vaata müügivihjeid',
    'LNK_NEW_ACCOUNT' => 'Loo ettevõte',
    'LNK_NEW_APPOINTMENT' => 'Loo kohtumine',
    'LNK_NEW_CONTACT' => 'Loo kontakt',
    'LNK_NEW_LEAD' => 'Loo müügivihje',
    'LNK_NEW_NOTE' => 'Loo märkus',
    'LNK_NEW_TASK' => 'Loo ülesanne',
    'LNK_NEW_CASE' => 'Loo juhtum',
    'LNK_NEW_CALL' => 'Kõne logi',
    'LNK_NEW_MEETING' => 'Planeeri kohtumine',
    'LNK_NEW_OPPORTUNITY' => 'Uus müügivõimalus',
    'LNK_SELECT_ACCOUNTS' => 'OR Select Account',
    'LNK_SELECT_CONTACTS' => ' <b>VÕI</b> Vali Kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Kas oled kindel, et soovid seda kirjet kustutada?',
    'NTC_REMOVE_CONFIRMATION' => 'Oled kindel, et soovid selle müügivihje juhtumist eemaldada?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampaaniad',
    'LBL_CAMPAIGN' => 'Kampaania:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Määratud kasutaja',
    'LBL_PROSPECT_LIST' => 'Kuuma kontakti loend',
    'LBL_CAMPAIGN_LEAD' => 'Kampaaniad',
    'LBL_BIRTHDATE' => 'Sünnipäev:',
    'LBL_ASSISTANT_PHONE' => 'Assistendi telefon:',
    'LBL_ASSISTANT' => 'Assistent',
    'LBL_CREATED_USER' => 'Loodud kasutaja',
    'LBL_MODIFIED_USER' => 'Muudetud kasutaja',
    'LBL_CAMPAIGNS' => 'Kampaaniad',
    'LBL_CONVERT_MODULE_NAME' => 'Moodul',
    'LBL_CONVERT_REQUIRED' => 'Kohustuslik',
    'LBL_CONVERT_SELECT' => 'Luba valik',
    'LBL_CONVERT_COPY' => 'Kopeeri Andmed',
    'LBL_CONVERT_EDIT' => 'Redigeeri',
    'LBL_CONVERT_DELETE' => 'Kustuta',
    'LBL_CONVERT_ADD_MODULE' => 'Lisa moodul',
    'LBL_CREATE' => 'Loo',
    'LBL_SELECT' => 'VÕI vali',
    'LBL_WEBSITE' => 'Veebisait',
    'LNK_IMPORT_LEADS' => 'Impordi müügivihjed',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'The module to create a new record in.',
    'LBL_REQUIRED_TIP' => 'Nõutud moodulid peab looma või valima enne müügivihje konverteerimist.',
    'LBL_COPY_TIP' => 'Nagu kontrollitud, siis müügivihje väljad kopeeritakse sama nimega uutesse loodud kirjetesse.',
    'LBL_SELECTION_TIP' => 'Kontaktide seotud väljade mooduleid saab müügivihje konverteerimise protsessis ennem valida kui luua.',
    'LBL_EDIT_TIP' => 'Muuda konverteerimise paigutust selle mooduli jaoks.',
    'LBL_DELETE_TIP' => 'Eemalda see moodul konverteerimise paigutusest.',

    'LBL_ACTIVITIES_MOVE' => 'Move Activities to',
    'LBL_ACTIVITIES_COPY' => 'Copy Activities to',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Kampaania ID',
    'LBL_EDITLAYOUT' => 'Muuda paigutust' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Sisesta kuupäev' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Laadimine' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Redigeeri' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Üritused',
);
