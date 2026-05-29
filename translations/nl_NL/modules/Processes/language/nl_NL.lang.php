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
    'LBL_LIST_FORM_TITLE' => 'Lijst met processen',
    'LBL_MODULE_NAME' => 'Processen',
    'LBL_MODULE_TITLE' => 'Processen',
    'LBL_HOMEPAGE_TITLE' => 'Mijn processen',
    'LNK_NEW_RECORD' => 'Nieuw proces',
    'LNK_LIST' => 'Bekijk Processen',
    'LBL_SEARCH_FORM_TITLE' => 'Zoek processen',
    'LBL_NEW_FORM_TITLE' => 'Nieuw proces',

    // Rerun/dismiss confirmation messages (reference this module by name)
    'LBL_RERUN_CONFIRMATION' => 'Weet u zeker dat u dit proces vanaf het begin wilt herstarten? Alle bestaande items worden verwijderd en het proces wordt opnieuw opgestart.',
    'LBL_RERUN_SUCCESS' => 'Het proces is opnieuw in de wachtrij geplaatst en wordt vanaf het begin opnieuw opgestart.',
    'LBL_DISMISS_CONFIRMATION' => 'Weet je zeker dat je dit proces wilt verwijderen? Dit zal het verwijderen en alle bijbehorende gegevens.',
    'LBL_DISMISS_SUCCESS' => 'Proces succesvol verwijderd.',

    // Type footnotes
    'LBL_TYPE_BACKGROUND_HELP' => 'Dit proces wordt op de achtergrond uitgevoerd via de berichtwachtrij werknemer. Het verwerkt items in batches en blokkeert de gebruikersinterface niet.',
    'LBL_TYPE_IMMEDIATE_HELP' => 'Dit proces draait onmiddellijk wanneer het wordt geactiveerd. Het verwerkt alle items in een enkel verzoek en kan langer duren voor grote datasets.',
];
