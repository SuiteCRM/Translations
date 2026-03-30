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
    'LBL_MODULE_NAME' => 'Documents',
    'LBL_MODULE_TITLE' => 'Documents: Home',
    'LNK_NEW_DOCUMENT' => 'Utwórz Dokument',
    'LNK_DOCUMENT_LIST' => 'Lista dokumentów',
    'LBL_DOC_REV_HEADER' => 'Liczba wersji dokumentu',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie dokumentów',
    //vardef labels
    'LBL_NAME' => 'Nazwa dokumentu',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_CATEGORY' => 'Kategoria',
    'LBL_SUBCATEGORY' => 'Sub Category',
    'LBL_STATUS' => 'Status',
    'LBL_CREATED_BY' => 'Utworzone przez',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data Modyfikacji',
    'LBL_DELETED' => 'Usunięte',
    'LBL_MODIFIED' => 'Zmodyfikowany przez ID',
    'LBL_MODIFIED_USER' => 'Zmodyfikowane przez',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_REVISIONS' => 'Revisions',
    'LBL_RELATED_DOCUMENT_ID' => 'ID dokumentów połączonych',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID wersji dokumentu powiązanego',
    'LBL_IS_TEMPLATE' => 'Is a Template',
    'LBL_TEMPLATE_TYPE' => 'Document Type',
    'LBL_ASSIGNED_TO_NAME' => 'Przydzielony do:',
    'LBL_REVISION_NAME' => 'Numer rewizji',
    'LBL_MIME' => 'Mime Type',
    'LBL_REVISION' => 'Rewizja',
    'LBL_DOCUMENT' => 'Dokument powiązany',
    'LBL_LATEST_REVISION' => 'Ostatnia rewizja',
    'LBL_CHANGE_LOG' => 'Historia zmian',
    'LBL_ACTIVE_DATE' => 'Publish Date',
    'LBL_EXPIRATION_DATE' => 'Expiration Date',
    'LBL_FILE_EXTENSION' => 'File Extension',
    'LBL_LAST_REV_MIME_TYPE' => 'Typ MIME ostatniej wersji',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Unspecified',
    'LBL_HOMEPAGE_TITLE' => 'Moje dokumenty',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'New Document',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Nazwa dokumentu:',
    'LBL_FILENAME' => 'Nazwa Pliku:',
    'LBL_LIST_FILENAME' => 'File:',
    'LBL_DOC_VERSION' => 'Korekta:',
    'LBL_FILE_UPLOAD' => 'File:',

    'LBL_CATEGORY_VALUE' => 'Category:',
    'LBL_LIST_CATEGORY' => 'Kategoria',
    'LBL_SUBCATEGORY_VALUE' => 'Sub Category:',
    'LBL_DOC_STATUS' => 'Status:',
    'LBL_LAST_REV_CREATOR' => 'Wersja utworzona przez:',
    'LBL_LASTEST_REVISION_NAME' => 'Nazwa ostatniej wersji:',
    'LBL_SELECTED_REVISION_NAME' => 'Nazwa wybranej wersji:',
    'LBL_CONTRACT_STATUS' => 'Status umowy:',
    'LBL_CONTRACT_NAME' => 'Nazwa umowy:',
    'LBL_DET_RELATED_DOCUMENT' => 'Dokument powiązany:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Wersja dokumentu powiązanego:",
    'LBL_DET_IS_TEMPLATE' => 'Szablon? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Document Type:',
    'LBL_DOC_DESCRIPTION' => 'Opis:',
    'LBL_DOC_ACTIVE_DATE' => 'Publish Date:',
    'LBL_DOC_EXP_DATE' => 'Expiration Date:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Document List',
    'LBL_LIST_DOCUMENT' => 'Dokument',
    'LBL_LIST_SUBCATEGORY' => 'Sub Category',
    'LBL_LIST_REVISION' => 'Wersja',
    'LBL_LIST_LAST_REV_CREATOR' => 'Published By',
    'LBL_LIST_LAST_REV_DATE' => 'Data wprowadzenia wersji',
    'LBL_LIST_VIEW_DOCUMENT' => 'Podgląd',
    'LBL_LIST_ACTIVE_DATE' => 'Publish Date',
    'LBL_LIST_EXP_DATE' => 'Expiration Date',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LINKED_ID' => 'ID połączone',
    'LBL_SELECTED_REVISION_ID' => 'ID wybranej wersji',
    'LBL_LATEST_REVISION_ID' => 'ID ostatniej wersji',
    'LBL_SELECTED_REVISION_FILENAME' => 'Nazwa pliku wybranej wersji',
    'LBL_FILE_URL' => 'URL pliku',

    //document search form.
    'LBL_SF_CATEGORY' => 'Category:',
    'LBL_SF_SUBCATEGORY' => 'Sub Category:',

    'DEF_CREATE_LOG' => 'Document Created',

    //error messages
    'ERR_DOC_NAME' => 'Nazwa dokumentu',
    'ERR_DOC_ACTIVE_DATE' => 'Publish Date',
    'ERR_FILENAME' => 'Nazwa Pliku',
    'ERR_DOC_VERSION' => 'Document Version',
    'ERR_DELETE_CONFIRM' => 'Czy chcesz usunąć tę wersję dokumentu?',
    'ERR_DELETE_LATEST_VERSION' => 'Nie masz uprawnień do usunięcia ostatniej wersji dokumentu.',
    'LNK_NEW_MAIL_MERGE' => 'Korespondencja Seryjna',
    'ERR_MISSING_FILE' => 'Ten dokument nie posiada pliku, najprawdopodobniej z powodu wystąpienia błędu podczas wysyłania na serwer.  Proszę ponowić próbę przesyłania pliku lub skontaktować się z administratorem.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nazwa dokument',
    'LBL_LIST_IS_TEMPLATE' => 'Szablon?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Document Type',
    'LBL_LAST_REV_CREATE_DATE' => 'Data utworzenia ostatniej wersji',
    'LBL_CONTRACTS' => 'Kontrakty',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_DOCUMENT_INFORMATION' => 'PRZEGLĄD', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Document Source ID',
    'LBL_DOC_TYPE' => 'Źródło',
    'LBL_DOC_TYPE_POPUP' => 'Wybierz źródło, do którego ten dokument zostanie załadowany i, z którego będzie dostępny.',
    'LBL_DOC_URL' => 'Document Source URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nazwa Pliku',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Lista 20 pierwszych ostatnio modyfikowanych plików jest wyświetlana w kolejności malejącej w liście poniżej. Używaj wyszukiwarki, aby znaleźć inne pliki.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nazwa Pliku',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Użytkownik próbował uzyskać dostęp do nieprawidłowego zewnętrznego interfejsu API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Weryfikacja logowania do zewnętrznego interfejsu API nie powiodła się ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontrahenci',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Szanse Sprzedaży',
    'LBL_CASES_SUBPANEL_TITLE' => 'Sprawy',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Śledzenie błędów',

    'LBL_AOS_CONTRACTS' => 'Kontrakty',
);
