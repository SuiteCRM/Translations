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
    'LBL_EDIT_LAYOUT' => 'Редактиране на подредби',
    'LBL_EDIT_FIELDS' => 'Редактиране на потребителски полета',
    'LBL_SELECT_FILE' => 'Избиране на файл',
    'LBL_MODULE_TITLE' => 'Студио',
    'LBL_TOOLBOX' => 'Инструменти',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_VIEW_SUITE_FIELDS' => 'View SuiteCRM Fields',
    'LBL_FAILED_TO_SAVE' => 'Запазването е неуспешно',
    'LBL_CONFIRM_UNSAVE' => 'Промените няма да бъдат съхранени. Сигурни ли сте, че искате да продължите?',
    'LBL_PUBLISHING' => 'В процес на публикуване ...',
    'LBL_PUBLISHED' => 'Стартирал',
    'LBL_FAILED_PUBLISHED' => 'Публикуването е неуспешно',
    'LBL_DROP_HERE' => '[Поставете тук]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Име',
    'LBL_LABEL' => 'Етикет',
    'LBL_MASS_UPDATE' => 'Масова актуализация',
    'LBL_DEFAULT_VALUE' => 'Стойност по подразбиране',
    'LBL_REQUIRED' => 'Задължително',
    'LBL_DATA_TYPE' => 'Тип',


    'LBL_HISTORY' => 'История',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Добре дошли в Студио!</h2><br> Какви ще бъдат действията Ви?<br><b> Моля, изберете от опциите долу.</b>',
    'LBL_SW_EDIT_MODULE' => 'Редактиране на модул',
    'LBL_SW_EDIT_DROPDOWNS' => 'Редактиране на падащи менюта',
    'LBL_SW_EDIT_TABS' => 'Конфигурация на табулатори',
    'LBL_SW_RENAME_TABS' => 'Преименуване на табулатори',
    'LBL_SW_EDIT_GROUPTABS' => 'Подредба на групови табулатори',
    'LBL_SW_EDIT_PORTAL' => 'Edit Portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Repair Custom Fields',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migrate Custom Fields',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Rebuilds javascript versions of language files',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Removing javascript versions of language files, will rebuild when needed.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Изтрий',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Създаване на падащо меню',
    'LBL_DROPDOWN_NAME' => 'Име:',
    'LBL_DROPDOWN_LANGUAGE' => 'Език:',
    'LBL_TABGROUP_LANGUAGE' => 'Език:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Етикет',
    'LBL_DD_DATABASEVALUE' => 'Име на полето',
    'LBL_DD_ALL' => 'Всички записи',

//BUTTONS
    'LBL_BTN_SAVE' => 'Съхрани',
    'LBL_BTN_CANCEL' => 'Отмени',
    'LBL_BTN_SAVEPUBLISH' => 'Съхрани и публикувай',
    'LBL_BTN_HISTORY' => 'История',
    'LBL_BTN_ADDROWS' => 'Добавяне на редове',
    'LBL_BTN_UNDO' => 'Върни',
    'LBL_BTN_REDO' => 'Redo',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Добавяне на потребителско поле',
    'LBL_BTN_TABINDEX' => 'Редактиране на подредба на табулатори',

//TABS
    'LBL_MODULES' => 'Модули',
    'LBL_MODULE_NAME' => 'Административен',
    'LBL_CONFIGURE_GROUP_TABS' => 'Конфигурация на групови табулатори',
    'LBL_GROUP_TAB_WELCOME' => 'Подредбата на груповите табулатори от тази страница ще бъде приложена в случай, че потребител избере да ползва "Групирани модули" вместо опцията по подразбиране "Модули" за параметъра "Навигация" в Персонални настройки>Подредба на екрана.',
    'LBL_RENAME_TAB_WELCOME' => 'За преименуване, натиснете върху заглавието на табулатора от списъка долу.',
    'LBL_DELETE_MODULE' => '&nbsp;Премахни&nbsp;модул',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'За да настройте етикетите на табулаторите за други налични езици, изберете език, редактирйте етикетите и кликнете върху Съхрани и публикувай да направи промени за този език.',
    'LBL_ADD_GROUP' => 'Добавяне на група',
    'LBL_NEW_GROUP' => 'Нов групов табулатор',
    'LBL_RENAME_TABS' => 'Преименуване на табулатори',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Грешка: Невалидна стойност на key: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Съхрани' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Върни' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Redo' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Изтрий' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Добавяне на поле' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximize' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimize' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Публикуване' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Добавяне на редове' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Добавяне на поле' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Редактиране' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Select the language to edit.',
    'LBL_SINGULAR' => 'Singular Label',
    'LBL_PLURAL' => 'Plural Label',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
