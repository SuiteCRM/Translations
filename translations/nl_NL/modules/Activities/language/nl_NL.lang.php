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
    'LBL_MODULE_NAME' => 'Activiteiten',
    'LBL_MODULE_TITLE' => 'Activiteiten: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Activiteiten zoeken',
    'LBL_LIST_FORM_TITLE' => 'Activiteiten',
    'LBL_LIST_SUBJECT' => 'Onderwerp',
    'LBL_OVERVIEW' => 'Relatiegegevens', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Taken', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Vergaderingen', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'Telefoongesprekken', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'E-MAILS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTITIES', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'PRINT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Afspraak',
    'LBL_CALL_TYPE' => 'Telefoongesprekken',
    'LBL_EMAIL_TYPE' => 'E-mails',
    'LBL_NOTE_TYPE' => 'Notities',
    'LBL_DATA_TYPE_START' => 'Start:',
    'LBL_DATA_TYPE_SENT' => 'Verzonden:',
    'LBL_DATA_TYPE_MODIFIED' => 'Gewijzigd:',
    'LBL_LIST_CONTACT' => 'Contactpersonen',
    'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
    'LBL_LIST_DATE' => 'Datum',
    'LBL_LIST_CLOSE' => 'Sluiten',
    'LBL_SUBJECT' => 'Onderwerp:',
    'LBL_STATUS' => 'Status:',
    'LBL_LOCATION' => 'Locatie:',
    'LBL_DATE_TIME' => 'Begindatum & tijd:',
    'LBL_DATE' => 'Begindatum:',
    'LBL_TIME' => 'Aanvangstijd:',
    'LBL_DURATION' => 'Gespreksduur:',
    'LBL_HOURS_MINS' => '(uren/minuten)',
    'LBL_CONTACT_NAME' => 'Naam contactpersoon: ',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LNK_NEW_CALL' => 'Telefoongesprek inplannen',
    'LNK_NEW_MEETING' => 'Vergadering plannen',
    'LNK_NEW_TASK' => 'Nieuwe taak',
    'LNK_NEW_NOTE' => 'Nieuwe notitie of bijlage',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'Telefoongesprekken',
    'LNK_MEETING_LIST' => 'Afspraken',
    'LNK_TASK_LIST' => 'Taken',
    'LNK_NOTE_LIST' => 'Notities',
    'LBL_DELETE_ACTIVITY' => 'Weet u zeker dat u deze activiteit wilt verwijderen?',
    'ERR_DELETE_RECORD' => 'Er moet een recordnummer zijn gespecificeerd om deze relatie te verwijderen.',
    'LBL_INVITEE' => 'Genodigden',
    'LBL_LIST_DIRECTION' => 'Richting',
    'LBL_DIRECTION' => 'Richting',
    'LNK_NEW_APPOINTMENT' => 'Nieuwe afspraak',
    'LNK_VIEW_CALENDAR' => 'Vandaag',
    'LBL_OPEN_ACTIVITIES' => 'Openstaande activiteiten',
    'LBL_HISTORY' => 'Geschiedenis',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Nieuwe taak',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Nieuwe taak',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Vergadering plannen',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Vergadering plannen',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Telefoongesprek inplannen',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Nieuwe notitie of bijlage',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Nieuwe notitie of bijlage',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'E-mail archiveren',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'E-mail archiveren',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DUE_DATE' => 'Verloopdatum',
    'LBL_LIST_LAST_MODIFIED' => 'Laatste wijziging',
    'LNK_IMPORT_CALLS' => 'Importeer telefoongesprekken',
    'LNK_IMPORT_MEETINGS' => 'Importeer afspraken',
    'LNK_IMPORT_TASKS' => 'Importeer taken',
    'LNK_IMPORT_NOTES' => 'Notities importeren',
    'LBL_ACCEPT_THIS' => 'Accepteren?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Openstaande activiteiten',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruiker',

    'LBL_ACCEPT' => 'Geaccepteerd' /*for 508 compliance fix*/,
);
