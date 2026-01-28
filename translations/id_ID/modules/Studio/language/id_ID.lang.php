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
    'LBL_EDIT_LAYOUT' => 'Sunting Tata Letak',
    'LBL_EDIT_FIELDS' => 'Edit Custom Fields',
    'LBL_SELECT_FILE' => 'Pilih File',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Kotak Alat',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_VIEW_SUITE_FIELDS' => 'View SuiteCRM Fields',
    'LBL_FAILED_TO_SAVE' => 'Gagal Menyimpan',
    'LBL_CONFIRM_UNSAVE' => 'Setiap perubahan yang belum disimpan akan Hilang. Apakah Anda yakin ingin melanjutkan? ',
    'LBL_PUBLISHING' => 'Dipublish...',
    'LBL_PUBLISHED' => 'Ditampilkan',
    'LBL_FAILED_PUBLISHED' => 'Gagal untuk dipublish',
    'LBL_DROP_HERE' => '[Letakkan Disini]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Nama',
    'LBL_LABEL' => 'Label',
    'LBL_MASS_UPDATE' => 'Update Masal',
    'LBL_DEFAULT_VALUE' => 'Nilai Default',
    'LBL_REQUIRED' => 'Wajib',
    'LBL_DATA_TYPE' => 'Tipe',


    'LBL_HISTORY' => 'Riwayat',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => 'Selamat Datang di Studio! </h2><br> Apa yang ingin Anda lakukan hari ini?<br><b> Silakan pilih dari opsi di bawah.</b>',
    'LBL_SW_EDIT_MODULE' => 'Edit Modul',
    'LBL_SW_EDIT_DROPDOWNS' => 'Edit Drop Down',
    'LBL_SW_EDIT_TABS' => 'Konfigurasi Tabs',
    'LBL_SW_RENAME_TABS' => 'Mengubah nama Tabs',
    'LBL_SW_EDIT_GROUPTABS' => 'Konfigurasi Grup Tabs',
    'LBL_SW_EDIT_PORTAL' => 'Edit Portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Perbaikan Custom Fields',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migrasi Custom Fields',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Rebuild versi javascript dari file bahasa',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Menghapus versi javascript dari file bahasa, akan di-rebuild jika diperlukan.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Hapus',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Buat Drop Down',
    'LBL_DROPDOWN_NAME' => 'Nama Dropdown:',
    'LBL_DROPDOWN_LANGUAGE' => 'Bahasa Dropdown:',
    'LBL_TABGROUP_LANGUAGE' => 'Bahasa:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Tampilkan Nilai',
    'LBL_DD_DATABASEVALUE' => 'Database Nilai',
    'LBL_DD_ALL' => 'Semua',

//BUTTONS
    'LBL_BTN_SAVE' => 'Simpan',
    'LBL_BTN_CANCEL' => 'Batal',
    'LBL_BTN_SAVEPUBLISH' => 'Simpan & Sebarkan',
    'LBL_BTN_HISTORY' => 'Riwayat',
    'LBL_BTN_ADDROWS' => 'Tambah Baris',
    'LBL_BTN_UNDO' => 'Batal',
    'LBL_BTN_REDO' => 'Kembalikan',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Tambah Bidang Kustom',
    'LBL_BTN_TABINDEX' => 'Edit Tabbing Order',

//TABS
    'LBL_MODULES' => 'Modul',
    'LBL_MODULE_NAME' => 'Administrasi',
    'LBL_CONFIGURE_GROUP_TABS' => 'Configure Module Menu Filters',
    'LBL_GROUP_TAB_WELCOME' => 'Tab dan grup subtab akan ditampilkan untuk pengguna yang memilih untuk melihat Group Modules pada panel navigasi. Drag and drop modul dari kotak Tab untuk mengubah subtabs yang muncul di bawah tab. Grup tab yang kosong tidak akan ditampilkan pada panel navigasi.',
    'LBL_RENAME_TAB_WELCOME' => 'Klik pada setiap Tab\'s Diplay value untuk mengubah nama tab. ',
    'LBL_DELETE_MODULE' => 'Hapus&nbsp;Module<br />Dari&nbsp;Grup',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Untuk set label Grup Tab untuk bahasa lainnya yang tersedia, pilih bahasa, edit label dan klik Save & Deploy untuk membuat perubahan bahasa tersebut.',
    'LBL_ADD_GROUP' => 'Tambah Filter',
    'LBL_NEW_GROUP' => 'Grup Baru',
    'LBL_RENAME_TABS' => 'mengubah nama tab',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Error: Nilai Tidak Valid: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Simpan' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Batal' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Kembalikan' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Hapus' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Tambah Field' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maksimalkan' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimalkan' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Mempublikasi' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Tambah Baris' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Tambah Field' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Sunting' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Pilih bahasa yang akan diedit.',
    'LBL_SINGULAR' => 'Singular Label',
    'LBL_PLURAL' => 'Plural Label',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
