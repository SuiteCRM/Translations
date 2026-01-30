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
    'LBL_MODULE_NAME' => 'Dokumentumok',
    'LBL_MODULE_TITLE' => 'Dokumentumok: Főoldal',
    'LNK_NEW_DOCUMENT' => 'Dokumentum létrehozása',
    'LNK_DOCUMENT_LIST' => 'Dokumentumok megtekintése',
    'LBL_DOC_REV_HEADER' => 'Dokumentum felülvizsgálata',
    'LBL_SEARCH_FORM_TITLE' => 'Dokumentum keresése',
    //vardef labels
    'LBL_NAME' => 'Dokumentum neve',
    'LBL_DESCRIPTION' => 'Leírás',
    'LBL_CATEGORY' => 'Kategória',
    'LBL_SUBCATEGORY' => 'Alkategória',
    'LBL_STATUS' => 'Állapot',
    'LBL_CREATED_BY' => 'Létrehozta:',
    'LBL_DATE_ENTERED' => 'Létrehozás dátuma',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_DELETED' => 'Törölve',
    'LBL_MODIFIED' => 'Módosító ID',
    'LBL_MODIFIED_USER' => 'Módosította:',
    'LBL_CREATED' => 'Létrehozta:',
    'LBL_REVISIONS' => 'Módosítások',
    'LBL_RELATED_DOCUMENT_ID' => 'Kapcsolódó dokumentum azonosítója',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Kapcsolódó dokumentum módosítás azonosítója',
    'LBL_IS_TEMPLATE' => 'Sablon?',
    'LBL_TEMPLATE_TYPE' => 'Dokumentum típusa:',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_REVISION_NAME' => 'Verzió száma',
    'LBL_MIME' => 'Tartalomtípus',
    'LBL_REVISION' => 'Verzió',
    'LBL_DOCUMENT' => 'Kapcsolódó dokumentum',
    'LBL_LATEST_REVISION' => 'Utólsó verzió',
    'LBL_CHANGE_LOG' => 'Váltózáskövetés:',
    'LBL_ACTIVE_DATE' => 'Publikálás dátuma',
    'LBL_EXPIRATION_DATE' => 'Lejárat dátuma',
    'LBL_FILE_EXTENSION' => 'File kiterjesztés',
    'LBL_LAST_REV_MIME_TYPE' => 'Utolsó módosítás MIME típusa',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Nincs',
    'LBL_HOMEPAGE_TITLE' => 'Dokumentumaim',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Új dokumentum',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Dokumentum neve:',
    'LBL_FILENAME' => 'File neve:',
    'LBL_LIST_FILENAME' => 'Fájl:',
    'LBL_DOC_VERSION' => 'Verzió:',
    'LBL_FILE_UPLOAD' => 'Fájl:',

    'LBL_CATEGORY_VALUE' => 'Kategória:',
    'LBL_LIST_CATEGORY' => 'Kategória',
    'LBL_SUBCATEGORY_VALUE' => 'Alkategória:',
    'LBL_DOC_STATUS' => 'Állapot:',
    'LBL_LAST_REV_CREATOR' => 'A módosítást készítette:',
    'LBL_LASTEST_REVISION_NAME' => 'Utolsó módosítás neve:',
    'LBL_SELECTED_REVISION_NAME' => 'Kiválasztott módosítás neve:',
    'LBL_CONTRACT_STATUS' => 'Szerződés státusz:',
    'LBL_CONTRACT_NAME' => 'Szeződés neve:',
    'LBL_DET_RELATED_DOCUMENT' => 'Kapcsolódó dokumentum:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Kapcsolódó dokumentum módosítása:",
    'LBL_DET_IS_TEMPLATE' => 'Sablon?:',
    'LBL_DET_TEMPLATE_TYPE' => 'Dokumentum típusa:',
    'LBL_DOC_DESCRIPTION' => 'Leírás:',
    'LBL_DOC_ACTIVE_DATE' => 'Publikálás dátuma:',
    'LBL_DOC_EXP_DATE' => 'Lejárat dátuma:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Dokumentumlista',
    'LBL_LIST_DOCUMENT' => 'Dokumentum',
    'LBL_LIST_SUBCATEGORY' => 'Alkategória',
    'LBL_LIST_REVISION' => 'Verzió',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publikálta',
    'LBL_LIST_LAST_REV_DATE' => 'Verzió dátuma',
    'LBL_LIST_VIEW_DOCUMENT' => 'Nézet',
    'LBL_LIST_ACTIVE_DATE' => 'Publikálás dátuma',
    'LBL_LIST_EXP_DATE' => 'Lejárat dátuma',
    'LBL_LIST_STATUS' => 'Állapot',
    'LBL_LINKED_ID' => 'Kapcsolódás azonosító',
    'LBL_SELECTED_REVISION_ID' => 'Kiválasztott módosítás azonosítója',
    'LBL_LATEST_REVISION_ID' => 'Legutóbbi módosítás azonosítója',
    'LBL_SELECTED_REVISION_FILENAME' => 'Kiválasztott módosítás fájlneve',
    'LBL_FILE_URL' => 'Fájl URL',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategória:',
    'LBL_SF_SUBCATEGORY' => 'Alkategória:',

    'DEF_CREATE_LOG' => 'Dokumentum létrehozva',

    //error messages
    'ERR_DOC_NAME' => 'Dokumentum neve',
    'ERR_DOC_ACTIVE_DATE' => 'Publikálás dátuma',
    'ERR_FILENAME' => 'File neve',
    'ERR_DOC_VERSION' => 'Dokumentum verziója',
    'ERR_DELETE_CONFIRM' => 'Törölni szeretné ezt a verziót?',
    'ERR_DELETE_LATEST_VERSION' => 'Nincs jogosultsága törölni a dokumentum utolsó verzióját.',
    'LNK_NEW_MAIL_MERGE' => 'Körlevél',
    'ERR_MISSING_FILE' => 'Ez a dokumentum nem tartalmaz egy fájl, feltehetően feltöltés közben bekövetkezett hiba miatt. Kérem próbálja meg ismételten feltölteni a fájlt vagy lépjen kapcsolatba rendszergazdájával.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Név',
    'LBL_LIST_IS_TEMPLATE' => 'Sablon?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Dokumentum típusa:',
    'LBL_LAST_REV_CREATE_DATE' => 'Utolsó módosítás létrehozásának dátuma',
    'LBL_CONTRACTS' => 'Szerződések',
    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_DOCUMENT_INFORMATION' => 'Áttekintés', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Dokumentum Forrás azonosító',
    'LBL_DOC_TYPE' => 'Forrás',
    'LBL_DOC_TYPE_POPUP' => 'Válassza ki a forrást ahonnan feltölti a dokumentumot, és ahonnan elérhető lesz.',
    'LBL_DOC_URL' => 'Dokumentum forrás URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'File neve',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Az alábbi listában az első 20 legutóbb módosított fájl található csökkenő sorrendben. Használja a Keresés gombot egyéb fájlok megtalálásához.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'File neve',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'A felhasználó megpróbált hozzáférni egy érvénytelen külső API-hoz ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'A felhasználó érvénytelen külső API-hoz ({0}) próbált hozzáférni.',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ügyfelek',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_CASES_SUBPANEL_TITLE' => 'Esetek',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hibajegyek',

    'LBL_AOS_CONTRACTS' => 'Szerződések',
);
