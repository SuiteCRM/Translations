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
    'LBL_BASIC_SEARCH' => 'Filtro Rapido',
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzato',
    'LBL_BASIC_TYPE' => 'Tipo Semplice',
    'LBL_ADVANCED_TYPE' => 'Tipo Avanzato',
    'LBL_SYSOPTS_2' => 'Che tipo di database verrà utilizzato per l´istanza di SuiteCRM che si sta per installare?',
    'LBL_SYSOPTS_DB' => 'Specificare Tipo Database',
    'LBL_SYSOPTS_DB_TITLE' => 'Tipo Database',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Prima di procedere si prega di correggere i seguenti errori:',
    'ERR_DB_VERSION_FAILURE' => 'Impossibile controllare la versione del database.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Si prega di fornire un nome utente all´utente amministratore di SuiteCRM.',
    'ERR_ADMIN_PASS_BLANK' => 'Si prega di fornire una password all´utente amministratore di SuiteCRM.',

    'ERR_CHECKSYS' => 'Sono stati rilevati degli errori durante il controllo di compatibilità. Per fare in modo che l´installazione di SuiteCRM funzioni correttamente, si prega di prendere le misure adeguate per risolvere i problemi elencati sotto e premere il tasto "ricontrolla" o riprovare nuovamente l´installazione.',
    'ERR_CHECKSYS_CALL_TIME' => 'Consenti il Riferimento del Passaggio del Tempo in Chiamata Attivo (questo dovrebbe esser impostato a Disattivato in php.ini)',
    'ERR_CHECKSYS_CURL' => 'Non trovato: lo schedulatore di SuiteCRM verrà eseguito con funzionalità limitate.',
    'ERR_CHECKSYS_IMAP' => 'Non trovato: le email in arrivo e le campagne (Email) richiedono librerie IMAP. Nessuna delle due funzionerà.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Imposta questo a',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M o più nel file php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Attenzione: Non scrivibile',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'La versione di php utilizzata non è supportata da SuiteCRM. E´necessaria installare una versione compatibile con l´applicazione SuiteCRM. Per conoscere le versioni PHP supportate si prega di consultare la matrice di compatibilità nelle Release Notes. La versione usata è ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'La versione di IIS utilizzata non è supportata da SuiteCRM.  E´ necessaria installare una versione compatibile con l´applicazione SuiteCRM. Per conoscere le versioni IIS supportate si prega di consultare la matrice di compatibilità nelle Release Notes. La versione usata è',
    'ERR_CHECKSYS_FASTCGI' => 'Si rileva che non è utilizzato un mapping per il gestore FastCGI per PHP. Sarà necessario installare/configurare  una versione compatibile con questa applicazione di SuiteCRM. Si prega di consultare la Matrice di Compatibilità nelle note di rilascio per le versioni supportate. Per maggiori dettagli visitare <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a>',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Per una prestazione ottimale dell´utilizzo di IIS/FastCGI sapi, imposta fastcgi.logging a 0 nel file php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Database non disponibile',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Supporto di Database non trovato. Si prega di assicurarsi di avere i drivers necessari per uno dei seguenti tipi di Database supportati:MySQL, MS SQLServer, o Oracle. Potrebbe essere necessario decommentare l´estensione nel file php.ini, o ricompilare con il file binario giusto, a seconda della versione di PHP. Si prega di consultare il Manuale PHP per ulteriori informazioni su come attivare il Supporto di Database',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Le funzioni associate a librerie XML Parser richieste dall´applicazione di SuiteCRM non sono state trovate. Potrebbe essere necessario decommentare l´estensione nel file php.ini, o ricompilare con il file binario giusto, a seconda della versione di PHP. Per ulteriori informazioni si prega di consultare il Manuale PHP.',
    'ERR_CHECKSYS_MBSTRING' => 'Le funzioni associate all´estensione di PHP Multibyte Strings (mbstring), richieste dall´applicazione di SuiteCRM, non sono state trovate. <br /><br />Generalmente, il modulo mbstring non è abilitato di default in PHP e deve essere attivato con -- attiva-mbstring quando il PHP binario è costruito. Si prega di consultare il Manuale PHP per ulteriori informazioni su come abilitare il supporto mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Il file di configurazione esiste ma non è scrivibile. Si prega di procedere con le fase necessarie per rendere il file scrivibile. A seconda del sistema operativo, questo potrebbe richiedere di modificare i permessi eseguendo chmod 766, o di cliccare il tasto destro sul nome del file per accedere alle proprietà e togliere l´opzione di sola lettura.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Il file di configurazione override esiste ma non è scrivibile. Si prega di seguire gli step necessari per rendere il file scrivibile. A seconda del sistema operativo, questo potrebbe richiedere un cambiamento dei permessi eseguendo chmod 766 oppure fare clic destro sul nome per accedere alle proprietà e deselezionare l´opzione di sola lettura.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'La Directory personalizzata esiste ma non è scrivibile. Potrebbe essere necessario modificare i permessi su di essa (chmod 766) o cliccare il tasto destro su questa e togliere l´opzione di sola lettura, a seconda del sistema operativo in uso. Si prega di procedere con le fase necessarie per rendere il file scrivibile.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "I file o le directory elencati di seguito non sono scrivibili o sono mancanti e non possono essere creati. A seconda del sistema operativo in uso, per correggere questo potrebbe essere richiesto di modificare le autorizzazioni sui file o le directory padre (chmod 766), o cliccare il tasto destro sulla directory padre per togliere l´opzione \"sola lettura\" e applicarla alle sottocartelle.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Le funzioni associate a librerie XML Parser richieste dall´applicazione di SuiteCRM non sono state trovate. Potrebbe essere necessario decommentare l´estensione nel file php.ini, o ricompilare con il file binario giusto, a seconda della versione di PHP. Per ulteriori informazioni si prega di consultare il Manuale PHP.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'File di configurazione personalizzato',
    'ERR_CHECKSYS_SAFE_MODE' => 'Modalità Safe è attiva (si può disattivare in php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Non trovato: con la compressione zlib la performance di SuiteCRM migliora enormemente.',
    'ERR_CHECKSYS_ZIP' => 'Supporto ZIP non trovato: SuiteCRM necessita di supporto ZIP per elaborare file compressi.',
    'ERR_CHECKSYS_PCRE' => 'Libreria PCRE non trovata: SuiteCRM necessita della libreria PCRE per elaborare espressioni regolari in stile Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Libreria PCRE versione: SuiteCRM necessita della libreria PCRE 7.0 o successiva per elaborare espressioni regolari in stile Perl.',
    'ERR_DB_ADMIN' => 'Il nome utente e/o la password dell´amministratore del database non sono validi, e questo potrebbe causare una mancanza di connessione col database. Si prega di inserire un nome utente e una password validi (Errore:',
    'ERR_DB_ADMIN_MSSQL' => 'Il nome utente e/o la password dell´amministratore del database non sono validi, e questo potrebbe causare una mancanza di connessione col database. Si prega di inserire un nome utente e una password validi.',
    'ERR_DB_EXISTS_NOT' => 'Il database specificato non esiste.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Database già esistente con dati di validi di configurazione. Per eseguire un\' installazione con il database scelto, si prega di eseguire nuovamente l\' installazione e scegliere: "Svuota e ricrea le tabelle esistenti di SuiteCRM?" Per eseguire l´aggiornamento utilizza il Wizard nel pannello di amministrazione. Si prega di leggere la documentazione per l\'aggiornamento che si trova <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">qui</a>.',
    'ERR_DB_EXISTS' => 'Il nome del Database fornito esiste già -- non è possibile creare un altro database con lo stesso nome.',
    'ERR_DB_EXISTS_PROCEED' => 'Il nome del Database fornito esiste già. E´ possibile<br />1. cliccare il pulsante Indietro e scegliere un nuovo nome<br />2. cliccare Avanti e continuare ma tutte le tabelle e i dati del database verranno eliminati.',
    'ERR_DB_HOSTNAME' => 'Il nome dell´Host non può essere vuoto.',
    'ERR_DB_INVALID' => 'Tipo Database selezionato Non Valido.',
    'ERR_DB_LOGIN_FAILURE' => 'L´host, il nome utente e/o la password del database non sono validi e non si può stabilire la connessione al database. Si prega di inserire un host, un nome utente e una password validi.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'L´host, il nome utente e/o la password del database non sono validi e non si può stabilire la connessione al database. Si prega di inserire un host, un nome utente e una password validi.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'L´host, il nome utente e/o la password del database non sono validi e non si può stabilire la connessione al database. Si prega di inserire un host, un nome utente e una password validi.',
    'ERR_DB_MYSQL_VERSION' => 'La versione di MySQL (%s) non è supportata da SuiteCRM. E´ necessario installare una versione che sia compatibile con l´applicazione SuiteCRM. Si prega di consultare la matrice di compatibilità nelle note di rilascio per prendere visione delle versioni MySQL supportate.',
    'ERR_DB_NAME' => 'Il nome del Database non può essere vuoto.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Il nome del database non può contenere '\\', '/', o '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Il nome del database non può iniziare con un numero, '#', o '@' e non può contenere uno spazio, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', o '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Il nome del database può contenere solo caratteri alfanumerici e simboli'#', '_' or '$'",
    'ERR_DB_PASSWORD' => 'Le passwords fornite per l´amministratore del database di SuiteCRM non corrispondono. Si prega di inserire nuovamente le stesse password nei campi passwords.',
    'ERR_DB_PRIV_USER' => 'Fornire il nome utente dell´amministratore del database. L´utente è richiesto per la connessione inziale al database.',
    'ERR_DB_USER_EXISTS' => 'Il nome utente dell´utente del database di SuiteCRM esiste già -- non è possibile crearne un altro con lo stesso nome. Si prega si inserire un nuovo nome utente.',
    'ERR_DB_USER' => 'Inserire il nome utente per l´amministratore del database di SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'Prima di procedere si prega di correggere i seguenti errori:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Le passwords fornite per l´utente del database di SuiteCRM non corrispondono. Si prega di inserire nuovamente le stesse password nei campi passwords.',
    'ERR_ERROR_GENERAL' => 'Sono stati riscontrati i seguenti errori:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Impossibile cancellare il file:',
    'ERR_LANG_MISSING_FILE' => 'Impossibile trovare il file:',
    'ERR_LANG_NO_LANG_FILE' => 'Nessun file del pacchetto lingua disponibile in include/language:',
    'ERR_LANG_UPLOAD_1' => 'Si è verificato un problema durante il caricamento. Si prega di riprovare.',
    'ERR_LANG_UPLOAD_2' => 'I pacchetti lingua devono essere file ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP potrebbe non spostare il file temporaneo nella directory di aggiornamento.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'La log directory fornita non è una directory valida.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'La log directory fornita non è una directory scrivibile.',
    'ERR_NO_DIRECT_SCRIPT' => 'Impossibile elaborare lo script direttamente.',
    'ERR_NO_SINGLE_QUOTE' => 'Non puoi usare le virgolette semplici per ',
    'ERR_PASSWORD_MISMATCH' => 'Le password dell´utente amministratore di SuiteCRM non combaciano. Si prega di inserire nuovamente le stesse password nei campi password.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Impossibile scrivere sul file <span class=stop>config.php</span>',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Puoi continuare l´installazione creando manualmente il file config.php e incollando le informazioni di configurazione di seguito nel file config.php. Tuttavia, è <strong>necessario</strong> creare il file config.php prima di passare allo step successivo.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Ti sei ricordato di creare il file config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Attenzione: impossibile scrivere nel file config.php. Assicurarsi che esista.',
    'ERR_PERFORM_HTACCESS_1' => 'Impossibile scrivere su',
    'ERR_PERFORM_HTACCESS_2' => 'file.',
    'ERR_PERFORM_HTACCESS_3' => 'Se vuoi proteggere il tuo log file dall´essere accessibile via browser, crea un file .htaccess nelle tua log directory con la riga:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Non è stato possibile rilevare una connessione Internet.</b> Quando disponi di una connessione, visita il sito <a href="https://www.suitecrm.com/">https://www.suitecrm.com</a> per registarti in SuiteCRM. Facendoci conoscere un po come la tua azienda utilizza SuiteCRM, possiamo garantire di fornire sempre la giusta applicazione per le tue esigenze aziendali.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Directory di sessione non valida.',
    'ERR_SESSION_DIRECTORY' => 'Directory di sessione non scrivibile.',
    'ERR_SESSION_PATH' => 'E´ richiesto il percorso di sessione se si desidere specificare il proprio.',
    'ERR_SI_NO_CONFIG' => 'Non hai incluso config_si.php nella root del documento, o non hai definito $sugar_config_si in config.php',
    'ERR_SITE_GUID' => 'E´ richiesta l´ID di applicazione se si desidera specificare la propria.',
    'ERROR_SPRITE_SUPPORT' => "Al momento non siamo in grado di individuare la libreria GD, di conseguenza non sarà possibile utilizzare la funzionalità di Sprite CSS.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Attenzione: La tua configurazione PHP dovrebbe essere cambiata per poter caricare file di almeno 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Dimensioni File da caricare',
    'ERR_URL_BLANK' => 'Fornire l´URL per l´instanza di SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Impossibile individuare l´installazione del record di',
    'ERROR_MANIFEST_TYPE' => 'Il file Manifest deve specificare il tipo di pacchetto.',
    'ERROR_PACKAGE_TYPE' => 'Il file Manifest specifica un tipo di pacchetto non riconosciuto',
    'ERROR_VERSION_INCOMPATIBLE' => 'Il file caricato non è compatibile con questa versione di SuiteCRM: ',

    'LBL_BACK' => 'Indietro',
    'LBL_CANCEL' => 'Annulla',
    'LBL_ACCEPT' => 'Accetta',
    'LBL_CHECKSYS_CACHE' => 'Directory Cache Sub scrivibili',
    'LBL_DROP_DB_CONFIRM' => 'Nome del Database esistente.<br>E´ possibile:<br>1. Cliccare su Annulla e scegliere un nuovo nome del database, o<br>2. Cliccare su Accetta e continuare. Tutte le cartelle esistenti nel database saranno eliminate. <strong>Questo significa che tutte le tabelle e i dati pre-esistenti saranno spazzati via.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Componente',
    'LBL_CHECKSYS_CONFIG' => 'File di configurazione SuiteCRM scrivibile (config.php)',
    'LBL_CHECKSYS_CURL' => 'Modulo cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Directory personalizzata scrivibile',
    'LBL_CHECKSYS_DATA' => 'Sottocartelle Dati scrivibili',
    'LBL_CHECKSYS_IMAP' => 'Modulo IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Modulo Stringhe MB',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Nessun Limite)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Illimitato)',
    'LBL_CHECKSYS_MEM' => 'Limite Memoria PHP',
    'LBL_CHECKSYS_MODULE' => 'File e sottodirectory scrivibili dei moduli',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Non eseguibile',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'Posizione del file di configurazione PHP (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver',
    'LBL_CHECKSYS_PHPVER' => 'Versione PHP',
    'LBL_CHECKSYS_IISVER' => 'Versione IIS',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Ri-controllare',
    'LBL_CHECKSYS_STATUS' => 'Stato',
    'LBL_CHECKSYS_TITLE' => 'Accettazione Sistema di Controllo',
    'LBL_CHECKSYS_XML' => 'Parsing XML',
    'LBL_CHECKSYS_ZLIB' => 'Modulo di compressione ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Modulo Handling ZIP',
    'LBL_CHECKSYS_PCRE' => 'Libreria PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Si prega di correggere i seguenti files o directory prima di procedere:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Si prega di correggere le seguenti directory dei moduli e i file all´interno di queste prima di procedere:',
    'LBL_CHECKSYS_UPLOAD' => 'Directory di upload scrivibile',
    'LBL_CLOSE' => 'Chiudi',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'essere creato',
    'LBL_CONFIRM_DB_TYPE' => 'Tipo Database',
    'LBL_CONFIRM_NOT' => 'non',
    'LBL_CONFIRM_TITLE' => 'Conferma Impostazioni',
    'LBL_CONFIRM_WILL' => 'sarà',
    'LBL_DBCONF_DB_DROP' => 'Elimina Tabelle',
    'LBL_DBCONF_DB_NAME' => 'Nome Database',
    'LBL_DBCONF_DB_PASSWORD' => 'Password Utente Database SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'Inserisci nuovamente la password dell´utente del database di SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'Nome Utente Database SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Nome Utente Database SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Nome Utente Amministratore del Database',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Password Amministratore del Database',
    'LBL_DBCONF_COLLATION' => 'Riepilogo',
    'LBL_DBCONF_CHARSET' => 'Set di Caratteri',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Configurazione Database avanzata',
    'LBL_DBCONF_DEMO_DATA' => 'Popolare il Database con dati di demo?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Scegli Dati Demo',
    'LBL_DBCONF_HOST_NAME' => 'Nome Host',
    'LBL_DBCONF_HOST_INSTANCE' => 'Istanza Host',
    'LBL_DBCONFIG_SECURITY' => 'Per motivi di sicurezza, è possibile specificare un utente esclusivo del database per connettersi al database di SuiteCRM. Questo utente deve essere in grado di scrivere, aggiornare, e recuperare dati nel database di SuiteCRM che verrà creato per questa istanza. Questo utente può essere l´amministratore del database specificato sopra, oppure è possibile fornire le informazioni dell´utente nuovo o esistente del database.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Fornire utente esistente',
    'LBL_DBCONFIG_CREATE_DD' => 'Definire l´utente da creare',
    'LBL_DBCONFIG_SAME_DD' => 'Uguale all´utente amministratore',
    'LBL_DBCONF_TITLE' => 'Configurazione Database',
    'LBL_DBCONF_TITLE_NAME' => 'Fornire Nome Database',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Fornire le Informazioni Utente del Database',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Password',
    'LBL_DISABLED_DESCRIPTION_2' => 'Dopo questa modifica, cliccare il pulsante "Inizia" di seguito per iniziare l´installazione. <i>Una volta completata l´installazione, modificare il valore da \'installer_locked\' a \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Il programma di installazione è già stato eseguito una volta. Per misura di sicurezza, è stata disabilitata l´esecuzione di una seconda volta. Se sei sicuro di voler eseguirlo ancora, vai nel file config.php e individua (o aggiungi) una variabile chiamata \'installer_locked\' per impostarla in \'false\'. La riga dovrebbe essere simile a questa:',
    'LBL_DISABLED_HELP_1' => 'Per supporto nella fase di installazione, si prega di visitare SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'Forums di supporto',
    'LBL_DISABLED_TITLE_2' => 'Installazione di SuiteCRM è stata Disabilitata',
    'LBL_HELP' => 'Aiuto',
    'LBL_INSTALL' => 'Installa',
    'LBL_INSTALL_TYPE_TITLE' => 'Opzioni Installazioni',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Scegli Tipo Installazione',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Installazione Tipica</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Installazione Personalizzata</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Richiede informazioni minime per l´installazione. Consigliato per nuovi utenti.',
    'LBL_INSTALL_TYPE_MSG3' => 'Fornisce opzioni aggiuntive da impostare durante l´installazione. Molte di queste opzioni sono anche disponibili dopo l´installazione nel pannello di amministrazione. Consigliato per utenti avanzati.',
    'LBL_LANG_1' => 'Per utilizzare una lingua diversa dalla lingua predefinita di SuiteCRM (US-English), è possibile in questo momento caricare e installare il pacchetto lingua. Sarà possibile caricare e installare pacchetti lingua anche dall´interno dell´applicazione. Se vuoi saltare questo passaggio, clicca Avanti.',
    'LBL_LANG_BUTTON_COMMIT' => 'Installa',
    'LBL_LANG_BUTTON_REMOVE' => 'Cancella',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Disinstalla',
    'LBL_LANG_BUTTON_UPLOAD' => 'Carica',
    'LBL_LANG_NO_PACKS' => 'nessuno',
    'LBL_LANG_PACK_INSTALLED' => 'I seguenti pacchetti lingua sono stati installati:',
    'LBL_LANG_PACK_READY' => 'I seguenti pacchetti lingua sono pronti per essere installati:',
    'LBL_LANG_SUCCESS' => 'Il pacchetto lingua è stato caricato con successo.',
    'LBL_LANG_TITLE' => 'Pacchetto Lingua',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Installazione di SuiteCRM in corso. L´operazione potrà richiedere alcuni minuti.',
    'LBL_LANG_UPLOAD' => 'Carica il Pacchetto Lingua',
    'LBL_LICENSE_ACCEPTANCE' => 'Accetazione di Licenza',
    'LBL_LICENSE_CHECKING' => 'Controllo del sistema per la compatibilità.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Controllo Ambiente',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verifica credenziali del DB.',
    'LBL_LICENSE_CHECK_PASSED' => 'Il sistema ha superato il controllo di compatibillità.',
    'LBL_CREATE_CACHE' => 'Preparo Istallazione...',
    'LBL_LICENSE_REDIRECT' => 'Reindirizzamento in',
    'LBL_LICENSE_I_ACCEPT' => 'Accetta',
    'LBL_LICENSE_PRINTABLE' => ' Vista stampabile ',
    'LBL_PRINT_SUMM' => 'Stampa Sommario',
    'LBL_LICENSE_TITLE_2' => 'Licenza SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dott.',

    'LBL_ML_ACTION' => 'Azione',
    'LBL_ML_DESCRIPTION' => 'Descrizione',
    'LBL_ML_INSTALLED' => 'Data Installazione',
    'LBL_ML_NAME' => 'Nome',
    'LBL_ML_PUBLISHED' => 'Data Pubblicazione',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Disinstallabile',
    'LBL_ML_VERSION' => 'Versione',
    'LBL_MSSQL' => 'Server SQL',
    'LBL_MSSQL2' => 'Server SQL (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Driver Microsoft SQL Server per PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (estensione mysqli)',
    'LBL_NEXT' => 'Avanti',
    'LBL_NO' => 'No',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Impostazioni Password dell´amministratore',
    'LBL_PERFORM_CONFIG_PHP' => 'Creazione file di configurazione di SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Creazione database</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>attivo</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Creazione nome utente e password del database...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Creazione Dati predefiniti di SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Creazione Operazioni Pianificate predefinite',
    'LBL_PERFORM_DEFAULT_USERS' => 'Creazione utenti predefiniti',
    'LBL_PERFORM_DEMO_DATA' => 'Popolamento delle tabelle del database con dati demo (questo potrebbe richiedere un po´ di tempo)',
    'LBL_PERFORM_DONE' => 'fatto<br>',
    'LBL_PERFORM_FINISH' => 'Termina',
    'LBL_PERFORM_OUTRO_1' => 'Il setup di SuiteCRM',
    'LBL_PERFORM_OUTRO_2' => 'è ora completo!',
    'LBL_PERFORM_OUTRO_3' => 'Tempo totale:',
    'LBL_PERFORM_OUTRO_4' => 'secondi.',
    'LBL_PERFORM_OUTRO_5' => 'Memoria indicativa usata:',
    'LBL_PERFORM_OUTRO_6' => 'bytes.',
    'LBL_PERFORM_SUCCESS' => 'Con successo!',
    'LBL_PERFORM_TABLES' => 'Creazione Tabelle dell´appplicazione SuiteCRM, verifica tabelle e metadati di relazione',
    'LBL_PERFORM_TITLE' => 'Esegui Setup',
    'LBL_PRINT' => 'Stampa',
    'LBL_REG_CONF_1' => 'Si prega di compilare il breve form di seguito per ricevere annunci di prodotto, notizie sui corsi di formazione, offerte speciali e inviti ad eventi speciali dalla SuiteCRM. Noi non vendiamo, condividiamo o distribuiamo le informazioni raccolte qui a terze parti.',
    'LBL_REG_CONF_3' => 'Grazie per esserti registrato. Cliccare sul pulsante "Fine" per accedere a SuiteCRM. La prima volta è necessario accedere al sistema utilizzando il nome utente "admin" e la password inserita nello step 2.',
    'LBL_REG_TITLE' => 'Registrazione',

    'LBL_REQUIRED' => '* Campo obbligatorio',

    'LBL_SITECFG_ADMIN_Name' => 'Nome Amministratore di SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Inserire nuovamente la password dell´utente amministratore di SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'Password Utente Admin di SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'ID Applicazione',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Se selezionato, dovrai fornire un ID di applicazione per annullare l´ID generato automaticamente. L´ID assicura che le sessioni di un istanza SuiteCRM non vengano utilizzate da altre istanze. Se disponi di un cluster di installazioni di SuiteCRM, devono tutte condividere lo stesso ID di applicazione.',
    'LBL_SITECFG_CUSTOM_ID' => 'Fornire ID della propria Applicazione',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Se selezionato, devi specificare una directory log per sovrascrivere la directory predefinita per il log di SuiteCRM. Indipendentemente da dove si trova il file di log, l´accesso a questo tramite un web browser sarà limitato tramite un .htaccess redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Utilizzare una Directory di Log personalizzata',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Se selezionato, devi fornire una cartella sicura per memorizzare le informazioni della sessione di SuiteCRM. Questo può essere fatto per evitare che i dati di sessione siano vulnerabili su servers condivisi.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Utilizzare una directory di sessione personalizzata per SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Prima di procedere si prega di correggere i seguenti errori:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Directory Log',
    'LBL_SITECFG_SESSION_PATH' => 'Percorso alla directory di sessione <br>(deve essere scrivibile)',
    'LBL_SITECFG_SITE_SECURITY' => 'Selezionare le opzioni di sicurezza',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Se selezionato, il sistema periodicamente controllerà se sono disponibili versioni aggiornate dell´applicazione.',
    'LBL_SITECFG_SUITE_UP' => 'Controllo automatico degli aggiornamenti?',
    'LBL_SITECFG_TITLE' => 'Configurazione Sito',
    'LBL_SITECFG_TITLE2' => 'Identificare Utente Amministratore',
    'LBL_SITECFG_SECURITY_TITLE' => 'Sicurezza del sito',
    'LBL_SITECFG_URL' => 'URL Instanza di SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Inviare statistiche anonime di utilizzo?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Se selezionato, SuiteCRM invierà statistiche <b>anonime</b> sulla tua installazione alla SuiteCRM Inc. ogni volta che il tuo sistema verifica l´esistenza di nuove versioni. Questa informazione ci aiuterà a capire meglio come l´applicazione viene utilizzata migliorando il prodotto.',
    'LBL_SITECFG_URL_MSG' => 'Inserisci l´URL che verrà utilizzato per accedere all´istanza SuiteCRM dopo l´installazione. L´URL sarà anche utilizzato come base per gli URLs nelle pagine di applicazione di SuiteCRM. L´URL dovrebbe includere il web server o il nome delle macchina o l´indirizzo IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Inserire un nome da dare al sistema. Questo nome sarà visualizzato nella barra del titolo del browser quando gli utenti entreranno nell´applicazione di SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Dopo l´installazione, sarà necessario utilizzare l´utente amministratore di SuiteCRM (nome utente predefinito = admin) per accedere all´istanza SuiteCRM. Inserisci una password per l´utente amministratore. Questa password può essere modificata dopo il login iniziale. Si prega inoltre di inserire un altro nome utente amministratore da utiizzare in aggiunta al valore predefinito fornito.',
    'LBL_SITECFG_COLLATION_MSG' => 'Seleziona le regole di confronto (smistamento) per il tuo sistema. Queste regole creeranno le tabelle con la lingua che stai usando. Nel caso in cui la lingua non richieda particolari impostazioni si prega di usare il valore di default.',
    'LBL_SPRITE_SUPPORT' => 'Supporto Sprite',
    'LBL_SYSTEM_CREDS' => 'Credenziali Sistema',
    'LBL_SYSTEM_ENV' => 'Ambiente Sistema',
    'LBL_SHOW_PASS' => 'Mostra Password',
    'LBL_HIDE_PASS' => 'Nascondi Passwords',
    'LBL_HIDDEN' => '<i>(nascosto)</i>',
    'LBL_STEP1' => 'Passaggio 1 di 8 - Requisiti di Pre-Installazione',
    'LBL_STEP2' => 'Passaggio 2 di 8 - Accettazione Licenza',
    'LBL_STEP' => 'Passaggio',
    'LBL_TITLE_WELCOME' => 'Benvenuto in SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Sei pronto per installare?',
    'REQUIRED_SYS_COMP' => 'Componenti del sistema necessari',
    'REQUIRED_SYS_COMP_MSG' =>
        'Prima di iniziare, ti preghiamo di essere sicuro di avere le versioni compatibili dei seguenti componenti di sistema:<br>
                       <ul>
                       <li> Database/Database Management System (Examples: MariaDB, MySQL or SQL Server)</li>
                       <li> Web Server (Apache, IIS)</li>
                       </ul>
                       Consulta la matrice di compatibilità nelle note di Versione per
                       i componenti di sistema compatibili con la versione di SuiteCRM che stai installando.<br>',
    'REQUIRED_SYS_CHK' => 'Sistema di Controllo Iniziale',
    'REQUIRED_SYS_CHK_MSG' =>
        'Quando inizi il processo di installazione, una verifica del sistema verrà eseguita nel web server nel quale i file della SuiteCRM sono presenti con lo scopo di
                       essere sicuri che il sistema è configurato in modo appropriato e contenga i componenti necessari
                       per completare con successo la installazione. <br><br>
                       Il sistema esegue i seguenti controlli::<br>
                       <ul>
                       <li><b>versione PHP</b> &#8211; deve essere compatibile con la applicazione</li>
                       <li><b>Variabili di Sessione</b> &#8211; devono essere configurate in modo appropriato</li>
                       <li><b>Stringhe MB</b> &#8211; devono essere installate e abilitate nel file php.ini</li>
                       <li><b>Supporto Database</b> &#8211; deve esistere per MariaDB, MySQL or SQL Server</li>
                       <li><b>Config.php</b> &#8211; deve esistere e deve avere i permessi appropriati per essere in lettura/scrittura</li>
                       <li>I seguenti file di SuiteCRM devono essere abilitati alla scrittura:<ul><li><b>/custom</li>
                       <li>/cache</li>
                       <li>/modules</li>
                       <li>/upload</b></li></ul></li></ul>
                                   If il test fallisce, non sarà possibile procedere con la installazione.
                                   Un messaggio di errore sarà visualizzato, con la spiegazione del motivo per cui il sistema non ha passato il test.
                                   Dopo aver eseguito le necessarie modifiche, potrete rieseguire il test di sistema per continuare la installazione.<br>',


    'REQUIRED_INSTALLTYPE' => 'Installazione tipica o personalizzata',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Dopo il completamento del controllo del sistema, è possibile scegliere se procedere con l´installazione Tipica o Personalizzata. <br />In entrambi i casi, è necessario conoscere le seguenti informazioni: <br />Tipo Database che ospiterà i dati di SuiteCRM<br />Tipologie Database compatibili: MySQL, MS SQL Server, Oracle.<br /><br />Nome del web server o della macchina (host) su cui il database si trova<br />Potrebbe essere localhost se il database si trova in locale oppure sullo stesso web server o la macchina come i file di SuiteCRM<br /><br />Nome del database che si desidera utilizzare per ospitare i dati SuiteCRM<br />Si potrebbe voler utilizzare un database esistente. Se si fornisce il nome di un database esistente, le tabelle del database verranno eliminate durante l´installazione, quando lo schema per il database di SuiteCRM è definito.<br />Se non esiste alcun database già esistente, il nome fornito verrà utilizzato per il nuovo database che sarà creato per l´instanza durante l´installazione. <br /><br />Nome utente e password dell´amministratore del database<br />L´amministratore del database dovrebbe essere in grado di creare tabelle, utenti e scrivere nel database.<br />Se il database non si trova in locale e/o non si è amministratore del database, per ottenere queste informazioni, potrebbe essere necessario contattare l´amministratore del database.<br /><br />Nome utente e password del database di SuiteCRM<br />L´utente potrebbe essere l´amministratore del sistema oppure si potrebbe fornire il nome di un altro utente del database esistente. <br />Se si desidera creare un nuovo utente del database per questo scopo, sarete in grado di fornire un nuovo nome utente e la password durante il processo di installazione, e l´utente verrà creato durante l´installazione.<br /><br />Per l´installazione Personalizzata, si potrebbe anche avere bisogno delle seguenti informazioni:<br />URL che verrà utilizzato per accedere all´istanza SuiteCRM dopo l´installazione. Questo URL deve includere il server Web o il nome o l´indirizzo IP della macchina.<br /><br />[Opzionale] Percorso ad una directory di sessione se si desidera utilizzare una directory di sessione personalizzata per le informazioni di SuiteCRM al fine di impedire che i dati di sessione siano vulnerabili su server condivisi<br /><br />[Opzionale] Percorso ad una directory di log personalizzata se si desidera annullare la directory predefinita per il log di SuiteCRM. <br /><br />[Opzionale] ID Applicazione se si desidera annullare l´ID autogenerato che garantisce che le sessioni di un´istanza di SuiteCRM non siano usate da altre instanze. <br /><br />Set di caratteri più comunemente utilizzati in locale.<br /><br />Per ulteriori informazioni si prega di consultare la Guida per l´Installazione',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Prima di procedere con l´installazione si prega di leggere le seguenti informazioni. Le informazioni vi aiuteranno a determinare se o non si è pronti per installare l´applicazione in questo momento.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Scegli la lingua</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Installazione guidata',
    'LBL_WIZARD_TITLE' => 'SuiteCRM Installazione guidata: ',
    'LBL_YES' => 'Sì',

    'LBL_PATCHES_TITLE' => 'Installazione Ultima Patch',
    'LBL_MODULE_TITLE' => 'Installa Pacchetti Lingua',
    'LBL_PATCH_1' => 'Se vuoi saltare questo passaggio, cliccare Avanti.',
    'LBL_PATCH_TITLE' => 'Patch di Sistema',
    'LBL_PATCH_READY' => 'La seguente patch è pronta per essere installata:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM si basa su sessioni PHP per memorizzare dati importanti mentre si è connessi a questo web server. La tua installazione PHP non ha i dati di sessione configurati correttamente.<br />                                                                <br><br>Un errore di configurazione comune è che la direttiva <b>&#39;session.save_path&#39;</b> non punta ad una directory valida.  <br><br />                                                                <br>Si prega di correggere la <a target=_new href=\"http://us2.php.net/manual/en/ref.session.php\">configurazione PHP</a> nel file php.ini che si trova qui sotto.",
    'LBL_SESSION_ERR_TITLE' => 'Errore di configurazione delle sessioni PHP',
    'LBL_SYSTEM_NAME' => 'Nome sistema',
    'LBL_COLLATION' => 'Impostazioni Raccolta',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Fornire un nome al sistema per l´instanza di SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Selezionare un file di patch dal computer locale',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'È richiesta la versione 5 o superiore del Php.',
    'LBL_MINIMUM_PHP_VERSION' => 'Versione minima del php è 5.1.0. Versione php consigliata è 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(La versione php attualmente usata è ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' La versione di php consigliata è la 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode è attivo. Impostare zend.ze1_compatibility_mode ad Off per continuare',
    'LBL_STREAM' => 'PHP permette di utilizzare flussi stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Informazioni Nuovo account',
        'type' => 'sistema',
        'description' => 'Questo template viene utilizzato quando l´Amministratore di sistema  invia una nuova password all´utente.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Queste sono la username e la password temporanea del tuo account:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Dopo esserti connesso con questa password, il sistema potrebbe richiederti di reimpostare la password con una di tua scelta.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Queste sono la username e la password temporanea del tuo account:
Username : $contact_user_user_name
Password : $contact_user_user_hash

$config_site_url

Dopo esserti connesso con questa password, il sistema potrebbe richiederti di reimpostare la password con una di tua scelta.',
        'name' => 'Email password generata dal sistema',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Reimposta la password del tuo account',
        'type' => 'sistema',
        'description' => "Questo template viene utilizzato per inviare all´utente il link da cliccare per reimpostare la password dell´account.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Recentemente hai richiesto in $contact_user_pwd_last_changed di poter reimpostare la passsword del tuo account. </p><p>Clicca il link seguente per poter reimpostare la password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Recentemente hai richiesto in $contact_user_pwd_last_changed di poter reimpostare la passsword del tuo account.

Clicca il link seguente per poter reimpostare la password:

$contact_user_link_guid',
        'name' => 'Email Password dimenticata',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Codice di Autenticazione a Due Fattori',
        'type' => 'sistema',
        'description' => "Questo modello viene utilizzato per inviare a un utente un codice per l'autenticazione a due fattori.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Il codice di autenticazione a due fattori è <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Il codice di autenticazione a due fattori è $code.',
        'name' => 'Email a due fattori di autenticazione',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Da" Nome:',
    'LBL_FROM_ADDR' => 'Indirizzo Mittente:',

    'LBL_WIZARD_SMTP_DESC' => 'Inserisci l´account email che sarà usato per inviare emails, ad esempio notifiche di assegnazione e nuove password utente. Gli utenti riceveranno le emails da SuiteCRM, cose se fossero state spedite dall´account email specificato.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Scegli il provider della tua email:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Altro',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specifica Server SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Server SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Usa Autenticazione SMTP ?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Attiva SMTP con SSL o TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Indirizzo Email di Gmail:',
    'LBL_GMAIL_SMTPPASS' => 'Password Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Consenti agli utenti di utilizzare questo account per la posta in uscita:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Quando questa opzione è selezionata, tutti gli utenti saranno in grado di inviare email utilizzando lo stesso account di posta usato dal sistema per inviare notifiche e avvertimenti. Se questa opzione non viene selezionata, gli utenti potranno comunque usare il server di posta in uscita dopo aver fornito i dati del loro account.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Password Mail Yahoo!:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Mail Yahoo!:',

    'LBL_EXCHANGE_SMTPPASS' => 'Password di Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Nome Utente di Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Porta:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange:',


    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTPPASS' => 'SMTP Password:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Personalizzazione',
    'LBL_WIZARD_SYSTEM_DESC' => 'Inserisci il nome e il logo della tua organizzazioneand in modo da personalizzare SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Nome:',
    'SYSTEM_NAME_HELP' => 'Questo è il nome che viene mostrato nella barra dei titoli del tuo browser.',
    'NEW_LOGO' => 'Seleziona Logo:',
    'NEW_LOGO_HELP' => 'Il formato dell´immagine può essere .png o .jpg. L´altezza massima è di 170px, e la larghezza massima è di 450px. Ogni immagine caricata che sia maggiore di queste dimensioni verrà automaticamente ridimensionata.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Carica',
    'CURRENT_LOGO' => 'Logo attuale:',
    'CURRENT_LOGO_HELP' => 'Questo logo viene visualizzato al centro della schermata di accesso dell\'applicazione SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Scelta Scenario',
    'LBL_WIZARD_SCENARIO_DESC' => 'Questo consente di modellare in base alle tue esigenze i moduli visualizzati. Ogni modulo può essere abilitato anche dopo l´installazione, dal pannello di amministrazione.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Non ci sono scenari attualmente impostati nel file di configurazione (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Impostazioni Internazionali del Sistema',
    'LBL_WIZARD_LOCALE_DESC' => 'Specifica come vuoi che vengano mostrati i dati in SuiteCRM, basandoti sulla locazione geografica. Le impostazioni inserite adesso diventeranno le impostazioni di default. Gli utenti potranno inserire le proprie.',
    'LBL_DATE_FORMAT' => 'Formato Data:',
    'LBL_TIME_FORMAT' => 'Formato Ora:',
    'LBL_TIMEZONE' => 'Fuso Orario:',
    'LBL_LANGUAGE' => 'Lingua:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_CURRENCY_SYMBOL' => 'Simbolo Valuta:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 Codice Valuta:',
    'LBL_NUMBER_GROUPING_SEP' => '1000s separatore:',
    'LBL_DECIMAL_SEP' => 'Simbolo Decimale:',
    'LBL_NAME_FORMAT' => 'Formato del Nome:',
    'UPLOAD_LOGO' => 'Prego attendere, logo in caricamento...',
    'ERR_UPLOAD_FILETYPE' => 'Tipo di file non permesso, si prega di caricare un jpeg o un png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Si è verificato un errore non specificato durante il caricamento.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Le dimensioni del file caricato eccedono la direttiva upload_max_filesize definita nel file php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Le dimensioni del file caricato eccedono la direttiva MAX_FILE_SIZE definita nel form HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Il file è stato caricato solo parzialmente.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Nessun file è stato caricato.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Cartella temporanea mancante.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Errore nella scrittura del file su disco.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Una estensione di PHP a bloccato il caricamento del file. PHP non dà la possibilità di acceratre quale estensione abbia provocato il blocco.',

    'LBL_INSTALL_PROCESS' => 'Installazione...',

    'LBL_EMAIL_ADDRESS' => 'Indirizzo Email:',
    'ERR_ADMIN_EMAIL' => 'L\'indirizzo Email dell\'amministratore non è corretto.',
    'ERR_SITE_URL' => 'La URL del sito è obbligatoria.',

    'STAT_CONFIGURATION' => 'Configurazione delle relazioni...',
    'STAT_CREATE_DB' => 'Creo il database...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Creo le configurazioni di Default...',
    'STAT_INSTALL_FINISH' => 'Installazione terminata...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Processo di installazione terminato, si prega di <a href="%s">eseguire il log in...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Si prega di accettare la licenza prima',

    'LBL_MORE_OPTIONS_TITLE' => 'Più opzioni',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Errore del database',
    'LBL_OLD_PHP' => 'Rilevata una vecchia versione di PHP!',
    'LBL_OLD_PHP_MSG' => 'La versione PHP consigliata per installare SuiteCRM è %s <br />La versione PHP minima richiesta è %s<br />Stai usando la versione PHP %s, che è obsoleta: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Si prega di considerare l\'aggiornamento della versione PHP. ',
    'LBL_OLD_PHP_OK' => 'Sono consapevole dei rischi e voglio proseguire.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Utente',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Nome Database',
    'LBL_DBCONFIG_MSG3' => 'Nome del database che conterrà i dati per l´istanza di SuiteCRM che si sta per installare:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Nome Host',
    'LBL_DBCONFIG_MSG2' => 'Nome del web server o della macchina (host) in cui si trova il database (ad esempio localhost o www.mydomain.com). Se installato localmente, è meglio utilizzare \'localhost\' rispetto \'127.0.0.1\', per motivi di prestazioni.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Per impostare il database di SuiteCRM sono necessari il nome utente e la password di un amministratore del database che può creare tabelle del database e utenti e che può scrivere nel database.'
);
