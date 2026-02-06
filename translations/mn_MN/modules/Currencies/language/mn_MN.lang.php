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
    'LBL_MODULE_NAME' => 'Вальют',
    'LBL_LIST_FORM_TITLE' => 'Вальют',
    'LBL_CURRENCY' => 'Вальют',
    'LBL_ADD' => 'Нэмэх',
    'LBL_MERGE' => 'Нэгтгэх',
    'LBL_MERGE_TXT' => 'Please select the currencies you would like to map to the selected currency. This will delete all the currencies with a checkmark and reassign any value associated with them to the selected currency.',
    'LBL_US_DOLLAR' => 'U.S. Dollar',
    'LBL_DELETE' => 'Устгах',
    'LBL_LIST_SYMBOL' => 'Вальютын Тэмдэг',
    'LBL_LIST_NAME' => 'Вальютын Нэр',
    'LBL_LIST_ISO4217' => 'Вальютийн код (ISO 4217, Ж: MNT)',
    'LBL_LIST_ISO4217_HELP' => 'ISO-4217 стандартын дагуу гурван үсэг бүхий Вальютийн кодийг оруулна уу. Жишээ нь Монгол төгрөгийн код "MNT" гэж байдаг',
    'LBL_UPDATE' => 'Шинэчлэх',
    'LBL_LIST_RATE' => 'Conversion Rate',
    'LBL_LIST_RATE_HELP' => 'A Conversion Rate of 0.5 for Euro means that 10 USD = 5 Euro.',
    'LBL_LIST_STATUS' => 'Төлөв',
    'LNK_NEW_CONTACT' => 'Шинэ хүн',
    'LNK_NEW_ACCOUNT' => 'Шинэ харилцагч',
    'LNK_NEW_OPPORTUNITY' => 'Шинэ боломж',
    'LNK_NEW_CASE' => 'Шинэ Кейс',
    'LNK_NEW_NOTE' => 'Тайлбар, аттачмент үүсгэх',
    'LNK_NEW_CALL' => 'Шинэ дуудлага',
    'LNK_NEW_EMAIL' => 'Шинэ мэйл',
    'LNK_NEW_MEETING' => 'Шинэ уулзалт',
    'LNK_NEW_TASK' => 'Ажил үүсгэх',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record? Any record using this currency will be converted to the system default currency when they are accessed. It may be better to set the status to inactive.',
    'LBL_BELOW_MIN' => 'Conversion rate has to be above 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Идэвхитэй',
            'Inactive' => 'Идэвхигүй',
        ),
    'LBL_CREATED_BY' => 'Үүсгэсэн',
    'LBL_EDIT_LAYOUT' => 'Үзэгдэц засах' /*for 508 compliance fix*/,
);
