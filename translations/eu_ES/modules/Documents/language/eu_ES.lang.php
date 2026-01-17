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
    'LBL_MODULE_NAME' => 'Dokumentuak',
    'LBL_MODULE_TITLE' => 'Dokumentuak',
    'LNK_NEW_DOCUMENT' => 'Dokumentua sortu',
    'LNK_DOCUMENT_LIST' => 'Dokumentuen zerrenda',
    'LBL_DOC_REV_HEADER' => 'Berrikuspenak',
    'LBL_SEARCH_FORM_TITLE' => 'Dokumentuen bilaketa',
    //vardef labels
    'LBL_NAME' => 'Dokumentuaren izena',
    'LBL_DESCRIPTION' => 'Deskribapena',
    'LBL_CATEGORY' => 'Maila',
    'LBL_SUBCATEGORY' => 'Azpikategoria',
    'LBL_STATUS' => 'Egoera',
    'LBL_CREATED_BY' => 'Sortzailea',
    'LBL_DATE_ENTERED' => 'Sortze-data',
    'LBL_DATE_MODIFIED' => 'Aldaketa-data',
    'LBL_DELETED' => 'Ezabatua',
    'LBL_MODIFIED' => 'Aldatzailea',
    'LBL_MODIFIED_USER' => 'Aldatzailea',
    'LBL_CREATED' => 'Sortzailea',
    'LBL_REVISIONS' => 'Revisions',
    'LBL_RELATED_DOCUMENT_ID' => 'Lotutako dokumentuaren Id-a',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Lotutako dokumentuaren berrikuspenaren Id-a',
    'LBL_IS_TEMPLATE' => 'Txantiloia da',
    'LBL_TEMPLATE_TYPE' => 'Dokumentu mota',
    'LBL_ASSIGNED_TO_NAME' => 'Esleitua izan da',
    'LBL_REVISION_NAME' => 'Berrikuspen-zenbakia',
    'LBL_MIME' => 'MIME mota',
    'LBL_REVISION' => 'Berrikuspena',
    'LBL_DOCUMENT' => 'Lotutako dokumentua',
    'LBL_LATEST_REVISION' => 'Azken berrikuspena',
    'LBL_CHANGE_LOG' => 'Aldaketen historikoa',
    'LBL_ACTIVE_DATE' => 'Argitaratze-data',
    'LBL_EXPIRATION_DATE' => 'Iraungitze-data',
    'LBL_FILE_EXTENSION' => 'Artxiboaren hedadura',
    'LBL_LAST_REV_MIME_TYPE' => 'Last revision MIME type',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Zehaztugabea',
    'LBL_HOMEPAGE_TITLE' => 'My Documents',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'New Document',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Dokumentuaren izena',
    'LBL_FILENAME' => 'Artxiboaren izena',
    'LBL_LIST_FILENAME' => 'Artxiboaren izena',
    'LBL_DOC_VERSION' => 'Berrikuspena',
    'LBL_FILE_UPLOAD' => 'Artxiboaren izena',

    'LBL_CATEGORY_VALUE' => 'Maila',
    'LBL_LIST_CATEGORY' => 'Maila',
    'LBL_SUBCATEGORY_VALUE' => 'Azpikategoria',
    'LBL_DOC_STATUS' => 'Egoera',
    'LBL_LAST_REV_CREATOR' => 'Nork sortutako berrikuspena',
    'LBL_LASTEST_REVISION_NAME' => 'Latest revision name:',
    'LBL_SELECTED_REVISION_NAME' => 'Selected revision name:',
    'LBL_CONTRACT_STATUS' => 'Contract status:',
    'LBL_CONTRACT_NAME' => 'Kontratuaren izena',
    'LBL_DET_RELATED_DOCUMENT' => 'Lotutako dokumentua',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Lotutako dokumentuaren berrikuspena",
    'LBL_DET_IS_TEMPLATE' => 'Txantiloia?',
    'LBL_DET_TEMPLATE_TYPE' => 'Dokumentu-mota',
    'LBL_DOC_DESCRIPTION' => 'Deskribapena',
    'LBL_DOC_ACTIVE_DATE' => 'Argitaratze-data',
    'LBL_DOC_EXP_DATE' => 'Iraungitze-data',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Dokumentuen zerrenda',
    'LBL_LIST_DOCUMENT' => 'Dokumentuak',
    'LBL_LIST_SUBCATEGORY' => 'Azpikategoria',
    'LBL_LIST_REVISION' => 'Berrikuspena',
    'LBL_LIST_LAST_REV_CREATOR' => 'Nork argitaratua',
    'LBL_LIST_LAST_REV_DATE' => 'Berrikuspen-data',
    'LBL_LIST_VIEW_DOCUMENT' => 'Ikusi',
    'LBL_LIST_ACTIVE_DATE' => 'Argitaratze-data',
    'LBL_LIST_EXP_DATE' => 'Iraungitze-data',
    'LBL_LIST_STATUS' => 'Egoera',
    'LBL_LINKED_ID' => 'Linked id',
    'LBL_SELECTED_REVISION_ID' => 'Selected revision id',
    'LBL_LATEST_REVISION_ID' => 'Latest revision id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Selected revision filename',
    'LBL_FILE_URL' => 'File url',

    //document search form.
    'LBL_SF_CATEGORY' => 'Maila',
    'LBL_SF_SUBCATEGORY' => 'Azpikategoria',

    'DEF_CREATE_LOG' => 'Sortutako dokumentua',

    //error messages
    'ERR_DOC_NAME' => 'Dokumentuaren izena',
    'ERR_DOC_ACTIVE_DATE' => 'Argitaratze-data',
    'ERR_FILENAME' => 'Artxiboaren izena',
    'ERR_DOC_VERSION' => 'Dokumentuaren bertsioa',
    'ERR_DELETE_CONFIRM' => 'Dokumentuaren berrikusketa hau ezabatu nahi duzu?',
    'ERR_DELETE_LATEST_VERSION' => 'Ez duzu baimenik dokumentu honen azken berrikusketa ezabatzeko',
    'LNK_NEW_MAIL_MERGE' => 'Postatrukea konbinatu',
    'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload. Please retry uploading the file or contact your administrator.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Izena',
    'LBL_LIST_IS_TEMPLATE' => 'Txantiloia?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Dokumentu mota',
    'LBL_LAST_REV_CREATE_DATE' => 'Last Revision Create Date',
    'LBL_CONTRACTS' => 'Kontratuak',
    'LBL_CREATED_USER' => 'Erabiltzaileak sortua',
    'LBL_DOCUMENT_INFORMATION' => 'Kontuari buruzko informazioa', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Document Source ID',
    'LBL_DOC_TYPE' => 'Jatorria',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br> and from which it will be available.',
    'LBL_DOC_URL' => 'Document Source URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Artxiboaren izena',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'The first 20 most recently modified files are displayed in descending order in the list below. Use the Search to find other files.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Artxiboaren izena',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontuak',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktuak',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Aukerak',
    'LBL_CASES_SUBPANEL_TITLE' => 'Kasuak',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Gorabehera',

    'LBL_AOS_CONTRACTS' => 'Kontratuak',
);
