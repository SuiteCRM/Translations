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
    'LBL_ASSIGNED_TO_ID' => 'Хариуцагчийн ID',
    'LBL_ASSIGNED_TO_NAME' => 'Хариуцагч',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Үүссэн Огноо',
    'LBL_DATE_MODIFIED' => 'Өөрчилсөн',
    'LBL_MODIFIED' => 'Өөрчилсөн',
    'LBL_MODIFIED_NAME' => 'Өөрчилсөн',
    'LBL_CREATED' => 'Үүсгэсэн',
    'LBL_DESCRIPTION' => 'Тайлбар',
    'LBL_DELETED' => 'Устгасан',
    'LBL_NAME' => 'Албан Тушаал',
    'LBL_CREATED_USER' => 'Үүсгэсэн',
    'LBL_MODIFIED_USER' => 'Өөрчилсөн',
    'ERR_DELETE_RECORD' => 'Аккаунт устгахын тулд бүртгэлийн дугаарыг оруулна уу.',
    'LBL_ACCOUNT_NAME' => 'Албан Тушаал',
    'LBL_ACCOUNT' => 'Компани:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Үйл ажиллагаа',
    'LBL_ADDRESS_INFORMATION' => 'Хаягын мэдээлэл',
    'LBL_ANNUAL_REVENUE' => 'Жилийн Борлуулалт:',
    'LBL_ANY_ADDRESS' => 'Дурын хаяг:',
    'LBL_ANY_EMAIL' => 'Дурын Е-Майл:',
    'LBL_ANY_PHONE' => 'Дурын Утас:',
    'LBL_RATING' => 'Үнэлгээ',
    'LBL_ASSIGNED_USER' => 'Хариуцагч',
    'LBL_BILLING_ADDRESS_CITY' => 'Төлбөр хийх хаяг - Хот:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Төлбөр хийх хаяг - Улс:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Төлбөр хийх хаяг - Шуудангийн код:',
    'LBL_BILLING_ADDRESS_STATE' => 'Төлбөр хийх хаяг - Муж:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Төлбөр хийх хаяг - Гудамж 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Төлбөр хийх хаяг - Гудамж 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Төлбөр хийх хаяг - Гудамж 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Төлбөр хийх хаяг - Гудамж:',
    'LBL_BILLING_ADDRESS' => 'Төлбөр хийх хаяг:',
    'LBL_ACCOUNT_INFORMATION' => 'Тойм',
    'LBL_CITY' => 'Хот:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Харилцагч',
    'LBL_COUNTRY' => 'Улс:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Байгууллагууд',
    'LBL_DUPLICATE' => 'Давхардсан Аккаунт байж магад',
    'LBL_EMAIL' => 'Мэйл:',
    'LBL_EMPLOYEES' => 'Ажилтнууд:',
    'LBL_FAX' => 'Факс:',
    'LBL_INDUSTRY' => 'Бизнес салбар:',
    'LBL_LIST_ACCOUNT_NAME' => 'Харилцагчийн Нэр',
    'LBL_LIST_CITY' => 'Хот',
    'LBL_LIST_EMAIL_ADDRESS' => 'Мэйл хаяг',
    'LBL_LIST_PHONE' => 'Утас',
    'LBL_LIST_STATE' => 'Муж',
    'LBL_MEMBER_OF' => 'Гишүүнчлэл:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Гишүүн байгууллагууд',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Өөр мэйл:',
    'LBL_OTHER_PHONE' => 'Бусад утас:',
    'LBL_OWNERSHIP' => 'Эзэмшигч:',
    'LBL_PARENT_ACCOUNT_ID' => 'Эцэг Аккаунт ID',
    'LBL_PHONE_ALT' => 'Өөр утас:',
    'LBL_PHONE_FAX' => 'Факс:',
    'LBL_PHONE_OFFICE' => 'Утас ажлын:',
    'LBL_PHONE' => 'Утас:',
    'LBL_POSTAL_CODE' => 'Шуудангийн код:',
    'LBL_SAVE_ACCOUNT' => 'Аккаунтыг хадгал',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Илгээх хот:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Илгээх улс:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Илгээх шуудангийн код:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Илгээх аймаг/муж:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Илгээх гудамж 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Илгээх гудамж 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Илгээх гудамж 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Илгээх гудамж:',
    'LBL_SHIPPING_ADDRESS' => 'Илгээх хаяг:',
    'LBL_STATE' => 'Аймаг/Муж:',
    'LBL_TICKER_SYMBOL' => 'Биржийн код:',
    'LBL_TYPE' => 'Tөрөл:',
    'LBL_WEBSITE' => 'Вэбсайт:',
    'LNK_ACCOUNT_LIST' => 'Байгууллагууд',
    'LNK_NEW_ACCOUNT' => 'Аккаунт Үүсгэх',
    'MSG_DUPLICATE' => 'Та байгууллага/компани давхардуулан бүртгэх гэж байна. Та доорхи жагсаалтаас компани сонгох эсвэл Хадгалах товч дарж давхардсан компани үүсгэх боломжтой.',
    'MSG_SHOW_DUPLICATES' => 'Та байгууллага/компани давхардуулан бүртгэх гэж байна. Та хадгалах товч дарж давхардсан компани үүсгэх эсвэл Цуцлах товч дарж болиулах боломжтой.',
    'NTC_DELETE_CONFIRMATION' => 'Та энэ мэдээллийг устгахыг хүсч байна уу?',
    'LBL_LIST_FORM_TITLE' => 'Нэхэмжлэхийн жагсаалт',
    'LBL_MODULE_NAME' => 'Нэхэмжлэх',
    'LBL_MODULE_TITLE' => 'Нэхэмжлэх: Үндсэн',
    'LBL_HOMEPAGE_TITLE' => 'Миний нэхэмжлэх',
    'LNK_NEW_RECORD' => 'Нэхэмжлэх үүсгэх',
    'LNK_LIST' => 'Нэхэмжлэх үүсгэх',
    'LBL_SEARCH_FORM_TITLE' => 'Search Invoices',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Түүхийг харах',
    'LBL_NEW_FORM_TITLE' => 'New Invoice',
    'LBL_TERMS_C' => 'Нөхцөл',
    'LBL_APPROVAL_ISSUE' => 'Зөвшөөрөл олгоход гарсан асуудлууд',
    'LBL_APPROVAL_STATUS' => 'Зөвшөөрлийн төлөв',
    'LBL_BILLING_ACCOUNT' => 'Байгууллага',
    'LBL_BILLING_CONTACT' => 'Харилцагч',
    'LBL_EXPIRATION' => 'Хүчинтэй хугацаа',
    'LBL_INVOICE_NUMBER' => 'Invoice Number',
    'LBL_OPPORTUNITY' => 'Боломжийн Нэршил',
    'LBL_TEMPLATE_DDOWN_C' => 'Invoice Templates',
    'LBL_STAGE' => 'Үнийн саналын шат',
    'LBL_TERM' => 'Төлбөрийн нөхцөл',
    'LBL_SUBTOTAL_AMOUNT' => 'Нийлбэр',
    'LBL_DISCOUNT_AMOUNT' => 'Хямдрал',
    'LBL_TAX_AMOUNT' => 'Татвар',
    'LBL_SHIPPING_AMOUNT' => 'Илгээмж',
    'LBL_TOTAL_AMT' => 'Нийт',
    'VALUE' => 'Албан Тушаал',
    'LBL_EMAIL_ADDRESSES' => 'Мэйл хаяг',
    'LBL_LINE_ITEMS' => 'Мөр дэх зүйлс',
    'LBL_GRAND_TOTAL' => 'Нийт дүн',
    'LBL_QUOTE_NUMBER' => 'Үнийн саналын дугаар',
    'LBL_QUOTE_DATE' => 'Quote Date',
    'LBL_INVOICE_DATE' => 'Invoice Date',
    'LBL_DUE_DATE' => 'Дуусах огноо',
    'LBL_STATUS' => 'Төлөв',
    'LBL_INVOICE_STATUS' => 'Нэхэмжлэхийн төлөв',
    'LBL_PRODUCT_QUANITY' => 'Тоо ширхэг',
    'LBL_PRODUCT_NAME' => 'Бараа бүтээгдэхүүн',
    'LBL_PART_NUMBER' => 'Эдийн дугаар',
    'LBL_PRODUCT_NOTE' => 'Тэмдэглэл',
    'LBL_PRODUCT_DESCRIPTION' => 'Тайлбар',
    'LBL_LIST_PRICE' => 'Жагсаалт',
    'LBL_DISCOUNT_AMT' => 'Хямдрал',
    'LBL_UNIT_PRICE' => 'Борлуулах үнэ',
    'LBL_TOTAL_PRICE' => 'Нийт',
    'LBL_VAT' => 'Татвар', //VAT
    'LBL_VAT_AMT' => 'Татварын дүн', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Барааны мөр нэмэх',
    'LBL_SERVICE_NAME' => 'Үйлчилгээ',
    'LBL_SERVICE_LIST_PRICE' => 'Жагсаалт',
    'LBL_SERVICE_PRICE' => 'Борлуулах үнэ',
    'LBL_SERVICE_DISCOUNT' => 'Хямдрал',
    'LBL_ADD_SERVICE_LINE' => 'Үйлчилгээний мөр нэмэх ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Устгах',
    'LBL_PRINT_AS_PDF' => 'PDF хэлбэрээр хэвлэх',
    'LBL_EMAIL_INVOICE' => 'Email Invoice',
    'LBL_LIST_NUM' => '№',
    'LBL_PDF_NAME' => 'Нэхэмжлэх',
    'LBL_EMAIL_NAME' => 'Invoice for',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Invoice template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Нийлбэр + Татвар',//pre shipping
    'LBL_EMAIL_PDF' => 'PDF мэйлдэх',
    'LBL_ADD_GROUP' => 'Групп нэмэх',
    'LBL_DELETE_GROUP' => 'Групп устгах',
    'LBL_GROUP_NAME' => 'Группын нэр',
    'LBL_GROUP_TOTAL' => 'Группын нийлбэр',
    'LBL_SHIPPING_TAX' => 'Илгээмжийн татвар',
    'LBL_SHIPPING_TAX_AMT' => 'Илгээмжийн татвар',
    'LBL_IMPORT_LINE_ITEMS' => 'Мөр импорлох',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Нийлбэр (Үндсэн вальютаар)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Хямдрал (Үндсэн вальютаар)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Татвар (Үндсэн вальютаар)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Хүргэлт (Үндсэн вальютаар)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Нийлбэр дүн (Үндсэн вальютаар)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Илгээмжийн татвар (Үндсэн вальютаар)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Нийт хөлийн дүн (Үндсэн вальютаар)',
    'LBL_INVOICE_TO' => 'Invoice To',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Мөр дэх зүйлийн Групп',
    'LBL_AOS_PRODUCT_QUOTES' => 'Барааны үнийн санал',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Үнийн санал: Нэхэмлэх',
);
