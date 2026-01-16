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
    'ERR_DELETE_RECORD' => 'Tentukan Nomor Record untuk menghapus kontak.',
    'LBL_ACCOUNT_ID' => 'ID Account:',
    'LBL_ACCOUNT_NAME' => 'Nama Akun:',
    'LBL_CAMPAIGN' => 'Kampanye:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_ADDRESS_INFORMATION' => 'Informasi Alamat',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatif Alamat Kota:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatif Alamat Negara:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatif Alamat Kode Pos:',
    'LBL_ALT_ADDRESS_STATE' => 'Alamat Negara Lain:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Jalan Alamat Alternatif 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Jalan Alamat Alternatif 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatif Alamat Jalan:',
    'LBL_ALTERNATE_ADDRESS' => 'Alamat Lain:',
    'LBL_ALT_ADDRESS' => 'Alamat Lain:',
    'LBL_ANY_ADDRESS' => 'Alamat Apapun:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ANY_PHONE' => 'Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan Untuk:',
    'LBL_ASSIGNED_TO_ID' => 'Pengguna yang ditugaskan',
    'LBL_ASSISTANT_PHONE' => 'Asisten Telepon:',
    'LBL_ASSISTANT' => 'Asisten:',
    'LBL_BIRTHDATE' => 'Tanggal Lahir:',
    'LBL_CITY' => 'Kota:',
    'LBL_CAMPAIGN_ID' => 'Kampanye ID',
    'LBL_CONTACT_INFORMATION' => 'Informasi account', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nma Kontak',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontak peluang:',
    'LBL_CONTACT_ROLE' => 'Peran',
    'LBL_CONTACT' => 'Kontak',
    'LBL_COUNTRY' => 'Negara:',
    'LBL_CREATED_ACCOUNT' => 'Buat account baru',
    'LBL_CREATED_CALL' => 'Dibuat panggilan baru',
    'LBL_CREATED_CONTACT' => 'Dibuat kontak baru',
    'LBL_CREATED_MEETING' => 'Dibuat pertemuan baru',
    'LBL_CREATED_OPPORTUNITY' => 'Dibuat Peluang baru',
    'LBL_DATE_MODIFIED' => 'Tanggal Modifikasi:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontak',
    'LBL_DEPARTMENT' => 'Departemen:',
    'LBL_DESCRIPTION' => 'Deskripsi:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Laporan Langsung',
    'LBL_DO_NOT_CALL' => 'tidak ada panggilan:',
    'LBL_DUPLICATE' => 'Kemungkinan Gandakan Kontak',
    'LBL_EMAIL_ADDRESS' => 'Alamat Surel:',
    'LBL_EMAIL_OPT_OUT' => 'Email Keluar',
    'LBL_EXISTING_ACCOUNT' => 'Digunakan account yang ada',
    'LBL_EXISTING_CONTACT' => 'Digunakan kontak yang sudah ada',
    'LBL_EXISTING_OPPORTUNITY' => 'Digunakan Peluang yang ada',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nama Pertama:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Riwayat',
    'LBL_HOME_PHONE' => 'Halaman:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Impor vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'otomatis membuat kontak baru dengan mengimpor vCard dari sistem file Anda.',
    'LBL_INVALID_EMAIL' => 'Email tidak valid',
    'LBL_INVITEE' => 'Laporan Langsung',
    'LBL_LAST_NAME' => 'Nama akhir:',
    'LBL_LEAD_SOURCE' => 'Sumber Lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Terima Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Nama Akun',
    'LBL_LIST_CONTACT_NAME' => 'Nama Kontak',
    'LBL_LIST_CONTACT_ROLE' => 'Peran',
    'LBL_LIST_EMAIL_ADDRESS' => 'Surel',
    'LBL_LIST_FIRST_NAME' => 'Nama Pertama',
    'LBL_LIST_FORM_TITLE' => 'Daftar Kontak',
    'LBL_LIST_LAST_NAME' => 'Nama Terakhir',
    'LBL_LIST_NAME' => 'Nama',
    'LBL_LIST_PHONE' => 'Telepon Kantor',
    'LBL_LIST_TITLE' => 'Pekerjaan',
    'LBL_MOBILE_PHONE' => 'Handphone:',
    'LBL_MODIFIED' => 'Diubah Oleh:',
    'LBL_MODULE_NAME' => 'Kontak',
    'LBL_MODULE_TITLE' => 'Kontak: Home',
    'LBL_NAME' => 'Nama:',
    'LBL_NEW_FORM_TITLE' => 'Kontak Baru',
    'LBL_NOTE_SUBJECT' => 'Catatan Subjek',
    'LBL_OFFICE_PHONE' => 'Telepon Kantor:',
    'LBL_OPP_NAME' => 'Nama Peluang:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Peluang Peran ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Peran yang sesuai',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Surel lainnya:',
    'LBL_OTHER_PHONE' => 'Telepon Lain:',
    'LBL_PHONE' => 'Telepon:',
    'LBL_PORTAL_APP' => 'Portal Aplikasi:',
    'LBL_PORTAL_INFORMATION' => 'Portal Informasi',
    'LBL_PORTAL_NAME' => 'Portal Nama:',
    'LBL_STREET' => 'Alamat Jalan',
    'LBL_POSTAL_CODE' => 'Kode Pos:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Alamat Utama Kota:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Negara Alamat Utama:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Kode Pos Utama:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Alamat Utama Negara Bagian:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Jalan Alamat Utama 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Jalan Alamat Utama 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Alamat Utama:',
    'LBL_PRIMARY_ADDRESS' => 'Alamat Utama:',
    'LBL_PRODUCTS_TITLE' => 'Produk',
    'LBL_REPORTS_TO_ID' => 'Laporan ke ID:',
    'LBL_REPORTS_TO' => 'Laporan Untuk:',
    'LBL_RESOURCE_NAME' => 'Nama Sumber daya',
    'LBL_SALUTATION' => 'Penghormatan:',
    'LBL_SAVE_CONTACT' => 'Simpan Kontak',
    'LBL_SEARCH_FORM_TITLE' => 'Cari kontak',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pilih Cek Contacts',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Pilih Cek Contacts',
    'LBL_STATE' => 'Negara atau Wilayah:',
    'LBL_SYNC_CONTACT' => 'Sync ke Outlook:',
    'LBL_PROSPECT_LIST' => 'Daftar Prospek',
    'LBL_TITLE' => 'Pekerjaan:',
    'LNK_CONTACT_LIST' => 'Lihat Kontak',
    'LNK_IMPORT_VCARD' => 'Buat Kontak Dari vCard',
    'LNK_NEW_ACCOUNT' => 'Buat Account',
    'LNK_NEW_APPOINTMENT' => 'Membuat Janji Temu',
    'LNK_NEW_CALL' => 'Jadwal Panggilan',
    'LNK_NEW_CASE' => 'Buat Kasus',
    'LNK_NEW_CONTACT' => 'Buat Kontak',
    'LNK_NEW_EMAIL' => 'Arsip Email',
    'LNK_NEW_MEETING' => 'Jadwal Rapat',
    'LNK_NEW_NOTE' => 'Buat Catatan',
    'LNK_NEW_OPPORTUNITY' => 'Buat Peluang',
    'LNK_NEW_TASK' => 'Buat Tugas',
    'LNK_SELECT_ACCOUNT' => "Pilih Acccount",
    'NTC_DELETE_CONFIRMATION' => 'Apakah Anda yakin ingin menghapus data ini?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Membuat Peluang memerlukan account. Harap membuat account baru atau pilih yang sudah ada.',
    'NTC_REMOVE_CONFIRMATION' => 'Apakah anda yakin ingin menghapus kontak dari kasus ini?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Peluang',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumen',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Salin ke Alamat Utama',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Salin ke Alamat Lain',

    'LBL_CASES_SUBPANEL_TITLE' => 'Kasus',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Kerusakan',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyek',
    'LBL_PROJECTS_RESOURCES' => 'Sumber Proyek',
    'LBL_CAMPAIGNS' => 'Kampanye',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanye',
    'LBL_LIST_CITY' => 'Kota',
    'LBL_LIST_STATE' => 'Negara',
    'LBL_HOMEPAGE_TITLE' => 'Kontak saya',
    'LBL_OPPORTUNITIES' => 'Peluang',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyek',
    'LNK_IMPORT_CONTACTS' => 'Import Kontak',

    // SNIP
    'LBL_USER_SYNC' => 'User Sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Acara',

    'LBL_AOP_CASE_UPDATES' => 'Pembaharuan Kasus',
    'LBL_CREATE_PORTAL_USER' => 'Buat Pengguna Portal',
    'LBL_ENABLE_PORTAL_USER' => 'Aktifkan Pengguna Portal',
    'LBL_DISABLE_PORTAL_USER' => 'Nonaktifkan Pengguna Portal',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Gagal membuat pengguna portal',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Gagal mengaktifkan pengguna portal',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Gagal menonaktifkan pengguna portal',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Dibuat pengguna portal',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Diaktifkan pengguna portal',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Pengguna portal penyandang cacat',
    'LBL_NO_JOOMLA_URL' => 'Tidak ada URL portal yang ditentukan',
    'LBL_PORTAL_USER_TYPE' => 'Tipe pengguna portal',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Akun Dinonaktifkan',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID Akun Joomla',

    'LBL_AOS_CONTRACTS' => 'Kontrak',
    'LBL_AOS_INVOICES' => 'Faktur',
    'LBL_AOS_QUOTES' => 'Penawaran',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Kontak Proyek dari Judul Proyek',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'Status Undang',
);
