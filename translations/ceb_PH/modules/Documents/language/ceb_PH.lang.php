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
    'LBL_MODULE_NAME' => 'Mga dokumento',
    'LBL_MODULE_TITLE' => 'Mga Dokumento: Home',
    'LNK_NEW_DOCUMENT' => 'Maghimo og Dokumento',
    'LNK_DOCUMENT_LIST' => 'Tan-awon ang mga Dokumento',
    'LBL_DOC_REV_HEADER' => 'Papel na Rebisyon',
    'LBL_SEARCH_FORM_TITLE' => 'Pagpangita sa Dokumento',
    //vardef labels
    'LBL_NAME' => 'Pangan sa Dokumento',
    'LBL_DESCRIPTION' => 'Deskripsyon',
    'LBL_CATEGORY' => 'Kategorya',
    'LBL_SUBCATEGORY' => 'Sub nga Kategorya',
    'LBL_STATUS' => 'Stado',
    'LBL_CREATED_BY' => 'Gihimo ni',
    'LBL_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_MODIFIED' => 'Giusab sa ID',
    'LBL_MODIFIED_USER' => 'Ge bag-o sa',
    'LBL_CREATED' => 'Gihimo ni',
    'LBL_REVISIONS' => 'Mga Rebisyon',
    'LBL_RELATED_DOCUMENT_ID' => 'Iglabot na ID sa Dokumento',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Iglabot sa ID sa Rebisyon sa Dokumento',
    'LBL_IS_TEMPLATE' => 'Kay usa ka Template',
    'LBL_TEMPLATE_TYPE' => 'Matang sa Dokumento',
    'LBL_ASSIGNED_TO_NAME' => 'Gi-assign sa:',
    'LBL_REVISION_NAME' => 'Numero sa pag-usab',
    'LBL_MIME' => 'Matang sa Mime',
    'LBL_REVISION' => 'Pag-usab',
    'LBL_DOCUMENT' => 'Naay kalabotan nga Dokumento',
    'LBL_LATEST_REVISION' => 'Kinaulahiang pag-usab',
    'LBL_CHANGE_LOG' => 'Usbon ang log',
    'LBL_ACTIVE_DATE' => 'Petsa sa pagpublikar',
    'LBL_EXPIRATION_DATE' => 'Petsa nga ma-ekspire',
    'LBL_FILE_EXTENSION' => 'Ekstensiyon nga file',
    'LBL_LAST_REV_MIME_TYPE' => 'Ulahi na rebisyon nga tipo sa MIME',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Wala hingali',
    'LBL_HOMEPAGE_TITLE' => 'Mga Dokumento',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Bag-ong Dokumento',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Pangan sa Dokumento:',
    'LBL_FILENAME' => 'Pangalan sa File:',
    'LBL_LIST_FILENAME' => 'File:',
    'LBL_DOC_VERSION' => 'Pag-usab:',
    'LBL_FILE_UPLOAD' => 'File:',

    'LBL_CATEGORY_VALUE' => 'Kategorya:',
    'LBL_LIST_CATEGORY' => 'Kategorya',
    'LBL_SUBCATEGORY_VALUE' => 'Sub nga Kategorya:',
    'LBL_DOC_STATUS' => 'Estado:',
    'LBL_LAST_REV_CREATOR' => 'Rebisyon Gihimo Ni:',
    'LBL_LASTEST_REVISION_NAME' => 'Pangalan sa kinaulahian nga pag-usab:',
    'LBL_SELECTED_REVISION_NAME' => 'Pangalan sa napilian nga rebisyon:',
    'LBL_CONTRACT_STATUS' => 'Estado sa Kontrata:',
    'LBL_CONTRACT_NAME' => 'Pangalan sa Kontrata:',
    'LBL_DET_RELATED_DOCUMENT' => 'Iglabot na Dokumento:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Iglabot na Rebisyon sa Dokumento:",
    'LBL_DET_IS_TEMPLATE' => 'Template? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Matang sa Dokumento:',
    'LBL_DOC_DESCRIPTION' => 'Deskripsyon:',
    'LBL_DOC_ACTIVE_DATE' => 'Petsa sa Pagpublikar:',
    'LBL_DOC_EXP_DATE' => 'Petsa sa kataposan:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Listahan sa Dokumento',
    'LBL_LIST_DOCUMENT' => 'Dokumento',
    'LBL_LIST_SUBCATEGORY' => 'Sub nga Kategorya',
    'LBL_LIST_REVISION' => 'Pag-usab',
    'LBL_LIST_LAST_REV_CREATOR' => 'Gipublikar ni',
    'LBL_LIST_LAST_REV_DATE' => 'Petsa sa pag-usab',
    'LBL_LIST_VIEW_DOCUMENT' => 'Tan-awa',
    'LBL_LIST_ACTIVE_DATE' => 'Petsa sa pagpublikar',
    'LBL_LIST_EXP_DATE' => 'Petsa nga ma-ekspire',
    'LBL_LIST_STATUS' => 'Stado',
    'LBL_LINKED_ID' => 'Sinumpay na id',
    'LBL_SELECTED_REVISION_ID' => 'Napilian na rebisyon id',
    'LBL_LATEST_REVISION_ID' => 'Kinaulahian na rebisyon id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Napalian na rebisyon na pangalan sa file',
    'LBL_FILE_URL' => 'File url',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategorya:',
    'LBL_SF_SUBCATEGORY' => 'Sub nga Kategorya:',

    'DEF_CREATE_LOG' => 'Nabuhat na ang Dokumento',

    //error messages
    'ERR_DOC_NAME' => 'Pangan sa Dokumento',
    'ERR_DOC_ACTIVE_DATE' => 'Petsa sa pagpublikar',
    'ERR_FILENAME' => 'Pangan sa File',
    'ERR_DOC_VERSION' => 'Bersiyon sa Dokumento',
    'ERR_DELETE_CONFIRM' => 'Ganahan ba ka papason ang rebisyon sa kini nga dokumento?',
    'ERR_DELETE_LATEST_VERSION' => 'Wala ka gitugotan nga papason ang kinaulahia nga rebisyon sa dokumento.',
    'LNK_NEW_MAIL_MERGE' => 'Ang mail e merge',
    'ERR_MISSING_FILE' => 'Ang kini na dokumento kay nawagtangan og file, mahitungod tingali adunay napakyas atol sa pagupload. Palihug usab og pagupload sa file o kontaka ang imohang administrador.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Pangalan',
    'LBL_LIST_IS_TEMPLATE' => 'Template?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Matang sa Dokumento',
    'LBL_LAST_REV_CREATE_DATE' => 'Petsa sa ulahi nga gihimo nga rebisyon',
    'LBL_CONTRACTS' => 'Mga kontrata',
    'LBL_CREATED_USER' => 'Nahimo nga User',
    'LBL_DOCUMENT_INFORMATION' => 'Kinatibuk-ang panan-aw', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID sa Kakuhaan sa Dokumento',
    'LBL_DOC_TYPE' => 'Kakuhaan',
    'LBL_DOC_TYPE_POPUP' => 'Pagpili og kakuhaan hain kini nga dokumento i-upload <br> og asa kini anaa gikan.',
    'LBL_DOC_URL' => 'URL sa Kakuhaan sa Dokumento',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Pangan sa File',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Ang una nga 20 nga pinakabag-o nga nausab na mga file kay nalantad sa nagkanaog na paagi sa lista na naa sa ubos. Gamita ang Pagpangita para makit-an ang uban na mga file.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Pangan sa File',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Ang tiggamit nisuway og akses og imbalido na iksternal na API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Ang login nga tseke napakyas para sa eksternal na API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Mga Account',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Mga oportunidad',
    'LBL_CASES_SUBPANEL_TITLE' => 'Mga Kaso',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Manananap',

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
);
