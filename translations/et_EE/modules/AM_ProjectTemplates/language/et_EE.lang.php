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
    'LBL_ASSIGNED_TO_ID' => 'Määratud kasutaja Id',
    'LBL_ASSIGNED_TO_NAME' => 'Projektihaldur',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Loomiskuupäev',
    'LBL_DATE_MODIFIED' => 'Muutmiskuupäev',
    'LBL_MODIFIED' => 'Muutja',
    'LBL_MODIFIED_NAME' => 'Muutja nime järgi',
    'LBL_CREATED' => 'Loodud',
    'LBL_DELETED' => 'Kustutatud',
    'LBL_NAME' => 'Malli nimi',
    'LBL_CREATED_USER' => 'Looja',
    'LBL_MODIFIED_USER' => 'Muutja',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_EDIT_BUTTON' => 'Redigeeri',
    'LBL_REMOVE' => 'Eemalda',
    'LBL_LIST_FORM_TITLE' => 'Projekti mallide nimekiri',
    'LBL_MODULE_NAME' => 'Projekti mallid',
    'LBL_MODULE_TITLE' => 'Projekti mallid',
    'LBL_HOMEPAGE_TITLE' => 'Minu projekti mallid',
    'LNK_NEW_RECORD' => 'Loo projekti mall',
    'LNK_LIST' => 'Vaata projekti malle',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Impordi projekti mall',
    'LBL_SEARCH_FORM_TITLE' => 'Otsi projekti malle',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vaata ajalugu',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tegevused',
    'LBL_NEW_FORM_TITLE' => 'Uued projekti mallid',
    'LBL_STATUS' => 'Olek',
    'LBL_PRIORITY' => 'Tähtsus',
    'LBL_PROJECT_NAME' => 'Projekti nimi',
    'LBL_START_DATE' => 'Alguskuupäev',
    'LBL_CREATE_PROJECT_TITLE' => 'Kas luua sellest malli põhjal uus projekt?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Ülesande mallid',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Kasutajad',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Kontaktid',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Vali ressursid',
    'LBL_NEW_PROJECT_CREATED' => 'Loodi uus projekt',
    'LBL_NEW_PROJECT' => 'Loo projekt',
    'LBL_CANCEL_PROJECT' => 'Tühista',

    'LBL_SUBTASK' => 'Ülesanded',
    'LBL_MILESTONE_FLAG' => 'Eesmärk',
    'LBL_RELATIONSHIP_TYPE' => 'Seose liik',
    'LBL_LAG' => 'Viivitus',
    'LBL_DAYS' => 'Päevi',
    'LBL_HOURS' => 'Tunde',
    'LBL_MONTHS' => 'Kuid',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projekti ülesanded',
    'LBL_VIEW_GANTT_TITLE' => 'Gantti vaade',
    'LBL_VIEW_GANTT_DURATION' => 'Kestus',
    'LBL_TASK_TITLE' => 'Muuda ülesannet',
    'LBL_DURATION_TITLE' => 'Muuda kestust',
    'LBL_DESCRIPTION' => 'Märkused',
    'LBL_ASSIGNED_USER_ID' => 'Vastutaja:',

    'LBL_LIST_ASSIGNED_USER' => 'Projektihaldur',
    'LBL_UNASSIGNED' => 'Määramata',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressursid',
    'LBL_DELETE_TASK' => 'Kustuta ülesanne',
    'LBL_VIEW_DETAIL' => 'Vaata lisainfot',
    'LBL_ADD_NEW_TASK' => 'Lisa uus ülesanne',
    'LBL_ASSIGNED_USER_NAME' => 'Projektihaldur:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Ülesande nimi',
    'LBL_DURATION' => 'Kestus',
    'LBL_ACTUAL_DURATION' => 'Tegelik kestus',
    'LBL_START' => 'Alusta',
    'LBL_FINISH' => 'Lõpeta',
    'LBL_PREDECESSORS' => 'Eelnevad',
    'LBL_PERCENT_COMPLETE' => '% lõpetatud',
    'LBL_EDIT_TASK_PROPERTIES' => 'Muuda ülesande omadusi.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Arvesta tööpäevi',
    'LBL_COPY_ALL_TASKS' => 'Kopeeri Kõik Ülesanded Koos Ressurssidega',
    'LBL_COPY_SEL_TASKS' => 'Kopeeri Valitud Ülesanded Koos Ressurssidega',
    'LBL_TOOLTIP_TITLE' => 'Vihje',
    'LBL_TOOLTIP_TEXT' => 'Kopeerib Kõik ülesanded koos seotud kasutajatega',

    'LBL_EMAIL' => 'E-kirjad',
    'LBL_PHONE' => 'Tlf number',
    'LBL_ADD_BUTTON' => 'Lisa',
    'LBL_ADD_INVITEE' => 'Lisa ressurss',
    'LBL_FIRST_NAME' => 'Eesnimi',
    'LBL_LAST_NAME' => 'Perekonnanimi',
    'LBL_SEARCH_BUTTON' => 'Otsi',
    'LBL_EMPTY_SEARCH_RESULT' => 'Vabandust, tulemusi ei leitud. Palun lisa kutse allpool.',
    'LBL_CREATE_INVITEE' => 'Loo ressurss',
    'LBL_CREATE_CONTACT' => 'Kontaktina',
    'LBL_CREATE_AND_ADD' => 'Loo ja lisa',
    'LBL_CANCEL_CREATE_INVITEE' => 'Tühista',
    'LBL_NO_ACCESS' => 'Teil puudub ligipääs moodulile $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Ressursside nimekiri',
    'LBL_NONE' => 'Pole midagi',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Projekti mallid: Projekt projekti pealkirjast',


);
