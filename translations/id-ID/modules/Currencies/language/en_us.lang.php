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
    'LBL_MODULE_NAME' => 'Kurs',
    'LBL_LIST_FORM_TITLE' => 'Kurs',
    'LBL_CURRENCY' => 'Mata Uang',
    'LBL_ADD' => 'Tambah',
    'LBL_MERGE' => 'Merge Duplikat',
    'LBL_MERGE_TXT' => 'Harap pilih mata uang yang ingin dipetakan ke mata uang yang dipilih. Ini akan menghapus semua mata uang dengan tanda centang dan menetapkan kembali nilai yang terkait dengannya ke mata uang yang dipilih.',
    'LBL_US_DOLLAR' => 'Dolar Amerika',
    'LBL_DELETE' => 'Hapus',
    'LBL_LIST_SYMBOL' => 'Simbol Mata Uang',
    'LBL_LIST_NAME' => 'Nama Mata Uang',
    'LBL_LIST_ISO4217' => 'Kode ISO 4217',
    'LBL_LIST_ISO4217_HELP' => 'Masukkan tiga huruf kode ISO 4217 yang mendefinisikan nama mata uang dan simbol mata uang.',
    'LBL_UPDATE' => 'Memperbarui',
    'LBL_LIST_RATE' => 'Tingkat konversi',
    'LBL_LIST_RATE_HELP' => 'Tingkat Konversi 0,5 Euro berarti bahwa 10 USD = 5 Euro.',
    'LBL_LIST_STATUS' => 'Status',
    'LNK_NEW_CONTACT' => 'Kontak Baru',
    'LNK_NEW_ACCOUNT' => 'Account baru',
    'LNK_NEW_OPPORTUNITY' => 'Peluang Baru',
    'LNK_NEW_CASE' => 'Kasus baru',
    'LNK_NEW_NOTE' => 'Membuat Catatan atau Lampiran',
    'LNK_NEW_CALL' => 'Panggilan Baru',
    'LNK_NEW_EMAIL' => 'Surel Baru',
    'LNK_NEW_MEETING' => 'Rapat Baru',
    'LNK_NEW_TASK' => 'Buat Tugas',
    'NTC_DELETE_CONFIRMATION' => 'Yakin ingin menghapus rekaman ini? Setiap catatan yang menggunakan mata uang ini akan dikonversi ke mata uang default sistem saat diakses. Mungkin lebih baik mengatur status agar tidak aktif.',
    'LBL_BELOW_MIN' => 'Rasio konversi harus di atas 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Aktif',
            'Inactive' => 'Tidak Aktif',
        ),
    'LBL_CREATED_BY' => 'Dibuat Oleh',
    'LBL_EDIT_LAYOUT' => 'Sunting Tata Letak' /*for 508 compliance fix*/,
);
