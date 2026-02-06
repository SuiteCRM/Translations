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
    'ERR_DELETE_RECORD' => 'Nomor Record harus ditentukan sebelum menghapus Account',
    'LBL_ACCOUNT_NAME' => 'Nama Account:',
    'LBL_ACCOUNT' => 'Account:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitas',
    'LBL_ADDRESS_INFORMATION' => 'Informasi alamat',
    'LBL_ANNUAL_REVENUE' => 'Pemasukan Per Tahun:',
    'LBL_ANY_ADDRESS' => 'Setiap Alamat:',
    'LBL_ANY_EMAIL' => 'Setiap Email:',
    'LBL_EMAIL_NON_PRIMARY' => 'Bukan E-mail utama',
    'LBL_ANY_PHONE' => 'Telepon Apapun:',
    'LBL_ASSIGNED_TO_NAME' => 'Pengguna:',
    'LBL_RATING' => 'Peringkat',
    'LBL_ASSIGNED_TO' => 'Menugaskan ke:',
    'LBL_ASSIGNED_USER' => 'Menugaskan ke:',
    'LBL_ASSIGNED_TO_ID' => 'Menugaskan ke:',
    'LBL_BILLING_ADDRESS_CITY' => 'Kota Penagihan:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Negara Penagihan:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Kode Pos  Penagihan:',
    'LBL_BILLING_ADDRESS_STATE' => 'Provinsi Penagihan:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Alamat Penagihan 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Alamat Penagihan 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Alamat Penagihan 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Alamat Penagihan:',
    'LBL_BILLING_ADDRESS' => 'Alamat Penagihan:',
    'LBL_ACCOUNT_INFORMATION' => 'Informasi Perusahaan',
    'LBL_CITY' => 'Kota:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_COUNTRY' => 'Negara:',
    'LBL_DATE_ENTERED' => 'Tanggal Dibuat:',
    'LBL_DATE_MODIFIED' => 'Tanggal Diubah:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Akun',
    'LBL_DESCRIPTION_INFORMATION' => 'Informasi Deskripsi',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_DUPLICATE' => 'Kemungkinan menggandakan Account',
    'LBL_EMAIL' => 'Alamat Surel:',
    'LBL_EMPLOYEES' => 'Karyawan:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industri',
    'LBL_LIST_ACCOUNT_NAME' => 'Nama Akun',
    'LBL_LIST_CITY' => 'Kota',
    'LBL_LIST_EMAIL_ADDRESS' => 'Alamat Surel',
    'LBL_LIST_PHONE' => 'Telp',
    'LBL_LIST_STATE' => 'Negara',
    'LBL_MEMBER_OF' => 'Anggota dari:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Anggota Organisasi',
    'LBL_NAME' => 'Nama:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Surel lainnya:',
    'LBL_OTHER_PHONE' => 'Telepon Lainnya:',
    'LBL_OWNERSHIP' => 'Status Kepemilikan:',
    'LBL_PARENT_ACCOUNT_ID' => 'Induk Account ID',
    'LBL_PHONE_ALT' => 'Telepon Alternatif:',
    'LBL_PHONE_FAX' => 'No Fax:',
    'LBL_PHONE_OFFICE' => 'Telepon Kantor:',
    'LBL_PHONE' => 'Telepon:',
    'LBL_EMAIL_ADDRESS' => 'Alamat Surel',
    'LBL_EMAIL_ADDRESSES' => 'Alamat Surel',
    'LBL_POSTAL_CODE' => 'Kode Pos:',
    'LBL_SAVE_ACCOUNT' => 'Simpan Account',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Kota Pengiriman:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Negara Pengiriman:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Kode Pos Pengiriman:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Provinsi Pengiriman:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Alamat Pengiriman 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Alamat Pengiriman 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Alamat Pengiriman 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Alamat Pengiriman:',
    'LBL_SHIPPING_ADDRESS' => 'Alamat Pengiriman 2:',

    'LBL_STATE' => 'Negara:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol',
    'LBL_TYPE' => 'Tipe:',
    'LBL_WEBSITE' => 'Situs Web:',

    'LNK_ACCOUNT_LIST' => 'Akun',
    'LNK_NEW_ACCOUNT' => 'Buat Account',

    'MSG_DUPLICATE' => 'Record Account yang dibuat bisa jadi merupakan duplikasi dari record account yang sudah ada. Record Account yang memiliki nama yang mirip ditampilkan di bawah. Klik Save untuk melanjutkan dengan membuat account yang baru ini, atau kik Cancel untuk kembali pada module tanpa membuat account.',
    'MSG_SHOW_DUPLICATES' => 'Record Account yang dibuat bisa jadi merupakan duplikasi dari record account yang sudah ada. Record Account yang memiliki nama yang mirip ditampilkan di bawah. Klik Save untuk melanjutkan dengan membuat account yang baru ini, atau kik Cancel untuk kembali pada module tanpa membuat account.',

    'NTC_DELETE_CONFIRMATION' => 'Anda yakin mau menghapus record ini?',

    'LBL_EDIT_BUTTON' => 'Sunting  ',
    'LBL_REMOVE' => 'Menghapus',

);
