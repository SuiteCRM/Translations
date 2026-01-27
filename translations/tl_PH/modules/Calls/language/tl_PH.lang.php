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
    'LBL_MODULE_TITLE' => 'Mga tawag: Bahay',
    'LBL_SEARCH_FORM_TITLE' => 'Maghanap ng tawag',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng tawag',
    'LBL_NEW_FORM_TITLE' => 'Gumawa ng paghihirang',
    'LBL_LIST_CLOSE' => 'Sarado',
    'LBL_LIST_SUBJECT' => 'Paksa',
    'LBL_LIST_CONTACT' => 'Kontak',
    'LBL_LIST_RELATED_TO' => 'Para sa kaugnayan',
    'LBL_LIST_RELATED_TO_ID' => 'Nakaugnay sa ID',
    'LBL_LIST_DATE' => 'Magsimula sa petsa',
    'LBL_LIST_DIRECTION' => 'Direksyon',
    'LBL_SUBJECT' => 'Ang Paksa:',
    'LBL_REMINDER' => 'Paalala:',
    'LBL_CONTACT_NAME' => 'Kontak:',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan:',
    'LBL_STATUS' => 'Ang Kalagayan:',
    'LBL_DIRECTION' => 'Direksyon:',
    'LBL_DATE' => 'Magsimula sa petsa:',
    'LBL_DURATION' => 'Tagal:',
    'LBL_DURATION_HOURS' => 'Agwat ng mga oras:',
    'LBL_DURATION_MINUTES' => 'Tagal ng mga minuto:',
    'LBL_HOURS_MINUTES' => '(Mga oras o minuto)',
    'LBL_DATE_TIME' => 'Magsimula sa petsa at oras:',
    'LBL_TIME' => 'Oras ng simula:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'I-log ang tawag',
    'LNK_NEW_MEETING' => 'Naka-iskedyul na ang pagpupulong',
    'LNK_CALL_LIST' => 'Tingnan ang mga tawag',
    'LNK_IMPORT_CALLS' => 'Ipasok ang mga tawag',
    'ERR_DELETE_RECORD' => 'Ang talaan ng numero ay dapat na tukuyin upang mabura ang akawnt.',
    'LBL_INVITEE' => 'Mga imbitado',
    'LBL_RELATED_TO' => 'Nakaugnay sa:',
    'LNK_NEW_APPOINTMENT' => 'Gumawa ng paghihirang',
    'LBL_SCHEDULING_FORM_TITLE' => 'Pag-iiskedyul',
    'LBL_ADD_INVITEE' => 'Magdagdag ng mga imbitado',
    'LBL_NAME' => 'Ang Pangalan',
    'LBL_FIRST_NAME' => 'Unang pangalan',
    'LBL_LAST_NAME' => 'Huling pangalan',
    'LBL_EMAIL' => 'Ang Email',
    'LBL_PHONE' => 'Telepono',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Lahat ng mga imbitadong email',
    'LBL_EMAIL_REMINDER' => 'Paalala ng email',
    'LBL_EMAIL_REMINDER_TIME' => 'Oras ng paalala ng email',
    'LBL_SEND_BUTTON_TITLE' => 'I-save at magpadals ng imbitado',
    'LBL_SEND_BUTTON_LABEL' => 'I-save at magpadals ng imbitado',
    'LBL_DATE_END' => 'Petsa ng katapusan',
    'LBL_REMINDER_TIME' => 'Oras na paalaala',
    'LBL_EMAIL_REMINDER_SENT' => 'Naipadala na paalala ng email',
    'LBL_SEARCH_BUTTON' => 'Maghanap',
    'LBL_ADD_BUTTON' => 'Magdagdag',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang mga tawag',
    'LNK_SELECT_ACCOUNT' => 'Pumili ng account',
    'LNK_NEW_ACCOUNT' => 'Bagong account',
    'LNK_NEW_OPPORTUNITY' => 'Bagong Oportunidad',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Pamunuan',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ang mga koneksyon',
    'LBL_USERS_SUBPANEL_TITLE' => 'Ang mga gumagamit',
    'LBL_OUTLOOK_ID' => 'Kalabasan ng ID',
    'LBL_MEMBER_OF' => 'Myembro ng',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ang mga tala',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Magtalaga sa',
    'LBL_LIST_MY_CALLS' => 'Ang aking mga tawag',
    'LBL_ASSIGNED_TO_NAME' => 'Magtalaga sa',
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng gumagamit',
    'NOTICE_DURATION_TIME' => 'Agwat na oras sy dspat mas malaki sa 0',
    'LBL_CALL_INFORMATION' => 'Sa taas ng tanawin', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Alisin',
    'LBL_ACCEPT_STATUS' => 'Tanggapin ang estado',
    'LBL_ACCEPT_LINK' => 'Tanggapin ang link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Gumawa ng imbitado',
    'LBL_CREATE_CONTACT' => 'Bilang kontak',
    'LBL_CREATE_LEAD' => 'Bilang lead',
    'LBL_CREATE_AND_ADD' => 'Gumawa at magdagdag',
    'LBL_CANCEL_CREATE_INVITEE' => 'I-cancel',
    'LBL_EMPTY_SEARCH_RESULT' => 'Paumanhim, walang mga resulta ang natagpuan. Mangyaring ng imbitado sa ibaba.',
    'LBL_NO_ACCESS' => 'Wala kang access upng gumawa ng $module',

    'LBL_REPEAT_TYPE' => 'Uri ng paulit-ulit',
    'LBL_REPEAT_INTERVAL' => 'Ulitin sng interval',
    'LBL_REPEAT_DOW' => 'Ulitin sng dow',
    'LBL_REPEAT_UNTIL' => 'Ulitin hanggang sa',
    'LBL_REPEAT_COUNT' => 'Ulitin ang pag bilang',
    'LBL_REPEAT_PARENT_ID' => 'Ulitin ang magulang na ID',
    'LBL_RECURRING_SOURCE' => 'Paulit-ulit na pinagmulan',

    'LBL_SYNCED_RECURRING_MSG' => 'Ang tawag na ito ay nagmula sa ibang sistema at ini-sync sa SuiteCRM. Para gumawa ng pagbabago, pumunta sa orihinal na tawag sa loob ng ibang sistema. Ang mga pagbabagong naisagawa sa ibang sistema ay maaaring mai-sync sa talaan na ito.',

    // for reminders
    'LBL_REMINDERS' => 'Mga paalaala',
    'LBL_REMINDERS_ACTIONS' => 'Mga aksyon:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Mga imbitadong email',
    'LBL_REMINDERS_WHEN' => 'Kailan:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Alisin ang paalaala',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Magdagdag ng lahatay imbitado',
    'LBL_REMINDERS_ADD_REMINDER' => 'Magdagdag ng paalala',

    'LBL_RESCHEDULE' => 'Muling mag-iskedyul',
    'LBL_RESCHEDULE_COUNT' => 'Mga Nasubukang Pagtawag',
    'LBL_RESCHEDULE_DATE' => 'Petsa',
    'LBL_RESCHEDULE_REASON' => 'Ang dahilan',
    'LBL_RESCHEDULE_ERROR1' => 'Mangyaring pumili ng petsang balido',
    'LBL_RESCHEDULE_ERROR2' => 'Mangyaring pumili ng isang rason',
    'LBL_RESCHEDULE_PANEL' => 'Muling mag-iskedyul',
    'LBL_RESCHEDULE_HISTORY' => 'Kasaysayan ng pagtatangka sa tawag',
    'LBL_CANCEL' => 'I-cancel',
    'LBL_SAVE' => 'I-seyb',

    'LBL_CALLS_RESCHEDULE' => 'Tawagan para sa pagpapalit ng iskedyul',
    'LBL_LIST_STATUS'=>'Kalagayan',
    'LBL_LIST_DATE_MODIFIED'=>'Ang petsa ay binago',
    'LBL_LIST_DUE_DATE'=>'Takdang petsa',
    'LBL_RESCHEDULED_BY'=>'sa pamamagitan',
);
