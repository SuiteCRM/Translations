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
    'LBL_MODULE_NAME' => 'Projekto užduotys',
    'LBL_MODULE_TITLE' => 'Projekto užduotis: Pradžia',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Projekto užduoties Id:',
    'LBL_PROJECT_ID' => 'Projekto Id:',
    'LBL_DATE_ENTERED' => 'Sukūrimo data:',
    'LBL_DATE_MODIFIED' => 'Redagavimo data:',
    'LBL_ASSIGNED_USER_ID' => 'Priskirtas:',
    'LBL_MODIFIED_USER_ID' => 'Redaguotojo Id:',
    'LBL_CREATED_BY' => 'Sukūrė:',
    'LBL_NAME' => 'Vardas:',
    'LBL_STATUS' => 'Būsena:',
    'LBL_DATE_DUE' => 'Atlikimo data:',
    'LBL_TIME_DUE' => 'Atlikimo laikas:',
    'LBL_PREDECESSORS' => 'Pirmtakas',
    'LBL_DATE_START' => 'Pradžios laikas:',
    'LBL_DATE_FINISH' => 'Pabaigos data:',
    'LBL_TIME_START' => 'Pradžios laikas:',
    'LBL_TIME_FINISH' => 'Pabaigos laikas:',
    'LBL_DURATION' => 'Trukmė:',
    'LBL_DURATION_UNIT' => 'Trukmės vienetas:',
    'LBL_ACTUAL_DURATION' => 'Faktinė trukmė:',
    'LBL_PARENT_ID' => 'Projektas:',
    'LBL_PARENT_TASK_ID' => 'Pagrindinės užduoties Id:',
    'LBL_PERCENT_COMPLETE' => 'Užbaigta %:',
    'LBL_PRIORITY' => 'Svarba:',
    'LBL_DESCRIPTION' => 'Užrašai:',
    'LBL_ORDER_NUMBER' => 'Pozicija sąraše:',
    'LBL_TASK_NUMBER' => 'Užduoties Nr:',
    'LBL_TASK_ID' => 'Užduoties ID:',
    'LBL_MILESTONE_FLAG' => 'Esminis įvykis:',
    'LBL_ESTIMATED_EFFORT' => 'Prognozuotos pastangos (val):',
    'LBL_ACTUAL_EFFORT' => 'Faktinės pastangos (val):',
    'LBL_UTILIZATION' => 'Panaudojimas (%):',
    'LBL_DELETED' => 'Ištrintas:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Vardas',
    'LBL_LIST_PARENT_NAME' => 'Projektas',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => 'Užbaigta %',
    'LBL_LIST_STATUS' => 'Būsena',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Priskirtas',
    'LBL_LIST_DATE_DUE' => 'Užbaigimo data',
    'LBL_LIST_PRIORITY' => 'Svarba',
    'LBL_LIST_CLOSE' => 'Užbaigti',
    'LBL_PROJECT_NAME' => 'Projekto pavadinimas',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Sukurti projektą',
    'LNK_PROJECT_LIST' => 'Projektai',
    'LNK_NEW_PROJECT_TASK' => 'Sukurti projekto užduotį',
    'LNK_PROJECT_TASK_LIST' => 'Projekto užduotys',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Mano projektų užduotys',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekto užduotys',
    'LBL_NEW_FORM_TITLE' => 'Nauja projekto užduotis',

    'LBL_HISTORY_TITLE' => 'Istorija',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',

    'LBL_ASSIGNED_USER_NAME' => 'Priskirtas',
    'LBL_PARENT_NAME' => 'Projekto pavadinimas',
    'LBL_EDITLAYOUT' => 'Redaguoti išdėstymą' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Chronologija',

    'LBL_SUBTASK' => 'Sub- Užduotis',
    'LBL_LAG' => 'LAG',
    'LBL_DAYS' => 'Dienos',
    'LBL_HOURS' => 'Valanda',
    'LBL_RELATIONSHIP_TYPE' => 'Ryšio tipas',

    'LBL_ASCENDING' => 'Didėjimo tvarka',
    'LBL_DESCENDING' => 'Mažėjimo tvarka',
);
