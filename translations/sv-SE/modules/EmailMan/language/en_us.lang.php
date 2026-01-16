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
    'LBL_SEND_DATE_TIME' => 'Skickat Datum',
    'LBL_IN_QUEUE' => 'Pågående',
    'LBL_IN_QUEUE_DATE' => 'Köad Datum',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Bara heltalsvärden är tillåtet för antal av epost sänd per omgång',

    'LBL_ATTACHMENT_AUDIT' => ' sändes. Ingen lokal kopiering gjordes för att spara diskutrymme.',
    'LBL_CONFIGURE_SETTINGS' => 'Ställ in',
    'LBL_CUSTOM_LOCATION' => 'Tillåt Välj',
    'LBL_DEFAULT_LOCATION' => 'Huvudsakligt',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Ta bort relaterade anteckingar & bilagor med borttagna Email',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Utgående epost konfigurering',
    'LBL_EMAILS_PER_RUN' => 'Antalet e-post sänt per batch:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Kampanjer',
    'LBL_LIST_FORM_TITLE' => 'Kö',
    'LBL_LIST_FROM_NAME' => 'Från Namn',
    'LBL_LIST_IN_QUEUE' => 'Pågående',
    'LBL_LIST_MESSAGE_NAME' => 'Marknadsföringsmeddelande',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Mottagarens E-post',
    'LBL_LIST_RECIPIENT_NAME' => 'Mottagarens namn',
    'LBL_LIST_SEND_ATTEMPTS' => 'Sändningsförsök',
    'LBL_LIST_SEND_DATE_TIME' => 'Sändning på',
    'LBL_LIST_USER_NAME' => 'Användarnamn',
    'LBL_LOCATION_ONLY' => 'Plats',
    'LBL_LOCATION_TRACK' => 'Plats för kampanjföljarfiler (enligt campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Spara kopia av kampanj meddelanden:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Vill du lagra fulla kopior av <bold>VARJE</bold> epost meddelande skickat under alla kampanjer?  <bold>Vi rekomendera nej, vilket är standard</bold>.  Valet nej, kommer endast att spara mallen som är skickad och de nödvändiga variablarna för att återskapa det individuella meddelandet.',
    'LBL_MAIL_SENDTYPE' => 'Mail Transfer Agent:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Använd SMTP-autenticering?',
    'LBL_MAIL_SMTPPASS' => 'Lösenord:',
    'LBL_MAIL_SMTPPORT' => 'SMTP port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP användarnamn:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Välj din Epost leverantör',
    'LBL_YAHOOMAIL_SMTPPASS' => '\'Yahoo! Mail Lösenord',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Lösenord',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Epost Adress',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Lösenord',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Användarnamn',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange-server',
    'LBL_EMAIL_LINK_TYPE' => 'E-postklient',
    'LBL_MARKETING_ID' => 'Marknadsförings-ID',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'E-post inställningar',
    'LBL_MODULE_TITLE' => 'Hantering av utgående E-postkö',
    'LBL_NOTIFICATION_ON_DESC' => 'Skickar rapport via E-post när poster är tilldelade.',
    'LBL_NOTIFY_FROMADDRESS' => '"Avsändar" adress:',
    'LBL_NOTIFY_FROMNAME' => '"Från" Namn:',
    'LBL_NOTIFY_ON' => 'Rapportering på?',
    'LBL_NOTIFY_TITLE' => 'Val för E-postrapportering',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Val för utgående E-post',
    'LBL_RELATED_ID' => 'Relaterat id',
    'LBL_RELATED_TYPE' => 'Relaterad typ',
    'LBL_SEARCH_FORM_TITLE' => 'Sök kö',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Värde av Config.php konfiguration site_url',
    'TXT_REMOVE_ME_ALT' => 'För att ta bort dig själv från denna E-postlista, gå till',
    'TXT_REMOVE_ME_CLICK' => 'klicka här',
    'TXT_REMOVE_ME' => 'För att ta bort dig själv från denna E-postlista ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Epost Säkerhets inställningar',
    'LBL_SECURITY_DESC' => 'Kontrollera följande som INTE ska tillåtas via Ingående epost eller visning i Epost modulen.',
    'LBL_SECURITY_APPLET' => 'Applet etikett',
    'LBL_SECURITY_BASE' => 'Standard etikett',
    'LBL_SECURITY_EMBED' => 'Inbäddad etikett',
    'LBL_SECURITY_FORM' => 'Blankett etikett',
    'LBL_SECURITY_FRAME' => 'Ram etikett',
    'LBL_SECURITY_FRAMESET' => 'Ramuppsättnings etikett',
    'LBL_SECURITY_IFRAME' => 'iFrame etikett',
    'LBL_SECURITY_IMPORT' => 'Importera etikett',
    'LBL_SECURITY_LAYER' => 'Lager etikett',
    'LBL_SECURITY_LINK' => 'Länk etikett',
    'LBL_SECURITY_OBJECT' => 'Föremåls etikett',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Välj Outlook standard minimum säkerhets försiktighetsåtgärder (fel vid sidan av korrekt visning).',
    'LBL_SECURITY_STYLE' => 'Stil etikett',
    'LBL_SECURITY_TOGGLE_ALL' => 'Växla till att visa alla Val',
    'LBL_SECURITY_XMP' => 'Xmp etikett',
    'LBL_YES' => 'Ja',
    'LBL_NO' => 'Nej',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Sändningsförsök',
    'LBL_OUTGOING_SECTION_HELP' => 'Konfigurera default utgående epost server för att skicka epost varningar, arbetsflödes varningar.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'När denna är vald kommer alla användare att kunna skicka epost från samma utgående epost konto som används för att skicka system notiser och varningar. Om den inte är vald kan användare fortfarande använda den utgående epost servern efter att ha angivit sin egna konto information.',
    'LBL_FROM_ADDRESS_HELP' => 'När den är aktiverad, angivet användarnamn och epostadress kommer att inkluderas i från fältet på epostmeddelandet. Denna funktion kommer förmodligen inte att fungera på SMPT servrar som inte tillåter att skicka från andra konton än server kontot.',
    'LBL_HELP' => 'Hjälp' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'View Outbound Email Accounts',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
);
