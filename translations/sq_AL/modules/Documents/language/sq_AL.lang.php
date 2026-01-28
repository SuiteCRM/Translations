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
    'LBL_MODULE_NAME' => 'Dokumentacionet',
    'LBL_MODULE_TITLE' => 'Dokumentacioni: Ballina',
    'LNK_NEW_DOCUMENT' => 'krijo dokumentacion',
    'LNK_DOCUMENT_LIST' => 'shiko dokumentacionet',
    'LBL_DOC_REV_HEADER' => 'Revizioni i dokumentacionit',
    'LBL_SEARCH_FORM_TITLE' => 'kërkimi i dokumentacionit',
    //vardef labels
    'LBL_NAME' => 'emri i dokumentacionit',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_CATEGORY' => 'Kategoria',
    'LBL_SUBCATEGORY' => 'nënkategoria',
    'LBL_STATUS' => 'Statusi',
    'LBL_CREATED_BY' => 'Krijuar nga',
    'LBL_DATE_ENTERED' => 'Të dhënat e krijuara',
    'LBL_DATE_MODIFIED' => 'Të dhënat e modifikuara',
    'LBL_DELETED' => 'E fshirë',
    'LBL_MODIFIED' => 'Modifikuar nga Id',
    'LBL_MODIFIED_USER' => 'Modifikuar nga',
    'LBL_CREATED' => 'Krijuar nga',
    'LBL_REVISIONS' => 'Revisions',
    'LBL_RELATED_DOCUMENT_ID' => 'Id e dokumentacionit lidhës',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Id e revizionit të dokumentacionit lidhës',
    'LBL_IS_TEMPLATE' => 'Është shabllon',
    'LBL_TEMPLATE_TYPE' => 'Lloji okumentacioni',
    'LBL_ASSIGNED_TO_NAME' => 'drejtuar',
    'LBL_REVISION_NAME' => 'numri i rishikimit',
    'LBL_MIME' => 'Lloji pantomime',
    'LBL_REVISION' => 'rishikim',
    'LBL_DOCUMENT' => 'dokumentacion në lidhje me',
    'LBL_LATEST_REVISION' => 'rishikimi i fundit',
    'LBL_CHANGE_LOG' => 'ndryshimi i dokumentacionit',
    'LBL_ACTIVE_DATE' => 'data e publikimit',
    'LBL_EXPIRATION_DATE' => 'data e skadimit',
    'LBL_FILE_EXTENSION' => 'zgjatje e dosjes',
    'LBL_LAST_REV_MIME_TYPE' => 'Rishikimi i fundit të llojit MIME',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'E papërcaktuar',
    'LBL_HOMEPAGE_TITLE' => 'Dokumentacionet e mia',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Dokumentacion i ri',
    //document edit and detail view
    'LBL_DOC_NAME' => 'emri i dokumentacionit',
    'LBL_FILENAME' => 'Emri i dosjes',
    'LBL_LIST_FILENAME' => 'Dosja',
    'LBL_DOC_VERSION' => 'rishikim',
    'LBL_FILE_UPLOAD' => 'Dosja',

    'LBL_CATEGORY_VALUE' => 'Kategoria',
    'LBL_LIST_CATEGORY' => 'Kategoria',
    'LBL_SUBCATEGORY_VALUE' => 'Nën kategoria',
    'LBL_DOC_STATUS' => 'statusi',
    'LBL_LAST_REV_CREATOR' => 'Revizion i krijuar nga:',
    'LBL_LASTEST_REVISION_NAME' => 'Emri i revizionit të fundit',
    'LBL_SELECTED_REVISION_NAME' => 'Selekto emrin e revizionit',
    'LBL_CONTRACT_STATUS' => 'Statusi i kontratës:',
    'LBL_CONTRACT_NAME' => 'Emri i kontratës:',
    'LBL_DET_RELATED_DOCUMENT' => 'Dokumentet lidhëse',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Revizioni i dokumenteve lidhëse",
    'LBL_DET_IS_TEMPLATE' => 'Shabllon?',
    'LBL_DET_TEMPLATE_TYPE' => 'lloji i dokumentacionit',
    'LBL_DOC_DESCRIPTION' => 'Përshkrim',
    'LBL_DOC_ACTIVE_DATE' => 'data e publikimit',
    'LBL_DOC_EXP_DATE' => 'data e skadimit',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Lista e dokumentacionit',
    'LBL_LIST_DOCUMENT' => 'Dokumentacion',
    'LBL_LIST_SUBCATEGORY' => 'nënkategoria',
    'LBL_LIST_REVISION' => 'rishikim',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publikuar nga',
    'LBL_LIST_LAST_REV_DATE' => 'data e rishikimit',
    'LBL_LIST_VIEW_DOCUMENT' => 'Pamje',
    'LBL_LIST_ACTIVE_DATE' => 'data e publikimit',
    'LBL_LIST_EXP_DATE' => 'data e skadimit',
    'LBL_LIST_STATUS' => 'Statusi',
    'LBL_LINKED_ID' => 'Id lidhëse',
    'LBL_SELECTED_REVISION_ID' => 'id e revizionit të selektuar',
    'LBL_LATEST_REVISION_ID' => 'id e revizionit të fundit',
    'LBL_SELECTED_REVISION_FILENAME' => 'emri i dosjes së revizionit të selektuar',
    'LBL_FILE_URL' => 'URL dosja',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategoria',
    'LBL_SF_SUBCATEGORY' => 'Nën kategoria',

    'DEF_CREATE_LOG' => 'dokumentacioni i krijuar',

    //error messages
    'ERR_DOC_NAME' => 'emri i dokumentacionit',
    'ERR_DOC_ACTIVE_DATE' => 'data e publikimit',
    'ERR_FILENAME' => 'emri i dosjes',
    'ERR_DOC_VERSION' => 'versioni i dokumentacionit',
    'ERR_DELETE_CONFIRM' => 'A dëshironi të fshini këtë dokumentacion të rishikuar?',
    'ERR_DELETE_LATEST_VERSION' => 'Nuk jeni të autorizuar të fshini revizionin e fundit të dokumentit.',
    'LNK_NEW_MAIL_MERGE' => 'Bashkim i  maileve',
    'ERR_MISSING_FILE' => 'Ky dokument mungon në dosje, më shumë gjasa për shkak të një gabimi gjatë ngarkimit. Ju lutemi provoni përsëri të ngarkoni dosjen ose kontaktoni administratorin tuaj.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Emri',
    'LBL_LIST_IS_TEMPLATE' => 'Shabllon?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Lloji okumentacioni',
    'LBL_LAST_REV_CREATE_DATE' => 'data e revizionit të fundit të krijuar',
    'LBL_CONTRACTS' => 'Kontratat',
    'LBL_CREATED_USER' => 'Përdorues i krijuar',
    'LBL_DOCUMENT_INFORMATION' => 'Pasqyra', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID e burimit të dokumentacionit',
    'LBL_DOC_TYPE' => 'burimi',
    'LBL_DOC_TYPE_POPUP' => 'Selekto burimin për të cilin ky dokument do të jetë i ngarkuar<br />dhe nga i cili ai do të jetë në dispozicion.',
    'LBL_DOC_URL' => 'Burimi i URL dokumentacionit',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'emri i dosjes',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => '20 dosjet e para më së fundi të modifikuara janë shfaqur në rendin zbritës në listën më poshtë. Përdorni Kërko për të gjetur dosjet tjera.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'emri i dosjes',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Përdoruesi tentoi për të hyrë në një API të jashtme jovalide ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Identifikimi i kontrollit dështoi për API të jashtme ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Accounts',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktet',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Mundësite',
    'LBL_CASES_SUBPANEL_TITLE' => 'rastet',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Gjyrmues i gabimeve',

    'LBL_AOS_CONTRACTS' => 'Kontratat',
);
