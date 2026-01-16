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
    'LBL_MODULE_NAME' => 'Сделка',
    'LBL_MODULE_TITLE' => 'Сделка: Начало',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене на сделка',
    'LBL_LIST_FORM_TITLE' => 'Списък със сделки',
    'LBL_NAME' => 'Име на сделката',
    'LBL_LIST_SALE_NAME' => 'Име',
    'LBL_LIST_ACCOUNT_NAME' => 'Oрганизация',
    'LBL_LIST_AMOUNT' => 'Сума',
    'LBL_LIST_DATE_CLOSED' => 'Затвори',
    'LBL_LIST_SALE_STAGE' => 'Етап на преговори',
    'LBL_ACCOUNT_ID' => 'ID на Организацията',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_NAME',
    //END DON'T CONVERT
    'LBL_ACCOUNT_NAME' => 'Организация:',
    'LBL_AMOUNT' => 'Сума:',
    'LBL_AMOUNT_USDOLLAR' => 'Сума USD:',
    'LBL_CURRENCY' => 'Валута:',
    'LBL_DATE_CLOSED' => 'Дата на финализиране:',
    'LBL_TYPE' => 'Категория:',
    'LBL_CAMPAIGN' => 'Кампания:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Потенциални клиенти',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
    'LBL_NEXT_STEP' => 'Следваща стъпка:',
    'LBL_LEAD_SOURCE' => 'Източник:',
    'LBL_SALES_STAGE' => 'Етап на преговори:',
    'LBL_PROBABILITY' => 'Вероятност (%):',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_DUPLICATE' => 'Възможно дублирана сделка',
    'MSG_DUPLICATE' => 'Създаването на този запис може да доведе до създаване на дублиращ запис. Списък с повтарящи се заглавия на записи е приведен долу.<br>Можете да съхраните записа с вече въведените данни чрез натискане на бутон "Запази" или да отмените неговото запазване чрез натискане на съответния бутон.',
    'LBL_NEW_FORM_TITLE' => 'Създай сделка',
    'ERR_DELETE_RECORD' => 'Трябва да определите номер, за да изтриете този запис.',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Сделка',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Дейности',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_ASSIGNED_TO_NAME' => 'Отговорник:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Отговорник',
    'LBL_ASSIGNED_TO_ID' => 'Зачислено на ID',
    'LBL_MODIFIED_NAME' => 'Модифицирана от',
    'LBL_SALE_INFORMATION' => 'Информация',
    'LBL_CURRENCY_NAME' => 'Име на валутата',
    'LBL_CURRENCY_SYMBOL' => 'Валутен символ',
    'LBL_EDIT_BUTTON' => 'Редактиране',
    'LBL_REMOVE' => 'Изтрий',

);
