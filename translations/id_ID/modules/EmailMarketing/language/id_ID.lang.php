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
    'LBL_REPLY_ADDR' => ' "Balas-ke" Alamat:',
    'LBL_REPLY_NAME' => ' "Balas-ke" Nama:',

    'LBL_MODULE_NAME' => 'Email Pemasaran',
    'LBL_MODULE_TITLE' => 'Email Pemasaran: Home',
    'LBL_LIST_FORM_TITLE' => 'Email Kampanye Pemasaran',
    'LBL_NAME' => 'Nama',
    'LBL_LIST_NAME' => 'Nama',
    'LBL_LIST_FROM_ADDR' => 'Dari Email',
    'LBL_LIST_DATE_START' => 'Tanggal Mulai',
    'LBL_LIST_TEMPLATE_NAME' => 'Template Email',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Status',
    'LBL_TEMPLATE_NAME' => 'Nama Template',
    'LBL_DATE_ENTERED' => 'Tanggal dimasukkan',
    'LBL_DATE_MODIFIED' => 'Tanggal diubah',
    'LBL_MODIFIED' => 'Diubah oleh',
    'LBL_CREATED' => 'Dibuat oleh',
    'LBL_MESSAGE_FOR' => 'Kirim Pesan Ini untuk:',

    'LBL_FROM_NAME' => 'Dari Nama:',
    'LBL_FROM_ADDR' => 'Dari Alamat Email:',
    'LBL_DATE_START' => 'Tanggal Mulai',
    'LBL_SEND_DATE' => 'Kirim Tanggal',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Waktu Mulai',
    'LBL_START_DATE_TIME' => 'Tanggal & waktu Mulai:',
    'LBL_TEMPLATE' => 'Template :',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Diubah oleh',
    'LBL_CREATED_BY' => 'Dibuat oleh',

    'LNK_NEW_CAMPAIGN' => 'Buat Promosi',
    'LNK_CAMPAIGN_LIST' => 'Kampanye',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Buat daftar Target',
    'LNK_PROSPECT_LIST_LIST' => 'Daftar Sasaran',
    'LNK_NEW_PROSPECT' => 'Buat Target',
    'LNK_PROSPECT_LIST' => 'Target',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Email Pemasaran',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Buat [Alt+N]',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Ubah',
    'LBL_FROM_MAILBOX' => 'Dari Kotak',
    'LBL_FROM_MAILBOX_NAME' => 'Gunakan kotak surat:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Akun Surel Outbound:',
    'LBL_FROM' => 'Dari',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Daftar Sasaran',
    'LBL_ALL_PROSPECT_LISTS' => 'Pilih untuk memilih semua daftar Targetkan untuk Kampanye.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Semua Daftar Target yang terkait dengan pesan ini.',
    'LBL_PROSPECT_LIST_NAME' => 'Nama Daftar Target',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Daftar target',
    'LBL_MODULE_SEND_TEST' => 'Kampanye: Kirim Uji',
    'LBL_MODULE_SEND_EMAILS' => 'Kampanye: Kirim Email',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Pilih pesan kampanye yang ingin Anda uji:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Harap pilih pesan kampanye yang ingin Anda jadwalkan untuk distribusi pada tanggal dan waktu mulai yang ditentukan:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Kirim',
    'LBL_SEND_BUTTON_LABEL' => 'Kirim',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Susunan acara',
    'LBL_ERROR_ON_MARKETING' => 'Bagan yang diperlukan hilang',

    'LBL_CAMPAIGN_ID' => 'Kampanye ID',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID Akun Surel Outbond',
    'LBL_EMAIL_TEMPLATE' => 'Template Email',
    'LBL_PROSPECT_LISTS' => 'Daftar Prospek',
    'LBL_OVERVIEW' => 'Dasar',
    'LBL_EMAIL_CONFIG' => 'Pengaturan Email',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'EMAIL',
    'LBL_BODY' => 'Tubuh',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Survei',
    'LBL_SCHEDULE' => 'Susunan acara',
    'LBL_DELETE_TEST_ENTRIES' => 'Menghapus Test Entries',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Pengguna',
    'LBL_SEND_TEST_EMAIL' => 'Kirim Email untuk test',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Antrian Pesan',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Proses Jalankan Email Nightly Kampanye terpental ',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Penjadwalan',
    'LBL_INBOUND_EMAIL' => 'Email Masuk',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
