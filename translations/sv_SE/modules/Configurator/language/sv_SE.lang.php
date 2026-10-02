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
    'ADVANCED' => 'Avancerat',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 valuta kod',
    'DEFAULT_CURRENCY_NAME' => 'Valuta namn',
    'DEFAULT_CURRENCY_SYMBOL' => 'Valuta symbol',
    'DEFAULT_DATE_FORMAT' => 'Standard datumformat',
    'DEFAULT_DECIMAL_SEP' => 'Decimalsymbol',
    'DEFAULT_LANGUAGE' => 'Standardspråk',
    'DEFAULT_SYSTEM_SETTINGS' => 'Användargränssnitt',
    'DEFAULT_THEME' => 'Standardtema',
    'DEFAULT_TIME_FORMAT' => 'Standard tidsformat',

    'DISPLAY_RESPONSE_TIME' => 'Visa serverns svarstid',

    'IMAGES' => 'Loggor',
    'LBL_ALLOW_USER_TABS' => 'Tillåt användare att konfigurera flikar',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Systeminställningar',
    'LBL_LOGVIEW' => 'Visa logg',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Använd SMTP-autentisering?',
    'LBL_MAIL_SMTPPASS' => 'SMTP-lösenord:',
    'LBL_MAIL_SMTPPORT' => 'SMTP-port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP-användarnamn:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP-serverinställningar',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Välj din e-postleverantör:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Lösenord för Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail-ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail-lösenord:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail-e-postadress:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange-lösenord:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange-användarnamn:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange-serverport:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange-server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Tillåt användare att använda detta konto för utgående e-post:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'När detta alternativ är valt kan alla användare skicka e-post via samma utgående e-postkonto som används för systemmeddelanden och varningar. Om alternativet inte är valt kan användarna fortfarande använda den utgående e-postservern efter att de har angett sina egna kontouppgifter.',
    'LBL_MAILMERGE' => 'Kopplad utskrift',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minsta intervall för automatisk uppdatering av dashlets',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Detta är det lägsta värde som kan väljas för automatisk uppdatering av dashlets. Inställningen ”Aldrig” inaktiverar automatisk uppdatering av dashlets helt.',
    'LBL_MODULE_FAVICON' => 'Visa modul ikonen som favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Om du är i en modul med en ikon, använd modulens ikon som favicon, istället för temats favicon i browser fliken.',
    'LBL_MODULE_NAME' => 'Systeminställningar',
    'LBL_MODULE_ID' => 'Konfigurator',
    'LBL_MODULE_TITLE' => 'Användargränssnitt',
    'LBL_NOTIFY_FROMADDRESS' => 'Avsändaradress:',
    'LBL_NOTIFY_SUBJECT' => 'E-postämne:',

    'LBL_PROXY_AUTH' => 'Autentisering?',
    'LBL_PROXY_HOST' => 'Proxyvärd',
    'LBL_PROXY_ON_DESC' => 'Konfigurera proxyserver adress och autentifieringsinställningar',
    'LBL_PROXY_ON' => 'Använd proxyserver?',
    'LBL_PROXY_PASSWORD' => 'Lösenord',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxyinställningar',
    'LBL_PROXY_USERNAME' => 'Användarnamn',
    'LBL_RESTORE_BUTTON_LABEL' => 'Återställ',
    'LBL_SYSTEM_SETTINGS' => 'Systeminställningar',
    'LBL_USE_REAL_NAMES' => 'Visa hela namnet (ej inloggning)',
    'LBL_USE_REAL_NAMES_DESC' => 'Visa användarens hela namn istället för användarnamnet i uppdragsfälten.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Inaktivera åtgärden Konvertera lead för konverterade leads',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Om en lead redan har konverterats tar aktivering av detta alternativ bort åtgärden Konvertera lead.',
    'LBL_ENABLE_ACTION_MENU' => 'Visa åtgärder i menyer',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Välj detta för att visa åtgärder i detaljvyn och delpaneler i en rullgardinsmeny. Om det inte väljs visas åtgärderna som separata knappar.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Aktivera redigering direkt i listvyn',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Välj detta för att aktivera direktredigering av fält i listvyn. Om det inte väljs inaktiveras direktredigering i listvyn.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Aktivera redigering direkt i detaljvyn',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Välj detta för att aktivera direktredigering av fält i detaljvyn. Om det inte väljs inaktiveras direktredigering i detaljvyn.',
    'LBL_HIDE_SUBPANELS' => 'Ihopfällda delpaneler',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Antal listade poster per sida',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Antal subpaneler per sida',
    'LOG_MEMORY_USAGE' => 'Logga minnesanvändning',
    'LOG_SLOW_QUERIES' => 'Logga långsamma SQL frågor',
    'CURRENT_LOGO' => 'Aktuell logotyp:',
    'CURRENT_LOGO_HELP' => 'Denna logotyp visas mitt på inloggningsskärmen i SuiteCRM.',
    'NEW_LOGO' => 'Välj logotyp:',
    'NEW_LOGO_HELP' => 'Bildfilformatet kan vara .png eller .jpg. Den maximala höjden är 170 px och den maximala bredden är 450 px. Bilder som är större i någon riktning skalas till dessa maximala mått.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Bildfilformatet kan vara .png eller .jpg. Den maximala höjden är 170 px och den maximala bredden är 450 px. Bilder som är större i någon riktning skalas till dessa maximala mått.',
    'SLOW_QUERY_TIME_MSEC' => 'Långsamma SQL frågor över tröskelvärde',
    'STACK_TRACE_ERRORS' => 'Visa lista på felmeddelanden',
    'UPLOAD_MAX_SIZE' => 'Maximal uppladdningsstorlek',
    'VERIFY_CLIENT_IP' => 'Validera användarens IP-adress',
    'LOCK_HOMEPAGE' => 'Hindra användaren från att skapa anpassade "Hem" sidor',
    'LOCK_SUBPANELS' => 'Hindra användarna från att skapa anpassade subpaneler',
    'MAX_DASHLETS' => 'Maximalt antal SuiteCRM-dashlets på startsidan',
    'SYSTEM_NAME' => 'Systemnamn',
    'SYSTEM_NAME_WIZARD' => 'Namn:',
    'LBL_SNOOZE_TIMER' => 'Ange snoozeintervall för aviseringar',
    'SYSTEM_NAME_HELP' => 'Detta är namnet som visas i webbläsarens namnlist.',
    'LBL_LDAP_TITLE' => 'Support för LDAP autentifiering',
    'LBL_LDAP_LEGACY_WARNING' => 'LDAP-varning',
    'LBL_LDAP_LEGACY_WARNING_MORE' => 'Den här LDAP-konfigurationen används endast för autentisering via v4-API:t. För att konfigurera SuiteCRM-inloggning med LDAP lägger du till de nödvändiga konfigurationerna i filen .env.local. Mer information finns i LDAP-konfigurationsdokumentationen.',
    'LBL_LDAP_ENABLE' => 'Aktivera LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Portnummer:',
    'LBL_LDAP_ADMIN_USER' => 'Användarnamn:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Används för att söka efter LDAP-användaren. Detta kan behöva anges fullständigt.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Lösenord:',
    'LBL_LDAP_AUTHENTICATION' => 'Autentisering:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Binder till LDAP-servern med en specifik användares inloggningsuppgifter. Binder anonymt om uppgifter inte anges.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Skapa användare automatiskt:',
    'LBL_LDAP_USER_DN' => 'Användar-DN:',
    'LBL_LDAP_GROUP_DN' => 'Grupp-DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Exempel: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Användarfilter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Gruppmedlemskap:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Användare måste vara medlem i en specifik grupp',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Användarattribut:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Personens unika identifierare som används för att kontrollera medlemskap i gruppen. Exempel: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Gruppattributet som används för filtrering mot användarattributet. Exempel: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Gruppattribut:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Ytterligare filterparametrar att använda vid autentisering, t.ex. <em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Inloggningsattribut:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bindningsattribut:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'För bindning av LDAP-användaren, exempel: [<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'För sökning efter LDAP-användaren, exempel: [<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Exempel: ldap.example.com eller ldaps://ldap.example.com för SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Exempel: <em>389 eller 636 för SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Gruppnamn:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Exempel: <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Exempel: ou=people,dc=example,dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Om en autentiserad användare inte finns skapas en i SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Krypteringsnyckel:',
    'DEVELOPER_MODE' => 'Utvecklingsläge',
    'LBL_SET_SUBPANEL_PAGINATION_TYPE' => 'Pagineringstyp för delpaneler',
    'LBL_SET_LISTVIEW_PAGINATION_TYPE' => 'Pagineringstyp för listvy',
    'LBL_LIST_ENTRIES_PER_MODAL' => 'Popup-lista över poster',
    'LBL_SET_RECORD_MODAL_PAGINATION_TYPE' => 'Pagineringstyp för popup-lista över poster',

    'SHOW_DOWNLOADS_TAB' => 'Visa fliken Hämtningar',
    'SHOW_DOWNLOADS_TAB_HELP' => 'När det här alternativet är valt visas fliken Hämtningar i användarinställningarna och ger användarna åtkomst till SuiteCRM-insticksprogram och andra tillgängliga filer',
    'LBL_LDAP_ENC_KEY_DESC' => 'För SOAP autentifiering vid ldap användning.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php_mcrypt ändelsen måste vara aktiverad i er php.ini fil.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'OpenSSL-tillägget måste vara aktiverat i php.ini-filen.',
    'LBL_ALL' => 'Alla',
    'LBL_MARK_POINT' => 'Markera plats',
    'LBL_NEXT_' => 'Nästa>>',
    'LBL_REFRESH_FROM_MARK' => 'Uppdatera från markering',
    'LBL_SEARCH' => 'Sök:',
    'LBL_REG_EXP' => 'Reg Upphör:',
    'LBL_IGNORE_SELF' => 'Ignorera Själv:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Markerar var loggning skall starta från',
    'LBL_DISPLAYING_LOG' => 'Visa Logg',
    'LBL_YOUR_PROCESS_ID' => 'Ditt process id',
    'LBL_YOUR_IP_ADDRESS' => 'Din IP-address är',
    'LBL_IT_WILL_BE_IGNORED' => 'kommer att ignoreras',
    'LBL_LOG_NOT_CHANGED' => 'loggen har inte förändrats',
    'LBL_ALERT_JPG_IMAGE' => 'Filformatet på bilden måste vara .jpg. Ladda upp en ny fil med filändelsen .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Filformatet på bilden måste vara .jpg eller .png. Ladda upp en ny fil med filändelsen .jpg eller .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Bildkvoten måste vara mellan 1:1 och 10:1. Bilden kommer att skalas om.',
    'ERR_ALERT_FILE_UPLOAD' => 'Error under uppladdning av bild.',
    'LBL_LOGGER' => 'Logger-inställningar',
    'LBL_LOGGER_FILENAME' => 'Logfil namn',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extension/Tillägg',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximal logfilsstorlek',
    'LBL_STACK_TRACE' => 'Aktivera stackspårning',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Standardformat för datum',
    'LBL_LOGGER_LOG_LEVEL' => 'Lognivå',
    'LBL_LEAD_CONV_OPTION' => 'Alternativ för konvertering av leads',
    'LEAD_CONV_OPT_HELP' => "<b>Kopiera</b> – skapar och kopplar kopior av alla leadens aktiviteter till nya poster som användaren väljer under konverteringen. Kopior skapas för var och en av de valda posterna.<br><br><b>Flytta</b> – flyttar alla leadens aktiviteter till en ny post som användaren väljer under konverteringen.<br><br><b>Gör ingenting</b> – gör inget med leadens aktiviteter under konverteringen. Aktiviteterna förblir endast kopplade till leaden.",
    'LBL_CONFIG_AJAX' => 'Konfigurera AJAX-användargränssnitt',
    'LBL_CONFIG_AJAX_DESC' => 'Aktivera eller inaktivera AJAX-gränssnittet för specifika moduler.',
    'LBL_LOGGER_MAX_LOGS' => 'Maximal antal loggar (innan rullning)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Läggtill efter filnamn',
    'LBL_VCAL_PERIOD' => 'vCal uppdaterings period:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - maximalt antal rader:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Ange hur många rader som tillåts i importfiler.<br>Om antalet rader i en importfil överskrider detta antal meddelas användaren.<br>Om inget antal anges tillåts ett obegränsat antal rader.',
    'vCAL_HELP' => 'Använd den här inställningen för att bestämma antalet månader före aktuellt datum för lediga/ upptagna för samtal och möten som ska publiceras. För att stänga av lediga/upptagna publiceringar, skriv "0". Minimum är 1 månad och max 12 månader.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Dina scenarier',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Inga scenarier har konfigurerats',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Välj vilka scenarier som är lämpliga för din installation. Alternativen kan ändras efter installationen.',

    'LBL_WIZARD_TITLE' => 'Administrationsguide',
    'LBL_WIZARD_WELCOME_TAB' => 'Välkommen',
    'LBL_WIZARD_WELCOME_TITLE' => 'Välkommen till SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Klicka på <b>Nästa</b> för att varumärkesanpassa, lokalanpassa och konfigurera SuiteCRM nu. Klicka på <b>Hoppa över</b> om du vill konfigurera SuiteCRM senare.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Nästa >',
    'LBL_WIZARD_BACK_BUTTON' => '< Tillbaka',
    'LBL_WIZARD_SKIP_BUTTON' => 'Hoppa över',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Fortsätt',
    'LBL_WIZARD_FINISH_TITLE' => 'Grundläggande system konfiguration är klar',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Varumärkesanpassning',
    'LBL_WIZARD_SYSTEM_DESC' => 'Ange organisationens namn och logotyp för att varumärkesanpassa SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Ange hur data i SuiteCRM ska visas utifrån din geografiska plats. Inställningarna du anger här blir standardinställningar. Användare kan ange egna inställningar.',
    'LBL_WIZARD_SMTP_DESC' => 'Ange det e-postkonto som ska användas för att skicka e-post, till exempel tilldelningsaviseringar och lösenord för nya användare. Användarna får e-post från SuiteCRM med det angivna e-postkontot som avsändare.',
    'LBL_LOADING' => 'Laddar......' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Ta bort' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Välkommen' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Visa relaterade kontakters e-post i historikdelpanelen för moduler',
    'LBL_HISTORY_SUBPANEL' => 'Historikdelpanel',
);
