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
    'LBL_NAME' => 'Առաջադրանք',
    'LBL_EXECUTE_TIME' => 'Կատարման ժամանակը',
    'LBL_SCHEDULER_ID' => 'Պլանավորող',
    'LBL_STATUS' => 'Առաջադրանքի կարգավիճակը',
    'LBL_RESOLUTION' => 'Արդյունք',
    'LBL_MESSAGE' => 'Հաղորդագրություններ',
    'LBL_DATA' => 'Աշխատանքի տվյալներ',
    'LBL_REQUEUE' => 'Կրկին փորձել խափանման դեպքում',
    'LBL_RETRY_COUNT' => 'Կրկին փորձերի քանակը',
    'LBL_FAIL_COUNT' => 'Ձախողումներ',
    'LBL_INTERVAL' => 'Մինիմալ ինտերվալը փորձերի միջև',
    'LBL_CLIENT' => 'Սեփականատեր կլիենտ',
    'LBL_PERCENT' => 'Կատարման տոկոսը',
// Errors
    'ERR_CALL' => "Հնարավոր չէ զանգահարել ֆունկցիան․ %s",
    'ERR_CURL' => "CURL տեղադրված չէ - հնարավոր չէ մեկնարկել առաջադրանքները",
    'ERR_FAILED' => "Անսպասելի ձախողում։ Խնդրում ենք ստուգել PHP logs և suitecrm.log",
    'ERR_PHP' => "%s [%d]: %s մեջ %s տողի %d մեջ",
    'ERR_NOUSER' => "Օգտագործողի ID-ն նշված չէ տվյալ առաջադրանքի համար",
    'ERR_NOSUCHUSER' => "Օգտագործողի ID-ն %s չի հայտնաբերվել",
    'ERR_JOBTYPE' => "Առաջադրանքի անհայտ տեսակ: %s",
    'ERR_TIMEOUT' => "Հարկադրված ձախողում Timeout",
    'ERR_JOB_FAILED_VERBOSE' => 'Առաջադրանքը %1$s (%2$s) չհաջողվեց կատարել, նշված CRON-ում',
);
