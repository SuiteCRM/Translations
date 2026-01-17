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
    'LBL_MODULE_NAME' => 'Darbības',
    'LBL_MODULE_TITLE' => 'Darbības',
    'LBL_SEARCH_FORM_TITLE' => 'Darbību meklēšana',
    'LBL_LIST_FORM_TITLE' => 'Aktivitāšu saraksts',
    'LBL_LIST_SUBJECT' => 'Temats',
    'LBL_OVERVIEW' => 'Apskats', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'TASKS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'MEETINGS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'CALLS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'EMAILS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTES', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'Druka', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Tikšanās',
    'LBL_CALL_TYPE' => 'Zvans',
    'LBL_EMAIL_TYPE' => 'E-pasts',
    'LBL_NOTE_TYPE' => 'Piezīme',
    'LBL_DATA_TYPE_START' => 'Sākt:',
    'LBL_DATA_TYPE_SENT' => 'Nosūtīts:',
    'LBL_DATA_TYPE_MODIFIED' => 'Modificēts:',
    'LBL_LIST_CONTACT' => 'Kontaktpersonas',
    'LBL_LIST_RELATED_TO' => 'Attiecas uz',
    'LBL_LIST_DATE' => 'Date',
    'LBL_LIST_CLOSE' => 'Slēgt',
    'LBL_SUBJECT' => 'Temats:',
    'LBL_STATUS' => 'Statuss:',
    'LBL_LOCATION' => 'Vieta:',
    'LBL_DATE_TIME' => 'Sākuma datums un laiks:',
    'LBL_DATE' => 'Sākuma datums:',
    'LBL_TIME' => 'Sākuma laiks:',
    'LBL_DURATION' => 'Ilgums:',
    'LBL_HOURS_MINS' => '(stundas/minūtes)',
    'LBL_CONTACT_NAME' => 'Kontaktpersonas vārds:',
    'LBL_DESCRIPTION' => 'Apraksts:',
    'LNK_NEW_CALL' => 'Ieplānot zvanu [Alt+C]',
    'LNK_NEW_MEETING' => 'Ieplānot tikšanos [Alt+M]',
    'LNK_NEW_TASK' => 'Izveidot uzdevumu [Alt+N]',
    'LNK_NEW_NOTE' => 'Izveidot piezīmi vai pielikumu',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'Aplūkot zvanus',
    'LNK_MEETING_LIST' => 'Tikšanās',
    'LNK_TASK_LIST' => 'Aplūkot uzdevumus',
    'LNK_NOTE_LIST' => 'Aplūkot piezīmes',
    'LBL_DELETE_ACTIVITY' => 'Vai tiešām vēlaties dzēst šo darbību?',
    'ERR_DELETE_RECORD' => 'Jums ir jānorāda ieraksta numuru, lai dzēstu uzņēmumu.',
    'LBL_INVITEE' => 'Ielūgtais',
    'LBL_LIST_DIRECTION' => 'Virziens',
    'LBL_DIRECTION' => 'Virziens',
    'LNK_NEW_APPOINTMENT' => 'Jauna tikšanās',
    'LNK_VIEW_CALENDAR' => 'Šodien',
    'LBL_OPEN_ACTIVITIES' => 'Atvērtās darbības',
    'LBL_HISTORY' => 'Vēsture',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Izveidot uzdevumu [Alt+N]',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Izveidot uzdevumu [Alt+N]',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Ieplānot tikšanos [Alt+M]',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Ieplānot tikšanos [Alt+M]',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Ieplānot zvanu [Alt+C]',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Izveidot piezīmi vai pielikumu',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Izveidot piezīmi vai pielikumu',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhivēt E-pastu [Alt+K]',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhivēt E-pastu [Alt+K]',
    'LBL_LIST_STATUS' => 'Statuss',
    'LBL_LIST_DUE_DATE' => 'Izpildes datums',
    'LBL_LIST_LAST_MODIFIED' => 'Pēdējas izmaiņas',
    'LNK_IMPORT_CALLS' => 'Importēt zvanus',
    'LNK_IMPORT_MEETINGS' => 'Importēt tikšanās',
    'LNK_IMPORT_TASKS' => 'Importēt uzdevumus',
    'LNK_IMPORT_NOTES' => 'Importēt piezīmes',
    'LBL_ACCEPT_THIS' => 'Apstiprināt?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Atvērtās darbības',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',

    'LBL_ACCEPT' => 'Apstiprināt' /*for 508 compliance fix*/,
);
