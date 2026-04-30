<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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

    'LBL_SHAREDWEEK' => 'Setmana compartida',
    'LBL_SHAREDMONTH' => 'Mes compartit',

    'LBL_MODULE_NAME' => 'Calendar',
    'LBL_MODULE_TITLE' => 'Calendar',
    'LNK_NEW_CALL' => 'Programar Trucada',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_CALL_LIST' => 'Trucades',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_TASK' => 'Task',
    'LNK_TASK_VIEW' => 'Veure Tasca',
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'Veure esdeveniment',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_MONTH' => 'Month',
    'LBL_AGENDADAY' => 'Day',
    'LBL_YEAR' => 'Any',

    'LBL_AGENDAWEEK' => 'Setmana',
    'LBL_PREVIOUS_MONTH' => 'Mes Anterior',
    'LBL_PREVIOUS_DAY' => 'Dia Anterior',
    'LBL_PREVIOUS_YEAR' => 'Any Anterior',
    'LBL_PREVIOUS_WEEK' => 'Setmana Anterior',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_NEXT_DAY' => 'Dia Següent',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_NEXT_WEEK' => 'Setmana Següent',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Planificat',
    'LBL_BUSY' => 'Ocupat',
    'LBL_CONFLICT' => 'Conflicte',
    'LBL_USER_CALENDARS' => 'Calendaris d\'Usuari',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Previous',
    'LBL_NEXT_SHARED' => 'Next',
    'LBL_SHARED_CAL_TITLE' => 'Calendari Compartit',
    'LBL_USERS' => 'Users',
    'LBL_REFRESH' => 'Actualitzar',
    'LBL_EDIT_USERLIST' => 'User List',
    'LBL_SELECT_USERS' => 'Seleccioni usuaris per a la visualització de calendari',
    'LBL_FILTER_BY_TEAM' => 'Filtrat d\'usuaris per equip:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DATE' => 'Data i Hora d\'Inici',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'No',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => 'Crear activitat',
    'LBL_LOADING' => 'Carregant...',
    'LBL_SAVING' => 'Guardant...',
    'LBL_SENDING_INVITES' => 'Guardant i enviant invitacions...',
    'LBL_CONFIRM_REMOVE' => 'Està segur que vol eliminar aquest registre?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Està segur que vol eliminar tots els registres recurrents?',
    'LBL_EDIT_RECORD' => 'Editar activitat',
    'LBL_ERROR_SAVING' => 'Error al desar',
    'LBL_ERROR_LOADING' => 'Error al carregar',
    'LBL_GOTO_DATE' => 'Anar a la data',
    'NOTICE_DURATION_TIME' => 'El temps de durada te que ser major que 0',
    'LBL_STYLE_BASIC' => 'BASIC', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Avançat', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'No hi ha resultats pel camp: Assignat a',
    'LBL_SUBJECT' => 'Subject',
    'LBL_DURATION' => 'Duration',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priority',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Mostra els intervals de temps en setmanes i dies:',
    'LBL_SETTINGS_TIME_STARTS' => 'Hora d\'inici:',
    'LBL_SETTINGS_TIME_ENDS' => 'Hora de finalització:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Veure trucades:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Veure tasques:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Mostrar reunions, trucades i tasques realitzades:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Compartir calendari separat:',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Aplicar',
    'LBL_SEND_INVITES' => 'Enviar Invitacions',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Repetició',

    'LBL_REPEAT_TYPE' => 'Repetir',
    'LBL_REPEAT_INTERVAL' => 'Cada',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'recurrències',
    'LBL_REPEAT_END_BY' => 'Per',
    'LBL_REPEAT_DOW' => 'En',
    'LBL_REPEAT_UNTIL' => 'Repetir fins',
    'LBL_REPEAT_COUNT' => 'Nombre de recurrències',
    'LBL_REPEAT_LIMIT_ERROR' => 'La seva solicitud anava a crear més de $limit reunions.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Editeu totes les recurrències',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminar totes les recurrències',

    'LBL_DATE_END_ERROR' => 'La data de finalització és anterior a la data d\'inici',
    'ERR_YEAR_BETWEEN' => 'Ho sentim, el calendari no suporta l\'any que heu introduït<br>L\'any ha d\'estar comprés entre 1970 i 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: no està definit en aquesta vista',
    'LBL_NO_ITEMS_MOBILE' => 'El seu calendari està lliure aquesta setmana.',
    'LBL_GENERAL_SETTINGS' => 'Configuracions generals',
    'LBL_COLOR_SETTINGS' => 'Configuració de color',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Frontera',
    'LBL_TEXT' => 'Text',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Sun",
            '1' => "Mon",
            '2' => "Tue",
            '3' => "Wed",
            '4' => "Thu",
            '5' => "Fri",
            '6' => "Sat",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Sunday",
            '1' => "Monday",
            '2' => "Tuesday",
            '3' => "Wednesday",
            '4' => "Thursday",
            '5' => "Friday",
            '6' => "Saturday",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan",
            '2' => "Feb",
            '3' => "Mar",
            '4' => "Apr",
            '5' => "May",
            '6' => "Jun",
            '7' => "Jul",
            '8' => "Aug",
            '9' => "Sep",
            '10' => "Oct",
            '11' => "Nov",
            '12' => "Dec",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "January",
            '2' => "February",
            '3' => "March",
            '4' => "April",
            '5' => "May",
            '6' => "June",
            '7' => "July",
            '8' => "August",
            '9' => "September",
            '10' => "October",
            '11' => "November",
            '12' => "December",
        ),
);
