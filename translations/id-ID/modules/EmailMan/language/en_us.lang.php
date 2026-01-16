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
    'LBL_SEND_DATE_TIME' => 'Kirim Tanggal',
    'LBL_IN_QUEUE' => 'Dalam Proses',
    'LBL_IN_QUEUE_DATE' => 'Tanggal Antri',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Gunakan hanya nilai integer untuk menentukan jumlah email yang dikirim per batch',

    'LBL_ATTACHMENT_AUDIT' => 'sudah dikirim. Tidak digandakan secara lokal untuk menghemat penggunaan disk.',
    'LBL_CONFIGURE_SETTINGS' => 'Konfigurasi Pengaturan Email',
    'LBL_CUSTOM_LOCATION' => 'Definisi pengguna',
    'LBL_DEFAULT_LOCATION' => 'Standar',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Hapus catatan & Attachment terkait dengan Emails',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Otomatis mengirimkan Pilihan di Surel',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Konfirmasikan Keikutsertaan dalam Template Email',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Konfigurasi Mail Keluar',
    'LBL_EMAILS_PER_RUN' => 'Jumlah email yang dikirim per batch:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Kampanye',
    'LBL_LIST_FORM_TITLE' => 'Antrian',
    'LBL_LIST_FROM_NAME' => 'Dari Nama',
    'LBL_LIST_IN_QUEUE' => 'Dalam Proses',
    'LBL_LIST_MESSAGE_NAME' => 'Marketing MEssage',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Email penerima',
    'LBL_LIST_RECIPIENT_NAME' => 'Nama penerima',
    'LBL_LIST_SEND_ATTEMPTS' => 'Upaya Pengiriman',
    'LBL_LIST_SEND_DATE_TIME' => 'Dikirim pada',
    'LBL_LIST_USER_NAME' => 'Nama Pemakai',
    'LBL_LOCATION_ONLY' => 'Lokasi',
    'LBL_LOCATION_TRACK' => 'Lokasi kampanye pelacak berkas (seperti campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Simpan salinan pesan campaign:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Apakah Anda ingin menyimpan salinan lengkap <bold> SETIAP </ bold> pesan email yang dikirim selama semua campaign? <bold> Kami merekomendasikan dan default untuk tidak </ bold>. Memilih no hanya akan menyimpan template yang dikirimkan dan variabel yang diperlukan untuk membuat pesan individu. ',
    'LBL_MAIL_SENDTYPE' => 'Agen Mengirim Surat:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gunakan Otentikasi SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Kata sandi:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Server SMTP :',
    'LBL_MAIL_SMTPUSER' => 'Username SMTP :',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pilih Penyedia Email Anda',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Password Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail',
    'LBL_GMAIL_SMTPPASS' => 'Password Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Alamat Email Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Password Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'Username Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Port Server Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange',
    'LBL_EMAIL_LINK_TYPE' => 'Klien Email',
    'LBL_MARKETING_ID' => 'ID Pemasaran',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Pengaturan Email',
    'LBL_MODULE_TITLE' => 'Pengaturan Antrian Outbound Email',
    'LBL_NOTIFICATION_ON_DESC' => 'Saat diaktifkan, email dikirim ke user ketika record ditugaskan kepada mereka. ',
    'LBL_NOTIFY_FROMADDRESS' => ' "Dari" Alamat:',
    'LBL_NOTIFY_FROMNAME' => ' "Dari" Nama:',
    'LBL_NOTIFY_ON' => 'Pemberitahuan Penugasan',
    'LBL_NOTIFY_TITLE' => 'Pilihan Email',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Pilihan Outbound Email',
    'LBL_RELATED_ID' => 'ID Terkait',
    'LBL_RELATED_TYPE' => 'Tipe Terkait',
    'LBL_SEARCH_FORM_TITLE' => 'Antrian Pencarian',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Nilai config.php pengaturan site_url',
    'TXT_REMOVE_ME_ALT' => 'Untuk menghapus diri sendiri dari daftar email ini pergi ke',
    'TXT_REMOVE_ME_CLICK' => 'Klik di sini',
    'TXT_REMOVE_ME' => 'Untuk menghapus diri sendiri dari daftar email ini',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Email Pengaturan Keamanan',
    'LBL_SECURITY_DESC' => 'Periksa yang berikut ini harus TIDAK diperbolehkan melalui Inbound Email atau ditampilkan dalam modul Email.',
    'LBL_SECURITY_APPLET' => 'Menandai Applet',
    'LBL_SECURITY_BASE' => 'Base Tag',
    'LBL_SECURITY_EMBED' => 'Sematkan tanda',
    'LBL_SECURITY_FORM' => 'Bentuk tanda',
    'LBL_SECURITY_FRAME' => 'Bingkai tanda',
    'LBL_SECURITY_FRAMESET' => 'Set bingkai tanda',
    'LBL_SECURITY_IFRAME' => 'tanda iBingkai',
    'LBL_SECURITY_IMPORT' => 'Impor tanda',
    'LBL_SECURITY_LAYER' => 'Lapisan tanda',
    'LBL_SECURITY_LINK' => 'Tautan tanda',
    'LBL_SECURITY_OBJECT' => 'Obyek tanda',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Pilih setelan minimum baku Outlook (keliru di bagian tampilan yang benar).',
    'LBL_SECURITY_STYLE' => 'Gaya tanda',
    'LBL_SECURITY_TOGGLE_ALL' => 'Toggle Semua Pilihan',
    'LBL_SECURITY_XMP' => 'XMP tag',
    'LBL_YES' => 'Ya',
    'LBL_NO' => 'Tidak',
    'LBL_PREPEND_TEST' => '[Test]:',
    'LBL_SEND_ATTEMPTS' => 'Upaya Pengiriman',
    'LBL_OUTGOING_SECTION_HELP' => 'Konfigurasi default outgoing mail server untuk mengirimkan email pemberitahuan, termasuk alert workflow.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Jika opsi ini dipilih, semua user bisa mengirim email menggunakan outgoing mail yang sama dengan mail account yang digunakan untuk mengirimkan notifikasi sistem dan alert.<br>Jika opsi ini tidak dipilih make user masih bisa menggunakan outgoing mail server dengan menyediakan informasi account mereka.',
    'LBL_FROM_ADDRESS_HELP' => 'Ketika sudah diaktifkan, nama pengguna yang ditugaskan dan surel akan termasuk ke dalam bentuk bagan dari surel. Fitur ini mungkin tidak akan berkerja dengan peladen SMTP yang tidak mengizinkan untuk mengirim dari akun surel yang berbeda daripada akun peladen.',
    'LBL_HELP' => 'Bantuan' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Lihat Akun Email Outbound',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
);
