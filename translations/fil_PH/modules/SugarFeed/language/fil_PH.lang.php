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
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng Id para sa gumagamit',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_MODIFIED' => 'Binago ni',
    'LBL_MODIFIED_NAME' => 'Ito ay ibinago sa pamamagitan ng pangalan',
    'LBL_CREATED' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_DELETED' => 'Ang pagkabura',
    'LBL_NAME' => 'Ang pangalan',
    'LBL_SAVING' => 'Nagse-save...',
    'LBL_SAVED' => 'Nai-seyb',
    'LBL_CREATED_USER' => 'Inilikha ng tagagamit',
    'LBL_MODIFIED_USER' => 'Binago sa pamamagitan ng tagagamit',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng feed',
    'LBL_MODULE_NAME' => 'Ang aktibidad ng mga batis',
    'LBL_MODULE_TITLE' => 'Ang aktibidad ng mga batis',
    'LBL_DASHLET_DISABLED' => 'Babala: Ang sistema ng feed ay hindi pinagana, walang nga bagong feed entry ay na -ipost hanggang ito ay aktibo',
    'LBL_RECORDS_DELETED' => 'Lahat ng mga nakaraang Feed entey ay na ialis na. Kung ang sistema ng feed ay pinahana, bagong mga entry ay automatikong mabubuo.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Sigurado ka bang ninanais mong burahin ang lahat ng mga feed entry?',
    'LBL_FLUSH_RECORDS' => 'Burahin ang mga feed entry',
    'LBL_ENABLE_FEED' => 'Paganahin ang aking aktibidad Stream Dashlet',
    'LBL_ENABLE_MODULE_LIST' => 'Ang mga aktibong feed para sa',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking aktibidad stream',
    'LNK_NEW_RECORD' => 'Lumikha ng feed',
    'LNK_LIST' => 'Feed',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tingnan ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_NEW_FORM_TITLE' => 'Bagong feed',
    'LBL_ALL' => 'Lahat',
    'LBL_USER_FEED' => 'Feed ng gumagamit',
    'LBL_ENABLE_USER_FEED' => 'Aktibong gumagamit ng feed',
    'LBL_TO' => 'Nakikita sa koponan',
    'LBL_IS' => 'ay',
    'LBL_DONE' => 'Tapos na',
    'LBL_TITLE' => 'Paksa',
    'LBL_ROWS' => 'Mga hilera',
    'LBL_CATEGORIES' => 'Mga modyul',
    'LBL_TIME_LAST_WEEK' => 'Nakaraang linggo',
    'LBL_TIME_WEEKS' => 'linggo',
    'LBL_TIME_DAYS' => 'ang mga araw',
    'LBL_TIME_YESTERDAY' => 'Kahapon',
    'LBL_TIME_HOURS' => 'Mga oras',
    'LBL_TIME_HOUR' => 'Mga oras',
    'LBL_TIME_MINUTES' => 'Mga minuto',
    'LBL_TIME_MINUTE' => 'Minuto',
    'LBL_TIME_SECONDS' => 'Mga segundo',
    'LBL_TIME_SECOND' => 'Segundo',
    'LBL_TIME_AND' => ' at ',
    'LBL_TIME_AGO' => 'ang nakalipas',
// Activity stream
    'CREATED_CONTACT' => 'nilikhang <b>NEW</b> {0}',
    'CREATED_OPPORTUNITY' => 'nilikhang <b>NEW</b> {0}',
    'CREATED_CASE' => 'nilikhang <b>NEW</b> {0}',
    'CREATED_LEAD' => 'nilikhang <b>NEW</b> {0}',
    'FOR' => 'para', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>CLOSED</b> a {0} ',
    'CONVERTED_LEAD' => '<b>CONVERTED</b> a {0}',
    'WON_OPPORTUNITY' => 'ay <b>WON</b> ng {0}',
    'WITH' => 'sa',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Larawan',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Piliin',
    'LBL_POST' => 'Mag-post',
    'LBL_AUTHENTICATE' => 'Kumonekta sa',
    'LBL_AUTHENTICATION_PENDING' => 'Hindi lahat ng mga external akwant na pinili mo ay napatjnahan. Pindutin anb \'Kanselahin\' upang bumalik sa mga opsyon window upang mapatunayan anh external akwant, o pindutin anh \'Ok\' upang magpatukoy mna hindi pinapatunayan.',
    'LBL_ADVANCED_SEARCH' => 'Advanced na Filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Magpakita pa ng ibang opsyon',
    'LBL_HIDE_OPTIONS' => 'Itago ang mga pagpipilian',
    'LBL_VIEW' => 'Tingnan',
    'LBL_POST_TITLE' => 'Mag post ng estado update para sa ',
    'LBL_URL_LINK_TITLE' => 'Ang URL na gamitin sa',
);
