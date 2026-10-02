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
 * Module-specific labels for Processes.
 * Shared async task labels are inherited from the asynctask template language file.
 */
$mod_strings = [

    // Module naming
    'LBL_LIST_FORM_TITLE' => 'Processlista',
    'LBL_MODULE_NAME' => 'Processer',
    'LBL_MODULE_TITLE' => 'Processer',
    'LBL_HOMEPAGE_TITLE' => 'Mina processer',
    'LNK_NEW_RECORD' => 'Skapa process',
    'LNK_LIST' => 'Visa processer',
    'LBL_SEARCH_FORM_TITLE' => 'Sök processer',
    'LBL_NEW_FORM_TITLE' => 'Ny process',

    // Rerun/dismiss confirmation messages (reference this module by name)
    'LBL_RERUN_CONFIRMATION' => 'Vill du köra om processen från början? Alla befintliga objekt tas bort och processen startar om.',
    'LBL_RERUN_SUCCESS' => 'Processen har lagts i kö på nytt och startar om från början.',
    'LBL_DISMISS_CONFIRMATION' => 'Vill du avfärda processen? Den och alla associerade data tas bort.',
    'LBL_DISMISS_SUCCESS' => 'Processen avfärdades.',

    // Type footnotes
    'LBL_TYPE_BACKGROUND_HELP' => 'Processen körs i bakgrunden via meddelandeköarbetaren. Den behandlar objekt i omgångar och blockerar inte användargränssnittet.',
    'LBL_TYPE_IMMEDIATE_HELP' => 'Processen körs direkt när den utlöses. Den behandlar alla objekt i en enda begäran och kan ta längre tid för stora datamängder.',
];
