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
    'LBL_ASSIGNED_TO_ID' => 'Tildelt brugerID',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Oprettelsesdato',
    'LBL_DATE_MODIFIED' => 'Ændret dato',
    'LBL_MODIFIED' => 'Ændret af',
    'LBL_MODIFIED_NAME' => 'Ændret af navn',
    'LBL_CREATED' => 'Oprettet af',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_DELETED' => 'Slettet',
    'LBL_NAME' => 'Navn',
    'LBL_SAVING' => 'Gemmer...',
    'LBL_SAVED' => 'Gemt',
    'LBL_CREATED_USER' => 'Oprettet af bruger',
    'LBL_MODIFIED_USER' => 'Ændret af bruger',
    'LBL_LIST_FORM_TITLE' => 'Feed-liste',
    'LBL_MODULE_NAME' => 'Feed',
    'LBL_MODULE_TITLE' => 'Feed',
    'LBL_DASHLET_DISABLED' => 'Advarsel: Feed-systemet er deaktiveret. Der anbringes ingen nye feedposter, før det er aktiveret',
    'LBL_RECORDS_DELETED' => 'Alle tidligere Feed-poster er fjernet. Hvis Feed-systemet aktiveres, genereres der automatisk nye poster.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Er du sikker på, at du vil slette alle Feed-posterne?',
    'LBL_FLUSH_RECORDS' => 'Slet feedposter',
    'LBL_ENABLE_FEED' => 'Aktivér Feed',
    'LBL_ENABLE_MODULE_LIST' => 'Aktivér feeds for',
    'LBL_HOMEPAGE_TITLE' => 'Min Feed',
    'LNK_NEW_RECORD' => 'Opret Feed',
    'LNK_LIST' => 'Feed',
    'LBL_SEARCH_FORM_TITLE' => 'Søg efter Feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vis historik',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_NEW_FORM_TITLE' => 'Ny Feed',
    'LBL_ALL' => 'Alle',
    'LBL_USER_FEED' => 'Brugerfeed',
    'LBL_ENABLE_USER_FEED' => 'Aktivér brugerfeed',
    'LBL_TO' => 'Send til',
    'LBL_IS' => 'er',
    'LBL_DONE' => 'Udført',
    'LBL_TITLE' => 'Titel',
    'LBL_ROWS' => 'Rækker',
    'LBL_CATEGORIES' => 'Moduler',
    'LBL_TIME_LAST_WEEK' => 'Sidste uge',
    'LBL_TIME_WEEKS' => 'uger',
    'LBL_TIME_DAYS' => 'dage',
    'LBL_TIME_YESTERDAY' => 'I går',
    'LBL_TIME_HOURS' => 'Timer',
    'LBL_TIME_HOUR' => 'Timer',
    'LBL_TIME_MINUTES' => 'Minutter',
    'LBL_TIME_MINUTE' => 'Minut',
    'LBL_TIME_SECONDS' => 'Sekunder',
    'LBL_TIME_SECOND' => 'Sekund',
    'LBL_TIME_AND' => 'og',
    'LBL_TIME_AGO' => 'siden',
// Activity stream
    'CREATED_CONTACT' => 'created a <b>NEW</b> {0}',
    'CREATED_OPPORTUNITY' => 'created a <b>NEW</b> {0}',
    'CREATED_CASE' => 'created a <b>NEW</b> {0}',
    'CREATED_LEAD' => 'created a <b>NEW</b> {0}',
    'FOR' => 'til', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>CLOSED</b> a {0} ',
    'CONVERTED_LEAD' => '<b>CONVERTED</b> a {0}',
    'WON_OPPORTUNITY' => 'has <b>WON</b> an {0}',
    'WITH' => 'med',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Billede',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Vælg',
    'LBL_POST' => 'Send',
    'LBL_AUTHENTICATE' => 'Godkend',
    'LBL_AUTHENTICATION_PENDING' => 'Ikke alle af de eksterne konti, du har valgt, er blevet godkendt. Klik på \'Annuller\' for at vende tilbage til vinduet for at godkende de eksterne konti eller klik på \'Ok\' for at fortsætte uden godkendelse.',
    'LBL_ADVANCED_SEARCH' => 'Avanceret filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Show More Options',
    'LBL_HIDE_OPTIONS' => 'Skjul indstillinger',
    'LBL_VIEW' => 'Se',
    'LBL_POST_TITLE' => 'Post Status Update for ',
    'LBL_URL_LINK_TITLE' => 'URL Link to use',
);
