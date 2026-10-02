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
    'LBL_ASSIGNED_TO_ID' => 'Tilldelat användar-id',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum Skapad',
    'LBL_DATE_MODIFIED' => 'Ändrad den',
    'LBL_MODIFIED' => 'Ändrad av',
    'LBL_MODIFIED_NAME' => 'Namn på den som ändrade',
    'LBL_CREATED' => 'Skapad av',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_DELETED' => 'Borttagen',
    'LBL_NAME' => 'Namn',
    'LBL_CREATED_USER' => 'Skapad av användare',
    'LBL_MODIFIED_USER' => 'Ändrad av användare',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_EDIT_BUTTON' => 'Redigera',
    'LBL_REMOVE' => 'Ta bort',
    'LBL_LIST_DELETE' => 'Ta bort',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visa historik',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',

    // Async task field labels
    'LBL_DATA' => 'Data',
    'LBL_TYPE' => 'Typ',
    'LBL_ESTIMATED_RUN_TIME' => 'Beräknad körtid',
    'LBL_STATUS' => 'Status',
    'LBL_SERVICE_KEY' => 'Tjänstenyckel',
    'LBL_LAST_RUN_DATETIME' => 'Senaste körning',
    'LBL_ATTACHMENTS' => 'Bilagor',
    'LBL_PHASE' => 'Fas',
    'LBL_OWNER' => 'Ägare',

    // Progress field labels
    'LBL_PROGRESS' => 'Förlopp',
    'LBL_PROGRESS_PERCENT' => 'Procent',
    'LBL_PROGRESS_COMPLETED' => 'Slutförd',
    'LBL_PROGRESS_FAILED' => 'Misslyckades',
    'LBL_PROGRESS_PERCENT_TPL' => '{{fields.progress.attributes.percent|default:-}}% ({{fields.progress.attributes.completed|default:-}} lyckade, {{fields.progress.attributes.failed|default:-}} misslyckade / {{fields.progress.attributes.total|default:-}} totalt)',
    'LBL_PROGRESS_NOT_STARTED' => 'Inte påbörjad',
    'LBL_PROGRESS_QUEUING_TPL' => 'Köar: {{fields.progress.attributes.total|default:0}} objekt har köats',

    // Action labels — button text (shared across modules)
    'LBL_RETRY' => 'Försök igen',
    'LBL_RERUN' => 'Kör igen',
    'LBL_DISMISS' => 'Avfärda',
    'LBL_DELETE' => 'Ta bort',
    'LBL_DELETE_COMPLETED_CONFIRMATION' => 'Vill du ta bort den här slutförda aktiviteten?',
    'LBL_DELETE_COMPLETED_WITH_FAILURES_CONFIRMATION' => 'Den här aktiviteten slutfördes med fel. Om du tar bort den försvinner all aktivitetsdata, inklusive uppgifter om misslyckade objekt. Vill du fortsätta?',
    'LBL_DELETE_FAILED_CONFIRMATION' => 'Den här aktiviteten misslyckades. Om du tar bort den försvinner all aktivitetsdata, inklusive felinformation. Vill du fortsätta?',

    // Retry action messages (shared — generic phrasing)
    'LBL_RETRY_CONFIRMATION' => 'Vill du försöka igen? Alla misslyckade objekt köas på nytt för bearbetning.',
    'LBL_RETRY_SUCCESS' => 'Misslyckade objekt har köats på nytt för bearbetning.',

    // Retry-failed action messages (shared)
    'LBL_RETRY_FAILED' => 'Försök igen med misslyckade',
    'LBL_RETRY_FAILED_CONFIRMATION' => 'Vill du försöka igen? Alla misslyckade objekt köas på nytt för bearbetning.',
    'LBL_RETRY_FAILED_SUCCESS' => 'Misslyckade objekt har köats på nytt för bearbetning.',

    // Capability flag field labels
    'LBL_ALLOW_FAILURE_RETRY_ACTION' => 'Tillåt åtgärden att försöka igen efter fel',
    'LBL_ALLOW_FAILURE_RERUN_ACTION' => 'Tillåt åtgärden att köra igen efter fel',

    // Subpanel
    'LBL_FAILED_ITEMS' => 'Misslyckade objekt',
    'LBL_COMPLETED_ITEMS' => 'Slutförda objekt',
];
