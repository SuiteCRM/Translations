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
    'LBL_MODULE_NAME' => 'Tasks',
    'LBL_MODULE_TITLE' => 'Užduotys: Pradžia',
    'LBL_SEARCH_FORM_TITLE' => 'Užduoties paieška',
    'LBL_LIST_FORM_TITLE' => 'Užduočių sąrašas',
    'LBL_NEW_FORM_TITLE' => 'Sukurti užduotį',
    'LBL_LIST_CLOSE' => 'Užbaigti',
    'LBL_LIST_SUBJECT' => 'Tema:',
    'LBL_LIST_CONTACT' => 'Adresatas',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_RELATED_TO' => 'Susijęs su',
    'LBL_LIST_DUE_DATE' => 'Atlikimo data',
    'LBL_LIST_DUE_TIME' => 'Atlikimo laikas',
    'LBL_SUBJECT' => 'Užrašo tema:',
    'LBL_STATUS' => 'Būsena:',
    'LBL_DUE_DATE' => 'Atlikimo data:',
    'LBL_DUE_TIME' => 'Atlikimo laikas:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_DUE_DATE_AND_TIME' => 'Atlikimo data ir laikas:',
    'LBL_START_DATE_AND_TIME' => 'Start Date & Time:',
    'LBL_START_DATE' => 'Pradžios laikas:',
    'LBL_LIST_START_DATE' => 'Pražios data',
    'LBL_START_TIME' => 'Start Time:',
    'DATE_FORMAT' => '(yyyy-mm-dd)',
    'LBL_DAYS_UNTIL_DUE_TASK' => 'This Task is Due in',
    'LBL_DAYS_OVERDUE' => 'This Task Is Overdue By ',
    'LBL_TASK_COMPLETED' => 'This Task is Completed',
    'LBL_NONE' => 'Nėra',
    'LBL_CONTACT' => 'Kontaktai:',
    'LBL_EMAIL_ADDRESS' => 'El. paštas:',
    'LBL_PHONE' => 'Telefonas',
    'LBL_EMAIL' => 'El.paštas:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_NAME' => 'Vardas:',
    'LBL_CONTACT_NAME' => 'Kontakto vardas:',
    'LBL_LIST_STATUS' => 'Statusas:',
    'LBL_DATE_DUE_FLAG' => 'Nėra atlikimo datos',
    'LBL_DATE_START_FLAG' => 'Nėra atlikimo laiko',
    'LBL_LIST_MY_TASKS' => 'Mano užduotys',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_TASK_LIST' => 'View Tasks',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atsakingas',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas:',
    'LBL_LIST_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_CONTACT_ID' => 'Contact ID:',
    'LBL_PARENT_ID' => 'Parent ID:',
    'LBL_CONTACT_PHONE' => 'Kontakto telefonas:',
    'LBL_PARENT_TYPE' => 'Tėvo tipas:',
    'LBL_TASK_INFORMATION' => 'Užduoties informacija', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Redaguoti išdėstymą' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    //For export labels
    'LBL_DATE_DUE' => 'Date Due',
    'LBL_RELATED_TO' => 'Related to:',
);
