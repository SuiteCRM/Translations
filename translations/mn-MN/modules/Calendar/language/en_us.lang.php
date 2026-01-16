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

    'LBL_SHAREDWEEK' => 'Shared Week',
    'LBL_SHAREDMONTH' => 'Shared Month',

    'LBL_MODULE_NAME' => 'Календар',
    'LBL_MODULE_TITLE' => 'Календар',
    'LNK_NEW_CALL' => 'Дуудлага төлөвлөх',
    'LNK_NEW_MEETING' => 'Уулзалт товлох',
    'LNK_NEW_TASK' => 'Ажил үүсгэх',
    'LNK_CALL_LIST' => 'Дуудлагууд',
    'LNK_MEETING_LIST' => 'Уулзалтууд',
    'LNK_TASK_LIST' => 'Ажлууд',
    'LNK_TASK' => 'Ажил',
    'LNK_TASK_VIEW' => 'Ажил харах',
    'LNK_EVENT' => 'Үйл явдал',
    'LNK_EVENT_VIEW' => 'Үйл явдлыг харах',
    'LNK_VIEW_CALENDAR' => 'Өнөөдөр',
    'LNK_IMPORT_CALLS' => 'Дуудлага импортлох',
    'LNK_IMPORT_MEETINGS' => 'Уулзалт импортлох',
    'LNK_IMPORT_TASKS' => 'Ажил импортлох',
    'LBL_MONTH' => 'Сар',
    'LBL_AGENDADAY' => 'Өдөр',
    'LBL_YEAR' => 'Он',

    'LBL_AGENDAWEEK' => '7 хоног',
    'LBL_PREVIOUS_MONTH' => 'Өмнөх сар',
    'LBL_PREVIOUS_DAY' => 'Өмнөх өдөр',
    'LBL_PREVIOUS_YEAR' => 'Өмнөх жил',
    'LBL_PREVIOUS_WEEK' => 'Өмнөх 7 хоног',
    'LBL_NEXT_MONTH' => 'Ирэх Сар',
    'LBL_NEXT_DAY' => 'Дараагийн өдөр',
    'LBL_NEXT_YEAR' => 'Ирэх Жил',
    'LBL_NEXT_WEEK' => 'Дараа 7 хоног',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Хуваарьт орсон',
    'LBL_BUSY' => 'Завгүй',
    'LBL_CONFLICT' => 'Давхцал',
    'LBL_USER_CALENDARS' => 'Хэрэглэгчийн календарь',
    'LBL_SHARED' => 'Хуваалцсан',
    'LBL_PREVIOUS_SHARED' => 'Өмнөх',
    'LBL_NEXT_SHARED' => 'Дараахи',
    'LBL_SHARED_CAL_TITLE' => 'Дундын календарь',
    'LBL_USERS' => 'Хэрэглэгчид',
    'LBL_REFRESH' => 'Шинэчлэх',
    'LBL_EDIT_USERLIST' => 'Хэрэглэгчийн жагсаалт',
    'LBL_SELECT_USERS' => 'Select users for calendar display',
    'LBL_FILTER_BY_TEAM' => 'Хэрэглэгчийг багаар нь шүүх:',
    'LBL_ASSIGNED_TO_NAME' => 'Хариуцагч',
    'LBL_DATE' => 'Эхлэх өдөр цаг',
    'LBL_CREATE_MEETING' => 'Уулзалт товлох',
    'LBL_CREATE_CALL' => 'Дуудлага бүртгэх',
    'LBL_HOURS_ABBREV' => 'ц',
    'LBL_MINS_ABBREV' => 'м',


    'LBL_YES' => 'Тийм',
    'LBL_NO' => 'Үгүй',
    'LBL_SETTINGS' => 'Тохиргоо',
    'LBL_CREATE_NEW_RECORD' => 'Үйл ажиллагаа үүсгэх',
    'LBL_LOADING' => 'Ачааллаж байна...',
    'LBL_SAVING' => 'Хадгалж байна...',
    'LBL_SENDING_INVITES' => 'Хадгалаад урлигыг илгээж байна...',
    'LBL_CONFIRM_REMOVE' => 'Та энэ бичлэгийг устгахад итгэлтэй байна уу?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Та бүх давтагдах бичлэгийг устгахад итгэлтэй байна уу?',
    'LBL_EDIT_RECORD' => 'Үйл ажиллагааг засах',
    'LBL_ERROR_SAVING' => 'Хадгалахад алдаа гарлаа',
    'LBL_ERROR_LOADING' => 'Ачааллахад алдаа гарлаа',
    'LBL_GOTO_DATE' => 'Огноо руу очих',
    'NOTICE_DURATION_TIME' => 'Үргэлжлэх хугацаа 0-с их байх ёстой',
    'LBL_STYLE_BASIC' => 'Үндсэн', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Ахисан', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Хуваарилагдсан талбарт тохирох илэрц олдохгүй байна',
    'LBL_SUBJECT' => 'Гарчиг',
    'LBL_DURATION' => 'Үргэжлэх',
    'LBL_STATUS' => 'Төлөв',
    'LBL_PRIORITY' => 'Эрэмбэ',

    'LBL_SETTINGS_TITLE' => 'Тохиргоо',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Өдөр, 7хоногийн дэлгэцэнд цагийн хуваарь үзүүлэх:',
    'LBL_SETTINGS_TIME_STARTS' => 'Эхлэх цаг:',
    'LBL_SETTINGS_TIME_ENDS' => 'Дуусах цаг:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Дуудлага харуул:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Ажил харуул:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Дууссан уулзалт, дуудлага, ажил харуулах:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Shared Calendar Separate:',

    'LBL_SAVE_BUTTON' => 'Хадгалах',
    'LBL_DELETE_BUTTON' => 'Устгах',
    'LBL_APPLY_BUTTON' => 'Ашиглах',
    'LBL_SEND_INVITES' => 'Хадгалж урилга илгээх',
    'LBL_CANCEL_BUTTON' => 'Цуцлах',
    'LBL_CLOSE_BUTTON' => 'Хаах',

    'LBL_GENERAL_TAB' => 'Дэлгэрэнгүй',
    'LBL_PARTICIPANTS_TAB' => 'Урьсан хүмүүс',
    'LBL_REPEAT_TAB' => 'Давтагдах',

    'LBL_REPEAT_TYPE' => 'Давтах',
    'LBL_REPEAT_INTERVAL' => 'бүх',
    'LBL_REPEAT_END' => 'Төгсгөл',
    'LBL_REPEAT_END_AFTER' => 'Дараа',
    'LBL_REPEAT_OCCURRENCES' => 'давтамж',
    'LBL_REPEAT_END_BY' => '-нд дуусах',
    'LBL_REPEAT_DOW' => 'өдөр',
    'LBL_REPEAT_UNTIL' => 'Хүртэл давтах',
    'LBL_REPEAT_COUNT' => 'Давтах тоо',
    'LBL_REPEAT_LIMIT_ERROR' => 'Таны хүсэлт $limit тооны хязгаар давсан уулзалт үүсгэж байна.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Бүх давталтыг засах',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Бүх давталтыг устгах',

    'LBL_DATE_END_ERROR' => 'Төгсөх өдөр эхлэх өдийн өмнө байна',
    'ERR_YEAR_BETWEEN' => 'Уучилраарай, календарь таны хүссэн оныг хамаарч дийлэхгүй байна<br> Он 1970-аас 2037 оны хооронд байх ёстой',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_GENERAL_SETTINGS' => 'General Settings',
    'LBL_COLOR_SETTINGS' => 'Colour Settings',
    'LBL_MODULE' => 'Модуль',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Хүрээ',
    'LBL_TEXT' => 'Текст',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Ня",
            '1' => "Да",
            '2' => "Мя",
            '3' => "Лх",
            '4' => "Пү",
            '5' => "Ба",
            '6' => "Бя",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Ням",
            '1' => "Даваа",
            '2' => "Мягмар",
            '3' => "Лхагва",
            '4' => "Пүрэв",
            '5' => "Баасан",
            '6' => "Бямба",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "1-р сар",
            '2' => "2-р сар",
            '3' => "3-р сар",
            '4' => "4-р сар",
            '5' => "5-р сар",
            '6' => "6-р сар",
            '7' => "7-р сар",
            '8' => "8-р сар",
            '9' => "9-р сар",
            '10' => "10-р сар",
            '11' => "11-р сар",
            '12' => "12-р сар",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "1-р сар",
            '2' => "2-р сар",
            '3' => "3-р сар",
            '4' => "4-р сар",
            '5' => "5-р сар",
            '6' => "6-р сар",
            '7' => "7-р сар",
            '8' => "8-р сар",
            '9' => "9-р сар",
            '10' => "10-р сар",
            '11' => "11-р сар",
            '12' => "12-р сар",
        ),
);
