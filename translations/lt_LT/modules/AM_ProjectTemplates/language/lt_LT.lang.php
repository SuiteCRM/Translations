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
    'LBL_ASSIGNED_TO_ID' => 'Atsakingo Vartotojo Id',
    'LBL_ASSIGNED_TO_NAME' => 'Projektų Vadovas',
    'LBL_ID' => 'Id',
    'LBL_DATE_ENTERED' => 'Sukurta',
    'LBL_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_MODIFIED' => 'Redagavo',
    'LBL_MODIFIED_NAME' => 'Redaguotojo vardas',
    'LBL_CREATED' => 'Sukūrė',
    'LBL_DELETED' => 'Ištrintas',
    'LBL_NAME' => 'Šablono pavadinimas',
    'LBL_CREATED_USER' => 'Sukūrė vartotojas',
    'LBL_MODIFIED_USER' => 'Redagavo vartotojas',
    'LBL_LIST_NAME' => 'Vardas',
    'LBL_EDIT_BUTTON' => 'Redaguoti',
    'LBL_REMOVE' => 'Išmesti',
    'LBL_LIST_FORM_TITLE' => 'Projekto Šablonų sąrašas',
    'LBL_MODULE_NAME' => 'Projekto šablonai',
    'LBL_MODULE_TITLE' => 'Projekto šablonai',
    'LBL_HOMEPAGE_TITLE' => 'Mano Projektų Šablonai',
    'LNK_NEW_RECORD' => 'Sukurti Projektų Šabloną',
    'LNK_LIST' => 'Rodyti Projektų Šablonus',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importuoti Projektų Šablonus',
    'LBL_SEARCH_FORM_TITLE' => 'Paieška Projektų Šablonuose',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Peržiūros istorija',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_NEW_FORM_TITLE' => 'Naujas Projektas Šablonas',
    'LBL_STATUS' => 'Būsena',
    'LBL_PRIORITY' => 'Svarba',
    'LBL_PROJECT_NAME' => 'Projekto pavadinimas',
    'LBL_START_DATE' => 'Pražios data',
    'LBL_CREATE_PROJECT_TITLE' => 'Sukurti Nauja Projekta pagal šį šablona?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Užduoties šablonai',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Vartotojas',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Kontaktas',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Pasirinkti Resursą',
    'LBL_NEW_PROJECT_CREATED' => 'Naujas projektas sukurtas',
    'LBL_NEW_PROJECT' => 'Sukurti projektą',
    'LBL_CANCEL_PROJECT' => 'Atšaukti',

    'LBL_SUBTASK' => 'Užduotis',
    'LBL_MILESTONE_FLAG' => 'Etapas',
    'LBL_RELATIONSHIP_TYPE' => 'Ryšio Tipas',
    'LBL_LAG' => 'LAG',
    'LBL_DAYS' => 'Dienos',
    'LBL_HOURS' => 'Valanda',
    'LBL_MONTHS' => 'Mėnesiai',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projekto užduotys',
    'LBL_VIEW_GANTT_TITLE' => 'Peržiūrėti Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Trukmė',
    'LBL_TASK_TITLE' => 'Redaguoti Užduotį',
    'LBL_DURATION_TITLE' => 'Redaguoti Trukmė',
    'LBL_DESCRIPTION' => 'Užrašai',
    'LBL_ASSIGNED_USER_ID' => 'Priskirtas:',

    'LBL_LIST_ASSIGNED_USER' => 'Projektų Vadovas',
    'LBL_UNASSIGNED' => 'Nepriskirta',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ištekliai',
    'LBL_DELETE_TASK' => 'Naikinti Užduotį',
    'LBL_VIEW_DETAIL' => 'Rodyti detaliau',
    'LBL_ADD_NEW_TASK' => 'Pridėti Naują Užduotį',
    'LBL_ASSIGNED_USER_NAME' => 'Projekto Vadovas:',

    'LBL_TASK_ID' => 'Id',
    'LBL_TASK_NAME' => 'Užduoties pavadinimas',
    'LBL_DURATION' => 'Trukmė',
    'LBL_ACTUAL_DURATION' => 'Faktinė trukmė',
    'LBL_START' => 'Pradėti',
    'LBL_FINISH' => 'Pabaiga',
    'LBL_PREDECESSORS' => 'Pirmtakas',
    'LBL_PERCENT_COMPLETE' => 'Užbaigta %',
    'LBL_EDIT_TASK_PROPERTIES' => 'Redaguoti užduoties ypatybes.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Svarstyti Darbo dienas',
    'LBL_COPY_ALL_TASKS' => 'Kopijuoti Visas Užduotis Su Resursais',
    'LBL_COPY_SEL_TASKS' => 'Kopijuoti Pasirinktas Užduotis Su Resursais',
    'LBL_TOOLTIP_TITLE' => 'Užuomina',
    'LBL_TOOLTIP_TEXT' => 'Kopijuoja visas užduotis su priskirtais vartotojais',

    'LBL_EMAIL' => 'el.paštas',
    'LBL_PHONE' => 'Darbovietės telefonas:',
    'LBL_ADD_BUTTON' => 'Įdėti',
    'LBL_ADD_INVITEE' => 'Įkelti Resursą',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Pavardė',
    'LBL_SEARCH_BUTTON' => 'Paieška',
    'LBL_EMPTY_SEARCH_RESULT' => 'Deja, nebuvo rasta. Sukurkite pakvietima žemiau.',
    'LBL_CREATE_INVITEE' => 'Sukurti Resursą',
    'LBL_CREATE_CONTACT' => 'Kaip Kontaktas',
    'LBL_CREATE_AND_ADD' => 'Sukurti & Pridėti',
    'LBL_CANCEL_CREATE_INVITEE' => 'Atšaukti',
    'LBL_NO_ACCESS' => 'Jūs neturite prieigos sukurti $modulį',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resursų Sąrašas',
    'LBL_NONE' => 'Nėra',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',


);
