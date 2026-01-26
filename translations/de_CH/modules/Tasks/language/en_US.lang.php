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
    'LBL_MODULE_NAME' => 'Aufgaben',
    'LBL_MODULE_TITLE' => ' Aufgaben: Startseite',
    'LBL_SEARCH_FORM_TITLE' => 'Aufgaben suchen',
    'LBL_LIST_FORM_TITLE' => 'Aufgabenliste',
    'LBL_NEW_FORM_TITLE' => ' Aufgabe erstellen',
    'LBL_LIST_CLOSE' => 'Schliessen',
    'LBL_LIST_SUBJECT' => 'Betreff',
    'LBL_LIST_CONTACT' => 'Kontakte',
    'LBL_LIST_PRIORITY' => 'Priorität',
    'LBL_LIST_RELATED_TO' => 'Gehört zu:',
    'LBL_LIST_DUE_DATE' => 'Fälligkeitsdatum',
    'LBL_LIST_DUE_TIME' => 'Fällig um',
    'LBL_SUBJECT' => 'Betreff:',
    'LBL_STATUS' => 'Status',
    'LBL_DUE_DATE' => 'Fällig am:',
    'LBL_DUE_TIME' => 'Fällig um:',
    'LBL_PRIORITY' => 'Priorität:',
    'LBL_DUE_DATE_AND_TIME' => 'Erledigen bis:',
    'LBL_START_DATE_AND_TIME' => 'Startdatum und -zeit:',
    'LBL_START_DATE' => 'Startdatum:',
    'LBL_LIST_START_DATE' => 'Startdatum',
    'LBL_START_TIME' => 'Beginn:',
    'DATE_FORMAT' => '(jjjj-mm-tt)',
    'LBL_NONE' => 'Kein(e)',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_EMAIL_ADDRESS' => 'E-Mail Adresse:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL' => 'E-Mail Adresse:',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_NAME' => 'Name:',
    'LBL_CONTACT_NAME' => 'Kontaktname',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_DATE_DUE_FLAG' => 'Kein Fälligkeitsdatum',
    'LBL_DATE_START_FLAG' => 'Kein Startdatum',
    'LBL_LIST_MY_TASKS' => 'Meine offenen Aufgaben',
    'LNK_NEW_TASK' => 'Aufgabe erstellen',
    'LNK_TASK_LIST' => 'Aufgaben',
    'LNK_IMPORT_TASKS' => 'Aufgaben importieren',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugewiesener Benutzer',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an:',
    'LBL_LIST_DATE_MODIFIED' => 'Letzte Änderung',
    'LBL_CONTACT_ID' => 'Kontakt ID:',
    'LBL_PARENT_ID' => 'Eltern ID:',
    'LBL_CONTACT_PHONE' => 'Telefon Kontaktperson:',
    'LBL_PARENT_TYPE' => 'Übergeordneter Typ:',
    'LBL_TASK_INFORMATION' => 'Überblick', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notizen',
    //For export labels
    'LBL_DATE_DUE' => 'Datum fällig',
    'LBL_RELATED_TO' => 'Gehört zu',
);
