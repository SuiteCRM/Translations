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
    'LBL_MODULE_NAME' => 'Bugs',
    'LBL_MODULE_TITLE' => 'Pelacak Bug/kutu: Beranda',
    'LBL_MODULE_ID' => 'Bugs',
    'LBL_SEARCH_FORM_TITLE' => 'Pencarian Bug',
    'LBL_LIST_FORM_TITLE' => 'Daftar Bug',
    'LBL_NEW_FORM_TITLE' => 'Bug Baru',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_NUMBER' => 'Number:',
    'LBL_STATUS' => 'Status:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_CONTACT_NAME' => 'Nma Kontak',
    'LBL_CONTACT_ROLE' => 'Peran',
    'LBL_LIST_NUMBER' => 'No.',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_RESOLUTION' => 'Resolution',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LBL_INVITEE' => 'Contacts',
    'LBL_TYPE' => 'Jenis:',
    'LBL_LIST_TYPE' => 'Type',
    'LBL_RESOLUTION' => 'Resolusi',
    'LBL_RELEASE' => 'Rilis',
    'LNK_NEW_BUG' => 'Laporkan Bug',
    'LNK_BUG_LIST' => 'Bug',
    'ERR_DELETE_RECORD' => 'Anda harus menentukan no record untuk menghapus bug.',
    'LBL_LIST_MY_BUGS' => 'Bug Bagian Saya',
    'LNK_IMPORT_BUGS' => 'Impor Bug',
    'LBL_FOUND_IN_RELEASE' => 'Ditemukan di Rilis:',
    'LBL_FIXED_IN_RELEASE' => 'Diperbaiki di Rilis',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Diperbaiki di Rilis',
    'LBL_WORK_LOG' => 'Work Log:',
    'LBL_SOURCE' => 'Sumber',
    'LBL_PRODUCT_CATEGORY' => 'Category:',

    'LBL_CREATED_BY' => 'Created by:',
    'LBL_MODIFIED_BY' => 'Last Modified by:',

    'LBL_LIST_EMAIL_ADDRESS' => 'Alamat Surel',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_ACCOUNT_NAME' => 'Nama Akun',
    'LBL_LIST_PHONE' => 'Phone',
    'NTC_DELETE_CONFIRMATION' => 'Apakah Anda yakin ingin menghapus kontak ini dari bug ini?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Pelacak Bug/Kutu',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Akun',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumen',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Pengguna yang ditugaskan',
    'LBL_ASSIGNED_TO_NAME' => 'Ditugaskan kepada',

    'LBL_BUG_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
