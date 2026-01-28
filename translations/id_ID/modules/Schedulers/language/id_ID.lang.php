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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Proses Alur Kerja Tugas',
    'LBL_OOTB_REPORTS' => 'Jalankan Laporan Tugas Terjadwal',
    'LBL_OOTB_IE' => 'Periksa Kotak Surat Masuk',
    'LBL_OOTB_BOUNCE' => 'Proses Jalankan Email Nightly Kampanye terpental ',
    'LBL_OOTB_CAMPAIGN' => 'Jalankan Nightly Email Massal Kampanye',
    'LBL_OOTB_PRUNE' => 'Pangkas Database pada tanggal 1 Bulan',
    'LBL_OOTB_TRACKER' => 'Memangkas Pelacak Tabel',
    'LBL_OOTB_SUITEFEEDS' => 'Prune Alat Yang Berguna Pakan Tabel',
    'LBL_OOTB_LUCENE_INDEX' => 'Melakukan Indeks Lucene',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Menjalankan Email Notifikasi Pengingat',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Membersihan antrian',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Menghapus dokumen dari sistem',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Selang waktu:',
    'LBL_LIST_LIST_ORDER' => 'Penjadwalan:',
    'LBL_LIST_NAME' => 'Penjadwalan',
    'LBL_LIST_RANGE' => 'Jarak',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Daftar jadwal',
// human readable:
    'LBL_SUN' => 'Minggu',
    'LBL_MON' => 'Senin',
    'LBL_TUE' => 'Selasa',
    'LBL_WED' => 'Rabu',
    'LBL_THU' => 'Kamis',
    'LBL_FRI' => 'Jum\'at',
    'LBL_SAT' => 'Sabtu',
    'LBL_ALL' => 'Setiap Hari',
    'LBL_EVERY' => 'Setiap',
    'LBL_FROM' => 'Dari',
    'LBL_ON_THE' => 'berada di',
    'LBL_RANGE' => 'Kepada',
    'LBL_AND' => 'dan',
    'LBL_MINUTES' => 'Menit',
    'LBL_HOUR' => 'Jam',
    'LBL_HOUR_SING' => 'jam',
    'LBL_OFTEN' => 'Sesering mungkin',
    'LBL_MIN_MARK' => ' tanda menit',


// crontabs
    'LBL_MINS' => 'menit',
    'LBL_HOURS' => 'jam',
    'LBL_DAY_OF_MONTH' => 'tanggal',
    'LBL_MONTHS' => 'bulan',
    'LBL_DAY_OF_WEEK' => 'hari',
    'LBL_CRONTAB_EXAMPLES' => 'Di atas menggunakan standar crontab notasi.',
// Labels
    'LBL_ALWAYS' => 'Selalu',
    'LBL_CATCH_UP' => 'Menjalankan Jika Terlewatkan',
    'LBL_CATCH_UP_WARNING' => 'Hapus centang jika pekerjaan ini dapat berlangsung lebih dari waktu untuk menjalankan.',
    'LBL_DATE_TIME_END' => 'Tanggal & Waktu Berakhir',
    'LBL_DATE_TIME_START' => 'Tanggal & Waktu Mulai',
    'LBL_INTERVAL' => 'Selang waktu',
    'LBL_JOB' => 'Pekerjaan',
    'LBL_JOB_URL' => 'URL Pekerjaan',
    'LBL_LAST_RUN' => 'Terakhir Berhasil Dijalankan',
    'LBL_MODULE_NAME' => 'Penjadwalan SuiteCRM',
    'LBL_MODULE_TITLE' => 'Penjadwal',
    'LBL_NAME' => 'Nama Pekerjaan',
    'LBL_NEVER' => 'Tidak Pernah',
    'LBL_NEW_FORM_TITLE' => 'Jadwal Baru',
    'LBL_PERENNIAL' => 'kekal',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Penjadwalan',
    'LBL_SCHEDULER' => 'Penjadwalan',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Aktif Dari',
    'LBL_TIME_TO' => 'Aktif Untuk',
    'LBL_WARN_CURL_TITLE' => 'cURL Peringatan:',
    'LBL_WARN_CURL' => 'Catatan:',
    'LBL_WARN_NO_CURL' => 'Sistem ini tidak memiliki perpustakaan cURL yang aktif/kompil ke modul PHP (--dengan curl=/jalur/ke/perpustakaan_curl). Silahkan hubungi pengelola anda untuk memperbaiki masalah ini. Tanpa fungsionalitas cURL, Penjadwalan tidak bisa mengutas pekerjaan-pekerjaan tersebut.',
    'LBL_BASIC_OPTIONS' => 'Setelan Dasar',
    'LBL_ADV_OPTIONS' => 'Pilihan-pilihan Lanjutan',
    'LBL_TOGGLE_ADV' => 'Tampilkan Opsi Lanjutan',
    'LBL_TOGGLE_BASIC' => 'Tampilkan Pilihan-pilihan Dasar',
