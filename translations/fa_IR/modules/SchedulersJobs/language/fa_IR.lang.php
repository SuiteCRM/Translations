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
    'LBL_NAME' => 'نام کار',
    'LBL_EXECUTE_TIME' => 'زمان اجرا',
    'LBL_SCHEDULER_ID' => 'برنامه‌ریز',
    'LBL_STATUS' => 'وضعیت کار',
    'LBL_RESOLUTION' => 'نتیجه',
    'LBL_MESSAGE' => 'پیام‌ها',
    'LBL_DATA' => 'داده‌های کار',
    'LBL_REQUEUE' => 'در صورت شکست دوباره تلاش کن',
    'LBL_RETRY_COUNT' => 'حداکثر تعداد تلاش‌های مجدد',
    'LBL_FAIL_COUNT' => 'شکست‌ها',
    'LBL_INTERVAL' => 'حداقل فاصله بین تلاش می کند',
    'LBL_CLIENT' => 'داشتن مشتری',
    'LBL_PERCENT' => 'درصد تکمیل',
// Errors
    'ERR_CALL' => "Cannot call function: %s",
    'ERR_CURL' => "No CURL - cannot run URL jobs",
    'ERR_FAILED' => "Unexpected failure, please check PHP logs and suitecrm.log",
    'ERR_PHP' => "%s [%d]: %s در %s در خط %d",
    'ERR_NOUSER' => "برای این کار هیچ شناسه کاربری مشخص نشده",
    'ERR_NOSUCHUSER' => "شناسه کاربری %s یافت نشد",
    'ERR_JOBTYPE' => "نوع ناشناخته کار: %s",
    'ERR_TIMEOUT' => "Forced failure on timeout",
    'ERR_JOB_FAILED_VERBOSE' => 'Job %1$s (%2$s) failed in CRON run',
);
