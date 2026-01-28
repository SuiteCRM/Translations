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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Nu se poate determina Grupul',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Nu se poate determina proprietarul',
    'ERR_UW_CONFIG_WRITE' => 'Eroare la actualizarea config.php cu noua versiune.',
    'ERR_UW_CONFIG' => 'Vă rugăm faceți fișierul config.php inscriptibil și reîncarcați aceasta pagină.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Director care nu poate fi scris',
    'ERR_UW_FILE_NOT_COPIED' => 'Fișierul nu a fost copiat',
    'ERR_UW_FILE_NOT_DELETED' => 'Problemă la eliminarea pachetului ',
    'ERR_UW_FILE_NOT_READABLE' => 'Fișierul nu a putut fi citit.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Fișierul nu poate fi mutat sau scris în',
    'ERR_UW_FLAVOR_2' => 'Actualizați Flavor: ',
    'ERR_UW_FLAVOR' => 'Varianta de sistem SuiteCRM: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log nu a putut fi creat/scris. Vă rugăm remediați permisiunile în directorul dumneavoastră SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload setat la o valoare mai mare decât 1. Vă rugăm schimbați aceasta în php.ini și restartați serverul de web.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Va rugam specificați un fișier si încercați din nou!',
    'ERR_UW_NO_FILES' => 'A apărut o eroare, nu au fost găsite fișiere de verificat.',
    'ERR_UW_NO_MANIFEST' => 'Fișierului zip îi lipsește fișierul manifest.php. Nu se poate continua.',
    'ERR_UW_NO_VIEW' => 'Vizualizare invalida specificata.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Format invalid.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Nu s-a putut crea directorul temp. Verificați permisiunile fișierului.',
    'ERR_UW_ONLY_PATCHES' => 'Puteți încărca doar patch-uri pe această pagină.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Au fost găsite erori în timpul verificării preliminare',
    'ERR_UW_UPLOAD_ERR' => 'A apărut o eroare la încărcarea fișierului, vă rugăm să încercați din nou!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Versiunea Sistemului SuiteCRM: ',
    'ERR_UW_PHP_VERSION' => 'Versiune PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'Versiunea Sistemului SuiteCRM: ',
    'ERR_UW_WRONG_TYPE' => 'Aceasta pagina nu este pentru rulare ',
    'LBL_BUTTON_BACK' => '< Înapoi',
    'LBL_BUTTON_CANCEL' => 'Anulați',
    'LBL_BUTTON_DELETE' => 'Șterge pachet',
    'LBL_BUTTON_DONE' => 'Efectuat',
    'LBL_BUTTON_EXIT' => 'Ieșire',
    'LBL_BUTTON_NEXT' => 'Următor >',
    'LBL_BUTTON_RECHECK' => 'Reverificați',
    'LBL_BUTTON_RESTART' => 'Reporniți',

    'LBL_UPLOAD_UPGRADE' => 'Încarcă pachetul de actualizare ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Copie de Rezervă Fișier',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Fișierele de rezervă din această actualizare pot fi găsite în',
    'LBL_UW_BACKUP' => 'Fisier Copie de Rezerva',
    'LBL_UW_CANCEL_DESC' => 'Modernizare a fost anulata. Fisierele temporare copiate si fisierele modernizate incarcate, au fost sterse.',
    'LBL_UW_CHECK_ALL' => 'Bifează tot',
    'LBL_UW_CHECKLIST' => 'Modernizeaza Pasi',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Copiile de rezervă ale Fișierelor Supra scrise se află în următorul director: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Îmbină manual următoarele fișiere: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Modernizeaza Procesul: Imbina Manual Fisiere',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Va rugam sa utilizati oricare metoda diff cu care sunteti familiarizat pentru a imbina aceste fisiere. Pana la finalizarea imbinarii, instalarea SuiteCRM va fi intr-un stare incerta si modernizare va fi incompleta.',
    'LBL_UW_COMPLETE' => 'Completă',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Toate Cerintele Setarilor de Sistem sunt Indeplinite',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Setari PHP: Trecere Apel Timp prin Referinta',
    'LBL_UW_COMPLIANCE_CURL' => 'Modul cURL',
    'LBL_UW_COMPLIANCE_IMAP' => 'Modul IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Modul MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_supraincarcare Parametru',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Setari PHP: Limitare de Memorie',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP setare: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Versiunea bazei de date minime',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Locatie php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Versiune Minima PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Setari PHP: Mod de Siguranta',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Setari Detectate',
    'LBL_UW_COMPLIANCE_XML' => 'Parsing de XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Suport Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Versiune PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'Fisire Copiate cu succes',

    'LBL_UW_DB_CHOICE1' => 'Modernizeaza Wizard Runs SQL',
    'LBL_UW_DB_CHOICE2' => 'Manual Interogari SQL',
    'LBL_UW_DB_ISSUES_PERMS' => 'Privilegii Baza de Date',
    'LBL_UW_DB_METHOD' => 'Metoda Actualizare Baza de Date',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABEL [table] ADAUGA COLOANA [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABEL [table] SCHIMBA COLOANA [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREAZA TABEL [table]',
    'LBL_UW_DB_NO_DELETE' => 'STERGE DIN [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABEL [table] ARUNCA COLOANA [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'ARUNCA TABEL [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Toate Privilegiile Disponibile',
    'LBL_UW_DB_NO_INSERT' => 'INSEREAZA IN [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECTEAZA [x] DIN [table]',
    'LBL_UW_DB_NO_UPDATE' => 'ACTULAIZARE [table]',
    'LBL_UW_DB_PERMS' => 'Privilegii Necesare',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Urmatoarele pachete de modernizare au fost instalate:',
    'LBL_UW_END_LOGOUT_PRE' => 'Actualizarea este completă.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Dati clic pe Executat pentru a iesi din Wizard-ul Modernizare.',
    'LBL_UW_END_LOGOUT' => 'Daca intentionati sa aplicati un alt pachet de modernizare prin utilizarea Wizard-ului Modernizare, deconectati-va si reconectati-va inainte de a face aceasta.',

    'LBL_UW_FILE_DELETED' => ' a fost eliminat.<br>',
    'LBL_UW_FILE_GROUP' => 'Grup',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Permisiuni Fisiere',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Toate fișierele sunt inscriptibile</b>',
    'LBL_UW_FILE_OWNER' => 'Proprietar',
    'LBL_UW_FILE_PERMS' => 'Permisiuni',
    'LBL_UW_FILE_UPLOADED' => ' a fost încărcat',
    'LBL_UW_FILE' => 'Numele fișierului',
    'LBL_UW_FILES_QUEUED' => 'Urmatoarele pachete de modernizare sunt gata de a fi instalate:',
    'LBL_UW_FILES_REMOVED' => 'Urmatoarele fisiere vor fi inlaturate din sistem:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Faceți clic pe Următorul pentru a încărca pachete de actualizare.</b>',
    'LBL_UW_FROZEN' => 'Incarcati un pachet inainte de a continua.',
    'LBL_UW_HIDE_DETAILS' => 'Ascunde detalii',
    'LBL_UW_IN_PROGRESS' => 'În Curs',
    'LBL_UW_INCLUDING' => 'Include',
    'LBL_UW_INCOMPLETE' => 'Incomplet',
    'LBL_UW_MANUAL_MERGE' => 'Fuzionare Fișier',
    'LBL_UW_MODULE_READY' => 'Modulul este pregătit de instalare. Apasă "Commit" pentru a continuă instalarea.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Nu au fost detectate inregistrari de Modernizari.',
    'LBL_UW_NONE' => 'Niciun',
    'LBL_UW_OVERWRITE_DESC' => 'Toate fisierele vor fi suprascrise, inclusiv orice particularizari de cod sau schimbari de sabloane pe care le-ati executat. Sunteti sigur ca doriti sa continuati?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Creati Item Sarcina pentru Fuzionare Manuala?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Trimite-ți un e-mail de reamintire pentru fuzionare manuală?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Fișierele enumerate mai jos au fost modificate. Debifați elementele care necesită o îmbinare manuală. <i>Orice modificări de aspect detectate sunt automat debifate; bifați orice aspect care ar trebui suprascris.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Nu este necesară îmbinarea manuală a fișierelor.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Nu este necesar.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Fișiere salvate automat:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Toate testele preliminare au fost trecute.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Faceți clic pe Următor pentru a copia fișierele actualizate în sistem.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Notă: </b> Restul procesului de actualizare este obligatoriu, apasând pe Next va necesita finalizarea procesuluip. Dacă nu doriți să continuați, faceți clic pe butonul Anulați.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Comutati toate fisierele',

    'LBL_UW_REBUILD_TITLE' => 'Refaceti rezultatul',
    'LBL_UW_SCHEMA_CHANGE' => 'Modificari schema',

    'LBL_UW_SHOW_COMPLIANCE' => 'Arata setarile detectate',
    'LBL_UW_SHOW_DB_PERMS' => 'Arata Baza de date',
    'LBL_UW_SHOW_DETAILS' => 'Arată detalii',
    'LBL_UW_SHOW_DIFFS' => 'Arata fisierele cerute de Manual Merge',
    'LBL_UW_SHOW_NW_FILES' => 'Arata fisierele cu Bad Permission',
    'LBL_UW_SHOW_SCHEMA' => 'Afiseaza Schema Change Script',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Afiseaza Interogari Bad',
    'LBL_UW_SHOW' => 'Arată',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Fisiere omise',
    'LBL_UW_SQL_RUN' => 'Verificati cand SQL a fost instalat manual',
    'LBL_UW_START_DESC' => 'Asistentul te va ajuta să faci actualizare la o versiune superioară a SuiteCRM.',
    'LBL_UW_START_DESC2' => 'Notă: Vă recomandăm să creați o copie a instanței SuiteCRM pe care o utilizați cum în producție, și testați pachetul de actualizare înainte de a implementa noua versiune. Dacă ați schimbat fișierul "composer.json" atunci, după finalizarea procesului de actualizare, executați comanda:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Faceți clic pe Următor pentru a efectua o verificare a sistemului dvs. pentru a vă asigura că sistemul este pregătit pentru actualizare. Verificarea include permisiunile de fișiere, privilegiile bazei de date și setările serverului.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Noul Upgrade Wizard va relua procesul de upgrade. Va rog sa continuati upgradarea.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Bun venit la noul Upgrade Wizard',

    'LBL_UW_TITLE_CANCEL' => 'Anulați',
    'LBL_UW_TITLE_COMMIT' => 'Faceti Upgradare',
    'LBL_UW_TITLE_END' => 'Interogatoriu',
    'LBL_UW_TITLE_PREFLIGHT' => 'Verificare Prezbor',
    'LBL_UW_TITLE_START' => 'Bine ai venit',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Verificare sistem',
    'LBL_UW_TITLE_UPLOAD' => 'Incarcati Pachetul',
    'LBL_UW_TITLE' => 'Asistent Actualizare',
    'LBL_UW_UNINSTALL' => 'Dezinstalează',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Acceptați Licență',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Convertiți Licență',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Start in curs',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Chec System in curs de desfasurare',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Verificare Licenta in curs',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Preflight Check in curs de desfasurare',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Copiere fisier in curs de desfasurare',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Commit Upgrade in cus de desfasurare',
    'LBL_UW_COMMIT_DESC' => 'Faceți clic pe Următor pentru a rula scripturi suplimentare de actualizare.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Upgrade Script-uri in curs de desfasurare',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Upgrade Cuprins in curs de desfasurare',
    'LBL_UPGRADE_IN_PROGRESS' => 'în progres     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Timp trecut',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Upgrade Anulare si Curatire in curs de desfasurare',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Upgrade-ul poate dura ceva timp',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Controalele Incarcati in curs de desfasurare',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Încarcă pachetul de actualizare ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Upgrade vechea schema 451 Wizard Drops',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Upgrade Manual Drop Schema',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Schema drop Method veche',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Aratati Schema veche care ar putea fi abandonata',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Interogari omise',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Este necesară versiunea PHP 5 sau o versiune superioară.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Versiunea dumneavoastră de PHP nu este compatibilă cu SuiteCRM. Va trebui să instalați o versiune compatibilă cu aplicația SuiteCRM. Vă rugăm să consultați Matricea de compatibilitate în notele de lansare pentru versiunile PHP acceptate. Versiunea dvs. este ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Modul de compatibilitate Php înapoi este activat. Setați zend.ze1_compatibility_mode pe Off pentru a continua',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Acţiune',
    'LBL_ML_CANCEL' => 'Anulați',
    'LBL_ML_COMMIT' => 'Aplică',
    'LBL_ML_DESCRIPTION' => 'Descriere',
    'LBL_ML_INSTALLED' => 'Data de instalare',
    'LBL_ML_NAME' => 'Nume',
    'LBL_ML_PUBLISHED' => 'Data publicării',
    'LBL_ML_TYPE' => 'Tip',
    'LBL_ML_UNINSTALLABLE' => 'Poate fi dezinstalat',
    'LBL_ML_VERSION' => 'Versiune',
    'LBL_ML_INSTALL' => 'Instalează',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Versiunea dvs. php actuala este: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Versiunea php recomandată este ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' sau mai sus.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Expert actualizare',
    'LBL_UPLOAD_SUCCESS' => 'Încărcarea pachetului s-a efectuat cu succes. Faceți clic pe Următor pentru a efectua o verificare finală.',
    'LBL_UW_TITLE_LAYOUTS' => 'Confirmați Machetă',
    'LBL_LAYOUT_MODULE_TITLE' => 'Planuri Generale',
    'LBL_LAYOUT_MERGE_DESC' => 'Există noi câmpuri disponibile care au fost adăugate ca parte a acestei actualizări și pot fi adăugate automat la layout-urile modulelor existente. Pentru a afla mai multe despre noile câmpuri, vă rugăm să consultați Notele de lansare pentru versiunea la care faceți upgrade.<br><br>Dacă nu doriți să adăugați câmpurile noi, vă rugăm să debifați modulul, iar layout-urile dvs. personalizate vor rămâne neschimbate. Câmpurile vor fi disponibile în Studio după actualizare. <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Apăsați „Următor” pentru a confirma modificările și pentru a termina actualizare.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Faceți clic pe Următor pentru a finaliza upgrade-ul.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Confirmați Machetă',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Confirmați machetele rezultatelor',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Următoarele aspecte au fost îmbinate cu succes:',
    'LBL_SELECT_FILE' => 'Selectați fișier:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Fișierul încărcat nu este compatibil cu aceasta versiune de SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Fișierul încărcat nu este compatibil cu această versiune de PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Fișierul încărcat nu este compatibil cu aceasta versiune de SuiteCRM: ',
    'LBL_LANGPACKS' => 'Pachete Limba' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Încărcare modul' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Actualizări de patch-uri' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Teme' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Flux de lucru' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Actualizare' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Se procesează' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Versiunea compatibilă nu este setată în fișierul manifest',
    'LBL_UPGRD_CSTM_CHK' => 'Procesul de actualizare va actualiza unele fișiere, dar aceste fișiere există deja și în folder/personalizat. Vă rugăm să verificați modificările înainte de a continua:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Fișierul încărcat depășește limita upload_max_filesize în php.ini.',
        2 => 'Fișierul încărcat depășește directiva MAX_FILSE_SIZE care a fost specificată în câmpul HTML.',
        3 => 'Fișierul încărcat a fost încărcat parțial.',
        4 => 'Nici un fișier nu a fost încărcat.',
        5 => 'Eroare necunoscută.',
        6 => 'Lipsește un fișier temporar.',
        7 => 'Scrierea fișierului pe disk a eșuat.',
        8 => 'Încărcarea fișierului a fost oprită de extensie.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Atenție: Expirarea parolei este setată la nimic!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Vă rugăm să actualizați setările aici',
);
