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
    'LBL_ASSIGNED_TO_NAME' => 'Manajer Proyek',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Tanggal dibuat',
    'LBL_DATE_MODIFIED' => 'Tanggal dibuat',
    'LBL_MODIFIED' => 'Diubah Oleh',
    'LBL_MODIFIED_NAME' => 'Diubah oleh Nama',
    'LBL_CREATED' => 'Dibuat Oleh',
    'LBL_DELETED' => 'Dihapus',
    'LBL_NAME' => 'Nama Template',
    'LBL_CREATED_USER' => 'Dibuat oleh Pengguna',
    'LBL_MODIFIED_USER' => 'Diubah oleh Pengguna',
    'LBL_LIST_NAME' => 'Nama',
    'LBL_EDIT_BUTTON' => 'Sunting',
    'LBL_REMOVE' => 'Menghapus',
    'LBL_LIST_FORM_TITLE' => 'Daftar Template Proyek',
    'LBL_MODULE_NAME' => 'Template Proyek',
    'LBL_MODULE_TITLE' => 'Template Proyek',
    'LBL_HOMEPAGE_TITLE' => 'Template Proyek Saya',
    'LNK_NEW_RECORD' => 'Buat Template Proyek',
    'LNK_LIST' => 'Lihat Template Proyek',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Template Proyek Impor',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Template Proyek',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lihat Histori',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_NEW_FORM_TITLE' => 'Template Proyek Baru',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Prioritas',
    'LBL_PROJECT_NAME' => 'Nama Proyek',
    'LBL_START_DATE' => 'Tanggal Mulai',
    'LBL_CREATE_PROJECT_TITLE' => 'Buat proyek baru dari template ini?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Template Tugas',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Pemakai',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Kontak',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Pilih Sumber',
    'LBL_NEW_PROJECT_CREATED' => 'Proyek Baru Dibuat',
    'LBL_NEW_PROJECT' => 'Buat Proyek',
    'LBL_CANCEL_PROJECT' => 'Batal',

    'LBL_SUBTASK' => 'Tugas',
    'LBL_MILESTONE_FLAG' => 'Tonggak',
    'LBL_RELATIONSHIP_TYPE' => 'Jenis Hubungan',
    'LBL_LAG' => 'Tim',
    'LBL_DAYS' => 'Hari',
    'LBL_HOURS' => 'Jam',
    'LBL_MONTHS' => 'Bulan',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tugas Proyek',
    'LBL_VIEW_GANTT_TITLE' => 'Lihat Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durasi',
    'LBL_TASK_TITLE' => 'Edit Tugas',
    'LBL_DURATION_TITLE' => 'Edit Durasi',
    'LBL_DESCRIPTION' => 'Catatan',
    'LBL_ASSIGNED_USER_ID' => 'Ditugaskan Kepada ID:',

    'LBL_LIST_ASSIGNED_USER' => 'Manajer Proyek',
    'LBL_UNASSIGNED' => 'Belum ditetapkan',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Sumber',
    'LBL_DELETE_TASK' => 'Menghapus Tugas',
    'LBL_VIEW_DETAIL' => 'Lihat Rincian',
    'LBL_ADD_NEW_TASK' => 'Menambahkan Tugas Baru',
    'LBL_ASSIGNED_USER_NAME' => 'Pengelola proyek:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nama Tugas',
    'LBL_DURATION' => 'Durasi',
    'LBL_ACTUAL_DURATION' => 'Aktual Durasi',
    'LBL_START' => 'Mulai',
    'LBL_FINISH' => 'Selesai',
    'LBL_PREDECESSORS' => 'pendahulu',
    'LBL_PERCENT_COMPLETE' => 'Persentase Selesai (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit tugas properti.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Pertimbangkan hari Kerja',
    'LBL_COPY_ALL_TASKS' => 'Salin Semua Tugas Dengan Sumber Daya',
    'LBL_COPY_SEL_TASKS' => 'Pilihan Salinan Tugas Dengan Sumber',
    'LBL_TOOLTIP_TITLE' => 'Petunjuk',
    'LBL_TOOLTIP_TEXT' => 'Salinan Semua tugas dengan pengguna yang ditugaskan',

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
    'LBL_NONE' => 'Tidak ada',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Template Proyek: Proyek dari Judul Proyek',


);
