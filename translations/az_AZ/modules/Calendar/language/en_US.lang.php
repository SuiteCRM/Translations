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

    'LBL_MODULE_NAME' => 'Təqvim',
    'LBL_MODULE_TITLE' => 'Təqvim',
    'LNK_NEW_CALL' => 'Schedule Call',
    'LNK_NEW_MEETING' => 'Görüş cədvəli',
    'LNK_NEW_TASK' => 'Tapşırıq Yarat',
    'LNK_CALL_LIST' => 'Zənglər',
    'LNK_MEETING_LIST' => 'Görüşlər',
    'LNK_TASK_LIST' => 'Tapşırıqlar',
    'LNK_TASK' => 'Tapşırıq',
    'LNK_TASK_VIEW' => 'Tapşırığa baxın',
    'LNK_EVENT' => 'Hadisə',
    'LNK_EVENT_VIEW' => 'Tədbirə baxın',
    'LNK_VIEW_CALENDAR' => 'Bugün',
    'LNK_IMPORT_CALLS' => 'Zəngləri idxal edin',
    'LNK_IMPORT_MEETINGS' => 'Görüşləri idxal edin',
    'LNK_IMPORT_TASKS' => 'Tapşırıqları idxal edin',
    'LBL_MONTH' => 'Ay',
    'LBL_AGENDADAY' => 'Gün',
    'LBL_YEAR' => 'İl',

    'LBL_AGENDAWEEK' => 'Həftə',
    'LBL_PREVIOUS_MONTH' => 'Əvvəlki ay',
    'LBL_PREVIOUS_DAY' => 'Əvvəlki gün',
    'LBL_PREVIOUS_YEAR' => 'Əvvəlki il',
    'LBL_PREVIOUS_WEEK' => 'Əvvəlki həftə',
    'LBL_NEXT_MONTH' => 'Gələn Ay',
    'LBL_NEXT_DAY' => 'Növbəti gün',
    'LBL_NEXT_YEAR' => 'Növbəti İl',
    'LBL_NEXT_WEEK' => 'Gələn Həftə',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Planlaşdırılıb',
    'LBL_BUSY' => 'Məşğul',
    'LBL_CONFLICT' => 'Ziddiyət',
    'LBL_USER_CALENDARS' => 'İstifadəçi Təqvimləri',
    'LBL_SHARED' => 'Paylaşıldı',
    'LBL_PREVIOUS_SHARED' => 'Əvvəlki',
    'LBL_NEXT_SHARED' => 'Növbəti',
    'LBL_SHARED_CAL_TITLE' => 'Paylaşılan Təqvim',
    'LBL_USERS' => 'İstifadəçilər',
    'LBL_REFRESH' => 'Yenilə',
    'LBL_EDIT_USERLIST' => 'İstifadəçi siyahısı',
    'LBL_SELECT_USERS' => 'Təqvimin göstərilməsi üçün istifadəçiləri seçin',
    'LBL_FILTER_BY_TEAM' => 'İstifadəçi siyahısını komandaya görə süzün:',
    'LBL_ASSIGNED_TO_NAME' => 'Təyin Edilsin',
    'LBL_DATE' => 'Başlama tarixi və zamanı',
    'LBL_CREATE_MEETING' => 'Görüş cədvəli',
    'LBL_CREATE_CALL' => 'Zəng Günlüyü',
    'LBL_HOURS_ABBREV' => 'saat',
    'LBL_MINS_ABBREV' => 'dəq',


    'LBL_YES' => 'Bəli',
    'LBL_NO' => 'Xeyr',
    'LBL_SETTINGS' => 'Tənzimləmələr',
    'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_LOADING' => 'Yüklənir...',
    'LBL_SAVING' => 'Saving...',
    'LBL_SENDING_INVITES' => 'Çağırışlar Yadda Saxlanılır və Göndərilir...',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
    'LBL_EDIT_RECORD' => 'Edit Activity',
    'LBL_ERROR_SAVING' => 'Error while saving',
    'LBL_ERROR_LOADING' => 'Yükləyərkən xəta baş verdi',
    'LBL_GOTO_DATE' => 'Tarixə keçin',
    'NOTICE_DURATION_TIME' => 'Müddəti 0-dan çox olmalıdır',
    'LBL_STYLE_BASIC' => 'Başlıca', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Qabaqcıl', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Sahəyə uyğunluq yoxdur: Təyin edilib',
    'LBL_SUBJECT' => 'Mövzu',
    'LBL_DURATION' => 'Müddət',
    'LBL_STATUS' => 'Vəziyyət',
    'LBL_PRIORITY' => 'Öncəlik',

    'LBL_SETTINGS_TITLE' => 'Tənzimləmələr',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Gün və Həftə görünüşlərində vaxt intervallarını göstərin:',
    'LBL_SETTINGS_TIME_STARTS' => 'Başlama vaxtı:',
    'LBL_SETTINGS_TIME_ENDS' => 'Bitmə vaxtı:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Zəngləri göstərin:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Tapşırıqları göstərin:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Tamamlanmış görüşləri, zəngləri və tapşırıqları göstərin:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Paylaşılan Təqvim Ayrı:',

    'LBL_SAVE_BUTTON' => 'Saxla',
    'LBL_DELETE_BUTTON' => 'Sil',
    'LBL_APPLY_BUTTON' => 'Tətbiq et',
    'LBL_SEND_INVITES' => 'Çağırışları Yadda Saxla və Göndər',
    'LBL_CANCEL_BUTTON' => 'İmtina',
    'LBL_CLOSE_BUTTON' => 'Bağla',

    'LBL_GENERAL_TAB' => 'Ətraflı məlumat',
    'LBL_PARTICIPANTS_TAB' => 'Dəvət edənlər',
    'LBL_REPEAT_TAB' => 'Təkrarlanma',

    'LBL_REPEAT_TYPE' => 'Təkrarla',
    'LBL_REPEAT_INTERVAL' => 'Hər',
    'LBL_REPEAT_END' => 'Son',
    'LBL_REPEAT_END_AFTER' => 'Sonra',
    'LBL_REPEAT_OCCURRENCES' => 'təkrarlanmalar',
    'LBL_REPEAT_END_BY' => 'Ilə',
    'LBL_REPEAT_DOW' => 'Açıq',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Təkrarlanmaların sayı',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

    'LBL_DATE_END_ERROR' => 'End date is before start date',
    'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_GENERAL_SETTINGS' => 'General Settings',
    'LBL_COLOR_SETTINGS' => 'Colour Settings',
    'LBL_MODULE' => 'Modul',
    'LBL_BODY' => 'Mətn',
    'LBL_BORDER' => 'Border',
    'LBL_TEXT' => 'Mətn',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Baz",
            '1' => "B. E",
            '2' => "Çr. ax",
            '3' => "Çər",
            '4' => "Cüm ax",
            '5' => "Cüm",
            '6' => "Şən",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Bazar",
            '1' => "Bazar ertəsi",
            '2' => "Çərşənbə axşamı",
            '3' => "Çərşənbə",
            '4' => "Cümə axşamı",
            '5' => "Cümə",
            '6' => "Şənbə",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Yan",
            '2' => "Fev",
            '3' => "Mar",
            '4' => "Apr",
            '5' => "May",
            '6' => "İyn",
            '7' => "İyu",
            '8' => "Avq",
            '9' => "Sen",
            '10' => "Okt",
            '11' => "Noy",
            '12' => "Dek",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Yanvar",
            '2' => "Fevral",
            '3' => "Mart",
            '4' => "Aprel",
            '5' => "May",
            '6' => "İyun",
            '7' => "İyul",
            '8' => "Avqust",
            '9' => "Sentyabr",
            '10' => "Oktyabr",
            '11' => "Noyabr",
            '12' => "Dekabr",
        ),
);
