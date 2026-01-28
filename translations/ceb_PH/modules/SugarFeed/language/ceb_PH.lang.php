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
    'LBL_ASSIGNED_TO_ID' => 'Mag assign ug user Id',
    'LBL_ASSIGNED_TO_NAME' => 'Gigahin kang',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_MODIFIED' => 'Giusab Ni',
    'LBL_MODIFIED_NAME' => 'Giusab pinaagi sa Pangan',
    'LBL_CREATED' => 'Gihimo ni',
    'LBL_DESCRIPTION' => 'Deskripsyon',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_NAME' => 'Pangalan',
    'LBL_SAVING' => 'Luwasa...',
    'LBL_SAVED' => 'Na-save',
    'LBL_CREATED_USER' => 'Gihimo ni User',
    'LBL_MODIFIED_USER' => 'Giusab ni User',
    'LBL_LIST_FORM_TITLE' => 'Unang listahan',
    'LBL_MODULE_NAME' => 'Activity Streams',
    'LBL_MODULE_TITLE' => 'Activity Streams',
    'LBL_DASHLET_DISABLED' => 'Babala: Ang feed sistema kay dili ma gamit, walay bag ong feed ni sulof og ma post hanytod ma aktib',
    'LBL_RECORDS_DELETED' => 'Tanan mga karaang Fees entries naay been ge tangtang, Og ang fees sistem kay enabled, bag-ong entries na ginirit awtomatiko.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Sigorado naka na imong i-delete tanan ang tanan feed entries?',
    'LBL_FLUSH_RECORDS' => 'I-delete ang feed Entries',
    'LBL_ENABLE_FEED' => 'Pwede na akong actibity i-stream Dashiet',
    'LBL_ENABLE_MODULE_LIST' => 'Actibity mga feed para',
    'LBL_HOMEPAGE_TITLE' => 'Akong aktibity Stream',
    'LNK_NEW_RECORD' => 'Buhat og Feed',
    'LNK_LIST' => 'Nagpakaon',
    'LBL_SEARCH_FORM_TITLE' => 'Pangitaa ang Feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tan-awon ang Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_NEW_FORM_TITLE' => 'Bag-ong Feed',
    'LBL_ALL' => 'Tanan',
    'LBL_USER_FEED' => 'Manggagamit og Feed',
    'LBL_ENABLE_USER_FEED' => 'Aktibity manggagamit Feed',
    'LBL_TO' => 'Dilimakit an sa Team',
    'LBL_IS' => 'sa',
    'LBL_DONE' => 'Humana',
    'LBL_TITLE' => 'Titulo',
    'LBL_ROWS' => 'Mga Hilera',
    'LBL_CATEGORIES' => 'Mga Module',
    'LBL_TIME_LAST_WEEK' => 'Katapusang semana',
    'LBL_TIME_WEEKS' => 'semana',
    'LBL_TIME_DAYS' => 'mga adlaw',
    'LBL_TIME_YESTERDAY' => 'Kagahapon',
    'LBL_TIME_HOURS' => 'Oras',
    'LBL_TIME_HOUR' => 'Oras',
    'LBL_TIME_MINUTES' => 'Minuto',
    'LBL_TIME_MINUTE' => 'Minuto',
    'LBL_TIME_SECONDS' => 'Mga segundo',
    'LBL_TIME_SECOND' => 'Mga segundo',
    'LBL_TIME_AND' => ' og ',
    'LBL_TIME_AGO' => 'nilabay',
// Activity stream
    'CREATED_CONTACT' => 'nabuhat ang<b>bag-ong</b> {0}',
    'CREATED_OPPORTUNITY' => 'nabuhat ang<b>bag-ong</b> {0}',
    'CREATED_CASE' => 'nabuhat ang<b>bag-ong</b> {0}',
    'CREATED_LEAD' => 'nabuhat ang<b>bag-ong</b> {0}',
    'FOR' => 'para kay', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>SIRADO</b>a{0} ',
    'CONVERTED_LEAD' => '<b>KONBERTED</b>a{0}',
    'WON_OPPORTUNITY' => 'has<b>WON</b>an{0}',
    'WITH' => 'kauban',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Imahe',
    'LBL_LINK_TYPE_YouTube' => 'Youtube&#153;',

    'LBL_SELECT' => 'Pili',
    'LBL_POST' => 'Poste',
    'LBL_AUTHENTICATE' => 'Konek og',
    'LBL_AUTHENTICATION_PENDING' => 'Dili sa tanan ang external accounts naay imong gepiling na authenticated. Pinduta \'Kancel\' para ibalik sa Options window sa authenticate sa external accounts, o pislita \'Ok\' para paingon maskin authenticating.',
    'LBL_ADVANCED_SEARCH' => 'Abante nga Filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Ipakita ang mga Opsyon',
    'LBL_HIDE_OPTIONS' => 'Itago ang mga Opsyon',
    'LBL_VIEW' => 'Tan-awa',
    'LBL_POST_TITLE' => 'Post status bag-ohon para ',
    'LBL_URL_LINK_TITLE' => 'URL link to magamit',
);
