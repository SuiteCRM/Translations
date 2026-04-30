<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_ASSIGNED_TO_ID' => 'Възложен на оператор с идентификационен номер',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Name',
    'LBL_SAVING' => 'Saving...',
    'LBL_SAVED' => 'Saved',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_LIST_FORM_TITLE' => 'Списък с новини на',
    'LBL_MODULE_NAME' => 'новини',
    'LBL_MODULE_TITLE' => 'Activity Streams',
    'LBL_DASHLET_DISABLED' => 'Внимание: новините са изключени, никакви нови новини няма да бъдат публикувани, докато не бъдат активирани',
    'LBL_RECORDS_DELETED' => 'Всички предишни новини са отстранени, ако новините се активират то новите ще излязат автоматично.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Сигурни ли сте че искате да изтриете всички въведени записи?',
    'LBL_FLUSH_RECORDS' => 'Изтрий',
    'LBL_ENABLE_FEED' => 'Давам възможност за новини',
    'LBL_ENABLE_MODULE_LIST' => 'Активни новини за:',
    'LBL_HOMEPAGE_TITLE' => 'Моите ленти с новини',
    'LNK_NEW_RECORD' => 'Създайте новина',
    'LNK_LIST' => 'Feed',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене в ленти с новини',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Нова новина',
    'LBL_ALL' => 'Всички',
    'LBL_USER_FEED' => 'User Feed',
    'LBL_ENABLE_USER_FEED' => 'Активни новини за потребителя',
    'LBL_TO' => 'Visible to Team',
    'LBL_IS' => 'е',
    'LBL_DONE' => 'Done',
    'LBL_TITLE' => 'Title',
    'LBL_ROWS' => 'Rows',
    'LBL_CATEGORIES' => 'Modules',
    'LBL_TIME_LAST_WEEK' => 'Last Week',
    'LBL_TIME_WEEKS' => 'weeks',
    'LBL_TIME_DAYS' => 'days',
    'LBL_TIME_YESTERDAY' => 'Yesterday',
    'LBL_TIME_HOURS' => 'Hours',
    'LBL_TIME_HOUR' => 'Hours',
    'LBL_TIME_MINUTES' => 'Minutes',
    'LBL_TIME_MINUTE' => 'Минута',
    'LBL_TIME_SECONDS' => 'Секунди',
    'LBL_TIME_SECOND' => 'Секунда',
    'LBL_TIME_AND' => 'and',
    'LBL_TIME_AGO' => 'преди',
// Activity stream
    'CREATED_CONTACT' => 'създаден <b>Нов</b> {0}',
    'CREATED_OPPORTUNITY' => 'created a <b>NEW</b> {0}',
    'CREATED_CASE' => 'created a <b>NEW</b> {0}',
    'CREATED_LEAD' => 'created a <b>NEW</b> {0}',
    'FOR' => 'for', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>Приключен</b> {0} ',
    'CONVERTED_LEAD' => '<b>Преобразуван</b> {0}',
    'WON_OPPORTUNITY' => '<b>Реализирана</b> {0}',
    'WITH' => 'с',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Image',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Select',
    'LBL_POST' => 'Post',
    'LBL_AUTHENTICATE' => 'Connect to',
    'LBL_AUTHENTICATION_PENDING' => 'Не всички маркирани външни потребители са се идентифицирали пред системата. Натиснете \'Отмени\' за да се върнете в прозореца за идентификация на външните потребители, или натиснете \'Ок\' за да продължите без идентификация.',
    'LBL_ADVANCED_SEARCH' => 'Разширен филтър' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Show More Options',
    'LBL_HIDE_OPTIONS' => 'Hide Options',
    'LBL_VIEW' => 'View',
    'LBL_POST_TITLE' => 'Post Status Update for ',
    'LBL_URL_LINK_TITLE' => 'URL Link to use',
);
