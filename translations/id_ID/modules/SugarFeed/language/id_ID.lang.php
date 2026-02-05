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
    'LBL_ASSIGNED_TO_ID' => 'ID Pengguna yang di-assign :',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Tanggal dibuat',
    'LBL_DATE_MODIFIED' => 'Tanggal dibuat',
    'LBL_MODIFIED' => 'Diubah Oleh',
    'LBL_MODIFIED_NAME' => 'Diubah oleh Nama',
    'LBL_CREATED' => 'Dibuat Oleh',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_DELETED' => 'Dihapus',
    'LBL_NAME' => 'Nama',
    'LBL_SAVING' => 'Menyimpan...',
    'LBL_SAVED' => 'Tersimpan',
    'LBL_CREATED_USER' => 'Dibuat oleh Pengguna',
    'LBL_MODIFIED_USER' => 'Diubah oleh Pengguna',
    'LBL_LIST_FORM_TITLE' => 'Daftar Feed SuiteCRM',
    'LBL_MODULE_NAME' => 'SuiteCRM Feed',
    'LBL_MODULE_TITLE' => 'SuiteCRM Feed',
    'LBL_DASHLET_DISABLED' => 'Peringatan: SuiteCRM Feed sistem dinonaktifkan, tidak ada entri feed baru yang akan ditampilan sampai diaktifkan',
    'LBL_RECORDS_DELETED' => 'Semua Feed SuiteCRM sebelumnya telah dihapus, jika sistem Feed SuiteCRM diaktifkan, entri baru akan dihasilkan secara otomatis.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Apakah Anda yakin Anda ingin menghapus semua entri Feed SuiteCRM?',
    'LBL_FLUSH_RECORDS' => 'Hapus Feed Entries',
    'LBL_ENABLE_FEED' => 'Aktifkan Feed SuiteCRM',
    'LBL_ENABLE_MODULE_LIST' => 'Aktifkan Feed Untuk',
    'LBL_HOMEPAGE_TITLE' => 'Feed SuiteCRM saya',
    'LNK_NEW_RECORD' => 'Buat Feed SuiteCRM',
    'LNK_LIST' => 'Umpan',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Feed SuiteCRM',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lihat Histori',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_NEW_FORM_TITLE' => 'Feed SuiteCRM baru',
    'LBL_ALL' => 'Semua',
    'LBL_USER_FEED' => 'User Feed',
    'LBL_ENABLE_USER_FEED' => 'Aktifkan User Feed',
    'LBL_TO' => 'Kirim Ke',
    'LBL_IS' => 'adalah',
    'LBL_DONE' => 'Selesai',
    'LBL_TITLE' => 'Gelar',
    'LBL_ROWS' => 'Baris',
    'LBL_CATEGORIES' => 'Modul',
    'LBL_TIME_LAST_WEEK' => 'Minggu terakhir',
    'LBL_TIME_WEEKS' => 'minggu',
    'LBL_TIME_DAYS' => 'hari',
    'LBL_TIME_YESTERDAY' => 'Kemarin',
    'LBL_TIME_HOURS' => 'Jam',
    'LBL_TIME_HOUR' => 'Jam',
    'LBL_TIME_MINUTES' => 'Menit',
    'LBL_TIME_MINUTE' => 'Menit',
    'LBL_TIME_SECONDS' => 'detik',
    'LBL_TIME_SECOND' => 'Kedua',
    'LBL_TIME_AND' => 'dan',
    'LBL_TIME_AGO' => 'lalu',
// Activity stream
    'CREATED_CONTACT' => 'membuat sebuah {0} <b>Baru</b>',
    'CREATED_OPPORTUNITY' => 'membuat sebuah {0} <b>Baru</b>',
    'CREATED_CASE' => 'membuat sebuah {0} <b>Baru</b>',
    'CREATED_LEAD' => 'membuat sebuah {0} <b>Baru</b>',
    'FOR' => 'Untuk', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>TUTUP</b> a {0} ',
    'CONVERTED_LEAD' => '<b>yang dikonversi</b> a {0}',
    'WON_OPPORTUNITY' => '<b>menang</b> a {0}',
    'WITH' => 'dengan',

    'LBL_LINK_TYPE_Link' => 'Tautan',
    'LBL_LINK_TYPE_Image' => 'Gambar',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Pilih [Alt+T]',
    'LBL_POST' => 'Posting',
    'LBL_AUTHENTICATE' => 'Hubungkan ke',
    'LBL_AUTHENTICATION_PENDING' => 'Tidak semua dari eksternal akun yang telah anda pilih telah dikonfirmasi. Klik \'Cancel\' untuk kembali ke jendela Pilihan untuk mengotentikasi account eksternal, atau klik \'Ok\' untuk melanjutkan tanpa otentikasi.',
    'LBL_ADVANCED_SEARCH' => 'Penyaringan Lanjutan' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Tampilkan Pilihan Lainnya',
    'LBL_HIDE_OPTIONS' => 'Sembunyikan Pilihan',
    'LBL_VIEW' => 'Lihat',
    'LBL_POST_TITLE' => 'Post Status Update for ',
    'LBL_URL_LINK_TITLE' => 'URL Link to use',
);
