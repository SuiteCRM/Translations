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

    'LBL_ADMINISTRATION_MAIN' => 'Параметри конектора',
    'LBL_AVAILABLE' => 'Доступні',
    'LBL_BACK' => '< Назад',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Деякі необхідні поля не заповнені. Продовжити збереження?',
    'LBL_CONNECTOR_FIELDS' => 'Поля конектора',
    'LBL_DATA' => 'Дані',
    'LBL_DEFAULT' => 'За замовчуванням',
    'LBL_DISABLED' => 'Відключений',
    'LBL_ENABLED' => 'Включений',
    'LBL_EXTERNAL' => 'Дозволити користувачам створювати записи зовнішнього рахунку для цього конектора.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' Для того, щоб використовувати цей коннектор, слід також задати параметри на сторінці налаштувань параметрів конектора.',
    'LBL_MERGE' => 'Об&#039;єднати',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Увімкнути коннектори',
    'LBL_MODIFY_DISPLAY_DESC' => 'Виберіть, які модулі увімкнені для кожного конектора.',
    'LBL_MODULE_FIELDS' => 'Поля модуля',
    'LBL_MODIFY_MAPPING_TITLE' => 'Відображення полів конектора',
    'LBL_MODIFY_MAPPING_DESC' => 'Створіть відображення полів конектора на поля модуля, для того, щоб визначити, які дані зможуть потрапити в записи, створені цим модулем.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Властивості Конектора',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Налаштування властивостей для кожного конектора, включаючи URL-адреси та ключі API.',
    'LBL_MODIFY_SEARCH_TITLE' => 'Керування пошуком конектора',
    'LBL_MODIFY_SEARCH' => 'Знайти',
    'LBL_MODIFY_SEARCH_DESC' => 'Виберіть поля конектора, які будуть використані для пошуку даних кожного модуля.',
    'LBL_MODULE_NAME' => 'Підключення',
    'LBL_NO_PROPERTIES' => 'Немає властивостей для цього конектора, які можна було б налаштувати.',
    'LBL_SAVE' => 'Зберегти',
    'LBL_SUMMARY' => 'Резюме',
    'LBL_STEP1' => 'Пошук і перегляд даних',
    'LBL_STEP2' => 'Об\'єднати записи з',
    'LBL_TEST_SOURCE' => 'Тестовий конектор',
    'LBL_TEST_SOURCE_FAILED' => 'Перевірка не вдалася',
    'LBL_TEST_SOURCE_SUCCESS' => 'Перевірка успішно пройшла',
    'LBL_TITLE' => 'Об\'єднання даних',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'Помилка: Не знайдено додаткової інформації для запису.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Для цього конектора не було увімкнено модулі. Виберіть модуль для цього конектора на сторінці "Активувати конектори".',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Помилка: Немає включених конекторів, що мають визначені поля для пошуку по ним.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Помилка: Не визначені пошукові поля для модуля та конектора. Будь ласка, зверніться до системного адміністратора.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Помилка: Немає полів модуля, відображених для показу в результатах. Будь ласка, зверніться до системного адміністратора.',
    'LBL_INFO_INLINE' => 'Інформація' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Закрити' /*for 508 compliance fix*/,

);
