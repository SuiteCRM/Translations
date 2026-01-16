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
    'LBL_SEND_DATE_TIME' => 'Araw na ipinasa',
    'LBL_IN_QUEUE' => 'Nasa pagpapaproseso',
    'LBL_IN_QUEUE_DATE' => 'Araw na Queued',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Gumamit lamang ng mga integer na halaga para tukuyin ang mga numero ng mga email na ipinadala kada batch',

    'LBL_ATTACHMENT_AUDIT' => ' ay ipinadala. Hindi ito lokal na dinuplikado para makatipid sa paggamit ng disk.',
    'LBL_CONFIGURE_SETTINGS' => 'I-configure ang Settings sa Email',
    'LBL_CUSTOM_LOCATION' => 'Ang tinukoy ay gamitin',
    'LBL_DEFAULT_LOCATION' => 'Naka-default',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Burahin ang may kaparehong notes at mga naka-attach na may buradong emails',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Settings sa Opt In',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Awtomatikong padalhan ng Opt In sa Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Kumpirmahin ang Opt In sa Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'May papalabas na Kumpigurasyon sa Mail',
    'LBL_EMAILS_PER_RUN' => 'Ang mga numero ng email ay ipadala bawat batch:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Kampanya',
    'LBL_LIST_FORM_TITLE' => 'Queue',
    'LBL_LIST_FROM_NAME' => 'Mula sa pangalan',
    'LBL_LIST_IN_QUEUE' => 'Nasa pagpapaproseso',
    'LBL_LIST_MESSAGE_NAME' => 'Mensahe ng Marketing',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Email ng Tatanggap',
    'LBL_LIST_RECIPIENT_NAME' => 'Pangalan ng Tumatanggap',
    'LBL_LIST_SEND_ATTEMPTS' => 'Mga pagtangka sa pagpadala',
    'LBL_LIST_SEND_DATE_TIME' => 'Ipadala sa',
    'LBL_LIST_USER_NAME' => 'Gamit na Pangalan',
    'LBL_LOCATION_ONLY' => 'Ang lokasyon',
    'LBL_LOCATION_TRACK' => 'Lokasyon ng campaign tracking files (katulad ng campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Panatilihin ang mgag kopya ng mga mensahe ng kampanya:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Gusto mo bang maglagay ng kumpletong kopya ng <bold>BAWAT</bold> napadalang mensahe na email sa panahon ng lahat ng mga kampanya? <bold>Inirekomenda namin at i-default sa hindi</bold>. Ang pagpili ng hindi ay makakatago lamang ng template na naipadala at ang kinakailangan na mga variable para makagawa ulit ng indibidwal na mensahe.',
    'LBL_MAIL_SENDTYPE' => 'Ang paglipat ng mensahe sa ahente:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gumamit ng Awtentikasyon sa SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Ang Password:',
    'LBL_MAIL_SMTPPORT' => 'Ang port ng SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Mail Server ng SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Username:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pumili ng taga-pagbigay ng Email',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Password sa Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID sa Yahoo! Mail',
    'LBL_GMAIL_SMTPPASS' => 'Password sa Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Email Address sa Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Mag-exchange ng Password',
    'LBL_EXCHANGE_SMTPUSER' => 'Ipalit ang Username',
    'LBL_EXCHANGE_SMTPPORT' => 'Ipalit ang Server Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Ipalit ang Server',
    'LBL_EMAIL_LINK_TYPE' => 'Kliyente ng Email',
    'LBL_MARKETING_ID' => 'Marketing Id',
    'LBL_MODULE_ID' => 'Ang EmailMan',
    'LBL_MODULE_NAME' => 'Ang mga setting ng email',
    'LBL_MODULE_TITLE' => 'Outbound Email Queue Management',
    'LBL_NOTIFICATION_ON_DESC' => 'Kapag napagana, ang mga email ay napadala sa mga gumagamit kapag ang mga talaan ay naitalaga sa kanila.',
    'LBL_NOTIFY_FROMADDRESS' => '"Mula" sa Address:',
    'LBL_NOTIFY_FROMNAME' => 'Pangalan mula sa:',
    'LBL_NOTIFY_ON' => 'Ang mga Notipikasyon ng Itinalaga',
    'LBL_NOTIFY_TITLE' => 'Ang mga Pagpipilian ng Email',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Mga Pagpipilian ng Papalabas na Email',
    'LBL_RELATED_ID' => 'Id na may Kaugnayan',
    'LBL_RELATED_TYPE' => 'Uri ng mga may Kaugnayan',
    'LBL_SEARCH_FORM_TITLE' => 'Queque na Paghanap',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Ang halaga ng Config.php sa pagtatakda ng lugar_url',
    'TXT_REMOVE_ME_ALT' => 'Para alisin ang sarili galing sa listahan ng email na ito pumunta sa',
    'TXT_REMOVE_ME_CLICK' => 'i-click dito',
    'TXT_REMOVE_ME' => 'Para alisin ang sarili sa listahan ng email ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Ang mga setting ng email security',
    'LBL_SECURITY_DESC' => 'Suriin ang sumusunod na HINDI dapat payagan gamit ang InboundEmail o naipakita na sa mga Email na module.',
    'LBL_SECURITY_APPLET' => 'Tag na applet',
    'LBL_SECURITY_BASE' => 'Basihan na tag',
    'LBL_SECURITY_EMBED' => 'Nakalagay na tag',
    'LBL_SECURITY_FORM' => 'Tag na form',
    'LBL_SECURITY_FRAME' => 'Tag na frame',
    'LBL_SECURITY_FRAMESET' => 'Tag na frameset',
    'LBL_SECURITY_IFRAME' => 'tag na iFrame',
    'LBL_SECURITY_IMPORT' => 'Tag na Import',
    'LBL_SECURITY_LAYER' => 'Tag na Layer',
    'LBL_SECURITY_LINK' => 'Tag na Link',
    'LBL_SECURITY_OBJECT' => 'Tag na bagay',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Piliin ang mga setting na Outlook default minimum security (ang pagkamali sa gilid ng saktong pinakita).',
    'LBL_SECURITY_STYLE' => 'Tag na istayl',
    'LBL_SECURITY_TOGGLE_ALL' => 'I-toggle lahat ng mga pagpipilian',
    'LBL_SECURITY_XMP' => 'Xmp tag',
    'LBL_YES' => 'Oo',
    'LBL_NO' => 'Hindi',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Mga pagtangka sa pagpadala',
    'LBL_OUTGOING_SECTION_HELP' => 'I-configure ang default na papalabas na mail server para sa pagpadala ng mga notipikasyon ng email, kabilang ang mga alerto ng workflow.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kapag ang opsyon na ito ay napili, ang lahat ng mga gumagamit ay maaaring makapagpadala ng mga email gamit ang kaparehong papalabas<br> na mail account na ginamit para makapagpadala ng mga notipikasyon sa sistema at mga alerto. Kung ang opsyon ay hindi napili,<br> ang mga gumagamit ay maaari paring makagamit sa papalabas na mail server matapos makapagbigay ng impormasyon sa kanilang sariling account.',
    'LBL_FROM_ADDRESS_HELP' => 'Kapag pinagana, ang itinalagang pangalan ng user\\\'s at email address ay kasali sa From field ng email. Ang itinampok ay maaaring hindi gumana kasama ang SMTP na mga server na hindi papayag ipadala galing sa iba\'t-ibang email account kaysa sa server account.',
    'LBL_HELP' => 'Saklolo' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Tingnan ang Outbound Email Accounts',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
);
