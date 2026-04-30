<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2026 SuiteCRM Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUITECRM, SUITECRM DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

/**
 * Shared language labels for all async task modules.
 * Module-specific labels (module name strings, action confirmation/success messages)
 * are defined in each module's own language file, where they override these defaults.
 *
 * This file is automatically merged into inheriting modules by LanguageManager
 * when VardefManager::createVardef() lists 'asynctask' in the templates array.
 */
$mod_strings = [

    // Standard record field labels
    'LBL_ASSIGNED_TO_ID' => 'সীমাবদ্ধ ইউজার আইডি',
    'LBL_ASSIGNED_TO_NAME' => 'নির্ধারিত',
    'LBL_ID' => 'আইডি',
    'LBL_DATE_ENTERED' => 'তারিখ তৈরী',
    'LBL_DATE_MODIFIED' => 'পরিবর্তিত তারিখ',
    'LBL_MODIFIED' => 'দ্বারা পরিবর্তিত',
    'LBL_MODIFIED_NAME' => 'নাম দ্বারা সংশোধিত',
    'LBL_CREATED' => 'দ্বারা সৃষ্টি',
    'LBL_DESCRIPTION' => 'বিবরণ',
    'LBL_DELETED' => 'মোছা',
    'LBL_NAME' => 'নাম',
    'LBL_CREATED_USER' => 'ব্যবহারকারী দ্বারা তৈরি',
    'LBL_MODIFIED_USER' => 'ব্যবহারকারী দ্বারা সংশোধিত',
    'LBL_LIST_NAME' => 'নাম',
    'LBL_EDIT_BUTTON' => 'সম্পাদন করা',
    'LBL_REMOVE' => 'অপসারণ',
    'LBL_LIST_DELETE' => 'মুছে ফেলা',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'কার্যকলাপসমূহ',

    // Async task field labels
    'LBL_DATA' => 'Data',
    'LBL_TYPE' => 'Type',
    'LBL_ESTIMATED_RUN_TIME' => 'Run time estimate',
    'LBL_STATUS' => 'অবস্থা',
    'LBL_SERVICE_KEY' => 'Service Key',
    'LBL_LAST_RUN_DATETIME' => 'Last Run',
    'LBL_ATTACHMENTS' => 'Attachments',
    'LBL_PHASE' => 'Phase',
    'LBL_OWNER' => 'Owner',

    // Progress field labels
    'LBL_PROGRESS' => 'Progress',
    'LBL_PROGRESS_PERCENT' => 'Percent',
    'LBL_PROGRESS_COMPLETED' => 'সম্পন্ন',
    'LBL_PROGRESS_FAILED' => 'ব্যর্থ',
    'LBL_PROGRESS_PERCENT_TPL' => '{{fields.progress.attributes.percent|default:-}}% ({{fields.progress.attributes.completed|default:-}} successful, {{fields.progress.attributes.failed|default:-}} failed / {{fields.progress.attributes.total|default:-}} total)',
    'LBL_PROGRESS_NOT_STARTED' => 'Not started',
    'LBL_PROGRESS_QUEUING_TPL' => 'Queueing: {{fields.progress.attributes.total|default:0}} items enqueued',

    // Action labels — button text (shared across modules)
    'LBL_RETRY' => 'Retry',
    'LBL_RERUN' => 'Re-run',
    'LBL_DISMISS' => 'Dismiss',
    'LBL_DELETE' => 'মুছে ফেলা',
    'LBL_DELETE_COMPLETED_CONFIRMATION' => 'Are you sure you want to delete this completed task?',
    'LBL_DELETE_COMPLETED_WITH_FAILURES_CONFIRMATION' => 'This task completed with failures. Deleting it will remove all task data including failed item details. Are you sure you want to proceed?',
    'LBL_DELETE_FAILED_CONFIRMATION' => 'This task has failed. Deleting it will remove all task data including error details. Are you sure you want to proceed?',

    // Retry action messages (shared — generic phrasing)
    'LBL_RETRY_CONFIRMATION' => 'Are you sure you want to retry? This will re-queue all failed items for processing.',
    'LBL_RETRY_SUCCESS' => 'Failed items have been re-queued for processing.',

    // Retry-failed action messages (shared)
    'LBL_RETRY_FAILED' => 'Retry Failed',
    'LBL_RETRY_FAILED_CONFIRMATION' => 'Are you sure you want to retry? This will re-queue all failed items for processing.',
    'LBL_RETRY_FAILED_SUCCESS' => 'Failed items have been re-queued for processing.',

    // Capability flag field labels
    'LBL_ALLOW_FAILURE_RETRY_ACTION' => 'Allow Failure Retry Action',
    'LBL_ALLOW_FAILURE_RERUN_ACTION' => 'Allow Failure Rerun Action',

    // Subpanel
    'LBL_FAILED_ITEMS' => 'Failed Items',
    'LBL_COMPLETED_ITEMS' => 'Completed Items',
];
