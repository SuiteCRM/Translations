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
    'LBL_LIST_FORM_TITLE' => 'Daftar Kejadian',
    'LBL_MODULE_NAME' => 'Acara',
    'LBL_MODULE_TITLE' => 'Acara',
    'LBL_HOMEPAGE_TITLE' => 'Acara saya',
    'LNK_NEW_RECORD' => 'Membuat acara',
    'LNK_LIST' => 'Lihat Acara',
    'LBL_SEARCH_FORM_TITLE' => 'Acara pencarian',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lihat Histori',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_NEW_FORM_TITLE' => 'Acara baru',
    'LBL_LOCATION' => 'Lokasi',
    'LBL_START_DATE' => 'mulai tanggal',
    'LBL_END_DATE' => 'Tanggal/Jam Akhir',
    'LBL_BUDGET' => 'Anggaran',
    'LBL_DATE' => 'Tanggal Mulai',
    'LBL_DATE_END' => 'Tanggal Akhir',
    'LBL_DURATION' => 'Durasi',
    'LBL_INVITE_TEMPLATES' => 'Template Email Undangan',
    'LBL_INVITE_PDF' => 'Kirim Undangan',
    'LBL_EDITVIEW_PANEL1' => 'Detail acara',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegasi',
    'LBL_ACCEPT_REDIRECT' => 'Terima redirect URL',
    'LBL_DECLINE_REDIRECT' => 'Tolak Redirect URL',
    'LBL_SELECT_DELEGATES' => 'Pilih Delegasi',
    'LBL_SELECT_DELEGATES_TITLE' => 'Pilih Delegasi:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Daftar Target',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Target',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kontak',
    'LBL_SELECT_DELEGATES_LEADS' => 'Lead',
    'LBL_MANAGE_DELEGATES' => 'Kelola Delegasi',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Kelola Delegasi:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Kelola Penerimaan',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Mengelola Penerimaan:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Diterima',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Ditolak',
    'LBL_MANAGE_POPUP_ERROR' => 'Tidak ada delegasi yang terpilih.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Diundang',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Tidak diundang',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Dihadiri',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Tidak hadir',
    'LBL_SUCCESS_MSG' => 'Semua undangan telah berhasil dikirim.',
    'LBL_ERROR_MSG_1' => 'Semua kontak yang terhubung sudah diundang.',
    'LBL_ERROR_MSG_2' => 'Mengirim email undangan telah gagal! Silakan periksa setting email anda.',
    'LBL_ERROR_MSG_3' => 'Lebih dari 10 email gagal dikirim. Harap periksa apakah semua kontak yang Anda undang memiliki alamat email yang valid. (Lihat suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' email telah gagal dikirim Harap periksa apakah semua kontak yang Anda undang memiliki alamat email yang valid. (Lihat suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Template Email tidak valid',
    'LBL_EMAIL_INVITE' => 'Undangan Email',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Kontak',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Lokasi',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Lead',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Target',

    'LBL_HOURS_ABBREV' => 'j',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegasi',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Nama',
    'LBL_ACCOUNT_NAME' => 'Perusahaan',
    'LBL_SIGNATURE' => 'Tanda tangan',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Diundang',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Status',

    'LBL_ACTIVITY_STATUS' => 'Status Kegiatan',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Lokasi Acara dari Judul Acara',
    // Email links
    'LBL_ACCEPT_LINK' => 'Diterima',
    'LBL_DECLINE_LINK' => 'Ditolak',
    
);
