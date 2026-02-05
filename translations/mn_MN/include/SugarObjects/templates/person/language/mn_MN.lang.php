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
    'LBL_SALUTATION' => 'Гуншин',
    'LBL_NAME' => 'Нэр',
    'LBL_FIRST_NAME' => 'Өөрийн Нэр',
    'LBL_LAST_NAME' => 'Овог Нэр',
    'LBL_TITLE' => 'Албан Тушаал',
    'LBL_DEPARTMENT' => 'Хэлтэс',
    'LBL_DO_NOT_CALL' => 'Бүү Залга',
    'LBL_HOME_PHONE' => 'Гэрийн Утас',
    'LBL_MOBILE_PHONE' => 'Гар Утас',
    'LBL_OFFICE_PHONE' => 'Ажлын Утас',
    'LBL_OTHER_PHONE' => 'Бусад Утас',
    'LBL_FAX_PHONE' => 'Факс',
    'LBL_EMAIL_ADDRESS' => 'Имэйл Хаяг',
    'LBL_PRIMARY_ADDRESS' => 'Үндсэн хаяг',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Үндсэн хаяг',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Үндсэн хаяг - Гудамж 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Үндсэн хаяг - Гудамж 3:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Үндсэн Хот',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Үндсэн Муж',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Үндсэн Шуудангийн Код',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Үндсэн хаяг - Улс:',
    'LBL_ALT_ADDRESS' => 'Нэмэлт Хаяг',
    'LBL_ALT_ADDRESS_STREET' => 'Нэмэлт Хаяг',
    'LBL_ALT_ADDRESS_STREET_2' => 'Нэмэлт Хаяг - Гудамж 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Нэмэлт Хаяг - Гудамж 3:',
    'LBL_ALT_ADDRESS_CITY' => 'Өөр хаяг - Хот',
    'LBL_ALT_ADDRESS_STATE' => 'Өөр хаяг - Муж',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Өөр хаяг - Шуудангийн код',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Өөр хаяг - Улс',
    'LBL_PRIMARY_STREET' => 'Хаяг',
    'LBL_ALT_STREET' => 'Бусад хаяг',
    'LBL_STREET' => 'Бусад хаяг',
    'LBL_CITY' => 'Хот',
    'LBL_STATE' => 'Муж',
    'LBL_POSTAL_CODE' => 'Шуудангийн код',
    'LBL_COUNTRY' => 'Улс',
    'LBL_CONTACT_INFORMATION' => 'Харилцагчийн Мэдээлэл',
    'LBL_ADDRESS_INFORMATION' => 'Хаяг(ууд)',
    'LBL_ASSIGNED_TO_NAME' => 'Хариуцагч',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Өөр мэйл:',
    'LBL_ASSISTANT' => 'Туслах',
    'LBL_ASSISTANT_PHONE' => 'Туслахын Утас',
    'LBL_WORK_PHONE' => 'Ажлын утас',
    'LNK_IMPORT_VCARD' => 'vCard-наас үүсгэх',
    'LBL_ANY_EMAIL' => 'Дурын Мэйл',
    'LBL_EMAIL_NON_PRIMARY' => 'Хоёрдогч Майл Хаягууд',
    'LBL_PHOTO' => 'Фото',
    'LBL_EDIT_BUTTON' => 'Засах',
    'LBL_REMOVE' => 'Устгах',

    //Lawful Basis labels
    'LBL_LAWFUL_BASIS' => 'Хуулийн үндэс',
    'LBL_DATE_REVIEWED' => 'Хуулийн үндэс эргэж хянасан огноо',
    'LBL_LAWFUL_BASIS_SOURCE' => 'Хуулийн үндэслэлийн эх сурвалж',
    'LBL_CONSENT' => 'Зөвшөөрөл',
    //End Lawful Basis labels
);
