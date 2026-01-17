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
    'LBL_MODULE_NAME' => 'Oppgaver',
    'LBL_MODULE_TITLE' => ' Oppgaver : Forside',
    'LBL_SEARCH_FORM_TITLE' => ' Søk etter oppgave',
    'LBL_LIST_FORM_TITLE' => ' Oppgaveliste',
    'LBL_NEW_FORM_TITLE' => ' Ny oppgave',
    'LBL_LIST_CLOSE' => 'Avslutt',
    'LBL_LIST_SUBJECT' => 'Emne',
    'LBL_LIST_CONTACT' => 'Kontakter',
    'LBL_LIST_PRIORITY' => 'Prioritet',
    'LBL_LIST_RELATED_TO' => 'Knyttet til',
    'LBL_LIST_DUE_DATE' => 'Frist',
    'LBL_LIST_DUE_TIME' => 'Frist klokkeslett',
    'LBL_SUBJECT' => 'Emne:',
    'LBL_STATUS' => 'Status',
    'LBL_DUE_DATE' => 'Frist dato:',
    'LBL_DUE_TIME' => 'Frist klokkeslett:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_DUE_DATE_AND_TIME' => 'Frist dato og klokkeslett:',
    'LBL_START_DATE_AND_TIME' => 'Start dato & klokkeslett:',
    'LBL_START_DATE' => 'Startdato:',
    'LBL_LIST_START_DATE' => 'Start dato',
    'LBL_START_TIME' => 'Start klokkeslett:',
    'DATE_FORMAT' => '(åååå-mm-dd 24:00)',
    'LBL_NONE' => 'Ingen',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_EMAIL_ADDRESS' => 'E-post:',
    'LBL_PHONE' => 'Telefonnr:',
    'LBL_EMAIL' => 'E-post:',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_NAME' => 'Navn:',
    'LBL_CONTACT_NAME' => 'Kontaktens navn: ',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_DATE_DUE_FLAG' => 'Ingen frist dato',
    'LBL_DATE_START_FLAG' => 'Ingen start dato',
    'LBL_LIST_MY_TASKS' => 'Mine åpne oppgaver',
    'LNK_NEW_TASK' => 'Ny oppgave',
    'LNK_TASK_LIST' => 'Oppgaver',
    'LNK_IMPORT_TASKS' => 'Importer oppgaver',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruker',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt brukers navn:',
    'LBL_LIST_DATE_MODIFIED' => 'Dato endret',
    'LBL_CONTACT_ID' => 'Kontakt ID:',
    'LBL_PARENT_ID' => 'Forelder ID:',
    'LBL_CONTACT_PHONE' => 'Kontakttelefon:',
    'LBL_PARENT_TYPE' => 'Foreldertype:',
    'LBL_TASK_INFORMATION' => 'Oppgave oversikt', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Rediger oppsett' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notater:',
    //For export labels
    'LBL_DATE_DUE' => 'Frist dato',
    'LBL_RELATED_TO' => 'Relatert til:',
);
