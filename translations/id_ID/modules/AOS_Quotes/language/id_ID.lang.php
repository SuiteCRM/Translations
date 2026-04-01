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
    'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Tanggal Dibuat',
    'LBL_DATE_MODIFIED' => 'Tanggal diubah',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modifikasi berdasarkan Nama',
    'LBL_CREATED' => 'Created By',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Title',
    'LBL_CREATED_USER' => 'Dibuat oleh Pengguna',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_ACCOUNT_NAME' => 'Title',
    'LBL_ACCOUNT' => 'Company:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ANNUAL_REVENUE' => 'Annual Revenue:',
    'LBL_ANY_ADDRESS' => 'Alamat Apapun:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_RATING' => 'Rating',
    'LBL_ASSIGNED_USER' => 'User',
    'LBL_BILLING_ADDRESS_CITY' => 'Billing City:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Billing Country:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Billing Postal Code:',
    'LBL_BILLING_ADDRESS_STATE' => 'Billing State:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Billing Address:',
    'LBL_ACCOUNT_INFORMATION' => 'Overview',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Akun',
    'LBL_DUPLICATE' => 'Possible Duplicate Account',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nama Akun',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_EMAIL_ADDRESS' => 'Alamat Surel',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'State',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Surel lainnya:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => 'Induk Account ID',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'No Fax:',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'Phone:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_SAVE_ACCOUNT' => 'Simpan Account',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Shipping City:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shipping Country:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Shipping Postal Code:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Shipping State:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Street 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Street 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping Street 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Street:',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Address:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Jenis:',
    'LBL_WEBSITE' => 'Situs Web:',
    'LNK_ACCOUNT_LIST' => 'Akun',
    'LNK_NEW_ACCOUNT' => 'Buat Account',
    'MSG_DUPLICATE' => 'Membuat akun ini berpotensi membuat akun duplikat. Anda bisa memilih akun dari daftar di bawah ini atau Anda dapat mengklik Save untuk terus membuat akun baru dengan data yang telah dimasukkan sebelumnya.',
    'MSG_SHOW_DUPLICATES' => 'Membuat akun ini berpotensi membuat akun duplikat. Anda dapat mengklik Simpan untuk terus membuat akun baru ini dengan data yang telah dimasukkan sebelumnya atau Anda dapat mengklik Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'LBL_LIST_FORM_TITLE' => 'Kutipan Daftar',
    'LBL_MODULE_NAME' => 'Quotes',
    'LBL_MODULE_TITLE' => 'Kutipan: Home',
    'LBL_HOMEPAGE_TITLE' => 'Kutipan-kutipan Saya',
    'LNK_NEW_RECORD' => 'Membuat Quote',
    'LNK_LIST' => 'Tampilkan Kutipan',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Kutipan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_NEW_FORM_TITLE' => 'Kutipan Baru',
    'LBL_TERMS_C' => 'Hal',
    'LBL_APPROVAL_ISSUE' => 'Persetujuan Isu-Isu',
    'LBL_APPROVAL_STATUS' => 'Status Persetujuan',
    'LBL_BILLING_ACCOUNT' => 'Akun',
    'LBL_BILLING_CONTACT' => 'Contact',
    'LBL_EXPIRATION' => 'Berlaku Sampai',
    'LBL_QUOTE_NUMBER' => 'Kutipan Nomor',
    'LBL_OPPORTUNITY' => 'Opportunity',
    'LBL_TEMPLATE_DDOWN_C' => 'Quote Template',
    'LBL_STAGE' => 'Quote Tahap',
    'LBL_TERM' => 'Syarat-Syarat Pembayaran',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Shipping',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Title',
    'LBL_EMAIL_ADDRESSES' => 'Alamat Surel',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Total Keseluruhan',
    'LBL_INVOICE_STATUS' => 'Status Faktur',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'Product',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Note',
    'LBL_PRODUCT_DESCRIPTION' => 'Description',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Harga Jual',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Tax', // VAT
    'LBL_VAT_AMT' => 'Tax Amount', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Tambahkan Garis Produk',
    'LBL_SERVICE_NAME' => 'Pelayanan',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Harga Jual',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Tambahkan Layanan Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Remove',
    'LBL_CONVERT_TO_INVOICE' => 'Mengkonversi untuk Faktur',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_QUOTE' => 'Email Quotation',
    'LBL_CREATE_CONTRACT' => 'Buat Kontrak',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Kutipan',
    'LBL_EMAIL_NAME' => 'Kutipan untuk',
    'LBL_QUOTE_DATE' => 'Tanggal Kutip',
    'LBL_NO_TEMPLATE' => 'KESALAHAN\nNo templates ditemukan. Jika anda belum membuat sebuah Quote template, pergi ke PDF template modul dan membuat satu',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Pajak',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Tambahan Grup',
    'LBL_DELETE_GROUP' => 'Hapus Grup',
    'LBL_GROUP_NAME' => 'Nama Grup',
    'LBL_GROUP_TOTAL' => 'Total Grup',
    'LBL_SHIPPING_TAX' => 'Pajak Pengiriman',
    'LBL_SHIPPING_TAX_AMT' => 'Pajak Pengiriman',
    'LBL_IMPORT_LINE_ITEMS' => 'Impor Item Baris',
    'LBL_CREATE_OPPORTUNITY' => 'Create Opportunity',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Mata Uang Default)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Diskon (Mata Uang Default)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Pajak (Mata Uang Default)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Pengiriman (Mata Uang Default)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Mata Uang Default)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Pengiriman Pajak (Mata Uang Default)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Mata Uang Default)',
    'LBL_QUOTE_TO' => 'Kutipan Untuk',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotal + Pajak (Mata Uang Default)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Kutipan: Kontrak',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Kutipan: Faktur',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Garis Item Kelompok',
    'LBL_AOS_PRODUCT_QUOTES' => 'Produk Quotes',
    'LBL_AOS_QUOTES_PROJECT' => 'Kutipan: Proyek',
);
