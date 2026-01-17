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
    'LBL_ASSIGNED_TO_ID' => 'පවරා පරිශීලක අංකය',
    'LBL_ASSIGNED_TO_NAME' => 'පවරා',
    'LBL_ID' => 'හැඳු.',
    'LBL_DATE_ENTERED' => 'සෑදූ දිනය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_MODIFIED' => ' වන විට නවීකරණය කරන ලද',
    'LBL_MODIFIED_ID' => ' සසර වන විට නවීකරණය කරන ලද',
    'LBL_MODIFIED_NAME' => ' නම වන විට නවීකරණය කරන ලද',
    'LBL_CREATED' => 'සෑදුවේ',
    'LBL_CREATED_ID' => ' මගෙන් විසින් නිර්මාණය කරන',
    'LBL_DESCRIPTION' => 'විස්තරය',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_NAME' => 'කාර්ය සාධක නම',
    'LBL_CREATED_USER' => ' පරිශීලක විසින් නිර්මාණය',
    'LBL_MODIFIED_USER' => ' පරිශීලක විසින් නවීකරණය කරන ලද',
    'LBL_LIST_NAME' => 'නම',
    'LBL_EDIT_BUTTON' => 'සංස්කරණය',
    'LBL_REMOVE' => 'ඉවත් කරන්න',
    'LBL_LIST_FORM_TITLE' => 'ව්යාපෘති කාර්ය සාධක ආකෘති ලැයිස්තුව',
    'LBL_MODULE_NAME' => 'ව්යාපෘති කාර්ය සාධක ආකෘති',
    'LBL_MODULE_TITLE' => 'ව්යාපෘති කාර්ය සාධක ආකෘති',
    'LBL_HOMEPAGE_TITLE' => 'මගේ ව්යාපෘතිය කාර්ය සාධක ආකෘති',
    'LNK_NEW_RECORD' => 'ව්යාපෘති කාර්ය සාධක ආකෘති නිර්මාණය',
    'LNK_LIST' => 'දැක්ම ව්යාපෘති කාර්ය සාධක ආකෘති',
    'LNK_IMPORT_AM_TASKTEMPLATES' => 'ආනයන ව්යාපෘති කාර්ය සාධක ආකෘති',
    'LBL_SEARCH_FORM_TITLE' => 'සොයන්න ව්යාපෘති කාර්ය සාධක ආකෘති',
    'LBL_HISTORY_SUBPANEL_TITLE' => ' දැක්ම ඉතිහාසය',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_AM_TASKTEMPLATES_SUBPANEL_TITLE' => 'ව්යාපෘති කාර්ය සාධක ආකෘති',
    'LBL_NEW_FORM_TITLE' => 'නව ව්යාපෘති කාර්ය සාධක ආකෘති',
    'LBL_STATUS' => 'තත්වය',
    'LBL_PRIORITY' => 'ප්රමුඛ',
    'LBL_PERCENT_COMPLETE' => 'සියයට සම්පූර්ණ',
    'LBL_PREDECESSORS' => 'පූර්වගාමීන්',
    'LBL_MILESTONE_FLAG' => 'සන්ධිස්ථානයක් කොඩිය',
    'LBL_RELATIONSHIP_TYPE' => 'සම්බන්ධතා වර්ගය',
    'LBL_TASK_NUMBER' => 'කාර්ය සාධක අංකය',
    'LBL_ORDER_NUMBER' => 'නියෝග ',
    'LBL_ESTIMATED_EFFORT' => 'ඇස්තමේන්තුගත වෑයමක් (පැය)',
    'LBL_UTILIZATION' => 'පරිභෝජනය (%)',
    'LBL_DURATION' => 'කාලය (දින)',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_PROJECTTEMPLATES_TITLE' => 'ව්යාපෘති ආකෘති',

    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Task Templates: Project Templates from Task Templates Title',
);
