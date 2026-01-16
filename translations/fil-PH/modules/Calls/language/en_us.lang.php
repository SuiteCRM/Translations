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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Ang mga tawag',
    'LBL_MODULE_TITLE' => 'Mga tawag: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng tawag',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng tawag',
    'LBL_NEW_FORM_TITLE' => 'Lumikha ng pagkakayari',
    'LBL_LIST_CLOSE' => 'Ang pagsasara',
    'LBL_LIST_SUBJECT' => 'Ang paksa',
    'LBL_LIST_CONTACT' => 'Ang kontak',
    'LBL_LIST_RELATED_TO' => 'Ini-ugnay sa',
    'LBL_LIST_RELATED_TO_ID' => 'Kaugnay sa ID',
    'LBL_LIST_DATE' => 'Petsa ng pagsimula',
    'LBL_LIST_DIRECTION' => 'Direksyon',
    'LBL_SUBJECT' => 'Paksa:',
    'LBL_REMINDER' => 'Paalala:',
    'LBL_CONTACT_NAME' => 'Kontak:',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_STATUS' => 'Katayuan:',
    'LBL_DIRECTION' => 'Direksyon:',
    'LBL_DATE' => 'Simula ng petsa:',
    'LBL_DURATION' => 'Durasyon:',
    'LBL_DURATION_HOURS' => 'Durasyon ng mga oras:',
    'LBL_DURATION_MINUTES' => 'Durasyon ng mga minuto:',
    'LBL_HOURS_MINUTES' => '(Mga oras/mga minuto)',
    'LBL_DATE_TIME' => 'Simula ng petsa at oras:',
    'LBL_TIME' => 'Oras ng simula:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Tawag ay log',
    'LNK_NEW_MEETING' => 'Iskedyul ng meeting',
    'LNK_CALL_LIST' => 'Tingnan ang mga tawag',
    'LNK_IMPORT_CALLS' => 'Mag-angkat ng mga tawag',
    'ERR_DELETE_RECORD' => 'Isang bilang sa rekord ay dapat tukuyin para mabura ang account.',
    'LBL_INVITEE' => 'Mga imbitado',
    'LBL_RELATED_TO' => 'Ini-ugnay sa:',
    'LNK_NEW_APPOINTMENT' => 'Lumikha ng pagkakayari',
    'LBL_SCHEDULING_FORM_TITLE' => 'Pag-iiskedyul',
    'LBL_ADD_INVITEE' => 'Idagdag ang mga imbitado',
    'LBL_NAME' => 'Ang pangalan',
    'LBL_FIRST_NAME' => 'Unang pangalan',
    'LBL_LAST_NAME' => 'Huling pangalan',
    'LBL_EMAIL' => 'Ang email',
    'LBL_PHONE' => 'Telepono',
    'LBL_REMINDER_POPUP' => 'Ang Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'I-email lahat ang mga imbitado',
    'LBL_EMAIL_REMINDER' => 'Paalala ng email',
    'LBL_EMAIL_REMINDER_TIME' => 'Paalalang email na oras',
    'LBL_SEND_BUTTON_TITLE' => 'I-save at magpadala ng mga imbitasyon',
    'LBL_SEND_BUTTON_LABEL' => 'I-save at magpadala ng mga imbitasyon',
    'LBL_DATE_END' => 'Katapusan ng petsa',
    'LBL_REMINDER_TIME' => 'Oras ng palaala',
    'LBL_EMAIL_REMINDER_SENT' => 'Paalalang email pinadala',
    'LBL_SEARCH_BUTTON' => 'Paghahanap',
    'LBL_ADD_BUTTON' => 'Idagdag',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang mga tawag',
    'LNK_SELECT_ACCOUNT' => 'Pumili ng halaga',
    'LNK_NEW_ACCOUNT' => 'Bagong akwant',
    'LNK_NEW_OPPORTUNITY' => 'Bagong oportunidad',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Mga naggagabay',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Mga kontak',
    'LBL_USERS_SUBPANEL_TITLE' => 'Ang mga gumagamit',
    'LBL_OUTLOOK_ID' => 'Tanawan ng ID',
    'LBL_MEMBER_OF' => 'Miyembro sa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Mga tandaan',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_LIST_MY_CALLS' => 'Aking mga tawag',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_ASSIGNED_TO_ID' => 'Itinalaga sa gumagamit',
    'NOTICE_DURATION_TIME' => 'Ang agwat ng oras ay dapat mas malaki sa 0',
    'LBL_CALL_INFORMATION' => 'Buod', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Tanggalin',
    'LBL_ACCEPT_STATUS' => 'Tanggapin ang estado',
    'LBL_ACCEPT_LINK' => 'Tanggapin ang link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Lumikha ng imbitasyon',
    'LBL_CREATE_CONTACT' => 'Bilang kontak',
    'LBL_CREATE_LEAD' => 'Bilang tagapamuno',
    'LBL_CREATE_AND_ADD' => 'Lumikha at magdagdag',
    'LBL_CANCEL_CREATE_INVITEE' => 'Kanselahin',
    'LBL_EMPTY_SEARCH_RESULT' => 'Paumanhin, walang mga resulta ang natagpuan, mangyaring lumikha ng imbitasyon sa ibaba.',
    'LBL_NO_ACCESS' => 'Wala kang access na lumikha ng $module',

    'LBL_REPEAT_TYPE' => 'Uri ng ulitin',
    'LBL_REPEAT_INTERVAL' => 'Ulitin ang agwat',
    'LBL_REPEAT_DOW' => 'Ulitin ang Dow',
    'LBL_REPEAT_UNTIL' => 'Ulitin hanggang sa',
    'LBL_REPEAT_COUNT' => 'Ulitin ng pagbilang',
    'LBL_REPEAT_PARENT_ID' => 'Ulitin ang ID ng magulang',
    'LBL_RECURRING_SOURCE' => 'Pag-uulit ng pinagmumulan',

    'LBL_SYNCED_RECURRING_MSG' => 'Ang tawag na ito ay nagmula sa ibang sistema at nai-sync sa SuiteCRM. Upang makagawa ng mga pagbabago, pumunta sa orihinal na tawag sa loob ng ibang sistema. ang pagbabago na nagawa sa ibang sistema ay maaring mai-sync sa rekord na ito.',

    // for reminders
    'LBL_REMINDERS' => 'Mga paalala',
    'LBL_REMINDERS_ACTIONS' => 'Mga aksyon:',
    'LBL_REMINDERS_POPUP' => 'Ang Popup',
    'LBL_REMINDERS_EMAIL' => 'I-email ang mga imbitado',
    'LBL_REMINDERS_WHEN' => 'Kailan:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Tanggalin ang paalala',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Idagdag ang lahat na mga imbitado',
    'LBL_REMINDERS_ADD_REMINDER' => 'Idagdag ang paalala',

    'LBL_RESCHEDULE' => 'I-reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Ang mga pagtatangka ng tawag',
    'LBL_RESCHEDULE_DATE' => 'Petsa',
    'LBL_RESCHEDULE_REASON' => 'Dahilan',
    'LBL_RESCHEDULE_ERROR1' => 'Pakiusap ilagay ng wasto ang petsa',
    'LBL_RESCHEDULE_ERROR2' => 'Pakiusap pumili ng isang dahilan',
    'LBL_RESCHEDULE_PANEL' => 'I-reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Kasaysayan ng pagtatangkang tumawag',
    'LBL_CANCEL' => 'Kanselahin',
    'LBL_SAVE' => 'I-seyb',

    'LBL_CALLS_RESCHEDULE' => 'Ang Tawag ay Binago ang Oras',
    'LBL_LIST_STATUS'=>'Katayuan',
    'LBL_LIST_DATE_MODIFIED'=>'Ang petsa ng pagkabago',
    'LBL_LIST_DUE_DATE'=>'Angkop na petsa',
    'LBL_RESCHEDULED_BY'=>'sa pamamagitan ng',
);
