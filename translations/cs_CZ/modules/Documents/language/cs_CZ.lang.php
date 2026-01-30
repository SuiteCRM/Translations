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
    'LBL_MODULE_TITLE' => 'Dokumenty: Domů',
    'LNK_NEW_DOCUMENT' => 'Vytvořit dokument',
    'LNK_DOCUMENT_LIST' => 'Seznam dokumentů',
    'LBL_DOC_REV_HEADER' => 'Revize dokumentu',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat dokument',
    //vardef labels
    'LBL_NAME' => 'Název dokumentu',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_CATEGORY' => 'Kategorie',
    'LBL_SUBCATEGORY' => 'Podkategorie',
    'LBL_STATUS' => 'Stav',
    'LBL_CREATED_BY' => 'Vytvořil',
    'LBL_DATE_ENTERED' => 'Datum vytvoření',
    'LBL_DATE_MODIFIED' => 'Datum změny',
    'LBL_DELETED' => 'Vymazáno',
    'LBL_MODIFIED' => 'Změnilo ID',
    'LBL_MODIFIED_USER' => 'Změnil',
    'LBL_CREATED' => 'Vytvořil',
    'LBL_REVISIONS' => 'Revize',
    'LBL_RELATED_DOCUMENT_ID' => 'ID spřízněného dokumentu',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID spřízněné revize dokumentu',
    'LBL_IS_TEMPLATE' => 'Je šablona',
    'LBL_TEMPLATE_TYPE' => 'Typ dokumentu',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k:',
    'LBL_REVISION_NAME' => 'Číslo revize',
    'LBL_MIME' => 'MIME typ',
    'LBL_REVISION' => 'Revize',
    'LBL_DOCUMENT' => 'Související dokument',
    'LBL_LATEST_REVISION' => 'Poslední revize',
    'LBL_CHANGE_LOG' => 'Protokol změn',
    'LBL_ACTIVE_DATE' => 'Datum zveřejnění',
    'LBL_EXPIRATION_DATE' => 'Datum vypršení',
    'LBL_FILE_EXTENSION' => 'Přípona souboru',
    'LBL_LAST_REV_MIME_TYPE' => 'MIME typ poslední revize',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Neurčeno',
    'LBL_HOMEPAGE_TITLE' => 'Mé Dokumenty',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nový dokument',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Název dokumentu:',
    'LBL_FILENAME' => 'Název souboru:',
    'LBL_LIST_FILENAME' => 'Soubor:',
    'LBL_DOC_VERSION' => 'Revize:',
    'LBL_FILE_UPLOAD' => 'Soubor:',

    'LBL_CATEGORY_VALUE' => 'Kategorie:',
    'LBL_LIST_CATEGORY' => 'Kategorie',
    'LBL_SUBCATEGORY_VALUE' => 'Podkategorie:',
    'LBL_DOC_STATUS' => 'Stav:',
    'LBL_LAST_REV_CREATOR' => 'Revizi vytvořil:',
    'LBL_LASTEST_REVISION_NAME' => 'Nejnovější název revize:',
    'LBL_SELECTED_REVISION_NAME' => 'Název vybrané revize:',
    'LBL_CONTRACT_STATUS' => 'Stav smlouvy:',
    'LBL_CONTRACT_NAME' => 'Jméno kontraktu:',
    'LBL_DET_RELATED_DOCUMENT' => 'Spřízněné dokumenty:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Související revize dokumentu:",
    'LBL_DET_IS_TEMPLATE' => 'Šablona? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Typ dokumentu:',
    'LBL_DOC_DESCRIPTION' => 'Popis:',
    'LBL_DOC_ACTIVE_DATE' => 'Datum zveřejnění:',
    'LBL_DOC_EXP_DATE' => 'Datum vypršení:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Seznam dokumentů',
    'LBL_LIST_DOCUMENT' => 'Dokumenty',
    'LBL_LIST_SUBCATEGORY' => 'Podkategorie',
    'LBL_LIST_REVISION' => 'Revize',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publikoval',
    'LBL_LIST_LAST_REV_DATE' => 'Datum revize',
    'LBL_LIST_VIEW_DOCUMENT' => 'Zobrazit',
    'LBL_LIST_ACTIVE_DATE' => 'Datum zveřejnění',
    'LBL_LIST_EXP_DATE' => 'Datum vypršení',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LINKED_ID' => 'Propojená id',
    'LBL_SELECTED_REVISION_ID' => 'Vybrané id revize',
    'LBL_LATEST_REVISION_ID' => 'ID poslední revize',
    'LBL_SELECTED_REVISION_FILENAME' => 'Název souboru vybrané revize',
    'LBL_FILE_URL' => 'Url souboru',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategorie:',
    'LBL_SF_SUBCATEGORY' => 'Podkategorie:',

    'DEF_CREATE_LOG' => 'Vytvořen dokument',

    //error messages
    'ERR_DOC_NAME' => 'Název dokumentu',
    'ERR_DOC_ACTIVE_DATE' => 'Datum zveřejnění',
    'ERR_FILENAME' => 'Název souboru',
    'ERR_DOC_VERSION' => 'Verze dokumentu',
    'ERR_DELETE_CONFIRM' => 'Chcete smazat tuto revizi dokumentu?',
    'ERR_DELETE_LATEST_VERSION' => 'Nemáte oprávnění smazat poslední revizi dokumentu.',
    'LNK_NEW_MAIL_MERGE' => 'Spojování mailů',
    'ERR_MISSING_FILE' => 'Tento dokument neobsahuje soubor, pravděpodobně z důvodu chyby při nahrávání.  Opakujte odeslání souboru nebo se obraťte na správce systému.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Název',
    'LBL_LIST_IS_TEMPLATE' => 'Šablona?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Typ dokumentu',
    'LBL_LAST_REV_CREATE_DATE' => 'Datum vytvoření poslední revize',
    'LBL_CONTRACTS' => 'Smlouvy',
    'LBL_CREATED_USER' => 'Vytvořený uživatel',
    'LBL_DOCUMENT_INFORMATION' => 'Informace o klientovi', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Zdrojové ID dokumentu',
    'LBL_DOC_TYPE' => 'Zdroj',
    'LBL_DOC_TYPE_POPUP' => 'Vyberte zdroj, ke kterému bude tento dokument uložený <br>a ze kterého bude k dispozici.',
    'LBL_DOC_URL' => 'Adresa URL zdroje dokumentu',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Název souboru',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Prvních 20 naposledy změněných souborů se zobrazuje v sestupném pořadí v seznamu níže. Použijte vyhledávání k nalezení jiných souborů.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Název souboru',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Uživatel se pokusil o přístup k neplatnému externímu API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Kontrola přihlášení se nezdařilo pro externí rozhraní API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmy',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Příležitosti',
    'LBL_CASES_SUBPANEL_TITLE' => 'Případy',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Chyby',

    'LBL_AOS_CONTRACTS' => 'Smlouvy',
);
