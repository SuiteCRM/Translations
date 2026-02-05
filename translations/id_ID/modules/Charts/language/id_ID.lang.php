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
    'ERR_NO_OPPS' => 'Silakan buat beberapa Peluang untuk melihat grafik Peluang.',
    'LBL_ALL_OPPORTUNITIES' => 'Jumlah total dari semua Peluang adalah',
    'LBL_CHART_TYPE' => 'Tipe Grafik:',
    'LBL_CREATED_ON' => 'Terakhir dijalan pada',
    'LBL_CLOSE_DATE_START' => 'Dari - Tanggal Penutupan yang Diharapkan:',
    'LBL_CLOSE_DATE_END' => 'Untuk - Tanggal Penutupan yang Diharapkan:',
    'LBL_DATE_END' => 'Tanggal Akhir:',
    'LBL_DATE_RANGE_TO' => 'Kepada',
    'LBL_DATE_RANGE' => 'Range Tanggal adalah',
    'LBL_DATE_START' => 'Tanggal Mulai:',
    'LBL_EDIT' => 'Sunting',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Tampilkan jumlah kumulatif besarnya peluang dari sumber Lead yang terpilih dengan keluaran untuk Pengguna terpilih. Hasil didasarkan pada apakah tahap penjualan adalah Berakhir Menang, Closed Kalah, atau nilai lain. ',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Dashlet Peluang Berdasarkan Sumber Lead Berdasarkan Hasil',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Tampilkan nilai kumulatif besarnya peluang dengan sumber Lead terpilih untuk Pengguna terpilih.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Semua Peluang Dengan Sumber Lead',
    'LBL_LEAD_SOURCE_OTHER' => 'Lainnya',
    'LBL_LEAD_SOURCES' => 'Sumber Lead:',
    'LBL_MODULE_NAME' => 'Dasbor',
    'LBL_MODULE_TITLE' => 'Dasbor: Beranda',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Tampilkan nilai kumulatif besarnya peluang berdasarkan tanggal berdasarkan outcome untk Pengguna terpilih dimana closed ada dalam data range yang dimasukkan. Outcome didasarkan pada apakah tahap penjualan is Closed Won, Closed hilang, atau nilai lain. ',
    'LBL_OPP_SIZE' => 'Besar peluang dalam',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'Peluang dimana sumber Lead adalah',
    'LBL_OPPS_IN_STAGE' => 'di mana tahap penjualan adalah',
    'LBL_OPPS_OUTCOME' => 'di mana outcome adalah',
    'LBL_OPPS_WORTH' => 'Besarnya Peluang',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Menampilkan jumlah kumulatif oleh tahap-tahap penjualan yang dipilih untuk Peluang Anda dimana Closed Date yang diharapkan berada dalam rentang tanggal tertentu.',
    'LBL_REFRESH' => 'Menyegarkan',
    'LBL_ROLLOVER_DETAILS' => 'Rollover sebuah bar untuk rincian.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Rollover irisan untuk rincian.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Tampilkan nilai kumulatif besarnya Peluangan dengan tahap penjualan terpilih untuk user terpilih dimana closed date yang diharapkan berada dalam rentang tanggal tangal tertentu.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline Tahap Penjualan',
    'LBL_SALES_STAGES' => 'Tahapan Penjualan:',
    'LBL_TOTAL_PIPELINE' => 'Total Pipeline adalah',
    'LBL_USERS' => 'User:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline Berdasarkan Bulan Berdasarkan Outcome',
    'LBL_YEAR' => 'Tahun:',
    'LNK_NEW_ACCOUNT' => 'Buat Account',
    'LNK_NEW_CALL' => 'Jadwal Panggilan',
    'LNK_NEW_CASE' => 'Buat Kasus',
    'LNK_NEW_CONTACT' => 'Buat Kontak',
    'LNK_NEW_LEAD' => 'Buat Lead',
    'LNK_NEW_MEETING' => 'Jadwal Rapat',
    'LNK_NEW_NOTE' => 'Membuat Catatan atau Lampiran',
    'LNK_NEW_OPPORTUNITY' => 'Buat Peluang',
    'LNK_NEW_TASK' => 'Buat Tugas',
    'NTC_NO_LEGENDS' => 'Tidak ada',

    'LBL_TITLE' => 'Judul:',
    'LBL_MY_MODULES_USED_SIZE' => 'Jumlah Akses',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline by Sales Stage',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Hasil Sumber Utama',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Dashlet Hasil berdasarkan Bulanan',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Garis pipa dengan Sumber Utama',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Garis Pipa Saya dengan Tahap Penjualan',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Saya Modul Yang Digunakan (30 Hari Terakhir)',
);
