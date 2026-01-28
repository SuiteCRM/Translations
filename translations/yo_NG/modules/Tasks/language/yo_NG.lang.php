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
    'LBL_MODULE_NAME' => 'Awon ise sise',
    'LBL_MODULE_TITLE' => ' Tasks: Home',
    'LBL_SEARCH_FORM_TITLE' => ' Ise wiwa',
    'LBL_LIST_FORM_TITLE' => ' Akojo ise',
    'LBL_NEW_FORM_TITLE' => ' Seda ise',
    'LBL_LIST_CLOSE' => 'Pade',
    'LBL_LIST_SUBJECT' => 'Koko-oro',
    'LBL_LIST_CONTACT' => 'Kontati',
    'LBL_LIST_PRIORITY' => 'Pataki julo',
    'LBL_LIST_RELATED_TO' => 'Ni ibatan si',
    'LBL_LIST_DUE_DATE' => 'Asiko to ba to',
    'LBL_LIST_DUE_TIME' => 'Akoko ti o ye',
    'LBL_SUBJECT' => 'Koko-oro:',
    'LBL_STATUS' => 'Ipo:',
    'LBL_DUE_DATE' => 'Igba ti o ye:',
    'LBL_DUE_TIME' => 'Akoko ti o ye:',
    'LBL_PRIORITY' => 'Pataki julo:',
    'LBL_DUE_DATE_AND_TIME' => 'Igba ati akoko ti o ye:',
    'LBL_START_DATE_AND_TIME' => 'Ojo ati ago ibeere:',
    'LBL_START_DATE' => 'Ojo ibeere:',
    'LBL_LIST_START_DATE' => 'Ojo ibeere',
    'LBL_START_TIME' => 'Asiko ibeere:',
    'DATE_FORMAT' => '(odun-osu-ojo)',
    'LBL_NONE' => 'Kosi',
    'LBL_CONTACT' => 'Kontati:',
    'LBL_EMAIL_ADDRESS' => 'Adiresi emaili:',
    'LBL_PHONE' => 'Foonu:',
    'LBL_EMAIL' => 'Adiresi emaili:',
    'LBL_DESCRIPTION' => 'Apejuwe:',
    'LBL_NAME' => 'Oruko:',
    'LBL_CONTACT_NAME' => 'Oruko kontati ',
    'LBL_LIST_STATUS' => 'Ipo',
    'LBL_DATE_DUE_FLAG' => 'No Due Date',
    'LBL_DATE_START_FLAG' => 'Kosi ojo ibeere',
    'LBL_LIST_MY_TASKS' => 'My Open Tasks',
    'LNK_NEW_TASK' => 'Seda Ise',
    'LNK_TASK_LIST' => 'Wo awon ise',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Onilo ti ayan',
    'LBL_ASSIGNED_TO_NAME' => 'Ayan si:',
    'LBL_LIST_DATE_MODIFIED' => 'Ojo ti a se Atunse',
    'LBL_CONTACT_ID' => 'Contact ID:',
    'LBL_PARENT_ID' => 'Ami idanimo obi:',
    'LBL_CONTACT_PHONE' => 'Contact Phone:',
    'LBL_PARENT_TYPE' => 'Iru obi:',
    'LBL_TASK_INFORMATION' => 'TASK OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Ṣatunkọ Aṣayan' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Akosile',
    //For export labels
    'LBL_DATE_DUE' => 'Date Due',
    'LBL_RELATED_TO' => 'Related to:',
);
