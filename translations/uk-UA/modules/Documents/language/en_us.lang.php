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
    'LBL_MODULE_NAME' => 'Документи',
    'LBL_MODULE_TITLE' => 'Документи: Головна',
    'LNK_NEW_DOCUMENT' => 'Створити документ',
    'LNK_DOCUMENT_LIST' => 'Документи',
    'LBL_DOC_REV_HEADER' => 'Ревізії документів',
    'LBL_SEARCH_FORM_TITLE' => 'Знайти документ',
    //vardef labels
    'LBL_NAME' => 'Назва документа',
    'LBL_DESCRIPTION' => 'Опис',
    'LBL_CATEGORY' => 'Категорія',
    'LBL_SUBCATEGORY' => 'Підкатегорія',
    'LBL_STATUS' => 'Статус',
    'LBL_CREATED_BY' => 'Створено',
    'LBL_DATE_ENTERED' => 'Дата створення',
    'LBL_DATE_MODIFIED' => 'Дата зміни',
    'LBL_DELETED' => 'Видалено',
    'LBL_MODIFIED' => 'Змінено (ID)',
    'LBL_MODIFIED_USER' => 'Автор змін',
    'LBL_CREATED' => 'Створено',
    'LBL_REVISIONS' => 'Версії',
    'LBL_RELATED_DOCUMENT_ID' => 'ID пов&#039;язаного документа',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID версії пов&#039;язаного документа',
    'LBL_IS_TEMPLATE' => 'Є шаблоном',
    'LBL_TEMPLATE_TYPE' => 'Тип документа',
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальна особа:',
    'LBL_REVISION_NAME' => 'Номер ревізії',
    'LBL_MIME' => 'Тип MIME',
    'LBL_REVISION' => 'Ревізія',
    'LBL_DOCUMENT' => 'Відповідний документ',
    'LBL_LATEST_REVISION' => 'Остання ревізія',
    'LBL_CHANGE_LOG' => 'Журнал змін',
    'LBL_ACTIVE_DATE' => 'Дата публікації',
    'LBL_EXPIRATION_DATE' => 'Термін дії',
    'LBL_FILE_EXTENSION' => 'Розширення файлу',
    'LBL_LAST_REV_MIME_TYPE' => 'Остання версія типу MIME',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Невизначений',
    'LBL_HOMEPAGE_TITLE' => 'Мої документи',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Новий документ',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Назва документу:',
    'LBL_FILENAME' => 'Ім\'я файлу:',
    'LBL_LIST_FILENAME' => 'Файл:',
    'LBL_DOC_VERSION' => 'Ревізія:',
    'LBL_FILE_UPLOAD' => 'Файл:',

    'LBL_CATEGORY_VALUE' => 'Категорія:',
    'LBL_LIST_CATEGORY' => 'Категорія',
    'LBL_SUBCATEGORY_VALUE' => 'Підкатегорія:',
    'LBL_DOC_STATUS' => 'Статус:',
    'LBL_LAST_REV_CREATOR' => 'Версія створена:',
    'LBL_LASTEST_REVISION_NAME' => 'Номер останньої версії:',
    'LBL_SELECTED_REVISION_NAME' => 'Назва вибраної версії:',
    'LBL_CONTRACT_STATUS' => 'Статус угоди:',
    'LBL_CONTRACT_NAME' => 'Назва угоди:',
    'LBL_DET_RELATED_DOCUMENT' => 'Пов&#039;язаний документ:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Версія пов&#039;язаного документа:",
    'LBL_DET_IS_TEMPLATE' => 'Шаблон? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Тип документа:',
    'LBL_DOC_DESCRIPTION' => 'Опис:',
    'LBL_DOC_ACTIVE_DATE' => 'Дата публікації:',
    'LBL_DOC_EXP_DATE' => 'Термін дії:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Список документів',
    'LBL_LIST_DOCUMENT' => 'Документ',
    'LBL_LIST_SUBCATEGORY' => 'Підкатегорія',
    'LBL_LIST_REVISION' => 'Ревізія',
    'LBL_LIST_LAST_REV_CREATOR' => 'Опубліковано',
    'LBL_LIST_LAST_REV_DATE' => 'Дата перегляду',
    'LBL_LIST_VIEW_DOCUMENT' => 'Перегляд',
    'LBL_LIST_ACTIVE_DATE' => 'Дата публікації',
    'LBL_LIST_EXP_DATE' => 'Термін дії',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LINKED_ID' => 'Id пов&#039;язаного документа',
    'LBL_SELECTED_REVISION_ID' => 'ID вибраної версії',
    'LBL_LATEST_REVISION_ID' => 'ID останньої версії',
    'LBL_SELECTED_REVISION_FILENAME' => 'Ім&#039;я файлу останньої версії',
    'LBL_FILE_URL' => 'Адреса файлу',

    //document search form.
    'LBL_SF_CATEGORY' => 'Категорія:',
    'LBL_SF_SUBCATEGORY' => 'Підкатегорія:',

    'DEF_CREATE_LOG' => 'Документ створено',

    //error messages
    'ERR_DOC_NAME' => 'Назва документа',
    'ERR_DOC_ACTIVE_DATE' => 'Дата публікації',
    'ERR_FILENAME' => 'Ім\'я файлу',
    'ERR_DOC_VERSION' => 'Ревізія документа',
    'ERR_DELETE_CONFIRM' => 'Ви хочете видалити цю ревізію документа?',
    'ERR_DELETE_LATEST_VERSION' => 'Ви не маєте права видаляти останню ревізію документа.',
    'LNK_NEW_MAIL_MERGE' => 'Злиття пошти',
    'ERR_MISSING_FILE' => 'У цьому документі відсутній файл, швидше за все, через помилку під час завантаження. Повторіть спробу завантаження файлу або зверніться до свого адміністратора.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Назва',
    'LBL_LIST_IS_TEMPLATE' => 'Шаблон?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Тип документа',
    'LBL_LAST_REV_CREATE_DATE' => 'Дата створення останньої версії',
    'LBL_CONTRACTS' => 'Угоди',
    'LBL_CREATED_USER' => 'Створено',
    'LBL_DOCUMENT_INFORMATION' => 'ОГЛЯД', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID джерела документа',
    'LBL_DOC_TYPE' => 'Джерело',
    'LBL_DOC_TYPE_POPUP' => 'Виберіть джерело, для завантаження документа, звідки він потім буде доступний.',
    'LBL_DOC_URL' => 'URL джерела документа',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Ім\'я файлу',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Нижче в спадаючому порядку показані 20 файлів, які частіше за все змінювалися. Щоб знайти інші файли, використовуйте пошук.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Ім\'я файлу',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Користувач намагався отримати доступ до недійсного зовнішнього API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Неправильний логін/пароль для зовнішнього API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенти',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Угоди',
    'LBL_CASES_SUBPANEL_TITLE' => 'Звернення',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Відстеження помилок',

    'LBL_AOS_CONTRACTS' => 'Угоди',
);
