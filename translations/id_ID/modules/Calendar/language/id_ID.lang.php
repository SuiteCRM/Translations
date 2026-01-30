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

    'LBL_SHAREDWEEK' => 'Minggu Bersama',
    'LBL_SHAREDMONTH' => 'Bukan Bersama',

    'LBL_MODULE_NAME' => 'Kalender',
    'LBL_MODULE_TITLE' => 'Kalender',
    'LNK_NEW_CALL' => 'Log Panggilan Telepon',
    'LNK_NEW_MEETING' => 'Jadwal Rapat',
    'LNK_NEW_TASK' => 'Buat Tugas',
    'LNK_CALL_LIST' => 'Panggilan',
    'LNK_MEETING_LIST' => 'Rapat',
    'LNK_TASK_LIST' => 'Tugas',
    'LNK_TASK' => 'Tugas',
    'LNK_TASK_VIEW' => 'Melihat Tugas',
    'LNK_EVENT' => 'Acara',
    'LNK_EVENT_VIEW' => 'Melihat Acara',
    'LNK_VIEW_CALENDAR' => 'Hari ini',
    'LNK_IMPORT_CALLS' => 'Impor Panggilan Telepon',
    'LNK_IMPORT_MEETINGS' => 'Impor Rapat',
    'LNK_IMPORT_TASKS' => 'Impor Tugas',
    'LBL_MONTH' => 'Bulan',
    'LBL_AGENDADAY' => 'Hari',
    'LBL_YEAR' => 'Tahun',

    'LBL_AGENDAWEEK' => 'Minggu',
    'LBL_PREVIOUS_MONTH' => 'Bulan Sebelumnya',
    'LBL_PREVIOUS_DAY' => 'Hari Sebelumnya',
    'LBL_PREVIOUS_YEAR' => 'Tahun Sebelumnya',
    'LBL_PREVIOUS_WEEK' => 'Minggu Sebelumnya',
    'LBL_NEXT_MONTH' => 'Bulan Depan',
    'LBL_NEXT_DAY' => 'Hari Berikutnya',
    'LBL_NEXT_YEAR' => 'Tahun Depan',
    'LBL_NEXT_WEEK' => 'Minggu berikutnya',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Dijadwalkan',
    'LBL_BUSY' => 'Sibuk',
    'LBL_CONFLICT' => 'Konflik',
    'LBL_USER_CALENDARS' => 'Kalender User',
    'LBL_SHARED' => 'Bersama',
    'LBL_PREVIOUS_SHARED' => 'Sebelumnya',
    'LBL_NEXT_SHARED' => 'Berikutnya',
    'LBL_SHARED_CAL_TITLE' => 'Kalender Bersama',
    'LBL_USERS' => 'Pemakai',
    'LBL_REFRESH' => 'Menyegarkan',
    'LBL_EDIT_USERLIST' => 'Daftar Pemakai',
    'LBL_SELECT_USERS' => 'Pilih pengguna dari tampilan kalender',
    'LBL_FILTER_BY_TEAM' => 'Filter Pengguna berdasarkan tim',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada',
    'LBL_DATE' => 'Tanggal & Waktu mulai',
    'LBL_CREATE_MEETING' => 'Jadwal Rapat',
    'LBL_CREATE_CALL' => 'Jadwal Panggilan',
    'LBL_HOURS_ABBREV' => 'j',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Ya',
    'LBL_NO' => 'Tidak',
    'LBL_SETTINGS' => 'Pengaturan',
    'LBL_CREATE_NEW_RECORD' => 'Membuat aktivitas',
    'LBL_LOADING' => 'Memuat...',
    'LBL_SAVING' => 'Menyimpan...',
    'LBL_SENDING_INVITES' => 'Hemat & Mengirim Undangan .....',
    'LBL_CONFIRM_REMOVE' => 'Yakin ingin menghapus rekaman?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Yakin ingin menghapus semua catatan berulang?',
    'LBL_EDIT_RECORD' => 'Edit Aktivitas',
    'LBL_ERROR_SAVING' => 'Kesalahan saat menyimpan',
    'LBL_ERROR_LOADING' => 'Kesalahan saat memuat',
    'LBL_GOTO_DATE' => 'Sampai Tanggal ke',
    'NOTICE_DURATION_TIME' => 'Durasi waktu harus lebih Besar dari 0',
    'LBL_STYLE_BASIC' => 'Dasar', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Melanjutkan', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Tidak cocok untuk bidang: Ditugaskan untuk',
    'LBL_SUBJECT' => 'Subjek',
    'LBL_DURATION' => 'Durasi',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Prioritas',

    'LBL_SETTINGS_TITLE' => 'Pengaturan',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Tampilkan slot waktu dalam tampilan Hari dan Minggu:',
    'LBL_SETTINGS_TIME_STARTS' => 'Waktu mulai:',
    'LBL_SETTINGS_TIME_ENDS' => 'Akhir waktu:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Tampilkan Panggilan:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Tampilkan Tugas:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Acara Selesai Pertemuan, Panggilan dan tugas-Tugas:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Kalender Bersama Yang Terpisah:',

    'LBL_SAVE_BUTTON' => 'Simpan',
    'LBL_DELETE_BUTTON' => 'Hapus',
    'LBL_APPLY_BUTTON' => 'Menggunakan',
    'LBL_SEND_INVITES' => 'Mengirim Undangan',
    'LBL_CANCEL_BUTTON' => 'Batal',
    'LBL_CLOSE_BUTTON' => 'Tutup',

    'LBL_GENERAL_TAB' => 'Detail',
    'LBL_PARTICIPANTS_TAB' => 'Yang Diundang',
    'LBL_REPEAT_TAB' => 'Pengulangan',

    'LBL_REPEAT_TYPE' => 'Mengulang',
    'LBL_REPEAT_INTERVAL' => 'Setiap',
    'LBL_REPEAT_END' => 'Akhir',
    'LBL_REPEAT_END_AFTER' => 'Sesudah',
    'LBL_REPEAT_OCCURRENCES' => 'pengulangan',
    'LBL_REPEAT_END_BY' => 'Oleh',
    'LBL_REPEAT_DOW' => 'Hidup',
    'LBL_REPEAT_UNTIL' => 'Ulangi sampai',
    'LBL_REPEAT_COUNT' => 'Jumlah kekambuhan',
    'LBL_REPEAT_LIMIT_ERROR' => 'Permintaan Anda akan membuat dari $limit pertemuan.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Edit Semua Kekambuhan',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Hapus Semua Kekambuhan',

    'LBL_DATE_END_ERROR' => 'Tanggal akhir sebelum tanggal mulai',
    'ERR_YEAR_BETWEEN' => 'Maaf, kalender tidak dapat mempergunakan tahun yang Anda minta <br> Tahun harus antara tahun 1970 dan 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: tidak menjelaskan tuntuk tampilan ini',
    'LBL_NO_ITEMS_MOBILE' => 'Kalender Anda jelas untuk minggu ini.',
    'LBL_GENERAL_SETTINGS' => 'Pengaturan Umum',
    'LBL_COLOR_SETTINGS' => 'Pemgaturan Warna',
    'LBL_MODULE' => 'Modul',
    'LBL_BODY' => 'Tubuh',
    'LBL_BORDER' => 'Berbatasan',
    'LBL_TEXT' => 'Tulisan',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Minggu",
            '1' => "Senin",
            '2' => "Selasa",
            '3' => "Rabu",
            '4' => "Kamis",
            '5' => "Jumat",
            '6' => "Sabtu",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Minggu",
            '1' => "Senin",
            '2' => "Selasa",
            '3' => "Rabu",
            '4' => "Kamis",
            '5' => "Jum'at",
            '6' => "Sabtu",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan",
            '2' => "Feb",
            '3' => "Mar",
            '4' => "Apr",
            '5' => "Mei",
            '6' => "Jun",
            '7' => "Jul",
            '8' => "Agt",
            '9' => "Sep",
            '10' => "Okt",
            '11' => "Nov",
            '12' => "Des",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Januari",
            '2' => "Februari",
            '3' => "Mar",
            '4' => "Apr",
            '5' => "Mei",
            '6' => "Jun",
            '7' => "Jul",
            '8' => "Agu",
            '9' => "Sep",
            '10' => "Okt",
            '11' => "Nov",
            '12' => "Des",
        ),
);
