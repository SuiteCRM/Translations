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
    'LBL_MODULE_NAME' => 'Dokumenti',
    'LBL_MODULE_TITLE' => 'Dokumenti: Domov',
    'LNK_NEW_DOCUMENT' => 'Ustvari dokument',
    'LNK_DOCUMENT_LIST' => 'Seznam dokumentov',
    'LBL_DOC_REV_HEADER' => 'Revizije dokumentov',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje dokumentov',
    //vardef labels
    'LBL_NAME' => 'Ime dokumenta',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_CATEGORY' => 'Kategorija',
    'LBL_SUBCATEGORY' => 'Pod-kategorija',
    'LBL_STATUS' => 'Stanje',
    'LBL_CREATED_BY' => 'Ustvaril',
    'LBL_DATE_ENTERED' => 'Datum nastanka',
    'LBL_DATE_MODIFIED' => 'Datum spremembe',
    'LBL_DELETED' => 'Izbrisano',
    'LBL_MODIFIED' => 'Spremenjeni po IDju',
    'LBL_MODIFIED_USER' => 'Spremenil',
    'LBL_CREATED' => 'Ustvaril',
    'LBL_REVISIONS' => 'Revizije',
    'LBL_RELATED_DOCUMENT_ID' => 'ID povezanih dokumentov',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID revizij povezanih dokumentov',
    'LBL_IS_TEMPLATE' => 'Je predloga',
    'LBL_TEMPLATE_TYPE' => 'Tip dokumenta',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_REVISION_NAME' => 'Število različice',
    'LBL_MIME' => 'MIME tip',
    'LBL_REVISION' => 'Različica',
    'LBL_DOCUMENT' => 'Povezan dokument',
    'LBL_LATEST_REVISION' => 'Zadnja različica',
    'LBL_CHANGE_LOG' => 'Zgodovina sprememb',
    'LBL_ACTIVE_DATE' => 'Datum objave',
    'LBL_EXPIRATION_DATE' => 'Datum veljavnosti',
    'LBL_FILE_EXTENSION' => 'Končnica datoteke',
    'LBL_LAST_REV_MIME_TYPE' => 'Zadnja revizija MIME tipa',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Nedefiniran',
    'LBL_HOMEPAGE_TITLE' => 'My Documents',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nov dokument',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Ime dokumenta:',
    'LBL_FILENAME' => 'Ime datoteke:',
    'LBL_LIST_FILENAME' => 'Ime datoteke',
    'LBL_DOC_VERSION' => 'Različica:',
    'LBL_FILE_UPLOAD' => 'Ime datoteke',

    'LBL_CATEGORY_VALUE' => 'Kategorija:',
    'LBL_LIST_CATEGORY' => 'Kategorija',
    'LBL_SUBCATEGORY_VALUE' => 'Pod-kategorija:',
    'LBL_DOC_STATUS' => 'Stanje:',
    'LBL_LAST_REV_CREATOR' => 'Revizijo ustvaril:',
    'LBL_LASTEST_REVISION_NAME' => 'Ime zadnje revizije:',
    'LBL_SELECTED_REVISION_NAME' => 'Ime izbrane revizije:',
    'LBL_CONTRACT_STATUS' => 'Status pogodbe:',
    'LBL_CONTRACT_NAME' => 'Ime pogodbe:',
    'LBL_DET_RELATED_DOCUMENT' => 'Povezan Dokument:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Povezana revizija Dokumenta:",
    'LBL_DET_IS_TEMPLATE' => 'Predloga? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Tip dokumenta:',
    'LBL_DOC_DESCRIPTION' => 'Opis:',
    'LBL_DOC_ACTIVE_DATE' => 'Datum objave:',
    'LBL_DOC_EXP_DATE' => 'Datum veljavnosti:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Seznam dokumentov:',
    'LBL_LIST_DOCUMENT' => 'Dokument',
    'LBL_LIST_SUBCATEGORY' => 'Pod-kategorija',
    'LBL_LIST_REVISION' => 'Različica',
    'LBL_LIST_LAST_REV_CREATOR' => 'Objavil',
    'LBL_LIST_LAST_REV_DATE' => 'Datum različice',
    'LBL_LIST_VIEW_DOCUMENT' => 'Poglej',
    'LBL_LIST_ACTIVE_DATE' => 'Datum objave',
    'LBL_LIST_EXP_DATE' => 'Datum veljavnosti',
    'LBL_LIST_STATUS' => 'Stanje',
    'LBL_LINKED_ID' => 'Povezan ID',
    'LBL_SELECTED_REVISION_ID' => 'ID izbrane revizije',
    'LBL_LATEST_REVISION_ID' => 'ID zadnje revizije',
    'LBL_SELECTED_REVISION_FILENAME' => 'Ime datoteke izbrane revizije',
    'LBL_FILE_URL' => 'URL datoteke',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategorija:',
    'LBL_SF_SUBCATEGORY' => 'Pod-kategorija:',

    'DEF_CREATE_LOG' => 'Dokument ustvarjen',

    //error messages
    'ERR_DOC_NAME' => 'Ime dokumenta',
    'ERR_DOC_ACTIVE_DATE' => 'Datum objave',
    'ERR_FILENAME' => 'Ime datoteke',
    'ERR_DOC_VERSION' => 'Verzija datoteke',
    'ERR_DELETE_CONFIRM' => 'Ali bi želeli zbrisati revizijo dokumenta?',
    'ERR_DELETE_LATEST_VERSION' => 'Nimate dovoljenja za izbris zadnje revizije dokumenta.',
    'LNK_NEW_MAIL_MERGE' => 'Spajanje pošte',
    'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload. Please retry uploading the file or contact your administrator.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Ime',
    'LBL_LIST_IS_TEMPLATE' => 'Predloga?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Tip dokumenta',
    'LBL_LAST_REV_CREATE_DATE' => 'Datum zadnja ustvarjene revizije',
    'LBL_CONTRACTS' => 'Pogodbe',
    'LBL_CREATED_USER' => 'Ustvarjen kontakt',
    'LBL_DOCUMENT_INFORMATION' => 'Informacije o Partnerju', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Document Source ID',
    'LBL_DOC_TYPE' => 'Vir',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br> and from which it will be available.',
    'LBL_DOC_URL' => 'Document Source URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Ime datoteke',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'The first 20 most recently modified files are displayed in descending order in the list below. Use the Search to find other files.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Ime datoteke',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Računi',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Priložnosti',
    'LBL_CASES_SUBPANEL_TITLE' => 'Reklamacije',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hrošči',

    'LBL_AOS_CONTRACTS' => 'Pogodbe',
);
