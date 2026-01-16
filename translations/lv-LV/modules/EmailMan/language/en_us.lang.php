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
    'LBL_SEND_DATE_TIME' => 'Nosūtīšanas datums',
    'LBL_IN_QUEUE' => 'Apstrādē',
    'LBL_IN_QUEUE_DATE' => 'Rindā ielikšanas datums',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'E-pastu skaitu pakās var norādīt  tikai ar veselu skaitli.',

    'LBL_ATTACHMENT_AUDIT' => 'tika nosūtīts.  Diska vietas taupīšanas nolūkos tas netika dublēts lokāli.',
    'LBL_CONFIGURE_SETTINGS' => 'Konfigurēt e-pasta uzstādījumus',
    'LBL_CUSTOM_LOCATION' => 'Lietotāja definēta',
    'LBL_DEFAULT_LOCATION' => 'Noklusētā',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Kopā ar E-pastiem dzēst arī saistītās piezīmes un pielikumus',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Izejošā pasta konfigurēšana',
    'LBL_EMAILS_PER_RUN' => 'Vienā pakā sūtāmo e-pastu skaits:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Kampaņa',
    'LBL_LIST_FORM_TITLE' => 'Rindā',
    'LBL_LIST_FROM_NAME' => 'No vārda',
    'LBL_LIST_IN_QUEUE' => 'Apstrādē',
    'LBL_LIST_MESSAGE_NAME' => 'Marketinga ziņa',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Saņēmēja e-pasts',
    'LBL_LIST_RECIPIENT_NAME' => 'Saņēmēja vārds',
    'LBL_LIST_SEND_ATTEMPTS' => 'Nosūtīšanas mēģinājumi',
    'LBL_LIST_SEND_DATE_TIME' => 'Kad nosūtīt',
    'LBL_LIST_USER_NAME' => 'Lietotāja vārds',
    'LBL_LOCATION_ONLY' => 'Novietojums',
    'LBL_LOCATION_TRACK' => 'Kampaņas atsekošanas failu novietojums (piem. campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Saglabāt kampaņas ziņu kopijas:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Vai vēlaties saglabāt pilnu kopiju <bold>ikvienam</bold> e-pasta ziņojumam, kas nosūtīts kampaņas laikā?  <bold>Ieteicams un pēc noklusējuma ir uzstādīts Nē.</bold>. Izvēloties Nē, tiek saglabāta e-pasta sagatave un mainīgo vērtības, kas vajadzīgas lai sagatavotu personīgu e-pastu.',
    'LBL_MAIL_SENDTYPE' => 'Pasta pārraides aģents:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Lietot SMTP autentifikāciju?',
    'LBL_MAIL_SMTPPASS' => 'SMTP parole:',
    'LBL_MAIL_SMTPPORT' => 'SMTP ports:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP serveris:',
    'LBL_MAIL_SMTPUSER' => 'SMTP lietotājvārds:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Izvēlieties e-pasta pakalpojumu sniedzēju',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! E-pasta parole',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Parole',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-pasta adrese',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange parole',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange lietotājvārds',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange servera ports',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange serveris',
    'LBL_EMAIL_LINK_TYPE' => 'E-pasta klients',
    'LBL_MARKETING_ID' => 'Marketinga Id',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'E-pasta iestatījumi',
    'LBL_MODULE_TITLE' => 'Izejošo E-pastu rindas vadība',
    'LBL_NOTIFICATION_ON_DESC' => 'Ja aktivēts, tad lietotājiem tiek nosūtītas notifikācijas par ierakstu piešķiršanu.',
    'LBL_NOTIFY_FROMADDRESS' => 'Sūtītāja adrese:',
    'LBL_NOTIFY_FROMNAME' => 'Sūtītāja vārds:',
    'LBL_NOTIFY_ON' => 'Notifikāciju sūtīšana',
    'LBL_NOTIFY_TITLE' => 'E-pasta notifikāciju opcijas',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Izejošo E-pastu opcijas',
    'LBL_RELATED_ID' => 'Saistīts ar ID',
    'LBL_RELATED_TYPE' => 'Saistītais tips',
    'LBL_SEARCH_FORM_TITLE' => 'Rindu meklējums',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Config.php parametra site_url vērtība',
    'TXT_REMOVE_ME_ALT' => 'Lai izņemtu sevi no e-pasta saņēmēju saraksta, ejiet uz',
    'TXT_REMOVE_ME_CLICK' => 'klikšķiniet šeit',
    'TXT_REMOVE_ME' => 'Lai izņemtu sevi no e-pasta saņēmēju saraksta,',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'E-pasta drošības uzstādījumi',
    'LBL_SECURITY_DESC' => 'Pārbaudiet sekojošo, kas var nebūt atļauts ienākošajiem e-pastiem vai attēlošanai e-pastu modulī.',
    'LBL_SECURITY_APPLET' => 'Appletu tags',
    'LBL_SECURITY_BASE' => 'Bāzes tags',
    'LBL_SECURITY_EMBED' => 'Iegultais tags',
    'LBL_SECURITY_FORM' => 'Formu tags',
    'LBL_SECURITY_FRAME' => 'Rāmja tags',
    'LBL_SECURITY_FRAMESET' => 'Rāmju komplekta tags',
    'LBL_SECURITY_IFRAME' => 'iFrame tags',
    'LBL_SECURITY_IMPORT' => 'Importēšanas tags',
    'LBL_SECURITY_LAYER' => 'Slāņa tags',
    'LBL_SECURITY_LINK' => 'Saišu tags',
    'LBL_SECURITY_OBJECT' => 'Objekta tags',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Izvēlieties Outlook minimālos drošības uzstādījumus.',
    'LBL_SECURITY_STYLE' => 'Stilu tags',
    'LBL_SECURITY_TOGGLE_ALL' => 'Pārslēgt visas opcijas',
    'LBL_SECURITY_XMP' => 'Xmp tags',
    'LBL_YES' => 'Yes',
    'LBL_NO' => 'No',
    'LBL_PREPEND_TEST' => '[Tests]:',
    'LBL_SEND_ATTEMPTS' => 'Nosūtīšanas mēģinājumi',
    'LBL_OUTGOING_SECTION_HELP' => 'Konfigurējiet noklusēto izejošā e-pasta serveri notifikāciju un darbplūsmu ziņojumu sūtīšanai.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Ja šī opcija ir atzīmēta, visi lietotāji var sūtīt e-pastus, izejošām e-pastam lietojot to pašu kontu, kas izmantots sistēmas ziņojumu un brīdinājumu sūtīšanai.<br>Ja opcija netiek atzīmēta, lietotājs var izmantot to pašu izejošā e-pasta serveri, kad ir norādījis sava e-pasta konta informāciju.',
    'LBL_FROM_ADDRESS_HELP' => 'Pēc aktivizēšanas lietotāja vārds un e-pasta adrese tiks norādīta e-pasta sūtītāja lauciņā. Šī funkcija var nestrādāta ar SMTP serveriem, kas neatbalsta e-pasta sūtīšanu cita e-pasta konta vārdā.',
    'LBL_HELP' => 'Palīdzība' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'View Outbound Email Accounts',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
);
