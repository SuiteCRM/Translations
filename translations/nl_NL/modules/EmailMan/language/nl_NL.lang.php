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
    'LBL_SEND_DATE_TIME' => 'Verzend datum',
    'LBL_IN_QUEUE' => 'In behandeling',
    'LBL_IN_QUEUE_DATE' => 'In wachtrij sinds',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Gebruik alleen een geheel om het \'aantal E-mails per pakket\' aan te geven.',

    'LBL_ATTACHMENT_AUDIT' => ' is verzonden. Het is lokaal niet gekopieerd om hardeschijf ruimte te besparen.',
    'LBL_CONFIGURE_SETTINGS' => 'Configureer',
    'LBL_CUSTOM_LOCATION' => 'Handmatig',
    'LBL_DEFAULT_LOCATION' => 'Standaard',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Verwijder gerelateerde notities en attachments bij het verwijderen van een e-mail',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'E-mail waarschuwing meldingen',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt-In instellingen',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatisch verzenden Opt-In E-mail',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Bevestigen Opt-In E-mail sjabloon',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Schakel Legacy Email Compose Gedrag in',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Uitgaande mail configuratie',
    'LBL_EMAILS_PER_RUN' => 'Maximum aantal emails dat per serie verzonden wordt:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Campagnes',
    'LBL_LIST_FORM_TITLE' => 'Wachtrij',
    'LBL_LIST_FROM_NAME' => 'Van naam',
    'LBL_LIST_IN_QUEUE' => 'In behandeling',
    'LBL_LIST_MESSAGE_NAME' => 'Marketing bericht',
    'LBL_LIST_RECIPIENT_EMAIL' => 'E-mail ontvanger',
    'LBL_LIST_RECIPIENT_NAME' => 'Naam ontvanger',
    'LBL_LIST_SEND_ATTEMPTS' => 'Verzendpogingen',
    'LBL_LIST_SEND_DATE_TIME' => 'Verstuur op',
    'LBL_LIST_USER_NAME' => 'Gebruikersnaam',
    'LBL_LOCATION_ONLY' => 'Locatie',
    'LBL_LOCATION_TRACK' => 'Locatie van de Campagne tracking bestanden (bijvoorbeeld campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Behoud kopien van campagne berichten:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Wilt u complete kopien van <bold>ELKE</bold> verstuurde e-mail opslaan? <bold>We raden dit af</bold>. Als u nee kiest, wordt de template met variabelen WEL opgeslagen.',
    'LBL_MAIL_SENDTYPE' => 'E-mail programma:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gebruik SMTP authenticatie?',
    'LBL_MAIL_SMTPPASS' => 'Wachtwoord:',
    'LBL_MAIL_SMTPPORT' => 'SMTP poort:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP gebruikersnaam:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Kies uw e-mailprovider',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo Mail wachtwoord',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail-wachtwoord',
    'LBL_GMAIL_SMTPUSER' => 'Gmail email adres',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange-wachtwoord',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Gebruikersnaam',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Poort',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server',
    'LBL_EMAIL_LINK_TYPE' => 'E-mail client',
    'LBL_MARKETING_ID' => 'Marketing ID',
    'LBL_MODULE_ID' => 'E-mailBeheer',
    'LBL_MODULE_NAME' => 'E-mail Instellingen',
    'LBL_MODULE_TITLE' => 'Uitgaande e-mail wachtrij management',
    'LBL_NOTIFICATION_ON_DESC' => 'Verzend notificatie emails wanneer records zijn toegewezen.',
    'LBL_NOTIFY_FROMADDRESS' => '"Van" adres:',
    'LBL_NOTIFY_FROMNAME' => '\'Van\' naam:',
    'LBL_NOTIFY_ON' => 'Notificaties aan?',
    'LBL_NOTIFY_TITLE' => 'E-mail notificatie opties',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Uitgaande e-mail opties',
    'LBL_RELATED_ID' => 'Gerelateerd ID',
    'LBL_RELATED_TYPE' => 'Gerelateerd type',
    'LBL_SEARCH_FORM_TITLE' => 'Zoektocht in Wachtrij',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Standaard',
    'TXT_REMOVE_ME_ALT' => 'Om jezelf af te melden van deze E-maillijst ga naar',
    'TXT_REMOVE_ME_CLICK' => 'klik hier',
    'TXT_REMOVE_ME' => 'Om jezelf af te melden van deze E-maillijst ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Stuur notificatie vanaf het mailadres van de toewijzende gebruiker',

    'LBL_SECURITY_TITLE' => 'E-mail beveiligings instellingen',
    'LBL_SECURITY_DESC' => 'Vink aan wat NIET toegestaan is bij inkomende e-mails of de e-mail manager.',
    'LBL_SECURITY_APPLET' => 'Applet Tag',
    'LBL_SECURITY_BASE' => 'Base Tag',
    'LBL_SECURITY_EMBED' => 'Embed Tag',
    'LBL_SECURITY_FORM' => 'Form Tag',
    'LBL_SECURITY_FRAME' => 'Framesetcode',
    'LBL_SECURITY_FRAMESET' => 'Framesetcode',
    'LBL_SECURITY_IFRAME' => 'iFrame-code',
    'LBL_SECURITY_IMPORT' => 'Invoer-tag',
    'LBL_SECURITY_LAYER' => 'Laag label',
    'LBL_SECURITY_LINK' => 'Link-code',
    'LBL_SECURITY_OBJECT' => 'Object label',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Selecteer minimum voorzorgsmaatregelen van MS Outlook (aangaande het weergeven van e-mails)',
    'LBL_SECURITY_STYLE' => 'Style label',
    'LBL_SECURITY_TOGGLE_ALL' => 'Schakel allemaal',
    'LBL_SECURITY_XMP' => 'XMP-label',
    'LBL_YES' => 'Ja',
    'LBL_NO' => 'Nee',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Verzendpogingen',
    'LBL_OUTGOING_SECTION_HELP' => 'Configureer de standaard uitgaande mailserver voor het verzenden van e-mailberichten van notificaties, inclusief workflow waarschuwingen.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Gebruikers mogen versturen namens deze identiteit:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Wanneer deze optie is geselecteerd, zullen alle gebruikers in staat zijn om e-mails verzenden met behulp van hetzelfde uitgaande mailaccount dat gebruikt wordt door het systeem voor het verzenden van notificaties en meldingen. Als de optie niet is geselecteerd,  kunnen gebruikers de uitgaande mailserver nog steeds gebruiken nadat zij hun eigen account informatie hebben ingegeven.',
    'LBL_FROM_ADDRESS_HELP' => 'Wanneer ingeschakeld, zal de toekennende gebruiker\\\'s naam en e-mail adres worden opgenomen in het van-veld van de e-mail.  Deze functie werkt mogelijk niet met SMTP-servers die niet toestaan te verzenden vanuit een ander e-mailaccount dan die van het server account.',
    'LBL_HELP' => 'Hulp' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Bekijk uitgaande e-mailaccounts',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => 'Gebruikers mogen namens zichzelf versturen:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Wanneer ingeschakeld, kunnen <b>alle</b> gebruikers email versturen via de uitgaande mailserver met hun eigen primaire email adres als het &quot;Van:&quot; adres.<br>Het kan zijn dat deze functie niet werkt met SMTP servers die niet toestaan om een ander account te gebruiken dan het server account.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
