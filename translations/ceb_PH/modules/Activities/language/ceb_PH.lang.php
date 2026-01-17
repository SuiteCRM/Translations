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
    'LBL_MODULE_NAME' => 'Kalihukan',
    'LBL_MODULE_TITLE' => 'Mga Aktibidad: Balay',
    'LBL_SEARCH_FORM_TITLE' => 'Pangita sa mga Aktibidad',
    'LBL_LIST_FORM_TITLE' => 'Listahan sa mga Aktibidad',
    'LBL_LIST_SUBJECT' => 'Sabjek',
    'LBL_OVERVIEW' => 'Kinatibuk-ang panan-aw', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Mga Buluhaton', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Mag Kapunungan', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'Mga Tawag', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'Mga Email', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'Tima-ilhan', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'Print', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Mag tipok',
    'LBL_CALL_TYPE' => 'Tawag',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'Libro',
    'LBL_DATA_TYPE_START' => 'Sugod:',
    'LBL_DATA_TYPE_SENT' => 'Napadala:',
    'LBL_DATA_TYPE_MODIFIED' => 'Giusab:',
    'LBL_LIST_CONTACT' => 'Kontak',
    'LBL_LIST_RELATED_TO' => 'Nga may kalabutan sa',
    'LBL_LIST_DATE' => 'Petsa',
    'LBL_LIST_CLOSE' => 'Sirado',
    'LBL_SUBJECT' => 'Sabjek:',
    'LBL_STATUS' => 'Estado:',
    'LBL_LOCATION' => 'Lokasyon:',
    'LBL_DATE_TIME' => 'Sugod nga Petsa ug Oras:',
    'LBL_DATE' => 'Sugod nga Petsa:',
    'LBL_TIME' => 'Sugod nga Oras:',
    'LBL_DURATION' => 'Kadugayon:',
    'LBL_HOURS_MINS' => '(mga oras/mga minuto)',
    'LBL_CONTACT_NAME' => 'Pangan sa Kontak: ',
    'LBL_DESCRIPTION' => 'Deskripsyon:',
    'LNK_NEW_CALL' => 'Log sa Tawag',
    'LNK_NEW_MEETING' => 'Iskedyul sa Meeting',
    'LNK_NEW_TASK' => 'Paghimo og buhaton',
    'LNK_NEW_NOTE' => 'Paghimo og Note o Pagdugang og Sumpay',
    'LNK_NEW_EMAIL' => 'Paghimo og naka-archive nga Email',
    'LNK_CALL_LIST' => 'Tan-awa ang mga Tawag',
    'LNK_MEETING_LIST' => 'Makita Mitings',
    'LNK_TASK_LIST' => 'Tan-awa ang mga buluhaton',
    'LNK_NOTE_LIST' => 'Pagtan-aw sa mga Sulat',
    'LBL_DELETE_ACTIVITY' => 'Sigurado ka ba nga gusto ni nimo tangtangon nga aktibiti?',
    'ERR_DELETE_RECORD' => 'Kinahanglan nimo i-specify ang numero sa rekord para mawagtang ang account.',
    'LBL_INVITEE' => 'Pangagda',
    'LBL_LIST_DIRECTION' => 'Direksyon',
    'LBL_DIRECTION' => 'Direksyon',
    'LNK_NEW_APPOINTMENT' => 'Bag-ong Appointment',
    'LNK_VIEW_CALENDAR' => 'Tan-awa ang kalendaryo',
    'LBL_OPEN_ACTIVITIES' => 'Ablihi ang mga Aktibidad',
    'LBL_HISTORY' => 'Kasaysayan',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Paghimo og buhaton',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Paghimo og buhaton',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Iskedyul sa Meeting',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Iskedyul sa Meeting',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Log sa Tawag',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Paghimo og Note o Sumpay',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Paghimo og Note o Sumpay',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archive nga Email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archive nga Email',
    'LBL_LIST_STATUS' => 'Stado',
    'LBL_LIST_DUE_DATE' => 'Petsa nga Kinutuban',
    'LBL_LIST_LAST_MODIFIED' => 'Katapusan nga gi-usab',
    'LNK_IMPORT_CALLS' => 'Import og mga Tawag',
    'LNK_IMPORT_MEETINGS' => 'Mitings pag-import',
    'LNK_IMPORT_TASKS' => 'Import og mga Buluhaton',
    'LNK_IMPORT_NOTES' => 'Import og mga Note',
    'LBL_ACCEPT_THIS' => 'Nadawat?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ablihi ang mga Aktibidad',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Na assign nga manggagamit',

    'LBL_ACCEPT' => 'Nadawat' /*for 508 compliance fix*/,
);
