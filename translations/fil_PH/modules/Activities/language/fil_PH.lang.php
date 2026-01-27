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
    'LBL_MODULE_NAME' => 'Mga ginagawa',
    'LBL_MODULE_TITLE' => 'Mga Aktibidad: Tahanan',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng mga aktibidad',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng mga aktibidad',
    'LBL_LIST_SUBJECT' => 'Ang paksa',
    'LBL_OVERVIEW' => 'Buod', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Mga gawain', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Mga pagpupulong', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'Mga tawag', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'Mga Email', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'Mga tandaan', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'I-print', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Ang Pagpupulong',
    'LBL_CALL_TYPE' => 'Tawag',
    'LBL_EMAIL_TYPE' => 'Ang email',
    'LBL_NOTE_TYPE' => 'Tandaan',
    'LBL_DATA_TYPE_START' => 'Simula:',
    'LBL_DATA_TYPE_SENT' => 'Pinadala:',
    'LBL_DATA_TYPE_MODIFIED' => 'Binago:',
    'LBL_LIST_CONTACT' => 'Ang kontak',
    'LBL_LIST_RELATED_TO' => 'Ini-ugnay sa',
    'LBL_LIST_DATE' => 'Petsa',
    'LBL_LIST_CLOSE' => 'Ang pagsasara',
    'LBL_SUBJECT' => 'Paksa:',
    'LBL_STATUS' => 'Katayuan:',
    'LBL_LOCATION' => 'Lokasyon:',
    'LBL_DATE_TIME' => 'Simula ng petsa at oras:',
    'LBL_DATE' => 'Simula ng petsa:',
    'LBL_TIME' => 'Oras ng simula:',
    'LBL_DURATION' => 'Durasyon:',
    'LBL_HOURS_MINS' => '(Mga oras/mga minuto)',
    'LBL_CONTACT_NAME' => 'Pangalan ng kontak: ',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LNK_NEW_CALL' => 'Tawag ay log',
    'LNK_NEW_MEETING' => 'Iskedyul ng meeting',
    'LNK_NEW_TASK' => 'Gumawa ng gawain',
    'LNK_NEW_NOTE' => 'Lumikha ng talaan o magdagdag mg paglalakip',
    'LNK_NEW_EMAIL' => 'Lumikha ng Archive ng Email',
    'LNK_CALL_LIST' => 'Tingnan ang mga tawag',
    'LNK_MEETING_LIST' => 'Tanawin ang mga pagpupulong',
    'LNK_TASK_LIST' => 'Tumanaw ng mga gawain',
    'LNK_NOTE_LIST' => 'Tumanaw ng mga tala',
    'LBL_DELETE_ACTIVITY' => 'Sigurado ka bang gusto mong burahin ang aktibidad na ito?',
    'ERR_DELETE_RECORD' => 'Dapat mong tukuyin ang bilang ng ulat upang burahin ang akwant.',
    'LBL_INVITEE' => 'Mga imbitado',
    'LBL_LIST_DIRECTION' => 'Direksyon',
    'LBL_DIRECTION' => 'Direksyon',
    'LNK_NEW_APPOINTMENT' => 'Bagong Pagkahirang',
    'LNK_VIEW_CALENDAR' => 'Tingnan ang Kalendaryo',
    'LBL_OPEN_ACTIVITIES' => 'Bukas na mga aktibidad',
    'LBL_HISTORY' => 'Kasaysayan',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Gumawa ng gawain',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Gumawa ng gawain',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Iskedyul ng meeting',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Iskedyul ng meeting',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Tawag ay log',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Lumikha ng talaan o paglalakip',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Lumikha ng talaan o paglalakip',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'I-archive ang email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'I-archive ang email',
    'LBL_LIST_STATUS' => 'Katayuan',
    'LBL_LIST_DUE_DATE' => 'Angkop na petsa',
    'LBL_LIST_LAST_MODIFIED' => 'Huling Binago',
    'LNK_IMPORT_CALLS' => 'Mag-angkat ng mga tawag',
    'LNK_IMPORT_MEETINGS' => 'I-import ang mga pagpupulong',
    'LNK_IMPORT_TASKS' => 'Mag-angkat ng mga gawain',
    'LNK_IMPORT_NOTES' => 'I-import ang mga talaan',
    'LBL_ACCEPT_THIS' => 'Tanggapin?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Bukas na mga aktibidad',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Itinalaga sa gumagamit',

    'LBL_ACCEPT' => 'Tanggapin' /*for 508 compliance fix*/,
);
