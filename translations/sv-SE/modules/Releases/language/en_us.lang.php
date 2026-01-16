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
    'LBL_MODULE_NAME' => 'Utgåvor',
    'LBL_MODULE_TITLE' => 'Releaser: Hem',
    'LBL_SEARCH_FORM_TITLE' => 'Sök release',
    'LBL_LIST_FORM_TITLE' => 'Lista release',
    'LBL_NEW_FORM_TITLE' => 'Ny release',
    'LBL_RELEASE' => 'Utgåva:',
    'LBL_LIST_NAME' => 'Utgåva',
    'LBL_NAME' => 'Releaseversion:',
    'LBL_LIST_LIST_ORDER' => 'Ordning',
    'LBL_LIST_ORDER' => 'Ordning:',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status:',
    'LNK_NEW_RELEASE' => 'Lista release',
    'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill ta bort denna posten?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'ERR_DELETE_RECORD' => 'Ett objektnummer måste specificeras för att radera releasen.',
    'NTC_STATUS' => 'Sätt statusen till Inaktiv för att ta bort releasen från dropdown menyn',
    'NTC_LIST_ORDER' => 'Sätt ordningen för hur releasen ska visas i dropdown menyn över releaser',
    'release_status_dom' =>
        array(
            'Active' => 'Aktiv',
            'Inactive' => 'Inaktiv',
        ),
    'LBL_EDITLAYOUT' => 'Redigera layout' /*for 508 compliance fix*/,
);
