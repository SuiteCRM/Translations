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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Panggilan',
    'LBL_MODULE_TITLE' => 'Pangilan Telepon: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Panggilan Telepon',
    'LBL_LIST_FORM_TITLE' => 'Jadwal Panggilan Telepon',
    'LBL_NEW_FORM_TITLE' => 'Membuat Janji Temu',
    'LBL_LIST_CLOSE' => 'Tutup',
    'LBL_LIST_SUBJECT' => 'Subjek',
    'LBL_LIST_CONTACT' => 'Kontak',
    'LBL_LIST_RELATED_TO' => 'Terkait dengan',
    'LBL_LIST_RELATED_TO_ID' => 'Terkait dengan ID',
    'LBL_LIST_DATE' => 'Tanggal Mulai',
    'LBL_LIST_DIRECTION' => 'Arah',
    'LBL_SUBJECT' => 'Subjek:',
    'LBL_REMINDER' => 'Pengingat',
    'LBL_CONTACT_NAME' => 'Kontak',
    'LBL_DESCRIPTION' => 'Deskripsi:',
    'LBL_STATUS' => 'Status',
    'LBL_DIRECTION' => 'Arah',
    'LBL_DATE' => 'Tanggal Mulai',
    'LBL_DURATION' => 'Durasi',
    'LBL_DURATION_HOURS' => 'Durasi (jam)',
    'LBL_DURATION_MINUTES' => 'Durasi (jam)',
    'LBL_HOURS_MINUTES' => '(jam / menit)',
    'LBL_DATE_TIME' => 'Tanggal & Waktu Mulai',
    'LBL_TIME' => 'Waktu Mulai',
    'LBL_HOURS_ABBREV' => 'j',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Jadwal Panggilan',
    'LNK_NEW_MEETING' => 'Jadwal Rapat',
    'LNK_CALL_LIST' => 'Panggilan Telepon',
    'LNK_IMPORT_CALLS' => 'Impor Panggilan Telepon',
    'ERR_DELETE_RECORD' => 'Sebuah "Record number" harus ditentukan untuk menghapus account.',
    'LBL_INVITEE' => 'Yang Diundang',
    'LBL_RELATED_TO' => 'Terkait dengan',
    'LNK_NEW_APPOINTMENT' => 'Membuat Janji Temu',
    'LBL_SCHEDULING_FORM_TITLE' => 'Penjadwalan',
    'LBL_ADD_INVITEE' => 'Menambah undangan',
    'LBL_NAME' => 'Nama',
    'LBL_FIRST_NAME' => 'Nama Pertama',
    'LBL_LAST_NAME' => 'Nama Terakhir',
    'LBL_EMAIL' => 'Surel',
    'LBL_PHONE' => 'Telepon',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email semua yang di undangan',
    'LBL_EMAIL_REMINDER' => 'Email Peringatan',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Peringatan Waktu',
    'LBL_SEND_BUTTON_TITLE' => 'Mengirim Undangan',
    'LBL_SEND_BUTTON_LABEL' => 'Mengirim Undangan',
    'LBL_DATE_END' => 'Tanggal Akhir',
    'LBL_REMINDER_TIME' => 'Pengingat Waktu',
    'LBL_EMAIL_REMINDER_SENT' => 'Mengirim Email Peringatan',
    'LBL_SEARCH_BUTTON' => 'Cari',
    'LBL_ADD_BUTTON' => 'Tambah',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Panggilan',
    'LNK_SELECT_ACCOUNT' => 'Pilih Acccount',
    'LNK_NEW_ACCOUNT' => 'Account baru',
    'LNK_NEW_OPPORTUNITY' => 'Peluang Baru',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_USERS_SUBPANEL_TITLE' => 'Pemakai',
    'LBL_OUTLOOK_ID' => 'ID Peringatan',
    'LBL_MEMBER_OF' => 'Anggota Dari',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Catatan',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ditugaskan kepada',
    'LBL_LIST_MY_CALLS' => 'Panggilan saya',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada',
    'LBL_ASSIGNED_TO_ID' => 'Pengguna yang ditugaskan',
    'NOTICE_DURATION_TIME' => 'Durasi waktu harus lebih Besar dari 0',
    'LBL_CALL_INFORMATION' => 'Informasi account', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Menghapus',
    'LBL_ACCEPT_STATUS' => 'Terima Status',
    'LBL_ACCEPT_LINK' => 'Menerima Link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Membuat Undangan',
    'LBL_CREATE_CONTACT' => 'Sebagai Kontak',
    'LBL_CREATE_LEAD' => 'Sebagai Pemimpin',
    'LBL_CREATE_AND_ADD' => 'Membuat & Menambahkan',
    'LBL_CANCEL_CREATE_INVITEE' => 'Batal',
    'LBL_EMPTY_SEARCH_RESULT' => 'Maaf, tidak ada hasil yang ditemukan Buat undangan di bawah ini.',
    'LBL_NO_ACCESS' => 'Anda tidak memiliki akses untuk membuat $module',

    'LBL_REPEAT_TYPE' => 'Jenis Pengulangan',
    'LBL_REPEAT_INTERVAL' => 'Ulangi Waktu jeda',
    'LBL_REPEAT_DOW' => 'Mengulang',
    'LBL_REPEAT_UNTIL' => 'Ulangi sampai',
    'LBL_REPEAT_COUNT' => 'Menghitung Ulang',
    'LBL_REPEAT_PARENT_ID' => 'Mengulang ID Dasar',
    'LBL_RECURRING_SOURCE' => 'Asal Pengulangan',

    'LBL_SYNCED_RECURRING_MSG' => 'Panggilan ini berasal dari sistem lain dan disinkronisasikan ke SuiteCRM. Untuk membuat perubahan, masuk ke panggilan asli di dalam sistem yang lain. Perubahan yang dilakukan di sistem lain bisa disinkronkan dengan catatan ini.',

    // for reminders
    'LBL_REMINDERS' => 'Pengingat',
    'LBL_REMINDERS_ACTIONS' => 'Tindakan:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email undangan',
    'LBL_REMINDERS_WHEN' => 'Kapan:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Hapus pengingat',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Tambahkan semua undangan',
    'LBL_REMINDERS_ADD_REMINDER' => 'Tambahkan pengingat',

    'LBL_RESCHEDULE' => 'Menjadwal ulang',
    'LBL_RESCHEDULE_COUNT' => 'Percobaan Panggilan',
    'LBL_RESCHEDULE_DATE' => 'Tanggal',
    'LBL_RESCHEDULE_REASON' => 'Alasan',
    'LBL_RESCHEDULE_ERROR1' => 'Silakan pilih tanggal yang valid',
    'LBL_RESCHEDULE_ERROR2' => 'Silakan pilih alasan',
    'LBL_RESCHEDULE_PANEL' => 'Menjadwal ulang',
    'LBL_RESCHEDULE_HISTORY' => 'Percobaan Riwayat Panggilan',
    'LBL_CANCEL' => 'Batal',
    'LBL_SAVE' => 'Simpan',

    'LBL_CALLS_RESCHEDULE' => 'Jadwal Ulang Panggilan',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Tanggal dibuat',
    'LBL_LIST_DUE_DATE'=>'Tanggal Jatuh Tempo',
    'LBL_RESCHEDULED_BY'=>'Oleh',
);
