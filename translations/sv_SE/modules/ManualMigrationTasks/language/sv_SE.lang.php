<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2025 SuiteCRM Ltd.
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
 * along with this program.  If not, see http://www.gnu.org/licenses.
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
 * Module-specific labels for ManualMigrationTasks.
 * Shared async task labels are inherited from the asynctask template language file.
 */
$mod_strings = [

    // Module naming
    'LBL_LIST_FORM_TITLE' => 'Lista över migreringar',
    'LBL_MODULE_NAME' => 'Migreringar',
    'LBL_MODULE_TITLE' => 'Migreringar',
    'LBL_HOMEPAGE_TITLE' => 'Mina migreringar',
    'LNK_NEW_RECORD' => 'Skapa migreringar',
    'LNK_LIST' => 'Visa migreringar',
    'LBL_SEARCH_FORM_TITLE' => 'Sök migreringar',
    'LBL_NEW_FORM_TITLE' => 'Nya migreringar',

    // Module-specific trigger action
    'LBL_RUN_MIGRATION' => 'Kör migrering',
    'LBL_RUN_MIGRATION_CONFIRMATION' => 'Vill du köra denna migrering?',

    // Rerun/dismiss confirmation messages (reference this module by name)
    'LBL_RERUN_CONFIRMATION' => 'Vill du köra om denna migrering från början? Alla befintliga poster tas bort och migreringen startar om.',
    'LBL_RERUN_SUCCESS' => 'Migreringen har köats på nytt och startar om från början.',
    'LBL_DISMISS_CONFIRMATION' => 'Vill du avfärda denna migreringsuppgift? Den tas bort tillsammans med alla associerade data.',
    'LBL_DISMISS_SUCCESS' => 'Migreringsuppgiften avfärdades.',

    // Type footnotes
    'LBL_TYPE_BACKGROUND_HELP' => 'Denna migrering körs i bakgrunden via meddelandeköarbetaren. Den bearbetar poster i batcher och blockerar inte gränssnittet.',
    'LBL_TYPE_IMMEDIATE_HELP' => 'Denna migrering körs omedelbart när den utlöses. Den bearbetar alla poster i en enda begäran och kan ta längre tid för stora datamängder.',


    // Messenger setup widget
    'LBL_MESSENGER_SETUP' => 'Konfiguration av bakgrundsuppgift',
    'LBL_MESSENGER_SETUP_DESC1' => 'Migreringsuppgifter bearbetas i bakgrunden.',
    'LBL_MESSENGER_SETUP_DESC2' => 'För att uppgifterna ska slutföras måste en Symfony Messenger-arbetare köras.',
    'LBL_MESSENGER_SETUP_DESC3' => 'Utan en aktiv arbetare blir uppgifterna kvar i tillståndet ”Väntande”.',
    'LBL_MESSENGER_SETUP_DOC_LINK' => 'Visa installationsguide (Supervisor, systemd, Cron)',
];
