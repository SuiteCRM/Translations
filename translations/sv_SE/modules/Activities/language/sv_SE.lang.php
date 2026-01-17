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
    'LBL_MODULE_TITLE' => 'Aktiviteter: Hem',
    'LBL_SEARCH_FORM_TITLE' => 'Sök aktivitet',
    'LBL_LIST_FORM_TITLE' => 'Lista aktiviteter',
    'LBL_LIST_SUBJECT' => 'Ämne',
    'LBL_OVERVIEW' => 'Företagsinformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'UPPGIFTER', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'MÖTEN', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'SAMTAL', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'E-POST', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTERINGAR', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'UTSKRIFT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Möten',
    'LBL_CALL_TYPE' => 'Samtal',
    'LBL_EMAIL_TYPE' => 'E-post',
    'LBL_NOTE_TYPE' => 'Anteckningar',
    'LBL_DATA_TYPE_START' => 'Första:',
    'LBL_DATA_TYPE_SENT' => 'Skickat:',
    'LBL_DATA_TYPE_MODIFIED' => 'Ändrad',
    'LBL_LIST_CONTACT' => 'Kontakter',
    'LBL_LIST_RELATED_TO' => 'Relaterad till',
    'LBL_LIST_DATE' => 'Datum',
    'LBL_LIST_CLOSE' => 'Stäng',
    'LBL_SUBJECT' => 'Ämne:',
    'LBL_STATUS' => 'Status:',
    'LBL_LOCATION' => 'Plats:',
    'LBL_DATE_TIME' => 'Startdatum & tid:',
    'LBL_DATE' => 'Startdatum:',
    'LBL_TIME' => 'Starttid:',
    'LBL_DURATION' => 'Varaktighet:',
    'LBL_HOURS_MINS' => '(timmar/minuter)',
    'LBL_CONTACT_NAME' => 'Kontakt namn:',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LNK_NEW_CALL' => 'Schemalägg samtal',
    'LNK_NEW_MEETING' => 'Schemalägg möte',
    'LNK_NEW_TASK' => 'Skapa uppgift',
    'LNK_NEW_NOTE' => 'Skapa anteckning eller bilaga',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'Samtal',
    'LNK_MEETING_LIST' => 'Möten',
    'LNK_TASK_LIST' => 'Uppgifter',
    'LNK_NOTE_LIST' => 'Anteckningar',
    'LBL_DELETE_ACTIVITY' => 'Är du säker på att du vill radera denna aktivitet?',
    'ERR_DELETE_RECORD' => 'En post måste specificeras för att ta bort företaget.',
    'LBL_INVITEE' => 'Inbjudningar',
    'LBL_LIST_DIRECTION' => 'Inriktning',
    'LBL_DIRECTION' => 'Inriktning',
    'LNK_NEW_APPOINTMENT' => 'Ny aktivitet',
    'LNK_VIEW_CALENDAR' => 'Idag',
    'LBL_OPEN_ACTIVITIES' => 'Öppna aktiviteter',
    'LBL_HISTORY' => 'Historia',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Skapa uppgift',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Skapa uppgift',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Schemalägg möte',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Schemalägg möte',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Schemalägg samtal',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Skapa anteckning eller bilaga',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Skapa anteckning eller bilaga',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arkivera E-post',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arkivera E-post',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DUE_DATE' => 'Förfallodag',
    'LBL_LIST_LAST_MODIFIED' => 'Senast ändrad',
    'LNK_IMPORT_CALLS' => 'Importera Samtal',
    'LNK_IMPORT_MEETINGS' => 'Importera Möten',
    'LNK_IMPORT_TASKS' => 'Importera Uppgifter',
    'LNK_IMPORT_NOTES' => 'Importera anteckningar',
    'LBL_ACCEPT_THIS' => 'Accepteras?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Öppna aktiviteter',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',

    'LBL_ACCEPT' => 'Accepterad' /*for 508 compliance fix*/,
);
