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
    'LBL_ALL_MODULES' => 'Semua',//rost fix
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
    'LBL_NONINHERITABLE' => 'Tidak diwajibkan',
    'LBL_LIST_NONINHERITABLE' => 'Tidak diwajibkan',
    'LBL_NAME' => 'Nama',
    'LBL_CREATED_USER' => 'Dibuat oleh Pengguna',
    'LBL_MODIFIED_USER' => 'Diubah oleh Pengguna',
    'LBL_LIST_FORM_TITLE' => 'Grup Keamanan',
    'LBL_MODULE_NAME' => 'Manajemen Rangkaian Keamanan',
    'LBL_MODULE_TITLE' => 'Manajemen Rangkaian Keamanan',
    'LNK_NEW_RECORD' => 'Buat sebuah Keamanan Grup',
    'LNK_LIST' => 'Tampilan daftar',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Pengelolaan Keamanan Grup',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Riwayat',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Manajemen Grup Keamanan',
    'LBL_USERS' => 'Pemakai',
    'LBL_USERS_SUBPANEL_TITLE' => 'Pemakai',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Peran',
    'LBL_ROLES' => 'Peran',

    'LBL_CONFIGURE_SETTINGS' => 'Konfigurasi',
    'LBL_ADDITIVE' => 'Hak Tambahan',
    'LBL_ADDITIVE_DESC' => "Pengguna mendapat hak terbesar dari semua peran yang ditugaskan kepada pengguna atau pengguna grup(s)",
    'LBL_STRICT_RIGHTS' => 'Hak Yang Ketat',
    'LBL_STRICT_RIGHTS_DESC' => "Jika pengguna adalah anggota dari beberapa kelompok hanya hak masing-masing dari kelompok yang ditugaskan pada catatan saat ini yang digunakan.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Perang Pengguna Yang Lebih Tinggi',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Jika ada peran ditugaskan secara langsung kepada pengguna peran tersebut harus didahulukan dari pada peran kelompok manapun.',
    'LBL_INHERIT_TITLE' => 'Peraturan-Peraturan Grup Warisan',
    'LBL_INHERIT_CREATOR' => 'Diwarisi dari yang Dibuat Oleh Pengguna',
    'LBL_INHERIT_CREATOR_DESC' => 'Catatan akan mewarisi semua kelompok yang ditugaskan ke pengguna yang membuatnya.',
    'LBL_INHERIT_PARENT' => 'Diwarisi dari Rekaman Induk',
    'LBL_INHERIT_PARENT_DESC' => 'misalnya Jika sebuah kasus dibuat untuk sebuah kontak, kasus akan mewarisi grup-grup yang terkait dengan kontak.',
    'LBL_USER_POPUP' => 'Sembulan Grup Pengguna Baru',
    'LBL_USER_POPUP_DESC' => 'Saat membuat pengguna baru menunjukkan munculan KeamananGrup untuk menetapkan pengguna ke grup(s).',
    'LBL_INHERIT_ASSIGNED' => 'Mewarisi dari Ditugaskan Ke Pengguna',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Catatan akan mewarisi semua kelompok pengguna yang ditugaskan untuk merekam. Kelompok lain yang ditugaskan untuk merekam TIDAK akan dihapus.',
    'LBL_POPUP_SELECT' => 'Pilih Gunakan Pembuat Grup',
    'LBL_POPUP_SELECT_DESC' => 'Saat rekaman dibuat oleh pengguna di lebih dari satu grup tampilkan panel pilihan grup di layar tampilan. Jika tidak mewarisi satu kelompok itu.',
    'LBL_FILTER_USER_LIST' => 'Saring Daftar Pengguna',
    'LBL_FILTER_USER_LIST_DESC' => "Hanya pengguna yang bukan pengelola yang bisa menugaskan kepada para pengguna di grup yang sama",

    'LBL_DEFAULT_GROUP_TITLE' => 'Grup Default untuk Catatan Baru',
    'LBL_ADD_BUTTON_LABEL' => 'Tambah',
    'LBL_REMOVE_BUTTON_LABEL' => 'Menghapus',
    'LBL_GROUP' => 'Grup:',
    'LBL_MODULE' => 'Modul:',

    'LBL_MASS_ASSIGN' => 'Keamanan Grup: Penugasan Massal',
    'LBL_ASSIGN' => 'Pilih [Alt + A]',
    'LBL_REMOVE' => 'Menghapus',
    'LBL_ASSIGN_CONFIRM' => 'Apakah anda yakin bahwa anda ingin menambahkan kelompok ini untuk ',
    'LBL_REMOVE_CONFIRM' => 'Apakah anda yakin bahwa anda ingin menghapus kelompok ini dari ',
    'LBL_CONFIRM_END' => ' Record terpilih ?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Keamanan Grup/Pengguna',
    'LBL_USER_NAME' => 'Nama Pemakai',
    'LBL_SECURITYGROUP_NAME' => 'Nama Keamanan Kelompok',
    'LBL_HOMEPAGE_TITLE' => 'Pesan-Pesan Grup',
    'LBL_TITLE' => 'Gelar',
    'LBL_ROWS' => 'Baris',
    'LBL_POST' => 'Posting',
    'LBL_SELECT_GROUP_ERROR' => 'Silahkan pilih sebuah grup dan coba lagi.',

    'LBL_GROUP_SELECT' => 'Pilih grup mana yang harus memiliki akses ke rekaman ini',
    'LBL_ERROR_DUPLICATE' => 'Berdasarkan kemungkinan duplikasi yang terdeteksi oleh SuiteCRM maka kamu harus menambahkan Keamanan Grup secara manual ke rekaman yang baru saja kamu buat.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'Akun surel inbound',
    'LBL_INBOUND_EMAIL_DESC' => 'Hanya izinkan akses ke akun email jika pengguna termasuk dalam grup yang ditugaskan ke akun email.',
    'LBL_PRIMARY_GROUP' => 'Grup Utama',
    'LBL_CHECKMARK' => 'Tanda centang',

);
