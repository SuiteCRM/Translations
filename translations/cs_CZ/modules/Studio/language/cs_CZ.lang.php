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
    'LBL_EDIT_LAYOUT' => 'Úprava rozvržení',
    'LBL_EDIT_FIELDS' => 'Úprava zakázkových polí',
    'LBL_SELECT_FILE' => 'Vybrat soubor',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Nástroje',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM pole (kliknutím na položku přidáte do shomaždiště)',
    'LBL_VIEW_SUITE_FIELDS' => 'Zobrazit SuiteCRM pole',
    'LBL_FAILED_TO_SAVE' => 'Uložení se nezdařilo',
    'LBL_CONFIRM_UNSAVE' => 'Jakékoliv změny nebudou uloženy. Opravdu chcete pokračovat?',
    'LBL_PUBLISHING' => 'Publikuji...',
    'LBL_PUBLISHED' => 'Zveřejněno',
    'LBL_FAILED_PUBLISHED' => 'Zveřejnění selhalo',
    'LBL_DROP_HERE' => '[Pustit zde]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Název',
    'LBL_LABEL' => 'Popis',
    'LBL_MASS_UPDATE' => 'Hromadná aktualizace',
    'LBL_DEFAULT_VALUE' => 'Výchozí hodnota',
    'LBL_REQUIRED' => 'Povinné',
    'LBL_DATA_TYPE' => 'Typ',


    'LBL_HISTORY' => 'Historie',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Vítejte ve studiu!</h2><br> Co by jste dnes chtěli dělat?<br><b> Vyberte si, prosím, z možností níže.</b>',
    'LBL_SW_EDIT_MODULE' => 'Upravit modul',
    'LBL_SW_EDIT_DROPDOWNS' => 'Upravit rozbalovací nabídky',
    'LBL_SW_EDIT_TABS' => 'Konfigurovat záložky',
    'LBL_SW_RENAME_TABS' => 'Přejmenovat záložky',
    'LBL_SW_EDIT_GROUPTABS' => 'Konfigurovat skupiny záložek',
    'LBL_SW_EDIT_PORTAL' => 'Upravit web',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Opravit vlastní políčka',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Přestěhovat příslušná pole',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Vytvořit znovu javascript verze jazykových souborů',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Odstranění javascript verze jazykových souborů, v případě potřeby bude vytvořeno.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Smazat',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Vytvořit rozbalovací nabídku',
    'LBL_DROPDOWN_NAME' => 'Název rozbalovací nabídky:',
    'LBL_DROPDOWN_LANGUAGE' => 'Jazyk rozbalovací nabídky:',
    'LBL_TABGROUP_LANGUAGE' => 'Jazyk:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Zobrazit hodnotu',
    'LBL_DD_DATABASEVALUE' => 'Databázová hodnota',
    'LBL_DD_ALL' => 'Všechno',

//BUTTONS
    'LBL_BTN_SAVE' => 'Uložit',
    'LBL_BTN_CANCEL' => 'Zrušit',
    'LBL_BTN_SAVEPUBLISH' => 'Uložit a nasadit',
    'LBL_BTN_HISTORY' => 'Historie',
    'LBL_BTN_ADDROWS' => 'Přidat řádky',
    'LBL_BTN_UNDO' => 'Zpět',
    'LBL_BTN_REDO' => 'Znova',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Přidat vlastní pole',
    'LBL_BTN_TABINDEX' => 'Upravit pořadí záložek',

//TABS
    'LBL_MODULES' => 'Moduly',
    'LBL_MODULE_NAME' => 'Administrace',
    'LBL_CONFIGURE_GROUP_TABS' => 'Konfigurovat skupiny záložek',
    'LBL_GROUP_TAB_WELCOME' => 'Záložky a seskupené podzáložky se zobrazí pro uživatele, kteří se rozhodnou pro zobrazení Skupinových modulů v navigačním panelu. Drag and drop moduly z záložkových-boxů jsou potom určeny pro konfiguraci, které podzáložky se objevují v jednotlivých kartách. Prázdné Skupiny záložek nebudou zobrazeny v navigačním panelu.',
    'LBL_RENAME_TAB_WELCOME' => 'Pro přejmenování záložky klikněte na libovolnou zobrazovanou hodnotu v tabulce.',
    'LBL_DELETE_MODULE' => 'Odebrat&nbsp;modul<br />z&nbsp;filtru',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Provybrání záložek pro změnu jazyka, vyberte jazyk, editujte názvy a klikněte na Ulož a zapracuj, pro zavedení změn v překladu.',
    'LBL_ADD_GROUP' => 'Přidat skupinu',
    'LBL_NEW_GROUP' => 'Nová skupina',
    'LBL_RENAME_TABS' => 'Přejmenovat záložky',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Chyba: Neplatná klíčová hodnota: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Uložit' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Zpět' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Znova' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'V řádku' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Smazat' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Přidat pole' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximalizovat' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimalizovat' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Zveřejnit' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Přidat řádky' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Přidat pole' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Upravit' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Vyberte jazyk, který chcete upravit.',
    'LBL_SINGULAR' => 'Název v jednotném čísle',
    'LBL_PLURAL' => 'Název v množném čísle',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Klikněte na tlačítko <b>Uložit</b> po uložení změn.'

);
