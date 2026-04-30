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
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng Id para sa gumagamit',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagbago',
    'LBL_MODIFIED' => 'Binago ni',
    'LBL_MODIFIED_NAME' => 'Ito ay ibinago sa pamamagitan ng pangalan',
    'LBL_CREATED' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_DELETED' => 'Ang pagkabura',
    'LBL_NAME' => 'Ang pangalan',
    'LBL_CREATED_USER' => 'Inilikha ng tagagamit',
    'LBL_MODIFIED_USER' => 'Binago sa pamamagitan ng tagagamit',
    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_EDIT_BUTTON' => 'Ang i-edit',
    'LBL_REMOVE' => 'Tanggalin',
    'LBL_LIST_DELETE' => 'Tanggalin',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tingnan ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',

    // Async task field labels
    'LBL_DATA' => 'Ang data',
    'LBL_TYPE' => 'Uri',
    'LBL_ESTIMATED_RUN_TIME' => 'Run time estimate',
    'LBL_STATUS' => 'Katayuan',
    'LBL_SERVICE_KEY' => 'Service Key',
    'LBL_LAST_RUN_DATETIME' => 'Last Run',
    'LBL_ATTACHMENTS' => 'Mga Attachment',
    'LBL_PHASE' => 'Phase',
    'LBL_OWNER' => 'May-ari',

    // Progress field labels
    'LBL_PROGRESS' => 'Progress',
    'LBL_PROGRESS_PERCENT' => 'Percent',
    'LBL_PROGRESS_COMPLETED' => 'Kumpleto',
    'LBL_PROGRESS_FAILED' => 'Nabigo',
    'LBL_PROGRESS_PERCENT_TPL' => '{{fields.progress.attributes.percent|default:-}}% ({{fields.progress.attributes.completed|default:-}} successful, {{fields.progress.attributes.failed|default:-}} failed / {{fields.progress.attributes.total|default:-}} total)',
    'LBL_PROGRESS_NOT_STARTED' => 'Not started',
    'LBL_PROGRESS_QUEUING_TPL' => 'Queueing: {{fields.progress.attributes.total|default:0}} items enqueued',

    // Action labels — button text (shared across modules)
    'LBL_RETRY' => 'Retry',
    'LBL_RERUN' => 'Re-run',
    'LBL_DISMISS' => 'Dismiss',
    'LBL_DELETE' => 'Tanggalin',
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
