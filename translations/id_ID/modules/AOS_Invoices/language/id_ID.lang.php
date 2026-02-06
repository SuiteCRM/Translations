<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_ASSIGNED_TO_ID' => 'ID Pengguna yang ditugaskan',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Tanggal Dibuat',
    'LBL_DATE_MODIFIED' => 'Tanggal diubah',
    'LBL_MODIFIED' => 'Diubah Oleh',
    'LBL_MODIFIED_NAME' => 'Modifikasi berdasarkan Nama',
    'LBL_CREATED' => 'Dibuat Oleh',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_DELETED' => 'Hapus',
    'LBL_NAME' => 'Judul',
    'LBL_CREATED_USER' => 'Dibuat oleh Pemakai',
    'LBL_MODIFIED_USER' => 'Modifikasi oleh Pemakai',
    'ERR_DELETE_RECORD' => 'Nomor Record harus ditentukan sebelum menghapus Account',
    'LBL_ACCOUNT_NAME' => 'Judul',
    'LBL_ACCOUNT' => 'Account:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitas',
    'LBL_ADDRESS_INFORMATION' => 'Informasi alamat',
    'LBL_ANNUAL_REVENUE' => 'Pemasukan Per Tahun:',
    'LBL_ANY_ADDRESS' => 'Setiap Alamat:',
    'LBL_ANY_EMAIL' => 'Setiap Email:',
    'LBL_ANY_PHONE' => 'Telepon Apapun:',
    'LBL_RATING' => 'Peringkat',
    'LBL_ASSIGNED_USER' => 'Pemakai',
    'LBL_BILLING_ADDRESS_CITY' => 'Kota Penagihan:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Negara Penagihan:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Kode Pos  Penagihan:',
    'LBL_BILLING_ADDRESS_STATE' => 'Provinsi Penagihan:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Alamat Penagihan 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Alamat Penagihan 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Alamat Penagihan 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Alamat Penagihan:',
    'LBL_BILLING_ADDRESS' => 'Alamat Penagihan:',
    'LBL_ACCOUNT_INFORMATION' => 'Informasi Kasus',
    'LBL_CITY' => 'Kota:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_COUNTRY' => 'Negara:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Akun',
    'LBL_DUPLICATE' => 'Kemungkinan menggandakan Account',
    'LBL_EMAIL' => 'Email:',
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
    'LBL_OTHER_EMAIL_ADDRESS' => 'Surel lainnya:',
    'LBL_OTHER_PHONE' => 'Telepon Lainnya:',
    'LBL_OWNERSHIP' => 'Status Kepemilikan:',
    'LBL_PARENT_ACCOUNT_ID' => 'Induk Account ID',
    'LBL_PHONE_ALT' => 'Telepon Alternatif:',
    'LBL_PHONE_FAX' => 'No Fax:',
    'LBL_PHONE_OFFICE' => 'Telepon Kantor:',
    'LBL_PHONE' => 'Telepon:',
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
    'LBL_STATE' => 'Negara atau Wilayah:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol',
    'LBL_TYPE' => 'Tipe:',
    'LBL_WEBSITE' => 'Situs Web:',
    'LNK_ACCOUNT_LIST' => 'Akun',
    'LNK_NEW_ACCOUNT' => 'Buat Account',
    'MSG_DUPLICATE' => 'Membuat akun ini berpotensi membuat akun duplikat. Anda bisa memilih akun dari daftar di bawah ini atau Anda dapat mengklik Save untuk terus membuat akun baru dengan data yang telah dimasukkan sebelumnya.',
    'MSG_SHOW_DUPLICATES' => 'Membuat akun ini berpotensi membuat akun duplikat. Anda dapat mengklik Simpan untuk terus membuat akun baru ini dengan data yang telah dimasukkan sebelumnya atau Anda dapat mengklik Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'Anda yakin mau menghapus record ini?',
    'LBL_LIST_FORM_TITLE' => 'Daftar Faktur',
    'LBL_MODULE_NAME' => 'Faktur',
    'LBL_MODULE_TITLE' => 'Faktur: Home',
    'LBL_HOMEPAGE_TITLE' => 'Saya Faktur',
    'LNK_NEW_RECORD' => 'Membuat Faktur',
    'LNK_LIST' => 'Lihat Faktur',
    'LBL_SEARCH_FORM_TITLE' => 'Pencarian Faktur',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lihat Histori',
    'LBL_NEW_FORM_TITLE' => 'Faktur Baru',
    'LBL_TERMS_C' => 'Hal',
    'LBL_APPROVAL_ISSUE' => 'Persetujuan Isu-Isu',
    'LBL_APPROVAL_STATUS' => 'Status Persetujuan',
    'LBL_BILLING_ACCOUNT' => 'Akun',
    'LBL_BILLING_CONTACT' => 'Kontak',
    'LBL_EXPIRATION' => 'Berlaku Sampai',
    'LBL_INVOICE_NUMBER' => 'Nomor Faktur',
    'LBL_OPPORTUNITY' => 'Nama Peluang',
    'LBL_TEMPLATE_DDOWN_C' => 'Faktur Template',
    'LBL_STAGE' => 'Quote Tahap',
    'LBL_TERM' => 'Syarat-Syarat Pembayaran',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Diskon',
    'LBL_TAX_AMOUNT' => 'Pajak',
    'LBL_SHIPPING_AMOUNT' => 'Pengiriman',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Judul',
    'LBL_EMAIL_ADDRESSES' => 'Alamat Surel',
    'LBL_LINE_ITEMS' => 'Item baris',
    'LBL_GRAND_TOTAL' => 'Total Keseluruhan',
    'LBL_QUOTE_NUMBER' => 'Kutipan Nomor',
    'LBL_QUOTE_DATE' => 'Tanggal Kutipan',
    'LBL_INVOICE_DATE' => 'Tanggal Faktur',
    'LBL_DUE_DATE' => 'Tanggal Jatuh Tempo',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'Status Faktur',
    'LBL_PRODUCT_QUANITY' => 'Jumlah',
    'LBL_PRODUCT_NAME' => 'Produk',
    'LBL_PART_NUMBER' => 'Nomor Barang',
    'LBL_PRODUCT_NOTE' => 'Catatan',
    'LBL_PRODUCT_DESCRIPTION' => 'Deskripsi',
    'LBL_LIST_PRICE' => 'Daftar',
    'LBL_DISCOUNT_AMT' => 'Diskon',
    'LBL_UNIT_PRICE' => 'Harga Jual',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Pajak', //VAT
    'LBL_VAT_AMT' => 'Total Pajak', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Tambahkan Garis Produk',
    'LBL_SERVICE_NAME' => 'Pelayanan',
    'LBL_SERVICE_LIST_PRICE' => 'Daftar',
    'LBL_SERVICE_PRICE' => 'Harga Jual',
    'LBL_SERVICE_DISCOUNT' => 'Diskon',
    'LBL_ADD_SERVICE_LINE' => 'Tambahkan Layanan Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Menghapus',
    'LBL_PRINT_AS_PDF' => 'Cetak sebagai PDF [Alt+P]',
    'LBL_EMAIL_INVOICE' => 'Faktur Email',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Faktur',
    'LBL_EMAIL_NAME' => 'Faktur untuk',
    'LBL_NO_TEMPLATE' => 'KESALAHAN\nNo templates ditemukan. Jika anda belum dibuat Faktur template, pergi ke PDF template modul dan membuat satu',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Pajak',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Tambahan Grup',
    'LBL_DELETE_GROUP' => 'Hapus Grup',
    'LBL_GROUP_NAME' => 'Nama Grup',
    'LBL_GROUP_TOTAL' => 'Total Grup',
    'LBL_SHIPPING_TAX' => 'Pajak Pengiriman',
    'LBL_SHIPPING_TAX_AMT' => 'Pajak Pengiriman',
    'LBL_IMPORT_LINE_ITEMS' => 'Impor Item Baris',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Mata Uang Default)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Diskon (Mata Uang Default)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Pajak (Mata Uang Default)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Pengiriman (Mata Uang Default)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Mata Uang Default)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Pengiriman Pajak (Mata Uang Default)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Mata Uang Default)',
    'LBL_INVOICE_TO' => 'Faktur Untuk',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Garis Item Kelompok',
    'LBL_AOS_PRODUCT_QUOTES' => 'Produk Quotes',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Kutipan: Faktur',
);
