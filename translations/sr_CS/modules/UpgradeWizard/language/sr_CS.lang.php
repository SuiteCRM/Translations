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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Ne mogu da izdvojim grupu',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Ne mogu da izdvojim vlasnika',
    'ERR_UW_CONFIG_WRITE' => 'Greška pri ažuriranju config.php informacijama nove verzije.',
    'ERR_UW_CONFIG' => 'Molim,napravite svoj config.php fajl pisiv i ponovo učitajte ovu stranu.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Direktorijum nije pisiv',
    'ERR_UW_FILE_NOT_COPIED' => 'Fajl nije kopiran',
    'ERR_UW_FILE_NOT_DELETED' => 'Problem pri uklanjanju paketa ',
    'ERR_UW_FILE_NOT_READABLE' => 'Fajl nije čitljiv.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Fajl ne može biti premešten ili upisan u',
    'ERR_UW_FLAVOR_2' => 'Izdanje nadgradnje: ',
    'ERR_UW_FLAVOR' => 'SuiteCRM izdanje sistema: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log ne dopušta kreiranje/pisanje. Molim, ispravite dozvole u svom SuiteCRM direktorijumu.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload postavite neku vrednost veću od 1. Molim, promenite ovo u svom php.ini i restartujte server.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Molim, navedite fajl i pokušajte ponovo!',
    'ERR_UW_NO_FILES' => 'Došlo je do greške, nema fajlova za proveru.',
    'ERR_UW_NO_MANIFEST' => 'Zip fajlu nedostaje manifest.php fajl. Nije moguće nastaviti.',
    'ERR_UW_NO_VIEW' => 'Pogrešan izgled je izabran.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Nevažeći unos.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Ne mogu da kreiram privremeni direktoriju. Proverite dozvole korišćenja fajla.',
    'ERR_UW_ONLY_PATCHES' => 'Možete samo uvesti zakrpe na ovoj strani.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Pronađene su greške tokom provere',
    'ERR_UW_UPLOAD_ERR' => 'Desila se greška prilikom uvoženja datoteke, molim pokušajte opet!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM sistemska verzija: ',
    'ERR_UW_PHP_VERSION' => 'PHP verzija: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM sistemska verzija: ',
    'ERR_UW_WRONG_TYPE' => 'Ova stranica nije za pokretanje ',
    'LBL_BUTTON_BACK' => '< Nazad',
    'LBL_BUTTON_CANCEL' => 'Otkaži',
    'LBL_BUTTON_DELETE' => 'Obriši paket',
    'LBL_BUTTON_DONE' => 'Obavljeno',
    'LBL_BUTTON_EXIT' => 'Izađi',
    'LBL_BUTTON_NEXT' => 'Sledeći >',
    'LBL_BUTTON_RECHECK' => 'Ponovna provera',
    'LBL_BUTTON_RESTART' => 'Restartuj',

    'LBL_UPLOAD_UPGRADE' => 'Uvezi nadgradnju: ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Rezervni upis fajla',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Rezervni fajlovi za ovu nadogradnju se mogu naći u',
    'LBL_UW_BACKUP' => 'Fajl nadogradnje',
    'LBL_UW_CANCEL_DESC' => 'Rad Čarobnjaka nadgradnje je zaustavljen. Svi privremeni fajlovi i uveženi zip fajlovi su obrisani. <br><br>Pritisnite \"Obavljeno\" da bi ponovo pokrenuli Čarobnjaka nadgradnje.',
    'LBL_UW_CHECK_ALL' => 'Proveri sve',
    'LBL_UW_CHECKLIST' => 'Koraci nadgradnje',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups of Overwritten Files are in the following directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Proces nadgradnje: Ručno spoji datoteke',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Molim, koristite neku drugu Vama poznatu metodu za spajanje ovih fajlova. Dok to ne završite, Vaša SuiteCRM instalacija će biti u  neodređenom stanju, i nadgradnja nedovršena.',
    'LBL_UW_COMPLETE' => 'Završena',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Svi zahtevi sistemskih podešavanja su ispunjeni',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP podešavanja: Call Time Pass By Reference opcija',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL modul',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP modul',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings modul',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload parametar',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP podešavanje: Memorija ograničena',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP podešavanja: Tok',
    'LBL_UW_COMPLIANCE_DB' => 'Minimalna verzija baze podataka',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Lokacija fajla php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minimalna PHP verzija',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP podešavanje: Siguran način rada',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Pronađena podešavanja',
    'LBL_UW_COMPLIANCE_XML' => 'XML parsiranje',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Podrška za zip ',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Verzija',
    'LBL_UW_COPIED_FILES_TITLE' => 'Fajlovi su uspešno kopirani',

    'LBL_UW_DB_CHOICE1' => 'Čarobnjak nadgradnje koristi SQL',
    'LBL_UW_DB_CHOICE2' => 'Ručni SQL upiti',
    'LBL_UW_DB_ISSUES_PERMS' => 'Privilegije nad bazom',
    'LBL_UW_DB_METHOD' => 'Način ažuriranja baze',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Sve privilegije su na raspolaganju',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Neophodna prava',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Sledeće nadgradnje su instalirane:',
    'LBL_UW_END_LOGOUT_PRE' => 'Nadogradnja je izvršena.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Kliknite \'Done\' da bi izašli iz Čarobnjaka Nadogradnje.',
    'LBL_UW_END_LOGOUT' => 'Molim, odjavite se iz svog naloga ako planirate da nastavite nadgradnju dalje od ovog nivoa zakrpe/nadgradnje.',

    'LBL_UW_FILE_DELETED' => ' je uklonjeno.<br>',
    'LBL_UW_FILE_GROUP' => 'Grupa',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Dozvole nad fajlom',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Svi fajlovi su pisivi</b>',
    'LBL_UW_FILE_OWNER' => 'Vlasnik',
    'LBL_UW_FILE_PERMS' => 'Dozvole',
    'LBL_UW_FILE_UPLOADED' => ' je uvežen',
    'LBL_UW_FILE' => 'Ime fajla',
    'LBL_UW_FILES_QUEUED' => 'Sledeća nadgradnja je spremna za instaliranje:',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Kliknite Dalje da upload-ujete nadograđene pakete.</b>',
    'LBL_UW_FROZEN' => 'Zahtevani koraci moraju biti završeni pre nego što nastavite dalje.',
    'LBL_UW_HIDE_DETAILS' => 'Sakrij detalje',
    'LBL_UW_IN_PROGRESS' => 'U toku',
    'LBL_UW_INCLUDING' => 'Uključujući',
    'LBL_UW_INCOMPLETE' => 'Nepotpuno',
    'LBL_UW_MANUAL_MERGE' => 'Spoji fajlove',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Nisu nađene snimljene nadgradnje.',
    'LBL_UW_NONE' => 'Nijedno',
    'LBL_UW_OVERWRITE_DESC' => 'Svi izmenjeni fajlovi će biti pregaženi, uključujući svaku kastomizaciju koda i izmena šablona koje ste napravili. Da li ste sigurni da želite da nastavite?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Kreiraj element zadatka za ručno spajanje?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Pošaljite sebi elektronsku poruku kao podsetnik za ručno spajanje?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Fajlovi ispod su promenjeni. Otkaži stavke koje zahtevaju ručno spajanje. <i>Sve uočene promene u izgledu su automatski otkazane; obeležite svaku preko koje bi trebalo da se upiše.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Nije potrebno ručno spajanje fajlova.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Nije potrebno.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Fajlovi koji su automatski sačuvani:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Sve probe pre pokretanja su prošle. Pritisnite \"Sledeći\" da bi promene bile prihvaćene.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Kliknite Dalje da kopirate nagograđene fajlove na sistem.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Beleška: </b> Ostatak procesa nadogradnje je obavezan, i klikom Dalje će zahtevati od vas da završite proces. Ako ne želite da završite proces, kliknite Otkaži dugme.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Prebaci sve fajlove',

    'LBL_UW_REBUILD_TITLE' => 'Obnovi rezultate',
    'LBL_UW_SCHEMA_CHANGE' => 'Shema promena',

    'LBL_UW_SHOW_COMPLIANCE' => 'Prikaži uočena podešavanja',
    'LBL_UW_SHOW_DB_PERMS' => 'Prikaži nedostajuća prava baze',
    'LBL_UW_SHOW_DETAILS' => 'Prikaži detalje',
    'LBL_UW_SHOW_DIFFS' => 'Prikaži fajlove kod kojih je neophodno ručno spajanje',
    'LBL_UW_SHOW_NW_FILES' => 'Prikaži fajlove sa pogrešnim dozvolama',
    'LBL_UW_SHOW_SCHEMA' => 'Prikaži skriptu za izmenu šeme',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Prikaži pogrešne upite',
    'LBL_UW_SHOW' => 'Prikaži',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Preskočeni fajlovi',
    'LBL_UW_SQL_RUN' => 'Proveri kada je SQL ručno pokrenut',
    'LBL_UW_START_DESC' => 'Dobrodošli u Čarobnjaka nadgradnje SuiteCRM-a. Ovaj čarobnjak je predviđen da pomogne administratorima pri nadgradnji SuiteCRM-a. Molim, pažljivo pratite sledeća uputstva.',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Kliknite Dalje da izvršite proveru na sistemu da budete sigurni da je sistem spreman za nadogradnju. Provera obuhvata dozvole datoteke, privilegije baze podataka i podešavanja za server.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Novi Čarobnjak nadgradnje će sada nastaviti svoj rad. Molim, nastavite nadgradnju.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Dobrodošli u novi Čarobnjak nadgradnje',

    'LBL_UW_TITLE_CANCEL' => 'Otkaži',
    'LBL_UW_TITLE_COMMIT' => 'Prihvati nadgradnju',
    'LBL_UW_TITLE_END' => 'Izveštaj',
    'LBL_UW_TITLE_PREFLIGHT' => 'Provera pre pokretanja',
    'LBL_UW_TITLE_START' => 'Dobrodošli',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Provere sistema',
    'LBL_UW_TITLE_UPLOAD' => 'Uvezi nadogradnju',
    'LBL_UW_TITLE' => 'Čarobnjak nadgradnje',
    'LBL_UW_UNINSTALL' => 'Deinstaliraj',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Prihvati licencu',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Konvertuj licencu',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'U toku započinjanje',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'U toku sistemske provere',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'U toku provera licence',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'U toku provera pre pokretanja',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Kopiranje Datoteke u Toku',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'U toku izvršavanje nadgradnje',
    'LBL_UW_COMMIT_DESC' => 'Kliknite Dalje da pokrenete dodatne nadogradnje skripti.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Nadogradnja Skripti u Procesu',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'U toku nadgradnja sadržaja',
    'LBL_UPGRADE_IN_PROGRESS' => 'u toku     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Proteklo vreme',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Zaustavljanje nadgradnje i brisanje u toku',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Za nadogradnju će biti potrebno izvesno vreme',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'U toku provere uvoza',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Uvoz paketa nadgradnje u toku... ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Automatsko brisanje stare 451 šeme prilikom upgrejdovanja',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Ručno brisanje šeme nakon upgrejdovanja',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Metoda za brisanje stare šeme',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Prikaži staru šemu koja može biti obrisana',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Preskočeni upiti',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Zahteva se php verzija 5 ili novija.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'SuiteCRMne podržava vašu verziju PHP-a. Treba da instalirate verziju koja kompatibilina sa SuiteCRMaplikacijom. Konsultujte Matricu Kompatibilnosti u Beleškama O Izdanju u vezi sa podržnom verzijom PHP-a. Vaša verzija je',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Opcija PHP Backward Compatibility mode je uključena . Postavite zend.ze1_compatibility_mode na \"Off\" da bi nastavili dalje',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Akcija',
    'LBL_ML_CANCEL' => 'Otkaži',
    'LBL_ML_COMMIT' => 'Izvrši',
    'LBL_ML_DESCRIPTION' => 'Opis',
    'LBL_ML_INSTALLED' => 'Datum instaliranja',
    'LBL_ML_NAME' => 'Ime',
    'LBL_ML_PUBLISHED' => 'Datum objavljivanja',
    'LBL_ML_TYPE' => 'Tip',
    'LBL_ML_UNINSTALLABLE' => 'Nemoguće instalirati',
    'LBL_ML_VERSION' => 'Verzija',
    'LBL_ML_INSTALL' => 'Instaliraj',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Vaša aktuelna PHP verzija je: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Preporučena php verzija je ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' ili viša.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Čarobnjak za nadogradnju',
    'LBL_UPLOAD_SUCCESS' => 'Paket za nadogradnju je uspešno upload-ovan. Kliknite Dalje da izvršite poslednju proveru.',
    'LBL_UW_TITLE_LAYOUTS' => 'Potvrdite Rasporede',
    'LBL_LAYOUT_MODULE_TITLE' => 'Rasporedi',
    'LBL_LAYOUT_MERGE_DESC' => 'Postoje nova polja na raspolaganju koja su dodata u okviru ove nadogradnje i mogu se automatski dodati na vaše postojeće rasporede modula. Da saznate više o novim poljima, uputite se na Beleške o Izdanju za novu verziju koju nadograđujete.<br><br>Ukoliko ne želite da dodate nova polja, molimo vas poništite modul, i vaši prilagođeni rasporedi će ostati nepromenjeni. Polja će biti dostupna u Studiju posle nadogradnje.<br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Klikni Dalje da potvrdite promene i završite nadogradnju.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Kliknite Dalje da završite nadogradnju.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Potvrdite Rasporede',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Potvrdite Rezultate Rasporeda',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Sledeći rasporedi su uspešno spojeni:',
    'LBL_SELECT_FILE' => 'Izaberi Datoteku:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Uvezeni fajl nije kompatibilan sa ovom verzijom SuiteCRMaplikacije:',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Uvezena datoteka nije kompatibilna sa ovom verzijom PHP-a: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Uvezeni fajl nije kompatibilan sa ovom verzijom SuiteCRMaplikacije:',
    'LBL_LANGPACKS' => 'Jezički paketi' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Loader Modula' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Nadogradnje zakrpa' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Teme' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Proces rada' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Nadgradi' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Obrada' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Kompatibilna verzija nije setovana u manifest datoteci',
    'LBL_UPGRD_CSTM_CHK' => 'Upgrade process will update some files but these files also exist in custom/ folder. Please review the changes before continuing:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Učitana datoteka prevazilazi upload_max_filesize direktivu u php.ini',
        2 => 'Učitana datoteka prevazilazi MAX_FILE_SIZE direktivu navedenu u HTML formularu.',
        3 => 'Učitana datoteka je samo delimično učitana.',
        4 => 'Nijedna datoteka nije učitana.',
        5 => 'Nepoznata greška.',
        6 => 'Nedostaje privremena fascikla.',
        7 => 'Neuspešno pisanje datoteke na disk.',
        8 => 'Učitavanje datoteke zaustavljeno od strane ekstenzije.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
