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
    'LBL_MODULE_NAME' => 'Sənədlər',
    'LBL_MODULE_TITLE' => 'Sənədlər: Giriş',
    'LNK_NEW_DOCUMENT' => 'Sənəd yaradın',
    'LNK_DOCUMENT_LIST' => 'View Documents',
    'LBL_DOC_REV_HEADER' => 'Sənəd təftişləri',
    'LBL_SEARCH_FORM_TITLE' => 'Sənəd axtarışı',
    //vardef labels
    'LBL_NAME' => 'Sənədin adı',
    'LBL_DESCRIPTION' => 'Açıqlama',
    'LBL_CATEGORY' => 'Kateqoriya',
    'LBL_SUBCATEGORY' => 'Alt kateqoriya',
    'LBL_STATUS' => 'Vəziyyət',
    'LBL_CREATED_BY' => 'Müəllif',
    'LBL_DATE_ENTERED' => 'Yaradılma Tarixi',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi',
    'LBL_DELETED' => 'Silinib',
    'LBL_MODIFIED' => 'Modified by ID',
    'LBL_MODIFIED_USER' => 'Tərəfindən dəyişdirildi',
    'LBL_CREATED' => 'Müəllif',
    'LBL_REVISIONS' => 'Revisions',
    'LBL_RELATED_DOCUMENT_ID' => 'Related Document ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Related Document Revision ID',
    'LBL_IS_TEMPLATE' => 'Şablondur',
    'LBL_TEMPLATE_TYPE' => 'Sənəd növü',
    'LBL_ASSIGNED_TO_NAME' => 'Təyin edilsin:',
    'LBL_REVISION_NAME' => 'Revizyon nömrəsi',
    'LBL_MIME' => 'Mime növü',
    'LBL_REVISION' => 'Yenidən baxma',
    'LBL_DOCUMENT' => 'Əlaqəli sənəd',
    'LBL_LATEST_REVISION' => 'Son revizyon',
    'LBL_CHANGE_LOG' => 'Dəyişiklik jurnalı',
    'LBL_ACTIVE_DATE' => 'Nəşr olunma tarixi',
    'LBL_EXPIRATION_DATE' => 'Bitmə tarixi',
    'LBL_FILE_EXTENSION' => 'Fayl uzantısı',
    'LBL_LAST_REV_MIME_TYPE' => 'Last revision MIME type',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Dəqiqləşdirilməmiş',
    'LBL_HOMEPAGE_TITLE' => 'My Documents',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Yeni sənəd',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Sənəd Adı:',
    'LBL_FILENAME' => 'Fayl Adı:',
    'LBL_LIST_FILENAME' => 'Fayl:',
    'LBL_DOC_VERSION' => 'Revizyon:',
    'LBL_FILE_UPLOAD' => 'Fayl:',

    'LBL_CATEGORY_VALUE' => 'Kateqoriya:',
    'LBL_LIST_CATEGORY' => 'Kateqoriya',
    'LBL_SUBCATEGORY_VALUE' => 'Alt Kateqoriya:',
    'LBL_DOC_STATUS' => 'Status:',
    'LBL_LAST_REV_CREATOR' => 'Revision Created By:',
    'LBL_LASTEST_REVISION_NAME' => 'Latest revision name:',
    'LBL_SELECTED_REVISION_NAME' => 'Selected revision name:',
    'LBL_CONTRACT_STATUS' => 'Contract status:',
    'LBL_CONTRACT_NAME' => 'Contract name:',
    'LBL_DET_RELATED_DOCUMENT' => 'Related Document:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Related Document Revision:",
    'LBL_DET_IS_TEMPLATE' => 'Template? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Sənəd növü:',
    'LBL_DOC_DESCRIPTION' => 'Açıqlama:',
    'LBL_DOC_ACTIVE_DATE' => 'Nəşt olunma tarixi:',
    'LBL_DOC_EXP_DATE' => 'İstifadə müddəti:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Sənəd siyahısı',
    'LBL_LIST_DOCUMENT' => 'Sənəd',
    'LBL_LIST_SUBCATEGORY' => 'Alt kateqoriya',
    'LBL_LIST_REVISION' => 'Yenidən baxma',
    'LBL_LIST_LAST_REV_CREATOR' => 'Nəşr edən',
    'LBL_LIST_LAST_REV_DATE' => 'Yoxlanma tarixi',
    'LBL_LIST_VIEW_DOCUMENT' => 'Bax',
    'LBL_LIST_ACTIVE_DATE' => 'Nəşr olunma tarixi',
    'LBL_LIST_EXP_DATE' => 'Bitmə tarixi',
    'LBL_LIST_STATUS' => 'Vəziyyət',
    'LBL_LINKED_ID' => 'Linked id',
    'LBL_SELECTED_REVISION_ID' => 'Selected revision id',
    'LBL_LATEST_REVISION_ID' => 'Latest revision id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Selected revision filename',
    'LBL_FILE_URL' => 'File url',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kateqoriya:',
    'LBL_SF_SUBCATEGORY' => 'Alt Kateqoriya:',

    'DEF_CREATE_LOG' => 'Sənəd yaradılıdı',

    //error messages
    'ERR_DOC_NAME' => 'Sənədin adı',
    'ERR_DOC_ACTIVE_DATE' => 'Nəşr olunma tarixi',
    'ERR_FILENAME' => 'Faylın adı',
    'ERR_DOC_VERSION' => 'Document Version',
    'ERR_DELETE_CONFIRM' => 'Do you want to delete this document revision?',
    'ERR_DELETE_LATEST_VERSION' => 'You are not allowed to delete the latest revision of a document.',
    'LNK_NEW_MAIL_MERGE' => 'Poçt Birləşdirmə',
    'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload. Please retry uploading the file or contact your administrator.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Ad',
    'LBL_LIST_IS_TEMPLATE' => 'Template?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Sənəd növü',
    'LBL_LAST_REV_CREATE_DATE' => 'Last Revision Create Date',
    'LBL_CONTRACTS' => 'Müqavilələr',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_DOCUMENT_INFORMATION' => '	İcmal', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Document Source ID',
    'LBL_DOC_TYPE' => 'Source',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br> and from which it will be available.',
    'LBL_DOC_URL' => 'Document Source URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Faylın adı',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'The first 20 most recently modified files are displayed in descending order in the list below. Use the Search to find other files.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Faylın adı',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Hesablar',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Əlaqələr',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'İmkanlar',
    'LBL_CASES_SUBPANEL_TITLE' => 'Mübahisələr',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Boşluqlar',

    'LBL_AOS_CONTRACTS' => 'Müqavilələr',
);
