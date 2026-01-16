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

    'LBL_ADMINISTRATION_MAIN' => 'Социални мрежи',
    'LBL_AVAILABLE' => 'Забранени полета',
    'LBL_BACK' => '< Върни',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Някои от задължителните полета останаха непопълнени. Продължи?',
    'LBL_CONNECTOR_FIELDS' => 'Полета на връзката',
    'LBL_DATA' => 'Дата',
    'LBL_DEFAULT' => 'По подразбиране',
    'LBL_DISABLED' => 'Забранени модули',
    'LBL_ENABLED' => 'Активирано',
    'LBL_EXTERNAL' => 'Потребители могат да създават външни организации през тази връзка. За да може връзката да бъде използвана е необходимо тя да бъде конфигурирана през секция Параметри на връзките.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' In order to use this connector, the properties should also be set in the Set Connector Properties settings page.',
    'LBL_MERGE' => 'Сливане',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Разрешваване на връзки',
    'LBL_MODIFY_DISPLAY_DESC' => 'Дефиниране на модулите, които могат да използват различните връзки със социални мрежи.',
    'LBL_MODULE_FIELDS' => 'Полета на модула',
    'LBL_MODIFY_MAPPING_TITLE' => 'Синхронизация на данни през връзките',
    'LBL_MODIFY_MAPPING_DESC' => 'Създаване на релации между полетата на връзките и полетата в модулите, по които се извършва прехвърлянето на информация.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Параметри на връзките',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Настройка на връзките със социални мрежи, включително линкове и ключове за достъп.',
    'LBL_MODIFY_SEARCH_TITLE' => 'Търсене през връзки',
    'LBL_MODIFY_SEARCH' => 'Търси',
    'LBL_MODIFY_SEARCH_DESC' => 'Определяне на полетата в модулите, по които се извършва търсене в социалните мрежи.',
    'LBL_MODULE_NAME' => 'Връзки със социални мрежи',
    'LBL_NO_PROPERTIES' => 'Няма параметри, които да бъдат конфигурирани за тази връзка.',
    'LBL_SAVE' => 'Съхрани',
    'LBL_SUMMARY' => 'Резюме',
    'LBL_STEP1' => 'Search and View Data',
    'LBL_STEP2' => 'Слей записите с',
    'LBL_TEST_SOURCE' => 'Тествай връзката',
    'LBL_TEST_SOURCE_FAILED' => 'Тестът е неуспешен',
    'LBL_TEST_SOURCE_SUCCESS' => 'Тестът е успешен',
    'LBL_TITLE' => 'Data Merge',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'Грешка: Не беше намерена допълнителна информация за записа.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Няма разрешени модули за тази връзка. Кои модули използват дадена връзка се дефинира в секция Разрешаване на връзки.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Грешка: Няма разрешени връзки с дефинирани полета за търсене.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Грешка: Няма зададени полета за търсене за този модул и connector.  Моля, свържете се със системния администратор.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Грешка: Няма зададени полета за визуализиране в резултатите.  Моля, свържете се със системния администратор.',
    'LBL_INFO_INLINE' => 'Информация' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Затвори' /*for 508 compliance fix*/,

);
