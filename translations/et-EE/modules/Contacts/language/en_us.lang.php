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
    'ERR_DELETE_RECORD' => 'Kontakti kustutamiseks täpsusta kirje numbrit.',
    'LBL_ACCOUNT_ID' => 'Ettevõtte ID',
    'LBL_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_CAMPAIGN' => 'Kampaania:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tegevused',
    'LBL_ADDRESS_INFORMATION' => 'Aadressi info',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatiivne aadress linn:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatiivne aadress maakond:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatiivne aadress postiindeks:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatiivne aadress riik:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatiivne aadress tänav 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatiivne aadress tänav 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatiivne aadress tänav:',
    'LBL_ALTERNATE_ADDRESS' => 'Teine aadress:',
    'LBL_ALT_ADDRESS' => 'Teine aadress:',
    'LBL_ANY_ADDRESS' => 'Muu aadress:',
    'LBL_ANY_EMAIL' => 'Muu E-post:',
    'LBL_ANY_PHONE' => 'Muu telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Vastutaja:',
    'LBL_ASSIGNED_TO_ID' => 'Määratud kasutaja',
    'LBL_ASSISTANT_PHONE' => 'Assistendi telefon:',
    'LBL_ASSISTANT' => 'Assistent',
    'LBL_BIRTHDATE' => 'Sünnipäev:',
    'LBL_CITY' => 'Linn:',
    'LBL_CAMPAIGN_ID' => 'Kampaania ID',
    'LBL_CONTACT_INFORMATION' => 'Ettevõtte ülevaade', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Kontaktisiku nimi:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-müügivõimalus:',
    'LBL_CONTACT_ROLE' => 'Roll:',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_COUNTRY' => 'Riik;',
    'LBL_CREATED_ACCOUNT' => 'Loodud uus kontakt',
    'LBL_CREATED_CALL' => 'Loodud uus kõne',
    'LBL_CREATED_CONTACT' => 'Loodud uus kontakt',
    'LBL_CREATED_MEETING' => 'Loodud uus kohtumine',
    'LBL_CREATED_OPPORTUNITY' => 'Loodud uus müügivõimalus',
    'LBL_DATE_MODIFIED' => 'Muutmiskuupäev',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontaktid',
    'LBL_DEPARTMENT' => 'Osakond:',
    'LBL_DESCRIPTION' => 'Kirjeldus',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Otsesed aruanded',
    'LBL_DO_NOT_CALL' => 'Mitte helistada:',
    'LBL_DUPLICATE' => 'Võimalikud topeltkontaktid',
    'LBL_EMAIL_ADDRESS' => 'E-post:',
    'LBL_EMAIL_OPT_OUT' => 'E-postist loobumine:',
    'LBL_EXISTING_ACCOUNT' => 'Kasutatud olemasolevat ettevõtet',
    'LBL_EXISTING_CONTACT' => 'Kasutatud olemasolevat kontakti',
    'LBL_EXISTING_OPPORTUNITY' => 'Kasutatud olemasolevat müügivõimalust',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Eesnimi:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ajalugu',
    'LBL_HOME_PHONE' => 'Telefon kodus:',
    'LBL_ID' => 'ID',
    'LBL_IMPORT_VCARD' => 'Impordi vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Loo automaatselt uus kontakt importides vCardi sinu failisüsteemist.',
    'LBL_INVALID_EMAIL' => 'Kehtetu e-post:',
    'LBL_INVITEE' => 'Otsesed aruanded',
    'LBL_LAST_NAME' => 'Perekonnanimi:',
    'LBL_LEAD_SOURCE' => 'Müügivihje allikas:',
    'LBL_LIST_ACCEPT_STATUS' => 'Aktsepteeri olek',
    'LBL_LIST_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktisiku nimi:',
    'LBL_LIST_CONTACT_ROLE' => 'Roll',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-kirjad',
    'LBL_LIST_FIRST_NAME' => 'Eesnimi',
    'LBL_LIST_FORM_TITLE' => 'Kontaktiloend',
    'LBL_LIST_LAST_NAME' => 'Perekonnanimi',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_PHONE' => 'Töötelefon',
    'LBL_LIST_TITLE' => 'Ametinimetus',
    'LBL_MOBILE_PHONE' => 'Mobiil:',
    'LBL_MODIFIED' => 'Muutja:',
    'LBL_MODULE_NAME' => 'Kontaktid',
    'LBL_MODULE_TITLE' => 'Kontaktid: Avaleht',
    'LBL_NAME' => 'Nimi:',
    'LBL_NEW_FORM_TITLE' => 'Uus kontakt',
    'LBL_NOTE_SUBJECT' => 'Märkuse teema',
    'LBL_OFFICE_PHONE' => 'Töötelefon:',
    'LBL_OPP_NAME' => 'Müügivõimaluse nimi:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Müügivõimaluse rolli ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Müügivõimaluse roll',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Teine e-post:',
    'LBL_OTHER_PHONE' => 'Teine telefon:',
    'LBL_PHONE' => 'Tlf number:',
    'LBL_PORTAL_APP' => 'Saidi rakendus:',
    'LBL_PORTAL_INFORMATION' => 'Saidi info',
    'LBL_PORTAL_NAME' => 'Saidi nimi:',
    'LBL_STREET' => 'Tänav',
    'LBL_POSTAL_CODE' => 'Postiindeks:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Esmane aadress linn:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Esmane aadress maakond:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Esmane aadress postiindeks:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Esmane aadress maakond:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Esmane aadress Tänav 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Esmane aadress Tänav 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Esmane aadress tänav:',
    'LBL_PRIMARY_ADDRESS' => 'Esmane aadress:',
    'LBL_PRODUCTS_TITLE' => 'Artiklid',
    'LBL_REPORTS_TO_ID' => 'Juhataja ID:',
    'LBL_REPORTS_TO' => 'Juhataja:',
    'LBL_RESOURCE_NAME' => 'Allika nimi',
    'LBL_SALUTATION' => 'Tiitel:',
    'LBL_SAVE_CONTACT' => 'Salvesta kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Kontakti otsing',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vali vaadatud kontaktid',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Vali vaadatud kontaktid',
    'LBL_STATE' => 'Riik või piirkond:',
    'LBL_SYNC_CONTACT' => 'Süngi Outlook®:',
    'LBL_PROSPECT_LIST' => 'Kuuma kontakti loend',
    'LBL_TITLE' => 'Ametinimetus:',
    'LNK_CONTACT_LIST' => 'Vaata kontakte',
    'LNK_IMPORT_VCARD' => 'Loo kontakt vCardist',
    'LNK_NEW_ACCOUNT' => 'Loo ettevõte',
    'LNK_NEW_APPOINTMENT' => 'Loo kohtumine',
    'LNK_NEW_CALL' => 'Kõne logi',
    'LNK_NEW_CASE' => 'Loo juhtum',
    'LNK_NEW_CONTACT' => 'Loo kontakt',
    'LNK_NEW_EMAIL' => 'Arhiveeri e-kiri',
    'LNK_NEW_MEETING' => 'Planeeri kohtumine',
    'LNK_NEW_NOTE' => 'Loo märkus',
    'LNK_NEW_OPPORTUNITY' => 'Uus müügivõimalus',
    'LNK_NEW_TASK' => 'Loo ülesanne',
    'LNK_SELECT_ACCOUNT' => "Vali ettevõte",
    'NTC_DELETE_CONFIRMATION' => 'Kas oled kindel, et soovid seda kirjet kustutada?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Müügivõimaluse loomine eeldab ettevõtte kontot. \n Palun loo kas uus ettevõte või vali olemasolev.',
    'NTC_REMOVE_CONFIRMATION' => 'Oled kindel, et soovid selle kontakti juhtumist eemaldada?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Müügivihjed',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Müügivõimalused',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumendid',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopeeri esmasele aadressile',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopeeri teisele aadressile',

    'LBL_CASES_SUBPANEL_TITLE' => 'Juhtumid',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugid',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektid',
    'LBL_PROJECTS_RESOURCES' => 'Projekti ressursid',
    'LBL_CAMPAIGNS' => 'Kampaaniad',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampaaniad',
    'LBL_LIST_CITY' => 'Linn:',
    'LBL_LIST_STATE' => 'Riik',
    'LBL_HOMEPAGE_TITLE' => 'Minu kontaktid',
    'LBL_OPPORTUNITIES' => 'Müügivõimalused',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktid',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektid',
    'LNK_IMPORT_CONTACTS' => 'Impordi kontaktid',

    // SNIP
    'LBL_USER_SYNC' => 'Kasutaja sünkroniseerimine',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Üritused',

    'LBL_AOP_CASE_UPDATES' => 'Juhtumi uuendamised',
    'LBL_CREATE_PORTAL_USER' => 'Portaali kasutaja loomine',
    'LBL_ENABLE_PORTAL_USER' => 'Aktiveeri portaali kasutaja',
    'LBL_DISABLE_PORTAL_USER' => 'Deaktiveeri portaali kasutaja',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Portaali kasutaja loomine ebaõnnestus',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Portaali kasutaja aktiveerimine ebaõnnestus',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Portaali kasutaja deaktiveerimine ebaõnnestus',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portaali kasutaja loodud',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Portaali kasutaja aktiveeritud',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portaali kasutaja deaktiveeritud',
    'LBL_NO_JOOMLA_URL' => 'Portaali URL ei ole määratud',
    'LBL_PORTAL_USER_TYPE' => 'Portaali kasutaja tüüp',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Konto on suletud',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla konto ID',

    'LBL_AOS_CONTRACTS' => 'Lepingud',
    'LBL_AOS_INVOICES' => 'Arved',
    'LBL_AOS_QUOTES' => 'Pakkumised',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Projekti kasutajad projekti pealkirjast',
    'LBL_LAST_MEETING' => 'Teie viimane suhtlus kokkusaamisel oli kuupäeval:',
    'LBL_LAST_CALL' => 'Teie viimane suhtlus telefoni teel oli kuupäeval:',
    'LBL_LAST_EMAIL' => 'Teie viimane suhtlus e-posti teel oli kuupäeval:',
    'LBL_NO_INTERACTION' => 'Te pole selle kontaktiga veel suhtlenud.',

    'LBL_LIST_INVITE_STATUS' => 'Kutse olek',
);
