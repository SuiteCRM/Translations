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
    'LBL_NAME' => 'Нэр',
    'LBL_CREATED_USER' => 'Үүсгэсэн',
    'LBL_MODIFIED_USER' => 'Өөрчилсөн',
    'LBL_LIST_NAME' => 'Нэр',
    'LBL_EDIT_BUTTON' => 'Засах',
    'LBL_REMOVE' => 'Устгах',
    'LBL_LIST_FORM_TITLE' => 'Үйл явдлууд',
    'LBL_MODULE_NAME' => 'Үйл явдал',
    'LBL_MODULE_TITLE' => 'Үйл явдал',
    'LBL_HOMEPAGE_TITLE' => 'Миний үйл явдал',
    'LNK_NEW_RECORD' => 'Үйл явдал үүсгэх',
    'LNK_LIST' => 'Үйл явдлыг харах',
    'LBL_SEARCH_FORM_TITLE' => 'Үйл явдал хайх',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Түүхийг харах',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Үйл ажиллагаа',
    'LBL_NEW_FORM_TITLE' => 'Шинэ үйл явдал',
    'LBL_LOCATION' => 'Байршил',
    'LBL_START_DATE' => 'эхлэх огноо',
    'LBL_END_DATE' => 'Дуусах огноо/цаг',
    'LBL_BUDGET' => 'Төсөв',
    'LBL_DATE' => 'Эхлэх огноо',
    'LBL_DATE_END' => 'Дуусах огноо',
    'LBL_DURATION' => 'Үргэжлэх',
    'LBL_INVITE_TEMPLATES' => 'Урилга мэйлын загвар',
    'LBL_INVITE_PDF' => 'Урилга илгээх',
    'LBL_EDITVIEW_PANEL1' => 'Үйл явдлын дэлгэрэнгүй',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Төлөөлөгчид',
    'LBL_ACCEPT_REDIRECT' => 'Accept Redirect URL',
    'LBL_DECLINE_REDIRECT' => 'Decline Redirect URL',
    'LBL_SELECT_DELEGATES' => 'Төлөөлөгчдийг сонго',
    'LBL_SELECT_DELEGATES_TITLE' => 'Төлөөлөгчдийг сонго:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Target List',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Зорилт',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Харилцагч',
    'LBL_SELECT_DELEGATES_LEADS' => 'Сонирхогчид',
    'LBL_MANAGE_DELEGATES' => 'Төлөөлөгчдийг удирдах',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Төлөөлөгчдийг удирдах:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Зөвшөөрлийг удирдах',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Зөвшөөрлийг удирдах:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Зөвшөөрсөн',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Татгалзсан',
    'LBL_MANAGE_POPUP_ERROR' => 'Төлөөлөгс сонгоогүй байна.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Урьсан',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Уриагүй',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Оролцсон',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Оролцоогүй',
    'LBL_SUCCESS_MSG' => 'Бүх урилгыг амжилттай илгээв.',
    'LBL_ERROR_MSG_1' => 'Бүх холбоотой хүмүүст урилгыг өмнө нь илгээсэн байна.',
    'LBL_ERROR_MSG_2' => 'Sending the invite emails has failed! Please check your email settings.',
    'LBL_ERROR_MSG_3' => 'More than 10 emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Мэйл загвар (темплэйт) алдаатай',
    'LBL_EMAIL_INVITE' => 'Урилга мэйлдэх',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Харилцагч',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Байршил',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Сонирхогчид',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Зорилт',

    'LBL_HOURS_ABBREV' => 'ц',
    'LBL_MINSS_ABBREV' => 'м',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Төлөөлөгчид',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Нэр',
    'LBL_ACCOUNT_NAME' => 'Компани',
    'LBL_SIGNATURE' => 'Гарын үсэг',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Урьсан',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Төлөв',

    'LBL_ACTIVITY_STATUS' => 'Үйл ажиллагааны төлөв',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Event Locations from Events Title',
    // Email links
    'LBL_ACCEPT_LINK' => 'Зөвшөөрөх',
    'LBL_DECLINE_LINK' => 'Татгалзах',
    
);
