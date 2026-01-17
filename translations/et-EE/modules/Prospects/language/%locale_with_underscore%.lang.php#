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
    'LBL_MODULE_NAME' => 'Eesmärgid',
    'LBL_MODULE_ID' => 'Eesmärgid',
    'LBL_INVITEE' => 'Otsesed aruanded',
    'LBL_MODULE_TITLE' => 'Eesmärgid: Avaleht',
    'LBL_SEARCH_FORM_TITLE' => 'Eesmärgi otsing',
    'LBL_LIST_FORM_TITLE' => 'Eesmärgi loend',
    'LBL_NEW_FORM_TITLE' => 'Uus eesmärk',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_LAST_NAME' => 'Perekonnanimi',
    'LBL_LIST_TITLE' => 'Ametinimetus',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-kirjad',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Eesnimi',
    'LBL_ASSIGNED_TO_NAME' => 'Vastutaja',
    'LBL_ASSIGNED_TO_ID' => 'Vastutaja:',
    'LBL_CAMPAIGN_ID' => 'Kampaania ID',
    'LBL_EXISTING_ACCOUNT' => 'Kasutatud olemasolevat ettevõtet',
    'LBL_CREATED_ACCOUNT' => 'Loodud uus kontakt',
    'LBL_CREATED_CALL' => 'Loodud uus kõne',
    'LBL_CREATED_MEETING' => 'Loodud uus kohtumine',
    'LBL_NAME' => 'Nimi:',
    'LBL_PROSPECT_INFORMATION' => 'Ettevõtte ülevaade', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Rohkem infot',
    'LBL_FIRST_NAME' => 'Eesnimi:',
    'LBL_OFFICE_PHONE' => 'Töötelefon:',
    'LBL_ANY_PHONE' => 'Muu telefon:',
    'LBL_PHONE' => 'Tlf number:',
    'LBL_LAST_NAME' => 'Perekonnanimi:',
    'LBL_MOBILE_PHONE' => 'Mobiil:',
    'LBL_HOME_PHONE' => 'Telefon kodus:',
    'LBL_OTHER_PHONE' => 'Teine telefon:',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Esmane aadress tänav:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Esmane aadress linn:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Esmane aadress maakond:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Esmane aadress maakond:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Esmane aadress postiindeks:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatiivne aadress tänav:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatiivne aadress linn:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatiivne aadress maakond:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatiivne aadress riik:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatiivne aadress postiindeks:',
    'LBL_TITLE' => 'Ametinimetus:',
    'LBL_DEPARTMENT' => 'Osakond:',
    'LBL_BIRTHDATE' => 'Sünnipäev:',
    'LBL_EMAIL_ADDRESS' => 'E-post:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Teine e-post:',
    'LBL_ANY_EMAIL' => 'Muu E-post:',
    'LBL_ASSISTANT' => 'Assistent',
    'LBL_ASSISTANT_PHONE' => 'Assistendi telefon:',
    'LBL_DO_NOT_CALL' => 'Mitte helistada:',
    'LBL_EMAIL_OPT_OUT' => 'E-postist loobumine:',
    'LBL_PRIMARY_ADDRESS' => 'Esmane aadress:',
    'LBL_ALTERNATE_ADDRESS' => 'Teine aadress:',
    'LBL_ANY_ADDRESS' => 'Muu aadress:',
    'LBL_CITY' => 'Linn:',
    'LBL_STATE' => 'Riik või piirkond:',
    'LBL_POSTAL_CODE' => 'Postiindeks:',
    'LBL_COUNTRY' => 'Riik;',
    'LBL_ADDRESS_INFORMATION' => 'Aadressi info',
    'LBL_DESCRIPTION' => 'Kirjeldus',
    'LBL_OPP_NAME' => 'Müügivõimaluse nimi:',
    'LBL_IMPORT_VCARD' => 'Impordi vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Loo automaatselt uus kontakt importides vCardi sinu failisüsteemist.',
    'LBL_DUPLICATE' => 'Võimalikud topelteesmärgid',
    'MSG_SHOW_DUPLICATES' => 'Eesmärgi kirje, mida hetkel lood võib olla duplikaat juba olemasolevast eesmärgi kirjest. Eesmärgi kirjed, mis sisaldavad sarnaseid nimesid ja/või aadresse on väljatoodud allpool. Kliki Salvesta selle uue eesmärgi loomiseks või kliki Tühista moodulisse tagasiminemiseks eesmärki loomata.',
    'MSG_DUPLICATE' => 'Eesmärgi kirje, mida hetkel lood võib olla duplikaat juba olemasolevast eesmärgi kirjest. Eesmärgi kirjed, mis sisaldavad sarnaseid nimesid ja/või aadresse on väljatoodud allpool. Kliki Salvesta selle uue eesmärgi loomiseks või kliki Tühista moodulisse tagasiminemiseks eesmärki loomata.',
    'LNK_IMPORT_VCARD' => 'Loo vCard´ist',
    'LNK_NEW_ACCOUNT' => 'Loo ettevõte',
    'LNK_NEW_OPPORTUNITY' => 'Uus müügivõimalus',
    'LNK_NEW_CASE' => 'Loo juhtum',
    'LNK_NEW_NOTE' => 'Loo märkus või manus',
    'LNK_NEW_CALL' => 'Kõne logi',
    'LNK_NEW_EMAIL' => 'Arhiveeri e-kiri',
    'LNK_NEW_MEETING' => 'Planeeri kohtumine',
    'LNK_NEW_TASK' => 'Loo ülesanne',
    'LNK_NEW_APPOINTMENT' => 'Loo kohtumine',
    'LNK_IMPORT_PROSPECTS' => 'Impordi potentsiaalsed kliendid',
    'NTC_DELETE_CONFIRMATION' => 'Kas oled kindel, et soovid seda kirjet kustutada?',
    'NTC_REMOVE_CONFIRMATION' => 'Oled kindel, et soovid selle kontakti juhtumist eemaldada?',
    'ERR_DELETE_RECORD' => 'Kontakti kustutamiseks täpsusta kirje numbrit.',
    'LBL_SALUTATION' => 'Tiitel',
    'LBL_CREATED_OPPORTUNITY' => 'Loodud uus müügivõimalus',
    'LNK_SELECT_ACCOUNT' => "Vali ettevõte",
    'LNK_NEW_PROSPECT' => 'Loo eesmärk',
    'LNK_PROSPECT_LIST' => 'Vaata eesmärke',
    'LNK_NEW_CAMPAIGN' => 'Loo kampaania',
    'LNK_CAMPAIGN_LIST' => 'Kampaaniad',
    'LNK_NEW_PROSPECT_LIST' => 'Loo eesmärkide loend',
    'LNK_PROSPECT_LIST_LIST' => 'Eesmärkide loendid',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vali kontrollitud eesmärgid',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Vali kontrollitud eesmärgid',
    'LBL_INVALID_EMAIL' => 'Kehtetu e-post:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Eesmärgid',
    'LBL_PROSPECT_LIST' => 'Kuuma kontakti loend',
    'LBL_CONVERT_BUTTON_TITLE' => 'Konverteeri eesmärk',
    'LBL_CONVERT_BUTTON_LABEL' => 'Konverteeri eesmärk',
    'LNK_NEW_CONTACT' => 'Uus kontakt',
    'LBL_CREATED_CONTACT' => "Loodud uus kontakt",
    'LBL_CAMPAIGNS' => 'Kampaaniad',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampaania logi',
    'LBL_TRACKER_KEY' => 'Trackeri väärtus',
    'LBL_LEAD_ID' => 'Müügivihje ID:',
    'LBL_CONVERTED_LEAD' => 'Konverteeri müügivihje',
    'LBL_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_EDIT_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_CREATED_USER' => 'Loodud kasutaja',
    'LBL_MODIFIED_USER' => 'Muudetud kasutaja',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ajalugu',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Üritused',
);
