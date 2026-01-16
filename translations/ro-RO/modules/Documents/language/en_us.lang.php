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
    'LBL_MODULE_NAME' => 'Documente',
    'LBL_MODULE_TITLE' => 'Documente',
    'LNK_NEW_DOCUMENT' => 'Nou Document',
    'LNK_DOCUMENT_LIST' => 'Documente',
    'LBL_DOC_REV_HEADER' => 'Revizii Document',
    'LBL_SEARCH_FORM_TITLE' => 'Caută documente',
    //vardef labels
    'LBL_NAME' => 'Nume document',
    'LBL_DESCRIPTION' => 'Descriere',
    'LBL_CATEGORY' => 'Categorie',
    'LBL_SUBCATEGORY' => 'Sub-Categorie',
    'LBL_STATUS' => 'Status',
    'LBL_CREATED_BY' => 'Creat de',
    'LBL_DATE_ENTERED' => 'Data creării',
    'LBL_DATE_MODIFIED' => 'Data modificării',
    'LBL_DELETED' => 'Şters',
    'LBL_MODIFIED' => 'Modificata de ID',
    'LBL_MODIFIED_USER' => 'Modificat de',
    'LBL_CREATED' => 'Creat de',
    'LBL_REVISIONS' => 'Revizii',
    'LBL_RELATED_DOCUMENT_ID' => 'ID document înrudit',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID revizie document înrudit',
    'LBL_IS_TEMPLATE' => 'Este un șablon',
    'LBL_TEMPLATE_TYPE' => 'Tip document',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui:',
    'LBL_REVISION_NAME' => 'Numărul reviziei',
    'LBL_MIME' => 'Tip Mime',
    'LBL_REVISION' => 'Revizie',
    'LBL_DOCUMENT' => 'Documente în legătură',
    'LBL_LATEST_REVISION' => 'Ultima revizie',
    'LBL_CHANGE_LOG' => 'Jurnalul de modificări',
    'LBL_ACTIVE_DATE' => 'Dată Publicare',
    'LBL_EXPIRATION_DATE' => 'Data expirării',
    'LBL_FILE_EXTENSION' => 'Extensia fișierului',
    'LBL_LAST_REV_MIME_TYPE' => 'Ultima revizie de tip MIME',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Nespecificat',
    'LBL_HOMEPAGE_TITLE' => 'Documentele mele',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Document nou',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Nume document:',
    'LBL_FILENAME' => 'Nume fișier:',
    'LBL_LIST_FILENAME' => 'Fișier:',
    'LBL_DOC_VERSION' => 'Revizie:',
    'LBL_FILE_UPLOAD' => 'Fișier:',

    'LBL_CATEGORY_VALUE' => 'Categorie:',
    'LBL_LIST_CATEGORY' => 'Categorie',
    'LBL_SUBCATEGORY_VALUE' => 'Sub-Categorie:',
    'LBL_DOC_STATUS' => 'Status:',
    'LBL_LAST_REV_CREATOR' => 'Revizie creată de:',
    'LBL_LASTEST_REVISION_NAME' => 'Numele ultimei reviziei:',
    'LBL_SELECTED_REVISION_NAME' => 'Denumire revizie selectată:',
    'LBL_CONTRACT_STATUS' => 'Statut contract:',
    'LBL_CONTRACT_NAME' => 'Numele contractului:',
    'LBL_DET_RELATED_DOCUMENT' => 'Document asemănător:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Revizie document asociat:",
    'LBL_DET_IS_TEMPLATE' => 'Șablon? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Tip de document:',
    'LBL_DOC_DESCRIPTION' => 'Descriere:',
    'LBL_DOC_ACTIVE_DATE' => 'Dată Publicare:',
    'LBL_DOC_EXP_DATE' => 'Data expirări:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Lista de documente',
    'LBL_LIST_DOCUMENT' => 'Document',
    'LBL_LIST_SUBCATEGORY' => 'Sub-Categorie',
    'LBL_LIST_REVISION' => 'Revizie',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publicat de',
    'LBL_LIST_LAST_REV_DATE' => 'Ultima revizie',
    'LBL_LIST_VIEW_DOCUMENT' => 'Vizualizează',
    'LBL_LIST_ACTIVE_DATE' => 'Dată Publicare',
    'LBL_LIST_EXP_DATE' => 'Data expirării',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LINKED_ID' => 'Id legat',
    'LBL_SELECTED_REVISION_ID' => 'Id revizie selectat',
    'LBL_LATEST_REVISION_ID' => 'Id-ul ultimei revizii',
    'LBL_SELECTED_REVISION_FILENAME' => 'Numele fișierului de revizie selectat',
    'LBL_FILE_URL' => 'URL-ul fișierului',

    //document search form.
    'LBL_SF_CATEGORY' => 'Categorie:',
    'LBL_SF_SUBCATEGORY' => 'Sub-Categorie:',

    'DEF_CREATE_LOG' => 'Document creat',

    //error messages
    'ERR_DOC_NAME' => 'Nume document',
    'ERR_DOC_ACTIVE_DATE' => 'Dată Publicare',
    'ERR_FILENAME' => 'Numele fișierului',
    'ERR_DOC_VERSION' => 'Versiune document',
    'ERR_DELETE_CONFIRM' => 'Doriți să ștergeți această revizuire a documentului?',
    'ERR_DELETE_LATEST_VERSION' => 'Nu aveți permisiunea de a șterge ultima revizuire a unui document.',
    'LNK_NEW_MAIL_MERGE' => 'Preluare email',
    'ERR_MISSING_FILE' => 'Acest document nu are un fișier, cel mai probabil din cauza unei erori în timpul încărcării. Vă rugăm să încercați din nou să încărcați fișierul sau să contactați administratorul.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nume',
    'LBL_LIST_IS_TEMPLATE' => 'Șablon?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Tip document',
    'LBL_LAST_REV_CREATE_DATE' => 'Data creării ultimei revizii',
    'LBL_CONTRACTS' => 'Contracte',
    'LBL_CREATED_USER' => 'Utilizator creat',
    'LBL_DOCUMENT_INFORMATION' => 'Vedere Ansamblu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Sursa document de identitate',
    'LBL_DOC_TYPE' => 'Sursa',
    'LBL_DOC_TYPE_POPUP' => 'Selectați o sursă pentru care acest document va fi încărcat<br> și din care va fi disponibil.',
    'LBL_DOC_URL' => 'Document Sursa URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Numele fișierului',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Primele 20 de fișiere modificate cel mai recent sunt afișate în ordine descrescătoare în lista de mai jos. Utilizați Căutare pentru a găsi alte fișiere.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Numele fișierului',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Utilizatorul a încercat să acceseze un API extern invalid ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Verificarea autentificării a eșuat pentru API extern ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Conturi',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunităţi',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cazuri',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bug-uri',

    'LBL_AOS_CONTRACTS' => 'Contracte',
);
