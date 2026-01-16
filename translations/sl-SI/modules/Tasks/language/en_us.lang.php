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
    'LBL_MODULE_NAME' => 'Naloge',
    'LBL_MODULE_TITLE' => 'Naloge: Domov',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje po nalogah',
    'LBL_LIST_FORM_TITLE' => 'Seznam nalog',
    'LBL_NEW_FORM_TITLE' => 'Ustvari nalogo',
    'LBL_LIST_CLOSE' => 'Zapri',
    'LBL_LIST_SUBJECT' => 'Zadeva',
    'LBL_LIST_CONTACT' => 'Kontakti',
    'LBL_LIST_PRIORITY' => 'Prioriteta',
    'LBL_LIST_RELATED_TO' => 'Povezano z',
    'LBL_LIST_DUE_DATE' => 'Datum zapadlosti',
    'LBL_LIST_DUE_TIME' => 'Čas zapadlosti',
    'LBL_SUBJECT' => 'Zadeva:',
    'LBL_STATUS' => 'Stanje:',
    'LBL_DUE_DATE' => 'Datum zaključka:',
    'LBL_DUE_TIME' => 'Čas zaključka:',
    'LBL_PRIORITY' => 'Prioreta:',
    'LBL_DUE_DATE_AND_TIME' => 'Datum in čas zapadlosti:',
    'LBL_START_DATE_AND_TIME' => 'Datum in čas začetka:',
    'LBL_START_DATE' => 'Datum začetka:',
    'LBL_LIST_START_DATE' => 'Datum začetka',
    'LBL_START_TIME' => 'Čas začetka:',
    'DATE_FORMAT' => '(llll-mm-dd)',
    'LBL_DAYS_UNTIL_DUE_TASK' => 'This Task is Due in',
    'LBL_DAYS_OVERDUE' => 'This Task Is Overdue By ',
    'LBL_TASK_COMPLETED' => 'This Task is Completed',
    'LBL_NONE' => 'Brez',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_EMAIL_ADDRESS' => 'E-pošta:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL' => 'E-pošta:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_NAME' => 'Ime:',
    'LBL_CONTACT_NAME' => 'Ime kontakta ',
    'LBL_LIST_STATUS' => 'Stanje',
    'LBL_DATE_DUE_FLAG' => 'Ni datuma zapadlosti',
    'LBL_DATE_START_FLAG' => 'Ni datuma začetka',
    'LBL_LIST_MY_TASKS' => 'Moje odprte Naloge',
    'LNK_NEW_TASK' => 'Ustvari nalogo',
    'LNK_TASK_LIST' => 'Naloge',
    'LNK_IMPORT_TASKS' => 'Uvozi naloge',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljen uporabnik',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_LIST_DATE_MODIFIED' => 'Datum spremembe',
    'LBL_CONTACT_ID' => 'ID Kontakta:',
    'LBL_PARENT_ID' => 'Nadrejeni ID:',
    'LBL_CONTACT_PHONE' => 'Telefon kontakta:',
    'LBL_PARENT_TYPE' => 'Nadrejeni tip:',
    'LBL_TASK_INFORMATION' => 'Pregled naloge', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Beležke',
    //For export labels
    'LBL_DATE_DUE' => 'Datum zaključka',
    'LBL_RELATED_TO' => 'Related to:',
);
