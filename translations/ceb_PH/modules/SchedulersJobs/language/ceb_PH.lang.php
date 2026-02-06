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
    'LBL_NAME' => 'Pangalan sa trabaho',
    'LBL_EXECUTE_TIME' => 'Paghuman sa Oras',
    'LBL_SCHEDULER_ID' => 'Tig-iskedyul',
    'LBL_STATUS' => 'Estado sa Trabaho',
    'LBL_RESOLUTION' => 'Resulta',
    'LBL_MESSAGE' => 'Mga Mensahe',
    'LBL_DATA' => 'Datos sa Trabaho',
    'LBL_REQUEUE' => 'Pagsuway og balik sa kapakyas',
    'LBL_RETRY_COUNT' => 'Kinatas-an na mga pagsuway og balik',
    'LBL_FAIL_COUNT' => 'Mga Kapakyas',
    'LBL_INTERVAL' => 'Kinakubsan na lab-ang tali sa mga pagsuway og balik',
    'LBL_CLIENT' => 'Panag-iya sa kliyente',
    'LBL_PERCENT' => 'Porsiyento na kompleto',
// Errors
    'ERR_CALL' => "Dili mogana ang tawag: %s",
    'ERR_CURL' => "Walay CURL - dili madagan ang URL na mga trabaho",
    'ERR_FAILED' => "Wala damha na kapakyasan, palihug pagtan-aw sa PHP na mga log og suitecrm.log",
    'ERR_PHP' => "%s [%d]:%s sa %s naa sa linya %d",
    'ERR_NOUSER' => "Walay ID sa Tiggamit ang nabungat para sa trabaho",
    'ERR_NOSUCHUSER' => "ID sa Tiggamit %s wala nakit-an",
    'ERR_JOBTYPE' => "Dili maila nga tipo sa trabaho: %s",
    'ERR_TIMEOUT' => "Napugos na kapakyas nag timeout",
    'ERR_JOB_FAILED_VERBOSE' => 'Trabaho %1$s (%2$s) napakyas sa CRON og andar',
);
