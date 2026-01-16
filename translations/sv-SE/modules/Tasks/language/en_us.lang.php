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
    'LBL_MODULE_NAME' => 'Uppgifter',
    'LBL_MODULE_TITLE' => 'Uppgifter: Hem',
    'LBL_SEARCH_FORM_TITLE' => 'Sök uppgift',
    'LBL_LIST_FORM_TITLE' => 'Lista uppgifter',
    'LBL_NEW_FORM_TITLE' => 'Skapa uppgift',
    'LBL_LIST_CLOSE' => 'Stäng',
    'LBL_LIST_SUBJECT' => 'Ämne',
    'LBL_LIST_CONTACT' => 'Kontakter',
    'LBL_LIST_PRIORITY' => 'Prioritet',
    'LBL_LIST_RELATED_TO' => 'Relaterad till',
    'LBL_LIST_DUE_DATE' => 'Förfallodag',
    'LBL_LIST_DUE_TIME' => 'Genomförandetid',
    'LBL_SUBJECT' => 'Ämne:',
    'LBL_STATUS' => 'Status:',
    'LBL_DUE_DATE' => 'Förfallodatum:',
    'LBL_DUE_TIME' => 'Förfallotid:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_DUE_DATE_AND_TIME' => 'Genomförandedatum & tid:',
    'LBL_START_DATE_AND_TIME' => 'Startdatum & tid:',
    'LBL_START_DATE' => 'Startdatum:',
    'LBL_LIST_START_DATE' => 'Startdatum',
    'LBL_START_TIME' => 'Starttid:',
    'DATE_FORMAT' => '(åååå-mm-dd)',
    'LBL_DAYS_UNTIL_DUE_TASK' => 'This Task is Due in',
    'LBL_DAYS_OVERDUE' => 'This Task Is Overdue By ',
    'LBL_TASK_COMPLETED' => 'This Task is Completed',
    'LBL_NONE' => 'Ingen',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_EMAIL_ADDRESS' => 'E-postadress:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL' => 'E-postadress:',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_NAME' => 'Namn:',
    'LBL_CONTACT_NAME' => 'Kontaktnamn:',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_DATE_DUE_FLAG' => 'Inget genomförandedatum',
    'LBL_DATE_START_FLAG' => 'Inget startdatum',
    'LBL_LIST_MY_TASKS' => 'Mina öppna uppgifter',
    'LNK_NEW_TASK' => 'Skapa uppgift',
    'LNK_TASK_LIST' => 'Uppgifter',
    'LNK_IMPORT_TASKS' => 'Importera Uppgifter',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
    'LBL_LIST_DATE_MODIFIED' => 'Datum Ändrad',
    'LBL_CONTACT_ID' => 'Kontakt-ID:',
    'LBL_PARENT_ID' => 'Förälder-ID:',
    'LBL_CONTACT_PHONE' => 'Kontakt Telefon:',
    'LBL_PARENT_TYPE' => 'Föräldertyp:',
    'LBL_TASK_INFORMATION' => 'Uppgifter översikt', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Redigera layout' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Anteckningar:',
    //For export labels
    'LBL_DATE_DUE' => 'Förfallodatum',
    'LBL_RELATED_TO' => 'Relaterad till:',
);
