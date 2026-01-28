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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Login atau Password Salah',
    'ERR_INI_ZLIB' => 'Tidak dapat mematikan sementara kompresi zlib. "Test Settings" mungkin gagal. ',
    'ERR_NO_IMAP' => 'Tidak ada IMAP Library ditemukan. Silakan menyelesaikan ini sebelum melanjutkan dengan Inbound Email ',
    'ERR_NO_OPTS_SAVED' => 'Tidak ada optimums diselamatkan dengan Inbound Email account Anda. Harap periksa pengaturan ',
    'ERR_TEST_MAILBOX' => 'Silakan periksa pengaturan Anda dan coba lagi.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Tugaskan Untuk User',
    'LBL_AUTOREPLY' => 'Template Auto-Reply',
    'LBL_AUTOREPLY_HELP' => 'Pilih respon otomatis untuk memberitahu pengirim email bahwa respon mereka telah diterima.',
    'LBL_BASIC' => 'Basic Setup',
    'LBL_CASE_MACRO' => 'Macro Kasus',
    'LBL_CASE_MACRO_DESC' => 'Atur macro yang akan dapat di-parse dan digunakan untuk menghubungkan email yang diimpor Case.',
    'LBL_CASE_MACRO_DESC2' => 'Set ini ke nilai apapun, tapi tetap pertahankan <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Tutup Window',
    'LBL_CREATE_TEMPLATE' => 'Buat',
    'LBL_DELETE_SEEN' => 'Hapus Email yang sudah dibaca Setelah Impor',
    'LBL_EDIT_TEMPLATE' => 'Sunting',
    'LBL_EMAIL_OPTIONS' => 'Pilihan Pengaturan Email',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Bangkit Penanganan Pilihan',
    'LBL_FILTER_DOMAIN_DESC' => 'Jangan mengirim balasan otomatis ke domain ini.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Pilih untuk secara otomatis membuat data email di SuiteCRM untuk semua email masuk.',
    'LBL_FILTER_DOMAIN' => 'Tidak ada auto-reply untuk domain ini',
    'LBL_FIND_SSL_WARN' => 'Pengujian SSL mungkin memerlukan waktu lama. Harap bersabar. ',
    'LBL_FROM_ADDR' => ' "Dari" Alamat',
    'LBL_FROM_ADDR_DESC' => 'Alamat email yang disediakan di sini mungkin tidak muncul di "dari" Alamat bagian email yang dikirim karena pembatasan yang dikenakan oleh penyedia layanan email. Dalam keadaan ini, alamat email yang didefinisikan dalam server e-mail keluar akan digunakan.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => ' "Dari" Nama',
    'LBL_GROUP_QUEUE' => 'Tetapkan Untuk Grup',
    'LBL_HOME' => 'Rumah',
    'LBL_LIST_MAILBOX_TYPE' => 'Pemakaian Mail Account',
    'LBL_LIST_NAME' => 'Nama:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Tipe',
    'LBL_LIST_SERVER_URL' => 'Mail Server:',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Nama Pemakai',
    'LBL_USERNAME' => 'Nama Pemakai',
    'LBL_MAILBOX_DEFAULT' => 'Kotak Masuk',
    'LBL_MAILBOX_SSL' => 'Menggunakan SSL',
    'LBL_MAILBOX_TYPE' => 'Kemungkinan Tindakan',
    'LBL_DISTRIBUTION_METHOD' => 'Metode Distribusi',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Buat Template Auto Reply untuk Kasus',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Pilih respons otomatis memberitahukan pengirim email bahwa kasus telah dibuat. Email berisi jumlah kasus di baris subjek yang mematuhi Pengaturan makro kasus. Respon ini hanya akan dikirim ketika email pertama diterima dari penerima.',
    'LBL_MAILBOX' => 'Folder yang Dimonitor',
    'LBL_TRASH_FOLDER' => 'Folder Trash',
    'LBL_SENT_FOLDER' => 'Folder terkirim',
    'LBL_SELECT' => 'Pilih [Alt+T]',
    'LBL_MARK_READ_NO' => 'Email ditandai dihapus setelah impor',
    'LBL_MARK_READ_YES' => 'Email ditinggalkan di server setelah impor',
    'LBL_MARK_READ' => 'Tinggalkan Pesan Pada Server',
    'LBL_MAX_AUTO_REPLIES' => 'Jumlah tanggapan otomatis',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Set jumlah maksimal tanggapan otomatis untuk mengirim ke alamat email yang unik selama periode 24 jam.',
    'LBL_PERSONAL_MODULE_NAME' => 'Akun Surat Pribadi',
    'LBL_CREATE_CASE' => 'Buat Pengaduan dari Surel',
    'LBL_CREATE_CASE_HELP' => 'Pilih untuk secara otomatis membuat catatan kasus di SuiteCRM dari email yang masuk.',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Penanganan Melambung Kotak Surat',
    'LBL_MODULE_TITLE' => 'Email Masuk',
    'LBL_NAME' => 'Nama',
    'LBL_NONE' => 'Tidak ada',
    'LBL_ONLY_SINCE_NO' => 'No Periksa terhadap semua email di server mail. ',
    'LBL_ONLY_SINCE_YES' => 'Ya.',
    'LBL_PASSWORD' => 'Kata sandi',
    'LBL_EMAIL_PASSWORD' => 'Kata sandi',
    'LBL_POP3_SUCCESS' => 'Uji koneksi POP3 berhasil.',
    'LBL_POPUP_TITLE' => 'Tes Pengaturan',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Pilih Langganan Folder',
    'LBL_SELECT_TRASH_FOLDERS' => 'Pilih Trash Folder',
    'LBL_SELECT_SENT_FOLDERS' => 'Pilih Sent Folder',
    'LBL_DELETED_FOLDERS_LIST' => 'Folder berikut tidak ada atau telah dihapus dari server',
    'LBL_PORT' => 'Port Server Pesan',
    'LBL_REPLY_TO_NAME' => '\"Balas-ke\" Nama',
    'LBL_REPLY_TO_ADDR' => '\"Balas-ke\" Alamat',
    'LBL_SAME_AS_ABOVE' => 'Menggunakan Dari Nama/Alamat',
    'LBL_SERVER_OPTIONS' => 'Pengaturan Lanjutan',
    'LBL_SERVER_TYPE' => 'Mail Server Protokol',
    'LBL_SERVER_PORT' => 'Port Server Pesan',
    'LBL_SERVER_URL' => 'Alamat server mail',
    'LBL_SSL_DESC' => 'Jika mail server anda mendukung koneksi secure socket, memungkinkan hal ini akan memaksa koneksi SSL ketika mengimpor email.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Tim yang dipilih memiliki akses ke Mail Account.',
    'LBL_SSL' => 'Menggunakan SSL',
    'LBL_STATUS' => 'Status',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Sistem Default',
    'LBL_TEST_BUTTON_TITLE' => 'Tes',
    'LBL_TEST_SETTINGS' => 'Tes Pengaturan',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Koneksi berhasil diselesaikan.',
    'LBL_TEST_WAIT_MESSAGE' => 'Mohon Tunggu Sebentar...',
    'LBL_WARN_IMAP_TITLE' => 'Inbound Email Tidak Aktif',
    'LBL_WARN_IMAP' => 'Peringatan:',
    'LBL_WARN_NO_IMAP' => 'Inbound Email tidak bisa berfungsi tanpa library IMAP c-client diaktifkan/dicompile dengan modul PHP. Silakan hubungi administrator Anda untuk mengatasi masalah ini. ',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Akun Email Masuk',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Outbound Akun Email',
    'LNK_LIST_SCHEDULER' => 'Penjadwal',
    'LNK_SEED_QUEUES' => 'Benih antrian Dari Tim',
    'LBL_GROUPFOLDER_ID' => 'Grup Folder Id',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Memungkinkan pengguna untuk mengirim email menggunakan "Dari" nama dan alamat sebagai Balasan untuk alamat',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Bila opsi ini dipilih, dari nama dan dari alamat Email yang terkait dengan account e-mail grup ini akan muncul sebagai pilihan untuk kolom dari saat menulis email untuk pengguna yang memiliki akses ke account e-mail grup.',
    'LBL_STATUS_ACTIVE' => 'Aktif',
    'LBL_STATUS_INACTIVE' => 'Tidak Aktif',
    'LBL_IS_PERSONAL' => 'Pribadi',
    'LBL_IS_GROUP' => 'kelompok',
    'LBL_ENABLE_AUTO_IMPORT' => 'Impor Email secara otomatis',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Peringatan: Anda mengubah pengaturan otomasi import yang bisa menyebabkan kehilangan data.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Peringatan: Auto import harus diaktifkan jika ingin membuat case secara otomatis.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Draft',
    'LBL_LIST_TITLE_MY_INBOX' => 'Kotak masuk',
    'LBL_LIST_TITLE_MY_SENT' => 'Email terkirim',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arsip Email',
    'LNK_MY_DRAFTS' => 'Draft',
    'LNK_MY_INBOX' => 'Surel',
    'LNK_VIEW_MY_INBOX' => 'Lihat Email',
    'LNK_QUICK_REPLY' => 'Balas',
    'LNK_SENT_EMAIL_LIST' => 'Email Terkirim',
    'LBL_EDIT_LAYOUT' => 'Sunting Tata Letak' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Diubah Oleh',
    'LBL_SERVICE' => 'Pelayanan',
    'LBL_STORED_OPTIONS' => 'Pilihan disimpan',
    'LBL_GROUP_ID' => 'ID Grup',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grup Keamanan',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Outbound Email Account',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Outbound Email Account id',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Auto Reply Email Template',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Auto Reply Email Template id',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Auto Reply Email Template',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Case Email Template',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Case Email Template id',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Case Email Template',

    'LBL_PROTOCOL' => 'Protocol',
    'LBL_CONNECTION_STRING' => 'Connection String',
    'LBL_DISTRIB_METHOD' => 'Metode Distribusi',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Sambungan OAuth Eksternal',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Sambungan OAuth Eksternal',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Tipe',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Standar',
    'LBL_SIGNATURE' => 'Tanda tangan',

    'LBL_OWNER_NAME' => 'Pemilik',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
