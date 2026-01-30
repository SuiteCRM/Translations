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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Avanzate',
    'DEFAULT_CURRENCY_ISO4217' => 'Codice valuta ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Nome valuta',
    'DEFAULT_CURRENCY_SYMBOL' => 'Simbolo Valuta',
    'DEFAULT_DATE_FORMAT' => 'Formato data predefinito',
    'DEFAULT_DECIMAL_SEP' => 'Simbolo decimale',
    'DEFAULT_LANGUAGE' => 'Lingua predefinita',
    'DEFAULT_SYSTEM_SETTINGS' => 'Interfaccia Utente',
    'DEFAULT_THEME' => 'Tema predefinito',
    'DEFAULT_TIME_FORMAT' => 'Formato ora predefinito',

    'DISPLAY_RESPONSE_TIME' => 'Mostra i tempi di risposta del server',

    'IMAGES' => 'Loghi',
    'LBL_ALLOW_USER_TABS' => 'Permetti agli utenti di nascondere le schede',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Impostazioni del sistema',
    'LBL_LOGVIEW' => 'Visualizza log',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Usa Autenticazione SMTP ?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Password:',
    'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Server SMTP:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specifica Server SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Scegli il provider della tua email:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Password Mail Yahoo!:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Mail Yahoo!:',
    'LBL_GMAIL_SMTPPASS' => 'Password Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Indirizzo Email di Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Password di Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Nome Utente di Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Porta:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Consenti agli utenti di utilizzare questo account per la posta in uscita:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Quando questa opzione è selezionata, tutti gli utenti saranno in grado di inviare email utilizzando lo stesso account di posta usato dal sistema per inviare notifiche e avvertimenti. Se questa opzione non viene selezionata, gli utenti potranno comunque usare il server di posta in uscita dopo aver fornito i dati del loro account.',
    'LBL_MAILMERGE' => 'Stampa Unione',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervallo minimo Aggiornamento Automatico Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Questo è il valore minimo che si può scegliere per l´aggiornamento automatico delle dashlets. Impostando \'Mai\' si disattiva completamente l´aggiornamento automatico delle dashlets.',
    'LBL_MODULE_FAVICON' => 'Mostra l´icona del modulo come favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Se sei in un modulo con icona, usa l´icona del modulo come favicon, invece della favicon del tema, nella barra del browser.',
    'LBL_MODULE_NAME' => 'Impostazioni del sistema',
    'LBL_MODULE_ID' => 'Configuratore',
    'LBL_MODULE_TITLE' => 'Interfaccia Utente',
    'LBL_NOTIFY_FROMADDRESS' => 'Indirizzo Mittente:',
    'LBL_NOTIFY_SUBJECT' => 'Oggetto Email:',

    'LBL_PROXY_AUTH' => 'Autenticazione?',
    'LBL_PROXY_HOST' => 'Server Proxy',
    'LBL_PROXY_ON_DESC' => 'Configura l´indirizzo del server proxy e le impostazioni di autenticazione',
    'LBL_PROXY_ON' => 'Utilizzare server proxy?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Porto',
    'LBL_PROXY_TITLE' => 'Impostazioni Proxy',
    'LBL_PROXY_USERNAME' => 'Utente per Autenticazione',
    'LBL_RESTORE_BUTTON_LABEL' => 'Ripristina',
    'LBL_SYSTEM_SETTINGS' => 'Impostazioni del sistema',
    'LBL_USE_REAL_NAMES' => 'Mostra Nome Completo',
    'LBL_USE_REAL_NAMES_DESC' => 'Visualizza i nomi completi degli utenti anzichè i loro Nomi Utenti nei campi di assegnazione.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Disabilitare l´azione di conversione lead per i lead convertiti',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Se un lead è già stato convertito, l´attivazione di questa opzione rimuoverà l´azione di conversione lead.',
    'LBL_ENABLE_ACTION_MENU' => 'Mostra le azioni all´interno del menù',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Seleziona per visualizzare la Vista Dettaglio e le azioni sui sottopannelli all´interno di un menù a tendina. Se non selezionato, le azioni saranno visualizzate come pulsanti separati.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Abilita Modifica Inline sulle Viste Elenco',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Seleziona per abilitare la modifica inline per i campi delle viste elenco. Se non selezionato la modifica inline sarà disattivata per le viste elenco',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Abilita Modifica Inline sulle Viste Dettaglio',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Seleziona per abilitare la modifica inline per i campi delle viste dettaglio. Se non selezionato la modifica inline sarà disattivata per le viste dettaglio.',
    'LBL_HIDE_SUBPANELS' => 'Comprimi riquadri',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Voci per pagina della maschera elenco',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Voci per pagina per sottopannello',
    'LOG_MEMORY_USAGE' => 'Registra utilizzo memoria',
    'LOG_SLOW_QUERIES' => 'Registra interrogazioni database lente',
    'CURRENT_LOGO' => 'Logo attuale:',
    'CURRENT_LOGO_HELP' => 'Questo logo viene visualizzato al centro della schermata di accesso dell\'applicazione SuiteCRM.',
    'NEW_LOGO' => 'Seleziona Logo:',
    'NEW_LOGO_HELP' => 'Il formato dell´immagine può essere .png o .jpg. L´altezza massima è di 170px, e la larghezza massima è di 450px. Ogni immagine caricata che sia maggiore di queste dimensioni verrà automaticamente ridimensionata.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Il formato dell´immagine può essere .png o .jpg. L´altezza massima è di 170px, e la larghezza massima è di 450px. Ogni immagine caricata che sia maggiore di queste dimensioni verrà automaticamente ridimensionata.',
    'SLOW_QUERY_TIME_MSEC' => 'Soglia interrogazioni lente (msec)',
    'STACK_TRACE_ERRORS' => 'Mostra contenuto stack in caso di errore',
    'UPLOAD_MAX_SIZE' => 'Dimensione massima upload',
    'VERIFY_CLIENT_IP' => 'Convalida l´indirizzo IP degli utenti',
    'LOCK_HOMEPAGE' => 'Vieta la personalizzazione del layout della Home Page',
    'LOCK_SUBPANELS' => 'Vieta la personalizzazione del layout del sottopannello',
    'MAX_DASHLETS' => 'Numero massimo di dashlets di SuiteCRM visualizzabili nella Home Page',
    'SYSTEM_NAME' => 'Nome del Sistema',
    'SYSTEM_NAME_WIZARD' => 'Nome:',
    'SYSTEM_NAME_HELP' => 'Questo è il nome che viene mostrato nella barra dei titoli del tuo browser.',
    'LBL_LDAP_TITLE' => 'Supporto di autenticazione LDAP',
    'LBL_LDAP_ENABLE' => 'Abilita LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Porta:',
    'LBL_LDAP_ADMIN_USER' => 'Utente per Autenticazione:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Utilizzato per cercare l\'utente LDAP. Questo potrebbe essere necessario pienamente qualificato.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Password:',
    'LBL_LDAP_AUTHENTICATION' => 'Autenticazione:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Associare il server LDAP utilizzando un credenziali di utenti specifici. Se non fornito, verrà effettuato un log anonimo.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Crea automaticamente gli Utenti:',
    'LBL_LDAP_USER_DN' => 'Utente DN:',
    'LBL_LDAP_GROUP_DN' => 'Gruppo DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Esempio: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Filtro Utente:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Membri del Gruppo:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Gli utenti devono essere membri di un gruppo specifico',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Attributo Utente:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Gli unici identificatori della persona che verranno utilizzati per verificare se sono membro di un gruppo Esempio: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'L´attributo del Gruppo che verrà utilizzato per filtrare l´attributo Utente Esempio: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Attributo Utente:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Ulteriori paremetri di filtro da applicare all´autenticazione degli utenti e.g.<em>is_suitecrn_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Attributi login:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Attributo collegato:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Per Mappare Utenti LDAP Esempio:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Per la ricerca di Utenti LDAP Esempio:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Esempio: ldap.example.com o ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Esempio: <em>389 o 636 per SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Nome del Gruppo:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Esempio <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Esempio: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Se non esiste un utente autenticato ne verrà creato uno in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Cifratura Chiave:',
    'DEVELOPER_MODE' => 'Modalità Sviluppatore',

    'SHOW_DOWNLOADS_TAB' => 'Visualizza Tab Downloads',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Se selezionato, il tab di Donwload apparirà nelle impostazioni dell´Utente e fornirà agli utenti l´accesso ai plug-ins di Sugar e ad altri file disponibili',
    'LBL_LDAP_ENC_KEY_DESC' => 'Per l\'autenticazione SOAP quando si utilizza LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Estensione php_mcrypt deve essere abilitata nel file php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'L\'estensione openssl deve essere abilitata nel tuo file php.ini.',
    'LBL_ALL' => 'Tutto',
    'LBL_MARK_POINT' => 'Segna Punto',
    'LBL_NEXT_' => 'Successivo>>',
    'LBL_REFRESH_FROM_MARK' => 'Aggiornare da spunta',
    'LBL_SEARCH' => 'Cerca:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignorare se stessi:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marcatura dove avviare la registrazione da',
    'LBL_DISPLAYING_LOG' => 'Visualizzazione registro',
    'LBL_YOUR_PROCESS_ID' => 'Il tuo ID processo',
    'LBL_YOUR_IP_ADDRESS' => 'Il tuo indirizzo IP è',
    'LBL_IT_WILL_BE_IGNORED' => 'Sarà ignorato',
    'LBL_LOG_NOT_CHANGED' => 'Il registro non è stato modificato',
    'LBL_ALERT_JPG_IMAGE' => 'Il formato del file dell´immagine deve essere JPEG. Carica un nuovo file con estensione .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Il formato del file dell´immagine deve essere JPEG o PNG.  Carica un nuovo file con estensione .jpg. o .png.',
    'LBL_ALERT_SIZE_RATIO' => 'L´immagine deve essere su scala tra 1:1 e 10:1. L´immagine verrà ridimensionata.',
    'ERR_ALERT_FILE_UPLOAD' => 'Errore durante il caricamento dell´immagine.',
    'LBL_LOGGER' => 'Impostazioni Accesso',
    'LBL_LOGGER_FILENAME' => 'Nome File Log',
    'LBL_LOGGER_FILE_EXTENSION' => 'Estensione',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Dimensione Massima Log',
    'LBL_STACK_TRACE' => 'Abilita traccia di stack',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Formato data predefinito',
    'LBL_LOGGER_LOG_LEVEL' => 'Livello Log',
    'LBL_LEAD_CONV_OPTION' => 'Opzioni Conversione Lead',
    'LEAD_CONV_OPT_HELP' => "<b>Copia</b> - Crea e collega le attività dei Lead ai nuovi record che sono stati selezionati dall´utente durante la conversione. Le copie sono create per ogni record selezionato.<br><br><b>Sposta</b> - Sposta tutte le attività dei Lead ai nuovi record che sono stati selezionati dall´utente durante la conversione. <br><br><b>Niente</b> - Fare niente con le attività dei Lead durante la conversione. Le attività rimangono collegate solamente al Lead.",
    'LBL_CONFIG_AJAX' => 'Configura Interfaccia Utente AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Abilita o disabilita l´uso di AJAX per moduli specifici.',
    'LBL_LOGGER_MAX_LOGS' => 'Numero massimo di logs (prima del rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Aggiungere successivamente il nome del file',
    'LBL_VCAL_PERIOD' => 'vCal Aggiornamenti periodici:',
    'LBL_IMPORT_MAX_RECORDS' => 'Importazione - Numero Massimo di Righe:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specificare quante righe sono ammesse all´interno dei file di importazione.<br>Se il numero delle righe nel file di importazione superano questo numero, l´utente verrà avvisato.<br>Se non viene inserito nessun numero significa che sarà ammesso un numero illimitato di righe.',
    'vCAL_HELP' => 'Usa questa impostazione per stabilire il numero di mesi antecedenti la data corrente per i quali l\'informazione Libero/Occupato per chiamate e Incontri è pubblicato.<BR>Per disattivare la pubblicazione dello stato Libero/Occupato, impostare "0". Il minimo è 1 mese; il massimo 12 mesi.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'I tuoi scenari',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Non ci sono scenari configurati',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Scegliere quali scenari sono appropriati per l\'installazione.  Queste opzioni possono essere modificate dopo l\'installazione.',

    'LBL_WIZARD_TITLE' => 'Guida amministratore',
    'LBL_WIZARD_WELCOME_TAB' => 'Benvenuto',
    'LBL_WIZARD_WELCOME_TITLE' => 'Benvenuto in SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Clicca <b>Avanti</b> per configurare SuiteCRM adesso. Se vuoi configurare SuiteCRM più tardi, clicca <b>Salta</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Avanti >',
    'LBL_WIZARD_BACK_BUTTON' => '< Indietro',
    'LBL_WIZARD_SKIP_BUTTON' => 'Salta',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continua',
    'LBL_WIZARD_FINISH_TITLE' => 'Configurazione base del sistema completata',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Personalizzazione',
    'LBL_WIZARD_SYSTEM_DESC' => 'Inserisci il nome e il logo della tua organizzazioneand in modo da personalizzare SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specifica come vuoi che vengano mostrati i dati in SuiteCRM, basandoti sulla locazione geografica. Le impostazioni inserite adesso diventeranno le impostazioni di default. Gli utenti potranno inserire le proprie.',
    'LBL_WIZARD_SMTP_DESC' => 'Inserisci l´account email che sarà usato per inviare emails, ad esempio notifiche di assegnazione e nuove password utente. Gli utenti riceveranno le emails da SuiteCRM, cose se fossero state spedite dall´account email specificato.',
    'LBL_LOADING' => 'Caricamento...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Elimina' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Benvenuto' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Mostra emails collegate del contatto  nel sottopannello Cronologia dei moduli',
);
