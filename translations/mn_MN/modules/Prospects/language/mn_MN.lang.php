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
    'LBL_MODULE_NAME' => 'Зорилт',
    'LBL_MODULE_ID' => 'Зорилт',
    'LBL_INVITEE' => 'Шууд удирдлага',
    'LBL_MODULE_TITLE' => 'Targets: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Target Search',
    'LBL_LIST_FORM_TITLE' => 'Target List',
    'LBL_NEW_FORM_TITLE' => 'New Target',
    'LBL_LIST_NAME' => 'Нэр',
    'LBL_LIST_LAST_NAME' => 'Овог Нэр',
    'LBL_LIST_TITLE' => 'Албан тушаал',
    'LBL_LIST_EMAIL_ADDRESS' => 'Е-мэйл',
    'LBL_LIST_PHONE' => 'Утас',
    'LBL_LIST_FIRST_NAME' => 'Өөрийн Нэр',
    'LBL_ASSIGNED_TO_NAME' => 'Хариуцагч',
    'LBL_ASSIGNED_TO_ID' => 'Хариуцагч:',
    'LBL_CAMPAIGN_ID' => 'Компанит ажлын ID',
    'LBL_EXISTING_ACCOUNT' => 'Бүртгэгдсэн харилцагч ашиглав',
    'LBL_CREATED_ACCOUNT' => 'Шинэ харилцагч үүсгэв',
    'LBL_CREATED_CALL' => 'Шинэ дуудлага үүсгэв',
    'LBL_CREATED_MEETING' => 'Шинэ уулзалт үүсгэв',
    'LBL_NAME' => 'Нэр:',
    'LBL_PROSPECT_INFORMATION' => 'Тойм', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Бусад мэдээлэл',
    'LBL_FIRST_NAME' => 'Өөрийн нэр:',
    'LBL_OFFICE_PHONE' => 'Ажлын утас:',
    'LBL_ANY_PHONE' => 'Дурын Утас:',
    'LBL_PHONE' => 'Утас:',
    'LBL_LAST_NAME' => 'Эцэг эхийн нэр:',
    'LBL_MOBILE_PHONE' => 'Гар утас:',
    'LBL_HOME_PHONE' => 'Гэрийн:',
    'LBL_OTHER_PHONE' => 'Бусад утас:',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Үндсэн хаяг - Гудамж:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Үндсэн хаяг - Хот:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Үндсэн хаяг - Улс:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Үндсэн хаяг - Муж:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Үндсэн хаяг - Шуудангийн код:',
    'LBL_ALT_ADDRESS_STREET' => 'Нэмэлт Хаяг - Гудамж:',
    'LBL_ALT_ADDRESS_CITY' => 'Нэмэлт Хаяг - Хот:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Нэмэлт Хаяг - Улс:',
    'LBL_ALT_ADDRESS_STATE' => 'Нэмэлт Хаяг - Аймаг/муж:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Нэмэлт хаяг - Шуудангийн код:',
    'LBL_TITLE' => 'Албан Тушаал:',
    'LBL_DEPARTMENT' => 'Хэлтэс:',
    'LBL_BIRTHDATE' => 'Төрсөн өдөр:',
    'LBL_EMAIL_ADDRESS' => 'Мэйл Хаяг:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Өөр мэйл:',
    'LBL_ANY_EMAIL' => 'Дурын Е-Майл:',
    'LBL_ASSISTANT' => 'Туслах:',
    'LBL_ASSISTANT_PHONE' => 'Туслахын утас:',
    'LBL_DO_NOT_CALL' => 'Бүү Залга:',
    'LBL_EMAIL_OPT_OUT' => 'Мэйл илгээж болохгүй:',
    'LBL_PRIMARY_ADDRESS' => 'Үндсэн хаяг:',
    'LBL_ALTERNATE_ADDRESS' => 'Бусад хаяг:',
    'LBL_ANY_ADDRESS' => 'Дурын хаяг:',
    'LBL_CITY' => 'Хот:',
    'LBL_STATE' => 'Аймаг/Муж:',
    'LBL_POSTAL_CODE' => 'Шуудангийн код:',
    'LBL_COUNTRY' => 'Улс:',
    'LBL_ADDRESS_INFORMATION' => 'Хаягын мэдээлэл',
    'LBL_DESCRIPTION' => 'Тайлбар:',
    'LBL_OPP_NAME' => 'Боломжийн нэршил:',
    'LBL_IMPORT_VCARD' => 'Нэрийн хуудсыг импортлох',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_DUPLICATE' => 'Зорилтот хэрэглэгчийн давхцал үүсч байж магад',
    'MSG_SHOW_DUPLICATES' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Create Target to continue creating this new target, or select an existing target listed below.',
    'MSG_DUPLICATE' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Save to continue creating this new target, or click Cancel to return to the module without creating the target.',
    'LNK_IMPORT_VCARD' => 'vCard-наас үүсгэх',
    'LNK_NEW_ACCOUNT' => 'Аккаунт Үүсгэх',
    'LNK_NEW_OPPORTUNITY' => 'Боломж Үүсгэх',
    'LNK_NEW_CASE' => 'Кейс Нээх',
    'LNK_NEW_NOTE' => 'Тайлбар, аттачмент үүсгэх',
    'LNK_NEW_CALL' => 'Дуудлага бүртгэх',
    'LNK_NEW_EMAIL' => 'Мэйл Архивлах',
    'LNK_NEW_MEETING' => 'Уулзалт товлох',
    'LNK_NEW_TASK' => 'Ажил үүсгэх',
    'LNK_NEW_APPOINTMENT' => 'Дуудлага товлох',
    'LNK_IMPORT_PROSPECTS' => 'Import Targets',
    'NTC_DELETE_CONFIRMATION' => 'Та энэ мэдээллийг устгахыг хүсч байна уу?',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this contact from the case?',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the contact.',
    'LBL_SALUTATION' => 'Гуншин',
    'LBL_CREATED_OPPORTUNITY' => 'Шинэ боломж үүсгэв',
    'LNK_SELECT_ACCOUNT' => "Аккаунт сонго",
    'LNK_NEW_PROSPECT' => 'Зорилтот бүлэг үүсгэх',
    'LNK_PROSPECT_LIST' => 'Зорилтот бүлэг харах',
    'LNK_NEW_CAMPAIGN' => 'Компанит ажил үүсгэх',
    'LNK_CAMPAIGN_LIST' => 'Компанит ажлууд',
    'LNK_NEW_PROSPECT_LIST' => 'Зорилтот бүлэг үүсгэх',
    'LNK_PROSPECT_LIST_LIST' => 'Зорилтын жасгаалт',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Targets',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Targets',
    'LBL_INVALID_EMAIL' => 'Алдаатай мэйл:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Зорилт',
    'LBL_PROSPECT_LIST' => 'Боломжит харилцагчийн жагсаалт',
    'LBL_CONVERT_BUTTON_TITLE' => 'Зорилтот бүлэг хөрвүүлэх',
    'LBL_CONVERT_BUTTON_LABEL' => 'Зорилтот бүлэг хөрвүүлэх',
    'LNK_NEW_CONTACT' => 'Шинэ хүн',
    'LBL_CREATED_CONTACT' => "Шинэ харилцагч бүртгэв",
    'LBL_CAMPAIGNS' => 'Компанит ажлууд',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Компанит Ажлын Лог',
    'LBL_TRACKER_KEY' => 'Tracker-ийн түлхүүр',
    'LBL_LEAD_ID' => 'Сонирхолтын Id',
    'LBL_CONVERTED_LEAD' => 'Сонирхоц хөрвүүлэх',
    'LBL_ACCOUNT_NAME' => 'Харилцагчийн Нэр',
    'LBL_EDIT_ACCOUNT_NAME' => 'Байгууллагын Нэр:',
    'LBL_CREATED_USER' => 'Үүсгэсэн хэрэглэгч',
    'LBL_MODIFIED_USER' => 'Өөрчилсөн хэрэглэгч',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Түүх',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Үйл явдлууд',
);
