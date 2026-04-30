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
    'LBL_NAME' => 'Pangalang ng trabaho',
    'LBL_EXECUTE_TIME' => 'Magsagawa ng oras',
    'LBL_SCHEDULER_ID' => 'Scheduler',
    'LBL_STATUS' => 'Ang estado ng trabaho',
    'LBL_RESOLUTION' => 'Resulta',
    'LBL_MESSAGE' => 'Mga Mensahe',
    'LBL_DATA' => 'Datus ng trabaho',
    'LBL_REQUEUE' => 'Subukan sa pagkabigo',
    'LBL_RETRY_COUNT' => 'Pinakamataas na muling pagsubok',
    'LBL_FAIL_COUNT' => 'Mga kasawian',
    'LBL_INTERVAL' => 'Pinakamababang agwat sa pagitan ng mga pagsubok',
    'LBL_CLIENT' => 'Pagmamay-ari ng kliyente',
    'LBL_PERCENT' => 'Nakumpleto na porsiyento',
// Errors
    'ERR_CALL' => "Tungkulin ng hindi maaaring pagtawag: %s",
    'ERR_CURL' => "Walang CURL - hindi maaaring patakbuhin ang mga trabaho sa URL",
    'ERR_FAILED' => "Hindi inaasahang kabiguan, mangyaring suriin ang PHP logs at suitecrm.log",
    'ERR_PHP' => "%s [%d]: %s in %s sa linya %d",
    'ERR_NOUSER' => "Walang ID ng gumagamit ang natukoy para sa trabaho",
    'ERR_NOSUCHUSER' => "ID ng gumagamit %s hindi nahanap",
    'ERR_JOBTYPE' => "Hindi kilalang uri ng trabaho: %s",
    'ERR_TIMEOUT' => "Pinuwersang kabiguan sa timeout",
    'ERR_JOB_FAILED_VERBOSE' => 'Trabaho %1$s (%2$s) nabigo sa pagtakbo ng CRON',
);
