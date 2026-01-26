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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Tidak dapat menentukan Grup',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Tidak dapat menentukan Pemilik',
    'ERR_UW_CONFIG_WRITE' => 'Kesalahan memperbarui config.php dengan informasi versi baru.',
    'ERR_UW_CONFIG' => 'Silakan membuat file config.php Anda writeable dan reload halaman ini.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Direktori tidak dapat ditulis',
    'ERR_UW_FILE_NOT_COPIED' => 'File tidak disalin',
    'ERR_UW_FILE_NOT_DELETED' => 'Error menghapus paket ',
    'ERR_UW_FILE_NOT_READABLE' => 'File tidak bisa dibaca.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'File tidak dapat dipindahkan atau ditulis ke ',
    'ERR_UW_FLAVOR_2' => 'Upgrade Flavor:',
    'ERR_UW_FLAVOR' => 'SuiteCRM System Flavor:',
    'ERR_UW_LOG_FILE_UNWRITABLE' => ',/upgradeWizard.log tidak bisa dibuat/ditulis. Harap Perbaiki hak akses pada direktori SuiteCRM Anda. ',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload set ke nilai lebih besar dari 1. Harap ubah ini dalam php.ini dan restart web server. ',
    'ERR_UW_NO_FILE_UPLOADED' => 'Silakan tentukan file dan coba lagi!',
    'ERR_UW_NO_FILES' => 'Terjadi error, tidak ada file yang ditemukan untuk diperiksa.',
    'ERR_UW_NO_MANIFEST' => 'Dalam Zip file tidak ada file manifest.php. Tidak dapat melanjutkan.',
    'ERR_UW_NO_VIEW' => 'Invalid view yang ditentukan.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Upload yang invalid.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Tidak dapat membuat direktori sementara. Check file permissions.',
    'ERR_UW_ONLY_PATCHES' => 'Anda hanya dapat meng-upload patch di halaman ini.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Kesalahan Ditemukan Selama Pemeriksaan Preflight',
    'ERR_UW_UPLOAD_ERR' => 'Ada Error saat meng-upload file, silakan coba lagi!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Versi Sistem SuiteCRM: ',
    'ERR_UW_PHP_VERSION' => 'PHP Version: ',
    'ERR_UW_SUITECRM_VERSION' => 'Versi Sistem SuiteCRM: ',
    'ERR_UW_WRONG_TYPE' => 'Halaman ini bukan untuk menjalankan ',
    'LBL_BUTTON_BACK' => '< Sebelumnya',
    'LBL_BUTTON_CANCEL' => 'Batal',
    'LBL_BUTTON_DELETE' => 'Menghapus Paket',
    'LBL_BUTTON_DONE' => 'Selesai',
    'LBL_BUTTON_EXIT' => 'Impor selesai',
    'LBL_BUTTON_NEXT' => 'Berikutnya >',
    'LBL_BUTTON_RECHECK' => 'Periksa Kembali',
    'LBL_BUTTON_RESTART' => 'Mengulang kembali',

    'LBL_UPLOAD_UPGRADE' => 'Upload sebuah upgrade:',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Backup file',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Backup file dari upgrade ini dapat ditemukan dalam',
    'LBL_UW_BACKUP' => 'File Backup',
    'LBL_UW_CANCEL_DESC' => 'Upgrade Wizard telah dibatalkan. Semua file-file sementara dan file zip yang diupload telah dihapus. <br><br>Tekan "Selesai" untuk me-restart Upgrade Wizard. ',
    'LBL_UW_CHECK_ALL' => 'Cek Semua',
    'LBL_UW_CHECKLIST' => 'Langkah Upgrade',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backup Ditimpa File yang ada di direktori berikut: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Secara manual menggabungkan file-file berikut: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Proses Upgrade : Merge File Secara Manual',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Silakan menggunakan metode mana yang familiar bagi Anda untuk menggabungkan file-file ini. Sampai ini selesai, instalasi SuiteCRM Anda akan berada dalam keadaan yang tidak tentu, dan upgrade tidak lengkap. ',
    'LBL_UW_COMPLETE' => 'Lengkap',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Semua requirement pengaturan sistem terpenuhi',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP Setting: Call Time Pass by Reference',
    'LBL_UW_COMPLIANCE_CURL' => 'Modul cURL',
    'LBL_UW_COMPLIANCE_IMAP' => 'Modul IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Modul MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Parameter MBStrings mbstring.func overload',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP Setting: Batas Memori',
    'LBL_UW_COMPLIANCE_STREAM' => 'Pengaturan PHP: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Versi Database Minimum',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Lokasi dari php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Versi Minimum PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Setting PHP: Safe Mode',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Pengaturan yang Terdeteksi',
    'LBL_UW_COMPLIANCE_XML' => 'Parsing XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Dukungan Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Versi PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'Penyalinan File Berhasil',

    'LBL_UW_DB_CHOICE1' => 'Upgrade Wizard Menjalankan SQL',
    'LBL_UW_DB_CHOICE2' => 'Query SQL Manual',
    'LBL_UW_DB_ISSUES_PERMS' => 'Hak Akses Database',
    'LBL_UW_DB_METHOD' => 'Metode Update Database',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABEL [table] TAMBAH KOLOM [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABEL [table] Ganti KOLOM [column]',
    'LBL_UW_DB_NO_CREATE' => 'BUAT TABEL [table]',
    'LBL_UW_DB_NO_DELETE' => 'HAPUS DARI [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABEL [table] DROP KOLOM [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABEL [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Semua Hak Akses Tersedia',
    'LBL_UW_DB_NO_INSERT' => 'MASUKKAN KE [table]',
    'LBL_UW_DB_NO_SELECT' => 'PILIH [x] DARI [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Hak Akses Diperlukan',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Upgrade berikut telah terinstal:',
    'LBL_UW_END_LOGOUT_PRE' => 'Upgrade selesai.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Klik Selesai untuk keluar dari Wizard Upgrade.',
    'LBL_UW_END_LOGOUT' => 'Silakan log out dari account Anda jika Anda berencana untuk upgrade lebih dari sekedar tingkat patch/upgrade.',

    'LBL_UW_FILE_DELETED' => 'telah dihapus.',
    'LBL_UW_FILE_GROUP' => 'Grup',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Izin File',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Semua File dapat ditulis</b>',
    'LBL_UW_FILE_OWNER' => 'Pemilik',
    'LBL_UW_FILE_PERMS' => 'Izin',
    'LBL_UW_FILE_UPLOADED' => 'telah diupload',
    'LBL_UW_FILE' => 'Nama File',
    'LBL_UW_FILES_QUEUED' => 'Upgrade berikut siap untuk diinstal',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Click Next to upload upgrade packages.</b>',
    'LBL_UW_FROZEN' => 'Langkah-langkah yang disyaratkan harus diselesaikan sebelum melanjutkan.',
    'LBL_UW_HIDE_DETAILS' => 'Menyembunyikan Rincian',
    'LBL_UW_IN_PROGRESS' => 'Dalam Proses',
    'LBL_UW_INCLUDING' => 'Termasuk',
    'LBL_UW_INCOMPLETE' => 'lengkap',
    'LBL_UW_MANUAL_MERGE' => 'File Merge',
    'LBL_UW_MODULE_READY' => 'Modul siap dipasang. Klik Commit untuk melanjutkan instalasi.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Tidak ada record Upgrade terdeteksi.',
    'LBL_UW_NONE' => 'Tidak ada',
    'LBL_UW_OVERWRITE_DESC' => 'Semua file yang berubah akan ditimpa, termasuk kode kustomisasi dan perubahan template yang telah Anda buat. Apakah Anda yakin ingin melanjutkan?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Buat Tugas untuk Manual Merge?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Email diri sendiri sebuah reminder untuk Manual Merge?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'File yang tercantum di bawah ini telah diubah. Hapus kotak centang yang memerlukan manual merge. <i>Setiap perubahan layout yang terdeteksi secara otomatis tidak dicentang; ubah setiap yang perlu diganti. ',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Tidak diperlukan Manual File Merge.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Tidak diperlukan.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'File yang terpelihara otomatis:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Semua tes Preflight telah berhasil. Tekan "Next" untuk melakukan perubahan ini. ',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Klik Next untuk menyalin file yang telah diupgrade ke sistem.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Note: </b> The rest of the upgrade process is mandatory, and clicking Next will require you to complete the process. If you do not wish to proceed, click the Cancel button.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Toggle Semua File',

    'LBL_UW_REBUILD_TITLE' => 'Hasil Rebuild',
    'LBL_UW_SCHEMA_CHANGE' => 'Skema Perubahan',

    'LBL_UW_SHOW_COMPLIANCE' => 'Tampilkan Pengaturan yang Terdeteksi',
    'LBL_UW_SHOW_DB_PERMS' => 'Tampilkan Database Permissions yang hilang',
    'LBL_UW_SHOW_DETAILS' => 'Tampilkan Rincian',
    'LBL_UW_SHOW_DIFFS' => 'Tampilkan File yang membutuhkan manual merge',
    'LBL_UW_SHOW_NW_FILES' => 'Tampilkan File dengan Bad Permissions',
    'LBL_UW_SHOW_SCHEMA' => 'Tampilkan script perubahan Schema',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Tampilkan Queries yang salah',
    'LBL_UW_SHOW' => 'Tampilkan',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'File yang Dilewati',
    'LBL_UW_SQL_RUN' => 'Periksa saat SQL dijalankan secara manual',
    'LBL_UW_START_DESC' => 'Selamat datang di SuiteCRM Upgrade Wizard. Wizard ini dirancang untuk membantu administrator ketika meng-upgrade SuiteCRM mereka. Silahkan ikuti petunjuk dengan seksama.',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Klik Next untuk melakukan pengecekan di sistem anda untuk memastikan sistem siap untuk upgrade. Cek mencakup hak akses file, hak istimewa database dan pengaturan server.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'New Upgrade Wizard sekarang akan melanjutkan proses upgrade. Silakan lanjutkan upgrade Anda.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Selamat datang di New Upgrade Wizard',

    'LBL_UW_TITLE_CANCEL' => 'Batal',
    'LBL_UW_TITLE_COMMIT' => 'Komitmen Upgrade',
    'LBL_UW_TITLE_END' => 'Debried',
    'LBL_UW_TITLE_PREFLIGHT' => 'Periksa Preflight',
    'LBL_UW_TITLE_START' => 'Selamat Datang',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Cek Sistem',
    'LBL_UW_TITLE_UPLOAD' => 'Upload Paket',
    'LBL_UW_TITLE' => 'Pemandu Upgrade',
    'LBL_UW_UNINSTALL' => 'Menghapus',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Terima Lisensi',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Konversi Lisensi',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Start sedang dalam proses',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'System Check sedang dalam proses',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Pemeriksaan Lisensi sedang dalam proses',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Cek Preflight sedang dalam proses',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Menyalin File dalam Proses',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Commit Upgrade sedang dalam proses',
    'LBL_UW_COMMIT_DESC' => 'Klik Berikutnya untuk menjalankan skrip upgrade tambahan.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Upgrade Scripts in Progress',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Ringkasan Upgrade sedang dalam proses',
    'LBL_UPGRADE_IN_PROGRESS' => 'sedang dalam proses',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Waktu berlalu',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Batalkan Upgrade dan Cleanup sedang dalam proses',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Upgrade mungkin memakan waktu',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Cek Upload sedang dalam proses',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Meng-upload paket upgrade',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Upgrade Wizard menghapus skema 451 yang lama',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Hapus Manual Skema Setelah Upgrade',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Metode hapus skema yang lama',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Tampilkan Skema lama yang bisa dihapus',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Query yang dilewatkan',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php versi 5 atau lebih atas diperlukan.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Versi PHP Anda tidak didukung oleh SuiteCRM. Anda akan perlu untuk menginstal sebuah versi yang kompatibel dengan aplikasi SuiteCRM. Silahkan lihat Kompatibilitas Matriks di catatan Release Versi PHP yang didukung versi ini',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Mode Backward Compatibility diaktifkan. Set zend.ze1_compatibility_mode ke Tidak aktif untuk meneruskan lebih lanjut ',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Aksi',
    'LBL_ML_CANCEL' => 'Batal',
    'LBL_ML_COMMIT' => 'Melakukan',
    'LBL_ML_DESCRIPTION' => 'Deskripsi',
    'LBL_ML_INSTALLED' => 'Tanggal Diinstal',
    'LBL_ML_NAME' => 'Nama',
    'LBL_ML_PUBLISHED' => 'Tanggal Diterbitkan',
    'LBL_ML_TYPE' => 'Tipe',
    'LBL_ML_UNINSTALLABLE' => 'Bisa Di-uninstall',
    'LBL_ML_VERSION' => 'Versi',
    'LBL_ML_INSTALL' => 'Memasang',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Versi PHP Anda saat ini: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'The recommended php version is ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' or above.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'UpgradeWizard',
    'LBL_UPLOAD_SUCCESS' => 'Paket upgrade berhasil diupload. Klik Next untuk melakukan pemeriksaan akhir.',
    'LBL_UW_TITLE_LAYOUTS' => 'Konfirmasikan Tata Letak',
    'LBL_LAYOUT_MODULE_TITLE' => 'Tata letak',
    'LBL_LAYOUT_MERGE_DESC' => 'Ada bidang baru yang tersedia yang telah ditambahkan sebagai bagian dari peningkatan ini dan dapat ditambahkan secara otomatis ke tata letak modul yang ada. Untuk mempelajari lebih lanjut tentang bidang baru, lihat Catatan Rilis untuk versi yang akan anda tingkatkan.<br><br>Jika anda tidak ingin menambahkan kolom baru, hapus modulnya, dan tata letak kustom anda akan tetap tidak berubah. Lahan akan tersedia di Studio setelah upgrade. <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Klik Next untuk mengkonfirmasi perubahan dan untuk menyelesaikan upgrade.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Klik Next untuk menyelesaikan upgrade.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Konfirmasikan Tata Letak',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Konfirmasi Hasil Tata Letak',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Tata letak berikut berhasil digabung:',
    'LBL_SELECT_FILE' => 'Select File:',
    'ERROR_VERSION_INCOMPATIBLE' => 'File yang diupload tidak kompatibel dengan versi SuiteCRM:',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'File yang diupload tidak kompatibel dengan versi SuiteCRM:',
    'LBL_LANGPACKS' => 'Paket bahasa' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Modul Loader' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Patch Upgrades' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Tema' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Alur kerja' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Tingkatkan' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Sedang memproses' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Versi yang kompatibel tidak diatur dalam file manifest',
    'LBL_UPGRD_CSTM_CHK' => 'Proses upgrade akan mengupdate beberapa file tapi file ini juga ada di custom/folder. Harap tinjau perubahannya sebelum melanjutkan:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'File yang di-upload melebihi ketentuan upload_max_filesize di php.ini.',
        2 => 'File yang di-upload melebihi MAX_FILE_SIZE perintah yang ditugaskan dalam bentuk HTML.',
        3 => 'File yang di upload hanya sebagian berhasil diupload.',
        4 => 'Tidak ada file yang diupload.',
        5 => 'Error yang tidak diketahui.',
        6 => 'Folder sementara tidak ada.',
        7 => 'Gagal untuk menulis file ke disk.',
        8 => 'File upload dihentikan oleh ekstensi.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
