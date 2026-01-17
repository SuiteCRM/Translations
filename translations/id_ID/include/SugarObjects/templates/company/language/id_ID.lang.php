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
    'ERR_DELETE_RECORD' => 'Sebuah "Record number" harus ditentukan untuk menghapus account.',
    'LBL_ACCOUNT_NAME' => 'Nama Account:',
    'LBL_ACCOUNT' => 'Account:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_ADDRESS_INFORMATION' => 'Informasi Alamat',
    'LBL_ANNUAL_REVENUE' => 'Pendapatan Tahunan:',
    'LBL_ANY_ADDRESS' => 'Alamat Apapun:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_EMAIL_NON_PRIMARY' => 'Bukan E-mail utama',
    'LBL_ANY_PHONE' => 'Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Pengguna:',
    'LBL_RATING' => 'Peringkat',
    'LBL_ASSIGNED_TO' => 'Ditugaskan Untuk:',
    'LBL_ASSIGNED_USER' => 'Ditugaskan Untuk:',
    'LBL_ASSIGNED_TO_ID' => 'Ditugaskan Untuk:',
    'LBL_BILLING_ADDRESS_CITY' => 'Kota Penagihan:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Negara Penagihan:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Kode Pos Penagihan:',
    'LBL_BILLING_ADDRESS_STATE' => 'Provinsi Penagihan:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Jalan Penagihan 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Jalan Penagihan 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Jalan Penagihan 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Jalan Penagihan:',
    'LBL_BILLING_ADDRESS' => 'Alamat Penagihan:',
    'LBL_ACCOUNT_INFORMATION' => 'Informasi Perusahaan',
    'LBL_CITY' => 'Kota:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_COUNTRY' => 'Negara:',
    'LBL_DATE_ENTERED' => 'Tanggal dibuat:',
    'LBL_DATE_MODIFIED' => 'Tanggal Modifikasi:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Akun',
    'LBL_DESCRIPTION_INFORMATION' => 'Deskripsi Informasi',
    'LBL_DESCRIPTION' => 'Deskripsi:',
    'LBL_DUPLICATE' => 'Mengijinkan Adanya Duplikasi terhadap Akun',
    'LBL_EMAIL' => 'Alamat Surel:',
    'LBL_EMPLOYEES' => 'Karyawan:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industri:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nama Akun',
    'LBL_LIST_CITY' => 'Kota',
    'LBL_LIST_EMAIL_ADDRESS' => 'Alamat Surel',
    'LBL_LIST_PHONE' => 'Telepon',
    'LBL_LIST_STATE' => 'Negara',
    'LBL_MEMBER_OF' => 'Anggota Dari:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Anggota Organisasi',
    'LBL_NAME' => 'Nama:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Surel lainnya:',
    'LBL_OTHER_PHONE' => 'Telepon Lain:',
    'LBL_OWNERSHIP' => 'Kepemilikan:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID akun orang tua',
    'LBL_PHONE_ALT' => 'Telepon Alternatif:',
    'LBL_PHONE_FAX' => 'No. Fax:',
    'LBL_PHONE_OFFICE' => 'Telepon Kantor:',
    'LBL_PHONE' => 'Telepon:',
    'LBL_EMAIL_ADDRESS' => 'Alamat Surel',
    'LBL_EMAIL_ADDRESSES' => 'Alamat Surel',
    'LBL_POSTAL_CODE' => 'Kode Pos:',
    'LBL_SAVE_ACCOUNT' => 'Simpan Account',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Nama Kota Pengiriman:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Nama Negara Pengiriman:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Kode Pos Pengiriman',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Nama Provinsi Pengiriman:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Nama Jalan Pengiriman 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Nama Jalan Pengiriman 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Nama Jalan Pengiriman 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Nama Jalan Pengiriman:',
    'LBL_SHIPPING_ADDRESS' => 'Alamat Pengiriman:',

    'LBL_STATE' => 'Negara:',
    'LBL_TICKER_SYMBOL' => 'Simbol Ticker:',
    'LBL_TYPE' => 'Jenis:',
    'LBL_WEBSITE' => 'Situs Web:',

    'LNK_ACCOUNT_LIST' => 'Akun',
    'LNK_NEW_ACCOUNT' => 'Buat Account',

    'MSG_DUPLICATE' => 'Membuat account ini mungkin berpotensi membuat account duplikat. Anda dapat juga memilih salah satu account dari daftar di bawah ini atau Anda dapat mengklik Simpan untuk melanjutkan membuat account baru dengan data yang dimasukkan sebelumnya.',
    'MSG_SHOW_DUPLICATES' => 'Membuat account ini mungkin berpotensi membuat account duplikat. Anda dapat klik Save untuk melanjutkan membuat account baru ini dengan data yang dimasukkan sebelumnya atau Anda dapat klik Batal.',

    'NTC_DELETE_CONFIRMATION' => 'Apakah Anda yakin ingin menghapus data ini?',

    'LBL_EDIT_BUTTON' => 'Sunting  ',
    'LBL_REMOVE' => 'Menghapus',

);
