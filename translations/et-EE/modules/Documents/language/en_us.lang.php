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
    'LBL_MODULE_NAME' => 'Dokumendid',
    'LBL_MODULE_TITLE' => 'Dokumendid: Avaleht',
    'LNK_NEW_DOCUMENT' => 'Loo dokument',
    'LNK_DOCUMENT_LIST' => 'Vaata dokumente',
    'LBL_DOC_REV_HEADER' => 'Dokumendi revisjonid',
    'LBL_SEARCH_FORM_TITLE' => 'Dokumendi otsing',
    //vardef labels
    'LBL_NAME' => 'Dokumendi nimi',
    'LBL_DESCRIPTION' => 'Kirjeldus',
    'LBL_CATEGORY' => 'Kategooria',
    'LBL_SUBCATEGORY' => 'Alamkategooria',
    'LBL_STATUS' => 'Olek',
    'LBL_CREATED_BY' => 'Loodud',
    'LBL_DATE_ENTERED' => 'Loomiskuupäev',
    'LBL_DATE_MODIFIED' => 'Muutmiskuupäev',
    'LBL_DELETED' => 'Kustutatud',
    'LBL_MODIFIED' => 'Muutja ID',
    'LBL_MODIFIED_USER' => 'Muutja:',
    'LBL_CREATED' => 'Loodud',
    'LBL_REVISIONS' => 'Revisjonid',
    'LBL_RELATED_DOCUMENT_ID' => 'Seotud dokumendi ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Seotud dokumendi revisjoni ID',
    'LBL_IS_TEMPLATE' => 'On mall',
    'LBL_TEMPLATE_TYPE' => 'Dokumendi tüüp',
    'LBL_ASSIGNED_TO_NAME' => 'Vastutaja:',
    'LBL_REVISION_NAME' => 'Läbivaatuse number',
    'LBL_MIME' => 'MIME tüüp',
    'LBL_REVISION' => 'Läbivaatus',
    'LBL_DOCUMENT' => 'Seotud dokument',
    'LBL_LATEST_REVISION' => 'Viimane ülevaatus',
    'LBL_CHANGE_LOG' => 'Muudatuste logi',
    'LBL_ACTIVE_DATE' => 'Avaldamiskuupäev',
    'LBL_EXPIRATION_DATE' => 'Aegumiskuupäev',
    'LBL_FILE_EXTENSION' => 'Faili laiendus',
    'LBL_LAST_REV_MIME_TYPE' => 'Viimase revsjoni MIME tüüp',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Määramata',
    'LBL_HOMEPAGE_TITLE' => 'Minu dokumendid',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Uus dokument',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Dokumendi nimi:',
    'LBL_FILENAME' => 'Faili nimi:',
    'LBL_LIST_FILENAME' => 'Faili nimi',
    'LBL_DOC_VERSION' => 'Parandus:',
    'LBL_FILE_UPLOAD' => 'Faili nimi',

    'LBL_CATEGORY_VALUE' => 'Kategooria:',
    'LBL_LIST_CATEGORY' => 'Kategooria',
    'LBL_SUBCATEGORY_VALUE' => 'Alamkategooria:',
    'LBL_DOC_STATUS' => 'Olek:',
    'LBL_LAST_REV_CREATOR' => 'Loodud läbivaatus:',
    'LBL_LASTEST_REVISION_NAME' => 'Viimase revisjoni nimi:',
    'LBL_SELECTED_REVISION_NAME' => 'Vali revisjoni nimi',
    'LBL_CONTRACT_STATUS' => 'Lepingu olek:',
    'LBL_CONTRACT_NAME' => 'Lepingu nimi:',
    'LBL_DET_RELATED_DOCUMENT' => 'Seotud dokument:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Seotud dokumendi revision:",
    'LBL_DET_IS_TEMPLATE' => 'Mall?:',
    'LBL_DET_TEMPLATE_TYPE' => 'Dokumendi tüüp:',
    'LBL_DOC_DESCRIPTION' => 'Kirjeldus',
    'LBL_DOC_ACTIVE_DATE' => 'Avaldamiskuupäev:',
    'LBL_DOC_EXP_DATE' => 'Aegumiskuupäev:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Dokumendi loend',
    'LBL_LIST_DOCUMENT' => 'Dokument',
    'LBL_LIST_SUBCATEGORY' => 'Alamkategooria',
    'LBL_LIST_REVISION' => 'Läbivaatus',
    'LBL_LIST_LAST_REV_CREATOR' => 'Avaldatud',
    'LBL_LIST_LAST_REV_DATE' => 'Ülevaatamiskuupäev',
    'LBL_LIST_VIEW_DOCUMENT' => 'Vaade',
    'LBL_LIST_ACTIVE_DATE' => 'Avaldamiskuupäev',
    'LBL_LIST_EXP_DATE' => 'Aegumiskuupäev',
    'LBL_LIST_STATUS' => 'Olek',
    'LBL_LINKED_ID' => 'Lingitud Is',
    'LBL_SELECTED_REVISION_ID' => 'Valitud revisjoni id',
    'LBL_LATEST_REVISION_ID' => 'Viimase revisjon id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Valitud revisjoni failinimi',
    'LBL_FILE_URL' => 'Faili url',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategooria:',
    'LBL_SF_SUBCATEGORY' => 'Alamkategooria:',

    'DEF_CREATE_LOG' => 'Dokument on loodud',

    //error messages
    'ERR_DOC_NAME' => 'Dokumendi nimi',
    'ERR_DOC_ACTIVE_DATE' => 'Avaldamiskuupäev',
    'ERR_FILENAME' => 'Faili nimi',
    'ERR_DOC_VERSION' => 'Dokumendi versioon',
    'ERR_DELETE_CONFIRM' => 'Kas soovid selle dokumendi revisjoni kustutada?',
    'ERR_DELETE_LATEST_VERSION' => 'Sul pole lubatud kustutada viimast dokumendi revisjoni.',
    'LNK_NEW_MAIL_MERGE' => 'Kirja mestimine',
    'ERR_MISSING_FILE' => 'Selles dokumendis on fail kaduma läinud. Palun lae dokument uuesti ülesse või võta oma administraatoriga ühendust.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nimi',
    'LBL_LIST_IS_TEMPLATE' => 'Mall?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Dokumendi tüüp',
    'LBL_LAST_REV_CREATE_DATE' => 'Viimase revisjoni loomiskuupäev',
    'LBL_CONTRACTS' => 'Lepingud',
    'LBL_CREATED_USER' => 'Loodud kasutaja',
    'LBL_DOCUMENT_INFORMATION' => 'Ettevõtte ülevaade', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Dokumendi allika ID',
    'LBL_DOC_TYPE' => 'Allikas',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br />and from which it will be available.',
    'LBL_DOC_URL' => 'Dokumendi allika URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Faili nimi',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'The first 20 most recently modified files are displayed in descending order in the list below. Use the Search to find other files.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Faili nimi',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ettevõtted',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktid',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Müügivõimalused',
    'LBL_CASES_SUBPANEL_TITLE' => 'Juhtumid',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugid',

    'LBL_AOS_CONTRACTS' => 'Lepingud',
);
