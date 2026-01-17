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
    'LBL_ASSIGNED_TO_ID' => 'Mag assign ug user Id',
    'LBL_ASSIGNED_TO_NAME' => 'Tigdumala sa Proyekto',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_MODIFIED' => 'Giusab Ni',
    'LBL_MODIFIED_NAME' => 'Giusab pinaagi sa Pangan',
    'LBL_CREATED' => 'Gihimo ni',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_NAME' => 'Pangan sa template',
    'LBL_CREATED_USER' => 'Gihimo ni User',
    'LBL_MODIFIED_USER' => 'Giusab ni User',
    'LBL_LIST_NAME' => 'Pangalan',
    'LBL_EDIT_BUTTON' => 'Usba',
    'LBL_REMOVE' => 'Tangtangon',
    'LBL_LIST_FORM_TITLE' => 'Listahan sa mga template sa proyekto',
    'LBL_MODULE_NAME' => 'Mga template sa proyekto',
    'LBL_MODULE_TITLE' => 'Mga template sa proyekto',
    'LBL_HOMEPAGE_TITLE' => 'Akong mga template sa proyekto',
    'LNK_NEW_RECORD' => 'Maghimo og mga template sa proyekto',
    'LNK_LIST' => 'Motan-aw og mga template sa proyekto',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Import og mga project template',
    'LBL_SEARCH_FORM_TITLE' => 'Mangita og mga project template',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tan-awon ang Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_NEW_FORM_TITLE' => 'Bag-ong mga project template',
    'LBL_STATUS' => 'Stado',
    'LBL_PRIORITY' => 'Prayoridad',
    'LBL_PROJECT_NAME' => 'Pangan sa project',
    'LBL_START_DATE' => 'Petsa nga Nagsugod',
    'LBL_CREATE_PROJECT_TITLE' => 'Maghimo og bag-ong project gikan ani nga template?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Mga Template sa Buluhaton',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Tig gamit',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Kontak',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Pili og Resources',
    'LBL_NEW_PROJECT_CREATED' => 'Bag-ong project ang nabuhat',
    'LBL_NEW_PROJECT' => 'Paghimo og Proyekto',
    'LBL_CANCEL_PROJECT' => 'Kanselahon',

    'LBL_SUBTASK' => 'Sugoun',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_RELATIONSHIP_TYPE' => 'Klase sa Relasyon',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Mga Adlaw',
    'LBL_HOURS' => 'Oras',
    'LBL_MONTHS' => 'Buwan',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Dunay Buhaton',
    'LBL_VIEW_GANTT_TITLE' => 'Tan-awa ang Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Kanus-a taman',
    'LBL_TASK_TITLE' => 'Usba ang Buluhaton',
    'LBL_DURATION_TITLE' => 'Usba ang kadugayon',
    'LBL_DESCRIPTION' => 'Tima-ilhan',
    'LBL_ASSIGNED_USER_ID' => 'Gi-assign sa:',

    'LBL_LIST_ASSIGNED_USER' => 'Tigdumala sa Proyekto',
    'LBL_UNASSIGNED' => 'Walay gi-assign',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',
    'LBL_DELETE_TASK' => 'Wagtangon ang Buluhaton',
    'LBL_VIEW_DETAIL' => 'Tan-aw sa mga Detalye',
    'LBL_ADD_NEW_TASK' => 'Pagdugang og Bag-ong Buluhaton',
    'LBL_ASSIGNED_USER_NAME' => 'Tigdumala sa Proyekto:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Gesugo na pangalan',
    'LBL_DURATION' => 'Kanus-a taman',
    'LBL_ACTUAL_DURATION' => 'Aktwal nga gidugayon',
    'LBL_START' => 'Pag sugod',
    'LBL_FINISH' => 'Paghuman',
    'LBL_PREDECESSORS' => 'Predecessors',
    'LBL_PERCENT_COMPLETE' => '% Kumpleto',
    'LBL_EDIT_TASK_PROPERTIES' => 'Usbon ang properties sa buluhaton.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Hunahunaa ang mga adlaw nga adunay trabaho',
    'LBL_COPY_ALL_TASKS' => 'Kopyaha tanang mga buluhaton apil ang Resources',
    'LBL_COPY_SEL_TASKS' => 'Kopyaha ang gipili nga mga buluhaton apil ang Resources',
    'LBL_TOOLTIP_TITLE' => 'Timaan',
    'LBL_TOOLTIP_TEXT' => 'Kopyahon tanang buluhaton apil ang naka-assign nga mga user',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Telepono sa Opisina:',
    'LBL_ADD_BUTTON' => 'Dungagi',
    'LBL_ADD_INVITEE' => 'Dungagi og Resource',
    'LBL_FIRST_NAME' => 'Pinakaunang Pangalan',
    'LBL_LAST_NAME' => 'Katapusang Pangalan',
    'LBL_SEARCH_BUTTON' => 'Pangitaa',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sori, walay resulta nga nakit an. Palihug og buhat sa invitee sa ubos.',
    'LBL_CREATE_INVITEE' => 'Paghimo og Resource',
    'LBL_CREATE_CONTACT' => 'Kontak',
    'LBL_CREATE_AND_ADD' => 'Buhat & Apil',
    'LBL_CANCEL_CREATE_INVITEE' => 'Kanselahon',
    'LBL_NO_ACCESS' => 'Wala kay access sa pag buhat$module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Listahan sa Resource',
    'LBL_NONE' => 'Wala',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Mga Template sa Proyekto: Proyekto gikan sa titulo sa Proyekto',


);
