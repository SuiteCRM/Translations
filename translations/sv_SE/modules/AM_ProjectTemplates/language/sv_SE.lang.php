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
    'LBL_ASSIGNED_TO_ID' => 'Tilldelat användar-id',
    'LBL_ASSIGNED_TO_NAME' => 'Projektledare',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum Skapad',
    'LBL_DATE_MODIFIED' => 'Datum Ändrad',
    'LBL_MODIFIED' => 'Ändrad av',
    'LBL_MODIFIED_NAME' => 'Ändrad av Namn',
    'LBL_CREATED' => 'Skapad av',
    'LBL_DELETED' => 'Raderad',
    'LBL_NAME' => 'Mall Namn',
    'LBL_CREATED_USER' => 'Skapad av Användare',
    'LBL_MODIFIED_USER' => 'Ändrad av Användare',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_EDIT_BUTTON' => 'Redigera',
    'LBL_REMOVE' => 'Ta bort',
    'LBL_LIST_FORM_TITLE' => 'Projektmall-lista',
    'LBL_MODULE_NAME' => 'Projektmallar',
    'LBL_MODULE_TITLE' => 'Projektmallar',
    'LBL_HOMEPAGE_TITLE' => 'Mina projektmallar',
    'LNK_NEW_RECORD' => 'Skapa projektmallar',
    'LNK_LIST' => 'Visa projektmallar',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importera projektmallar',
    'LBL_SEARCH_FORM_TITLE' => 'Sök projektmallar',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visa historik',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_NEW_FORM_TITLE' => 'Nya projektmallar',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Prioritet',
    'LBL_PROJECT_NAME' => 'Projektnamn',
    'LBL_START_DATE' => 'Startdatum',
    'LBL_CREATE_PROJECT_TITLE' => 'Skapa ett nytt projekt från denna mall?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Uppgiftsmallar',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Användare',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Kontakter',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Välj resurser',
    'LBL_NEW_PROJECT_CREATED' => 'Nytt projekt skapat',
    'LBL_NEW_PROJECT' => 'Skapa projekt',
    'LBL_CANCEL_PROJECT' => 'Ångra',

    'LBL_SUBTASK' => 'Uppgifter',
    'LBL_MILESTONE_FLAG' => 'Milstolpe',
    'LBL_RELATIONSHIP_TYPE' => 'Relationstyp',
    'LBL_LAG' => 'Lagg',
    'LBL_DAYS' => 'Dagar',
    'LBL_HOURS' => 'Timmar',
    'LBL_MONTHS' => 'Månader',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektuppgifter',
    'LBL_VIEW_GANTT_TITLE' => 'Visa Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Varaktighet',
    'LBL_TASK_TITLE' => 'Redigera uppgift',
    'LBL_DURATION_TITLE' => 'Redigera varaktighet',
    'LBL_DESCRIPTION' => 'Anteckningar:',
    'LBL_ASSIGNED_USER_ID' => 'Tilldelad till:',

    'LBL_LIST_ASSIGNED_USER' => 'Projektledare',
    'LBL_UNASSIGNED' => 'Ej tilldelad',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resurser',
    'LBL_DELETE_TASK' => 'Ta bort uppgift',
    'LBL_VIEW_DETAIL' => 'Visa detaljer',
    'LBL_ADD_NEW_TASK' => 'Lägg till ny uppgift',
    'LBL_ASSIGNED_USER_NAME' => 'Projektledare:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Uppgiftsnamn',
    'LBL_DURATION' => 'Varaktighet',
    'LBL_ACTUAL_DURATION' => 'Faktisk varaktighet',
    'LBL_START' => 'Första',
    'LBL_FINISH' => 'Klar',
    'LBL_PREDECESSORS' => 'Förgångare',
    'LBL_PERCENT_COMPLETE' => 'Framsteg (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Redigera uppgiftens egenskaper.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Anse vara arbetsdagar',
    'LBL_COPY_ALL_TASKS' => 'Kopiera alla aktiviteter med resurser',
    'LBL_COPY_SEL_TASKS' => 'Kopiera markerade uppgifter med resurser',
    'LBL_TOOLTIP_TITLE' => 'Tips',
    'LBL_TOOLTIP_TEXT' => 'Kopiera alla uppgifter som tilldelats användare',

    'LBL_EMAIL' => 'E-post',
    'LBL_PHONE' => 'Kontorstelefon:',
    'LBL_ADD_BUTTON' => 'Lägg till',
    'LBL_ADD_INVITEE' => 'Lägg till resurs',
    'LBL_FIRST_NAME' => 'Förnamn',
    'LBL_LAST_NAME' => 'Efternamn',
    'LBL_SEARCH_BUTTON' => 'Sök',
    'LBL_EMPTY_SEARCH_RESULT' => 'Tyvärr, inga resultat hittades. Skapa en inbjudan nedan.',
    'LBL_CREATE_INVITEE' => 'Skapa en resurs',
    'LBL_CREATE_CONTACT' => 'Som kontakt',
    'LBL_CREATE_AND_ADD' => 'Skapa & lägg till',
    'LBL_CANCEL_CREATE_INVITEE' => 'Ångra',
    'LBL_NO_ACCESS' => 'Du har inte behörighet att skapa $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resurslista',
    'LBL_NONE' => 'Ingen',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Projektmallar: Projekt från projekt titel',


);
