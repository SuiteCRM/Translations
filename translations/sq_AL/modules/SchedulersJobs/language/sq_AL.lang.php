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
    'LBL_NAME' => 'Emri i punës',
    'LBL_EXECUTE_TIME' => 'koha e ekzekutimit',
    'LBL_SCHEDULER_ID' => 'Planifikuesit',
    'LBL_STATUS' => 'Statusi i punës',
    'LBL_RESOLUTION' => 'Result',
    'LBL_MESSAGE' => 'Mesazhe',
    'LBL_DATA' => 'Të dhënat e punës',
    'LBL_REQUEUE' => 'Përsëritje e dështimit',
    'LBL_RETRY_COUNT' => 'Përpjekjet maksimale',
    'LBL_FAIL_COUNT' => 'Dështimet',
    'LBL_INTERVAL' => 'Intervali minimal mes përpjekjeve',
    'LBL_CLIENT' => 'Klient i pronësuar',
    'LBL_PERCENT' => 'Përqindje e përfunduar',
// Errors
    'ERR_CALL' => "Nuk mund të thir funksionin: %s",
    'ERR_CURL' => "Nu ka CURL - nuk mund të drejtoj punë të URL",
    'ERR_FAILED' => "Dështim i papritur, ju lutemi kontrolloni hyrjet PHP dhe suitecrm.log",
    'ERR_PHP' => "%s [%d]: %s në %s në linje %d",
    'ERR_NOUSER' => "Nuk ka ID të specifikuar të përdoruesit për këtë punë.",
    'ERR_NOSUCHUSER' => "ID e përdoruesit %s nuk është gjetur",
    'ERR_JOBTYPE' => "Lloj i panjohur i punës.%s",
    'ERR_TIMEOUT' => "Dështim i detyruar në kufikohor",
    'ERR_JOB_FAILED_VERBOSE' => 'Puna %1$s (%2$s) dështoi në drejtim të CRON',
);
