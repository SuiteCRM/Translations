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
    'LBL_ACCEPT_THIS' => 'Accept?',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Add Invitees',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_CREATED_BY' => 'Created by',
    'LBL_DATE_END' => 'End Date',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Meetings',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DIRECTION' => 'Direction:',
    'LBL_DURATION_HOURS' => 'Duration Hours:',
    'LBL_DURATION_MINUTES' => 'Duration Minutes:',
    'LBL_DURATION' => 'Duration:',
    'LBL_EMAIL' => 'Surel',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(hours/minutes)',
    'LBL_INVITEE' => 'Invitees',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Pengguna yang ditugaskan',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_DATE_MODIFIED' => 'Tanggal diubah',
    'LBL_LIST_DATE' => 'Start Date',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_LIST_DUE_DATE' => 'Due Date',
    'LBL_LIST_FORM_TITLE' => 'Daftar Rapat',
    'LBL_LIST_MY_MEETINGS' => 'Rapat saya',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_LOCATION' => 'Location:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modified by',
    'LBL_MODULE_NAME' => 'Meetings',
    'LBL_MODULE_TITLE' => 'Rapat: Halaman Utama',
    'LBL_NAME' => 'Nama ',
    'LBL_NEW_FORM_TITLE' => 'Create Appointment',
    'LBL_OUTLOOK_ID' => 'ID Peringatan',
    'LBL_SEQUENCE' => 'Perbarui urutan Rapat',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_REMINDER_TIME' => 'Reminder Time',
    'LBL_EMAIL_REMINDER_SENT' => 'Mengirim Email Peringatan',
    'LBL_REMINDER' => 'Pengingat',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email semua yang di undangan',
    'LBL_EMAIL_REMINDER' => 'Email Peringatan',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Peringatan Waktu',
    'LBL_REMOVE' => 'Remove',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_SEARCH_FORM_TITLE' => 'Pencarian Rapat',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_STATUS' => 'Status:',
    'LBL_TYPE' => 'Jenis Rapat',
    'LBL_PASSWORD' => 'Kata Kunci Rapat',
    'LBL_URL' => 'Mulai/Gabung Rapat',
    'LBL_HOST_URL' => 'URL Host',
    'LBL_DISPLAYED_URL' => 'Tampilan URL',
    'LBL_CREATOR' => 'Kreator Rapat',
    'LBL_EXTERNALID' => 'ID Aplikasi Luar',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_TIME' => 'Start Time:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Users',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PARENT_ID' => 'Parent ID',
    'LNK_MEETING_LIST' => 'View Meetings',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_MEETING_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Gabung Rapat',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'Menerima Link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Anda tidak dapat bergabung dalam pertemuan ini karena anda bukan seorang undangan.',
    'LBL_EXTNOT_RECORD_LINK' => 'Tampilkan Rapat',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Anda tidak dapat memulai rapat ini karena anda bukan Administrator atau pemilik rapat.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Membuat Undangan',
    'LBL_CREATE_CONTACT' => 'Sebagai Kontak',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Sebagai Pemimpin',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Membuat & Menambahkan',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Batal',
    'LBL_EMPTY_SEARCH_RESULT' => 'Maaf, tidak ada hasil yang ditemukan Buat undangan di bawah ini.',
    'LBL_NO_ACCESS' => 'Anda tidak memiliki akses untuk membuat $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Jenis Pengulangan',
    'LBL_REPEAT_INTERVAL' => 'Ulangi Waktu jeda',
    'LBL_REPEAT_DOW' => 'Mengulang',
    'LBL_REPEAT_UNTIL' => 'Ulangi sampai',
    'LBL_REPEAT_COUNT' => 'Menghitung Ulang',
    'LBL_REPEAT_PARENT_ID' => 'Mengulang ID Dasar',
    'LBL_RECURRING_SOURCE' => 'Asal Pengulangan',

    'LBL_SYNCED_RECURRING_MSG' => 'Pertemuan ini berasal dari sistem lain dan disinkronisasikan ke SuiteCRM. Untuk melakukan perubahan, pergilah ke pertemuan semula di dalam sistem yang lain. Perubahan yang dilakukan di sistem lain bisa disinkronkan dengan catatan ini.',
    'LBL_RELATED_TO' => 'Terkait ke:',

    // for reminders
    'LBL_REMINDERS' => 'Pengingat',
    'LBL_REMINDERS_ACTIONS' => 'Tindakan:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email undangan',
    'LBL_REMINDERS_WHEN' => 'Kapan:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Hapus pengingat',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Tambahkan semua undangan',
    'LBL_REMINDERS_ADD_REMINDER' => 'Tambahkan pengingat',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
