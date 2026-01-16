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
    'LBL_ASSIGNED_TO_NAME' => 'Contract Manager',
    'LBL_CONTRACT_ACCOUNT' => 'Байгууллага',
    'LBL_OPPORTUNITY' => 'Боломж /Opp/',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Үүссэн Огноо',
    'LBL_DATE_MODIFIED' => 'Өөрчилсөн',
    'LBL_MODIFIED' => 'Өөрчилсөн',
    'LBL_MODIFIED_NAME' => 'Өөрчилсөн',
    'LBL_CREATED' => 'Үүсгэсэн',
    'LBL_DESCRIPTION' => 'Тайлбар',
    'LBL_DELETED' => 'Устгасан',
    'LBL_NAME' => 'Contract Title',
    'LBL_CREATED_USER' => 'Үүсгэсэн',
    'LBL_MODIFIED_USER' => 'Өөрчилсөн',
    'LBL_LIST_NAME' => 'Нэр',
    'LBL_LIST_FORM_TITLE' => 'Гэрээний жагсаалт',
    'LBL_MODULE_NAME' => 'Гэрээ',
    'LBL_MODULE_TITLE' => 'Гэрээ: Үндсэн',
    'LBL_HOMEPAGE_TITLE' => 'Миний гэрээ',
    'LNK_NEW_RECORD' => 'Гэрээ үүсгэх',
    'LNK_LIST' => 'Гэрээ үзэх',
    'LBL_SEARCH_FORM_TITLE' => 'Гэрээ хайх',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Түүхийг харах',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Үйл ажиллагаа',
    'LBL_NEW_FORM_TITLE' => 'New Contract',
    'LBL_CONTRACT_NAME' => 'Contract Name',
    'LBL_REFERENCE_CODE ' => 'Reference Code ',
    'LBL_START_DATE' => 'Эхлэх огноо',
    'LBL_END_DATE' => 'Дуусах огноо',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Гэрээний үнийн дүн',
    'LBL_STATUS' => 'Төлөв',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Харилцагч гарын үсэг зурсан огноо',
    'LBL_COMPANY_SIGNED_DATE' => 'Компани гарын үсэг зурсан огноо',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Шинэчлэл сануулах огноо',
    'LBL_CONTRACT_TYPE' => 'Гэрээний төрөл',
    'LBL_CONTACT' => 'Харилцагч',
    'LBL_ADD_GROUP' => 'Групп нэмэх',
    'LBL_DELETE_GROUP' => 'Групп устгах',
    'LBL_GROUP_NAME' => 'Группын нэр',
    'LBL_GROUP_TOTAL' => 'Группын нийлбэр',
    'LBL_PRODUCT_QUANITY' => 'Тоо ширхэг',
    'LBL_PRODUCT_NAME' => 'Бараа бүтээгдэхүүн',
    'LBL_PART_NUMBER' => 'Эдийн дугаар',
    'LBL_PRODUCT_NOTE' => 'Тэмдэглэл',
    'LBL_PRODUCT_DESCRIPTION' => 'Тайлбар',
    'LBL_LIST_PRICE' => 'Жагсаалт',
    'LBL_DISCOUNT_AMT' => 'Хямдрал',
    'LBL_UNIT_PRICE' => 'Борлуулах үнэ',
    'LBL_TOTAL_PRICE' => 'Нийт',
    'LBL_VAT' => 'Татвар',
    'LBL_VAT_AMT' => 'Татварын дүн',
    'LBL_SERVICE_NAME' => 'Үйлчилгээ',
    'LBL_SERVICE_LIST_PRICE' => 'Жагсаалт',
    'LBL_SERVICE_PRICE' => 'Борлуулах үнэ',
    'LBL_SERVICE_DISCOUNT' => 'Хямдрал',
    'LBL_LINE_ITEMS' => 'Мөр дэх зүйлс',
    'LBL_SUBTOTAL_AMOUNT' => 'Нийлбэр',
    'LBL_DISCOUNT_AMOUNT' => 'Хямдрал',
    'LBL_TAX_AMOUNT' => 'Татвар',
    'LBL_SHIPPING_AMOUNT' => 'Илгээмж',
    'LBL_TOTAL_AMT' => 'Нийт',
    'LBL_GRAND_TOTAL' => 'Нийт дүн',
    'LBL_SHIPPING_TAX' => 'Илгээмжийн татвар',
    'LBL_SHIPPING_TAX_AMT' => 'Илгээмжийн татвар',
    'LBL_ADD_PRODUCT_LINE' => 'Барааны мөр нэмэх',
    'LBL_ADD_SERVICE_LINE' => 'Үйлчилгээний мөр нэмэх ',
    'LBL_PRINT_AS_PDF' => 'PDF хэлбэрээр хэвлэх',
    'LBL_EMAIL_PDF' => 'PDF мэйлдэх',
    'LBL_PDF_NAME' => 'Гэрээ',
    'LBL_EMAIL_NAME' => 'Гэрээ',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Contract template, go to the PDF templates module and create one',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Гэрээний дүн (Үндсэн вальютаар)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Нийлбэр (Үндсэн вальютаар)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Хямдрал (Үндсэн вальютаар)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Татвар (Үндсэн вальютаар)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Хүргэлт (Үндсэн вальютаар)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Нийлбэр дүн (Үндсэн вальютаар)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Илгээмжийн татвар (Үндсэн вальютаар)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Нийт хөлийн дүн (Үндсэн вальютаар)',

    'LBL_CALL_ID' => 'Дуудлага',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Мөр дэх зүйлийн Групп',
    'LBL_AOS_PRODUCT_QUOTES' => 'Барааны үнийн санал',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Үнийн санал: Гэрээ',
);
