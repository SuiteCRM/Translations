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
    'LBL_MODULE_TITLE' => 'Mga dokumento: Home',
    'LNK_NEW_DOCUMENT' => 'Maglikha ng Dokumento',
    'LNK_DOCUMENT_LIST' => 'Tingnan ang mga dokumento',
    'LBL_DOC_REV_HEADER' => 'Rebisyon ng mga dokumento',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng dokumento',
    //vardef labels
    'LBL_NAME' => 'Pangalan ng dokumento',
    'LBL_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_CATEGORY' => 'Kategorya',
    'LBL_SUBCATEGORY' => 'Sub katergorya',
    'LBL_STATUS' => 'Katayuan',
    'LBL_CREATED_BY' => 'Inilikha sa pamamagitan ng',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_DELETED' => 'Ang pagkabura',
    'LBL_MODIFIED' => 'Tukuyin sa pamamagitan ng ID',
    'LBL_MODIFIED_USER' => 'Binago ni',
    'LBL_CREATED' => 'Inilikha sa pamamagitan ng',
    'LBL_REVISIONS' => 'Mga rebisyon',
    'LBL_RELATED_DOCUMENT_ID' => 'Nauunag sa Dokumentong ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID sa nauugnay sa dokumentong rebisyon',
    'LBL_IS_TEMPLATE' => 'Ito ay Template',
    'LBL_TEMPLATE_TYPE' => 'Uri ng dokumento',
    'LBL_ASSIGNED_TO_NAME' => 'Ini-assign sa:',
    'LBL_REVISION_NAME' => 'Numero ng rebisyon',
    'LBL_MIME' => 'Uri ng Mime',
    'LBL_REVISION' => 'Rebisyon',
    'LBL_DOCUMENT' => 'Kaugnay na dokumento',
    'LBL_LATEST_REVISION' => 'Pinakabagong rebisyon',
    'LBL_CHANGE_LOG' => 'Baguhin ang log',
    'LBL_ACTIVE_DATE' => 'Ilathala ang petsa',
    'LBL_EXPIRATION_DATE' => 'Petsa ng pagkawalang-bisa',
    'LBL_FILE_EXTENSION' => 'Ekstensyon ng File',
    'LBL_LAST_REV_MIME_TYPE' => 'Huling rebisyon ng uri ng MIME',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Hindi natukoy',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking mga dokumento',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Bagong dokumento',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Pangalan ng dokumento:',
    'LBL_FILENAME' => 'Pangalan ng file:',
    'LBL_LIST_FILENAME' => 'File:',
    'LBL_DOC_VERSION' => 'Rebisyon:',
    'LBL_FILE_UPLOAD' => 'File:',

    'LBL_CATEGORY_VALUE' => 'Kategorya:',
    'LBL_LIST_CATEGORY' => 'Kategorya',
    'LBL_SUBCATEGORY_VALUE' => 'Sub Kategorya:',
    'LBL_DOC_STATUS' => 'Katayuan:',
    'LBL_LAST_REV_CREATOR' => 'Rebisyon ng Paglika sa pamamagitan ng:',
    'LBL_LASTEST_REVISION_NAME' => 'Pinakamabagong pangalan ng rebisyon:',
    'LBL_SELECTED_REVISION_NAME' => 'Napiling pangalan ng rebisyon:',
    'LBL_CONTRACT_STATUS' => 'Kontrata estado:',
    'LBL_CONTRACT_NAME' => 'Pangalan ng kontrata:',
    'LBL_DET_RELATED_DOCUMENT' => 'Nauugnay na dokumento:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Rebisyon nauugnay sa dokumento:",
    'LBL_DET_IS_TEMPLATE' => 'Template? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Uri ng dokumento:',
    'LBL_DOC_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_DOC_ACTIVE_DATE' => 'Petsa ng paglathala:',
    'LBL_DOC_EXP_DATE' => 'Petsa ng pagkawalang-bisa:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Listahan ng dokumento',
    'LBL_LIST_DOCUMENT' => 'Dokumento',
    'LBL_LIST_SUBCATEGORY' => 'Sub katergorya',
    'LBL_LIST_REVISION' => 'Rebisyon',
    'LBL_LIST_LAST_REV_CREATOR' => 'Inilathala Ni',
    'LBL_LIST_LAST_REV_DATE' => 'Petsa ng rebisyon',
    'LBL_LIST_VIEW_DOCUMENT' => 'Tingnan',
    'LBL_LIST_ACTIVE_DATE' => 'Ilathala ang petsa',
    'LBL_LIST_EXP_DATE' => 'Petsa ng pagkawalang-bisa',
    'LBL_LIST_STATUS' => 'Katayuan',
    'LBL_LINKED_ID' => 'Naka-link na Id',
    'LBL_SELECTED_REVISION_ID' => 'Id ng napiling rebisyon',
    'LBL_LATEST_REVISION_ID' => 'Id ng pinakamabagong rebisyon',
    'LBL_SELECTED_REVISION_FILENAME' => 'Filename ng napiiling rebisyon',
    'LBL_FILE_URL' => 'Url ng file',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategorya:',
    'LBL_SF_SUBCATEGORY' => 'Sub Kategorya:',

    'DEF_CREATE_LOG' => 'Nailikha na ang Dokumento',

    //error messages
    'ERR_DOC_NAME' => 'Pangalan ng dokumento',
    'ERR_DOC_ACTIVE_DATE' => 'Ilathala ang petsa',
    'ERR_FILENAME' => 'Pangalan ng file',
    'ERR_DOC_VERSION' => 'Dokumentong rebisyon',
    'ERR_DELETE_CONFIRM' => 'Gusto mo bang burahin ang dokumentong rebisyon?',
    'ERR_DELETE_LATEST_VERSION' => 'Hindi ka pinapahintulutan na burahin ang pinakamabagong bersyon ng isang dokumento.',
    'LNK_NEW_MAIL_MERGE' => 'Pagsamahin ang mail',
    'ERR_MISSING_FILE' => 'Itong dokumento ay nawala ang isang file, malamang dahil sa isang error sa panahon ng pag-upload. Mangyaring subukan ulit sa pag-upload ng file o  kontakin ang iyong tagapangasiwa.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Ang pangalan',
    'LBL_LIST_IS_TEMPLATE' => 'Template?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Uri ng dokumento',
    'LBL_LAST_REV_CREATE_DATE' => 'Huling rebisyon sa petsa ng paglikha',
    'LBL_CONTRACTS' => 'Mga kontrata',
    'LBL_CREATED_USER' => 'Nilikha ng gumagamit',
    'LBL_DOCUMENT_INFORMATION' => 'Buod', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID ng dokumentong pinagkukunan',
    'LBL_DOC_TYPE' => 'Pinagkukunan',
    'LBL_DOC_TYPE_POPUP' => 'Piliin ang pinagmukanan kung alin dokumentong ito ay ma i-upload<br> at mula saan ito magagamit.',
    'LBL_DOC_URL' => 'URL ng dokumentong pinagkukunan',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Pangalan ng file',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Ang unang 20 na kamakailan lang na binago na mga files ay ipinapakita sila sa pababang pagkasuno-sunod sa listahan na nasa ibaba. Gamitang ang Search para mahanap ang iba pang mga file.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Pangalan ng file',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Ang gumagamit ay nagtatangkang i-access ang isang hindi balidong external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Ang logn check failed para sa external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Mga account',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Mga kontak',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ang mga oportunidad',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ang mga kaso',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ang mga bug',

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
);
