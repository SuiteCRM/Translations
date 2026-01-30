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
    'LBL_MODULE_NAME' => 'Uzdevumi',
    'LBL_MODULE_TITLE' => 'Uzdevumi: Sākums',
    'LBL_SEARCH_FORM_TITLE' => 'Meklēt uzdevumus',
    'LBL_LIST_FORM_TITLE' => 'Uzdevumu saraksts',
    'LBL_NEW_FORM_TITLE' => 'Izveidot uzdevumu',
    'LBL_LIST_CLOSE' => 'Slēgt',
    'LBL_LIST_SUBJECT' => 'Temats',
    'LBL_LIST_CONTACT' => 'Kontaktpersonas',
    'LBL_LIST_PRIORITY' => 'Prioritāte',
    'LBL_LIST_RELATED_TO' => 'Attiecas uz',
    'LBL_LIST_DUE_DATE' => 'Izpildes datums',
    'LBL_LIST_DUE_TIME' => 'Izpildes laiks',
    'LBL_SUBJECT' => 'Temats:',
    'LBL_STATUS' => 'Statuss:',
    'LBL_DUE_DATE' => 'Izpildes datums:',
    'LBL_DUE_TIME' => 'Izpildes laiks:',
    'LBL_PRIORITY' => 'Prioritāte:',
    'LBL_DUE_DATE_AND_TIME' => 'Beigu datums un laiks:',
    'LBL_START_DATE_AND_TIME' => 'Sākuma datums un laiks:',
    'LBL_START_DATE' => 'Sākuma datums:',
    'LBL_LIST_START_DATE' => 'Sākuma datums:',
    'LBL_START_TIME' => 'Sākuma laiks:',
    'DATE_FORMAT' => '(gggg-mm-dd)',
    'LBL_NONE' => 'Nav',
    'LBL_CONTACT' => 'Kontakts:',
    'LBL_EMAIL_ADDRESS' => 'E-pasts:',
    'LBL_PHONE' => 'Tālrunis:',
    'LBL_EMAIL' => 'E-pasts:',
    'LBL_DESCRIPTION' => 'Apraksts:',
    'LBL_NAME' => 'Vārds:',
    'LBL_CONTACT_NAME' => 'Kontaktpersonas vārds',
    'LBL_LIST_STATUS' => 'Statuss',
    'LBL_DATE_DUE_FLAG' => 'Nav izpildes datuma',
    'LBL_DATE_START_FLAG' => 'Nav sākuma datuma',
    'LBL_LIST_MY_TASKS' => 'Mani atvērtie uzdevumi',
    'LNK_NEW_TASK' => 'Izveidot uzdevumu [Alt+N]',
    'LNK_TASK_LIST' => 'Aplūkot uzdevumus',
    'LNK_IMPORT_TASKS' => 'Importēt uzdevumus',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam:',
    'LBL_LIST_DATE_MODIFIED' => 'Modificēts',
    'LBL_CONTACT_ID' => 'Kontaktpersonas ID:',
    'LBL_PARENT_ID' => 'Priekšteča ID:',
    'LBL_CONTACT_PHONE' => 'Kontaktpersonas tālrunis:',
    'LBL_PARENT_TYPE' => 'Priekšteča tips:',
    'LBL_TASK_INFORMATION' => 'Pārskats', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Rediģēt izkārtojumu' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Piezīmes',
    //For export labels
    'LBL_DATE_DUE' => 'Izpildes datums',
    'LBL_RELATED_TO' => 'Saistīts ar:',
);
