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
    'LBL_ACCEPT_THIS' => 'Kinnitada?',
    'LBL_ADD_BUTTON' => 'Lisa',
    'LBL_ADD_INVITEE' => 'Lisa kutsutuid',
    'LBL_CONTACT_NAME' => 'Kontakt',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktid',
    'LBL_CREATED_BY' => 'Loodud',
    'LBL_DATE_END' => 'Lõppkuupäev',
    'LBL_DATE_TIME' => 'Alguskuupäev ja aeg:',
    'LBL_DATE' => 'Alguskuupäev:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kohtumised',
    'LBL_DESCRIPTION' => 'Kirjeldus',
    'LBL_DIRECTION' => 'Suund:',
    'LBL_DURATION_HOURS' => 'Kestus tundides:',
    'LBL_DURATION_MINUTES' => 'Kestus minutites:',
    'LBL_DURATION' => 'Kestus:',
    'LBL_EMAIL' => 'E-kirjad',
    'LBL_FIRST_NAME' => 'Eesnimi',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Märkused',
    'LBL_HOURS_ABBREV' => 't',
    'LBL_HOURS_MINS' => '(tunnid/minutid)',
    'LBL_INVITEE' => 'Kutsutud',
    'LBL_LAST_NAME' => 'Perekonnanimi',
    'LBL_ASSIGNED_TO_NAME' => 'Vastutaja:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Määratud kasutaja',
    'LBL_LIST_CLOSE' => 'Sulge',
    'LBL_LIST_CONTACT' => 'Eraisikud',
    'LBL_LIST_DATE_MODIFIED' => 'Muutmiskuupäev',
    'LBL_LIST_DATE' => 'Alguskuupäev',
    'LBL_LIST_DIRECTION' => 'Suund',
    'LBL_LIST_DUE_DATE' => 'Tähtaeg:',
    'LBL_LIST_FORM_TITLE' => 'Kohtumiste loend',
    'LBL_LIST_MY_MEETINGS' => 'Minu kohtumised',
    'LBL_LIST_RELATED_TO' => 'Seotud',
    'LBL_LIST_STATUS' => 'Olek',
    'LBL_LIST_SUBJECT' => 'Teema',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Müügivihjed',
    'LBL_LOCATION' => 'Asukoht:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Muutja:',
    'LBL_MODULE_NAME' => 'Kohtumised',
    'LBL_MODULE_TITLE' => 'Kohtumised: Avaleht',
    'LBL_NAME' => 'Nimi',
    'LBL_NEW_FORM_TITLE' => 'Loo kohtumine',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Kohtumise kordus',
    'LBL_PHONE' => 'Tlf number',
    'LBL_REMINDER_TIME' => 'Meeldetuletuse aeg',
    'LBL_EMAIL_REMINDER_SENT' => 'E-posti meeldetuletus saadetud',
    'LBL_REMINDER' => 'Meelespea:',
    'LBL_REMINDER_POPUP' => 'Hüpikaken',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Meeldetuletus kõigile osalejatele',
    'LBL_EMAIL_REMINDER' => 'E-posti meeldetuletus',
    'LBL_EMAIL_REMINDER_TIME' => 'E-posti meeldetuletuse aeg',
    'LBL_REMOVE' => 'Eemalda',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planeerimine',
    'LBL_SEARCH_BUTTON' => 'Otsi',
    'LBL_SEARCH_FORM_TITLE' => 'Kohtumise otsing',
    'LBL_SEND_BUTTON_LABEL' => 'Saada kutsed',
    'LBL_SEND_BUTTON_TITLE' => 'Saada kutsed',
    'LBL_STATUS' => 'Olek:',
    'LBL_TYPE' => 'Koosoleku tüüp:',
    'LBL_PASSWORD' => 'Koosoleku parool',
    'LBL_URL' => 'Alusta/Liitu koosolekuga',
    'LBL_HOST_URL' => 'Serveri URL',
    'LBL_DISPLAYED_URL' => 'Näita linki',
    'LBL_CREATOR' => 'Koosoleku looja',
    'LBL_EXTERNALID' => 'Välise rakenduse ID',
    'LBL_SUBJECT' => 'Teema:',
    'LBL_TIME' => 'Algusaeg:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Kasutajad',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Peamise liik',
    'LBL_PARENT_ID' => 'Peamine ID',
    'LNK_MEETING_LIST' => 'Vaata kohtumisi',
    'LNK_NEW_APPOINTMENT' => 'Loo kohtumine',
    'LNK_NEW_MEETING' => 'Planeeri kohtumine',
    'LNK_IMPORT_MEETINGS' => 'Impordi kohtumised',

    'LBL_CREATED_USER' => 'Loodud kasutaja',
    'LBL_MODIFIED_USER' => 'Muudetud kasutaja',
    'NOTICE_DURATION_TIME' => 'Kestusaeg peab olema suurem kui 0',
    'LBL_MEETING_INFORMATION' => 'Ettevõtte ülevaade', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Liitu koosolekuga',
    'LBL_ACCEPT_STATUS' => 'Aktsepteeri olek',
    'LBL_ACCEPT_LINK' => 'Nõusoleku link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Sa ei saa liituda selle koosolekuga, kuna sa pole kutsutu.',
    'LBL_EXTNOT_RECORD_LINK' => 'Vaata koosolekut',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Sa ei saa seda koosolekut alustada, kuna sa pole admin ega koosoleku omanik.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Kutsu osaleja',
    'LBL_CREATE_CONTACT' => 'Kontaktina',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Juhtlõngana',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Loo ja lisa',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Tühista',
    'LBL_EMPTY_SEARCH_RESULT' => 'Vabandust, tulemusi ei leitud. Palun lisa kutse allpool.',
    'LBL_NO_ACCESS' => 'Teil puudub ligipääs moodulile $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Kordumise liik',
    'LBL_REPEAT_INTERVAL' => 'Kordumise intervall',
    'LBL_REPEAT_DOW' => 'Korda nädalapäeval',
    'LBL_REPEAT_UNTIL' => 'korda kuni',
    'LBL_REPEAT_COUNT' => 'Kordamiste arv',
    'LBL_REPEAT_PARENT_ID' => 'Korduse omaniku ID',
    'LBL_RECURRING_SOURCE' => 'Kordumise allikas',

    'LBL_SYNCED_RECURRING_MSG' => 'See kohtumine on tehtud teises rakenduses ja sünkroniseeriti SuiteCRM-i. Muudatuses tuleb teha algses rakenduses. Tehtud muudatused sünkroniseeritakse uuesti SuiteCRM-i.',
    'LBL_RELATED_TO' => 'Seotud:',

    // for reminders
    'LBL_REMINDERS' => 'Meeldetuletused',
    'LBL_REMINDERS_ACTIONS' => 'Tegevused:',
    'LBL_REMINDERS_POPUP' => 'Hüpikaken',
    'LBL_REMINDERS_EMAIL' => 'Saada osalejatele kiri',
    'LBL_REMINDERS_WHEN' => 'Millal:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Eemalda meelespea',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Lisa kõik kutsutud',
    'LBL_REMINDERS_ADD_REMINDER' => 'Lisa meelespea',

    // for google sync
    'LBL_GSYNC_ID' => 'Google ürituse ID',
    'LBL_GSYNC_LASTSYNC' => 'Viimase Google Sync ajatempel',
);
