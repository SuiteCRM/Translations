<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Nelze určit skupinu',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Nelze určit vlastníka',
    'ERR_UW_CONFIG_WRITE' => 'Error updating config.php with new version information.',
    'ERR_UW_CONFIG' => 'Umožněte prosím zápis do souboru config.php a načtěte znovu tuto stránku.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Není právo zápisu do adresáře.',
    'ERR_UW_FILE_NOT_COPIED' => 'Soubor není zkopírován',
    'ERR_UW_FILE_NOT_DELETED' => 'Problém při odstranění balíčku.',
    'ERR_UW_FILE_NOT_READABLE' => 'Soubor nelze číst.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Soubor nelze přesunout nebo do něj zapsat',
    'ERR_UW_FLAVOR_2' => 'Typ aktualizace: ',
    'ERR_UW_FLAVOR' => 'Verze SuiteCRM systému: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './UpgradeWizard.log nelze vytvořit / nelze zapisovat. Opravte, prosím, práva pro SuiteCRM adresář.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload na hodnotu vyšší než 1. Změňte, prosím, nastavení v php.ini a restartujte web server.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Zvolte, prosím, soubor a zkuste znovu.<br>\n',
    'ERR_UW_NO_FILES' => 'Nastala chyba, nebyly vybrány žádné soubory.',
    'ERR_UW_NO_MANIFEST' => 'The zip file is missing a manifest.php file. Cannot proceed.',
    'ERR_UW_NO_VIEW' => 'Zvolen chybný náhled.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Not valid upload.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Nelze vytvořit temp adresář. Zkontrolujte práva.',
    'ERR_UW_ONLY_PATCHES' => 'You can only upload patches on this page.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Chyby nalezené v předletové kontrole',
    'ERR_UW_UPLOAD_ERR' => 'Chyba při nahrání souboru, zkuste to prosím znovu!<br>\n' . PHP_EOL,
    'ERR_UW_VERSION' => 'Verze SuiteCRM systému: ',
    'ERR_UW_PHP_VERSION' => 'Verze PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM System Version: ',
    'ERR_UW_WRONG_TYPE' => 'Tato stránka není určena k běhu.',
    'LBL_BUTTON_BACK' => '< Back',
    'LBL_BUTTON_CANCEL' => 'Cancel',
    'LBL_BUTTON_DELETE' => 'Delete Package',
    'LBL_BUTTON_DONE' => 'Done',
    'LBL_BUTTON_EXIT' => 'Exit',
    'LBL_BUTTON_NEXT' => 'Next >',
    'LBL_BUTTON_RECHECK' => 'Opakovat kontrolu',
    'LBL_BUTTON_RESTART' => 'Restartovat',

    'LBL_UPLOAD_UPGRADE' => 'Načíst aktualizaci:',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Zálohy souborů',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Zálohy souborů z této aktualizace lze nalézt v',
    'LBL_UW_BACKUP' => 'Zálohy souborů',
    'LBL_UW_CANCEL_DESC' => 'Průvodce aktualizací byl ukončen. Všechny dočasné soubory a nahraný zip soubor byly smazany. <br><br>Klikněte  &#034;Další&#034; k restartu průvodce aktualizací.',
    'LBL_UW_CHECK_ALL' => 'Check All',
    'LBL_UW_CHECKLIST' => 'Kroky aktualizace',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Zálohy přepsaných souborů jsou v následujícím adresáři: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Ručně sloučit následující soubory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Aktualizační proces: Ručně sloučit soubory',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Použijte, prosím, jakoukoli porovnávací metodu pro sloučení těchto souborů. Do dokončení, SuiteCRM instalace bude v neurčitém stavu a aktualizace nebude dokončena.',
    'LBL_UW_COMPLETE' => 'Complete',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Všechny systémové požadavky splněny',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP nastavení: Call Time Pass By Reference',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL Module',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP Module',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings modul',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload Parametr',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP nastavení: Memory Limit',
    'LBL_UW_COMPLIANCE_STREAM' => 'Nastavení PHP: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Minimální verze databáze',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Umístění php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minimální PHP verze',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP nastavení: Safe Mode',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Nalezená nastavení',
    'LBL_UW_COMPLIANCE_XML' => 'XML Parsing',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Podpora zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE verze',
    'LBL_UW_COPIED_FILES_TITLE' => 'Soubor úspěšně zkopírován',

    'LBL_UW_DB_CHOICE1' => 'Průvodce aktualizací provádí SQL dotazy',
    'LBL_UW_DB_CHOICE2' => 'Manuální SQL dotazy',
    'LBL_UW_DB_ISSUES_PERMS' => 'Databázová práva',
    'LBL_UW_DB_METHOD' => 'Metoda aktualizace databáze',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Všechna práva dostupná',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Nezbytná práva',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Následující aktualizace byly nainstalovány:',
    'LBL_UW_END_LOGOUT_PRE' => 'Upgrade dokončen.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Vyber "Hotovo" pro ukončení průvodce pro upgrade.',
    'LBL_UW_END_LOGOUT' => 'Pokud plánujete více než tuto úroveň záplaty/ aktualizace, tak se, prosím, odhlaste ze svého účtu.',

    'LBL_UW_FILE_DELETED' => ' byl odebrán.<br>',
    'LBL_UW_FILE_GROUP' => 'Group',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Práva souborů',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Všechny soubory mají právo zápisu</b>',
    'LBL_UW_FILE_OWNER' => 'Owner',
    'LBL_UW_FILE_PERMS' => 'Práva',
    'LBL_UW_FILE_UPLOADED' => 'byl nahrán',
    'LBL_UW_FILE' => 'File Name',
    'LBL_UW_FILES_QUEUED' => 'Následující aktualizační balíčky jsou připraveny k instalaci:',
    'LBL_UW_FILES_REMOVED' => 'Následující soubory budou odebrány ze systému: <br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => 'Vyber "Další" pro nahrání balíčků pro upgrade.',
    'LBL_UW_FROZEN' => 'Povinné kroky musí být ukončeny před dalším pokračováním.',
    'LBL_UW_HIDE_DETAILS' => 'Hide Details',
    'LBL_UW_IN_PROGRESS' => 'In Progress',
    'LBL_UW_INCLUDING' => 'Including',
    'LBL_UW_INCOMPLETE' => 'Nedokončeno',
    'LBL_UW_MANUAL_MERGE' => 'Sloučení souborů',
    'LBL_UW_MODULE_READY' => 'Modul je připraven k instalaci. Klikněte na potvrdit pro pokračování v instalaci.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Žádné zaznamenané aktualizace nebyly detekovány.',
    'LBL_UW_NONE' => 'None',
    'LBL_UW_OVERWRITE_DESC' => 'Všechny změněné soubory budou přepsány, včetně úprav kódu a změn šablon, které jste provedli. Opravdu chcete pokračovat?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Vytvořit položku úkolu pro ruční sloučení?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Poslat mail sám sobě pro připomenutí ručního sloučení?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Soubory uvedené níže byly změněny. Odzaškrtněte soubory, jež vyžadují ruční sloučení. <i>Libovolné nalezené  změny v rozvržení jsou automaticky nezaškrtnuty, pokud mají být přepsány zaškrtněte. </i>',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Ruční sloučení souborů není nutné.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Nepotřebné.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Automaticky uchované soubory:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Všechny předletové testy splněny. Pro zapsání těchto změn klikněte &#034;Další&#034;.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Vyber "Další" pro kopírování povýšené soubory do systému.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Pozn: </b> Zbytek procesu upgrade je nezbytný a je potřeba vybrat "Další" pro jeho dokončení. Pokud nechcete pokrčova, vyberte tlačítko "Zrušit".',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Přepněte všechny soubory',

    'LBL_UW_REBUILD_TITLE' => 'Výsledek přebudování',
    'LBL_UW_SCHEMA_CHANGE' => 'Změny schématu',

    'LBL_UW_SHOW_COMPLIANCE' => 'Zobrazit detekovaná nastavení',
    'LBL_UW_SHOW_DB_PERMS' => 'Zobrazit chybějící databázová práva ',
    'LBL_UW_SHOW_DETAILS' => 'Show Details',
    'LBL_UW_SHOW_DIFFS' => 'Zobrazit soubory, které vyžadují ruční sloučení',
    'LBL_UW_SHOW_NW_FILES' => 'Zobrazit soubory se špatně nastavenými právy',
    'LBL_UW_SHOW_SCHEMA' => 'Zobrazit skript pro změnu schematu',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Zobrazit chybné dotazy',
    'LBL_UW_SHOW' => 'Show',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Přeskočené soubory',
    'LBL_UW_SQL_RUN' => 'Zaškrtněte pokud proběhly ruční SQL dotazy.',
    'LBL_UW_START_DESC' => 'Vítejte v SuiteCRM aktualizačním průvodci.',
    'LBL_UW_START_DESC2' => 'Poznámka: Důrazně doporučujeme vytvořit si kopii produkčního prostředí SuiteCRM a otestovat aktualizaci před nasazením do produkčního prostředí. Pokud jste měnili soubor "composer.json", spusťte prosím po dokončení aktualizace také:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Vyber "Další" pro provedení kontroly vašeho systému, pro potvrzení, že systém je připraven na upgrade. Kontrola obsahuje oprávnění k souborům, práva v databázi a serverové nastavení.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Nový průvodce aktualizací nyní shrne proces aktualizace. Pokračujte prosím v aktualizaci.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Vítejte v novém průvodci aktualizací',

    'LBL_UW_TITLE_CANCEL' => 'Cancel',
    'LBL_UW_TITLE_COMMIT' => 'Zapsat aktualizaci',
    'LBL_UW_TITLE_END' => 'Závěrečné informace',
    'LBL_UW_TITLE_PREFLIGHT' => 'Předletová kontrola',
    'LBL_UW_TITLE_START' => 'Welcome',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Kontrola systému',
    'LBL_UW_TITLE_UPLOAD' => 'Načíst aktualizaci',
    'LBL_UW_TITLE' => 'Upgrade Wizard',
    'LBL_UW_UNINSTALL' => 'Uninstall',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Přijmout licenci',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Převést Licenci',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Začátek v běhu',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Kontrola systému probíhá',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Kontrola licence probíhá',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Předstartovní kontrola probíhá',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Probíhá kopírování souborů',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Potvrzení aktualizace probíhá',
    'LBL_UW_COMMIT_DESC' => 'Vyber "Další" pro provedení dodatečných skriptů pro upgrade',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Skript upgrade probíhá',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Sumarizace aktualizace probíhá',
    'LBL_UPGRADE_IN_PROGRESS' => 'v běhu ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Uplynulý čas ',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Upgrade odvolaných procesů a čistění v procesu',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Aktualizace může trvat určitý čas',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Kontrola nahraného souboru probíhá',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Náhrávání aktualizačního balíčku ... ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Aktualizace odstraní staré 451 schéma.',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manuální odstranění schématu po aktualizaci',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Metoda odstranění starého schématu',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Zobrazit staré schéma, které lze odstranit',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Přeskoč forntu',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php version 5 or above is required.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Your version of PHP is not supported by SuiteCRM. You will need to install a version that is compatible with the SuiteCRM application. Please consult the Compatibility Matrix in the Release Notes for supported PHP Versions. Your version is ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Action',
    'LBL_ML_CANCEL' => 'Cancel',
    'LBL_ML_COMMIT' => 'Commit',
    'LBL_ML_DESCRIPTION' => 'Description',
    'LBL_ML_INSTALLED' => 'Date Installed',
    'LBL_ML_NAME' => 'Name',
    'LBL_ML_PUBLISHED' => 'Date Published',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Uninstallable',
    'LBL_ML_VERSION' => 'Version',
    'LBL_ML_INSTALL' => 'Install',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Vaše php verze je: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Doporučená php verze je ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' nebo vyšší.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Průvodce upgradem',
    'LBL_UPLOAD_SUCCESS' => 'Balíček upgrade byl úspěšně nahrán. Vyber "Další" pro provedení poslední kontroly.',
    'LBL_UW_TITLE_LAYOUTS' => 'Potvrdit rozložení',
    'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
    'LBL_LAYOUT_MERGE_DESC' => 'Nyní jsou k dispozici další nové pole, které byly přidány jako části tohoto upgrade a mohou být automaticke přidány do stávajících rozložení modulů. Pro více informací k novým polím, prosím přečtěte si Release Notes verze na kterou přecházíte.',
    'LBL_LAYOUT_MERGE_TITLE' => 'Klikněte na Další pro potvrzení změn a dokončení aktualizace.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Vyber "Další" pro dokonční upgrade.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Confirm Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Potvrdit výsledky rozvržení',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Následující rozložení byly úspěšně sloučeny:',
    'LBL_SELECT_FILE' => 'Vyberte soubor:',
    'ERROR_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Nahraný soubor není kompatibilní s touto verzí PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of SuiteCRM: ',
    'LBL_LANGPACKS' => 'Language Packs' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Module Loader' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Patch Upgrades' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Themes' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Upgrade' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Processing' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Kompatibilní verze není nastaven v souboru manifestu',
    'LBL_UPGRD_CSTM_CHK' => 'Proces upgradu aktualizuje některé soubory, ale tyto soubory také existuje ve vlastní složce. Prosím zkontrolujte změny než bude pokračovat:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
        3 => 'The uploaded file was only partially uploaded.',
        4 => 'No file was uploaded.',
        5 => 'Neznámá chyba.',
        6 => 'Missing a temporary folder.',
        7 => 'Failed to write file to disk.',
        8 => 'Nahrávaní souboru pozastaveno dle přípony.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Upozornění: vypršení platnosti hesla je nastaveno na nikdy!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Aktualizujte prosím své nastavení',
);
