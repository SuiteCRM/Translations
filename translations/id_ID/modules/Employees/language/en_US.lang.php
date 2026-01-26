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
    'LBL_MODULE_NAME' => 'Karyawan',
    'LBL_MODULE_TITLE' => 'Karyawan: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Pencarian karyawan',
    'LBL_LIST_FORM_TITLE' => 'Karyawan',
    'LBL_NEW_FORM_TITLE' => 'Karyawan',
    'LBL_LOGIN' => 'Masuk',
    'LBL_RESET_PREFERENCES' => 'Reset Untuk Default Preferensi',
    'LBL_TIME_FORMAT' => 'Format Waktu:',
    'LBL_DATE_FORMAT' => 'Format Tanggal:',
    'LBL_TIMEZONE' => 'Waktu saat ini:',
    'LBL_CURRENCY' => 'Mata Uang:',
    'LBL_LIST_NAME' => 'Nama',
    'LBL_LIST_LAST_NAME' => 'Nama Terakhir',
    'LBL_LIST_EMPLOYEE_NAME' => 'Nama Karyawan',
    'LBL_LIST_DEPARTMENT' => 'Departemen',
    'LBL_LIST_REPORTS_TO_NAME' => 'Laporkan ke',
    'LBL_LIST_EMAIL' => 'Surel',
    'LBL_LIST_USER_NAME' => 'Nama Pemakai',
    'LBL_ERROR' => 'Error Mengirim Email:',
    'LBL_PASSWORD' => 'Kata sandi:',
    'LBL_USER_NAME' => 'Nama Pengguna:',
    'LBL_USER_TYPE' => 'Jenis Pengguna',
    'LBL_FIRST_NAME' => 'Nama Pertama:',
    'LBL_LAST_NAME' => 'Nama akhir:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Bahasa:',
    'LBL_ADMIN' => 'Pengurus:',
    'LBL_EMPLOYEE_INFORMATION' => 'Informasi Karyawan',
    'LBL_OFFICE_PHONE' => 'Telepon Kantor:',
    'LBL_REPORTS_TO' => 'Laporan untuk Id:',
    'LBL_REPORTS_TO_NAME' => 'Laporan untuk',
    'LBL_OTHER_PHONE' => 'Telepon Lain:',
    'LBL_NOTES' => 'Catatan:',
    'LBL_DEPARTMENT' => 'Departemen:',
    'LBL_TITLE' => 'Pekerjaan:',
    'LBL_ANY_ADDRESS' => 'Alamat Apapun:',
    'LBL_ANY_PHONE' => 'Phone:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ADDRESS' => 'Alamat:',
    'LBL_CITY' => 'Kota:',
    'LBL_STATE' => 'Negara atau Wilayah:',
    'LBL_POSTAL_CODE' => 'Kode Pos:',
    'LBL_COUNTRY' => 'Negara:',
    'LBL_NAME' => 'Nama:',
    'LBL_MOBILE_PHONE' => 'Handphone:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Alamat Surel:',
    'LBL_EMAIL_LINK_TYPE' => 'Klien Email',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Klien Email SuiteCRM:</b> Kirim email menggunakan klien email di aplikasi SuiteCRM.<br> <b>Klien Surat Eksternal:</b> Kirim email menggunakan klien email di luar aplikasi SuiteCRM, seperti Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Telepon Rumah:',
    'LBL_WORK_PHONE' => 'Telepon kerja:',
    'LBL_EMPLOYEE_STATUS' => 'Status Karyawan:',
    'LBL_PRIMARY_ADDRESS' => 'Alamat Utama:',
    'LBL_SAVED_SEARCH' => 'Layout dan Pencarian Tersimpan',
    'LBL_MESSENGER_ID' => 'Nama IM:',
    'LBL_MESSENGER_TYPE' => 'Jenis IM:',
    'ERR_LAST_ADMIN_1' => 'Nama Karyawan"',
    'ERR_LAST_ADMIN_2' => '" apakah karyawan terakhir memiliki akses administrator. Setidaknya satu karyawan harus menjadi administrator.',
    'LNK_NEW_EMPLOYEE' => 'Buat Karyawan',
    'LNK_EMPLOYEE_LIST' => 'Lihat Karyawan',
    'ERR_DELETE_RECORD' => 'Anda harus menentukan No Record untuk menghapus account.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status Karyawan',

    'LBL_SUITE_LOGIN' => 'Adalah Pengguna',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Beritahu dalam Tugas',
    'LBL_IS_ADMIN' => 'Apakah Administrator',
    'LBL_GROUP' => 'Grup Pengguna',
    'LBL_PHOTO' => 'Foto',
    'LBL_DELETE_USER_CONFIRM' => 'Karyawan ini juga Pengguna. Menghapus catatan Karyawan juga akan menghapus catatan Pengguna, dan Pengguna tidak akan lagi dapat mengakses aplikasi. Apakah anda ingin melanjutkan dengan menghapus catatan ini?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Apakah anda yakin anda ingin menghapus karyawan ini?',
    'LBL_ONLY_ACTIVE' => 'Karyawan-karyawan Aktif',
    'LBL_SELECT' => 'Pilih [Alt+T]' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Id otentikasi',
    'LBL_EXT_AUTHENTICATE' => 'Otentikasi Eksternal',
    'LBL_GROUP_USER' => 'Grup Pengguna',
    'LBL_LIST_ACCEPT_STATUS' => 'Terima Status',
    'LBL_MODIFIED_BY' => 'Diubah Oleh',
    'LBL_MODIFIED_BY_ID' => 'Modifikasi berdasarkan ID',
    'LBL_CREATED_BY_NAME' => 'Dibuat Oleh', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'API Portal Pengguna',
    'LBL_PSW_MODIFIED' => 'Password Terakhir Berubah',
    'LBL_SHOW_ON_EMPLOYEES' => 'Tampilkan Catatan Karyawan',
    'LBL_USER_HASH' => 'Kata sandi',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'System Generated Password',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Alamat Kota',
    'LBL_ADDRESS_COUNTRY' => 'Alamat Negara',
    'LBL_ADDRESS_INFORMATION' => 'Informasi Alamat',
    'LBL_ADDRESS_POSTALCODE' => 'Alamat Kode Pos',
    'LBL_ADDRESS_STATE' => 'Alamat negara',
    'LBL_ADDRESS_STREET' => 'Alamat Jalan',

    'LBL_DATE_MODIFIED' => 'Tanggal dibuat',
    'LBL_DATE_ENTERED' => 'Tanggal dimasukkan',
    'LBL_DELETED' => 'Dihapus',

    'LBL_BUTTON_SELECT' => 'Pilih [Alt+T]',
    'LBL_BUTTON_CLEAR' => 'Bersihkan [Alt+C]',

    'LBL_CONTACTS_SYNC' => 'Penyelarasan Kontak',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Pengguna Proyek dari Judul Proyek',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Proyek Kontak dari Kontak Judul',
    'LBL_ROLES' => 'Peran',
    'LBL_SECURITYGROUPS' => 'Grup Keamanan',
    'LBL_PROSPECT_LIST' => 'Daftar Prospek',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Dua Komponen Otentikasi Interface:',
    'LBL_EDITOR_TYPE' => 'Penyunting',
);
