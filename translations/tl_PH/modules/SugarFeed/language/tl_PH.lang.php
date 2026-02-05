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
    'LBL_ASSIGNED_TO_ID' => 'Ang nagagamit sa Id ay nagtalaga',
    'LBL_ASSIGNED_TO_NAME' => 'Magtalaga sa',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ay lumikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ay binago',
    'LBL_MODIFIED' => 'Binago sa pamamagitan ng',
    'LBL_MODIFIED_NAME' => 'Sa pamamagitan ng pangalan ay binago',
    'LBL_CREATED' => 'Nilikha ni',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_DELETED' => 'Ang Nabura',
    'LBL_NAME' => 'Ang Pangalan',
    'LBL_SAVING' => 'Nagse-save...',
    'LBL_SAVED' => 'I-save',
    'LBL_CREATED_USER' => 'Nililikha sa pamamagitan ng Gumagamit',
    'LBL_MODIFIED_USER' => 'Ang Binago sa pamamagitan ng gumagamit',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng Feed',
    'LBL_MODULE_NAME' => 'Ang Aktibidad ng mga Stream',
    'LBL_MODULE_TITLE' => 'Ang Aktibidad ng mga Stream',
    'LBL_DASHLET_DISABLED' => 'Babala: Ang sistema ng feed ay hindi gumana, walang bagong mga entry ng feed ang mapaskil hanggang ito ay aktibahin',
    'LBL_RECORDS_DELETED' => 'Lahat ng mga nakaraang mga pagpasok ng feed ay inalis, kung ang sistema ng feed ay napagana, ang bagong mga pagpasok ay awtomatikong nabuo.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Sigurado ka ba na hinihiling mong burahin ang lahat ng mga pagpasok ng feed?',
    'LBL_FLUSH_RECORDS' => 'Burahin ang mga pagpasok ng feed',
    'LBL_ENABLE_FEED' => 'Paganahin ang aking dashlet ng daloy ng aktibidad',
    'LBL_ENABLE_MODULE_LIST' => 'Buhayin ang feeds para sa',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking daloy ng aktibidad',
    'LNK_NEW_RECORD' => 'Lumikha ng feed',
    'LNK_LIST' => 'Ang feed',
    'LBL_SEARCH_FORM_TITLE' => 'Maghanap ng feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tanawin ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_NEW_FORM_TITLE' => 'Bagong feed',
    'LBL_ALL' => 'Lahat',
    'LBL_USER_FEED' => 'Feed ng gumagamit',
    'LBL_ENABLE_USER_FEED' => 'Buhayin ang feed ng gumagamit',
    'LBL_TO' => 'Nakikita sa koponan',
    'LBL_IS' => 'ay',
    'LBL_DONE' => 'Tapos na',
    'LBL_TITLE' => 'Ang Pamagat',
    'LBL_ROWS' => 'Mga hanay',
    'LBL_CATEGORIES' => 'Mga module',
    'LBL_TIME_LAST_WEEK' => 'Nakaraang Linggo',
    'LBL_TIME_WEEKS' => 'mga linggo',
    'LBL_TIME_DAYS' => 'mga araw',
    'LBL_TIME_YESTERDAY' => 'Kahapon',
    'LBL_TIME_HOURS' => 'Ang mga oras',
    'LBL_TIME_HOUR' => 'Ang mga oras',
    'LBL_TIME_MINUTES' => 'Ang mga minuto',
    'LBL_TIME_MINUTE' => 'Minuto',
    'LBL_TIME_SECONDS' => 'Mga segundo',
    'LBL_TIME_SECOND' => 'Segundo',
    'LBL_TIME_AND' => ' at ',
    'LBL_TIME_AGO' => 'ang nakaraan',
// Activity stream
    'CREATED_CONTACT' => 'nilikha ang isang <b>BAGO</b> {0}',
    'CREATED_OPPORTUNITY' => 'nilikha ang isang <b>BAGO</b> {0}',
    'CREATED_CASE' => 'nilikha ang isang <b>BAGO</b> {0}',
    'CREATED_LEAD' => 'nilikha ang isang <b>BAGO</b> {0}',
    'FOR' => 'para', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>SARADO</b> ang isang {0} ',
    'CONVERTED_LEAD' => '<b>KOMBERTIDO</b> ang isang {0}',
    'WON_OPPORTUNITY' => 'may <b>NANALO</b> ng isang {0}',
    'WITH' => 'na may',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Imahe',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Piliin',
    'LBL_POST' => 'I-paskil',
    'LBL_AUTHENTICATE' => 'Kumonekta sa',
    'LBL_AUTHENTICATION_PENDING' => 'Hindi lahat ng panglabas na mga account na iyong napili ay napatotohanan. Pindutin ang \'Kanselahin\' para bumalik sa mga pagpipiliang window para patotohanan ang mga panglabas na account, o pindutin ang \'Ok\' para magpatuloy na walang pagpapatotoo.',
    'LBL_ADVANCED_SEARCH' => 'Naunang pag Sala' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Ang mga pagpipilian ay higit pa ang ipinakita',
    'LBL_HIDE_OPTIONS' => 'Itago ang mga pagpipilian',
    'LBL_VIEW' => 'Ang Tanawin',
    'LBL_POST_TITLE' => 'Magpaskil ng update ng katayuan para sa ',
    'LBL_URL_LINK_TITLE' => 'Link ng URL na gagamitin',
);
