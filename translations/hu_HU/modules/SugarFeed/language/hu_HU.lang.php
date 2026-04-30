<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó ID',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Létrehozva',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Létrehozta',
    'LBL_DESCRIPTION' => 'Üzenet tartalma',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Név',
    'LBL_SAVING' => 'Saving...',
    'LBL_SAVED' => 'Saved',
    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
    'LBL_LIST_FORM_TITLE' => 'Hírcsatorna lista',
    'LBL_MODULE_NAME' => 'Hírcsatorna',
    'LBL_MODULE_TITLE' => 'Activity Streams',
    'LBL_DASHLET_DISABLED' => 'Figyelem: A SuiteCRM-hírcsatorna rendszer tiltva van, új bejegyzés nem olvasható, amíg aktív.',
    'LBL_RECORDS_DELETED' => 'Minden korábbi SuiteCRM-hírcsatorna bejegyzés eltávolításra került, ha engedélyezve van, az új bejegyzések automatikusan generálódnak.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Biztosan törölni akarja a SuiteCRM-hírcsatorna bejegyzéseket?',
    'LBL_FLUSH_RECORDS' => 'Hírcsatorna bejegyzések törlése',
    'LBL_ENABLE_FEED' => 'Hírcsatorna engedélyezése',
    'LBL_ENABLE_MODULE_LIST' => 'Csatorna aktiválás',
    'LBL_HOMEPAGE_TITLE' => 'Tevékenység stream',
    'LNK_NEW_RECORD' => 'Csatorna létrehozás',
    'LNK_LIST' => 'Hírcsatorna',
    'LBL_SEARCH_FORM_TITLE' => 'Csatorna keresés',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmény Megtekintése',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Új csatorna',
    'LBL_ALL' => 'All',
    'LBL_USER_FEED' => 'Felhasználó csatorna',
    'LBL_ENABLE_USER_FEED' => 'Felhasználói csatorna aktiválás',
    'LBL_TO' => 'Látható a Csapatnak',
    'LBL_IS' => 'van',
    'LBL_DONE' => 'Done',
    'LBL_TITLE' => 'Megnevezés',
    'LBL_ROWS' => 'Rows',
    'LBL_CATEGORIES' => 'Modules',
    'LBL_TIME_LAST_WEEK' => 'Last Week',
    'LBL_TIME_WEEKS' => 'hét',
    'LBL_TIME_DAYS' => 'days',
    'LBL_TIME_YESTERDAY' => 'Yesterday',
    'LBL_TIME_HOURS' => 'Hours',
    'LBL_TIME_HOUR' => 'Hours',
    'LBL_TIME_MINUTES' => 'Minutes',
    'LBL_TIME_MINUTE' => 'Perc',
    'LBL_TIME_SECONDS' => 'Másodpercek',
    'LBL_TIME_SECOND' => 'Másodperc',
    'LBL_TIME_AND' => 'és',
    'LBL_TIME_AGO' => 'ezelőtt',
// Activity stream
    'CREATED_CONTACT' => 'egy <b>ÚJ</b> {0} létrehozva',
    'CREATED_OPPORTUNITY' => 'egy <b>ÚJ</b> {0} létrehozva',
    'CREATED_CASE' => 'egy <b>ÚJ</b> {0} létrehozva',
    'CREATED_LEAD' => 'egy <b>ÚJ</b> {0} létrehozva',
    'FOR' => 'számára', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>Lezárt</b> a {0} ',
    'CONVERTED_LEAD' => '<b>Konvertált</b> a {0}',
    'WON_OPPORTUNITY' => 'már <b>nyert</b> egy {0}',
    'WITH' => 'vele',

    'LBL_LINK_TYPE_Link' => 'Hivatkozás',
    'LBL_LINK_TYPE_Image' => 'Image',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Válassza ki',
    'LBL_POST' => 'Post',
    'LBL_AUTHENTICATE' => 'Kapcsolódik',
    'LBL_AUTHENTICATION_PENDING' => 'Az Ön által kijelölt külső fiókok között van olyan, amely nem hitelesített. Kattintson a "Mégsem" gombra az Opciók ablakba a külső fiókok hitelesítéséhez, vagy az "OK" gombra a folytatáshoz hitelesítés nélkül.',
    'LBL_ADVANCED_SEARCH' => 'Speciális szűrő' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'További lehetőségek',
    'LBL_HIDE_OPTIONS' => 'Hide Options',
    'LBL_VIEW' => 'View',
    'LBL_POST_TITLE' => 'Post állapot-frissítéséhez ',
    'LBL_URL_LINK_TITLE' => 'URL link',
);
