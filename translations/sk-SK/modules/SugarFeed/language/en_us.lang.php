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
    'LBL_ASSIGNED_TO_ID' => 'Priradené ID používateľa',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Dátum vytvorenia',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy',
    'LBL_MODIFIED' => 'Upravil',
    'LBL_MODIFIED_NAME' => 'Upravil',
    'LBL_CREATED' => 'Vytvoril',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazané',
    'LBL_NAME' => 'Meno',
    'LBL_SAVING' => 'Ukladanie ......',
    'LBL_SAVED' => 'Uložené',
    'LBL_CREATED_USER' => 'Vytvoril',
    'LBL_MODIFIED_USER' => 'Upravil',
    'LBL_LIST_FORM_TITLE' => 'Zoznam kanálov',
    'LBL_MODULE_NAME' => 'Prúdy aktivít',
    'LBL_MODULE_TITLE' => 'Prúdy aktivít',
    'LBL_DASHLET_DISABLED' => 'Upozornenie: Systém noviniek je vypnutý, nebudú zverejnené žiadne novinky, dokiaľ nebude aktivovaný',
    'LBL_RECORDS_DELETED' => 'Všetky predchádzajúce položky boli odstránené, ak je systém noviniek aktivovaný, nové položky budú vytvorené automaticky.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Naozaj chcete odstrániť všetky položky noviniek?',
    'LBL_FLUSH_RECORDS' => 'Odstrániť položky noviniek',
    'LBL_ENABLE_FEED' => 'Povoliť podpanel Môj tok aktivít',
    'LBL_ENABLE_MODULE_LIST' => 'Aktivovať kanály pre',
    'LBL_HOMEPAGE_TITLE' => 'Môj tok aktivít',
    'LNK_NEW_RECORD' => 'Vytvoriť novinku',
    'LNK_LIST' => 'Feed',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadať novinku',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zobraziť Históriu',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_NEW_FORM_TITLE' => 'Nová novinka',
    'LBL_ALL' => 'Všetko',
    'LBL_USER_FEED' => 'Užívateľská novinka',
    'LBL_ENABLE_USER_FEED' => 'Aktivovať užívateľskú novinku',
    'LBL_TO' => 'Viditeľné pre tím',
    'LBL_IS' => 'je',
    'LBL_DONE' => 'Dokončené',
    'LBL_TITLE' => 'Titul',
    'LBL_ROWS' => 'Riadky',
    'LBL_CATEGORIES' => 'Moduly',
    'LBL_TIME_LAST_WEEK' => 'Posledný týždeň',
    'LBL_TIME_WEEKS' => 'týždne',
    'LBL_TIME_DAYS' => 'dni',
    'LBL_TIME_YESTERDAY' => 'Včera',
    'LBL_TIME_HOURS' => 'Hodiny',
    'LBL_TIME_HOUR' => 'Hodiny',
    'LBL_TIME_MINUTES' => 'Minúty',
    'LBL_TIME_MINUTE' => 'Minúta',
    'LBL_TIME_SECONDS' => 'Sekundy',
    'LBL_TIME_SECOND' => 'Skunda',
    'LBL_TIME_AND' => 'a',
    'LBL_TIME_AGO' => 'pred',
// Activity stream
    'CREATED_CONTACT' => 'vytvoril <b>novú</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new contact"
    'CREATED_OPPORTUNITY' => 'vytvoril <b>novú</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new opportunity"
    'CREATED_CASE' => 'vytvoril <b>novú</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new case"
    'CREATED_LEAD' => 'vytvoril <b>novú</b> {0}', // For fusional (inflected) languages: used in sentence "Administrator created a new lead"
    'FOR' => 'pre', // Activity stream for cases
    'FOR_AMOUNT' => 'za čiastku', // Activity stream for cases
    'CLOSED_CASE' => 'UZAVRETÉ <b></b> {0} ',
    'CONVERTED_LEAD' => 'PREVEDENÉ <b></b> {0}',
    'WON_OPPORTUNITY' => '<b>VÝHRA</b> {0}',
    'WITH' => 's',

    'LBL_LINK_TYPE_Link' => 'Odkaz',
    'LBL_LINK_TYPE_Image' => 'Obrázok',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Výber',
    'LBL_POST' => 'Zverejniť',
    'LBL_AUTHENTICATE' => 'Pripojiť k',
    'LBL_AUTHENTICATION_PENDING' => 'Neboli overené všetky vybraté externé účty. Kliknite na tlačidlo "Zrušiť", ak sa chcete vrátiť do okna Možnosti overenia externých účtov, alebo kliknite na "OK" pre pokračovanie bez overovania.',
    'LBL_ADVANCED_SEARCH' => 'Rozšírený filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Zobraziť viac možností',
    'LBL_HIDE_OPTIONS' => 'Skryť možnosti',
    'LBL_VIEW' => 'Zobraziť',
    'LBL_POST_TITLE' => 'Aktualizácia stavu príspevku pre ',
    'LBL_URL_LINK_TITLE' => 'URL na použitie',
);
