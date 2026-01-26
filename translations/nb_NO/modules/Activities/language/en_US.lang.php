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
    'LBL_MODULE_NAME' => 'Aktiviteter',
    'LBL_MODULE_TITLE' => 'Aktiviteter: Hovedside',
    'LBL_SEARCH_FORM_TITLE' => 'Aktivitetssøk',
    'LBL_LIST_FORM_TITLE' => 'Aktivitetsliste',
    'LBL_LIST_SUBJECT' => 'Emne',
    'LBL_OVERVIEW' => 'Info om kunden', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'TASKS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'MEETINGS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'CALLS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'EMAILS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTES', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'PRINT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Møter',
    'LBL_CALL_TYPE' => 'Oppringninger',
    'LBL_EMAIL_TYPE' => 'E-post',
    'LBL_NOTE_TYPE' => 'Notater og vedlegg',
    'LBL_DATA_TYPE_START' => 'start',
    'LBL_DATA_TYPE_SENT' => 'sendt',
    'LBL_DATA_TYPE_MODIFIED' => 'Endret:',
    'LBL_LIST_CONTACT' => 'Kontakter',
    'LBL_LIST_RELATED_TO' => 'Knyttet til',
    'LBL_LIST_DATE' => 'Dato',
    'LBL_LIST_CLOSE' => 'Avslutt',
    'LBL_SUBJECT' => 'Emne:',
    'LBL_STATUS' => 'Status',
    'LBL_LOCATION' => 'Beliggenhet:',
    'LBL_DATE_TIME' => 'Start dato & klokkeslett:',
    'LBL_DATE' => 'Startdato:',
    'LBL_TIME' => 'Start klokkeslett:',
    'LBL_DURATION' => 'Varighet:',
    'LBL_HOURS_MINS' => '(timer/minutter)',
    'LBL_CONTACT_NAME' => 'Kontaktnavn:',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LNK_NEW_CALL' => 'Ny oppringning',
    'LNK_NEW_MEETING' => 'Nytt møte',
    'LNK_NEW_TASK' => 'Ny oppgave',
    'LNK_NEW_NOTE' => 'Nytt notat eller vedlegg',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'Oppringninger',
    'LNK_MEETING_LIST' => 'Møter',
    'LNK_TASK_LIST' => 'Oppgaver',
    'LNK_NOTE_LIST' => 'Notater og vedlegg',
    'LBL_DELETE_ACTIVITY' => 'Er du sikker på at du vil slette denne aktiviteten?',
    'ERR_DELETE_RECORD' => 'Oppgi referansenr for å slette denne kontoen.',
    'LBL_INVITEE' => 'Inviterte',
    'LBL_LIST_DIRECTION' => 'Retning',
    'LBL_DIRECTION' => 'Retning',
    'LNK_NEW_APPOINTMENT' => 'Ny avtale',
    'LNK_VIEW_CALENDAR' => 'I dag',
    'LBL_OPEN_ACTIVITIES' => 'Åpne aktiviteter',
    'LBL_HISTORY' => 'Historie',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Ny oppgave',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Ny oppgave',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Nytt møte',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Nytt møte',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Ny oppringning',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Nytt notat eller vedlegg',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Nytt notat eller vedlegg',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arkiver e-post',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arkiver e-post',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DUE_DATE' => 'Frist',
    'LBL_LIST_LAST_MODIFIED' => 'Sist endret',
    'LNK_IMPORT_CALLS' => 'Importer samtaler',
    'LNK_IMPORT_MEETINGS' => 'Importer møter',
    'LNK_IMPORT_TASKS' => 'Importer oppgaver',
    'LNK_IMPORT_NOTES' => 'Importer notater',
    'LBL_ACCEPT_THIS' => 'Aksept ?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Åpne aktiviteter',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruker',

    'LBL_ACCEPT' => 'Godta' /*for 508 compliance fix*/,
);
