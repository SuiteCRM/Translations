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
    'LBL_NAME' => 'नौकरी का नाम',
    'LBL_EXECUTE_TIME' => 'निष्पादन समय',
    'LBL_SCHEDULER_ID' => 'समयबद्धक',
    'LBL_STATUS' => 'नौकरी की स्थिति',
    'LBL_RESOLUTION' => 'परिणाम',
    'LBL_MESSAGE' => 'संदेशों',
    'LBL_DATA' => 'नौकरी डेटा',
    'LBL_REQUEUE' => 'असफल होने पर पुनः प्रयास करें',
    'LBL_RETRY_COUNT' => 'अधिकतम पुनर्प्रयास',
    'LBL_FAIL_COUNT' => 'विफलताओं',
    'LBL_INTERVAL' => 'प्रयासों के बीच न्यूनतम अंतराल',
    'LBL_CLIENT' => 'स्वामित्व ग्राहक',
    'LBL_PERCENT' => 'पूर्ण प्रतिशत',
// Errors
    'ERR_CALL' => "फ़ंक्शन को कॉल नहीं किया जा सकता: %s",
    'ERR_CURL' => "कोई CURL नहीं - URL कार्य नहीं चलाया जा सकता",
    'ERR_FAILED' => "अप्रत्याशित विफलता, कृपया PHP लॉग और suitecrm.log की जाँच करें",
    'ERR_PHP' => "%s [%d]: %s लाइन %d पर %s में",
    'ERR_NOUSER' => "नौकरी के लिए कोई उपयोगकर्ता आईडी निर्दिष्ट नहीं की गई",
    'ERR_NOSUCHUSER' => "उपयोगकर्ता आईडी %s नहीं मिली",
    'ERR_JOBTYPE' => "अज्ञात कार्य प्रकार: %s",
    'ERR_TIMEOUT' => "समय समाप्ति पर जबरन विफलता",
    'ERR_JOB_FAILED_VERBOSE' => 'CRON रन में जॉब %1$s (%2$s) विफल हुआ',
);
