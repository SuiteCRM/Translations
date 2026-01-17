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
    'LBL_ASSIGNED_TO_NAME' => 'Manajer kontrak',
    'LBL_CONTRACT_ACCOUNT' => 'Akun',
    'LBL_OPPORTUNITY' => 'Peluang',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Tanggal dibuat',
    'LBL_DATE_MODIFIED' => 'Tanggal dibuat',
    'LBL_MODIFIED' => 'Diubah Oleh',
    'LBL_MODIFIED_NAME' => 'Diubah oleh Nama',
    'LBL_CREATED' => 'Dibuat Oleh',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_DELETED' => 'Dihapus',
    'LBL_NAME' => 'Judul Kontrak',
    'LBL_CREATED_USER' => 'Dibuat oleh Pengguna',
    'LBL_MODIFIED_USER' => 'Diubah oleh Pengguna',
    'LBL_LIST_NAME' => 'Nama',
    'LBL_LIST_FORM_TITLE' => 'Daftar Kontrak',
    'LBL_MODULE_NAME' => 'Kontrak',
    'LBL_MODULE_TITLE' => 'Kontrak: Rumah',
    'LBL_HOMEPAGE_TITLE' => 'Kontrak Saya',
    'LNK_NEW_RECORD' => 'Buat Kontrak',
    'LNK_LIST' => 'Lihat Kontrak',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Kontrak',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lihat Histori',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_NEW_FORM_TITLE' => 'Kontrak Baru',
    'LBL_CONTRACT_NAME' => 'Nama Kontrak',
    'LBL_REFERENCE_CODE ' => 'Kode referensi ',
    'LBL_START_DATE' => 'Tanggal Mulai',
    'LBL_END_DATE' => 'Tanggal Akhir',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Nilai Kontrak',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Tanggal Masuk Pelanggan',
    'LBL_COMPANY_SIGNED_DATE' => 'Tanggal Masuk Perusahaan',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Tanggal Pengingat Perpanjangan',
    'LBL_CONTRACT_TYPE' => 'Tipe Kontrak',
    'LBL_CONTACT' => 'Kontak',
    'LBL_ADD_GROUP' => 'Tambahan Grup',
    'LBL_DELETE_GROUP' => 'Hapus Grup',
    'LBL_GROUP_NAME' => 'Nama Grup',
    'LBL_GROUP_TOTAL' => 'Total Grup',
    'LBL_PRODUCT_QUANITY' => 'Jumlah',
    'LBL_PRODUCT_NAME' => 'Produk',
    'LBL_PART_NUMBER' => 'Nomor Barang',
    'LBL_PRODUCT_NOTE' => 'Catatan',
    'LBL_PRODUCT_DESCRIPTION' => 'Deskripsi',
    'LBL_LIST_PRICE' => 'Daftar',
    'LBL_DISCOUNT_AMT' => 'Diskon',
    'LBL_UNIT_PRICE' => 'Harga Jual',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Pajak',
    'LBL_VAT_AMT' => 'Total Pajak',
    'LBL_SERVICE_NAME' => 'Pelayanan',
    'LBL_SERVICE_LIST_PRICE' => 'Daftar',
    'LBL_SERVICE_PRICE' => 'Harga Jual',
    'LBL_SERVICE_DISCOUNT' => 'Diskon',
    'LBL_LINE_ITEMS' => 'Item baris',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Diskon',
    'LBL_TAX_AMOUNT' => 'Pajak',
    'LBL_SHIPPING_AMOUNT' => 'Pengiriman',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Total Keseluruhan',
    'LBL_SHIPPING_TAX' => 'Pajak Pengiriman',
    'LBL_SHIPPING_TAX_AMT' => 'Pajak Pengiriman',
    'LBL_ADD_PRODUCT_LINE' => 'Tambahkan Garis Produk',
    'LBL_ADD_SERVICE_LINE' => 'Tambahkan Layanan Line ',
    'LBL_PRINT_AS_PDF' => 'Cetak sebagai PDF [Alt+P]',
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_PDF_NAME' => 'Kontrak',
    'LBL_EMAIL_NAME' => 'Untuk Persetujuan',
    'LBL_NO_TEMPLATE' => 'KESALAHAN\nNo templates ditemukan. Jika anda belum membuat sebuah Kontrak template, pergi ke PDF template modul dan membuat satu',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Nilai Kontrak (Default Currency)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Mata Uang Default)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Diskon (Mata Uang Default)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Pajak (Mata Uang Default)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Pengiriman (Mata Uang Default)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Mata Uang Default)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Pengiriman Pajak (Mata Uang Default)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Mata Uang Default)',

    'LBL_CALL_ID' => 'ID Panggilan',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Garis Item Kelompok',
    'LBL_AOS_PRODUCT_QUOTES' => 'Produk Quotes',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Kutipan: Kontrak',
);
