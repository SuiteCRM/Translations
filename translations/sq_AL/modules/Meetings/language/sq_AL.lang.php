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
    'LBL_ACCEPT_THIS' => 'Prano?',
    'LBL_ADD_BUTTON' => 'shto',
    'LBL_ADD_INVITEE' => 'Shto të ftuarit',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktet',
    'LBL_CREATED_BY' => 'Krijuar nga',
    'LBL_DATE_END' => 'Data e përfundimit',
    'LBL_DATE_TIME' => 'Data dhe ora e nisjes',
    'LBL_DATE' => 'Data e nisjes',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mbledhjet',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_DIRECTION' => 'Drejtimi:',
    'LBL_DURATION_HOURS' => 'Orrët e kohëzgjatjes:',
    'LBL_DURATION_MINUTES' => 'Minutat e zgjatjes:',
    'LBL_DURATION' => 'Kohëzgjatja',
    'LBL_EMAIL' => 'Emailet',
    'LBL_FIRST_NAME' => 'Emri',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Shënimet',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(orët/minutat)',
    'LBL_INVITEE' => 'Të ftuarit',
    'LBL_LAST_NAME' => 'Mbiemri',
    'LBL_ASSIGNED_TO_NAME' => 'drejtuar',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Përdorues i caktuar',
    'LBL_LIST_CLOSE' => 'Mbyll:',
    'LBL_LIST_CONTACT' => 'Kontaktet',
    'LBL_LIST_DATE_MODIFIED' => 'Të dhënat e modifikuara',
    'LBL_LIST_DATE' => 'Start Date',
    'LBL_LIST_DIRECTION' => 'Drejtimi',
    'LBL_LIST_DUE_DATE' => 'Due Date',
    'LBL_LIST_FORM_TITLE' => 'Lista e mbledhjeve',
    'LBL_LIST_MY_MEETINGS' => 'Mbledhjet e mia',
    'LBL_LIST_RELATED_TO' => 'Në lidhje me',
    'LBL_LIST_STATUS' => 'Statusi',
    'LBL_LIST_SUBJECT' => 'Subjekti',
    'LBL_LEADS_SUBPANEL_TITLE' => 'udhëheqjet',
    'LBL_LOCATION' => 'Lokacioni',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modifikuar nga',
    'LBL_MODULE_NAME' => 'Mbledhjet',
    'LBL_MODULE_TITLE' => 'Mbledhjet: Ballina',
    'LBL_NAME' => 'Emri',
    'LBL_NEW_FORM_TITLE' => 'Krijo takim',
    'LBL_OUTLOOK_ID' => 'ID e pamjes së jashtne',
    'LBL_SEQUENCE' => 'Sekuenca e rifreskimit të mbledhjes',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_REMINDER_TIME' => 'Koha e kujtimit',
    'LBL_EMAIL_REMINDER_SENT' => 'Përkujtuesi i Emailit të dërguar',
    'LBL_REMINDER' => 'Rikujtuesit',
    'LBL_REMINDER_POPUP' => 'Shfaqje',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Dërgoni një email të gjithë ftuarit',
    'LBL_EMAIL_REMINDER' => 'Përkujtuesi i Emailit',
    'LBL_EMAIL_REMINDER_TIME' => 'Koha e përkujtimit të Emailit',
    'LBL_REMOVE' => 'Fshijë',
    'LBL_SCHEDULING_FORM_TITLE' => 'Caktimi',
    'LBL_SEARCH_BUTTON' => 'Kërkim',
    'LBL_SEARCH_FORM_TITLE' => 'Kërkimi i mbledhjeve',
    'LBL_SEND_BUTTON_LABEL' => 'Dërgo ftesat',
    'LBL_SEND_BUTTON_TITLE' => 'Dërgo ftesat',
    'LBL_STATUS' => 'statusi',
    'LBL_TYPE' => 'Lloji i mbledhjes',
    'LBL_PASSWORD' => 'Fjalëkalimi i mbledhjes',
    'LBL_URL' => 'fillo/ bashkangjitu mbledhjes',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Shfaq URL',
    'LBL_CREATOR' => 'Krijimi i mbledhjes',
    'LBL_EXTERNALID' => 'ID e apl të jashtëm',
    'LBL_SUBJECT' => 'Subjekti',
    'LBL_TIME' => 'Ora e nisjes',
    'LBL_USERS_SUBPANEL_TITLE' => 'përdoruesit',
    'LBL_PARENT_TYPE' => 'Lloji mëmë',
    'LBL_PARENT_ID' => 'Parent ID',
    'LNK_MEETING_LIST' => 'shiko mbledhjet',
    'LNK_NEW_APPOINTMENT' => 'Krijo takim',
    'LNK_NEW_MEETING' => 'Cakto mbledhje',
    'LNK_IMPORT_MEETINGS' => 'Mbledhje të rëndësishme',

    'LBL_CREATED_USER' => 'Përdorues i krijuar',
    'LBL_MODIFIED_USER' => 'përdorues i modifikuar',
    'NOTICE_DURATION_TIME' => 'Koha e zgjatjes duhet të jetë më e madhe se 0',
    'LBL_MEETING_INFORMATION' => 'Pasqyra', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Bashkangjitu mbledhjes',
    'LBL_ACCEPT_STATUS' => 'Prano statusin',
    'LBL_ACCEPT_LINK' => 'Prano lidhjen',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Nuk jeni në gjendje ti bashkangjiteni mbledhjes pasi që nuk jeni të ftuar.',
    'LBL_EXTNOT_RECORD_LINK' => 'Shiko mbledhjet',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Nuk mund të filloni mbledhjen pasi që nuk jeni administratori ose pronari i mbledhjes.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Krijo një ftesë',
    'LBL_CREATE_CONTACT' => 'Si kontakt',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Si udhëheqës',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Krijo dhe Shto',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Anulo',
    'LBL_EMPTY_SEARCH_RESULT' => 'Na vjen keq, asnjë rezultat nuk u gjet. Ju lutemi krijoni një ftesë lartë.',
    'LBL_NO_ACCESS' => 'Nuk keni akses për të krijuar $ modul',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Përsërit llojin',
    'LBL_REPEAT_INTERVAL' => 'Përsërit intervalin',
    'LBL_REPEAT_DOW' => 'Përsërit në',
    'LBL_REPEAT_UNTIL' => 'përsërit deri',
    'LBL_REPEAT_COUNT' => 'Përsërit numërimin',
    'LBL_REPEAT_PARENT_ID' => 'Përsërit ID e Prindit',
    'LBL_RECURRING_SOURCE' => 'Burimi Periodik',

    'LBL_SYNCED_RECURRING_MSG' => 'Kjo mbledhje ka origjinën në sistemin tjetër dhe është sinkronizuar në SuiteCRM. Pasi mbledhja ka qenë e redaktuar në SuiteCRM, nuk do të jetë në gjendje për t&#39;u sinkronizuar për sistemin tjetër.',
    'LBL_RELATED_TO' => 'Në lidhje me:',

    // for reminders
    'LBL_REMINDERS' => 'Reminders',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Shfaqje',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
