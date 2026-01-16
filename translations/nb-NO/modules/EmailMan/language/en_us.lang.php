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
    'LBL_SEND_DATE_TIME' => 'Sendt Dato',
    'LBL_IN_QUEUE' => 'Underveis',
    'LBL_IN_QUEUE_DATE' => 'Kø-dato',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Kun verdier i heltall er tillatt for e-poster sendt i partier',

    'LBL_ATTACHMENT_AUDIT' => 'ble sendt. Den ble ikke doblet lokalt for å bevare diskbruken.',
    'LBL_CONFIGURE_SETTINGS' => 'Konfigurér',
    'LBL_CUSTOM_LOCATION' => 'Tillat velger',
    'LBL_DEFAULT_LOCATION' => 'Standard',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Slett beslektede Notater & vedlegg med slettede E-postmeldinger',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Konfigurasjon utgående post',
    'LBL_EMAILS_PER_RUN' => 'Antall e-post sendt per batch:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Kampanjer',
    'LBL_LIST_FORM_TITLE' => 'Kø',
    'LBL_LIST_FROM_NAME' => 'Avsendernavn',
    'LBL_LIST_IN_QUEUE' => 'Underveis',
    'LBL_LIST_MESSAGE_NAME' => 'Markedsføringsmelding',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Mottakers e-post',
    'LBL_LIST_RECIPIENT_NAME' => 'Mottakers navn',
    'LBL_LIST_SEND_ATTEMPTS' => 'Sendte forsøk',
    'LBL_LIST_SEND_DATE_TIME' => 'Sendt på',
    'LBL_LIST_USER_NAME' => 'Brukernavn',
    'LBL_LOCATION_ONLY' => 'Beliggenhet',
    'LBL_LOCATION_TRACK' => 'Plassering for kampanjeforfølgelsefiler (som campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Behold kopier av kampanje- beskjeder',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Ønsker du å lagre ferdige kopier av <bold> e-postmelding sendt under alle kampanjene? <bold> Vi anbefaler og standard til nei </bold>. Ved å velge nei, vil kun de sendte malene, og de nødvendige variabler for å gjenskape den enkelte melding lagres.',
    'LBL_MAIL_SENDTYPE' => 'Agent for e-post overføring',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Bruk STMP-attestering?',
    'LBL_MAIL_SMTPPASS' => 'Passord:',
    'LBL_MAIL_SMTPPORT' => 'SMTP-port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP-brukernavn:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Velg din e-postleverandør',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! e-post passord',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! e-post ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail passord',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-postadresse',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange passord',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange brukernavn',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Serverport:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_EMAIL_LINK_TYPE' => 'E-postklient',
    'LBL_MARKETING_ID' => 'Markedsførings Id',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'E-post konfigurasjon',
    'LBL_MODULE_TITLE' => 'Administrasjon av kø for utgående e-post',
    'LBL_NOTIFICATION_ON_DESC' => 'Send melding når registre blir tildelt.',
    'LBL_NOTIFY_FROMADDRESS' => 'Fra-adresse:',
    'LBL_NOTIFY_FROMNAME' => '"Fra"-navn:',
    'LBL_NOTIFY_ON' => 'Meldinger på?',
    'LBL_NOTIFY_TITLE' => 'Innstillinger for e-postmeldinger',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Utgående e-postinnstillinger',
    'LBL_RELATED_ID' => 'Beslektet Id',
    'LBL_RELATED_TYPE' => 'Beslektet type',
    'LBL_SEARCH_FORM_TITLE' => 'Søkekø',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Verdien for Config.php konfigurasjons site_url',
    'TXT_REMOVE_ME_ALT' => 'For å fjerne deg selv fra denne e-postlisten, gå til',
    'TXT_REMOVE_ME_CLICK' => 'klikk her',
    'TXT_REMOVE_ME' => 'For å fjerne deg selv fra denne e-postlisten',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Sikkerhetsinnstillinger for e-post',
    'LBL_SECURITY_DESC' => 'Sjekk det følgende som IKKE skal tillates via inngående e-post eller vises i e-postmodulen.',
    'LBL_SECURITY_APPLET' => 'Applet-etikett',
    'LBL_SECURITY_BASE' => 'Baseetikett',
    'LBL_SECURITY_EMBED' => 'Innkapslet etikett',
    'LBL_SECURITY_FORM' => 'Formgi etikett',
    'LBL_SECURITY_FRAME' => 'Innram etikett',
    'LBL_SECURITY_FRAMESET' => 'Rammesett etikett',
    'LBL_SECURITY_IFRAME' => 'iFrame etikett',
    'LBL_SECURITY_IMPORT' => 'Importér etikett',
    'LBL_SECURITY_LAYER' => 'Lag-etikett',
    'LBL_SECURITY_LINK' => 'Lenke etikett',
    'LBL_SECURITY_OBJECT' => 'Objektetiekett',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Velg Outlooks minste antall forholdsregler (feil ved siden av den korrekte visningen).',
    'LBL_SECURITY_STYLE' => 'Stiletikett',
    'LBL_SECURITY_TOGGLE_ALL' => 'Toggle alle valgmuligheter',
    'LBL_SECURITY_XMP' => 'Xmp-etikett',
    'LBL_YES' => 'Ja',
    'LBL_NO' => 'Nei',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Sendte forsøk',
    'LBL_OUTGOING_SECTION_HELP' => 'Konfigurer standard utgående e-postserver for å sende e-post meldinger inkludert arbeidsflyt varsler',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Når dette alternativet velges kan alle brukere sende e-post fra samme utgående e-post konto som brukes til å sende system-meldinger og -varsler.<br>Hvis alternativet ikke velges, kan brukerne fortsatt benytte den utgående e-postserveren etter å ha lagt inn sin egen kontoinformasjon.',
    'LBL_FROM_ADDRESS_HELP' => 'Når dette er aktivert vil den angitte brukerens navn og e-postadresse stå i Fra-feltet i e-posten. Denne funksjonen vil muligens ikke fungere med SMTP-servere som ikke tillater å sende fra en annen e-postkonto enn serverkontoen.',
    'LBL_HELP' => 'Hjelp' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Vis utgående e-postkontoer',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
);
