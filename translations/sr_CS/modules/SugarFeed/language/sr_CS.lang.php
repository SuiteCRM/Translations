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
    'LBL_ASSIGNED_TO_ID' => 'ID broj dodeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen',
    'LBL_ID' => 'ID broj',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmene',
    'LBL_MODIFIED' => 'Izmenio',
    'LBL_MODIFIED_NAME' => 'Promenio',
    'LBL_CREATED' => 'Autor',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Obrisan',
    'LBL_NAME' => 'Ime',
    'LBL_SAVING' => 'Čuvanje ...',
    'LBL_SAVED' => 'Sačuvano',
    'LBL_CREATED_USER' => 'Autor je korisnik',
    'LBL_MODIFIED_USER' => 'Promenio korisnik',
    'LBL_LIST_FORM_TITLE' => 'Lista Feed-ova',
    'LBL_MODULE_NAME' => 'Tokovi aktivnosti',
    'LBL_MODULE_TITLE' => 'Tokovi aktivnosti',
    'LBL_DASHLET_DISABLED' => 'Upozorenje: SuiteCRM-ov Feed sistem je onemogućen, novi feed unosi neće biti istaknuti dok sistem nije aktiviran',
    'LBL_RECORDS_DELETED' => 'Svi prethodni SuiteCRMFeed unosi su uklonjeni, ako je SuiteCRMFeed sistem is omogućen, novi unosi će biti generisani automatski.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Da li ste sigurni da želite da obrišete sve SuiteCRM Feed unose?',
    'LBL_FLUSH_RECORDS' => 'Obrišite Feed unose',
    'LBL_ENABLE_FEED' => 'Omogući SuiteCRM Feed',
    'LBL_ENABLE_MODULE_LIST' => 'Aktiviraj Feed-ove za',
    'LBL_HOMEPAGE_TITLE' => 'Moji SuiteCRM-Feed-ovi',
    'LNK_NEW_RECORD' => 'Napravi Feed',
    'LNK_LIST' => 'Feed',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraži SuiteCRMFeed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregled istorije',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_NEW_FORM_TITLE' => 'Novi Feed',
    'LBL_ALL' => 'Svi',
    'LBL_USER_FEED' => 'Korisnički Feed',
    'LBL_ENABLE_USER_FEED' => 'Aktiviraj Korisnički Feed',
    'LBL_TO' => 'Pošalji timu',
    'LBL_IS' => 'je',
    'LBL_DONE' => 'Obavljeno',
    'LBL_TITLE' => 'Naslov',
    'LBL_ROWS' => 'Redovi',
    'LBL_CATEGORIES' => 'Moduli',
    'LBL_TIME_LAST_WEEK' => 'Poslednja nedelja',
    'LBL_TIME_WEEKS' => 'nedelje',
    'LBL_TIME_DAYS' => 'dana',
    'LBL_TIME_YESTERDAY' => 'Juče',
    'LBL_TIME_HOURS' => 'Sati',
    'LBL_TIME_HOUR' => 'Sati',
    'LBL_TIME_MINUTES' => 'Minuta',
    'LBL_TIME_MINUTE' => 'Minut',
    'LBL_TIME_SECONDS' => 'Sekundi',
    'LBL_TIME_SECOND' => 'Sekunda',
    'LBL_TIME_AND' => 'i',
    'LBL_TIME_AGO' => 'pre',
// Activity stream
    'CREATED_CONTACT' => 'je kreirao <b>NOVU</b> {0}',
    'CREATED_OPPORTUNITY' => 'je kreirao <b>NOVU</b> {0}',
    'CREATED_CASE' => 'je kreirao <b>NOVU</b> {0}',
    'CREATED_LEAD' => 'je kreirao <b>NOVU</b> {0}',
    'FOR' => 'za', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => 'je <b>ZATVORIO</b> {0} ',
    'CONVERTED_LEAD' => 'je <b>KONVERTOVAO</b> {0}',
    'WON_OPPORTUNITY' => 'je <b>DOBIO</b> {0}',
    'WITH' => 'sa',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Slika',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Izaberi',
    'LBL_POST' => 'Objava',
    'LBL_AUTHENTICATE' => 'Konektuj sa',
    'LBL_AUTHENTICATION_PENDING' => 'Nisu svi spoljni nalozi uspeli biti ulogovani. Pritisnite Otkaži da se vratite na prozor Opcije kako biste se ulogovali na spoljne naloge, ili Ok kako biste nastavili bez logovanja.',
    'LBL_ADVANCED_SEARCH' => 'Napredni filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Prikaži više opcija',
    'LBL_HIDE_OPTIONS' => 'Sakrij Opcije',
    'LBL_VIEW' => 'Pregledaj',
    'LBL_POST_TITLE' => 'Stavite status za ',
    'LBL_URL_LINK_TITLE' => 'URL link koji se koristi',
);
