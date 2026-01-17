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
    'LBL_ASSIGNED_TO_ID' => 'Код користувача відповідальної особи',
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальна особа',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата створення',
    'LBL_DATE_MODIFIED' => 'Дата зміни',
    'LBL_MODIFIED' => 'Змінено',
    'LBL_MODIFIED_NAME' => 'Змінено користувачем',
    'LBL_CREATED' => 'Ким створено',
    'LBL_DESCRIPTION' => 'Опис',
    'LBL_DELETED' => 'Видалено',
    'LBL_NAME' => 'Назва',
    'LBL_CREATED_USER' => 'Створено користувачем',
    'LBL_MODIFIED_USER' => 'Змінено користувачем',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_EDIT_BUTTON' => 'Змінити',
    'LBL_REMOVE' => 'Видалити',
    'LBL_LIST_FORM_TITLE' => 'Список Звітів',
    'LBL_MODULE_NAME' => 'Звіти',
    'LBL_MODULE_TITLE' => 'Звіти',
    'LBL_HOMEPAGE_TITLE' => 'Мої звіти',
    'LNK_NEW_RECORD' => 'Створити звіт',
    'LNK_LIST' => 'Переглянути звіти',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук звітів',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_NEW_FORM_TITLE' => 'Нові звіти',
    'LBL_REPORT_MODULE' => 'Модуль звітів',
    'LBL_GRAPHS_PER_ROW' => 'Кількість діаграм у рядку',
    'LBL_FIELD_LINES' => 'Показувати поля',
    'LBL_ADD_FIELD' => 'Додати поле',
    'LBL_CONDITION_LINES' => 'Умови',
    'LBL_ADD_CONDITION' => 'Додати умову',
    'LBL_EXPORT' => 'Експортувати',
    'LBL_DOWNLOAD_PDF' => 'Завантажити PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Додати до цільового списку',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Дерево модулів',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Поля',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Умови',
    'LBL_TOTAL' => 'Всього',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Графіки',
    'LBL_ADD_CHART' => 'Додати діаграму',
    'LBL_ADD_PARENTHESIS' => 'Викинути дужки',
    'LBL_CHART_TITLE' => 'Посада',
    'LBL_CHART_TYPE' => 'Тип',
    'LBL_CHART_X_FIELD' => 'Вісь X',
    'LBL_CHART_Y_FIELD' => 'Вісь Y',
    'LBL_AOR_REPORTS_DASHLET' => 'Звіти',
    'LBL_DASHLET_TITLE' => 'Посада',
    'LBL_DASHLET_REPORT' => 'Звіт',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Будь ласка, виберіть звіт',
    'LBL_DASHLET_SAVE' => 'Зберегти',
    'LBL_DASHLET_CHARTS' => 'Графіки',
    'LBL_DASHLET_ONLY_CHARTS' => 'Показати лише діаграми',
    'LBL_UPDATE_PARAMETERS' => 'Оновити',
    'LBL_PARAMETERS' => 'Параметри',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'Перетягніть елементи в поле або область редагування умови',
    'LBL_MAIN_GROUPS' => 'Основна Група:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Діаграма без імені',
    'LBL_REPORT' => 'Звіт',
);
