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
    'LBL_SEND_DATE_TIME' => 'Datum slanja',
    'LBL_IN_QUEUE' => 'U procesu',
    'LBL_IN_QUEUE_DATE' => 'Datum u redu',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Koristi samo cjelobrojne vrijednosti za označiti broj poslanih e-pošti po seriji',

    'LBL_ATTACHMENT_AUDIT' => 'poslano je. Nije lokalno duplicirano kako bi se sačuvalo korištene diska.',
    'LBL_CONFIGURE_SETTINGS' => 'Konfiguriraj postavke e-pošte',
    'LBL_CUSTOM_LOCATION' => 'Korisnički definirano',
    'LBL_DEFAULT_LOCATION' => 'Zadano',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Izbrišite povezane zabilješke i privitke sa izbrisanim e-poštama.',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Konfiguracija odlazne e-pošte',
    'LBL_EMAILS_PER_RUN' => 'Broj e-pošte poslan po seriji:',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'Kampanja',
    'LBL_LIST_FORM_TITLE' => 'Red',
    'LBL_LIST_FROM_NAME' => 'Od imena',
    'LBL_LIST_IN_QUEUE' => 'U procesu',
    'LBL_LIST_MESSAGE_NAME' => 'Marketinška poruka',
    'LBL_LIST_RECIPIENT_EMAIL' => 'E-pošta primatelja',
    'LBL_LIST_RECIPIENT_NAME' => 'Ime primatelja',
    'LBL_LIST_SEND_ATTEMPTS' => 'Pokušaji slanja',
    'LBL_LIST_SEND_DATE_TIME' => 'Poslano na',
    'LBL_LIST_USER_NAME' => 'Korisničko ime',
    'LBL_LOCATION_ONLY' => 'Lokacija',
    'LBL_LOCATION_TRACK' => 'Lokacija datoteka praćenja kampanje (poput campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Zadrži kopije poruka kampanje.',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Želite li spremiti kompletne kopije <bold>SVAKE</bold> poruke e-pošte poslane tijekom svih kampanja?  <bold>Preporučujemo ne</bold>.  Odabirom Ne spremiti će se samo predložak koji je poslan i potrebne varijable za ponovno kreiranje individualne poruke.',
    'LBL_MAIL_SENDTYPE' => 'Agent transfera e-pošte:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Koristi SMTP autentikaciju:',
    'LBL_MAIL_SMTPPASS' => 'Lozinka:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP server e-pošte:',
    'LBL_MAIL_SMTPUSER' => 'Korisničko ime:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Odaberite Vašeg pružatelja e-pošte',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail lozinka',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail lozinka',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-pošta',
    'LBL_EXCHANGE_SMTPPASS' => 'Razmjeni lozinku',
    'LBL_EXCHANGE_SMTPUSER' => 'Razmjeni korisničko ime',
    'LBL_EXCHANGE_SMTPPORT' => 'Razmjeni port servera',
    'LBL_EXCHANGE_SMTPSERVER' => 'Razmjeni server',
    'LBL_EMAIL_LINK_TYPE' => 'Klijent e-pošte',
    'LBL_MARKETING_ID' => 'Marketing Id',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Postavke e-pošte',
    'LBL_MODULE_TITLE' => 'Upravljenje redom odlazne e-pošte',
    'LBL_NOTIFICATION_ON_DESC' => 'Kada je omogućeno, e-pošta je poslana korisnicima kada su im dodijeljni zapisi.',
    'LBL_NOTIFY_FROMADDRESS' => '"Od" adresa:',
    'LBL_NOTIFY_FROMNAME' => '"Od" Ime:',
    'LBL_NOTIFY_ON' => 'Assignment Notifications',
    'LBL_NOTIFY_TITLE' => 'Opcije e-pošte',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Opcije odlazne e-pošte',
    'LBL_RELATED_ID' => 'Povezani Id',
    'LBL_RELATED_TYPE' => 'Povezani tip',
    'LBL_SEARCH_FORM_TITLE' => 'Queue Search',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Vrijednost Config.php postavke site_url',
    'TXT_REMOVE_ME_ALT' => 'Kako bi ste se maknuli s ove liste e-pošte idi te na',
    'TXT_REMOVE_ME_CLICK' => 'kliknite ovdje',
    'TXT_REMOVE_ME' => 'Kako si ste se maknuli sa ove liste e-pošte',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Postavke sigurnosti e-pošte',
    'LBL_SECURITY_DESC' => 'Odaberite sledeće što NE SMIJE biti dopušteno putem dolazne e-pošte ili prikazano u modulu e-pošte.',
    'LBL_SECURITY_APPLET' => 'Applet oznaka',
    'LBL_SECURITY_BASE' => 'Bazna oznaka',
    'LBL_SECURITY_EMBED' => 'Ugrađena oznaka',
    'LBL_SECURITY_FORM' => 'Oznaka obrasca',
    'LBL_SECURITY_FRAME' => 'Oznaka okvira',
    'LBL_SECURITY_FRAMESET' => 'Oznaka skupa okvira',
    'LBL_SECURITY_IFRAME' => 'Oznaka iFrame',
    'LBL_SECURITY_IMPORT' => 'Oznaka uvoza',
    'LBL_SECURITY_LAYER' => 'Oznaka sloja',
    'LBL_SECURITY_LINK' => 'Oznaka poveznice',
    'LBL_SECURITY_OBJECT' => 'Oznaka objekta',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Odaberite zadane minimalne sigurnosne postavke Outlooka (greške na strani ispravnog prikaza).',
    'LBL_SECURITY_STYLE' => 'Oznaka stila',
    'LBL_SECURITY_TOGGLE_ALL' => 'Uključi sve opcije',
    'LBL_SECURITY_XMP' => 'Oznaka Xmp',
    'LBL_YES' => 'Yes',
    'LBL_NO' => 'Ne',
    'LBL_PREPEND_TEST' => '[Test]:',
    'LBL_SEND_ATTEMPTS' => 'Pokušaji slanja',
    'LBL_OUTGOING_SECTION_HELP' => 'Konfigurirajte zadani server odlazne e-pošte za slanje notifikacija e-pošte, uključujući upozorenja tijeka rada.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kada je ova opcija uključena, svi korisnici će moći slati poštu koristeći isti račun<br>za izlaznu poštu koji se koristi za slanje sistemskih upozorenja i obavijesti. Ako ova opcija nije uključena,<br> korisnici će i dalje moći koristiti server izlazne pošte ali nakon što unesu podatke o svom korisničkom računu.',
    'LBL_FROM_ADDRESS_HELP' => 'When enabled, the assigning user\\\'s name and email address will be included in the From field of the email. This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
    'LBL_HELP' => 'Pomoć' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'View Outbound Email Accounts',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
