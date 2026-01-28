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
    'LBL_EDIT_LAYOUT' => 'Правка розташування',
    'LBL_EDIT_FIELDS' => 'Правка індивідуальних полів',
    'LBL_SELECT_FILE' => 'Вибір файлу',
    'LBL_MODULE_TITLE' => 'Студія',
    'LBL_TOOLBOX' => 'Студія',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_VIEW_SUITE_FIELDS' => 'View SuiteCRM Fields',
    'LBL_FAILED_TO_SAVE' => 'Збереження неможливе',
    'LBL_CONFIRM_UNSAVE' => 'Зміни не будуть збережені. Ви дійсно хочете продовжити?',
    'LBL_PUBLISHING' => 'Публікація...',
    'LBL_PUBLISHED' => 'Опубліковано',
    'LBL_FAILED_PUBLISHED' => 'Публікація неможлива',
    'LBL_DROP_HERE' => '[Перемістити сюди]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Назва',
    'LBL_LABEL' => 'Ярлик',
    'LBL_MASS_UPDATE' => 'Групове оновлення',
    'LBL_DEFAULT_VALUE' => 'Значення за замовчуванням',
    'LBL_REQUIRED' => 'Необхідне',
    'LBL_DATA_TYPE' => 'Тип',


    'LBL_HISTORY' => 'Історія',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Ласкаво просимо в студію!</h2><br> Що б ви хотіли зробити сьогодні?<br><b> Будь ласка, виберіть потрібну опцію.</b>',
    'LBL_SW_EDIT_MODULE' => 'Редагування модуля',
    'LBL_SW_EDIT_DROPDOWNS' => 'Редагування випадаючих списків',
    'LBL_SW_EDIT_TABS' => 'Налаштування закладок модулів',
    'LBL_SW_RENAME_TABS' => 'Перейменування закладок',
    'LBL_SW_EDIT_GROUPTABS' => 'Налаштування групових закладок',
    'LBL_SW_EDIT_PORTAL' => 'Редагування порталу',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Відновлення індивідуальних полів',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Переміщення користувацьких полів',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Оновлення javascript-версій мовних файлів',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Видалення javascript-версій мовних файлів; файли будуть відновлені при першій необхідності.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Видалити',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Створити випадаючий список',
    'LBL_DROPDOWN_NAME' => 'Назва випадаючого списку:',
    'LBL_DROPDOWN_LANGUAGE' => 'Мова вмісту випадаючого списку:',
    'LBL_TABGROUP_LANGUAGE' => 'Переклад:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Відображуване значення',
    'LBL_DD_DATABASEVALUE' => 'Значення в базі',
    'LBL_DD_ALL' => 'Всі відповідні',

//BUTTONS
    'LBL_BTN_SAVE' => 'Зберегти',
    'LBL_BTN_CANCEL' => 'Скасування',
    'LBL_BTN_SAVEPUBLISH' => 'Зберегти і встановити',
    'LBL_BTN_HISTORY' => 'Історія',
    'LBL_BTN_ADDROWS' => 'Додати рядки',
    'LBL_BTN_UNDO' => 'Скасування',
    'LBL_BTN_REDO' => 'Повторне виконання',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Додати індивідуальне поле',
    'LBL_BTN_TABINDEX' => 'Редагувати порядок переміщення по елементам макету',

//TABS
    'LBL_MODULES' => 'Модулі',
    'LBL_MODULE_NAME' => 'Адміністрування',
    'LBL_CONFIGURE_GROUP_TABS' => 'Налаштування фільтрів меню модулів',
    'LBL_GROUP_TAB_WELCOME' => 'Групи будуть відображатися на панелі закладок, якщо користувач вибере перегляд Згрупованих модулів замість звичайних в якості принципу навігації. Ви можете переміщати закладки модулів між групами для налаштування їх розташування. Порожні групи не будуть відображатися на панелі закладок.',
    'LBL_RENAME_TAB_WELCOME' => 'Натисніть на Відображуваному значенні будь-якої закладки в таблиці для її перейменування.',
    'LBL_DELETE_MODULE' => 'Remove&nbsp;module<br />from&nbsp;filter',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Оберіть одну з наявних мов, відредагуйте мітки груп і натисніть Зберегти і встановити, аби змінити мітки у обраній мові.',
    'LBL_ADD_GROUP' => 'Додати групу',
    'LBL_NEW_GROUP' => 'Нова група',
    'LBL_RENAME_TABS' => 'Перейменування вкладок',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Помилка: Невірне значення префікса: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Зберегти' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Скасування' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Повторне виконання' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Видалити' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Додати поле' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximize' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimize' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Опублікувати' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Додати рядки' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Додати поле' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Змінити' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Select the language to edit.',
    'LBL_SINGULAR' => 'Singular Label',
    'LBL_PLURAL' => 'Plural Label',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
