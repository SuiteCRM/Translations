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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Kan ikke bestemme Gruppe',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Kan ikke bestemme Eier',
    'ERR_UW_CONFIG_WRITE' => 'En feil oppsto ved oppdatering av config.php.',
    'ERR_UW_CONFIG' => 'Vennligst forsikre deg om at din config.php-fil er endringsbar og last deretter opp siden på nytt. ',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Katalogen er ikke endringsbar',
    'ERR_UW_FILE_NOT_COPIED' => 'Filen ble ikke kopiert',
    'ERR_UW_FILE_NOT_DELETED' => 'Et problem oppsto ved fjerning av innpakning',
    'ERR_UW_FILE_NOT_READABLE' => 'Filen kunne ikke leses.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Filen kan ikke flyttes eller skrevet til',
    'ERR_UW_FLAVOR_2' => 'Oppgradér Flavor:',
    'ERR_UW_FLAVOR' => 'SuiteCRM systemflavor:',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log kunne ikke bli opprettet/skrevet til. Vennligst ordne opp i dine bevillinger i din SuiteCRM-katalog.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload ble satt til en høyere verdi enn 1. Vennligst endre dette i din php.ini og start deretter på web-serveren på nytt.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Vennligst spesifisér en fil og prøv igjen!',
    'ERR_UW_NO_FILES' => 'En feil oppsto, ingen filer som kan sjekkes ble funnet.',
    'ERR_UW_NO_MANIFEST' => 'Zip-filen mangler en manifest.php-fil. Kan ikke fortsette.',
    'ERR_UW_NO_VIEW' => 'En ugyldig visning ble valgt.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Ugyldig opplading.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Kan ikke opprette den tilfeldige katalogen. Sjekk din filbevillinger.',
    'ERR_UW_ONLY_PATCHES' => 'Du kan kun lade opp patcher på denne siden.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Feil ble funnet ved kjøring av forhåndstest',
    'ERR_UW_UPLOAD_ERR' => 'Det oppsto en feil ved opplading av filen, vennligst prøv igjen!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM-systemversjon: ',
    'ERR_UW_PHP_VERSION' => 'PHP-versjon: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM-systemversjon: ',
    'ERR_UW_WRONG_TYPE' => 'Denne siden er ikke til for kjøring',
    'LBL_BUTTON_BACK' => '< Tilbake',
    'LBL_BUTTON_CANCEL' => 'Avbryt',
    'LBL_BUTTON_DELETE' => 'Slett innpakningen',
    'LBL_BUTTON_DONE' => 'Ferdig',
    'LBL_BUTTON_EXIT' => 'Importering ferdig',
    'LBL_BUTTON_NEXT' => 'Neste >',
    'LBL_BUTTON_RECHECK' => 'Sjekk igjen',
    'LBL_BUTTON_RESTART' => 'Start på nytt',

    'LBL_UPLOAD_UPGRADE' => 'Lad opp en oppdatering:',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Sikkerhetskopiering av fil',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Sikkerhetskopierte filer fra denne oppdateringen kan bli funnet i',
    'LBL_UW_BACKUP' => 'SIKKERHETSKOPIERING av fil',
    'LBL_UW_CANCEL_DESC' => 'Oppdateringshjelpen har blitt avsluttet. Alle tilfeldige filer og den oppladede zip-filen har blitt slettet.<br><br>Klikk på "Neste" for å gjenoppstarte Oppdateringshjelpen. ',
    'LBL_UW_CHECK_ALL' => 'Kryss av alle',
    'LBL_UW_CHECKLIST' => 'Oppdateringsskritt',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backup av overskrevet filer finnes i følgende mappe: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manuelt Flett følgende filer: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Oppdateringsprosess: Manuelt fusjonerte filer',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Vennligst bruk den diffe-metoden som du er mest fortrolig med for å fusjonere disse filene. Før dette er gjort, kommer din SuiteCRM-installering til å være i en usikker stand, og oppdatering vil være ukomplett.',
    'LBL_UW_COMPLETE' => 'Fullført',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'All påkrevde systeminnstillinger er gjort',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP-innstilling: Samtaletid passert ved referanse',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL-modul',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP-modul',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings-modul',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload Parameter',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP-innstilling: Minnegrense',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP-innstilling: Strømming',
    'LBL_UW_COMPLIANCE_DB' => 'Laveste database-versjon',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Plassering for php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Laveste PHP-versjon',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP-innstillinger: Sikkerhetsmodus',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Oppdagede innstillinger',
    'LBL_UW_COMPLIANCE_XML' => 'XML-parsing',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip-støtte',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE-versjon',
    'LBL_UW_COPIED_FILES_TITLE' => 'Filene ble kopiert',

    'LBL_UW_DB_CHOICE1' => 'Oppdatér hjelp ved kjøring av SQL',
    'LBL_UW_DB_CHOICE2' => 'Manuelle SQL-forespørsler',
    'LBL_UW_DB_ISSUES_PERMS' => 'Database-rettigheter',
    'LBL_UW_DB_METHOD' => 'Oppdateringsmetode for database',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ENDRE TABELL [table] LEGG TIL KOLONNE [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ENDRE TABELL [table] BYTT KOLONNE [column]',
    'LBL_UW_DB_NO_CREATE' => 'OPPRETT TABELL [table]',
    'LBL_UW_DB_NO_DELETE' => 'SLETT FRA [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ENDRE TABELL [table] SLIPP KOLONNE [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'SLIPP TABELL [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Alle tilgjengelige rettigheter',
    'LBL_UW_DB_NO_INSERT' => 'SETT INN I [table]',
    'LBL_UW_DB_NO_SELECT' => 'VELG [x] FRA [table]',
    'LBL_UW_DB_NO_UPDATE' => 'OPPDATER [table]',
    'LBL_UW_DB_PERMS' => 'Nødvendige rettigheter',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'De følgende oppdateringene har blitt installert:',
    'LBL_UW_END_LOGOUT_PRE' => 'Oppgraderingen er ferdig',
    'LBL_UW_END_LOGOUT_PRE2' => 'Klikk Ferdig for å avslutte oppgraderingsveiviser',
    'LBL_UW_END_LOGOUT' => 'Vennligst logg ut fra din konto hvis du planlegger å oppdatere lenger enn dette patch-/oppdateringsnivået.',

    'LBL_UW_FILE_DELETED' => 'har blitt fjernet.<br>',
    'LBL_UW_FILE_GROUP' => 'Gruppe',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Filrettigheter',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Alle skrivbare filer</b>',
    'LBL_UW_FILE_OWNER' => 'Eier',
    'LBL_UW_FILE_PERMS' => 'Rettigheter',
    'LBL_UW_FILE_UPLOADED' => 'har blitt ladet opp',
    'LBL_UW_FILE' => 'Filnavn',
    'LBL_UW_FILES_QUEUED' => 'De følgende oppdateringene er klare for installering:',
    'LBL_UW_FILES_REMOVED' => 'Følgende filer fjernes fra systemet:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => 'Klikk Neste for å laste opp oppgraderings pakker',
    'LBL_UW_FROZEN' => 'Påkrevde skritt må fullføres før du kan fortsette.',
    'LBL_UW_HIDE_DETAILS' => 'Skjul detaljer',
    'LBL_UW_IN_PROGRESS' => 'Underveis',
    'LBL_UW_INCLUDING' => 'Inkluderer',
    'LBL_UW_INCOMPLETE' => 'Ufullstendig',
    'LBL_UW_MANUAL_MERGE' => 'Filfusjon',
    'LBL_UW_MODULE_READY' => 'Modulen er klare til å installeres. Klikk "Lagre" for å fortsette installasjonen.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Ingen registeroppdateringer ble oppdaget.',
    'LBL_UW_NONE' => 'Ingen',
    'LBL_UW_OVERWRITE_DESC' => 'Alle forandre filer vil bli skrevet over, inkludert eventuelle kodeforandringer eller malendringer du har gjort. Er du sikker på at du vil fortsette?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Vil du opprette en oppgave for manuell fusjonering?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Vil du sende deg selv en e-post for å minne på manuell fusjonering?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Filene som er listet nedenfor har blitt forandret. Avmerk de filene som du ønsker å fusjonere manuellt. <i>Hvis det oppdages forandringer i oppsettet vil de bli automatiskt avmarkert, du må derfor markere de forandringene som skal skrives over.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Manuell filfusjonering kreves ikke.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Trenges ikke.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Auto-bevarte filer:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Alle forhåndstester ble godkjente. Klikk på "Neste" for å gjennomføre endringene.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Klikk Neste for å kopiere oppgraderingsfilene til systemet',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => 'Merk: Resten av oppgraderingen er obligatorisk og ved å klikke på Neste må du fullføre prosessen. Hvis du ikke ønsker å fortsette klikk på Avbryt-knappen',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Knytt sammen alle filer',

    'LBL_UW_REBUILD_TITLE' => 'Gjenopprett resultater',
    'LBL_UW_SCHEMA_CHANGE' => 'Skjemaforandringer',

    'LBL_UW_SHOW_COMPLIANCE' => 'Vis oppdagede innstillinger',
    'LBL_UW_SHOW_DB_PERMS' => 'Vis manglende databaserettigheter',
    'LBL_UW_SHOW_DETAILS' => 'Vis detaljer',
    'LBL_UW_SHOW_DIFFS' => 'Vis filer som krever manuell fusjonering',
    'LBL_UW_SHOW_NW_FILES' => 'Vis filer som har feilaktige rettigheter',
    'LBL_UW_SHOW_SCHEMA' => 'Vis skript for skjemaendringer',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Vis feilaktige forespørsler',
    'LBL_UW_SHOW' => 'Vis',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Hopp over filer',
    'LBL_UW_SQL_RUN' => 'Sjekk når SQL har blitt kjørt automatiskt',
    'LBL_UW_START_DESC' => 'Velkommen til SuiteCRMs oppdateringshjelp. Denne hjelpen er til for å hjelpe administratorer når de oppdaterer sine SuiteCRM-instanser. Vennligst følg instruksjonene nøye.',
    'LBL_UW_START_DESC2' => 'Merk: Vi anbefaler at du oppretter en kopi av SuiteCRM forekomsten du bruker i produksjon, og teste oppgraderingspakken før du distribuerer den nye versjonen. Hvis du har endret filen "composer.json", så vennligst når oppgraderingsprosessen er fullført, løpe denne kommandere:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Klikk Neste for å utføre en sjekk av systemet for å sikre at det er klart for oppgradering. Sjekken inkluderer filrettigheter, database privilegier og serverinnstillinger.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Den nye oppdateringshjelpen kommer nå til å gjenoppta oppdateringsprosessen. Vennligst fortsett med oppdateringen. ',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Velkommen til den nye Oppdateringshjelpen',

    'LBL_UW_TITLE_CANCEL' => 'Avbryt',
    'LBL_UW_TITLE_COMMIT' => 'Gjennomfør oppdatering',
    'LBL_UW_TITLE_END' => 'Spør ut',
    'LBL_UW_TITLE_PREFLIGHT' => 'Forhåndstest',
    'LBL_UW_TITLE_START' => 'Velkommen',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Systemsjekker',
    'LBL_UW_TITLE_UPLOAD' => 'Lad opp oppdateringer',
    'LBL_UW_TITLE' => 'Oppgradering veiviser',
    'LBL_UW_UNINSTALL' => 'Avinstaller',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Aksepter lisens',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Konverter lisens',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Start i progresjon',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Systemsjekk i progresjon',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Lisenssjekk i progresjon',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Forhåndstest i progresjon',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Filkopiering pågår',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Gjennomfør oppdatering i progresjon',
    'LBL_UW_COMMIT_DESC' => 'Klikk Neste for å kjøre flere oppgraderings-scripts.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Oppgraderings-scripts utføres.',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Oppdater Oppsummering i progresjon',
    'LBL_UPGRADE_IN_PROGRESS' => 'i progresjon',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Tid som har gått',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Oppdater Avbryt og Rens i progresjon',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Oppdatering kan ta litt tid',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Lad opp progresjonssjekk',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Lader opp oppdateringspakke...',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Oppdaterer hjelp som dropper 451-skjema',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manuell oppdatering av dropp skjema',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Gammel dropp skjema-metode',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Vis gammelt skjema som ikke kunne droppes',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Spørringer som ble hoppet over',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php versjon 5 eller nyere er nødvendig.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Din versjon av PHP er ikke supportert av SuiteCRM. Du må installere en versjon som er kompatibel med SuiteCRM. Vennligst sjekk Compatibility Matrix i Release Notes for støttede PHP versjoner. Din versjon er',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode er slått på. Set zend.ze1_compatibility_mode på Av for å fortsette videre.',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Handling',
    'LBL_ML_CANCEL' => 'Avbryt',
    'LBL_ML_COMMIT' => 'Utfør',
    'LBL_ML_DESCRIPTION' => 'Beskrivelse',
    'LBL_ML_INSTALLED' => 'Installasjonsdato',
    'LBL_ML_NAME' => 'Navn',
    'LBL_ML_PUBLISHED' => 'Publiseringsdato',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Kan ikke innstallere',
    'LBL_ML_VERSION' => 'Versjon',
    'LBL_ML_INSTALL' => 'Installer',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Din nåværende php versjon er: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Den anbefalte php versjonen er ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' eller nyere.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Oppgraderingsveiviser',
    'LBL_UPLOAD_SUCCESS' => 'Oppgraderingspakken er lastet opp. Klikk Neste for å utføre en siste sjekk.',
    'LBL_UW_TITLE_LAYOUTS' => 'Bekreft oppsett',
    'LBL_LAYOUT_MODULE_TITLE' => 'Oppsett',
    'LBL_LAYOUT_MERGE_DESC' => 'Som en del av denne oppgraderingen er det lagt til nye felt. De kan automatisk legges til i det eksisterende moduloppsett. Hvis du vil vite mer om de nye feltene kan du se Release Notes for denne oppgraderingsversjonen. Hvis du ikke ønsker å legge til nye felt automatisk, vennligst fjern modulen og ditt tilpassede oppsett vil forbli uendret. Feltene vil være tilgjengelig i Studio etter oppgraderingen.',
    'LBL_LAYOUT_MERGE_TITLE' => 'Klikk Neste for å bekrefte endringene og avslutte oppgraderingen.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Klikk Neste for å avslutte oppgraderingen.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Bekreft oppsett',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Bekreft oppsett resultat',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Følgende oppsett ble vellykket knyttet sammen.',
    'LBL_SELECT_FILE' => 'Velg fil:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Den opplastede fil er ikke kompatibel med denne versjonen av SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Den opplastede filen er ikke kompatibel med denne versjonen av PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Den opplastede fil er ikke kompatibel med denne versjonen av SuiteCRM: ',
    'LBL_LANGPACKS' => 'Språkpakker' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Opplasting av moduler' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Oppgraderinger' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Tema:' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Arbeidsflyt' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Oppgradering' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Prosessering' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Kompatibel versjon er ikke angitt i manifestfilen',
    'LBL_UPGRD_CSTM_CHK' => 'Oppgraderingen vil oppdatere noen filer men disse filene finnes også i custom/ mappen. Les endringene før du fortsetter:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Den oppladede filen overgår den største filstørrelsen som er tillat i php.ini.',
        2 => 'Den oppladede filen overgår den største filstørrelsen som ble oppgitt i HTML-formularet.',
        3 => 'Den oppladede filen ble bare delvis oppladet.',
        4 => 'Ingen filer ble ladet opp.',
        5 => 'Ukjent feil.',
        6 => 'En tilfeldig mappe mangler.',
        7 => 'Mislyktes i å skrive filene til disken.',
        8 => 'Filoppladingen ble stoppet av en forlengelse.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Advarsel: passordutløp er satt til ingen!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Oppdater innstillingene her',
);
