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
    'LBL_SEND_DATE_TIME' => 'Datum pošiljanja',
    'LBL_IN_QUEUE' => 'V procesiranju',
    'LBL_IN_QUEUE_DATE' => 'Datum postavitve v čakalno vrsto',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Dovoljena so le cela števila za število e-sporočil poslanih na paket',

    'LBL_ATTACHMENT_AUDIT' => 'je bilo poslano. Ni bilo shranjeno lokalno zaradi varčevanja s prostorom na disku.',
    'LBL_CONFIGURE_SETTINGS' => 'Nastavi',
    'LBL_CUSTOM_LOCATION' => 'Dovoli izbiro',
    'LBL_DEFAULT_LOCATION' => 'Privzeto',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Izbriši povezane opombe in priponke z izbrisanimi e-sporočili',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Konfiguracija odhodne pošte',
    'LBL_EMAILS_PER_RUN' => 'Število poslane e-pošte po skupinah:',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'Kampanje',
    'LBL_LIST_FORM_TITLE' => 'Vrsta',
    'LBL_LIST_FROM_NAME' => 'Od imena',
    'LBL_LIST_IN_QUEUE' => 'V procesiranju',
    'LBL_LIST_MESSAGE_NAME' => 'Marketing sporočilo',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Naslovnikov e-poštni naslov',
    'LBL_LIST_RECIPIENT_NAME' => 'Naslovnikovo ime',
    'LBL_LIST_SEND_ATTEMPTS' => 'Poskusi pošiljanja',
    'LBL_LIST_SEND_DATE_TIME' => 'Poslano',
    'LBL_LIST_USER_NAME' => 'Uporabniško ime',
    'LBL_LOCATION_ONLY' => 'Lokacija',
    'LBL_LOCATION_TRACK' => 'Mesto kampanjskih datotek za sledenje klikov (primer: campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Obdrži kopije sporočil kampanje:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Would you like to store complete copies of <bold>EACH</bold> email message sent during all campaigns?  <bold>We recommend and default to no</bold>. Choosing no will store only the template that is sent and the needed variables to recreate the individual message.',
    'LBL_MAIL_SENDTYPE' => 'Agent za pošiljanje e-pošte:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Uporabi SMTP avtentikacijo?',
    'LBL_MAIL_SMTPPASS' => 'Geslo:',
    'LBL_MAIL_SMTPPORT' => 'SMTP vrata:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP strežnik:',
    'LBL_MAIL_SMTPUSER' => 'SMTP uporabniško ime:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Izberite vašega ponudnika e-pošte',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail geslo',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail geslo',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email naslov',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange geslo',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange uporabniško ime',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange strežniška vrata',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange strežnik',
    'LBL_EMAIL_LINK_TYPE' => 'Email klient',
    'LBL_MARKETING_ID' => 'Marketing Id',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Poštne nastavitve',
    'LBL_MODULE_TITLE' => 'Upravljanje z odhodnimi e-sporočili v vrsti',
    'LBL_NOTIFICATION_ON_DESC' => 'Pošlje obvestila ko so zapisi dodeljeni.',
    'LBL_NOTIFY_FROMADDRESS' => '&quot;Od&quot; naslov:',
    'LBL_NOTIFY_FROMNAME' => '&quot;Od&quot;  ime:',
    'LBL_NOTIFY_ON' => 'Vključeno obveščanje?',
    'LBL_NOTIFY_TITLE' => 'Možnosti obveščanja po E-pošti',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Možnosti odhodnih sporočil',
    'LBL_RELATED_ID' => 'Povezani Id',
    'LBL_RELATED_TYPE' => 'Povezan tip',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje po čakalni vrsti',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Vrednost Config.php nastavitve site_url',
    'TXT_REMOVE_ME_ALT' => 'Za odstranitev vašega naslova s tega seznama pojdite na',
    'TXT_REMOVE_ME_CLICK' => 'kliknite tukaj',
    'TXT_REMOVE_ME' => 'Za odstranitev vašega naslova s tega seznama e-naslovov ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'E-poštne varnostne nastaqvitve',
    'LBL_SECURITY_DESC' => 'Preverite naslednje, ki NE SME biti dovoljeno z dohodno e-pošto ali prikazano v e-mail modulu.',
    'LBL_SECURITY_APPLET' => 'Applet tag',
    'LBL_SECURITY_BASE' => 'Osnovni zavihek',
    'LBL_SECURITY_EMBED' => 'Embed tag',
    'LBL_SECURITY_FORM' => 'Form tag',
    'LBL_SECURITY_FRAME' => 'Frame tag',
    'LBL_SECURITY_FRAMESET' => 'Frameset tag',
    'LBL_SECURITY_IFRAME' => 'iFrame tag',
    'LBL_SECURITY_IMPORT' => 'Uvozi tag',
    'LBL_SECURITY_LAYER' => 'Layer tag',
    'LBL_SECURITY_LINK' => 'Povezani tag',
    'LBL_SECURITY_OBJECT' => 'Object tag',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Select Outlook default minimum security settings (errs on the side of correct display).',
    'LBL_SECURITY_STYLE' => 'Style tag',
    'LBL_SECURITY_TOGGLE_ALL' => 'Vse možnosti',
    'LBL_SECURITY_XMP' => 'Xmp tag',
    'LBL_YES' => 'Da',
    'LBL_NO' => 'Ne',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Poskusi pošiljanja',
    'LBL_OUTGOING_SECTION_HELP' => 'Nastavite privzeti odhodni poštni strežnik za email obvestila in opozorila delovnih tokov.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts.<br> If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_FROM_ADDRESS_HELP' => 'When enabled, the assigning user\\\'s name and email address will be included in the From field of the email. This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
    'LBL_HELP' => 'Pomoč' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'View Outbound Email Accounts',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
);
