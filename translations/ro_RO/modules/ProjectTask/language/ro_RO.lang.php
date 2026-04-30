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
    'LBL_MODULE_NAME' => 'Sarcini proiect',
    'LBL_MODULE_TITLE' => 'Sarcina proiectului: Acasă',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Id sarcina proiect:',
    'LBL_PROJECT_ID' => 'Identitate proiect:',
    'LBL_DATE_ENTERED' => 'Data creării:',
    'LBL_DATE_MODIFIED' => 'Data modificării:',
    'LBL_ASSIGNED_USER_ID' => 'Atribuit lui:',
    'LBL_MODIFIED_USER_ID' => 'Modificare Id utilizator:',
    'LBL_CREATED_BY' => 'Creat de:',
    'LBL_NAME' => 'Nume',
    'LBL_STATUS' => 'Status:',
    'LBL_DATE_DUE' => 'Pana la data:',
    'LBL_TIME_DUE' => 'Pana la ora:',
    'LBL_PREDECESSORS' => 'Predecesor',
    'LBL_DATE_START' => 'Dată începere:',
    'LBL_DATE_FINISH' => 'Data finalizării:',
    'LBL_TIME_START' => 'Ora de începere:',
    'LBL_TIME_FINISH' => 'Timpul final:',
    'LBL_DURATION' => 'Durată:',
    'LBL_DURATION_UNIT' => 'Unitate de durată:',
    'LBL_ACTUAL_DURATION' => 'Durata actuală:',
    'LBL_PARENT_ID' => 'Proiect:',
    'LBL_PARENT_TASK_ID' => 'Id sarcina părinte:',
    'LBL_PERCENT_COMPLETE' => '% Complet',
    'LBL_PRIORITY' => 'Prioritate',
    'LBL_DESCRIPTION' => 'Observații:',
    'LBL_ORDER_NUMBER' => 'Comandă:',
    'LBL_TASK_NUMBER' => 'Nr. sarcină:',
    'LBL_TASK_ID' => 'ID sarcină:',
    'LBL_MILESTONE_FLAG' => 'Etapa:',
    'LBL_ESTIMATED_EFFORT' => 'Efort estimat (ore):',
    'LBL_ACTUAL_EFFORT' => 'Efort efectiv (ore):',
    'LBL_UTILIZATION' => 'Utilizare (%):',
    'LBL_DELETED' => 'Șters:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Importă sarcini de Proiect',

    'LBL_LIST_NAME' => 'Prenume',
    'LBL_LIST_PARENT_NAME' => 'Proiect',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% Complet',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Atribuit lui',
    'LBL_LIST_DATE_DUE' => 'Până la data',
    'LBL_LIST_PRIORITY' => 'Prioritate',
    'LBL_LIST_CLOSE' => 'Închideți',
    'LBL_PROJECT_NAME' => 'Nume proiect',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Creează proiect',
    'LNK_PROJECT_LIST' => 'Lista proiect',
    'LNK_NEW_PROJECT_TASK' => 'Creare sarcină proiect',
    'LNK_PROJECT_TASK_LIST' => 'Sarcini proiect',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Sarcinile mele de proiect',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sarcini proiect',
    'LBL_NEW_FORM_TITLE' => 'Proiect nou de activitate',

    'LBL_HISTORY_TITLE' => 'Istoric',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitati',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istoric',

    'LBL_ASSIGNED_USER_NAME' => 'Atribuit lui',
    'LBL_PARENT_NAME' => 'Nume proiect',
    'LBL_EDITLAYOUT' => 'Editare machetă' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Cronologie',

    'LBL_SUBTASK' => 'Subactivitate',
    'LBL_LAG' => 'Întârziere',
    'LBL_DAYS' => 'Zile',
    'LBL_HOURS' => 'Ore',
    'LBL_RELATIONSHIP_TYPE' => 'Tip relație',

    'LBL_ASCENDING' => 'Ascendent',
    'LBL_DESCENDING' => 'Descendent',
);
