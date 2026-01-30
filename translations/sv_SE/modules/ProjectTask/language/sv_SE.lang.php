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
    'LBL_MODULE_NAME' => 'Projektuppgifter',
    'LBL_MODULE_TITLE' => 'Projektuppgifter: Hem',

    'LBL_ID' => 'ID:',
    'LBL_PROJECT_TASK_ID' => 'Projektuppgifts Id:',
    'LBL_PROJECT_ID' => 'Projekt Id:',
    'LBL_DATE_ENTERED' => 'Datum Skapad:',
    'LBL_DATE_MODIFIED' => 'Datum Ändrad:',
    'LBL_ASSIGNED_USER_ID' => 'Tilldelad till:',
    'LBL_MODIFIED_USER_ID' => 'Modifierad användar-ID:',
    'LBL_CREATED_BY' => 'Skapad av:',
    'LBL_NAME' => 'Namn:',
    'LBL_STATUS' => 'Status:',
    'LBL_DATE_DUE' => 'Förfallodatum:',
    'LBL_TIME_DUE' => 'Förfallotid:',
    'LBL_PREDECESSORS' => 'Föregångare:',
    'LBL_DATE_START' => 'Startdatum:',
    'LBL_DATE_FINISH' => 'Slut Datum:',
    'LBL_TIME_START' => 'Starttid:',
    'LBL_TIME_FINISH' => 'Slut Tid:',
    'LBL_DURATION' => 'Varaktighet:',
    'LBL_DURATION_UNIT' => 'Varaktighets Enhet:',
    'LBL_ACTUAL_DURATION' => 'Faktisk Varaktighet:',
    'LBL_PARENT_ID' => 'Projekt:',
    'LBL_PARENT_TASK_ID' => 'Förälderuppgifts Id:',
    'LBL_PERCENT_COMPLETE' => 'Procent Klart (%):',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_DESCRIPTION' => 'Anteckningar:',
    'LBL_ORDER_NUMBER' => 'Ordning:',
    'LBL_TASK_NUMBER' => 'Uppgiftsnummer:',
    'LBL_TASK_ID' => 'Uppgifts ID:',
    'LBL_MILESTONE_FLAG' => 'Milstolpe:',
    'LBL_ESTIMATED_EFFORT' => 'Beräknad insats (tim):',
    'LBL_ACTUAL_EFFORT' => 'Faktisk insats (tim):',
    'LBL_UTILIZATION' => 'Utnyttjande (%):',
    'LBL_DELETED' => 'Raderad:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Importera projektuppgifter',

    'LBL_LIST_NAME' => 'Namn',
    'LBL_LIST_PARENT_NAME' => 'Projekt',
    'LBL_LIST_PERCENT_COMPLETE' => 'Framsteg (%)',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Tilldelat till',
    'LBL_LIST_DATE_DUE' => 'Förfallodatum',
    'LBL_LIST_PRIORITY' => 'Prioritet',
    'LBL_LIST_CLOSE' => 'Stäng',
    'LBL_PROJECT_NAME' => 'Projektnamn',

    'LNK_NEW_PROJECT' => 'Skapa projekt',
    'LNK_PROJECT_LIST' => 'Projektlista',
    'LNK_NEW_PROJECT_TASK' => 'Skapa Projektuppgift',
    'LNK_PROJECT_TASK_LIST' => 'Projektuppgifter',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Mina öppna projektuppgifter',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projektuppgifter',
    'LBL_NEW_FORM_TITLE' => 'Nya projektuppgifter',

    'LBL_HISTORY_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',

    'LBL_ASSIGNED_USER_NAME' => 'Tilldelat till',
    'LBL_PARENT_NAME' => 'Projektnamn',
    'LBL_EDITLAYOUT' => 'Redigera layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Tidslinje',

    'LBL_SUBTASK' => 'Underuppgift',
    'LBL_LAG' => 'Lagg',
    'LBL_DAYS' => 'Dagar',
    'LBL_HOURS' => 'Timmar',
    'LBL_RELATIONSHIP_TYPE' => 'Relationstyp',

    'LBL_ASCENDING' => 'Stigande',
    'LBL_DESCENDING' => 'Fallande',
);
