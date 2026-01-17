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
    'LBL_MODULE_TITLE' => 'Документи',
    'LNK_NEW_DOCUMENT' => 'Създаване на документ',
    'LNK_DOCUMENT_LIST' => 'Списък с документи',
    'LBL_DOC_REV_HEADER' => 'Ревизии на документа',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Документи"',
    //vardef labels
    'LBL_NAME' => 'Име на документа',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_CATEGORY' => 'Категория',
    'LBL_SUBCATEGORY' => 'Подкатегория',
    'LBL_STATUS' => 'Статус',
    'LBL_CREATED_BY' => 'Създадено от',
    'LBL_DATE_ENTERED' => 'Създадено на',
    'LBL_DATE_MODIFIED' => 'Модифицирано на',
    'LBL_DELETED' => 'Изтрити',
    'LBL_MODIFIED' => 'Модифициран от',
    'LBL_MODIFIED_USER' => 'Модифицирано от',
    'LBL_CREATED' => 'Създадено от',
    'LBL_REVISIONS' => 'Ревизии',
    'LBL_RELATED_DOCUMENT_ID' => 'Още документи по темата',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Ревизии на документа по темата',
    'LBL_IS_TEMPLATE' => 'е шаблон',
    'LBL_TEMPLATE_TYPE' => 'Тип на документа',
    'LBL_ASSIGNED_TO_NAME' => 'Отговорник:',
    'LBL_REVISION_NAME' => 'Номер на ревизията',
    'LBL_MIME' => 'Mime тип',
    'LBL_REVISION' => 'Ревизия',
    'LBL_DOCUMENT' => 'Още документи по темата',
    'LBL_LATEST_REVISION' => 'Последна ревизия',
    'LBL_CHANGE_LOG' => 'Дневник на промените за записа',
    'LBL_ACTIVE_DATE' => 'Публикувано на',
    'LBL_EXPIRATION_DATE' => 'Валидно до',
    'LBL_FILE_EXTENSION' => 'Разширение на файла',
    'LBL_LAST_REV_MIME_TYPE' => 'Last revision MIME type',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Некласифициран',
    'LBL_HOMEPAGE_TITLE' => 'Моите документи',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Нов документ',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Име на документа:',
    'LBL_FILENAME' => 'Име на файла:',
    'LBL_LIST_FILENAME' => 'Име на файла',
    'LBL_DOC_VERSION' => 'Версия:',
    'LBL_FILE_UPLOAD' => 'Име на файла',

    'LBL_CATEGORY_VALUE' => 'Категория:',
    'LBL_LIST_CATEGORY' => 'Категория',
    'LBL_SUBCATEGORY_VALUE' => 'Подкатегория:',
    'LBL_DOC_STATUS' => 'Статус:',
    'LBL_LAST_REV_CREATOR' => 'Създадена от:',
    'LBL_LASTEST_REVISION_NAME' => 'Latest revision name:',
    'LBL_SELECTED_REVISION_NAME' => 'Selected revision name:',
    'LBL_CONTRACT_STATUS' => 'Contract status:',
    'LBL_CONTRACT_NAME' => 'Име на договора:',
    'LBL_DET_RELATED_DOCUMENT' => 'Свързан документ:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Версия на свързания документ:",
    'LBL_DET_IS_TEMPLATE' => 'Шаблон? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Тип на документа:',
    'LBL_DOC_DESCRIPTION' => 'Описание:',
    'LBL_DOC_ACTIVE_DATE' => 'Публикуван на:',
    'LBL_DOC_EXP_DATE' => 'Валиден до:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Списък с документи',
    'LBL_LIST_DOCUMENT' => 'Документ',
    'LBL_LIST_SUBCATEGORY' => 'Подкатегория',
    'LBL_LIST_REVISION' => 'Ревизия',
    'LBL_LIST_LAST_REV_CREATOR' => 'Публикувана от',
    'LBL_LIST_LAST_REV_DATE' => 'Дата на ревизията',
    'LBL_LIST_VIEW_DOCUMENT' => 'Разгледай',
    'LBL_LIST_ACTIVE_DATE' => 'Публикувано на',
    'LBL_LIST_EXP_DATE' => 'Валидно до',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LINKED_ID' => 'Linked id',
    'LBL_SELECTED_REVISION_ID' => 'Selected revision id',
    'LBL_LATEST_REVISION_ID' => 'Latest revision id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Selected revision filename',
    'LBL_FILE_URL' => 'File url',

    //document search form.
    'LBL_SF_CATEGORY' => 'Категория:',
    'LBL_SF_SUBCATEGORY' => 'Подкатегория:',

    'DEF_CREATE_LOG' => 'Създаден документ',

    //error messages
    'ERR_DOC_NAME' => 'Име на документа',
    'ERR_DOC_ACTIVE_DATE' => 'Публикувано на',
    'ERR_FILENAME' => 'Име на файла',
    'ERR_DOC_VERSION' => 'Версия на документа',
    'ERR_DELETE_CONFIRM' => 'Искате ли да изтриете тази ревизия на документа?',
    'ERR_DELETE_LATEST_VERSION' => 'Нямате съответните права за изтриване на последната ревизия на документа.',
    'LNK_NEW_MAIL_MERGE' => 'Сливане на писма',
    'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload. Please retry uploading the file or contact your administrator.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Име',
    'LBL_LIST_IS_TEMPLATE' => 'Шаблон?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Тип на документа',
    'LBL_LAST_REV_CREATE_DATE' => 'Дата на последната ревизия',
    'LBL_CONTRACTS' => 'Договори',
    'LBL_CREATED_USER' => 'Създаден потребител',
    'LBL_DOCUMENT_INFORMATION' => 'Информация', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Идентификатор на документа',
    'LBL_DOC_TYPE' => 'Тип на документа',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br> and from which it will be available.',
    'LBL_DOC_URL' => 'Линк към документа',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Име на файла',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Списъкът съдържа последните 20 модифицирани файла. Използвайте Търсене за да намерите други файлове.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Име на файла',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Организации',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Възможности',
    'LBL_CASES_SUBPANEL_TITLE' => 'Казуси',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Проблеми',

    'LBL_AOS_CONTRACTS' => 'Договори',
);
