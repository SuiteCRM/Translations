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
    'LBL_ASSIGNED_TO_ID' => 'Atsakingo Vartotojo Id',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_ID' => 'Id',
    'LBL_DATE_ENTERED' => 'Sukurta',
    'LBL_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_MODIFIED' => 'Redagavo',
    'LBL_MODIFIED_NAME' => 'Redaguotojo vardas',
    'LBL_CREATED' => 'Sukūrė',
    'LBL_DESCRIPTION' => 'Aprašymas',
    'LBL_DELETED' => 'Ištrintas',
    'LBL_NAME' => 'Vardas',
    'LBL_SAVING' => 'Saugo...',
    'LBL_SAVED' => 'Išsaugotas',
    'LBL_CREATED_USER' => 'Sukūrė vartotojas',
    'LBL_MODIFIED_USER' => 'Redagavo vartotojas',
    'LBL_LIST_FORM_TITLE' => 'SuiteCRM naujienų sąrašas',
    'LBL_MODULE_NAME' => 'SuiteCRM naujienos',
    'LBL_MODULE_TITLE' => 'SuiteCRM naujienos',
    'LBL_DASHLET_DISABLED' => 'Perspėjimas: SuiteCRM naujienos išjungtos, nauji įrašai nebus rodomi, kol naujienos nebus aktyvuotos.',
    'LBL_RECORDS_DELETED' => 'Ankstesnės SuiteCRM naujienos buvo ištrintos. Jei įjungtos SuiteCRM naujienos, nauji įrašai atsiras automatiškai.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Ar Jūs tikrai norite ištrinti visus SuiteCRM naujienų įrašus?',
    'LBL_FLUSH_RECORDS' => 'Ištrinti naujienų įrašus',
    'LBL_ENABLE_FEED' => 'Įjungti SuiteCRM naujienas',
    'LBL_ENABLE_MODULE_LIST' => 'Aktyvuoti naujienas',
    'LBL_HOMEPAGE_TITLE' => 'Mano naujienos',
    'LNK_NEW_RECORD' => 'Sukurti naujienas',
    'LNK_LIST' => 'SuiteCRM naujienos',
    'LBL_SEARCH_FORM_TITLE' => 'Ieškoti naujieną',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Peržiūros istorija',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_NEW_FORM_TITLE' => 'Nauja SuiteCRM naujiena',
    'LBL_ALL' => 'Visi susiję',
    'LBL_USER_FEED' => 'Vartotojo naujienos',
    'LBL_ENABLE_USER_FEED' => 'Įjungti vartotojo naujienas',
    'LBL_TO' => 'Siųsti komandai',
    'LBL_IS' => 'yra',
    'LBL_DONE' => 'Atlikta',
    'LBL_TITLE' => 'Pareigybės',
    'LBL_ROWS' => 'Eilutės',
    'LBL_CATEGORIES' => 'Moduliai:',
    'LBL_TIME_LAST_WEEK' => 'Parėjusią savaitę',
    'LBL_TIME_WEEKS' => 'savaitės',
    'LBL_TIME_DAYS' => 'dienos',
    'LBL_TIME_YESTERDAY' => 'Vakar',
    'LBL_TIME_HOURS' => 'Valanda',
    'LBL_TIME_HOUR' => 'Valanda',
    'LBL_TIME_MINUTES' => 'Minutės',
    'LBL_TIME_MINUTE' => 'Minutė',
    'LBL_TIME_SECONDS' => 'Sekundės',
    'LBL_TIME_SECOND' => 'Sekundė',
    'LBL_TIME_AND' => 'ir',
    'LBL_TIME_AGO' => 'prieš',
// Activity stream
    'CREATED_CONTACT' => 'sukūrė <b>NAUJĄ</b> {0}',
    'CREATED_OPPORTUNITY' => 'sukūrė <b>NAUJĄ</b> {0}',
    'CREATED_CASE' => 'sukūrė <b>NAUJĄ</b> {0}',
    'CREATED_LEAD' => 'sukūrė <b>NAUJĄ</b> {0}',
    'FOR' => 'klientui', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>UŽDARĖ</b> {0} ',
    'CONVERTED_LEAD' => '<b>KONVERTAVO</b> {0}',
    'WON_OPPORTUNITY' => '<b>SĖKMINGAI</b> {0}',
    'WITH' => 'klientui',

    'LBL_LINK_TYPE_Link' => 'Nuoroda',
    'LBL_LINK_TYPE_Image' => 'Paveikslėlis',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Pasirinkite',
    'LBL_POST' => 'Patalpinti',
    'LBL_AUTHENTICATE' => 'Identifikacija',
    'LBL_AUTHENTICATION_PENDING' => 'Ne visi pasirinkti išoriniai elementai buvo autentifikuoti. Paspauskite \'Atšaukti\' norėdami grįžti ir autentifikuoti išorinius prisijungimus arba paspauskite \'Gerai\' ir tęskite.',
    'LBL_ADVANCED_SEARCH' => 'Sudėtingas filtras' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Rodyti daugiau parinkčių',
    'LBL_HIDE_OPTIONS' => 'Slėpti Parinktis',
    'LBL_VIEW' => 'Peržiūrėti',
    'LBL_POST_TITLE' => 'Pranešimo būsenos naujinimas dėl',
    'LBL_URL_LINK_TITLE' => 'URL nuorodą naudoti',
);
