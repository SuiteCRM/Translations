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
    'LBL_MODULE_NAME' => 'Dokumenty',
    'LBL_MODULE_TITLE' => 'Dokumenty',
    'LNK_NEW_DOCUMENT' => 'Vytvoriť dokument',
    'LNK_DOCUMENT_LIST' => 'Zoznam dokumentov',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadať dokument',
    //vardef labels
    'LBL_NAME' => 'Názov dokumentu',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_ASSIGNED_TO' => 'Priradené ku:',
    'LBL_CATEGORY' => 'Kategória',
    'LBL_SUBCATEGORY' => 'Podkategória',
    'LBL_STATUS' => 'Stav',
    'LBL_IS_TEMPLATE' => 'Je šablóna',
    'LBL_TEMPLATE_TYPE' => 'Typ dokumentu',
    'LBL_REVISION_NAME' => 'Číslo verzie',
    'LBL_MIME' => 'MIME typ',
    'LBL_REVISION' => 'Verzia',
    'LBL_DOCUMENT' => 'Súvisiaci dokument',
    'LBL_LATEST_REVISION' => 'Posledná verzia',
    'LBL_CHANGE_LOG' => 'Záznam zmien',
    'LBL_ACTIVE_DATE' => 'Zverejnené',
    'LBL_EXPIRATION_DATE' => 'Vyprší dňa',
    'LBL_FILE_EXTENSION' => 'Prípona súboru',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Neurčené',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nový dokument',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Názov dokumentu:',
    'LBL_FILENAME' => 'Názov súboru:',
    'LBL_FILE_UPLOAD' => 'Súbor:',
    'LBL_DOC_VERSION' => 'Verzia:',
    'LBL_CATEGORY_VALUE' => 'Kategória:',
    'LBL_SUBCATEGORY_VALUE' => 'Podkategória:',
    'LBL_DOC_STATUS' => 'Stav:',
    'LBL_DET_TEMPLATE_TYPE' => 'Typ dokumentu:',
    'LBL_DOC_DESCRIPTION' => 'Popis:',
    'LBL_DOC_ACTIVE_DATE' => 'Zverejnené:',
    'LBL_DOC_EXP_DATE' => 'Vyprší dňa:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Zoznam dokumentov',
    'LBL_LIST_DOCUMENT' => 'Dokumenty',
    'LBL_LIST_CATEGORY' => 'Kategória',
    'LBL_LIST_SUBCATEGORY' => 'Podkategória',
    'LBL_LIST_REVISION' => 'Verzia',
    'LBL_LIST_LAST_REV_CREATOR' => 'Vytvoril',
    'LBL_LIST_LAST_REV_DATE' => 'Dátum kontroly',
    'LBL_LIST_VIEW_DOCUMENT' => 'Zobraziť',
    'LBL_LIST_ACTIVE_DATE' => 'Zverejnené',
    'LBL_LIST_EXP_DATE' => 'Vyprší dňa',
    'LBL_LIST_STATUS' => 'Stav',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategória:',
    'LBL_SF_SUBCATEGORY' => 'Podkategória:',

    'DEF_CREATE_LOG' => 'Dokument vytvorený',

    //error messages
    'ERR_DOC_NAME' => 'Názov dokumentu',
    'ERR_DOC_ACTIVE_DATE' => 'Zverejnené',
    'ERR_FILENAME' => 'Názov súboru',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Názov dokumentu',

    'LBL_EDIT_BUTTON' => 'Upraviť ',
    'LBL_REMOVE' => 'Odstrániť',

);
