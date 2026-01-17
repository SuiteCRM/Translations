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
    'LBL_BASIC_SEARCH' => 'Penyaring Cepat',
    'LBL_ADVANCED_SEARCH' => 'Penyaringan Lanjutan',
    'LBL_BASIC_TYPE' => 'Tipe Dasar',
    'LBL_ADVANCED_TYPE' => 'Tipe Lanjutan',
    'LBL_SYSOPTS_2' => 'Tipe database apa yang digunakan untuk Instansi SuiteCRM yang akan diinstal?',
    'LBL_SYSOPTS_DB' => 'Pilih Tipe Database',
    'LBL_SYSOPTS_DB_TITLE' => 'Tipe Database',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Perbaiki error berikut sebelum melanjutkan:',
    'ERR_DB_VERSION_FAILURE' => 'Tidak dapat memeriksa versi database.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Masukkan user name untuk pengguna level Administrator SuiteCRM. ',
    'ERR_ADMIN_PASS_BLANK' => 'Berikan password untuk user admin SuiteCRM. ',

    'ERR_CHECKSYS' => 'Kesalahan telah terdeteksi selama memeriksa kompatibilitas. Dalam rangka untuk Instalasi SuiteCRM Anda berfungsi dengan baik, silakan lakukan langkah-langkah yang tepat untuk mengatasi masalah yang tercantum di bawah ini dan tekan tombol recheck, atau mencoba menginstal lagi.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference is On (this should be set to Off in php.ini)',
    'ERR_CHECKSYS_CURL' => 'Tidak ditemukan: Gula Penjadwal akan berjalan dengan fungsionalitas terbatas.',
    'ERR_CHECKSYS_IMAP' => 'Tidak ditemukan: InboundEmail dan Kampanye (Email) membutuhkan Library IMAP. Tidak akan fungsional.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => 'Set ini ke',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M atau yang lebih besar dalam Fole php.ini',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Peringatan: Tidak Dapat diubah',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Versi PHP Anda tidak didukung oleh SuiteCRM. Anda akan perlu untuk menginstal sebuah versi yang kompatibel dengan aplikasi SuiteCRM. Silahkan lihat Kompatibilitas Matriks di catatan Release Versi PHP yang didukung versi ini',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Versi IIS Anda tidak didukung oleh SuiteCRM. Anda perlu menginstal versi yang kompatibel dengan aplikasi SuiteCRM. Silakan baca Matriks Kompatibilitas dalam Catatan Rilis untuk Versi IIS yang didukung. Versi Anda ',
    'ERR_CHECKSYS_FASTCGI' => 'Kami mendeteksi bahwa Anda tidak menggunakan pemetaan handler FastCGI untuk PHP. Anda perlu menginstal/mengkonfigurasi versi yang kompatibel dengan aplikasi SuiteCRM. Silakan baca Matrik Kompatibilitas dalam Catatan Rilis untuk Versi yang didukung. Silakan lihat <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> untuk detailnya ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Untuk penggunaan IIS/FastCGI sapi yang optimal, ubah fastcgi.logging menjadi 0 di file php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Database tidak tersedia',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'salah satu berikut ini didukung Jenis Database: MySQL, MS SQLServer atau Oracle. Anda mungkin perlu membuang komentar ekstensi pada file php.ini, atau rekompile dengan file biner yang tepat, tergantung pada versi PHP. Silakan merujuk ke Manual PHP untuk informasi lebih lanjut tentang cara mengaktifkan Dukungan Database.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Fungsi yang terkait dengan Library XML Parser yang dibutuhkan oleh aplikasi Gula tidak ditemukan. Anda mungkin perlu membuang komentar ekstensi pada file php.ini, atau rekompile dengan file biner yang tepat, tergantung pada versi PHP. Silakan baca PHP Manual Anda untuk informasi lebih lanjut.',
    'ERR_CHECKSYS_MBSTRING' => 'Fungsi terkait dengan ekstensi multibita Strings PHP (mbstring baru) yang dibutuhkan oleh aplikasi Gula tidak ditemukan. <br/> <br/> Umumnya, modul mbstring tidak diaktifkan secara default di PHP dan harus diaktifkan dengan - enable-mbstring ketika biner PHP dibangun. Silakan merujuk ke PHP Manual untuk informasi lebih lanjut tentang cara mengaktifkan mbstring supportinformation.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'File pengganti menimpa ada tapi tidak dapat ditulisi. Silakan mengambil langkah-langkah yang diperlukan untuk membuat file dapat ditulisi. Bergantung pada sistem Operasi Anda, ini mungkin mengharuskan Anda untuk mengubah hak akses dengan menjalankan chmod 766, atau klik kanan pada nama file untuk mengakses properti dan hapus centang pada opsi read only.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "File atau direktori yang tercantum di bawah tidak dapat ditulisi atau hilang dan tidak dapat dibuat. Bergantung pada Sistem Operasi Anda, memperbaiki ini mungkin mengharuskan Anda untuk mengubah perizinan pada file atau direktori induk (chmod 755), atau klik kanan pada direktori induk dan hapus centang pada opsi 'baca saja' dan terapkan ke semua subfolder.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Konfigurasi override',
    'ERR_CHECKSYS_SAFE_MODE' => 'Safe Mode Aktif (silakan menonaktifkan dalam php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Tidak Ditemukan: SuiteCRM menuai manfaat kinerja luar biasa dengan kompresi zlib.',
    'ERR_CHECKSYS_ZIP' => 'Dukungan ZIP tidak ditemukan: SuiteCRM memerlukan dukungan ZIP untuk mengolah file terkompresi.',
    'ERR_CHECKSYS_PCRE' => 'Perpustakaan PCRE tidak ditemukan: SuiteCRM membutuhkan perpustakaan PCRE untuk memproses gaya Perl dari pencocokan pola ekspresi reguler.',
    'ERR_CHECKSYS_PCRE_VER' => 'Versi perpustakaan PCRE: SuiteCRM membutuhkan perpustakaan PCRE 7.0 atau yang lebih tinggi untuk memproses gaya Perl dari pencocokan pola ekspresi reguler.',
    'ERR_DB_ADMIN' => 'Database yang disediakan administrator username dan / atau sandi tidak valid, dan koneksi ke database tidak dapat ditentukan. Silakan masukkan nama pengguna dan password yang valid. (Error:',
    'ERR_DB_ADMIN_MSSQL' => 'Database yang disediakan administrator username dan / atau sandi tidak valid, dan koneksi ke database tidak dapat ditentukan. Silakan masukkan nama pengguna dan password yang valid.',
    'ERR_DB_EXISTS_NOT' => 'Database yang diberikan tidak ada.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Database yang sudah ada dengan data konfigurasi. Untuk menjalankan instalasi dengan pilihan database, silakan kembali menjalankan instalasi dan pilih: "Drop dan menciptakan ada tabel SuiteCRM?" Untuk meng-upgrade, menggunakan Upgrade Wizard di Konsol Admin. Silahkan baca dokumentasi upgrade terletak <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">di sini</a>.',
    'ERR_DB_EXISTS' => 'Nama Database yang disediakan sudah ada - tidak dapat membuat yang lain dengan nama yang sama.',
    'ERR_DB_EXISTS_PROCEED' => 'Nama Database yang disediakan sudah ada. Anda dapat <br> 1. menekan tombol kembali dan pilih nama database baru <br> 2. klik next dan melanjutkan tetapi semua tabel ada di database ini akan dicabut. <strong> Ini berarti tabel Anda dan data akan ditiup pergi. </ kuat>',
    'ERR_DB_HOSTNAME' => 'Nama Host tidak dapat kosong.',
    'ERR_DB_INVALID' => 'Jenis database yang dipilih tidak valid.',
    'ERR_DB_LOGIN_FAILURE' => 'Nama pengguna database yang disediakan dan / atau sandi tidak valid, dan koneksi ke database tidak dapat ditentukan. Silakan masukkan nama pengguna dan password yang valid.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Nama pengguna database yang disediakan dan / atau sandi tidak valid, dan koneksi ke database tidak dapat ditentukan. Silakan masukkan nama pengguna dan password yang valid.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Nama pengguna database yang disediakan dan / atau sandi tidak valid, dan koneksi ke database tidak dapat ditentukan. Silakan masukkan nama pengguna dan password yang valid.',
    'ERR_DB_MYSQL_VERSION' => 'Versi MySQL Anda (%s) tidak didukung oleh SuiteCRM. Anda perlu menginstal versi yang kompatibel dengan aplikasi SuiteCRM. Silakan baca Matrik Kompatibilitas dalam Catatan Rilis untuk versi MySQL yang didukung.',
    'ERR_DB_NAME' => 'Database nama tidak dapat kosong.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Nama basis data tidak boleh berisi '\\', '/', atau '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Nama basis data tidak dapat dimulai dengan angka, '#', atau '@' dan tidak boleh berisi spasi, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', atau '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Nama database hanya bisa terdiri dari karakter alfanumerik dan simbol '#', '_' atau '$'",
    'ERR_DB_PASSWORD' => 'Kata sandi yang disediakan untuk administrator database SuiteCRM tidak cocok. Silakan masukkan kembali password yang sama di bidang sandi.',
    'ERR_DB_PRIV_USER' => 'Berikan nama database administrator pengguna. Pengguna diperlukan untuk sambungan ke database awal.',
    'ERR_DB_USER_EXISTS' => 'Nama pengguna bagi pengguna database SuiteCRM sudah ada - tidak dapat membuat yang lain dengan nama yang sama. Silakan masukkan nama pengguna baru.',
    'ERR_DB_USER' => 'Masukkan nama pengguna untuk database administrator SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'Perbaiki error berikut sebelum melanjutkan:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Kata sandi yang disediakan bagi pengguna database SuiteCRM tidak cocok. Silakan masukkan kembali password yang sama di bidang sandi.',
    'ERR_ERROR_GENERAL' => 'Kesalahan berikut yang muncul:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Tidak dapat menghapus file: ',
    'ERR_LANG_MISSING_FILE' => 'Tidak dapat menemukan file: ',
    'ERR_LANG_NO_LANG_FILE' => 'Tidak ada file paket bahasa yang ditemukan di include / bahasa dalam: ',
    'ERR_LANG_UPLOAD_1' => 'Ada masalah dengan upload Anda. Silakan coba lagi.',
    'ERR_LANG_UPLOAD_2' => 'Paket Bahasa harus Arsip ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP tidak bisa bergerak ke file direktori upgrade.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Log direktori yang disediakan adalah bukan direktori yang benar.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Log direktori yang diberikan tidak dapat ditulis.',
    'ERR_NO_DIRECT_SCRIPT' => 'Tidak dapat memproses script langsung.',
    'ERR_NO_SINGLE_QUOTE' => 'Tidak bisa memakai tanda kutip tunggal untuk ',
    'ERR_PASSWORD_MISMATCH' => 'Kata sandi yang disediakan untuk user admin SuiteCRM tidak cocok. Silakan masukkan kembali password yang sama di bidang sandi.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Tidak dapat menulis ke <span class=stop> config.php / span> file.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Anda dapat melanjutkan instalasi ini secara manual membuat file config.php dan menyisipkan informasi konfigurasi di bawah ini ke file config.php. Namun, Anda <strong> harus </ strong> membuat file config.php sebelum Anda melanjutkan ke langkah berikutnya.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Apakah Anda ingat untuk membuat file config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Peringatan: Tidak dapat menulis ke file config.php. Silahkan memastikan ada.',
    'ERR_PERFORM_HTACCESS_1' => 'Tidak bisa menulis ke ',
    'ERR_PERFORM_HTACCESS_2' => ' file.',
    'ERR_PERFORM_HTACCESS_3' => 'Jika Anda ingin mengamankan file log Anda dari yang dapat diakses melalui browser, membuat file htaccess dalam direktori login Anda dengan baris:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Kami tidak bisa mendeteksi koneksi internet. </b> Jika Anda memiliki koneksi, silahkan kunjungi <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> untuk registrasi dengan SugarCRM. Dengan memberikan sedikit informasi mengenai rencana perusahaan Anda untuk menggunakan SugarCRM, kami bisa memastikan bahwa kami akan memberikan aplikasi yang tepat untuk kebutuhan bisnis Anda.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Sesi direktori yang diberikan bukan direktori yang benar.',
    'ERR_SESSION_DIRECTORY' => 'Sesi direktori yang diberikan bukan sebuah direktori yang dapat ditulis.',
    'ERR_SESSION_PATH' => 'Sesi jalan diperlukan jika Anda ingin menentukan sendiri.',
    'ERR_SI_NO_CONFIG' => 'Anda tidak menyertakan config_si.php di root dokumen, atau Anda tidak mendefinisikan $ sugarCRM_config_si di config.php',
    'ERR_SITE_GUID' => 'Aplikasi ID diperlukan jika Anda ingin menentukan sendiri.',
    'ERROR_SPRITE_SUPPORT' => "Saat ini kami tidak dapat menemukan perpustakaan GD, akibatnya Anda tidak dapat menggunakan fungsi CSS Sprite.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Peringatan: Konfigurasi PHP harus anda ubah untuk membolehkan file minimal 6MB untuk diupload.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Ukuran File Upload',
    'ERR_URL_BLANK' => 'Menyediakan URL dasar untuk misalnya SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Tidak dapat menemukan catatan instalasi dari',
    'ERROR_MANIFEST_TYPE' => 'File Manifest harus menentukan jenis paket.',
    'ERROR_PACKAGE_TYPE' => 'File Manifest menentukan jenis paket yang tidak dikenali',
    'ERROR_VERSION_INCOMPATIBLE' => 'File yang diupload tidak kompatibel dengan versi SuiteCRM:',

    'LBL_BACK' => 'Kembali',
    'LBL_CANCEL' => 'Batal',
    'LBL_ACCEPT' => 'Saya Setuju',
    'LBL_CHECKSYS_CACHE' => 'Sub-Cache ditulisi Direktori',
    'LBL_DROP_DB_CONFIRM' => 'Nama Database yang disediakan sudah ada. <br> Anda dapat: <br> 1. Klik pada tombol Cancel dan pilih nama database baru, atau <br> 2. Klik tombol Terima dan melanjutkan. Semua tabel yang ada dalam database akan dicabut. <strong> Ini berarti bahwa semua tabel dan data yang sudah ada sebelumnya akan disingkirkan.',
    'LBL_CHECKSYS_COMPONENT' => 'Komponen',
    'LBL_CHECKSYS_CONFIG' => 'File konfigurasi SuiteCRM dapat ditulis (config.php)',
    'LBL_CHECKSYS_CURL' => 'Modul cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Custom ditulisi Direktori',
    'LBL_CHECKSYS_DATA' => 'Data ditulis Sub-Direktori',
    'LBL_CHECKSYS_IMAP' => 'Modul IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'String MB modul',
    'LBL_CHECKSYS_MEM_OK' => 'OK (tidak ada batas)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (tidak terbatas)',
    'LBL_CHECKSYS_MEM' => 'Memory PHP Limit',
    'LBL_CHECKSYS_MODULE' => 'Modul ditulis Sub-Direktori dan File',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Tidak Tersedia',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (lihat',
    'LBL_CHECKSYS_PHPVER' => 'Versi PHP',
    'LBL_CHECKSYS_IISVER' => 'Versi IIS',
    'LBL_CHECKSYS_JSON' => 'Penguraian JSON',
    'LBL_CHECKSYS_RECHECK' => 'Cek Ulang',
    'LBL_CHECKSYS_STATUS' => 'Status',
    'LBL_CHECKSYS_TITLE' => 'Periksa Sistem Penerimaan',
    'LBL_CHECKSYS_XML' => 'Parsing XML',
    'LBL_CHECKSYS_ZLIB' => 'Modul kompresi zlib',
    'LBL_CHECKSYS_ZIP' => 'Modul Penanganan ZIP',
    'LBL_CHECKSYS_PCRE' => 'Perpustakaan PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Perbaiki direktori file-file berikut sebelum melanjutkan:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Harap perbaiki direktori modul berikut dan file di bawah ini sebelum melanjutkan:',
    'LBL_CHECKSYS_UPLOAD' => 'Direktori Upload yang Dapat Ditulis',
    'LBL_CLOSE' => 'Tutup',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'dibuat',
    'LBL_CONFIRM_DB_TYPE' => 'Tipe Database',
    'LBL_CONFIRM_NOT' => 'Tidak',
    'LBL_CONFIRM_TITLE' => 'Konfirmasi Pengaturan',
    'LBL_CONFIRM_WILL' => 'akan',
    'LBL_DBCONF_DB_DROP' => 'Drop Tabel',
    'LBL_DBCONF_DB_NAME' => 'Nama Database',
    'LBL_DBCONF_DB_PASSWORD' => 'Password Pengguna SuiteCRM Database',
    'LBL_DBCONF_DB_PASSWORD2' => 'Masukkan kembali SuiteCRM Database User Password',
    'LBL_DBCONF_DB_USER' => 'Pengguna Database SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Pengguna Database SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Nama Pengguna Administrator Basis Data',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Password Admin Database',
    'LBL_DBCONF_COLLATION' => 'Pemeriksaan',
    'LBL_DBCONF_CHARSET' => 'Set Karakter',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Konfigurasi Database Lanjutan',
    'LBL_DBCONF_DEMO_DATA' => 'Mengisi Database dengan Demo Data?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Pilih Data Demo',
    'LBL_DBCONF_HOST_NAME' => 'Nama host',
    'LBL_DBCONF_HOST_INSTANCE' => 'Contoh host',
    'LBL_DBCONFIG_SECURITY' => 'Untuk tujuan keamanan, Anda dapat menentukan pengguna database eksklusif untuk koneksi ke database SuiteCRM. Pengguna ini harus mampu menulis, memperbarui dan mengambil data pada database SuiteCRM yang akan dibuat untuk hal ini. Pengguna ini bisa menjadi database administrator yang ditugaskan di atas, atau Anda dapat memberikan informasi database pengguna baru atau yang ada.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Menyediakan pengguna yang ada',
    'LBL_DBCONFIG_CREATE_DD' => 'Tentukan pengguna untuk menciptakan',
    'LBL_DBCONFIG_SAME_DD' => 'Sama seperti Admin User',
    'LBL_DBCONF_TITLE' => 'Konfigurasi Database',
    'LBL_DBCONF_TITLE_NAME' => 'Memberikan Nama Database',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Memberikan Informasi Database Pengguna',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Kata sandi',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Installer telah dijalankan sekali. Sebagai langkah keamanan, telah dinonaktifkan dari menjalankan kedua kalinya. Jika Anda benar-benar yakin ingin menjalankannya lagi, silakan kunjungi config.php file dan mencari (atau menambah) sebuah variabel disebut installer_locked dan set ke palsu. Jalur ini akan terlihat seperti ini:',
    'LBL_DISABLED_HELP_1' => 'Untuk bantuan instalasi, silakan kunjungi SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'Instalasi SuiteCRM telah diakses',
    'LBL_HELP' => 'Bantuan',
    'LBL_INSTALL' => 'Memasang',
    'LBL_INSTALL_TYPE_TITLE' => 'Pilihan Setup',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Pilih Jenis Instal',
    'LBL_INSTALL_TYPE_TYPICAL' => 'Khas Instal',
    'LBL_INSTALL_TYPE_CUSTOM' => 'Custom Install',
    'LBL_INSTALL_TYPE_MSG2' => 'Memerlukan informasi minimum untuk instalasi. Direkomendasikan untuk pengguna baru.',
    'LBL_INSTALL_TYPE_MSG3' => 'Menyediakan pilihan tambahan untuk mengatur selama instalasi. Sebagian besar dari pilihan ini juga tersedia setelah instalasi di layar admin. Direkomendasikan untuk pengguna tingkat lanjut.',
    'LBL_LANG_1' => 'Untuk menggunakan bahasa SuiteCRM selain bahasa default (AS-Inggris), Anda dapat meng-upload dan menginstal paket bahasa saat ini. Anda akan bisa mengupload dan menginstal paket bahasa dari dalam aplikasi SuiteCRM juga. Jika Anda ingin melewatkan langkah ini, klik Next',
    'LBL_LANG_BUTTON_COMMIT' => 'Memasang',
    'LBL_LANG_BUTTON_REMOVE' => 'Menghapus',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Menghapus',
    'LBL_LANG_BUTTON_UPLOAD' => 'Meng-upload',
    'LBL_LANG_NO_PACKS' => 'Nihil',
    'LBL_LANG_PACK_INSTALLED' => 'Paket bahasa berikut telah terinstal: ',
    'LBL_LANG_PACK_READY' => 'Paket bahasa berikut siap untuk diinstal: ',
    'LBL_LANG_SUCCESS' => 'Paket bahasa yang telah berhasil di-upload.',
    'LBL_LANG_TITLE' => 'Paket Bahasa',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Instalasi SuiteCRM sekarang. Ini mungkin memerlukan waktu hingga beberapa menit.',
    'LBL_LANG_UPLOAD' => 'Upload Paket Bahasa',
    'LBL_LICENSE_ACCEPTANCE' => 'Lisensi Penerimaan',
    'LBL_LICENSE_CHECKING' => 'Memeriksa sistem untuk kompatibilitas.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Memeriksa Lingkungan',
    'LBL_LICENSE_CHKDB_HEADER' => 'Memeriksa Kredensial DB.',
    'LBL_LICENSE_CHECK_PASSED' => 'Memeriksa Sistem kompatibel berlalu.',
    'LBL_CREATE_CACHE' => 'Menyiapkan untuk memasang...',
    'LBL_LICENSE_REDIRECT' => 'Mengarahkan dalam',
    'LBL_LICENSE_I_ACCEPT' => 'Saya Setuju',
    'LBL_LICENSE_PRINTABLE' => 'Printable View',
    'LBL_PRINT_SUMM' => 'Cetak Ringkasan',
    'LBL_LICENSE_TITLE_2' => 'Lisensi SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'Budiman',
    'LBL_LOCALE_NAME_LAST' => 'Suryagantara',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Aksi',
    'LBL_ML_DESCRIPTION' => 'Deskripsi',
    'LBL_ML_INSTALLED' => 'Tanggal Diinstal',
    'LBL_ML_NAME' => 'Nama',
    'LBL_ML_PUBLISHED' => 'Tanggal Diterbitkan',
    'LBL_ML_TYPE' => 'Tipe',
    'LBL_ML_UNINSTALLABLE' => 'Bisa Di-uninstall',
    'LBL_ML_VERSION' => 'Versi',
    'LBL_MSSQL' => 'Server SQL',
    'LBL_MSSQL2' => 'Server SQL  (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver untuk PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (ekstensi mysqli)',
    'LBL_NEXT' => 'Berikutnya',
    'LBL_NO' => 'Tidak',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Pengaturan sandi situs admin',
    'LBL_PERFORM_CONFIG_PHP' => 'Membuat file konfigurasi SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => 'Membuat Dtabase',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>Dalam</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Membuat nama pengguna dan password DatabasE',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Membuat default data SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Menciptakan standar pekerjaan penjadwal',
    'LBL_PERFORM_DEFAULT_USERS' => 'Membuat user default',
    'LBL_PERFORM_DEMO_DATA' => 'Mengisi tabel database dengan data demo (ini mungkin memerlukan sedikit sementara)',
    'LBL_PERFORM_DONE' => 'selesai<br>',
    'LBL_PERFORM_FINISH' => 'Selesai',
    'LBL_PERFORM_OUTRO_1' => 'setup SuiteCRM',
    'LBL_PERFORM_OUTRO_2' => 'sekarang lengkap!',
    'LBL_PERFORM_OUTRO_3' => 'Total waktu: ',
    'LBL_PERFORM_OUTRO_4' => 'Kedua.',
    'LBL_PERFORM_OUTRO_5' => 'Perkiraan memori yang digunakan: ',
    'LBL_PERFORM_OUTRO_6' => ' byte.',
    'LBL_PERFORM_SUCCESS' => 'Sukses!',
    'LBL_PERFORM_TABLES' => 'Membuat tabel aplikasi SuiteCRM, tabel hubungan audit dan metadata',
    'LBL_PERFORM_TITLE' => 'Melakukan Setup',
    'LBL_PRINT' => 'Cetak',
    'LBL_REG_CONF_1' => 'Silakan mengisi formulir singkat di bawah ini untuk menerima pengumuman produk, berita pelatihan, penawaran khusus dan undangan acara khusus dari SuiteCRM. Kami tidak menjual, menyewakan, berbagi atau mendistribusikan informasi yang dikumpulkan di sini untuk pihak ketiga.',
    'LBL_REG_CONF_3' => 'Terima kasih untuk mendaftar. Klik pada tombol Finish untuk login ke SuiteCRM. Anda harus login untuk pertama kalinya menggunakan username "admin" dan password yang Anda masukkan di langkah 2.',
    'LBL_REG_TITLE' => 'Pendaftaran',

    'LBL_REQUIRED' => 'Harus diisi',

    'LBL_SITECFG_ADMIN_Name' => 'Aplikasi Nama Admin SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Masukkan kembali User Password Admin SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'User Password Admin SuiteCRM ',
    'LBL_SITECFG_APP_ID' => 'Aplikasi ID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Jika dipilih, Anda harus menyediakan aplikasi ID untuk overwrite ID otomatis dihasilkan. ID memastikan bahwa sesi satu contoh SugaCRM yang tidak digunakan oleh instansi lain. Jika Anda memiliki sekelompok instalasi SuiteCRM, mereka semua harus berbagi aplikasi yang sama ID.',
    'LBL_SITECFG_CUSTOM_ID' => 'Menyediakan Aplikasi Memiliki ID Anda',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Jika dipilih, Anda harus menentukan direktori log untuk mengganti direktori default untuk log SuiteCRM. Terlepas dari mana berkas log terletak, akses ke sana melalui browser web akan dibatasi melalui htaccess. Redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Gunakan Direktori Log Custom',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Jika dipilih, Anda harus menyediakan sebuah folder aman untuk menyimpan informasi sesi SuiteCRM. Hal ini dapat dilakukan untuk mencegah data sesi dari yang rentan di server bersama.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Gunakan Direktori Sesi Custom untuk SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => 'Harap perbaiki kesalahan berikut sebelum melanjutkan:',
    'LBL_SITECFG_LOG_DIR' => 'Direktori log',
    'LBL_SITECFG_SESSION_PATH' => 'Jalur Sesi Direktori (harus ditulis)',
    'LBL_SITECFG_SITE_SECURITY' => 'Pilih Pilihan Keamanan',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Jika dipilih, sistem secara berkala akan memeriksa versi update dari aplikasi.',
    'LBL_SITECFG_SUITE_UP' => 'Periksa secara otomatis Pembaharuan?',
    'LBL_SITECFG_TITLE' => 'Konfigurasi Situs',
    'LBL_SITECFG_TITLE2' => 'Mengidentifikasi Admin Pengguna',
    'LBL_SITECFG_SECURITY_TITLE' => 'Keamanan Situs',
    'LBL_SITECFG_URL' => 'URL Instansi SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Kirim Statistik Penggunaan Anonymous?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Jika dipilih, SuiteCRM akan mengirimkan anonim statistik tentang instalasi Anda ke SuiteCRM Inc setiap kali sistem anda memeriksa versi baru. Informasi ini akan membantu kami lebih memahami bagaimana aplikasi yang digunakan dan perbaikan panduan untuk produk.',
    'LBL_SITECFG_URL_MSG' => 'Masukkan URL yang akan digunakan untuk mengakses instance Gula setelah instalasi. URL juga akan digunakan sebagai dasar untuk URL di halaman aplikasi SuiteCRM. URL harus menyertakan web server atau mesin nama atau alamat IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Masukkan nama untuk sistem anda. Nama ini akan ditampilkan dalam judul bar browser ketika pengguna mengunjungi aplikasi SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Setelah instalasi, Anda akan perlu menggunakan SuiteCRM user admin (username = admin) untuk Login ke instansi SuiteCRM. Masukkan password untuk user administrator. Password ini dapat diubah setelah login awal. Anda juga bisa memasukkan user name administrator lainnya selain yang default yang disediakan.',
    'LBL_SITECFG_COLLATION_MSG' => 'Pilih pengaturan pemeriksaan (sortasi) untuk sistem Anda. Pengaturan ini akan membuat tabel dengan bahasa tertentu yang Anda gunakan. Jika bahasa Anda tidak memerlukan pengaturan khusus, gunakan nilai default.',
    'LBL_SPRITE_SUPPORT' => 'Dukungan Sprite',
    'LBL_SYSTEM_CREDS' => 'Sistem Kredensial',
    'LBL_SYSTEM_ENV' => 'Sistem Lingkungan',
    'LBL_SHOW_PASS' => 'Tampilkan sandi',
    'LBL_HIDE_PASS' => 'Sembunyikan sandi',
    'LBL_HIDDEN' => 'Tersembunyui',
    'LBL_STEP1' => 'Langkah 1 dari 2 - Persyaratan Pra-Instalasi',
    'LBL_STEP2' => 'Langkah 2 dari 2 - Konfigurasi',
    'LBL_STEP' => 'Langkah',
    'LBL_TITLE_WELCOME' => 'Selamat datang di SuiteCRM',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Apakah Anda siap untuk menginstal?',
    'REQUIRED_SYS_COMP' => 'Diperlukan Sistem Komponen',
    'REQUIRED_SYS_COMP_MSG' =>
        'Sebelum memulai, pastikan Anda memiliki versi komponen sistem yang didukung berikut ini:<br>
                      <ul>
                      <li> Sistem Manajemen Basis Data/Database (Contoh: MariaDB, MySQL atau SQL Server)</li>
                      <li> Server Web (Apache, IIS)</li>
                      </ul>
                      Konsultasikan Matriks Kompatibilitas dalam Catatan Rilis untuk
                      komponen sistem yang kompatibel untuk versi SuiteCRM yang Anda pasang. <br>',
    'REQUIRED_SYS_CHK' => 'Sistem awal Periksa',
    'REQUIRED_SYS_CHK_MSG' =>
        'Saat Anda memulai proses instalasi, pemeriksaan sistem akan dilakukan di server web tempat file-file SuiteCRM berada
                      pastikan sistem dikonfigurasi dengan benar dan memiliki semua komponen yang diperlukan
                      untuk berhasil menyelesaikan instalasi. <br><br>
                      Sistem memeriksa semua hal berikut:<br>
                      <ul>
                      <li><b>Versi PHP</b> &#8211; harus kompatibel dengan aplikasi</li>
                      <li><b>Variabel Sesi</b> &#8211; harus bekerja dengan baik</li>
                      <li><b>Senar MB</b> &#8211; harus diinstal dan diaktifkan di php.ini</li>
                      <li><b>Dukungan Database</b> &#8211; harus ada untuk MariaDB, MySQL atau SQL Server</li>
                      <li><b>Config.php</b> &#8211; harus ada dan harus memiliki izin yang sesuai untuk membuatnya dapat ditulisi</li>
                      <li>File-file SuiteCRM berikut harus dapat ditulisi:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  Jika cek gagal, Anda tidak akan bisa melanjutkan pemasangan.
                                  Pesan kesalahan akan ditampilkan, menjelaskan mengapa sistem Anda tidak melewati cek.
                                  Setelah melakukan perubahan yang diperlukan, Anda bisa menjalani pemeriksaan sistem lagi untuk melanjutkan penginstalan.<br>',


    'REQUIRED_INSTALLTYPE' => 'Khas atau instalasi kostum',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Setelah memeriksa sistem ini, Anda dapat memilih antara umum atau installation.Untuk Custom baik umum dan Customs tallations, Anda perlu tahu yang berikut Jenis database yang ada di Home. tipe data SuiteCRM Kompatibel dengan database: MySQL, MS SQL Server, peramal.
                      Nama server web atau mesin (host) pada database yang terletak ini mungkin localhost jika database yang di komputer lokal Anda atau pada server web yang sama atau mesin sebagai file SuiteCRM Anda.
                      Nama database yang akan Anda gunakan untuk Home data SuiteCRM Anda mungkin sudah memiliki database yang sudah ada yang Anda ingin gunakan Jika Anda memberikan nama database yang sudah ada, tabel dalam database akan dijatuhkan pada saat instalasi skema untuk database SuiteCRM didefinisikan.
                      Jika Anda belum mempunyai database, nama yang Anda berikan akan digunakan untuk database baru yang dibuat misalnya selama pemasangan.
                      Database administrator nama pengguna dan password database administrator harus mampu membuat tabel dan pengguna dan menulis ke database Anda mungkin perlu hubungi administrator database Anda untuk informasi ini jika database tidak terletak pada komputer lokal Anda dan / atau jika Anda bukan Administrator Nama Pengguna dan Sandi database SuiteCRM.                       
			    Mungkin Pengguna administrator database, atau Anda dapat memberikan nama pengguna lain database yang ada.
                      Jika Anda ingin membuat user database baru untuk tujuan ini, Anda akan dapat memberikan nama pengguna dan password baru selama proses instalasi, dan pengguna akan dibuat selama instalasi.
			    Untuk setup Custom, Anda juga mungkin perlu tahu yang berikut: URL yang akan digunakan untuk mengakses instansi SuiteCRM setelah diinstal.
                      URL ini harus mencakup mesin web server atau nama atau alamat IP.
                      [Opsional] Path ke direktori sesi jika Anda ingin menggunakan direktori sesi kustom untuk informasi SuiteCRM untuk mencegah data sesi frombeing rentan pada server bersama.
                      [Opsional] Path ke direktori log kustom jika Anda ingin overwrite direktori default untuk log SuiteCRM.
                      [Opsional] Application ID jika Anda ingin overwrite ID auto-generated yang memastikan bahwa sesi satu contoh SuiteCRM tidak digunakan oleh instansi lain.
                      Character Set yang paling umum digunakan di tempat Anda.
                      Untuk informasi lebih lanjut, bacalah Panduan Instalasi.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Silakan baca informasi penting berikut sebelum melanjutkan dengan instalasi. Informasi yang akan membantu Anda menentukan apakah Anda siap untuk menginstal aplikasi pada saat ini.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => 'Pilih bahasa anda',
    'LBL_WELCOME_SETUP_WIZARD' => 'Petunjuk penggunaan',
    'LBL_WIZARD_TITLE' => 'Setup Wizard SuiteCRM : ',
    'LBL_YES' => 'Ya',

    'LBL_PATCHES_TITLE' => 'Instal Patch terbaru',
    'LBL_MODULE_TITLE' => 'Download & Install Paket Bahasa',
    'LBL_PATCH_1' => 'Jika Anda ingin melewatkan langkah ini, klik Next.',
    'LBL_PATCH_TITLE' => 'Sistem Patch',
    'LBL_PATCH_READY' => 'Patch berikut siap untuk diinstal:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM bergantung pada sesi PHP untuk menyimpan informasi penting saat terhubung ke server web ini. Instalasi PHP Anda tidak memiliki informasi Sesi yang dikonfigurasi dengan benar.
											<br><br>A Kesalahan konfigurasi yang umum adalah perintah <b>'session.save_path'</b> tidak mengarah ke direktori yang valid. <br>
											<br> Perbaiki <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>konfigurasi PHP</a> Anda di file php.ini yang terletak di sini di bawah ini.",
    'LBL_SESSION_ERR_TITLE' => 'Kesalahan Sesi Konfigurasi PHP',
    'LBL_SYSTEM_NAME' => 'Nama Sistem',
    'LBL_COLLATION' => 'Setelan Kolasi',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Menyediakan Sistem Contoh Nama SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Pilih file patch dari komputer lokal Anda',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php versi 5 atau lebih atas diperlukan.',
    'LBL_MINIMUM_PHP_VERSION' => 'versi php  minimum yang dibutuhkan adalah 5.1.0. Fitur Php adalah versi 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => 'versi php Anda saat ini adalah ',
    'LBL_RECOMMENDED_PHP_VERSION' => 'versi php 5.2.x Fitur adalah',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Mode Backward Compatibility diaktifkan. Set zend.ze1_compatibility_mode ke Tidak aktif untuk meneruskan lebih lanjut ',
    'LBL_STREAM' => 'PHP memungkinkan untuk menggunakan aliran',

    'advanced_password_new_account_email' => array(
        'subject' => 'Informasi akun baru',
        'type' => 'sistem',
        'description' => 'Template ini digunakan saat Administrator Sistem mengirimkan kata sandi baru ke pengguna.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Berikut adalah username dan password sementara akun anda:</p><p>Nama pengguna : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Setelah masuk menggunakan kata sandi di atas, Anda mungkin diminta menyetel ulang kata sandi ke salah satu pilihan Anda sendiri.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Berikut adalah username dan password sementara akun anda:
Username : $contact_user_user_name
Password : $contact_user_user_hash

$config_site_url

Setelah masuk menggunakan kata sandi di atas, Anda mungkin diminta menyetel ulang kata sandi ke salah satu pilihan Anda sendiri.',
        'name' => 'Email sandi yang dihasilkan oleh sistem',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Setel ulang kata sandi akun Anda',
        'type' => 'sistem',
        'description' => "Template ini digunakan untuk mengirim tautan kepada pengguna untuk mengeklik untuk menyetel ulang sandi akun pengguna.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Anda baru saja meminta $contact_user_pwd_last_changed untuk bisa mereset password akun anda. </p><p>Klik pada link di bawah ini untuk mereset kata sandi Anda:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Anda baru saja meminta $contact_user_pwd_last_changed untuk bisa mereset password akun anda.

Klik pada link di bawah ini untuk mereset kata sandi Anda:

$contact_user_link_guid',
        'name' => 'Lupa Password email',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Kode Otentikasi Dua Faktor',
        'type' => 'sistem',
        'description' => "Templat ini digunakan untuk mengirimkan kode Otentikasi Dua Faktor.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>kode Otentikasi Dua Faktor adalah <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Kode Otentikasi Dua Faktor adalah $code.',
        'name' => 'Email Otentikasi Dua Faktor',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => ' "Dari" Nama:',
    'LBL_FROM_ADDR' => ' "Dari" Alamat:',

    'LBL_WIZARD_SMTP_DESC' => 'Silah mengisi email account yang akan digunakan untuk mengirim email seperti notifikasi penugasan dan password baru untuk Pengguna. Pengguna akan menerima email dari SuiteCRM, sebagaimana dikirim dari email account yang sudah dikonfigurasi.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pilih Penyedia Email Anda :',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Lainnya',
    'LBL_MAIL_SMTP_SETTINGS' => 'Spesifikasi Server SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Server SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gunakan Otentikasi SMTP?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Mampukan SMTP lewat SSL atau TLS',
    'LBL_GMAIL_SMTPUSER' => 'Alamat Email Gmail:',
    'LBL_GMAIL_SMTPPASS' => 'Password Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Perbolehkan para pengguna untuk menggunakan account ini untuk outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Jika opsi ini dipilih, maka semua pengguna akan bisa mengirimkan email melalui outoing mail account yang sama dengan yang digunakan untuk mengirim notifikasi dan peringatan sistem. Jika opsi ini tidak dipilih, para pengguna masih bisa menggunakan outgoing mail server setelah menyediakan informasi account mereka.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Password Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail:',

    'LBL_EXCHANGE_SMTPPASS' => 'Password Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'User Name Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Port Server Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange:',


    'LBL_MAIL_SMTPUSER' => 'Nama Pengguna SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Password SMTP :',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Merek',
    'LBL_WIZARD_SYSTEM_DESC' => 'Silahkan mengisi nama dan logo perusahaan dengan tujuan memberikan brand pada SuiteCRM Anda.',
    'SYSTEM_NAME_WIZARD' => 'Nama:',
    'SYSTEM_NAME_HELP' => 'Ini adalah nama yang ditampilkan di title bar di browser Anda.',
    'NEW_LOGO' => 'Pilih Logo',
    'NEW_LOGO_HELP' => 'Format file gambar yang dapat berupa .png atau .jpg. Ketinggian maksimum adalah 170px, dan lebar maksimum adalah 450px. Upload gambar yang lebih besar ke segala arah akan diskala agar ini maks dimensi.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Meng-upload',
    'CURRENT_LOGO' => 'Logo saat ini',
    'CURRENT_LOGO_HELP' => 'Logo ini akan ditampilkan di tengah layar masuk aplikasi SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Skenario Seleksi',
    'LBL_WIZARD_SCENARIO_DESC' => 'Hal ini untuk memungkinkan penyesuaian modul yang ditampilkan berdasarkan kebutuhan Anda. Masing-masing modul dapat diaktifkan setelah menginstal menggunakan halaman administrasi.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Tidak ada skenario yang saat ini ada di file konfigurasi (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Pengaturan Sistem Lokal',
    'LBL_WIZARD_LOCALE_DESC' => 'Atur bagaimana Anda ingin agar data ditampilkan dalam SuiteCRM berdasarkan lokasi geografis Anda. Pengaturan yang Anda berikan akan menjadi pengaturan default. Pengguna bisa memilih preferensi mereka.',
    'LBL_DATE_FORMAT' => 'Format Tanggal:',
    'LBL_TIME_FORMAT' => 'Format Waktu:',
    'LBL_TIMEZONE' => 'Zona Waktu:',
    'LBL_LANGUAGE' => 'Bahasa:',
    'LBL_CURRENCY' => 'Mata Uang:',
    'LBL_CURRENCY_SYMBOL' => 'Simbol mata uang:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 Kode mata uang:',
    'LBL_NUMBER_GROUPING_SEP' => 'Separator 1000s',
    'LBL_DECIMAL_SEP' => 'Simbol Desimal',
    'LBL_NAME_FORMAT' => 'Format nama:',
    'UPLOAD_LOGO' => 'Harap tunggu, sedang mengunggah logo..',
    'ERR_UPLOAD_FILETYPE' => 'Jenis file tidak diijinkan, silahkan upload jpeg atau png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Terjadi kesalahan upload file tidak diketahui.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'File yang di-upload melebihi ketentuan upload_max_filesize di php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'File yang di-upload melebihi MAX_FILE_SIZE perintah yang ditugaskan dalam bentuk HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'File yang di upload hanya sebagian berhasil diupload.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Tidak ada file yang diupload.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Folder sementara tidak ada.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Gagal untuk menulis file ke disk.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Ekstensi PHP menghentikan pengunggahan file. PHP tidak menyediakan cara untuk memastikan ekstensi mana yang menyebabkan file upload berhenti.',

    'LBL_INSTALL_PROCESS' => 'Memasang...',

    'LBL_EMAIL_ADDRESS' => 'Alamat Surel:',
    'ERR_ADMIN_EMAIL' => 'Alamat Email Administrator salah.',
    'ERR_SITE_URL' => 'URL situs diperlukan.',

    'STAT_CONFIGURATION' => 'Hubungan konfigurasi...',
    'STAT_CREATE_DB' => 'Buat database...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Buat pengaturan default...',
    'STAT_INSTALL_FINISH' => 'Pemasangan selesai...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Proses instalasi selesai, <a href="%s">silakan login...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Mohon terima lisensi terlebih dahulu',

    'LBL_MORE_OPTIONS_TITLE' => 'Pilihan lainnya',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Kesalahan database',
    'LBL_OLD_PHP' => 'PHP versi lama terdeteksi!',
    'LBL_OLD_PHP_MSG' => 'Versi PHP yang disarankan untuk menginstal SuiteCRM adalah %s <br />Versi PHP minimum yang dibutuhkan adalah %s<br />Anda menggunakan versi PHP %s, yaitu EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Harap upgrade versi PHP Anda. ',
    'LBL_OLD_PHP_OK' => 'Saya sadar akan risikonya dan ingin terus berlanjut.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Pengguna',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Nama Database',
    'LBL_DBCONFIG_MSG3' => 'Nama database yang akan berisi data untuk SuiteCRM misalnya Anda akan menginstal:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Nama host',
    'LBL_DBCONFIG_MSG2' => 'Nama server web atau mesin (tuan rumah) yang di atasnya database ditempatkan; terletak (seperti www.mydomain.com). Jika penerapan di tempat itu, adalah lebih baik untuk menggunakan \'localhost\' dibanding \'127.0.0.1\', untuk pertimbangan kinerja.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Username dan password dari database administrator yang dapat menciptakan database dan tabel pengguna dan siapa yang dapat menulis ke database diperlukan untuk mengatur database SuiteCRM.'
);
