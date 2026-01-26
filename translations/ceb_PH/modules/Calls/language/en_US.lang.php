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
    'LBL_MODULE_NAME' => 'Tawag',
    'LBL_MODULE_TITLE' => 'Mga Bahin: Panimalay',
    'LBL_SEARCH_FORM_TITLE' => 'Email Pangita',
    'LBL_LIST_FORM_TITLE' => 'Napadala na listahan',
    'LBL_NEW_FORM_TITLE' => 'Mag himo og Katudloan',
    'LBL_LIST_CLOSE' => 'Sirado',
    'LBL_LIST_SUBJECT' => 'Sabjek',
    'LBL_LIST_CONTACT' => 'Kontak',
    'LBL_LIST_RELATED_TO' => 'Nga may kalabutan sa',
    'LBL_LIST_RELATED_TO_ID' => 'Ig-labot ID',
    'LBL_LIST_DATE' => 'Petsa nga Nagsugod',
    'LBL_LIST_DIRECTION' => 'Direksyon',
    'LBL_SUBJECT' => 'Sabjek:',
    'LBL_REMINDER' => 'Tima-ilhan:',
    'LBL_CONTACT_NAME' => 'Kontak:',
    'LBL_DESCRIPTION' => 'Deskripsyon:',
    'LBL_STATUS' => 'Estado:',
    'LBL_DIRECTION' => 'Direksyon:',
    'LBL_DATE' => 'Sugod nga Petsa:',
    'LBL_DURATION' => 'Kadugayon:',
    'LBL_DURATION_HOURS' => 'Kanus-a ra taman imong Oras:',
    'LBL_DURATION_MINUTES' => 'Kanus-a ra taman imong Minuto:',
    'LBL_HOURS_MINUTES' => '(mga oras/mga minuto)',
    'LBL_DATE_TIME' => 'Sugod nga Petsa ug Oras:',
    'LBL_TIME' => 'Sugod nga Oras:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Log sa Tawag',
    'LNK_NEW_MEETING' => 'Iskedyul sa Meeting',
    'LNK_CALL_LIST' => 'Tan-awa ang mga Tawag',
    'LNK_IMPORT_CALLS' => 'Import og mga Tawag',
    'ERR_DELETE_RECORD' => 'Ang numero nga rekord kay gikinahanglan nga hinganlan sa pagtangtang sa account.',
    'LBL_INVITEE' => 'Pangagda',
    'LBL_RELATED_TO' => 'Naay kalabutan sa:',
    'LNK_NEW_APPOINTMENT' => 'Mag himo og Katudloan',
    'LBL_SCHEDULING_FORM_TITLE' => 'Takda',
    'LBL_ADD_INVITEE' => 'Dugangi ang Inbitasyon',
    'LBL_NAME' => 'Pangalan',
    'LBL_FIRST_NAME' => 'Pinakaunang Pangalan',
    'LBL_LAST_NAME' => 'Katapusang Pangalan',
    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Telepono',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email tanan eh inbayts',
    'LBL_EMAIL_REMINDER' => 'Email Tima-ilhan',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Tima-ilhan na Oras',
    'LBL_SEND_BUTTON_TITLE' => 'I-save & Ipasa ang Inbayts',
    'LBL_SEND_BUTTON_LABEL' => 'I-save & Ipasa ang Inbayts',
    'LBL_DATE_END' => 'Katapusang Date',
    'LBL_REMINDER_TIME' => 'Tima-ilhan nga Oras',
    'LBL_EMAIL_REMINDER_SENT' => 'Email tima-ilhan gepadala',
    'LBL_SEARCH_BUTTON' => 'Pangitaa',
    'LBL_ADD_BUTTON' => 'Dungagi',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tawag',
    'LNK_SELECT_ACCOUNT' => 'Pagpili ug Akawnt',
    'LNK_NEW_ACCOUNT' => 'Bag-ong Account',
    'LNK_NEW_OPPORTUNITY' => 'Bag-o nga Oportunidad',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Nag-una',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_USERS_SUBPANEL_TITLE' => 'Tig gamit',
    'LBL_OUTLOOK_ID' => 'Panglantaw ID',
    'LBL_MEMBER_OF' => 'Miyembro sa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tima-ilhan',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Gigahin kang',
    'LBL_LIST_MY_CALLS' => 'Akong tawako',
    'LBL_ASSIGNED_TO_NAME' => 'Gigahin kang',
    'LBL_ASSIGNED_TO_ID' => 'Na assign nga manggagamit',
    'NOTICE_DURATION_TIME' => 'Kadugayon sa oras dalion para mo dako kaysa 0',
    'LBL_CALL_INFORMATION' => 'Kinatibuk-ang panan-aw', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Tangtangon',
    'LBL_ACCEPT_STATUS' => 'Daway Kahimtang',
    'LBL_ACCEPT_LINK' => 'Mo daway og Link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Buhat og invitee',
    'LBL_CREATE_CONTACT' => 'Kontak',
    'LBL_CREATE_LEAD' => 'Ingon nga mabasa',
    'LBL_CREATE_AND_ADD' => 'Buhat & Apil',
    'LBL_CANCEL_CREATE_INVITEE' => 'Kanselahon',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sori, walay resulta nga nakit an. Palihug og buhat sa invitee sa ubos.',
    'LBL_NO_ACCESS' => 'Wala kay access sa pag buhat$module',

    'LBL_REPEAT_TYPE' => 'Balik og sulat',
    'LBL_REPEAT_INTERVAL' => 'Balik og interval',
    'LBL_REPEAT_DOW' => 'Balik og Dow',
    'LBL_REPEAT_UNTIL' => 'Balik Hantod',
    'LBL_REPEAT_COUNT' => 'Balik og Ihap',
    'LBL_REPEAT_PARENT_ID' => 'Balik og Ginikanan ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Tinubdan',

    'LBL_SYNCED_RECURRING_MSG' => 'Kinig miting orihinal sa laing sistem og walay synced sa SuiteCRM. Para ma usab, adto sa orihinal nga miting sa sulod sa sistem. Ge otro og buhat sa laing sistem para maka synced sa rekord.',

    // for reminders
    'LBL_REMINDERS' => 'Tima-ilhan',
    'LBL_REMINDERS_ACTIONS' => 'Aksyon:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email tanan eh inbayts',
    'LBL_REMINDERS_WHEN' => 'Kanus-a:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Tangtangon ang pahinumdom',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Dugangi ang tanan Inbitasyon',
    'LBL_REMINDERS_ADD_REMINDER' => 'Dugangi og pahinumdom',

    'LBL_RESCHEDULE' => 'Untroschedule',
    'LBL_RESCHEDULE_COUNT' => 'Mga nisuway sa pagtawag',
    'LBL_RESCHEDULE_DATE' => 'Petsa',
    'LBL_RESCHEDULE_REASON' => 'Ni storya',
    'LBL_RESCHEDULE_ERROR1' => 'Palihog sa pagpili og balido nga petsa',
    'LBL_RESCHEDULE_ERROR2' => 'Palihog sa pagpili og rason',
    'LBL_RESCHEDULE_PANEL' => 'Untroschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Ni tawag og suway',
    'LBL_CANCEL' => 'Kanselahon',
    'LBL_SAVE' => 'I-save',

    'LBL_CALLS_RESCHEDULE' => 'Usab ang schedule sa panawag',
    'LBL_LIST_STATUS'=>'Stado',
    'LBL_LIST_DATE_MODIFIED'=>'Petsa nga gi-usab',
    'LBL_LIST_DUE_DATE'=>'Petsa nga Kinutuban',
    'LBL_RESCHEDULED_BY'=>'pinaagi sa',
);
