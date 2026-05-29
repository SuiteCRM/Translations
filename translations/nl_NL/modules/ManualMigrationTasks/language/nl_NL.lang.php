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
    'LBL_LIST_FORM_TITLE' => 'Migraties lijst',
    'LBL_MODULE_NAME' => 'Migraties',
    'LBL_MODULE_TITLE' => 'Migraties',
    'LBL_HOMEPAGE_TITLE' => 'Mijn migraties',
    'LNK_NEW_RECORD' => 'Nieuwe migratie',
    'LNK_LIST' => 'Migraties bekijken',
    'LBL_SEARCH_FORM_TITLE' => 'Migraties zoeken',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe migratie',

    // Module-specific trigger action
    'LBL_RUN_MIGRATION' => 'Migratie uitvoeren',
    'LBL_RUN_MIGRATION_CONFIRMATION' => 'Weet u zeker dat u deze migratie wilt uitvoeren?',

    // Rerun/dismiss confirmation messages (reference this module by name)
    'LBL_RERUN_CONFIRMATION' => 'Weet u zeker dat u deze migratie vanaf het begin wilt herstarten? Alle bestaande items worden verwijderd en de migratie zal opnieuw starten.',
    'LBL_RERUN_SUCCESS' => 'Migratie staat opnieuw in de wachtrij en wordt vanaf het begin opnieuw opgestart.',
    'LBL_DISMISS_CONFIRMATION' => 'Weet u zeker dat u deze migratie taak wilt verwijderen? Dit zal deze verwijderen en alle bijbehorende gegevens.',
    'LBL_DISMISS_SUCCESS' => 'Migratietaak succesvol afgewezen.',

    // Type footnotes
    'LBL_TYPE_BACKGROUND_HELP' => 'Deze migratie wordt op de achtergrond uitgevoerd via de berichtwachtrij werknemer. Het verwerkt items in batches en blokkeert de gebruikersinterface niet.',
    'LBL_TYPE_IMMEDIATE_HELP' => 'Deze migratie loopt onmiddellijk als het geactiveerd is. Het verwerkt alle items in één verzoek en kan langer duren voor grote datasets.',


    // Messenger setup widget
    'LBL_MESSENGER_SETUP' => 'Achtergrondtaak-configuratie',
    'LBL_MESSENGER_SETUP_DESC1' => 'Migratietaken worden op de achtergrond verwerkt.',
    'LBL_MESSENGER_SETUP_DESC2' => 'Om ervoor te zorgen dat deze taken succesvol worden voltooid, moet u ervoor zorgen dat een Symfony Messenger worker actief is.',
    'LBL_MESSENGER_SETUP_DESC3' => 'Zonder een actieve worker blijven taken in de "In behandeling" staat.',
    'LBL_MESSENGER_SETUP_DOC_LINK' => 'Bekijk de installatiehandleiding (Supervisor, systeem, Cron)',
];
