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
    'LBL_MODULE_NAME' => 'Proyek',
    'LBL_MODULE_TITLE' => 'Proyek: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Pencarian Proyek',
    'LBL_LIST_FORM_TITLE' => 'Daftar Proyek',
    'LBL_HISTORY_TITLE' => 'Riwayat',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Tanggal dibuat:',
    'LBL_DATE_MODIFIED' => 'Tanggal Modifikasi:',
    'LBL_ASSIGNED_USER_ID' => 'Ditugaskan Kepada ID:',
    'LBL_ASSIGNED_USER_NAME' => 'Pengelola proyek:',
    'LBL_MODIFIED_USER_ID' => 'User ID Diubah:',
    'LBL_CREATED_BY' => 'Dibuat Oleh:',
    'LBL_NAME' => 'Nama:',
    'LBL_DESCRIPTION' => 'Deskripsi:',
    'LBL_DELETED' => 'Dihapus:',
    'LBL_DATE' => 'Tanggal:',
    'LBL_DATE_START' => 'Tanggal Mulai',
    'LBL_DATE_END' => 'Tanggal Akhir:',
    'LBL_PRIORITY' => 'Prioritas:',
    'LBL_LIST_NAME' => 'Nama',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Total Perkiraan Usaha (jam)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Total Aktual Usaha (jam)',
    'LBL_LIST_END_DATE' => 'Tanggal Akhir',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyek',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tugas Proyek',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Peluang',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Tidak ada',
    'LBL_ALL_PROJECTS' => 'Semua Proyek',
    'LBL_ALL_USERS' => 'Semua Pengguna',
    'LBL_ALL_CONTACTS' => 'Semua Kontak',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Proyek baru',
    'LNK_NEW_PROJECT' => 'Buat Proyek',
    'LNK_PROJECT_LIST' => 'Lihat Daftar Proyek',
    'LNK_NEW_PROJECT_TASK' => 'Buat Tugas Proyek',
    'LNK_PROJECT_TASK_LIST' => 'Lihat Tugas Proyek',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Proyek',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Riwayat',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Akun',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Peluang',
    'LBL_CASES_SUBPANEL_TITLE' => 'Kasus',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Kerusakan',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nama Tugas',
    'LBL_DURATION' => 'Durasi',
    'LBL_ACTUAL_DURATION' => 'Aktual Durasi',
    'LBL_START' => 'Mulai',
    'LBL_FINISH' => 'Selesai',
    'LBL_PREDECESSORS' => 'pendahulu',
    'LBL_PERCENT_COMPLETE' => 'Persentase Selesai (%)',
    'LBL_MORE' => 'Lebih ...',
    'LBL_OPPORTUNITIES' => 'Peluang',
    'LBL_NEXT_WEEK' => 'Berikutnya',
    'LBL_PROJECT_INFORMATION' => 'Informasi Proyek',
    'LBL_EDITLAYOUT' => 'Sunting Tata Letak' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tugas Proyek',
    'LBL_VIEW_GANTT_TITLE' => 'Lihat Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durasi',
    'LBL_TASK_TITLE' => 'Edit Tugas',
    'LBL_DURATION_TITLE' => 'Edit Durasi',
    'LBL_LAG' => 'Tim',
    'LBL_DAYS' => 'Hari',
    'LBL_HOURS' => 'Jam',
    'LBL_MONTHS' => 'Bulan',
    'LBL_SUBTASK' => 'Tugas',
    'LBL_MILESTONE_FLAG' => 'Tonggak',
    'LBL_ADD_NEW_TASK' => 'Menambahkan Tugas Baru',
    'LBL_DELETE_TASK' => 'Menghapus Tugas',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit tugas properti.',
    'LBL_PARENT_TASK_ID' => 'Id Tugas Induk',
    'LBL_RESOURCE_CHART' => 'Kalender Sumber Daya',
    'LBL_RELATIONSHIP_TYPE' => 'Jenis Hubungan',
    'LBL_ASSIGNED_TO' => 'Manajer Proyek',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Templat Proyek',
    'LBL_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Manajer Proyek',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Proyek',
    'LBL_TOOLTIP_TASK_NAME' => 'Nama Tugas',
    'LBL_TOOLTIP_TITLE' => 'Tugas hari ini',
    'LBL_TOOLTIP_TASK_DURATION' => 'Durasi',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Sumber daya adalah Pengguna',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Sumber daya adalah Kontak',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Bulan Sebelumnya',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Bulan Depan',
    'LBL_RESOURCE_CHART_WEEK' => 'Minggu',
    'LBL_RESOURCE_CHART_DAY' => 'Hari',
    'LBL_RESOURCE_CHART_WARNING' => 'Tidak ada sumber daya yang ditugaskan ke sebuah proyek.',
    'LBL_PROJECT_DELETE_MSG' => 'Yakin ingin menghapus Proyek ini dan Tugasnya yang terkait?',
    'LBL_LIST_MY_PROJECT' => 'Proyek saya',
    'LBL_LIST_ASSIGNED_USER' => 'Manajer Proyek',
    'LBL_UNASSIGNED' => 'Belum ditetapkan',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Sumber',

    'LBL_EMAIL' => 'Surel',
    'LBL_PHONE' => 'Telepon Kantor:',
    'LBL_ADD_BUTTON' => 'Tambah',
    'LBL_ADD_INVITEE' => 'Menambahkan Sumber',
    'LBL_FIRST_NAME' => 'Nama Pertama',
    'LBL_LAST_NAME' => 'Nama Terakhir',
    'LBL_SEARCH_BUTTON' => 'Cari',
    'LBL_EMPTY_SEARCH_RESULT' => 'Maaf, tidak ada hasil yang ditemukan Buat undangan di bawah ini.',
    'LBL_CREATE_INVITEE' => 'Membuat sebuah Sumber',
    'LBL_CREATE_CONTACT' => 'Sebagai Kontak',
    'LBL_CREATE_AND_ADD' => 'Membuat & Menambahkan',
    'LBL_CANCEL_CREATE_INVITEE' => 'Batal',
    'LBL_NO_ACCESS' => 'Anda tidak memiliki akses untuk membuat $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Daftar Sumber',
    'LBL_REMOVE' => 'Menghapus',
    'LBL_VIEW_DETAIL' => 'Lihat Rincian',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Pertimbangkan hari Kerja',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Cari Proyek',
    'LBL_USERS_SEARCH' => 'Cari Pengguna',
    'LBL_CONTACTS_SEARCH' => 'Pilih Kontak',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Cari',

    'LBL_CHART_TYPE' => 'Tipe',
    'LBL_CHART_WEEKLY' => 'Mingguan',
    'LBL_CHART_MONTHLY' => 'Bulanan',
    'LBL_CHART_QUARTERLY' => 'Tiga Bulanan',

    'LBL_RESOURCE_CHART_MONTH' => 'Bulan',
    'LBL_RESOURCE_CHART_QUARTER' => 'Kuarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Proyek Kontak dari Kontak Judul',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Template Proyek: Proyek dari Judul Proyek',
    'LBL_AOS_QUOTES_PROJECT' => 'Kutipan: Proyek',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Naik',
    'LBL_DESCENDING' => 'Turun',
);
