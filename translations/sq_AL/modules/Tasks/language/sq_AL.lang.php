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
    'LBL_MODULE_NAME' => 'Detyrat',
    'LBL_MODULE_TITLE' => 'Detyrat: Ballina',
    'LBL_SEARCH_FORM_TITLE' => 'Kërkimi i detyrave',
    'LBL_LIST_FORM_TITLE' => 'Lista e detyrave',
    'LBL_NEW_FORM_TITLE' => 'Krijo detyrë',
    'LBL_LIST_CLOSE' => 'Mbyll:',
    'LBL_LIST_SUBJECT' => 'Subjekti',
    'LBL_LIST_CONTACT' => 'Kontaktet',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_RELATED_TO' => 'Në lidhje me',
    'LBL_LIST_DUE_DATE' => 'Due Date',
    'LBL_LIST_DUE_TIME' => 'Ora e caktuar',
    'LBL_SUBJECT' => 'Subjekti',
    'LBL_STATUS' => 'statusi',
    'LBL_DUE_DATE' => 'Due Date:',
    'LBL_DUE_TIME' => 'Due Time:',
    'LBL_PRIORITY' => 'priorieti',
    'LBL_DUE_DATE_AND_TIME' => 'Data dhe ora e caktuar',
    'LBL_START_DATE_AND_TIME' => 'Data dhe ora e nisjes',
    'LBL_START_DATE' => 'Data e nisjes',
    'LBL_LIST_START_DATE' => 'Start Date',
    'LBL_START_TIME' => 'Ora e nisjes',
    'DATE_FORMAT' => '(vvvvv-mm-dd)',
    'LBL_NONE' => 'Asnjëra',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_PHONE' => 'Telefoni',
    'LBL_EMAIL' => 'Email adresa',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_NAME' => 'Emri',
    'LBL_CONTACT_NAME' => 'Emri i kontaktit',
    'LBL_LIST_STATUS' => 'Statusi',
    'LBL_DATE_DUE_FLAG' => 'Nuk ka datë të caktuar',
    'LBL_DATE_START_FLAG' => 'Nuk ka datë të nisjes',
    'LBL_LIST_MY_TASKS' => 'Detyrat e mia të hapura',
    'LNK_NEW_TASK' => 'Krijo detyrë',
    'LNK_TASK_LIST' => 'Shiko detyrat',
    'LNK_IMPORT_TASKS' => 'Detyra të rëndësishme',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Përdorues i caktuar',
    'LBL_ASSIGNED_TO_NAME' => 'drejtuar',
    'LBL_LIST_DATE_MODIFIED' => 'Të dhënat e modifikuara',
    'LBL_CONTACT_ID' => 'ID e Kontaktit',
    'LBL_PARENT_ID' => 'ID mëmë',
    'LBL_CONTACT_PHONE' => 'telekoni për kontakt',
    'LBL_PARENT_TYPE' => 'Kategoria mëmë',
    'LBL_TASK_INFORMATION' => 'Pasqyra', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Ndrysho formatin' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Shënimet',
    //For export labels
    'LBL_DATE_DUE' => 'Date Due',
    'LBL_RELATED_TO' => 'Në lidhje me:',
);
