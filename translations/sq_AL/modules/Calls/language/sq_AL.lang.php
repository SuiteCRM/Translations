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
    'LBL_MODULE_NAME' => 'Thirjet',
    'LBL_MODULE_TITLE' => 'Thirjet: Ballina',
    'LBL_SEARCH_FORM_TITLE' => 'Kërkimi i thirjeve',
    'LBL_LIST_FORM_TITLE' => 'Lista e thirjeve',
    'LBL_NEW_FORM_TITLE' => 'Krijo takim',
    'LBL_LIST_CLOSE' => 'Mbyll:',
    'LBL_LIST_SUBJECT' => 'Subjekti',
    'LBL_LIST_CONTACT' => 'Kontaktet',
    'LBL_LIST_RELATED_TO' => 'Në lidhje me',
    'LBL_LIST_RELATED_TO_ID' => 'Në lidhje me ID',
    'LBL_LIST_DATE' => 'Start Date',
    'LBL_LIST_DIRECTION' => 'Drejtimi',
    'LBL_SUBJECT' => 'Subjekti',
    'LBL_REMINDER' => 'Kujtues:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_STATUS' => 'statusi',
    'LBL_DIRECTION' => 'Drejtimi:',
    'LBL_DATE' => 'Data e nisjes',
    'LBL_DURATION' => 'Kohëzgjatja',
    'LBL_DURATION_HOURS' => 'Orrët e kohëzgjatjes:',
    'LBL_DURATION_MINUTES' => 'Minutat e zgjatjes:',
    'LBL_HOURS_MINUTES' => '(orët/minutat)',
    'LBL_DATE_TIME' => 'Data dhe ora e nisjes',
    'LBL_TIME' => 'Ora e nisjes',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Thirje identifikuese',
    'LNK_NEW_MEETING' => 'Cakto mbledhje',
    'LNK_CALL_LIST' => 'Shiko thirjet',
    'LNK_IMPORT_CALLS' => 'Thirje të rëndësishme',
    'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë llogarinë',
    'LBL_INVITEE' => 'Të ftuarit',
    'LBL_RELATED_TO' => 'Në lidhje me:',
    'LNK_NEW_APPOINTMENT' => 'Krijo takim',
    'LBL_SCHEDULING_FORM_TITLE' => 'Caktimi',
    'LBL_ADD_INVITEE' => 'Shto të ftuarit',
    'LBL_NAME' => 'Emri',
    'LBL_FIRST_NAME' => 'Emri',
    'LBL_LAST_NAME' => 'Mbiemri',
    'LBL_EMAIL' => 'Emailet',
    'LBL_PHONE' => 'Telefoni',
    'LBL_REMINDER_POPUP' => 'Shfaqje',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Dërgoni një email të gjithë ftuarit',
    'LBL_EMAIL_REMINDER' => 'Përkujtuesi i Emailit',
    'LBL_EMAIL_REMINDER_TIME' => 'Koha e përkujtimit të Emailit',
    'LBL_SEND_BUTTON_TITLE' => 'Dërgo ftesat',
    'LBL_SEND_BUTTON_LABEL' => 'Dërgo ftesat',
    'LBL_DATE_END' => 'Data e përfundimit',
    'LBL_REMINDER_TIME' => 'Koha e kujtimit',
    'LBL_EMAIL_REMINDER_SENT' => 'Përkujtuesi i Emailit të dërguar',
    'LBL_SEARCH_BUTTON' => 'Kërkim',
    'LBL_ADD_BUTTON' => 'shto',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Thirjet',
    'LNK_SELECT_ACCOUNT' => 'Selekto llogarinë',
    'LNK_NEW_ACCOUNT' => 'Llogari e re',
    'LNK_NEW_OPPORTUNITY' => 'Krijo mundësi',
    'LBL_LEADS_SUBPANEL_TITLE' => 'udhëheqjet',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktet',
    'LBL_USERS_SUBPANEL_TITLE' => 'përdoruesit',
    'LBL_OUTLOOK_ID' => 'ID e pamjes së jashtne',
    'LBL_MEMBER_OF' => 'Anëtar i',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Shënimet',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Përdorues',
    'LBL_LIST_MY_CALLS' => 'Thirjet e mia',
    'LBL_ASSIGNED_TO_NAME' => 'Përdorues',
    'LBL_ASSIGNED_TO_ID' => 'Përdorues i caktuar',
    'NOTICE_DURATION_TIME' => 'Koha e zgjatjes duhet të jetë më e madhe se 0',
    'LBL_CALL_INFORMATION' => 'Pasqyra', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Fshijë',
    'LBL_ACCEPT_STATUS' => 'Prano statusin',
    'LBL_ACCEPT_LINK' => 'Prano lidhjen',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Krijo një ftesë',
    'LBL_CREATE_CONTACT' => 'Si kontakt',
    'LBL_CREATE_LEAD' => 'Si udhëheqës',
    'LBL_CREATE_AND_ADD' => 'Krijo dhe Shto',
    'LBL_CANCEL_CREATE_INVITEE' => 'Anulo',
    'LBL_EMPTY_SEARCH_RESULT' => 'Na vjen keq, asnjë rezultat nuk u gjet. Ju lutemi krijoni një ftesë lartë.',
    'LBL_NO_ACCESS' => 'Nuk keni akses për të krijuar $ modul',

    'LBL_REPEAT_TYPE' => 'Përsërit llojin',
    'LBL_REPEAT_INTERVAL' => 'Përsërit intervalin',
    'LBL_REPEAT_DOW' => 'Përsërit në',
    'LBL_REPEAT_UNTIL' => 'përsërit deri',
    'LBL_REPEAT_COUNT' => 'Përsërit numërimin',
    'LBL_REPEAT_PARENT_ID' => 'Përsërit ID e Prindit',
    'LBL_RECURRING_SOURCE' => 'Burimi Periodik',

    'LBL_SYNCED_RECURRING_MSG' => 'Kjo mbledhje ka origjinën në sistemin tjetër dhe është sinkronizuar në SuiteCRM. Pasi mbledhja ka qenë e redaktuar në SuiteCRM, nuk do të jetë në gjendje për t&#39;u sinkronizuar për sistemin tjetër.',

    // for reminders
    'LBL_REMINDERS' => 'Reminders',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Shfaqje',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'minutData',
    'LBL_RESCHEDULE_REASON' => 'Reason',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Call Attempt History',
    'LBL_CANCEL' => 'Anulo',
    'LBL_SAVE' => 'Ruaj',

    'LBL_CALLS_RESCHEDULE' => 'Calls Reschedule',
    'LBL_LIST_STATUS'=>'Statusi',
    'LBL_LIST_DATE_MODIFIED'=>'Të dhënat e modifikuara',
    'LBL_LIST_DUE_DATE'=>'Due Date',
    'LBL_RESCHEDULED_BY'=>'nga',
);
