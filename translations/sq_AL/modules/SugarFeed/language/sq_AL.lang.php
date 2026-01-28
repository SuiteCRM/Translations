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
    'LBL_ASSIGNED_TO_ID' => 'Id e përdoruesit të caktuar',
    'LBL_ASSIGNED_TO_NAME' => 'Përdorues',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Të dhënat e krijuara',
    'LBL_DATE_MODIFIED' => 'Të dhënat e modifikuara',
    'LBL_MODIFIED' => 'Modifikuar nga',
    'LBL_MODIFIED_NAME' => 'Modifikuar nga emri',
    'LBL_CREATED' => 'Krijuar nga',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_DELETED' => 'E fshirë',
    'LBL_NAME' => 'Emri',
    'LBL_SAVING' => 'Ruatje',
    'LBL_SAVED' => 'E ruajtur',
    'LBL_CREATED_USER' => 'Krijuar nga përdoruesi',
    'LBL_MODIFIED_USER' => 'Modifikuar nga përdoruesi',
    'LBL_LIST_FORM_TITLE' => 'Feed List',
    'LBL_MODULE_NAME' => 'Rryma e aktivitetit',
    'LBL_MODULE_TITLE' => 'Rryma e aktivitetit',
    'LBL_DASHLET_DISABLED' => 'Warning: The Feed system is disabled, no new feed entries will be posted until it is activated',
    'LBL_RECORDS_DELETED' => 'All previous Feed entries have been removed, if the Feed system is enabled, new entries will be generated automatically.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Are you sure you wish to delete all of the Feed entries?',
    'LBL_FLUSH_RECORDS' => 'Delete Feed Entries',
    'LBL_ENABLE_FEED' => 'Enable My Activity Stream Dashlet',
    'LBL_ENABLE_MODULE_LIST' => 'Activate Feeds For',
    'LBL_HOMEPAGE_TITLE' => 'My Activity Stream',
    'LNK_NEW_RECORD' => 'Create Feed',
    'LNK_LIST' => 'Furnizim',
    'LBL_SEARCH_FORM_TITLE' => 'Search Feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitetet',
    'LBL_NEW_FORM_TITLE' => 'New Feed',
    'LBL_ALL' => 'Të gjitha',
    'LBL_USER_FEED' => 'User Feed',
    'LBL_ENABLE_USER_FEED' => 'Activate User Feed',
    'LBL_TO' => 'Visible to Team',
    'LBL_IS' => 'is',
    'LBL_DONE' => 'E bërë',
    'LBL_TITLE' => 'Titulli',
    'LBL_ROWS' => 'Reshtat',
    'LBL_CATEGORIES' => 'Modulet',
    'LBL_TIME_LAST_WEEK' => 'Javën e kaluar',
    'LBL_TIME_WEEKS' => 'weeks',
    'LBL_TIME_DAYS' => 'Ditët',
    'LBL_TIME_YESTERDAY' => 'Dje',
    'LBL_TIME_HOURS' => 'Orët',
    'LBL_TIME_HOUR' => 'Orët',
    'LBL_TIME_MINUTES' => 'Minutat',
    'LBL_TIME_MINUTE' => 'Minute',
    'LBL_TIME_SECONDS' => 'Seconds',
    'LBL_TIME_SECOND' => 'Second',
    'LBL_TIME_AND' => 'dhe',
    'LBL_TIME_AGO' => 'ago',
// Activity stream
    'CREATED_CONTACT' => 'created a <b>NEW</b> {0}',
    'CREATED_OPPORTUNITY' => 'created a <b>NEW</b> {0}',
    'CREATED_CASE' => 'created a <b>NEW</b> {0}',
    'CREATED_LEAD' => 'created a <b>NEW</b> {0}',
    'FOR' => 'për', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>CLOSED</b> a {0} ',
    'CONVERTED_LEAD' => '<b>CONVERTED</b> a {0}',
    'WON_OPPORTUNITY' => 'has <b>WON</b> an {0}',
    'WITH' => 'with',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Image',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Selekto',
    'LBL_POST' => 'Post',
    'LBL_AUTHENTICATE' => 'Connect to',
    'LBL_AUTHENTICATION_PENDING' => 'Not all of the external accounts you have selected have been authenticated. Click \'Cancel\' to return to the Options window to authenticate the external accounts, or click \'Ok\' to proceed without authenticating.',
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Show More Options',
    'LBL_HIDE_OPTIONS' => 'Fshih opcione',
    'LBL_VIEW' => 'Pamje',
    'LBL_POST_TITLE' => 'Post Status Update for ',
    'LBL_URL_LINK_TITLE' => 'URL Link to use',
);
