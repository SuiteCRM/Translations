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
    'LBL_MODULE_NAME' => 'Dokumentumok',
    'LBL_MODULE_TITLE' => 'Dokumentumok: Főoldal',
    'LNK_NEW_DOCUMENT' => 'Dokumentum létrehozása',
    'LNK_DOCUMENT_LIST' => 'Dokumentumok listája',
    'LBL_SEARCH_FORM_TITLE' => 'Dokumentum keresése',
    //vardef labels
    'LBL_NAME' => 'Dokumentum neve',
    'LBL_DESCRIPTION' => 'Üzenet tartalma',
    'LBL_ASSIGNED_TO' => 'Felelős:',
    'LBL_CATEGORY' => 'Kategória',
    'LBL_SUBCATEGORY' => 'Alkategória',
    'LBL_STATUS' => 'Állapot',
    'LBL_IS_TEMPLATE' => 'Ez egy sablon',
    'LBL_TEMPLATE_TYPE' => 'Dokumentum típus',
    'LBL_REVISION_NAME' => 'Átvizsgálás szám',
    'LBL_MIME' => 'Tartalomtípus',
    'LBL_REVISION' => 'Módosítás',
    'LBL_DOCUMENT' => 'Kapcsolódó dokumentumok',
    'LBL_LATEST_REVISION' => 'Utólsó verzió',
    'LBL_CHANGE_LOG' => 'Változtatási napló',
    'LBL_ACTIVE_DATE' => 'Publikálás Dátuma',
    'LBL_EXPIRATION_DATE' => 'Érvényesség dátuma',
    'LBL_FILE_EXTENSION' => 'File kiterjesztés',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Nincs részletezve',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Új dokumentum',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Dokumentum neve:',
    'LBL_FILENAME' => 'Fájlnév:',
    'LBL_FILE_UPLOAD' => 'Fájl:',
    'LBL_DOC_VERSION' => 'Verzió:',
    'LBL_CATEGORY_VALUE' => 'Kategória:',
    'LBL_SUBCATEGORY_VALUE' => 'Alkategória:',
    'LBL_DOC_STATUS' => 'Állapot:',
    'LBL_DET_TEMPLATE_TYPE' => 'Dokumentum típusa:',
    'LBL_DOC_DESCRIPTION' => 'Üzenet szövege:',
    'LBL_DOC_ACTIVE_DATE' => 'Közzététel dátuma:',
    'LBL_DOC_EXP_DATE' => 'Lejárat dátuma:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Dokumentumlista',
    'LBL_LIST_DOCUMENT' => 'Dokumentum',
    'LBL_LIST_CATEGORY' => 'Category',
    'LBL_LIST_SUBCATEGORY' => 'Sub Category',
    'LBL_LIST_REVISION' => 'Revision',
    'LBL_LIST_LAST_REV_CREATOR' => 'Közzétette',
    'LBL_LIST_LAST_REV_DATE' => 'Verzió dátuma',
    'LBL_LIST_VIEW_DOCUMENT' => 'Megtekintés',
    'LBL_LIST_ACTIVE_DATE' => 'Publish Date',
    'LBL_LIST_EXP_DATE' => 'Expiration Date',
    'LBL_LIST_STATUS' => 'Status',

    //document search form.
    'LBL_SF_CATEGORY' => 'Category:',
    'LBL_SF_SUBCATEGORY' => 'Sub Category:',

    'DEF_CREATE_LOG' => 'Dokumentum létrehozva',

    //error messages
    'ERR_DOC_NAME' => 'Document Name',
    'ERR_DOC_ACTIVE_DATE' => 'Publish Date',
    'ERR_FILENAME' => 'File neve',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Document Name',

    'LBL_EDIT_BUTTON' => 'Módosítás',
    'LBL_REMOVE' => 'Eltávolítás',

);
