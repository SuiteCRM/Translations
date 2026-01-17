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
    'LBL_ASSIGNED_TO_ID' => 'Պատասխանատու- ID',
    'LBL_ASSIGNED_TO_NAME' => 'Նախագծի մենեջեր',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ստեղծման ամսաթիվ',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_MODIFIED' => 'Փոփոխված է',
    'LBL_MODIFIED_NAME' => 'Փոփոխված է ըստ անվանման',
    'LBL_CREATED' => 'Ստեղծված է',
    'LBL_DELETED' => 'Ջնջված է',
    'LBL_NAME' => 'Ձևանմուշի անվանումը',
    'LBL_CREATED_USER' => 'Փոփոխված է օգտագործողի կողմից ',
    'LBL_MODIFIED_USER' => 'Փոփոխված է օգտագործողի կողմից',
    'LBL_LIST_NAME' => 'Անվանում',
    'LBL_EDIT_BUTTON' => 'Խմբագրել',
    'LBL_REMOVE' => 'Հեռացնել',
    'LBL_LIST_FORM_TITLE' => 'Նախագծի ձևանմուշներ',
    'LBL_MODULE_NAME' => 'Նախագծի ձևանմուշներ',
    'LBL_MODULE_TITLE' => 'Նախագծի ձևանմուշներ',
    'LBL_HOMEPAGE_TITLE' => 'Իմ նախագծի ձևանմուշներ',
    'LNK_NEW_RECORD' => 'Ստեղծել նախագծի ձևանմուշներ',
    'LNK_LIST' => 'Դիտել նախագծի ձևանմուշները',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Ներմուծել նախագծի ձևանմուշները',
    'LBL_SEARCH_FORM_TITLE' => 'Որոնել նախագծի ձևանմուշները',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Դիտել պատմությունը',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_NEW_FORM_TITLE' => 'Նոր նախագծի ձևանմուշներ',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_PRIORITY' => 'Առաջնահերթություն',
    'LBL_PROJECT_NAME' => 'Նախագծի անվանումը',
    'LBL_START_DATE' => 'Մեկնարկի ամսաթիվը',
    'LBL_CREATE_PROJECT_TITLE' => 'Ստեղծե՞լ նոր նախագիծ այս ձևանմուշից։',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Խնդրի ձևանմուշներ',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Օգտվողներ',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Կոնտակտներ',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Select Resources',
    'LBL_NEW_PROJECT_CREATED' => 'New Project Created',
    'LBL_NEW_PROJECT' => 'Ստեղծել նախագիծ',
    'LBL_CANCEL_PROJECT' => 'Չեղարկել',

    'LBL_SUBTASK' => 'Առաջադրանք',
    'LBL_MILESTONE_FLAG' => 'Ստուգակետ',
    'LBL_RELATIONSHIP_TYPE' => 'Հարաբերության տեսակը',
    'LBL_LAG' => 'Հապաղում',
    'LBL_DAYS' => 'Օր',
    'LBL_HOURS' => 'Ժամ',
    'LBL_MONTHS' => 'Ամիս',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Նախագծի խնդիրներ',
    'LBL_VIEW_GANTT_TITLE' => 'Դիտել Գանտի գրաֆիկը',
    'LBL_VIEW_GANTT_DURATION' => 'Տևողություն',
    'LBL_TASK_TITLE' => 'Խմբագրել խնդիրը',
    'LBL_DURATION_TITLE' => 'Փոխել տևողությունը',
    'LBL_DESCRIPTION' => 'Նշումներ',
    'LBL_ASSIGNED_USER_ID' => 'Կատարող',

    'LBL_LIST_ASSIGNED_USER' => 'Նախագծի մենեջեր',
    'LBL_UNASSIGNED' => 'Կատարող չէ',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ռեսուրսներ',
    'LBL_DELETE_TASK' => 'Հեռացնել առաջադրանքը',
    'LBL_VIEW_DETAIL' => 'Մանրամասների դիտում',
    'LBL_ADD_NEW_TASK' => 'Ավելացնել նոր առաջադրանք',
    'LBL_ASSIGNED_USER_NAME' => 'Նախագծի մենեջեր.',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Անվանում',
    'LBL_DURATION' => 'Տևողություն',
    'LBL_ACTUAL_DURATION' => 'Փաստացի տևողություն',
    'LBL_START' => 'Մեկնարկ',
    'LBL_FINISH' => 'Վերջ',
    'LBL_PREDECESSORS' => 'Նախորդները',
    'LBL_PERCENT_COMPLETE' => '% Ավարտված',
    'LBL_EDIT_TASK_PROPERTIES' => 'Խմբագրել խնդրի հատկությունները',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',
    'LBL_COPY_ALL_TASKS' => 'Copy All Tasks With Resources',
    'LBL_COPY_SEL_TASKS' => 'Copy Selected Tasks With Resources',
    'LBL_TOOLTIP_TITLE' => 'Hint',
    'LBL_TOOLTIP_TEXT' => 'Copies All tasks with assigned users',

    'LBL_EMAIL' => 'Էլ-փոստ',
    'LBL_PHONE' => 'Հեռախոս:',
    'LBL_ADD_BUTTON' => 'Ավելացնել',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'Անուն',
    'LBL_LAST_NAME' => 'Ազգանուն',
    'LBL_SEARCH_BUTTON' => 'Որոնում',
    'LBL_EMPTY_SEARCH_RESULT' => 'Ներեցեք, չկան արդյունքներ: Խնդրում ենք ստեղծել հրավիրյալին ստորև։',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'Որպես կոնտակտ',
    'LBL_CREATE_AND_ADD' => 'Ստեղծել և ավելացնել',
    'LBL_CANCEL_CREATE_INVITEE' => 'Չեղարկել',
    'LBL_NO_ACCESS' => 'Դուք ոչ մի մուտքի իրավունք չունեք $module-ում գրառում ստեղծելու համար',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_NONE' => 'Ոչ ոք',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',


);
