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
    'LBL_MODULE_NAME' => 'Feladatok',
    'LBL_MODULE_TITLE' => 'Feladatok: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Feladat keresése',
    'LBL_LIST_FORM_TITLE' => 'Feladat lista',
    'LBL_NEW_FORM_TITLE' => 'Új feladat lérehozása',
    'LBL_LIST_CLOSE' => 'Bezárás',
    'LBL_LIST_SUBJECT' => 'Tárgy',
    'LBL_LIST_CONTACT' => 'Kapcsolattartó',
    'LBL_LIST_PRIORITY' => 'Prioritás',
    'LBL_LIST_RELATED_TO' => 'Társítva',
    'LBL_LIST_DUE_DATE' => 'Határidő dátum',
    'LBL_LIST_DUE_TIME' => 'Esedékesség időpontja',
    'LBL_SUBJECT' => 'Tárgy:',
    'LBL_STATUS' => 'Állapot:',
    'LBL_DUE_DATE' => 'Határidő dátum:',
    'LBL_DUE_TIME' => 'Határidő időpont:',
    'LBL_PRIORITY' => 'Prioritás:',
    'LBL_DUE_DATE_AND_TIME' => 'Esedékesség dátuma és ideje:',
    'LBL_START_DATE_AND_TIME' => 'Kezdés időpont:',
    'LBL_START_DATE' => 'Kezdés dátum:',
    'LBL_LIST_START_DATE' => 'Kezdés dátum:',
    'LBL_START_TIME' => 'Kezdés idő:',
    'DATE_FORMAT' => '(éééé-hh-nn)',
    'LBL_NONE' => 'Semmi',
    'LBL_CONTACT' => 'Kapcsolat:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL' => 'Email:',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_NAME' => 'Név:',
    'LBL_CONTACT_NAME' => 'Kapcsolat neve:',
    'LBL_LIST_STATUS' => 'Állapot',
    'LBL_DATE_DUE_FLAG' => 'Nem esedékes dátum',
    'LBL_DATE_START_FLAG' => 'Nincs kezdő dátum',
    'LBL_LIST_MY_TASKS' => 'Nyitott feladataim',
    'LNK_NEW_TASK' => 'Feladat létrehozása',
    'LNK_TASK_LIST' => 'Feladatok',
    'LNK_IMPORT_TASKS' => 'Feladatok importálása',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_LIST_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_CONTACT_ID' => 'Kapcsolattartó ID:',
    'LBL_PARENT_ID' => 'Szülő Id:',
    'LBL_CONTACT_PHONE' => 'Kapcsolat telefon:',
    'LBL_PARENT_TYPE' => 'Szülő típus:',
    'LBL_TASK_INFORMATION' => 'Feladat áttekintése', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Jegyzetek',
    //For export labels
    'LBL_DATE_DUE' => 'Határidő',
    'LBL_RELATED_TO' => 'Összefüggésben:',
);
