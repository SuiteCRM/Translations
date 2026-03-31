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
    'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Nimi',
    'LBL_SAVING' => 'Salvestamine ......',
    'LBL_SAVED' => 'Saved',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_LIST_FORM_TITLE' => 'Voo loend',
    'LBL_MODULE_NAME' => 'Voog',
    'LBL_MODULE_TITLE' => 'Activity Streams',
    'LBL_DASHLET_DISABLED' => 'Hoiatus: voo süsteem on keelatud, uusi voo sissekandeid ei postitata kuni see on aktiveeritud.',
    'LBL_RECORDS_DELETED' => 'Kõik varasemad voo sissekanded on eemaldatud, kui SuiteCRM voo süsteem on lubatud, siis uued sissekanded luuakse automaatselt.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Kas oled kindel, et soovid kõik SuiteCRM voo sissekanded kustutada?',
    'LBL_FLUSH_RECORDS' => 'Kustuta voo sissekanded',
    'LBL_ENABLE_FEED' => 'Luba voog',
    'LBL_ENABLE_MODULE_LIST' => 'Aktiveeri vood',
    'LBL_HOMEPAGE_TITLE' => 'Minu voog',
    'LNK_NEW_RECORD' => 'Loo voog',
    'LNK_LIST' => 'Feed',
    'LBL_SEARCH_FORM_TITLE' => 'Otsi voog',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Uus voog',
    'LBL_ALL' => 'All',
    'LBL_USER_FEED' => 'Kasutaja voog',
    'LBL_ENABLE_USER_FEED' => 'Aktiveeri kasutaja voog',
    'LBL_TO' => 'Saada meeskonnale',
    'LBL_IS' => 'Is',
    'LBL_DONE' => 'Done',
    'LBL_TITLE' => 'Tiitel',
    'LBL_ROWS' => 'Rows',
    'LBL_CATEGORIES' => 'Modules',
    'LBL_TIME_LAST_WEEK' => 'Last Week',
    'LBL_TIME_WEEKS' => 'nädalat',
    'LBL_TIME_DAYS' => 'days',
    'LBL_TIME_YESTERDAY' => 'Yesterday',
    'LBL_TIME_HOURS' => 'Hours',
    'LBL_TIME_HOUR' => 'Hours',
    'LBL_TIME_MINUTES' => 'Minutes',
    'LBL_TIME_MINUTE' => 'Minut',
    'LBL_TIME_SECONDS' => 'Sekundid',
    'LBL_TIME_SECOND' => 'Sekund',
    'LBL_TIME_AND' => 'and',
    'LBL_TIME_AGO' => 'tagasi',
// Activity stream
    'CREATED_CONTACT' => 'loodud <b>UUS</b> {0}',
    'CREATED_OPPORTUNITY' => 'loodud <b>UUS</b> {0}',
    'CREATED_CASE' => 'loodud <b>UUS</b> {0}',
    'CREATED_LEAD' => 'loodud <b>UUS</b> {0}',
    'FOR' => 'for', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>SULETUD</b> {0} ',
    'CONVERTED_LEAD' => '<b>KONVERTEERITUD</b> {0}',
    'WON_OPPORTUNITY' => 'on <b>VÕITNUD</b> {0}',
    'WITH' => 'with',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Pilt',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Select',
    'LBL_POST' => 'Post',
    'LBL_AUTHENTICATE' => 'Ühenda',
    'LBL_AUTHENTICATION_PENDING' => 'Not all of the external accounts you have selected have been authenticated. Click \'Cancel\' to return to the Options window to authenticate the external accounts, or click \'Ok\' to proceed without authenticating.',
    'LBL_ADVANCED_SEARCH' => 'Lisavõimalustega filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Näita rohkem valikuid',
    'LBL_HIDE_OPTIONS' => 'Hide Options',
    'LBL_VIEW' => 'View',
    'LBL_POST_TITLE' => 'Post Status Update for ',
    'LBL_URL_LINK_TITLE' => 'URL Link to use',
);
