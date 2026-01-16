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
    'LBL_ASSIGNED_TO_ID' => 'Tilldelat användar-id',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum Skapad',
    'LBL_DATE_MODIFIED' => 'Datum Ändrad',
    'LBL_MODIFIED' => 'Ändrad av',
    'LBL_MODIFIED_NAME' => 'Ändrad av Namn',
    'LBL_CREATED' => 'Skapad av',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_DELETED' => 'Raderad',
    'LBL_NAME' => 'Namn',
    'LBL_SAVING' => 'Sparar ...',
    'LBL_SAVED' => 'Sparad',
    'LBL_CREATED_USER' => 'Skapad av Användare',
    'LBL_MODIFIED_USER' => 'Ändrad av Användare',
    'LBL_LIST_FORM_TITLE' => 'Feed lista',
    'LBL_MODULE_NAME' => 'Feed',
    'LBL_MODULE_TITLE' => 'Feed',
    'LBL_DASHLET_DISABLED' => 'Varning: Feed systemet är inaktiverat, inga nya matnings inlägg kommer att postas tills den blir aktiverad.',
    'LBL_RECORDS_DELETED' => 'Alla tidigare Feed inlägg har tagits bort, om SuiteCRM Feed system är aktiverat kommer nya inlägg att genereras automatiskt.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Är du säker på att du vill ta bort alla SuiteCRM Feed inlägg?',
    'LBL_FLUSH_RECORDS' => 'Radera matnings inlägg',
    'LBL_ENABLE_FEED' => 'AktiveraFeed',
    'LBL_ENABLE_MODULE_LIST' => 'Aktivera matningar för',
    'LBL_HOMEPAGE_TITLE' => 'Mina Feed',
    'LNK_NEW_RECORD' => 'Skapa Feed',
    'LNK_LIST' => 'Flöde',
    'LBL_SEARCH_FORM_TITLE' => 'Sök Feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visa historik',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_NEW_FORM_TITLE' => 'Nya Feed',
    'LBL_ALL' => 'Alla',
    'LBL_USER_FEED' => 'Användar matning',
    'LBL_ENABLE_USER_FEED' => 'Aktivera användar matning',
    'LBL_TO' => 'Skicka till team',
    'LBL_IS' => 'är',
    'LBL_DONE' => 'Klart',
    'LBL_TITLE' => 'Rubrik',
    'LBL_ROWS' => 'Rader',
    'LBL_CATEGORIES' => 'Modul',
    'LBL_TIME_LAST_WEEK' => 'Förra veckan',
    'LBL_TIME_WEEKS' => 'veckor',
    'LBL_TIME_DAYS' => 'dagar',
    'LBL_TIME_YESTERDAY' => 'Igår',
    'LBL_TIME_HOURS' => 'Timmar',
    'LBL_TIME_HOUR' => 'Timmar',
    'LBL_TIME_MINUTES' => 'Minuter',
    'LBL_TIME_MINUTE' => 'Minut',
    'LBL_TIME_SECONDS' => 'Sekunder',
    'LBL_TIME_SECOND' => 'Sekund',
    'LBL_TIME_AND' => 'och',
    'LBL_TIME_AGO' => 'sedan',
// Activity stream
    'CREATED_CONTACT' => 'created a <b>NEW</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new contact"
    'CREATED_OPPORTUNITY' => 'created a <b>NEW</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new opportunity"
    'CREATED_CASE' => 'created a <b>NEW</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new case"
    'CREATED_LEAD' => 'created a <b>NEW</b> {0}', // For fusional (inflected) languages: used in sentence "Administrator created a new lead"
    'FOR' => 'för', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>STÄNGDE</b> en {0} ',
    'CONVERTED_LEAD' => '<b>KONVERTERADE</b> en {0}',
    'WON_OPPORTUNITY' => 'has <b>WON</b> an {0}',
    'WITH' => 'med',

    'LBL_LINK_TYPE_Link' => 'Länka',
    'LBL_LINK_TYPE_Image' => 'Bild',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Markera',
    'LBL_POST' => 'Skicka',
    'LBL_AUTHENTICATE' => 'Anslut till',
    'LBL_AUTHENTICATION_PENDING' => 'Not all of the external accounts you have selected have been authenticated. Click \'Cancel\' to return to the Options window to authenticate the external accounts, or click \'Ok\' to proceed without authenticating.',
    'LBL_ADVANCED_SEARCH' => 'Avancerat filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Visa fler alternativ',
    'LBL_HIDE_OPTIONS' => 'Dölj alternativ',
    'LBL_VIEW' => 'Visa',
    'LBL_POST_TITLE' => 'Posta statusuppdatering för ',
    'LBL_URL_LINK_TITLE' => 'URL-länk att använda',
);
