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
    //module
    'LBL_MODULE_NAME' => 'Dokumen',
    'LBL_MODULE_TITLE' => 'Documents: Home',
    'LNK_NEW_DOCUMENT' => 'Create Document',
    'LNK_DOCUMENT_LIST' => 'View Documents',
    'LBL_DOC_REV_HEADER' => 'Document Revisions',
    'LBL_SEARCH_FORM_TITLE' => 'Document Search',
    //vardef labels
    'LBL_NAME' => 'Document Name',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_CATEGORY' => 'Category',
    'LBL_SUBCATEGORY' => 'Sub Category',
    'LBL_STATUS' => 'Status',
    'LBL_CREATED_BY' => 'Created by',
    'LBL_DATE_ENTERED' => 'Tanggal Dibuat',
    'LBL_DATE_MODIFIED' => 'Tanggal diubah',
    'LBL_DELETED' => 'Deleted',
    'LBL_MODIFIED' => 'Diubah oleh',
    'LBL_MODIFIED_USER' => 'Modified by',
    'LBL_CREATED' => 'Created by',
    'LBL_REVISIONS' => 'Revisions',
    'LBL_RELATED_DOCUMENT_ID' => 'ID Dokumen terkait',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID Revisi Dokumen yang Terkait',
    'LBL_IS_TEMPLATE' => 'Is a Template',
    'LBL_TEMPLATE_TYPE' => 'Document Type',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada:',
    'LBL_REVISION_NAME' => 'Revision Number',
    'LBL_MIME' => 'Tipe Mime',
    'LBL_REVISION' => 'Revision',
    'LBL_DOCUMENT' => 'Related Document',
    'LBL_LATEST_REVISION' => 'Latest Revision',
    'LBL_CHANGE_LOG' => 'Change Log',
    'LBL_ACTIVE_DATE' => 'Publish Date',
    'LBL_EXPIRATION_DATE' => 'Expiration Date',
    'LBL_FILE_EXTENSION' => 'Ekstensi Berkas',
    'LBL_LAST_REV_MIME_TYPE' => 'Revisi terakhir tipe MIME',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Unspecified',
    'LBL_HOMEPAGE_TITLE' => 'Dokumen-dokumen saya',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'New Document',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Document Name:',
    'LBL_FILENAME' => 'File Name:',
    'LBL_LIST_FILENAME' => 'File:',
    'LBL_DOC_VERSION' => 'Revision:',
    'LBL_FILE_UPLOAD' => 'File:',

    'LBL_CATEGORY_VALUE' => 'Category:',
    'LBL_LIST_CATEGORY' => 'Category',
    'LBL_SUBCATEGORY_VALUE' => 'Sub Category:',
    'LBL_DOC_STATUS' => 'Status:',
    'LBL_LAST_REV_CREATOR' => 'Revisi Dibuat Oleh:',
    'LBL_LASTEST_REVISION_NAME' => 'Nama revisi terakhir:',
    'LBL_SELECTED_REVISION_NAME' => 'Nama revisi terpilih:',
    'LBL_CONTRACT_STATUS' => 'Status kontrak:',
    'LBL_CONTRACT_NAME' => 'Nama kontrak:',
    'LBL_DET_RELATED_DOCUMENT' => 'Dokumen terkait:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Revisi dokumen terkait:",
    'LBL_DET_IS_TEMPLATE' => 'Template? : ',
    'LBL_DET_TEMPLATE_TYPE' => 'Document Type:',
    'LBL_DOC_DESCRIPTION' => 'Description:',
    'LBL_DOC_ACTIVE_DATE' => 'Publish Date:',
    'LBL_DOC_EXP_DATE' => 'Expiration Date:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Document List',
    'LBL_LIST_DOCUMENT' => 'Document',
    'LBL_LIST_SUBCATEGORY' => 'Sub Category',
    'LBL_LIST_REVISION' => 'Revision',
    'LBL_LIST_LAST_REV_CREATOR' => 'Published By',
    'LBL_LIST_LAST_REV_DATE' => 'Revision Date',
    'LBL_LIST_VIEW_DOCUMENT' => 'View',
    'LBL_LIST_ACTIVE_DATE' => 'Publish Date',
    'LBL_LIST_EXP_DATE' => 'Expiration Date',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LINKED_ID' => 'Linkedin',
    'LBL_SELECTED_REVISION_ID' => 'ID revisi terpilih',
    'LBL_LATEST_REVISION_ID' => 'ID Revisi terakhir',
    'LBL_SELECTED_REVISION_FILENAME' => 'Nama file revisi terpilih',
    'LBL_FILE_URL' => 'URL File',

    //document search form.
    'LBL_SF_CATEGORY' => 'Category:',
    'LBL_SF_SUBCATEGORY' => 'Sub Category:',

    'DEF_CREATE_LOG' => 'Document Created',

    //error messages
    'ERR_DOC_NAME' => 'Document Name',
    'ERR_DOC_ACTIVE_DATE' => 'Publish Date',
    'ERR_FILENAME' => 'File Name',
    'ERR_DOC_VERSION' => 'Document Version',
    'ERR_DELETE_CONFIRM' => 'Do you want to delete this document revision?',
    'ERR_DELETE_LATEST_VERSION' => 'You are not allowed to delete the latest revision of a document.',
    'LNK_NEW_MAIL_MERGE' => 'Menggabungkan surat',
    'ERR_MISSING_FILE' => 'Dokumen ini kehilangan file, kemungkinan besar karena kesalahan saat mengunggah. Silakan coba upload file atau hubungi administrator Anda.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nama ',
    'LBL_LIST_IS_TEMPLATE' => 'Templat?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Document Type',
    'LBL_LAST_REV_CREATE_DATE' => 'Tanggal Pembuatan Revisi Terakhir',
    'LBL_CONTRACTS' => 'Contracts',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_DOCUMENT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID sumber dokumen',
    'LBL_DOC_TYPE' => 'Sumber',
    'LBL_DOC_TYPE_POPUP' => 'Pilih sebuah sumber dokumen yang akan di unggah <br> dan yang akan tersedia.',
    'LBL_DOC_URL' => 'Document Source URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'File Name',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => '20 file yang terakhir dimodifikasi pertama ditampilkan dalam urutan di bawah daftar di bawah ini. Gunakan Pencarian untuk menemukan file lainnya.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'File Name',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Pengguna mencoba mengakses keluaran API yang tidak benar ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Proses cek masuk gagal untuk sumber luar API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Akun',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',

    'LBL_AOS_CONTRACTS' => 'Contracts',
);
