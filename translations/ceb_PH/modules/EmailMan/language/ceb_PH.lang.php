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
    'LBL_SEND_DATE_TIME' => 'Padala og Petsa',
    'LBL_IN_QUEUE' => 'Ge prosiso',
    'LBL_IN_QUEUE_DATE' => 'Petsa nga gi-Queue',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Paggamit lamang og mga balur nga integer para ma-specify ang numero sa mga email nga i-send kada batch',

    'LBL_ATTACHMENT_AUDIT' => ' kay na-send na. Wala kini gi-duplicate locally para makadaginot sa paggamit sa disk.',
    'LBL_CONFIGURE_SETTINGS' => 'I-configure ang Settings sa Email',
    'LBL_CUSTOM_LOCATION' => 'Ang user ang mo-define',
    'LBL_DEFAULT_LOCATION' => 'Sinugdanan',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Tangtangon ang may kaparehong notes og mga naka-attach nga adunay gitangtang nga mga Email',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In sa Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Awtomatikong pagpadala og Opt In sa Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Kumpirmaha ang Opt In sa Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Konfigurasyon sa Outgoing Mail',
    'LBL_EMAILS_PER_RUN' => 'Numero sa mga email nga gipadala kada batch:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Mangompanya',
    'LBL_LIST_FORM_TITLE' => 'Queue',
    'LBL_LIST_FROM_NAME' => 'Gikan sa pangalan',
    'LBL_LIST_IN_QUEUE' => 'Ge prosiso',
    'LBL_LIST_MESSAGE_NAME' => 'Mensahe sa Marketing',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Resibo sa Email',
    'LBL_LIST_RECIPIENT_NAME' => 'Resibo sa pangalan',
    'LBL_LIST_SEND_ATTEMPTS' => 'Mga pagsulay sa pagpadala',
    'LBL_LIST_SEND_DATE_TIME' => 'Ipadala sa',
    'LBL_LIST_USER_NAME' => 'Gigamit nga pangalan',
    'LBL_LOCATION_ONLY' => 'Lokasyon',
    'LBL_LOCATION_TRACK' => 'Lokasyon sa campaign tracking nga mga file (pareha sa campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Tipigan ang mga kopya sa mga mensahe sa kampanya:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Gusto ba nimo tipigan ang kompleto nga mga kopya sa <bold>KADA</bold> mensahe sa email nga gipadala sa panahon sa tanang kampanya? <bold>Girekomendar namo ug default sa dili</bold>. Ang pagpili ug dili kay magtipig lamang sa template nga gipadala ug ang gikinahanglan nga mga baryabol para sa pagbuhat ug balik ug mga tinagsa nga mensahe.',
    'LBL_MAIL_SENDTYPE' => 'Ahente sa pagbalhin sa Mail:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gamit og SMTP para Authentication:',
    'LBL_MAIL_SMTPPASS' => 'Password:',
    'LBL_MAIL_SMTPPORT' => 'Port sa SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Server sa SMTP Mail:',
    'LBL_MAIL_SMTPUSER' => 'Username:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pagpili og provider sa imong Email',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Password sa Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID sa Yahoo! Mail',
    'LBL_GMAIL_SMTPPASS' => 'Password sa Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Email Address sa Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Bayloan og Password',
    'LBL_EXCHANGE_SMTPUSER' => 'Bayloan og Username',
    'LBL_EXCHANGE_SMTPPORT' => 'Bayloan og Server Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Bayloan og Server',
    'LBL_EMAIL_LINK_TYPE' => 'Kliyente sa Email',
    'LBL_MARKETING_ID' => 'Magmamalengki',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Mga Kahimtang sa Email',
    'LBL_MODULE_TITLE' => 'Management sa Outbound Email Queue',
    'LBL_NOTIFICATION_ON_DESC' => 'Kung ma-enable, ang mga email kay ipadala sa mga user kung gi-assign ang mga rekord sa ilaha.',
    'LBL_NOTIFY_FROMADDRESS' => '"Gikan sa" Address:',
    'LBL_NOTIFY_FROMNAME' => '"Gikan sa" Pangan:',
    'LBL_NOTIFY_ON' => 'Mga Notifikasyon sa Assignment',
    'LBL_NOTIFY_TITLE' => 'Mga Opsyon sa Email',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Mga Opsyon sa Outbound Email',
    'LBL_RELATED_ID' => 'Ig-labot Id',
    'LBL_RELATED_TYPE' => 'Parehas lang og sulat',
    'LBL_SEARCH_FORM_TITLE' => 'Pagpangita og Queue',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Balur sa Config.php setting site_url',
    'TXT_REMOVE_ME_ALT' => 'Para matangtang imong kaugalingon anhi sa listahan sa email adto sa',
    'TXT_REMOVE_ME_CLICK' => 'pislita diri',
    'TXT_REMOVE_ME' => 'Pata matangtang imong kaugalingon anhi sa listahan sa email ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Settings para sa seguridad sa Email',
    'LBL_SECURITY_DESC' => 'Susiha ang mga mosunod nga dili pwede pinaagi sa InboundEmail o ipakita sa mga Email modyul.',
    'LBL_SECURITY_APPLET' => 'Tag sa Applet',
    'LBL_SECURITY_BASE' => 'Tag sa Base',
    'LBL_SECURITY_EMBED' => 'Tag nga naka-embed',
    'LBL_SECURITY_FORM' => 'Form nga tag',
    'LBL_SECURITY_FRAME' => 'Tag sa Frame',
    'LBL_SECURITY_FRAMESET' => 'Tag sa Frameset',
    'LBL_SECURITY_IFRAME' => 'tag sa iFrame',
    'LBL_SECURITY_IMPORT' => 'Pag-import og tag',
    'LBL_SECURITY_LAYER' => 'Layer nga tag',
    'LBL_SECURITY_LINK' => 'Link nga tag',
    'LBL_SECURITY_OBJECT' => 'Object nga tag',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Pili og default nga kinagamyan sa security settings sa Outlook (ang mga sayup naas kilid sa saktong gipakita).',
    'LBL_SECURITY_STYLE' => 'Style sa tag',
    'LBL_SECURITY_TOGGLE_ALL' => 'I-toggle tanang mga Opsyon',
    'LBL_SECURITY_XMP' => 'Xmp nga tag',
    'LBL_YES' => 'Oo',
    'LBL_NO' => 'Dili',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Mga pagsulay sa pagpadala',
    'LBL_OUTGOING_SECTION_HELP' => 'I-configure ang default outgoing mail server para sa pagpadala og mga notifikasyon sa email, lakip na ang mga alerto sa workflow.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kung kining opsyon ang mapili, tanan nga mga user makahimo og padala sa mga email gamit ang parehong outgoing mail account nga gigamit para makapadala sa sistema og mga notifikasyon og alerto.<br>Kung ang opsyon kay dili pilion, ang mga user kay mamahimo gihapon makagamit sa outgoing mail server pagkahuman sa paghatag sa ilang kaugalingong impormasyon sa account.',
    'LBL_FROM_ADDRESS_HELP' => 'Kung ma-enable, ang naka-assign nga mga user name og email address kay maapil sa From field sa email. Kini nga feature tingalig dili mogana sa SMTP servers nga dili motugot sa pagpadala gikan sa laing email account kaysa sever account.',
    'LBL_HELP' => 'Nangita og tabang' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Tan-awa ang mga Outbound Email Account',
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
