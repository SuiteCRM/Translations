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
    'LNK_NEW_CALL' => 'Новий дзвінок',
    'LNK_NEW_MEETING' => 'Призначити зустріч',
    'LNK_NEW_TASK' => 'Нове завдання',
    'LNK_NEW_NOTE' => 'Створити примітку або вкладення',
    'LNK_NEW_EMAIL' => 'Відправити листа в архів',
    'LNK_CALL_LIST' => 'Дзвінки',
    'LNK_MEETING_LIST' => 'Зустрічі',
    'LNK_TASK_LIST' => 'Завдання',
    'LNK_NOTE_LIST' => 'Нотатки',
    'LBL_ADD_FIELD' => 'Додати поле:',
    'LBL_SEARCH_FORM_TITLE' => 'Знайти модуль',
    'COLUMN_TITLE_NAME' => 'Ім&#039;я поля',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Відображати ярлики',
    'COLUMN_TITLE_LABEL_VALUE' => 'Значення ярлика',
    'COLUMN_TITLE_LABEL' => 'Системний ярлик',
    'COLUMN_TITLE_DATA_TYPE' => 'Тип даних',
    'COLUMN_TITLE_MAX_SIZE' => 'Максимальний розмір',
    'COLUMN_TITLE_HELP_TEXT' => 'Допомога',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Текст коментаря',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Обов&#039;язкове поле',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Значення за замовчуванням',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'Висота iFrame',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML-повідомлення',
    'COLUMN_TITLE_URL' => 'URL за замовчуванням',
    'COLUMN_TITLE_AUDIT' => 'Аудит',
    'COLUMN_TITLE_MIN_VALUE' => 'Мін. значення',
    'COLUMN_TITLE_MAX_VALUE' => 'Максим. значення',
    'COLUMN_TITLE_LABEL_ROWS' => 'Рядки',
    'COLUMN_TITLE_LABEL_COLS' => 'Стовпці',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# об&#039;єктів показано',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Наступне значення за автом. зростанням',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Відключити формат',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Включити діапазон пошуку',
    'LBL_DROP_DOWN_LIST' => 'Випадаючий список',
    'LBL_RADIO_FIELDS' => 'Радіо поля',
    'LBL_MULTI_SELECT_LIST' => 'Список для множинного вибору',
    'COLUMN_TITLE_PRECISION' => 'Точність',
    'LBL_MODULE' => 'Модуль',
    'COLUMN_TITLE_MASS_UPDATE' => 'Групове оновлення',
    'COLUMN_TITLE_IMPORTABLE' => 'Імпортовані',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Бере участь в об&#039;єднанні дублікатів',
    'LBL_LABEL' => 'Ярлик',
    'LBL_DATA_TYPE' => 'Тип даних',
    'LBL_DEFAULT_VALUE' => 'Значення за замовчуванням',
    'ERR_RESERVED_FIELD_NAME' => "Зарезервоване ключове слово",
    'ERR_SELECT_FIELD_TYPE' => 'Будь ласка, виберіть тип поля',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Ім&#039;я поля вже існує',
    'LBL_BTN_ADD' => 'Додати',
    'LBL_BTN_EDIT' => 'Змінити',
    'LBL_GENERATE_URL' => 'Згенерувати URL',
    'LBL_CALCULATED' => 'Обчислюване значення',
    'LBL_LINK_TARGET' => 'Відкрити посилання в',
    'LBL_IMAGE_WIDTH' => 'Ширина',
    'LBL_IMAGE_HEIGHT' => 'Висота',
    'LBL_IMAGE_BORDER' => 'Межа',
    'LBL_HELP' => 'Довідка' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Редагувати контент',
    'COLUMN_TITLE_PARENT_ENUM' => 'Випадаючий батьківський список',
    'LBL_INSERT_FIELD' => 'Вставити поле',
);