// Links
    'LNK_LIST_SCHEDULER' => 'Penjadwal',
    'LNK_NEW_SCHEDULER' => 'Buat Penjadwalan',
// Messages
    'ERR_CRON_SYNTAX' => 'Cron sintaks tidak benar',
    'NTC_LIST_ORDER' => 'Menetapkan jadwal perintah ini akan tampil di daftar Penjadwalan pilihan menurun',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Untuk Menetapkan Jendela Penjadwalan',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Untuk Menetapkan Crontab',
    'LBL_CRON_LINUX_DESC1' => 'Untuk menjalankan penjadwal SuiteCRM, sunting jaringan peladen berkas crontab pengguna dengan perintah ini: ',
    'LBL_CRON_LINUX_DESC2' => '... dan tambahkan garis berikut ke berkas crontab: ',
    'LBL_CRON_LINUX_DESC3' => 'Anda harus melakukan ini hanya setelah proses pemasangan berakhir.',
    'LBL_CRON_WINDOWS_DESC' => 'Untuk menjalakan penjadwalan SuiteCRM, buat berkas tumpak untuk menjalankan menggunakan Jendela Tugas Terjadwal. Berkas tumpak harus mencakup perintah-perintah berikut: ',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Log Perkerjaan',
    'LBL_EXECUTE_TIME' => 'Waktu dijalankan',

//jobstrings
    'LBL_REFRESHJOBS' => 'Segarkan Pekerjaan',
    'LBL_POLLMONITOREDINBOXES' => 'Periksa Akun Surat Inbound',
    'LBL_PERFORMFULLFTSINDEX' => 'Sistem Pencarian Indeks Teks Lengkap',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Jalankan Nightly Email Massal Kampanye',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Proses Jalankan Email Nightly Kampanye terpental ',
    'LBL_PRUNEDATABASE' => 'Pangkas Database pada tanggal 1 Bulan',
    'LBL_TRIMTRACKER' => 'Memangkas Pelacak Tabel',
    'LBL_TRIMSUGARFEEDS' => 'Prune Alat Yang Berguna Pakan Tabel',
    'LBL_SENDEMAILREMINDERS' => 'Menjalankan Pengingat Pengiriman Surel',
    'LBL_CLEANJOBQUEUE' => 'Pembersihan Antrian Perkerjaan',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Menghapus dokumen dari sistem',

    'LBL_AODOPTIMISEINDEX' => 'Mengoptimalkan Lanjutan Indeks OpenDiscovery',
    'LBL_AODINDEXUNINDEXED' => 'Indeks dokumen-dokumen yang belum terindeks',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Pemilihan Pantauan Kotak Masuk',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Jalankan laporan terjadwal',
    'LBL_PROCESSAOW_WORKFLOW' => 'Proses Alur Kerja AOW',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'Waktu-waktu Penjadwalan',
    'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Calendars',
);

global $sugar_config;
