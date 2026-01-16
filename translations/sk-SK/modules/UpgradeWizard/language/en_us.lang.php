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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Nemožno určiť Skupinu',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Nemožno určiť Vlastníka',
    'ERR_UW_CONFIG_WRITE' => 'Chyba pri aktualizácii súboru config.php, informáciami o novej verzii.',
    'ERR_UW_CONFIG' => 'Prosím, umožnite zapisovať do súboru config.php a obnovte, resp. znovu načítajte, túto stránku.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Nemožno zapisovať do Adresára',
    'ERR_UW_FILE_NOT_COPIED' => 'Subor nebol skopírovaný',
    'ERR_UW_FILE_NOT_DELETED' => 'Problém pri odstraňovaní balíka',
    'ERR_UW_FILE_NOT_READABLE' => 'Súbor sa nedá čítať.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Súbor nemožno premiestniť alebo zapísať do',
    'ERR_UW_FLAVOR_2' => 'Upgrade Flavor/Dochutenie:',
    'ERR_UW_FLAVOR' => 'SuiteCRM System Flavor/dochutenie.',
    'ERR_UW_LOG_FILE_UNWRITABLE' => 'Súbor ./upgradeWizard.log nebolo možné vytvoriť, ani zapísať doň. Prosím opravte oprávnenie vo Vašom SuiteCRM adresári.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload je nastavené na hodnotu vyššiu než 1. Prosím opravte si to v súbore php.ini a reštartujte webový prehliadač.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Určite súbor a skúste to znovu, prosím!',
    'ERR_UW_NO_FILES' => 'Došlo ku chybe, neboli nájdené žiadne súbory ku kontrole.',
    'ERR_UW_NO_MANIFEST' => 'Zip archív neobsahuje súbor manifest.php. Nie je možné pokračovať.',
    'ERR_UW_NO_VIEW' => 'Bolo špecifikované chybné zobrazenie.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Neplatné nahranie súboru.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Nemožno vytvoriť adresár temp. Skontrolujte  povolenie k zápisu.',
    'ERR_UW_ONLY_PATCHES' => 'Na tejto stránke môžete nahrávať iba záplaty.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Behom predletovej kontroly sa vyskytly chyby',
    'ERR_UW_UPLOAD_ERR' => 'Nastala chyba pri nahrávaní súboru, skúste to znova prosím!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Verzia SuiteCRM System: ',
    'ERR_UW_PHP_VERSION' => 'Verzia PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'Verzia SuiteCRM System: ',
    'ERR_UW_WRONG_TYPE' => 'Táto stránka nie je určená k prevádzke',
    'LBL_BUTTON_BACK' => '< Späť',
    'LBL_BUTTON_CANCEL' => 'Zrušiť',
    'LBL_BUTTON_DELETE' => 'Zmazať balík',
    'LBL_BUTTON_DONE' => 'Dokončené',
    'LBL_BUTTON_EXIT' => 'Ukončiť',
    'LBL_BUTTON_NEXT' => 'Ďalší >',
    'LBL_BUTTON_RECHECK' => 'Opätovná kontrola',
    'LBL_BUTTON_RESTART' => 'Reštart',

    'LBL_UPLOAD_UPGRADE' => 'Nahrať Aktualizačný balík',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Zálohovanie súborov',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Zálohy súborov z tejto modernizácie nájdete na',
    'LBL_UW_BACKUP' => 'ZÁLOHOVANIE súborov',
    'LBL_UW_CANCEL_DESC' => 'Upgrade - modernizácia bola zrušená. Všetky nakopírované dočasné a nahrané aktualizačné súbory boli odstránené.<br>Stlačte tlačítko " Ďalší " a reštartujte sprievodcu modernizáciou.',
    'LBL_UW_CHECK_ALL' => 'Skontrolovať všetko',
    'LBL_UW_CHECKLIST' => 'Kroky modernizácie',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Zálohy prepísaných súborov sú v nasledujúcom adresári: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manuálne zlúčiť tieto súbory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Proces modernizácie: Ručné zlúčenie súborov',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Prosím, použite niektorú zo svojich porovnávacích -diff metód k zlúčeniu týchto súborov. Pokiaľ to neurobíte, Vaša inštalácia SuiteCRM bude nestabilná a modernizácia nekompletná.',
    'LBL_UW_COMPLETE' => 'Kompletný',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Všetky systémové požiadavky sú naplnené',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Nastavenie PHP:  [Call Time Pass By Reference]',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL modul',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP modul',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings modul',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Parameter MBStrings mbstring.func_overload',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Nastavenie PHP: [Memory Limit] nastavenia obmedzenia pamäti',
    'LBL_UW_COMPLIANCE_STREAM' => 'Nastavenie PHP: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Minimálna Databázová verzia',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Umiestnenie súboru php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minimálna verzia PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Nastavenie PHP: [Safe mode] - chránený režim',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Detekované nastavenia',
    'LBL_UW_COMPLIANCE_XML' => 'XML Parsing - spracovanie XML súborov',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Podpora Zipu',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Verzia PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'Súbory boli úspešne skopírované',

    'LBL_UW_DB_CHOICE1' => 'Sprievodca modernizáciou spustil SQL',
    'LBL_UW_DB_CHOICE2' => 'Ručné SQL otázky',
    'LBL_UW_DB_ISSUES_PERMS' => 'Oprávnenia k databáze',
    'LBL_UW_DB_METHOD' => 'Metóda aktualizácie databázy',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Všetky oprávnenia sú dostupné',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Potrebné oprávnenia',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Nasledovné aktualizačné balíky boli nainštalované:',
    'LBL_UW_END_LOGOUT_PRE' => 'Modernizácia je kompletná.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Kliknite na Done/Hotovo k ukončeniu Sprievodcu modernizáciou.',
    'LBL_UW_END_LOGOUT' => 'Ak plánujete použiť iný aktualizačný - Upgrade balík, pomocou Aktualizačného sprievodcu, musíte sa pred tým odhlásiť a spätne prihlásiť.',

    'LBL_UW_FILE_DELETED' => 'odstránené',
    'LBL_UW_FILE_GROUP' => 'Skupina',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Oprávnenia k súboru',
    'LBL_UW_FILE_NO_ERRORS' => 'Všetky súbory sú zapisovateľné',
    'LBL_UW_FILE_OWNER' => 'Vlastník',
    'LBL_UW_FILE_PERMS' => 'Oprávnenia',
    'LBL_UW_FILE_UPLOADED' => 'nahraný',
    'LBL_UW_FILE' => 'Názov súboru',
    'LBL_UW_FILES_QUEUED' => 'Nasledovné aktualizačné balíky sú pripravené k inštalácii:',
    'LBL_UW_FILES_REMOVED' => 'Nasledovné súbory budú odstránené zo systému:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => 'Kliknite na tlačítko Next/Ďalej k nahraniu aktualizačných balíkov.',
    'LBL_UW_FROZEN' => 'Pred pokračovaním nahrať balík.',
    'LBL_UW_HIDE_DETAILS' => 'Skryť detaily',
    'LBL_UW_IN_PROGRESS' => 'Práve prebieha',
    'LBL_UW_INCLUDING' => 'Vrátane',
    'LBL_UW_INCOMPLETE' => 'Nekompletné',
    'LBL_UW_MANUAL_MERGE' => 'Zlúčenie súborov',
    'LBL_UW_MODULE_READY' => 'Modul je pripravený na inštaláciu. Kliknutím na "Potvrdiť" budete pokračovať v inštalácii.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Neboli zistené žiadne uložené modernizácie',
    'LBL_UW_NONE' => 'Nič',
    'LBL_UW_OVERWRITE_DESC' => 'Všetky zmenené súbory budú prepísané, vrátane zákazníckych kódov a zmien šablón, ktoré ste vykonali. Ste si istý, že chcete pokračovať?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Vytvoriť položku úlohy pre ručné zlúčenie?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Chcete si poslať email s pripomienkou Ručného zlúčenia?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Súbory, vypísané nižšie, boli zmenené. Odstránte zaškrtnutie položiek, ktoré vyžadujú Ručné zlúčenie. <i>Kde boli zistené zmeny rozloženia vzhľadu boli automaticky neoznačené; zaškrtnite tie, ktoré chcete prepísať.</i>',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => '<i>Nevyžaduje sa Ručné zlúčenie.</i>',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => '<i>Nie je potrebné.</i>',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => '<i>Automaticky zachované súbory:</i>',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => '<i>Všetky predletové testy prebehli úspešne. </i>',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => '<i>Kliknite na "Next/Ďalší", ku skopírovaniu aktualizovaných súborov do systému.</i>',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<i><b>Poznámka:</b><br />Zbytok procesu modernizácie je povinný a je potrebné kliknúť na tlačítko "Ďalší", k jeho ukončeniu Pokiaľ nechcete pokračovať, kliknite na "Zrušiť"</i>',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => '<i>Zmeniť nastavenie všetkých súborov</i>',

    'LBL_UW_REBUILD_TITLE' => '<i>Obnoviť výsledok</i>',
    'LBL_UW_SCHEMA_CHANGE' => '<i>Zmeny schémy</i>',

    'LBL_UW_SHOW_COMPLIANCE' => '<i>Zobraziť zistené nastavenia</i>',
    'LBL_UW_SHOW_DB_PERMS' => '<i>Zobraziť chýbajúce databázové oprávnenia</i>',
    'LBL_UW_SHOW_DETAILS' => 'Zobraziť detaily',
    'LBL_UW_SHOW_DIFFS' => '<i>Zobraziť súbory vyžadujúce Ručné zlúčenie</i>',
    'LBL_UW_SHOW_NW_FILES' => '<i>Zobraziť súbory s chybnými oprávneniami</i>',
    'LBL_UW_SHOW_SCHEMA' => '<i>Zobraziť zápis zmeny schémy</i>',
    'LBL_UW_SHOW_SQL_ERRORS' => '<i>Zobraziť chybné databázové otázky</i>',
    'LBL_UW_SHOW' => 'Zobraziť',

    'LBL_UW_SKIPPED_FILES_TITLE' => '<i>Preskočené súbory</i>',
    'LBL_UW_SQL_RUN' => '<i>Zaškrtnúť, ak SQL bola spustená ručne</i>',
    'LBL_UW_START_DESC' => '<i>Tento sprievodca Vám pomôže pri modernizácii inštancie SuiteCRM</i>',
    'LBL_UW_START_DESC2' => 'Poznámka: Dôrazne odporúčame vytvoriť kópiu produkčného prostredia SuiteCRM a testovať aktualizácie pred nasadením do produkčného prostredia. Ak ste zmenili súbor "composer.json", po dokončení aktualizácie spustite prosím tento príkaz:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => '<i>Kliknite na "Ďalej" k vykonaniu kontroly pripravenosti systému k modernizácii. Kontrola zahŕňa oprávnenia k súborom, databázam a nastavenia servera.</i>',
    'LBL_UW_START_UPGRADED_UW_DESC' => '<i>Nový Sprievodca modernizáciou bude teraz pokračovať v procese modernizácie. Pokračujte v modernizácii, prosím.</i>',
    'LBL_UW_START_UPGRADED_UW_TITLE' => '<i>Vitajte v novom Sprievodcovi modernizáciou./i>',

    'LBL_UW_TITLE_CANCEL' => 'Zrušiť',
    'LBL_UW_TITLE_COMMIT' => '<i>Schváliť modernizáciu</i>',
    'LBL_UW_TITLE_END' => '<i>Prevziať hlásenie</i>',
    'LBL_UW_TITLE_PREFLIGHT' => '<i>Predletová kontrola</i>',
    'LBL_UW_TITLE_START' => 'Vitajte',
    'LBL_UW_TITLE_SYSTEM_CHECK' => '<i>Kontrola systému</i>',
    'LBL_UW_TITLE_UPLOAD' => '<i>Nahraný balík</i>',
    'LBL_UW_TITLE' => 'Sprievodca aktualizáciou',
    'LBL_UW_UNINSTALL' => '<i>Odinštalovať</i>',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => '<i>Prijať Licenciu</i>',
    'LBL_UW_CONVERT_THE_LICENSE' => '<i>Prevod Licencie</i>',

    'LBL_START_UPGRADE_IN_PROGRESS' => '<i>Prebieha Štart</i>',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Prebieha kontrola systému',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => '<i>Prebieha licenčná kontrola</i>',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => '<i>Prebieha predletová kontrola</i>',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => '<i>Prebieha kopírovanie súborov</i>',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => '<i>Prebieha schválenie a spustenie modernizácie</i>',
    'LBL_UW_COMMIT_DESC' => '<i>Kliknite na "Ďalší" k spusteniu ďalších modernizačných skriptov</i>',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => '<i>Prebiehajú modernizačné skripty</i>',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => '<i>Prebieha zhrnutie modernizácie</i>',
    'LBL_UPGRADE_IN_PROGRESS' => '<i>Prebieha</i>',
    'LBL_UPGRADE_TIME_ELAPSED' => '<i>Uplynutý čas</i>',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => '<i>Prebieha zrušenie modernizácie a čistenie</i>',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => '<i>Modernizácia môže nejaký čas trvať</i>',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => '<i>Prebieha kontrola Upload/nahrania</i>',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Náhrávánie aktualizačného balíčka ... ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => '<i>Sprievodca modernizáciou zachováva starú schému 451 </i>',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Nastavenie manuálneho výberu modernizácie poštovej schémy',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Nastavenie starého vkladania schém.',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Ukáž starú schému, ktorá má byť vložená',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Preskočené otázky',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Je požadovaná Verzia PHP 5 alebo vyššia.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Vaša verzia PHP nepodporuje SuiteCRM. Budete potrebovať nainštalovať verziu, kompatibilnú s aplikáciou SuiteCRM. Postupujte podľa matice kompatibility a vzťahujúcich sa poznámok pre podporovanú verziu PHP. Vaša verzia je',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP Backward Compatibility - kompatibilita na nižšie verzie PHP - je zapnutá. Nastavte zend.ze1_compatibility_mode na OFF, pre pokračovanie ďalej',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Akcia',
    'LBL_ML_CANCEL' => 'Zrušiť',
    'LBL_ML_COMMIT' => 'Schváliť',
    'LBL_ML_DESCRIPTION' => 'Popis',
    'LBL_ML_INSTALLED' => 'Dátum inštalácie',
    'LBL_ML_NAME' => 'Meno',
    'LBL_ML_PUBLISHED' => 'Dátum zverejnenia',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Neinštalovateľné',
    'LBL_ML_VERSION' => 'Verzia',
    'LBL_ML_INSTALL' => 'Inštalovať',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Vaša aktuálna verzia PHP je: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Odporúčaná verzia php je ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' alebo vyšší.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Sprievodca modernizáciou',
    'LBL_UPLOAD_SUCCESS' => 'Modernizačný balík bol úspešne nahratý. Kliknite na "Ďalší" k vykonaniu záverečnej kontroly.',
    'LBL_UW_TITLE_LAYOUTS' => 'Potvrdenie rozloženia',
    'LBL_LAYOUT_MODULE_TITLE' => 'Rozloženia',
    'LBL_LAYOUT_MERGE_DESC' => 'Tu sú k dispozícii nové polia, ktoré boli pridané ako časť tejto modernizácie a môžu byť automaticky pripojené do rozloženia existujúceho modulu. Ak sa chcete dozvedieť viac o nových poliach, prosím prejdite k Release Notes - Poznámky k vydaniu, pre verziu ktorú modernizujete.<br><br><br />Ak si neželáte pripojiť nové polia, prosím, odznačte modul a Vaše zákaznícke rozloženie zostane nezmenené. Polia budú dostupné v Štúdiu po modernizácii.',
    'LBL_LAYOUT_MERGE_TITLE' => 'Kliknite na "Ďalej" k potvrdeniu zmien a ukončeniu modernizácie.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Kliknite na "Ďalej" k dokončeniu modernizácie.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Potvrdenie rozloženia',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Potvrdiť rozloženie výsledkov',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Nasledovné rozloženia boli úspešne zlúčené:',
    'LBL_SELECT_FILE' => 'Výber súboru:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Nahratý súbor nie je kompatibilný s touto verziou SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Nahraný súbor nie je kompatibilný s touto verziou PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Nahratý súbor nie je kompatibilný s touto verziou SuiteCRM: ',
    'LBL_LANGPACKS' => 'Jazykové balíky' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Načítanie modulov' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Patch Upgrades' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Témy' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Tok procesov' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Upgrade' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Processing' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Kompatibilná verzia nie je nastavená v súbore manifestu',
    'LBL_UPGRD_CSTM_CHK' => 'Proces aktualizácie bude aktualizovať niektoré súbory, ale tieto súbory existujú aj vo vlastnom priečinku. Skontrolujte zmeny, skôr ako budete pokračovať:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Nahraté súbory presiahli direktívu upload_max_filesize v súbore php.ini.',
        2 => 'Nahraté súbory presiahli direktívu MAX_FILE_SIZE tak, že boli určené formulárom HTML.',
        3 => 'Nahrávané súbory boli nahraté len čiastočne.',
        4 => 'Neboli nahraté žiadne súbory.',
        5 => 'Neznáma chyba.',
        6 => 'Chýba dočasná zložka.',
        7 => 'Chyba pri zápise súboru na disk.',
        8 => 'Nahrávanie súboru bolo zastavené pre príponu',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Upozornenie: platnosť hesla nastavená na hodnotu žiadna!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Prosím tu aktualizujte svoje nastavenia',
);
