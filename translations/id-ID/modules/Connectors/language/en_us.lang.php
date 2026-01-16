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

    'LBL_ADMINISTRATION_MAIN' => 'Pengaturan Connector',
    'LBL_AVAILABLE' => 'Tersedia',
    'LBL_BACK' => '< Sebelumnya',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Beberapa field yang diperlukan telah ditinggalkan kosong. Lanjutkan untuk menyimpan perubahan? ',
    'LBL_CONNECTOR_FIELDS' => 'Konektor Field',
    'LBL_DATA' => 'Data',
    'LBL_DEFAULT' => 'Standar',
    'LBL_DISABLED' => 'Tidak Diaktifkan',
    'LBL_ENABLED' => 'Diaktifkan',
    'LBL_EXTERNAL' => 'Aktifkan pengguna untuk membuat catatan akun eksternal ke konektor ini.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' Dalam rangka untuk menggunakan konektor ini, sifat yang juga harus diatur dalam Mengatur Properti Konektor pengaturan halaman.',
    'LBL_MERGE' => 'Merge Duplikat',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Aktifkan connector',
    'LBL_MODIFY_DISPLAY_DESC' => 'Pilih yang modul diaktifkan untuk setiap konektor.',
    'LBL_MODULE_FIELDS' => 'Modul Fields',
    'LBL_MODIFY_MAPPING_TITLE' => 'Bidang Konektor Peta',
    'LBL_MODIFY_MAPPING_DESC' => 'Map Connector Fields ke field modul untuk menentukan apa konektor data dapat dilihat dan digabungkan ke dalam module records.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Pengaturan Connector Properties',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Konfigurasi properti untuk setiap Connector, termasuk URL dan API keys.',
    'LBL_MODIFY_SEARCH_TITLE' => 'Atur Pencarian Connector',
    'LBL_MODIFY_SEARCH' => 'Cari',
    'LBL_MODIFY_SEARCH_DESC' => 'Pilih Connector Field yang digunakan untuk mencari data di setiap modul.',
    'LBL_MODULE_NAME' => 'Konektor',
    'LBL_NO_PROPERTIES' => 'Tidak ada properti dikonfigurasi untuk Connector ini.',
    'LBL_SAVE' => 'Simpan',
    'LBL_SUMMARY' => 'Ringkasan',
    'LBL_STEP1' => 'Cari dan Lihat Data',
    'LBL_STEP2' => 'Gabung Records dengan',
    'LBL_TEST_SOURCE' => 'Tes Konektor',
    'LBL_TEST_SOURCE_FAILED' => 'Tes Gagal',
    'LBL_TEST_SOURCE_SUCCESS' => 'Tes Berhasil',
    'LBL_TITLE' => 'Data Goes',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'Error: Tidak ada rincian tambahan ditemukan untuk recprd.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Tidak ada modul yang telah diaktifkan untuk Connector ini. Pilih modul untuk Connector ini di halaman Aktifkan Connectors. ',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Error: Tidak ada konektor yang diaktifkan yang memiliki field pencarian yang dipilih sebelumnya. ',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Error: Tidak ada search file yang diisi untuk modul dan connector. Silakan hubungi administrator sistem. ',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Error: Tidak ada field module yang telah dimapping untuk ditampilkan dalam hasil. Silakan hubungi administrator sistem. ',
    'LBL_INFO_INLINE' => 'Info' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Tutup' /*for 508 compliance fix*/,

);
