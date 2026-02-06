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
    'LBL_ASSIGNED_TO_ID' => 'Id dodijeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno korisniku',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmjene',
    'LBL_MODIFIED' => 'Modifikovao-la',
    'LBL_MODIFIED_NAME' => 'Izmjenjeno od strane korisnika',
    'LBL_CREATED' => 'Kreirao',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Izbrisano',
    'LBL_NAME' => 'Ime',
    'LBL_SAVING' => 'Spremanje...',
    'LBL_SAVED' => 'Spremljeno',
    'LBL_CREATED_USER' => 'Kreirao Korisnik',
    'LBL_MODIFIED_USER' => 'Izmijenio Korisnik',
    'LBL_LIST_FORM_TITLE' => 'Lista',
    'LBL_MODULE_NAME' => 'Trenutne aktivnosti',
    'LBL_MODULE_TITLE' => 'Trenutne aktivnosti',
    'LBL_DASHLET_DISABLED' => 'Warning: The Feed system is disabled, no new feed entries will be posted until it is activated',
    'LBL_RECORDS_DELETED' => 'All previous Feed entries have been removed, if the Feed system is enabled, new entries will be generated automatically.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Are you sure you wish to delete all of the Feed entries?',
    'LBL_FLUSH_RECORDS' => 'Delete Feed Entries',
    'LBL_ENABLE_FEED' => 'Omogućiti dashlet sa trenutnim aktivnostima',
    'LBL_ENABLE_MODULE_LIST' => 'Activate Feeds For',
    'LBL_HOMEPAGE_TITLE' => 'Trenutne aktivnosti',
    'LNK_NEW_RECORD' => 'Create Feed',
    'LNK_LIST' => 'Feed',
    'LBL_SEARCH_FORM_TITLE' => 'Search Feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregled istorije',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_NEW_FORM_TITLE' => 'New Feed',
    'LBL_ALL' => 'Sve',
    'LBL_USER_FEED' => 'User Feed',
    'LBL_ENABLE_USER_FEED' => 'Activate User Feed',
    'LBL_TO' => 'Visible to Team',
    'LBL_IS' => 'is',
    'LBL_DONE' => 'Gotovo',
    'LBL_TITLE' => 'Naslov',
    'LBL_ROWS' => 'Rows',
    'LBL_CATEGORIES' => 'Moduli',
    'LBL_TIME_LAST_WEEK' => 'Prošle sedmice',
    'LBL_TIME_WEEKS' => 'sedmice',
    'LBL_TIME_DAYS' => 'dani',
    'LBL_TIME_YESTERDAY' => 'Jučer',
    'LBL_TIME_HOURS' => 'Sati',
    'LBL_TIME_HOUR' => 'Sati',
    'LBL_TIME_MINUTES' => 'Minute',
    'LBL_TIME_MINUTE' => 'Minuta',
    'LBL_TIME_SECONDS' => 'Sekunde',
    'LBL_TIME_SECOND' => 'Sekunda',
    'LBL_TIME_AND' => 'i',
    'LBL_TIME_AGO' => 'ago',
// Activity stream
    'CREATED_CONTACT' => 'kreiran <b>NOVI</b> {0}',
    'CREATED_OPPORTUNITY' => 'kreiran <b>NOVI</b> {0}',
    'CREATED_CASE' => 'kreiran <b>NOVI</b> {0}',
    'CREATED_LEAD' => 'kreiran <b>NOVI</b> {0}',
    'FOR' => 'za', // Activity stream for cases
    'FOR_AMOUNT' => 'iznos', // Activity stream for cases
    'CLOSED_CASE' => '<b>ZATVORENO</b> a {0} ',
    'CONVERTED_LEAD' => '<b>CONVERTED</b> a {0}',
    'WON_OPPORTUNITY' => 'has <b>WON</b> an {0}',
    'WITH' => 'with',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Image',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Odaberi',
    'LBL_POST' => 'Objavi',
    'LBL_AUTHENTICATE' => 'Connect to',
    'LBL_AUTHENTICATION_PENDING' => 'Not all of the external accounts you have selected have been authenticated. Click \'Cancel\' to return to the Options window to authenticate the external accounts, or click \'Ok\' to proceed without authenticating.',
    'LBL_ADVANCED_SEARCH' => 'Napredni filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Show More Options',
    'LBL_HIDE_OPTIONS' => 'Sakrij opcije',
    'LBL_VIEW' => 'Pregledaj',
    'LBL_POST_TITLE' => 'Post Status Update for ',
    'LBL_URL_LINK_TITLE' => 'URL Link to use',
);
