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
    'LBL_ACCEPT_THIS' => 'Tanggapin?',
    'LBL_ADD_BUTTON' => 'Idagdag',
    'LBL_ADD_INVITEE' => 'Idagdag ang mga imbitado',
    'LBL_CONTACT_NAME' => 'Kontak:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Mga kontak',
    'LBL_CREATED_BY' => 'Inilikha sa pamamagitan ng',
    'LBL_DATE_END' => 'Katapusan ng petsa',
    'LBL_DATE_TIME' => 'Simula ng petsa at oras:',
    'LBL_DATE' => 'Simula ng petsa:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga pagpupulong',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_DIRECTION' => 'Direksyon:',
    'LBL_DURATION_HOURS' => 'Durasyon ng mga oras:',
    'LBL_DURATION_MINUTES' => 'Durasyon ng mga minuto:',
    'LBL_DURATION' => 'Durasyon:',
    'LBL_EMAIL' => 'Ang email',
    'LBL_FIRST_NAME' => 'Unang pangalan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Mga tandaan',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(Mga oras/mga minuto)',
    'LBL_INVITEE' => 'Mga imbitado',
    'LBL_LAST_NAME' => 'Huling pangalan',
    'LBL_ASSIGNED_TO_NAME' => 'Ini-assign sa:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Itinalaga sa gumagamit',
    'LBL_LIST_CLOSE' => 'Ang pagsasara',
    'LBL_LIST_CONTACT' => 'Ang kontak',
    'LBL_LIST_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_LIST_DATE' => 'Petsa ng pagsimula',
    'LBL_LIST_DIRECTION' => 'Direksyon',
    'LBL_LIST_DUE_DATE' => 'Angkop na petsa',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng pulong',
    'LBL_LIST_MY_MEETINGS' => 'Aking mga pagpupulong',
    'LBL_LIST_RELATED_TO' => 'Ini-ugnay sa',
    'LBL_LIST_STATUS' => 'Katayuan',
    'LBL_LIST_SUBJECT' => 'Ang paksa',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Mga naggagabay',
    'LBL_LOCATION' => 'Lokasyon:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Binago ni',
    'LBL_MODULE_NAME' => 'Mga pagpupulong',
    'LBL_MODULE_TITLE' => 'Mga pagpupulong: Bahay',
    'LBL_NAME' => 'Ang pangalan',
    'LBL_NEW_FORM_TITLE' => 'Lumikha ng pagkakayari',
    'LBL_OUTLOOK_ID' => 'Tanawan ng ID',
    'LBL_SEQUENCE' => 'Pagpupulong sa pagkakasunud-sunod na update',
    'LBL_PHONE' => 'Telepono ng opisina:',
    'LBL_REMINDER_TIME' => 'Oras ng palaala',
    'LBL_EMAIL_REMINDER_SENT' => 'Paalalang email pinadala',
    'LBL_REMINDER' => 'Mga Paalala:',
    'LBL_REMINDER_POPUP' => 'Ang Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'I-email lahat ang mga imbitado',
    'LBL_EMAIL_REMINDER' => 'Paalala ng email',
    'LBL_EMAIL_REMINDER_TIME' => 'Paalalang email na oras',
    'LBL_REMOVE' => 'Tanggalin',
    'LBL_SCHEDULING_FORM_TITLE' => 'Pag-iiskedyul',
    'LBL_SEARCH_BUTTON' => 'Paghahanap',
    'LBL_SEARCH_FORM_TITLE' => 'Pagpupulong ng paghahanap',
    'LBL_SEND_BUTTON_LABEL' => 'I-save at magpadala ng mga imbitasyon',
    'LBL_SEND_BUTTON_TITLE' => 'I-save at magpadala ng mga imbitasyon',
    'LBL_STATUS' => 'Katayuan:',
    'LBL_TYPE' => 'Uri ng pagpupulong',
    'LBL_PASSWORD' => 'Password ng pagpupulong',
    'LBL_URL' => 'Magsimula/Sumali sa pagpupulong',
    'LBL_HOST_URL' => 'Host ng URL',
    'LBL_DISPLAYED_URL' => 'Magpakita ng URL',
    'LBL_CREATOR' => 'Lumikha ng pagpupulong',
    'LBL_EXTERNALID' => 'ID ng External App',
    'LBL_SUBJECT' => 'Paksa:',
    'LBL_TIME' => 'Oras ng simula:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Ang mga gumagamit',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Uri ng magulang',
    'LBL_PARENT_ID' => 'ID ng magulang',
    'LNK_MEETING_LIST' => 'Tanawin ang mga pagpupulong',
    'LNK_NEW_APPOINTMENT' => 'Lumikha ng pagkakayari',
    'LNK_NEW_MEETING' => 'Iskedyul ng meeting',
    'LNK_IMPORT_MEETINGS' => 'I-import ang mga pagpupulong',

    'LBL_CREATED_USER' => 'Nilikha ng gumagamit',
    'LBL_MODIFIED_USER' => 'Binago ng gumagamit',
    'NOTICE_DURATION_TIME' => 'Ang agwat ng oras ay dapat mas malaki sa 0',
    'LBL_MEETING_INFORMATION' => 'Buod', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Sumali sa pagpupulong',
    'LBL_ACCEPT_STATUS' => 'Tanggapin ang estado',
    'LBL_ACCEPT_LINK' => 'Tanggapin ang link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Hindi ka pwedeng sumali sa pagpupulong ito dahil hindi ka inanyayahan.',
    'LBL_EXTNOT_RECORD_LINK' => 'Tanawin ang pagpupulong',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Hindi ka maaring magsimula sa pagpupulong ito dahil hindi ka isang tagapangasiwa o ang may-ari sa pagpupulong ito.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Lumikha ng imbitasyon',
    'LBL_CREATE_CONTACT' => 'Bilang kontak',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Bilang tagapamuno',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Lumikha at magdagdag',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Kanselahin',
    'LBL_EMPTY_SEARCH_RESULT' => 'Paumanhin, walang mga resulta ang natagpuan, mangyaring lumikha ng imbitasyon sa ibaba.',
    'LBL_NO_ACCESS' => 'Wala kang access na lumikha ng $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Uri ng ulitin',
    'LBL_REPEAT_INTERVAL' => 'Ulitin ang agwat',
    'LBL_REPEAT_DOW' => 'Ulitin ang Dow',
    'LBL_REPEAT_UNTIL' => 'Ulitin hanggang sa',
    'LBL_REPEAT_COUNT' => 'Ulitin ng pagbilang',
    'LBL_REPEAT_PARENT_ID' => 'Ulitin ang ID ng magulang',
    'LBL_RECURRING_SOURCE' => 'Pag-uulit ng pinagmumulan',

    'LBL_SYNCED_RECURRING_MSG' => 'Itong pagpupulong ito ay pinagmula sa ibang sistema at ito ay naka-sync sa SuiteCRM. Upang makagawa ng pagbabago, pumunta sa orihinal na pagpupulong sa loon ng ibang sistema. Ang mga pagbabago ay nilikha sa ibang sistema na maaring i-sync sa ulat na ito.',
    'LBL_RELATED_TO' => 'Kaugnay ito sa:',

    // for reminders
    'LBL_REMINDERS' => 'Mga paalala',
    'LBL_REMINDERS_ACTIONS' => 'Mga aksyon:',
    'LBL_REMINDERS_POPUP' => 'Ang Popup',
    'LBL_REMINDERS_EMAIL' => 'I-email ang mga imbitado',
    'LBL_REMINDERS_WHEN' => 'Kailan:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Tanggalin ang paalala',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Idagdag ang lahat na mga imbitado',
    'LBL_REMINDERS_ADD_REMINDER' => 'Idagdag ang paalala',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
