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
    'LBL_ASSIGNED_TO_ID' => 'Id atribuit utilizatorului',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
    'LBL_ID' => 'ID-ul',
    'LBL_DATE_ENTERED' => 'Data creării',
    'LBL_DATE_MODIFIED' => 'Data modificării',
    'LBL_MODIFIED' => 'Modificat de',
    'LBL_MODIFIED_NAME' => 'Nume modificant',
    'LBL_CREATED' => 'Creat De',
    'LBL_DESCRIPTION' => 'Descriere',
    'LBL_DELETED' => 'Şters',
    'LBL_NAME' => 'Nume',
    'LBL_SAVING' => 'Salvare...',
    'LBL_SAVED' => 'Salvat',
    'LBL_CREATED_USER' => 'Creat de Utilizator',
    'LBL_MODIFIED_USER' => 'Modificat de utilizator',
    'LBL_LIST_FORM_TITLE' => 'Listă Fluxuri',
    'LBL_MODULE_NAME' => 'Fluxuri de activitate',
    'LBL_MODULE_TITLE' => 'Fluxuri de activitate',
    'LBL_DASHLET_DISABLED' => 'Atenție: Sistemul de fluxuri este dezactivat, nu vor fi postate intrări noi până când nu este activat',
    'LBL_RECORDS_DELETED' => 'Toate intrările anterioare Feed au fost eliminate, dacă sistemul Feed este activat, noi intrări vor fi generate automat.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Sunteți sigur că doriți să ștergeți toate intrările Feed?',
    'LBL_FLUSH_RECORDS' => 'Șterge intrările din fluxuri',
    'LBL_ENABLE_FEED' => 'Activează Dashlet-ul pentru fluxul meu de activitate',
    'LBL_ENABLE_MODULE_LIST' => 'Activare fluxuri pentru',
    'LBL_HOMEPAGE_TITLE' => 'Fluxul meu de activități',
    'LNK_NEW_RECORD' => 'Creează Flux',
    'LNK_LIST' => 'Flux',
    'LBL_SEARCH_FORM_TITLE' => 'Căutare Flux',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vizualizare Istoric',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_NEW_FORM_TITLE' => 'Flux nou',
    'LBL_ALL' => 'Toate',
    'LBL_USER_FEED' => 'Fluxul utilizatorului',
    'LBL_ENABLE_USER_FEED' => 'Activare Flux Utilizator',
    'LBL_TO' => 'Vizibil echipei',
    'LBL_IS' => 'este',
    'LBL_DONE' => 'Efectuat',
    'LBL_TITLE' => 'Titlu',
    'LBL_ROWS' => 'Rânduri',
    'LBL_CATEGORIES' => 'Modul',
    'LBL_TIME_LAST_WEEK' => 'Săptămâna trecută',
    'LBL_TIME_WEEKS' => 'săptămâni',
    'LBL_TIME_DAYS' => 'zile',
    'LBL_TIME_YESTERDAY' => 'Ieri',
    'LBL_TIME_HOURS' => 'Ore',
    'LBL_TIME_HOUR' => 'Ore',
    'LBL_TIME_MINUTES' => 'Minute',
    'LBL_TIME_MINUTE' => 'Minut',
    'LBL_TIME_SECONDS' => 'Secunde',
    'LBL_TIME_SECOND' => 'Al doilea',
    'LBL_TIME_AND' => 'și',
    'LBL_TIME_AGO' => 'în urmă',
// Activity stream
    'CREATED_CONTACT' => 'a creat un <b>NOU</b> {0}',
    'CREATED_OPPORTUNITY' => 'a creat un <b>NOU</b> {0}',
    'CREATED_CASE' => 'a creat un <b>NOU</b> {0}',
    'CREATED_LEAD' => 'a creat un <b>NOU</b> {0}',
    'FOR' => 'pentru', // Activity stream for cases
    'FOR_AMOUNT' => 'pentru suma', // Activity stream for cases
    'CLOSED_CASE' => '<b>ÎNCHIS</b> a {0} ',
    'CONVERTED_LEAD' => '<b>CONVERTIT</b> a {0}',
    'WON_OPPORTUNITY' => 'a <b>CĂȘTIGAT</b> un {0}',
    'WITH' => 'cu',

    'LBL_LINK_TYPE_Link' => 'Legătură',
    'LBL_LINK_TYPE_Image' => 'Imagine',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Selectaţi',
    'LBL_POST' => 'Postează',
    'LBL_AUTHENTICATE' => 'Conectează-te la',
    'LBL_AUTHENTICATION_PENDING' => 'Nu toate conturile externe pe care le-ați selectat au fost autentificate. Faceți clic pe „Anulați” pentru a reveni la fereastra Opțiuni pentru autentificarea conturilor externe, sau faceți clic pe „Ok” pentru a continua fără autentificare.',
    'LBL_ADVANCED_SEARCH' => 'Filtru Avansat' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Arată mai multe opțiuni',
    'LBL_HIDE_OPTIONS' => 'Ascundeți Opţiuni',
    'LBL_VIEW' => 'Vizualizează',
    'LBL_POST_TITLE' => 'Actualizare Status postare pentru ',
    'LBL_URL_LINK_TITLE' => 'Link URL de utilizat',
);
