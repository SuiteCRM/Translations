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
    'LBL_MODULE_NAME' => 'Target',
    'LBL_MODULE_ID' => 'Target',
    'LBL_INVITEE' => 'Laporan Langsung',
    'LBL_MODULE_TITLE' => 'Target: Depan',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Target',
    'LBL_LIST_FORM_TITLE' => 'Daftar Target',
    'LBL_NEW_FORM_TITLE' => 'Target baru',
    'LBL_LIST_NAME' => 'Nama',
    'LBL_LIST_LAST_NAME' => 'Nama Terakhir',
    'LBL_LIST_TITLE' => 'Pekerjaan',
    'LBL_LIST_EMAIL_ADDRESS' => 'Surel',
    'LBL_LIST_PHONE' => 'Telepon',
    'LBL_LIST_FIRST_NAME' => 'Nama Pertama',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada',
    'LBL_ASSIGNED_TO_ID' => 'Ditugaskan Kepada ID:',
    'LBL_CAMPAIGN_ID' => 'Kampanye ID',
    'LBL_EXISTING_ACCOUNT' => 'Digunakan account yang ada',
    'LBL_CREATED_ACCOUNT' => 'Buat account baru',
    'LBL_CREATED_CALL' => 'Dibuat panggilan baru',
    'LBL_CREATED_MEETING' => 'Dibuat pertemuan baru',
    'LBL_NAME' => 'Nama:',
    'LBL_PROSPECT_INFORMATION' => 'Informasi account', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Informasi Lebih Lanjut',
    'LBL_FIRST_NAME' => 'Nama Pertama:',
    'LBL_OFFICE_PHONE' => 'Telepon Kantor:',
    'LBL_ANY_PHONE' => 'Phone:',
    'LBL_PHONE' => 'Telepon:',
    'LBL_LAST_NAME' => 'Nama akhir:',
    'LBL_MOBILE_PHONE' => 'Handphone:',
    'LBL_HOME_PHONE' => 'Halaman:',
    'LBL_OTHER_PHONE' => 'Telepon Lain:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Alamat Utama:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Alamat Utama Kota:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Negara Alamat Utama:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Alamat Utama Negara Bagian:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Kode Pos Utama:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatif Alamat Jalan:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatif Alamat Kota:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatif Alamat Negara:',
    'LBL_ALT_ADDRESS_STATE' => 'Alamat Negara Lain:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatif Alamat Kode Pos:',
    'LBL_TITLE' => 'Pekerjaan:',
    'LBL_DEPARTMENT' => 'Departemen:',
    'LBL_BIRTHDATE' => 'Tanggal Lahir:',
    'LBL_EMAIL_ADDRESS' => 'Alamat Surel:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Surel lainnya:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ASSISTANT' => 'Asisten:',
    'LBL_ASSISTANT_PHONE' => 'Asisten Telepon:',
    'LBL_DO_NOT_CALL' => 'tidak ada panggilan:',
    'LBL_EMAIL_OPT_OUT' => 'Email Keluar',
    'LBL_PRIMARY_ADDRESS' => 'Alamat Utama:',
    'LBL_ALTERNATE_ADDRESS' => 'Alamat Lain:',
    'LBL_ANY_ADDRESS' => 'Alamat Apapun:',
    'LBL_CITY' => 'Kota:',
    'LBL_STATE' => 'Negara atau Wilayah:',
    'LBL_POSTAL_CODE' => 'Kode Pos:',
    'LBL_COUNTRY' => 'Negara:',
    'LBL_ADDRESS_INFORMATION' => 'Informasi Alamat',
    'LBL_DESCRIPTION' => 'Deskripsi:',
    'LBL_OPP_NAME' => 'Nama Peluang:',
    'LBL_IMPORT_VCARD' => 'Impor vCard',
    'LBL_IMPORT_VCARDTEXT' => 'otomatis membuat kontak baru dengan mengimpor vCard dari sistem file Anda.',
    'LBL_DUPLICATE' => 'Kemungkinan adanya Duplikat Target',
    'MSG_SHOW_DUPLICATES' => 'Record Target yang akan Anda mungkin merupakan duplikat dari Record Target yang sudah ada. Record Target berisi nama yang mirip dan/atau alamat email tercantum di bawah ini. <br> Klik Simpan untuk melanjutkan membuat target baru ini, atau klik Batal untuk kembali ke modul tanpa menciptakan target. ',
    'MSG_DUPLICATE' => 'Record Target yang akan Anda mungkin merupakan duplikat dari Record Target yang sudah ada. Record Target berisi nama yang mirip dan/atau alamat email tercantum di bawah ini. <br> Klik Simpan untuk melanjutkan membuat target baru ini, atau klik Batal untuk kembali ke modul tanpa menciptakan target. ',
    'LNK_IMPORT_VCARD' => 'Buat dari vCard',
    'LNK_NEW_ACCOUNT' => 'Buat Account',
    'LNK_NEW_OPPORTUNITY' => 'Buat Peluang',
    'LNK_NEW_CASE' => 'Buat Kasus',
    'LNK_NEW_NOTE' => 'Membuat Catatan atau Lampiran',
    'LNK_NEW_CALL' => 'Jadwal Panggilan',
    'LNK_NEW_EMAIL' => 'Arsip Email',
    'LNK_NEW_MEETING' => 'Jadwal Rapat',
    'LNK_NEW_TASK' => 'Buat Tugas',
    'LNK_NEW_APPOINTMENT' => 'Membuat Janji Temu',
    'LNK_IMPORT_PROSPECTS' => 'Impor Prospek',
    'NTC_DELETE_CONFIRMATION' => 'Apakah Anda yakin ingin menghapus data ini?',
    'NTC_REMOVE_CONFIRMATION' => 'Apakah anda yakin ingin menghapus kontak dari kasus ini?',
    'ERR_DELETE_RECORD' => 'Sejumlah catatan harus ditentukan untuk menghapus kontak.',
    'LBL_SALUTATION' => 'Salam',
    'LBL_CREATED_OPPORTUNITY' => 'Dibuat Peluang baru',
    'LNK_SELECT_ACCOUNT' => "Pilih Acccount",
    'LNK_NEW_PROSPECT' => 'Buat Target',
    'LNK_PROSPECT_LIST' => 'Target',
    'LNK_NEW_CAMPAIGN' => 'Buat Promosi',
    'LNK_CAMPAIGN_LIST' => 'Kampanye',
    'LNK_NEW_PROSPECT_LIST' => 'Buat daftar Target',
    'LNK_PROSPECT_LIST_LIST' => 'Daftar Sasaran',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pilih Target yang dicek',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Pilih Target yang dicek',
    'LBL_INVALID_EMAIL' => 'Email tidak valid',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Target',
    'LBL_PROSPECT_LIST' => 'Daftar Prospek',
    'LBL_CONVERT_BUTTON_TITLE' => 'Konversi Target',
    'LBL_CONVERT_BUTTON_LABEL' => 'Konversi Target',
    'LNK_NEW_CONTACT' => 'Kontak Baru',
    'LBL_CREATED_CONTACT' => "Dibuat kontak baru",
    'LBL_CAMPAIGNS' => 'Kampanye',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Log Kampanye',
    'LBL_TRACKER_KEY' => 'Kunci Pelacak',
    'LBL_LEAD_ID' => 'Id Petunjuk',
    'LBL_CONVERTED_LEAD' => 'Lead Dikonversi',
    'LBL_ACCOUNT_NAME' => 'Nama Akun',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nama Akun:',
    'LBL_CREATED_USER' => 'Membuat Pengguna',
    'LBL_MODIFIED_USER' => 'Mengubah pengguna',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Riwayat',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Acara',
);
