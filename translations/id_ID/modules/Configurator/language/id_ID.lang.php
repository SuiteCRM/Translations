<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Advanced',
    'DEFAULT_CURRENCY_ISO4217' => 'kode mata uang ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Nama Mata Uang',
    'DEFAULT_CURRENCY_SYMBOL' => 'Simbol Mata Uang',
    'DEFAULT_DATE_FORMAT' => 'Default format tanggal',
    'DEFAULT_DECIMAL_SEP' => 'Simbol Desimal',
    'DEFAULT_LANGUAGE' => 'Mengatur ulang bahasa',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Default Format waktu ',

    'DISPLAY_RESPONSE_TIME' => 'Tampilan server response times',

    'IMAGES' => 'Simbol',
    'LBL_ALLOW_USER_TABS' => 'Memungkinkan pengguna untuk menyembunyikan tab',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Tampilan log',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Password:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'Menggabungkan surat',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimal Interval Dashlet Auto-Refresh',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Ini adalah nilai minimum yang satu dapat memilih untuk memiliki dashlets auto-refresh. Pengaturan untuk \'Tidak pernah\' menonaktifkan auto-refreshing dashlets sepenuhnya.',
    'LBL_MODULE_FAVICON' => 'Tampilan modul ikon sebagai favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Jika Anda adalah modul dengan ikon, menggunakan modul ikon sebagai favicon, bukan tema favicon, di browser tab.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Konfigurator',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Host Proksi',
    'LBL_PROXY_ON_DESC' => 'Konfigurasi alamat server proxy dan pengaturan otentikasi',
    'LBL_PROXY_ON' => 'Gunakan server proxy?',
    'LBL_PROXY_PASSWORD' => 'Kata sandi',
    'LBL_PROXY_PORT' => 'Pelabuhan',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Tampilan nama lengkap(tidak Login)',
    'LBL_USE_REAL_NAMES_DESC' => 'Menampilkan nama lengkap pengguna bukan nama pengguna mereka di bidang tugas.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Menonaktifkan mengkonversi memimpin tindakan untuk memimpin dikonversi',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Jika memimpin telah mualaf, mengaktifkan opsi ini akan menghapus tindakan memimpin mengkonversi.',
    'LBL_ENABLE_ACTION_MENU' => 'Tampilkan aksi diantara menu',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Pilih untuk menampilkan DetailView dan subpanel tindakan dalam dropdown menu. Jika un dipilih, tindakan akan menampilkan sebagai tombol terpisah.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable editing inline pada tampilan daftar',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Pilih untuk mengaktifkan Inline Editing untuk bidang pada tampilan daftar. Jika titiknya Inline Editing akan dinonaktifkan pada tampilan daftar.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable editing inline pada tampilan detail',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Pilih untuk mengaktifkan Inline Editing untuk bidang pada tampilan detail. Jika titiknya Inline Editing akan dinonaktifkan pada tampilan detail.',
    'LBL_HIDE_SUBPANELS' => 'Ciutkan sub panel',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Lihat Daftar item per halaman',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Subpanel item per halaman',
    'LOG_MEMORY_USAGE' => 'penggunaan memori log ',
    'LOG_SLOW_QUERIES' => 'Log permintaan lambat',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'Logo ini akan ditampilkan di tengah layar masuk aplikasi SuiteCRM.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'Format file gambar yang dapat berupa .png atau .jpg. Ketinggian maksimum adalah 170px, dan lebar maksimum adalah 450px. Upload gambar yang lebih besar ke segala arah akan diskala agar ini maks dimensi.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Format file gambar yang dapat berupa .png atau .jpg. Ketinggian maksimum adalah 170px, dan lebar maksimum adalah 450px. Upload gambar yang lebih besar ke segala arah akan diskala agar ini maks dimensi.',
    'SLOW_QUERY_TIME_MSEC' => 'Batas waktu permintaan lambat (msec)',
    'STACK_TRACE_ERRORS' => 'Menapilkan semua jejak kesalahan',
    'UPLOAD_MAX_SIZE' => 'Ukuran upload maksimum',
    'VERIFY_CLIENT_IP' => 'Validasi alamat IP pengguna',
    'LOCK_HOMEPAGE' => 'Mencegah Penyesuaian pengguna layout Homepage',
    'LOCK_SUBPANELS' => 'Mencegah penyesuaian pengguna layout subpanel',
    'MAX_DASHLETS' => 'Jumlah maksimum SuiteCRM Dashlets homepage',
    'SYSTEM_NAME' => 'Nama Sistem',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'Dukungan Otentikasi LDAP',
    'LBL_LDAP_ENABLE' => 'Aktifkan LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Peladen:',
    'LBL_LDAP_SERVER_PORT' => 'Nomor Pelabuhan:',
    'LBL_LDAP_ADMIN_USER' => 'Nama Pengguna:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Digunakan untuk mencari pengguna LDAP. Ini mungkin harus memenuhi syarat.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Kata sandi:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Mengikat ke server LDAP menggunakan kredensial pengguna tertentu. Ini akan mengikat secara anonim jika tidak disediakan.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Auto Create Users:',
    'LBL_LDAP_USER_DN' => 'Pengguna DN:',
    'LBL_LDAP_GROUP_DN' => 'Grup DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Example: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'User Filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Group Membership:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'User Attribute:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Params filter tambahan apapun untuk menerapkan ketika otentikasi pengguna misalnya <em>is_suitecrm_user = 1 atau (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Contoh: ldap.example.com atau ldaps://ldap.example.com untuk SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Example: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Contoh <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Contoh: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Ika pengguna keasliannya tidak ada, satu akan dibuat.',
    'LBL_LDAP_ENC_KEY' => 'Kunci Enkripsi:',
    'DEVELOPER_MODE' => 'Pengembang mode',

    'SHOW_DOWNLOADS_TAB' => 'Tampilan download Tab',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'Untuk otentikasi SOAP saat menggunakan LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'ekstensi php_mcrypt harus diaktifkan di file php.ini anda.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Tandai Point',
    'LBL_NEXT_' => 'Selanjutnya>>',
    'LBL_REFRESH_FROM_MARK' => 'Refresh Dari Mark',
    'LBL_SEARCH' => 'Pencariam:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignore self:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Menandai darimana untuk memulai Logging',
    'LBL_DISPLAYING_LOG' => 'Menampilkan log',
    'LBL_YOUR_PROCESS_ID' => 'proses ID  Anda',
    'LBL_YOUR_IP_ADDRESS' => 'Alamat IP Anda adalah',
    'LBL_IT_WILL_BE_IGNORED' => 'Ini akan diabaikan',
    'LBL_LOG_NOT_CHANGED' => 'Log tidak berubah',
    'LBL_ALERT_JPG_IMAGE' => 'format file gambar harus JPEG. Upload file baru dengan ekstensi file. Jpg. ',
    'LBL_ALERT_TYPE_IMAGE' => 'format file gambar harus JPEG atau PNG. Upload file baru dengan ekstensi file. Jpg atau. Png. ',
    'LBL_ALERT_SIZE_RATIO' => 'aspek rasio gambar harus berada di antara 1:1 dan 10:1. Gambar akan diubah ukurannya. ',
    'ERR_ALERT_FILE_UPLOAD' => 'Error selama upload gambar.',
    'LBL_LOGGER' => 'Pengaturan Logger',
    'LBL_LOGGER_FILENAME' => 'Nama File Log',
    'LBL_LOGGER_FILE_EXTENSION' => 'Ekstensi',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Ukuran Maksimum Log',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Level Log',
    'LBL_LEAD_CONV_OPTION' => 'Menyebabkan Konversi Pilihan',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - menciptakan dan salinan dari semua kegiatan memimpin berkaitan dengan catatan baru yang dipilih oleh pengguna selama konversi. Salinan yang dibuat untuk setiap catatan dipilih. <br><br><b>Bergerak</b> - bergerak semua kegiatan memimpin ke rekor baru yang dipilih oleh pengguna selama konversi. <br> <br><b>Tidak melakukan apa-apa</b> - tidak apa-apa dengan memimpin kegiatan selama konversi. Kegiatan tetap berhubungan dengan memimpin hanya.",
    'LBL_CONFIG_AJAX' => 'Konfigurasi Antarmuka Pengguna AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Mengaktifkan atau menonaktifkan penggunaan AJAX UI untuk modul tertentu.',
    'LBL_LOGGER_MAX_LOGS' => 'Jumlah maksimum log (sebelum bergulir)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Tambahkan setelah nama file',
    'LBL_VCAL_PERIOD' => 'Pembaharuan Jangka Waktu vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Impor - Maksimum Jumlah Baris:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Menentukan berapa banyak baris yang diperbolehkan dalam impor file. <br>Jika jumlah baris dalam file impor melebihi jumlah ini, pengguna akan diberitahu. <br>Jika tidak ada nomor yang dimasukkan, jumlah baris yang tidak terbatas diperbolehkan.',
    'vCAL_HELP' => 'Gunakan pengaturan ini untuk menentukan jumlah bulan sebelum tanggal informasi Free/Busy untuk panggilan dan pertemuan yang diterbitkan. </ BR> Untuk menonaktifkan penerbitan Free/Busy off, masukkan "0". Minimum adalah 1 bulan maksimum adalah 12 bulan. ',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Skenario anda',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Ada skenario telah dikonfigurasi',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Pilih skenario yang sesuai untuk instalasi Anda. Pilihan ini dapat diganti pasca menginstal.',

    'LBL_WIZARD_TITLE' => 'Wizard Admin',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Selamat Datang SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Klik <b>berikutnya</b> untuk merek, melokalisasi dan mengkonfigurasi SuiteCRM sekarang. Jika Anda ingin mengkonfigurasi SuiteCRM kemudian, klik <b>Lewati</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Berikutnya >',
    'LBL_WIZARD_BACK_BUTTON' => '< Sebelumnya',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Lanjutkan',
    'LBL_WIZARD_FINISH_TITLE' => 'Konfigurasi dasar sistem telah selesai',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Merek',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Memuat ......' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Menunjukkan terkait kontak email dalam sejarah subpanel untuk modul',
);
