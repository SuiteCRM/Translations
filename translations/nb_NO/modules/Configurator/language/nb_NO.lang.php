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
    'ADVANCED' => 'Avansert',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217-valutakode',
    'DEFAULT_CURRENCY_NAME' => 'Valutanavn',
    'DEFAULT_CURRENCY_SYMBOL' => 'Valutasymbol',
    'DEFAULT_DATE_FORMAT' => 'Standard datoformat',
    'DEFAULT_DECIMAL_SEP' => 'Desimaltegn',
    'DEFAULT_LANGUAGE' => 'Standardspråk',
    'DEFAULT_SYSTEM_SETTINGS' => 'Brukergrensesnitt',
    'DEFAULT_THEME' => 'Standar tema',
    'DEFAULT_TIME_FORMAT' => 'Standard tidsformat',

    'DISPLAY_RESPONSE_TIME' => 'Vis svartid',

    'IMAGES' => 'Logoer',
    'LBL_ALLOW_USER_TABS' => 'Tillat brukere å skjule faner',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Endre instillinger',
    'LBL_LOGVIEW' => 'Kofigurér logginnstillinger',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Bruke SMTP godkjenning?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Passord:',
    'LBL_MAIL_SMTPPORT' => 'SMTP-port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-tjener:',
    'LBL_MAIL_SMTPUSER' => 'SMTP-brukernavn:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP server spesifikasjon',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Velg din e-postleverandør:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! e-post passord:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! e-post ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail passord:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-postadresse:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange passord:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange brukernavn:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Serverport:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Tillat brukere å benytte denne kontoen for utgående e-post:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Når dette alternativet velges kan alle brukere sende e-post fra samme utgående e-post konto som brukes til å sende system-meldinger og -varsler. Hvis alternativet ikke velges, kan brukerne fortsatt benytte den utgående e-postserveren etter å ha lagt inn sin egen kontoinformasjon.',
    'LBL_MAILMERGE' => 'Fletting av e-post',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum auto-oppdateringsintervall for Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Dette er den laveste verdien man kan velge for at dashlets skal auto-refresh. Innstilling til "Aldri" deaktiverer auto-refreshing av dashlets helt.',
    'LBL_MODULE_FAVICON' => 'Vis modulikon som favorittikon',
    'LBL_MODULE_FAVICON_HELP' => 'Hvis du er i en modul med et ikon, bruk modulikonet som favorittikon i stedet for temaets favorittikon i nettleserfanen.',
    'LBL_MODULE_NAME' => 'Endre instillinger',
    'LBL_MODULE_ID' => 'Konfigurator',
    'LBL_MODULE_TITLE' => 'Brukergrensesnitt',
    'LBL_NOTIFY_FROMADDRESS' => 'Fra-adresse:',
    'LBL_NOTIFY_SUBJECT' => 'E-post emne:',

    'LBL_PROXY_AUTH' => 'Godkjenning?',
    'LBL_PROXY_HOST' => 'Proxy-vert',
    'LBL_PROXY_ON_DESC' => 'Tilpass proxyserverens adresse- og attesteringsinnstillinger.',
    'LBL_PROXY_ON' => 'Bruke proxytjener?',
    'LBL_PROXY_PASSWORD' => 'Passord',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy-innstillinger',
    'LBL_PROXY_USERNAME' => 'Brukernavn',
    'LBL_RESTORE_BUTTON_LABEL' => 'Gjenopprett',
    'LBL_SYSTEM_SETTINGS' => 'Endre instillinger',
    'LBL_USE_REAL_NAMES' => 'Vis fullstendig navn (ikke innlogging)',
    'LBL_USE_REAL_NAMES_DESC' => 'Vis brukernes fulle navn i stedet for brukernavnet i tildelt felt.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Slå av kildekonvertering for konverterte kilder.',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Dersom en kilde allerede har blitt konvertert, dette valget vil fjerne handlingen konverter kilde.',
    'LBL_ENABLE_ACTION_MENU' => 'Vis handlinger i menyer',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Velg for å vise handlinger for DetaljeVisning og underpanel i en nedtrekksmeny. Dersom denne ikke er krysset av vil handlingene vises som separate knapper.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Slå på innebygd redigering i ListeVisning',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Velg for å slå på innebygd redigering for felter i ListeVisningen. Dersom den er slått av vil innebygd redigering være avslått for ListeVisninger.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Slå på innebygd redigering i DetaljeVisning.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Velg for å slå på innebygd redigering for felter i DetaljeVisningen. Dersom den er slått av vil innebygd redigering være avslått for DetaljeVisninger.',
    'LBL_HIDE_SUBPANELS' => 'Skjult subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Antall poster pr side i listevisning',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Antall poster pr side i underpanel',
    'LOG_MEMORY_USAGE' => 'Logg minneforbruk',
    'LOG_SLOW_QUERIES' => 'Logg sene forespørsler',
    'CURRENT_LOGO' => 'Logo i bruk',
    'CURRENT_LOGO_HELP' => 'Logoen vises i midten av login vindu til SuiteCRM applikasjonen.',
    'NEW_LOGO' => 'Last opp ny logo (212x40)',
    'NEW_LOGO_HELP' => 'Bildeformatet kan være enten .png eller .jpg. Makshøyden er 170px, og maksbredden er 450px. Opplastede bilder som er større i høyde eller bredde vil bli skalert ned for å stemme overens med disse dimensjonene.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Bildeformatet kan være enten .png eller .jpg. Makshøyden er 170px, og maksbredden er 450px. Opplastede bilder som er større i høyde eller bredde vil bli skalert ned for å stemme overens med disse dimensjonene.',
    'SLOW_QUERY_TIME_MSEC' => 'Tidsgrense (msec) for sene forespørsler',
    'STACK_TRACE_ERRORS' => 'Vis stakksporing av feil',
    'UPLOAD_MAX_SIZE' => 'Maksimum størrelse for opplasting',
    'VERIFY_CLIENT_IP' => 'Gjør brukerens IP-adresse gyldig',
    'LOCK_HOMEPAGE' => 'Forhindre brukertilpasset webside-oppsett',
    'LOCK_SUBPANELS' => 'Forhindre brukertilpasset oppsett på undermenyer',
    'MAX_DASHLETS' => 'Maks antall dashlets på Hjem-siden',
    'SYSTEM_NAME' => 'Systemnavn',
    'SYSTEM_NAME_WIZARD' => 'Navn:',
    'SYSTEM_NAME_HELP' => 'Dette er navnet som vises i tittellinjen i nettleseren.',
    'LBL_LDAP_TITLE' => 'LDAP-autentiseringsstøtte',
    'LBL_LDAP_ENABLE' => 'Aktivér LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Tjener:',
    'LBL_LDAP_SERVER_PORT' => 'Portnummer:',
    'LBL_LDAP_ADMIN_USER' => 'Brukernavn:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Brukes til å finne LDAP-brukeren. Dette må kanskje være fullstendig kvalifisert.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Passord:',
    'LBL_LDAP_AUTHENTICATION' => 'Godkjenning:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Opprett brukere automatisk:',
    'LBL_LDAP_USER_DN' => 'Bruker DN:',
    'LBL_LDAP_GROUP_DN' => 'Gruppe DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Eksempel: ou=groups,dc=example,dc=com',
    'LBL_LDAP_USER_FILTER' => 'Brukerfilter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Gruppemedlemskap:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Brukere må være medlem av en bestemt gruppe',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Brukeregenskap:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Den unike identikatoren for personen som brukes til å sjekke om de er medlem av gruppen Eksempel: uid',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Guppens egenskap som brukes til å filtrere brukeregenskap Eksempel: memberUid',
    'LBL_LDAP_GROUP_ATTR' => 'Gruppeegenskap:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Eventuelle filterparametre som skal brukes når brukere autentiseres, for eksempel, <em>is_suitecrm_user=1 eller (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Innloggingsattributt:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind-atttributt:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Example: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Gruppenavn:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'For eksempel <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Eksempel: ou=people,dc=example,dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Hvis en godkjent bruker ikke finnes vil det bli opprettet en ny i SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Krypteringsnøkkel:',
    'DEVELOPER_MODE' => 'Utviklermodus',

    'SHOW_DOWNLOADS_TAB' => 'Vis nedlastinger fanen.',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'For SOA-autentisering ved bruk av ldap.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Php_mcrypt-forlengelsen må være aktivert i din php.ini-fil.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Alle',
    'LBL_MARK_POINT' => 'Marker punkt',
    'LBL_NEXT_' => 'Neste>>',
    'LBL_REFRESH_FROM_MARK' => 'Oppfrisk fra markering',
    'LBL_SEARCH' => 'Søk:',
    'LBL_REG_EXP' => 'Reg. Uttrykk',
    'LBL_IGNORE_SELF' => 'Ignore Selv:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Markerer hvor loggingen skal starte fra',
    'LBL_DISPLAYING_LOG' => 'Viser logg',
    'LBL_YOUR_PROCESS_ID' => 'Your process id',
    'LBL_YOUR_IP_ADDRESS' => 'Din IP-adresse er',
    'LBL_IT_WILL_BE_IGNORED' => 'Det vil bli ignorert',
    'LBL_LOG_NOT_CHANGED' => 'log har ikke blitt endret',
    'LBL_ALERT_JPG_IMAGE' => 'The File format of the image must be JPEG. Upload a new File with the File extension .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'The File format of the image must be JPEG or PNG. Upload a new File with the File extension .jpg or .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Bildets høyde/bredde-forhold bør være mellom 1:1 og 10:1. Bildet vil bli skalert.',
    'ERR_ALERT_FILE_UPLOAD' => 'Feil under opplasting av bilde.',
    'LBL_LOGGER' => 'log innstillinger',
    'LBL_LOGGER_FILENAME' => 'Navn på log fil',
    'LBL_LOGGER_FILE_EXTENSION' => 'Filtype',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimum størrelse på log',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Standard datoformat',
    'LBL_LOGGER_LOG_LEVEL' => 'Loggnivå',
    'LBL_LEAD_CONV_OPTION' => 'Kildekonverteringsvalg',
    'LEAD_CONV_OPT_HELP' => "<b>Kopier</b> - Oppretter og relaterer kopier av alle kildens aktiviteter til nye oppføringer som blir valgt under konverteringen. Kopier blir opprettet for hvert av de utvalgte oppføringene. <br /><br /><b>Flytt</b> - Flytter alle kildens aktiviteter til en ny oppføring som blir valgt under konverteringen. <br /><br /><b>Ikke gjør noe</b> - Gjør ingenting med kildens aktiviteter under konverteringen. Aktivitetene blir relatert utelukkende til kilden.",
    'LBL_CONFIG_AJAX' => 'Tilpass AJAX-brukergrensesnittet',
    'LBL_CONFIG_AJAX_DESC' => 'Slå av eller på bruk av AJAX brukergrensesnitt for spesifikke moduler.',
    'LBL_LOGGER_MAX_LOGS' => 'Maksimum antall log (before rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Legg til etter filnavn',
    'LBL_VCAL_PERIOD' => 'vCal oppdaterer tidsperiode:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maksimalt antall rader:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Oppgi hvor mange rader som er tillatt i importfiler.<br>Dersom antallet rader i en importert fil overstiger dette antallet vil brukeren bli varslet.<br>Dersom ingen tall blir oppgitt blir et uendelig antall rader tillatt.',
    'vCAL_HELP' => 'Bruk denne innstillingen til å bestemme antall måneder i forkant av dagens dato som Free / Busy informasjon for samtaler og møter blir publisert.<br />For å slå ledig / opptatt publisering av, skriv "0". Minimum er 1 måned, maksimum er 12 måneder.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Dine scenarier',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Ingen scenarier er konfigurert',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Velg hvilke passende scenarier for installasjonen.  Disse alternativene kan endres etter installasjon.',

    'LBL_WIZARD_TITLE' => 'Admin veiviser',
    'LBL_WIZARD_WELCOME_TAB' => 'Velkommen',
    'LBL_WIZARD_WELCOME_TITLE' => 'Velkommen til SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Klikk <b>Neste</b> for å merke, lokalisere og konfigurere SuiteCRM nå. Dersom du vil konfigurere SuiteCRM senere, klikk på <b>Hopp over</b>',
    'LBL_WIZARD_NEXT_BUTTON' => 'Neste >',
    'LBL_WIZARD_BACK_BUTTON' => '< Tilbake',
    'LBL_WIZARD_SKIP_BUTTON' => 'Hopp',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Fortsett',
    'LBL_WIZARD_FINISH_TITLE' => 'Grunnleggende systemkonfigurasjonen er fullført',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Merking',
    'LBL_WIZARD_SYSTEM_DESC' => 'Oppgi navnet og logoen for din organisasjon for å merke din SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Angi hvordan du ønsker data i SuiteCRM skal vises, basert på geografisk beliggenhet. Innstillingene du oppgir her vil være standardinnstillingene. Brukerne vil kunne angi sine egne preferanser.',
    'LBL_WIZARD_SMTP_DESC' => 'Oppgi e-postkontoen som skal brukes til å sende e-post, for eksempel varsle om oppdrag og passord for ny bruker. Brukerne vil motta epost fra SuiteCRM sendt fra den angitte e-postkontoen.',
    'LBL_LOADING' => 'laster...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Slett' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Velkommen' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Vil relaterte kontakters e-postadress i underpanelet Historikk for moduler.',
);
