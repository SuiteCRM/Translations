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
    'LBL_MODULE_NAME' => 'Documents',
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
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Muokkauspvm',
    'LBL_DELETED' => 'Deleted',
    'LBL_MODIFIED' => 'Muokkaaja ID',
    'LBL_MODIFIED_USER' => 'Modified by',
    'LBL_CREATED' => 'Created by',
    'LBL_REVISIONS' => 'Revisions',
    'LBL_RELATED_DOCUMENT_ID' => 'Liittyvän dokumentin ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Liittyvän dokumentin versio ID',
    'LBL_IS_TEMPLATE' => 'Is a Template',
    'LBL_TEMPLATE_TYPE' => 'Document Type',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
    'LBL_REVISION_NAME' => 'Revision Number',
    'LBL_MIME' => 'Mime Type',
    'LBL_REVISION' => 'Revision',
    'LBL_DOCUMENT' => 'Related Document',
    'LBL_LATEST_REVISION' => 'Latest Revision',
    'LBL_CHANGE_LOG' => 'Change Log',
    'LBL_ACTIVE_DATE' => 'Publish Date',
    'LBL_EXPIRATION_DATE' => 'Expiration Date',
    'LBL_FILE_EXTENSION' => 'File Extension',
    'LBL_LAST_REV_MIME_TYPE' => 'Viimeisen version MIME tyyppi',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Unspecified',
    'LBL_HOMEPAGE_TITLE' => 'Tiedostot',
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
    'LBL_LAST_REV_CREATOR' => 'Version tekijä:',
    'LBL_LASTEST_REVISION_NAME' => 'Viimeisimmän version nimi:',
    'LBL_SELECTED_REVISION_NAME' => 'Valitun version nimi:',
    'LBL_CONTRACT_STATUS' => 'Sopimuksen tila:',
    'LBL_CONTRACT_NAME' => 'Sopimuksen nimi:',
    'LBL_DET_RELATED_DOCUMENT' => 'Liittyvä dokumentti:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Liittyvän dokumentin versio:",
    'LBL_DET_IS_TEMPLATE' => 'Mallipohja? :',
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
    'LBL_LINKED_ID' => 'Linkitetty id',
    'LBL_SELECTED_REVISION_ID' => 'Valitun version id',
    'LBL_LATEST_REVISION_ID' => 'Uusimman version id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Valitun version tiedostonimi',
    'LBL_FILE_URL' => 'Tiedoston url',

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
    'LNK_NEW_MAIL_MERGE' => 'Mail Merge',
    'ERR_MISSING_FILE' => 'Tästä dokumenttitietueesta puuttuu tiedosto, todennäköisesti johtuen järjestelmäänlatauksen aikaisesta virheestä. Yritä latausta uudelleen tai ota yhteys ylläpitäjään.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nimi',
    'LBL_LIST_IS_TEMPLATE' => 'Mallipohja?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Document Type',
    'LBL_LAST_REV_CREATE_DATE' => 'Viimeisimmän version luonti pvm',
    'LBL_CONTRACTS' => 'Contracts',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_DOCUMENT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Dokumentin lähteen tunnus',
    'LBL_DOC_TYPE' => 'Source',
    'LBL_DOC_TYPE_POPUP' => 'Valitse lähde, johon tämä dokumentti ladataan, ja mistä se on saatavilla.',
    'LBL_DOC_URL' => 'Dokumentin lähteen osoite',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'File Name',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => '20 viimeksi muutetuinta tiedostoa näytetään allaolevassa listassa. Käytä hakutoimintoa muiden tiedostojen löytämiseen.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'File Name',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Käyttäjä yritti pääsyä kelpaamattomaan ulkoiseen APIin ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Ulkoisen APIn tunnistautuminen epäonnistui ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Asiakkaat',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',

    'LBL_AOS_CONTRACTS' => 'Contracts',
);
