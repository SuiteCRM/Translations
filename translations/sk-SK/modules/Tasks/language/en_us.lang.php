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
    'LBL_MODULE_NAME' => 'Úlohy',
    'LBL_MODULE_TITLE' => 'Úlohy: Domov',
    'LBL_SEARCH_FORM_TITLE' => ' Vyhľadať úlohu',
    'LBL_LIST_FORM_TITLE' => 'Zoznam úloh',
    'LBL_NEW_FORM_TITLE' => 'Vytvoriť plohu',
    'LBL_LIST_CLOSE' => 'Uzavrieť',
    'LBL_LIST_SUBJECT' => 'Predmet',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_PRIORITY' => 'Priorita',
    'LBL_LIST_RELATED_TO' => 'Súvisiaci k',
    'LBL_LIST_DUE_DATE' => 'do dátumu',
    'LBL_LIST_DUE_TIME' => 'do času',
    'LBL_SUBJECT' => 'Predmet:',
    'LBL_STATUS' => 'Stav:',
    'LBL_DUE_DATE' => 'do dátumu',
    'LBL_DUE_TIME' => 'do času',
    'LBL_PRIORITY' => 'Priorita:',
    'LBL_DUE_DATE_AND_TIME' => 'do dátumu a času',
    'LBL_START_DATE_AND_TIME' => 'Dátum a čas zahájenia:',
    'LBL_START_DATE' => 'Dátum začiatku:',
    'LBL_LIST_START_DATE' => 'Dátum začiatku:',
    'LBL_START_TIME' => 'Čas začiatku:',
    'DATE_FORMAT' => '(yyyy-mm-dd)',
    'LBL_DAYS_UNTIL_DUE_TASK' => 'This Task is Due in',
    'LBL_DAYS_OVERDUE' => 'This Task Is Overdue By ',
    'LBL_TASK_COMPLETED' => 'This Task is Completed',
    'LBL_NONE' => 'Nič',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_EMAIL_ADDRESS' => 'E-mailová adresa:',
    'LBL_PHONE' => 'Telefón:',
    'LBL_EMAIL' => 'E-mailová adresa:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_NAME' => 'Meno:',
    'LBL_CONTACT_NAME' => 'Meno kontaktu:',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_DATE_DUE_FLAG' => 'nie do dátumu',
    'LBL_DATE_START_FLAG' => 'nie do času',
    'LBL_LIST_MY_TASKS' => 'Moje otvorené úlohy',
    'LNK_NEW_TASK' => 'Vytvoriť úlohu',
    'LNK_TASK_LIST' => 'Zobrazenie úloh',
    'LNK_IMPORT_TASKS' => 'Import úloh',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Priradený používateľ',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku:',
    'LBL_LIST_DATE_MODIFIED' => 'Dátum úpravy',
    'LBL_CONTACT_ID' => 'Číslo kontaktu:',
    'LBL_PARENT_ID' => 'Číslo rodiča:',
    'LBL_CONTACT_PHONE' => 'číslo kontaktu',
    'LBL_PARENT_TYPE' => 'Materská kategória:',
    'LBL_TASK_INFORMATION' => 'Prehľad', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Upraviť rozloženie' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Poznámky',
    //For export labels
    'LBL_DATE_DUE' => 'Priamy dátum',
    'LBL_RELATED_TO' => 'Vzťahuje sa na:',
);
