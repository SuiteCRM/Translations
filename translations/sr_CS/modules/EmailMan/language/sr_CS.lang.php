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
    'LBL_IN_QUEUE_DATE' => 'Zakazani datum',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Koristite samo celobrojne vrednosti odredite broj elektronskih poruka pri grupnom slanju',

    'LBL_ATTACHMENT_AUDIT' => ' nije poslat. Nije dupliciran lokalno kako bi se uštedelo na prostoru.',
    'LBL_CONFIGURE_SETTINGS' => 'Konfiguriši podešavanja elektronske pošte',
    'LBL_CUSTOM_LOCATION' => 'Dozvoljeno je označiti',
    'LBL_DEFAULT_LOCATION' => 'Podrazumevano',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Sa obrisanim e-porukama obriši povezane beleške i dodatke',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Konfiguracija Servera za odlazeću Elektronsku poštu',
    'LBL_EMAILS_PER_RUN' => 'Broj e-mail-ova poslat po grupi:',
    'LBL_ID' => 'ID broj',
    'LBL_LIST_CAMPAIGN' => 'Kampanja',
    'LBL_LIST_FORM_TITLE' => 'Čekanje',
    'LBL_LIST_FROM_NAME' => 'Ime pošiljaoca',
    'LBL_LIST_IN_QUEUE' => 'U procesu',
    'LBL_LIST_MESSAGE_NAME' => 'Marketinška poruka',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Elektronska pošta primaoca',
    'LBL_LIST_RECIPIENT_NAME' => 'Ime primaoca',
    'LBL_LIST_SEND_ATTEMPTS' => 'Pokušaj slanja',
    'LBL_LIST_SEND_DATE_TIME' => 'Poslati na',
    'LBL_LIST_USER_NAME' => 'Korisničko ime',
    'LBL_LOCATION_ONLY' => 'Lokacija',
    'LBL_LOCATION_TRACK' => 'Lokacija datoteka koje prate kampanju (poput campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Zadrži kopije poruke kampanja:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Da li želite da sačuvate cele kopije <bold>SVAKE</bold> elektronske poruke za vreme trajanja kampanje?  <bold>Mi Vam preporučujemo i postavljamo vrednost na \"Ne\"</bold>.  Odabiranjem opcije \"Ne\" sačuvaće se samo šabloni koji su poslati i promenljive koje su potrebne za kreiranje individualne poruke.',
    'LBL_MAIL_SENDTYPE' => 'Agent za transfer elektronske pošte:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Koristi SMTP Autorizaciju?',
    'LBL_MAIL_SMTPPASS' => 'Lozinka:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Korisničko ime:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Izaberite provajdera elektronske pošte',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Lozinka za Yahoo! elektronsku poštu:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID za Yahoo! elektronsku poštu:',
    'LBL_GMAIL_SMTPPASS' => 'Lozinka za Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Gmail adresa elektronske pošte:',
    'LBL_EXCHANGE_SMTPPASS' => 'Lozinka za Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Korisničko ime za Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Port Exchange Servera',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server',
    'LBL_EMAIL_LINK_TYPE' => 'Email klijent',
    'LBL_MARKETING_ID' => 'Redni broj Marketinga',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Email podešavanja',
    'LBL_MODULE_TITLE' => 'Upravljanje redom odlazećih elektronskih poruka',
    'LBL_NOTIFICATION_ON_DESC' => 'Šalje korisnicima elektronsku poruku kao obaveštenje kada im je zapis dodeljen.',
    'LBL_NOTIFY_FROMADDRESS' => 'Adresa "Pošiljaoca":',
    'LBL_NOTIFY_FROMNAME' => 'Ime pošiljaoca:',
    'LBL_NOTIFY_ON' => 'Uključi obaveštavanje?',
    'LBL_NOTIFY_TITLE' => 'Opcije obaveštavanja putem elektronske pošte',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Opcije odlazećih poruka',
    'LBL_RELATED_ID' => 'Povezani ID broj',
    'LBL_RELATED_TYPE' => 'Tip veze',
    'LBL_SEARCH_FORM_TITLE' => 'Pretaraga liste čekanja',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Vrednost Config.php podešavanja site_url',
    'TXT_REMOVE_ME_ALT' => 'Da bi sebe uklonili iz ove liste čekanja idite na',
    'TXT_REMOVE_ME_CLICK' => 'kliknite ovde',
    'TXT_REMOVE_ME' => 'Da bi sebe uklonili iz ove liste čekanja ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Podešavanja sigurnosti za elektronske poruke',
    'LBL_SECURITY_DESC' => 'Proverite sledeće što NE SME biti dozvoljeno kod dolazeće elektronske pošte ili prikazano u modulu elektronskih poruka.',
    'LBL_SECURITY_APPLET' => 'Oznaka apleta',
    'LBL_SECURITY_BASE' => 'Osnovna oznaka',
    'LBL_SECURITY_EMBED' => 'Utisnuta oznaka',
    'LBL_SECURITY_FORM' => 'Oznaka formulara',
    'LBL_SECURITY_FRAME' => 'Oznaka okvira',
    'LBL_SECURITY_FRAMESET' => 'Oznaka postavke okvira',
    'LBL_SECURITY_IFRAME' => 'Oznaka za iFrame',
    'LBL_SECURITY_IMPORT' => 'Oznaka uvoza',
    'LBL_SECURITY_LAYER' => 'Oznaka sloja',
    'LBL_SECURITY_LINK' => 'Oznaka linka',
    'LBL_SECURITY_OBJECT' => 'Oznaka objekta',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Izaberite podrazumevane minimalne mere predostrožnosti u Outlook-u (greška sa strane u odnosu na tačan prikaz).',
    'LBL_SECURITY_STYLE' => 'Oznaka stila',
    'LBL_SECURITY_TOGGLE_ALL' => 'Promeni sve opcije',
    'LBL_SECURITY_XMP' => 'Xmp oznaka',
    'LBL_YES' => 'Da',
    'LBL_NO' => 'Ne',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Pokušaj slanja',
    'LBL_OUTGOING_SECTION_HELP' => 'Konfigurišite podrazumevani server za odlazeću elektronsku poštu za potrebe obaveštenja elektronskom poštom, uključujući obaveštenja radnog toka.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kada je ova opcija odabrana, svi korisnici će biti u mogućnosti da šalju elektonsku poštu koristeći isti<br>nalog za odlazeću elektronsku poštu koji se koristi za upozorenja i obaveštenja. Ako ova opcija nije odabrana,<br>korisnici mogu da koriste server za odlazeću elektronsku poštu kada obezebede informacije o njihovom nalogu.',
    'LBL_FROM_ADDRESS_HELP' => 'Kada bude omogućena, korisnikovo ime i adresa e-pošte će biti uključena u polje From iz e-pošte. Ova odlika možda neće raditi sa SMTP serverima koji ne dozvoljavaju slanje e-pošte sa drugih adresa koje nisu u domenu koji koristi baš taj server.',
    'LBL_HELP' => 'Pomoć' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Pogledaj odlazne email naloge',
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
