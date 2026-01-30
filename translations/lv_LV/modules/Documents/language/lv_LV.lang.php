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
    'LBL_MODULE_TITLE' => 'Dokumenti: Sākums',
    'LNK_NEW_DOCUMENT' => 'Izveidot dokumentu',
    'LNK_DOCUMENT_LIST' => 'Aplūkot dokumentus',
    'LBL_DOC_REV_HEADER' => 'Dokumenta versijas',
    'LBL_SEARCH_FORM_TITLE' => 'Dokumentu meklēšana',
    //vardef labels
    'LBL_NAME' => 'Dokumenta nosaukums',
    'LBL_DESCRIPTION' => 'Apraksts',
    'LBL_CATEGORY' => 'Kategorija',
    'LBL_SUBCATEGORY' => 'Apakškategorija',
    'LBL_STATUS' => 'Statuss',
    'LBL_CREATED_BY' => 'Izveidoja',
    'LBL_DATE_ENTERED' => 'Izveidošanas datums',
    'LBL_DATE_MODIFIED' => 'Modificēts',
    'LBL_DELETED' => 'Izdzēsts',
    'LBL_MODIFIED' => 'Modificēja ID',
    'LBL_MODIFIED_USER' => 'Modificēja',
    'LBL_CREATED' => 'Izveidoja',
    'LBL_REVISIONS' => 'Versijas',
    'LBL_RELATED_DOCUMENT_ID' => 'Saistītā dokumenta Id',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Saistītā dokumenta versijas Id',
    'LBL_IS_TEMPLATE' => 'Vai ir šī ir dokumenta veidne?',
    'LBL_TEMPLATE_TYPE' => 'Dokumenta tips',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam:',
    'LBL_REVISION_NAME' => 'Versijas numurs',
    'LBL_MIME' => 'Mime veids',
    'LBL_REVISION' => 'Versija',
    'LBL_DOCUMENT' => 'Saistīts dokuments',
    'LBL_LATEST_REVISION' => 'Pēdējā versija',
    'LBL_CHANGE_LOG' => 'Izmaiņu žurnāls',
    'LBL_ACTIVE_DATE' => 'Publicēts',
    'LBL_EXPIRATION_DATE' => 'Derīguma termiņš',
    'LBL_FILE_EXTENSION' => 'Faila paplašinājums',
    'LBL_LAST_REV_MIME_TYPE' => 'Pēdējas versijas MIME tips',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Nav norādīts',
    'LBL_HOMEPAGE_TITLE' => 'Mani dokumenti',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Jauns dokuments',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Dokumenta nosaukums:',
    'LBL_FILENAME' => 'Faila nosaukums:',
    'LBL_LIST_FILENAME' => 'Fails:',
    'LBL_DOC_VERSION' => 'Versija:',
    'LBL_FILE_UPLOAD' => 'Fails:',

    'LBL_CATEGORY_VALUE' => 'Kategorija:',
    'LBL_LIST_CATEGORY' => 'Kategorija',
    'LBL_SUBCATEGORY_VALUE' => 'Apakškategorija:',
    'LBL_DOC_STATUS' => 'Statuss:',
    'LBL_LAST_REV_CREATOR' => 'Versiju izveidoja:',
    'LBL_LASTEST_REVISION_NAME' => 'Pēdējās versijas nosaukums:',
    'LBL_SELECTED_REVISION_NAME' => 'Izvēlētās versijas nosaukums',
    'LBL_CONTRACT_STATUS' => 'Līguma statuss:',
    'LBL_CONTRACT_NAME' => 'Līguma nosaukums:',
    'LBL_DET_RELATED_DOCUMENT' => 'Saistītais dokuments:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Saistītā dokumenta versija:",
    'LBL_DET_IS_TEMPLATE' => 'Vai šī ir dokumenta veidne? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Dokumenta tips:',
    'LBL_DOC_DESCRIPTION' => 'Apraksts:',
    'LBL_DOC_ACTIVE_DATE' => 'Publicēts:',
    'LBL_DOC_EXP_DATE' => 'Derīgs līdz:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Dokumentu saraksts',
    'LBL_LIST_DOCUMENT' => 'SuiteCRM dokuments',
    'LBL_LIST_SUBCATEGORY' => 'Apakškategorija',
    'LBL_LIST_REVISION' => 'Versija',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publicēja',
    'LBL_LIST_LAST_REV_DATE' => 'Versijas datums',
    'LBL_LIST_VIEW_DOCUMENT' => 'Skats',
    'LBL_LIST_ACTIVE_DATE' => 'Publicēts',
    'LBL_LIST_EXP_DATE' => 'Derīguma termiņš',
    'LBL_LIST_STATUS' => 'Statuss',
    'LBL_LINKED_ID' => 'Saistītais ID',
    'LBL_SELECTED_REVISION_ID' => 'Izvēlētās versijas ID',
    'LBL_LATEST_REVISION_ID' => 'Jaunākās versijas ID',
    'LBL_SELECTED_REVISION_FILENAME' => 'Izvēlētās versijas faila nosaukums',
    'LBL_FILE_URL' => 'Faila URL',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategorija:',
    'LBL_SF_SUBCATEGORY' => 'Apakškategorija:',

    'DEF_CREATE_LOG' => 'Dokuments izveidots',

    //error messages
    'ERR_DOC_NAME' => 'Dokumenta nosaukums',
    'ERR_DOC_ACTIVE_DATE' => 'Publicēts',
    'ERR_FILENAME' => 'Faila nosaukums',
    'ERR_DOC_VERSION' => 'Dokumenta versija',
    'ERR_DELETE_CONFIRM' => 'Vai vēlaties dzēst šo dokumenta versiju?',
    'ERR_DELETE_LATEST_VERSION' => 'Jums nav atļauts dzēst šī dokumenta pēdējo versiju.',
    'LNK_NEW_MAIL_MERGE' => 'Pasta sapludināšana',
    'ERR_MISSING_FILE' => 'Šim dokumentam nav pieejams fails, iespējams augšupielādes kļūdas dēļ. Lūdzu atkārtoti augšupielādējiet failu vai sazinieties ar administratoru.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Vārds:',
    'LBL_LIST_IS_TEMPLATE' => 'Vai šī ir dokumenta veidne?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Dokumenta tips',
    'LBL_LAST_REV_CREATE_DATE' => 'Pēdējās versijas izveidošanas datums',
    'LBL_CONTRACTS' => 'Līgumi',
    'LBL_CREATED_USER' => 'Izveidoja lietotājs',
    'LBL_DOCUMENT_INFORMATION' => 'Apskats', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Dokumenta avota ID',
    'LBL_DOC_TYPE' => 'Avots',
    'LBL_DOC_TYPE_POPUP' => 'Izvēlies avotu, uz kuru šis dokuments tiks augšupielādēts<br>, un no kura šis dokuments būs pieejams.',
    'LBL_DOC_URL' => 'Dokumenta avota URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Faila nosaukums',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Pirmie 20 nesen modificētie faili ir attēloti dilstošā secībā, sarakstā zemāk. Izmanto Meklēšanu, lai atrastu citus failus.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Faila nosaukums',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Lietotājs mēģināja piekļūt nederīgam arējam API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Ielogošanās pārbaude ārējam API ({0}) neveiksmīga',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klienti',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ielūgtie',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Iespējas',
    'LBL_CASES_SUBPANEL_TITLE' => 'Pieteikumi',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Kļūdas',

    'LBL_AOS_CONTRACTS' => 'Līgumi',
);
