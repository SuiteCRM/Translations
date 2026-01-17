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
    'LBL_MODULE_NAME' => 'Dokument',
    'LBL_MODULE_TITLE' => 'Dokument',
    'LNK_NEW_DOCUMENT' => 'Skapa dokument',
    'LNK_DOCUMENT_LIST' => 'Dokumentlista',
    'LBL_DOC_REV_HEADER' => 'Dokumentrevisioner',
    'LBL_SEARCH_FORM_TITLE' => 'Sök dokument',
    //vardef labels
    'LBL_NAME' => 'Dokumentnamn',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_CATEGORY' => 'Kategori',
    'LBL_SUBCATEGORY' => 'Underkategori',
    'LBL_STATUS' => 'Status',
    'LBL_CREATED_BY' => 'Skapad av: ',
    'LBL_DATE_ENTERED' => 'Datum Skapad',
    'LBL_DATE_MODIFIED' => 'Datum Ändrad',
    'LBL_DELETED' => 'Raderad',
    'LBL_MODIFIED' => 'Redigerad av id',
    'LBL_MODIFIED_USER' => 'Modifierad av: ',
    'LBL_CREATED' => 'Skapad av: ',
    'LBL_REVISIONS' => 'Versioner',
    'LBL_RELATED_DOCUMENT_ID' => 'Relaterat dokument Id',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Relaterat revisionsdokument id',
    'LBL_IS_TEMPLATE' => 'Är en mall:',
    'LBL_TEMPLATE_TYPE' => 'Dokumenttyp',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
    'LBL_REVISION_NAME' => 'Versionsnummer',
    'LBL_MIME' => 'Mime-typ',
    'LBL_REVISION' => 'Version',
    'LBL_DOCUMENT' => 'Relaterat dokument',
    'LBL_LATEST_REVISION' => 'Senaste version',
    'LBL_CHANGE_LOG' => 'Ändringslogg',
    'LBL_ACTIVE_DATE' => 'Publiceringsdatum',
    'LBL_EXPIRATION_DATE' => 'Förfallodatum',
    'LBL_FILE_EXTENSION' => 'Filändelse',
    'LBL_LAST_REV_MIME_TYPE' => 'Senaste revideringen av MIME typ',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Ospecificerad',
    'LBL_HOMEPAGE_TITLE' => 'Mina dokument',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nytt dokument',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Dokumentnamn:',
    'LBL_FILENAME' => 'Filnamn:',
    'LBL_LIST_FILENAME' => 'Filnamn',
    'LBL_DOC_VERSION' => 'Version:',
    'LBL_FILE_UPLOAD' => 'Filnamn',

    'LBL_CATEGORY_VALUE' => 'Kategori:',
    'LBL_LIST_CATEGORY' => 'Kategori',
    'LBL_SUBCATEGORY_VALUE' => 'Underkategori:',
    'LBL_DOC_STATUS' => 'Status:',
    'LBL_LAST_REV_CREATOR' => 'Revision skapad av:',
    'LBL_LASTEST_REVISION_NAME' => 'Senaste reviderings namn:',
    'LBL_SELECTED_REVISION_NAME' => 'Vald reviderings namn:',
    'LBL_CONTRACT_STATUS' => 'Kontrakt status:',
    'LBL_CONTRACT_NAME' => 'Kontraktnamn:',
    'LBL_DET_RELATED_DOCUMENT' => 'Relaterat dokument:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Relaterat revisionsdokument:",
    'LBL_DET_IS_TEMPLATE' => 'Mall?:',
    'LBL_DET_TEMPLATE_TYPE' => 'Dokumenttyp:',
    'LBL_DOC_DESCRIPTION' => 'Beskrivning:',
    'LBL_DOC_ACTIVE_DATE' => 'Publiceringsdatum:',
    'LBL_DOC_EXP_DATE' => 'Utgångsdatum:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Dokumentlista',
    'LBL_LIST_DOCUMENT' => 'Dokument',
    'LBL_LIST_SUBCATEGORY' => 'Underkategori',
    'LBL_LIST_REVISION' => 'Version',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publicerat av',
    'LBL_LIST_LAST_REV_DATE' => 'Versionsdatum',
    'LBL_LIST_VIEW_DOCUMENT' => 'Visa',
    'LBL_LIST_ACTIVE_DATE' => 'Publiceringsdatum',
    'LBL_LIST_EXP_DATE' => 'Förfallodatum',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LINKED_ID' => 'Länkat id',
    'LBL_SELECTED_REVISION_ID' => 'Valt reviderings id',
    'LBL_LATEST_REVISION_ID' => 'Senaste reviderings id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Valt reviderings filnamn',
    'LBL_FILE_URL' => 'Fil URL',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategori:',
    'LBL_SF_SUBCATEGORY' => 'Underkategori:',

    'DEF_CREATE_LOG' => 'Dokument skapat',

    //error messages
    'ERR_DOC_NAME' => 'Dokumentnamn',
    'ERR_DOC_ACTIVE_DATE' => 'Publiceringsdatum',
    'ERR_FILENAME' => 'Filnamn',
    'ERR_DOC_VERSION' => 'Dokumentversion',
    'ERR_DELETE_CONFIRM' => 'Vill du ta bort denna dokumentrevision?',
    'ERR_DELETE_LATEST_VERSION' => 'Det är inte tillåtet att ta bort den senaste revisionen av ett dokument.',
    'LNK_NEW_MAIL_MERGE' => 'E-postkombinering',
    'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload. Please retry uploading the file or contact your administrator.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Namn',
    'LBL_LIST_IS_TEMPLATE' => 'Mall?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Dokumenttyp',
    'LBL_LAST_REV_CREATE_DATE' => 'Senaste revisionens skapat datum',
    'LBL_CONTRACTS' => 'Kontrakt',
    'LBL_CREATED_USER' => 'Skapad användare',
    'LBL_DOCUMENT_INFORMATION' => 'Företagsinformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Document Source ID',
    'LBL_DOC_TYPE' => 'Källa',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br> and from which it will be available.',
    'LBL_DOC_URL' => 'Document Source URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Filnamn',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'The first 20 most recently modified files are displayed in descending order in the list below. Use the Search to find other files.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Filnamn',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Konton',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Tillfällen',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ärenden',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Problemspårare',

    'LBL_AOS_CONTRACTS' => 'Kontrakt',
);
