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
    'LBL_ASSIGNED_TO_NAME' => 'Pengguna SuitCRM',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Tanggal dibuat',
    'LBL_DATE_MODIFIED' => 'Tanggal dibuat',
    'LBL_MODIFIED' => 'Diubah Oleh',
    'LBL_MODIFIED_NAME' => 'Diubah oleh Nama',
    'LBL_CREATED' => 'Dibuat Oleh',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_DELETED' => 'Dihapus',
    'LBL_NAME' => 'Nama Aplikasi Pengguna',
    'LBL_CREATED_USER' => 'Dibuat Oleh Pengguna',
    'LBL_MODIFIED_USER' => 'Dimodifikasi Oleh Pengguna',
    'LBL_LIST_NAME' => 'Nama',
    'LBL_LIST_FORM_TITLE' => 'Daftar Akun Eksternal',
    'LBL_MODULE_NAME' => 'Akun Eksternal',
    'LBL_MODULE_TITLE' => 'Akun Eksternal',
    'LBL_HOMEPAGE_TITLE' => 'Akun Eksternal Saya',
    'LNK_NEW_RECORD' => 'Buat Akun Eksternal',
    'LNK_LIST' => 'Lihat Akun Eksternal',
    'LBL_SEARCH_FORM_TITLE' => 'Cari Sumber Eksternal',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lihat Histori',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktifitas',
    'LBL_NEW_FORM_TITLE' => 'Akun Eksternal Baru',
    'LBL_PASSWORD' => 'Kata Sandi Aplikasi',
    'LBL_USER_NAME' => 'Nama Aplikasi Pengguna',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Aplikasi',
    'LBL_API_DATA' => 'Data API',
    'LBL_API_CONSKEY' => 'Kunci Konsumen',
    'LBL_API_CONSSECRET' => 'Rahasia Konsumen',
    'LBL_API_OAUTHTOKEN' => 'Token OAuth',
    'LBL_AUTH_UNSUPPORTED' => "Metode otorisasi ini tidak didukung oleh aplikasi",
    'LBL_AUTH_ERROR' => 'Upaya untuk terhubung ke akun ini gagal.',
    'LBL_VALIDATED' => 'Terhubung',
    'LBL_ACTIVE' => 'Aktif',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Menghubungkan',
    'LBL_NOTE' => 'Tolong dicatat',
    'LBL_CONNECTED' => 'Terhubung',

    'LBL_ERR_NO_AUTHINFO' => 'Tidak ada informasi otentikasi untuk akun ini.',
    'LBL_ERR_NO_TOKEN' => 'Tidak ada token masuk yang valid untuk akun ini.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Kamu sedang tidak terhubung ke akun {0} kamu. Klik OK untuk masuk ke akun kamu dan aktifkan ulang sambungan.',

    'LBL_CLICK_TO_EDIT' => 'Klik untuk mengedit',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Mengotentikasi ulang',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Akun untuk aplikasi ini sudah ada. Kami telah mengaktifkan kembali akun yang ada.',
    'LBL_OMIT_URL' => '(Hilangkan http:// atau https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Klik <b>Sambungkan</b> untuk diarahkan ke halaman untuk menyediakan informasi akun dan mengotentikasi akses ke akun dengan SuiteCRM. setelah menyambungkan, kamu akan diarahkan kembali ke SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Klik <b>Sambungkan</b> untuk menghubungkan akun ini ke SuoteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Silahkan aktifkan jendela peramban sembulan atau tambahkan sebuah pengecualian untuk laman "{0}" untuk daftar pengecualian untuk terhubung.',

    'LBL_API_OAUTHSECRET' => 'Rahasia API OAuth',
);
