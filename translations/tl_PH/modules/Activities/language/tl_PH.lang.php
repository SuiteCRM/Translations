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
    'LBL_MODULE_NAME' => 'Ang mga aktibidad',
    'LBL_MODULE_TITLE' => 'Mga aktibidad: Bahay',
    'LBL_SEARCH_FORM_TITLE' => 'Paghanap ng mga aktibidad',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng mga aktibidad',
    'LBL_LIST_SUBJECT' => 'Paksa',
    'LBL_OVERVIEW' => 'Sa taas ng tanawin', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Ang mga tungkulin', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Ang mga pag-uusapan', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'Ang mga tawag', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'Ang mga email', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'Ang mga nota', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'Imprinta', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Ang pagpupulong',
    'LBL_CALL_TYPE' => 'Tawagan',
    'LBL_EMAIL_TYPE' => 'Ang Email',
    'LBL_NOTE_TYPE' => 'Tandaan',
    'LBL_DATA_TYPE_START' => 'Magsimula:',
    'LBL_DATA_TYPE_SENT' => 'Naipadala:',
    'LBL_DATA_TYPE_MODIFIED' => 'Binago:',
    'LBL_LIST_CONTACT' => 'Kontak',
    'LBL_LIST_RELATED_TO' => 'Para sa kaugnayan',
    'LBL_LIST_DATE' => 'Petsa',
    'LBL_LIST_CLOSE' => 'Sarado',
    'LBL_SUBJECT' => 'Ang Paksa:',
    'LBL_STATUS' => 'Ang Kalagayan:',
    'LBL_LOCATION' => 'Lokasyon:',
    'LBL_DATE_TIME' => 'Magsimula sa petsa at oras:',
    'LBL_DATE' => 'Magsimula sa petsa:',
    'LBL_TIME' => 'Oras ng simula:',
    'LBL_DURATION' => 'Tagal:',
    'LBL_HOURS_MINS' => '(Mga oras o minuto)',
    'LBL_CONTACT_NAME' => 'Pangalan ng contact: ',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan:',
    'LNK_NEW_CALL' => 'I-log ang tawag',
    'LNK_NEW_MEETING' => 'Naka-iskedyul na ang pagpupulong',
    'LNK_NEW_TASK' => 'Gumawa ng Gawain',
    'LNK_NEW_NOTE' => 'Lumikha ng tala o magdagdag ng attachment',
    'LNK_NEW_EMAIL' => 'Lumikha ng naka-archive na email',
    'LNK_CALL_LIST' => 'Tingnan ang mga tawag',
    'LNK_MEETING_LIST' => 'Tanawin ang mga pagpupulong',
    'LNK_TASK_LIST' => 'Tingnan ang mga gawain',
    'LNK_NOTE_LIST' => 'Tingnan ang mga Notes',
    'LBL_DELETE_ACTIVITY' => 'Sigurado ka ba na gusto mong burahin ang aktibidad na ito?',
    'ERR_DELETE_RECORD' => 'Kailangang tumukoy ng isang record number para mabura ang account.',
    'LBL_INVITEE' => 'Mga imbitado',
    'LBL_LIST_DIRECTION' => 'Direksyon',
    'LBL_DIRECTION' => 'Direksyon',
    'LNK_NEW_APPOINTMENT' => 'Bagong usapan',
    'LNK_VIEW_CALENDAR' => 'Tingnan ang kalendaryo',
    'LBL_OPEN_ACTIVITIES' => 'Bukas na mga aktibidad',
    'LBL_HISTORY' => 'Kasaysayan',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Gumawa ng Gawain',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Gumawa ng Gawain',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Naka-iskedyul na ang pagpupulong',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Naka-iskedyul na ang pagpupulong',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'I-log ang tawag',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Gumawa ng Nota o Ilalakip',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Gumawa ng Nota o Ilalakip',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Email na Nasinup',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Email na Nasinup',
    'LBL_LIST_STATUS' => 'Kalagayan',
    'LBL_LIST_DUE_DATE' => 'Takdang petsa',
    'LBL_LIST_LAST_MODIFIED' => 'Ang Huling Nabago',
    'LNK_IMPORT_CALLS' => 'Ipasok ang mga tawag',
    'LNK_IMPORT_MEETINGS' => 'I-import ang mga pagpupulong',
    'LNK_IMPORT_TASKS' => 'Ipasok ang mga gawain',
    'LNK_IMPORT_NOTES' => 'Ipasok ang mga tala',
    'LBL_ACCEPT_THIS' => 'Tanggapin?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Bukas na mga aktibidad',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Magtalaga ng gumagamit',

    'LBL_ACCEPT' => 'Tanggapin' /*for 508 compliance fix*/,
);
