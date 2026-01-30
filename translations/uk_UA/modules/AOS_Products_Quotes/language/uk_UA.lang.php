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
    'LBL_DESCRIPTION' => 'Замітка',
    'LBL_DELETED' => 'Видалено',
    'LBL_NAME' => 'Назва',
    'LBL_CREATED_USER' => 'Створено користувачем',
    'LBL_MODIFIED_USER' => 'Змінено користувачем',
    'LBL_LIST_FORM_TITLE' => 'Пропозиції товарів',
    'LBL_MODULE_NAME' => 'Позиція',
    'LBL_MODULE_TITLE' => 'Комерційні пропозиції товарів: Головна',
    'LBL_HOMEPAGE_TITLE' => 'Мої пропозиції товарів',
    'LNK_NEW_RECORD' => 'Створити товарну пропозицію',
    'LNK_LIST' => 'Пропозиції товарів',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук пропозицій',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_NEW_FORM_TITLE' => 'Створити товарну пропозицію',
    'LBL_PRODUCT_NAME' => 'Назва',
    'LBL_PRODUCT_QTY' => 'Кількість',
    'LBL_PRODUCT_COST_PRICE' => 'Вартість',
    'LBL_PRODUCT_LIST_PRICE' => 'Число на ціннику',
    'LBL_PRODUCT_UNIT_PRICE' => 'Ціна за одиницю',
    'LBL_PRODUCT_DISCOUNT' => 'Знижка',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Сума знижки',
    'LBL_PART_NUMBER' => 'Артикул',
    'LBL_PRODUCT_DESCRIPTION' => 'Опис',
    'LBL_DISCOUNT' => 'Тип знижки',
    'LBL_VAT_AMT' => 'Сума податку',
    'LBL_VAT' => 'Податок',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Загальна ціна',
    'LBL_PRODUCT_NOTE' => 'Замітка',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Відноситься до',
    'LBL_PRODUCT' => 'Продукт',

    'LBL_SERVICE_MODULE_NAME' => 'Послуги',
    'LBL_LIST_NUM' => 'Число',
    'LBL_PARENT_ID' => 'ID початкового запису',
    'LBL_GROUP_NAME' => 'Група',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Вартість (валюта за замовчуванням)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Число на ціннику (валюта за замовчуванням)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Ціна за одиницю (валюта за замовчуванням)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Загальна ціна (валюта за замовчуванням)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Знижка (валюта за замовчуванням)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Знижка (валюта за замовчуванням)',
    'LBL_VAT_AMT_USDOLLAR' => 'Податок (валюта за замовчуванням)',
    'LBL_PRODUCTS_SERVICES' => 'Продукт / Послуга',
    'LBL_PRODUCT_ID' => 'ID товару',

    'LBL_AOS_CONTRACTS' => 'Угоди',
    'LBL_AOS_INVOICES' => 'Рахунок-фактура',
    'LBL_AOS_PRODUCTS' => 'Товари',
    'LBL_AOS_QUOTES' => 'Комерційні пропозиції',
);
