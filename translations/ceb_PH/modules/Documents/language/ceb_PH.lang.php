<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODULE_TITLE' => 'Mga Dokumento: Panimalay',
    'LNK_NEW_DOCUMENT' => 'Pagbuhat og Dokumento',
    'LNK_DOCUMENT_LIST' => 'Tan-awon ang mga Dokumento',
    'LBL_DOC_REV_HEADER' => 'Mga Rebisyon sa Dokumento',
    'LBL_SEARCH_FORM_TITLE' => 'Pagpangita sa Dokumento',
    //vardef labels
    'LBL_NAME' => 'Pangalan sa Dokumento',
    'LBL_DESCRIPTION' => 'Paghulagway',
    'LBL_CATEGORY' => 'Kategorya',
    'LBL_SUBCATEGORY' => 'Sub nga Kategoriya',
    'LBL_STATUS' => 'Estado',
    'LBL_CREATED_BY' => 'Gibuhat ni',
    'LBL_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_MODIFIED' => 'Giusab sa ID',
    'LBL_MODIFIED_USER' => 'Giusab ni',
    'LBL_CREATED' => 'Gibuhat ni',
    'LBL_REVISIONS' => 'Mga Rebisyon',
    'LBL_RELATED_DOCUMENT_ID' => 'Iglabot na ID sa Dokumento',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Iglabot sa ID sa Rebisyon sa Dokumento',
    'LBL_IS_TEMPLATE' => 'Usa ka Template',
    'LBL_TEMPLATE_TYPE' => 'Tipo Dokumento',
    'LBL_ASSIGNED_TO_NAME' => 'Gi-assign sa:',
    'LBL_REVISION_NAME' => 'Numero sa Rebisyon',
    'LBL_MIME' => 'Tipo sa Mime',
    'LBL_REVISION' => 'Pag-usab',
    'LBL_DOCUMENT' => 'Iglabot na Dokumento',
    'LBL_LATEST_REVISION' => 'Kinaulahian na Rebisyon',
    'LBL_CHANGE_LOG' => 'Usba ang Log',
    'LBL_ACTIVE_DATE' => 'Petsa sa pagpublikar',
    'LBL_EXPIRATION_DATE' => 'Petsa sa pagikspayr',
    'LBL_FILE_EXTENSION' => 'Ekstensiyon sa File',
    'LBL_LAST_REV_MIME_TYPE' => 'Ulahi na rebisyon nga tipo sa MIME',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Wala mahinganli',
    'LBL_HOMEPAGE_TITLE' => 'Mga Dokumento',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Bag-o nga Dokumento',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Pangalan sa Dokumento:',
    'LBL_FILENAME' => 'Pangalan sa File:',
    'LBL_LIST_FILENAME' => 'File:',
    'LBL_DOC_VERSION' => 'Rebisyon:',
    'LBL_FILE_UPLOAD' => 'File:',

    'LBL_CATEGORY_VALUE' => 'Kategoriya:',
    'LBL_LIST_CATEGORY' => 'Kategorya',
    'LBL_SUBCATEGORY_VALUE' => 'Sub na Kategoriya:',
    'LBL_DOC_STATUS' => 'Estado:',
    'LBL_LAST_REV_CREATOR' => 'Rebisyon Gihimo Ni:',
    'LBL_LASTEST_REVISION_NAME' => 'Pangalan sa kinaulahian nga pag-usab:',
    'LBL_SELECTED_REVISION_NAME' => 'Pangalan sa napilian nga rebisyon:',
    'LBL_CONTRACT_STATUS' => 'Estado sa Kontrata:',
    'LBL_CONTRACT_NAME' => 'Pangalan sa Kontrata:',
    'LBL_DET_RELATED_DOCUMENT' => 'Iglabot na Dokumento:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Iglabot na Rebisyon sa Dokumento:",
    'LBL_DET_IS_TEMPLATE' => 'Template? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Tipo sa Dokumento:',
    'LBL_DOC_DESCRIPTION' => 'Deskripsyon:',
    'LBL_DOC_ACTIVE_DATE' => 'Petsa sa Pagpublikar:',
    'LBL_DOC_EXP_DATE' => 'Petsa sa Pagikspayr:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Lista sa Dokumento',
    'LBL_LIST_DOCUMENT' => 'Dokumento',
    'LBL_LIST_SUBCATEGORY' => 'Sub nga Kategoriya',
    'LBL_LIST_REVISION' => 'Pag-usab',
    'LBL_LIST_LAST_REV_CREATOR' => 'Gipublikar Ni',
    'LBL_LIST_LAST_REV_DATE' => 'Petsa sa Rebisyon',
    'LBL_LIST_VIEW_DOCUMENT' => 'Tan-awa',
    'LBL_LIST_ACTIVE_DATE' => 'Petsa sa pagpublikar',
    'LBL_LIST_EXP_DATE' => 'Petsa sa pagikspayr',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LINKED_ID' => 'Sinumpay na id',
    'LBL_SELECTED_REVISION_ID' => 'Napilian na rebisyon id',
    'LBL_LATEST_REVISION_ID' => 'Kinaulahian na rebisyon id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Napalian na rebisyon na pangalan sa file',
    'LBL_FILE_URL' => 'File url',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategoriya:',
    'LBL_SF_SUBCATEGORY' => 'Sub na Kategoriya:',

    'DEF_CREATE_LOG' => 'Nabuhat na Dokumento',

    //error messages
    'ERR_DOC_NAME' => 'Pangalan sa Dokumento',
    'ERR_DOC_ACTIVE_DATE' => 'Petsa sa pagpublikar',
    'ERR_FILENAME' => 'Pangalan sa File',
    'ERR_DOC_VERSION' => 'Bersiyon sa Dokumento',
    'ERR_DELETE_CONFIRM' => 'Ganahan ba ka papason ang rebisyon sa kini nga dokumento?',
    'ERR_DELETE_LATEST_VERSION' => 'Wala ka gitugotan nga papason ang kinaulahia nga rebisyon sa dokumento.',
    'LNK_NEW_MAIL_MERGE' => 'Ang mail e merge',
    'ERR_MISSING_FILE' => 'Ang kini na dokumento kay nawagtangan og file, mahitungod tingali adunay napakyas atol sa pagupload. Palihug usab og pagupload sa file o kontaka ang imohang administrador.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Pangalan',
    'LBL_LIST_IS_TEMPLATE' => 'Template?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Tipo Dokumento',
    'LBL_LAST_REV_CREATE_DATE' => 'Petsa sa ulahi nga gihimo nga rebisyon',
    'LBL_CONTRACTS' => 'Mga kontrata',
    'LBL_CREATED_USER' => 'Nahimo nga User',
    'LBL_DOCUMENT_INFORMATION' => 'Kinatibuk-ang panan-aw', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID sa Kakuhaan sa Dokumento',
    'LBL_DOC_TYPE' => 'Kakuhaan',
    'LBL_DOC_TYPE_POPUP' => 'Pagpili og kakuhaan hain kini nga dokumento i-upload <br> og asa kini anaa gikan.',
    'LBL_DOC_URL' => 'URL sa Kakuhaan sa Dokumento',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Pangalan sa File',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Ang una nga 20 nga pinakabag-o nga nausab na mga file kay nalantad sa nagkanaog na paagi sa lista na naa sa ubos. Gamita ang Pagpangita para makit-an ang uban na mga file.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Pangalan sa File',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Ang tiggamit nisuway og akses og imbalido na iksternal na API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Ang login nga tseke napakyas para sa eksternal na API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Mga Account',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Mga Kontak',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Mga Oportunidad',
    'LBL_CASES_SUBPANEL_TITLE' => 'Mga Kaso',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
);
