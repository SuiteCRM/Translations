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
    'LBL_NAME' => 'Uzdevuma nosaukums',
    'LBL_EXECUTE_TIME' => 'Izpildes laiks',
    'LBL_SCHEDULER_ID' => 'Plānotājs',
    'LBL_STATUS' => 'Uzdevuma statuss',
    'LBL_RESOLUTION' => 'Rezultāts',
    'LBL_MESSAGE' => 'Ziņojumi',
    'LBL_DATA' => 'Uzdevuma dati',
    'LBL_REQUEUE' => 'Atkārtot ja neizdodas',
    'LBL_RETRY_COUNT' => 'Maksimālais atkārtojumu skaits',
    'LBL_FAIL_COUNT' => 'Neizdošanās',
    'LBL_INTERVAL' => 'Minimālais intervāls starp mēģinājumiem',
    'LBL_CLIENT' => 'Klients',
    'LBL_PERCENT' => 'Pabeigtības procents',
// Errors
    'ERR_CALL' => "Nevar izsaukt funkciju: %s",
    'ERR_CURL' => "Nav pieejams komandrindas rīks (CURL) URL uzdevumu izpildei",
    'ERR_FAILED' => "Negaidīta kļūda, pārbaudiet PHP un SuiteCRM žurnālus",
    'ERR_PHP' => "%s [%d]: %s ir %s rindā %d",
    'ERR_NOUSER' => "Uzdevumam nav norādīts lietotāja ID",
    'ERR_NOSUCHUSER' => "Lietotāja ID %s netika atrasts",
    'ERR_JOBTYPE' => "Nezināms uzdevuma tips: %s",
    'ERR_TIMEOUT' => "Laika limita izsīkuma kļūda",
    'ERR_JOB_FAILED_VERBOSE' => 'Uzdevums %1$s (%2$s) neizpildījās CRON sesijā',
);
