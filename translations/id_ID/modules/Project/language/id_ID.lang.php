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
    'LBL_MODULE_NAME' => 'Project',
    'LBL_MODULE_TITLE' => 'Proyek: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Pencarian Proyek',
    'LBL_LIST_FORM_TITLE' => 'Daftar Proyek',
    'LBL_HISTORY_TITLE' => 'History',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_ASSIGNED_USER_ID' => 'Assigned To:',
    'LBL_ASSIGNED_USER_NAME' => 'Pengelola proyek:',
    'LBL_MODIFIED_USER_ID' => 'User ID Diubah:',
    'LBL_CREATED_BY' => 'Dibuat Oleh:',
    'LBL_NAME' => 'Name:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DELETED' => 'Dihapus:',
    'LBL_DATE' => 'Date:',
    'LBL_DATE_START' => 'Start Date:',
    'LBL_DATE_END' => 'End Date:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_LIST_NAME' => 'Nama ',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Total Perkiraan Usaha (jam)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Total Aktual Usaha (jam)',
    'LBL_LIST_END_DATE' => 'End Date',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Tidak ada',
    'LBL_ALL_PROJECTS' => 'Semua Proyek',
    'LBL_ALL_USERS' => 'Semua Pengguna',
    'LBL_ALL_CONTACTS' => 'Semua Kontak',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Proyek baru',
    'LNK_NEW_PROJECT' => 'Create Project',
    'LNK_PROJECT_LIST' => 'Lihat Daftar Proyek',
    'LNK_NEW_PROJECT_TASK' => 'Buat Tugas Proyek',
    'LNK_PROJECT_TASK_LIST' => 'Lihat Tugas Proyek',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projects',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Akun',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Task Name',
    'LBL_DURATION' => 'Duration',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Predecessors',
    'LBL_PERCENT_COMPLETE' => '% Complete',
    'LBL_MORE' => 'Lebih ...',
    'LBL_OPPORTUNITIES' => 'Opportunities',
    'LBL_NEXT_WEEK' => 'Next',
    'LBL_PROJECT_INFORMATION' => 'Informasi Proyek',
    'LBL_EDITLAYOUT' => 'Sunting Tata Letak' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_VIEW_GANTT_TITLE' => 'Lihat Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duration',
    'LBL_TASK_TITLE' => 'Edit Tugas',
    'LBL_DURATION_TITLE' => 'Edit Durasi',
    'LBL_LAG' => 'Tim',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_MONTHS' => 'Months',
    'LBL_SUBTASK' => 'Task',
    'LBL_MILESTONE_FLAG' => 'Tonggak',
    'LBL_ADD_NEW_TASK' => 'Menambahkan Tugas Baru',
    'LBL_DELETE_TASK' => 'Menghapus Tugas',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit tugas properti.',
    'LBL_PARENT_TASK_ID' => 'Id Tugas Induk',
    'LBL_RESOURCE_CHART' => 'Kalender Sumber Daya',
    'LBL_RELATIONSHIP_TYPE' => 'Jenis Hubungan',
    'LBL_ASSIGNED_TO' => 'Manajer Proyek',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Templat Proyek',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Manajer Proyek',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Project',
    'LBL_TOOLTIP_TASK_NAME' => 'Task Name',
    'LBL_TOOLTIP_TITLE' => 'Tugas hari ini',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duration',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Sumber daya adalah Pengguna',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Sumber daya adalah Kontak',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Previous Month',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Next Month',
    'LBL_RESOURCE_CHART_WEEK' => 'Week',
    'LBL_RESOURCE_CHART_DAY' => 'Day',
    'LBL_RESOURCE_CHART_WARNING' => 'Tidak ada sumber daya yang ditugaskan ke sebuah proyek.',
    'LBL_PROJECT_DELETE_MSG' => 'Yakin ingin menghapus Proyek ini dan Tugasnya yang terkait?',
    'LBL_LIST_MY_PROJECT' => 'Proyek saya',
    'LBL_LIST_ASSIGNED_USER' => 'Manajer Proyek',
    'LBL_UNASSIGNED' => 'Belum ditetapkan',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Sumber',

    'LBL_EMAIL' => 'Surel',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Menambahkan Sumber',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'Maaf, tidak ada hasil yang ditemukan Buat undangan di bawah ini.',
    'LBL_CREATE_INVITEE' => 'Membuat sebuah Sumber',
    'LBL_CREATE_CONTACT' => 'Sebagai Kontak',
    'LBL_CREATE_AND_ADD' => 'Membuat & Menambahkan',
    'LBL_CANCEL_CREATE_INVITEE' => 'Batal',
    'LBL_NO_ACCESS' => 'Anda tidak memiliki akses untuk membuat $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Daftar Sumber',
    'LBL_REMOVE' => 'Remove',
    'LBL_VIEW_DETAIL' => 'View Details',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Pertimbangkan hari Kerja',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Cari Proyek',
    'LBL_USERS_SEARCH' => 'Cari Pengguna',
    'LBL_CONTACTS_SEARCH' => 'Pilih Kontak',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Search',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Weekly',
    'LBL_CHART_MONTHLY' => 'Monthly',
    'LBL_CHART_QUARTERLY' => 'Quarterly',

    'LBL_RESOURCE_CHART_MONTH' => 'Month',
    'LBL_RESOURCE_CHART_QUARTER' => 'Kuarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Proyek Kontak dari Kontak Judul',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Template Proyek: Proyek dari Judul Proyek',
    'LBL_AOS_QUOTES_PROJECT' => 'Kutipan: Proyek',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Ascending',
    'LBL_DESCENDING' => 'Descending',
);
