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
    'LBL_ASSIGNED_TO_ID' => 'ID přiřazeného uživatele',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum vytvoření',
    'LBL_DATE_MODIFIED' => 'Datum změny',
    'LBL_MODIFIED' => 'Změnil',
    'LBL_MODIFIED_NAME' => 'Změněno dle Jména',
    'LBL_CREATED' => 'Vytvořeno',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazáno',
    'LBL_NAME' => 'Název',
    'LBL_SAVING' => 'Ukládání...',
    'LBL_SAVED' => 'Uloženo',
    'LBL_CREATED_USER' => 'Vytvořeno dle Uživatele',
    'LBL_MODIFIED_USER' => 'Změněno dle Uživatele',
    'LBL_LIST_FORM_TITLE' => 'Seznam kanálů',
    'LBL_MODULE_NAME' => 'Proudy aktivit',
    'LBL_MODULE_TITLE' => 'Proudy aktivit',
    'LBL_DASHLET_DISABLED' => 'Upozornění: Feed systém je zakázán, žádné nové položky budou vloženy, dokud nebude systém aktivován.',
    'LBL_RECORDS_DELETED' => 'Všechny předchozí položky kanálu byly odebrány, je-li systém kanálů povolen, nové položky budou generovány automaticky.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Opravdu chcete smazat všechny položky kanálu?',
    'LBL_FLUSH_RECORDS' => 'Odstranit položky Feedu',
    'LBL_ENABLE_FEED' => 'Povolit Dashlet Můj tok aktivit',
    'LBL_ENABLE_MODULE_LIST' => 'Aktivovat Feed pro',
    'LBL_HOMEPAGE_TITLE' => 'Můj tok aktivit',
    'LNK_NEW_RECORD' => 'Vytvořit Feed',
    'LNK_LIST' => 'Kanál',
    'LBL_SEARCH_FORM_TITLE' => 'Hledat Feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_NEW_FORM_TITLE' => 'Nový Feed',
    'LBL_ALL' => 'Všechno',
    'LBL_USER_FEED' => 'Uživatelský feed',
    'LBL_ENABLE_USER_FEED' => 'Aktivovat uživatelský Feed',
    'LBL_TO' => 'Viditelný pro team',
    'LBL_IS' => 'je',
    'LBL_DONE' => 'Hotovo',
    'LBL_TITLE' => 'Nadpis',
    'LBL_ROWS' => 'Řádky',
    'LBL_CATEGORIES' => 'Moduly',
    'LBL_TIME_LAST_WEEK' => 'Minulý týden',
    'LBL_TIME_WEEKS' => 'týdny',
    'LBL_TIME_DAYS' => 'dny',
    'LBL_TIME_YESTERDAY' => 'Včera',
    'LBL_TIME_HOURS' => 'Hodiny',
    'LBL_TIME_HOUR' => 'Hodiny',
    'LBL_TIME_MINUTES' => 'Minuty',
    'LBL_TIME_MINUTE' => 'Minuta',
    'LBL_TIME_SECONDS' => 'Vteřiny',
    'LBL_TIME_SECOND' => 'Vteřina',
    'LBL_TIME_AND' => 'a',
    'LBL_TIME_AGO' => 'před',
// Activity stream
    'CREATED_CONTACT' => 'Vytvořil <b>nový</b> {0}',
    'CREATED_OPPORTUNITY' => 'Vytvořil <b>nový</b> {0}',
    'CREATED_CASE' => 'Vytvořil <b>nový</b> {0}',
    'CREATED_LEAD' => 'Vytvořil <b>nový</b> {0}',
    'FOR' => 'pro', // Activity stream for cases
    'FOR_AMOUNT' => 'pro objem', // Activity stream for cases
    'CLOSED_CASE' => '<b>UZAVŘENO</b> {0} ',
    'CONVERTED_LEAD' => '<b>PŘEVEDENO</b> {0}',
    'WON_OPPORTUNITY' => '<b>VYHRÁL</b> {0}',
    'WITH' => 's',

    'LBL_LINK_TYPE_Link' => 'Odkaz',
    'LBL_LINK_TYPE_Image' => 'Obrázek',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Vybrat',
    'LBL_POST' => 'Zveřejni',
    'LBL_AUTHENTICATE' => 'Ověřit',
    'LBL_AUTHENTICATION_PENDING' => 'Ne všechny externí učty které jste vybral jsou ověřeny. Klikněte \'Zrušit\' na návrat do okna Možností pro ověření těchto externích účtů nebo \'OK\' pro pokračování bez ověření.',
    'LBL_ADVANCED_SEARCH' => 'Rozšířený filtr' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Zobrazit další volby',
    'LBL_HIDE_OPTIONS' => 'Skrýt možnosti',
    'LBL_VIEW' => 'Zobrazit',
    'LBL_POST_TITLE' => 'Aktualizace stavu příspěvku pro ',
    'LBL_URL_LINK_TITLE' => 'URL odkaz k použití',
);
