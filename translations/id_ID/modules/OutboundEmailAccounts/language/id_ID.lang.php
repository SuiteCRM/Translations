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
    'LBL_LIST_FORM_TITLE' => 'Daftar Akun Surel Outbound',
    'LBL_MODULE_NAME' => 'Outbound Akun Email',
    'LBL_MODULE_TITLE' => 'Outbound Akun Email',
    'LBL_HOMEPAGE_TITLE' => 'Akun Email Outbound saya',
    'LNK_NEW_RECORD' => 'Buat Akun Email Outbound',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'Outbound Akun Email',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Akun Email Masuk',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Akun Email Outbound',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lihat Histori',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_NEW_FORM_TITLE' => 'Akun Surel Outbound Baru',
    'LBL_USERNAME' => 'Nama Pengguna',
    'LBL_PASSWORD' => 'Kata sandi',
    'LBL_SMTP_SERVERNAME' => 'Nama Peladen SMTP',
    'LBL_SMTP_AUTH' => 'SMTP Sah',
    'LBL_SMTP_PORT' => 'Port SMTP',
    'LBL_SMTP_PROTOCOL' => 'Protokol SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Setelan Akun',
    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_CHANGE_PASSWORD' => 'Ganti kata sandi',
    'LBL_SEND_TEST_EMAIL' => 'Kirim Email untuk test',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administrator belum dikonfigurasi default outbound akun. Tidak dapat mengirim email tes.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gunakan Otentikasi SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Kata sandi',
    'LBL_MAIL_SMTPPORT' => 'Pelabuhan',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'Nama Pengguna',
    'LBL_MAIL_SMTP_SETTINGS' => 'Spesifikasi Server SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pilih Penyedia Email Anda :',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Password Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Password Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Alamat Email Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Password Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'User Name Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Port Server Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange:',

    'LBL_TYPE' => 'Tipe',
    'LBL_MAIL_SENDTYPE' => 'Jenis Kirim Surel',
    'LBL_MAIL_SMTPSSL' => 'Surat SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '"Dari" Nama',
    'LBL_SMTP_FROM_ADDR' => '"Dari" alamat',
    'LBL_REPLY_TO_NAME' => '"Reply-to" name',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" address',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grup Keamanan',

    'LBL_OWNER' => 'Pemilik',
    'LBL_OWNER_NAME' => 'Pemilik',

    'LBL_AUTH_TYPE' => 'Auth Type',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Sambungan OAuth Eksternal',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Sambungan OAuth Eksternal',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
