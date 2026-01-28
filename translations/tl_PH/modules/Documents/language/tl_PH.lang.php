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
    'LBL_MODULE_NAME' => 'Ang mga dokumento',
    'LBL_MODULE_TITLE' => 'Ang mga Dokumento: Tahanan',
    'LNK_NEW_DOCUMENT' => 'Gumawa ng Dokumento',
    'LNK_DOCUMENT_LIST' => 'Tingnan ang mga dokumento',
    'LBL_DOC_REV_HEADER' => 'Ang pagpapalit ng bersyon ng dokumento',
    'LBL_SEARCH_FORM_TITLE' => 'Ang paghahanap ng dokumento',
    //vardef labels
    'LBL_NAME' => 'Pangalan ng dokumento',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_CATEGORY' => 'Kategorya',
    'LBL_SUBCATEGORY' => 'Ang pangalawang kategorya',
    'LBL_STATUS' => 'Kalagayan',
    'LBL_CREATED_BY' => 'Nilikha sa pamamagitan ng',
    'LBL_DATE_ENTERED' => 'Ang petsa ay lumikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ay binago',
    'LBL_DELETED' => 'Ang Nabura',
    'LBL_MODIFIED' => 'Ang ID ay binago',
    'LBL_MODIFIED_USER' => 'Binago ni',
    'LBL_CREATED' => 'Nilikha sa pamamagitan ng',
    'LBL_REVISIONS' => 'Ang mga pagbabago',
    'LBL_RELATED_DOCUMENT_ID' => 'Ang dokumentong nauugnay sa ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Ang nauugnay na dokumentong rebIsyon ng ID',
    'LBL_IS_TEMPLATE' => 'Ang template ay isang',
    'LBL_TEMPLATE_TYPE' => 'Ang uri ng dokumento',
    'LBL_ASSIGNED_TO_NAME' => 'Ang Itinalaga kay:',
    'LBL_REVISION_NAME' => 'Ang pagbabago ng numero',
    'LBL_MIME' => 'Ang uri ng panggagaya',
    'LBL_REVISION' => 'Ang pagbabago',
    'LBL_DOCUMENT' => 'Ang kaugnay na dokumento',
    'LBL_LATEST_REVISION' => 'Ang pinakabagong pagbabago',
    'LBL_CHANGE_LOG' => 'Ang log ay baguhin',
    'LBL_ACTIVE_DATE' => 'Ang petsa ay i-publish',
    'LBL_EXPIRATION_DATE' => 'Petsa ng Pag-expire',
    'LBL_FILE_EXTENSION' => 'Ang ekstensiyon ng payl',
    'LBL_LAST_REV_MIME_TYPE' => 'Huling uri ng panggagayang rebisyon',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Hindi natukoy',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking mga dokumento',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Ang bagong dokumento',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Pangalan ng dokumento:',
    'LBL_FILENAME' => 'Ang Pangalan ng payl:',
    'LBL_LIST_FILENAME' => 'Ang payl:',
    'LBL_DOC_VERSION' => 'Ang Pagbabago:',
    'LBL_FILE_UPLOAD' => 'Ang payl:',

    'LBL_CATEGORY_VALUE' => 'Ang kategorya:',
    'LBL_LIST_CATEGORY' => 'Kategorya',
    'LBL_SUBCATEGORY_VALUE' => 'Ang pangalawang kategorya:',
    'LBL_DOC_STATUS' => 'Ang Kalagayan:',
    'LBL_LAST_REV_CREATOR' => 'Ang Rebisyong Nilikha ng:',
    'LBL_LASTEST_REVISION_NAME' => 'Ang pangalan ng pinakabagong rebisyon:',
    'LBL_SELECTED_REVISION_NAME' => 'Ang pangalan ng pinakabagong rebisyon:',
    'LBL_CONTRACT_STATUS' => 'Ang estado ng kontrata:',
    'LBL_CONTRACT_NAME' => 'Ang pangalan ng kontrata:',
    'LBL_DET_RELATED_DOCUMENT' => 'Ang kaugnay ng dokumento:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Ang nauugnay na dokumentong rebIsyon:",
    'LBL_DET_IS_TEMPLATE' => 'Ang template? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Ang uri ng dokumento:',
    'LBL_DOC_DESCRIPTION' => 'Ang Paglalarawan:',
    'LBL_DOC_ACTIVE_DATE' => 'Ang petsa ay i-publish:',
    'LBL_DOC_EXP_DATE' => 'Ang Pagtapos ng Petsa:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Ang Listahan ng Dokumento',
    'LBL_LIST_DOCUMENT' => 'Ang Dokumento',
    'LBL_LIST_SUBCATEGORY' => 'Ang pangalawang kategorya',
    'LBL_LIST_REVISION' => 'Ang pagbabago',
    'LBL_LIST_LAST_REV_CREATOR' => 'Inilathala Ni',
    'LBL_LIST_LAST_REV_DATE' => 'Ang Petsa ng Pagbabago',
    'LBL_LIST_VIEW_DOCUMENT' => 'Ang Tanawin',
    'LBL_LIST_ACTIVE_DATE' => 'Ang petsa ay i-publish',
    'LBL_LIST_EXP_DATE' => 'Petsa ng Pag-expire',
    'LBL_LIST_STATUS' => 'Kalagayan',
    'LBL_LINKED_ID' => 'Ang Id ay naka-link',
    'LBL_SELECTED_REVISION_ID' => 'Ang napiling Id ng rebisyon',
    'LBL_LATEST_REVISION_ID' => 'Ang pinakabagong rebisyon ng id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Ang Napiling pangalan ng rebisyon ng filename',
    'LBL_FILE_URL' => 'Ang payl Url',

    //document search form.
    'LBL_SF_CATEGORY' => 'Ang kategorya:',
    'LBL_SF_SUBCATEGORY' => 'Ang pangalawang kategorya:',

    'DEF_CREATE_LOG' => 'Ang Nalikha na Dokumento',

    //error messages
    'ERR_DOC_NAME' => 'Pangalan ng dokumento',
    'ERR_DOC_ACTIVE_DATE' => 'Ang petsa ay i-publish',
    'ERR_FILENAME' => 'Ang Pangalan ng File',
    'ERR_DOC_VERSION' => 'Ang bersyon ng dokumento',
    'ERR_DELETE_CONFIRM' => 'Gusto mo bang burahin ang pagbabago ng dokumentong ito?',
    'ERR_DELETE_LATEST_VERSION' => 'Ikaw ay hindi pinapayagang burahin ang pinakabagong pagbabago ng isang dokumento.',
    'LNK_NEW_MAIL_MERGE' => 'Ang pagsasama ng sulat',
    'ERR_MISSING_FILE' => 'Ang dokumentong ito ay nawawalang payl, dahil sa kamalian habang nag-upload. Mangyaring subukang muli ang pag-upload ng payl o makipag-ugnay sa iyong administrator.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Ang Pangalan',
    'LBL_LIST_IS_TEMPLATE' => 'Ang template?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Ang uri ng dokumento',
    'LBL_LAST_REV_CREATE_DATE' => 'Ang huling pagbabago ay lumikha ng petsa',
    'LBL_CONTRACTS' => 'Mga kontrata',
    'LBL_CREATED_USER' => 'Nilikhang gumagamit',
    'LBL_DOCUMENT_INFORMATION' => 'Sa taas ng tanawin', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Ang dokumento na pinagmulan ng ID',
    'LBL_DOC_TYPE' => 'Ang pinagmulan',
    'LBL_DOC_TYPE_POPUP' => 'Pumili ng pinagkukunan para ang dokumentong ito ay ma-upload<br> at mula dito ay magagamit ito.',
    'LBL_DOC_URL' => 'Ang dokumentong pinagmulan ng URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Ang Pangalan ng File',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Ang naunang 20 na payl na pinaka-binago kamakailan ay ipinakita sa pababang ayos sa listahan sa ibaba. Gamitin ang paghahanap para hanapin ang ibaa pa ng mga payl.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Ang Pangalan ng File',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Ang gumagamit na nagtangka para mag-access ng hindi wastong panglabas na API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Ang pagsusuri ng login ay nabigo para sa panglabas na API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ang mga Akawnt',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ang mga koneksyon',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ang mga pagkakataon',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ang mga kaso',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ang mga mali',

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
);
