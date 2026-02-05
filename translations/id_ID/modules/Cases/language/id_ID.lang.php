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
    'ERR_DELETE_RECORD' => 'Anda harus menentukan No Record untuk menghapus account.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Pengetahuan Saran',
    'LBL_TOOL_TIP_TITLE' => 'Judul:',
    'LBL_TOOL_TIP_BODY' => 'Tubuh: ',
    'LBL_TOOL_TIP_INFO' => 'Info Tambahan: ',
    'LBL_TOOL_TIP_USE' => 'Gunakan sebagai: ',
    'LBL_SUGGESTION_BOX' => 'Saran',
    'LBL_NO_SUGGESTIONS' => 'Tidak Ada Saran',
    'LBL_RESOLUTION_BUTTON' => 'Resolusi',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Gelar',
    'LBL_SUGGESTION_BOX_REL' => 'Relevansi',

    'LBL_ACCOUNT_ID' => 'ID Akun',
    'LBL_ACCOUNT_NAME' => 'Nama Akun:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Akun',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Kerusakan',
    'LBL_CASE_NUMBER' => 'Nomor Kasus',
    'LBL_CASE' => 'Kasus:',
    'LBL_CONTACT_NAME' => 'Nma Kontak',
    'LBL_CONTACT_ROLE' => 'Peran',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kasus',
    'LBL_DESCRIPTION' => 'Deskripsi:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Riwayat',
    'LBL_INVITEE' => 'Kontak',
    'LBL_MEMBER_OF' => 'Akun',
    'LBL_MODULE_NAME' => 'Kasus',
    'LBL_MODULE_TITLE' => 'Kasus: Home',
    'LBL_NEW_FORM_TITLE' => 'Kasus baru',
    'LBL_NUMBER' => 'Nomor:',
    'LBL_PRIORITY' => 'Prioritas:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyek',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumen',
    'LBL_RESOLUTION' => 'Resolusi',
    'LBL_SEARCH_FORM_TITLE' => 'Mencari Kasus',
    'LBL_STATUS' => 'Status',
    'LBL_SUBJECT' => 'Subjek:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Pengguna yang ditugaskan',
    'LBL_LIST_ACCOUNT_NAME' => 'Nama Akun',
    'LBL_LIST_ASSIGNED' => 'ditugaskan kepada',
    'LBL_LIST_CLOSE' => 'Tutup',
    'LBL_LIST_FORM_TITLE' => 'Daftar Kasus',
    'LBL_LIST_LAST_MODIFIED' => 'Modifikasi Terakhir',
    'LBL_LIST_MY_CASES' => 'Kasus saya yang open',
    'LBL_LIST_NUMBER' => 'No.',
    'LBL_LIST_PRIORITY' => 'Prioritas',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Subjek',

    'LNK_CASE_LIST' => 'Kasus',
    'LNK_NEW_CASE' => 'Buat Kasus',
    'LBL_LIST_DATE_CREATED' => 'Tanggal dibuat',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada',
    'LBL_TYPE' => 'Tipe',
    'LBL_WORK_LOG' => 'Log kerja',
    'LNK_IMPORT_CASES' => 'Kasus Impor',

    'LBL_CREATED_USER' => 'Membuat Pengguna',
    'LBL_MODIFIED_USER' => 'Mengubah pengguna',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyek',
    'LBL_CASE_INFORMATION' => 'Informasi account', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Update - Teks', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Update Pembaharuan',
    'LBL_AOP_CASE_UPDATES' => 'Pembaharuan Kasus',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Kasus Update Ulir',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Tutup Semua',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Memperluas Semua',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Lampiran:',

    'LBL_AOP_CASE_EVENTS' => 'Kasus Peristiwa',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Hal Lampiran:',
    'LBL_ADD_CASE_FILE' => 'Tambahkan file',
    'LBL_REMOVE_CASE_FILE' => 'Menghapus file',
    'LBL_SELECT_CASE_DOCUMENT' => 'Pilih dokumen',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Yang jelas dokumen',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Internal CRM dokumen',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'File eksternal',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Dibuat oleh kontak',
    'LBL_CONTACT_CREATED_BY' => 'Dibuat oleh',
    'LBL_CASE_UPDATE_FORM' => 'Update - Lampiran formulir', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
