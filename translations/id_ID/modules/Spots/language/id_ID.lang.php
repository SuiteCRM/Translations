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
    'LBL_SECURITYGROUPS' => 'Grup Keamanan',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grup Keamanan',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Tanggal dibuat',
    'LBL_DATE_MODIFIED' => 'Tanggal dibuat',
    'LBL_MODIFIED' => 'Diubah Oleh',
    'LBL_MODIFIED_NAME' => 'Diubah oleh Nama',
    'LBL_CREATED' => 'Dibuat Oleh',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_DELETED' => 'Dihapus',
    'LBL_NAME' => 'Nama',
    'LBL_CREATED_USER' => 'Dibuat oleh Pengguna',
    'LBL_MODIFIED_USER' => 'Diubah oleh Pengguna',
    'LBL_LIST_NAME' => 'Nama',
    'LBL_EDIT_BUTTON' => 'Sunting',
    'LBL_REMOVE' => 'Menghapus',
    'LBL_LIST_FORM_TITLE' => 'Daftar Poros',
    'LBL_MODULE_NAME' => 'Poros',
    'LBL_MODULE_TITLE' => 'Poros',
    'LBL_HOMEPAGE_TITLE' => 'Poros Saya',
    'LNK_NEW_RECORD' => 'Buat Poros',
    'LNK_LIST' => 'Tampilkan Poros',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Poros',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lihat Histori',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_NEW_FORM_TITLE' => 'Poros Baru',
    'LBL_CONFIG' => 'Konfigurasi',
    'LBL_TYPE' => 'Daerah untuk Menganalisa',
    'LNK_SPOT_LIST' => 'Tampilkan Titik',
    'LNK_SPOT_CREATE' => 'Buat Titik',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Konfigurasi',

    'LBL_AN_UNSUPPORTED_DB' => 'Maaf, Rangkaian Titik saat ini sedang terkonfigurasi untuk MySQL dan MS SQL saja',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Nama',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Jenis Akun',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Industri',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Pengumuman Negara',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Pengguna yang ditugaskan',
    'LBL_AN_LEADS_STATUS' => 'Status',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Sumber Lead ',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Nama Kampanye',
    'LBL_AN_LEADS_YEAR' => 'Tahun',
    'LBL_AN_LEADS_QUARTER' => 'Kuarter',
    'LBL_AN_LEADS_MONTH' => 'Bulan',
    'LBL_AN_LEADS_WEEK' => 'Minggu',
    'LBL_AN_LEADS_DAY' => 'Hari',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Nama Akun',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Nama Peluang',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Pengguna yang ditugaskan',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Jenis Peluang',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Sumber Lead ',
    'LBL_AN_SALES_AMOUNT' => 'Jumlah',
    'LBL_AN_SALES_STAGE' => 'Tahapan Penjualan',
    'LBL_AN_SALES_PROBABILITY' => 'Kemungkinan',
    'LBL_AN_SALES_DATE' => 'Tanggal Penjualan',
    'LBL_AN_SALES_QUARTER' => 'Kuarter Penjualan',
    'LBL_AN_SALES_MONTH' => 'Penjualan Bulanan',
    'LBL_AN_SALES_WEEK' => 'Penjualan Mingguan',
    'LBL_AN_SALES_DAY' => 'Penjualan Harian',
    'LBL_AN_SALES_YEAR' => 'Penjualan Tahunan',
    'LBL_AN_SALES_CAMPAIGN' => 'Kampanye',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Nama Akun',
    'LBL_AN_SERVICE_STATE' => 'Negara',
    'LBL_AN_SERVICE_STATUS' => 'Status',
    'LBL_AN_SERVICE_PRIORITY' => 'Prioritas',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Dibuat Hari',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Dibuat Minggu',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Dibuat Bulan',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Dibuat Kuarter',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Dibuat Tahun',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Nama Kontak',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Pengguna yang ditugaskan',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Tipe',
    'LBL_AN_ACTIVITIES_NAME' => 'Nama',
    'LBL_AN_ACTIVITIES_STATUS' => 'Status',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Pengguna yang ditugaskan',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Status',
    'LBL_AN_MARKETING_TYPE' => 'Tipe',
    'LBL_AN_MARKETING_BUDGET' => 'Anggaran',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Perkiraan Biaya',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Hasil Yang Diharapkan',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Nama Peluang',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Jumlah',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Tahan Kesempatan Penjualan',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Kesempatan Diberikan',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Nama Akun',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Nama Kampanye',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Tanggal Aktivitas',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Tipe Aktivitas',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Tipe Terkait',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'ID Berkaitan',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Nama Peluang',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Jenis Kesempatan',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Sumber Petunjuk Kesempatan',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Tahan Kesempatan Penjualan',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Nama Akun',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Nama Kontak',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Nama Barang',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Jenis Barang',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Kategori Barang',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Jumlah Barang',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Daftar Harga Barang',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Harga Penjualan Barang',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Harga Pokok Barang',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Harga Diskon Barang',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Total Diskon',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Total Barang',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Total Keseluruhan',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Pengguna yang ditugaskan',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Tanggal dibuat',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Hari Dibuat',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Minggu Dibuat',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Bulan Dibuat',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Kuarter Dibuat',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Tahun Dibuat',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Kesalahan memastikan label untuk pivot sub-area',
);
